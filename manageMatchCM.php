<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                <div class="container">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">클래스/회원권 매핑</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >클래스</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_class_id">
										<option value="">= 선택 =</option>
                                        <?php echo $classOption;?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >회원권</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control" id="p_membership_id">
										<option value="">= 선택 =</option>
                                        <?php echo $membershipOption;?>
									</select>
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
									<!-- <th>class_name</th> -->
									<th>membership_id</th>
									<!-- <th>membership_name</th> -->
									<th>class_membership_name</th>
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
									<input type="hidden" class="form-control" id="modal_h_class_id">
									<input type="hidden" class="form-control" id="modal_h_membership_id">
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">클래스</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control" id="modal_class_id">
												<option value="">= 선택 =</option>
                                                <?php echo $classOption; ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">회원권</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control" id="modal_membership_id">
												<option value="">= 선택 =</option>
                                                <?php echo $membershipOption; ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">상태</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_status_text" readonly="readonly">
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-xs-12" style="color: gray;">
											<ul>
												<li>클래스 : 사용 가능한 회원권을 매핑할 대상 클래스를 의미</li>
												<li>회원권 : 매핑할 회원권을 의미</li>
												<li>회원/회원권 화면에서 매핑된 회원권으로 예약 가능한 클래스의 범위를 설정</li>
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
									<button type="button" class="btn btn-danger" id="status-n-event">비활성화</button>
									<button type="button" class="btn btn-success" id="status-y-event">활성화</button>
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
					url : '/CM_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.class_id = $("#p_class_id").val();
						param.membership_id = $("#p_membership_id").val();
						param.status = $("#p_user_status").val();
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
					width : 100,
					visible : false
				},  {
					data : "membership_id",
					title : "회원권 아이디",
					width : 100,
					visible : false
				}, {
					data : "class_membership_name",
					title : "클래스/회원권",
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
						}
						return data;
					}
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

						$('.modal-title').text("클래스/회원권 매핑 등록");
						$('#modal_class_id option').prop("disabled", false);

						$('#modal_h_class_id').val("");
						$('#modal_h_membership_id').val("");
						
						$('#modal_class_id').val("");
						$('#modal_membership_id').val("");
						$('#modal_status_text').val("");

						$('.modalBtnContainer-addEvent').show();
						$('.modalBtnContainer-modifyEvent').hide();
						$('#eventModal').modal('show');

						$('#save-event').unbind();
						$('#save-event').on('click', function() {
							if ($("#modal_class_id").val().trim() === "") {
								alert("클래스를 선택하세요.");
								return false;
							}
							if ($("#modal_membership_id").val().trim() === "") {
								alert("회원권을 선택하세요.");
								return false;
							}
							// 새로운 매핑 저장
							$.ajax({
								type : "post",
								url : "CM_proc.php",
								async : false,
								data : {
									class_id : $('#modal_class_id').val(),
									membership_id : $('#modal_membership_id').val(),
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
			$('.modal-title').text("클래스/회원권 매핑 변경");
			$('#modal_class_id option').prop("disabled", true);

			$.ajax({
				type : "post",
				url : "CM_proc.php",
				async : false,
				data : {
					class_id : d.class_id,
					membership_id : d.membership_id,
                    flag: 'select',
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas).data[0];

					$('#modal_h_class_id').val(d.class_id);
					$('#modal_h_membership_id').val(d.membership_id);
					
					$('#modal_class_id option[value=' + d.class_id + ']').prop("disabled", false).prop("selected", true);
					$('#modal_membership_id').val(d.membership_id);
					$('#modal_status_text').val(d.status_text);

					$('.modalBtnContainer-addEvent').hide();
					$('.modalBtnContainer-modifyEvent').show();
					$('#eventModal').modal('show');
					
					$('#update-event').unbind();

                    const update_cm = (status = '') => { // Todo: 프라임키 하나 두고 수정하는걸로 고쳐보든가 아니면
                        $.ajax({
							type : "post",
							url : "CM_proc.php",
							async : false,
							data : {
								prev_class_id : $('#modal_h_class_id').val(),
								prev_membership_id : $('#modal_h_membership_id').val(),
                                class_id : $('#modal_class_id').val(),
								membership_id : $('#modal_membership_id').val(),
                                status: status,
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
                    };

					$('#update-event').on('click', function() {
						if ($("#modal_class_id").val().trim() === "") {
							alert("클래스를 선택하세요.");
							return false;
						}
						if ($("#modal_membership_id").val().trim() === "") {
							alert("회원권을 입력하세요.");
							return false;
						}
						update_cm();
					});
					
					$('#status-y-event').unbind();
					$('#status-y-event').on('click', function() {
						update_cm('Y');
					});
					
					$('#status-n-event').unbind();
					$('#status-n-event').on('click', function() {
						update_cm('N');
					});
				},
				complete : function() { }
			});
		};
	</script>


<?php
    include_once("./inc/footer.php");
?>