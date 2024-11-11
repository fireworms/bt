<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    
    switch ($flag) {
        case "member_select":
            $where = "";
            $total_params = [];
            // if (isset($_POST["class_id"]) && $_POST["class_id"]) {
            //     $where .= " AND mm.class_id = :class_id";
            //     $total_params[":class_id"] = $_POST["class_id"];
            // }
            if (isset($_POST["user_id"]) && $_POST["user_id"]) {
                $where .= " AND mm.user_id like '%{$_POST['user_id']}%'";
            }
            if (isset($_POST["user_name"]) && $_POST["user_name"]) {
                $where .= " AND mm.user_name like '%{$_POST['user_name']}%'";
            }
            // if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
            //     $where .= " AND mm.membership_id = :membership_id";
            //     $total_params[":membership_id"] = $_POST["membership_id"];
            // }
            // if (isset($_POST["status"]) && $_POST["status"]) {
            //     $where .= " AND mm.status = :status";
            //     $total_params[":status"] = $_POST["status"];
            // }
            try {
                $sql = "SELECT  bm.user_id, bm.user_name, sum(mm.membership_payment) as membership_payment, sum(mm.reservation_cnt) as reservation_cnt
                                , ROW_NUMBER() OVER (ORDER BY bm.user_id desc) AS rn
                        FROM    bt_match_mm mm
                        LEFT JOIN bt_member bm ON bm.user_id = mm.user_id
                        WHERE   1 = 1
                        {$where}
                        group by mm.user_id
                        ORDER BY bm.user_id desc
                ";
                $db->prepare($sql);
                $db->bind_array($total_params);
                $res = $db->resultset();
                $response = [
                    "data" => $res,
                ];
                echo json_encode($response);
            }
            catch (Exception $e) {
                print_r($e);
            }
            
            break;
        case "class_select":
            $where = "";
            $total_params = [];
            // if (isset($_POST["class_id"]) && $_POST["class_id"]) {
            //     $where .= " AND mm.class_id = :class_id";
            //     $total_params[":class_id"] = $_POST["class_id"];
            // }
            if (isset($_POST["class_id"]) && $_POST["class_id"]) {
                $where .= " AND mm.class_id like '%{$_POST['class_id']}%'";
            }
            if (isset($_POST["user_name"]) && $_POST["user_name"]) {
                $where .= " AND mm.user_name like '%{$_POST['user_name']}%'";
            }
            // if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
            //     $where .= " AND mm.membership_id = :membership_id";
            //     $total_params[":membership_id"] = $_POST["membership_id"];
            // }
            // if (isset($_POST["status"]) && $_POST["status"]) {
            //     $where .= " AND mm.status = :status";
            //     $total_params[":status"] = $_POST["status"];
            // }
            try {
                $sql = "SELECT  bc.class_id, bc.class_name, sum(mm.membership_payment) as membership_payment, sum(mm.reservation_cnt) as reservation_cnt
                                , ROW_NUMBER() OVER (ORDER BY bc.class_id desc) AS rn
                        FROM    bt_match_mm mm
                        LEFT JOIN bt_class bc ON bc.class_id = mm.class_id
                        WHERE   1 = 1
                        {$where}
                        group by bc.class_id
                        ORDER BY bc.class_id desc
                ";
                $db->prepare($sql);
                $db->bind_array($total_params);
                $res = $db->resultset();
                $response = [
                    "data" => $res,
                ];
                echo json_encode($response);
            }
            catch (Exception $e) {
                print_r($e);
            }
            
            break;

    }