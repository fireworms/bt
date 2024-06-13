<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT  *
            FROM    bt_member
            WHERE   user_id = :user_id
            AND     user_pwd = SHA(:user_pwd)
    ";
    $db->prepare($sql);
    $db->bind_array([
        ':user_id' => $username,
        ':user_pwd' => $password,
    ]);
    $res = $db->single();
    $result = [];
    if (isset($res['user_id']) && $res['user_id'] != '') {
        $result['status'] = 'ok';
        $_SESSION['user_id'] = $username;
        $_SESSION['user_name'] = $res['user_name'];
    }
    else {
        $result['status'] = 'no';
    }
    echo json_encode($result);