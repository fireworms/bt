<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $flag = $_POST["flag"];
    switch ($flag) {
        case "select":
            $where = "";
            $total_params = [];
            if (isset($_POST["user_name"]) && $_POST["user_name"]) {
                $where .= " AND user_name like '%{$_POST['user_name']}%'";
            }
            if (isset($_POST["user_id"]) && $_POST["user_id"]) {
                $where .= " AND user_id = :user_id";
                $total_params[":user_id"] = $_POST["user_id"];
            }
            if (isset($_POST["user_status"]) && $_POST["user_status"]) {
                $where .= " AND user_status = :user_status";
                $total_params[":user_status"] = $_POST["user_status"];
            }
            $sql = "SELECT  *
                            , ROW_NUMBER() OVER (ORDER BY user_id desc) AS rn
                            , case
                                when user_status = 'Y' then '활성'
                                when user_status = 'N' then '비활성'
                            end AS user_status_text
                    FROM    bt_member
                    WHERE   1 = 1
                    {$where}
                    order by user_id desc
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
            $user_id        = get_user_id();
            $user_name      = $_POST['user_name'];
            $user_contact   = $_POST['user_contact'];
            $user_auth      = $_POST['user_auth'];
            $user_memo      = $_POST['user_memo'];
            $user_status    = isset($_POST['user_status']) ? $_POST['user_status'] : 'Y';
            
            $sql = "INSERT  bt_member SET
                            user_id         = :user_id,
                            user_name       = :user_name,
                            user_contact    = :user_contact,
                            user_pwd        = SHA1(SUBSTRING(:user_contact, -4)),
                            user_auth       = :user_auth,
                            user_memo       = :user_memo,
                            user_status     = :user_status
            ";
            $db->prepare($sql);
            $total_params = [
                ':user_id'      => $user_id,
                ':user_name'    => $user_name,
                ':user_contact' => $user_contact,
                ':user_auth'    => $user_auth,
                ':user_memo'    => $user_memo,
                ':user_status'  => $user_status,
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
            $user_id        = $_POST['user_id'];
            $user_name      = $_POST['user_name'];
            $user_contact   = $_POST['user_contact'];
            $user_auth      = $_POST['user_auth'];
            $user_memo      = $_POST['user_memo'];
            $user_status    = isset($_POST['user_status']) ? $_POST['user_status'] : 'Y';

            $sql = "UPDATE  bt_member SET
                            user_name       = :user_name,
                            user_contact    = :user_contact,
                            user_auth       = :user_auth,
                            user_memo       = :user_memo,
                            user_status     = :user_status
                    WHERE   user_id         = :user_id
            ";
            $db->prepare($sql);
            $total_params = array_merge($total_params, [
                ':user_id'      => $user_id,
                ':user_name'    => $user_name,
                ':user_contact' => $user_contact,
                ':user_auth'    => $user_auth,
                ':user_memo'    => $user_memo,
                ':user_status'  => $user_status,
            ]);
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

        case "update2":
            $user_id        = $_POST['user_id'];
            $user_pwd       = $_POST["user_pwd"];
            $user_pwd_old   = $_POST["user_pwd_old"];
            $user_contact   = $_POST["user_contact"];
            $total_params = [
                ':user_id'          => $user_id,
                ':user_pwd_old'     => $user_pwd_old,
            ];
            $sql = "SELECT  count(*) as cnt
                    FROM    bt_member 
                    WHERE   user_id = :user_id
                    AND     user_pwd = SHA1(:user_pwd_old)
            ";
            $db->prepare($sql);
            $db->bind_array($total_params);
            $res = $db->single();
            if ($res['cnt'] > 0) {
                $total_params = [
                    ':user_id'          => $user_id,
                    ':user_pwd'         => $user_pwd,
                    ':user_pwd_old'     => $user_pwd_old,
                    ':user_contact'     => $user_contact,
                ];
                $sql = "UPDATE  bt_member SET
                                user_contact    = :user_contact,
                                user_pwd        = SHA1(:user_pwd)
                        WHERE   user_id         = :user_id
                        AND     user_pwd        = SHA1(:user_pwd_old)
                ";
                $db->prepare($sql);
                
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
            }
            else {
                $response = [
                    'status' => 'error',
                ];
            }
            
            echo json_encode($response);
            break;

        case "pwd_update":
            $user_id              = $_POST['user_id'];
            
            $sql = "UPDATE  bt_member SET
                            user_pwd        = SHA1(SUBSTRING(user_contact, -4))
                    WHERE   user_id         = :user_id
            ";
            $db->prepare($sql);
            $total_params = [
                ':user_id'                  => $user_id,
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
