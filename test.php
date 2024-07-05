<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    
    $class_id = 'a1';

    if ($class_id) {
        $sql = "SELECT  *
                FROM    bt_membership bm
                left join bt_match_cm cm on cm.membership_id = bm.membership_id
                WHERE   cm.status = 'Y'
                AND     cm.class_id = :class_id
        ";
    }
    else {
        $sql = "SELECT  *
                FROM    bt_membership
                WHERE   status = 'Y'
        ";
    }
    
    $db->prepare($sql);
    if ($class_id) { 
        $db->bind(':class_id', $class_id);
    }
    $res = $db->resultset();
    print_r($res);