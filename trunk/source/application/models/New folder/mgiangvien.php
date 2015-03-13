<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgiangvien extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	
	//---------------------------------------------------------------------------
	// Name          	: DanhSachGiangVien()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function DanhSachGiangVien()
	{
		$query = $this -> db -> query("SELECT a.mscb, a.hoten, a.gioitinh, a.ngaysinh, a.diachi, 
											  a.sdt, a.mail,  b.ten_bm, c.ten_td
										FROM giangvien as a, bomon as b, trinhdo as c
										WHERE a.ma_bm = b.ma_bm and a.ma_td = c.ma_td
										ORDER BY a.mscb ASC");
		return $query -> result();
	}
	
	//---------------------------------------------------------------------------
	// Name          	: LayBoMon()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function LayBoMon(){
		$query = $this->db->query('SELECT ma_bm, ten_bm FROM bomon');
		return $query->result_array();
	}
	
	//---------------------------------------------------------------------------
	// Name          	: LayTrinhDo()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function LayTrinhDo(){
		$query = $this->db->query('SELECT ma_td, ten_td FROM trinhdo');
		return $query->result_array();
	}
	
	
	//---------------------------------------------------------------------------
	// Name          	: ThemGiangVien()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function ThemGiangVien($data){
		$result = $this->db->insert("giangvien", $data);
		if ($result) {
			return TRUE;
		}
		else return FALSE;
	}
	
	
	//---------------------------------------------------------------------------
	// Name          	: CapNhatGiangVien($data)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function CapNhatGiangVien($data){
		/*
		$this->db->set('hoten',$data['hoten']);
		$this->db->set('gioitinh',$data['gioitinh']);
		$this->db->set('ma_nganh',$data['manganh']);
		$this->db->set('diachi',$data['diachi']);
		$this->db->set('sdt',$data['sdt']);
		$this->db->set('ngaysinh',$data['ngaysinh']);
		$this->db->set('gioitinh',$data['gioitinh']);
		*/
		$this->db->where('mscb', $data['mscb']);
		$result = $this->db->update('giangvien', $data);
		return $result;
	}
	
	//---------------------------------------------------------------------------
	// Name          	: XoaGiangVien($mscb)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
	function XoaGiangVien($mscb){
		$this->db->where('mscb', $mscb);
		$result = $this->db->delete('giangvien'); 
		return $result;
	}
	
	
	
	
	function lay_maunhom($magv, $monhoc){
	
		$query = $this->db->query('SELECT TEN_MH, maunhom.MA_MH, SLN_TOIDA, SLTV_TOIDA, MOTA 
									FROM maunhom, monhoc
									WHERE   maunhom.MSCB = "'.$magv.'" and
											maunhom.MA_MH = "'.$monhoc.'" and
											maunhom.MA_MH = monhoc.MA_MH
								');
		
		return $query->result_array();
	}
	
	function lay_monhoc($magv, $mahk, $manh){
	
		$query = $this->db->query('SELECT TEN_MH, monhoc.MA_MH
									FROM lophocphan, monhoc, dsgiangvien
									WHERE   dsgiangvien.MSCB = '.$magv.' and
											dsgiangvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
											monhoc.MA_MH = lophocphan.MA_MH and
											MA_HK ='.$mahk.' and
											MA_NH = '.$manh.'
								');
		
		return $query->result_array();
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
	
}