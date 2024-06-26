<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    $flag = 'select';
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            // if (isset($_POST["class_id"]) && $_POST["class_id"]) {
            //     $where .= " AND mm.class_id = :class_id";
            //     $total_params[":class_id"] = $_POST["class_id"];
            // }
            // if (isset($_POST["user_name"]) && $_POST["user_name"]) {
            //     $where .= " AND mm.user_name like '%{$_POST['user_name']}%'";
            // }
            // if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
            //     $where .= " AND mm.membership_id = :membership_id";
            //     $total_params[":membership_id"] = $_POST["membership_id"];
            // }
            // if (isset($_POST["status"]) && $_POST["status"]) {
            //     $where .= " AND mm.status = :status";
            //     $total_params[":status"] = $_POST["status"];
            // }
            try {
                $sql = "SELECT  *
                                , ROW_NUMBER() OVER (ORDER BY cm.class_id asc) AS rn
                        FROM    bt_match_cm cm
                        LEFT JOIN bt_class bc ON bc.class_id = cm.class_id
                        LEFT JOIN bt_membership bm2 ON bm2.membership_id = cm.membership_id

                        WHERE   1 = 1
                        {$where}
                        order by cm.class_id asc
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