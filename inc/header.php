<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION['bm_id'])) {
        echo '<script> location.href = "./login.php" </script>';
    }

    $login_message = '';
    if ()

?>
<!DOCTYPE html>
<html lang="kor">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <link href="css/sb_admin.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">예약</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown_l" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">예약관리</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown_l">
                                <li><a class="dropdown-item" href="#">출결 관리</a></li>
                                <li><a class="dropdown-item" href="#">회원별 예약 조회</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown_r" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">기본관리</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown_r">
                                <li><a class="dropdown-item" href="#">클래스 관리</a></li>
                                <li><a class="dropdown-item" href="#">회원권 관리</a></li>
                                <li><a class="dropdown-item" href="#">회원 관리</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">클래스/회원권 매핑</a></li>
                                <li><a class="dropdown-item" href="#">회원/회원권 매핑</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">정보변경</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">로그아웃</a></li>
                        <?php echo $login_message; ?>
                    </ul>
                </div>
            </div>
        </nav>
        