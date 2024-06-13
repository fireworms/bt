<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    $_SESSION['user_id'] = '';
    $_SESSION['user_name'] = '';
    echo json_encode([
        'status' => 'ok'
    ]);