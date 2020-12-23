-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2020 at 04:00 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `ma_binhluan` int(10) NOT NULL AUTO_INCREMENT,
  `USERma_user` int(10) NOT NULL,
  `SANPHAMma_sp` int(10) NOT NULL,
  `binhluan` text,
  `thoigian` datetime DEFAULT NULL,
  PRIMARY KEY (`ma_binhluan`),
  KEY `FKBINHLUAN326762` (`USERma_user`),
  KEY `FKBINHLUAN139500` (`SANPHAMma_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `ma_chitiethd` int(10) NOT NULL AUTO_INCREMENT,
  `soluong` int(5) NOT NULL,
  `dongia` bigint(20) NOT NULL,
  `HOADONma_hd` int(10) NOT NULL,
  `SANPHAMma_sp` int(10) NOT NULL,
  PRIMARY KEY (`ma_chitiethd`),
  KEY `FKCHITIETHOA356838` (`HOADONma_hd`),
  KEY `FKCHITIETHOA558660` (`SANPHAMma_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`ma_chitiethd`, `soluong`, `dongia`, `HOADONma_hd`, `SANPHAMma_sp`) VALUES
(14, 1, 22590000, 8, 6),
(15, 1, 14990000, 8, 7),
(16, 1, 15290000, 8, 5),
(17, 1, 22590000, 9, 6),
(18, 1, 14990000, 9, 7),
(19, 1, 12240000, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `ma_danhmuc` int(10) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(20) DEFAULT NULL,
  `url` char(20) DEFAULT NULL,
  `hinh` varchar(20) NOT NULL,
  PRIMARY KEY (`ma_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ma_danhmuc`, `tendanhmuc`, `url`, `hinh`) VALUES
(1, 'Gamming Đồ Hoạ', 'gaming-do-hoa', ''),
(2, 'Doanh nhan', 'doanh-nhan', ''),
(3, 'Mỏng nhẹ', 'mong-nhe', ''),
(4, 'Sinh viên', 'sinh-vien', '');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sanpham`
--

DROP TABLE IF EXISTS `danhmuc_sanpham`;
CREATE TABLE IF NOT EXISTS `danhmuc_sanpham` (
  `DANHMUCma_danhmuc` int(10) NOT NULL,
  `SANPHAMma_sp` int(10) NOT NULL,
  PRIMARY KEY (`DANHMUCma_danhmuc`,`SANPHAMma_sp`),
  KEY `FK_SP` (`SANPHAMma_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

DROP TABLE IF EXISTS `hangsx`;
CREATE TABLE IF NOT EXISTS `hangsx` (
  `ma_nhasanxuat` int(10) NOT NULL AUTO_INCREMENT,
  `ten_nhasanxuat` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mota_nhasanxuat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `hinh_nhasanxuat` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`ma_nhasanxuat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hangsx`
--

INSERT INTO `hangsx` (`ma_nhasanxuat`, `ten_nhasanxuat`, `mota_nhasanxuat`, `hinh_nhasanxuat`) VALUES
(1, 'DELL', 'Dell là một công ty công nghệ đa quốc gia của Mỹ, được thành lập năm 1984 bởi nhà sáng lập Michael Dell', NULL),
(2, 'MSI', NULL, NULL),
(3, 'ASUS', NULL, NULL),
(4, 'HP', NULL, NULL),
(5, 'MacBook', NULL, NULL),
(7, 'Lenovo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hinh`
--

DROP TABLE IF EXISTS `hinh`;
CREATE TABLE IF NOT EXISTS `hinh` (
  `ma_hinh` int(10) NOT NULL AUTO_INCREMENT,
  `tenhinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SANPHAMma_sp` int(10) DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  PRIMARY KEY (`ma_hinh`),
  KEY `SANPHAMma_sp` (`SANPHAMma_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinh`
--

INSERT INTO `hinh` (`ma_hinh`, `tenhinh`, `url`, `SANPHAMma_sp`, `status`) VALUES
(5, 'banner', 'banner/2_1.jpg', NULL, NULL),
(6, 'banner', 'banner/2_2.jpg', NULL, NULL),
(7, 'banner', 'banner/2_5.jpg', NULL, NULL),
(8, 'banner', 'banner/2_6.jpg', NULL, NULL),
(15, 'banner_dell', '2.jpg', NULL, NULL),
(30, 'li-bg-menu', 'menu/li-bg-menu.jpg', NULL, NULL),
(87, 'sanpham', '7.jpg', 2, NULL),
(89, 'sanpham', '9.jpg', 2, NULL),
(90, 'sanpham', '10.jpg', 2, NULL),
(91, 'sanpham', '11.jpg', 2, NULL),
(92, 'sanpham', '12.jpg', 2, NULL),
(93, 'sanpham', '13.png', 3, NULL),
(94, 'sanpham', '14.png', 3, NULL),
(95, 'sanpham', '15.png', 3, NULL),
(96, 'sanpham', '16.png', 3, NULL),
(97, 'sanpham', '17.png', 3, NULL),
(99, 'sanpham', '18.jpg', 3, NULL),
(105, 'sanpham', 'fzPVHfBpB43XUGA.png', 5, NULL),
(106, 'sanpham', 'zfcKOCSXyEiFsfN.png', 5, NULL),
(107, 'sanpham', 'fOpxnOn2hwz1Y1o.png', 5, NULL),
(108, 'sanpham', 'yuEh5SKMfZDdzBR.png', 5, NULL),
(109, 'sanpham', 'mUO3L8rWBMsqcAF.png', 5, NULL),
(110, 'sanpham', 'kBhzqgJp8azHG3d.png', 6, NULL),
(111, 'sanpham', 'wyyIrc15cUnZK0E.png', 6, NULL),
(112, 'sanpham', 'PBtZxYOHMgIAJYL.png', 6, NULL),
(113, 'sanpham', 'DpmVES1p3QYL9YY.png', 6, NULL),
(114, 'sanpham', 'umvdWv46cZmQ4bS.jpg', 6, NULL),
(115, 'sanpham', 'OGDRLIsA77WlFi1.png', 7, NULL),
(116, 'sanpham', 'Y0rSeihts0eaB74.png', 7, NULL),
(117, 'sanpham', 'pJ3dTiZa2GJJ4nP.png', 7, NULL),
(118, 'sanpham', 'N0Pq1x4KAfN6zzR.png', 7, NULL),
(119, 'sanpham', '8PKsw6Xv6YyzZy5.png', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `ma_hd` int(10) NOT NULL AUTO_INCREMENT,
  `tongtien` bigint(20) DEFAULT '0',
  `tongsl` int(5) NOT NULL DEFAULT '1',
  `diachi` varchar(100) NOT NULL,
  `sdt` char(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP,
  `ngaycapnhat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `USERma_user` int(10) NOT NULL,
  PRIMARY KEY (`ma_hd`),
  KEY `FKHOADON604606` (`USERma_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`ma_hd`, `tongtien`, `tongsl`, `diachi`, `sdt`, `status`, `ngaytao`, `ngaycapnhat`, `USERma_user`) VALUES
(2, 38280000, 2, '180 Cao Lỗ phường 4 quận 8 TP Hồ Chí Minh', '035147899', 0, '2020-12-07 20:25:52', '2020-12-07 13:25:52', 8),
(8, 52870000, 3, '18 đường Phạm Thị Tánh phường 4 quận 8 TP Hồ Chi Minh', '0123456', 1, '2020-12-11 15:19:18', '2020-12-11 08:19:18', 8),
(9, 37580000, 2, '1800 đường Phạm Thị Tánh phường 4 quận 8 TP Hồ Chi Minh', '0123456', 0, '2020-12-12 08:12:45', '2020-12-12 01:12:45', 8),
(10, 12240000, 1, '18 Pham Thi Tanh phuong 4 quan 8 TP HCM', '0352771239', 1, '2020-12-13 20:24:21', '2020-12-13 13:24:21', 24);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ma_sp` int(10) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(5) NOT NULL,
  `dongia` bigint(20) NOT NULL,
  `thoigianbaohanh` datetime DEFAULT NULL,
  `giakhuyenmai` bigint(20) DEFAULT NULL,
  `RAM` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CPU` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `VGA` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `manhinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `hedieuhanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT '1',
  `mota` text,
  `url` varchar(50) DEFAULT NULL,
  `ngaytao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ngaycapnhat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DANHMUCma_danhmuc` int(10) DEFAULT NULL,
  `HANGSXma_nhasanxuat` int(10) DEFAULT NULL,
  `hinhanh` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ma_sp`),
  KEY `FKSANPHAM558209` (`HANGSXma_nhasanxuat`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `tensp`, `soluong`, `dongia`, `thoigianbaohanh`, `giakhuyenmai`, `RAM`, `CPU`, `VGA`, `manhinh`, `hedieuhanh`, `status`, `mota`, `url`, `ngaytao`, `ngaycapnhat`, `DANHMUCma_danhmuc`, `HANGSXma_nhasanxuat`, `hinhanh`) VALUES
(2, 'Laptop HP 15s fq1116TU i3', 20, 12240000, NULL, 12240000, '8 GB DDR4 2666 MHz', 'Intel Core i3-1005G1', 'Intel UHD Graphics', '15.6\", 1366 x 768 Pixel, SVA, 60 Hz, 220 nits, Micro-edge WLED-backlit', 'Windows 10', NULL, 'Phiên bản màu vàng sang trọng, cấu hình mạnh mẽ cùng kiểu dáng di động hàng đầu, HP 15s fq1116TU chính là chiếc laptop hỗ trợ đắc lực cho bạn trong cả công việc, học tập và giải trí.\r\nHP 15s fq1116TU sở hữu hiệu năng rất tốt nhờ bộ vi xử lý Intel thế hệ thứ 10 Ice Lake mới nhất. Laptop được trang bị bộ vi xử lý Intel Core i3 1005G1, con chip sản xuất trên tiến trình 10nm tiên tiến, xung nhịp tối đa 3.4 GHz, đủ để chạy tốt những ứng dụng văn phòng, học tập. Đi cùng với đó là 8GB RAM DDR4 và 512GB ổ cứng SSD. Ổ cứng SSD đóng vai trò quan trọng trong việc tăng tốc toàn diện máy tính, khi cả tốc độ khởi động, mở ứng dụng lẫn truyền dữ liệu đều nhanh vượt trội so với những laptop chỉ có ổ HDD. Bạn sẽ được tận hưởng sự mượt mà, nhanh chóng khi sử dụng HP 15s.', NULL, NULL, NULL, NULL, 4, '7.jpg'),
(3, 'Laptop Dell XPS 15 9500 i7', 5, 59990000, NULL, 59990000, '16 GB DDR4 2933 MHz', 'Intel Core i7-10750H', 'NVIDIA GeForce GTX 1650Ti 4 GB', '15.6\", 3840 x 2400 Pixel, WVA, 60 Hz, 500 nits, Anti-glare LED-backlit', 'Windows 10', NULL, 'Phiên bản màu vàng sang trọng, cấu hình mạnh mẽ cùng kiểu dáng di động hàng đầu, HP 15s fq1116TU chính là chiếc laptop hỗ trợ đắc lực cho bạn trong cả công việc, học tập và giải trí.\r\n', NULL, NULL, NULL, NULL, 1, '13.png'),
(5, 'Laptop Lenovo IdeaPad C340 15IIL i5', 21, 15290000, NULL, 15290000, '8 GB DDR4 2666 MHz', 'Intel Core i5-1035G1', 'Intel UHD Graphics', '15.6\", 1920 x 1080 Pixel, IPS, 60 Hz, 250 nits, LED-backlit', 'Windows 10', NULL, 'Lenovo Ideapad C340-15IIL là chiếc laptop lai đầy sáng tạo, vừa mạnh mẽ lại vừa hết sức linh hoạt. Nhanh chóng chuyển hóa những ý tưởng thành hiện thực, Lenovo C340 không chỉ là phương tiện làm việc mà còn là nguồn cảm hứng bất tận dành cho bạn.\r\nSử dụng tới 4 chế độ, linh hoạt ở mọi hoàn cảnh\r\nViệc có thể xoay gập 360 độ giúp Lenovo Ideapad C340-15IIL trở thành một chiếc laptop rất đa năng. Ngoài chế độ máy tính xách tay quen thuộc, bạn có thể gập chéo máy để trở thành chế độ trình chiếu, hoặc chế độ máy tính bảng, thao tác trực tiếp lên màn hình một cách nhanh chóng và dễ dàng.', NULL, NULL, NULL, NULL, 7, 'fzPVHfBpB43XUGA.png'),
(6, 'Laptop Dell G3 15 i5', 3, 22590000, NULL, 22590000, '8 GB DDR4 2933 MHz', 'Intel Core i5-10300H', 'NVIDIA GeForce GTX 1650 4 GB', '15.6\", 1920 x 1080 Pixel, IPS, 60 Hz, 250 nits, Anti-glare WLED-backlit', 'Windows 10', NULL, 'Sức mạnh đỉnh cao, thiết kế cực ngầu, Dell G3 15 là chiếc laptop chơi game 15,6 inch trang bị bộ vi xử lý Intel thế hệ thứ 10 và card rời GTX 1650, sẽ đưa bạn đến chiến thắng trong mọi cuộc chơi.\r\nBộ vi xử lý Intel thế hệ thứ 10 mạnh mẽ\r\nSức mạnh của Dell G3 15 đến từ bộ vi xử lý Intel thế hệ thứ 10 tiên tiến. Máy trang bị con chip Intel Core i5 10300H với 4 lõi 8 luồng, tốc độ 4.50 GHz cực mạnh. Hiệu năng mạnh mẽ sẽ giúp cho trải nghiệm game của bạn không bị gián đoạn vì những hiện tượng giật lag, ngoài ra bạn còn có thể livestream, xem video và làm các công việc khác một cách mượt mà.', NULL, NULL, NULL, NULL, 1, 'kBhzqgJp8azHG3d.png'),
(7, 'Laptop HP 348 G7 i5', 17, 14990000, NULL, 14990000, '8 GB DDR4 2666 MHz', 'Intel Core i5-10210U', 'Intel UHD Graphics', '14.0\", 1920 x 1080 Pixel, Đang cập nhật, 60 Hz, 220 nits, WLED-backlit', 'Windows 10', NULL, 'HP 348 G7 là chiếc laptop màn hình 14 inch được thiết kế nhỏ gọn, chạy bộ vi xử lý Intel Core i5 thế hệ thứ 10 mạnh mẽ và có khả năng bảo mật tốt, được bán trong tầm giá rất hợp lý.\r\nCấu hình tốt cho công việc, học tập\r\nHP 348 G7 sở hữu một cấu hình hết sức mạnh mẽ, tự tin đáp ứng tốt nhu cầu công việc và giải trí của bạn. Bộ não của chiếc laptop nhỏ gọn này là con chip Intel Core i5 10210U với 4 lõi 8 luồng, xung nhịp tối đa 4.20 GHz, cực mạnh và cũng rất tiết kiệm điện.', NULL, NULL, NULL, NULL, 4, 'OGDRLIsA77WlFi1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sdt` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `ngaytao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ngaycapnhat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `sdt`, `email`, `diachi`, `password`, `ngaytao`, `ngaycapnhat`, `role`) VALUES
(8, 'Mỹ Duyên', '0123456', 'myduyen06122910@gmail.com', '18 đường Phạm Thị Tánh phường 4 quận 8 TP Hồ Chi Minh', '$2y$10$G7mYd3iBUVsc5hNiWdFxGenzbh4n04DD72yKmdd1BgiFTw9.ngl8O', NULL, NULL, 1),
(9, 'Thanh Vy', '0123456', 'meoxu_dekcantrai99@yahoo.com', NULL, '$2y$10$dPsCZurpaZnwsbKSdEPZZ.v7QImBL4f1.8SAUu87XUApezIt6xMYW', NULL, NULL, 1),
(24, 'Duyen Nguyen', '0352771239', 'dh51704984@student.stu.edu.vn', '18 Pham Thi Tanh phuong 4 quan 8 TP HCM', '$2y$10$k/slxC8Z8117pMMHa1j34OmsB7Vpbqp/aa4sy3ny0PNLZY9LquncS', '2020-12-08 08:33:00', '2020-12-08 08:33:00', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FKBINHLUAN139500` FOREIGN KEY (`SANPHAMma_sp`) REFERENCES `sanpham` (`ma_sp`),
  ADD CONSTRAINT `FKBINHLUAN326762` FOREIGN KEY (`USERma_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FKCHITIETHOA356838` FOREIGN KEY (`HOADONma_hd`) REFERENCES `hoadon` (`ma_hd`),
  ADD CONSTRAINT `FKCHITIETHOA558660` FOREIGN KEY (`SANPHAMma_sp`) REFERENCES `sanpham` (`ma_sp`);

--
-- Constraints for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  ADD CONSTRAINT `FK_DM` FOREIGN KEY (`DANHMUCma_danhmuc`) REFERENCES `danhmuc` (`ma_danhmuc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_SP` FOREIGN KEY (`SANPHAMma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `hinh_ibfk_1` FOREIGN KEY (`SANPHAMma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FKHOADON604606` FOREIGN KEY (`USERma_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FKSANPHAM558209` FOREIGN KEY (`HANGSXma_nhasanxuat`) REFERENCES `hangsx` (`ma_nhasanxuat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
