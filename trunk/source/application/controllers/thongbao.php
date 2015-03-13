<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thongbao extends MY_Controller {
	private $auth;
	private $user;
	private $MA_HK;
	private $MA_NH;
	private $usertype;
	public function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		
		$this->auth = $this->lib_authentication->check_cookie();			
		
		if ($this->auth == NULL )
			$this->lib_string->alert("", CIT_BASE_URL."auth/logout");
		$this->user = $this->auth['username'];
		$this->MA_HK = 1;
		$this->MA_NH = 2014;
		$this->usertype = $this->lib_authentication->classify_user($this->user);
		
	}
	public function dsthongbao($MA_TB = null, $seen_type = null){
		$data['dsthongbaonhan'] = $this->mthongbao->load_thongbaonhan($this->user);		
		
		$data['dsthongbaogui'] = $this->mthongbao->load_thongbaogui($this->user, $this->usertype);
		
		// tạo thông báo
		$invalid_user = '';
		if ($this->input->post('addnodifycation')){
			$_post = $this->input->post('data');
			$array_user = explode(',', $_post['NGUOINHAN']);
			// kiem tra và tạo thông báo
			foreach ($array_user as $NGUOINHAN){
				$NGUOINHAN  = trim($NGUOINHAN);
				if (! $this->mthongbao->kttt_user($NGUOINHAN))
					$invalid_user .= $NGUOINHAN . ',';
				
			}
			if ($invalid_user != '')
				echo "<span class='error'>Người nhận không hợp lệ: " . substr($invalid_user, 0, strlen($invalid_user) - 1) . "</span>";
			else {
				$this->mthongbao->tao_thongbao($_post, $this->user, $this->usertype);
				$this->lib_string->alert("", CIT_BASE_URL."thongbao/dsthongbao");
			}
		}
		else if ($this->input->post('update_thongbao')){
			$MA_TB = $this->input->post('seen_list');
			$seen_type = $this->input->post('seen_type');
			$this->mthongbao->daxem_thongbao($MA_TB);
			$this->lib_string->alert("", CIT_BASE_URL."thongbao/dsthongbao/".$MA_TB."/".$seen_type);
		}
		$data['MA_TB']= $MA_TB;
		$data['seen_type']= $seen_type;
		$data['template'] = 'thongbao/dsthongbao';
		$this->load->view('layout/thongbao', isset($data) ? $data : null);
	}
	
	public function ndthongbao(){
		$data['template'] = 'thongbao/ndthongbao';
		$this->load->view('layout/thongbao', isset($data) ? $data : null);
		
	}
	
}