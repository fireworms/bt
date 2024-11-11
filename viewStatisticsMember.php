<?php
    $page_title = "회원별 통계";
    include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
?>
                <div class="container">
					<!-- 					<h1 class="h3">예약</h1> -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $page_title; ?></h3>
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
							<!-- <div class="row">
								<div class="col-xs-4">
									<div class="form-control form-label">회원권</div>
								</div>
								<div class="col-xs-8">
									<select class="form-control selectpicker" id="p_membership_id">
										<option value="">= 선택 =</option>
                                        <?php echo $membershipOption;?>
									</select>
								</div>
							</div> -->
							<!-- <div class="row">
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
							</div> -->
						</div>
						<div class="panel-footer" style="padding: 0;"></div>
					</div>
					<div id="wrapper">
						<div id="loading"></div>
						<table id="myTable" class="display table table-striped table-bordered" style="width: 100%;">
							<thead>
								<tr>
									<th data-orderable="false">rn</th>
									<!-- <th>user_membership_id</th> -->
									<th>user_id</th>
									<th>user_name</th>
									<!-- <th>membership_id</th> -->
									<!-- <th>membership_name</th> -->
									<!-- <th>membership_start</th> -->
									<!-- <th>membership_end</th> -->
									<!-- <th>membership_fee</th> -->
                                    <!-- <th>membership_payment_method</th> -->
									<th>membership_payment</th>
									<!-- <th>membership_unpaid_amount</th> -->
									<th>reservation_cnt</th>
									<!-- <th>memo</th> -->
									<!-- <th>status</th> -->
									<!-- <th>status_text</th> -->
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
					url : 'viewStatistics_proc.php',
					type : 'POST',
					async: false,
					data: function(param){
						param.user_id = $("#p_user_id").val();
						param.user_name = $("#p_user_name").val();
                        param.flag = 'member_select';
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
				columns : [
                    {
                        data : "rn",
                        title : "#",
                        width : 10
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
                        // render : function(data, type, row) {
                        // 	if (type == 'display') {
                        // 		data = '<a href="#" class="edit-event" onclick="javascript: edit_event(this);">' + data + '</a>';
                        // 	}
                        // 	return data;
                        // }
                    }, {
                        data : "membership_payment",
                        title : "결제금",
                        width : 80,
                        className: 'dt-head-center dt-body-right',
                        render: $.fn.dataTable.render.number( ',', '.', 0, '' )
                    }, 
                    {
                        data : "reservation_cnt",
                        title : "등록횟수",
                        width : 20,
                        className: 'dt-head-center',
                    }
                ],
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
		
		
	</script>


<?php
    include_once("./inc/footer.php");
?>