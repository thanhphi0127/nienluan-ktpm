-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2014 at 05:33 PM
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

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`USERNAME`, `MA_CHUDE`, `THOIGIAN`, `NOIDUNG`) VALUES
('1101622', 1, '2014-09-23 00:00:00', ''),
('1111319', 1, '2014-10-01 00:00:00', ''),
('1111325', 2, '2014-09-30 00:00:00', ''),
('1111336', 3, '2014-09-21 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE IF NOT EXISTS `bomon` (
  `MA_BM` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_BM` text COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_BM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`MA_BM`, `TEN_BM`, `MOTA`) VALUES
('1', 'Công Nghệ Phần Mềm', ''),
('2', 'Truyền Thông & Mạng Máy Tính', ''),
('3', 'Công Nghệ Thông Tin', ''),
('4', 'Hệ Thống Thông Tin', ''),
('5', 'Khoa Học Máy Tính', '');

-- --------------------------------------------------------

--
-- Table structure for table `chitietchinhsuacv`
--

CREATE TABLE IF NOT EXISTS `chitietchinhsuacv` (
  `NGUOISUA` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_CV` bigint(20) NOT NULL,
  `THOIGIANSUA` datetime NOT NULL,
  `GHICHU` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`NGUOISUA`,`MA_CV`,`THOIGIANSUA`),
  KEY `FK_SUA_CONGVIEC` (`MA_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietchinhsuacv`
--

INSERT INTO `chitietchinhsuacv` (`NGUOISUA`, `MA_CV`, `THOIGIANSUA`, `GHICHU`) VALUES
('1111319', 1, '2014-10-01 00:00:00', ''),
('1111319', 2, '2014-09-23 00:00:00', ''),
('1111325', 3, '2014-10-21 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `chitietnhom`
--

CREATE TABLE IF NOT EXISTS `chitietnhom` (
  `NHOMTRUONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` bigint(20) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci,
  `DETAI` text COLLATE utf8_unicode_ci,
  `SLTV` int(11) DEFAULT NULL,
  PRIMARY KEY (`NHOMTRUONG`,`MA_LOPHOCPHAN`,`STT_NHOM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietnhom`
--

INSERT INTO `chitietnhom` (`NHOMTRUONG`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MOTA`, `DETAI`, `SLTV`) VALUES
('1111325', 1, '4', '', 'Website quản lý nhóm sinh viên công nghệ thông tin', 4),
('1111336', 1, '4', '', 'Hệ thống tìm kiếm nhà trọ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaogv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaogv` (
  `MSCB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TB` bigint(20) NOT NULL,
  `MA_CTTBGV` int(11) NOT NULL,
  `NGUOINHAN` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MSCB`,`MA_TB`,`MA_CTTBGV`),
  KEY `FK_CO_NGUOINHAN` (`NGUOINHAN`),
  KEY `FK_CTTBGV_CO_THONGBAO` (`MA_TB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietthongbaogv`
--

INSERT INTO `chitietthongbaogv` (`MSCB`, `MA_TB`, `MA_CTTBGV`, `NGUOINHAN`) VALUES
('3324', 1, 1, '1111319'),
('3324', 4, 2, '1111325'),
('2345', 2, 3, '1111336');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthongbaosv`
--

CREATE TABLE IF NOT EXISTS `chitietthongbaosv` (
  `MSSV` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TB` bigint(20) NOT NULL,
  `MA_CTTBSV` int(11) NOT NULL,
  `NGUOINHAN` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MSSV`,`MA_TB`,`MA_CTTBSV`),
  KEY `FK_CO__NGUOINHAN` (`NGUOINHAN`),
  KEY `FK_CTTBSV_CO_THONGBAO` (`MA_TB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietthongbaosv`
--

INSERT INTO `chitietthongbaosv` (`MSSV`, `MA_TB`, `MA_CTTBSV`, `NGUOINHAN`) VALUES
('1111336', 2, 2, '1101622'),
('1111325', 1, 1, '1111319'),
('1111336', 3, 3, '1111325');

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
(1, '1111319', 'Tài liệu thiết kế Niên Luận', 'Đóng', '0000-00-00 00:00:00', ''),
(2, '1111325', 'Code Niên Luận', 'Đang thảo luận', '0000-00-00 00:00:00', ''),
(3, '1111336', 'Tài liệu thiết kế Đảm bảo chất lượng PM', 'Đóng', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE IF NOT EXISTS `congviec` (
  `MA_CV` bigint(20) NOT NULL,
  `NGAYBD` datetime NOT NULL,
  `NGAYKT` datetime NOT NULL,
  `THOIGIANUL` smallint(6) DEFAULT NULL,
  `MUCDO` text COLLATE utf8_unicode_ci NOT NULL,
  `TINHCHAT` text COLLATE utf8_unicode_ci NOT NULL,
  `NGUOIDUOCGIAO` text COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci NOT NULL,
  `TRANGTHAI` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`MA_CV`, `NGAYBD`, `NGAYKT`, `THOIGIANUL`, `MUCDO`, `TINHCHAT`, `NGUOIDUOCGIAO`, `MOTA`, `TRANGTHAI`) VALUES
(1, '2014-09-14 00:00:00', '2014-09-30 00:00:00', 5, 'Bình thường', '', 'Nguyễn Thanh Phi', '', 'Đóng'),
(2, '2014-10-01 00:00:00', '2014-10-11 00:00:00', 2, 'Quan trọng', '', 'Huỳnh Thanh Nhã', '', 'Mới'),
(3, '2014-09-16 00:00:00', '2014-10-28 00:00:00', 2, 'Bình thường', '', 'Nguyễn Gia Trang', '', 'Đóng'),
(4, '2014-09-21 00:00:00', '2014-10-05 00:00:00', 10, 'Quan trọng', '', 'Nguyễn Vương Thành Tâm', '', 'Đang thực hiện'),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', ''),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', ''),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', ''),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dscongviec`
--

CREATE TABLE IF NOT EXISTS `dscongviec` (
  `MA_CV` bigint(20) NOT NULL,
  `MA_DSCV` int(11) NOT NULL,
  PRIMARY KEY (`MA_CV`,`MA_DSCV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dscongviec`
--

INSERT INTO `dscongviec` (`MA_CV`, `MA_DSCV`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dsgiangvien`
--

CREATE TABLE IF NOT EXISTS `dsgiangvien` (
  `MSCB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` bigint(20) NOT NULL,
  PRIMARY KEY (`MSCB`,`MA_LOPHOCPHAN`),
  KEY `FK_DAY_LOPHOCPHAN` (`MA_LOPHOCPHAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dsgiangvien`
--

INSERT INTO `dsgiangvien` (`MSCB`, `MA_LOPHOCPHAN`) VALUES
('3324', 1),
('2345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dssinhvien`
--

CREATE TABLE IF NOT EXISTS `dssinhvien` (
  `MSSV` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` bigint(20) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  PRIMARY KEY (`MSSV`,`MA_LOPHOCPHAN`,`STT_NHOM`),
  KEY `FK_DANGKI_LOPHOCPHAN` (`MA_LOPHOCPHAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dssinhvien`
--

INSERT INTO `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`) VALUES
('1101622', 1, '4'),
('1111319', 1, '4'),
('1111325', 1, '4'),
('1111336', 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE IF NOT EXISTS `giangvien` (
  `MSCB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_BM` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_TD` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` char(60) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` decimal(11,0) DEFAULT NULL,
  `MAIL` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `DIACHI` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MSCB`),
  KEY `FK_CO_TRINHDO` (`MA_TD`),
  KEY `FK_GIANGVIEN_BOMON` (`MA_BM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MSCB`, `MA_BM`, `MA_TD`, `HOTEN`, `GIOITINH`, `SDT`, `MAIL`, `NGAYSINH`, `DIACHI`) VALUES
('2345', '1', '2', 'Phan Phương Lan', 'Nữ', '85', 'pplan@cit.ctu.edu.vn', '0000-00-00', ''),
('3324', '1', '2', 'Võ Huỳnh Trâm', 'Nữ', '85', 'tramvohuynh@cit.ctu.edu.vn', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hocki`
--

CREATE TABLE IF NOT EXISTS `hocki` (
  `MA_HK` decimal(1,0) NOT NULL,
  PRIMARY KEY (`MA_HK`)
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
  `MA_LOPHOCPHAN` bigint(20) NOT NULL,
  `MA_MAUNHOM` int(11) DEFAULT NULL,
  `MA_MH` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_HK` decimal(1,0) NOT NULL,
  `MA_NH` decimal(4,0) NOT NULL,
  PRIMARY KEY (`MA_LOPHOCPHAN`),
  KEY `FK_CO_MAUNHOM` (`MA_MAUNHOM`),
  KEY `FK_GOM_MONHOC` (`MA_MH`),
  KEY `FK_RELATIONSHIP_13` (`MA_HK`),
  KEY `FK_RELATIONSHIP_14` (`MA_NH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lophocphan`
--

INSERT INTO `lophocphan` (`MA_LOPHOCPHAN`, `MA_MAUNHOM`, `MA_MH`, `MA_HK`, `MA_NH`) VALUES
(1, 1, '1', '1', '2014'),
(2, 2, '2', '1', '2014'),
(3, 3, '3', '1', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `maunhom`
--

CREATE TABLE IF NOT EXISTS `maunhom` (
  `MA_MAUNHOM` int(11) NOT NULL,
  `MA_MH` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `MSCB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLN_TOIDA` smallint(6) NOT NULL,
  `SLTV_TOIDA` smallint(6) NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_MAUNHOM`),
  KEY `FK_CHO` (`MA_MH`),
  KEY `FK_TAO` (`MSCB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maunhom`
--

INSERT INTO `maunhom` (`MA_MAUNHOM`, `MA_MH`, `MSCB`, `SLN_TOIDA`, `SLTV_TOIDA`, `MOTA`) VALUES
(1, '2', '3324', 10, 4, ''),
(2, '1', '3324', 10, 4, ''),
(3, '4', '2345', 8, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `MA_MH` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_MH` text COLLATE utf8_unicode_ci NOT NULL,
  `SOTC` smallint(6) NOT NULL,
  PRIMARY KEY (`MA_MH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MA_MH`, `TEN_MH`, `SOTC`) VALUES
('1', 'Bảo trì phần mềm', 2),
('2', 'Kiểm thử phần mềm', 2),
('3', 'Lập trình Web', 3),
('4', 'Niên luận Kỹ thuật phần mềm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

CREATE TABLE IF NOT EXISTS `namhoc` (
  `MA_NH` decimal(4,0) NOT NULL,
  PRIMARY KEY (`MA_NH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MA_NH`) VALUES
('2014');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE IF NOT EXISTS `nganh` (
  `MA_NGANH` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `MA_BM` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_NGANH` text COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_NGANH`),
  KEY `FK_NGANH_BOMON` (`MA_BM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MA_NGANH`, `MA_BM`, `TEN_NGANH`, `MOTA`) VALUES
('1', '1', 'Kỹ Thuật Phần Mềm', ''),
('2', '2', 'Truyền Thông & Mạng Máy Tính', ''),
('3', '3', 'Công Nghệ Thông Tin', ''),
('4', '4', 'Hệ Thống Thông Tin', ''),
('5', '5', 'Khoa Học Máy Tính', '');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `USERNAME` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_QUYEN` int(11) NOT NULL,
  `PASSWORD` char(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_QUYEN_NGUOIDUNG` (`MA_QUYEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`USERNAME`, `MA_QUYEN`, `PASSWORD`) VALUES
('1101622', 1, 'c963dea05e4687969295ba7af161e74b'),
('1111310', 1, 'MD5(admin)'),
('1111311', 1, 'MD5(admin)'),
('1111312', 1, 'MD5(admin)'),
('1111313', 1, 'MD5(admin)'),
('1111314', 1, 'MD5(admin)'),
('1111315', 1, 'MD5(admin)'),
('1111316', 1, 'MD5(admin)'),
('1111317', 1, 'MD5(admin)'),
('1111319', 1, 'eb24dd59dec4d0a1b3b850e7c60249db'),
('1111325', 1, 'dc26932da43cfd99eb810162a482245b'),
('1111326', 1, 'MD5(admin)'),
('1111336', 1, 'fd6ebbcd3f3776fc8322046223649adc'),
('1111355', 1, 'MD5(admin)'),
('1111356', 1, 'MD5(admin)'),
('admin', 3, '21232f297a57a5a743894a0e4a801fc3'),
('vhtram', 2, 'e901c4278258ad9166619d017fe4fea0');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_dscongviec`
--

CREATE TABLE IF NOT EXISTS `nhom_dscongviec` (
  `NGUOITAO` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOPHOCPHAN` bigint(20) NOT NULL,
  `STT_NHOM` decimal(2,0) NOT NULL,
  `MA_CV` bigint(20) NOT NULL,
  `MA_DSCV` int(11) NOT NULL,
  PRIMARY KEY (`NGUOITAO`,`MA_LOPHOCPHAN`,`STT_NHOM`,`MA_CV`,`MA_DSCV`),
  KEY `FK_RELATIONSHIP_11` (`MA_CV`,`MA_DSCV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhom_dscongviec`
--

INSERT INTO `nhom_dscongviec` (`NGUOITAO`, `MA_LOPHOCPHAN`, `STT_NHOM`, `MA_CV`, `MA_DSCV`) VALUES
('1111319', 1, '4', 1, 1),
('1111336', 1, '4', 1, 3),
('1111325', 1, '4', 2, 1),
('1101622', 1, '4', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `MA_QUYEN` int(11) NOT NULL,
  `TENQUYEN` text COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MA_QUYEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MA_QUYEN`, `TENQUYEN`, `MOTA`) VALUES
(1, 'admin', 'Admin của hệ thống'),
(2, 'Sinh viên', 'Sinh viên'),
(3, 'Giảng viên', 'Giảng viên');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `MSSV` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MA_NGANH` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` text COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` decimal(11,0) DEFAULT NULL,
  `DIACHI` text COLLATE utf8_unicode_ci,
  `MAIL` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `KHOAHOC` smallint(6) NOT NULL,
  PRIMARY KEY (`MSSV`),
  KEY `FK_SINHVIEN_NGANH` (`MA_NGANH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `MA_NGANH`, `HOTEN`, `GIOITINH`, `SDT`, `DIACHI`, `MAIL`, `NGAYSINH`, `KHOAHOC`) VALUES
('1101622', 'N001', 'Trịnh Sa Lem', 'Nam', '0123266874', 'Hòn Đất, Kiên Giang', 'lem101622@student.ctu.edu.vn', '1992-02-06', 36),
('1111310', 'N001', 'Nguyễn Trinh Nhân', 'Nam', '0923645455', 'Cao Lãnh, Đồng Tháp', 'nhan111310@student.ctu.edu.vn', '1993-12-12', 37),
('1111311', 'N001', 'Trần Giang Anh Tuấn', 'Nam', '0923645258', 'Long Mỹ, Hậu Giang', 'tuan111311@student.ctu.edu.vn', '1993-10-12', 36),
('1111312', 'N001', 'Tô Nguyễn Minh Loan', 'Nữ', '01874323656', 'Cần Thơ', 'loan111312@student.ctu.edu.vn.com', '1993-08-25', 36),
('1111313', 'N001', 'Phạm Trọng Mác', 'Nam', '0923645455', 'Trà Vinh', 'mac111313@student.ctu.edu.vn.com', '1993-08-25', 36),
('1111314', 'N001', 'Tô Nguyễn Anh Thư', 'Nữ', '0993645455', 'Châu Phú, An Giang', 'thu111314@student.ctu.edu.vn.com', '1993-12-12', 37),
('1111319', 'N001', 'Huỳnh Thanh Nhã', 'Nữ', '01683536544', 'Trần Đề, TP. Sóc Trăng', 'nha111319@student.ctu.edu.vn', '1993-09-23', 37),
('1111325', 'N001', 'Nguyễn Thanh Phi', 'Nam', '0986233165', 'Thới Hưng, Cờ Đỏ, TP. Cần Thơ', 'phi111325@student.ctu.edu.vn', '1993-01-17', 37),
('1111326', 'N001', 'Ngô Thị Sao Ly', 'Nữ', '0126961656', 'Bạc Liêu', 'ly1111326@student.ctu.edu.vn', '1993-12-06', 36),
('1111336', 'N001', 'Nguyễn Vương Thành Tâm', 'Nam', '0962316459', '23, Nguyễn Trung Trực, TP.Sóc Trăng', 'tam111336@student.ctu.edu.vn', '0199-06-02', 37),
('1111355', 'N001', 'Phạm Thị Thu Hướng', 'Nữ', '0901224560', 'Long Mỹ, Hậu Giang', 'huong111355@student.ctu.edu.vn', '1993-05-10', 36);

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE IF NOT EXISTS `thongbao` (
  `MA_TB` bigint(20) NOT NULL,
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL,
  `TRANGTHAI` text COLLATE utf8_unicode_ci NOT NULL,
  `NGAYTB` datetime NOT NULL,
  PRIMARY KEY (`MA_TB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`MA_TB`, `NOIDUNG`, `TRANGTHAI`, `NGAYTB`) VALUES
(1, 'Thông báo 1', 'Chưa xem', '2014-10-01 00:00:00'),
(2, 'Thông báo 2', 'Đã xem', '2014-09-23 00:00:00'),
(3, 'Thông báo 3', 'Đã xem', '2014-09-23 00:00:00'),
(4, 'Thông báo 4', 'Chưa đọc', '2014-10-02 00:00:00'),
(5, 'Thông báo 5', 'Chưa đọc', '2014-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdo`
--

CREATE TABLE IF NOT EXISTS `trinhdo` (
  `MA_TD` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TD` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MA_TD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trinhdo`
--

INSERT INTO `trinhdo` (`MA_TD`, `TEN_TD`) VALUES
('1', 'Kỹ Sư'),
('2', 'Thạc Sỹ'),
('3', 'Tiến Sỹ'),
('4', 'Giáo Sư'),
('5', 'Phó Giáo Sư');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_THUOC_CHUDE` FOREIGN KEY (`MA_CHUDE`) REFERENCES `chude` (`MA_CHUDE`),
  ADD CONSTRAINT `FK_DO` FOREIGN KEY (`USERNAME`) REFERENCES `nguoidung` (`USERNAME`);

--
-- Constraints for table `chitietchinhsuacv`
--
ALTER TABLE `chitietchinhsuacv`
  ADD CONSTRAINT `FK_SUA_CONGVIEC` FOREIGN KEY (`MA_CV`) REFERENCES `congviec` (`MA_CV`),
  ADD CONSTRAINT `FK_SINHVIEN_SUA` FOREIGN KEY (`NGUOISUA`) REFERENCES `sinhvien` (`MSSV`);

--
-- Constraints for table `chitietnhom`
--
ALTER TABLE `chitietnhom`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`NHOMTRUONG`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`);

--
-- Constraints for table `chitietthongbaogv`
--
ALTER TABLE `chitietthongbaogv`
  ADD CONSTRAINT `FK_GIANGVIEN_GUI` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`),
  ADD CONSTRAINT `FK_CO_NGUOINHAN` FOREIGN KEY (`NGUOINHAN`) REFERENCES `nguoidung` (`USERNAME`),
  ADD CONSTRAINT `FK_CTTBGV_CO_THONGBAO` FOREIGN KEY (`MA_TB`) REFERENCES `thongbao` (`MA_TB`);

--
-- Constraints for table `chitietthongbaosv`
--
ALTER TABLE `chitietthongbaosv`
  ADD CONSTRAINT `FK_SINHVIEN_GUI` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`),
  ADD CONSTRAINT `FK_CO__NGUOINHAN` FOREIGN KEY (`NGUOINHAN`) REFERENCES `nguoidung` (`USERNAME`),
  ADD CONSTRAINT `FK_CTTBSV_CO_THONGBAO` FOREIGN KEY (`MA_TB`) REFERENCES `thongbao` (`MA_TB`);

--
-- Constraints for table `chude`
--
ALTER TABLE `chude`
  ADD CONSTRAINT `FK_TAOBOI` FOREIGN KEY (`USERNAME`) REFERENCES `nguoidung` (`USERNAME`);

--
-- Constraints for table `dscongviec`
--
ALTER TABLE `dscongviec`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`MA_CV`) REFERENCES `congviec` (`MA_CV`);

--
-- Constraints for table `dsgiangvien`
--
ALTER TABLE `dsgiangvien`
  ADD CONSTRAINT `FK_THUOC_DSGIANGVIEN` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`),
  ADD CONSTRAINT `FK_DAY_LOPHOCPHAN` FOREIGN KEY (`MA_LOPHOCPHAN`) REFERENCES `lophocphan` (`MA_LOPHOCPHAN`);

--
-- Constraints for table `dssinhvien`
--
ALTER TABLE `dssinhvien`
  ADD CONSTRAINT `FK_THUOC_DSSINHVIEN` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`),
  ADD CONSTRAINT `FK_DANGKI_LOPHOCPHAN` FOREIGN KEY (`MA_LOPHOCPHAN`) REFERENCES `lophocphan` (`MA_LOPHOCPHAN`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `FK_GIANGVIEN_TAIKHOAN` FOREIGN KEY (`MSCB`) REFERENCES `nguoidung` (`USERNAME`),
  ADD CONSTRAINT `FK_CO_TRINHDO` FOREIGN KEY (`MA_TD`) REFERENCES `trinhdo` (`MA_TD`),
  ADD CONSTRAINT `FK_GIANGVIEN_BOMON` FOREIGN KEY (`MA_BM`) REFERENCES `bomon` (`MA_BM`);

--
-- Constraints for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`MA_NH`) REFERENCES `namhoc` (`MA_NH`),
  ADD CONSTRAINT `FK_CO_MAUNHOM` FOREIGN KEY (`MA_MAUNHOM`) REFERENCES `maunhom` (`MA_MAUNHOM`),
  ADD CONSTRAINT `FK_GOM_MONHOC` FOREIGN KEY (`MA_MH`) REFERENCES `monhoc` (`MA_MH`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`MA_HK`) REFERENCES `hocki` (`MA_HK`);

--
-- Constraints for table `maunhom`
--
ALTER TABLE `maunhom`
  ADD CONSTRAINT `FK_TAO` FOREIGN KEY (`MSCB`) REFERENCES `giangvien` (`MSCB`),
  ADD CONSTRAINT `FK_CHO` FOREIGN KEY (`MA_MH`) REFERENCES `monhoc` (`MA_MH`);

--
-- Constraints for table `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `FK_NGANH_BOMON` FOREIGN KEY (`MA_BM`) REFERENCES `bomon` (`MA_BM`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_QUYEN_NGUOIDUNG` FOREIGN KEY (`MA_QUYEN`) REFERENCES `quyen` (`MA_QUYEN`);

--
-- Constraints for table `nhom_dscongviec`
--
ALTER TABLE `nhom_dscongviec`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`NGUOITAO`, `MA_LOPHOCPHAN`, `STT_NHOM`) REFERENCES `dssinhvien` (`MSSV`, `MA_LOPHOCPHAN`, `STT_NHOM`),
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`MA_CV`, `MA_DSCV`) REFERENCES `dscongviec` (`MA_CV`, `MA_DSCV`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_SINHVIEN_TAIKHOAN` FOREIGN KEY (`MSSV`) REFERENCES `nguoidung` (`USERNAME`),
  ADD CONSTRAINT `FK_SINHVIEN_NGANH` FOREIGN KEY (`MA_NGANH`) REFERENCES `nganh` (`MA_NGANH`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
