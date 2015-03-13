<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	private $auth;
	public $CI;
	public function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		$this->auth = $this->lib_authentication->check_cookie();			
	}
	public function index(){
		$usertype = $this->classify_user();
		if ($usertype == -1)
			$this->CI->lib_string->alert(NULL, CIT_BASE_URL."auth/login");
		else {
			
			if (0 == $usertype) {
				$this->CI->lib_string->alert(NULL, CIT_BASE_URL."sinhvien/index");
			}
		
			else if (1 == $usertype){
				//$this->CI->lib_string->alert(NULL, CIT_BASE_URL."giangvien/tiendocongviec");
				$this->CI->lib_string->alert(NULL, CIT_BASE_URL."giangvien/");
			}
			else {
				$this->CI->lib_string->alert(NULL, CIT_BASE_URL."admin/");
			}
		}
	
	}
	
	public function classify_user() {
		if ($this->auth == NULL)
			return -1;
		else {
			$data['_auth'] = $this->auth;
			if ('1111336' == $data['_auth']['username'])
				return 0;
			else
				return 1;
		}
	}

}