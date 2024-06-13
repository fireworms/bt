<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                <div class="container">
					<!-- 					<h1 class="h3">예약</h1> -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">회원 관리</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >회원명</div>
								</div>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="p_user_name" placeholder="Enter키 조회">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >상태</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_user_status">
										<option value="">= 선택 =</option>
										<option value="Y" selected>활성</option>
										<option value="N">비활성</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >권한</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_user_auth">
										<option value="">= 선택 =</option>
										<option value="US" selected>회원</option>
										<option value="SA">관리자</option>
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
									<th>user_id</th>
									<th>user_name</th>
									<th>user_pwd</th>
									<th>user_contact</th>
									<th>user_memo</th>
									<th>user_status</th>
									<th>user_status_text</th>
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
											<div class="form-control form-label">회원 아이디</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_user_id" placeholder="회원 아이디는 자동채번됩니다">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">회원명</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_user_name" placeholder="회원명을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">연락처(<strong style="color:red;">숫자만＊</strong>)</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_user_contact" placeholder="연락처(최소4자리)를 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">상태</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control" id="modal_user_status">
												<option value="Y">활성화</option>
												<option value="N">비활성화</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">권한</div>
										</div>
										<div class="col-xs-8 form-check form-check-inline">
											<input type="radio" class="form-check-input" id="modal_user_auth_us" name="modal_user_auth" >
											<label class="form-check-label" for="modal_user_auth_us">일반</label>
											<input type="radio" class="form-check-input" id="modal_user_auth_sa" name="modal_user_auth">
											<label class="form-check-label" for="modal_user_auth_sa">관리자</label>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">메모</div>
										</div>
										<div class="col-xs-8">
											<textarea class="form-control" id="modal_user_memo" rows="2" style="width: 100%; resize: none;" placeholder="메모를 입력하세요"></textarea>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-xs-12" style="color: gray;">
											<ul>
												<li>회원 아이디 : 회원 등록일 기준 YYMMDD + 순번 방식으로 자동채번됩니다.
													<br>예시1) 2021년 5월 1일 첫 번째 등록 회원인 경우 -> <strong>210501001</strong>
													<br>예시2) 2021년 12월 12일 열 번째 등록 회원인 경우 -> <strong>211212010</strong>
												</li>
												<li>연락처 : 입력한 값의 마지막 4자리가 로그인 비밀번호로 사용됩니다.</li>
												<li>시작시각 : 첫 교시의 시작 시각을 의미( 시간표 첫 교시의 시작 시각 )</li>
												<li>종료시각 : 마지막 교시의 종료 시각을 의미( 시간표 마지막 교시의 종료 시각 )</li>
												<li>상태 : 비활성화시 로그인할 수 없습니다.</li>
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
									<button type="button" class="btn btn-warning" id="reset-event">비밀번호 초기화</button>
									<button type="button" class="btn btn-primary" id="update-event">저장</button>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
				</div>

    <script type="text/javascript">
		var table;
		var $ = jQuery.noConflict();
		$(document).ready(function() {
			table = $('#myTable').DataTable({
				ajax : {
					url : '/user_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.user_auth = $("#p_user_auth").val();
						param.user_status = $("#p_user_status").val();
						param.user_name = $("#p_user_name").val();
                        param.flag = 'select';
					},
					dataSrc : function(json) {
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
					data : "user_id",
					title : "회원번호",
					width : 100,
					render : function(data, type, row) {
						if (row["user_auth"] === "SA") {
							data = '<div style="color: red;">' + data + '</div>';
						}
						return data;
					}
				}, {
					data : "user_name",
					title : "회원명",
					width : 150,
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
						}
						return data;
					}
				}, {
					data : "user_pwd",
					title : "비밀번호",
					width : 100,
					visible : false
				}, {
					data : "user_contact",
					title : "연락처",
					width : 150
				}, {
					data : "user_memo",
					title : "메모"
				}, {
					data : "user_status",
					title : "상태",
					width : 50,
					visible : false
				}, {
					data : "user_status_text",
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
							// 새로운 회원 등록
							$.ajax({
								type : "post",
								url : "user_proc.php",
								async : false,
								data : {
									user_name : $('#modal_user_name').val(),
									user_contact : $('#modal_user_contact').val(),
									user_auth : $('#modal_user_auth_sa').is(":checked") ? "SA" : "US",
									user_memo : $('#modal_user_memo').val(),
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

			$("#p_user_name").on("keyup", function(e){
				if(e.which === 13){
					table.ajax.reload();
				}
			});
		});
		function edit_event(obj){
			console.log(table.row($(obj).parents("tr:first")).data());
			editEvent(table.row($(obj).parents("tr:first")).data());
		}
		var editEvent = function(d) {
			$('.modal-title').text("회원 변경");
			$('#modal_class_id').prop("readonly", true);

			$.ajax({
				type : "post",
				url : "/user_proc.php",
				async : false,
				data : {
					user_id : d.user_id,
                    flag: 'select',
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas).data[0];
					$('#modal_user_id').val(d.user_id);
					$('#modal_user_name').val(d.user_name);
					$('#modal_user_contact').val(d.user_contact);
					d.user_auth === "SA" ? $('#modal_user_auth_sa').prop("checked", true) : $('#modal_user_auth_us').prop("checked", true)
					$('#modal_user_memo').val(d.user_memo);
					$('#modal_user_status').val(d.user_status);

					$('.modalBtnContainer-addEvent').hide();
					$('.modalBtnContainer-modifyEvent').show();
					$('#eventModal').modal('show');
					
					$('#update-event').unbind();
					$('#update-event').on('click', function() {
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
							url : "/user_proc.php",
							async : false,
							data : {
								user_id : $('#modal_user_id').val(),
								user_name : $('#modal_user_name').val(),
								user_contact : $('#modal_user_contact').val(),
								user_auth : $('#modal_user_auth_sa').is(":checked") ? "SA" : "US",
								user_memo : $('#modal_user_memo').val(),
								user_status : $('#modal_user_status').val(),
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
					
					$('#reset-event').unbind();
					$('#reset-event').on('click', function() {
						if(confirm("비밀번호 초기화를 진행하시겠습니까?\n\n연락처의 마지막 4자리로 초기화됩니다.")){
							$.ajax({
								type : "post",
								url : "/user_proc.php",
								async : false,
								data : {
									user_id : $('#modal_user_id').val(),
                                    flag: 'pwd_update',
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
						}
					});
				},
				complete : function() { }
			});
		};
	</script>


<?php
    include_once("./inc/footer.php");
?>