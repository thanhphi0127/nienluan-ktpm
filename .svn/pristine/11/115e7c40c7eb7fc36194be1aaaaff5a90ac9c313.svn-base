<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdiendan extends CI_Model{
	public function __construct() {
		parent::__construct();
        $this->load->database();
	}
    
    public function newTopic() {
        $query = $this->db->query("(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `sinhvien` as d) 
							WHERE `c`.`username` = a.username and c.username = d.mssv and c.ma_quyen = 3
							AND `a`.trangthai = 'Đang thảo luận')
							UNION
							(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `giangvien` as d) 
							WHERE `c`.`username` = a.username and c.username = d.mscb and c.ma_quyen IN(1,2)
							AND `a`.trangthai = 'Đang thảo luận') ORDER BY ngaytao desc LIMIT 5");
						
		return $query->result();
    }
    
    public function listTopic() {
        $query = $this->db->query("(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `sinhvien` as d) 
							WHERE `c`.`username` = a.username and c.username = d.mssv and c.ma_quyen = 3)
							UNION
							(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `giangvien` as d) 
							WHERE `c`.`username` = a.username and c.username = d.mscb and c.ma_quyen IN(1,2))");
						
		return $query->result();
    }
    
    public function saveTopic($add) {
        $this->db->insert('chude', $add);
    }
    
    public function updateTopic($modify, $ma_chude) {
		$this->db->where('ma_chude', $ma_chude);
        $result = $this->db->update('chude', $modify);
		return $result;
    }
	
	public function deleteTopic($ma_chude) {
		$this->db->where('ma_chude', $ma_chude);
		$this->db->delete('chude');
	}
	
	public function deleteBinhLuan($ma_chude) {
		$this->db->where('ma_chude', $ma_chude);
		$this->db->delete('binhluan');
	}	
	public function trans_to_xemchude($ma_chude) {
		$query = $this->db->query("(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `sinhvien` as d) 
							WHERE a.ma_chude = ".$ma_chude." and `c`.`username` = a.username and c.username = d.mssv and c.ma_quyen = 3)
							UNION
							(SELECT DISTINCT `a`.`ma_chude`, `a`.`trangthai`, `a`.`ngaytao`, `a`.`username`, `a`.`tieude`, `a`.`noidung`, `d`.`hoten`
							FROM (`chude` as a, `nguoidung` as c, `giangvien` as d) 
							WHERE a.ma_chude = ".$ma_chude." and `c`.`username` = a.username and c.username = d.mscb and c.ma_quyen IN(1,2))");
						
		return $query->result();
	}
	
	public function addComment($add) {
		$this->db->insert('binhluan', $add);
	}

	public function ThongTinChuDe($ma_chude) {
		$this->db->select('tieude, noidung')
				 ->from('chude')
				 ->where('ma_chude = ', $ma_chude);
		$query = $this->db->get();
		return $query->result();
	}

	
	public function dsBinhLuan($ma_chude) {
		$query = $this->db->query("(SELECT DISTINCT `a`.`thoigian`, `a`.`username`, `b`.`tieude`, `a`.`noidung`, d.hoten
							FROM (`binhluan` as a, `chude` as b, `nguoidung` as c, `sinhvien` as d) 
							WHERE `a`.`ma_chude` = b.ma_chude and a.ma_chude = ".$ma_chude." AND `c`.`username` = a.username and c.username = d.mssv and c.ma_quyen = 3)
							UNION
							(SELECT DISTINCT `a`.`thoigian`, `a`.`username`, `b`.`tieude`, `a`.`noidung`, d.hoten
							FROM (`binhluan` as a, `chude` as b, `nguoidung` as c, `giangvien` as d) 
							WHERE `a`.`ma_chude` = b.ma_chude and a.ma_chude = ".$ma_chude." AND `c`.`username` = a.username and c.username = d.mscb and c.ma_quyen IN(1,2))  ORDER BY thoigian");
							
		return $query->result();
	}
	
	
	/*
	
	SELECT DISTINCT  `b`.`tieude`, `a`.`thoigian`, `a`.`noidung`, (e.`hoten` + "" + d.hoten) as hoten
FROM (`binhluan` as a, `chude` as b, `nguoidung` as c, `sinhvien` as d, giangvien as e) 
WHERE `a`.`ma_chude` = b.ma_chude and a.ma_chude = 2 AND `c`.`username` = a.username and ((c.username = d.mssv and c.ma_quyen = 1) or (c.username = e.mscb and c.ma_quyen IN(1,2)))
ORDER BY `a`.`thoigian`
*/
	
}