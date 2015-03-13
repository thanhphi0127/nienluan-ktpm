<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Madmin extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	
	//---------------------------------------------------------------------------
	// Name          	: KiemTraMatKhau($mssv, $matkhau)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function KiemTraMatKhau($ms, $matkhau) {
		  $count = $this->db->where(array('USERNAME' => $ms, 'PASSWORD' => MD5($matkhau)))->from('nguoidung')->count_all_results();
		  return (0 == $count) ? FALSE : TRUE;
	}	
	
	//---------------------------------------------------------------------------
	// Name          	: DoiMatKhau($mssv, $matkhau)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function DoiMatKhau($ms, $matkhau) {
		  $this->db->set('PASSWORD', MD5($matkhau));
		  $this->db->where('USERNAME', $ms);
		  $result = $this->db->update('nguoidung');
		  return $result;
	}
	
	
	function LayKhoaHoc(){

	}
	
	function lay_tatca_monhoc($magv){
	
		$query = $this->db->query('SELECT TEN_MH, monhoc.MA_MH
									FROM monhoc
								');
		
		return $query->result_array();
	}
	
	function tao_maunhom($data){
		$this->db->insert('maunhom',$data);
	}
	
	function sua_maunhom($data){
		$this->db->where('MSCB',$data['MSCB']);
		$this->db->where('MA_MH',$data['MA_MH']);
		$this->db->update('maunhom',$data);
		
	}
	function delete_maunhom($data){
		$this->db->delete('maunhom', array('MSCB' => $data['MSCB'], 'MA_MH' => $data['MA_MH'])); 

	}
	
	function kttontai_maunhom($ma_mh, $mscb) {
		$count = $this->db->from('maunhom')->where('MA_MH',$ma_mh)->where('MSCB',$mscb)->get()->num_rows();

		return $count >= 1 ? TRUE : FALSE;
	}
	
	function XoaNguoiDung($username) {
		$this->db->where('username', $username);
		$this->db->delete('nguoidung');
	}
	
}