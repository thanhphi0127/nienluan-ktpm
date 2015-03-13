<?php
	require 'php-excel.class.php';
	$this->load->helper('date');
	$df = "%d-%m-%Y";
	if ($ma_mh == 'all' || $ma_mh == '') $print_mon = 'Tất cả';
	else $print_mon = $ma_mh;
	
	$dd = array(array('Ngày in danh sách:', mdate($df),'','Danh sách môn:',$print_mon));
	$dd[]=array('Nhóm:','Tất cả','','');
	$dd[]=array('','','','');
	$dd[]=array('','','','');
	$dd[]=array('','','','');
	
	$d = array(array('Số TT','Tên môn học','Nhóm', 'Tên đề tài', 'Mô tả','Số lượng thành viên','Tên trưởng nhóm')); 
	$i = 0;
	foreach ($ds as $t => $ds_nhom) {
		  $i++;
		  $d[] = array ($i, $ds_nhom["TEN_MH"], $ds_nhom["STT_NHOM"],$ds_nhom["DETAI"],$ds_nhom["MOTA"],$ds_nhom["SLTV"], $ds_nhom["HOTEN"]); 
	}
	
	$xls = new Excel_XML('UTF-8', false, 'Sheet 1');
	$xls->addArray($dd);
	$xls->addArray($d);
	$xls->generateXML('DANH SACH NHOM MON HOC');
?>