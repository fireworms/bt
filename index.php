<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION['bm_id']) || $_SESSION['bm_id'] == '') {
        echo '<script> location.href = "./login.php" </script>';
    }
    else {
        echo '<script> location.href = "./attendanceManagement.php" </script>';
    }