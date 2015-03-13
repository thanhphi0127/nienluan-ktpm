﻿<!-- * View quản lý công việc
     * @author: Thành Tâm
-->


<section id='cit_wrapper' >
	<header class='quanly'>
		
		Quản lý công việc
		
	</header>
	<!--
	<nav class='menu_quanly'>
			<ul class='main'>
			   <li class='main'><a  class='main view_common_list'>Xem lịch sử công việc</a>
				  <ul class='item'>
					 <li class='item'><a  class='item view_calendar'>Xem dạng lịch</a> </li>
					 <li class='item'><a  class='item view_list'>Xem dạng danh sách</a> </li>
				  </ul>
			   </li>
			   <li class='main'><a class='main view_report'>Báo cáo tiến độ</a> </li>			   
			</ul>
	</nav>
	-->
	<section class='list tasklist' id='section_tasklist'>
		<header class='tab tasklist'>
			
					
					
					<fieldset  class='manipulation'>
						<legend>Thao tác</legend>
						<ul>
						<li>
						<span  class="btnAMD manipulation btnAddtask"><img src='public/img/add1.png'/>Tạo công việc</span>
						<span  class="manipulation btnDeletemanytask"><img src='public/img/icondeletemany.png'/>Xóa công việc</span>
						</li>
						</ul>
					</fieldset>
					<fieldset class='filter'>
						<legend>Bộ lọc</legend>
							<section class='advance'>				
								<div >
									
									<table class='filter' >
									<tr class='filter subject' ><th>Môn học</th>
										<td>
										<select name='data[MA_MH]'>
										<option value='all'>--Tất cả--</option>
										<?php if (isset($tatcamonhocthamgia) && !empty($tatcamonhocthamgia)){
												foreach ($tatcamonhocthamgia as $row){
													echo "<option value='".$row['MA_MH']."'>".$row['TEN_MH']."</option>";
												}
										}
										?>
										</select> 
										</td>
									</tr>
									<tr class='filter level'><th>Mức dộ</th>
										<td>
										<select name='data[MA_MH]'>
											<option value='all'>--Tùy ý--</option>
											<option value='1'>Không quan trọng</option>
											<option value='2'>Bình thường</option>
											<option value='3'>Quan trọng</option>
										</select> 
										</td>
									</tr>
									<tr class='filter asignee'><th></th>
										<td>
										<input type='checkbox' value='me'/> Người được giao là tôi
										</td>
									</tr>
									</table>
									
								</div>
								 
							
						</section>		
					</fieldset>
					
		</header>
		
		<section class='view tasklist' style='float:left;'>
			
			<div id='calendar'>
			</div>
			<div class='list tasklist' style="min-width: 1155px;">
				<table >
					<form action='' method='post'>
					<tr class='tieude_bar'><th colspan='13'>Danh sách công việc </th></tr>
					<tr><th></th>
						<th>Môn học</th>
						<th>Tên công việc </th>
						<th>Từ ngày  </th>
						<th>Đến ngày  </th>
						<th>Số giờ</th><th>Mô tả</th><th>Hoàn thành(%)</th><th>Người được giao</th><th>Trạng thái</th><th>Mức độ</th><th>Tính chất</th><th>Thao tác</th>
					</tr>
					<?php if (isset($query_dscongviec) && !empty($query_dscongviec)){
						foreach ($query_dscongviec as $MA_LOPHOCPHAN => $congviec_monhoc){
							if (isset($congviec_monhoc['dscongviec']) && !empty($congviec_monhoc['dscongviec'])){
								$array_nguoiduocgiao = array();
								foreach ($congviec_monhoc['monhoc'] as $mh){
									$tenmonhoc = $mh['TEN_MH'];
									$tengv = $mh['HOTEN'];
								}
								foreach ($congviec_monhoc['dscongviec'] as $congviec){
									
									if (!empty($congviec) && isset($congviec)){
										echo "<tr> ";
										echo "<td class='center MA_CV'><input type='checkbox' name='check_list[]' value='".$congviec['MA_CV']."'/></td>";
										echo "<td class='TEN_MH'><a>".$tenmonhoc."</a></td>";
										echo "<td class='TEN_CV'><a href='".CIT_BASE_URL."iframe/chitietcongviec/".$congviec['MA_CV']."' target='iframe_chitietcongviec'>".$congviec['TEN_CV']."</a></td>";
										echo "<td class='NGAYBD'><a>".$congviec['NGAYBD']."</a></td>";
										echo "<td class='NGAYKT'><a>".$congviec['NGAYKT']."</a></td>";
										echo "<td class='THOIGIANUL'  style='text-align:center'><a>".$congviec['THOIGIANUL']."</a></td>";
										echo "<td class='MOTA'><a>".$congviec['MOTA']."</a></td>";
										echo "<td class='TILEHOANTHANH'  style='text-align:center'><a>".$congviec['TILEHOANTHANH']."</a></td>";
										echo "<td class='NGUOIDUOCGIAO'><a>";
	
											$array_nguoiduocgiao = explode(',',$congviec['NGUOIDUOCGIAO']);	

											foreach ($array_nguoiduocgiao as $nguoiduocgiao){
												echo $nguoiduocgiao;
												echo "   <br/>";
												
											}
											
										echo "</a></td>";
										echo "<td class='TEN_TRANGTHAI'  style='text-align:center'><a>".$congviec['TEN_TRANGTHAI']."</a></td>";
										echo "<td class='TEN_MUCDO'><a>".$congviec['TEN_MUCDO']."</a></td>";
										echo "<td class='TEN_TINHCHAT'  style='text-align:center'><a>".$congviec['TEN_TINHCHAT']."</a></td>";
										echo "<td style='text-align:center'><span class='manipulation btnDeletetask'><img src='public/img/icondeletemember.png'></img></span>
												<span class='manipulation btnModifytask'><img src='public/img/Update-icon1.png'></img></span></td>
											</tr>";
									}
								}
							}
						}
					} 
					
					?>
					<input type='submit' class='hide' name='deletetask' value='Xóa công việc'/>
				</form>
				</table>
				
			</div>	
		</section>
		
	</section>
	<section class='list reportlist' id='section_reportlist'>
		<header class='tab reportlist'>
			<fieldset>
			<legend>Thao tác</legend>
			
				<ul>
					<li><span  class="btnAMD manipulation btnAddreport">Tạo báo cáo</span></li>
				</ul>
			</fieldset>
				<fieldset>
					<legend>Bộ lọc</legend>
					<section class='advance'>

							<table class='filter'>
							
								
								<tr class='filter subject'>
									<th>Môn học</th>
									<td>
									<select name='data[MA_MH]'>
									<option value='all'>--Tất cả--</option>
									<?php if (isset($tatcamonhocthamgia) && !empty($tatcamonhocthamgia)){
												foreach ($tatcamonhocthamgia as $row){
													echo "<option value='".$row['MA_MH']."'>".$row['TEN_MH']."</option>";
												}
									}
									?>
									</select> 
									</td>
								</tr>
								
								
								
								
							</table>
							
							
						
						
						
						</section>
				</fieldset>
		
		</header>
		<section class='view reportlist' style='float:left;'>
				
				
				<div class='list reportlist' id='reportlist'>
				<table>
					<tr class='tieude_bar'><th colspan='13'>Danh sách báo cáo dã gửi </th></tr>
					<tr><th>STT</th>
						<th>Môn học</th>
						<th><span class='sort'>Tiêu đề</span></th>
						<th><span class='sort'>Ngày gửi</span></th>
						<!--<th>Trạng thái</th>-->
						<th>Người gửi </span></th>
						<th>Nội dung</th>
						<th>File </th>
					</tr>
					<?php if (isset($dsbaocao) && !empty($dsbaocao)){
						
							foreach($dsbaocao as $mon){
								$i = 0;
								foreach($mon as $row){
								echo "<tr>";
									$i++;
									echo "<td>".$i."<input type='text' class='hide' value='".$row['MA_BC']."'/></td>";
									echo "<td>".$row['TEN_MH']."</td>";
									echo "<td>".$row['TIEUDE']."</td>";
									echo "<td>".substr($row['NGAYGUI'],0,10)."</td>";
									/*echo "<td>";
										if ('TB_CHUAXEM' == $row['MA_TRANGTHAI']) 
											echo "Chưa xem"; 
										else echo "Đã xem";
									echo "</td>";*/
									echo "<td>".$row['HOTEN']."</td>";
									echo "<td>".$row['NOIDUNG']."</td>";
									echo "<td>";
										if ($row['FILEPATH'] == NULL)
											echo "- - -";
										else 
										echo "<a target='_blank' title =' click để download' style='text-decoration:underline;' href='".CIT_BASE_URL."sinhvien/downloadfile/".$MA_NH."/".$MA_HK."/".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."/".$row['FILEPATH']."'>".$row['FILEPATH']." </a></td>";
								echo "</tr>";	
								}
							}
							
							
						
					}
					?>
				</table>
				
				</div>	
		</section>
				
				
		
	</section>
	
	<!-- //MANIPULATION 
	     //
		 //
		 //
		 //
		 //
	-->
	<section class='manipulation'>
		<div id='black'>
		</div>
		<img class='manipulation' src='public/img/iconclose.png'/>
		
		<div id='addtask'  class="form">

				  <form action="" method="post" class="w50p">
				  <input type='text' id ='flag' class='hide' name='data[flag]' value='<?php echo common_postvalue(isset($flag_post) ? $flag_post : '');?>'/>
				  <h1>
						TẠO CÔNG VIỆC
						<span>Điền đầy đủ thông tin.</span>
					
					</h1>
					

					<table>
						<tr><td><p><span class='error monhoc'></span></p>
									<label  id='subject'><span><tieude>Môn học: </tieude></span>
											<select name='data[MA_LOPHOCPHAN]' >
											<option value='0-0'>Chọn 1 môn học</option>
												<?php if (isset($tatcamonhocthamgia) && !empty($tatcamonhocthamgia)){
													
													
													foreach ($tatcamonhocthamgia as $row){
														if (isset($_post) && $_post['MA_LOPHOCPHAN'] == $row['MA_LOPHOCPHAN'].'-'.$row['STT_NHOM'])
															echo "<option value='".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."' selected >".$row['TEN_MH']."</option>";
														else 
															echo "<option value='".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."' >".$row['TEN_MH']."</option>";
													}
													
												}
												
												?>

											</select>
									</label>
							</td>
							
						<td rowspan='2'><p><span class='error nguoiduocgiao'></span></p>
								<label><span><tieude>Người được giao (Ctrl + Click để chọn nhiều) </tieude></span>
										<select id='NGUOIDUOCGIAO' name='data[NGUOIDUOCGIAO][]' multiple>
											
												 <?php if (isset($query_dsthanhvien) && !empty($query_dsthanhvien)){
														foreach ($query_dsthanhvien['thanhvien'] as $row){
															echo "<option value='".$row['MSSV']."'>".$row['HOTEN']."</option>";
														}
													}
													else 
														echo "<option value='0' disabled='disabled'>Chọn môn học để hiển thị thành viên</option>";
												?>
											
										</select>
								</label>
							</td>
						<tr>
							<td>
							
								<label><p><span class='error ten_cv'></span></p>
									<span><tieude>Tên công việc:</tieude></span>
									<input id="TEN_CV" type="text" name="data[TEN_CV]" value='<?php echo common_postvalue(isset($_post['TEN_CV']) ? $_post['TEN_CV'] : '');?>' />
								</label>
							</td>
						</tr>
						<tr><td><p><span class='error thoigian'></span></p>
								<fieldset>
									<legend><tieude>Thời gian</tieude></legend>
										<label>Ngày bắt đầu
											<input type="date" id = 'NGAYBD' name='data[NGAYBD]' value='<?php echo date('Y-m-d'); ?>' />
										</label>
									
									
										<label>Ngày kết thúc  <input type="date" id='NGAYKT' name='data[NGAYKT]' value='<?php echo common_postvalue(isset($_post['NGAYKT']) ? $_post['NGAYKT'] : '');?>' /></label>
									
									
										<label>Uớc lượng &nbsp &nbsp  <input type="number" min="0" max="99" step="1"  id ='THOIGIANUL' name='data[THOIGIANUL]' value='<?php echo common_postvalue(isset($_post['THOIGIANUL']) ? $_post['THOIGIANUL'] : '0');?>' /><span> giờ</span></label>
									
								</fieldset>
							</td>
							<td><fieldset>
									<legend><tieude>Trạng thái</tieude></legend>
									
								<?php if (isset($_post['MA_TRANGTHAI'])){
								if ('CV_DONG' == $_post['MA_TRANGTHAI'][0])
										echo "
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]' checked='checked' value='CV_DONG'>Đóng</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_MO'  value='CV_MO'>Mới mở</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_TRONG' >Trong tiến trình</label></p>";
									else if ('CV_MO' == $_post['MA_TRANGTHAI'][0])
										echo "
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]'  value='CV_DONG'>Đóng</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_MO' checked='checked' value='CV_MO'>Mới mở</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_TRONG' >Trong tiến trình</label></p>";
									else 
										echo "
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]'  value='CV_DONG'>Đóng</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_MO'  value='CV_MO'>Mới mở</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' checked='checked' value='CV_TRONG' >Trong tiến trình</label></p>";
								}
								else 
									echo "<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_DONG'>Đóng</label></p>
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]' checked='checked' value='CV_MO'  value='CV_MO'>Mới mở</label></p>
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_TRONG' >Trong tiến trình</label></p>";
									
								?>
								</fieldset>
							</td>
							
						</tr>
						<tr>
							<td><fieldset>
									<legend><tieude>Mức độ</tieude></legend>
								<?php if (isset($_post['MA_MUCDO'])){
									if ('1' == $_post['MA_MUCDO'][0])
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' checked='checked' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2'  value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3'>Quan trọng</label></p>";
									else if ('2' == $_post['MA_MUCDO'][0])
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2' checked='checked' value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3'>Quan trọng</label></p>";
									else 
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2'  value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3' checked='checked'>Quan trọng</label></p>";
								}
								else 
									echo "<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2' checked='checked' value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3'>Quan trọng</label></p>";
								?>
								
								</fieldset>
							</td>
							<td>
							<fieldset>
									<legend><tieude>Tính chất</tieude></legend>
								<?php if (isset($_post['MA_TINHCHAT'])){
									if ('NV' == $_post['MA_TINHCHAT'][0])
										echo "
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='NV'>Nhiệm vụ</label></p>
								<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='KK'>Khó khăn</label></p>";
									else 
										echo "
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='NV'>Nhiệm vụ</label></p>
								<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='KK'>Khó khăn</label></p>";
								}
								else 
									echo "<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='NV'>Nhiệm vụ</label></p>
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='KK'>Khó khăn</label></p>";
								?>
									
							
							 </fieldset>
							</td>
						</tr>
						<tr>	
							<td >
								<label><span><tieude>Mô tả</tieude></span><textarea name='data[MOTA]' placeholder="Nhập đoạn văn bản"  ><?php echo common_postvalue(isset($_post['MOTA']) ? $_post['MOTA'] : '');?></textarea></label>
							</td>
							<td>
								<label><tieude>Hoàn thành </tieude><br/><input type="number" min="0" max='99' step='1' id ='TILEHOANTHANH' name='data[TILEHOANTHANH]' value='<?php echo common_postvalue(isset($_post['TILEHOANTHANH']) ? $_post['TILEHOANTHANH'] : '0');?>' /><span> %</span></label>
								<div class='bar_tilehoanthanh2'>
									<div></div>
								</div>
							</td>
						</tr>
						
					
					
					<tr><td colspan='2'>
					<label>
							<span>&nbsp;</span> 
							<input style="float:right; margin-left: 20px; width: 70px" type="button" class="btn btn-default btn-sm" name='close' value="Đóng" /> 
						
						 
						
							<span>&nbsp;</span> 
							<input style="float:right; margin-left: 20px; width: 70px" type="button" class="btn btn-default btn-sm" name='addtask_reset' value="Hủy" /> 
						
						
							<span>&nbsp;</span> 
							<input style="float:right; width: 70px" type="submit" class="btn btn-primary btn-sm" name='addtask' value="Tạo" /> 
						</label>
						<input type='submit' class='hide' name='getgroupmate' value='Lấy thành viên cùng nhóm'/>	
					</td></tr>
					</table>
					    
		</form>
		</div>
<!--/*--------------------------------------------------------------------------------------------------------------------------------------*/-->
			
		<div id='addreport' class="form">
				
				  <form action="" method="post" enctype="multipart/form-data" >
				  
					<h1>TẠO BÁO CÁO
						<span >Gửi hôm nay, <input id='ngayguibaocao' readonly='readonly' style='background:none;border:none;' name="data[NGAYGUI]" value='<?php echo date('Y-m-d'); ?>' /></span>
					</h1>
					<span class='error monhoc'></span>
					<label ><span><tieude>Môn học: </tieude></span>
							<select name='data[MA_LOPHOCPHAN]'>
								<?php if (isset($tatcamonhocthamgia) && !empty($tatcamonhocthamgia)){
									echo "<option value='0-0'>Chọn 1 môn học</option>";
									foreach ($tatcamonhocthamgia as $row){
										echo "<option value='".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."'>".$row['TEN_MH']."</option>";
									}
								}
								?>

							</select>
					</label>

					
						
						
					
					
					<span class='error tieude'></span>
					<label>
						
						<span><tieude>Tiêu đề:</tieude></span>
						<input id="tieudebaocao" type="text" name="data[TIEUDE]"  />
					</label>
					
					<label >
						
						<span><tieude>Nội dung</tieude></span>
						<textarea id='noidungbaocao' rows='50' name='data[NOIDUNG]' placeholder='Nhập đoạn văn bản'></textarea>
					</label>	
					<p>
						<label> <span>  </span><input type='file' name='file' value='Chọn file'/></label>
					</p>
					
					 
					 <label>
						<span>&nbsp;</span> 
						<input type="button" class="submit-button"  value="Đóng" /> 
						<span>&nbsp;</span> 
						<input type="reset" class="submit-button"  name='addreport_reset'value="Hủy" /> 
						
						<span>&nbsp;</span> 
						<input type="submit" class="submit-button" name='addreport' value="Tạo" /> 
					</label>    
				
		</form>
		</div>

		
		<!-- -------------------------------------------------------------------------------------------------------------------------- -->
	<div id='modifytask' class='form'>
			<form action="" method="post" class="w50p">
				  <input type='text' id ='flag2' class='hide' name='data[flag2]' value='<?php echo common_postvalue(isset($flag_post2) ? $flag_post2 : '');?>'/>
				  <input type='text' id ='POST_NGUOIDUOCGIAO' class='hide' name='data[POST_NGUOIDUOCGIAO]' value='<?php echo common_postvalue(isset($POST_NGUOIDUOCGIAO) ? $POST_NGUOIDUOCGIAO : '');?>'/>
				  <input type='text' id ='POST_NGUOIDUOCGIAO_YES' class='hide' name='data[POST_NGUOIDUOCGIAO_YES]' value='<?php echo common_postvalue(isset($POST_NGUOIDUOCGIAO_YES) ? $POST_NGUOIDUOCGIAO_YES : '');?>'/>
				  <input type='text' id ='MA_CV2' class='hide' name='data[MA_CV]' value='<?php echo common_postvalue(isset($MACV_POST) ? $MACV_POST : '');?>'/>
				  <h1>
						CHỈNH SỬA CÔNG VIỆC
						<span>Điền đầy đủ thông tin.</span>
					
					</h1>
					

					<table>
						<tr><td><p><span class='error monhoc'></span></p>
									<label  id='subject2'><span><tieude>Môn học: </tieude></span>
											<select name='data[MA_LOPHOCPHAN]' >
											<option value='0-0'>Chọn 1 môn học</option>
												<?php if (isset($tatcamonhocthamgia) && !empty($tatcamonhocthamgia)){
													
													
													foreach ($tatcamonhocthamgia as $row){
														if (isset($_post) && $_post['MA_LOPHOCPHAN'] == $row['MA_LOPHOCPHAN'].'-'.$row['STT_NHOM'])
															echo "<option value='".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."' selected >".$row['TEN_MH']."</option>";
														else 
															echo "<option value='".$row['MA_LOPHOCPHAN']."-".$row['STT_NHOM']."' >".$row['TEN_MH']."</option>";
													}
													
												}
												
												?>

											</select>
									</label>
							</td>
							
						<td rowspan='2'><p><span class='error nguoiduocgiao'></span></p>
								<label><span><tieude>Người được giao (Ctrl + Click để chọn nhiều)</tieude> </span>
										<select id='NGUOIDUOCGIAO2' name='data[NGUOIDUOCGIAO][]' multiple>
											
												 <?php if (isset($query_dsthanhvien) && !empty($query_dsthanhvien)){
														foreach ($query_dsthanhvien['thanhvien'] as $row){
															echo "<option value='".$row['MSSV']."'>".$row['HOTEN']."</option>";
														}
													}
													else 
														echo "<option value='0' disabled='disabled'>Chọn môn học để hiển thị thành viên</option>";
												?>
											
										</select>
								</label>
							</td>
						<tr>
							<td>
							
								<label><p><span class='error ten_cv'></span></p>
									<span><tieude>Tên công việc:</tieude></span>
									<input id="TEN_CV2" type="text" name="data[TEN_CV]" value='<?php echo common_postvalue(isset($_post['TEN_CV']) ? $_post['TEN_CV'] : '');?>' />
								</label>
							</td>
						</tr>
						<tr><td><p><span class='error thoigian'></span></p>
								<fieldset>
									<legend><tieude>Thời gian</tieude></legend>
										<label><tieude>Ngày bắt đầu</tieude>
											<input type="date" id = 'NGAYBD2' name='data[NGAYBD]' value='<?php echo date('Y-m-d'); ?>' />
										</label>
									
									
										<label><tieude>Ngày kết thúc </tieude> <input type="date" id='NGAYKT2' name='data[NGAYKT]' value='<?php echo common_postvalue(isset($_post['NGAYKT']) ? $_post['NGAYKT'] : '');?>' /></label>
									
									
										<label><tieude>Uớc lượng </tieude><input type="number" min="0" max="99" step="1" id ='THOIGIANUL2' name='data[THOIGIANUL]' value='<?php echo common_postvalue(isset($_post['THOIGIANUL']) ? $_post['THOIGIANUL'] : '0');?>' /><span> Giờ</span></label>
									
								</fieldset>
							</td>
							<td><fieldset class='MA_TRANGTHAI'>
									<legend><tieude>Trạng thái</tieude></legend>
									
								<?php if (isset($_post['MA_TRANGTHAI'])){?>
								
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]' <?php if ($_post['MA_TRANGTHAI'][0] == 'CV_DONG') echo "checked='checked'";?> value='CV_DONG'>Đóng</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]'  <?php if ($_post['MA_TRANGTHAI'][0] == 'CV_MO') echo "checked='checked'";?> value='CV_MO'  value='CV_MO'>Mở</label></p>
								<p><label><input type='radio' name='data[MA_TRANGTHAI][]'  <?php if ($_post['MA_TRANGTHAI'][0] == 'CV_TRONG') echo "checked='checked'";?>value='CV_TRONG' >Trong tiến trình</label></p>
									
								<?php }
								else {?>
									<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_DONG'>Đóng</label></p>
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]' checked='checked' value='CV_MO'  value='CV_MO'>Mở</label></p>
											<p><label><input type='radio' name='data[MA_TRANGTHAI][]' value='CV_TRONG' >Trong tiến trình</label></p>
									
								<?php }?>
								</fieldset>
							</td>
							
						</tr>
						<tr>
							<td><fieldset class='MA_MUCDO'>
									<legend><tieude>Mức độ</tieude></legend>
								<?php if (isset($_post['MA_MUCDO'])){
									if ('1' == $_post['MA_MUCDO'][0])
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' checked='checked' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2'  value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3'>Quan trọng</label></p>";
									else if ('2' == $_post['MA_MUCDO'][0])
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2' checked='checked' value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3'>Quan trọng</label></p>";
									else 
										echo "
											<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2'  value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3' checked='checked'>Quan trọng</label></p>";
								}
								else 
									echo "<p><label><input type='radio' name='data[MA_MUCDO][]' value='1'>Không quan trọng</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='2' checked='checked' value='Bình thường'>Bình thường</label></p>
								<p><label><input type='radio' name='data[MA_MUCDO][]' value='3' >Quan trọng</label></p>";
								?>
								
								</fieldset>
							</td>
							<td>
							<fieldset class='MA_TINHCHAT'>
									<legend><tieude>Tính chất</tieude></legend>
								<?php if (isset($_post['MA_TINHCHAT'])){
									if ('NV' == $_post['MA_TINHCHAT'][0])
										echo "
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='NV'>Nhiệm vụ</label></p>
								<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='KK'>Khó khăn</label></p>";
									else 
										echo "
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='NV'>Nhiệm vụ</label></p>
								<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='KK'>Khó khăn</label></p>";
								}
								else 
									echo "<p><label><input type='radio' name='data[MA_TINHCHAT][]' checked='checked' value='NV'>Nhiệm vụ</label></p>
											<p><label><input type='radio' name='data[MA_TINHCHAT][]' value='KK'>Khó khăn</label></p>";
								?>
									
							
							 </fieldset>
							</td>
						</tr>
						<tr>	
							<td >
								<label><span><tieude>Mô tả</tieude></span><textarea name='data[MOTA]' placeholder="Nhập đoạn văn bản"  ><?php echo common_postvalue(isset($_post['MOTA']) ? $_post['MOTA'] : '');?></textarea></label>
							</td>
							<td>
								<label><tieude>Hoàn thành</tieude><br/> <input type="number" min="0" max="100" step="1" id ='TILEHOANTHANH2' name='data[TILEHOANTHANH]' value='<?php echo common_postvalue(isset($_post['TILEHOANTHANH']) ? $_post['TILEHOANTHANH'] : '0');?>' /><span> %</span></label>
								<br/>
								<div class='bar_tilehoanthanh'>
									<div></div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan='2'>
								<label><span><tieude>Ghi chú cho lần thay đổi này</tieude></span><textarea name='data[GHICHU]' placeholder="Nhập đoạn văn bản"  ><?php echo common_postvalue(isset($_post['GHICHU']) ? $_post['GHICHU'] : '');?></textarea></label>
							</td>
						</tr>
						
					
					
					<tr><td colspan='2'>
					<label>
							<span>&nbsp;</span> 
							<input type="button" class="submit-button" name="close" value="Đóng" /> 
						
						 
							<span>&nbsp;</span> 
							<input type="reset" class="submit-button" name='modifytask_reset'value="Hủy" /> 
						
							<span>&nbsp;</span> 
							<input type="submit" class="submit-button" name='modifytask' value="Lưu" /> 
						</label>
						<input type='submit' class='hide' name='getgroupmate2' value='Lấy thành viên cùng nhóm'/>	
					</td></tr>
					</table>
					    
		</form>
		</div>
		
		
		
	</section>
	<div id='iframe_chitietcongviec' class='iframe_chitietcongviec'>
		<img class='iframe_chitietcongviec' src='public/img/iconclose.png'/>
			<div>Mức độ hoàn thành chi tiết
			</div>
			
			<table class='table table-bordered table-hover'>
					<tr style='height:40px;background:#FFF;'>
						<th style='width: 63px'>Thứ tự</th>
						<th style='width: 162px'>Người cập nhật</th>
						<th style='width: 166px'>Thời gian</th>
						<th style='width: 171px'>Mức độ hoàn thành</th>
						<th style='width:281px'>Ghi chú</th>
					</tr>
			</table>
		
			<iframe name='iframe_chitietcongviec' class='iframe_chitietcongviec' ></iframe>
	</div>
<input type='text' class='hide' id='USER' value='<?php echo $HOTEN;?>'/>
</section>