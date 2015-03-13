
<div class="modal-dialog" style="margin-left:3px;top:-50px;width:870px;margin: 0px;">
      <div class="modal-content">
         
          <div class="modal-body" style="margin: 0px padding: 3px;">  
                <?php 
                    //Hien thi combobox chon mon hoc giang vien dang phu trachs
                    if(isset($XemChiTietCongViec) && !empty($XemChiTietCongViec)){
					$i = 1;
					echo "<table class='table table-bordered table-hover'>";
					
                        foreach ($XemChiTietCongViec as $row) {
							if ($row->HOANTHANH < 25) $color = "danger";
							if ($row->HOANTHANH < 50 && $row->HOANTHANH >= 25) $color = "warning";
							if ($row->HOANTHANH < 90 && $row->HOANTHANH >= 50) $color = "success";
							if ($row->HOANTHANH <= 100 && $row->HOANTHANH >= 90)$color = "infor";
							
						echo "<tr>
							  <td style='width: 7%'>$i</td>
							  <td style='width: 20%'>$row->HOTEN</td>
							  <td style='width: 20%'>$row->THOIGIANSUA</td>
							  
							  <td style='width: 20%'><div>     
								<h5>
									<small class='pull-right'><b>$row->HOANTHANH %</b></small>
								</h5>
								<div class='progress progress-striped active'>
									<div class='progress-bar progress-bar-$color' style='width: $row->HOANTHANH%' role='progressbar' aria-valuenow='$row->HOANTHANH' aria-valuemin='0' aria-valuemax='100'>
									</div>
								</div></div>
							   </td>
							
							  <td style='width: 33%'>$row->GHICHU</td>
						  </tr>";
						  $i++;
                        }
					echo "</table>"; 
                    } 
                ?>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
 