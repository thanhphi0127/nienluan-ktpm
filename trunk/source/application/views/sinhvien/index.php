<script>
//khong su dung
 $(document).ready(function(e) {
	 $('.khung').css('opacity', 1);
	 $('header.loginheader').css('opacity', 1);
	 $('#sinhvien_top').css('opacity', 1);
	 
    $('#huybo').click(function(){
		$('.khung').css('opacity', 1);
		$('header.loginheader').css('opacity', 1);
		$('#sinhvien_top').css('opacity', 1);
		$('#mk').remove('required');
		$('#mk_moi').remove('required');
		$('#re_mk').remove('required');
	});
	
	$('#doimatkhau').click(function(){
		$('.khung').css('opacity', 0.6);
		$('header.loginheader').css('opacity', 0.6);
		$('#sinhvien_top').css('opacity', 0.6);
	});
	
	if (1 == $('#temp').val()) { 
		$('.khung').css('opacity', 0.6);
		$('header.loginheader').css('opacity', 0.6);
		$('#sinhvien_top').css('opacity', 0.6);
	}
	else {
		 $('.khung').css('opacity', 1);
		 $('header.loginheader').css('opacity', 1);
		 $('#sinhvien_top').css('opacity', 1);
	}
	
	
	
	
});
</script>
<div class="khung" style="height:auto;">
	<div class="" style="display:block">
	<div class="mon">
    	<img src="<?php echo CIT_BASE_URL; ?>public/img/monhoc_sv1.png" alt="Danh sách môn học" />
    	<h4>Danh sách các môn học</h4>
        <?php 
			if(isset($DanhSachMonHocSV) && !empty($DanhSachMonHocSV)){
			$i = 1;
			echo '<table id="#example1" class="table-bordered table-hover table_nguoidung" style="width:547px;">
				<thead>
					  <tr>
						 <th style="font-size: 10pt;">STT</th>
						 <th style="font-size: 10pt;">Mã môn học</th>
						 <th style="font-size: 10pt;">Tên môn học</th>
						 <th style="font-size: 10pt;">Số tín chỉ</th>
						 <th style="font-size: 10pt;">Nhóm tham gia</th>
					  </tr>
				</thead>
				<tbody>';
				foreach ($DanhSachMonHocSV as $row) {
					echo '<tr>
					        <td>'.$i.'</td>
							<td>'.$row['MA_MH'].'</td>
							<td>'.$row['TEN_MH'].'</td>
							<td>'.$row['SOTC'].'</td>
							<td>';
							if (0 != $row['STT_NHOM'])
							echo 'Nhóm '.$row['STT_NHOM'];
							else echo 'Chưa có nhóm';
							'</td>
						</tr>';
					$i++;
				}
			echo '</tbody>
			</table>';
			echo "<p class='tong_mh'>Tổng số môn học: ".($i-1)." môn học</p>";
			}
		?>
    </div>
    
    
	
	
	
	
	<div class="ds hienthisinhvien" style="float: right;margin-right: 83px;margin-bottom:10px;"><h4>THÔNG TIN CÁ NHÂN</h4>
      <table class="table_tt">
          <?php
		  	  session_start();
              $user = new msinhvien();
              foreach ($ttcanhan as $user)
              {       
                    echo "<tr><td>MSSV</td><td>$user->mssv</td><tr>";
                    echo "<tr><td>Họ tên</td><td>$user->hoten</td><tr>";
                    echo "<tr><td>Giới tính</td><td>$user->gioitinh</td><tr>";     				  
                    echo "<tr><td>Ngày sinh</td><td>$user->ngaysinh</td><tr>";
                    echo "<tr><td>Email</td><td>$user->mail</td><tr>";
                    echo "<tr><td>Khóa học</td><td>$user->khoahoc</td><tr>";
                    echo "<tr><td>Ngành</td><td>Kĩ thuật phần mềm</td><tr>";
                    echo "<tr class='diachi'><td>Địa chỉ</td><td>$user->diachi</td><tr>";
              }
          ?>
      </table>
      <br />
      <div style="float:right"><input id="doimatkhau" class="btn btn-success btn-sm" type="submit" value="Đổi mật khẩu" /></div>
	</div> <!-- COL-MD-6 -->
	
	
	
	
	
	
	
    </div>
    
    <div class="capnhat">
    	<h4>Các công việc cập nhật gần đây</h4>
        <?php 
			if(isset($CongViecMoiCapNhat) && !empty($CongViecMoiCapNhat)){
			$i = 1;
			echo '<table id="#example3" class="table table-hover table_nguoidung">
				<thead>
					  <tr>
						 <th style="font-size: 10pt; width:5%;">STT</th>
						 <th style="font-size: 10pt; width:8%;">Mã công việc</th>
						 <th style="font-size: 10pt;width:25%; text-align: left">Tên công việc</th>
						 <th style="font-size: 10pt;width:25%; text-align: left">Ghi chú</th>
						 <th style="font-size: 10pt; width:10%;">Hoàn thành</th>
						  <th style="font-size: 10pt; width:15%;">Ngày sửa</th>
					  </tr>
				</thead>
				<tbody>';
				foreach ($CongViecMoiCapNhat as $row) {
					echo '<tr>
					        <td align="center">'.$i.'</td>
							<td align="center"><a title="Nhấp để xem chi tiết công viêc" href="'.CIT_BASE_URL.'sinhvien/quanlycongviec">#'.$row['MA_CV'].'</a></td>
							<td align="left"><a title="Nhấp để xem chi tiết công việc" href="'.CIT_BASE_URL.'sinhvien/quanlycongviec">'.$row['TEN_CV'].'</a></td>
							<td align="left">'.$row['GHICHU'].'</td>
							<td align="center">'.$row['HOANTHANH'].'%</td>
							<td align="center">'.$row['THOIGIANSUA'].'</td>
						</tr>';
					$i++;
				}
			echo '</tbody>
			</table>';
			}
		?>
        <br />
    </div>




</div>

<!--



    	<p class="head_congviec">Công việc mới chỉnh sửa</p>
        <?php 
			if(isset($CongViecMoiCapNhat) && !empty($CongViecMoiCapNhat)){
			$i = 1;
			echo '<table id="#example2" id="table1" class="table-bordered table-hover table_nguoidung" style="width: 450px;">
				<thead>
					  <tr>
						 <th style="font-size: 10pt;">STT</th>
						 <th style="font-size: 10pt;">Mã công việc</th>
						 <th style="font-size: 10pt;">Tên công việc</th>
						 <th style="font-size: 10pt;">Tỉ lệ hoàn thành</th>
						 <th style="font-size: 10pt;">Ngày sửa</th>
					  </tr>
				</thead>
				<tbody>';
				foreach ($CongViecMoiCapNhat as $row) {
					echo '<tr>
					        <td>'.$i.'</td>
							<td>'.$row['MA_CV'].'</td>
							<td>'.$row['TEN_CV'].'</td>
							<td>'.$row['HOANTHANH'].'</td>
							<td>'.$row['THOIGIANSUA'].'</td>
						</tr>';
					$i++;
				}
			echo '</tbody>
			</table>';
			}
		?>
      
      
      -->

	  
	  <div class="doimatkhau">
		<input type="hidden" name="data[press]" value="<?php echo $press; ?>" id="temp" />
       <div id="hienthi_mk" class="panel panel-success" >
          <div class="panel-heading" style="font-size: 11pt; ">
              Đổi mật khẩu
          </div>
          <form action="" method="post">
              <div class="form-group">
                  <label>Tên đăng nhập</label>
                  <input type="text"  name="data[username]" class="form-control" value="<?php echo $username; ?>" disabled/>
              </div>
              
              <div class="form-group">
                  <label>Mật khẩu (*)</label>
                  <input id="mk" type="password" name="data[password]" class="form-control"  placeholder="Nhập mật khẩu">
                  <?php echo form_error('password'); echo $mk; ?>
              </div>

              <div class="form-group">
                  <label>Mật khẩu mới (*)</label>
                  <input id="mk_moi" type="password"  name="data[newpassword]" class="form-control"  placeholder="Nhập mật khẩu mới">			  <?php echo form_error('newpassword'); ?>
              </div>
              
              <div class="form-group">
                  <label>Xác nhận mật khẩu (*)</label>
                  <input id="re_mk" type="password"  name="data[confirmpassword]" class="form-control"  placeholder="Nhập lại mật khẩu mới">
                  <?php echo form_error('confirmpassword'); ?>
              </div>
              <br />
              <input type="hidden" name="data[press]" value="<?php echo $press; ?>" id="temp" />
<hr/>         <div class="box-footer" style="text-align:center; height: 35px;">
              <input id="luulai" name="luulai_form" type="submit" class="btn btn-primary btn-sm" value="Lưu lại"/><span style="margin-left: 100px"></span>
               <input id="huybo" name="huybo" type="button" class="btn btn-primary btn-sm" value="Hủy bỏ" />
           </div>
        </form>                     
			</div>
          
       </div> 