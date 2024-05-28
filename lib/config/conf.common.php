<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/class/class.pdo.php");
    if (!isset($_SESSION)) {
        session_start();
    }