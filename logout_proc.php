<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    $_SESSION['bm_id'] = '';
    $_SESSION['bm_name'] = '';
    echo json_encode([
        'status' => 'ok'
    ]);