<?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                <div class="container">
					<!-- 					<h1 class="h3">예약</h1> -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">회원/회원권 매핑</h3>
						</div>
						<div class="panel-body">
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
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label">회원권</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control selectpicker" id="p_membership_id">
										<option value="">= 선택 =</option>
                                        <?php echo $membershipOption;?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label">상태</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control selectpicker" id="p_user_status">
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
									<th>user_membership_id</th>
									<th>user_id</th>
									<th>user_name</th>
									<th>membership_id</th>
									<th>membership_name</th>
									<th>membership_start</th>
									<th>membership_end</th>
									<th>membership_fee</th>
									<th>membership_payment</th>
									<th>membership_unpaid_amount</th>
									<th>reservation_cnt</th>
									<th>memo</th>
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
									<input type="hidden" class="form-control" id="modal_h_user_membership_id">
									<input type="hidden" class="form-control" id="modal_h_membership_id">
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">회원</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control selectpicker" id="modal_user_id" data-live-search="true">
												<option value="">= 선택 =</option>
                                                <?php echo $userOption; ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">회원권</div>
										</div>
										<div class="col-xs-8">
											<select class="form-control selectpicker" id="modal_membership_id">
												<option value="">= 선택 =</option>
                                                <?php echo $membershipOption; ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">등록횟수</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_reservation_cnt" placeholder="회원권 선택 및 직접 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">시작일</div>
										</div>
										<div class="col-xs-8">
											<input type="date" class="form-control" id="modal_membership_start">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">종료일</div>
										</div>
										<div class="col-xs-8">
											<input type="date" class="form-control" id="modal_membership_end">
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
										<div class="col-xs-4">
											<div class="form-control form-label">비용</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_membership_fee" placeholder="비용을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">결제금</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_membership_payment" placeholder="결제금을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">미수금</div>
										</div>
										<div class="col-xs-8">
											<input type="number" class="form-control" id="modal_membership_unpaid_amount" placeholder="미수금을 입력하세요">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<div class="form-control form-label">메모</div>
										</div>
										<div class="col-xs-8">
											<textarea class="form-control" row="2" id="modal_memo" style="width: 100%; resize: none;" placeholder="메모를 입력하세요"></textarea>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-xs-12" style="color: gray;">
											<ul>
												<li>회원 : 매핑할 회원을 선택</li>
												<li>회원권 : 매핑할 회원권을 의미</li>
												<li>등록횟수 : 선택한 회원권의 등록횟수 기본값 입력, 입력시 변경 가능</li>
												<li>시작일, 종료일 : 매핑할 회원권의 유효기간을 의미</li>
												<li>활성화, 비활성화 : 매핑할 회원권의 상태 변경</li>
												<li>활성화 된 매핑 회원권이 예약시 선택할 회원권에 노출</li>
												<li>예약시 노출되는 회원권은 상태가 【활성화】 예약일이 【시작일】과 【종료일】 사이의 날짜</li>
												<li>매핑된 회원권의 등록횟수를 초과하여 예약 가능</li>
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
					url : 'MM_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.user_id = $("#p_user_id").val();
						param.user_name = $("#p_user_name").val();
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
				//		orderMulti : true,
				ordering : false,
				//		order : [ [ 0, 'asc' ] ],
				columns : [ {
					data : "rn",
					title : "#",
					width : 10
				}, {
					data : "user_membership_id",
					title : "회원권매핑 아이디",
					width : 100,
					visible : false
				}, {
					data : "user_id",
					title : "회원 아이디",
					width : 80,
					className: 'dt-head-center dt-body-center'
				}, {
					data : "user_name",
					title : "회원명",
					width : 100,
					className: 'dt-head-center dt-body-center',
					render : function(data, type, row) {
						if (type == 'display') {
							data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
						}
						return data;
					}
				}, {
					data : "membership_id",
					title : "회원권 아이디",
					width : 100,
					className: 'dt-head-center',
					visible : false
				}, {
					data : "membership_name",
					title : "회원권",
					width : 150,
					className: 'dt-head-center'
				}, {
					data : "membership_start",
					title : "시작일",
					width : 80,
					className: 'dt-head-center dt-body-center'
				}, {
					data : "membership_end",
					title : "종료일",
					width : 80,
					className: 'dt-head-center dt-body-center'
				}, {
					data : "membership_fee",
					title : "비용",
					width : 80,
					className: 'dt-head-center dt-body-right',
					render: $.fn.dataTable.render.number( ',', '.', 0, '' )
				}, {
					data : "membership_payment",
					title : "결제금",
					width : 80,
					className: 'dt-head-center dt-body-right',
					render: $.fn.dataTable.render.number( ',', '.', 0, '' )
				}, {
					data : "membership_unpaid_amount",
					title : "미수금",
					width : 80,
					className: 'dt-head-center dt-body-right',
					render: $.fn.dataTable.render.number( ',', '.', 0, '' )
				}, {
					data : "memo",
					title : "메모",
					className: 'dt-head-center'
				}, {
					data : "reservation_cnt",
					title : "등록횟수",
					width : 100,
					className: 'dt-head-center',
					visible : false
				}, {
					data : "status",
					title : "상태",
					width : 50,
					className: 'dt-head-center',
					visible : false
				}, {
					data : "status_text",
					title : "상태",
					width : 50,
					className: 'dt-head-center dt-body-center'
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
// 				dom : 'Blfrtip',
				dom : 'Blrtip',
				buttons : [ {
					text : '등록',
					className : 'btn btn-sm btn-primary',
					action : function(e, dt, node, config) {

						$('.modal-title').text("회원/회원권 매핑 등록");
						$('#modal_class_id option').prop("disabled", false);

						$('#modal_h_user_membership_id').val("");
						
						$('#modal_user_id').val("").change();
						$('#modal_membership_id').val("").change();
						$('#modal_reservation_cnt').val("");
						$('#modal_membership_start').val("");
						$('#modal_membership_end').val("");
						$('#modal_membership_fee').val("");
						$('#modal_membership_payment').val("");
						$('#modal_membership_unpaid_amount').val("");
						$('#modal_status_text').val("");
						$('#modal_memo').val("");

						$('.modalBtnContainer-addEvent').show();
						$('.modalBtnContainer-modifyEvent').hide();
						$('#eventModal').modal('show');

						$('#save-event').unbind();
						$('#save-event').on('click', function() {
							if ($("#modal_user_id").val().trim() === "") {
								alert("회원을 선택하세요.");
								return false;
							}
							if ($("#modal_membership_id").val().trim() === "") {
								alert("회원권을 선택하세요.");
								return false;
							}
							if ($("#modal_reservation_cnt").val().trim() === "") {
								alert("예약횟수를 입력하세요.");
								return false;
							}
							// 새로운 일정 저장
							$.ajax({
								type : "post",
								url : 'MM_proc.php',
								async : false,
								data : {
									user_membership_id : $('#modal_h_user_membership_id').val(),
									user_id : $('#modal_user_id').val(),
									membership_id : $('#modal_membership_id').val(),
									membership_start : $('#modal_membership_start').val(),
									membership_end : $('#modal_membership_end').val(),
									membership_fee : $('#modal_membership_fee').val(),
									membership_payment : $('#modal_membership_payment').val(),
									membership_unpaid_amount : $('#modal_membership_unpaid_amount').val(),
									reservation_cnt : $('#modal_reservation_cnt').val(),
									memo : $('#modal_memo').val(),
                                    flag: 'insert'
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
			
			$('#modal_membership_id').on("change", function(e){
				var rbc = $(this).find("option:selected").data("reservation_base_cnt");
				var rbd = $(this).find("option:selected").data("reservation_base_deadline");
				$('#modal_reservation_cnt').val(rbc);
				//rbd 적용여부 confirm
			});
		});
		function edit_event(obj){
			console.log(table.row($(obj).parents("tr:first")).data());
			editEvent(table.row($(obj).parents("tr:first")).data());
		}
		var editEvent = function(d) {
			$('.modal-title').text("회원/회원권 매핑 변경");
			$('#modal_class_id option').prop("disabled", true);

			$.ajax({
				type : "post",
				url : "MM_proc.php",
				async : false,
				data : {
					user_membership_id : d.user_membership_id,
                    flag: 'select'
				},
				error : function(error) {
					isSE(error);
				},
				success : function(datas) {
					var d = JSON.parse(datas).data[0];

					$('#modal_h_user_membership_id').val(d.user_membership_id);
					
					$('#modal_user_id').val(d.user_id).change();
					$('#modal_membership_id').val(d.membership_id).change();
					$('#modal_reservation_cnt').val(d.reservation_cnt);
					$('#modal_membership_start').val(d.membership_start);
					$('#modal_membership_end').val(d.membership_end);
					$('#modal_membership_fee').val(d.membership_fee);
					$('#modal_membership_payment').val(d.membership_payment);
					$('#modal_membership_unpaid_amount').val(d.membership_unpaid_amount);
					$('#modal_status_text').val(d.status_text);
					$('#modal_memo').val(d.memo);

					$('.modalBtnContainer-addEvent').hide();
					$('.modalBtnContainer-modifyEvent').show();
					$('#eventModal').modal('show');
					
					$('#update-event').unbind();
					$('#update-event').on('click', function() {
						if ($("#modal_user_id").val().trim() === "") {
							alert("회원을 선택하세요.");
							return false;
						}
						if ($("#modal_membership_id").val().trim() === "") {
							alert("회원권을 선택하세요.");
							return false;
						}
						if ($("#modal_reservation_cnt").val().trim() === "") {
							alert("예약횟수를 입력하세요.");
							return false;
						}
						$.ajax({
							type : "post",
							url : "MM_proc.php",
							async : false,
							data : {
								user_membership_id : $('#modal_h_user_membership_id').val(),
								user_id : $('#modal_user_id').val(),
								membership_id : $('#modal_membership_id').val(),
								membership_start : $('#modal_membership_start').val(),
								membership_end : $('#modal_membership_end').val(),
								membership_fee : $('#modal_membership_fee').val(),
								membership_payment : $('#modal_membership_payment').val(),
								membership_unpaid_amount : $('#modal_membership_unpaid_amount').val(),
								reservation_cnt : $('#modal_reservation_cnt').val(),
								memo : $('#modal_memo').val(),
                                flag: 'update'
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
					
					$('#status-y-event').unbind();
					$('#status-y-event').on('click', function() {
						$.ajax({
							type : "post",
							url : "MM_proc.php",
							async : false,
							data : {
								user_membership_id : $('#modal_h_user_membership_id').val(),
								status : 'Y',
                                flag: 'update_status'
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
					
					$('#status-n-event').unbind();
					$('#status-n-event').on('click', function() {
						$.ajax({
							type : "post",
							url : "MM_proc.php",
							async : false,
							data : {
								user_membership_id : $('#modal_h_user_membership_id').val(),
								status : 'N',
                                flag: 'update_status'
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