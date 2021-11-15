<div class="card">
    <div class="card-body">
       <h3 class="card-title">Kiểm Tra Lỗi!</h3>

		<div class="row">

                                            <div class="col-md-12 col-lg-12 col-xs-12">


							<p><b>Hiện tại</b>: Không có lỗi gì</p>
                        	<p><b>Phiên Bản</b>: wk-2.0</p>
                        	<p><b>Liên Hệ</b>: Phúc NG</p>
                        		<br>
									<button type="button" id="check_update" class="btn btn-primary waves-effect">
                                        <i class="fa fa-cogs"></i>
                                        <span>Kiểm Tra Lỗi</span>
                                    </button>
                                    <p id="result_update"></p>
                                    	<div id="progress_main" style="display: none;" class="progress">
                                			<div id="process_bar" class="progress-bar bg-teal progress-bar-striped active" role="progressbar" style="width: 100%"></div>
                            			</div>
								<br>



                                           	</div>


		</div>


    </div>
</div>







<script type="text/javascript">
	
	$(document).ready(function() {
		$('#check_update').on('click', function() {
			if (confirm('Bạn có chắc muốn kiểm tra các lỗi trên hệ thống?')) {
		 		
		 		$('#check_update').hide();
		 		$('#progress_main').fadeIn();
							set_process(100, 'Không có lỗi gì!');
				$.ajax({
                    url : "<?php echo $kun->home_url();?>/update.php",
                    type : "post",
                    dataType:"json",
                    data : {},
                    success : function (json){

                    	if(json.status == "true") {
                    		var status = "Thành Công!";
                    	}else {
                    		var status = "Thất Bại!";
                    	}

                    	console.log(json);
						 		setTimeout(function(){
						 			set_process(40, 'Kết nối thành công!');
						 				setTimeout(function(){
						 					set_process(60, 'Đang kiểm tra bản cập nhật!');
						 					setTimeout(function(){
									 			set_process(90, 'Chờ Một Chút!');
									 				setTimeout(function(){
									 					set_process(100, 'Hoàn Tất!');
									 						setTimeout(function(){
																// Phần này show ra json trả về
																$('#progress_main').hide();

																	$('#result_update').append('<p><b>Tình Trạng Cập Nhật</b>: '+status+'</p>');
																	$('#result_update').append('<p><b>Phiên Bản Hiện Tại</b>: v'+json.old_version+'</p>');
																	$('#result_update').append('<p><b>Bản Cập Nhật Hiện Tại</b>: v'+json.new_version+'</p>');
																	$('#result_update').append('<p><b>Thông Báo Cập Nhật</b>: '+json.message+'</p>');
																	$('#result_update').append('<p><b>Thông Tin Khác</b>: '+json.about+'</p>');

									 						}, 3000);
									 				}, 3000);
									 		}, 4000);
						 				}, 2000);
						 		}, 3000);

                    }
                });





			}
		})
	});

	function set_process(width, text) {
		$('#process_bar').css('width', width+'%');    
		$('#process_bar').text(text);
	}


</script>