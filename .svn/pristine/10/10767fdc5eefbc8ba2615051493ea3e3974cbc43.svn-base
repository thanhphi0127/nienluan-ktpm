<?php require_once 'php-excel.class.php';
	$this->load->helper('date');
	$df = "%d-%m-%Y";
	
	
	
	
		
			$d[]=array('','','','');
			$d[]=array('','','','');
			$xls = new Excel_XML('UTF-8', false, 'DANH SÁCH CÔNG VIỆC');
			$xls->addArray($d);
			$xls->addArray(array(array('','','Môn học', $query_dscongviec['monhoc']['TEN_MH']), array('','','Nhóm ',$query_dscongviec['dscongviec'][0]['STT_NHOM']),array('','','','','','','','Phiên bản:',mdate($df))));
			
			$xls->addArray($d);
			$xls->addArray(array(array('','Danh sách thành viên:')));
			$xls->addArray($d);
			$xls->addArray(array(array('STT','MSSV','Họ tên', 'SDT', 'Email', 'Chức vụ')));
			$i = 0;
			foreach ($query_dsthanhvien['thanhvien'] as $row) {
				$i++;
				if ($row['MSSV'] == $query_dsthanhvien['nhomtruong'])
					$chucvu = 'Nhóm trưởng';
				else $chucvu = 'Thành viên';
				$xls->addArray(array(array($i, $row['MSSV'], $row['HOTEN'], $row['SDT'], $row['MAIL'], $chucvu)));
			}
		
		
		
			$xls->addArray($d);
			$xls->addArray(array(array('','Danh sách công việc:')));
			$xls->addArray($d);
			$congviec_colum = array('STT','Tên công việc','Từ ngày', 'Đến ngày','Người được giao');
			
			foreach ($check_list as $item){
				if ('THOIGIANUL' == $item)
					array_push($congviec_colum, 'Số giờ');
				else if ('MOTA' == $item)
					array_push($congviec_colum, "Mô tả");
				else if ('TEN_MUCDO' == $item)
					array_push($congviec_colum, 'Mức độ');	
				else if ('TEN_TINHCHAT' == $item)
					array_push($congviec_colum, 'Tính chất');
			}
			
			$xls->addArray(array($congviec_colum));
			$i = 0;
			
			foreach ($query_dscongviec['dscongviec'] as $row) {
				$i++;
				
				$array_nguoiduocgiao = explode(',',$row['NGUOIDUOCGIAO']);
				
				$congviec_record = array($i, $row['TEN_CV'], $row['NGAYBD'], $row['NGAYKT'],$array_nguoiduocgiao[0]);
				
				foreach ($check_list as $item){
					if ('THOIGIANUL' == $item)
						array_push($congviec_record, $row['THOIGIANUL']);
					else if ('MOTA' == $item)
						array_push($congviec_record, $row['MOTA']);
					else if ('TEN_MUCDO' == $item)
						array_push($congviec_record, $row['TEN_MUCDO']);	
					else if ('TEN_TINHCHAT' == $item)
						array_push($congviec_record, $row['TEN_TINHCHAT']);
				}
				
				
				$xls->addArray(array($congviec_record));
				$j = 0;
				foreach ($array_nguoiduocgiao as $NGUOIDUOCGIAO){
					if ($j != 0)
						$xls->addArray(array(array('', '', '', '', $NGUOIDUOCGIAO, '', '', '', '')));
					$j ++;
				}
			}
		$xls->generateXML('TASK_LIST');
	
	 
		
	
	
?>	