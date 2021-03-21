-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2021 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jack_nat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_hang`
--

CREATE TABLE `tbl_chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `don_gia` float(255,0) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `thanh_tien` float(255,0) DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_chung_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_hang`
--

INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `don_gia`, `so_luong`, `thanh_tien`, `ghi_chu`, `id_chung_loai`) VALUES
(1, 40, NULL, 25, NULL, NULL, 0),
(2, 60, NULL, 2, NULL, NULL, 0),
(3, 61, NULL, 3, NULL, NULL, 0),
(4, 40, NULL, 4, NULL, NULL, 0),
(5, 40, NULL, 1, NULL, NULL, 0),
(6, 60, NULL, 3, NULL, NULL, 0),
(7, 61, NULL, 4, NULL, NULL, 0),
(8, 61, NULL, 5, NULL, NULL, 0),
(9, 40, NULL, 6, NULL, NULL, 0),
(10, 40, NULL, 7, NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`,`id_chung_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
