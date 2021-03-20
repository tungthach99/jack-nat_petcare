-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2021 lúc 04:51 PM
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
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `ten_tag` varchar(50) COLLATE ucs2_unicode_ci NOT NULL,
  `luot_xem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_anh`
--

CREATE TABLE `tbl_anh` (
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan_dich_vu`
--

CREATE TABLE `tbl_binh_luan_dich_vu` (
  `id_binh_luan` int(11) NOT NULL,
  `id_khach_hang` int(50) NOT NULL,
  `id_dich_vu` int(50) NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binh_luan_san_pham`
--

CREATE TABLE `tbl_binh_luan_san_pham` (
  `id_binh_luan` int(11) NOT NULL,
  `id_khach_hang` int(50) NOT NULL,
  `id_san_pham` int(50) NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_chung_loai`
--

CREATE TABLE `tbl_chi_tiet_chung_loai` (
  `id_san_pham` int(11) NOT NULL,
  `id_chung_loai` int(11) NOT NULL DEFAULT 1,
  `so_luong_ton` int(20) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chung_loai`
--

CREATE TABLE `tbl_chung_loai` (
  `id_chung_loai` int(11) NOT NULL,
  `ten_chung_loai` varchar(50) COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` int(50) NOT NULL,
  `ten_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `anh`) VALUES
(10, 'Test', '', ''),
(11, 'Đồ ăn', '', ''),
(12, 'Phụ kiện', '', ''),
(13, 'Chuồng/Nhà', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dich_vu`
--

CREATE TABLE `tbl_dich_vu` (
  `id_dich_vu` int(11) NOT NULL,
  `ten_dich_vu` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `don_gia_dv` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_dv` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `mo_ta_dv` varchar(256) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_anh_dv` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `so_luong_dv` int(11) NOT NULL,
  `ngay_them_dv` timestamp NULL DEFAULT current_timestamp(),
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phi_van_chuyen` int(11) DEFAULT NULL,
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` float(255,0) DEFAULT NULL,
  `trang_thai` int(4) DEFAULT 0,
  `ngay_dat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_khach_hang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dia_chi_nhan_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_thuc_mua_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dien_thoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id_don_hang`, `id_khach_hang`, `email`, `phi_van_chuyen`, `ma_giam_gia`, `tong_tien`, `trang_thai`, `ngay_dat`, `ten_khach_hang`, `dia_chi_nhan_hang`, `hinh_thuc_mua_hang`, `ghi_chu`, `dien_thoai`) VALUES
(89, -1, 'hiimtung123@gmail.com', 0, '', 3290000, 0, '03/07/2021 10:01:53 pm', '', '', '', '', ''),
(90, -1, 'hiimtung123@gmail.com', 0, '', 3290000, 0, '03/07/2021 10:04:45 pm', '', '', '', '', ''),
(91, -1, 'hiimtung123@gmail.com', 0, '', 3290000, 0, '03/07/2021 10:05:45 pm', 'Thạch Thọ Tùng', 'Số 12 Chùa Bộc, Đống Đa', '', '', '0357756343'),
(92, -1, 'hoa.jhr1999@gmail.com', 0, '', 1840000, 0, '03/07/2021 10:55:13 pm', 'Thạch Thọ Tùng', 'Đội 1, Công Đình, Đình Xuyên, Gia Lâm', '', '', '0357756343');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_dang_nhap` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `ma_kich_hoat`, `mat_khau`, `ten_dang_nhap`, `gioi_tinh`) VALUES
(6, 'Thạch Thọ Tùng', 'hiimtung123@gmail.com', '0357756343', 'Hà Nội', 'fLQyZPgg', '1', 'tungthach', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyen_mai`
--

CREATE TABLE `tbl_khuyen_mai` (
  `id_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `ten_khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `muc_khuyen_mai` int(11) NOT NULL,
  `anh_km` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ma_giam_gia`
--

CREATE TABLE `tbl_ma_giam_gia` (
  `ma_giam_gia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chiet_khau` int(255) DEFAULT NULL,
  `ngay_ap_dung` datetime NOT NULL DEFAULT current_timestamp(),
  `ngay_ket_thuc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ten_nhan_vien` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nhan_vien`, `ten_nhan_vien`, `email`, `so_dien_thoai`, `tai_khoan`, `mat_khau`, `quyen`) VALUES
(10, '', '', '', 'tuan', '1', 1);

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
  `id_chung_loai` int(11) NOT NULL DEFAULT 7,
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`, `id_anh`, `so_luong`, `ngay_them`, `id_chung_loai`, `tag`) VALUES
(40, 'Thức ăn cho chó con ROYAL CANIN Bulldog Puppy', 230000, '11', 'anh1.jpg', 'Lợi ích chính Thức ăn cho chó con ROYAL CANIN Bulldog Puppy với công thức đặc chế riêng cho nhu cầu dinh dưỡng của chó Bull. Sản phẩm được chế biến theo công thức nâng cao sức đề kháng, bảo vệ da và lông cho chó con. Sản phẩm được thiết kế độc quyền để gi', '', 100, '2021-03-07 08:09:22', 7, NULL),
(55, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(56, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(57, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(58, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(59, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(60, 'Thức ăn cho chó MOSHM Yorkshire Grain Free Nutrition', 470000, '11', 'anh2.jpg', NULL, '', 100, '2021-03-07 08:37:58', 7, NULL),
(61, 'Dây dắt thú cưng', 150000, '12', 'anh3.jpg', '', '', 100, '2021-03-07 09:40:04', 7, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_yeu_thich`
--

CREATE TABLE `tbl_yeu_thich` (
  `id_khach_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Chỉ mục cho bảng `tbl_binh_luan_dich_vu`
--
ALTER TABLE `tbl_binh_luan_dich_vu`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tbl_binh_luan_san_pham`
--
ALTER TABLE `tbl_binh_luan_san_pham`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tbl_chi_tiet_chung_loai`
--
ALTER TABLE `tbl_chi_tiet_chung_loai`
  ADD PRIMARY KEY (`id_san_pham`,`id_chung_loai`);

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`,`id_chung_loai`);

--
-- Chỉ mục cho bảng `tbl_chung_loai`
--
ALTER TABLE `tbl_chung_loai`
  ADD PRIMARY KEY (`id_chung_loai`);

--
-- Chỉ mục cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  ADD PRIMARY KEY (`id_dich_vu`);

--
-- Chỉ mục cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD PRIMARY KEY (`id_don_hang`) USING BTREE,
  ADD KEY `id_khach_hang` (`id_khach_hang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_khuyen_mai`
--
ALTER TABLE `tbl_khuyen_mai`
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `tbl_ma_giam_gia`
--
ALTER TABLE `tbl_ma_giam_gia`
  ADD PRIMARY KEY (`ma_giam_gia`);

--
-- Chỉ mục cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`) USING BTREE,
  ADD KEY `id_danh_muc` (`id_danh_muc`) USING BTREE,
  ADD KEY `id_anh` (`id_anh`);

--
-- Chỉ mục cho bảng `tbl_yeu_thich`
--
ALTER TABLE `tbl_yeu_thich`
  ADD PRIMARY KEY (`id_khach_hang`,`id_san_pham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan_dich_vu`
--
ALTER TABLE `tbl_binh_luan_dich_vu`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_binh_luan_san_pham`
--
ALTER TABLE `tbl_binh_luan_san_pham`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_chung_loai`
--
ALTER TABLE `tbl_chung_loai`
  MODIFY `id_chung_loai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  MODIFY `id_danh_muc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  MODIFY `id_dich_vu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
