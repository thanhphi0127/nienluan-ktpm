<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title></title>
			<link rel="stylesheet" href="<?php echo base_url();?>template/style/member.css">
			<style type="text/css">
			.display{
				display: none;

			}
			</style>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
			<script type="text/javascript">
			jQuery(document).ready(function($) {
						$('#result_tk1 tr:even').css({
							background: 'white'
						});
					});
			
				function kt(){
					document.getElementById("dv1").style.display = "block";
					document.getElementById("tt").style.display = "block";
				}
				function dv1(){
					if(document.getElementById("dv1").style.display == "none")
						document.getElementById("dv1").style.display = "block";
					else
						document.getElementById("dv1").style.display = "none";
				}
				function tt(){
					if(document.getElementById("tt").style.display == "none")
						document.getElementById("tt").style.display = "block";
					else
						document.getElementById("tt").style.display = "none";
				}
				jQuery(document).ready(function($) {
					$('#menu ul li a').removeClass('selected');
					$('#menu ul li:nth-child(4) a').addClass('selected').removeAttr('href').css({
						cursor: 'pointer'
					});
						/* Act on the event */
						$('#left-menu ul li a').removeClass('left_select');
						$('#left-menu ul li:nth-child(2) a').addClass('left_select');
				
				});
			var code = <?php echo $this->session->userdata('logged_in')['code']; ?>;
                  	switch(code){
                      case 3:
                      jQuery(document).ready(function($) {
                      $('#menu ul li:first-child').remove();
                      $('#menu ul li:nth-child(4)').remove();
                      $('#menu ul li:last-child').remove();
                    });
                    break;
                  }
                   jQuery(document).ready(function($) {
                  	$('#dv1 ul li:nth-child(2) a').hide();
                  	$('#dv1 ul li:nth-child(3) a').hide();
                  	$('#dv1 ul li:nth-child(4) a').hide();
                  });
			</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
	<body onLoad="kt()">
	<?php $this->load->view('layout/header.php'); ?>
		<article>
			<div id="left-menu">
                <!--"<?php echo base_url();?>index.php/donvi"*-->
				<ul>
					<li><a href="#" onClick="dv1()">Đơn Vị</a>
                    	<div id="dv1" style="margin-left:20px">
                            <ul>	
                                 <?php
								 	$url = base_url();
								 	echo '<li><a href="'.$url.'baocao/tatca/">Tất Cả Các Đơn Vị</a></li>';									
									foreach ($data_getdv as $k=>$r){							
										echo '<li class="child_li"><a href = "'.$url.'baocao/donvi/'.$r["MA_DV"].'">'.$r["TEN_DV"].'</a></li>';							
									}
								?>
                            </ul>
                        </div>
                    </li>						
					<li><a href="#" onClick="tt()">Tình Trạng</a>
						<div id="tt" style="margin-left:20px">
                        	<ul>
                                <?php
									$url = base_url();
									foreach ($data_gettt as $k=>$y){
										echo '<li><a href = "'.$url.'baocao/tctinhtrang/'.$y["MA_TT"].'">'.$y["TRANGTHAI"].'</a></li>';							
									}
								?>
							</ul>
                        </div>							
					</li>
				</ul>

			</div><!--End left-menu-->
			<div id="content">
				<div id="timkiem1">
					<legend>Báo cáo Tất Cả Các Máy Biến Áp</legend>
					<?php
						if ($title_tt==NULL)
							echo "<span>Tình Trạng: Tất Cả</span>";
						else
							foreach ($title_tt as  $v) {
								echo "<span>Tình Trạng:".$v["TRANGTHAI"]."</span>";
							}
					?>
					<div class="re">
				     <div id="menu_tk1">
				     	<ul>
				     		<li><p>STT</p></li>
				     		<li><p>Số No</p></li>
				     		<li><p>Tên MBA</p></li>
				     		<li style="width:170px; text-align:center;"><p>Tên Đơn Vị</p></li>
				     		<li style="width: 120px; text-align: center;" ><p>Tên HSX</p></li>
				     		<li><p>Mã Số Tài Sản</p></li>
				     		<li><p>Năm SX</p></li>
				     		<li><p>Năm Nhập về</p></li>
				     		<li><p >Loại Dầu</p></li>
				     		<li><p style="padding:5px;">Trong Lượng Dầu</p></li>
				     		<li><p style="padding:5px 8px;">Loại MBA</p></li>
				     		<li><p>Thông Số Đo</p></li>
				     		<li><p>Công Suất</p></li>
				     		<li><p>Điện Áp</p></li>
				     	</ul>
				     </div><!--End menu_tk1-->			
				     <div id="result_tk1">
						<table>
							<?php $i = 1; ?>
							<?php foreach ($bc_tatca as $result): ?>
								<tr>
								<td class="tk_stt"><?php echo $i++; ?></td>
								<td class="tk_sono"><?php echo $result['SONO'] ?></td>
								<td class="tk_ten"><?php echo $result['TEN_MBA'] ?></td>
								<td style="width: 170px;" class="tk_madv"><?php echo $result['TEN_DV'] ?></td>
								<td style="width:120px;" class="tk_mahsd"><?php echo $result['TEN_HSX'] ?></td>
								<td class="tk_msts"><?php echo $result['MSTS'] ?></td>
								<td class="tk_sono"><?php echo $result['NAM_SX'] ?></td>
								<td style="width: 140px; text-align:center;" ><?php echo $result['NAMNHAPVE'] ?></td>
								<td style="width: 95px; text-align:center;" ><?php echo $result['LOAIDAU'] ?></td>
								<td style="width: 135px; text-align:center;"><?php echo $result['TRONGLUONGDAU'] ?></td>
								<td class="tk_maloai"><?php echo $result['TENLOAI_MBA'] ?></td>
								<td class="tk_thongsodo"><?php echo $result['THONGSODO'] ?></td>
								<td class="tk_congsuat"><?php echo $result['CONGSUAT'] ?></td>
								<td class="tk_dienap"><?php echo $result['DIENAP'] ?></td>					
								</tr>
							<?php endforeach ?>	
								<tr>
									<td colspan="10">Tổng Cộng: <?php echo $i-1; ?> MBA</td>
								</tr>							
						</table>
						<div id="xuat_excel">
							<?php
								echo '<a href="'.$url.'baocao/xuatexcel_tatca">Xuất file excel</a>'
							?>
						</div>
					</div><!--End result_tk1-->	
					</div>				
				</div><!--End timkiem2-->
			</div><!--End content-->
			<div class="clear">

			</div><!--End clear-->
		</article>
		<?php $this->load->view('layout/footer'); ?>
	</body>
</html>