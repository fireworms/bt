<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">출결 관리</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-control form-label">클래스</div>
                </div>
                <div class="col-xs-8">
                    <select class="form-control" id="p_class_id">
                        
                            
                                
                                <option value="a1" data-mn="06:00:00" data-mx="23:00:00" data-bm="20" data-bd="">현우</option>
                                
                                <option value="a2" data-mn="06:00:00" data-mx="23:00:00" data-bm="20" data-bd="">정록</option>
                                
                            
                            
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-control form-label">회원 아이디</div>
                </div>
                <div class="col-xs-8">
                    <div class="dropdown bootstrap-select form-control bs3"><select class="form-control selectpicker" id="p_user_id" data-live-search="true" tabindex="-98">
                        <option value="">= 선택 =</option>
                        
                            
                                <option value="231216005">【231216005】 강문(정록)</option>
                            
                                <option value="240402002">【240402002】 전강(정록)</option>
                            
                                <option value="CCMADM">【CCMADM】 관리자</option>
                            
                                <option value="231222001">【231222001】 이종철(현우,정록)</option>
                            
                                <option value="231216003">【231216003】 강선혜(정록)</option>
                            
                                <option value="240214002">【240214002】 강지현(정록)</option>
                            
                                <option value="240227001">【240227001】 강지훈(현우)</option>
                            
                                <option value="240404003">【240404003】 구동환(정록)</option>
                            
                                <option value="240507002">【240507002】 구유성(현우)</option>
                            
                                <option value="240201003">【240201003】 권민예(현우)</option>
                            
                                <option value="231216006">【231216006】 권용준(정록)</option>
                            
                                <option value="240311001">【240311001】 권재혁(정록)</option>
                            
                                <option value="240514002">【240514002】 김경린(현우)</option>
                            
                                <option value="240425003">【240425003】 김경숙(현우)</option>
                            
                                <option value="240202001">【240202001】 김광민(정록)</option>
                            
                                <option value="240306003">【240306003】 김광하(정록)</option>
                            
                                <option value="231215011">【231215011】 김권혁(현우)</option>
                            
                                <option value="240104005">【240104005】 김기태(정록)</option>
                            
                                <option value="240404001">【240404001】 김다은(정록)</option>
                            
                                <option value="240306001">【240306001】 김대영(현우)</option>
                            
                                <option value="240425002">【240425002】 김민건(정록)</option>
                            
                                <option value="240102001">【240102001】 김민규(현우)</option>
                            
                                <option value="240423003">【240423003】 김민서(정록)</option>
                            
                                <option value="240128002">【240128002】 김민영(정록)</option>
                            
                                <option value="240128001">【240128001】 김병규(정록)</option>
                            
                                <option value="231218001">【231218001】 김병철(정록)</option>
                            
                                <option value="240313003">【240313003】 김새봄(정록)</option>
                            
                                <option value="240222003">【240222003】 김여진(현우)</option>
                            
                                <option value="240108002">【240108002】 김영력(정록)</option>
                            
                                <option value="240109001">【240109001】 김영인(정록)</option>
                            
                                <option value="240205002">【240205002】 김예슬(정록)</option>
                            
                                <option value="231219002">【231219002】 김예지(현우)</option>
                            
                                <option value="240223001">【240223001】 김우찬(정록)</option>
                            
                                <option value="240225001">【240225001】 김유라(정록)</option>
                            
                                <option value="240203001">【240203001】 김유정(정록)</option>
                            
                                <option value="240225002">【240225002】 김정훈(정록)</option>
                            
                                <option value="240203002">【240203002】 김정휘(현우)</option>
                            
                                <option value="240119002">【240119002】 김종한(현우)</option>
                            
                                <option value="231216007">【231216007】 김주현(정록)</option>
                            
                                <option value="240116002">【240116002】 김준혁(정록)</option>
                            
                                <option value="240514003">【240514003】 김지수(현우)</option>
                            
                                <option value="240314001">【240314001】 김진선(정록)</option>
                            
                                <option value="240319001">【240319001】 김진선(정록)</option>
                            
                                <option value="240106002">【240106002】 김진솔(정록)</option>
                            
                                <option value="231227002">【231227002】 김춘추(정록)</option>
                            
                                <option value="240518001">【240518001】 김하랑(현우)</option>
                            
                                <option value="240319002">【240319002】 김형욱(현우)</option>
                            
                                <option value="240111001">【240111001】 김형진(정록)</option>
                            
                                <option value="240411001">【240411001】 김혜경(정록)</option>
                            
                                <option value="240104003">【240104003】 김혜정(정록)</option>
                            
                                <option value="240120002">【240120002】 김혜진(정록)</option>
                            
                                <option value="240508001">【240508001】 김혜진(현우)</option>
                            
                                <option value="240113001">【240113001】 김호연(현우)</option>
                            
                                <option value="231227003">【231227003】 김희원(현우)</option>
                            
                                <option value="231215005">【231215005】 남규리(현우)</option>
                            
                                <option value="231216001">【231216001】 남기용(정록)</option>
                            
                                <option value="240331001">【240331001】 류재호(현우)</option>
                            
                                <option value="240405002">【240405002】 마수오(현우)</option>
                            
                                <option value="240110001">【240110001】 박건민(현우)</option>
                            
                                <option value="240124002">【240124002】 박경인(정록)</option>
                            
                                <option value="240112001">【240112001】 박대욱(현우)</option>
                            
                                <option value="240511001">【240511001】 박동철(정록)</option>
                            
                                <option value="231229001">【231229001】 박동희(현우)</option>
                            
                                <option value="240429001">【240429001】 박례은(정록)</option>
                            
                                <option value="240201001">【240201001】 박목은(현우)</option>
                            
                                <option value="240106001">【240106001】 박상대(정록)</option>
                            
                                <option value="240522003">【240522003】 박수임(정록)</option>
                            
                                <option value="240227002">【240227002】 박수정(현우)</option>
                            
                                <option value="240406002">【240406002】 박영주(현우)</option>
                            
                                <option value="240130003">【240130003】 박인서(현우)</option>
                            
                                <option value="240505001">【240505001】 박재민(정록)</option>
                            
                                <option value="240404002">【240404002】 박종원(현우)</option>
                            
                                <option value="240405001">【240405001】 박주영(현우)</option>
                            
                                <option value="240521001">【240521001】 박주혁(정록)</option>
                            
                                <option value="240203003">【240203003】 박준우(현우)</option>
                            
                                <option value="231228001">【231228001】 박진현(정록)</option>
                            
                                <option value="240204001">【240204001】 박채린(현우)</option>
                            
                                <option value="240507003">【240507003】 박헤리(정록)</option>
                            
                                <option value="240507004">【240507004】 박헤리(정록)</option>
                            
                                <option value="240507005">【240507005】 박헤리(정록)</option>
                            
                                <option value="240507006">【240507006】 박헤리(정록)</option>
                            
                                <option value="240507007">【240507007】 박헤리(정록)</option>
                            
                                <option value="240216001">【240216001】 박현수(정록)</option>
                            
                                <option value="240507008">【240507008】 박혜리(정록)</option>
                            
                                <option value="240201002">【240201002】 배극민(현우)</option>
                            
                                <option value="231215004">【231215004】 배선희(현우)</option>
                            
                                <option value="240112002">【240112002】 백승훈(현우)</option>
                            
                                <option value="240423002">【240423002】 서재오(정록)</option>
                            
                                <option value="240120003">【240120003】 서준영(정록)</option>
                            
                                <option value="240205003">【240205003】 석지영(현우)</option>
                            
                                <option value="240116001">【240116001】 석천용(정록)</option>
                            
                                <option value="240514004">【240514004】 성진후(현우)</option>
                            
                                <option value="240214001">【240214001】 손상언(정록)</option>
                            
                                <option value="231223001">【231223001】 손율이(정록)</option>
                            
                                <option value="240415001">【240415001】 손창억(정록)</option>
                            
                                <option value="240130001">【240130001】 송다미(정록)</option>
                            
                                <option value="240205004">【240205004】 송수인(현우)</option>
                            
                                <option value="240110003">【240110003】 송아현(현우)</option>
                            
                                <option value="240419001">【240419001】 송영은(현우)</option>
                            
                                <option value="240523001">【240523001】 송지은(정록)</option>
                            
                                <option value="240125001">【240125001】 신미지(정록)</option>
                            
                                <option value="240313001">【240313001】 안다솜(정록)</option>
                            
                                <option value="240312001">【240312001】 안소정(정록)</option>
                            
                                <option value="231226001">【231226001】 안지훈(정록)</option>
                            
                                <option value="240117003">【240117003】 엄한나(정록)</option>
                            
                                <option value="231215010">【231215010】 여은진(현우)</option>
                            
                                <option value="240205005">【240205005】 오경아(현우)</option>
                            
                                <option value="240409003">【240409003】 오동민(현우)</option>
                            
                                <option value="240522001">【240522001】 오영석(정록)</option>
                            
                                <option value="240117002">【240117002】 오준영(현우)</option>
                            
                                <option value="231215007">【231215007】 우보라(현우)</option>
                            
                                <option value="240517001">【240517001】 유성일(정록)</option>
                            
                                <option value="240403001">【240403001】 유영창(현우)</option>
                            
                                <option value="240504001">【240504001】 윤성섭(현우)</option>
                            
                                <option value="240131001">【240131001】 윤정윤(현우)</option>
                            
                                <option value="231216002">【231216002】 윤하정(정록)</option>
                            
                                <option value="231215009">【231215009】 이경선(현우)</option>
                            
                                <option value="240227004">【240227004】 이노진(정록)</option>
                            
                                <option value="240409001">【240409001】 이대건(현우)</option>
                            
                                <option value="240123003">【240123003】 이대호(현우)</option>
                            
                                <option value="240325001">【240325001】 이도하(현우)</option>
                            
                                <option value="231215012">【231215012】 이동의(현우)</option>
                            
                                <option value="231216008">【231216008】 이미란(정록)</option>
                            
                                <option value="240103001">【240103001】 이병우(정록)</option>
                            
                                <option value="240416001">【240416001】 이상협(정록)</option>
                            
                                <option value="240522002">【240522002】 이서희(현우)</option>
                            
                                <option value="240222001">【240222001】 이성준(정록)</option>
                            
                                <option value="240503002">【240503002】 이세한(정록)</option>
                            
                                <option value="240129001">【240129001】 이수경(정록)</option>
                            
                                <option value="240507001">【240507001】 이수린(정록)</option>
                            
                                <option value="231215002">【231215002】 이승민(현우)</option>
                            
                                <option value="240104006">【240104006】 이시용(현우)</option>
                            
                                <option value="240126001">【240126001】 이시후(정록)</option>
                            
                                <option value="240402001">【240402001】 이신애(현우)</option>
                            
                                <option value="240208001">【240208001】 이유진(현우)</option>
                            
                                <option value="240318001">【240318001】 이윤서(현우)</option>
                            
                                <option value="240123001">【240123001】 이은경(현우)</option>
                            
                                <option value="240406001">【240406001】 이정민(현우)</option>
                            
                                <option value="240409002">【240409002】 이정원(현우)</option>
                            
                                <option value="240428001">【240428001】 이주영(현우)</option>
                            
                                <option value="240307001">【240307001】 이주호(정록)</option>
                            
                                <option value="240518002">【240518002】 이중희(정록)</option>
                            
                                <option value="231216004">【231216004】 이충용(정록)</option>
                            
                                <option value="240523002">【240523002】 이한건(정록)</option>
                            
                                <option value="240112003">【240112003】 이현기(현우)</option>
                            
                                <option value="231215014">【231215014】 이현수(현우)</option>
                            
                                <option value="240310001">【240310001】 이형창(현우)</option>
                            
                                <option value="240304001">【240304001】 이혜민(정록)</option>
                            
                                <option value="240517002">【240517002】 이호균(정록)</option>
                            
                                <option value="240403002">【240403002】 임예은(현우)</option>
                            
                                <option value="240106003">【240106003】 임종현(현우)</option>
                            
                                <option value="231215006">【231215006】 장성민(현우)</option>
                            
                                <option value="240227003">【240227003】 장안길(현우)</option>
                            
                                <option value="240509001">【240509001】 장여정(현우)</option>
                            
                                <option value="231223002">【231223002】 장현철(현우)</option>
                            
                                <option value="240527001">【240527001】 전상현(현우)</option>
                            
                                <option value="240205001">【240205001】 전선혜(정록)</option>
                            
                                <option value="240508002">【240508002】 전은지(현우)</option>
                            
                                <option value="231219001">【231219001】 정명희(정록)</option>
                            
                                <option value="240219001">【240219001】 정선우(현우)</option>
                            
                                <option value="240218001">【240218001】 정성욱(정록)</option>
                            
                                <option value="240121001">【240121001】 정순용(현우)</option>
                            
                                <option value="231229002">【231229002】 정연선(현우)</option>
                            
                                <option value="240117001">【240117001】 정영훈(현우)</option>
                            
                                <option value="240309002">【240309002】 정주현(정록)</option>
                            
                                <option value="240523003">【240523003】 정지용(정록)</option>
                            
                                <option value="240310002">【240310002】 정찬호(현우)</option>
                            
                                <option value="240423001">【240423001】 조기호(정록)</option>
                            
                                <option value="231216011">【231216011】 조단오(정록)</option>
                            
                                <option value="240322001">【240322001】 조정일(현우)</option>
                            
                                <option value="231222002">【231222002】 조현준(현우)</option>
                            
                                <option value="240123002">【240123002】 조혜진(정록)</option>
                            
                                <option value="240125002">【240125002】 진창훈(정록)</option>
                            
                                <option value="240108001">【240108001】 진홍구(현우)</option>
                            
                                <option value="240222002">【240222002】 차태준(정록)</option>
                            
                                <option value="240417001">【240417001】 천선아(정록)</option>
                            
                                <option value="231218002">【231218002】 최기진(정록)</option>
                            
                                <option value="240104002">【240104002】 최다희(현우)</option>
                            
                                <option value="240118001">【240118001】 최미정(정록)</option>
                            
                                <option value="240226001">【240226001】 최민혁(현우)</option>
                            
                                <option value="240320001">【240320001】 최영진(현우)</option>
                            
                                <option value="240213001">【240213001】 최윤채(정록)</option>
                            
                                <option value="231227005">【231227005】 최재혁(현우)</option>
                            
                                <option value="240409004">【240409004】 최준현(현우)</option>
                            
                                <option value="240119003">【240119003】 추교범(현우)</option>
                            
                                <option value="240306002">【240306002】 추수진(현우)</option>
                            
                                <option value="240108004">【240108004】 한대현(정록)</option>
                            
                                <option value="240119001">【240119001】 한승엽(정록)</option>
                            
                                <option value="240307002">【240307002】 한혜리(정록)</option>
                            
                                <option value="231227006">【231227006】 한희두(현우)</option>
                            
                                <option value="240331002">【240331002】 허준석(정록)</option>
                            
                                <option value="240117004">【240117004】 홍은경(정록)</option>
                            
                                <option value="240404004">【240404004】 황선진(현우)</option>
                            
                                <option value="231227004">【231227004】 황주희(정록)</option>
                            
                                <option value="240108003">【240108003】 황충현(정록)</option>
                            
                                <option value="240413001">【240413001】 남궁재홍(정록)</option>
                            
                                <option value="KUMCCMADM">【KUMCCMADM】 메인관리자</option>
                            
                                <option value="240115001">【240115001】 권석숭2(현우)</option>
                            
                                <option value="240122001">【240122001】 권혜주2(현우)</option>
                            
                                <option value="240309004">【240309004】 김나연2(현우)</option>
                            
                                <option value="240120001">【240120001】 김동언2(현우)</option>
                            
                                <option value="240111003">【240111003】 김영희2(정록)</option>
                            
                                <option value="240105001">【240105001】 김원균2(정록)</option>
                            
                                <option value="240129002">【240129002】 김태근2(현우)</option>
                            
                                <option value="240323001">【240323001】 김태희2(현우)</option>
                            
                                <option value="240313004">【240313004】 김함대2(정록)</option>
                            
                                <option value="240124001">【240124001】 박다유2(현우)</option>
                            
                                <option value="240311002">【240311002】 박주영2(정록)</option>
                            
                                <option value="240113002">【240113002】 박하영2(현우)</option>
                            
                                <option value="240425001">【240425001】 백수희2(정록)</option>
                            
                                <option value="240111002">【240111002】 설성철2(정록)</option>
                            
                                <option value="240309001">【240309001】 신재진2(정록)</option>
                            
                                <option value="240313002">【240313002】 양승엽2(정록)</option>
                            
                                <option value="240104001">【240104001】 양은윤2(현우)</option>
                            
                                <option value="240224001">【240224001】 오정민2(현우)</option>
                            
                                <option value="240229002">【240229002】 유현진2(정록)</option>
                            
                                <option value="240514001">【240514001】 윤창희2(현우)</option>
                            
                                <option value="240429002">【240429002】 이상일2(현우)</option>
                            
                                <option value="240419002">【240419002】 이수진2(현우)</option>
                            
                                <option value="231215013">【231215013】 이재갑2(현우)</option>
                            
                                <option value="231215008">【231215008】 이한솔2(현우)</option>
                            
                                <option value="240305001">【240305001】 이혜리2(현우)</option>
                            
                                <option value="240424001">【240424001】 전세현2(현우)</option>
                            
                                <option value="240229003">【240229003】 전은지2(정록)</option>
                            
                                <option value="240110002">【240110002】 조수정2(정록)</option>
                            
                                <option value="231216009">【231216009】 조현미2(정록)</option>
                            
                                <option value="231215003">【231215003】 채지희2(현우)</option>
                            
                                <option value="240109002">【240109002】 최성욱2(현우)</option>
                            
                                <option value="240519001">【240519001】 최성환2(정록)</option>
                            
                                <option value="231216010">【231216010】 최장곤2(정록)</option>
                            
                                <option value="240402003">【240402003】 최정운2(현우)</option>
                            
                                <option value="240422001">【240422001】 최종현2(현우)</option>
                            
                                <option value="240503001">【240503001】 최현주2(정록)</option>
                            
                                <option value="240315001">【240315001】 현정경2(현우)</option>
                            
                        
                    </select><button type="button" class="btn dropdown-toggle btn-default bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="p_user_id" title="= 선택 ="><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">= 선택 =</div></div> </div><span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div><div class="inner open" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner " role="presentation"></ul></div></div></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-control form-label">회원명</div>
                </div>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="p_user_name">
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="form-group">
                    <label for="user_name">시작일(숨김)</label>
                    <input type="text" class="filter" id="p_start" style="width: 100%;">
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="form-group">
                    <label for="user_name">종료일(숨김)</label>
                    <input type="text" class="filter" id="p_end" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="panel-footer" style="padding: 0;">
            <!-- 푸터 -->
        </div>
    </div>
    <div id="wrapper">
        <div id="loading"></div>
        <div id="calendar"></div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="rv-status-Modal">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
<!-- 						<div class="modal-dialog" role="document"> -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h1 class="modal-title h4">주간 예약 현황</h1>
                </div>
                <div class="modal-body">
<!-- 									<h1 class="h5"><i class="fas fa-exclamation"></i> 회원권 정보</h1> -->
                    <div class="row">
                        <div class="col-xs-12">
                            <table id="row_info2" class="table table-sm table-hover">
                                <thead class="week_rv_status_hd">
                                    <tr>
                                        <th scope="col" style="text-align: center;">일자</th>
                                        <th scope="col" style="text-align: center;">예약</th>
                                        <th scope="col" style="text-align: center;">출석</th>
                                        <th scope="col" style="text-align: center;">결석</th>
                                        <th scope="col" style="text-align: center;">합계</th>
                                    </tr>
                                </thead>
                                <tbody class="week_rv_status_bd">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" tabindex="-1" role="dialog" id="eventModal">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
<!-- 						<div class="modal-dialog" role="document"> -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h1 class="modal-title h4">출결 관리</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="modal_reservation_id">
                    <h1 class="h5"><svg class="svg-inline--fa fa-exclamation fa-w-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M176 432c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80zM25.26 25.199l13.6 272C39.499 309.972 50.041 320 62.83 320h66.34c12.789 0 23.331-10.028 23.97-22.801l13.6-272C167.425 11.49 156.496 0 142.77 0H49.23C35.504 0 24.575 11.49 25.26 25.199z"></path></svg><!-- <i class="fas fa-exclamation"></i> Font Awesome fontawesome.com --> 회원권 정보</h1>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">회원명</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_user_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">연락처</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_user_contact"></div>
                        </div>
                    </div>
                    <div class="row modal_mode_view">
                        <div class="col-xs-4">
                            <div class="form-control form-label">회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">시작일자</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_start"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">종료일자</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_end"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">결제금</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_payment"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">미수금</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_unpaid_amount"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">등록횟수</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_retention_cnt_rv"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">잔여횟수</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_remain_cnt_at"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">잔여횟수(예약포함)</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_remain_cnt_rv"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">메모</div>
                        </div>
                        <div class="col-xs-8">
                            <textarea class="form-control" id="modal_span_memo" rows="2" style="width: 100%; resize: none;"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-2" style="text-align: 	;">
                            <button type="button" class="btn btn-danger" id="trash-event"><svg class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path></svg><!-- <i class="far fa-trash-alt"></i> Font Awesome fontawesome.com --> 삭제</button>
                        </div>
                        <div class="col-xs-10" style="text-align: right;">
                            <button type="button" class="btn btn-success" id="check-event"><svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle"></i> Font Awesome fontawesome.com --> 출석</button>
                            <button type="button" class="btn btn-warning" id="times-event"><svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"></path></svg><!-- <i class="far fa-times-circle"></i> Font Awesome fontawesome.com --> 결석</button>
                            <button type="button" class="btn btn-info" id="question-event"><svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg><!-- <i class="far fa-question-circle"></i> Font Awesome fontawesome.com --> 초기화</button>
                        </div>
                    </div>
                    <hr>
                    <h1 class="h5"><svg class="svg-inline--fa fa-exclamation fa-w-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M176 432c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80zM25.26 25.199l13.6 272C39.499 309.972 50.041 320 62.83 320h66.34c12.789 0 23.331-10.028 23.97-22.801l13.6-272C167.425 11.49 156.496 0 142.77 0H49.23C35.504 0 24.575 11.49 25.26 25.199z"></path></svg><!-- <i class="fas fa-exclamation"></i> Font Awesome fontawesome.com --> 회원권 이력 정보</h1>
                    <div class="row">
                        <div class="col-xs-12" style="color: gray; max-height: 150px; overflow-y: auto;">
                            <table id="row_info2" class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center;">회원권</th>
                                        <th scope="col" style="text-align: center; white-space: nowrap;">일자</th>
                                        <th scope="col" style="text-align: center; white-space: nowrap;">시간</th>
                                        <th scope="col" style="text-align: center; white-space: nowrap;">상태</th>
                                    </tr>
                                </thead>
                                <tbody class="row_info2">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12" style="color: gray;">
                            <ul>
                                <li>회원권 정보 : 예약에 사용된 회원권 정보 출력</li>
                                <li>회원권 이력 정보: 예약에 사용된 회원권의 예약 이력 출력</li>
                                <li>삭제 : 선택한 예약의 삭제</li>
                                <li>출석 : 출결 상태를 【출석】으로 변경</li>
                                <li>결석 : 출결 상태를 【결석】으로 변경</li>
                                <li>초기화 : 출결 상태를 【예약】으로 변경</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modalBtnContainer-addEvent">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    
    <div class="modal fade" tabindex="-1" role="dialog" id="regist-Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h1 class="modal-title h4">예약 등록</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="reg_modal_reservation_dt">
                    <input type="hidden" id="reg_modal_start_hh">
                    <input type="hidden" id="reg_modal_start_mi">
                    <input type="hidden" id="reg_modal_end_hh">
                    <input type="hidden" id="reg_modal_end_mi">
                    <input type="hidden" id="reg_modal_class_id">
                    
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">회원명</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="dropdown bootstrap-select form-control bs3"><select class="form-control selectpicker" id="reg_modal_user_id" data-live-search="true" tabindex="-98">
                                <option value="">= 선택 =</option>
                                
                                    
                                        <option value="231216005">【231216005】 강문(정록)</option>
                                    
                                        <option value="240402002">【240402002】 전강(정록)</option>
                                    
                                        <option value="CCMADM">【CCMADM】 관리자</option>
                                    
                                        <option value="231222001">【231222001】 이종철(현우,정록)</option>
                                    
                                        <option value="231216003">【231216003】 강선혜(정록)</option>
                                    
                                        <option value="240214002">【240214002】 강지현(정록)</option>
                                    
                                        <option value="240227001">【240227001】 강지훈(현우)</option>
                                    
                                        <option value="240404003">【240404003】 구동환(정록)</option>
                                    
                                        <option value="240507002">【240507002】 구유성(현우)</option>
                                    
                                        <option value="240201003">【240201003】 권민예(현우)</option>
                                    
                                        <option value="231216006">【231216006】 권용준(정록)</option>
                                    
                                        <option value="240311001">【240311001】 권재혁(정록)</option>
                                    
                                        <option value="240514002">【240514002】 김경린(현우)</option>
                                    
                                        <option value="240425003">【240425003】 김경숙(현우)</option>
                                    
                                        <option value="240202001">【240202001】 김광민(정록)</option>
                                    
                                        <option value="240306003">【240306003】 김광하(정록)</option>
                                    
                                        <option value="231215011">【231215011】 김권혁(현우)</option>
                                    
                                        <option value="240104005">【240104005】 김기태(정록)</option>
                                    
                                        <option value="240404001">【240404001】 김다은(정록)</option>
                                    
                                        <option value="240306001">【240306001】 김대영(현우)</option>
                                    
                                        <option value="240425002">【240425002】 김민건(정록)</option>
                                    
                                        <option value="240102001">【240102001】 김민규(현우)</option>
                                    
                                        <option value="240423003">【240423003】 김민서(정록)</option>
                                    
                                        <option value="240128002">【240128002】 김민영(정록)</option>
                                    
                                        <option value="240128001">【240128001】 김병규(정록)</option>
                                    
                                        <option value="231218001">【231218001】 김병철(정록)</option>
                                    
                                        <option value="240313003">【240313003】 김새봄(정록)</option>
                                    
                                        <option value="240222003">【240222003】 김여진(현우)</option>
                                    
                                        <option value="240108002">【240108002】 김영력(정록)</option>
                                    
                                        <option value="240109001">【240109001】 김영인(정록)</option>
                                    
                                        <option value="240205002">【240205002】 김예슬(정록)</option>
                                    
                                        <option value="231219002">【231219002】 김예지(현우)</option>
                                    
                                        <option value="240223001">【240223001】 김우찬(정록)</option>
                                    
                                        <option value="240225001">【240225001】 김유라(정록)</option>
                                    
                                        <option value="240203001">【240203001】 김유정(정록)</option>
                                    
                                        <option value="240225002">【240225002】 김정훈(정록)</option>
                                    
                                        <option value="240203002">【240203002】 김정휘(현우)</option>
                                    
                                        <option value="240119002">【240119002】 김종한(현우)</option>
                                    
                                        <option value="231216007">【231216007】 김주현(정록)</option>
                                    
                                        <option value="240116002">【240116002】 김준혁(정록)</option>
                                    
                                        <option value="240514003">【240514003】 김지수(현우)</option>
                                    
                                        <option value="240314001">【240314001】 김진선(정록)</option>
                                    
                                        <option value="240319001">【240319001】 김진선(정록)</option>
                                    
                                        <option value="240106002">【240106002】 김진솔(정록)</option>
                                    
                                        <option value="231227002">【231227002】 김춘추(정록)</option>
                                    
                                        <option value="240518001">【240518001】 김하랑(현우)</option>
                                    
                                        <option value="240319002">【240319002】 김형욱(현우)</option>
                                    
                                        <option value="240111001">【240111001】 김형진(정록)</option>
                                    
                                        <option value="240411001">【240411001】 김혜경(정록)</option>
                                    
                                        <option value="240104003">【240104003】 김혜정(정록)</option>
                                    
                                        <option value="240120002">【240120002】 김혜진(정록)</option>
                                    
                                        <option value="240508001">【240508001】 김혜진(현우)</option>
                                    
                                        <option value="240113001">【240113001】 김호연(현우)</option>
                                    
                                        <option value="231227003">【231227003】 김희원(현우)</option>
                                    
                                        <option value="231215005">【231215005】 남규리(현우)</option>
                                    
                                        <option value="231216001">【231216001】 남기용(정록)</option>
                                    
                                        <option value="240331001">【240331001】 류재호(현우)</option>
                                    
                                        <option value="240405002">【240405002】 마수오(현우)</option>
                                    
                                        <option value="240110001">【240110001】 박건민(현우)</option>
                                    
                                        <option value="240124002">【240124002】 박경인(정록)</option>
                                    
                                        <option value="240112001">【240112001】 박대욱(현우)</option>
                                    
                                        <option value="240511001">【240511001】 박동철(정록)</option>
                                    
                                        <option value="231229001">【231229001】 박동희(현우)</option>
                                    
                                        <option value="240429001">【240429001】 박례은(정록)</option>
                                    
                                        <option value="240201001">【240201001】 박목은(현우)</option>
                                    
                                        <option value="240106001">【240106001】 박상대(정록)</option>
                                    
                                        <option value="240522003">【240522003】 박수임(정록)</option>
                                    
                                        <option value="240227002">【240227002】 박수정(현우)</option>
                                    
                                        <option value="240406002">【240406002】 박영주(현우)</option>
                                    
                                        <option value="240130003">【240130003】 박인서(현우)</option>
                                    
                                        <option value="240505001">【240505001】 박재민(정록)</option>
                                    
                                        <option value="240404002">【240404002】 박종원(현우)</option>
                                    
                                        <option value="240405001">【240405001】 박주영(현우)</option>
                                    
                                        <option value="240521001">【240521001】 박주혁(정록)</option>
                                    
                                        <option value="240203003">【240203003】 박준우(현우)</option>
                                    
                                        <option value="231228001">【231228001】 박진현(정록)</option>
                                    
                                        <option value="240204001">【240204001】 박채린(현우)</option>
                                    
                                        <option value="240507003">【240507003】 박헤리(정록)</option>
                                    
                                        <option value="240507004">【240507004】 박헤리(정록)</option>
                                    
                                        <option value="240507005">【240507005】 박헤리(정록)</option>
                                    
                                        <option value="240507006">【240507006】 박헤리(정록)</option>
                                    
                                        <option value="240507007">【240507007】 박헤리(정록)</option>
                                    
                                        <option value="240216001">【240216001】 박현수(정록)</option>
                                    
                                        <option value="240507008">【240507008】 박혜리(정록)</option>
                                    
                                        <option value="240201002">【240201002】 배극민(현우)</option>
                                    
                                        <option value="231215004">【231215004】 배선희(현우)</option>
                                    
                                        <option value="240112002">【240112002】 백승훈(현우)</option>
                                    
                                        <option value="240423002">【240423002】 서재오(정록)</option>
                                    
                                        <option value="240120003">【240120003】 서준영(정록)</option>
                                    
                                        <option value="240205003">【240205003】 석지영(현우)</option>
                                    
                                        <option value="240116001">【240116001】 석천용(정록)</option>
                                    
                                        <option value="240514004">【240514004】 성진후(현우)</option>
                                    
                                        <option value="240214001">【240214001】 손상언(정록)</option>
                                    
                                        <option value="231223001">【231223001】 손율이(정록)</option>
                                    
                                        <option value="240415001">【240415001】 손창억(정록)</option>
                                    
                                        <option value="240130001">【240130001】 송다미(정록)</option>
                                    
                                        <option value="240205004">【240205004】 송수인(현우)</option>
                                    
                                        <option value="240110003">【240110003】 송아현(현우)</option>
                                    
                                        <option value="240419001">【240419001】 송영은(현우)</option>
                                    
                                        <option value="240523001">【240523001】 송지은(정록)</option>
                                    
                                        <option value="240125001">【240125001】 신미지(정록)</option>
                                    
                                        <option value="240313001">【240313001】 안다솜(정록)</option>
                                    
                                        <option value="240312001">【240312001】 안소정(정록)</option>
                                    
                                        <option value="231226001">【231226001】 안지훈(정록)</option>
                                    
                                        <option value="240117003">【240117003】 엄한나(정록)</option>
                                    
                                        <option value="231215010">【231215010】 여은진(현우)</option>
                                    
                                        <option value="240205005">【240205005】 오경아(현우)</option>
                                    
                                        <option value="240409003">【240409003】 오동민(현우)</option>
                                    
                                        <option value="240522001">【240522001】 오영석(정록)</option>
                                    
                                        <option value="240117002">【240117002】 오준영(현우)</option>
                                    
                                        <option value="231215007">【231215007】 우보라(현우)</option>
                                    
                                        <option value="240517001">【240517001】 유성일(정록)</option>
                                    
                                        <option value="240403001">【240403001】 유영창(현우)</option>
                                    
                                        <option value="240504001">【240504001】 윤성섭(현우)</option>
                                    
                                        <option value="240131001">【240131001】 윤정윤(현우)</option>
                                    
                                        <option value="231216002">【231216002】 윤하정(정록)</option>
                                    
                                        <option value="231215009">【231215009】 이경선(현우)</option>
                                    
                                        <option value="240227004">【240227004】 이노진(정록)</option>
                                    
                                        <option value="240409001">【240409001】 이대건(현우)</option>
                                    
                                        <option value="240123003">【240123003】 이대호(현우)</option>
                                    
                                        <option value="240325001">【240325001】 이도하(현우)</option>
                                    
                                        <option value="231215012">【231215012】 이동의(현우)</option>
                                    
                                        <option value="231216008">【231216008】 이미란(정록)</option>
                                    
                                        <option value="240103001">【240103001】 이병우(정록)</option>
                                    
                                        <option value="240416001">【240416001】 이상협(정록)</option>
                                    
                                        <option value="240522002">【240522002】 이서희(현우)</option>
                                    
                                        <option value="240222001">【240222001】 이성준(정록)</option>
                                    
                                        <option value="240503002">【240503002】 이세한(정록)</option>
                                    
                                        <option value="240129001">【240129001】 이수경(정록)</option>
                                    
                                        <option value="240507001">【240507001】 이수린(정록)</option>
                                    
                                        <option value="231215002">【231215002】 이승민(현우)</option>
                                    
                                        <option value="240104006">【240104006】 이시용(현우)</option>
                                    
                                        <option value="240126001">【240126001】 이시후(정록)</option>
                                    
                                        <option value="240402001">【240402001】 이신애(현우)</option>
                                    
                                        <option value="240208001">【240208001】 이유진(현우)</option>
                                    
                                        <option value="240318001">【240318001】 이윤서(현우)</option>
                                    
                                        <option value="240123001">【240123001】 이은경(현우)</option>
                                    
                                        <option value="240406001">【240406001】 이정민(현우)</option>
                                    
                                        <option value="240409002">【240409002】 이정원(현우)</option>
                                    
                                        <option value="240428001">【240428001】 이주영(현우)</option>
                                    
                                        <option value="240307001">【240307001】 이주호(정록)</option>
                                    
                                        <option value="240518002">【240518002】 이중희(정록)</option>
                                    
                                        <option value="231216004">【231216004】 이충용(정록)</option>
                                    
                                        <option value="240523002">【240523002】 이한건(정록)</option>
                                    
                                        <option value="240112003">【240112003】 이현기(현우)</option>
                                    
                                        <option value="231215014">【231215014】 이현수(현우)</option>
                                    
                                        <option value="240310001">【240310001】 이형창(현우)</option>
                                    
                                        <option value="240304001">【240304001】 이혜민(정록)</option>
                                    
                                        <option value="240517002">【240517002】 이호균(정록)</option>
                                    
                                        <option value="240403002">【240403002】 임예은(현우)</option>
                                    
                                        <option value="240106003">【240106003】 임종현(현우)</option>
                                    
                                        <option value="231215006">【231215006】 장성민(현우)</option>
                                    
                                        <option value="240227003">【240227003】 장안길(현우)</option>
                                    
                                        <option value="240509001">【240509001】 장여정(현우)</option>
                                    
                                        <option value="231223002">【231223002】 장현철(현우)</option>
                                    
                                        <option value="240527001">【240527001】 전상현(현우)</option>
                                    
                                        <option value="240205001">【240205001】 전선혜(정록)</option>
                                    
                                        <option value="240508002">【240508002】 전은지(현우)</option>
                                    
                                        <option value="231219001">【231219001】 정명희(정록)</option>
                                    
                                        <option value="240219001">【240219001】 정선우(현우)</option>
                                    
                                        <option value="240218001">【240218001】 정성욱(정록)</option>
                                    
                                        <option value="240121001">【240121001】 정순용(현우)</option>
                                    
                                        <option value="231229002">【231229002】 정연선(현우)</option>
                                    
                                        <option value="240117001">【240117001】 정영훈(현우)</option>
                                    
                                        <option value="240309002">【240309002】 정주현(정록)</option>
                                    
                                        <option value="240523003">【240523003】 정지용(정록)</option>
                                    
                                        <option value="240310002">【240310002】 정찬호(현우)</option>
                                    
                                        <option value="240423001">【240423001】 조기호(정록)</option>
                                    
                                        <option value="231216011">【231216011】 조단오(정록)</option>
                                    
                                        <option value="240322001">【240322001】 조정일(현우)</option>
                                    
                                        <option value="231222002">【231222002】 조현준(현우)</option>
                                    
                                        <option value="240123002">【240123002】 조혜진(정록)</option>
                                    
                                        <option value="240125002">【240125002】 진창훈(정록)</option>
                                    
                                        <option value="240108001">【240108001】 진홍구(현우)</option>
                                    
                                        <option value="240222002">【240222002】 차태준(정록)</option>
                                    
                                        <option value="240417001">【240417001】 천선아(정록)</option>
                                    
                                        <option value="231218002">【231218002】 최기진(정록)</option>
                                    
                                        <option value="240104002">【240104002】 최다희(현우)</option>
                                    
                                        <option value="240118001">【240118001】 최미정(정록)</option>
                                    
                                        <option value="240226001">【240226001】 최민혁(현우)</option>
                                    
                                        <option value="240320001">【240320001】 최영진(현우)</option>
                                    
                                        <option value="240213001">【240213001】 최윤채(정록)</option>
                                    
                                        <option value="231227005">【231227005】 최재혁(현우)</option>
                                    
                                        <option value="240409004">【240409004】 최준현(현우)</option>
                                    
                                        <option value="240119003">【240119003】 추교범(현우)</option>
                                    
                                        <option value="240306002">【240306002】 추수진(현우)</option>
                                    
                                        <option value="240108004">【240108004】 한대현(정록)</option>
                                    
                                        <option value="240119001">【240119001】 한승엽(정록)</option>
                                    
                                        <option value="240307002">【240307002】 한혜리(정록)</option>
                                    
                                        <option value="231227006">【231227006】 한희두(현우)</option>
                                    
                                        <option value="240331002">【240331002】 허준석(정록)</option>
                                    
                                        <option value="240117004">【240117004】 홍은경(정록)</option>
                                    
                                        <option value="240404004">【240404004】 황선진(현우)</option>
                                    
                                        <option value="231227004">【231227004】 황주희(정록)</option>
                                    
                                        <option value="240108003">【240108003】 황충현(정록)</option>
                                    
                                        <option value="240413001">【240413001】 남궁재홍(정록)</option>
                                    
                                        <option value="KUMCCMADM">【KUMCCMADM】 메인관리자</option>
                                    
                                        <option value="240115001">【240115001】 권석숭2(현우)</option>
                                    
                                        <option value="240122001">【240122001】 권혜주2(현우)</option>
                                    
                                        <option value="240309004">【240309004】 김나연2(현우)</option>
                                    
                                        <option value="240120001">【240120001】 김동언2(현우)</option>
                                    
                                        <option value="240111003">【240111003】 김영희2(정록)</option>
                                    
                                        <option value="240105001">【240105001】 김원균2(정록)</option>
                                    
                                        <option value="240129002">【240129002】 김태근2(현우)</option>
                                    
                                        <option value="240323001">【240323001】 김태희2(현우)</option>
                                    
                                        <option value="240313004">【240313004】 김함대2(정록)</option>
                                    
                                        <option value="240124001">【240124001】 박다유2(현우)</option>
                                    
                                        <option value="240311002">【240311002】 박주영2(정록)</option>
                                    
                                        <option value="240113002">【240113002】 박하영2(현우)</option>
                                    
                                        <option value="240425001">【240425001】 백수희2(정록)</option>
                                    
                                        <option value="240111002">【240111002】 설성철2(정록)</option>
                                    
                                        <option value="240309001">【240309001】 신재진2(정록)</option>
                                    
                                        <option value="240313002">【240313002】 양승엽2(정록)</option>
                                    
                                        <option value="240104001">【240104001】 양은윤2(현우)</option>
                                    
                                        <option value="240224001">【240224001】 오정민2(현우)</option>
                                    
                                        <option value="240229002">【240229002】 유현진2(정록)</option>
                                    
                                        <option value="240514001">【240514001】 윤창희2(현우)</option>
                                    
                                        <option value="240429002">【240429002】 이상일2(현우)</option>
                                    
                                        <option value="240419002">【240419002】 이수진2(현우)</option>
                                    
                                        <option value="231215013">【231215013】 이재갑2(현우)</option>
                                    
                                        <option value="231215008">【231215008】 이한솔2(현우)</option>
                                    
                                        <option value="240305001">【240305001】 이혜리2(현우)</option>
                                    
                                        <option value="240424001">【240424001】 전세현2(현우)</option>
                                    
                                        <option value="240229003">【240229003】 전은지2(정록)</option>
                                    
                                        <option value="240110002">【240110002】 조수정2(정록)</option>
                                    
                                        <option value="231216009">【231216009】 조현미2(정록)</option>
                                    
                                        <option value="231215003">【231215003】 채지희2(현우)</option>
                                    
                                        <option value="240109002">【240109002】 최성욱2(현우)</option>
                                    
                                        <option value="240519001">【240519001】 최성환2(정록)</option>
                                    
                                        <option value="231216010">【231216010】 최장곤2(정록)</option>
                                    
                                        <option value="240402003">【240402003】 최정운2(현우)</option>
                                    
                                        <option value="240422001">【240422001】 최종현2(현우)</option>
                                    
                                        <option value="240503001">【240503001】 최현주2(정록)</option>
                                    
                                        <option value="240315001">【240315001】 현정경2(현우)</option>
                                    
                                
                            </select><button type="button" class="btn dropdown-toggle btn-default bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="reg_modal_user_id" title="= 선택 ="><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">= 선택 =</div></div> </div><span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div><div class="inner open" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner " role="presentation"></ul></div></div></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">클래스</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_class_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <select class="form-control" id="reg_modal_user_membership_id">
                                <option value="">= 선택 =</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">날짜</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_reservation_dt"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">시작</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_start"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">종료</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_end"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label">메모</div>
                        </div>
                        <div class="col-xs-8">
                            <textarea class="form-control" rows="2" id="reg_modal_memo" style="width: 100%; resize: none;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modalBtnContainer-addEvent">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                    <button type="button" class="btn btn-primary" id="save-event">저장</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            height: "auto", width: "auto", slotDuration: "00:20", slotLabelInterval: "00:20:00",
            minTime: '06:00:00',
            maxTime: '24:00:00',
            hiddenDays: [], // 전체
            displayEventTime: false,
            slotLabelFormat: 'HH:mm',
            locale: 'ko',
            timezone: "local",
            nextDayThreshold: "09:00:00",
            allDaySlot: false,
            displayEventTime: true,
            displayEventEnd: true,
            firstDay: 1, // 월요일이 먼저 오게 하려면 1
            weekNumbers: false,
            selectable: true,
            weekNumberCalculation: "ISO",
            eventLimit: true,
            eventLimitClick: 'week', // popover
            navLinks: false,
            defaultView: 'agendaWeek',
            defaultDate: moment("2024-05-30"), // 실제 사용시 현재 날짜로 수정
            //			timeFormat				: 'HH:mm',
            timeFormat: ' ', // 이벤트 날짜 표시 포멧('HH:mm') 미표시하기로 하여 포멧을 뭉갬
            defaultTimedEventDuration: '01:00:00',
            editable: false,
            weekends: true,
            nowIndicator: true,
            dayPopoverFormat: 'MM/DD dddd',
            longPressDelay: 0,
            eventLongPressDelay: 0,
            selectLongPressDelay: 200,
            header: {
                // 				right : 'prevYear, prev, next, nextYear',
                right: 'prev, week_rv_status, next',
                left: 'title'
                // 				center : 'title', 				right: 'today, agendaWeek, listWeek'
            },
            views: {
                month: {
                    columnFormat: 'dddd',
                    eventLimit: 12
                },
                agendaWeek: {
                    columnFormat: 'MM/DD ddd',
                    titleFormat: 'YYYY년 MM월 DD일',
                    eventLimit: false
                },
                agendaDay: {
                    columnFormat: 'dddd',
                    eventLimit: false
                },
                listWeek: {
                    columnFormat: ''
                }
            },
            eventRender: function (event, element, view) {
                // 배경색 적용
                element.css("background", event.reservation_color);

                // 폰트색 적용
                element
                    .find(".fc-title")
                    .css("color", "#505363");

                // 상태 출력 추가
                if (event.status_atdc === "R") {
                    element
                        .find(".fc-title")
                        .prepend(
                            '<span style="font-size: 1.5em; color: #505363;"><i class="far fa-question-circ' +
                            'le"></i></span><br>'
                        );
                } else if (event.status_atdc === "Y") {
                    element
                        .find(".fc-title")
                        .prepend(
                            '<span style="font-size: 1.5em; color: green;"><i class="far fa-check-circle"><' +
                            '/i></span><br>'
                        );
                } else if (event.status_atdc === "N") {
                    element
                        .find(".fc-title")
                        .prepend(
                            '<span style="font-size: 1.5em; color: red;"><i class="far fa-times-circle"></i' +
                            '></span><br>'
                        );
                }

                // 이벤트 가득 채우기
                $(".fc-event-container").css("margin", "0");

                return filtering(event);
            },
            events: function (start, end, timezone, callback) {
                $('#calendar').fullCalendar('removeEvents');
                cal_option();
                var p_start = moment(start).format('YYYY-MM-DD');
                var p_end = moment(end)
                    .subtract(1, 'day')
                    .format('YYYY-MM-DD');
                $("#p_start").val(p_start);
                $("#p_end").val(p_end);
                $.ajax({
                    type: "post",
                    url: "/rvmg/select.php",
                    data: {
                        p_user_id: $("#p_user_id").val(),
                        p_user_name: $("#p_user_name").val(),
                        p_class_id: $("#p_class_id").val(),
                        p_start: p_start,
                        p_end: p_end
                    },
                    error: function (error) {
                        isSE(error);
                    },
                    success: function (datas) {
                        var d = JSON.parse(datas);
                        callback(d);
                    }
                });
            },
            eventAfterAllRender: function (view) {},
            // 신규 이벤트 등록
            select: function (startDate, endDate, jsEvent, view) {
                if (moment(endDate).diff(moment(startDate), 'minutes') > $('#class_id option:selected').data("bm")) {
                    alert("한 번에 여러 수업을 선택할 수 없습니다.");
                    return false;
                }

                var modal_param = {
                    modal_reservation_dt: moment(startDate).format('YYYY-MM-DD'),
                    modal_class_id: $("#p_class_id option:selected").val(),
                    modal_class_name: $("#p_class_id option:selected").text(),
                    modal_start_hh: moment(startDate).format('HH'),
                    modal_start_mi: moment(startDate).format('mm'),
                    modal_end_hh: moment(endDate).format('HH'),
                    modal_end_mi: moment(endDate).format('mm')
                };
                newEvent(modal_param);
            },
            // 기존 이벤트 출력
            eventClick: function (event, jsEvent, view) {
                editEvent(event);
            },
            customButtons: {
                week_rv_status: {
                    text: '주간현황',
                    click: function () {
                        $("#p_start").val();
                        $.ajax({
                            type: "post",
                            url: "/rvmg/select_rv_week.php",
                            async: false,
                            data: {
                                p_start: $("#p_start").val(),
                                p_end: $("#p_end").val(),
                                p_class_id: $("#p_class_id").val()
                            },
                            beforeSend: function () {
                                $(".week_rv_status_bd").empty();
                            },
                            error: function (error) {
                                isSE(error);
                            },
                            success: function (rt) {
                                var d = JSON.parse(rt);
                                console.log(d);
                                if (d.length > 0) {
                                    var html_str = "";
                                    $.each(d, function (i, row) {
                                        if (row.is_current === "V") {
                                            html_str += '<tr style="background-color: hotpink; color: floralwhite;">';
                                        } else {
                                            html_str += '<tr>';
                                        }
                                        html_str += '	<td style="text-align: center;">' + row.reservation_dt + '</td>';
                                        html_str += '	<td style="text-align: center;">' + row.cnt_rv + '</td>';
                                        html_str += '	<td style="text-align: center;">' + row.cnt_at + '</td>';
                                        html_str += '	<td style="text-align: center;">' + row.cnt_ab + '</td>';
                                        html_str += '	<td style="text-align: center;">' + row.cnt_total + '</td>';
                                        html_str += '</tr>';
                                    });
                                    $(".week_rv_status_bd").append(html_str);
                                } else {
                                    $(".week_rv_status_bd").append(
                                        '<tr style="text-align: center;"><td colspan="5">데이터가 없습니다.</td></tr>'
                                    );
                                }
                                $('#rv-status-Modal').modal('show');
                            }
                        });
                    }
                }
            }
        });

        // 클래스 변경
        $("#p_class_id").on('change', function () {
            cal_option();
            var p_start = $("#p_start").val();
            var p_end = $("#p_end").val();
            $.ajax({
                type: "post",
                url: "/rvmg/select",
                async: false,
                data: {
                    p_user_id: $("#p_user_id").val(),
                    p_user_name: $("#p_user_name").val(),
                    p_class_id: $("#p_class_id").val(),
                    p_start: p_start,
                    p_end: p_end
                },
                error: function (error) {
                    isSE(error);
                },
                success: function (datas) {
                    var d = JSON.parse(datas);
                    $('#calendar').fullCalendar('removeEvents');
                    $('#calendar').fullCalendar('addEventSource', d);
                    $("#calendar").fullCalendar("rerenderEvents");
                }
            });
        });

        $("#p_user_id").on("change", function (e) {
            $('#p_class_id').trigger("change");
        });

        $("#p_user_name").on("keyup", function (e) {
            if (e.which === 13) {
                $('#p_class_id').trigger("change");
            }
        });

        $("#reg_modal_user_id").on("change", function (e) {
            if ($(this).val() === "") 
                return false;
            
            select_user_membership($('#reg_modal_reservation_dt').val());
        });
    });

    var newEvent = function (d) {
        $('#reg_modal_user_id')
            .val("")
            .change();
        $("#reg_modal_user_membership_id option:not(:eq(0))").remove();

        $('#reg_modal_reservation_dt').val(d.modal_reservation_dt);
        $('#reg_modal_start_hh').val(d.modal_start_hh);
        $('#reg_modal_start_mi').val(d.modal_start_mi);
        $('#reg_modal_end_hh').val(d.modal_end_hh);
        $('#reg_modal_end_mi').val(d.modal_end_mi);
        $('#reg_modal_class_id').val(d.modal_class_id);

        $('#reg_modal_span_reservation_dt').text(d.modal_reservation_dt);
        $('#reg_modal_span_start').text(d.modal_start_hh + ":" + d.modal_start_mi);
        $('#reg_modal_span_end').text(d.modal_end_hh + ":" + d.modal_end_mi);
        $('#reg_modal_span_class_name').text(d.modal_class_name);

        $('#reg_modal_memo').val("");

        $('#regist-Modal').modal('show');

        $('#save-event').unbind();
        $('#save-event').on('click', function () {
            if ($("#reg_modal_user_id").val().trim() === "") {
                alert("회원을 선택하세요.");
                return false;
            }
            if ($("#reg_modal_user_membership_id").val().trim() === "") {
                alert("회원권을 선택하세요.");
                return false;
            }
            // 새로운 일정 저장
            $.ajax({
                type: "post",
                url: "/rvmg/insert",
                async: false,
                data: {
                    reservation_dt: $('#reg_modal_reservation_dt').val(),
                    start_hh: $('#reg_modal_start_hh').val(),
                    start_mi: $('#reg_modal_start_mi').val(),
                    end_hh: $('#reg_modal_end_hh').val(),
                    end_mi: $('#reg_modal_end_mi').val(),
                    class_id: $('#reg_modal_class_id').val(),
                    user_membership_id: $("#reg_modal_user_membership_id").val(),
                    user_id: $("#reg_modal_user_id").val(),
                    memo: $("#reg_modal_memo").val()
                },
                error: function (error) {
                    isSE(error);
                },
                success: function (datas) {
                    var d = JSON.parse(datas);
                    switch (d.rt_code) {
                        case 0:
                            $('#p_class_id').trigger("change");
                            break;
                        case 2:
                            $('#p_class_id').trigger("change");
                            alert("회원권이 만료됬습니다.");
                            break;
                        case 1:
                            alert("권한이 없습니다.");
                            break;
                        case 3:
                            alert("예약 가능 카운트 초과.");
                            break;
                    }
                },
                complete: function () {
                    $('#regist-Modal').modal('hide');
                }
            });
        });
    };

    var editEvent = function (event, element, view) {
        $.ajax({
            type: "post",
            url: "/rvmg/select_detail.php",
            async: false,
            data: {
                user_membership_id: event.user_membership_id,
                reservation_id: event.reservation_id
            },
            beforeSend: function () {
                $("tbody.row_info2").empty();
            },
            error: function (error) {
                isSE(error);
            },
            success: function (rt) {
                var datas = JSON.parse(rt);
                console.log(datas);

                var d1 = datas.info1;
                var d2 = datas.info2;

                $('#modal_reservation_id').val(event.reservation_id);

                $('#modal_span_user_name').text(d1.user_name);
                $('#modal_span_user_contact').text(d1.user_contact);
                $('#modal_span_membership_name').text(d1.membership_name);
                $('#modal_span_membership_start').text(d1.membership_start);
                $('#modal_span_membership_end').text(d1.membership_end);
                $('#modal_span_membership_payment').text(d1.membership_payment);
                $('#modal_span_membership_unpaid_amount').text(d1.membership_unpaid_amount);
                $('#modal_span_retention_cnt_rv').text(d1.retention_cnt_rv);
                $('#modal_span_remain_cnt_at').text(d1.remain_cnt_at);
                $('#modal_span_remain_cnt_rv').text(d1.remain_cnt_rv);
                $('#modal_span_memo').val(event.memo);

                var str_d2 = "";
                $.each(d2, function (i, row) {
                    if (row.is_current === "V") {
                        str_d2 += '	<tr style="background-color: hotpink; color: floralwhite;">';
                    } else {
                        str_d2 += '	<tr>';
                    }
                    str_d2 += '		<td style="text-align: center;">' + row.membership_name + '</td>';
                    str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.reservation_dt +
                            '</td>';
                    str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.reservation_tm +
                            '</td>';
                    str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.status_atdc_text +
                            '</td>';
                    str_d2 += '	</tr>';
                });
                $("tbody.row_info2").append(str_d2);

                // 간격 조정
                $("#row_info2>thead>tr>th,#row_info2>tbody>tr>td").css("padding", "2px");

                // 예약 취소 버튼
                $('#trash-event').unbind();
                $('#trash-event').on('click', function () {
                    delete_rv();
                });

                // 출석 버튼
                $('#check-event').unbind();
                $('#check-event').on('click', function () {
                    update_status_atdc("Y");
                });

                // 결석 버튼
                $('#times-event').unbind();
                $('#times-event').on('click', function () {
                    update_status_atdc("N");
                });

                // 예약 버튼
                $('#question-event').unbind();
                $('#question-event').on('click', function () {
                    update_status_atdc("R");
                });

                $('#eventModal').modal('show');
            }
        });
    };
    function delete_rv() {
        $.ajax({
            type: "post",
            url: "/rvmg/delete",
            async: false,
            data: {
                reservation_id: $('#modal_reservation_id').val()
            },
            error: function (error) {
                isSE(error);
            },
            success: function (datas) {
                var d = JSON.parse(datas);
                if (d.rt_code < 1) {
                    alert("삭제할 수 없습니다.");
                } else {
                    $('#p_class_id').trigger("change");
                }
            },
            complete: function () {
                $('#eventModal').modal('hide');
            }
        });
    }

    function update_status_atdc(status_atdc) {
        $.ajax({
            type: "post",
            url: "/rvmg/update",
            async: false,
            data: {
                reservation_id: $('#modal_reservation_id').val(),
                status_atdc: status_atdc
            },
            error: function (error) {
                isSE(error);
            },
            success: function (datas) {
                var d = JSON.parse(datas);
                if (d.rt_code < 1) {
                    alert("변경할 수 없습니다.");
                } else {
                    $('#p_class_id').trigger("change");
                }
            },
            complete: function () {
                $('#eventModal').modal('hide');
            }
        });
    }

    function select_user_membership(select_dt) {
        $.ajax({
            type: "post",
            url: "/rvmg/select_user_membership",
            async: false,
            data: {
                p_select_dt: select_dt,
                p_user_id: $('#reg_modal_user_id').val(),
                p_class_id: $("#p_class_id").val()
            },
            error: function (error) {
                isSE(error);
            },
            success: function (datas) {
                var rows = JSON.parse(datas);
                $("#reg_modal_user_membership_id option:not(:eq(0))").remove();
                $.each(rows, function (i, row) {
                    $("#reg_modal_user_membership_id").append(
                        "<option value='" + row.user_membership_id + "'>" + row.membership_name + "</op" +
                        "tion>"
                    );
                });
            }
        });
    }

    function cal_option() {
        var bm = $('#p_class_id option:selected').data("bm");
        $('#calendar').fullCalendar("option", "slotDuration", "00:" + bm);
        $('#calendar').fullCalendar("option", "slotLabelInterval", "00:" + bm);

        var mn = $('#p_class_id option:selected').data("mn");
        $('#calendar').fullCalendar("option", "minTime", mn);

        var mx = $('#p_class_id option:selected').data("mx");
        $('#calendar').fullCalendar("option", "maxTime", mx);

        var pre_bd = $('#p_class_id option:selected').data("bd");
        if (pre_bd.charAt(pre_bd.length - 1) === ";") {
            pre_bd = pre_bd.slice(0, -1);
        }
        var bd = pre_bd.split(";");

        var rt = bd.map(e => {
            e = Number(e);
            return e;
        });
        $('#calendar').fullCalendar(
            "option",
            "hiddenDays",
            JSON.stringify(rt) === JSON.stringify([0])
                ? []
                : rt
        );

        $('.fc-time-grid-container').css("overflow", "scroll");
    }

    function filtering(event) {
        var show_username = true;
        var show_type = true;
        var types = $('#type_filter').val();
        return true;
    }
</script>

<?php
    include_once("./inc/footer.php");
?>