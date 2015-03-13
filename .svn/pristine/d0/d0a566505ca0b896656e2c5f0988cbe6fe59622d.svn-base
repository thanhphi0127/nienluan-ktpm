<section class='cit_wrapprer'>
<section class='manipulation'>
	<div class='bar'>Thông báo</div>
	<div class='taothongbao' >
		
		
		<a class='thongbaoden'>Thông báo đến</a>
		<a class='thongbaogui'>Thông báo đã gửi</a>
		<a class="btn btn-danger square-btn-adjust taothongbao"  >Gửi thông báo mới</a>
	</div>
	<div id='taothongbao' class='form'>
		<img class='close' src='public/img/iconclose.png'/>
		<form  action="" method="post">
			 
				<input type='text' id ='flag' class='hide' name='data[flag]' value='<?php echo common_postvalue(isset($flag_post) ? $flag_post : '');?>'/>
				
						<div id='tips'>Mã số phân cách bởi dấu phẩy. Ví dụ: 1111336,1111</div>
						<p><label><tieude>Người nhận </tieude>
							
							<input type='text' placeholder='Nhập Mã số' name='data[NGUOINHAN]' id='NGUOINHAN'/></p>
						<p>
							<label>
								<tieude>Tiêu đề:</tieude>
								<input type='text' name='data[TIEUDE]' id='TIEUDE'/>
							</label>
						</p>
						<p>
							<label>
								<tieude>Nội dung:</tieude>
								<textarea name='data[NOIDUNG]' id='NOIDUNG'></textarea>
							</label>
						</p>
					<label>
						<input type='button' name='close' class='submit-button' value='Đóng'/>
						<input type='reset' class='submit-button' value='Làm lại'/>
						<input type="submit" class='submit-button' name='addnodifycation' value='Gửi'/>
					
				`	</label>
				
				
			</form>

	</div>
</section>

<section class='dsthongbao_all' style='margin-top: 20px;'>
			<section class='dsthongbaonhan'>
				<!-- Nội dung chi tiết-->
						
					<div class='chitiet tbnhan'>
						<table class='chitiet'> 					
						  <?php $k = 0; if (isset($dsthongbaonhan['tbsv']) && !empty($dsthongbaonhan['tbsv'])){
								  foreach ($dsthongbaonhan['tbsv'] as $row){
									  $k++;
						  ?>
							<tr class='<?php echo $row['MA_TB'];?> tbnhansv' >
								<td>
									<a><span class='tieude' >TIÊU ĐỀ: </span></a>
                                    	<p class="pp"><?php if (!empty($row['TIEUDE'])) 
									 			echo $k.") ".$row['TIEUDE'];
										   else echo "Không có tiêu đề"; ?></p>
                                </td>
							</tr>
                            
							<tr class='<?php echo $row['MA_TB'];?> ' >
								<td>
									<p class="pp">Người gửi: <span class='hoten'><?php echo " ".$row['HOTEN']." ";?></span></p>
									<p>Đã gửi:<span class='ngaytb'> <?php echo " <i>".$row['NGAYTB']."</i>";?></span>	
									</p>
									<p class="pp">	</p>
                                    <p><span class='noidung'>NỘI DUNG: 
										<?php echo " ".$row['NOIDUNG']; ?></span>
									</p>
								</td>
								
							</tr>
					
			<?php			}}
			?>					
							
							<?php  if (isset($dsthongbaonhan['tbgv']) && !empty($dsthongbaonhan['tbgv'])){
									foreach ($dsthongbaonhan['tbgv'] as $row){
										$k++;
							
							?>
                            <table class='chitiet'> 
									<tr class='<?php echo $row['MA_TB'];?> tbnhangv' >
                                        <td>
                                            <a><span class='tieude' >TIÊU ĐỀ: </span></a>
                                                <p class="pp"><?php if (!empty($row['TIEUDE'])) 
                                                        echo $k.") ".$row['TIEUDE'];
                                                   else echo "Không có tiêu đề"; ?></p>
                                        </td>
									</tr>
									<tr class='<?php echo $row['MA_TB'];?>' >
                                        <td>
                                            <p class="pp">Người gửi: <span class='hoten'><?php echo " ".$row['HOTEN']." ";?></span></p>
                                            <p>Đã gửi:<span class='ngaytb'> <?php echo " <i>".$row['NGAYTB']."</i>";?></span>	
                                            </p>
                                            <p class="pp">	</p>
                                            <p><span class='noidung'>NỘI DUNG: 
                                                <?php echo " ".$row['NOIDUNG']; ?></span>
                                            </p>
                                        </td>
									</tr>
					
			<?php			}}
			?>
					
						</table>
					</div>
					
					
					<div class='tomtat'>
						<!-- Nội dung tóm tắt-->
						<table class='tomtat'>
							<?php 
								$k = 0;
								if (isset($dsthongbaonhan['tbsv']) && !empty($dsthongbaonhan['tbsv'])){
					
									foreach ($dsthongbaonhan['tbsv'] as $row){
										$k++;

							?>	
									<tr class='tbnhansv <?php echo $row['MA_TRANGTHAI'];?>' >
										<td >
											<input type='hidden' value='<?php echo $row['MA_TB'];?>'/>
											<p>	
													<label>
														<span class='tieude <?php echo $row['MA_TB'];?> tbnhan'> 
															<a title='<?php echo $row['TIEUDE'];?>' class='tieude_tomtat'>
																<?php if (!empty($row['TIEUDE'])) {
																			echo $k.") ".substr($row['TIEUDE'],0,20);
																			if (strlen ($row['TIEUDE']) > 20)
																				echo '...';
																	}			
																	else 
																		echo "Không có tiêu đề";
																?>
															</a>
														</span>
													</label>
											</p>
											
											<p ><label><span class='nguoigui'><?php echo $row['HOTEN'];?></span></label></p>
											
											
										</td>
										
									</tr>
					
			<?php			} }
			?>
							
							<?php 
							if (isset($dsthongbaonhan['tbgv']) && !empty($dsthongbaonhan['tbgv'])){
					
									foreach ($dsthongbaonhan['tbgv'] as $row){
										$k++;
								
							?>	
									<tr class='tbnhangv <?php echo $row['MA_TRANGTHAI'];?>' >
										<td >
											<input type='hidden' value='<?php echo $row['MA_TB'];?>'/>
											<p>	
													<label>
														<span class='tieude tbnhan'> 
															<a title='<?php echo $row['TIEUDE'];?>' class='tieude_tomtat'>
																<?php if (!empty($row['TIEUDE'])) {
																			echo $k.") ".substr($row['TIEUDE'],0,20);
																			if (strlen($row['TIEUDE']) > 20)
																				echo '...';
																	}			
																	else 
																		echo "Không có tiêu đề";
																?>
															</a>
														</span>
													</label>
											</p>
											
											<p ><label><span class='nguoigui'><?php echo $row['HOTEN'];?></span></label></p>
											
											
										</td>
										
									</tr>
					
			<?php			} }
			?>
						</table>
					</div>
					
						
			
			
			
		</section>

		<section class='dsthongbaogui'>
			
					
					
						<!-- Nội dung chi tiết-->
						
					<div class='chitiet tbnhan'>
						<table class='chitiet'> 
							
							<?php 
							$i = 0;
								if (isset($dsthongbaogui) && !empty($dsthongbaogui)){
									foreach ($dsthongbaogui as $row){
										$i++;
							
							?><table class='chitiet'> 
									<tr class='<?php echo $row['MA_TB'];?> tbnhansv' >
                                        <td>
                                            <a><span class='tieude' >TIÊU ĐỀ: </span></a>
                                                <p class="pp"><?php if (!empty($row['TIEUDE'])) 
                                                        echo $i.") ".$row['TIEUDE'];
                                                   else echo "Không có tiêu đề"; ?></p>
                                        </td>
									</tr>
									<tr class='<?php echo $row['MA_TB'];?> tbnhangv' >		
                                        <td>
                                            <p class="pp">Người nhận: <span class='hoten'><?php echo " ".$row['NGUOINHAN']." ";?></span></p>
                                            <p>Đã gửi:<span class='ngaytb'> <?php echo " <i>".$row['NGAYTB']."</i>";?></span>	
                                            </p>
                                            <p class="pp">	</p>
                                            <p><span class='noidung'>NỘI DUNG: 
                                                <?php echo " ".$row['NOIDUNG']; ?></span>
                                            </p>
                                        </td>
										
									</tr>
					
			<?php			}}
			?>
				
					
						</table>
					</div>
			
			<div class='tomtat'>
						<!-- Nội dung tóm tắt-->
						<table class='tomtat'>
							<?php
								$i = 0;
								 if (isset($dsthongbaogui) && !empty($dsthongbaogui)){		
									foreach ($dsthongbaogui as $row){
										$i++;
							?>	
									<tr class='tbnhansv' >
										<td >
											<input type='hidden' value='<?php echo $row['MA_TB'];?>'/>
											<p>	
													<label>
														<span class='tieude tbgui'> 
															<a title='<?php echo $i." ".$row['TIEUDE'];?>' class='tieude_tomtat'>
																<?php if (!empty($row['TIEUDE'])) {
																			echo $i.") ".substr($row['TIEUDE'],0,20);
																			if (strlen ($row['TIEUDE']) > 20)
																				echo '...';
																	}			
																	else 
																		echo "Không có tiêu đề";
																?>
															</a>
														</span>
													</label>
											</p>
											
											<p ><label><span class='nguoinhan'><?php echo $row['NGUOINHAN'];?></span></label></p>
											
											
										</td>
										
									</tr>
					
			<?php			
							}// foreach
						}// if
			?>
						</table>
					</div>
			
			
		</section>
		<section class='update hide'>
			<form action='' method='post'>
				<input type='text' name='seen_list' value='<?php if ( isset($MA_TB) ) echo $MA_TB; else echo '';?>'/>
				<input type='text' name='seen_type' value='<?php if (isset($seen_type) ) echo $seen_type; else echo 'nhan';?>'/>
				<input type='submit'  name='update_thongbao' value='Update'/>
			</form>
		</section>
	</section>
</section>

