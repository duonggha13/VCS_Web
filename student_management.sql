-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th9 28, 2020 lúc 11:05 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `student_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `exercise` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `solution` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`id`, `exercise`, `solution`) VALUES
(1, 'Bài 1;resources/document/exercise/bai1.txt', ''),
(2, 'Bài 2;resources/document/exercise/bai2.txt', ''),
(3, 'Bài 3;resources/document/exercise/bai3.txt', ''),
(4, 'Bài 1;resources/document/exercise/bai1.txt', 'duongha;resources/document/solution/DuongHa_bai1.txt'),
(5, 'Bài 2;resources/document/exercise/bai2.txt', 'duongha;resources/document/solution/DuongHa_bai2.doc'),
(6, 'Bài 1;resources/document/exercise/bai1.txt', 'thuhuyen;resources/document/solution/Huyen_bai1.txt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` int(15) DEFAULT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`username`, `password`, `name`, `email`, `phone_number`, `id`) VALUES
('duongha', 'duongha99', 'Dương Thu Hà', 'duongha99@gmail.com', 123456789, 0),
('giaovien', 'giaovien', 'Giáo viên', 'giaovien@123', 123456789, 1),
('phuonglinh', 'phuonglinh', 'Hoàng Phương Linh', 'phuonglinh123@gmail.com', 23456789, 0),
('thuhuyen', 'thuhuyen', 'Dương Huyền', 'duonghuyen1@gmail.com', 234567890, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `to_username` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_time_msg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `from_username`, `to_username`, `message`, `date_time_msg`) VALUES
(1, 'giaovien', 'duongha', 'Hello', '2020-09-28 10:38:40'),
(2, 'giaovien', 'duongha', 'Hi', '2020-09-28 10:38:48'),
(3, 'giaovien', 'giaovien', 'hallo', '2020-09-28 10:38:54'),
(4, 'giaovien', 'phuonglinh', 'hi', '2020-09-28 10:39:02'),
(5, 'giaovien', 'thuhuyen', 'abc hello', '2020-09-28 10:39:09'),
(6, 'duongha', 'giaovien', 'hii', '2020-09-28 10:43:11'),
(7, 'duongha', 'phuonglinh', 'hello', '2020-09-28 10:43:20'),
(8, 'duongha', 'thuhuyen', '123', '2020-09-28 10:43:24'),
(9, 'phuonglinh', 'giaovien', 'hello', '2020-09-28 10:43:47'),
(10, 'phuonglinh', 'duongha', 'hi', '2020-09-28 10:43:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `linkfiletxt` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hint` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`id`, `linkfiletxt`, `hint`) VALUES
(1, 'resources/document/quiz/Sang thu.txt', 'Là 1 bài thơ trong chương trình ngữ văn 9, là những cảm xúc của tác giả với 1 mùa trong năm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
