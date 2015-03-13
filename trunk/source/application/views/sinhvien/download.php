<!-- * View download danh sách công việc, thành viên
     * @author: Thành Tâm
-->

	
<section id='cit_wrapper' style="min-height:727px">
	<header class='quanly'>
		
		In danh sách công việc
	</header>
	<section class='list'>
		<section class='config_download form' id='config_download'>
			<form action="" method="post">
					<h1 style="height: 28px;">Tùy chọn tại xuống</h1>
					<span class='error TEN_MH'></span> <br/>
					<label ><tieude style='padding-left:10px;display:block;'>Môn học</tieude>
							<select id='MA_LOPHOCPHAN' name='data[MA_LOPHOCPHAN]'>
							<option value='0-0'>Chọn một môn học</option>
							<?php
							  if (isset($query_lhpconhom) && !empty($query_lhpconhom)) {
								foreach ($query_lhpconhom as $row){
									
									echo '<option value="'.$row['MA_LOPHOCPHAN'].'-'.$row['STT_NHOM'].'">'.$row['TEN_MH'].' - Nhóm'.$row['STT_NHOM'].'</option>';
								}
									
							  }
							  else echo "Chưa có nhóm hoặc chưa có học phần để in";
							 ?>
							</select>
						<label>
					<fieldset class='config_list' id='task' name='task'>
						<legend>
							<label><tieude>Danh sách công việc </tieude></label>
						</legend>
						<br/>
						<p class='nothide'>
						<label> 
                        	Sắp xếp theo
							<select name='data[orderby]'>
							  <option value="ngaybddesc">Mới nhất trước</option>
							  <option value="ngaybdasc">Cũ nhất trước</option>
							  <option value="TEN_CV">Tên công việc</option>
							  <option value="TINHCHAT">Loại công việc</option>
							</select>
						<label>
						</p>
							<span> <label> <p id='detail'> Xem / Ẩn chi tiết >> </p></label> </span>
                            <p><label ><input disabled='disabled' type="checkbox" name='check_list[]' value='TEN_CV' checked='checked' >Tên công việc</label></p> 
							<p><label ><input  disabled='disabled' type="checkbox"  name='check_list[]'  value='NGAYBD' checked='checked'>Ngày bắt đầu </label></p> 
							<p><label ><input  disabled='disabled' type="checkbox"  name='check_list[]'   value='NGAYKT'  checked='checked' >Ngày kết thúc</label></p> 
							<p><label > <input  disabled='disabled' type="checkbox"  name='check_list[]'  value='NGUOIDUOCGIAO'  checked='checked' >Người được giao</label></p>
							<p><label ><input type="checkbox"  name='check_list[]'  value='THOIGIANUL'  checked='checked'>Ước lượng thời gian</label></p> 
							<p><label ><input type="checkbox"  name='check_list[]'  value='MOTA'  checked='checked'>Mô tả </label></p> 
							
							<p><label><input type="checkbox"  name='check_list[]'   value='TEN_MUCDO'  checked='checked'>Mức độ công việc </label></p>
							<p><label ><input type="checkbox" name='check_list[]'  value='TEN_TINHCHAT'  checked='checked' >Loại công việc </label></p>
							

					</fieldset>
					<p style="float:none; height:30px;">
						
						<input type="submit" class='btn btn-primary' name='download' value='Download' style="float: left; margin: 0px 10px 0px 10%;"/>
                        <input type='reset' class='btn btn-default'  value='Làm lại' style="float: left; margin: 0px 10px 0px 10%;"/>
						
					</p>
				
			</form>
			
		</section>
		
		<section class='review_download'>
			<br/><p>Xem trước bản tải xuống</p>
			<section class='review_area'>
				<br/><br/><span class='groupname'>TÊN MÔN HỌC - TÊN NHÓM </span> </p>
				<span class='version'> PHIÊN BẢN ngày dd/mm/yyyy </span><br/>
				<span class='member'>Danh sách thành viên</span><br/><br/><br/>
				<table border='1'  class='member'>
					<tr><td>STT</td><td>Mã số</td><td>Họ và tên</td><td>Email</td><td>Số điện tdoại</td><td>Chức vụ</td>
					<tr> <td>1</td>
						<td>123456</td>
						<td>Nguyễn Thanh Phi</td>
						<td>nga@gmail.com</td>
						<td>0xxxxxxxxxxxx</td>
						<td>Nhóm trưởng</td>
					</tr>
					<tr> <td>2</td>
						<td>B111234</td>
						<td>Nguyễn Văn B</td>
						<td>ngb@gmail.com</td>
						<td>0xxxxxxxxxxxx</td>
						<td>Thành viên</td>
					</tr>
					
				</table>
				<span class='list'>Danh sách công việc</span><br/><br/><br/>
				<table border='1' class='list' style="min-width: 700px;">
					<tr><td style='width:10px;'>STT</td><td>Tên</td><td>Từ ngày</td><td>Đến ngày</td><td>Người được giao</td><td>Số giờ</td><td>Mô tả</td><td>Mức độ</td><td>Loại công việc</td></tr>
					<tr><td>1</td> 
						<td>Công việc A</td>
						<td> 17/08/2014</td>
						<td> 24/8/2014</td>
                        <td>Nguyễn Văn A<br/>Trần Thị B</td>
						<td> 20</td>
						<td>Mô tả của công việc A</td>
						<td> QT</td>
						<td> NV</td>
					</tr>
					<tr><td>2</td>
						<td>Công việc B</td>
						<td> 17/08/2014</td>
						<td> 24/8/2014</td>
                        <td>Nguyễn Văn A<br/>Trần Văn C</td>
						<td> 20</td>
						<td>Mô tả của công việc B</td>
						<td> QT</td>
						<td> NV</td>
					</tr>
					
				</table>
			</section>
		</section>
	</section>
</section>

