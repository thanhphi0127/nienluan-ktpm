<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msinhvien extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	//---------------------------------------------------------------------------
	// Name          	: DanhSachSinhVien()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function DanhSachSinhVien()
	{
		$query = $this -> db -> query("SELECT a.mssv, a.hoten, a.gioitinh, a.ngaysinh, a.diachi, 
											  a.sdt, a.mail,  b.ten_nganh, a.khoahoc
										FROM sinhvien as a, nganh as b
										WHERE a.ma_nganh = b.ma_nganh
										ORDER BY a.mssv ASC");
		return $query -> result();
		
	}

	//---------------------------------------------------------------------------
	// Name          	: hienthithongtin($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : 
	//---------------------------------------------------------------------------
	function ThongTinCaNhan($mssv){
		$this -> db -> select('mssv, hoten, gioitinh, sdt, diachi, mail, ngaysinh, ma_nganh, khoahoc');
		$this -> db -> where('mssv', $mssv);
		$query =$this -> db -> get('sinhvien');
		return $query -> result();
	}

	
	//---------------------------------------------------------------------------
	// Name          	: ThemSinhVien()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function ThemSinhVien($add){
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
	
	
	
	
	//---------------------------------------------------------------------------
	// Name          	: LayNganh()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function LayNganh(){
		$query = $this->db->query('SELECT ma_nganh, ten_nganh FROM nganh');
		return $query->result_array();
	}
	
	
	//---------------------------------------------------------------------------
	// Name          	: LayNganh()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function CapNhatSinhVien($data){
		/*
		$this->db->set('hoten',$data['hoten']);
		$this->db->set('gioitinh',$data['gioitinh']);
		$this->db->set('ma_nganh',$data['manganh']);
		$this->db->set('diachi',$data['diachi']);
		$this->db->set('sdt',$data['sdt']);
		$this->db->set('ngaysinh',$data['ngaysinh']);
		$this->db->set('gioitinh',$data['gioitinh']);
		*/
		$this->db->where('mssv', $data['mssv']);
		$result = $this->db->update('sinhvien', $data);
		return $result;
	}
	
	//---------------------------------------------------------------------------
	// Name          	: LayNganh()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function XoaSinhVien($mssv){
		$this->db->where('mssv', $mssv);
		$result = $this->db->delete('sinhvien'); 
		return $result;
	}
	
	//---------------------------------------------------------------------------
	// Name          	: KiemTraMatKhau($mssv, $matkhau)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function KiemTraMatKhau($mssv, $matkhau) {
		  $count = $this->db->where(array('USERNAME' => $mssv, 'PASSWORD' => MD5($matkhau)))->from('nguoidung')->count_all_results();
		  return (0 == $count) ? FALSE : TRUE;
	}	
	
	//---------------------------------------------------------------------------
	// Name          	: DoiMatKhau($mssv, $matkhau)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function DoiMatKhau($mssv, $matkhau) {
		  $this->db->set('PASSWORD', MD5($matkhau));
		  $this->db->where('USERNAME', $mssv);
		  $result = $this->db->update('nguoidung');
		  return $result;
	}	
	
	
	function GetTask($data) {
			if ('ngaybddesc' == $data['orderby'])
				$query = $this->db->from('congviec')->order_by('ngaybd desc')->get()->result_array();
			else if ('ngaybdasc' == $data['orderby'])
				$query = $this->db->from('congviec')->order_by('ngaybd asc')->get()->result_array();
			else 
				$query = $this->db->from('congviec')->order_by($data['orderby'].' asc')->get()->result_array();
				
			return $query;
	}
	
	function GetSubject_Sinhvien ($mssv) {
		$query = $this->db->from('congviec')->order_by('ngaybd desc')->get()->result_array();
	}
}