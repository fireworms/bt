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
                    <div class="form-control form-label" >클래스</div>
                </div>
                <div class="col-xs-8">
                    <select class="form-control" id="p_class_id">
                        <?php echo $classOption; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-control form-label">회원 아이디</div>
                </div>
                <div class="col-xs-8">
                    <select class="form-control selectpicker" id="p_user_id" data-live-search="true">
                        <option value="">= 선택 =</option>
                        <?php echo $userOption; ?>
                    </select>
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
                    <label for="user_name" >시작일(숨김)</label>
                    <input type="text" class="filter" id="p_start" style="width: 100%;">
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="form-group">
                    <label for="user_name" >종료일(숨김)</label>
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
        <div id="calendar" style="width: 100%; display: inline-block;"></div>
    </div>
    <!-- 일정 추가 MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="rv-status-Modal">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
<!-- 						<div class="modal-dialog" role="document"> -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title h4">주간 예약 현황</h1>
                </div>
                <div class="modal-body" >
<!-- 									<h1 class="h5"><i class="fas fa-exclamation"></i> 회원권 정보</h1> -->
                    <div class="row">
                        <div class="col-xs-12">
                            <table id="row_info2" class="table table-sm table-hover" >
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
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title h4">출결 관리</h1>
                </div>
                <div class="modal-body" >
                    <input type="hidden" id="modal_reservation_id" />
                    <h1 class="h5"><i class="fas fa-exclamation"></i> 회원권 정보</h1>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원명</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_user_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >연락처</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_user_contact"></div>
                        </div>
                    </div>
                    <div class="row modal_mode_view">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >시작일자</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_start"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >종료일자</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_end"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >결제금</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_payment"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >미수금</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_membership_unpaid_amount"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >등록횟수</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_retention_cnt_rv"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >잔여횟수</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_remain_cnt_at"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >잔여횟수(예약포함)</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_remain_cnt_rv"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >메모</div>
                        </div>
                        <div class="col-xs-8">
                            <textarea class="form-control" id="modal_span_memo" rows="2" style="width: 100%; resize: none;"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-2" style="text-align: 	;">
                            <button type="button" class="btn btn-danger" id="trash-event"><i class="far fa-trash-alt"></i> 삭제</button>
                        </div>
                        <div class="col-xs-10" style="text-align: right;">
                            <button type="button" class="btn btn-success" id="check-event"><i class="far fa-check-circle"></i> 출석</button>
                            <button type="button" class="btn btn-warning" id="times-event"><i class="far fa-times-circle"></i> 결석</button>
                            <button type="button" class="btn btn-info" id="question-event"><i class="far fa-question-circle"></i> 초기화</button>
                        </div>
                    </div>
                    <hr>
                    <h1 class="h5"><i class="fas fa-exclamation"></i> 회원권 이력 정보</h1>
                    <div class="row">
                        <div class="col-xs-12" style="color: gray; max-height: 150px; overflow-y: auto;">
                            <table id="row_info2" class="table table-sm table-hover" >
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
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title h4">예약 등록</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="reg_modal_reservation_dt" />
                    <input type="hidden" id="reg_modal_start_hh" />
                    <input type="hidden" id="reg_modal_start_mi" />
                    <input type="hidden" id="reg_modal_end_hh" />
                    <input type="hidden" id="reg_modal_end_mi" />
                    <input type="hidden" id="reg_modal_class_id" />
                    
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원명</div>
                        </div>
                        <div class="col-xs-8">
                            <select class="form-control selectpicker" id="reg_modal_user_id" data-live-search="true">
                                <option value="">= 선택 =</option>
                                <?php echo $userOption; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >클래스</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_class_name"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <select class="form-control" id="reg_modal_user_membership_id">
                                <option value="">= 선택 =</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >날짜</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_reservation_dt"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >시작</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_start"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >종료</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="reg_modal_span_end"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >메모</div>
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
		fn_control_mouse();
		
		var calendar = $('#calendar').fullCalendar({
			height: "auto",
			width: "auto",
			slotDuration: "00:20",
			slotLabelInterval : "00:20:00",
			minTime : '06:00:00',
			maxTime : '24:00:00',
			hiddenDays: [ ], // 전체
			displayEventTime: false,
			slotLabelFormat : 'HH:mm',
			locale					: 'ko',
			timezone				: "local",
			nextDayThreshold		: "09:00:00",
			allDaySlot				: false,
			displayEventTime		: true,
			displayEventEnd			: true,
			firstDay				: 1, // 월요일이 먼저 오게 하려면 1
			weekNumbers				: false,
			selectable				: true,
			weekNumberCalculation	: "ISO",
			eventLimit				: true,
			eventLimitClick			: 'week', // popover
			navLinks				: false,
			defaultView				: 'agendaWeek',
			defaultDate				: moment(), // 실제 사용시 현재 날짜로 수정
			timeFormat				: ' ', // 이벤트 날짜 표시 포멧('HH:mm') 미표시하기로 하여 포멧을 뭉갬
			defaultTimedEventDuration: '01:00:00',
			editable				: false,
			weekends				: true,
			nowIndicator			: true,
			dayPopoverFormat		: 'MM/DD dddd',
			longPressDelay			: 0,
			eventLongPressDelay		: 0,
			selectLongPressDelay	: 200,
			header					: {
				right : 'prev, week_rv_status, next',
				left : 'title'
			},
			views: {
				month : {
					columnFormat : 'dddd',
					eventLimit : 12
				},
				agendaWeek : {
					columnFormat : 'MM/DD ddd',
					titleFormat: 'YYYY년 MM월 DD일',
					eventLimit : false
				},
				agendaDay : {
					columnFormat : 'dddd',
					eventLimit : false
				},
				listWeek : {
					columnFormat : ''
				}
			},
			eventRender: function (event, element, view) {
				// 배경색 적용
				element.css("background", event.reservation_color);
				
				// 폰트색 적용
				element.find(".fc-title").css("color","#505363");
				
				// 상태 출력 추가
				if(event.status_atdc === "R"){
					element.find(".fc-title").prepend('<span style="font-size: 1.5em; color: #505363;"><i class="far fa-question-circle"></i></span><br>');
				}else if(event.status_atdc === "Y"){
					element.find(".fc-title").prepend('<span style="font-size: 1.5em; color: green;"><i class="far fa-check-circle"></i></span><br>');
				}else if(event.status_atdc === "N"){
					element.find(".fc-title").prepend('<span style="font-size: 1.5em; color: red;"><i class="far fa-times-circle"></i></span><br>');
				}
				
				// 이벤트 가득 채우기
				$(".fc-event-container").css("margin","0");
				
				return filtering(event);
			},
			events: function (start, end, timezone, callback) {
				$('#calendar').fullCalendar('removeEvents');
				cal_option();
				var p_start = moment(start).format('YYYY-MM-DD');
				var p_end = moment(end).subtract(1, 'day').format('YYYY-MM-DD');
				$("#p_start").val(p_start);
				$("#p_end").val(p_end);
				$.ajax({
					type: "post",
					url: "/reservation_proc.php",
					data: {
						p_user_id : $("#p_user_id").val(),
						p_user_name : $("#p_user_name").val(),
						p_class_id : $("#p_class_id").val(),
						p_start : p_start,
						p_end : p_end,
                        flag: 'select'
					},
					error : function(error) {
						isSE(error);
					},
					success: function (datas) {
						var d = JSON.parse(datas).data;
						callback(d);
					},
				});
			},
			eventAfterAllRender: function (view) { },
			select: function (startDate, endDate, jsEvent, view) {
				if(moment(endDate).diff(moment(startDate), 'minutes') > $('#class_id option:selected').data("bm")){
					alert("한 번에 여러 수업을 선택할 수 없습니다.");
					return false;
				}
				
				var modal_param = {
						modal_reservation_dt : moment(startDate).format('YYYY-MM-DD'),
						modal_class_id : $("#p_class_id option:selected").val(),
						modal_class_name : $("#p_class_id option:selected").text(),
						modal_start_hh : moment(startDate).format('HH'),
						modal_start_mi : moment(startDate).format('mm'),
						modal_end_hh : moment(endDate).format('HH'),
						modal_end_mi : moment(endDate).format('mm')
				};
				newEvent(modal_param);},
			// 기존 이벤트 출력
			eventClick: function (event, jsEvent, view) {
				editEvent(event);
			},
			customButtons: {
				week_rv_status : {
					text: '주간현황',
					click : function () {
						$("#p_start").val();
						$.ajax({
							type: "post",
							url: "/reservation_proc.php",
							async: false,
							data: {
								p_start : $("#p_start").val(),
								p_end : $("#p_end").val(),
								p_class_id : $("#p_class_id").val(),
                                flag: 'select_rv_week'
							},
							beforeSend: function(){
								$(".week_rv_status_bd").empty();
							},
							error : function(error) {
								isSE(error);
							},
							success: function (rt) {
								var d = JSON.parse(rt);
								console.log(d);
								if(d.length > 0){
									var html_str = "";
									$.each(d, function(i, row){
										if(row.is_current === "V"){
											html_str += '<tr style="background-color: hotpink; color: floralwhite;">';
										}else{
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
								}else{
									$(".week_rv_status_bd").append('<tr style="text-align: center;"><td colspan="5">데이터가 없습니다.</td></tr>');
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
				url: "/reservation_proc.php",
				async: false,
				data: {
					p_user_id : $("#p_user_id").val(),
					p_user_name : $("#p_user_name").val(),
					p_class_id : $("#p_class_id").val(),
					p_start : p_start,
					p_end : p_end,
                    flag: 'select'
				},
				error : function(error) {
					isSE(error);
				},
				success: function (datas) {
					var d = JSON.parse(datas).data;
					$('#calendar').fullCalendar('removeEvents');
					$('#calendar').fullCalendar('addEventSource', d);
					$("#calendar").fullCalendar("rerenderEvents");
				}
			});
		});
		
		$("#p_user_id").on("change", function(e){
			$('#p_class_id').trigger("change");
		});
		
		$("#p_user_name").on("keyup", function(e){
			if(e.which === 13){
				$('#p_class_id').trigger("change");
			}
		});
		
		$("#reg_modal_user_id").on("change", function(e){
			if($(this).val() === "") return false;
			
			select_user_membership($('#reg_modal_reservation_dt').val());
		});
	});
	
	var newEvent = function(d) {
		$('#reg_modal_user_id').val("").change();
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
		$('#save-event').on('click', function() {
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
				type : "post",
				url : "/reservation_proc.php",
				async : false,
				data : {
					reservation_dt : $('#reg_modal_reservation_dt').val(),
					start_hh : $('#reg_modal_start_hh').val(),
					start_mi : $('#reg_modal_start_mi').val(),
					end_hh : $('#reg_modal_end_hh').val(),
					end_mi : $('#reg_modal_end_mi').val(),
					class_id : $('#reg_modal_class_id').val(),
					user_membership_id : $("#reg_modal_user_membership_id").val(),
					user_id : $("#reg_modal_user_id").val(),
					memo : $("#reg_modal_memo").val(),
                    flag: 'insert'
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas);
					switch(d.rt_code)
					{
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
				complete : function() {
					$('#regist-Modal').modal('hide');
                    $('#p_class_id').trigger("change");
				}
			});
		});
	};
	
	var editEvent = function (event, element, view) {
		$.ajax({
			type: "post",
			url: "/reservation_proc.php",
			async: false,
			data: {
				user_membership_id : event.user_membership_id,
				reservation_id : event.reservation_id,
                flag: 'select_detail'
			},
			beforeSend: function(){
				$("tbody.row_info2").empty();
			},
			error : function(error) {
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
				$.each(d2, function(i, row){
					if(row.is_current === "V"){
						str_d2 += '	<tr style="background-color: hotpink; color: floralwhite;">';
					}else{
						str_d2 += '	<tr>';
					}
					str_d2 += '		<td style="text-align: center;">' + row.membership_name + '</td>';
					str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.reservation_dt + '</td>';
					str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.reservation_tm + '</td>';
					str_d2 += '		<td style="text-align: center; white-space: nowrap;">' + row.status_atdc_text + '</td>';
					str_d2 += '	</tr>';
				});
				$("tbody.row_info2").append(str_d2);
				
				// 간격 조정
				$("#row_info2>thead>tr>th,#row_info2>tbody>tr>td").css("padding", "2px");
				
				// 예약 취소 버튼
				$('#trash-event').unbind();
				$('#trash-event').on('click', function() {
					delete_rv();
				});
				
				// 출석 버튼
				$('#check-event').unbind();
				$('#check-event').on('click', function() {
					update_status_atdc("Y");
				});
				
				// 결석 버튼
				$('#times-event').unbind();
				$('#times-event').on('click', function() {
					update_status_atdc("N");
				});
				
				// 예약 버튼
				$('#question-event').unbind();
				$('#question-event').on('click', function() {
					update_status_atdc("R");
				});
				
				$('#eventModal').modal('show');
			}
		});
	};
	function delete_rv(){
		$.ajax({
			type : "post",
			url : "/reservation_proc.php",
			async : false,
			data : {
				reservation_id : $('#modal_reservation_id').val(),
                flag: 'delete',
			},
			error : function(error) {
				isSE(error);
			},
			success : function(datas) {
				var d = JSON.parse(datas);
				if (d.status == 'error') {
					alert("삭제할 수 없습니다.");
				}else{
					$('#p_class_id').trigger("change");
				}
			},
			complete : function() {
				$('#eventModal').modal('hide');
			}
		});
	}
	
	function update_status_atdc(status_atdc){
		$.ajax({
			type : "post",
			url : "reservation_proc.php",
			async : false,
			data : {
				reservation_id : $('#modal_reservation_id').val(),
				status_atdc : status_atdc,
                flag: 'update',
			},
			error : function(error) {
				isSE(error);
			},
			success : function(datas) {
				var d = JSON.parse(datas);
				if (d.status == 'error') {
					alert("변경할 수 없습니다.");
				}else{
					$('#p_class_id').trigger("change");
				}
			},
			complete : function() {
				$('#eventModal').modal('hide');
			}
		});
	}
	
	function select_user_membership(select_dt) {
		$.ajax({
			type: "post",
			url: "/reservation_proc.php",
			async: false,
			data: {
				p_select_dt : select_dt,
				p_user_id : $('#reg_modal_user_id').val(),
				p_class_id : $("#p_class_id").val(),
                flag: 'select_user_membership'
			},
			error : function(error) {
				isSE(error);
			},
			success: function (datas) {
				var rows = JSON.parse(datas).data;
				$("#reg_modal_user_membership_id option:not(:eq(0))").remove();
				$.each(rows, function(i, row){
					$("#reg_modal_user_membership_id").append("<option value='" + row.user_membership_id + "'>" + row.membership_name + "</option>");
				});
			}
		});
	}
	
	function cal_option(){
		var bm = $('#p_class_id option:selected').data("bm");
		$('#calendar').fullCalendar("option", "slotDuration", "00:" + bm);
		$('#calendar').fullCalendar("option", "slotLabelInterval", "00:" + bm);
		
		var mn = $('#p_class_id option:selected').data("mn");
		$('#calendar').fullCalendar("option", "minTime", mn);
		
		var mx = $('#p_class_id option:selected').data("mx");
		$('#calendar').fullCalendar("option", "maxTime", mx);
		
		var pre_bd = $('#p_class_id option:selected').data("bd");
		if(pre_bd.charAt(pre_bd.length - 1) === ";"){
			pre_bd = pre_bd.slice(0, -1);
		}
		var bd = pre_bd.split(";");
		
		var rt = bd.map(e => {
			e = Number(e);
			return e;
		});
		$('#calendar').fullCalendar("option", "hiddenDays", JSON.stringify(rt) === JSON.stringify([0]) ? [] : rt);
		
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