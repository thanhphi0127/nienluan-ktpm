
<header id='sinhvien_top'>
	<div id='bar'>
		
		<div id='cssmenu'>

			<ul>
				<li><a href="<?php echo CIT_BASE_URL; ?>sinhvien/index/index.php">Trang chủ</a></li>
                 <li class='last'><a href='<?php echo CIT_BASE_URL; ?>diendan'><span>Diễn đàn</span></a></li>
               <!-- <li class='last thongtincanhan' ><a href='<?php echo CIT_BASE_URL; ?>sinhvien/ttcanhan'><span>Thông tin cá nhân</span></a></li> -->
			   <li class='has-sub quanlycongviec'><a href='<?php echo CIT_BASE_URL; ?>sinhvien/quanlycongviec'><span>Hoạt động nhóm</span></a>
				  <ul>
						 <li class='last'><a><span class='manipulation btnAddtask'>Tạo công việc</span></a>
						 </li>
						 <li class='last'><a href='<?php echo CIT_BASE_URL; ?>sinhvien/quanlycongviec'><span>Xem công việc</span></a>
						 </li>
						 <li class='last'><a><span class='manipulation btnAddreport'>Tạo báo cáo</span></a>
						 </li>
						 <li class='last'><a  href='<?php echo CIT_BASE_URL; ?>sinhvien/quanlycongviec/1'>Xem báo cáo</a>
						 </li>
					</ul>
				</li>
				<li class='has-sub quanlynhom'><a href='<?php echo CIT_BASE_URL; ?>sinhvien/quanlynhom'><span>Quản lý nhóm</span></a>
				  <ul>
						 <li class='last'><a><span  class='manipulation btnRegister'>Đăng ký nhóm</span></a>
						 </li>
						 <li class='last'><a href='<?php echo CIT_BASE_URL; ?>sinhvien/quanlynhom'><span>Nhóm đã tham gia </span></a>
						 </li>
					</ul>
				</li>
				<li class='last download'><a href='<?php echo CIT_BASE_URL; ?>sinhvien/download'><span>Download</span></a>
				 </li>
				 <li class='last' style='float:right;'><a ><span id='menu_thongbao'><img src='public/img/iconthongbao.png'/>Thông báo <?php echo ' ('.$count_tb. ')' ;?></span></a>
				 </li>
			</ul>
		</div>	

			
	</div>
	<div id='frame_thongbao'>
		<img class='closeall' src='public/img/iconclose.png' title='Đóng thông báo'/>

		<div class='dsthongbao'>
			<iframe id='frame_notification' class='arrow_box' src="<?php echo CIT_BASE_URL;?>thongbao/dsthongbao" scrolling="auto"></iframe>
		</div>
		
		<div class='form_thongbao'>	
		</div>
	</div>
				
		
	
</header>