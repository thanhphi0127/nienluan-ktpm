<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sinhvien extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}
	
	//---------------------------------------------------------------------------
	// Name          	: DanhsanhSV()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function DanhsanhSV()
	{
		$query = $this -> db -> query("SELECT a.mssv, a.hoten, a.gioitinh, a.ngaysinh, a.diachi, 
											  a.sdt, a.mail,  b.ten_nganh, a.khoahoc
										FROM sinhvien as a, nganh as b
										WHERE a.ma_nganh = b.ma_nganh
										ORDER BY a.mssv ASC");
		return $query -> result();
	}
	
		
	//---------------------------------------------------------------------------
	// Name          	: mAddStudent()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function mAddStudent($add){
		$result = $this->db->insert("sinhvien", $add);
		if ($result) {
			return TRUE;
		}
		else return FALSE;
	}
	
	//---------------------------------------------------------------------------
	// Name          	: check_mail($email)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function check_mail($email) {
		  $count = $this->db->where(array('mail' => $email))->from('sinhvien')->count_all_results();
		  return (0 == $count) ? FALSE : TRUE;
	}
	
	//---------------------------------------------------------------------------
	// Name          	: check_mssv($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function check_mssv($mssv) {
		  $count = $this->db->where(array('mssv' => $mssv))->from('sinhvien')->count_all_results();
		  return (0 == $count) ? FALSE : TRUE;
	}	
	
	
	
	
	
	function laycongviec($data) {
			if ('ngaybddesc' == $data['orderby'])
				$query = $this->db->from('congviec')->order_by('ngaybd desc')->get()->result_array();
			else if ('ngaybdasc' == $data['orderby'])
				$query = $this->db->from('congviec')->order_by('ngaybd asc')->get()->result_array();
			else 
				$query = $this->db->from('congviec')->order_by($data['orderby'].' asc')->get()->result_array();
				
			return $query;
	}
	
	
}