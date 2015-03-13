<script>
$(document).ready(function(){
	$(this).hide();
	//////////////////////////////////////////////////////
	//Kiem tra du lieu: Neu khong hop he thi hien thi lai
	var t = $('#temp').attr('value');
	if (t != 1)
		$('div.doimatkhau').hide();
	else {
		$('div.doimatkhau').show();
	}
	//////////////////////////////////////////////////////
	
	
	$('#doimatkhau').click( function () {
		
		$('div.doimatkhau').show(500);
	});
	
	$('#luulai').click( function () {
		//$('#hienthi_mk').hide();	
	});
	
	$('#huybo').click( function () {
		$('div.doimatkhau').hide();
	});
});

 </script>


<div class="khung">
	<div class="mon">
    	<img src="<?php echo CIT_BASE_URL; ?>public/img/subject.png" alt="Danh sách môn học" />
    	<h4>Danh sách môn học phụ trách</h4>
        <?php 
			if(isset($LayMonHoc_GiangVien) && !empty($LayMonHoc_GiangVien)){
			$i = 1;
			echo '<table id="#example1" class="table-bordered table-hover table_nguoidung">
				<thead>
					  <tr>
						 <th style="font-size:10pt;">STT</th>
						 <th style="font-size:10pt;">Mã môn học</th>
						 <th style="font-size:10pt;">Tên môn học</th>
						 <th style="font-size:10pt;">Số tín chỉ</th>
					  </tr>
				</thead>
				<tbody>';
				foreach ($LayMonHoc_GiangVien as $row) {
					echo '<tr>
					        <td>'.$i.'</td>
							<td>'.$row['MA_MH'].'</td>
							<td>'.$row['TEN_MH'].'</td>
							<td>'.$row['SOTC'].'</td>
						</tr>';
					$i++;
				}
			echo '</tbody>
			</table>';
			echo "<p class='tong_mh'>Tổng số môn học: ".($i-1)." môn học</p>";
			}
		?>
    </div>
    
    <div class="lich">
    	<div class="ds thongtingiangvien" style="float:left">
      	<h4>THÔNG TIN CÁ NHÂN</h4>
          <table class="table_tt">
              <?php
                  session_start();
                  $user = new mgiangvien();
                  foreach ($thongtingiangvien as $row)
                  {       
                        echo "<tr><td>MSSV</td><td>$row->mscb</td><tr>";
                        echo "<tr><td>Họ tên</td><td>$row->hoten</td><tr>";
                        echo "<tr><td>Giới tính</td><td>$row->gioitinh</td><tr>";     				  
                        echo "<tr><td>Ngày sinh</td><td>$row->ngaysinh</td><tr>";
                        echo "<tr><td>Số điện thoại</td><td>$row->sdt</td><tr>";
                        echo "<tr><td>Email</td><td>$row->mail</td><tr>";
                        echo "<tr><td>Trình độ</td><td>$row->ten_td</td><tr>";
                        echo "<tr><td>Tên bộ môn</td><td>$row->ten_bm</td><tr>";
                        echo "<tr class='diachi'><td>Địa chỉ</td><td>$row->diachi</td><tr>";
                  }
              ?>
          </table>
      <br />
      <div style="float:right"><input id="doimatkhau" class="btn btn-success btn-sm" type="submit" value="Đổi mật khẩu" /></div>
	</div> <!-- COL-MD-6 -->
    </div>




</div>
 <div class="doimatkhau">
	              <input type="hidden" name="data[press]" value="<?php echo $press; ?>" id="temp" />
       <div id="hienthi_mk"class="panel panel-primary">
          <div class="panel-heading">
              Đổi mật khẩu
          </div>
          <form action="" method="post">
              <div class="form-group">
                  <label>Tên đăng nhập</label>
                  <input type="text" name="data[username]" class="form-control" value="<?php echo $username; ?>" disabled/>
              </div>
              
              <div class="form-group">
                  <label>Mật khẩu (*)</label>
                  <input type="password" name="data[password]" class="form-control"  placeholder="Nhập mật khẩu">
                  <?php echo form_error('password'); echo $mk; ?>
              </div>

              <div class="form-group">
                  <label>Mật khẩu mới (*)</label>
                  <input type="password" name="data[newpassword]" class="form-control"  placeholder="Nhập mật khẩu mới">			  <?php echo form_error('newpassword'); ?>
              </div>
              
              <div class="form-group">
                  <label>Xác nhận mật khẩu (*)</label>
                  <input type="password" name="data[confirmpassword]" class="form-control"  placeholder="Nhập lại mật khẩu mới">
                  <?php echo form_error('confirmpassword'); ?>
              </div>
              <br />
              <input type="hidden" name="data[press]" value="<?php echo $press; ?>" id="temp" />
<hr/>        <div class="box-footer" style="text-align:center; height: 30px;">
              <input id="luulai" name="luulai_form" type="submit" class="btn btn-primary" value="Lưu lại"/><span style="margin-left: 100px"></span>
               <button name="huybo" type="close" class="btn btn-primary"><i class="fa fa-pencil"></i> Hủy bỏ</button>
           </div>
        </form>                     
			</div>
          
       </div> 
