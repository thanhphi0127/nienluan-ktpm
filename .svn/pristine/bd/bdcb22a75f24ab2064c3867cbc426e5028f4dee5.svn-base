

<div class="khung">
	<?php
		function tim_so_ngay($date1, $date2){ 
		$songay = 0;
		  if ($date1<$date2){ 
			$dates_range[]=$date1; 
			$date1=strtotime($date1); 
			$date2=strtotime($date2); 
			$songay=0; 
			while ($date1!=$date2){ 
			  $date1=mktime(0, 0, 0, date("m", $date1), date("d", $date1)+1, date("Y", $date1)); 
			  $dates_range[]=date('Y-m-d', $date1); 
			  $songay++; 
			} 
		  } 
		  return $songay; 
		}
	?>
	<div class="bieudo">
        <form action="" method="post">
            <p>Biểu đồ tiến độ công việc nhóm</p>
    		<div>
            <label id="chonmon">Chọn môn học</label>
            <?php 
				//Hien thi combobox chon mon hoc giang vien dang phu trach
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
            <input style="margin-left: 5px" type="submit" name="btn_thongke" title="Xem biểu đồ"  class="btn btn-primary" value="Xem biểu đồ" />
            </div>
        </form>
    </div>
    
   
    <div class="noidung">
      <?php

	
	
	   if (isset($_POST['btn_thongke'])) {
		   
	   echo "<form id='link_form' action='' method='post'>";
	   echo "<input type='hidden' value='' id='hidden_cv' name='data[hidden_macv]' />";
	   echo "<input type='hidden' value='' id='hidden_nhom' name='data[hidden_sttnhom]' />";
	   echo "<input type='hidden' value='$sl_nhom' id='hidden_sl' name='data[hidden_slnhom]'  />";
	   echo "<input type='hidden' value='$sl_nhom' id='hidden_sl_x' name='data[hidden_slnhom_x]'  />";

	   if ($sl_nhom == 0) { echo "<div class='cv'>Không có công việc trong nhóm</div>"; }
	   //else echo "<div class='tongsonhom'>TỔNG SỐ NHÓM: $sl_nhom NHÓM</div>";
	   
	   for ($i = 1 ; $i <= $sl_nhom; $i++) {
		   echo "<br>";


						$j = 0;
						if(!empty($BieuDoCongViec[$i])){
						$j = 1;
						
						echo '<hr/>';
						echo '<h4>Biểu đồ công việc nhóm '.$i.'</h4>';
						$dungtiendo = 0;
						$tretiendo = 0;
						$somtiendo = 0;
						$title = "";
						
            			$width_col = 0;
						echo '<ul class="verticalBarGraph">';
						foreach($BieuDoCongViec[$i] as $row) {
							$all_time = tim_so_ngay($row->NGAYBD, $row->NGAYKT);
							if ($all_time == 0)
								$all_time = 1;
							$current_time = tim_so_ngay($row->NGAYBD, date('Y-m-d'));
							$phantram = ($current_time / $all_time)*100;
							if ($phantram > 100) $phantram = 100;
							
							if ($row->HOANTHANH > $phantram) {
								 $title = "Trước tiến độ";
								 $somtiendo++;
							}
							if ($row->HOANTHANH == $phantram) {
								$dungtiendo++;
								$title = "Đúng tiến độ";
							}
							if ($row->HOANTHANH < $phantram) {
								$tretiendo++;
								$title = "Trễ tiến độ";
							}
							
							echo '	<li class="set1" style="height: '.($phantram*2).'px; max-height: 200px; width: 30px; left:'.($width_col + 33).'px;" title="'.$title.'">'.$phantram.'</li>
								<li class="set2" style="height: '.($row->HOANTHANH*2).'px;  width: 30px; left: '.$width_col.'px" title="'.$title.'">'.$row->HOANTHANH.'</li>';

							$j++;
							$width_col += 80;
						} 
						echo '</ul>';
						
						$width_col = 0;						
						echo '<ul class="verticalBarGraph barname"> ';
						foreach($BieuDoCongViec[$i] as $row) { 				
							echo '<li  style="height: 30px; left: '.$width_col.'px;">'.$row->TEN_CV.'</li>';
							$width_col += 80;
						}
						echo '</ul> ';
						

						
					} else {} 
					
					if ($j > 0) {
						echo '<table border="0" class="table_congviec">
							  	<tr><td>Công việc đúng tiến độ</td><td>: '.$dungtiendo.' CV</td><td><input type="button" value="Xem chi tiết" title="Nhấp để xem chi tiết"/></td></tr>
							  	<tr><td>Công việc trễ tiến độ</td><td>: '.$tretiendo.' CV</td><td><input type="button" value="Xem chi tiết" title="Nhấp để xem chi tiết"/></td></tr>
							  	<tr><td>Công việc sớm tiến độ</td><td>: '.$somtiendo.' CV</td><td><input type="button" value="Xem chi tiết" title="Nhấp để xem chi tiết"/></td></tr>
								<tr><td><b>Tổng số công việc</b></td><td><b>: '.($j-1).' CV</b></td></tr>
							  </table>
						';
						
						echo '<div class="note">
								<div class="divThoigian">Thời gian</div>
								<div class="divHoanthanh">Mức độ hoàn thành</div>
							</div>
						';
					}
				}
				echo "</form>";	
   		
			}//if ngoai cung
			?> 
    <br />
     <br />
  	</div>

</div>

<!--

	  <script>
      (function ($) {
          "use strict";
          var mainApp = {
              main_fun: function () {
                  $('#main-menu').metisMenu();
                  $(window).bind("load resize", function () {
                      if ($(this).width() < 768) {
                          $('div.sidebar-collapse').addClass('collapse')
                      } else {
                          $('div.sidebar-collapse').removeClass('collapse')
                      }
                  });

				  	for ($i = 1 ; $i <= $sl_nhom; $i++) {      
                     echo "Morris.Bar(";

					  echo "{
						  element: 'morris-bar-chart".$i."',
						  data: [";
							  foreach($BieuDoCongViec[$i] as $row) {
								  $all_time = tim_so_ngay($row->NGAYBD, $row->NGAYKT);
								  $current_time = tim_so_ngay($row->NGAYBD, date('Y-m-d'));
								  $phantram = ($current_time / $all_time)*100;
								  if ($phantram > 100) $phantram = 90;
								  
								  echo "{ y: '".$row->TEN_CV."',";
								  echo "  a: ".$row->HOANTHANH.",";
								  echo "  b: ".$phantram."},";
							  } 
					  echo "],
						  xkey: 'y',
						  ykeys: ['a', 'b'],
						  labels: ['Mức độ hoàn thành ', 'Thời gian '],
						  hideHover: 'auto',
						  resize: true
					  }); ";
					}
				  ?>
				  
              },
              initialization: function () {
                  mainApp.main_fun();
              }
          }
          $(document).ready(function () {
              mainApp.main_fun();
          });
      }(jQuery));
      </script>
     
     

		for ($i = 1 ; $i <= $sl_nhom; $i++) {   
		echo '
		<div class="bieudo_nhom">
		  <div class="panel-heading">
			  Biểu đồ công việc nhóm '.$i.'
		  </div>
          <div class="panel-body">
              <div id="morris-bar-chart'.$i.'"></div>
          </div>
		</div>';
		}
	?>
 
					echo "<table id='example1' class='table-bordered table-hover table_nguoidung'>
						<thead>
							<tr>
								<td>Mã CV</td>
								<td>Tên công việc</td>
								<td>Mô tả</td>
							</tr>
						</thead>
					<tbody>";
					
					$k = 1;
					foreach($BieuDoCongViec[$i] as $row) {
						echo '<tr>
							<td>'.$row->MA_CV.'</td>
							<td>'.$row->TEN_CV.'</td>
							<td>'.$row->MOTA.'</td>
						</tr>';
						$k++;
						
					}
					echo "<input name='data[hidden_ma_mh]'  type='hidden' value='".$ma_mh."' />";
					echo "</tbody>
					</table>";
 
  
   -->
