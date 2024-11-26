-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 26, 2024 lúc 07:56 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QuanlySV`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoavien`
--

CREATE TABLE `khoavien` (
  `MaKhoaVien` varchar(3) NOT NULL,
  `TenKhoaVien` varchar(30) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoavien`
--

INSERT INTO `khoavien` (`MaKhoaVien`, `TenKhoaVien`, `Phone`, `Email`) VALUES
('KCN', 'Khoa Hoc Cong Nghe', '012345678', 'email@email.com'),
('KKT', 'Khoa Ky Thuat', '012345678', 'tuanthai902@gmail.com'),
('KSP', 'Khoa Su Pham', '012345678', 'email@email.com'),
('KTN', 'Khoa Tu Nhien', '012345678', 'email@email.com'),
('KXH', 'Khoa Xa Hoi', '012345678', 'email@email.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(10) NOT NULL,
  `MaKhoaVien` varchar(3) DEFAULT NULL,
  `Lop` varchar(10) DEFAULT NULL,
  `HoTen` varchar(50) DEFAULT NULL,
  `NgaySinh` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `MaKhoaVien`, `Lop`, `HoTen`, `NgaySinh`) VALUES
('2257', 'KCN', '63D1', 'Nguyen Thi Tuyet', '20/12/2003'),
('2258', 'KKT', '63D2', 'Nguyen Thi Tuy', '21/11/2003'),
('2259', 'KSP', '63D3', 'Nguyen Thi Ti', '22/10/2003'),
('2260', 'KXH', '63D4', 'Nguyen Thi Trang', '23/09/2003'),
('2261', 'KTN', '63D5', 'Nguyen Thi Thieu', '24/11/2003');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoavien`
--
ALTER TABLE `khoavien`
  ADD PRIMARY KEY (`MaKhoaVien`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaKhoaVien` (`MaKhoaVien`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaKhoaVien`) REFERENCES `khoavien` (`MaKhoaVien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
