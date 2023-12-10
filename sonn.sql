-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 12:59 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sonn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `madh` varchar(50) NOT NULL,
  `iduser` int(10) NOT NULL,
  `bill_name` varchar(50) NOT NULL,
  `bill_diachi` varchar(50) NOT NULL,
  `bil_tell` varchar(20) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `pttt` tinyint(1) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0 đơn hàng mới, 1 đang xử lý, 2 đang giao hàng, 3 đã giao hàng\r\n ',
  `voucher` int(6) NOT NULL,
  `total` int(9) NOT NULL,
  `tongthanhtoan` int(9) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `madh`, `iduser`, `bill_name`, `bill_diachi`, `bil_tell`, `bill_email`, `pttt`, `ngaydathang`, `bill_status`, `voucher`, `total`, `tongthanhtoan`, `code_cart`) VALUES
(152, '', 1, 'sonnu', 'CVPM Quang Trung-TPHCM', '0379374923', 'sonle.021004@gmail.com', 2, '08:44:07am 07/12/2023', 3, 0, 200000, 0, ''),
(153, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '04:09:24am 09/12/2023', 2, 0, 200000, 0, ''),
(154, '', 1, 'sonnu', 'CVPM Quang Trung-TPHCM', '0379374923', 'sonle.021004@gmail.com', 1, '04:13:36am 09/12/2023', 0, 0, 300000, 0, ''),
(156, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '02:46:24pm 09/12/2023', 5, 0, 200000, 0, ''),
(157, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '04:15:11am 10/12/2023', 0, 0, 300000, 0, ''),
(158, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '06:57:46am 10/12/2023', 0, 0, 2800000, 0, ''),
(159, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '08:39:33am 10/12/2023', 0, 0, 650000, 0, ''),
(160, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '09:16:27am 10/12/2023', 0, 0, 300000, 0, ''),
(161, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 0, '09:28:53am 10/12/2023', 0, 0, 200000, 0, ''),
(162, '', 19, 'bonkido', '', '', 'ntpmonster@gmail.com', 1, '11:48:37am 10/12/2023', 0, 0, 750000, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `postdate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `name`, `iduser`, `idsp`, `noidung`, `postdate`) VALUES
(33, 'bonkido', 19, 21, 'sản phẩm rất tốt', NULL),
(37, 'bonkido', 19, 20, 'chuột bị hư chưa', NULL),
(38, 'bonkido', 19, 18, 'nhìn chuột đẹp quá nhức đầu', NULL),
(44, 'sonnu', 1, 22, 'trắng nõn nà', NULL),
(45, 'sonnu', 1, 21, 'sản phẩm còn nhiều không', NULL),
(73, 'bonkido', 19, 21, 'sản phẩm còn nhiều không', NULL),
(79, 'bonkido', 19, 22, 'tôi rất thích sản phẩm này', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `idpro` int(4) NOT NULL,
  `iduser` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `soluong` int(3) NOT NULL,
  `tongtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `iduser`, `price`, `name`, `img`, `soluong`, `tongtien`, `idbill`) VALUES
(69, 1, 1, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 152),
(70, 19, 19, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 153),
(71, 1, 1, 300000, 'chuot4.jpg', 'Chuột gaming Newmen ', 1, 300000, 154),
(72, 19, 19, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 156),
(73, 19, 19, 300000, 'chuot4.jpg', 'Chuột gaming Newmen ', 1, 300000, 157),
(74, 19, 19, 250000, 'chuot2.jpg', 'Chuột chơi game G5 ', 10, 2500000, 158),
(75, 19, 19, 150000, 'chuot6.jpg', 'G27 Trắng Ngà ', 2, 300000, 158),
(76, 19, 19, 300000, 'chuot4.jpg', 'Chuột gaming Newmen xuất sử Hàn Quốc', 1, 300000, 159),
(77, 19, 19, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 159),
(78, 19, 19, 150000, 'chuot6.jpg', 'G27 Trắng Ngà ', 1, 150000, 159),
(79, 19, 19, 300000, 'chuot4.jpg', 'Chuột gaming Newmen xuất sử Hàn Quốc', 1, 300000, 160),
(80, 19, 19, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 161),
(81, 19, 19, 300000, 'chuot4.jpg', 'Chuột gaming Newmen xuất sử Hàn Quốc', 1, 300000, 162),
(82, 19, 19, 200000, 'chuot5.jpg', 'G15 Hồng-pink', 1, 200000, 162),
(83, 19, 19, 250000, 'chuot2.jpg', 'Chuột chơi game G5 ', 1, 250000, 162);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`) VALUES
(1, 'Bàn Phím Không Dây', 1, 1),
(2, 'Bàn Phím Có Dây', 0, 0),
(4, 'Chuột', 0, 3),
(10, 'Hàng cũ', 0, 0),
(11, 'Laptop', 0, 0),
(12, 'Phụ kiện', 0, 0),
(13, 'PC Gaming', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangmuc`
--

CREATE TABLE `hangmuc` (
  `id` int(5) NOT NULL,
  `img` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangmuc`
--

INSERT INTO `hangmuc` (`id`, `img`, `name`) VALUES
(5, 'dm1.webp', 'Laptop'),
(6, 'dm2.webp', 'PC'),
(7, 'dm3.webp', 'Màn hình'),
(8, 'dm4.webp', 'Mainboard'),
(9, 'dm5.webp', 'CPU'),
(10, 'dm6.webp', 'VGA'),
(11, 'dm7.webp', 'RAM'),
(12, 'dm8.webp', 'Ổ cứng'),
(13, 'dm9.webp', 'Case'),
(14, 'dm10.webp', 'Tản nhiệt'),
(15, 'dm11.webp', 'Nguồn'),
(16, 'dm12.webp', 'Bàn phím'),
(17, 'dm13.jpg', 'Chuột'),
(18, 'dm14.webp', 'Ghế gaming'),
(19, 'dm15.webp', 'Tai nghe'),
(20, 'dm16.webp', 'Loa'),
(21, 'dm17.webp', 'Console'),
(22, 'dm18.webp', 'Phụ kiện'),
(23, 'dm19.webp', 'Thiết bị VP'),
(24, 'dm20.webp', 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(100) NOT NULL DEFAULT 0,
  `view` int(9) NOT NULL DEFAULT 0,
  `bestseller` tinyint(1) NOT NULL DEFAULT 0,
  `iddm` int(4) NOT NULL,
  `comment` varchar(100) NOT NULL DEFAULT '0',
  `share` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `view`, `bestseller`, `iddm`, `comment`, `share`) VALUES
(1, 'Full White keyboard', 'kd9.jpg', 600000, 12, 1, 1, '5', '1'),
(2, 'Black and Red keyboard', 'kd10.jpg', 600000, 33, 1, 1, '2', '11'),
(3, 'Full Black keyboard', 'kd1.jpg', 600000, 45, 0, 1, '5', '54'),
(4, 'Pink and black keyboard', 'kd4.jpg', 600000, 2000, 1, 1, '245', '321'),
(5, 'Sky-pink keyboard', 'kd7.jpg', 600000, 6, 1, 1, '78', '9'),
(6, 'Black-white keyboard', 'kd5.jpg', 700000, 100, 0, 1, '23', '67'),
(7, 'Pink-color keyboard', 'kd6.jpg', 900000, 1, 0, 1, '1', '1'),
(8, 'Black&white Keyboard', 'kd8.jpg', 750000, 2, 0, 1, '1', '0'),
(9, 'Full black keyboard', 'cd1.jpg', 805000, 102, 0, 2, '72', '4'),
(10, 'Yellow keyboard', 'cd2.jpg', 750000, 454, 0, 2, '67', '120'),
(11, 'black-dragon keyboard', 'cd3.jpg', 850000, 102, 1, 2, '0', '0'),
(12, 'blue-switch keyboard', 'cd4.jpg', 700000, 102, 1, 2, '0', '0'),
(13, 'pink-switch keyboard ', 'cd5.jpg', 780000, 102, 0, 2, '0', '0'),
(14, 'Full-black(2) keyboard', 'cd6.jpg', 400000, 102, 1, 2, '0', '0'),
(15, 'Gaming-black keyboard', 'cd7.jpg', 900000, 102, 0, 2, '0', '0'),
(16, 'pink-light keyboard', 'cd8.jpg', 650000, 222, 1, 2, '23', '8'),
(17, 'Chuột MARVO M-300', 'chuot1.jpg', 200000, 921, 0, 4, '6', '55'),
(18, 'Chuột chơi game G5 ', 'chuot2.jpg', 250000, 93, 1, 4, '7', '8'),
(19, 'Chuột G5 tùy chỉnh DPI', 'chuot3.jpg', 2344, 105, 0, 4, '5', '8'),
(20, 'Chuột gaming Newmen xuất sử Hàn Quốc', 'chuot4.jpg', 300000, 569, 1, 4, '75', '890'),
(21, 'G15 Hồng-pink', 'chuot5.jpg', 200000, 348, 1, 4, '355', '235'),
(22, 'G27 Trắng Ngà Thiên Công Nữ', 'chuot6.jpg', 150000, 47, 0, 4, '34', '22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dienthoai` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(225) NOT NULL DEFAULT '',
  `verifiedEmail` varchar(255) NOT NULL DEFAULT '1',
  `token` varchar(225) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `ten`, `diachi`, `email`, `dienthoai`, `role`, `name`, `last_name`, `first_name`, `gender`, `picture`, `verifiedEmail`, `token`) VALUES
(1, 'sonnu', '2109', '', 'CVPM Quang Trung-TPHCM', 'sonle.021004@gmail.com', '0379374923', 1, '', '', '', '', '', '1', ''),
(13, 'Nữ', '210904', '', NULL, 'hongnu210904@gmail.com', NULL, 0, '', '', '', '', '', '1', ''),
(14, 'Lê Thanh Sơn', '1212', '', '208 Phan Huy Ích P12 Gò Vấp', 'sonle.021004@gmail.com', '0379374923', 0, '', '', '', '', '', '1', ''),
(18, '', '', '', NULL, 'ntpmonster@gmail.com', NULL, 0, 'Bé Bôn', 'Bôn', 'Bé', '', 'https://lh3.googleusercontent.com/a/ACg8ocIykwzvzXKNFOm_EpLm3fPvZJQIcSN6Fq9lJoBZdk_PwkE=s96-c', '1', '115439585673600287918'),
(19, 'bonkido', '123', '', NULL, 'ntpmonster@gmail.com', NULL, 0, '', '', '', '', '', '1', ''),
(20, '', '', '', NULL, 'phuntps29257@fpt.edu.vn', NULL, 0, 'Nguyen Thien Phu (FPL HCM)', '(FPL HCM)', 'Nguyen Thien Phu', '', 'https://lh3.googleusercontent.com/a/ACg8ocKHREsoPV8bgGSAHfsA3sTIszYl9m9l2KOSXCJK4_bODg=s96-c', '1', '111098230033944368608'),
(21, '', '', '', NULL, 'bonbonbon2k4@gmail.com', NULL, 0, 'Thiên Phú', 'Phú', 'Thiên', '', 'https://lh3.googleusercontent.com/a/ACg8ocJXAGBIlwJpfo8Wu1Kl_VG-KGXBmTWdRKRlQUCXjenSta4=s96-c', '1', '102156393300468217931'),
(22, 'bonkido1', '123', '', NULL, 'kobic@gmail.com', NULL, 0, '', '', '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `vnp_BankCode` varchar(50) NOT NULL DEFAULT '0',
  `vnp_BankTranNo` varchar(100) NOT NULL,
  `vnp_CardType` varchar(100) NOT NULL,
  `vnp_OrderInfo` varchar(50) NOT NULL,
  `vnp_PayDate` varchar(50) NOT NULL,
  `vnp_ResponseCode` varchar(50) NOT NULL,
  `vnp_TmnCode` varchar(50) NOT NULL,
  `vnp_TransactionNo` varchar(50) NOT NULL,
  `vnp_TransactionStatus` varchar(50) NOT NULL,
  `vnp_TxnRef` varchar(50) NOT NULL,
  `vnp_SecureHash` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`, `code_cart`) VALUES
(4, '50000000', 'NCB', 'VNP14233139', 'ATM', 'Noi dung thanh toan', '20231210183756', '00', 'Q7HD1GQL', '14233139', '00', '2087', '6228f31b32a7308fde7f0390504febc9afbff343cf3e840ebb', '2087'),
(5, '50000000', 'NCB', 'VNP14233147', 'ATM', 'Noi dung thanh toan', '20231210184228', '00', 'Q7HD1GQL', '14233147', '00', '546', '1a71f34f71499fc24aa141bd145e597b3b8d4b0f621f100d49', '546'),
(6, '20000000', 'NCB', 'VNP14233153', 'ATM', 'Noi dung thanh toan', '20231210184537', '00', 'Q7HD1GQL', '14233153', '00', '3406', '79664c54f522af83a8916a32d5222b3bbe64e9bce85441cbdb', '3406'),
(7, '20000000', 'NCB', 'VNP14233155', 'ATM', 'Noi dung thanh toan', '20231210184624', '00', 'Q7HD1GQL', '14233155', '00', '4057', '903ae6105ee61e9736fb3cdd1ba6ac1fd2a219a8d12c3f8d30', '4057');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_product` (`iduser`),
  ADD KEY `fk_user_binhluan` (`idsp`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_sanpham` (`idpro`),
  ADD KEY `fk_tesst` (`iduser`),
  ADD KEY `fk_cart_bill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hangmuc`
--
ALTER TABLE `hangmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_dm` (`iddm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hangmuc`
--
ALTER TABLE `hangmuc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_user_binhluan` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_user_product` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`idpro`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_tesst` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `fk_danhmuc_sanpham` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
