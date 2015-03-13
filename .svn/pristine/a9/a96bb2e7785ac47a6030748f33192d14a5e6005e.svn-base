<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mthongbao extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	public function load_thongbaonhan($user){
		if (empty($user))
			return null;
		
		$query['tbsv'] = $this->db->query('select * 
										  from chitietthongbaosv, thongbao, sinhvien
										  where chitietthongbaosv.NGUOINHAN = "'.$user.'" and
													chitietthongbaosv.MA_TB = thongbao.MA_TB and
													chitietthongbaosv.MSSV = sinhvien.MSSV
													')->result_array();
		$query['count_tb'] = $this->db->query('select * 
										  from chitietthongbaosv, thongbao, sinhvien
										  where chitietthongbaosv.NGUOINHAN = "'.$user.'" and
													chitietthongbaosv.MA_TRANGTHAI = "TB_CHUAXEM" and
													chitietthongbaosv.MA_TB = thongbao.MA_TB and
													chitietthongbaosv.MSSV = sinhvien.MSSV 
													
													')->num_rows();
		$query['tbgv'] = $this->db->query('select * 
										  from chitietthongbaogv, thongbao, giangvien
										  where chitietthongbaogv.NGUOINHAN = "'.$user.'" and
												chitietthongbaogv.MA_TB = thongbao.MA_TB and
												chitietthongbaogv.MSCB = giangvien.MSCB 
												')->result_array();
		$query['count_tb'] += $this->db->query('select * 
										  from chitietthongbaogv, thongbao, giangvien
										  where chitietthongbaogv.NGUOINHAN = "'.$user.'" and
												chitietthongbaogv.MA_TRANGTHAI = "TB_CHUAXEM" and
												chitietthongbaogv.MA_TB = thongbao.MA_TB and
												chitietthongbaogv.MSCB = giangvien.MSCB
												
												')->num_rows();
		return $query;
	}
	
	
	
	public function kttt_user($user){
		$this->db->select('USERNAME');
		$this->db->where('USERNAME' , $user);
		$count =  $this->db->get('nguoidung')->num_rows();
		return (0 != $count);
			
	}
	
	public function tao_thongbao($_post,$user, $usertype) {
		
		$thongbao['TIEUDE'] = trim($_post['TIEUDE']);
		$thongbao['NOIDUNG'] = trim($_post['NOIDUNG']);
		$this->db->insert('thongbao', $thongbao);
		
		$chitietthongbao['MA_TB'] = $this->db->insert_id();
		$chitietthongbao['NGAYTB'] = date('Y-m-d H:i:s');
		$chitietthongbao['MA_TRANGTHAI'] = 'TB_CHUAXEM';
		if (3 == $usertype){
			$chitietthongbao['MSSV'] = $user;
			$table = 'chitietthongbaosv';
		}
		else {
			$chitietthongbao['MSCB'] = $user;
			$table = 'chitietthongbaogv';
		}
		
		$array_user = explode(',', $_post['NGUOINHAN']);
		foreach ($array_user as $NGUOINHAN){
				$NGUOINHAN = trim($NGUOINHAN);
				$chitietthongbao['NGUOINHAN'] = $NGUOINHAN;	
				$this->db->insert($table, $chitietthongbao);
		}
		
	}
	
	public function load_thongbaogui($user, $usertype){
		$string = '';
		if (3 == $usertype) {
			$table = 'chitietthongbaosv';
			$string = 'a.MSSV = "' . $user. '"';
		}
		if (2 == $usertype) {
			$table = 'chitietthongbaogv';
			$string = 'a.MSCB = "' . $user. '"';
			
		}
		$query = $this->db->query('select distinct * 
						  from '.$table.' as a, thongbao
						  where a.MA_TB = thongbao.MA_TB and
						  '.$string.' 						
						  ')->result_array();
						  
		foreach ($query as $i => $row){
			$HOTEN = $this->db->query('select HOTEN 
							  from giangvien
							  where MSCB = "'.$row['NGUOINHAN'].'"')->result_array();
			if (!empty($HOTEN[0]['HOTEN']))
				$query[$i]['NGUOINHAN'] = $HOTEN[0]['HOTEN'];
		}
		foreach ($query as $i => $row){
			$HOTEN = $this->db->query('select HOTEN 
							  from sinhvien
							  where MSSV = "'.$row['NGUOINHAN'].'"')->result_array();
			if (!empty($HOTEN[0]['HOTEN']))
				$query[$i]['NGUOINHAN'] = $HOTEN[0]['HOTEN'];
		}
		return $query;
	}
	
	public function daxem_thongbao($MA_TB){
		$array = array('MA_TRANGTHAI' => 'TB_DAXEM');
		$this->db->update('chitietthongbaosv', $array, array('MA_TB' => $MA_TB));
		$this->db->update('chitietthongbaogv', $array, array('MA_TB' => $MA_TB));
	}
}