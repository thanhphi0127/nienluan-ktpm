<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msinhvien extends CI_Model{
	public function __construct() {
		parent::__construct();
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
	
	function LayTenSinhVien($mssv) {
		$query =  $this->db->query("SELECT hoten FROM sinhvien WHERE mssv = '".$mssv."'");
		return $query->result();
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
	function CapNhatSinhVien($data, $mssv){
		//Bien update_data de cap nhat du lieu xuong model
		$update_data = array(
			"hoten" => $_POST[$mssv]['hoten'],
			"ngaysinh" => $_POST[$mssv]['ngaysinh'],
			"sdt" => $_POST[$mssv]['sdt'],
			"gioitinh" => $_POST[$mssv]['gioitinh'],
			"ma_nganh" => $_POST[$mssv]['ma_nganh'],
			"diachi" => $_POST[$mssv]['diachi'],
			"mail" => $_POST[$mssv]['mail'],
			"khoahoc" => $_POST[$mssv]['khoahoc']
		);
		$this->db->where('mssv', $mssv);
		$result = $this->db->update('sinhvien', $update_data);
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
	
	//---------------------------------------------------------------------------
	// Name          	: ThemNguoiDung($nguoidung)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------	
	public function ThemNguoiDung($nguoidung){
		$result = $this->db->query("SELECT username FROM nguoidung WHERE username = '".$nguoidung['username']."'")->num_rows();
		if (0 == $result)
			$result = $this->db->insert("nguoidung", $nguoidung);
			
		if ($result) {
			return TRUE;
		}
		else return FALSE;
	}
	
	
	function GetSubject_Sinhvien ($mssv) {
		$query = $this->db->from('congviec')->order_by('ngaybd desc')->get()->result_array();
	}
	

	//---------------------------------------------------------------------------
	// Name          	: LayKhoaHoc()
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//---------------------------------------------------------------------------
  	public function LayKhoaHoc() {
		  $result = $this->db->query("SELECT khoahoc FROM khoahoc ORDER BY khoahoc desc");
		  return $result->result_array();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	 * Name: laybaocao()
	 * @author: Thanh Tam
	 * @parameters: MSSV, Mã học kỳ, mã năm  học
	 * @return: một mảng chứa danh sách các báo cáo
	 * Purpose: Lấy danh sách các báo cáo từ của sinh viên trong học kì và năm học cụ thể.
	 * Work: 
	      - Lấy danh sách Mã lớp học phần, Số thứ tự nhóm theo tham số đầu vào
		  - Lấy danh sách các báo cáo ứng với lớp học phần và Sô thứ tự nhóm đó
		  
	 */
	function lay_baocao($MSSV, $MA_HK, $MA_NH){
		$MA_LOPHOCPHAN = $this->db->query('select lophocphan.MA_LOPHOCPHAN, STT_NHOM
									from lophocphan, dssinhvien
									where dssinhvien.MSSV = "'.$MSSV.'" and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.' ')->result_array();
		$query = array();
		
		foreach($MA_LOPHOCPHAN as $row) {
			
			$query[$row['MA_LOPHOCPHAN']] = $this->db->query('select * 
							from baocao, sinhvien, dssinhvien, monhoc, lophocphan
							where baocao.MA_LOPHOCPHAN = '. $row['MA_LOPHOCPHAN'].' and
								  baocao.STT_NHOM = '. $row['STT_NHOM'].' and
								  baocao.MA_LOPHOCPHAN = dssinhvien.MA_LOPHOCPHAN and
								  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
								  lophocphan.MA_MH = monhoc.MA_MH and
								  dssinhvien.MSSV = sinhvien.MSSV and
								  dssinhvien.MSSV = baocao.NGUOIGUI 
								  ')->result_array();

		}
		return $query;
		
	}
	
	/*
	 * Name: xoa_thanhvien()
	 * @author: Thanh Tam
	 * @parameters: mssv, mã học kì, mã năm học
	 * @return: 
		 - TRUE nếu xóa thành công 
		 - FALSE nếu thất bại
	 * Purpose: Xóa thành viên cụ thể trong một nhóm 
	 * Work: 
	      - Lấy Mã lớp học phần của thành viên từ tham số đầu vào
		  - Đặt giá trị STT_NHOM = 0 tại bảng dssinhvien ứng với lớp học phần và mssv
		  - Xóa các công việc, báo cáo của thành viên đó
		  
	 */
	
	function xoa_thanhvien($data,$nhomtruong, $MA_HK, $MA_NH) {
		
		$MSSV =$data['check_mssv'][0];
		$data['STT_NHOM'] = $data['data']['STT_NHOM'];
	
		$data['MA_LOPHOCPHAN'] = $this->db->query('select lophocphan.MA_LOPHOCPHAN
									from  lophocphan, dssinhvien
									where lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.' and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  dssinhvien.MSSV = "'.$data['check_mssv'][0].'" and
										  dssinhvien.STT_NHOM = '.$data['STT_NHOM'].'
										  
								')->result_array()[0]['MA_LOPHOCPHAN'];
		
		
		//echo "<script>alert('".$data['MA_LOPHOCPHAN']."');</script>";
		
		//////////
		// đếm sltv trong nhóm
		$count = $this->db->select('SLTV')->get_where('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'],'STT_NHOM'=>$data['STT_NHOM']))->result_array();
		
		
		// lấy ra mã dscongviec
		$this->db->select('MA_DSCV');
		$this->db->from ('nhom_dscongviec');
		$this->db->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN']);
		$this->db->where('STT_NHOM', $data['STT_NHOM']);
		$MA_DSCV = $this->db->get()->result_array();

		if ($MA_DSCV != NULL) {
			//lấy danh sách các công việc từ mã dscongviec
			$this->db->select('MA_CV');
			$array_tatcaMA_CV = $this->db->get_where('dscongviec', array('MA_DSCV' => $MA_DSCV[0]['MA_DSCV']))->result_array();
		}
		 // update SLTV
		 
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('chitietnhom', array('SLTV' => (intval($count[0]['SLTV'])- 1) ));
			
			 
			if ($array_tatcaMA_CV != NULL) {
			// - Xóa công việc chỉ giao cho người đó
				$chuoi_MA_CV = '0';
				foreach ($array_tatcaMA_CV as $item) {
					$chuoi_MA_CV .= ', '.$item['MA_CV'];
	
				}
				// lấy ra công việc chỉ giao cho người đó
				$cv_duocgiaorieng = $this->db->query ('select MA_CV		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO = "'.$MSSV.'"')->result_array();
				
				
				if ($cv_duocgiaorieng != NULL){
					$chuoi_cv_duocgiaorieng = '0';
					foreach ($cv_duocgiaorieng as $item) {
						$chuoi_cv_duocgiaorieng .= ', '.$item['MA_CV'];
	
					}
					
					
					$this->db->query ('delete from dscongviec		
								   where MA_DSCV = '.$MA_DSCV[0]['MA_DSCV'].' and
									     MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from chitietchinhsuacv		
								   where  MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from congviec		
								   where    MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
				}
				
			
		
				
			// xóa người đó khỏi ds người đươc giao 
				$cv_duocgiaochung = $this->db->query ('select MA_CV, NGUOIDUOCGIAO		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO like "%-'.$MSSV.'" or
															NGUOIDUOCGIAO like "'.$MSSV.'-%"'
															)->result_array();
				
				
				
				if ($cv_duocgiaochung != NULL){
					foreach ($cv_duocgiaochung as $item) { 
						//với mỗi công việc được giao chung, xóa người đó ra khỏi ds được giao
						$this->db->select('NGUOIDUOCGIAO');
						$nguoiduocgiao = $this->db->get_where('congviec', array('MA_CV' => $item['MA_CV']))->result_array()[0]['NGUOIDUOCGIAO'];
						$array_nguoiduocgiao = array();
						$array_nguoiduocgiao = explode('-', $nguoiduocgiao);
						foreach ($array_nguoiduocgiao as $index => $val){
							if ($val == $MSSV){
								unset($array_nguoiduocgiao[$index]);
							}
						}
						$nguoiduocgiao = '';
						$nguoiduocgiao = implode('-', $array_nguoiduocgiao);
						$this->db->query ('update congviec
										   set NGUOIDUOCGIAO = "'.$nguoiduocgiao.'"
										   where MA_CV = '.$item['MA_CV']);
						
						
					}
					
					
				}
				
			
			}
			
			// đặt lại ngườo gửi báo cáo là người xóa (nhóm trưởng mới có chức năng xóa)

			$this->db->where(array('NGUOIGUI' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('baocao', array('NGUOIGUI' => $nhomtruong));
			
		
		
		//xoa STT_NHOM trong dssinhvien
		
		
		//////////
		
		
		$this->db->where(array('MSSV' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
		$this->db->update('dssinhvien', array('STT_NHOM' => '0'));
		
	}

	/*
	 * Name: lay_dsthanhvien()
	 * @author: Thanh Tam
	 * @parameters: MA_LOPHOCPHAN, STT_NHOM
	 * @return: mảng chứa danh sách các thành viên gồm tất cả các thuộc tính trong bảng sinh viên và tất cả trong bảng dssinhvien
	 * Purpose: Lấy thông tin của các thành viên trong nhóm
	 * Work: 
	      
		  - Tìm các thành viên trong lớp học phần và số thứ tự nhóm đó
		  
	 */
	
	function lay_dsthanhvien($MA_LOPHOCPHAN, $STT_NHOM) {
		
		
		$dsthanhvien['thanhvien'] = $this->db->query('select * 
											from sinhvien, dssinhvien
											where dssinhvien.MA_LOPHOCPHAN = '.$MA_LOPHOCPHAN.' and 
												dssinhvien.STT_NHOM = '.$STT_NHOM.' and
												sinhvien.MSSV = dssinhvien.MSSV 
												  
										')->result_array();
		$this->db->select('NHOMTRUONG');
		$dsthanhvien['nhomtruong'] = $this->db->get_where('chitietnhom', array('MA_LOPHOCPHAN' => $MA_LOPHOCPHAN))->result_array()[0]['NHOMTRUONG'];						
									       
								
		return($dsthanhvien);
								  
								  
	}
	
	/*
	 * Name: lay_dscongviec()
	 * @author: Thanh Tam
	 * @parameters: 
	 * @return: 
	 * Purpose: 
	 * Work: 
	      - 
	 */
	
	function lay_dscongviec($data, $MSSV, $MA_HK, $MA_NH) {
	
		//lay congviec
		$selector = '';
		foreach ($data['check_list'] as $item) {
			$selector .= ', '.$item;
	
		}
		
		
		$sql = 'select DISTINCT TEN_CV, NGAYBD, NGAYKT'.$selector.', congviec.MA_CV, '.$data['STT_NHOM'].' as STT_NHOM
				from dscongviec, congviec, nhom_dscongviec, mucdo, tinhchat
				where MA_LOPHOCPHAN = '.$data['MA_LOPHOCPHAN'].' and
				      STT_NHOM = '.$data['STT_NHOM'].' and
					  nhom_dscongviec.MA_DSCV = dscongviec.MA_DSCV and
					  dscongviec.MA_CV = congviec.MA_CV and
					  mucdo.MA_MUCDO = congviec.MA_MUCDO and
					  tinhchat.MA_TINHCHAT = congviec.MA_TINHCHAT 
					  ';
		if ('ngaybddesc' == $data['orderby'])
				$sql = $sql." order by NGAYBD desc";
		else if ('ngaybdasc' == $data['orderby'])
				$sql = $sql." order by NGAYBD asc";
		else 
				$sql = $sql." order by ".$data['orderby']." asc";
		$congviec['dscongviec'] = $this->db->query($sql)->result_array();
		$i = 0;
		$array_MSSV_nguoiduocgiao = array();
		$array_HOTEN_nguoiduocgiao = array();
		foreach ($congviec['dscongviec'] as $row) {
			$chuoi_nguoiduocgiao = $this->db->query('select NGUOIDUOCGIAO
											from congviec
											where MA_CV = '.$row['MA_CV'])->result_array()[0]['NGUOIDUOCGIAO'];
			
			$array_MSSV_nguoiduocgiao = explode('-',$chuoi_nguoiduocgiao);
			
			
			foreach ($array_MSSV_nguoiduocgiao as $MSSV_nguoiduocgiao){
				
				$HOTEN = $this->db->query('select HOTEN 
										from sinhvien	
										where MSSV = "'.$MSSV_nguoiduocgiao.'"')->result_array()[0]['HOTEN'];
				
				array_push($array_HOTEN_nguoiduocgiao, $HOTEN);
				
			}
			
			
			$chuoi_HOTEN_nguoiduocgiao = implode(',',$array_HOTEN_nguoiduocgiao);
			
			
			$congviec['dscongviec'][$i]['NGUOIDUOCGIAO'] =  $chuoi_HOTEN_nguoiduocgiao;
			
			$i ++;
			
		}
		
		
		
		$congviec['monhoc'] = $this->db->query('select TEN_MH, giangvien.HOTEN
										  from giangvien, monhoc, lophocphan, maunhom	
										  where lophocphan.MA_LOPHOCPHAN = '.$data['MA_LOPHOCPHAN'].' and	
											    lophocphan.MA_MH = monhoc.MA_MH and
												lophocphan.MA_MAUNHOM = maunhom.MA_MAUNHOM and
												maunhom.MSCB = giangvien.MSCB')->result_array()[0];
		
		return $congviec;
			
	}
	
	/*
	 * Name: load_dscongviec()
	 * @author: Thanh Tam
	 * @parameters: 
	 * @return: 
	 * Purpose: 
	 * Work: 
	      - 
	 */
	
	function load_dscongviec($data, $MSSV, $MA_HK, $MA_NH) {

		// lấy ra lần chỉnh sửa gần nhất 
		
		
		//lấy ra công việc và chi tiết chỉnh sửa
		$sql = 'select distinct congviec.MA_CV, TEN_CV, NGAYBD, NGAYKT, MOTA, THOIGIANUL, TEN_MUCDO, TEN_TINHCHAT, TEN_TRANGTHAI, TILEHOANTHANH,  NGUOIDUOCGIAO , '.$data['STT_NHOM'].' as STT_NHOM, THOIGIANSUA
				from dscongviec, congviec, nhom_dscongviec, mucdo, tinhchat, trangthai, chitietchinhsuacv
				where nhom_dscongviec.MA_LOPHOCPHAN = '.$data['MA_LOPHOCPHAN'].' and
				      nhom_dscongviec.STT_NHOM = '.$data['STT_NHOM'].' and
					  nhom_dscongviec.MA_DSCV = dscongviec.MA_DSCV and
					  dscongviec.MA_CV = congviec.MA_CV and
					  mucdo.MA_MUCDO = congviec.MA_MUCDO and
					  tinhchat.MA_TINHCHAT = congviec.MA_TINHCHAT and
					  trangthai.MA_TRANGTHAI = congviec.MA_TRANGTHAI and
					  congviec.MA_CV = chitietchinhsuacv.MA_CV and
					  chitietchinhsuacv.THOIGIANSUA in (select MAX(THOIGIANSUA)
														from chitietchinhsuacv
														group by MA_CV)
				order by TEN_CV
					  ';
		
		$congviec['dscongviec'] = $this->db->query($sql)->result_array();
		
		
		$i = 0;
		$array_MSSV_nguoiduocgiao = array();
		$array_HOTEN_nguoiduocgiao = array();
		if (isset($congviec['dscongviec']) && !empty($congviec['dscongviec'])){
			foreach ($congviec['dscongviec'] as $row) {
				if (!empty($row['MA_CV'])){
					$this->db->select('NGUOIDUOCGIAO');
					$chuoi_nguoiduocgiao = $this->db->get_where('congviec', array('MA_CV' => $row['MA_CV']))->result_array()[0]['NGUOIDUOCGIAO'];
					$array_MSSV_nguoiduocgiao = explode('-',$chuoi_nguoiduocgiao);
					
					$array_HOTEN_nguoiduocgiao = array();
					foreach ($array_MSSV_nguoiduocgiao as $MSSV_nguoiduocgiao){
						
						$HOTEN = $this->db->query('select HOTEN 
												from sinhvien	
												where MSSV = "'.$MSSV_nguoiduocgiao.'"')->result_array()[0]['HOTEN'];
						
						array_push($array_HOTEN_nguoiduocgiao, $HOTEN);
						
					}
					
					
					$chuoi_HOTEN_nguoiduocgiao = implode(',',$array_HOTEN_nguoiduocgiao);
					
					
					$congviec['dscongviec'][$i]['NGUOIDUOCGIAO'] =  $chuoi_HOTEN_nguoiduocgiao;
					
					$i ++;
				}
				
			}
			
		}
		else 
			unset($congviec['dscongviec']);
		
		$congviec['monhoc'] = $this->db->query('select TEN_MH, giangvien.HOTEN
										  from giangvien, monhoc, lophocphan, maunhom	
										  where lophocphan.MA_LOPHOCPHAN = '.$data['MA_LOPHOCPHAN'].' and	
											    lophocphan.MA_MH = monhoc.MA_MH and
												lophocphan.MA_MAUNHOM = maunhom.MA_MAUNHOM and
												maunhom.MSCB = giangvien.MSCB')->result_array();
		
		return $congviec;
			
	}
	
	
	/*
	 * Name: xoa_congviec()
	 * @author: Thanh Tam
	 * @parameters: MA_CV
	 * @return: 
		 
	 * Purpose: Xóa công việc cụ thể
	 * Work: 
		  - Xóa các công việc với Mã cv được truyền.
		  
	 */
	
	function xoa_congviec($MA_CV){
		$this->db->where('MA_CV', $MA_CV);
		$this->db->delete('chitietchinhsuacv');
		$this->db->where('MA_CV', $MA_CV);
		$this->db->delete('dscongviec');
		$this->db->where('MA_CV', $MA_CV);
		$this->db->delete('congviec');
	}
	
	
	/*
	 * Name: lay_lhp()
	 * @author: Thanh Tam
	 * @parameters: MSSV, MÃ học kì, Mã năm học
	 * @return: mảng chứa danh sách môn học và mã lớp học phần tương ứng
	 * Purpose: Lấy mã lớp học phần và tên môn học của sinh viên trong học kì và năm học cụ thể
	 * Work: 
	      - Lấy mã lớp học phần và tên môn học theo tham số đầu vào
		  - return kết quả
		  
	 */
	
	function lay_lhp($MSSV, $MA_HK, $MA_NH) {
	
		$query = $this->db->query('select monhoc.TEN_MH, lophocphan.MA_LOPHOCPHAN, dssinhvien.STT_NHOM
									from monhoc, lophocphan, dssinhvien
									where dssinhvien.MSSV = "'.$MSSV.'" and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.' and
										  lophocphan.MA_MH = monhoc.MA_MH 
								')->result_array();
		
		return $query;
	}
	
	
	
	/*
	 * Name: lay_lhpchuaconhom()
	 * @author: Thanh Tam
	 * @parameters: MSSV, MÃ học kì, Mã năm học
	 * @return: mảng chứa danh sách môn học và mã lớp học phần
	 * Purpose: Lấy mã lớp học phần và tên môn học của sinh viên trong học kì và năm học cụ thể mà chưa có nhóm, phục vụ cho việc đăng kí nhóm
	 * Work: 
	      - Lấy mã lớp học phần và tên môn học theo tham số đầu vào
		  - return kết quả
		  
	 */
	
	function lay_lhpchuaconhom($MSSV, $MA_HK, $MA_NH) {
		$query = $this->db->query('select monhoc.TEN_MH, lophocphan.MA_LOPHOCPHAN
									from monhoc, lophocphan, dssinhvien
									where dssinhvien.MSSV = "'.$MSSV.'" and
										  dssinhvien.STT_NHOM = 0 and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.' and
										  lophocphan.MA_MH = monhoc.MA_MH 
										  
										  
								');
		return $query->result_array();
		
	}
	
	
	/*
	 * Name: sua_chitietnhom()
	 * @author: Thanh Tam
	 * @parameters: 
	      - mảng 1: MÔ tả, đề tài
		  - mảng 2: STT nhóm, mã lớp học phần
	 * @return: 
		  
	 * Purpose: Cập nhật đề tài và mô tả cho nhóm
	 * Work: 
	      - Cập nhật đề tài và mô tả cho nhóm theo tham số đầu vào
		  
		  
	 */
	
	function sua_chitietnhom($data1, $data2){
		$this->db->where('MA_LOPHOCPHAN',$data2['MA_LOPHOCPHAN']);
		$this->db->where('STT_NHOM',$data2['STT_NHOM']);		
		$this->db->update('chitietnhom',$data1);
		
	}
	
	
	/*
	 * Name: lay_lhpconhom()
	 * @author: Thanh Tam
	 * @parameters: MSSV, MÃ học kì, Mã năm học
	 * @return: mảng chứa danh sách môn học và mã lớp học phần
	 * Purpose: Lấy mã lớp học phần và tên môn học của sinh viên trong học kì và năm học cụ thể mà đã có nhóm, phục vụ cho việc đăng kí nhóm.
	 * Work: 
	      - Lấy mã lớp học phần và tên môn học theo tham số đầu vào
		  - return kết quả
		  
	 */
	
	function lay_lhpconhom($MSSV, $MA_HK, $MA_NH) {
		$query = $this->db->query('select monhoc.TEN_MH, lophocphan.MA_LOPHOCPHAN, dssinhvien.STT_NHOM
									from monhoc, lophocphan, dssinhvien
									where lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.' and
										  lophocphan.MA_MH = monhoc.MA_MH and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  dssinhvien.MSSV = "'.$MSSV.'" and
										  dssinhvien.STT_NHOM <> 0 
  
										  
								');
		return $query->result_array();
		
	}
	
	/*
	 * Name: them_thanhvien()
	 * @author: Thanh Tam
	 * @parameters mảng gồm mssv, mã lớp học phần
	 * @return: 
			- TRUE: thành công
			- FALSE: thất bại
	 * Purpose: Thêm thành viên vào một nhóm
	 * Work: 
	      - Lấy STT nhóm theo tham số đầu vào
		  
		  - 
		  - Lấy về Số lượng thành viên hiện tại của nhóm
		  - Lấy về Số lượng thành viên tối đa của nhóm
		  - Kiểm tra nếu STTV < SLTV_TOIDA:
		    + nếu đúng: cập nhât thuộc tính STT_NHOM trong bảng dssinhvien bằng STT_nhóm của người thực hiện chức năng
			            tăng số lượng thành viên lên 1
						return TRUE;
			+ nếu sai: return FALSE;
		  
	 */
	
	
	function them_thanhvien($data) {
		// kt sltv
		$arr_SLTV_TOIDA = $this->db->query('select SLTV_TOIDA 
										from lophocphan, maunhom
										where MA_LOPHOCPHAN = "'.$data['MA_LOPHOCPHAN'].'" and
											  lophocphan.MA_MAUNHOM = maunhom.MA_MAUNHOM ')->result_array();
		if (empty($arr_SLTV_TOIDA[0]['SLTV_TOIDA'])){
			$SLTV_TOIDA = 0;
		}
		else $SLTV_TOIDA = $arr_SLTV_TOIDA[0]['SLTV_TOIDA'];
		$this->db->select('SLTV');
		$SLTV_HIENTAI = $this->db->get_where('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'], 'STT_NHOM' => $data['STT_NHOM']))->result_array()[0]['SLTV'];
		
		
		if (  (isset($SLTV_TOIDA) &&  $SLTV_HIENTAI < $SLTV_TOIDA ) || 0 == $SLTV_TOIDA) {
			//thêm thanh vien
			$set['STT_NHOM'] = $data['STT_NHOM'];
			$this->db->where('MSSV', $data['MSSV']);
			$this->db->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN']);
			$this->db->update('dssinhvien', $set);
			
			//cập nhật sltv
			$this->db->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN']);
			$this->db->where('STT_NHOM', $data['STT_NHOM']);
			$this->db->update('chitietnhom', array('SLTV' => intval($SLTV_HIENTAI) + 1));
			return true;
		}
		else return false;
	}
	
	/*
	 * Name: lay_tenmonhoc()
	 * @author: Thanh Tam
	 * @parameters: MA_LOPHOCPHAN
	 * @return: mảng chứa danh sách tên môn học
	 * Purpose: Lấy tên môn học ứng với lớp học phần cụ thể.
	 * Work: 
	      - Lấy tên môn học theo tham số đầu vào
		  - return kết quả
		  
	 */
	
	function lay_tenmonhoc($MA_LOPHOCPHAN) {
		$query = $this->db->query('select TEN_MH
									from monhoc, lophocphan
									where lophocphan.MA_LOPHOCPHAN = '.$MA_LOPHOCPHAN.' and
										  lophocphan.MA_MH = monhoc.MA_MH ')->result_array();
		return $query;
	}
	
	/*
	 * Name: lay_sinhviencunglop()
	 * @author: Thanh Tam
	 * @parameters: MA_LOPHOCPHAN, STT_NHOM
	 * @return: mảng gồm :
	          - mảng 1: danh sách chứa họ tên và mssv của sinh viên đã có nhóm
			  - mảng 2: danh sách chứa họ tên và mssv của sinh viên chưa có nhóm
	 * Purpose: Lấy danh sách sinh viên phục vụ cho việc thêm thành viên
	 * Work: 
	      - Lấy hoten, mssv mà đã có nhóm theo tham số đầu vào
		  - Lấy hoten, mssv mà chưa có nhóm theo tham số đầu vào
		  - return kết quả
		  
	 */
	
	function lay_sinhviencunglop ($MA_LOPHOCPHAN, $STT_NHOM) {
		$query['daconhom'] = $this->db->query('select DISTINCT sinhvien.MSSV, HOTEN 
												from dssinhvien, sinhvien
												where dssinhvien.MA_LOPHOCPHAN = '.$MA_LOPHOCPHAN.' and 
													  dssinhvien.STT_NHOM <> 0 and
													  dssinhvien.MSSV = sinhvien.MSSV
												ORDER BY HOTEN')->result_array();
		$query['chuaconhom'] = $this->db->query('select sinhvien.MSSV, HOTEN 
												from dssinhvien, sinhvien
												where dssinhvien.MA_LOPHOCPHAN = '.$MA_LOPHOCPHAN.' and
													  dssinhvien.STT_NHOM = 0 and
													  dssinhvien.MSSV = sinhvien.MSSV 
												ORDER BY HOTEN')->result_array();	
		$query['MA_LOPHOCPHAN'] = $MA_LOPHOCPHAN;
		return $query;
	}
	
	/*
	 * Name: lay_chitietnhom()
	 * @author: Thanh Tam
	 * @parameters: MSSV, MÃ hoc kì, mã năm học
	 * @return: một mảng các mảng thông tin nhóm và danh sách thành viên
	 * Purpose: Lấy các thông tin nhóm và danh sách thành viên của từng nhóm của sinh viên trong học kì và năm học cụ thể
	 * Work: 
	      - lấy mã lớp học phần và stt nhóm theo tham số đầu vào
		  - Với mỗi mã lớp học phần và stt nhóm
				+ Lấy tất cả thông tin nhóm theo mã lớp học phần và stt nhóm
				+ lấy họ tên, mssv của những thành viên ứng với nhóm
		  - return kết quả
		  
	 */
	
	function lay_chitietnhom($MSSV, $MA_HK, $MA_NH) {
		$query = $this->db->query('select lophocphan.MA_LOPHOCPHAN, dssinhvien.STT_NHOM
									from dssinhvien, lophocphan
									where dssinhvien.MSSV = "'.$MSSV.'" and
										  dssinhvien.STT_NHOM <> 0 and
										  dssinhvien.MA_LOPHOCPHAN = lophocphan.MA_LOPHOCPHAN and
										  lophocphan.MA_HK = '.$MA_HK.' and
										  lophocphan.MA_NH = '.$MA_NH.'
										  
								')->result_array();
		$query_chitietnhom = array();
		if ($query != NULL) {
			foreach ($query as $row) {
				$query_chitietnhom[$row['MA_LOPHOCPHAN']]['thongtinnhom'] = $this->db->query('select monhoc.TEN_MH, NHOMTRUONG, DETAI, MOTA, '.$row['MA_LOPHOCPHAN'].' as MA_LOPHOCPHAN, '.$row['STT_NHOM'].' as STT_NHOM
										from chitietnhom, lophocphan, monhoc
										where  chitietnhom.MA_LOPHOCPHAN = '.$row['MA_LOPHOCPHAN'].' and
											   chitietnhom.STT_NHOM = '.$row['STT_NHOM'].' and
											   lophocphan.MA_LOPHOCPHAN = chitietnhom.MA_LOPHOCPHAN and
											   lophocphan.MA_MH = monhoc.MA_MH
									')->result_array();
				$query_chitietnhom[$row['MA_LOPHOCPHAN']]['thanhvien'] =  $this->db->query('select HOTEN, sinhvien.MSSV 
																				from sinhvien, dssinhvien
																				where MA_LOPHOCPHAN = "'.$row['MA_LOPHOCPHAN'].'" and
																					 STT_NHOM = '.$row['STT_NHOM'].' and
																					 dssinhvien.MSSV = sinhvien.MSSV')->result_array();
			
			}
			return $query_chitietnhom;
		}
		return NULL;
		
		
		
	}
	
	/*
	 * Name: kt_nhomdangki()
	 * @author: Thanh Tam
	 * @parameters: mã lớp học phần
	 * @return: 
			- -1: nếu hết nhóm
			- stt nhóm: nếu chưa hết nhóm
	 * Purpose: Lấy stt nhóm để đăng kí. Không cho đăng kí nếu hết nhóm
	 * Work: 
	      - lấy số lượng nhóm hiện tại
		  - lấy số lượng nhóm tối đa
		  - kiểm tra nếu sln < sln_toida
			 + return stt nhóm
		  ngược lại
			 + return -1
		  
	 */
	
	function kt_nhomdangki($data) {
		$SLN_TOIDA = $this->db->query('select SLN_TOIDA 
										from lophocphan, maunhom
										where MA_LOPHOCPHAN = "'.$data['MA_LOPHOCPHAN'].'" and
											  lophocphan.MA_MAUNHOM = maunhom.MA_MAUNHOM ')->result_array();
		if (empty($SLN_TOIDA[0]['SLN_TOIDA'])){
			$SLN_HIENTAI = $this->db->select_max('STT_NHOM')->where('MA_LOPHOCPHAN',$data['MA_LOPHOCPHAN'])->get('dssinhvien')->result_array();
			return $SLN_HIENTAI[0]['STT_NHOM'];
		}
		
		$SLN_HIENTAI = $this->db->select_max('STT_NHOM')->where('MA_LOPHOCPHAN',$data['MA_LOPHOCPHAN'])->get('dssinhvien')->result_array();
		if (empty($SLN_HIENTAI))
			$SLN_HIENTAI[0]['STT_NHOM'] = 0;
		if ($SLN_HIENTAI[0]['STT_NHOM'] < $SLN_TOIDA[0]['SLN_TOIDA'])
			return intval($SLN_HIENTAI[0]['STT_NHOM']);
		else return -1;
	}
	
	/*
	 * Name: dangki_nhom()
	 * @author: Thanh Tam
	 * @parameters: mảng gồm :STT nhóm, mã lớp học phần, mssv
	 * @return: 
			
	 * Purpose: đăng ký nhóm cho sinh viên và chèn chi tiết nhóm
	 * Work: 
	      - tăng stt nhóm lên 1
		  - cập nhật stt nhóm cho sinh viên đăng kí nhóm
		  - đặt sltv = 1, đặt nhóm trưởng là mssv của sinh viên đăng kí
		  - insert thông tin chi tiết nhóm vào bảng chi tiết nhóm
		  
		  
	 */
	
	function dangki_nhom($data, $MSSV) {
		
		
		$data['STT_NHOM'] = $data['STT_NHOM'] + 1;
		
		
		// insert chitietnhom
		$this->db->where(array('MSSV' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
		$this->db->update('dssinhvien', array('STT_NHOM' => $data['STT_NHOM']));
		$data['NHOMTRUONG'] = $MSSV;
		$data['SLTV'] = 1;
		$this->db->insert('chitietnhom', $data);								  
		
		
		//insert nhom_dscongviec
			// tạo mã dscongviec
			$this->db->select_max('MA_DSCV');
			$MA_DSCV = $this->db->get('dscongviec')->result_array();
			
			if(NULL == $MA_DSCV)
				$MA_DSCV = 1;
			else $MA_DSCV = intval($MA_DSCV[0]['MA_DSCV']) + 1;
			// insertt 
			$nhom_dscongviec['MA_LOPHOCPHAN'] = $data['MA_LOPHOCPHAN'];
			$nhom_dscongviec['STT_NHOM'] = $data['STT_NHOM'];
			$nhom_dscongviec['NGUOITAO'] = $MSSV;
			$nhom_dscongviec['MA_DSCV'] = $MA_DSCV;
			$this->db->insert('nhom_dscongviec', $nhom_dscongviec);
		
	}
	
	
	/*
	 * Name: roi_nhom()
	 * @author: Thanh Tam
	 * @parameters: mảng gồm: mã lớp học phần, stt nhóm, 
	 * @return: 
			
	 * Purpose: Xóa sinh viên khỏi một nhóm
	 * Work: 
	      - đếm số thành viên hiện tại của nhóm
		  - nếu :
    		   + số thành viên bằng 1, tức là chỉ có thành viên đó: xóa chi tiết nhóm và đặt giá trị STT_NHOM của bảng dssinhvien là 0
			   + số thành viên khác 1
		  - giảm số lượng thành viên xuống 1
		  - đặt lại nhóm trưởng cho nhóm đó
		  -  đặt giá trị STT_NHOM của bảng dssinhvien là 0
		  
	 */
	
	function roi_nhom($data, $MSSV) {
		
		
		// đếm sltv trong nhóm
		$count = $this->db->select('SLTV')->get_where('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'],'STT_NHOM'=>$data['STT_NHOM']))->result_array();
		//print_r($count);
		
		// lấy ra mã dscongviec
		$this->db->select('MA_DSCV');
		$this->db->from ('nhom_dscongviec');
		$this->db->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN']);
		$this->db->where('STT_NHOM', $data['STT_NHOM']);
		$MA_DSCV = $this->db->get()->result_array();
		
		
		if ($MA_DSCV != NULL) {
			//lấy danh sách các công việc từ mã dscongviec
			$this->db->select('MA_CV');
			$array_tatcaMA_CV = $this->db->get_where('dscongviec', array('MA_DSCV' => $MA_DSCV[0]['MA_DSCV']))->result_array();
			
			
		}
		//
		
		if (1 == $count[0]['SLTV']) { // nhóm chỉ có 1 người -> xóa nhóm và delete tất cả công việc, báo cáo
			// xóa nhom_dscongviec
			
				$this->db->where(array('MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN'], 'STT_NHOM' => $data['STT_NHOM']));
				$this->db->delete('nhom_dscongviec');
			//    + xóa báo cáo 
			
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->delete('baocao');

			$this->db->delete('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'],'STT_NHOM'=>$data['STT_NHOM']));

			//    + xóa congviec và dscongviec, xóa chitietchinhsuacv
			if ($array_tatcaMA_CV != NULL && $MA_DSCV != NULL) {
				//    + xóa xông việc
					$chuoi_MA_CV = array();
					foreach ($array_tatcaMA_CV as $item) {
						array_push($chuoi_MA_CV, $item['MA_CV']);
						
						$this->db->where(array('MA_CV' => $item['MA_CV']));
						$this->db->delete('chitietchinhsuacv');	
					}
					
					$this->db->where(array('MA_DSCV' => $MA_DSCV[0]['MA_DSCV']));
					$this->db->delete('dscongviec');	
		
					$this->db->where_in('MA_CV',  $chuoi_MA_CV);
					$this->db->delete('congviec');	
			}
			
		}
		
		
		else { // nhóm có 2+ người -> đặt lại nhóm trưởng và sltv
		 // update SLTV
			
			
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('chitietnhom', array('SLTV' => intval($count[0]['SLTV'])- 1 ));
		
			//chon lai NHOMTRUONG
			$thanhvien = $this->db->select('MSSV')->where('STT_NHOM', $data['STT_NHOM'])->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN'])->where('MSSV !=', $MSSV)->get('dssinhvien')->result_array();
			
			// set người tạo (nhom_dscongviec) là nhóm trưởng mới
			
			$this->db->where(array('MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN'], 'STT_NHOM' => $data['STT_NHOM']));
			$this->db->update('nhom_dscongviec', array('NGUOITAO' => $thanhvien[0]['MSSV']));
			
			//set nhóm trưởng (chitietnhom) 
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('chitietnhom', array('NHOMTRUONG' => $thanhvien[0]['MSSV']));
			
			if ($array_tatcaMA_CV != NULL) {
			// - Xóa công việc chỉ giao cho người đó
				$chuoi_MA_CV = '0';
				
				
				foreach ($array_tatcaMA_CV as $item) {
					$chuoi_MA_CV .= ', '.$item['MA_CV'];
					
				}
				
				// lấy ra công việc chỉ giao cho người đó
				$cv_duocgiaorieng = $this->db->query ('select MA_CV		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO = '.$MSSV)->result_array();
				
				
				if ($cv_duocgiaorieng != NULL){
					$chuoi_cv_duocgiaorieng = '0';
					foreach ($cv_duocgiaorieng as $item) {
						$chuoi_cv_duocgiaorieng .= ', '.$item['MA_CV'];
						
					}
					
					$this->db->query ('delete from dscongviec		
								   where MA_DSCV = '.$MA_DSCV[0]['MA_DSCV'].' and
									     MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from chitietchinhsuacv		
								   where  MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from congviec		
								   where    MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					
				}
			// xóa người đó khỏi ds người đươc giao 
			
				$cv_duocgiaochung = $this->db->query ('select MA_CV, NGUOIDUOCGIAO		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO like "%'.$MSSV.'%"')->result_array();
				
				
				if ($cv_duocgiaochung != NULL){
					foreach ($cv_duocgiaochung as $item) { 
						//với mỗi công việc được giao chung, xóa người đó ra khỏi ds được giao
						$this->db->select('NGUOIDUOCGIAO');
						$nguoiduocgiao = $this->db->get_where('congviec', array('MA_CV' => $item['MA_CV']))->result_array()[0]['NGUOIDUOCGIAO'];
						$array_nguoiduocgiao = array();
						$array_nguoiduocgiao = explode('-', $nguoiduocgiao);
						foreach ($array_nguoiduocgiao as $index => $val){
							if ($val == $MSSV){
								unset($array_nguoiduocgiao[$index]);
							}
						}
						$nguoiduocgiao = '';
						$nguoiduocgiao = implode('-', $array_nguoiduocgiao);
						$this->db->query ('update congviec
										   set NGUOIDUOCGIAO = "'.$nguoiduocgiao.'"
										   where MA_CV = '.$item['MA_CV']);
					}
				}
				
			}
			
			// đặt lại ngườo gửi báo cáo
			$this->db->where(array('NGUOIGUI' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('baocao', array('NGUOIGUI' => $thanhvien[0]['MSSV']));
			
		}
		
		//xoa STT_NHOM trong dssinhvien
		
		$this->db->where(array('MSSV' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
		$this->db->update('dssinhvien', array('STT_NHOM' => '0'));
		
	}
	
	/*
	 * Name: them_baocao()
	 * @author: Thanh Tam
	 * @parameters mảng gồm mã lớp học phần, stt nhóm, các thuộc tính báo cáo
	 * @return: 
			
	 * Purpose: Gửi báo cáo cho giáo viên hướng dẫn
	 * Work: 
	      - 
		  
	 */
	
	
	function them_baocao($data, $MSSV, $filename) {
		$array = explode('-', $data['MA_LOPHOCPHAN']);
		
		$baocao['TIEUDE'] = $data['TIEUDE'];
		$baocao['NOIDUNG'] = $data['NOIDUNG'];
		$baocao['NGUOIGUI'] = $MSSV;
		$baocao['MA_LOPHOCPHAN'] = $array[0];
		$baocao['STT_NHOM'] = $array[1];
		$baocao['MA_TRANGTHAI'] = 'BC_CHUAXEM';
		$baocao['NGAYGUI'] = $data['NGAYGUI'];
		$baocao['FILEPATH'] = $filename;
		$this->db->insert('baocao', $baocao);
		
	}	
	
	/*
	 * Name: them_congviec()
	 * @author: Thanh Tam
	 * @parameters mảng gồm mã lớp học phần, stt nhóm, các thuộc tính báo cáo
	 * @return: 
			
	 * Purpose: Gửi báo cáo cho giáo viên hướng dẫn
	 * Work: 
	      - 
		  
	 */
	
	
	function them_congviec($data, $MSSV) {
	
		$array_nguoiduocgiao = implode('-', $data['NGUOIDUOCGIAO']);
		$congviec['TEN_CV'] = $data['TEN_CV'];
		$congviec['NGAYBD'] = $data['NGAYBD'];
		$congviec['NGAYKT'] = $data['NGAYKT'];
		$congviec['THOIGIANUL'] = $data['THOIGIANUL'];
		$congviec['MA_MUCDO'] = $data['MA_MUCDO'][0];
		$congviec['MA_TINHCHAT'] = $data['MA_TINHCHAT'][0];
		$congviec['MA_TRANGTHAI'] = $data['MA_TRANGTHAI'][0];
		$congviec['NGUOIDUOCGIAO'] = $array_nguoiduocgiao;
		$congviec['MOTA'] = $data['MOTA'];
		
		$array = explode('-', $data['MA_LOPHOCPHAN']);
		$nhom_dscongviec['MA_LOPHOCPHAN'] = $array[0];
		$nhom_dscongviec['STT_NHOM'] = $array[1];
		$nhom_dscongviec['NGUOITAO'] = $MSSV;
		
		
		//lay ra MA_DSCV từ nhom_congviec
		
		
		$this->db->select('MA_DSCV');
		$this->db->from ('nhom_dscongviec');
		$this->db->where('MA_LOPHOCPHAN', $nhom_dscongviec['MA_LOPHOCPHAN']);
		$this->db->where('STT_NHOM', $nhom_dscongviec['STT_NHOM']);
		$nhom_dscongviec['MA_DSCV'] = $this->db->get()->result_array();
		if (NULL == $nhom_dscongviec['MA_DSCV'])  {
			//Tạo mới danh sách			
			$this->db->select_max('MA_DSCV');
			$this->db->from ('nhom_dscongviec');
			$MAX = $this->db->get()->result_array();
			
			if (NULL == $MAX[0]['MA_DSCV'] ) 
				$nhom_dscongviec['MA_DSCV'] = 1; 
			else 
				$nhom_dscongviec['MA_DSCV'] = intval($MAX[0]['MA_DSCV']) + 1;
		
			$this->db->insert('nhom_dscongviec', $nhom_dscongviec);
		}		
		else 
			$nhom_dscongviec['MA_DSCV'] = $nhom_dscongviec['MA_DSCV'][0]['MA_DSCV'];
		
		$this->db->insert('congviec', $congviec);
		
		$MA_CV = $this->db->insert_id();
		
		$dscongviec['MA_DSCV'] = $nhom_dscongviec['MA_DSCV'];
		$dscongviec['MA_CV'] = $MA_CV;
		
		$this->db->insert('dscongviec', $dscongviec);
		// them trong chitietchinhsuacv: 
		$chitietchinhsuacv['NGUOISUA'] = $MSSV;
		$chitietchinhsuacv['MA_CV'] = $MA_CV;
		$chitietchinhsuacv['THOIGIANSUA'] = date('Y-m-d H:i:s');
		$chitietchinhsuacv['TILEHOANTHANH'] = $data['TILEHOANTHANH'];
		$chitietchinhsuacv['GHICHU'] = 'Tạo công việc';
		$this->db->insert('chitietchinhsuacv', $chitietchinhsuacv);
	}	
		
	/*
	 * Name: sua_congviec()
	 * @author: Thanh Tam
	 * @parameters mảng gồm mã lớp học phần, stt nhóm, các thuộc tính báo cáo
	 * @return: 
			
	 * Purpose: Gửi báo cáo cho giáo viên hướng dẫn
	 * Work: 
	      - 
		  
	 */
	
	
	function sua_congviec($data, $MSSV) {
	
		$array_nguoiduocgiao = implode('-', $data['NGUOIDUOCGIAO']);
		$congviec['TEN_CV'] = $data['TEN_CV'];
		$congviec['NGAYBD'] = $data['NGAYBD'];
		$congviec['NGAYKT'] = $data['NGAYKT'];
		$congviec['THOIGIANUL'] = $data['THOIGIANUL'];
		$congviec['MA_MUCDO'] = $data['MA_MUCDO'][0];
		$congviec['MOTA'] = $data['MOTA'];
		$congviec['MA_TINHCHAT'] = $data['MA_TINHCHAT'][0];
		$congviec['MA_TRANGTHAI'] = $data['MA_TRANGTHAI'][0];
		$congviec['NGUOIDUOCGIAO'] = $array_nguoiduocgiao;
		
		
		$this->db->where('MA_CV', $data['MA_CV']);
		$this->db->update('congviec', $congviec);
		
		
		// them trong chitietchinhsuacv: 
		$chitietchinhsuacv['NGUOISUA'] = $MSSV;
		$chitietchinhsuacv['MA_CV'] = $data['MA_CV'];
		$chitietchinhsuacv['THOIGIANSUA'] = date('Y-m-d H:i:s');
		$chitietchinhsuacv['TILEHOANTHANH'] = $data['TILEHOANTHANH'];
		$chitietchinhsuacv['GHICHU'] = $data['GHICHU'];
		$this->db->insert('chitietchinhsuacv', $chitietchinhsuacv);
	}	
		


	/*
	 * Name: lay_hotensinhvien
	 * @author: Thanh Tam
	 * @parameters MSSV
	 * @return: HOTEN 
			
	 * Purpose: Phục vụ chức năng filter Người được giao là tôi
	 * Work: 
	      - Lấy HOTEN từ tham số đầu vào
		  
	 */
	
	function lay_hotensinhvien($MSSV){
		$this->db->select('HOTEN');
		$this->db->where('MSSV', $MSSV);
		return $this->db->get('sinhvien')->result_array()[0]['HOTEN'];
	}
	
	
	
	//***************************************************
	// Name          	: XoaChiTietThongBaoSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaChiTietThongBaoSV($mssv) {
		$this->db->where('mssv', $mssv);
		$this->db->delete('chitietthongbaosv');
	}
	
	//***************************************************
	// Name          	: XoaChiTietThongBaoGV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaChiTietThongBaoGV($mssv) {
		$this->db->where('nguoinhan', $mssv);
		$this->db->delete('chitietthongbaogv');
	}
	
	
	
	//***************************************************
	// Name          	: XoaChiTietNhom($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaChiTietNhom($mssv) {
		$this->db->where('nhomtruong', $mssv);
		$this->db->delete('chitietnhom');
	}	
	
	//***************************************************
	// Name          	: XoaBaoCao($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaBaoCao($mssv) {
		$this->db->where('nguoigui', $mssv);
		$this->db->delete('baocao');
	}		
	
	
	//***************************************************
	// Name          	: XoaChiTietChinhSuaCV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaChiTietChinhSuaCV($mssv) {
		$this->db->where('nguoisua', $mssv);
		$this->db->delete('chitietchinhsuacv');
	}	
	
	//***************************************************
	// Name          	: XoaNhomDanhSachCV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaNhomDanhSachCV($mssv) {
		$this->db->where('nguoitao', $mssv);
		$this->db->delete('nhom_dscongviec');
	}	
	
	//***************************************************
	// Name          	: XoaDanhSachSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function XoaDanhSachSV($mssv) {
		$this->db->where('mssv', $mssv);
		$this->db->delete('dssinhvien');
	}	
	
	
	//***************************************************
	// Name          	: XoaDanhSachSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function LayLopHocPhanSV($mssv) {
		$result = $this->db->query("SELECT DISTINCT a.MA_LOPHOCPHAN, b.STT_NHOM 
							FROM lophocphan as a, chitietnhom as b, dssinhvien as c
							WHERE a.ma_lophocphan = c.ma_lophocphan AND b.stt_nhom = c.stt_nhom
							AND mssv = '".$mssv."'
							ORDER BY a.ma_lophocphan, b.stt_nhom");
							
		return $result->result_array();
	}	
	
	
	function XoaNguoiDung($username) {
		$this->db->where('username', $username);
		$this->db->delete('nguoidung');
	}
	
	
	function roi_nhom_sv($data, $MSSV) {
		
		
		// đếm sltv trong nhóm
		$count = $this->db->select('SLTV')->get_where('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'],'STT_NHOM'=>$data['STT_NHOM']))->result_array();
		//print_r($count);
		
		// lấy ra mã dscongviec
		$this->db->select('MA_DSCV');
		$this->db->from ('nhom_dscongviec');
		$this->db->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN']);
		$this->db->where('STT_NHOM', $data['STT_NHOM']);
		$MA_DSCV = $this->db->get()->result_array();

		if ($MA_DSCV != NULL) {
			//lấy danh sách các công việc từ mã dscongviec
			$this->db->select('MA_CV');
			$array_tatcaMA_CV = $this->db->get_where('dscongviec', array('MA_DSCV' => $MA_DSCV[0]['MA_DSCV']))->result_array();
			
			
		}
		//
		if (1 == $count[0]['SLTV']) { // nhóm chỉ có 1 người -> xóa nhóm và delete tất cả công việc, báo cáo
			// xóa nhom_dscongviec
				
				$this->db->where(array('MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN'], 'STT_NHOM' => $data['STT_NHOM']));
				$this->db->delete('nhom_dscongviec');
			//    + xóa báo cáo 
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->delete('baocao');

			$this->db->delete('chitietnhom', array('MA_LOPHOCPHAN'=>$data['MA_LOPHOCPHAN'],'STT_NHOM'=>$data['STT_NHOM']));

			//    + xóa congviec và dscongviec, xóa chitietchinhsuacv
			if ($array_tatcaMA_CV != NULL && $MA_DSCV != NULL) {
				//    + xóa xông việc
					$chuoi_MA_CV = array();
					foreach ($array_tatcaMA_CV as $item) {
						array_push($chuoi_MA_CV, $item['MA_CV']);
						
						$this->db->where(array('MA_CV' => $item['MA_CV']));
						$this->db->delete('chitietchinhsuacv');	
					}
					
					$this->db->where(array('MA_DSCV' => $MA_DSCV['MA_DSCV']));
					$this->db->delete('dscongviec');	
		
					$this->db->where_in('MA_CV',  $chuoi_MA_CV);
					$this->db->delete('congviec');	
			}
		}
		
		else { // nhóm có 2+ người -> đặt lại nhóm trưởng và sltv
		 // update SLTV
		 
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('chitietnhom', array('SLTV' => intval($count['SLTV'])- 1) );
			//chon lai NHOMTRUONG
			$thanhvien = $this->db->select('MSSV')->where('STT_NHOM', $data['STT_NHOM'])->where('MA_LOPHOCPHAN', $data['MA_LOPHOCPHAN'])->where('MSSV !=', $data['MSSV'])->get('dssinhvien')->result_array();
			 
			// set người tạo (nhom_dscongviec) là nhóm trưởng mới
			$this->db->where(array('MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN'], 'STT_NHOM' => $data['STT_NHOM']));
			$this->db->update('nhom_dscongviec', array('NGUOITAO' => $thanhvien['MSSV']));
			
			//set nhóm trưởng (chitietnhom) 
			$this->db->where(array('STT_NHOM' => $data['STT_NHOM'], 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('chitietnhom', array('NHOMTRUONG' => $thanhvien['MSSV']));

			if ($array_tatcaMA_CV != NULL) {
			// - Xóa công việc chỉ giao cho người đó
				$chuoi_MA_CV = '0';
				foreach ($array_tatcaMA_CV as $item) {
					$chuoi_MA_CV .= ', '.$item['MA_CV'];
	
				}
				// lấy ra công việc chỉ giao cho người đó
				$cv_duocgiaorieng = $this->db->query ('select MA_CV		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO = '.$MSSV)->result_array();
				if ($cv_duocgiaorieng != NULL){
					$chuoi_cv_duocgiaorieng = '0';
					foreach ($cv_duocgiaorieng as $item) {
						$chuoi_cv_duocgiaorieng .= ', '.$item['MA_CV'];
	
					}
					$this->db->query ('delete from dscongviec		
								   where MA_DSCV = '.$MA_DSCV['MA_DSCV'].' and
									     MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from chitietchinhsuacv		
								   where  MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
					$this->db->query ('delete from congviec		
								   where    MA_CV in ('.$chuoi_cv_duocgiaorieng.')');
				}
			// xóa người đó khỏi ds người đươc giao 
				$cv_duocgiaochung = $this->db->query ('select MA_CV, NGUOIDUOCGIAO		
													  from congviec
													  where MA_CV in ('.$chuoi_MA_CV.') and
															NGUOIDUOCGIAO like "%'.$MSSV.'%"')->result_array();
				
				
				if ($cv_duocgiaochung != NULL){
					foreach ($cv_duocgiaochung as $item) { 
						//với mỗi công việc được giao chung, xóa người đó ra khỏi ds được giao
						$this->db->select('NGUOIDUOCGIAO');
						$nguoiduocgiao = $this->db->get_where('congviec', array('MA_CV' => $item['MA_CV']))->result_array()['NGUOIDUOCGIAO'];
						$array_nguoiduocgiao = array();
						$array_nguoiduocgiao = explode('-', $nguoiduocgiao);
						foreach ($array_nguoiduocgiao as $index => $val){
							if ($val == $MSSV){
								unset($array_nguoiduocgiao[$index]);
							}
						}
						$nguoiduocgiao = '';
						$nguoiduocgiao = implode('-', $array_nguoiduocgiao);
						$this->db->query ('update congviec
										   set NGUOIDUOCGIAO = "'.$nguoiduocgiao.'"
										   where MA_CV = '.$item['MA_CV']);
					}
				}
			}
			
			// đặt lại ngườo gửi báo cáo
			$this->db->where(array('NGUOIGUI' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
			$this->db->update('baocao', array('NGUOIGUI' => $thanhvien['MSSV']));
			
		}
		
		//xoa STT_NHOM trong dssinhvien
		
		$this->db->where(array('MSSV' => $MSSV, 'MA_LOPHOCPHAN' => $data['MA_LOPHOCPHAN']));
		$this->db->update('dssinhvien', array('STT_NHOM' => '0'));
		
	}
	
	//***************************************************
	// Name          	: DanhSachMonHocSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function DanhSachMonHocSV($mssv, $hk, $nh) {
		$result = $this->db->query("SELECT DISTINCT c.MA_MH, c.TEN_MH, c.SOTC, a.STT_NHOM
									FROM dssinhvien as a, lophocphan as b, monhoc as c
									WHERE a.ma_lophocphan = b.ma_lophocphan AND b.ma_mh = c.ma_mh
									AND mssv = '".$mssv."' AND b.ma_hk = '".$hk."' AND b.ma_nh = '".$nh."' ORDER BY c.MA_MH");
							
		return $result->result_array();
	}
	
	//***************************************************
	// Name          	: DanhSachMonHocSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************
	function CongViecMoiCapNhat($mssv, $hk, $nh) {
		$result = $this->db->query("SELECT DISTINCT c.MA_CV, c.TEN_CV, max(b.tilehoanthanh) as HOANTHANH, b.THOIGIANSUA, b.GHICHU
									FROM sinhvien as a, chitietchinhsuacv as b, congviec as c, dscongviec as d, nhom_dscongviec as e, lophocphan as f
									WHERE a.mssv = b.nguoisua and b.ma_cv = c.ma_cv
									and a.mssv = '".$mssv."' AND c.ma_cv = d.ma_cv AND d.ma_dscv = e.ma_dscv AND e.ma_lophocphan = f.ma_lophocphan
									GROUP BY c.ma_cv
									ORDER BY b.thoigiansua
									LIMIT 0,10");
							
		return $result->result_array();
	}	
	
	
	//***************************************************
	// Name          	: DanhSachMonHocSV($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************	
	function XemChiTietCongViec($MA_CV) {
		$query = $this -> db -> query("SELECT DISTINCT b.TILEHOANTHANH AS HOANTHANH, d.HOTEN, b.THOIGIANSUA, a.MA_CV, b.GHICHU
										FROM congviec as a, chitietchinhsuacv as b, sinhvien as d
										WHERE a.ma_cv = b.ma_cv AND b.nguoisua = d.mssv and
											  a.ma_cv = '".$MA_CV."'
									   ORDER BY b.TILEHOANTHANH");
		return $query -> result();
	}
	
	//***************************************************
	// Name          	: DanhSachNhomThamGia($mssv)
	// Param         	: none
	// Global variable	: none
	// Local variable 	: none
	// return           : none
	//***************************************************		
	function DanhSachNhomThamGia($mssv, $hk, $nh) {
		$query = $this->db->query("SELECT DISTINCT a.SLTV, a.DETAI, b.STT_NHOM , c.MA_MH, c.MA_HK, d.TEN_MH
									FROM chitietnhom AS a, dssinhvien AS b, lophocphan AS c, monhoc as d
									WHERE a.stt_nhom = b.stt_nhom
									AND b.ma_lophocphan = c.ma_lophocphan
									AND c.ma_mh = d.ma_mh
									AND b.mssv =  '".$mssv."'
									AND c.ma_nh =  '".$nh."'
									AND c.ma_hk = ".$hk."");
		return $query->result_array();
	}
	
}