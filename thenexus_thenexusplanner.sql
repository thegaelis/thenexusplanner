-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 26, 2023 lúc 02:57 PM
-- Phiên bản máy phục vụ: 10.3.38-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thenexus_thenexusplanner`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `TaskID` varchar(50) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `StartDate` datetime DEFAULT NULL,
  `DueDate` datetime DEFAULT NULL,
  `Priority` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` varchar(50) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserBio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `FullName`, `Email`, `Password`, `Position`, `JoinDate`, `UserBio`) VALUES
('cnfIWZ6pYb', 'admin', 'Admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2023-04-20 13:14:26', NULL),
('etR7SK7OHj', 'tuanhayho', 'Nguyễn Hữu Anh Tuấn', '4701104228@student.hcmue.edu.vn', '251800da8d338eb82819105d5f3c7629', 'Member', '2023-04-16 14:51:00', NULL),
('HHVVw8Lk6e', 'thaihq', 'Huynh Quoc Thai', 'thaihq.work@gmail.com', '251800da8d338eb82819105d5f3c7629', 'Member', '2023-04-26 02:48:51', 'Äáº£ Ä‘áº£o Cá»™ng Sáº£n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`,`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
