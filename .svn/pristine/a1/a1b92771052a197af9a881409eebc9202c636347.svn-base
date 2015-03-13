<?php
	require 'php-excel.class.php';
	$this->load->helper('date');
	$df = "%d-%m-%Y";
	if ($ma_mh == 'all' || $ma_mh == '') $print_mon = 'Tất cả';
	else $print_mon = $ma_mh;
	
	$dd = array(array('Ngày in danh sách:', mdate($df),'','Mã môn học',$print_mon));
	$dd[]=array('Tên môn học:',$ten_mh,'','', '', '');
	$dd[]=array('Học kỳ:',$hk, '', 'Năm học:', $nh);
	$dd[]=array('MSCB:', $username, '', 'Tên cán bộ', $hoten);
	$dd[]=array('','','','');
	$dd[]=array('','','','');
	$dd[]=array('','','','');
	
	$d = array(array('Số TT','MSSV','Họ tên', 'Giới tính', 'STT nhóm', 'Đề tài', 'Điểm', 'Ghi chú')); 
	$i = 0;
	foreach ($ds as $t => $ds_nhom) {
		  $i++;
		  $d[] = array ($i, $ds_nhom["MSSV"], $ds_nhom["HOTEN"],$ds_nhom["GIOITINH"],$ds_nhom["STT_NHOM"]); 
	}
	
	$xls = new Excel_XML('UTF-8', false, 'Sheet 1');
	$xls->addArray($dd);
	$xls->addArray($d);
	$xls->generateXML('DANH SACH SINH VIÊN');
?>