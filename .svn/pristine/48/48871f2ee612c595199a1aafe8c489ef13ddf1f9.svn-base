<!-- * View quản lý mẫu nhóm cho giảng viên
     * @author: Thành Tâm
-->
<section id='cit_wrapper' >
	<header class='quanly'>
		
		Quản lý mẫu nhóm
		
	</header>
	
		
	<section class='list grouplist'>
		<header class='tab grouplist'>
			<fieldset>
				<legend>Thao tác</legend>
			<ul>
			<li>
			<span  class="btnAMD manipulation btnAddgrouptemplate"><img src='public/img/iconadd.png' title='Tạo mẫu nhóm'/>Tạo mẫu nhóm</span>
			</li>
			</ul>
			</fieldset>
		</header>
		<section class='view'>
			<section class='advance'>
				
				
			</section>
			
			<div class='list grouplist'>
			<table>
					<tr class='tieude_bar'><th colspan='13'>Danh sách mẫu nhóm đã tạo </th></tr>
					<tr>
						<th>STT</th>
						
						<th><span class='sort'>Môn học </span></th>
						<th><span class='sort'>Mã môn học </span></th>
						<th><span class='sort'>Số lượng nhóm tối đa </span></th>
						<th><span class='sort'>Số thành viên tối đa </span></th>
						<th><span class='sort'>Mô tả  </span></th>
						<th>Thao tác</th>
					</tr>
					 
					
			<?php if (isset($query_maunhom) && !empty($query_maunhom)){
					$i = 0;
						foreach ($query_maunhom as $row) {
							$i ++;
							echo "<tr>";
						
							echo "<td class='MA_MAUNHOM' >".$i."<input type='checkbox' class='hide' name='check_list' value='".$row['MA_MAUNHOM']."'/></td>";
							echo "<td class='TEN_MH'>".$row['TEN_MH']."</td>";
							echo "<td class='MA_MH'>".$row['MA_MH']."</td>";
							echo "<td class='SLN_TOIDA'>".$row['SLN_TOIDA']."</td>";
							echo "<td class='SLTV_TOIDA'>".$row['SLTV_TOIDA']."</td>";
							echo "<td class='MOTA'>".$row['MOTA']."</td>";
							echo "<td><span class='manipulation btnDeletegrouptemplate'><img src='public/img/icondeletemember.png' title='Xóa nhóm'/></span>
							<span class='manipulation btnModifygrouptemplate'><img src='public/img/iconedit.png' title='Chỉnh sửa đề tài nhóm'/></span></td>";
						echo "</tr>";
						}
				  }
				  else 
					echo "<tr><td colspan='7'>Chưa có mẫu nhóm nào được tạo</td></tr>";
			?>
						
						
				</table>
				
			</div>	
		</section>
		
	</section>
	
	<section class='manipulation'>
		<div id='black'>
		</div>
		
		<img class='manipulation' src='public/img/iconclose.png'/>
		<div id='addgrouptemplate' class='form'>
		<form action='' method='post'>
			<h1>TẠO MẪU NHÓM
						<span>Điền đầy đủ thông tin.</span>
					</h1>
					<label><div class='span_title'><tieude>Môn học trong học kì này</tieude></div>
					<?php if (isset($query_monhoc) && !empty($query_monhoc)){
							echo "<select name='data[MA_MH]'>";	
								foreach ($query_monhoc as $subject){
									echo "<option value='".$subject['MA_MH']."'>".$subject['TEN_MH']."</option>";
								}
							echo "</select> ";
							}
						else 
							echo "<br/>Chưa có <br/>";
					?>
							
						</label>
					
					<?php if (isset($query_monhoc) && !empty($query_monhoc)){?>
						<label>
						<p><span><tieude>Số nhóm tối đa  </tieude></span></p>
						<input id="data[SLN_TOIDA]" type="number" name="data[SLN_TOIDA]"  />
					</label>
					<label>
						<p><span><tieude>Số thành viên tối đa </tieude>  </span></p>
						<input id="data[SLTV_TOIDA]" type="number" name="data[SLTV_TOIDA]"  />
					</label>
					
					
							
					
					<label><span><tieude>Mô tả</tieude></span><textarea name="data[MOTA]" placeholder="Nhập đoạn văn bản" ></textarea></label>
					
					 
					 <label>
						<span>&nbsp;</span> 
						<input type="button" class="btnClose submit-button" value="Đóng"  /> 
						<span>&nbsp;</span> 
						<input type="reset" class="submit-button" value="Hủy"  /> 
						<span>&nbsp;</span> 
						<input type="submit" value="Tạo" class="submit-button" name="creategrouptemplate" /> 
						
					</label>    
					<?php }
					?>
					<label>
						
						
					</label>
		</form>
		</div>
		
		<div id='modifygrouptemplate' class='form'>
		
		<form action='' method='post'>
			<h1>CHỈNH SỦA MẪU NHÓM 
						<span >cho môn </span>
					</h1>
					<label><span><tieude>Mã môn học</tieude> </span>
						<input class="MA_MH" type="text" name="data[MA_MH]"  />
					</label>
					<label>
						<p><span><tieude>Số nhóm tối đa    </tieude> </span></p>
						<input class='SLN_TOIDA' type="number" name="data[SLN_TOIDA]"  />
					</label>
					<label>
						<p><span><tieude>Số thành viên tối đa  </tieude> </span></p>
						<input class="SLTV_TOIDA" type="number" name="data[SLTV_TOIDA]"  />
					</label>
					
					
							
					
					<label><p><span class='MOTA'><tieude>Mô tả</tieude></span></p><textarea class='MOTA' name='data[MOTA]' placeholder="Nhập đoạn văn bản" ></textarea></label>
					
					 
					 <label>
						<span>&nbsp;</span> 
						<input type="button" class="btnClose submit-button" value="Đóng"  /> 
						<span>&nbsp;</span> 
						<input type="reset" class="submit-button" value="Hủy"  /> 
						<span>&nbsp;</span> 
						<span>&nbsp;</span> 
						<input type="submit" value='Lưu' class="submit-button" name="modifygrouptemplate" /> 
					</label>    
		</form>
		</div>
		
		
		
		<div id='deletegrouptemplate' class='hide'>
		
			<form action='' method='post'>
				<input type="hidden" name="MA_MAUNHOM"  />
				
						 <label>
							<span>&nbsp;</span> 
							<input type="submit" value='Delete' class="button" name="deletegrouptemplate" /> 
						</label>    
			</form>
		</div>
		
	</section>
</section>