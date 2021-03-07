-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2021 lúc 12:01 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` float(11,0) DEFAULT NULL,
  `id_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(20) NOT NULL,
  `ngay_them` timestamp NULL DEFAULT current_timestamp(),
  `id_thuong_hieu` int(11) NOT NULL DEFAULT 7
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`, `id_anh`, `so_luong`, `ngay_them`, `id_thuong_hieu`) VALUES
(40, 'Thức ăn cho chó con ROYAL CANIN Bulldog Puppy', 230000, '11', 'anh1.jpg', 'Lợi ích chính Thức ăn cho chó con ROYAL CANIN Bulldog Puppy với công thức đặc chế riêng cho nhu cầu dinh dưỡng của chó Bull. Sản phẩm được chế biến theo công thức nâng cao sức đề kháng, bảo vệ da và lông cho chó con. Sản phẩm được thiết kế độc quyền để gi', '', 100, '2021-03-07 08:09:22', 7),
(55, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(56, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(57, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(58, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(59, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(60, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7),
(61, 'Dây dắt thú cưng', 150000, '12', 'anh3.jpg', '', '', 100, '2021-03-07 09:40:04', 7);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`) USING BTREE,
  ADD KEY `id_danh_muc` (`id_danh_muc`) USING BTREE,
  ADD KEY `id_anh` (`id_anh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
