<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/lib/config/conf.common.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
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
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5" style="padding-bottom: 1.5rem !important; padding-top: 1.5rem !important;">
                                        <div class="text-center">
                                            <h1 class="h3 text-gray-900 mb-4">BOX TENNIS</h1>
                                        </div>
                                        <form name="loginForm" method="POST" action="./login_proc.php" class="form-signin">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="회원번호">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" name="password" onkeypress="javascript:if(event.keyCode==13) {login()}">
                                            </div>
                                            <input type="button" value="로그인" class="btn btn-primary btn-user btn-block" onclick="login();">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            async function login() {
                const form = document.forms['loginForm'];  // 'loginForm' 이름의 폼을 가져옵니다.
                const formData = new FormData(form);  // 폼 데이터를 사용하여 FormData 객체를 생성합니다.

                try {
                    const response = await fetch('login_proc.php', {
                        method: 'POST',
                        body: formData
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    if (result.status == 'ok') {
                        location.href = './index.php';
                    }
                    else {
                        alert('아이디와 비밀번호를 확인해 주세요.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }
            
        </script>
        
<?php
    include_once("./inc/footer.php");
?>