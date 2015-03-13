<!-- * View quản lý nhóm sinh viên
     * @author: Thành Tâm
-->

<section id='cit_wrapper'>
	
	<header class='quanly'>
		
		Quản lý nhóm
	</header>
	<section class='list quanlynhom'>
		<header class='tab'>
		
			<fieldset class='fright'>
				<legend>Thao tác</legend>
				<ul>
				<li>
				<span  class="btnAMD btnRegister manipulation"><img style='margin-bottom:-9px;' src='public/img/icondangkinhom.png'></img>Đăng kí nhóm</span>
				<span  class="btnLeavemanygroup manipulation"><img style='margin-bottom:-9px;' src='public/img/iconleavemanygroup.png'></img>Rời khỏi nhóm</span>
				</li>
				</ul>
			</fieldset>
			<fieldset >
				<legend>Thông tin giảng viên</legend>
				<iframe class='iframe_ttgv' name='thongtingiangvien' id='thongtingiangvien' scrolling="no" src='<?php echo CIT_BASE_URL."iframe/thongtingiangvien/";?>'></iframe>
			</fieldset>	
		</header>
		
		<div class='list grouplist'>
		<?php echo "<form action='' method='post'>";?>
			
				<table border="1" bordercolor="#F7F9F8" style='float:left;'>
					<tr class='tieude_bar'> <th colspan='7'>Danh sách môn học đã đăng kí nhóm</th></tr>
					<tr><th></th>
						<th> Môn học </th>
						<th>Tên nhóm </th>
						<th>Thành viên </th>
						<th style='display:none;'>Chức vụ</th><th>Đề tài</th><th>Mô tả</th><th>Thao tác</th>
					</tr>
					<?php	
						if (isset($query_chitietnhom) && !empty($query_chitietnhom) && $query_chitietnhom != NULL){
							
							foreach ($query_chitietnhom as $MA_LOPHOCPHANA => $row){
								if (!empty($row['thongtinnhom'])){
									echo "<tr> ";
									echo "<td class='check' ><input class='check' name='check_list[]' type='checkbox' value='".$row['thongtinnhom'][0]['MA_LOPHOCPHAN']."'/></td>";
									echo "<td class='TEN_MH'><a href='".CIT_BASE_URL."iframe/thongtingiangvien/".$MA_LOPHOCPHANA."' target='thongtingiangvien'>".$row['thongtinnhom'][0]['TEN_MH']."</a></td>";
									echo "<td style='text-align:center'>Nhóm<input class='hideinput w60 STT_NHOM' type='text' name='data[STT_NHOM]' value='".trim($row['thongtinnhom'][0]['STT_NHOM'])."' readonly = 'readonly'/></td>";
									echo "<td>";
									echo 	"<table class='member'>";
											$i = 1;
													foreach ($row['thanhvien'] as $thanhvien){
													echo "<tr >";
													  echo "<td>";

															echo "<input class='hide check' type='checkbox' name='check_mssv[]' value='".$thanhvien['MSSV']."' readonly = 'readonly'/>";
														
														echo "".$thanhvien['HOTEN'].' - ' . $thanhvien['MSSV'];
													  echo "</td>";
													  echo "<td>";
															if ($row['thongtinnhom'][0]['NHOMTRUONG'] == $MSSV ){
																if (substr($thanhvien['MSSV'], -7) != substr($row['thongtinnhom'][0]['NHOMTRUONG'], -7)){
																	echo "<span class='manipulation btnDeletemember'><img src='public/img/Remove-User.png' title='Xóa thành viên'></img></span>";
																}
																else echo "Nhóm trưởng";
															}
															else {
																if ($row['thongtinnhom'][0]['NHOMTRUONG'] != $thanhvien['MSSV'] )
																	echo "Thành viên";
																else echo "Nhóm trưởng";
															}
															$i++;
																
																
													  echo "</td>";
													echo "</tr>";
													}
									echo "</table>";
									echo "</td>";
											
										
									echo "<td style='display:none;'>";
											if ($row['thongtinnhom'][0]['NHOMTRUONG'] == $MSSV)
												echo "Nhóm trưởng";
											else echo "Thành viên";
									echo "</td>";
									echo "<td class='DETAI' >".$row['thongtinnhom'][0]['DETAI']."</td>";
									echo "<td class='MOTA'>".$row['thongtinnhom'][0]['MOTA']."</td>";
									echo "<td style='text-align:center'>";
										if ($row['thongtinnhom'][0]['NHOMTRUONG'] == $MSSV )
											echo "<span class='manipulation btnLeavegroup'><img src='public/img/Roinhom.png' title='Rời khỏi nhóm'></img></span>";
										echo "<span class='manipulation btnModifygroup'><img src='public/img/Update-icon1.png' title='Chỉnh sửa chi tiết nhóm'></img></span>";
										if ($row['thongtinnhom'][0]['NHOMTRUONG'] == $MSSV )
											echo "<span class='manipulation btnAddmember'><img src='public/img/add1.png' title='Thêm thành viên'></img></span>
											
										</td>";
									echo "</tr>";
								}	
								
							}
						}
						else echo "<tr><td colspan='7'><span style='font-size:15px; color:blue; text-align:center' align = 'center'>Chưa có nhóm</span></td></tr>";
						
						echo "<input type='submit' class='hide' value='Rời khỏi nhóm' name='leavegroup'/>";
						echo "<input type='submit' class='hide' value='Xóa thành viên' name='deletemember'/>";
						echo "</form>";
					?>
					
				</table>
				
				
		
	</section>
	
	<section class='manipulation'>
		<div id='black'>
		</div>
		<img class='manipulation' src='public/img/iconclose.png' style='display:block; margin-top: 200px;
margin-right: 10px'>
		
		<div id='addmember' class='form'>
		
			<form  action="" method="post" style="height: 200px; margin-top: 80px;">
			
				<input type='text' id ='flag' class='hide' name='data[flag]' value='<?php echo common_postvalue(isset($flag_post) ? $flag_post : '');?>'/>
				<h2>THÊM THÀNH VIÊN
						<span><tieude>Môn</tieude> <?php if (isset($TEN_MH)) echo $TEN_MH;?></span></h2>
						<input type='text' class='hide MA_LOPHOCPHAN addmember' name='data[MA_LOPHOCPHAN]' value='<?php if (isset($MA_LOPHOCPHAN)) echo  $MA_LOPHOCPHAN; else echo '';?>'/>
						<input type='text' class='hide STT_NHOM' name='data[STT_NHOM]' value='<?php echo common_postvalue(isset($STT_NHOM) ? $STT_NHOM : '');?>'/>
						<p><span class='error mssv'></span></p>
						<tieude>Danh sách sinh viên cùng lớp</tieude>
						
						<label>
						<select id='MSSV_THANHVIEN' name='data[MSSV]'  >
						 <?php if (isset($sinhviencunglop) && !empty($sinhviencunglop)){
							echo "<option value='0' disabled='disabled'>Chọn 1 thành viên</option>";
							echo "<optgroup label='Chưa có nhóm'>";
							foreach ($sinhviencunglop['chuaconhom'] as $row){
								echo "<option value='".$row['MSSV']."'>".$row['HOTEN']."</option>";
							}
							echo "</optgroup>";
							echo "<optgroup label='Đã có nhóm'>";
							foreach ($sinhviencunglop['daconhom'] as $row){
								echo "<option value='0' disabled='disabled' style='line-height:44px;background-image:url(http://localhost/cit-quanlynhom/public/img/checkicon3.png);'>".$row['HOTEN']." </option>";
							}
							echo "</optgroup>";
							
						 }
								else 
									echo "<option value='empty'>Danh sách rỗng</option>";
									
								?>
						</select>
						
						</label>
					
					
					<label style="margin-top:20px;">
					<input type='button' name='close' class='btn btn-danger btn-sm' value='Đóng' style="float: right;
height: 30px; width: 70px;
margin-right: 0px;"/>
					<input type="submit" class='btn btn-primary btn-sm' name='addmember' value='Thêm' style="margin-right: 10px;  width: 70px;
margin-top: 10px"/>
					
					
				`	</label>
				<input type='submit' class='hide' name='getclassmate' value='Lấy thành viên cùng nhóm'/>	
				
			</form>

		</div>
	
		
		<div id='modifygroup' class='form' style="margin-top: 134px">
		
			<form  action="" method="post">
				<h1>CHỈNH SỦA THÔNG TIN NHÓM
					<span>Môn </span>
				</h1>	
						<input type='text' class='hide STT_NHOM' name='data[STT_NHOM]'/>
						<input type='text' class='hide MA_LOPHOCPHAN' name='data[MA_LOPHOCPHAN]'/>
						
						<p><label><tieude>Tên đề tài:</tieude></title><input type="text" class='DETAI' name='data[DETAI]'  /></label></p> 
						 <p><label><tieude>Mô tả:</tieude></title><textarea name='data[MOTA]' class='MOTA'></textarea></label></p> 
						 <p>
						 <label>
							 <input type='button' name='close' class='btn btn-primary btn-sm'  value='Đóng'/>
							 <input type='reset' class='btn btn-default btn-sm'  value='Làm lại'/>
							<input type="submit" name ='modifygroup' class='btn btn-primary btn-sm' style="margin-top:10px; width: 60px"  value='Lưu'/>
						
						</label>
						</p>
					
				
			</form>

		</div>
		
		
		
		
		<div id='register' class='form'>
			<form action="" method="post" style="margin-top: 87px;
min-height: 100px;">
			<h1 style="height:35px">ĐĂNG KÍ NHÓM</h1>
				<?php
                        if (isset($query_monhocthamgia) && !empty($query_monhocthamgia)){
                        echo "<p style='margin-top: 30px;'><tieude>Môn học chưa có nhóm</title></p>";
                            echo "<select name='data[MA_LOPHOCPHAN]' >";
                            foreach ($query_monhocthamgia as $row) {
                                echo "<option value='".$row['MA_LOPHOCPHAN']."'>".$row['TEN_MH']."</option>";
                            }
                            echo "</select>";
                        }
                        else {
                            echo "<span style='color:blue; margin-top:10px;'>THÔNG BÁO</span>";
                            echo "<br />Hết nhóm hoặc không tham gia môn học nào trong học kì này";
                        }
                    ?>
                    
					
						
					<?php
                            if (isset($query_monhocthamgia) && !empty($query_monhocthamgia)){
                    echo "<fieldset class='register_info'>
                        <legend>THÔNG TIN</legend>
                        <iframe src='".CIT_BASE_URL."iframe/thongtinmaunhom/".$query_monhocthamgia[0]['MA_LOPHOCPHAN']."'>
                        </iframe>
						</fieldset>
						<p><label><tieude>Tên đề tài:</title></p><input type='text' name='data[DETAI]'  placeholder='Có thể cập nhật sau' ></label></p> 
						 <p><label><tieude>Mô tả:</title> </p><textarea name='data[MOTA]' placeholder='Có thể cập nhật sau'></textarea></label></p> 
						 <p>
						 <label>
						 
						 <input style='float:right; margin-left: 10px' type='button' name='close' class='btn btn-default btn-sm'  value='Đóng'/>
						 <input style='float:right; margin-left: 10px' type='reset' class='btn btn-default btn-sm'  value='Làm lại'/>
						 <input style='float:right; margin-top: 10px' type='submit' class='btn btn-primary btn-sm' name='registergroup' value='Đăng kí'/>
						
						</label>
						</p>
					</fieldset>
			</form>";
		}
		?>
		
		</div>
	
	</section>
</section>