<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["membership_name"]) && $_POST["membership_name"]) {
                $where .= " AND membership_name like '%{$_POST['membership_name']}%'";
            }
            if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
                $where .= " AND membership_id = :membership_id";
                $total_params[":membership_id"] = $_POST["membership_id"];
            }
            if (isset($_POST["status"]) && $_POST["status"]) {
                $where .= " AND status = :status";
                $total_params[":status"] = $_POST["status"];
            }
            $sql = "SELECT  *
                            , ROW_NUMBER() OVER (ORDER BY membership_id desc) AS rn
                            , case
                                when status = 'Y' then '활성'
                                when status = 'N' then '비활성'
                            end AS status_text
                    FROM    bt_membership
                    WHERE   1 = 1
                    {$where}
                    order by membership_id desc
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
            $membership_id              = $_POST['membership_id'];
            $membership_name            = $_POST['membership_name'];
            $reservation_base_cnt       = $_POST['reservation_base_cnt'];
            $reservation_base_deadline  = $_POST['reservation_base_deadline'];
            $reservation_color          = $_POST['reservation_color'];
            $status                     = $_POST['status'];
            
            $sql = "INSERT  bt_membership SET
                            membership_id               = :membership_id,
                            membership_name             = :membership_name,
                            reservation_base_cnt        = :reservation_base_cnt,
                            reservation_base_deadline   = :reservation_base_deadline,
                            reservation_color           = :reservation_color,
                            status                      = :status
            ";
            $db->prepare($sql);
            $total_params = [
                ':membership_id'            => $membership_id,
                ':membership_name'          => $membership_name,
                ':reservation_base_cnt'     => $reservation_base_cnt,
                ':reservation_base_deadline'=> $reservation_base_deadline,
                ':reservation_color'        => $reservation_color,
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
            $membership_id              = $_POST['membership_id'];
            $membership_name            = $_POST['membership_name'];
            $reservation_base_cnt       = $_POST['reservation_base_cnt'];
            $reservation_base_deadline  = $_POST['reservation_base_deadline'];
            $reservation_color          = $_POST['reservation_color'];
            $status                     = $_POST['status'];
            
            $sql = "UPDATE  bt_membership SET
                            membership_name             = :membership_name,
                            reservation_base_cnt        = :reservation_base_cnt,
                            reservation_base_deadline   = :reservation_base_deadline,
                            reservation_color           = :reservation_color,
                            status                      = :status
                    WHERE   membership_id               = :membership_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':membership_id'            => $membership_id,
                ':membership_name'          => $membership_name,
                ':reservation_base_cnt'     => $reservation_base_cnt,
                ':reservation_base_deadline'=> $reservation_base_deadline,
                ':reservation_color'        => $reservation_color,
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
    }
