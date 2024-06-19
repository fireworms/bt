<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["p_class_id"]) && $_POST["p_class_id"]) {
                $where .= " AND br.class_id = :class_id";
                $total_params[":class_id"] = $_POST["p_class_id"];
            }
            if (isset($_POST["p_user_id"]) && $_POST["p_user_id"]) {
                $where .= " AND br.user_id = :user_id";
                $total_params[":user_id"] = $_POST["p_user_id"];
            }
            if (isset($_POST["p_start"]) && $_POST["p_start"] && isset($_POST["p_end"]) && $_POST["p_end"]) {
                $where .= " AND br.reservation_dt BETWEEN '{$_POST['p_start']}' AND '{$_POST['p_end']}'";
            }
            
            $sql = "SELECT  br.*
                            , bm.user_name as title
                            , bc.class_name
                            , bm2.membership_name, bm2.reservation_color
                            , CONCAT(reservation_dt, 'T', start_hh, ':', start_mi) AS `start`
                            , CONCAT(reservation_dt, 'T', end_hh, ':', end_mi) AS `end`
                            , case
                                when status_atdc = 'Y' then '출석'
                                when status_atdc = 'N' then '결석'
                                when status_atdc = 'R' then '예약'
                            end AS status_atdc_text
                    FROM    bt_reservation br
                    LEFT JOIN bt_member bm ON bm.user_id = br.user_id
                    LEFT JOIN bt_class bc ON bc.class_id = br.class_id
                    LEFT JOIN bt_match_mm mm ON mm.user_membership_id = br.user_membership_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by br.user_id asc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->resultset();
            $response = [
                "data" => $res,
            ];
            echo json_encode($response);
            break;

        case "select_detail":
            $where = "";
            $total_params = [];
            if (isset($_POST["user_membership_id"]) && $_POST["user_membership_id"]) {
                $where .= " AND br.user_membership_id = :user_membership_id";
                $total_params[":user_membership_id"] = $_POST["user_membership_id"];
            }
            if (isset($_POST["reservation_id"]) && $_POST["reservation_id"]) {
                $where .= " AND br.reservation_id = :reservation_id";
                $total_params[":reservation_id"] = $_POST["reservation_id"];
            }
            
            $sql = "SELECT  br.*
                            , bm.user_name, bm.user_contact 
                            , bc.class_name
                            , bm2.membership_name
                            , mm.membership_start, mm.membership_end, mm.membership_payment, mm.membership_unpaid_amount
                            , mm.reservation_cnt as retention_cnt_rv
                            , CONCAT(reservation_dt, 'T', start_hh, ':', start_mi) AS `start`
                            , CONCAT(reservation_dt, 'T', end_hh, ':', end_mi) AS `end`
                            , case
                                when status_atdc = 'Y' then '출석'
                                when status_atdc = 'N' then '결석'
                                when status_atdc = 'R' then '예약'
                            end AS status_atdc_text
                    FROM    bt_reservation br
                    LEFT JOIN bt_member bm ON bm.user_id = br.user_id
                    LEFT JOIN bt_class bc ON bc.class_id = br.class_id
                    LEFT JOIN bt_match_mm mm ON mm.user_membership_id = br.user_membership_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by br.user_id asc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->single();
            $response = [
                "info1" => $res,
            ];

            $where = "";
            // $total_params = [];
            if (isset($_POST["user_membership_id"]) && $_POST["user_membership_id"]) {
                $where .= " AND br.user_membership_id = :user_membership_id";
                $total_params[":user_membership_id"] = $_POST["user_membership_id"];
            }
            
            $sql = "SELECT  br.*
                            , bm.user_name
                            , bc.class_name
                            , bm2.membership_name
                            , CONCAT(start_hh, ':', start_mi, '~', end_hh, ':', end_mi) AS `reservation_tm`
                            , case
                                when status_atdc = 'Y' then '출석'
                                when status_atdc = 'N' then '결석'
                                when status_atdc = 'R' then '예약'
                            end AS status_atdc_text
                            , case
                                when reservation_id = :reservation_id then 'V'
                                when reservation_id != :reservation_id then ''
                            end AS is_current
                    FROM    bt_reservation br
                    LEFT JOIN bt_member bm ON bm.user_id = br.user_id
                    LEFT JOIN bt_class bc ON bc.class_id = br.class_id
                    LEFT JOIN bt_match_mm mm ON mm.user_membership_id = br.user_membership_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by br.user_id asc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->resultset();
            $attendanceCount = $db->rowCount();
            $remain_cnt_at = $remain_cnt_rv = $response['info1']['retention_cnt_rv'] - $attendanceCount;
            $response['info1']['remain_cnt_at'] = $remain_cnt_at;
            $response['info1']['remain_cnt_rv'] = $remain_cnt_rv;
            $response["info2"] = $res;

            echo json_encode($response);
            break;

        case "select_user_membership":
            $response = get_user_membership($_POST["p_user_id"], $_POST["p_select_dt"]);
            echo json_encode($response);
            break;

        case "insert":
            $reservation_dt     = $_POST['reservation_dt'];
            $start_hh           = $_POST['start_hh'];
            $start_mi           = $_POST['start_mi'];
            $end_hh             = $_POST['end_hh'];
            $end_mi             = $_POST['end_mi'];
            $class_id           = $_POST['class_id'];
            $user_membership_id = $_POST['user_membership_id'];
            $user_id            = $_POST['user_id'];
            $memo               = $_POST['memo'];
            
            $sql = "INSERT  bt_reservation SET
                            reservation_dt      = :reservation_dt,
                            start_hh            = :start_hh,
                            start_mi            = :start_mi,
                            end_hh              = :end_hh,
                            end_mi              = :end_mi,
                            class_id            = :class_id,
                            user_membership_id  = :user_membership_id,
                            user_id             = :user_id,
                            memo                = :memo
            ";
            $db->prepare($sql);
            $total_params = [
                ':reservation_dt'       => $reservation_dt,
                ':start_hh'             => $start_hh,
                ':start_mi'             => $start_mi,
                ':end_hh'               => $end_hh,
                ':end_mi'               => $end_mi,
                ':class_id'             => $class_id,
                ':user_membership_id'   => $user_membership_id,
                ':user_id'              => $user_id,
                ':memo'                 => $memo,
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
            $reservation_id = $_POST['reservation_id'];
            $status_atdc    = $_POST['status_atdc'];
            
            $sql = "UPDATE  bt_reservation SET
                            status_atdc     = :status_atdc
                    WHERE   reservation_id  = :reservation_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':reservation_id'   => $reservation_id,
                ':status_atdc'      => $status_atdc,
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

        case "delete":
            $reservation_id = $_POST['reservation_id'];
            
            $sql = "DELETE  
                    FROm    bt_reservation
                    WHERE   reservation_id  = :reservation_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':reservation_id'   => $reservation_id,
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

        case "select_rv_only":
            $where = "";
            $total_params = [];
            if (isset($_POST["p_class_id"]) && $_POST["p_class_id"]) {
                $where .= " AND br.class_id = :class_id";
                $total_params[":class_id"] = $_POST["p_class_id"];
            }
            if (isset($_POST["p_start"]) && $_POST["p_start"] && isset($_POST["p_end"]) && $_POST["p_end"]) {
                $where .= " AND br.reservation_dt BETWEEN '{$_POST['p_start']}' AND '{$_POST['p_end']}'";
            }
            
            $sql = "SELECT  br.*
                            , bm.user_name as title, bm.user_name
                            , bc.class_name
                            , bm2.membership_name, bm2.reservation_color
                            , CONCAT(reservation_dt, 'T', start_hh, ':', start_mi) AS `start`
                            , CONCAT(reservation_dt, 'T', end_hh, ':', end_mi) AS `end`
                            , case
                                when status_atdc = 'Y' then '출석'
                                when status_atdc = 'N' then '결석'
                                when status_atdc = 'R' then '예약'
                            end AS status_atdc_text
                    FROM    bt_reservation br
                    LEFT JOIN bt_member bm ON bm.user_id = br.user_id
                    LEFT JOIN bt_class bc ON bc.class_id = br.class_id
                    LEFT JOIN bt_match_mm mm ON mm.user_membership_id = br.user_membership_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by br.user_id asc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->resultset();
            $response = [
                "data" => $res,
            ];
            echo json_encode($response);
            break;

        case "select_table":
            $where = "";
            $total_params = [];
            if (isset($_POST["user_id"]) && $_POST["user_id"]) {
                $where .= " AND br.user_id = :user_id";
                $total_params[":user_id"] = $_POST["user_id"];
            }
            if (isset($_POST["status_atdc"]) && $_POST["status_atdc"]) {
                $where .= " AND br.status_atdc = :status_atdc";
                $total_params[":status_atdc"] = $_POST["status_atdc"];
            }
            
            $sql = "SELECT  br.*
                            , ROW_NUMBER() OVER (order by br.class_id asc, br.user_id desc) AS rn
                            , bm.user_name
                            , bc.class_name
                            , bm2.membership_name, bm2.reservation_color
                            , CONCAT(start_hh, ':', start_mi) AS `start_tm`
                            , CONCAT(end_hh, ':', end_mi) AS `end_tm`
                            , case
                                when status_atdc = 'Y' then '출석'
                                when status_atdc = 'N' then '결석'
                                when status_atdc = 'R' then '예약'
                            end AS status_atdc_text
                    FROM    bt_reservation br
                    LEFT JOIN bt_member bm ON bm.user_id = br.user_id
                    LEFT JOIN bt_class bc ON bc.class_id = br.class_id
                    LEFT JOIN bt_match_mm mm ON mm.user_membership_id = br.user_membership_id
                    LEFT JOIN bt_membership bm2 ON bm2.membership_id = mm.membership_id
                    WHERE   1 = 1
                    {$where}
                    order by br.class_id asc, br.user_id desc, br.reservation_dt desc, CONCAT(start_hh, ':', start_mi) desc
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $response = $db->resultset();
            
            echo json_encode($response);
            break;

        case "select_rv_week":
            $where = "";
            $total_params = [];
            if (isset($_POST["class_id"]) && $_POST["class_id"]) {
                $where .= " AND br.class_id = :class_id";
                $total_params[":class_id"] = $_POST["class_id"];
            }
            $startDate = $_POST['p_start'];
            $endDate = $_POST['p_end'];
            

            $sql = "SELECT  COUNT(CASE WHEN status_atdc = 'Y' THEN 1 END) AS cnt_at
                            , COUNT(CASE WHEN status_atdc = 'N' THEN 1 END) AS cnt_ab
                            , COUNT(CASE WHEN status_atdc = 'R' THEN 1 END) AS cnt_rv
                            , COUNT(*) AS cnt_total
                            , reservation_dt
                    FROM    bt_reservation br
                    WHERE   1 = 1
                    {$where}
                    AND     reservation_dt = :reservation_dt
                    order by br.reservation_dt desc
            ";

            $result = [];
            for ($i = 0; $i < 7; $i++) {
                $curDate = date("Y-m-d", strtotime("$endDate - $i days"));
                $total_params[':reservation_dt'] = $curDate;
                $db->prepare($sql);
                $db->bind_array($total_params);
                $response = $db->single();
                
                if ($response['cnt_total'] == 0) {
                    $response = [
                        'reservation_dt' => $curDate,
                        'cnt_at' => 0,
                        'cnt_ab' => 0,
                        'cnt_rv' => 0,
                        'cnt_total' => 0,
                    ];
                }
                $response['is_current'] = $curDate == date('Y-m-d') ? 'V' : '';
                $result[] = $response;
            }
            echo json_encode($result);
            break;
    }