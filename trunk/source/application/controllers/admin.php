<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
	private $auth;
	private $MSSV;
	public function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this->auth = $this->lib_authentication->check_cookie();
		if ($this->auth == NULL) {
			$this->lib_string->alert("", CIT_BASE_URL."auth/login");
		}
		if (1 != $this->auth['ma_quyen']){
			$this->lib_string->alert("Bạn không có quyền truy cập!", CIT_BASE_URL."auth/logout");
		}
		$this->MSSV = $this->auth['username'];
		
	}

	//---------------------------------------------------------------------------
    // Name          	: index()
    // Param         	: none
    // Global variable	: none
    // Local variable 	: none
    // return           : none
    //---------------------------------------------------------------------------	
	public function index(){
		$data['seo']['title'] = 'Home view';
		$data['seo']['keyword'] = 'home view';
		$data['seo']['description'] = 'Trang chủ của admin';
		
		$data['username'] =  $this->auth['username'];
		$this -> load -> model('mgiangvien');
		$data['hoten'] = $this->mgiangvien->LayTenGiangVien($data['username']);
		
		$data['template'] = 'admin/index';
		$this->load->view('layout/admin', isset($data)?$data:NULL);
	}
	

	
	
	//---------------------------------------------------------------------------
    // Name          	: quanlysinhvien()
    // Param         	: none
    // Global variable	: none
    // Local variable 	: none
    // return           : none
    //---------------------------------------------------------------------------	
	public function quanlysinhvien(){
		$data['seo']['title'] = 'Quản lý sinh viên';
		$data['seo']['keyword'] = 'Quản lý sinh viên';
		$data['seo']['description'] = 'Thông tin sinh viên';
		$data['template'] = 'admin/quanlysinhvien';
		$data['check_mssv'] = 0;
		$data['exist_mssv'] = "";
		$data['check_mail'] = 0;
		$data['exist_mail'] = "";
		$data['press_add'] = 0;
		$data['press_modify'] = 0;
		
		
		if ($this->auth == NULL || (1 != $this->auth['ma_quyen'])) {
			$this->lib_string->alert("", CIT_BASE_URL."auth/login");
		}

		//Load view
		$this->load->model('msinhvien');
		
		$data['username'] =  $this->auth['username'];
		$this -> load -> model('mgiangvien');
		$data['hoten'] = $this->mgiangvien->LayTenGiangVien($data['username']);
		
		
		$data['LayNganh'] = $this -> msinhvien -> LayNganh();
		$data['LayKhoaHoc'] = $this -> msinhvien -> LayKhoaHoc();
		
		if (1){ //$this -> session -> userdata('logged_in') Chua rang buoc dang nhap
			
			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			//Xu ly them sinh vien
			if($this->input->post('add_student')) {
			
				//Gan bien de su dung insert
				$_POST = $this->input->post('add');
				$data['add']['_POST'] = $_POST;
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<div class="error">','</div>');
				 
				//Kiểm tra dữ liệu
				$this->form_validation->set_rules('mssv','Mã sinh viên','trim|required|min_length[5]|max_length[15]');
				$this->form_validation->set_rules('hoten', 'Họ tên', 'trim|required|min_length[3]|max_length[40]');
				$this->form_validation->set_rules('sodt', 'Số điện thoại', 'required|trim|regex_match[/^([0-9])+$/i]');
				$this->form_validation->set_rules('ngaysinh', 'Năm sinh', 'required|birthday');
				$this->form_validation->set_rules('mail', 'Địa chỉ mail', 'trim|required|valid_email');
				$this->form_validation->set_rules('diachi', 'Địa chỉ', 'trim|required');
			
					//$sqldate = strtotime($_POST['ngaysinh']);
					//$date = date('Y-m-d', $sqldate);

				//Kiem tra mssv
				if ($this->msinhvien->check_mssv($_POST['mssv'])) { 
					$data['exist_mssv'] = "<div class='error'>Mã sinh viên đã tồn tại</div>";
				}
				else {
					$data['check_mssv'] = 1; 
				}
				 
				 //Kiem tra mail
				if ($this->msinhvien->check_mail($_POST['mail'])) {
					 $data['exist_mail'] = "<div class='error'>Địa chỉ mail đã tồn tại</div>";
				} 
				else {
					$data['check_mail'] = 1; 
				}
								
				if ($this->form_validation->run() && $data['check_mssv'] == 1 && $data['check_mail'] == 1 ) 
				{

					// Tạo biến data lưu dữ liệu insert
					$data = array(
						'mssv' => $_POST['mssv'],
						'ma_nganh' => $_POST['manganh'],
						'hoten' => $_POST['hoten'],
						'gioitinh' => $_POST['gioitinh'],
						'sdt' => $_POST['sodt'],
						'diachi' => $_POST['diachi'],
						'mail' => $_POST['mail'],
						'ngaysinh' => $_POST['ngaysinh'],
						'khoahoc' => $_POST['khoahoc'],
						'trangthai' => 1
					);
					
					$nguoidung = array(
						'username' => $_POST['mssv'], 
						'password' => MD5($_POST['mssv']), 
						'ma_quyen' => $_POST['maquyen']
					);
					
					//Insert vao bang nguoi dung
					$this->msinhvien->ThemNguoiDung($nguoidung);
					
					//Them vao CSDL
					$result = $this->msinhvien->ThemSinhVien($data);
					
					//Kiem tra insert du lieu
					if (!$result) {
						$this->lib_string->alert("Không thể thêm được", CIT_BASE_URL.'admin/quanlysinhvien');
					}
					else {
						$this->lib_string->alert(NULL, CIT_BASE_URL.'admin/quanlysinhvien');
					}
				}
				else {
					$data['press_add'] = 1;

				}// END IF FORM_VALIDATION

			}
			else {
				//Nothing
			}
			
			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			//XU LY CHINH SUA SINH VIEN
			if($this->input->post('btn_save')) {
				if (isset($_POST['checked'])){
				
				foreach ($_POST['checked'] as $mssv)
				{
					$_POST[$mssv] = $this->input->post($mssv);
					$this->load->helper(array('form', 'url'));
					$this->load->library('form_validation');
					$this->form_validation->set_error_delimiters('<div class="error">','</div>');
					
					$hoten =  $_POST[$mssv]['hoten'];
					
					//Kiểm tra dữ liệu
					//$this->form_validation->set_rules('hoten', 'Họ tên', 'trim|required');
					
					
					//$this->form_validation->set_rules($_POST[$check]['sdt'], 'Số điện thoại', 'required|trim|regex_match[/^([0-9])+$/i]');
					//$this->form_validation->set_rules($_POST[$check]['ngaysinh'], 'Năm sinh', 'required|birthday');
					//$this->form_validation->set_rules($_POST[$check]['mail'], 'Địa chỉ mail', 'trim|required|valid_email');
					//$this->form_validation->set_rules($_POST[$check]['diachi'], 'Địa chỉ', 'trim|required');	
						
				
					//if ($this->form_validation->run()) {
						//echo "true";
					//} else { echo "false"; }
					
						
						//Goi model cap nhat chinh sua
						$result = $this -> msinhvien -> CapNhatSinhVien($_POST[$mssv], $mssv);
						
					//}
					
				}//END FOREACH
				
				}
			} // END IF ADD SINH VIEN
			

			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			//XU LY XOA SINH VIEN
			if($this->input->post('btn_delete')) {
				echo "<script>alert('dsd');</script>";
				
				if (isset($_POST['checked'])){
					
					foreach ($_POST['checked'] as $mssv)
					{
						//Xoa chi tiet thong bao sinh vien
						$this->msinhvien->XoaChiTietThongBaoSV($mssv);
						
						//Xoa chi tiet thong bao giang vien
						$this->msinhvien->XoaChiTietThongBaoGV($mssv);
						
						//Xoa chi tiet bao cao sinh vien
						$this->msinhvien->XoaBaoCao($mssv);
						
						//Lay lop hoc phan cua sinh vien
						//$lophocphan = $this->msinhvien->LayLopHocPhanSV($mssv);
						//foreach ($lophocphan as $row) {
							//$_POST['STT_NHOM'] = $row['STT_NHOM'];
							//$_POST['MSSV'] = $mssv;
							//$_POST['MA_LOPHOCPHAN'] = $row['MA_LOPHOCPHAN'];
							//$this->msinhvien->roi_nhom_sv($_POST, $mssv);	
						//}
						

						//Xoa binh luan sinhvien vien
						$this->mgiangvien->XoaBinhLuan($mssv);
						
						//Xoa chi tiet nhom
						$this->msinhvien->XoaChiTietNhom($mssv);
						
						//Xoa nhom danh sach cong viec
						$this->msinhvien->XoaNhomDanhSachCV($mssv);
						
						//Xoa nhom danh sach cong viec
						$this->msinhvien->XoaChiTietChinhSuaCV($mssv);
						
						//Xoa danh sach sinh vien
						$this->msinhvien->XoaDanhSachSV($mssv);
						
						//Xoa sinh vien
						$this->msinhvien->XoaSinhVien($mssv);
						
						//Xoa thong tin trong nguoi dung
						$this->msinhvien->XoaNguoiDung($mssv);
					}
				}
			}
			//Chuyen trang quan ly sinh vien
			$data['template'] = 'admin/quanlysinhvien';
			$data['ds'] = $this -> msinhvien -> DanhSachSinhVien();
			$this->load->view('layout/admin', isset($data)?$data:NULL);	
		}
        else{
			//Neu chua dang nhap
			$data['template'] = 'auth/login';
			$this->load->view('layout/login', isset($data)?$data:NULL);
        }
		
	}


	//---------------------------------------------------------------------------
    // Name          	: quanlygiangvien()
    // Param         	: none
    // Global variable	: none
    // Local variable 	: none
    // return           : none
    //---------------------------------------------------------------------------	
	public function quanlygiangvien(){
		$data['seo']['title'] = 'Quản lý giảng viên';
		$data['seo']['keyword'] = 'Quản lý giảng viên';
		$data['seo']['description'] = 'Thông tin giảng viên';
		$data['template'] = 'admin/quanlygiangvien';
		$data['press_add'] = 0;
		$data['press_modify'] = 0;
		
		if ($this->auth == NULL || (1 != $this->auth['ma_quyen'])) {
			$this->lib_string->alert("", CIT_BASE_URL."auth/login");
		}
		
		$data['username'] =  $this->auth['username'];
		$this -> load -> model('mgiangvien');
		$this -> load -> model('msinhvien');
		$data['hoten'] = $this->mgiangvien->LayTenGiangVien($data['username']);
		
		//Load view
		
		$data['LayBoMon'] = $this -> mgiangvien -> LayBoMon();
		$data['LayTrinhDo'] = $this -> mgiangvien -> LayTrinhDo();
		
		/////////////////////////////////////////////////////////////////////////////////
		// THEM GIANG VIEN
		if($this->input->post('add_teacher')) {
		
			//Gan bien de su dung insert
			$_POST = $this->input->post('add');
			$data['add']['_POST'] = $_POST;
			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">','</div>');

			//Kiểm tra dữ liệu
			$this->form_validation->set_rules('mscb','Mã giảng viên','trim|required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('hoten', 'Họ tên', 'trim|required|min_length[2]|max_length[40]');
			$this->form_validation->set_rules('sodt', 'Số điện thoại', 'required|trim|regex_match[/^([0-9])+$/i]');
			$this->form_validation->set_rules('ngaysinh', 'Năm sinh', 'required|birthday');
			$this->form_validation->set_rules('mail', 'Địa chỉ mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('diachi', 'Địa chỉ', 'trim|required');
		
		
			if ($this->form_validation->run()) 
			{
			
				// Tạo biến data lưu dữ liệu insert
				$data = array(
					'mscb' => $_POST['mscb'],
					'ma_bm' => $_POST['ma_bm'],
					'hoten' => $_POST['hoten'],
					'gioitinh' => $_POST['gioitinh'],
					'sdt' => $_POST['sodt'],
					'diachi' => $_POST['diachi'],
					'mail' => $_POST['mail'],
					'ngaysinh' => $_POST['ngaysinh'],
					'ma_td' => $_POST['ma_td']
				);
				
				$nguoidung = array(
					'username' => $_POST['mscb'], 
					'password' => MD5($_POST['mscb']), 
					'ma_quyen' => $_POST['maquyen']
				);
				
				//Insert vao bang nguoi dung
				$this->msinhvien->ThemNguoiDung($nguoidung);
				
				//Them vao CSDL
				$result = $this->mgiangvien->ThemGiangVien($data);
				
				//Kiem tra insert du lieu
				if (!$result) {
					$this->lib_string->alert("Không thể thêm được", CIT_BASE_URL.'admin/quanlygiangvien');
				}
				else {
					$this->lib_string->alert(NULL, CIT_BASE_URL.'admin/quanlygiangvien');
				}
			}
			else {
				$data['press_add'] = 1;

			}// END IF FORM_VALIDATION

		}

			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			//XU LY CHINH SUA GIANG VIEN
			if($this->input->post('btn_save')) {
				if (isset($_POST['checked'])){
				
				foreach ($_POST['checked'] as $mscb)
				{
					$_POST[$mscb] = $this->input->post($mscb);
					
						//Bien update_data de cap nhat du lieu xuong model
						$update_data = array(
							"mscb" => $mscb,
							"hoten" => $_POST[$mscb]['hoten'],
							"ngaysinh" => $_POST[$mscb]['ngaysinh'],
							"sdt" => $_POST[$mscb]['sdt'],
							"gioitinh" => $_POST[$mscb]['gioitinh'],
							"ma_bm" => $_POST[$mscb]['ma_bm'],
							"diachi" => $_POST[$mscb]['diachi'],
							"mail" => $_POST[$mscb]['mail'],
							"ma_td" => $_POST[$mscb]['ma_td']
						);
						
						//Goi model cap nhat chinh sua
						$result = $this -> mgiangvien -> CapNhatGiangVien($update_data);

					
				}//END FOREACH
				
				}
			} // END IF ADD GIANG VIEN
			

			/////////////////////////////////////////////////////////////////////////////////
			/////////////////////////////////////////////////////////////////////////////////
			//XU LY XOA GIANG VIEN
			if($this->input->post('btn_delete')) {
				if (isset($_POST['checked'])){
					foreach ($_POST['checked'] as $mscb)
					{
						//Xoa chi tiet thong bao giang vien
						$this->mgiangvien->XoaThongBaoGV($mscb);
						
						//Xoa danh sach giang vien
						$this->mgiangvien->XoaDanhSachGV($mscb);
						
						//Lay mau nhom giang vien dang phuc trach
						$MA_MAUNHOM = $this->mgiangvien->LayMauNhomGV($mscb);
						
						//Xoa mau nhom giang vien
						foreach ($MA_MAUNHOM as $row){
							$this->mgiangvien->xoa_maunhom($row['MA_MAUNHOM']);
						}
						
						//Xoa binh luan giang vien
						$this->mgiangvien->XoaBinhLuan($mscb);
						
						//Xoa thong tin giang vien
						$this -> mgiangvien -> XoaGiangVien($mscb);
						
						//Xoa thong tin trong nguoi dung
						$this -> mgiangvien -> XoaNguoiDung($mscb);
					}
				}
			}
			//Chuyen trang quan ly sinh vien
			$data['template'] = 'admin/quanlygiangvien';
			$data['ds'] = $this -> mgiangvien -> DanhSachGiangVien();
			$this->load->view('layout/admin', isset($data)?$data:NULL);

	}
	




}
