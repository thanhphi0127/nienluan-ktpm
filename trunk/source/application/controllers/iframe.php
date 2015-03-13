<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iframe extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		
		
	}
	public function thongtinmaunhom($MA_LOPHOCPHAN){
		$data['maunhom'] = $this->mgiangvien->lay_maunhom_bang_malophocphan($MA_LOPHOCPHAN);
		if (!empty ($data['maunhom']))
			$data['giangvien'] = $this->mgiangvien->lay_thongtincanhan($data['maunhom'][0]['MSCB']);
		
		$data['template'] = 'iframe/thongtinmaunhom';
		$this->load->view ('layout/iframe', isset($data) ? $data : NULL);
			
	
	}
	
	public function thongtingiangvien($MA_LOPHOCPHAN = null){
		if ($MA_LOPHOCPHAN != null) {
			$MSCB = $this->mgiangvien->lay_mscb_bang_malhp($MA_LOPHOCPHAN);
			if (!empty($MSCB))
				$data['thongtingiangvien'] = $this->mgiangvien->lay_thongtincanhan($MSCB[0]['MSCB']);
		}
		$data['template'] = 'iframe/thongtingiangvien';
		$this->load->view ('layout/iframe', isset($data) ? $data : NULL);
	}
	
	public function chitietcongviec($MA_CV){
		$data['XemChiTietCongViec'] = $this->msinhvien->XemChiTietCongViec($MA_CV);
		$data['template'] = 'iframe/chitietcongviec';
		$this->load->view ('layout/iframe', isset($data) ? $data : NULL);
	}

}