<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["class_id"]) && $_POST["class_id"]) {
                $where .= " AND class_id = :class_id";
                $total_params[":class_id"] = $_POST["class_id"];
            }
            if (isset($_POST["status"]) && $_POST["status"]) {
                $where .= " AND status = :status";
                $total_params[":status"] = $_POST["status"];
            }
            $sql = "SELECT  *
                            , ROW_NUMBER() OVER (ORDER BY class_id desc) AS rn
                            , case
                                when status = 'Y' then '활성'
                                when status = 'N' then '비활성'
                            end AS status_text
                    FROM    bt_class
                    WHERE   1 = 1
                    {$where}
                    order by class_id desc
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
            $class_id           = $_POST['class_id'];
            $class_name         = $_POST['class_name'];
            $class_base_minute  = $_POST['class_base_minute'];
            $class_base_days    = $_POST['class_base_days'];
            $class_base_first   = $_POST['class_base_first'];
            $class_base_last    = $_POST['class_base_last'];
            $status             = $_POST['status'];
            
            $sql = "INSERT  bt_class SET
                            class_id            = :class_id,
                            class_name          = :class_name,
                            class_base_minute   = :class_base_minute,
                            class_base_days     = :class_base_days,
                            class_base_first    = :class_base_first,
                            class_base_last     = :class_base_last,
                            status              = :status
            ";
            $db->prepare($sql);
            $total_params = [
                ':class_id'         => $class_id,
                ':class_name'       => $class_name,
                ':class_base_minute'=> $class_base_minute,
                ':class_base_days'  => $class_base_days,
                ':class_base_first' => $class_base_first,
                ':class_base_last'  => $class_base_last,
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
            $class_id           = $_POST['class_id'];
            $class_name         = $_POST['class_name'];
            $class_base_minute  = $_POST['class_base_minute'];
            $class_base_days    = $_POST['class_base_days'];
            $class_base_first   = $_POST['class_base_first'];
            $class_base_last    = $_POST['class_base_last'];
            $status             = $_POST['status'];
            
            $sql = "UPDATE  bt_class SET
                            class_name          = :class_name,
                            class_base_minute   = :class_base_minute,
                            class_base_days     = :class_base_days,
                            class_base_first    = :class_base_first,
                            class_base_last     = :class_base_last,
                            status              = :status
                    WHERE   class_id            = :class_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':class_id'         => $class_id,
                ':class_name'       => $class_name,
                ':class_base_minute'=> $class_base_minute,
                ':class_base_days'  => $class_base_days,
                ':class_base_first' => $class_base_first,
                ':class_base_last'  => $class_base_last,
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
