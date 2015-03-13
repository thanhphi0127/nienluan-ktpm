
<div class="khung">
	<header class='quanly'>
		
		Danh sách sinh viên
		
	</header>
	
	<div class="download">
        <form action="" method="post">
            <div style="padding: 5px;">
            <label id="chonmon" label>Chọn môn học</label>
            <?php 
				//Hien thi combobox chon mon hoc giang vien dang phu trach
				if(isset($LayMonHoc_GiangVien) && !empty($LayMonHoc_GiangVien)){
					echo "<select id='sl_mh' class='form-control' name='ma_mh' style='padding: 6px 12px;'>";
					foreach ($LayMonHoc_GiangVien as $row) {
						echo "<option value='".$row['MA_MH']."' ";
						if ($row['MA_MH'] == $ma_mh) echo 'selected';
						echo ">".$row['MA_MH']." - ".$row['TEN_MH']."</option>";
					}
					echo " </select>";
					echo '<input style="margin-left: 5px; float:none" type="submit" name="btn_monhoc" title="Danh sách sinh viên"  class="btn btn-primary" value="Hiển thị danh sách" />';
					
				}else {
					echo "<select id='sl_mh' class='form-control' name='ma_mh' style='padding: 6px 12px;'>
						<option>Không có môn học</option>
					</select>";
				}
			?>
            
            </div>
        </form>
        
        <div class='view_download'>
        <?php 
			$i = 1;        
        	if(isset($LayDanhSachSV) && !empty($LayDanhSachSV)){
				
        	echo '<h4>Danh sách sinh viên môn '.$ten_mh.'</h4>
            <table class="table-bordered table-hover table_nguoidung">
				<tr>
                	<th>STT</th>
                	<th>MSSV</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Nhóm</th>
                    <th>SDT</th>
                    <th>Mail</th>
                </tr>';

			
				foreach ($LayDanhSachSV as $row) {
					echo '
						<tr> 
							<td>'.$i.'</td>
							<td>'.$row['MSSV'].'</td>
							<td>'.$row['HOTEN'].'</td>
							<td>'.$row['GIOITINH'].'</td>
							<td>';
							if (0 == $row['STT_NHOM']) echo '';
							else
							echo 'Nhóm '.$row['STT_NHOM'];
							echo'</td>
							<td>'.$row['SDT'].'</td>
							<td>'.$row['MAIL'].'</td>
						</tr>';
						$i++;
				}
			}
		?>
			</table>

         <?php 
			echo '</div>';
			if(isset($LayDanhSachSV) && !empty($LayDanhSachSV)){
				echo "<p class='sumStudent'>Tổng cộng: ".($i-1)." sinh viên";
			 echo '
		<!--   XUAT FILE EXCEL CHO MOI MON GIANG VIEN PHU TRACH  -->
		<div style="height:40px;">
			<a id="xuat_excel" style="float:right; margin: 4px" href="giangvien/indanhsanhsv?ma_mh='. $ma_mh.' "class="btn btn-success square-btn-adjust" title="Nhấp để in danh sách nhóm" >Xuất ra file excel</a>
		</div>';
		}
	?>
        
    </div>

</div>