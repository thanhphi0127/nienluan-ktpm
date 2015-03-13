-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 06:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cit_quanlynhom`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE IF NOT EXISTS `baocao` (
`MA_BC` int(11) NOT NULL,
  `TIEUDE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci,
  `NGUOIGUI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYGUI` datetime NOT NULL,
  `FILEPATH` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `USERNAME` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_CHUDE` int(11) NOT NULL,
  `THOIGIAN` datetime NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE IF NOT EXISTS `bomon` (
  `MA_BM` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_BM` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`MA_BM`, `TEN_BM`, `MOTA`) VALUES
('95', 'Hệ thống thông tin', NULL),
('96', 'Công nghệ phần mềm', NULL),
('97', 'Mạng máy tính', NULL),
('Z6', 'Khoa học máy tính', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitietchinhsuacv`
--

CREATE TABLE IF NOT EXISTS `chitietchinhsuacv` (
  `NGUOISUA` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_CV` int(11) NOT NULL,
  `THOIGIANSUA` datetime NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci,
  `TILEHOANTHANH` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietchinhsuacv`
--

INSERT INTO `chitietchinhsuacv` (`NGUOISUA`, `MA_CV`, `THOIGIANSUA`, `GHICHU`, `TILEHOANTHANH`) VALUES
('1111336', 1, '2014-10-21 00:00:00', '', '0'),
('1111336', 2, '2014-10-21 00:00:00', '', '40');

-- --------------------------------------------------------

--
-- Table structure for table `chitietnhom`
--

CREATE TABLE IF NOT EXISTS `chitietnhom` (
  `NHOMTRUONG` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DETAI` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SLTV` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietnhom`
--

INSERT INTO `chitietnhom` (`NHOMTRUONG`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MOTA`, `DETAI`, `SLTV`) VALUES
('1111325', 1, '1', '', '', '1'),
('1111336', 1, '2', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaogv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaogv` (
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TB` int(11) NOT NULL,
  `NGAYTB` datetime NOT NULL,
  `NGUOINHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
`MA_CTTBGV` int(11) NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chitietthongbaogv`
--

INSERT INTO `chitietthongbaogv` (`MSCB`, `MA_TB`, `NGAYTB`, `NGUOINHAN`, `MA_CTTBGV`, `MA_TRANGTHAI`) VALUES
('1111', 3, '2014-10-02 00:00:00', '1111336', 1, 'TB_CHUAXEM');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaosv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaosv` (
  `MSSV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
`MA_CTTBSV` int(11) NOT NULL,
  `MA_TB` int(11) NOT NULL,
  `NGUOINHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYTB` datetime NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chitietthongbaosv`
--

INSERT INTO `chitietthongbaosv` (`MSSV`, `MA_CTTBSV`, `MA_TB`, `NGUOINHAN`, `NGAYTB`, `MA_TRANGTHAI`) VALUES
('1111333', 1, 4, '1111336', '2014-10-08 00:00:00', 'TB_CHUAXEM');

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE IF NOT EXISTS `chude` (
`MA_CHUDE` int(11) NOT NULL,
  `USERNAME` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TIEUDE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYTAO` datetime NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE IF NOT EXISTS `congviec` (
`MA_CV` int(11) NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_MUCDO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TINHCHAT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_CV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYBD` datetime NOT NULL,
  `NGAYKT` datetime NOT NULL,
  `THOIGIANUL` decimal(2,0) DEFAULT NULL,
  `NGUOIDUOCGIAO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`MA_CV`, `MA_TRANGTHAI`, `MA_MUCDO`, `MA_TINHCHAT`, `TEN_CV`, `NGAYBD`, `NGAYKT`, `THOIGIANUL`, `NGUOIDUOCGIAO`, `MOTA`) VALUES
(1, 'CV_MO', '2', 'NV', 'dfef', '2014-10-21 00:00:00', '2014-10-24 00:00:00', '0', '1111336', ''),
(2, 'CV_MO', '2', 'NV', 'efefe', '2014-10-21 00:00:00', '2014-10-24 00:00:00', '0', '1111336', '');

-- --------------------------------------------------------

--
-- Table structure for table `dscongviec`
--

CREATE TABLE IF NOT EXISTS `dscongviec` (
  `MA_DSCV` int(11) NOT NULL,
  `MA_CV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dscongviec`
--

INSERT INTO `dscongviec` (`MA_DSCV`, `MA_CV`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dsgiangvien`
--

CREATE TABLE IF NOT EXISTS `dsgiangvien` (
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dsgiangvien`
--

INSERT INTO `dsgiangvien` (`MSCB`, `MA_LOPHOCPHAN`) VALUES
('1111', 1),
('1111', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dssinhvien`
--

CREATE TABLE IF NOT EXISTS `dssinhvien` (
  `MSSV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dssinhvien`
--

INSERT INTO `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`) VALUES
('1101622', 1, '0'),
('1111325', 1, '1'),
('1111333', 1, '0'),
('1111336', 1, '2'),
('1111336', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_BM` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TD` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` decimal(11,0) DEFAULT NULL,
  `MAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MSCB`, `MA_BM`, `MA_TD`, `HOTEN`, `GIOITINH`, `SDT`, `MAIL`, `NGAYSINH`, `DIACHI`) VALUES
('1111', '96', 'TS', 'Võ Huỳnh Trâm', 'nữ', '911111111', 'vhtram@cit.ctu.edu.vn', '1978-02-02', 'tp Cần Thơ'),
('1211', '97', 'GVC', 'Phạm Thị Xuân Diễm', 'nữ', '922222222', 'ptxdiem@cit.ctu.edu.vn', '1983-02-02', 'tp Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `hocki`
--

CREATE TABLE IF NOT EXISTS `hocki` (
  `MA_HK` decimal(1,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocki`
--

INSERT INTO `hocki` (`MA_HK`) VALUES
('1'),
('2'),
('3');

-- --------------------------------------------------------

--
-- Table structure for table `lophocphan`
--

CREATE TABLE IF NOT EXISTS `lophocphan` (
`MA_LOPHOCPHAN` int(11) NOT NULL,
  `MA_MAUNHOM` int(11) DEFAULT NULL,
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_HK` decimal(1,0) NOT NULL,
  `MA_NH` decimal(4,0) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lophocphan`
--

INSERT INTO `lophocphan` (`MA_LOPHOCPHAN`, `MA_MAUNHOM`, `MA_MH`, `MA_HK`, `MA_NH`) VALUES
(1, 1, 'CT103', '1', '2014'),
(2, 2, 'CT104', '1', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `maunhom`
--

CREATE TABLE IF NOT EXISTS `maunhom` (
`MA_MAUNHOM` int(11) NOT NULL,
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLN_TOIDA` decimal(2,0) NOT NULL,
  `SLTV_TOIDA` decimal(2,0) NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maunhom`
--

INSERT INTO `maunhom` (`MA_MAUNHOM`, `MA_MH`, `MSCB`, `SLN_TOIDA`, `SLTV_TOIDA`, `MOTA`) VALUES
(1, 'CT103', '1111', '20', '2', NULL),
(2, 'CT104', '1111', '20', '3', NULL),
(3, 'CT107', '1211', '30', '20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_MH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `SOTC` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MA_MH`, `TEN_MH`, `SOTC`) VALUES
('﻿CT102', 'Toán rời rạc 1', '3'),
('CT103', 'Cấu trúc dữ liệu', '4'),
('CT104', 'Kiến trúc máy tính', '2'),
('CT106', 'Hệ cơ sở dữ liệu', '4'),
('CT107', 'Hệ điều hành', '3'),
('CT109', 'Phân tích & thiết kế hệ thống T.Tin', '3'),
('CT110', 'Hệ quản trị cơ sở dữ liệu', '2'),
('CT112', 'Mạng máy tính', '3'),
('CT113', 'Nhập môn công nghệ phần mềm', '2'),
('CT114', 'Lập trình hướng đối tượng C++', '3'),
('CT115', 'Chuyên đề  ngôn ngữ  lập trình 1', '2'),
('CT116', 'Chuyên đề  ngôn ngữ  lập trình 2', '2'),
('CT117', 'Chuyên đề  ngôn ngữ  lập trình 3', '2'),
('CT118', 'Anh văn chuyên môn - Tin học', '2'),
('CT119', 'Toán rời rạc 2', '3'),
('CT120', 'Phân tích & thiết kế thuật toán', '2'),
('CT121', 'Tin học lý thuyết', '3'),
('CT123', 'Quy hoạch tuyến tính – CNTT', '2'),
('CT124', 'Phương pháp tính – CNTT', '2'),
('CT125', 'Mô phỏng', '2'),
('CT126', 'Lý thuyết xếp hàng', '2'),
('CT127', 'Lý thuyết thông tin', '2'),
('CT128', 'Kỹ thuật đồ hoạ - CNTT', '2'),
('CT165', 'Ngôn ngữ mô hình hóa UML', '3'),
('CT302', 'Phát triển phần mềm mã nguồn mở', '2'),
('CT303', 'Phát triển hệ thống thông tin', '3'),
('CT304', 'Giao diện người – máy', '2'),
('CT309', 'Quản lý dự án tin học', '2'),
('CT311', 'Phương pháp NCKH', '2'),
('CT312', 'Khai khoáng dữ liệu', '3'),
('CT316', 'Xử lý ảnh', '3'),
('CT317', 'Lập trình nhúng cơ bản', '3'),
('CT323', 'Chuyên đề về một hệ quản trị CSDL', '2'),
('CT324', 'Phân tích yêu cầu phần mềm', '2'),
('CT325', 'Thiết kế phần mềm', '3'),
('CT326', 'Kiểm thử phần mềm', '2'),
('CT327', 'Đảm bảo chất lượng phần mềm', '2'),
('CT328', 'Bảo trì phần mềm', '2'),
('CT329', 'Lập trình cho các thiết bị di động', '2'),
('CT330', 'Hệ thống Multi-Agent', '2'),
('CT331', 'Phát triển phần mềm hướng ĐT', '3'),
('CT332', 'Trí tuệ nhân tạo', '3'),
('CT349', 'Thương mại điện tử -CNTT', '2'),
('CT358', 'Luận văn tốt nghiệp - Tin học', '10'),
('CT414', 'Trình biên dịch', '3'),
('CT428', 'Lập trình Web', '3'),
('CT429', 'Thực tập thực tế - Tin học', '2'),
('CT434', 'An toàn hệ thống & an ninh mạng', '3'),
('CT438', 'Niên luận Kỹ thuật phần mềm', '3'),
('KT003', 'Kế toán đại cương', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mucdo`
--

CREATE TABLE IF NOT EXISTS `mucdo` (
  `MA_MUCDO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_MUCDO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mucdo`
--

INSERT INTO `mucdo` (`MA_MUCDO`, `TEN_MUCDO`) VALUES
('1', 'Không quan trọng'),
('2', 'Bình thường'),
('3', 'Quan trọng');

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

CREATE TABLE IF NOT EXISTS `namhoc` (
  `MA_NH` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MA_NH`) VALUES
('2013'),
('2014'),
('2015');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE IF NOT EXISTS `nganh` (
  `MA_NGANH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_BM` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_NGANH` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MA_NGANH`, `MA_BM`, `TEN_NGANH`, `MOTA`) VALUES
('11', '96', 'Kỹ thuật phần mềm', NULL),
('12', '95', 'Hệ thống thông tin', NULL),
('13', '97', 'Mạng máy tính và tru', NULL),
('14', 'Z6', 'Khoa học máy tính', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `USERNAME` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_QUYEN` int(11) NOT NULL,
  `PASSWORD` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`USERNAME`, `MA_QUYEN`, `PASSWORD`) VALUES
('1101622', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1111325', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111333', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111336', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1211', 1, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_dscongviec`
--

CREATE TABLE IF NOT EXISTS `nhom_dscongviec` (
  `NGUOITAO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MA_CV` int(11) DEFAULT NULL,
  `MA_DSCV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhom_dscongviec`
--

INSERT INTO `nhom_dscongviec` (`NGUOITAO`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MA_CV`, `MA_DSCV`) VALUES
('1111325', 1, '1', NULL, 1),
('1111336', 1, '2', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `MA_QUYEN` int(11) NOT NULL,
  `TENQUYEN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MA_QUYEN`, `TENQUYEN`, `MOTA`) VALUES
(1, 'admin', NULL),
(2, 'giangvien', NULL),
(3, 'sinhvien', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `MSSV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_NGANH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` decimal(11,0) DEFAULT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `KHOAHOC` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `MA_NGANH`, `HOTEN`, `GIOITINH`, `SDT`, `DIACHI`, `MAIL`, `NGAYSINH`, `KHOAHOC`) VALUES
('1101622', '12', 'Trịnh Sa Lem', 'nam', '84389', '49389', 'rr', '2014-10-14', '4'),
('1111325', '11', 'Nguyễn Thanh Phi', 'nam', '999', 'e', 'w', '2014-10-15', '37'),
('1111333', '11', 'Huỳnh Thanh Nhã', 'nữ', '0', 'r34', 'rer', '2014-10-15', '3'),
('1111336', '11', 'Nguyễn Vương Thành Tâm', 'nam', '96833', '2e', 'ded', '2014-10-09', '37');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE IF NOT EXISTS `thongbao` (
`MA_TB` int(11) NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL,
  `TIEUDE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`MA_TB`, `NOIDUNG`, `TIEUDE`) VALUES
(3, 'wdw', 'dwdwdwdwdwdwd'),
(4, 'dwdw', 'dwdwdwd');

-- --------------------------------------------------------

--
-- Table structure for table `tinhchat`
--

CREATE TABLE IF NOT EXISTS `tinhchat` (
  `MA_TINHCHAT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TINHCHAT` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhchat`
--

INSERT INTO `tinhchat` (`MA_TINHCHAT`, `TEN_TINHCHAT`) VALUES
('KK', 'Khó khăn'),
('NV', 'Nhiệm vụ');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE IF NOT EXISTS `trangthai` (
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TRANGTHAI` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`MA_TRANGTHAI`, `TEN_TRANGTHAI`) VALUES
('BC_CHUAXEM', 'Chưa xem'),
('BC_DAXEM', 'Đã xem'),
('CD_DADUYET', 'Đã duyệt'),
('CD_KDUYET', 'Chưa duyệt'),
('CV_DONG', 'Đóng'),
('CV_MO', 'Mở'),
('CV_TRONG', 'Trong tiến trình'),
('TB_CHUAXEM', 'Chưa xem'),
('TB_DAXEM', 'Đã xem');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdo`
--

CREATE TABLE IF NOT EXISTS `trinhdo` (
  `MA_TD` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TD` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trinhdo`
--

INSERT INTO `trinhdo` (`MA_TD`, `TEN_TD`) VALUES
('GV', 'Giảng viên'),
('GVC', 'Giảng viên chính'),
('THS', 'Thạc sĩ'),
('TRG', 'Trợ giảng'),
('TS', 'Tiến sĩ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
 ADD PRIMARY KEY (`MA_BC`,`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD UNIQUE KEY `MA_BC` (`MA_BC`), ADD UNIQUE KEY `BAOCAO_PK` (`MA_BC`,`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD KEY `BAOCAO_NHOM_FK` (`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD KEY `BAOCAO_TRANGTHAI_FK` (`MA_TRANGTHAI`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
 ADD PRIMARY KEY (`USERNAME`,`THOIGIAN`), ADD UNIQUE KEY `BINHLUAN_PK` (`USERNAME`,`THOIGIAN`), ADD KEY `THUOC_CHUDE_FK` (`MA_CHUDE`), ADD KEY `DO_FK` (`USERNAME`);

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
 ADD PRIMARY KEY (`MA_BM`), ADD UNIQUE KEY `BOMON_PK` (`MA_BM`);

--
-- Indexes for table `chitietchinhsuacv`
--
ALTER TABLE `chitietchinhsuacv`
 ADD PRIMARY KEY (`NGUOISUA`,`MA_CV`,`THOIGIANSUA`), ADD UNIQUE KEY `CHITIETCHINHSUACV_PK` (`NGUOISUA`,`MA_CV`,`THOIGIANSUA`), ADD KEY `SUA_CONGVIEC_FK` (`MA_CV`), ADD KEY `SINHVIEN_SUA_FK` (`NGUOISUA`);

--
-- Indexes for table `chitietnhom`
--
ALTER TABLE `chitietnhom`
 ADD PRIMARY KEY (`NHOMTRUONG`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD UNIQUE KEY `CHITIETNHOM_PK` (`NHOMTRUONG`,`MA_LOPHOCPHAN`,`STT_NHOM`);

--
-- Indexes for table `chitietthongbaogv`
--
ALTER TABLE `chitietthongbaogv`
 ADD PRIMARY KEY (`MA_CTTBGV`), ADD UNIQUE KEY `CHITIETTHONGBAOGV_PK` (`MSCB`,`MA_TB`,`NGAYTB`), ADD KEY `CO_NGUOINHAN_FK` (`NGUOINHAN`), ADD KEY `CTTBGV_CO_THONGBAO_FK` (`MA_TB`), ADD KEY `GIANGVIEN_GUI_FK` (`MSCB`), ADD KEY `FK_THONGBAO2_THONGBAO__TRANGTHA` (`MA_TRANGTHAI`);

--
-- Indexes for table `chitietthongbaosv`
--
ALTER TABLE `chitietthongbaosv`
 ADD PRIMARY KEY (`MA_CTTBSV`), ADD UNIQUE KEY `CHITIETTHONGBAOSV_PK` (`MSSV`,`MA_TB`), ADD KEY `CTTBSV_CO_THONGBAO_FK` (`MA_TB`), ADD KEY `SINHVIEN_GUI_FK` (`MSSV`), ADD KEY `CO__NGUOINHAN_FK` (`NGUOINHAN`), ADD KEY `FK_THONGBAO_THONGBAO__TRANGTHA` (`MA_TRANGTHAI`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
 ADD PRIMARY KEY (`MA_CHUDE`), ADD UNIQUE KEY `MA_CHUDE` (`MA_CHUDE`), ADD UNIQUE KEY `CHUDE_PK` (`MA_CHUDE`), ADD KEY `TAOBOI_FK` (`USERNAME`), ADD KEY `CHUDE_TRANGTHAI_FK` (`MA_TRANGTHAI`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
 ADD PRIMARY KEY (`MA_CV`), ADD UNIQUE KEY `MA_CV` (`MA_CV`), ADD UNIQUE KEY `CONGVIEC_PK` (`MA_CV`), ADD KEY `CONGVIEC_TRANGTHAI_FK` (`MA_TRANGTHAI`), ADD KEY `CONGVIEC_MUCDO_FK` (`MA_MUCDO`), ADD KEY `CONGVIEC_TINHCHAT_FK` (`MA_TINHCHAT`);

--
-- Indexes for table `dscongviec`
--
ALTER TABLE `dscongviec`
 ADD PRIMARY KEY (`MA_CV`,`MA_DSCV`), ADD UNIQUE KEY `DSCONGVIEC_PK` (`MA_CV`,`MA_DSCV`), ADD KEY `GOM_CONGVIEC_FK` (`MA_CV`);

--
-- Indexes for table `dsgiangvien`
--
ALTER TABLE `dsgiangvien`
 ADD PRIMARY KEY (`MSCB`,`MA_LOPHOCPHAN`), ADD UNIQUE KEY `DSGIANGVIEN_PK` (`MSCB`,`MA_LOPHOCPHAN`), ADD KEY `THUOC_DSGIANGVIEN_FK` (`MSCB`), ADD KEY `DAY_LOPHOCPHAN_FK` (`MA_LOPHOCPHAN`);

--
-- Indexes for table `dssinhvien`
--
ALTER TABLE `dssinhvien`
 ADD PRIMARY KEY (`MSSV`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD UNIQUE KEY `DSSINHVIEN_PK` (`MSSV`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD KEY `DANGKI_LOPHOCPHAN_FK` (`MA_LOPHOCPHAN`), ADD KEY `THUOC_DSSINHVIEN_FK` (`MSSV`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
 ADD PRIMARY KEY (`MSCB`), ADD UNIQUE KEY `GIANGVIEN_PK` (`MSCB`), ADD KEY `GIANGVIEN_BOMON_FK` (`MA_BM`), ADD KEY `CO_TRINHDO_FK` (`MA_TD`);

--
-- Indexes for table `hocki`
--
ALTER TABLE `hocki`
 ADD PRIMARY KEY (`MA_HK`), ADD UNIQUE KEY `HOCKI_PK` (`MA_HK`);

--
-- Indexes for table `lophocphan`
--
ALTER TABLE `lophocphan`
 ADD PRIMARY KEY (`MA_LOPHOCPHAN`), ADD UNIQUE KEY `MA_LOPHOCPHAN` (`MA_LOPHOCPHAN`), ADD UNIQUE KEY `LOPHOCPHAN_PK` (`MA_LOPHOCPHAN`), ADD KEY `CO_MAUNHOM_FK` (`MA_MAUNHOM`), ADD KEY `GOM_MONHOC_FK` (`MA_MH`), ADD KEY `TRONG_HOCKI_FK` (`MA_HK`), ADD KEY `TRONG_NAMHOC_FK` (`MA_NH`);

--
-- Indexes for table `maunhom`
--
ALTER TABLE `maunhom`
 ADD PRIMARY KEY (`MA_MAUNHOM`), ADD UNIQUE KEY `MA_MAUNHOM` (`MA_MAUNHOM`), ADD UNIQUE KEY `MAUNHOM_PK` (`MA_MAUNHOM`), ADD KEY `TAO_FK` (`MSCB`), ADD KEY `CHO_FK` (`MA_MH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
 ADD PRIMARY KEY (`MA_MH`), ADD UNIQUE KEY `MONHOC_PK` (`MA_MH`);

--
-- Indexes for table `mucdo`
--
ALTER TABLE `mucdo`
 ADD PRIMARY KEY (`MA_MUCDO`), ADD UNIQUE KEY `MUCDO_PK` (`MA_MUCDO`);

--
-- Indexes for table `namhoc`
--
ALTER TABLE `namhoc`
 ADD PRIMARY KEY (`MA_NH`), ADD UNIQUE KEY `NAMHOC_PK` (`MA_NH`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
 ADD PRIMARY KEY (`MA_NGANH`), ADD UNIQUE KEY `NGANH_PK` (`MA_NGANH`), ADD KEY `NGANH_BOMON_FK` (`MA_BM`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
 ADD PRIMARY KEY (`USERNAME`), ADD UNIQUE KEY `NGUOIDUNG_PK` (`USERNAME`), ADD KEY `QUYEN_NGUOIDUNG_FK` (`MA_QUYEN`);

--
-- Indexes for table `nhom_dscongviec`
--
ALTER TABLE `nhom_dscongviec`
 ADD PRIMARY KEY (`NGUOITAO`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD UNIQUE KEY `NHOM_DSCONGVIEC_PK` (`NGUOITAO`,`MA_LOPHOCPHAN`,`STT_NHOM`), ADD KEY `CO_DSCONGVIEC_FK` (`MA_CV`,`MA_DSCV`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
 ADD PRIMARY KEY (`MA_QUYEN`), ADD UNIQUE KEY `QUYEN_PK` (`MA_QUYEN`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
 ADD PRIMARY KEY (`MSSV`), ADD UNIQUE KEY `SINHVIEN_PK` (`MSSV`), ADD KEY `SINHVIEN_NGANH_FK` (`MA_NGANH`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
 ADD PRIMARY KEY (`MA_TB`), ADD UNIQUE KEY `MA_TB` (`MA_TB`), ADD UNIQUE KEY `THONGBAO_PK` (`MA_TB`);

--
-- Indexes for table `tinhchat`
--
ALTER TABLE `tinhchat`
 ADD PRIMARY KEY (`MA_TINHCHAT`), ADD UNIQUE KEY `TINHCHAT_PK` (`MA_TINHCHAT`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
 ADD PRIMARY KEY (`MA_TRANGTHAI`), ADD UNIQUE KEY `TRANGTHAI_PK` (`MA_TRANGTHAI`);

--
-- Indexes for table `trinhdo`
--
ALTER TABLE `trinhdo`
 ADD PRIMARY KEY (`MA_TD`), ADD UNIQUE KEY `TRINHDO_PK` (`MA_TD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baocao`
--
ALTER TABLE `baocao`
MODIFY `MA_BC` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chitietthongbaogv`
--
ALTER TABLE `chitietthongbaogv`
MODIFY `MA_CTTBGV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chitietthongbaosv`
--
ALTER TABLE `chitietthongbaosv`
MODIFY `MA_CTTBSV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
MODIFY `MA_CHUDE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
MODIFY `MA_CV` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lophocphan`
--
ALTER TABLE `lophocphan`
MODIFY `MA_LOPHOCPHAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `maunhom`
--
ALTER TABLE `maunhom`
MODIFY `MA_MAUNHOM` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
MODIFY `MA_TB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
ADD CONSTRAINT `FK_BAOCAO_BAOCAO_NH_DSSINHVI` FOREIGN KEY (`NGUOIGUI`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`),
ADD CONSTRAINT `FK_BAOCAO_BAOCAO_TR_TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
ADD CONSTRAINT `FK_BINHLUAN_DO_NGUOIDUN` FOREIGN KEY (`USERNAME`) REFERENCES `nguoidung` (`USERNAME`),
ADD CONSTRAINT `FK_BINHLUAN_THUOC_CHU_CHUDE` FOREIGN KEY (`MA_CHUDE`) REFERENCES `chude` (`MA_CHUDE`);

--
-- Constraints for table `chitietchinhsuacv`
--
ALTER TABLE `chitietchinhsuacv`
ADD CONSTRAINT `FK_CHITIETC_SINHVIEN__SINHVIEN` FOREIGN KEY (`NGUOISUA`) REFERENCES `sinhvien` (`MSSV`),
ADD CONSTRAINT `FK_CHITIETC_SUA_CONGV_CONGVIEC` FOREIGN KEY (`MA_CV`) REFERENCES `congviec` (`MA_CV`);

--
-- Constraints for table `chitietnhom`
--
ALTER TABLE `chitietnhom`
ADD CONSTRAINT `FK_CHITIETN_CO_CHITIE_DSSINHVI` FOREIGN KEY (`NHOMTRUONG`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`);

--
-- Constraints for table `chitietthongbaogv`
--
ALTER TABLE `chitietthongbaogv`
ADD CONSTRAINT `FK_CHITIETT_CO_NGUOIN_NGUOIDUN` FOREIGN KEY (`NGUOINHAN`) REFERENCES `nguoidung` (`USERNAME`),
ADD CONSTRAINT `FK_CHITIETT_CTTBGV_CO_THONGBAO` FOREIGN KEY (`MA_TB`) REFERENCES `thongbao` (`MA_TB`),
ADD CONSTRAINT `FK_CHITIETT_GIANGVIEN_GIANGVIE` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`),
ADD CONSTRAINT `FK_THONGBAO2_THONGBAO__TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

--
-- Constraints for table `chitietthongbaosv`
--
ALTER TABLE `chitietthongbaosv`
ADD CONSTRAINT `FK_CHITIETT_CO__NGUOI_NGUOIDUN` FOREIGN KEY (`NGUOINHAN`) REFERENCES `nguoidung` (`USERNAME`),
ADD CONSTRAINT `FK_CHITIETT_CTTBSV_CO_THONGBAO` FOREIGN KEY (`MA_TB`) REFERENCES `thongbao` (`MA_TB`),
ADD CONSTRAINT `FK_CHITIETT_SINHVIEN__SINHVIEN` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`),
ADD CONSTRAINT `FK_THONGBAO_THONGBAO__TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

--
-- Constraints for table `chude`
--
ALTER TABLE `chude`
ADD CONSTRAINT `FK_CHUDE_CHUDE_TRA_TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`),
ADD CONSTRAINT `FK_CHUDE_TAOBOI_NGUOIDUN` FOREIGN KEY (`USERNAME`) REFERENCES `nguoidung` (`USERNAME`);

--
-- Constraints for table `congviec`
--
ALTER TABLE `congviec`
ADD CONSTRAINT `FK_CONGVIEC_CONGVIEC__MUCDO` FOREIGN KEY (`MA_MUCDO`) REFERENCES `mucdo` (`MA_MUCDO`),
ADD CONSTRAINT `FK_CONGVIEC_CONGVIEC__TINHCHAT` FOREIGN KEY (`MA_TINHCHAT`) REFERENCES `tinhchat` (`MA_TINHCHAT`),
ADD CONSTRAINT `FK_CONGVIEC_CONGVIEC__TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

--
-- Constraints for table `dscongviec`
--
ALTER TABLE `dscongviec`
ADD CONSTRAINT `FK_DSCONGVI_GOM_CONGV_CONGVIEC` FOREIGN KEY (`MA_CV`) REFERENCES `congviec` (`MA_CV`);

--
-- Constraints for table `dsgiangvien`
--
ALTER TABLE `dsgiangvien`
ADD CONSTRAINT `FK_DSGIANGV_DAY_LOPHO_LOPHOCPH` FOREIGN KEY (`MA_LOPHOCPHAN`) REFERENCES `lophocphan` (`MA_LOPHOCPHAN`),
ADD CONSTRAINT `FK_DSGIANGV_THUOC_DSG_GIANGVIE` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`);

--
-- Constraints for table `dssinhvien`
--
ALTER TABLE `dssinhvien`
ADD CONSTRAINT `FK_DSSINHVI_DANGKI_LO_LOPHOCPH` FOREIGN KEY (`MA_LOPHOCPHAN`) REFERENCES `lophocphan` (`MA_LOPHOCPHAN`),
ADD CONSTRAINT `FK_DSSINHVI_THUOC_DSS_SINHVIEN` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
ADD CONSTRAINT `FK_GIANGVIE_CO_TRINHD_TRINHDO` FOREIGN KEY (`MA_TD`) REFERENCES `trinhdo` (`MA_TD`),
ADD CONSTRAINT `FK_GIANGVIE_GIANGVIEN_BOMON` FOREIGN KEY (`MA_BM`) REFERENCES `bomon` (`MA_BM`),
ADD CONSTRAINT `FK_GIANGVIE_GIANGVIEN_NGUOIDUN` FOREIGN KEY (`MSCB`) REFERENCES `nguoidung` (`USERNAME`);

--
-- Constraints for table `lophocphan`
--
ALTER TABLE `lophocphan`
ADD CONSTRAINT `FK_LOPHOCPH_CO_MAUNHO_MAUNHOM` FOREIGN KEY (`MA_MAUNHOM`) REFERENCES `maunhom` (`MA_MAUNHOM`),
ADD CONSTRAINT `FK_LOPHOCPH_GOM_MONHO_MONHOC` FOREIGN KEY (`MA_MH`) REFERENCES `monhoc` (`MA_MH`),
ADD CONSTRAINT `FK_LOPHOCPH_TRONG_HOC_HOCKI` FOREIGN KEY (`MA_HK`) REFERENCES `hocki` (`MA_HK`),
ADD CONSTRAINT `FK_LOPHOCPH_TRONG_NAM_NAMHOC` FOREIGN KEY (`MA_NH`) REFERENCES `namhoc` (`MA_NH`);

--
-- Constraints for table `maunhom`
--
ALTER TABLE `maunhom`
ADD CONSTRAINT `FK_MAUNHOM_CHO_MONHOC` FOREIGN KEY (`MA_MH`) REFERENCES `monhoc` (`MA_MH`),
ADD CONSTRAINT `FK_MAUNHOM_TAO_GIANGVIE` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`);

--
-- Constraints for table `nganh`
--
ALTER TABLE `nganh`
ADD CONSTRAINT `FK_NGANH_NGANH_BOM_BOMON` FOREIGN KEY (`MA_BM`) REFERENCES `bomon` (`MA_BM`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
ADD CONSTRAINT `FK_NGUOIDUN_QUYEN_NGU_QUYEN` FOREIGN KEY (`MA_QUYEN`) REFERENCES `quyen` (`MA_QUYEN`);

--
-- Constraints for table `nhom_dscongviec`
--
ALTER TABLE `nhom_dscongviec`
ADD CONSTRAINT `FK_NHOM_DSC_CO_DSCONG_DSCONGVI` FOREIGN KEY (`MA_CV`, `MA_DSCV`) REFERENCES `dscongviec` (`MA_CV`, `MA_DSCV`),
ADD CONSTRAINT `FK_NHOM_DSC_CO_NHOM_C_DSSINHVI` FOREIGN KEY (`NGUOITAO`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
ADD CONSTRAINT `FK_SINHVIEN_SINHVIEN__NGANH` FOREIGN KEY (`MA_NGANH`) REFERENCES `nganh` (`MA_NGANH`),
ADD CONSTRAINT `FK_SINHVIEN_SINHVIEN__NGUOIDUN` FOREIGN KEY (`MSSV`) REFERENCES `nguoidung` (`USERNAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
