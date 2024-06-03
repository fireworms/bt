<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT  *
            FROM    bt_member
            WHERE   bm_id = :bm_id
            AND     bm_password = SHA(:bm_password)
    ";
    $db->prepare($sql);
    $db->bind_array([
        ':bm_id' => $username,
        ':bm_password' => $password,
    ]);
    $res = $db->single();
    $result = [];
    if (isset($res['bm_id']) && $res['bm_id'] != '') {
        $result['status'] = 'ok';
        $_SESSION['bm_id'] = $username;
        $_SESSION['bm_name'] = $res['bm_name'];
    }
    else {
        $result['status'] = 'no';
    }
    echo json_encode($result);