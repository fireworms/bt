<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>                
				<!-- End of Topbar -->
				<div class="container">
					<!-- 					<h1 class="h3">예약</h1> -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">클래스 관리</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >상태</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_status">
										<option value="">= 선택 =</option>
										<option value="Y" selected>활성</option>
										<option value="N">비활성</option>
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
									<th>class_id</th>
									<th>class_name</th>
									<th>class_base_minute</th>
									<th>class_base_days</th>
									<th>class_base_first</th>
									<th>class_base_last</th>
									<th>status</th>
									<th>status_text</th>
								</tr>
							</thead>
						</table>
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
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">클래스 아이디</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_class_id" placeholder="클래스 아이디를 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">클래스</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_class_name" placeholder="클래스명을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">수업시간</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_class_base_minute" placeholder="수업시간을 분 단위로 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">쉬는요일</div>
										</div>
										<div class="col-xs-8 form-check-inline">
											<!-- <input type="number" class="form-control" id="modal_class_base_days"> -->
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_1">
											<label class="form-check-label" for="modal_class_base_days_1">&nbsp;월</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_2">
											<label class="form-check-label" for="modal_class_base_days_2">&nbsp;화</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_3">
											<label class="form-check-label" for="modal_class_base_days_3">&nbsp;수</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_4">
											<label class="form-check-label" for="modal_class_base_days_4">&nbsp;목</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_5">
											<label class="form-check-label" for="modal_class_base_days_5">&nbsp;금</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_6">
											<label class="form-check-label" for="modal_class_base_days_6">&nbsp;토</label>&nbsp;&nbsp;
											<input type="checkbox" class="form-check-input" id="modal_class_base_days_0">
											<label class="form-check-label" for="modal_class_base_days_0">&nbsp;일</label>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">시작시각</div>
										</div>
										<div class="col-xs-8">
											<input type="time" class="form-control" id="modal_class_base_first">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">종료시각</div>
										</div>
										<div class="col-xs-8">
											<input type="time" class="form-control" id="modal_class_base_last">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">상태</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control" id="modal_status">
												<option value="Y">활성화</option>
												<option value="N">비활성화</option>
											</select>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-xs-12" style="color: gray;">
											<ul>
												<li>수업시간 : 한 수업의 소요시간을 의미( 30 -> 06:00 ~ 06:30, 06:30 ~ 07:00 )</li>
												<li>쉬는요일 : 선택된 요일은 시간표에서 미출력( 토, 일 선택 -> 시간표 월 ~ 금 출력 )</li>
												<li>시작시각 : 첫 교시의 시작 시각을 의미( 시간표 첫 교시의 시작 시각 )</li>
												<li>종료시각 : 마지막 교시의 종료 시각을 의미( 시간표 마지막 교시의 종료 시각 )</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="modal-footer modalBtnContainer-addEvent">
									<button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
									<button type="button" class="btn btn-primary" id="save-event">저장</button>
								</div>
								<div class="modal-footer modalBtnContainer-modifyEvent">
									<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
									<button type="button" class="btn btn-primary" id="update-event">저장</button>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
				</div>
				<!-- /.container -->
			</div>
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->
	<script type="text/javascript">
		var table;
		var $ = jQuery.noConflict();
		$(document).ready(function() {
			table = $('#myTable').DataTable({
				ajax : {
					url : '/class_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.status = $("#p_status").val();
                        param.flag = 'select';
					},
					dataSrc : function(json) {
						console.log(json);
						return json.data;
					}
				},
				processing : true,
				responsive : true,
				ordering : false,
				columns : [ {
					data : "rn",
					title : "#",
					width : 10
				}, {
					data : "class_id",
					title : "클래스 아이디",
					width : 100
				}, {
					data : "class_name",
					title : "클래스",
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
						}
						return data;
					}
				}, {
					data : "class_base_minute",
					title : "수업시간",
					width : 100
				}, {
					data : "class_base_days",
					title : "쉬는요일 설정",
					width : 150,
					render : function(data, type, row){
						if(typeof data === "string"){
							var bd = data.split(";");
							var rt = bd.map(e => {
								switch(e){
									case "1": e = "월"; break;
									case "2": e = "화"; break;
									case "3": e = "수"; break;
									case "4": e = "목"; break;
									case "5": e = "금"; break;
									case "6": e = "토"; break;
									case "0": e = "일"; break;
								}
								return e;
							});
							return rt;
						}else{
							return "";
						}
					}
				}, {
					data : "class_base_first",
					title : "일과시작 시각",
					width : 150
				}, {
					data : "class_base_last",
					title : "일과종료 시각",
					width : 150
				}, {
					data : "status",
					title : "상태",
					width : 50,
					visible : false
				}, {
					data : "status_text",
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

						$('.modal-title').text("클래스 등록");
						$('#modal_class_id').prop("readonly", false);
						$("[id^=modal_class_base_days_").prop("checked", false);

						$('#modal_class_id').val("");
						$('#modal_class_name').val("");
						$('#modal_class_base_minute').val("");
						$('#modal_class_base_first').val("");
						$('#modal_class_base_last').val("");
						$('#modal_status option:eq(0)').prop("selected", true);


						$('.modalBtnContainer-addEvent').show();
						$('.modalBtnContainer-modifyEvent').hide();
						$('#eventModal').modal('show');

						$('#save-event').unbind();
						$('#save-event').on('click', function() {
							if ($("#modal_class_id").val().trim() === "") {
								alert("클래스 아이디를 입력하세요.");
								return false;
							}
							if ($("#modal_class_name").val().trim() === "") {
								alert("클래스를 입력하세요.");
								return false;
							}
							if ($("#modal_class_base_minute").val().trim() === "") {
								alert("수업시간을 입력하세요.");
								return false;
							}
							if ($("#modal_class_base_first").val().trim() === "") {
								alert("시작시각을 입력하세요.");
								return false;
							}
							if ($("#modal_class_base_last").val().trim() === "") {
								alert("시작시각을 입력하세요.");
								return false;
							}
							
							var str_class_base_days = "";
							str_class_base_days += $("#modal_class_base_days_1").is(":checked") ? "1;" : "";
							str_class_base_days += $("#modal_class_base_days_2").is(":checked") ? "2;" : "";
							str_class_base_days += $("#modal_class_base_days_3").is(":checked") ? "3;" : "";
							str_class_base_days += $("#modal_class_base_days_4").is(":checked") ? "4;" : "";
							str_class_base_days += $("#modal_class_base_days_5").is(":checked") ? "5;" : "";
							str_class_base_days += $("#modal_class_base_days_6").is(":checked") ? "6;" : "";
							str_class_base_days += $("#modal_class_base_days_0").is(":checked") ? "0;" : "";
							
							// 새로운 클래스 등록
							$.ajax({
								type : "post",
								url : "/class_proc.php",
								async : false,
								data : {
									class_id : $('#modal_class_id').val(),
									class_name : $('#modal_class_name').val(),
									class_base_minute : $('#modal_class_base_minute').val(),
									class_base_days : str_class_base_days,
									class_base_first : $('#modal_class_base_first').val().substring(0, 5).concat(":00"),
									class_base_last : $('#modal_class_base_last').val().substring(0, 5).concat(":00"),
									status : $('#modal_status').val(),
                                    flag: 'insert',
								},
								error : function(error) {
									isSE(error);
								},
								success : function(datas) {
									var d = JSON.parse(datas);
									if (d.status == 'error') {
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
					}
				}, {
					text : '조회',
					className : 'btn btn-sm btn-info',
					action : function(e, dt, node, config) {
						table.ajax.reload();
					}
				} ]
				
			});
		});
		function edit_event(obj){
			console.log(table.row($(obj).parents("tr:first")).data());
			editEvent(table.row($(obj).parents("tr:first")).data());
		}
		var editEvent = function(d) {
			$('.modal-title').text("클래스 변경");
			$('#modal_class_id').prop("readonly", true);
			$("[id^=modal_class_base_days_").prop("checked", false);

			$.ajax({
				type : "post",
				url : "/class_proc.php",
				async : false,
				data : {
					class_id: d.class_id,
                    flag: 'select',
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas).data[0];
					$('#modal_class_id').val(d.class_id);
					$('#modal_class_name').val(d.class_name);
					$('#modal_class_base_minute').val(d.class_base_minute);
					$('#modal_class_base_days').val(d.class_base_days);
					if(typeof d.class_base_days === "string"){
						var bd = d.class_base_days.split(";");
						var rt = bd.map(e => {
							$('#modal_class_base_days_' + e).prop("checked", true);
							return e;
						});
					}
					$('#modal_class_base_first').val(d.class_base_first);
					$('#modal_class_base_last').val(d.class_base_last);
					$('#modal_status').val(d.status);

					$('.modalBtnContainer-addEvent').hide();
					$('.modalBtnContainer-modifyEvent').show();
					$('#eventModal').modal('show');
					
					$('#update-event').unbind();
					$('#update-event').on('click', function() {
						if ($("#modal_class_name").val().trim() === "") {
							alert("클래스를 입력하세요.");
							return false;
						}
						if ($("#modal_class_base_minute").val().trim() === "") {
							alert("수업시간을 입력하세요.");
							return false;
						}
						if ($("#modal_class_base_first").val().trim() === "") {
							alert("시작시각을 입력하세요.");
							return false;
						}
						if ($("#modal_class_base_last").val().trim() === "") {
							alert("시작시각을 입력하세요.");
							return false;
						}
						
						var str_class_base_days = "";
						str_class_base_days += $("#modal_class_base_days_1").is(":checked") ? "1;" : "";
						str_class_base_days += $("#modal_class_base_days_2").is(":checked") ? "2;" : "";
						str_class_base_days += $("#modal_class_base_days_3").is(":checked") ? "3;" : "";
						str_class_base_days += $("#modal_class_base_days_4").is(":checked") ? "4;" : "";
						str_class_base_days += $("#modal_class_base_days_5").is(":checked") ? "5;" : "";
						str_class_base_days += $("#modal_class_base_days_6").is(":checked") ? "6;" : "";
						str_class_base_days += $("#modal_class_base_days_0").is(":checked") ? "0;" : "";
						// 클래스 정보 변경
						$.ajax({
							type : "post",
							url : "/class_proc.php",
							async : false,
							data : {
								class_id : $('#modal_class_id').val(),
								class_name : $('#modal_class_name').val(),
								class_base_minute : $('#modal_class_base_minute').val(),
								class_base_days : str_class_base_days,
								class_base_first : $('#modal_class_base_first').val().substring(0, 5).concat(":00"),
								class_base_last : $('#modal_class_base_last').val().substring(0, 5).concat(":00"),
								status : $('#modal_status').val(),
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
									table.ajax.reload();
								}
							},
							complete : function() {
								$('#eventModal').modal('hide');
							}
						});
					});
				},
				complete : function() { }
			});
		};
	</script>


<?php
    include_once("./inc/footer.php");
?>