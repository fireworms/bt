<?php
    $page_title = "회원권 관리";
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                
				<!-- End of Topbar -->
				<div class="container">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $page_title; ?></h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label" >회원권명</div>
								</div>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="p_membership_name" placeholder="Enter키 조회">
								</div>
							</div>
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
									<th>membership_id</th>
									<th>membership_name</th>
									<th>reservation_base_cnt</th>
									<th>reservation_base_deadline</th>
									<th>reservation_color</th>
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
											<div class="form-control form-label">회원권 아이디</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_membership_id" placeholder="회원권 아이디를 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">회원권명</div>
										</div>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="modal_membership_name" placeholder="회원권명을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">등록횟수 기준</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_reservation_base_cnt" placeholder="등록횟수 기준을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">사용기한 기준</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_reservation_base_deadline" placeholder="사용기한 기준을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">배경색</div>
										</div>
										<div class="col-xs-8">
											<input type="color" class="form-control" id="modal_reservation_color" style="padding: 2px 4px;">
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
												<li>등록횟수 기준 : 예약 가능한 횟수를 의미</li>
												<li>사용기한 기준 : 회원권 만료일 계산에 사용되는 일자 수</li>
												<li>배경색 : 예약한 시간표의 배경색을 의미
													<br>인터넷 익스플로러에서는 Color Picker 작동 미지원
													<br>아래링크를 이용하여 색상 코드를 골라서 직접 입력
													<br><a href="javascript: getRGB();">RGB 선택하러 가기</a>
												</li>
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
					url : '/membership_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.membership_name = $("#p_membership_name").val();
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
				//		order : [ [ 0, 'asc' ] ],
				columns : [ {
					data : "rn",
					title : "#",
					width : 10
				}, {
					data : "membership_id",
					title : "회원권 아이디",
					width : 100
				}, {
					data : "membership_name",
					title : "회원권명",
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
						}
						return data;
					}
				}, {
					data : "reservation_base_cnt",
					title : "등록횟수",
					width : 100
				}, {
					data : "reservation_base_deadline",
					title : "사용기한",
					width : 100
				}, {
					data : "reservation_color",
					title : "배경색",
					width : 100,
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<span style="padding:0 15px;background-color: ' + data + '">' + '' + '</span>';
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

						$('.modal-title').text("회원권 등록");
						$('#modal_membership_id').prop("readonly", false);

						$('#modal_membership_id').val("");
						$('#modal_membership_name').val("");
						$('#modal_reservation_base_cnt').val("");
						$('#modal_reservation_base_deadline').val("");
						$('#modal_reservation_color').val("#FFFFFF");
						$('#modal_status option:eq(0)').prop("selected", true);


						$('.modalBtnContainer-addEvent').show();
						$('.modalBtnContainer-modifyEvent').hide();
						$('#eventModal').modal('show');

						$('#save-event').unbind();
						$('#save-event').on('click', function() {
							if ($("#modal_membership_id").val().trim() === "") {
								alert("회원권 아이디를 입력하세요.");
								return false;
							}
							if ($("#modal_membership_name").val().trim() === "") {
								alert("회원권명을 입력하세요.");
								return false;
							}
							if ($("#modal_reservation_base_cnt").val().trim() === "") {
								alert("등록횟수 기준을 입력하세요.");
								return false;
							}
							if ($("#modal_reservation_base_deadline").val().trim() === "") {
								alert("사용기한 기준을 입력하세요.");
								return false;
							}
							
							// 새로운 멤버쉽 등록
							$.ajax({
								type : "post",
								url : "/membership_proc.php",
								async : false,
								data : {
									membership_id : $('#modal_membership_id').val(),
									membership_name : $('#modal_membership_name').val(),
									reservation_base_cnt : $('#modal_reservation_base_cnt').val(),
									reservation_base_deadline : $('#modal_reservation_base_deadline').val(),
									reservation_color : $('#modal_reservation_color').val(),
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
						// 					table.ajax.reload();
					}
				}, {
					text : '조회',
					className : 'btn btn-sm btn-info',
					action : function(e, dt, node, config) {
						table.ajax.reload();
					}
				} ]
				
			});

			$("#p_membership_name").on("keyup", function(e){
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
			$('.modal-title').text("회원권 변경");
			$('#modal_membership_id').prop("readonly", true);

			$.ajax({
				type : "post",
				url : "/membership_proc.php",
				async : false,
				data : {
					membership_id : d.membership_id,
                    flag: 'select',
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas).data[0];
					$('#modal_membership_id').val(d.membership_id);
					$('#modal_membership_name').val(d.membership_name);
					$('#modal_reservation_base_cnt').val(d.reservation_base_cnt);
					$('#modal_reservation_base_deadline').val(d.reservation_base_deadline);
					$('#modal_reservation_color').val(d.reservation_color);
					$('#modal_status').val(d.status);

					$('.modalBtnContainer-addEvent').hide();
					$('.modalBtnContainer-modifyEvent').show();
					$('#eventModal').modal('show');
					
					$('#update-event').unbind();
					$('#update-event').on('click', function() {
						if ($("#modal_membership_name").val().trim() === "") {
							alert("회원권명을 입력하세요.");
							return false;
						}
						if ($("#modal_reservation_base_cnt").val().trim() === "") {
							alert("등록횟수를 입력하세요.");
							return false;
						}
						if ($("#modal_reservation_base_deadline").val().trim() === "") {
							alert("사용기한을 입력하세요.");
							return false;
						}
						
						// 새로운 일정 저장
						$.ajax({
							type : "post",
							url : "/membership_proc.php",
							async : false,
							data : {
								membership_id : $('#modal_membership_id').val(),
								membership_name : $('#modal_membership_name').val(),
								reservation_base_cnt : $('#modal_reservation_base_cnt').val(),
								reservation_base_deadline : $('#modal_reservation_base_deadline').val(),
								reservation_color : $('#modal_reservation_color').val(),
								status : $('#modal_status').val(),
                                flag: 'update',
							},
							error : function(error) {
								isSE(error);
							},
							success : function(datas) {
								var d = JSON.parse(datas);
								if(d.rt_code < 0){
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
		
		function getRGB(){
			window.open("https://www.w3schools.com/colors/colors_picker.asp", "_blank");
		}
	</script>



<?php
    include_once("./inc/footer.php");
?>