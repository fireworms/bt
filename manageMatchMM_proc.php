<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["user_id"]) && $_POST["user_id"]) {
                $where .= " AND mm.user_id = :user_id";
                $total_params[":user_id"] = $_POST["user_id"];
            }
            if (isset($_POST["user_name"]) && $_POST["user_name"]) {
                $where .= " AND mm.user_name like '%{$_POST['user_name']}%'";
            }
            if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
                $where .= " AND mm.membership_id = :membership_id";
                $total_params[":membership_id"] = $_POST["membership_id"];
            }
            if (isset($_POST["status"]) && $_POST["status"]) {
                $where .= " AND mm.status = :status";
                $total_params[":status"] = $_POST["status"];
            }
            $sql = "SELECT  mm.*
                            , bm2.membership_name
                            , bm.user_name
                            -- , CONCAT(CONCAT(bc.class_name, ' / '), bm.membership_name) as class_membership_name
                            , ROW_NUMBER() OVER (ORDER BY mm.user_id asc) AS rn
                            , case
                                when mm.status = 'Y' then '활성'
                                when mm.status = 'N' then '비활성'
                            end AS status_text
                    FROM    bt_match_mm mm
                    LEFT JOIN bt_member bm ON bm.user_id = mm.user_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by mm.user_id asc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->resultset();
            $response = [
                "data" => $res,
            ];
            echo json_encode($response);
            break;

        case "insert":
            $user_id                    = $_POST['user_id'];
            $membership_id              = $_POST['membership_id'];
            $membership_start           = $_POST['membership_start'];
            $membership_end             = $_POST['membership_end'];
            $membership_fee             = $_POST['membership_fee'];
            $membership_payment_method  = $_POST['membership_payment_method'];
            $membership_payment         = $_POST['membership_payment'];
            $membership_unpaid_amount   = $_POST['membership_unpaid_amount'];
            $reservation_cnt            = $_POST['reservation_cnt'];
            $memo                       = $_POST['memo'];
            $status                     = isset($_POST['status']) ? $_POST['status'] : 'Y';
            
            $sql = "INSERT  bt_match_mm SET
                            user_id                     = :user_id,
                            membership_id               = :membership_id,
                            membership_start            = :membership_start,
                            membership_end              = :membership_end,
                            membership_fee              = :membership_fee,
                            membership_payment          = :membership_payment,
                            membership_payment_method           = :membership_payment_method,
                            membership_unpaid_amount    = :membership_unpaid_amount,
                            reservation_cnt             = :reservation_cnt,
                            memo                        = :memo,
                            status                      = :status
            ";
            $db->prepare($sql);
            $total_params = [
                ':user_id'                  => $user_id,
                ':membership_id'            => $membership_id,
                ':membership_start'         => $membership_start,
                ':membership_end'           => $membership_end,
                ':membership_fee'           => $membership_fee,                
                ':membership_payment_method'    => $membership_payment_method,
                ':membership_payment'       => $membership_payment,
                ':membership_unpaid_amount' => $membership_unpaid_amount,
                ':reservation_cnt'          => $reservation_cnt,
                ':memo'                     => $memo,
                ':status'                   => $status,

            ];
            $db->bind_array($total_params);
            if ($db->query()) {
                $response = [
                    'status' => 'ok',
                ];
            }
            else {
                $response = [
                    'status' => 'error',
                ];
            }
            
            echo json_encode($response);
            break;

        case "update":
            $user_membership_id         = $_POST['user_membership_id'];
            $user_id                    = $_POST['user_id'];
            $membership_id              = $_POST['membership_id'];
            $membership_start           = $_POST['membership_start'];
            $membership_end             = $_POST['membership_end'];
            $membership_fee             = $_POST['membership_fee'];
            $membership_payment_method  = $_POST['membership_payment_method'];
            $membership_payment         = $_POST['membership_payment'];
            $membership_unpaid_amount   = $_POST['membership_unpaid_amount'];
            $reservation_cnt            = $_POST['reservation_cnt'];
            $memo                       = $_POST['memo'];
            
            $sql = "UPDATE  bt_match_mm SET
                            user_id                     = :user_id,
                            membership_id               = :membership_id,
                            membership_start            = :membership_start,
                            membership_end              = :membership_end,
                            membership_fee              = :membership_fee,
                            membership_payment_method   = :membership_payment_method,
                            membership_payment          = :membership_payment,
                            membership_unpaid_amount    = :membership_unpaid_amount,
                            reservation_cnt             = :reservation_cnt,
                            memo                        = :memo
                    WHERE   user_membership_id          = :user_membership_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':user_membership_id'       => $user_membership_id,
                ':user_id'                  => $user_id,
                ':membership_id'            => $membership_id,
                ':membership_start'         => $membership_start,
                ':membership_end'           => $membership_end,
                ':membership_fee'           => $membership_fee,
                ':membership_payment_method'=> $membership_payment_method,
                ':membership_payment'       => $membership_payment,
                ':membership_unpaid_amount' => $membership_unpaid_amount,
                ':reservation_cnt'          => $reservation_cnt,
                ':memo'                     => $memo,
            ];
            $db->bind_array($total_params);
            if ($db->query()) {
                $response = [
                    'status' => 'ok',
                ];
            }
            else {
                $response = [
                    'status' => 'error',
                ];
            }
            
            echo json_encode($response);
            break;
            
        case "update_status":
            $user_membership_id = $_POST['user_membership_id'];
            $status             = $_POST['status'];
            
            $sql = "UPDATE  bt_match_mm SET
                            status              = :status
                    WHERE   user_membership_id  = :user_membership_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':user_membership_id'       => $user_membership_id,
                ':status'                     => $status,
            ];
            $db->bind_array($total_params);
            if ($db->query()) {
                $response = [
                    'status' => 'ok',
                ];
            }
            else {
                $response = [
                    'status' => 'error',
                ];
            }
            
            echo json_encode($response);
            break;
    }
