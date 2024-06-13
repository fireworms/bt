<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">예약</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-control form-label" >클래스</div>
                </div>
                <div class="col-xs-8">
                    <select class="form-control" id="class_id">
                        <?php echo $classOption; ?>
                    </select>
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="form-group">
                    <label for="user_id" >회원번호(숨김)</label>
                    <input type="text" class="filter" id="user_id" style="width: 100%;" value="KUMCCMADM">
                </div>
            </div>
            <div class="row" style="display: none;">
                <div class="form-group">
                    <label for="user_name" >회원명(숨김)</label>
                    <input type="text" class="filter" id="user_name" style="width: 100%;" value="메인관리자">
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
    <div class="modal fade" tabindex="-1" role="dialog" id="eventModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="modal_reservation_dt" />
                    <input type="hidden" id="modal_start_hh" />
                    <input type="hidden" id="modal_start_mi" />
                    <input type="hidden" id="modal_end_hh" />
                    <input type="hidden" id="modal_end_mi" />
                    <input type="hidden" id="modal_class_id" />
                    
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
                            <div class="form-control form-label" >클래스</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_class_name"></div>
                        </div>
                    </div>
                    <div class="row modal_mode_new">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <select class="form-control" id="modal_user_membership_id">
                                <option value="">= 선택 =</option>
                            </select>
                        </div>
                    </div>
                    <div class="row modal_mode_view">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >회원권</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_user_membership_id"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >날짜</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_reservation_dt"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >시작</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_start"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-control form-label" >종료</div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-control" id="modal_span_end"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modalBtnContainer-addEvent">
                    <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
                    <button type="button" class="btn btn-primary" id="save-event">저장</button>
                </div>
                <div class="modal-footer modalBtnContainer-modifyEvent">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
			defaultDate				: moment("2024-06-13"), // 실제 사용시 현재 날짜로 수정
			timeFormat				: ' ', // 이벤트 날짜 표시 포멧('HH:mm') 미표시하기로 하여 포멧을 뭉갬
			defaultTimedEventDuration: '01:00:00',
			editable				: false,
			weekends				: true,
			nowIndicator			: false,
			dayPopoverFormat		: 'MM/DD dddd',
			longPressDelay			: 0,
			eventLongPressDelay		: 0,
			selectLongPressDelay	: 200,
			header					: {
				right : 'prev, next',
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
			viewRender: function(view, element){
				console.log("viewRender1", view);
				console.log("viewRender2", element);
			},
			customButtons			 : { // 주말 숨기기 & 보이기 버튼
				viewWeekends : {
					text: '주말',
					click : function () {
						activeInactiveWeekends ? activeInactiveWeekends = false : activeInactiveWeekends = true;
						$('#calendar').fullCalendar('option', { 
							weekends: activeInactiveWeekends
						});
					}
				}
			},
			eventRender: function (event, element, view) {
				// 배경색 적용
				element.css("background", event.reservation_color);
				// 배경색 적용
				element.find(".fc-title").css("color","#505363");
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
						p_user_id : $("#user_id").val(),
						p_class_id : $("#class_id").val(),
						p_start : p_start,
						p_end : p_end,
                        flag: 'select'
					},
					error : function(error) {
						isSE(error);
					},
					success: function (datas) {
						var d = JSON.parse(datas);
						callback(d);
					},
				});
			},
			eventAfterAllRender: function (view) {
				$(".fc-left").append("<br>");
				console.log("eventAfterAllRender", view);
				if (view.name == "month") $(".fc-content").css('height', 'auto');
			},
			// 신규 이벤트 등록
			select: function (startDate, endDate, jsEvent, view) {
				if(moment(endDate).diff(moment(startDate), 'minutes') > $('#class_id option:selected').data("bm")){
					alert("한 번에 여러 수업을 선택할 수 없습니다.");
					return false;
				}
				
				select_user_membership(moment(startDate).format('YYYY-MM-DD'));
				
				var modal_param = {
						modal_reservation_dt : moment(startDate).format('YYYY-MM-DD'),
						modal_class_id : $("#class_id option:selected").val(),
						modal_class_name : $("#class_id option:selected").text(),
						modal_user_id : $("#user_id").val(),
						modal_user_name : $("#user_name").val(),
						modal_start_hh : moment(startDate).format('HH'),
						modal_start_mi : moment(startDate).format('mm'),
						modal_end_hh : moment(endDate).format('HH'),
						modal_end_mi : moment(endDate).format('mm')
				};
				newEvent(modal_param);
			},
			// 기존 이벤트 출력
			eventClick: function (event, jsEvent, view) {
				editEvent(event);
			}
		});
		
		// 클래스 변경
		$('#class_id').on('change', function () {
			cal_option();
			var p_start = $("#p_start").val();
			var p_end = $("#p_end").val();
			$.ajax({
				type: "post",
				url: "/reservation_proc.php",
				async: false,
				data: {
					p_user_id : $("#user_id").val(),
					p_class_id : $("#class_id").val(),
					p_start : p_start,
					p_end : p_end,
                    flag: 'select_rv_only'
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
	});
	
	function select_user_membership(select_dt) {
		$.ajax({
			type: "post",
			url: "/rv/select_user_membership",
			async: false,
			data: {
				p_select_dt : select_dt,
				p_user_id : $("#user_id").val(),
				p_class_id : $("#class_id").val()
			},
			error : function(error) {
				isSE(error);
			},
			success: function (datas) {
				var rows = JSON.parse(datas);
				$("#modal_user_membership_id option:not(:eq(0))").remove();
				$.each(rows, function(i, row){
					$("#modal_user_membership_id").append("<option value='" + row.user_membership_id + "'>" + row.membership_name + "</option>");
				});
			}
		});
	}
	
	var newEvent = function(d) {
		$('.modal-title').text("일정 등록");
		
		$('.modal_mode_new').show();
		$('.modal_mode_view').hide();
		
		$('#modal_reservation_dt').val(d.modal_reservation_dt);
		$('#modal_start_hh').val(d.modal_start_hh);
		$('#modal_start_mi').val(d.modal_start_mi);
		$('#modal_end_hh').val(d.modal_end_hh);
		$('#modal_end_mi').val(d.modal_end_mi);
		$('#modal_class_id').val(d.modal_class_id);

		$('#modal_span_reservation_dt').text(d.modal_reservation_dt);
		$('#modal_span_user_name').text(d.modal_user_name);
		$('#modal_span_start').text(d.modal_start_hh + ":" + d.modal_start_mi);
		$('#modal_span_end').text(d.modal_end_hh + ":" + d.modal_end_mi);
		$('#modal_span_class_name').text(d.modal_class_name);
		
		$('#modal_memo').val("");

		$('.modalBtnContainer-addEvent').show();
		$('.modalBtnContainer-modifyEvent').hide();
		
		$('#eventModal').modal('show');

		$('#save-event').unbind();
		$('#save-event').on('click', function() {
			if ($("#modal_user_membership_id").val().trim() === "") {
				alert("회원권을 선택하세요.");
				return false;
			}
			// 새로운 일정 저장
			$.ajax({
				type : "post",
				url : "/rv/insert",
				async : false,
				data : {
					reservation_dt : $('#modal_reservation_dt').val(),
					start_hh : $('#modal_start_hh').val(),
					start_mi : $('#modal_start_mi').val(),
					end_hh : $('#modal_end_hh').val(),
					end_mi : $('#modal_end_mi').val(),
					class_id : $('#modal_class_id').val(),
					user_membership_id : $("#modal_user_membership_id").val(),
					user_id : $("#user_id").val()
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas);
					if(d.rt_code < 0){
						alert("등록할 수 없습니다.");
					}else{
						$('#class_id').trigger("change");
					}
				},
				complete : function() {
					$('#eventModal').modal('hide');
				}
			});
		});
	};
	
	var editEvent = function (event, element, view) {
		$('.modal-title').text("일정 확인");
		
		$('.modal_mode_new').hide();
		$('.modal_mode_view').show();
		
		$('#modal_reservation_dt').val(event.reservation_dt);
		$('#modal_start_hh').val(event.start_hh);
		$('#modal_start_mi').val(event.start_mi);
		$('#modal_end_hh').val(event.end_hh);
		$('#modal_end_mi').val(event.end_mi);
		$('#modal_class_id').val(event.class_id);

		$('#modal_span_user_membership_id').text(event.reservation_dt);
		$('#modal_span_reservation_dt').text(event.reservation_dt);
		$('#modal_span_user_name').text(event.user_name);
		$('#modal_span_start').text(event.start_hh + ":" + event.start_mi);
		$('#modal_span_end').text(event.end_hh + ":" + event.end_mi);
		$('#modal_span_class_name').text(event.class_name);
		
		$('#modal_memo').val("");

		$('.modalBtnContainer-addEvent').hide();
		$('.modalBtnContainer-modifyEvent').show();
		
		$('#eventModal').modal('show');
	};
	
	function filtering(event) {
		var show_username = true;
		var show_type = true;
		var types = $('#type_filter').val();
		return true;
	}
	
	function cal_option(){
		var bm = $('#class_id option:selected').data("bm");
		$('#calendar').fullCalendar("option", "slotDuration", "00:" + bm);
		$('#calendar').fullCalendar("option", "slotLabelInterval", "00:" + bm);
		
		var mn = $('#class_id option:selected').data("mn");
		$('#calendar').fullCalendar("option", "minTime", mn);
		
		var mx = $('#class_id option:selected').data("mx");
		$('#calendar').fullCalendar("option", "maxTime", mx);
		
		//var bd = $('#class_id option:selected').data("bd").split(";");
		
		var pre_bd = $('#class_id option:selected').data("bd");
		var bd = "";
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
	</script>

<?php
    include_once("./inc/footer.php");
?>