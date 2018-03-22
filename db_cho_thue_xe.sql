-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2018 lúc 12:11 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_cho_thue_xe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quantri`
--

CREATE TABLE `tbl_quantri` (
  `id` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quantri`
--

INSERT INTO `tbl_quantri` (`id`, `user`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lever` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `name`, `adress`, `phonenumber`, `birthday`, `email`, `sex`, `role`) VALUES
('admin', 'admin', 'Phu dep trai', 'Vinh', 966496793, '2017-11-01', 'nguiyerwrsa', 'nam', 1),
('phu', 'phu', 'da', '', 0, '0000-00-00', 'ada', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_xe`
--

CREATE TABLE `tbl_xe` (
  `maxe` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hangxe` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tenxe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mausac` text COLLATE utf8_unicode_ci NOT NULL,
  `chongoi` int(10) NOT NULL,
  `dongia` int(50) NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_xe`
--

INSERT INTO `tbl_xe` (`maxe`, `hangxe`, `tenxe`, `mausac`, `chongoi`, `dongia`, `hinhanh`) VALUES
('Xe01', 'Lambor', 'Aventador', '', 2, 200000, 'images/slider/1.jpg'),
('Xe02', 'Lambor', 'Lamborghini', '', 2, 500000, 'images/slider/2.jpg'),
('Xe03', 'Ferari', 'Ferari', 'Đỏ', 4, 600000, 'images/slider/3.jpg'),
('Xe04', 'Ferari', 'Toyota', 'Đỏ', 4, 500000, 'images/slider/4.jpg'),
('Xe05', 'Ferari', 'Toyota', 'Đỏ', 4, 500000, 'images/slider/4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_quantri`
--
ALTER TABLE `tbl_quantri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `tbl_xe`
--
ALTER TABLE `tbl_xe`
  ADD PRIMARY KEY (`maxe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_quantri`
--
ALTER TABLE `tbl_quantri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
