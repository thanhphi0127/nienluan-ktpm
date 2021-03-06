<script>
	$(this).ready(function() {
		$('#chitiet').hide();
		
        $('.xemchitiet').click(function(){
			var macv = $(this).parent('td').parent('tr').find($('.get_macv')).html();
			var nhom = $(this).parent('td').parent('tr').find($('input.get_nhom')).attr('value');
			var sl = $('#hidden_sl').attr('value');
			$('#hidden_cv').attr('value', macv);
			$('#hidden_nhom').attr('value', nhom);
			$('#hidden_chitiet').attr('value', 1);
			$('#hidden_sl_x').attr('value', sl);
		});
	
        $('.guithongbao').click(function(){
			var macv = $(this).parent('td').parent('tr').find($('.get_macv')).html();
			var nhom = $(this).parent('td').parent('tr').find($('input.get_nhom')).attr('value');
			var sl = $('#sl_nhom_x').attr('value');
			$('#hidden_cv').attr('value', macv);
			$('#hidden_nhom').attr('value', nhom);
			$('#hidden_thongbao').attr('value', 1);
		});
	
		
		$('.close').click(function () {
			$('#hienthichitiet').hide();
		});
		
		$('.huybo').click(function(){
			$('#guithongbao').hide();
		});
		
		var ct = $('#hidden_chitiet').attr('value');
		if (ct == 1){
			var sl = $('#hidden_sl').attr('value');
			$('#hidden_sl_x').attr('value', sl);
			$('#hienthichitiet').show();
		}
		
		var tb = $('#hidden_thongbao').attr('value');
		//alert(tb);
		if (tb == 1){
			$('#guithongbao').show();
		}		
    });
</script>

<div id="hienthichitiet" tabindex="-1" aria-hidden="true" style="position:absolute;top: 33px; display:none">
  <div class="modal-dialog" style="margin-left:-130px;width:870px">
      <div class="modal-content">
          <div class="modal-header" style="background-color:#127DCD">
              <button id="btn-close" type="button" class="close huybo" title="Nhấn để thoát" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Mức độ hoàn thành chi tiết</h4>
          </div>
           
          <div class="modal-body" style="margin: 0px padding: 3px;">  
                <?php 
                    //Hien thi combobox chon mon hoc giang vien dang phu trachs
                    if(isset($XemChiTietCongViec) && !empty($XemChiTietCongViec)){
					$i = 1;
					echo "<table class='table table-bordered table-hover'>
					<tr id='table_chitiet'>
						<th style='width: 5%'>Thứ tự</th>
						<th style='width: 20%'>Người cập nhật</th>
						<th style='width: 20%'>Thời gian</th>
						<th style='width: 15%'>Mức độ hoàn thành</th>
						<th style='width: 40%'>Ghi chú</th>
					</tr>";
                        foreach ($XemChiTietCongViec as $row) {
							if ($row->HOANTHANH < 25) $color = "danger";
							if ($row->HOANTHANH < 50 && $row->HOANTHANH >= 25) $color = "warning";
							if ($row->HOANTHANH < 90 && $row->HOANTHANH >= 50) $color = "success";
							if ($row->HOANTHANH <= 100 && $row->HOANTHANH >= 90)$color = "infor";
							
						echo "<tr>
							  <td>$i</td>
							  <td>$row->HOTEN</td>
							  <td>$row->THOIGIANSUA</td>
							  
							  <td><div>     
								<h5>
									<small class='pull-right'><b>$row->HOANTHANH %</b></small>
								</h5>
								<div class='progress progress-striped active'>
									<div class='progress-bar progress-bar-$color' style='width: $row->HOANTHANH%' role='progressbar' aria-valuenow='$row->HOANTHANH' aria-valuemin='0' aria-valuemax='100'>
									</div>
								</div></div>
							   </td>
							
							  <td>$row->GHICHU</td>
						  </tr>";
						  $i++;
                        }
					echo "</table>"; 
                    } 
                ?>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div id="guithongbao" tabindex="-1" aria-hidden="true" style="position:absolute; display:none">
  <div class="modal-dialog" style="width:440px">
 	 <form action="" method="post">
      <div class="modal-content">
          <div class="modal-header" style="background-color:#999;">
              <button id="btn-close" type="button" class="close huybo" title="Nhấn để thoát" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Gửi thông báo cho nhóm <?php ?></h4>
          </div>
           
          <div class="modal-body" style="margin: 0px; padding: 3px;">  
          <label>Chọn thành viên cần gửi trong nhóm</label>
             <?php 
				//Hien thi combobox chon mon hoc giang vien dang phu trachs
				if(isset($LayThanhVien) && !empty($LayThanhVien)){
					$tatca = "";
					echo "<select id='thanhvien' title='Gửi Ctrl và chọn' class='form-control' name='data[thanhvien]'>";
					foreach ($LayThanhVien as $row) {
						echo "<option value='$row->mssv'>$row->hoten</option>";
						$tatca = $tatca."$row->mssv-";
					}
					echo "<option value='".$tatca."'>Tất cả</option>";
					echo " </select>";
					
				} 
			?>
            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="data[trangthai]">
                    <option>Chưa xem</option>
                    <option>Đã xem</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control" rows="3" name="data[noidung]" placeholder="Nhập nội dung"></textarea>
            </div>
            
            <input type="submit" name="btn_luulai" class="btn btn-primary" value="Lưu lại" /><span style="margin-left: 100px"></span>
            <button type="submit" class="btn btn-primary huybo"><i class="fa fa-pencil"></i> Hủy bỏ</button>
            
          </div>
      </div><!-- /.modal-content -->
      </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<input id='hidden_chitiet'  type='hidden' value='<?php echo $flag_chitiet;?>' />
<input id='hidden_thongbao'  type='hidden' value='<?php echo $flag_thongbao; ?>' />

<div class="khung">
	<header class='quanly' style='margin:0px;'>
		
		Thống kê tiến độ công việc nhóm
		
	</header>
	<div class="thongke">
        <form action="" method="post">
            
            <div>
            <label id="chonmon"label>Chọn môn học</label>
            <?php 
				//Hien thi combobox chon mon hoc giang vien dang phu trachs
				if(isset($LayMonHoc_GiangVien) && !empty($LayMonHoc_GiangVien)){
					 
					echo "<select id='sl_mh' class='form-control' name='ma_mh'>";
					foreach ($LayMonHoc_GiangVien as $row) {
						echo "<option value='".$row['MA_MH']."' ";
							 if($row['MA_MH'] == $ma_mh) echo 'selected';
						echo ">".$row['MA_MH']." - ".$row['TEN_MH']."</option>";
					}
					echo " </select>";
					
				} 
			?>
            <input style="float:none" type="submit" name="btn_thongke" title="Chọn thống kê theo môn"  class="btn btn-primary" value="Thống kê" />
            </div>
        </form>
    </div>
    <div class='filter' style='margin-left: 27px;font-weight: bold;'>	STT nhóm: 
		<select id='sel_sl_nhom' style='width:150px; padding:4px 8px;margin-left: 35px;'>
			<option  value='0'>Tất cả</option>
			<?php $i = 0; $temp_sl_nhom = $sl_nhom ;
				while($temp_sl_nhom > 0){ $i ++;$temp_sl_nhom--; ?>
					<option  value='<?php echo $i;?>'><?php echo $i;?></option>
			<?php	}
			?>
		</select>
	</div>







     <div class="row">
       <?php
	   if (isset($_POST['btn_thongke']) || (1 == $flag_chitiet) || (1 == $flag_thongbao)) {
		   
	   echo "<form id='link_form' action='' method='post'>";
	   echo "<input type='hidden' value='' id='hidden_cv' name='data[hidden_macv]' />";
	   echo "<input type='hidden' value='' id='hidden_nhom' name='data[hidden_sttnhom]' />";
	   echo "<input type='hidden' value='$sl_nhom' id='hidden_sl' name='data[hidden_slnhom]'  />";
	   echo "<input type='hidden' value='$sl_nhom' id='hidden_sl_x' name='data[hidden_slnhom_x]'  />";

	   if ($sl_nhom == 0) { echo "<div class='cv'>Không có công việc trong nhóm</div>"; }
	   else echo "<div class='tongsonhom'>TỔNG SỐ NHÓM: $sl_nhom NHÓM</div>";
	   
	   for ($i = 1 ; $i <= $sl_nhom; $i++) {
		   echo "<br>";
					echo "<table class='table-bordered table-hover table_nguoidung example1 table_tiendo' >
						   <thead>
                           	   <tr>
							   		<th colspan='8' class='header_thongke'>Tiến độ công việc nhóm $i</th>
							   </tr>
							   <tr>
								   <th style=' width: 60px; '>STT nhóm</th>
								   <th style=' width: 40px'>Mã công viêc</th>
								   <th style=' width: 150px'>Tên công việc</th>
								   <th style=' width: 90px'>Người phụ trách</th>
								   <th style=' width: 160px'>Mô tả</th>
								   <th style=' width: 110px'>Mức độ hoàn thành</th>
								   <th style=' width: 60px'>Tính chất CV</th>
                                   <th style=' width: 60px'>Thao tác</th>
							   </tr>
						   </thead>
					<tbody>";

						$j = 0;
						if(!empty($ThongKeMoiNhom[$i])){
						$j = 1;
						
						foreach($ThongKeMoiNhom[$i] as $row) {
							if ($row->HOANTHANH < 25) $color = "danger";
							if ($row->HOANTHANH < 50 && $row->HOANTHANH >= 25) $color = "warning";
							if ($row->HOANTHANH < 90 && $row->HOANTHANH >= 50) $color = "success";
							if ($row->HOANTHANH <= 100 && $row->HOANTHANH >= 90)$color = "infor";
						
							echo "<tr>
								<input type='hidden' class='get_nhom' value='$row->STT_NHOM' />
								
								<td align='center' >$row->STT_NHOM</td>
								<td align='center' class ='get_macv'>$row->MA_CV</td>
								<td>$row->TEN_CV</td>
								<td align='center' title='Người được phân công công việc'>$row->NGUOIDUOCGIAO</td>
								<td title='Chi tiết cho công việc'>$row->MOTA</td>";
							echo "<td title='Mức độ hoàn thành hiện tại của công việc'><div>     
									<h5>
										<small class='pull-right' style='margin-left:5px;'> <b>$row->HOANTHANH %</b></small>
									</h5>
									<div class='progress progress-striped' >
										<div class='progress-bar progress-bar-$color' style='width: $row->HOANTHANH%' role='progressbar' aria-valuenow='$row->HOANTHANH' aria-valuemin='0' aria-valuemax='100'>
										</div>
									</div>
								</div></td>
								<td title='Biểu thị độ quan trọng của công việc'>$row->TEN_TINHCHAT</td>";
							echo "<td>
										<input type='submit' name='btn_xemchitiet' title='Nhấn để xem chi tiết' class='xemchitiet' value = 'Chi tiết'/>";
										//<input type='submit' name='btn_guithongbao' title='Nhấn để gửi thông báo'   class='guithongbao' value = 'Gửi TBáo'/>
							echo "	  </td>
								  
								  ";		
							echo "</tr>";
							$j++;
						} 
					} else  echo "<tr><td colspan='8'>Nhóm chưa cập nhật tiến độ công việc</td></tr>";
					echo "<input name='data[hidden_ma_mh]'  type='hidden' value='".$ma_mh."' />";
					echo "</tbody>
					</table>";
					if ($j > 0)
						echo "<div class='tongsocongviec'>Tổng số công việc nhóm $i là: ".($j-1)." công việc</div>";
				}
				echo "</form>";	
   		
			}//if ngoai cung
			?>

                </div>
             <!-- /. ROW  -->
    <br />                     
</div>
