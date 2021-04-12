-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2021 lúc 06:19 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

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
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `ten_tag` varchar(50) COLLATE ucs2_unicode_ci NOT NULL,
  `luot_xem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id_tag`, `ten_tag`, `luot_xem`) VALUES
(1, 'chuồng', 8),
(2, 'pate', 0),
(3, 'test', 0);

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
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_dich_vu`
--

CREATE TABLE `tbl_chi_tiet_don_dich_vu` (
  `id_don_dich_vu` int(11) NOT NULL,
  `id_dich_vu` int(11) NOT NULL,
  `so_luong_thu_cung` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_bat_dau` timestamp NOT NULL DEFAULT current_timestamp(),
  `thoi_gian_ket_thuc` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_dich_vu`
--

INSERT INTO `tbl_chi_tiet_don_dich_vu` (`id_don_dich_vu`, `id_dich_vu`, `so_luong_thu_cung`, `don_gia`, `thanh_tien`, `ghi_chu`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`) VALUES
(1, 2, 50, 100000, 5000000, '', '2021-04-11 17:33:00', '2021-04-29 17:33:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_hang`
--

CREATE TABLE `tbl_chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `don_gia` float(255,0) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `thanh_tien` float(255,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_hang`
--

INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `don_gia`, `so_luong`, `thanh_tien`) VALUES
(3, 55, 170000, 2, 340000),
(4, 55, 170000, 3, 510000),
(4, 55, 170000, 2, 340000),
(7, 55, 170000, 1, 170000),
(8, 55, 170000, 1, 170000),
(9, 55, 170000, 1, 170000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danh_muc`
--

CREATE TABLE `tbl_danh_muc` (
  `id_danh_muc` int(50) NOT NULL,
  `ten_danh_muc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danh_muc`
--

INSERT INTO `tbl_danh_muc` (`id_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Đồ ăn'),
(2, 'Phụ kiện'),
(3, 'Chuồng/Nhà'),
(4, 'Thú y'),
(5, 'Trông coi'),
(6, 'Thẩm mỹ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dich_vu`
--

CREATE TABLE `tbl_dich_vu` (
  `id_dich_vu` int(11) NOT NULL,
  `ten_dich_vu` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `don_gia_dv` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anh_dv` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_dv` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_anh_dv` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `ngay_them_dv` timestamp NULL DEFAULT current_timestamp(),
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dich_vu`
--

INSERT INTO `tbl_dich_vu` (`id_dich_vu`, `ten_dich_vu`, `don_gia_dv`, `anh_dv`, `mo_ta_dv`, `id_anh_dv`, `id_danh_muc`, `ngay_them_dv`, `tag`) VALUES
(1, 'Cắt tỉa lông chó mèo', '250000', '2003_cat-tia-long-cho-bang-tong-do-cat-long-cho-meo-768x521.jpg', 'Bạn đang tìm kiếm địa chỉ cung cấp dịch vụ cắt tỉa lông chó mèo (pet grooming) chuyên nghiệp tại Hà Nội? Tại Jack&Nat pet care , chúng tôi cung cấp đầy đủ tất cả các loại hình dịch vụ chăm sóc và làm đẹp trọn gói tốt nhất dành cho thú cưng.\r\n\r\nCắt lông cho chó mèo là một vấn đề rất quan trọng. Việc đó đảm bảo cho sự phát triển về sức khỏe, thể chất và tinh thần cho thú cưng của bạn. Những thú cưng không được chăm sóc, cắt tỉa và làm đẹp thường có nguy cơ gặp phải bọ chét, ve rận, ký sinh trùng và các vấn đề về viêm da khác. Việc sử dụng dịch vụ cắt tỉa lông chó mèo tại Pet Mart  định kỳ và thường xuyên sẽ đem lại nhiều lợi ích thiết thực cho vật nuôi của bạn. Hãy lập kế hoạch đưa thú cưng của bạn đến với chúng tôi mỗi tuần.\r\nTại sao nên cắt tỉa lông cho chó mèo tại Jack&Nat?\r\nVới đội ngũ nhân viên  được đào tạo về dịch vụ cắt tỉa lông chó mèo chuyên nghiệp và được tham gia nhiều khóa đào tạo chăm sóc thú cưng tại nước ngoài. Với gần 10 năm kinh nghiệm, chúng tôi có thể đáp ứng được hầu hết nhu cầu làm đẹp của các giống vật nuôi.\r\n\r\nChúng tôi hiểu rằng thú cưng của mỗi khách hàng đều có nhu cầu chăm sóc khác nhau. Và cần có những giải pháp phù hợp với từng giống. Dịch vụ của chúng tôi luôn sử dụng những dòng sản phẩm sữa tắm tốt nhất đảm bảo an toàn cho vật nuôi. Với phương pháp chăm sóc toàn diện kết hợp với những kinh nghiệm, kiến thức chuyên sâu. Jack&Nat sẽ tư vấn, cung cấp những dịch vụ chăm sóc hiệu quả và chuyên nghiệp nhất.\r\nNhững lưu ý khi sử dụng dịch vụ\r\nPet Mart không tiếp nhận vật nuôi có tiểu sử bệnh hen, co giật hoặc các bệnh về thần kinh.\r\n\r\nĐể đảm bảo an toàn cho sức khỏe khi đưa đến làm dịch vụ cắt tỉa lông chó mèo. Không cho thú cưng ăn no và chạy nhảy quá sức trước khi đến cửa hàng. Có kế hoạch che nắng mưa trước khi đến và sau khi về. Nếu thú cưng có những biểu hiện bất thường về sức khỏe xin vui lòng liên hệ tới tổng đài của Pet Mart để được trợ giúp.\r\n\r\nVui lòng kiểm tra kỹ thú cưng khi đến đón thú cưng sau khi làm dịch vụ. Quy trình đảm bảo nhân viên của Pet Mart đã thực hiện đúng yêu cầu và bạn hài lòng với chất lượng dịch vụ.', NULL, 5, '2021-03-22 06:27:32', 1),
(2, 'Tắm spa cho chó mèo ', '100000', 'dich-vu-spa-tam-thu-cung-chuyen-nghiep.jpg', 'Dịch vụ tắm spa cho chó mèo tại Jack&Nat pet care với các phương pháp chăm sóc toàn diện từ A – Z. Bao gồm: tắm, vắt tuyến hôi, sấy khô, chải lông rối, nhổ lông tai, vệ sinh tai, cắt mài móng chân, cạo lông theo yêu cầu. Tất cả đều với với mong muốn mang tới cho thú cưng của bạn một cuộc sống khỏe mạnh và hạnh phúc nhất.\r\n\r\nVới đội ngũ nhân viên  giàu kinh nghiệm, kiến thức chuyên sâu sẽ tư vấn và cung cấp cho bạn những gói dịch vụ tắm spa cho chó mèo  chất lượng nhất. Những chú cún và mèo cưng sẽ nhanh chóng được tút lại nhan sắc trở lên xinh đẹp và đáng yêu hơn.\r\nTại sao nên spa cho chó mèo thường xuyên?\r\nCòn niềm vui gì hơn khi những người bạn được khoác trên mình bộ lông mềm mượt, thơm tho và sạch sẽ.\r\n\r\nMỗi người bạn nhỏ đều có những thói quen và sở thích khác nhau. Chính vì vậy, Pet Mart luôn có những sự lựa chọn dịch vụ spa cho chó mèo phù hợp nhất với những dòng sản phẩm sữa tắm trị liệu đảm bảo an toàn cho sức khỏe của thú cưng.\r\n\r\nVới tình yêu thương với thú cưng vô bờ bến, chúng tôi chắc chắn sẽ mang tới cho thú cưng và khách hàng  những trải nghiệm tuyệt vời nhất tại Jack & Nat pet care\r\nNhững lưu ý khi sử dụng dịch vụ\r\nJack & Nat không tiếp nhận vật nuôi có tiểu sử bệnh hen, co giật hoặc các bệnh về thần kinh. \r\n\r\nĐể đảm bảo chất lượng dịch vụ đạt kết quả tốt nhất. Không cho thú cưng ăn no hoặc hoạt động quá sức trước khi đến cửa hàng. Nên sử dụng túi xách hoặc lồng vận chuyển. Nếu thú cưng có những biểu hiện bất thường về sức khỏe xin vui lòng liên hệ tới tổng đài của Pet Mart để được trợ giúp.\r\n\r\nKhi đến đón thú cưng, quý khách vui lòng kiểm tra kỹ trước khi ra về, để đảm bảo nhân viên của Pet Mart đã thực hiện đúng yêu cầu dịch vụ.', NULL, 6, '2021-03-22 06:27:32', 1),
(3, 'Khách sạn chó mèo', '150000', '19b9ac92bb4f4a11135e.jpg', 'Dịch vụ trông giữ chó mèo Jack & Nat pet care  tự hào là một trong những khách sạn 5⭐️ chăm sóc thú cưng chuyên nghiệp đầu tiên tại Việt Nam với mô hình hiện đại. Khách sạn chó mèo  Pet Mart luôn đảm bảo điều kiện ánh sáng và vệ sinh theo tiêu chuẩn chất lượng. Tất cả các khu vực đều được giám sát bởi hệ thống camera 24/7 đảm bảo quá trình vận hành an toàn tối đa.\r\n\r\nTại Jack & Nat, chúng tôi mong muốn cung cấp môi trường sạch sẽ, an toàn và thoải mái cho thú cưng. Chính vì vậy thiết kế phòng nghỉ cho chó mèo cũng luôn được chúng tôi chú trọng và nâng cấp thường xuyên.', NULL, 4, '2021-03-22 06:27:32', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_dich_vu`
--

CREATE TABLE `tbl_don_dich_vu` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) DEFAULT -1,
  `phu_thu` int(11) DEFAULT 0,
  `tong_tien` int(11) DEFAULT 0,
  `ten_khach_hang` text COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 1,
  `hinh_thuc_mua_hang` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_dat` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_dich_vu`
--

INSERT INTO `tbl_don_dich_vu` (`id_don_hang`, `id_khach_hang`, `phu_thu`, `tong_tien`, `ten_khach_hang`, `dia_chi`, `so_dien_thoai`, `trang_thai`, `hinh_thuc_mua_hang`, `ghi_chu`, `email`, `ngay_dat`) VALUES
(1, -1, 0, 5000000, 'Thạch Thọ Tùng', '12 Chùa Bộc', 1, 1, 'COD', '', 'hiimtung123@gmail.com', '2021-04-11 17:33:28');

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
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi_nhan_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_thuc_mua_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dien_thoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id_don_hang`, `id_khach_hang`, `email`, `phi_van_chuyen`, `ma_giam_gia`, `tong_tien`, `trang_thai`, `ten_khach_hang`, `dia_chi_nhan_hang`, `hinh_thuc_mua_hang`, `ghi_chu`, `dien_thoai`, `ngay_dat`) VALUES
(3, -1, 'hiimtung123@gmail.com', NULL, '', 340000, 1, 'Thạch Thọ Tùng', '12 Chùa Bộc', 'COD', '', '1', '2021-04-11 13:45:49'),
(4, -1, 'hiimtung123@gmail.com', NULL, '', 850000, 1, 'Thạch Thọ Tùng', '12 Chùa Bộc', 'COD', '', '1', '2021-04-11 13:47:46'),
(7, -1, 'hiimtung123@gmail.com', NULL, '', 170000, 1, '1', '12 Chùa Bộc', 'COD', '', '1', '2021-04-11 17:42:43'),
(8, -1, 'hiimtung123@gmail.com', NULL, '', 170000, 1, 'Thạch Thọ Tùng', '12 Chùa Bộc', 'COD', '', '1', '2021-04-11 17:49:10'),
(9, -1, 'hiimtung123@gmail.com', NULL, '', 170000, 1, 'Thạch Thọ Tùng', '12 Chùa Bộc', 'COD', '', '1', '2021-04-12 03:25:14');

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
  `gioi_tinh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `so_dien_thoai`, `dia_chi`, `ma_kich_hoat`, `mat_khau`, `ten_dang_nhap`, `gioi_tinh`, `ngay_sinh`) VALUES
(3, 'Nguyen Thi Hoa', 'hoa.jhr1999@gmail.com', '0981625399', '103 Đông Tác - Đống Đa - Hà Nội', '1', '123', 'hoa', 'Nu', '1999-03-29'),
(5, 'Nguyen Anh Tuan', 'hoa.jhr1999@gmail.com', '01236958742', '12 Chùa Bộc - Đống Đa - Hà Nội', '1', '123', 'tuan', 'Nam', '1999-03-28'),
(6, 'Thạch Thọ Tùng', 'hiimtung123@gmail.com', '0357756343', 'Hà Nội', 'fLQyZPgg', '1', 'tungthach', 'Nam', '1999-03-29');

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
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(20) NOT NULL,
  `ngay_them` timestamp NULL DEFAULT current_timestamp(),
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `don_gia`, `id_danh_muc`, `anh`, `mo_ta`, `id_anh`, `so_luong`, `ngay_them`, `tag`) VALUES
(15, 'Tấm lót kháng khuẩn Charcoal 45*60cm (50 miếng)', NULL, '1', '3396_absorb_plus_antibacterial_50pcs_petcity.jpg', 'Tã lót được làm từ than hoạt tính nguyên chất 100% và polymer siêu thấm, giúp thấm hút nước tiểu một cách nhanh chóng và kết lại thành một khối. Phòng chống vi khuẩn, khử mùi, thấm hút ngay tức thì, kháng khuẩn khử mùi hiệu quả, có tác dụng phòng chống chất lỏng trào ngược trở lại. Kết hợp với thành phần kháng khuẩn, có hiệu quả ngăn chặn sự tăng trưởng của vi khuẩn. Ngoài ra với chức năng khử mùi độc đáo giúp bạn an tâm không lo ngửi thấy mùi hôi trong phòng. Sản phẩm có bề mặt là vải không dệt mềm mại, thấm hút chất lỏng nhanh, duy trì bề mặt khô thoáng, tạo cảm giác dễ chiu và thoải mái cho vật nuôi. Dưới đáy tã lót được làm từ Polyethylene chống thấm, ngăn ngừa chất lỏng chảy ra ngoài. Sản phẩm thích hợp cho chó, mèo, thỏ...\r\n\r\n', '', 150, '2021-03-22 04:45:40', 2),
(16, 'Áo thun gucci mickey sọc xanh size 7', NULL, '1', '4605_121161024_1308414832829924_2526940334383185913_o.jpg', 'Với thiết kế tinh tế của áo thun, Boss sẽ nổi bật và ấm áp hơn khi cùng Sen dạo phố đón những cơn gió đầu mùa.\r\n\r\nĐẶC ĐIỂM SẢN PHẨM:\r\nChất liệu cotton thoáng mát, mềm mại\r\nTạo cảm giác thoải mái\r\nTăng vẻ quý phái cho thú cưng\r\nNhiều Size khác nhau\r\nChất liệu Polyester chính hiệu\r\nPhân phối chính hãng \r\n', '', 60, '2021-03-22 04:45:40', 1),
(17, 'Bát ăn đôi lớn', 60000, '1', 'HTB16o.ga8r0gK0jSZFnq6zRRXXae.jpg_q50.jpg', 'Bát ăn cho chó mèo bằng nhựa BOBO  Plastic Bowl 3038 là sản phẩm phù hợp với tất cả giống chó và mèo.\r\n\r\nLợi ích chính\r\nBát ăn cho chó mèo bằng nhựa BOBO Plastic Bowl  3038 với chất liệu bằng nhựa được sản xuất trên dây chuyền công nghệ cao.\r\nVới thiết kế tiêu chuẩn chất lượng của Châu Âu vừa và gọn.\r\nMàu sắc hoa văn trang trí bề mặt sản phẩm đa dạng, đáng yêu. Không gây hại cho tất cả các giống chó và mèo.\r\nBề mặt trơn láng, dễ dàng chùi rửa sạch sẽ sau khi sử dụng.', '', 100, '2021-03-22 04:47:53', 1),
(18, 'Ferplast Glam - Chén nhựa Melamine size M', 126000, '1', '2913_bat_an_ferplast_glam_light_blue_pet_bowl_petcity_2.jpg', NULL, '', 60, '2021-03-22 04:47:53', 1),
(21, 'Balo nhựa vuông', 499000, '1', '4622_125569918_3472288179663383_1846972177619097660_n.jpg', 'Balo cho chó mèo là sản phẩm linh động cho khách hàng khi mang theo thú cưng của mình đi chơi. Balo có thiết kế thông minh, thông thoáng giúp cho thú cưng của bạn thoải mái và an toàn khi di chuyển. Vòm kính có thể thay thế bằng lưới nhựa và phù hợp với nhu cầu của bạn\r\nĐặc điểm sản phẩm:\r\n\r\n- Balo được làm bằng chất liệu nhựa cao cấp, form chắc chắn giúp bạn an tâm khi vận chuyển boss cưng\r\n\r\n- Balo đựng chó mèo dáng hộp được dùng khi ra đường, đi chơi rất tiện lợi, an toàn và tạo cảm giác thoải mái cho vật nuôi\r\n\r\n- Chất liệu túi không thấm nước và dễ làm vệ sinh làm sạch\r\n\r\n- Nút thắt an toàn tạo cảm giác chắc chắn, không gây mỏi vai, lưng\r\nKích thước: 32*29*42CM, phù hợp với mèo và các giống chó nhỏ\r\nCách sử dụng balo: \r\n\r\n- Mở dây kéo khóa, bạn kéo dây kéo và cho thú cưng của bạn vào bên trong\r\n\r\n- Kéo toàn bộ khóa kéo về 1 bên mép, tránh không để khóa kéo trên đỉnh sẽ dễ tuột hoặc vô tình làm tuột\r\n\r\n- Kiểm tra lại thú cưng của bạn qua\r\n vòm kính hoặc lổ thông gió 2 bên\r\nCách vệ sinh balo:\r\n\r\n- Khi chó hoặc mèo của bạn tè hay đi bậy vào balo phi hành gia thì trước hết bạn nên dùng khăn giấy thấm bớt.\r\n\r\n- Sau đó, tháo toàn bộ nắp lưng và ngâm trong thau nước khoảng 5 phút.\r\n\r\n- Dùng xà bông chà lên mặt trong, tẩy sạch chỗ bẩn.\r\n\r\n- Phơi khô nơi có nhiều nắng để làm sạch và khử khuẩn balo', '', 100, '2021-03-22 04:52:17', 1),
(25, 'Ferplast Atlas Professional - Lồng vận chuyển ', 440000, '1', 'e0740687a08afd4b40add22e81fc6e08.jfif', 'Vali Ferplast Atlas Professional đạt chuẩn qui định IATA giúp có thể vận chuyển dễ dàng thú cưng khi đi máy bay, tàu thủy hoặc tàu hỏa. Với thiết kế khóa an toàn, tay cầm tiện lợi cùng với loại nhựa tốt đến từ Ý sẽ tạo sự an toàn nhất cho thú cưng. ', '', 12, '2021-03-22 04:52:17', 1),
(29, 'Hagen Kitty - Bàn chải cao su (cho mèo)', 123000, '1', '3380_rubberslickerbrushkittypetcity.jpg', 'Sản phẩm giúp thu gom chết và bụi bẩn, thích hợp cho những giống mèo lông ngắn và mượt.\r\n\r\n \r\n\r\nGIỚI THIỆU VỀ HAGEN\r\n\r\nĐược thành lập bởi Rolf C. Hagen năm 1955, Hagen đã trở thành nhà sản xuất và phân phối các sản phẩm vật nuôi tư nhân lớn nhất thế giới. Hagen không ngừng nghiên cứu và sản xuất những sản phẩm đáp ứng tốt nhất các nhu cầu của thú cưng.\r\n\r\nGiai đoạn sản xuất\r\n\r\nNăm 1974, Hagen bắt đầu sản xuất lồng dây và bể thủy tinh. Ngày nay, nhờ vào sự phát triển của khoa học, Hagen có thể dễ dàng nghiên cứu các sản phẩm mới, tạo điều kiện trở thành nhà lanh đạo trong ngành công nghiệp sản xuất phụ kiện cho thú cưng.\r\n\r\nSản phẩm bạn có thể tin cậy\r\n\r\nVới bất kỳ chủ vật nuôi nào cũng luôn mong muốn tìm được những sản phẩm tốt nhất cho việc chăm sóc thú cưng.\r\n\r\nHagen có thể chia sẽ tinh yêu, niềm say mê thú cưng và chăm sóc chúng cùng với bạn. Với các thanh phần có chất lượng cao nhất có trong tất cả các sản phẩm chăm sóc thú cưng, Hagen luôn đảm bảo chất lượng từ giai đoạn thiết kế đến việc lựa chọn nguyên liệu cho quy trinh sản xuất đóng gói trước khi đưa ra thị trường.', '', 100, '2021-03-22 04:54:50', 1),
(31, 'Găng tay tắm massage cho chó mèo', 48000, '1', 'cb7b75a92bebf65cf68c6312b5e69c8c.jfif', 'Chất liệu cao su mềm mại, thiết kế hình bàn tay, có gai mềm dễ dàng tiếp xúc massage bề mặt da của thú cưng, các gai mềm có khả năng loại bỏ lông rụng, lông chết hữu\r\nhiệu. Không hại da tay, móng tay mà lại sạch hơn tắm bằng tay', '', 100, '2021-03-22 04:54:50', 1),
(32, 'Súp thưởng Ciao vị cá ngừ bổ sung Collagen cho mèo (14g*4) thanh lẻ', 11000, '1', '4363_ciao_ava.jpg', 'Thành phần \r\n\r\nCá ngừ, chiết xuất cá ngừ, thủy phân protein, đường (oligosacarit), dầu thực vật, tinh bột (tinh bột biến tính) Khoáng chất, chất làm đặc, gia vị (axit Amino), Vitamin E, chiết xuất trà xanh, màu mon Damascus.\r\n\r\nThành phần dinh dưỡng \r\n\r\nProtein thô (tối thiểu) 7,0%, Chất béo thô (tối thiểu) 0,2%, Chất xơ thô (tối đa) 0,1%, Tro thô (tối đa) 1,5%, Độ ẩm (tối đa) 91,0%, Khoảng 7 kcal / ống\r\n\r\nSử dụng\r\n\r\nCho ăn trực tiếp – Dùng như bánh thưởng.\r\n\r\nKhẩu phần: 56g/ ngày.\r\n\r\nSản phẩm này không dùng thay thế bữa ăn chính. Luôn giữ cung cấp nước sạch thường xuyên.', '', 100, '2021-03-22 04:56:56', 2),
(33, 'Thức ăn ướt Me-o Delite vị cá ngừ và thịt gà xé 70gr', 20000, '1', NULL, 'Nguyên Liệu Chính: Cá ngừ tươi, thịt gà xé, chất tạo đông, chất điều vị, taurin, các vitamin và khoáng chất.\r\n\r\nThành phần dinh dưỡng \r\n\r\nChất đạm : 8%\r\n\r\nChất béo : 0.3% \r\n\r\nChất xơ : 1%\r\n\r\nĐộ ẩm : 90%\r\n\r\nĐiểm nổi bật \r\n\r\nĐược làm từ cá thật\r\nTaurine: Tăng cường hệ miễn dịch và thị giác.\r\nBiotin/ Zinc: Giúp làn da và bộ long khỏe mạnh.\r\nVitamin C: Giúp tăng cường hệ miễn dịch.\r\nBảo quản: Nơi khô ráo thoáng mát', '', 100, '2021-03-22 04:56:56', 1),
(34, 'Thức ăn cho mèo vị cá hồi và thịt vịt ANF Organic 6Free Skin Care Salmon & Duck', 290000, '1', 'thuc-an-cho-meo-vi-ca-hoi-va-thit-vit-anf-organic-6free-skin-care-salmon-duck-400x400.jpg', 'Thức ăn cho mèo  vị cá hồi và thịt vịt ANF  Organic 6Free Skin Care Salmon & Duck là thức ăn nhập khẩu từ Hàn Quốc dành riêng cho mèo có da nhạy cảm. Hàm lượng đạm cá hồi thủy phân giúp tăng tỷ lệ hấp thụ tiêu hóa và giảm nguy cơ dị ứng.\r\n\r\nThức ăn cho mèo vị cá hồi và thịt vịt ANF Organic 6Free Skin Care Salmon & Duck với 6 không: không gây đột biến gen, không chứa thuốc kháng sinh, không chứa thuốc trừ sâu, không chứa hóc môn, không chứa màu nhân tạo, không chứa chất bảo quản hóa học.\r\n\r\nLợi ích chính\r\nThức ăn cho mèo vị cá hồi và thịt vịt ANF Organic 6Free Skin Care Salmon & Duck dành cho các độ tuổi của mèo. Là dòng sản phẩm chuyên về da và lông của mèo. Với hương vị cá hồi chắc chắn sẽ làm người bạn bốn chân của bạn thích thú. Hoàn toàn phù hợp với những chú mèo có làn da nhạy cảm. Thức ăn cho mèo ANF Nature 6Free Skin care Salmon & Duck từ cá hồi chứa nhiều Omega 3 chống lão hóa ở thú cưng. Các thành phần từ thịt vị nhiều protein và vitamin thiết yêu bổ sung khoáng tăng cường sức khỏe. Không gây kích ứng da thú cưng. Giúp thú cưng tiêu hóa tốt, lợi tiểu.\r\n\r\nThức ăn cho mèo ANF Skin Care bao gồm hàm lượng yến mạch và đạm cá hồi phong phú. Giúp duy trì làn da khỏe mạnh và bộ lông mềm mượt cho mèo. L-Lysine hỗ trợ duy trì hệ miễn dịch. Hình thành protein thiết yếu và tăng cường hấp thu canxi. Thành phần thảo dược thiên nhiên hỗ trợ duy trì hệ miễn dịch khỏe mạnh và hình thành các lợi khuẩn bên trong đường ruột. Lông vón cục được đào thảo trong ruột mèo. Việt quất hỗ trợ đường tiết niệu khỏe mạnh.\r\n\r\nThành phần dinh dưỡng\r\nThức ăn cho mèo vị cá hồi và thịt vịt ANF Organic 6Free Skin Care Salmon & Duck được làm từ đạm động vật, gạo hữu cơ, đạm thực vật, dầu tinh luyện, gạo lứt hữu cơ, yến mạch hữu cơ, củ cải đường, hạt hướng dương, hạt lanh hữu cơ. Lúa mạch hữu cơ, hạt vừng, hạt lanh, kiều mạch, khoai lang hữu cơ. L – lysine, cà rốt, khoai lang, bó đỏ, cà rốt, dầu cá hồi. Vitamin tổng hợp A, D3, E, K3, B1, B2, B5… Axit, các khoáng chất tổng hợp sắt, đồng, kẽm, mangan, taurine, thảo dược…', '', 150, '2021-03-22 04:59:09', 1),
(35, 'Thức ăn cho mèo Anh lông ngắn CATIDEA British ShorthairBritish Shorthair', 565000, '1', 'thuc-an-cho-meo-anh-long-ngan-catidea-british-shorthair-400x400.jpg', 'Thức ăn cho mèo  Anh lông ngắn CATIDEA  British ShorthairBritish Shorthair là thức ăn dành riêng cho giống mèo anh lông ngắn mới cai sữa và mèo trưởng thành. Thức ăn có các thành phần kích thích mèo phát triển nhanh, khỏe mạnh, đạt tiêu chuẩn. Thành phần hoàn toàn tự nhiên giúp cung cấp dinh dưỡng cân đối cho mèo Anh lông ngắn.\r\n\r\nLợi ích chính\r\nThức ăn cho mèo Anh lông ngắn CATIDEA British ShorthairBritish Shorthair cung cấp cho mèo cưng đầy đủ các chất dinh dưỡng cần thiết. Chăm sóc lông mềm mượt, khỏe mạnh, ngăn giảm lông tối đa, giảm tỷ lệ búi lông. Hỗ trợ tiêu hóa và thúc đấy quá trình phát triển của mèo cưng ổn định.\r\n\r\nThành phần dinh dưỡng\r\nTThức ăn cho mèo Anh lông ngắn CATIDEA British ShorthairBritish Shorthair được làm từ các thành phần dinh dưỡng sau:\r\n\r\n89% từ thịt: thịt bò, xương bò, thịt các loại, hơn 40 loại cá.\r\nRau quả: khoai tây, khoai mỡ, rau, bí ngô, việt quất, bông cải xanh, cà rốt, rau chân vịt.\r\nPhụ gia: men bia, mỡ gà, dầu cá…\r\nCấu tạo hạt thức ăn giúp kéo dài thời gian nhai thức ăn. Giúp rèn luyện cơ hàm, bảo vệ sức khỏe răng miệng cho mèo. Sản phẩm hoàn toàn không chứa phẩm màu, phụ gia độc hại, chất bảo quản thực phẩm.', '', 60, '2021-03-22 04:59:09', 1),
(40, 'Xương cho chó gặm vị sữa và thịt bò BUDGE Bone Shape Dental Stick Milk and Beef Flavor', 35000, '11', 'xuong-cho-cho-gam-vi-sua-va-thit-bo-budge-bone-shape-dental-stick-milk-and-beef-flavor-400x400.jpg', 'Xương cho chó gặm vị sữa và thịt bò BUDGE  Bone Shape Dental Stick Milk and Beef Flavor là thức ăn dinh dưỡng dành riêng cho các giống chó.\r\nLợi ích chính\r\nXương cho chó gặm vị sữa và thịt bò BUDGE Bone Shape Dental Stick Milk and Beef Flavor bổ sung chất dinh dưỡng cực tốt cho thú cưng\r\nSản phẩm xương gặm giúp loại bỏ 99% những mảng bám răng cứng đầu, làm giảm mùi hôi miệng.\r\nThúc đẩy hệ tiêu hóa và tránh được những bệnh về đường ruột.\r\nBổ sung Canxi giúp xương và răng luôn chắc khỏe. Kích thích hoạt động nhai của cún cưng.\r\nThành phần dinh dưỡng\r\nXương cho chó gặm vị sữa và thịt bò BUDGE Bone Shape Dental Stick Milk and Beef Flavor với các thành phần như sữa và thịt bò, thịt động vật. Dẫn xuất thực vật, dầu thực vật, ngũ cốc, rau, khoáng chất và Vitamin A, B, E… Hương vị tự nhiên, tạo màu, chất bảo quản đảm bảo an toàn vệ sinh thực phẩm.', '', 100, '2021-03-07 08:09:22', 3),
(55, 'Thức ăn cho chó con ROYAL CANIN Medium Puppy', 170000, '11', 'thuc-an-cho-cho-con-royal-canin-medium-puppy-1kg-400x400.jpg', 'Thức ăn cho chó ROYAL CANIN  Medium Puppy dành cho chó con dưới 12 tháng tuổi.\r\n\r\nLợi ích chung\r\nThức ăn cho chó ROYAL CANIN Medium Puppy với công thức đặc chế riêng cho nhu cầu dinh dưỡng của chó con. Sản phẩm được nghiên cứu để cung cấp dinh dưỡng theo nhu cầu thực tế của chó con. Duy trì sức đề kháng cho chó con: chất chống oxy hóa CELT, công thức dinh dưỡng phù hợp. Hỗ trợ hệ tiêu hóa hoạt động ổn định: L.I.P, đường FOS. Cung cấp dinh dưỡng toàn diện cho chó: chế biến theo công thức cung cấp năng lượng cao\r\n\r\nThức ăn cho chó ROYAL CANIN Puppy có dạng viên hình tam giác phù hợp với cấu tạo răng của chó, giảm nguy cơ hình thành mảng bám răng ở chó. Kích thước hạt phù hợp cỡ răng, thông qua việc cọ xát vào răng giúp bảo vệ răng miệng cho chó.\r\n\r\nDuy trì hệ tiêu hóa khỏe mạnh. Men tiêu hóa L.I.P hỗ trợ chó hấp thu chất dinh dưỡng, cân bằng hệ vi sinh đường ruột, giảm bớt lượng phân và mùi nhẹ hơn. Đường tự nhiên FOS: cân bằng hệ vi sinh đường ruột. Gia tăng số lượng lợi khuẩn, bảo vệ đường ruột khỏi vi khuẩn có hại.\r\n\r\nThành phần dinh dưỡng\r\nBột phụ phẩm gà, mỡ gà, gạo ủ, ngô, lúa mì, bột ngô, bột củ cải khô, gluten lúa mì, hương vị tự nhiên, bột gạo, dầu cá, Photphat Monocalcium, dầu thực vật, Natri Silico Aluminate, Kali Clorua, muối, Fructooligosacarit, men thủy phân (nguồn Betaglucans), Yucca schidigera. Chiết xuất, DL-methionine, Vitamin [DL-alpha tocopherol acetate (nguồn Vitamin E), L-ascorbyl-2-polyphosphate (nguồn Vitamin C), Biotin, D-Canxi Pantothenate, Vitamin A Acetate, bổ sung Niacin, Pyridoxine (vitamin B6), Thiamine Mononitrate (Vitamin B1), bổ sung Vitamin B12, bổ sung Riboflavin, bổ sung Vitamin D3, Axit folic], Taurine, Monosodium Phosphate, Choline Clorua, khoáng chất vi lượng [kẽm Proteinate, kẽm oxit, Mangan Protein, Sulfate, Mangan Oxit Mangan, đồng Sunfat, Canxi Iodate, Natri Selenite, đồng Proteinate], L-lysine, chiết xuất cúc vạn thọ ( Tagetes erecta L.), Carotene, chiết xuất hương thảo, được bảo quản bằng hỗn hợp Tocopherols và Axit Citric.\r\n\r\nHướng dẫn cho ăn\r\nTạo thói quen ăn uống cho chó. Dựa theo tuổi của chó, cần cho ăn một ngày 3 lần vào các giờ cố định. Cho ăn tại một chỗ để tạo thói quen tốt cho chó. Nên cho chó ăn thức ăn chế biến riêng, không cho ăn thức ăn thừa của người. Vì thức ăn của người có nhiều thành phần khiến chó bị rối loạn tiêu hóa, dễ bị bệnh béo phì. Bảo đảm cung cấp đủ nước uống cho chó. Nếu thấy nước bị chó làm bẩn, cần thay nước mới ngay lập tức.\r\n\r\nKhi muốn đổi thức ăn mới cho chó, có thể trộn lẫn thức ăn cũ và mới khi cho ăn. Tăng dần tỉ lệ trong vòng 7 ngày. Đột ngột thay đổi loại thức ăn mới có thể gây mất cân bằng hệ tiêu hóa. Chó dễ bị khó tiêu và đi ngoài.\r\n\r\nMột số lưu ý\r\nChó con mới mọc răng cần cho ăn thức ăn mềm, vì vậy trước khi cho ăn cần ngâm trong nước ấm 40°C – 60°C. Sau 15′ thức ăn mềm là có thể cho ăn.\r\n\r\nChó con còn nhỏ không tiêu hóa được quá nhiều thức ăn. Chó con mới cai sữa ngày cho ăn 4 lần, dưới 6 tháng tuổi ngày cho ăn 3 lần.\r\n\r\nTham khảo khuyến cáo trên bao bì sản phẩm để giúp chó con duy trì trạng thái tốt nhất. Hạn sử dụng 18 tháng kể từ ngày sản xuất.', '', 100, '2021-03-07 08:37:58', 1),
(56, 'Bánh thưởng cho chó dạng que vị thịt cừu WUJI Jerky Stick Lamb Flavor', 55000, '11', 'banh-thuong-cho-cho-dang-que-vi-thit-cuu-wuji-jerky-stick-lamb-flavor-400x400.jpg', 'Bánh thưởng cho chó dạng que vị thịt cừu WUJI  Jerky Stick Lamb Flavor phù hợp với tất cả các giống chó.\r\n\r\nLợi ích chính\r\nKẽm giúp duy trì tính toàn vẹn của da và lông.\r\nCollagen làm giảm các dấu hiệu lão hóa.\r\nVitamin E & Selen giúp bảo vệ tổn thương do các gốc tự do gây ra (Chất chống oxy hóa).\r\nVitamin A cần thiết để giữ cho thị lực rõ ràng và lâu hơn.\r\nProtein giúp phát triển cơ bắp và sửa chữa các mô.\r\nVitamin D3 giúp xương và răng chắc khỏe.\r\nVitamin B1, B5, B6, B12 cần thiết cho các chức năng của não.\r\nVitamin B1 giúp tăng cường trao đổi chất.\r\nThành phần dinh dưỡng\r\nBánh thưởng cho chó dạng que vị thịt cừu WUJI Jerky Stick Lamb Flavor được làm từ thịt gà thật. Kết hợp với bột mì, Glycerin thực vật, tinh bột sắn, thịt cừu, Kali sorbat, Vitamin và khoáng chất, màu nước rau củ. Phân tích đảm bảo:\r\n\r\nProtein thô (tối thiểu): 20%\r\nChất béo thô (Tối thiểu): 9%\r\nSợi thô (Tối đa): 6%\r\nĐộ ẩm (Tối đa): 20%\r\nHướng dẫn cho ăn\r\nChó trưởng thành 1 – 5kg: 1 – 2 miếng mỗi ngày.\r\nChó trưởng thành 5 – 10kg: 2 – 3 miếng mỗi ngày.\r\nChó trưởng thành 10 – 20kg: 3 – 5 miếng mỗi ngày.', '', 100, '2021-03-07 08:37:58', 1),
(57, 'Nước sốt cho chó vị thịt bò và cà rốt JERHIGH Beef Grilled & Carrot In Gravy', 30000, '11', 'nuoc-sot-cho-cho-vi-thit-bo-va-ca-rot-jerhigh-beef-grilled-carrot-in-gravy-400x400.jpg', 'Nước sốt cho chó vị thịt bò và cà rốt JERHIGH  Beef Grilled & Carrot In Gravy dành cho tất cả các giống chó.\r\n\r\nLợi ích chính\r\nNước sốt cho chó JERHIGH Beef Grilled & Carrot In Gravy vị bò nướng và cà rốt tẩm nước sốt giúp da và lông khỏe mạnh. Khoáng chất kẽm giúp bảo vệ toàn diện da và lông. Omega 3 và làm giảm dấu hiệu của lão hóa, trẻ hóa các tể bào. Hồi phục các vùng thương nhanh chóng. Thúc đẩy quá trình trao đổi chất. Đồng thời hỗ trợ hệ tiêu hóa ổn định.\r\n\r\nSản phẩm nước nước sốt cho chó JERHIGH Beef Grilled & Carrot In Gravy được đóng gói tiện dụng siêu nhẹ với trọng lượng 120g. Rất thuận tiên cho việc sử dụng và mang theo khi di chuyển. Bạn có thể dễ dàng sử dụng bằng cách cho cún cưng ăn trực tiếp hoặc trộn với thức ăn khô. JerHigh Beef Grilled & Carrot In Gravy phù hợp với cả những chú chó biếng ăn nhất. Mang lại cảm giác ngon miệng và hưng phấn cho thú cưng trước khi ăn uống. Để đảm bảo dinh dưỡng tốt nhất, bạn nên đặt cạnh bát ăn một ít nước uống để cún cưng có thể dễ dàng sử dụng.\r\n\r\nThành phần dinh dưỡng\r\nNước sốt cho chó vị thịt bò và cà rốt JERHIGH Beef Grilled & Carrot In Gravy được sử dụng nguồn nguyên liệu nguyên chất 100%. Sản phẩm được sản xuất dựa trên các tiêu chuẩn thực phẩm an toàn của con người mang lại những giá trị dinh dưỡng cho vật nuôi. Để có một sản phẩm nước sốt cho chó JerHigh – Beef Grilled & Carrot In Gravy cần có: Thịt bò, thịt gà, bột biến tính. Gan gà, cà rốt, chất tạo đông Carrageenan. Chất điều vị, Gluten lúa mì, vị thịt, vị xông khói. Đường, muối, Omega 3 và 6. Khoáng chất kẽm và chất điều vị Glycine, chất tạo màu tự nhiên.', '', 100, '2021-03-07 08:37:58', 1),
(58, 'Sữa tắm cho chó lông màu nâu đỏ JOYCE & DOLLS 102 Red Brown Hair', 255000, '11', 'sua-tam-cho-cho-long-mau-nau-do-joyce-dolls-102-red-brown-hair-400x400.jpg', 'Sữa tắm cho chó lông màu nâu đỏ JOYCE DOLLS 102 Red Brown Hair phù hợp với các giống chó có màu lông nâu đỏ. Đặc biệt là chó Poodle.\r\n\r\nLợi ích chính\r\nSữa tắm cho chó lông màu nâu đỏ JOYCE & DOLLS 102 Red Brown Hair bổ sung chất dưỡng ẩm và giúp cho lông giữ được màu gốc. Sản phẩm chứa các thành phần như tảo lục chlorella dưới biển sâu, chống oxy hóa, dưỡng ẩm. Và cấu trúc hóa học tannin, chiết xuất từ lựu và các sắc tố tự nhiên khác. Giúp lông trở nên bóng mượt. Luôn đảm bảo rằng lông của thú cưng được bảo vệ. Làm cho lông không bị ảnh hưởng bởi những tác động xấu từ môi trường bên ngoài. Tránh bị bạc màu, xỉn màu. Lưu giữ hương thơm bền lâu. Khử mùi hôi hiệu quả.\r\n\r\n', '', 100, '2021-03-07 08:37:58', 1),
(59, 'Nệm lông thú ABC size 2', 295000, '11', '4179_dsc09880_removebg_preview.png', '-Với nhiều người, chó mèo không chỉ là động vật giúp giữ nhà, đuổi chuột mà còn là người bạn nhỏ thân thiết và rất trung thành.\r\n\r\n-Do đó, hãy thể hiện tình yêu thương của bạn dành cho “người bạn nhỏ” đáng yêu này bằng cách trang bị cho chúng một chiếc nệm vuông êm ái và xinh xắn của ABC để thú cưng có một nơi thư giãn thật thoải mái.\r\nĐặc điểm nổi bật\r\n\r\n- Chất liệu cotton thông thoáng, dễ vệ sinh, rất phù hợp với khí hậu nóng ẩm ở Việt Nam.\r\n\r\n- Bề mặt nằm có 2 lớp nệm tạo sự êm ái, thú cưng nhà bạn sẽ luôn có cảm giác được nâng niu và yêu chiều.\r\n', '', 100, '2021-03-07 08:37:58', NULL),
(60, 'Dụng Cụ Lấy Lông Chó Mèo Bám Dính', 145000, '11', '99677861bf830e314f6cbb831a479b1a.jfif', 'Với những người nuôi chó mèo, việc lông thú rải khắp nơi là điều không thể tránh khỏi. Lông thú cưng rơi vào quần áo, dính vào đồ dùng gây bất tiện cho chủ nhân, lại mất vệ sinh. Vì vậy, xử lý những đám lông rơi vãi khắp nơi chính là điều ai cũng muốn! Hiểu được nỗi niềm đó, sản phẩm Dụng Cụ Lấy Lông Chó Mèo Bám Dính đã ra đời để giải quyết vấn đề này giúp bạn! \r\n\r\nMô Tả Sản Phẩm Dụng Cụ Lấy Lông Chó Mèo Bám Dính\r\nViệc nuôi thú cưng mang lại nhiều niềm vui cho bạn, nhưng bên cạnh đó cũng không thể phủ nhận có một chút phiền toái khi mà các boss rụng lông khắp nhà...\r\n\r\nNếu bạn đang không thoải mái khi mỗi sáng đi làm với quần áo dính đầy lông mèo, hay tối về nhà thấy lông chó mèo khắp giường và sofa, thì Dụng Cụ Lấy Lông Chó Mèo Bám Dính chắc chắn là vị cứu tinh của bạn rồi!', '', 100, '2021-03-07 08:37:58', 2),
(61, 'Yếm Police ABC 3cm đen', 150000, '12', '1050_yem_police_abc_3cm_mau___en.jpg', '+ Chiếc yếm Police ABC không những giúp bạn giữ chặt và theo sát chú thú cưng của mình mà còn là điểm nhấn nổi bật để chú thú cưng của bạn trông thật “cá tính” trong mọi chuyến đi dạo hoặc chạy bộ đầy hứng khởi.\r\n\r\n+ Với thiết kế dạng yếm ôm sát cực kỳ chắc chắn, ABC là “người phụ tá” đắc lực và lý tưởng giúp bạn dễ dàng “quản lý” các chú cún hiếu động và tinh nghịch.\r\n\r\nĐẶC ĐIỂM NỔI BẬT\r\n\r\n- Chất liệu chắc chắn và thiết kế dày dặn cho độ bền cao, đồng thời tạo cảm giác êm ái khi đeo.\r\n\r\n- Dạng yếm ôm sát cực kỳ chắc chắn giúp bạn “quản lý” các chú cún hiếu động và tinh nghịch dễ hơn.\r\n\r\n- Thiết kế mạnh mẽ và cá tính với dòng chữ Police Dog in nổi bật bên trên.\r\n\r\n- Thiết kế khóa bấm giúp bạn dễ dàng đeo hoặc tháo mở dây và vòng một cách nhanh chóng.', '', 100, '2021-03-07 09:40:04', 1);

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
-- Chỉ mục cho bảng `tbl_don_dich_vu`
--
ALTER TABLE `tbl_don_dich_vu`
  ADD PRIMARY KEY (`id_don_hang`);

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
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT cho bảng `tbl_danh_muc`
--
ALTER TABLE `tbl_danh_muc`
  MODIFY `id_danh_muc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  MODIFY `id_dich_vu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_don_dich_vu`
--
ALTER TABLE `tbl_don_dich_vu`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
