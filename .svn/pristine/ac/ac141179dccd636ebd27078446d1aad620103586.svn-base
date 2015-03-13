-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2014 at 02:52 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cit_quanlynhom`
--
CREATE DATABASE IF NOT EXISTS `cit_quanlynhom` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cit_quanlynhom`;

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE IF NOT EXISTS `baocao` (
  `MA_BC` int(11) NOT NULL AUTO_INCREMENT,
  `TIEUDE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci,
  `NGUOIGUI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYGUI` datetime NOT NULL,
  `FILEPATH` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_BC`,`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  UNIQUE KEY `MA_BC` (`MA_BC`),
  UNIQUE KEY `BAOCAO_PK` (`MA_BC`,`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  KEY `BAOCAO_NHOM_FK` (`NGUOIGUI`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  KEY `BAOCAO_TRANGTHAI_FK` (`MA_TRANGTHAI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`MA_BC`, `TIEUDE`, `NOIDUNG`, `NGUOIGUI`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MA_TRANGTHAI`, `NGAYGUI`, `FILEPATH`) VALUES
(1, 'Báo cáo tiến độ công việc của tài liệu đặc tả', 'Tài liệu đặc tả môn niên luận', '1111336', 1, '1', 'BC_CHUAXEM', '2014-10-10 00:00:00', NULL),
(2, 'Báo cáo bài tập số 2', '-Công cụ quản lý cấu hình', '1111336', 2, '1', 'BC_CHUAXEM', '2014-10-12 00:00:00', NULL),
(3, 'Báo cáo môn bảo trì phần mềm', '-Google Code\r\n-TortoiseSVN', '1111336', 1, '1', 'BC_CHUAXEM', '2014-10-12 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `USERNAME` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_CHUDE` bigint(20) NOT NULL,
  `THOIGIAN` datetime NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`USERNAME`,`THOIGIAN`),
  KEY `FK_THUOC_CHUDE` (`MA_CHUDE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE IF NOT EXISTS `bomon` (
  `MA_BM` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_BM` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_BM`),
  UNIQUE KEY `BOMON_PK` (`MA_BM`)
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
  `TILEHOANTHANH` decimal(3,0) DEFAULT NULL,
  PRIMARY KEY (`NGUOISUA`,`MA_CV`,`THOIGIANSUA`),
  UNIQUE KEY `CHITIETCHINHSUACV_PK` (`NGUOISUA`,`MA_CV`,`THOIGIANSUA`),
  KEY `SUA_CONGVIEC_FK` (`MA_CV`),
  KEY `SINHVIEN_SUA_FK` (`NGUOISUA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietchinhsuacv`
--

INSERT INTO `chitietchinhsuacv` (`NGUOISUA`, `MA_CV`, `THOIGIANSUA`, `GHICHU`, `TILEHOANTHANH`) VALUES
('1101622', 2, '2014-10-08 00:00:00', 'Thêm phần giới thiệu', '15'),
('1101622', 8, '2014-10-06 00:00:00', NULL, '25'),
('1111312', 5, '2014-10-21 00:00:00', NULL, '35'),
('1111316', 4, '2014-10-15 00:00:00', 'Thêm phần header trang login', '15'),
('1111316', 4, '2014-10-16 00:00:00', 'Chỉnh sửa lại title', '20'),
('1111319', 1, '2014-10-09 00:00:00', 'Thêm thông tin thống kê', '40'),
('1111319', 2, '2014-10-09 09:52:00', 'Thêm mô tả chi tiết các tính năng', '80'),
('1111319', 3, '2014-10-22 00:00:00', NULL, '30'),
('1111319', 8, '2014-10-15 00:00:00', 'Thêm mô tả đăng nhập cho hệ thống', '65'),
('1111325', 1, '2014-10-11 00:00:00', 'Sửa thông tin thống kê', '82'),
('1111325', 2, '2014-10-09 11:21:00', NULL, '100'),
('1111325', 6, '2014-10-22 00:00:00', 'Hoàn thành bài tập số 1', '80'),
('1111325', 10, '2014-10-16 10:09:00', 'Thiết kế lại tài liệu thiết kế phần thiết kế giao diện', '25'),
('1111333', 5, '2014-10-21 05:00:00', NULL, '40'),
('1111333', 5, '2014-10-21 07:00:00', NULL, '47'),
('1111333', 5, '2014-10-21 10:00:00', NULL, '85'),
('1111333', 9, '2014-10-08 00:00:00', 'Lập tài liệu báo cáo bìa tập nhóm số 2 môn bảo trì phần mềm', '16'),
('1111336', 2, '2014-10-09 05:00:00', NULL, '35'),
('1111336', 3, '2014-10-23 08:00:00', NULL, '60'),
('1111336', 11, '2014-10-12 00:00:00', '', '45'),
('1111336', 12, '2014-10-12 00:00:00', '', '35'),
('1111338', 5, '2014-10-21 00:00:00', NULL, '55'),
('1111352', 5, '2014-10-21 08:00:00', NULL, '80'),
('1111352', 5, '2014-10-22 21:00:00', NULL, '100'),
('1111358', 9, '2014-10-23 00:00:00', 'Đặc tả hệ thống quản lý của hàng xe gán máy', '68'),
('1111986', 5, '0000-00-00 00:00:00', NULL, '95');

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
  `SLTV` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`NHOMTRUONG`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  UNIQUE KEY `CHITIETNHOM_PK` (`NHOMTRUONG`,`MA_LOPHOCPHAN`,`STT_NHOM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietnhom`
--

INSERT INTO `chitietnhom` (`NHOMTRUONG`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MOTA`, `DETAI`, `SLTV`) VALUES
('1111319', 1, '1', 'Thông tin quản lý xe may', 'Quản lý xe máy', '4'),
('1111325', 1, '2', 'Thông tin quản lý nhà hàng', 'Quản lý nhà hàng', '4'),
('1111336', 1, '1', 'Nhà sách có nhu cầu quản lý thông tin sách của mình', 'Quản lý nhà sách', '6'),
('1111336', 1, '3', 'Thông tin quản lý khách sạn', 'Quản lý khách sạn', '4'),
('1111336', 2, '1', 'Nhà trường có nhu cầu quản lý thông tin thư viện', 'Quản lý thư viện', '3');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaogv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaogv` (
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TB` int(11) NOT NULL,
  `MA_CTTBGV` int(11) NOT NULL,
  `NGUOINHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MSCB`,`MA_TB`,`MA_CTTBGV`),
  UNIQUE KEY `CHITIETTHONGBAOGV_PK` (`MSCB`,`MA_TB`,`MA_CTTBGV`),
  KEY `CO_NGUOINHAN_FK` (`NGUOINHAN`),
  KEY `CTTBGV_CO_THONGBAO_FK` (`MA_TB`),
  KEY `GIANGVIEN_GUI_FK` (`MSCB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaosv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaosv` (
  `MSSV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TB` int(11) NOT NULL,
  `MA_CTTBSV` int(11) NOT NULL,
  `NGUOINHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MSSV`,`MA_TB`,`MA_CTTBSV`),
  UNIQUE KEY `CHITIETTHONGBAOSV_PK` (`MSSV`,`MA_TB`,`MA_CTTBSV`),
  KEY `CTTBSV_CO_THONGBAO_FK` (`MA_TB`),
  KEY `SINHVIEN_GUI_FK` (`MSSV`),
  KEY `CO__NGUOINHAN_FK` (`NGUOINHAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE IF NOT EXISTS `chude` (
  `MA_CHUDE` bigint(20) NOT NULL,
  `USERNAME` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TIEUDE` text COLLATE utf8_unicode_ci NOT NULL,
  `TRANGTHAI` text COLLATE utf8_unicode_ci,
  `NGAYTAO` datetime NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_CHUDE`),
  KEY `FK_TAOBOI` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`MA_CHUDE`, `USERNAME`, `TIEUDE`, `TRANGTHAI`, `NGAYTAO`, `NOIDUNG`) VALUES
(2, '1111325', 'Code Niên Luận', 'Đang thảo luận', '0000-00-00 00:00:00', 'Bắt đầu từ tuần.....'),
(3, '1111336', 'Tài liệu thiết kế Đảm bảo chất lượng PM', 'Đóng', '0000-00-00 00:00:00', 'Cần mô tả những gì'),
(4, '1111319', 'Vấn đề lưu trữ dữ liệu trong SQL', 'Đóng', '0000-00-00 00:00:00', 'Khác nhau giữa vchar và nvarchar'),
(5, '1111325', 'Framework', 'Đang thảo luận', '0000-00-00 00:00:00', ''),
(6, '1111336', 'Tài liệu thiết kế Đảm bảo chất lượng PM', 'Đóng', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE IF NOT EXISTS `congviec` (
  `MA_CV` int(11) NOT NULL AUTO_INCREMENT,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_MUCDO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TINHCHAT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_CV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYBD` datetime NOT NULL,
  `NGAYKT` datetime NOT NULL,
  `THOIGIANUL` decimal(2,0) DEFAULT NULL,
  `NGUOIDUOCGIAO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_CV`),
  UNIQUE KEY `MA_CV` (`MA_CV`),
  UNIQUE KEY `CONGVIEC_PK` (`MA_CV`),
  KEY `CONGVIEC_TRANGTHAI_FK` (`MA_TRANGTHAI`),
  KEY `CONGVIEC_MUCDO_FK` (`MA_MUCDO`),
  KEY `CONGVIEC_TINHCHAT_FK` (`MA_TINHCHAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`MA_CV`, `MA_TRANGTHAI`, `MA_MUCDO`, `MA_TINHCHAT`, `TEN_CV`, `NGAYBD`, `NGAYKT`, `THOIGIANUL`, `NGUOIDUOCGIAO`, `MOTA`) VALUES
(1, 'BC_DAXEM', '2', 'KK', 'Cập nhật tiến độ', '2014-10-17 00:00:00', '2014-10-10 00:00:00', '0', '1111336-1111319', 'Thông tin ập nhật tiến độ'),
(2, 'BC_DAXEM', '2', 'KK', 'Vẽ biểu đồ niên luận', '2014-10-16 00:00:00', '2014-10-16 00:00:00', '2', '1111336-1111325', 'Thông tin biểu đò'),
(3, 'CD_DADUYET', '4', 'NV', 'Thống kế sl xe', '2014-10-08 00:00:00', '2014-10-09 00:00:00', '2', '1111325-1111319', 'Thông tin số ượng'),
(4, 'CV_MO', '3', 'NV', 'Code', '2014-10-11 00:00:00', '2014-10-11 00:00:00', '12', '1111316', 'Thông tin code'),
(5, 'CV_MO', '5', 'KK', 'Code chi tiết', '2014-10-10 00:00:00', '2014-10-12 00:00:00', '5', '1111352', '.....'),
(6, 'CV_TRONG', '4', 'NV', 'Bảo trì ', '2014-10-08 00:00:00', '2014-10-18 00:00:00', '6', '1111325', '-------'),
(7, 'CV_TRONG', '1', 'KK', 'Thiết kế tài liệu đặc tả', '2014-10-09 00:00:00', '2014-10-17 00:00:00', '7', '1111319-1111325-111336', '////'),
(8, 'CV_TRONG', '3', 'KK', 'Thiết kế tài liệu thiết kế', '2014-10-10 00:00:00', '2014-10-12 00:00:00', '4', '1111325-111336', ''),
(9, 'CV_MO', '3', 'KK', 'Vẽ biểu đồ giao diện người máy', '2014-10-01 00:00:00', '2014-10-02 00:00:00', '7', '1111333', NULL),
(10, 'CV_MO', '4', 'KK', 'Thiết kế mô hình dữ liệu', '2014-10-01 00:00:00', '2014-10-02 00:00:00', '9', '1111333', NULL),
(11, 'CV_TRONG', '2', 'NV', 'dfsdf', '2014-10-12 00:00:00', '2014-10-13 00:00:00', '0', '1111325-1111336', 'sdf'),
(12, 'CV_MO', '2', 'NV', 'xcx', '2014-10-12 00:00:00', '2014-10-28 00:00:00', '0', '1111336', 'dsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `dscongviec`
--

CREATE TABLE IF NOT EXISTS `dscongviec` (
  `MA_CV` int(11) NOT NULL,
  `MA_DSCV` int(11) NOT NULL,
  PRIMARY KEY (`MA_CV`,`MA_DSCV`),
  UNIQUE KEY `DSCONGVIEC_PK` (`MA_CV`,`MA_DSCV`),
  KEY `GOM_CONGVIEC_FK` (`MA_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dscongviec`
--

INSERT INTO `dscongviec` (`MA_CV`, `MA_DSCV`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 1),
(7, 3),
(8, 4),
(9, 5),
(10, 6),
(11, 1),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dsgiangvien`
--

CREATE TABLE IF NOT EXISTS `dsgiangvien` (
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  PRIMARY KEY (`MSCB`,`MA_LOPHOCPHAN`),
  UNIQUE KEY `DSGIANGVIEN_PK` (`MSCB`,`MA_LOPHOCPHAN`),
  KEY `THUOC_DSGIANGVIEN_FK` (`MSCB`),
  KEY `DAY_LOPHOCPHAN_FK` (`MA_LOPHOCPHAN`)
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
  `STT_NHOM` decimal(2,0) NOT NULL,
  PRIMARY KEY (`MSSV`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  UNIQUE KEY `DSSINHVIEN_PK` (`MSSV`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  KEY `DANGKI_LOPHOCPHAN_FK` (`MA_LOPHOCPHAN`),
  KEY `THUOC_DSSINHVIEN_FK` (`MSSV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dssinhvien`
--

INSERT INTO `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`) VALUES
('1101622', 1, '1'),
('1101622', 1, '4'),
('1111319', 1, '1'),
('1111325', 1, '1'),
('1111325', 1, '2'),
('1111333', 1, '5'),
('1111336', 1, '1'),
('1111336', 1, '3'),
('1111319', 2, '2'),
('1111325', 2, '3'),
('1111336', 2, '1');

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
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRANGTHAI` int(11) NOT NULL,
  PRIMARY KEY (`MSCB`),
  UNIQUE KEY `GIANGVIEN_PK` (`MSCB`),
  KEY `GIANGVIEN_BOMON_FK` (`MA_BM`),
  KEY `CO_TRINHDO_FK` (`MA_TD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MSCB`, `MA_BM`, `MA_TD`, `HOTEN`, `GIOITINH`, `SDT`, `MAIL`, `NGAYSINH`, `DIACHI`, `TRANGTHAI`) VALUES
('1111', '96', 'THS', 'Võ Huỳnh Trâm', 'Nữ', '931654779', 'vhtram@cit.ctu.edu.vn', '1978-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('1112', '96', 'THS', 'Phạm Thị Xuân Lộc', 'Nữ', '9315854779', 'ptxloc@cit.ctu.edu.vn', '1978-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('1113', '97', 'GV', 'Trần Cao Đệ', 'Nam', '986979478', 'tcde@cit.ctu.edu.vn', '1983-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('1114', '96', 'THS', 'Phan Huy Cường', 'Nam', '9317254779', 'phcuong@cit.ctu.edu.vn', '1978-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('1117', '97', 'THS', 'Phan Tấn Tài', 'Nam', '9862014528', 'pttan@cit.ctu.edu.vn', '1983-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('1211', '97', 'GV', 'Phạm Thị Xuân Diễm', 'Nữ', '986531478', 'ptxdiem@cit.ctu.edu.vn', '1983-02-02', 'Số 1, Lý Tự Trọng,Cần Thơ', 1),
('admin', '96', 'TS', 'Nguyễn Minh Tân', 'Nam', '936987456', 'nmtan@cit.ctu.edu.vn', '1972-10-10', 'An Giang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hocki`
--

CREATE TABLE IF NOT EXISTS `hocki` (
  `MA_HK` decimal(1,0) NOT NULL,
  PRIMARY KEY (`MA_HK`),
  UNIQUE KEY `HOCKI_PK` (`MA_HK`)
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
  `MA_LOPHOCPHAN` int(11) NOT NULL AUTO_INCREMENT,
  `MA_MAUNHOM` int(11) DEFAULT NULL,
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_HK` decimal(1,0) NOT NULL,
  `MA_NH` decimal(4,0) NOT NULL,
  PRIMARY KEY (`MA_LOPHOCPHAN`),
  UNIQUE KEY `MA_LOPHOCPHAN` (`MA_LOPHOCPHAN`),
  UNIQUE KEY `LOPHOCPHAN_PK` (`MA_LOPHOCPHAN`),
  KEY `CO_MAUNHOM_FK` (`MA_MAUNHOM`),
  KEY `GOM_MONHOC_FK` (`MA_MH`),
  KEY `TRONG_HOCKI_FK` (`MA_HK`),
  KEY `TRONG_NAMHOC_FK` (`MA_NH`)
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
  `MA_MAUNHOM` int(11) NOT NULL AUTO_INCREMENT,
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `MSCB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLN_TOIDA` decimal(2,0) NOT NULL,
  `SLTV_TOIDA` decimal(2,0) NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_MAUNHOM`),
  UNIQUE KEY `MA_MAUNHOM` (`MA_MAUNHOM`),
  UNIQUE KEY `MAUNHOM_PK` (`MA_MAUNHOM`),
  KEY `TAO_FK` (`MSCB`),
  KEY `CHO_FK` (`MA_MH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maunhom`
--

INSERT INTO `maunhom` (`MA_MAUNHOM`, `MA_MH`, `MSCB`, `SLN_TOIDA`, `SLTV_TOIDA`, `MOTA`) VALUES
(1, 'CT103', '1111', '10', '10', ''),
(2, 'CT104', '1111', '8', '5', ''),
(3, 'CT107', '1211', '30', '20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `MA_MH` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_MH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `SOTC` decimal(2,0) NOT NULL,
  PRIMARY KEY (`MA_MH`),
  UNIQUE KEY `MONHOC_PK` (`MA_MH`)
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
  `TEN_MUCDO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_MUCDO`),
  UNIQUE KEY `MUCDO_PK` (`MA_MUCDO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mucdo`
--

INSERT INTO `mucdo` (`MA_MUCDO`, `TEN_MUCDO`) VALUES
('1', 'Tùy ý'),
('2', 'Không quan trọng'),
('3', 'Quan trọng'),
('4', 'Rất quan trọng'),
('5', 'Cực kì quan trọng');

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

CREATE TABLE IF NOT EXISTS `namhoc` (
  `MA_NH` decimal(4,0) NOT NULL,
  PRIMARY KEY (`MA_NH`),
  UNIQUE KEY `NAMHOC_PK` (`MA_NH`)
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
  `TEN_NGANH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_NGANH`),
  UNIQUE KEY `NGANH_PK` (`MA_NGANH`),
  KEY `NGANH_BOMON_FK` (`MA_BM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MA_NGANH`, `MA_BM`, `TEN_NGANH`, `MOTA`) VALUES
('11', '96', 'Kỹ thuật phần mềm', NULL),
('12', '95', 'Hệ thống thông tin', NULL),
('13', '97', 'MTT và Truyền thông', NULL),
('14', 'Z6', 'Khoa học máy tính', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `USERNAME` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_QUYEN` int(11) NOT NULL,
  `PASSWORD` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`USERNAME`),
  UNIQUE KEY `NGUOIDUNG_PK` (`USERNAME`),
  KEY `QUYEN_NGUOIDUNG_FK` (`MA_QUYEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`USERNAME`, `MA_QUYEN`, `PASSWORD`) VALUES
('1101622', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1111210', 3, '4a2df2834e6047eb84885ccf4062bd7d'),
('1111312', 3, 'c2af65934a7963b9de02ea2053024a1b'),
('1111316', 3, 'c8a9a439bf78c05bd42ece6aa616f604'),
('1111319', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111325', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111333', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111336', 3, '21232f297a57a5a743894a0e4a801fc3'),
('1111338', 3, '747044292e856a4358b08fdedc36c9da'),
('1111352', 3, 'e24ea12141632b2bf69ea59d94c5374e'),
('1111358', 3, '37cc0214b2d49c8f585f390e78c7f1ae'),
('1111359', 3, '9d257d75d1b37fe3e0acab2d055955ec'),
('1111399', 3, 'ec7dd727bb025cefc00ee1f8aef07b81'),
('1111986', 3, '4a6eaf47ab6ec2d14c8a4a78e1c53f32'),
('1112', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1113', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1114', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1116', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1117', 2, '21232f297a57a5a743894a0e4a801fc3'),
('1211', 2, '21232f297a57a5a743894a0e4a801fc3'),
('admin', 1, '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_dscongviec`
--

CREATE TABLE IF NOT EXISTS `nhom_dscongviec` (
  `NGUOITAO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` int(11) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MA_CV` int(11) DEFAULT NULL,
  `MA_DSCV` int(11) DEFAULT NULL,
  PRIMARY KEY (`NGUOITAO`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  UNIQUE KEY `NHOM_DSCONGVIEC_PK` (`NGUOITAO`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  KEY `CO_DSCONGVIEC_FK` (`MA_CV`,`MA_DSCV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhom_dscongviec`
--

INSERT INTO `nhom_dscongviec` (`NGUOITAO`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MA_CV`, `MA_DSCV`) VALUES
('1111319', 1, '1', NULL, 1),
('1111325', 1, '2', NULL, 2),
('1111336', 1, '3', NULL, 3),
('1101622', 1, '4', NULL, 4),
('1111319', 2, '2', NULL, 5),
('1111325', 2, '3', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `MA_QUYEN` int(11) NOT NULL,
  `TENQUYEN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_QUYEN`),
  UNIQUE KEY `QUYEN_PK` (`MA_QUYEN`)
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
  `KHOAHOC` decimal(2,0) NOT NULL,
  `TRANGTHAI` int(11) NOT NULL,
  PRIMARY KEY (`MSSV`),
  UNIQUE KEY `SINHVIEN_PK` (`MSSV`),
  KEY `SINHVIEN_NGANH_FK` (`MA_NGANH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `MA_NGANH`, `HOTEN`, `GIOITINH`, `SDT`, `DIACHI`, `MAIL`, `NGAYSINH`, `KHOAHOC`, `TRANGTHAI`) VALUES
('1101622', '12', 'Trịnh Sa Lem', 'Nam', '9123456798', 'Long Mỹ, Hậu Giang', 'lem1101622@student.ctu.edu.vn', '2014-10-14', '36', 1),
('1111210', '14', 'Nguyen Thi Thu Thao', 'Nữ', '923645455', 'Đồng Tháp', 'thao111210@student.ctu.edu.vn', '1993-08-25', '36', 1),
('1111312', '14', 'Tô Nguyễn Minh Loan', 'Nam', '923645455', 'Cần Thơ', 'nhan111310@student.ctu.edu.vn', '1993-08-25', '37', 1),
('1111316', '12', 'Tô Nguyễn Thanh Nhàn', 'Nữ', '923645455', 'Cờ Đỏ, Cần Thơ', 'loan111312@student.ctu.edu.vn', '1993-08-25', '36', 1),
('1111319', '11', 'Huỳnh Thanh Nhã', 'Nữ', '1683536544', 'Sóc Trăng', 'nha111319@student.ctu.edu.vn', '1993-08-25', '37', 1),
('1111325', '11', 'Nguyễn Thanh Phi', 'Nam', '986233165', 'Cờ Đỏ, Cần Thơ', 'phi111325@student.ctu.edu.vn', '2014-10-15', '37', 1),
('1111333', '11', 'Huỳnh Minh Trí', 'Nam', '92345681', 'Ô Môn, Cần Thơ', 'tri111333@student.ctu.edu.vn', '2014-10-15', '36', 1),
('1111336', '12', 'Nguyễn Vương Thành Tâm', 'Nam', '9683323268', 'Sóc Trăng', 'tam111336@student.ctu.edu.vn', '2014-10-09', '37', 1),
('1111338', '11', 'Nguyễn Minh Trí', 'Nữ', '986233165', 'Châu Đốc, An Giang', 'phi11@@student.ctu.edu.vn', '0000-00-00', '37', 1),
('1111352', '13', 'Ngô Hải Vân', 'Nam', '986233165', 'Châu Thành ,Hậu Giang', 'thanhphi0127@gmail.com', '0000-00-00', '36', 1),
('1111358', '11', 'Nguyễn Trinh Nhân', 'Nam', '923645455', 'Vĩnh Long', 'thu111314@student.ctu.edu.vn', '1993-08-25', '37', 1),
('1111399', '12', 'Huỳnh Thanh Thanh', 'Nữ', '912345601', 'Cần Thơ', 'thanh111399@student.ctu.edu.vn', '1993-10-12', '36', 1),
('1111986', '11', 'Phạm Thị Thu', 'Nữ', '986233165', 'Bạc Liêu', 'thanhphi01278@gmail.com', '1994-02-03', '37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE IF NOT EXISTS `thongbao` (
  `MA_TB` int(11) NOT NULL AUTO_INCREMENT,
  `MA_TRANGTHAI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYTB` datetime NOT NULL,
  `STT_NHOM` int(11) NOT NULL,
  `NGUOINHAN` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_TB`),
  UNIQUE KEY `MA_TB` (`MA_TB`),
  UNIQUE KEY `THONGBAO_PK` (`MA_TB`),
  KEY `THONGBAO_TRANGTHAI_FK` (`MA_TRANGTHAI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`MA_TB`, `MA_TRANGTHAI`, `NOIDUNG`, `NGAYTB`, `STT_NHOM`, `NGUOINHAN`) VALUES
(1, 'BC_CHUAXEM', 'dsds', '2014-10-12 00:00:00', 1, '1101622'),
(2, 'BC_CHUAXEM', 'Thống kê..........', '2014-10-12 00:00:00', 1, '1111336'),
(3, 'BC_CHUAXEM', '11', '2014-10-12 00:00:00', 1, '1101622-1111319-1111325-1111336-'),
(4, 'BC_CHUAXEM', 'Cần nhanh chóng hoàn thành', '2014-10-12 00:00:00', 1, '1101622'),
(5, 'BC_CHUAXEM', 'Cần thiết kế giao diện lại', '2014-10-12 13:46:51', 1, '1111336'),
(6, 'BC_CHUAXEM', 'Trễ tiến độ', '2014-10-12 13:10:09', 1, '1111325');

-- --------------------------------------------------------

--
-- Table structure for table `tinhchat`
--

CREATE TABLE IF NOT EXISTS `tinhchat` (
  `MA_TINHCHAT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TINHCHAT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_TINHCHAT`),
  UNIQUE KEY `TINHCHAT_PK` (`MA_TINHCHAT`)
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
  `TEN_TRANGTHAI` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MA_TRANGTHAI`),
  UNIQUE KEY `TRANGTHAI_PK` (`MA_TRANGTHAI`)
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
  `TEN_TD` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_TD`),
  UNIQUE KEY `TRINHDO_PK` (`MA_TD`)
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
-- Constraints for dumped tables
--

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
  ADD CONSTRAINT `FK_BAOCAO_BAOCAO_NH_DSSINHVI` FOREIGN KEY (`NGUOIGUI`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`),
  ADD CONSTRAINT `FK_BAOCAO_BAOCAO_TR_TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

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
  ADD CONSTRAINT `FK_CHITIETT_GIANGVIEN_GIANGVIE` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`);

--
-- Constraints for table `chitietthongbaosv`
--
ALTER TABLE `chitietthongbaosv`
  ADD CONSTRAINT `FK_CHITIETT_CO__NGUOI_NGUOIDUN` FOREIGN KEY (`NGUOINHAN`) REFERENCES `nguoidung` (`USERNAME`),
  ADD CONSTRAINT `FK_CHITIETT_CTTBSV_CO_THONGBAO` FOREIGN KEY (`MA_TB`) REFERENCES `thongbao` (`MA_TB`),
  ADD CONSTRAINT `FK_CHITIETT_SINHVIEN__SINHVIEN` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`);

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

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `FK_THONGBAO_THONGBAO__TRANGTHA` FOREIGN KEY (`MA_TRANGTHAI`) REFERENCES `trangthai` (`MA_TRANGTHAI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
