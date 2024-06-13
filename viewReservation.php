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
										<?php echo $userOption; ?>
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
                url : '/reservation_proc.php',
                type : 'POST',
                async: false,
                data: function(param){
                    param.user_id = $("#p_user_id").val();
                    param.status_atdc = $("#p_status_atdc").val();
                    param.flag = 'select_table';
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
            buttons : [ 
            //     {
            //     text : '등록',
            //     className : 'btn btn-sm btn-primary',
            //     action : function(e, dt, node, config) {

            //         $('.modal-title').text("회원 등록");
            //         $('#modal_user_id').prop("readonly", true);

            //         $('#modal_user_id').val("");
            //         $('#modal_user_name').val("");
            //         $('#modal_user_contact').val("");
            //         $('#modal_user_auth_us').prop("checked", true);
            //         $('#modal_user_memo').val("");
            //         $('#modal_user_status option:eq(0)').prop("selected", true);

            //         $('#modal_memo').val("");

            //         $('.modalBtnContainer-addEvent').show();
            //         $('.modalBtnContainer-modifyEvent').hide();
            //         $('#eventModal').modal('show');

            //         $('#save-event').unbind();
            //         $('#save-event').on('click', function() {
            //             if ($("#modal_user_name").val().trim() === "") {
            //                 alert("회원명을 입력하세요.");
            //                 return false;
            //             }
            //             if ($("#modal_user_contact").val().trim().length < 4) {
            //                 alert("연락처(최소4자리)를 입력하세요.");
            //                 return false;
            //             }
            //             // 새로운 일정 저장
            //             $.ajax({
            //                 type : "post",
            //                 url : "/us/insert",
            //                 async : false,
            //                 data : {
            //                     user_name : $('#modal_user_name').val(),
            //                     user_contact : $('#modal_user_contact').val(),
            //                     user_auth : $('#modal_user_auth_sa').is(":checked") ? "SA" : "US",
            //                     user_memo : $('#modal_user_memo').val()
            //                 },
            //                 error : function(error) {
            //                     isSE(error);
            //                 },
            //                 success : function(datas) {
            //                     var d = JSON.parse(datas);
            //                     if (d.rt_code < 0) {
            //                         alert("등록할 수 없습니다.");
            //                     } else {
            //                         table.ajax.reload();
            //                     }
            //                 },
            //                 complete : function() {
            //                     $('#eventModal').modal('hide');
            //                 }
            //             });
            //         });
            //         // 					table.ajax.reload();
            //     }
            // },
             {
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