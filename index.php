<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] == '') {
        echo '<script> location.href = "./login.php" </script>';
    }
    else {
        echo '<script> location.href = "./manageAttendance.php" </script>';
    }