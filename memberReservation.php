<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                <div class="container">
					<!-- 					<h1 class="h3">예약</h1> -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">회원별 예약 조회</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >회원 아이디</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control selectpicker" id="p_user_id" data-live-search="true">
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
											
												<option value="240318001">【240318001】 박윤서(현우)</option>
											
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
											
												<option value="240603001">【240603001】 이상민(정록)</option>
											
												<option value="240416001">【240416001】 이상협(정록)</option>
											
												<option value="240602002">【240602002】 이새보(현우)</option>
											
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
											
												<option value="240123001">【240123001】 이은경(현우)</option>
											
												<option value="240406001">【240406001】 이정민(현우)</option>
											
												<option value="240409002">【240409002】 이정원(현우)</option>
											
												<option value="240428001">【240428001】 이주영(현우)</option>
											
												<option value="240307001">【240307001】 이주호(정록)</option>
											
												<option value="240518002">【240518002】 이중희(정록)</option>
											
												<option value="240602001">【240602001】 이창민(현우)</option>
											
												<option value="240601001">【240601001】 이창호(정록)</option>
											
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
											
										
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >상태</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_status_atdc">
										<option value="">= 선택 =</option>
										<option value="Y">출석</option>
										<option value="N">결석</option>
										<option value="R">예약</option>
									</select>
								</div>
							</div>
						</div>
						<div class="panel-footer" style="padding: 0;"></div>
					</div>
					<div id="wrapper">
						<div id="loading"></div>
						<table id="myTable" class="display table table-striped table-bordered" style="width: 100%;">
							<thead>
								<tr>
									<th data-orderable="false">rn</th>
									<th>class_name</th>
									<th>membership_name</th>
									<th>user_id</th>
									<th>user_name</th>
									<th>reservation_dt</th>
									<th>start_tm</th>
									<th>end_tm</th>
									<th>memo</th>
									<th>status_atdc_text</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>

<script type="text/javascript">
    var table;
    var $ = jQuery.noConflict();
    $(document).ready(function() {
        table = $('#myTable').DataTable({
            ajax : {
// 					'url' : '/MOCK_DATA.json',
// 					'dataSrc' : ''
                url : '/rvmg/select_usrv.php',
                type : 'POST',
                async: false,
                data: function(param){
                    param.user_id = $("#p_user_id").val();
                    param.status_atdc = $("#p_status_atdc").val();
                },
                dataSrc : function(json) {
                    return json;
                }
            },
            processing : true,
            responsive : true,
            ordering : false,
// 				order : [ [ 0, 'asc' ] ],
            columns : [ {
                data : "rn",
                title : "#",
                width : 10
            }, {
                data : "class_name",
                title : "클래스",
                width : 150
            }, {
                data : "membership_name",
                title : "회원권",
                width : 200
            }, {
                data : "user_id",
                title : "회원 아이디",
                width : 120,
                visible : false
            }, {
                data : "user_name",
                title : "회원명",
                width : 80
            }, {
                data : "reservation_dt",
                title : "예약일",
                width : 150
            }, {
                data : "start_tm",
                title : "시작",
                width : 80
            }, {
                data : "end_tm",
                title : "종료",
                width : 80
            }, {
                data : "memo",
                title : "메모"
            }, {
                data : "status_atdc_text",
                title : "상태",
                width : 50
            } ],
            "language" : {
                "emptyTable" : "데이터가 없습니다.",
                "lengthMenu" : "페이지당 _MENU_ 개씩 보기",
                "info" : "현재 _START_ - _END_ / _TOTAL_건",
                "infoEmpty" : "데이터 없음",
                "infoFiltered" : "( _MAX_건의 데이터에서 필터링됨 )",
                "search" : "필터: ",
                "zeroRecords" : "일치하는 데이터가 없습니다.",
                "loadingRecords" : "로딩중...",
                "processing" : "잠시만 기다려 주세요...",
                "paginate" : {
                    "first" : "처음",
                    "last" : "마지막",
                    "next" : "다음",
                    "previous" : "이전"
                }
            },
            pagingType : "full_numbers",
            dom : 'Blrtip',
            buttons : [ {
                text : '등록',
                className : 'btn btn-sm btn-primary',
                action : function(e, dt, node, config) {

                    $('.modal-title').text("회원 등록");
                    $('#modal_user_id').prop("readonly", true);

                    $('#modal_user_id').val("");
                    $('#modal_user_name').val("");
                    $('#modal_user_contact').val("");
                    $('#modal_user_auth_us').prop("checked", true);
                    $('#modal_user_memo').val("");
                    $('#modal_user_status option:eq(0)').prop("selected", true);

                    $('#modal_memo').val("");

                    $('.modalBtnContainer-addEvent').show();
                    $('.modalBtnContainer-modifyEvent').hide();
                    $('#eventModal').modal('show');

                    $('#save-event').unbind();
                    $('#save-event').on('click', function() {
                        if ($("#modal_user_name").val().trim() === "") {
                            alert("회원명을 입력하세요.");
                            return false;
                        }
                        if ($("#modal_user_contact").val().trim().length < 4) {
                            alert("연락처(최소4자리)를 입력하세요.");
                            return false;
                        }
                        // 새로운 일정 저장
                        $.ajax({
                            type : "post",
                            url : "/us/insert",
                            async : false,
                            data : {
                                user_name : $('#modal_user_name').val(),
                                user_contact : $('#modal_user_contact').val(),
                                user_auth : $('#modal_user_auth_sa').is(":checked") ? "SA" : "US",
                                user_memo : $('#modal_user_memo').val()
                            },
                            error : function(error) {
                                isSE(error);
                            },
                            success : function(datas) {
                                var d = JSON.parse(datas);
                                if (d.rt_code < 0) {
                                    alert("등록할 수 없습니다.");
                                } else {
                                    table.ajax.reload();
                                }
                            },
                            complete : function() {
                                $('#eventModal').modal('hide');
                            }
                        });
                    });
                    // 					table.ajax.reload();
                }
            }, {
                extend : 'excelHtml5',
                text : '다운로드',
                className : 'btn btn-sm',
                bom : true
            }, {
                text : '조회',
                className : 'btn btn-sm btn-info',
                action : function(e, dt, node, config) {
                    table.ajax.reload();
                }
            } ]
            
        });

        // 	table.buttons().container().appendTo(
        // 		$('.panel-body', table.table().container())
        // 	);
        //	table.on('xhr', function() {
        //		var json = table.ajax.json();
        //		alert(json.data.length + ' row(s) were loaded');
        //	});
        /* Column별 검색기능 추가 */
// 			$('#myTable_filter').prepend('<select id="select"></select>');
// 			$('#myTable > thead > tr').children().each(function(indexInArray, valueOfElement) {
// 				$('#select').append('<option>' + valueOfElement.innerHTML + '</option>');
// 			});

// 			$('.dataTables_filter input').unbind().bind('keyup', function() {
// 				var colIndex = document.querySelector('#select').selectedIndex;
// 				table.column(colIndex).search(this.value).draw();
// 			});
        
        $("#p_user_id").on("change", function(e){
            table.ajax.reload();
        });
        
        $("#p_status_atdc").on("change", function(e){
            table.ajax.reload();
        });
    });
</script>


<?php
    include_once("./inc/footer.php");
?>