<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/class/class.pdo.php");
    if (!isset($_SESSION)) {
        session_start();
    }

    function get_user_id () {
        global $db;
        // 오늘 날짜를 가져옵니다.
        $today = date('ymd');

        // SQL 쿼리를 준비합니다.
        $sql = "SELECT MAX(user_id) AS max_id
                FROM bt_member
                WHERE user_id LIKE '{$today}%'";

        // 쿼리를 준비하고 바인드합니다.
        $db->prepare($sql);
        $res = $db->single();

        // 가장 큰 user_id를 가져와 1을 더합니다.
        $new_user_id = isset($res['max_id']) ? $res['max_id'] + 1 : $today.'001';

        return $new_user_id;
    }

    function get_user_membership ($user_id, $select_dt) {
        global $db;

        $where = "";
        $total_params = [];
        $where .= " AND mm.user_id = :user_id";
        $total_params[":user_id"] = $user_id;
        $where .= " AND '{$select_dt}' BETWEEN mm.membership_start AND mm.membership_end ";
        
        $sql = "SELECT  user_membership_id
                        , bm2.membership_name
                FROM    bt_match_mm mm
                LEFT JOIN bt_membership bm2 on bm2.membership_id = mm.membership_id
                LEFT JOIN bt_member bm on bm.user_id = mm.user_id
                WHERE   1 = 1
                ANd     mm.status = 'Y'
                {$where}
        ";
        $db->prepare($sql);
        $db->bind_array($total_params);
        $res = $db->resultset();
        $response = [
            "data" => $res,
        ];

        return $response;
    }

    function get_class_list () {
        global $db;

        $sql = "SELECT  *
                FROM    bt_class
                WHERE   status = 'Y'
        ";
        $db->prepare($sql);
        $res = $db->resultset();
        $response = [
            "data" => $res,
        ];

        return $response;
    }

    function get_user_list () {
        global $db;

        $sql = "SELECT  *
                FROM    bt_member
                WHERE   user_status = 'Y'
                AND     user_auth = 'US'
        ";
        $db->prepare($sql);
        $res = $db->resultset();
        $response = [
            "data" => $res,
        ];

        return $response;
    }

    function get_membership_list () {
        global $db;

        $sql = "SELECT  *
                FROM    bt_membership
                WHERE   status = 'Y'
        ";
        $db->prepare($sql);
        $res = $db->resultset();
        $response = [
            "data" => $res,
        ];

        return $response;
    }