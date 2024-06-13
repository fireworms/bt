<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["class_id"]) && $_POST["class_id"]) {
                $where .= " AND cm.class_id = :class_id";
                $total_params[":class_id"] = $_POST["class_id"];
            }
            if (isset($_POST["membership_id"]) && $_POST["membership_id"]) {
                $where .= " AND cm.membership_id = :membership_id";
                $total_params[":membership_id"] = $_POST["membership_id"];
            }
            if (isset($_POST["status"]) && $_POST["status"]) {
                $where .= " AND cm.status = :status";
                $total_params[":status"] = $_POST["status"];
            }
            $sql = "SELECT  cm.*, CONCAT(CONCAT(bc.class_name, ' / '), bm.membership_name) as class_membership_name
                            , ROW_NUMBER() OVER (ORDER BY cm.class_id asc) AS rn
                            , case
                                when cm.status = 'Y' then '활성'
                                when cm.status = 'N' then '비활성'
                            end AS status_text
                    FROM    bt_match_cm cm
                    LEFT JOIN bt_class bc ON bc.class_id = cm.class_id
                    LEFT JOIN bt_membership bm ON bm.membership_id = cm.membership_id
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
            break;

        case "insert":
            $class_id       = $_POST['class_id'];
            $membership_id  = $_POST['membership_id'];
            $status         = isset($_POST['status']) ? $_POST['status'] : 'Y';
            
            $sql = "INSERT  bt_match_cm SET
                            class_id        = :class_id,
                            membership_id   = :membership_id,
                            status          = :status
            ";
            $db->prepare($sql);
            $total_params = [
                ':class_id'         => $class_id,
                ':membership_id'    => $membership_id,
                ':status'           => $status,
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
            $prev_class_id      = $_POST['prev_class_id'];
            $prev_membership_id = $_POST['prev_membership_id'];
            $class_id           = $_POST['class_id'];
            $membership_id      = $_POST['membership_id'];
            $status             = $_POST['status'];
            
            $sql = "UPDATE  bt_match_cm SET
                            class_id        = :class_id,
                            membership_id   = :membership_id,
                            status          = :status
                    WHERE   class_id        = :prev_class_id
                    AND     membership_id   = :prev_membership_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':class_id'         => $class_id,
                ':membership_id'    => $membership_id,
                ':prev_class_id'         => $prev_class_id,
                ':prev_membership_id'    => $prev_membership_id,
                ':status'           => $status,
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
