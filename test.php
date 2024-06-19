<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    

    echo 'dd : ';
    echo get_reservation_cnt_remain(1);
    echo 'ff : ';
    echo get_reservation_cnt_remain(2);