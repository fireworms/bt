<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] == '') {
        echo '<script> location.href = "./login.php" </script>';
        exit;
    }
    
    $login_message = "<li><p class=\"navbar-text navbar-right\">{$_SESSION['user_name']}님 로그인하셨습니다.</p></li>";
    $login_button = "<a href=\"#\" onclick=\"logout();\">로그아웃</a>";

    $classOptionData = get_class_list();
    $classOption = '';
    foreach($classOptionData['data'] as $val) {
        $classOption .= '
            <option value="'.$val['class_id'].'" data-mn="'.$val['class_base_first'].'" data-mx="'.$val['class_base_last'].'" data-bm="'.$val['class_base_minute'].'" data-bd="'.$val['class_base_days'].'">'.$val['class_name'].'</option>
        ';
    }

    $userOptionData = get_user_list();
    $userOption = '';
    foreach($userOptionData['data'] as $val) {
        $userOption .= '
            <option value="'.$val['user_id'].'">【'.$val['user_id'].'】 '.$val['user_name'].'</option>
        ';
    }

    $membershipOptionData = get_membership_list();
    $membershipOption = '';
    foreach($membershipOptionData['data'] as $val) {
        $membershipOption .= '
            <option value="'.$val['membership_id'].'" data-reservation_base_cnt="'.$val['reservation_base_cnt'].'" data-reservation_base_deadline="'.$val['reservation_base_deadline'].'">'.$val['membership_name'].'</option>
        ';
    }

    $membershipOptionData_t = get_membership_list('a1');
    $membershipOption_t = '';
    foreach($membershipOptionData_t['data'] as $val) {
        $membershipOption_t .= '
            <option value="'.$val['membership_id'].'" data-reservation_base_cnt="'.$val['reservation_base_cnt'].'" data-reservation_base_deadline="'.$val['reservation_base_deadline'].'">'.$val['membership_name'].'</option>
        ';
    }

    $paymentMethodOption = '';
    foreach($arrPaymentMethod as $key => $val) {
        $paymentMethodOption .= '
            <option value="'.$key.'" >'.$val.'</option>
        ';
    }


?>
<!DOCTYPE html>
<html lang="ko" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
	<title>출결 관리</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--   <meta http-equiv="X-Frame-Options" content="SAMEORIGIN"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <script src="/js/scripts.js"></script>
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
    <link rel="stylesheet" type="text/css" href="/vendor/datatables_custom/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
    <script src="/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/datatables_custom/css/main.css">
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">CCMS</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!-- <li>
                                    <a href="/reservationView.php">예약<span class="sr-only">(current)</span></a>
                                </li> -->
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">예약 관리<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/manageAttendance.php">출결 관리</a>
                                            <!-- <a href="/viewReservation.php">회원별 예약 조회</a> -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">기본 관리<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/manageClass.php">클래스 관리</a>
                                            <a href="/manageMembership.php">회원권 관리</a>
                                            <a href="/manageMember.php">회원 관리</a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="/manageMatchCM.php">클래스/회원권 매핑</a>
                                            <a href="/manageMatchMM.php">회원/회원권 매핑</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="javascript: info_event();">정보변경</a>
                                </li>
                                <li>
                                    <?php echo $login_button; ?>
                                </li>
                                <li><?php echo $login_message; ?></li>
                                
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- 내 정보 MODAL -->
                    <div class="modal fade" tabindex="-1" role="dialog" id="infoModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-info-title">내 정보</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-control form-label">회원 아이디</div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="info_modal_user_id" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-control form-label">회원명</div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="info_modal_user_name" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-control form-label">기존 비밀번호</div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="password" class="form-control" id="info_modal_user_pwd_old">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-control form-label">변경 비밀번호</div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="password" class="form-control" id="info_modal_user_pwd">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-control form-label">연락처</div>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="number" class="form-control" id="info_modal_user_contact" placeholder="연락처(최소4자리, 숫자만)를 입력하세요">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="modal-footer modalBtnContainer-infoEvent">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                                        <button type="button" class="btn btn-primary" id="info-update-event">저장</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <script>
                    function info_event(){
                        $.ajax({
                            type : "post",
                            url : "/user_proc.php",
                            async : false,
                            data : {
                                user_id : "<?php echo $_SESSION['user_id']; ?>",
                                flag: 'select',
                            },
                            error : function(error) {
                                isSE(error);
                            },
                            success : function(datas) {
                                var d = JSON.parse(datas).data[0];
                                $('#info_modal_user_id').val(d.user_id);
                                $('#info_modal_user_name').val(d.user_name);
                                
                                $('#info_modal_user_contact').val(d.user_contact);
                                $('#info_modal_user_status').val(d.user_status);
                                $('#info_modal_user_memo').val(d.user_memo);

                                $('#infoModal').modal('show');
                                
                                $('#info-update-event').unbind();
                                $('#info-update-event').on('click', function() {
                                    if ($("#info_modal_user_pwd").val().trim() === "") {
                                        alert("비밀번호를 입력하세요.");
                                        return false;
                                    }
                                    if ($("#info_modal_user_pwd_old").val().trim() === "") {
                                        alert("기존 비밀번호를 입력하세요.");
                                        return false;
                                    }
                                    if ($("#info_modal_user_contact").val().trim().length < 4) {
                                        alert("연락처(최소4자리)를 입력하세요.");
                                        return false;
                                    }
                                    // 새로운 일정 저장
                                    $.ajax({
                                        type : "post",
                                        url : "/user_proc.php",
                                        async : false,
                                        data : {
                                            user_id : $('#info_modal_user_id').val(),
                                            user_pwd : $('#info_modal_user_pwd').val(),
                                            user_pwd_old : $('#info_modal_user_pwd_old').val(),
                                            user_contact : $('#info_modal_user_contact').val(),
                                            flag: 'update2',
                                        },
                                        error : function(error) {
                                            isSE(error);
                                        },
                                        success : function(datas) {
                                            var d = JSON.parse(datas);
                                            if(d.status == 'error'){
                                                alert("변경할 수 없습니다.");
                                            }else{
                                                $('#infoModal').modal('hide');
                                            }
                                        },
                                        complete : function() {
                                        }
                                    });
                                });
                            },
                            complete : function() { }
                        });
                    }

                </script>