<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION['bm_id'])) {
        echo '<script> location.href = "./login.php" </script>';
    }

    $login_message = "<li class=\"nav-item\"><span class=\"nav-link\" >{$_SESSION['bm_name']}님 안녕하세요.</span></li>";    
    $login_button = "<li class=\"nav-item\"><span class=\"nav-link\" onclick=\"logout();\">로그아웃</span></li>";
    

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
        <!-- <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" /> -->
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}</style><link rel=" shortcut icon" href="image/favicon.ico">
        <link rel="stylesheet" href="/vendor/css/fullcalendar.min.css">
        <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/css/select2.min.css">
        <link rel="stylesheet" href="/vendor/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="/css/main.css?ver=1.0">
        <script src="/vendor/js/jquery.min.js"></script>
        <script src="/vendor/js/bootstrap.min.js"></script>
        <script src="/vendor/js/moment.min.js"></script>
        <script src="/vendor/js/fullcalendar.min.js"></script>
        <script src="/vendor/js/ko.js"></script>
        <script src="/vendor/js/select2.min.js"></script>
        <script src="/vendor/js/bootstrap-datetimepicker.min.js"></script>
        <script src="/js/jamerl.js"></script>
        <link rel="stylesheet" href="/vendor/bootstrap-select-1.13.14/dist/css/bootstrap-select.css">
        <script src="/vendor/bootstrap-select-1.13.14/dist/js/bootstrap-select.js"></script>
        <script src="/vendor/bootstrap-select-1.13.14/dist/js/i18n/defaults-ko_KR.js"></script>
        <script src="/vendor/Stuk-jszip-b7f472d/dist/jszip.js"></script>
        <style type="text/css">
	.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
		margin-top: 0;
	}
	hr{
		margin: 10px 0 !important;
	}
	ul{
		margin-bottom: 0 !important;
	}
	.form-control.form-label{
		border: 0;
		box-shadow: none;
	}
	.form-control:not(textarea){
		height: 30px !important;
	}
	.btn{
		padding: 4px 12px !important;
	}
	select[name=myTable_length]{
		height: 30px !important;
	}
	
	div#wrapper{
		margin-bottom: 10px;
	}
	.fc button .fc-icon{
		top: 0 !important;
		font-size: 1.7em !important;
	}
	.fc-left > h2{
		height: 30px;
		line-height: 30px;
	}
	
	@media ( min-width : 1200px) {
		.container {
			width: 100%;
		}
	}
	
	@media ( min-width : 992px) {
		.container {
			width: 100%;
		}
	}
	
	@media ( min-width : 768px) {
		.container {
			width: 100%;
		}
	}
	
	.dt-buttons {
		/* margin-bottom: 10px; */
		float: right;
	}
	
	input[type=password] {
		font-family: auto !important;
	}
</style>
<style type="text/css">
	.fa,.fab,.fad,.fal,.far,.fas{
		font-weight: 900 !important;
	}
	.fc-toolbar.fc-header-toolbar {
		padding-top: 10px;
	}
	.fc-toolbar h2 {
		text-align: center;
		font-size: 18px;
	}
		
	.fc-title {
		text-align: center;
		font-family: 'Jeju Gothic', sans-serif;
	}
		
	.fc-slats .fc-widget-content {
		height: 100px !important;
	}
	</style>        

        

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
                        <li class="nav-item"><a class="nav-link" href="#">정보변경</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="logout();">로그아웃</a></li>
                        <?php echo $login_message; ?>
                    </ul>
                </div>
            </div>
        </nav>