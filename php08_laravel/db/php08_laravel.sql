-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 12:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php08_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_news`
--

CREATE TABLE IF NOT EXISTS `tbl_category_news` (
  `pk_category_news_id` int(11) NOT NULL,
  `c_name` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_category_news`
--

INSERT INTO `tbl_category_news` (`pk_category_news_id`, `c_name`) VALUES
(2, 'Tin Xã hội'),
(3, 'Tin Thế giới'),
(4, 'Tin Khoa học');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `fk_category_news_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_hotnews` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `fk_category_news_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_hotnews`) VALUES
(7, 2, 'Game thủ Trung Quốc hack GPS để trà trộn chơi Pokemon Go tại Nhật', '<p>(D&acirc;n tr&iacute;) - Game thủ Pokemon Go tại Nhật Bản đ&atilde; v&ocirc; c&ugrave;ng bức xức khi ph&aacute;t hiện ra c&oacute; nhiều người chơi tại c&aacute;c nước l&aacute;ng giềng, đặc biệt l&agrave; Trung Quốc đang sử dụng phần mềm hack GPS để đăng nhập v&agrave;o tr&ograve; chơi, thậm ch&iacute; chiếm c&aacute;c ph&ograve;ng tập gym ảo với Pokemon cấp độ cao.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Game thủ Pokemon Go tại Nhật Bản đ&atilde; v&ocirc; c&ugrave;ng bức xức khi ph&aacute;t hiện ra c&oacute; nhiều người chơi tại c&aacute;c nước l&aacute;ng giềng, đặc biệt l&agrave; Trung Quốc đang sử dụng phần mềm hack GPS để đăng nhập v&agrave;o tr&ograve; chơi, thậm ch&iacute; chiếm c&aacute;c ph&ograve;ng tập gym ảo với Pokemon cấp độ cao.&nbsp; (D&acirc;n tr&iacute;) - Game thủ Pokemon Go tại Nhật Bản đ&atilde; v&ocirc; c&ugrave;ng bức xức khi ph&aacute;t hiện ra c&oacute; nhiều người chơi tại c&aacute;c nước l&aacute;ng giềng, đặc biệt l&agrave; Trung Quốc đang sử dụng phần mềm hack GPS để đăng nhập v&agrave;o tr&ograve; chơi, thậm ch&iacute; chiếm c&aacute;c ph&ograve;ng tập gym ảo với Pokemon cấp độ cao.&nbsp; (D&acirc;n tr&iacute;) - Game thủ Pokemon Go tại Nhật Bản đ&atilde; v&ocirc; c&ugrave;ng bức xức khi ph&aacute;t hiện ra c&oacute; nhiều người chơi tại c&aacute;c nước l&aacute;ng giềng, đặc biệt l&agrave; Trung Quốc đang sử dụng phần mềm hack GPS để đăng nhập v&agrave;o tr&ograve; chơi, thậm ch&iacute; chiếm c&aacute;c ph&ograve;ng tập gym ảo với Pokemon cấp độ cao.</p>\r\n', '1474192952_1469364030_asha 501.jpg', 1),
(8, 2, 'Tuyển FIFA Online 3 Việt Nam: Bắt đầu hành trình EACC 2016', '<p>(D&acirc;n tr&iacute;) - Trưa 23/7, EA Champions Cup 2016 (EACC) - giải đấu FIFA Online 3 quốc tế thứ 2 trong năm 2016 sẽ bắt đầu khởi tranh tại Thượng Hải, Trung Quốc với tổng gi&aacute; trị giải thưởng l&ecirc;n đến 6,7 tỷ đồng.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Trưa 23/7, EA Champions Cup 2016 (EACC) - giải đấu FIFA Online 3 quốc tế thứ 2 trong năm 2016 sẽ bắt đầu khởi tranh tại Thượng Hải, Trung Quốc với tổng gi&aacute; trị giải thưởng l&ecirc;n đến 6,7 tỷ đồng. (D&acirc;n tr&iacute;) - Trưa 23/7, EA Champions Cup 2016 (EACC) - giải đấu FIFA Online 3 quốc tế thứ 2 trong năm 2016 sẽ bắt đầu khởi tranh tại Thượng Hải, Trung Quốc với tổng gi&aacute; trị giải thưởng l&ecirc;n đến 6,7 tỷ đồng.&nbsp; (D&acirc;n tr&iacute;) - Trưa 23/7, EA Champions Cup 2016 (EACC) - giải đấu FIFA Online 3 quốc tế thứ 2 trong năm 2016 sẽ bắt đầu khởi tranh tại Thượng Hải, Trung Quốc với tổng gi&aacute; trị giải thưởng l&ecirc;n đến 6,7 tỷ đồng. (D&acirc;n tr&iacute;) - Trưa 23/7, EA Champions Cup 2016 (EACC) - giải đấu FIFA Online 3 quốc tế thứ 2 trong năm 2016 sẽ bắt đầu khởi tranh tại Thượng Hải, Trung Quốc với tổng gi&aacute; trị giải thưởng l&ecirc;n đến 6,7 tỷ đồng.&nbsp;</p>\r\n', '1474192965_1469365533_Philips X710 - 2 sim.jpg', 1),
(9, 2, 'Thị trường smartwatch sụt giảm mạnh trong quý II/2016, Apple vẫn tiếp tục dẫn đầu', '<p>(D&acirc;n tr&iacute;) - Thị trường smartwatch vừa trải qua một qu&yacute; sụt giảm mạnh. Apple vẫn l&agrave; h&atilde;ng smartwatch c&oacute; thị phần lớn nhất thế giới nhưng doanh số của h&atilde;ng cũng bị sụt giảm đến 55% trong qu&yacute; vừa qua.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Thị trường smartwatch vừa trải qua một qu&yacute; sụt giảm mạnh. Apple vẫn l&agrave; h&atilde;ng smartwatch c&oacute; thị phần lớn nhất thế giới nhưng doanh số của h&atilde;ng cũng bị sụt giảm đến 55% trong qu&yacute; vừa qua.&nbsp; (D&acirc;n tr&iacute;) - Thị trường smartwatch vừa trải qua một qu&yacute; sụt giảm mạnh. Apple vẫn l&agrave; h&atilde;ng smartwatch c&oacute; thị phần lớn nhất thế giới nhưng doanh số của h&atilde;ng cũng bị sụt giảm đến 55% trong qu&yacute; vừa qua.&nbsp; (D&acirc;n tr&iacute;) - Thị trường smartwatch vừa trải qua một qu&yacute; sụt giảm mạnh. Apple vẫn l&agrave; h&atilde;ng smartwatch c&oacute; thị phần lớn nhất thế giới nhưng doanh số của h&atilde;ng cũng bị sụt giảm đến 55% trong qu&yacute; vừa qua.</p>\r\n', '1474192974_1469365573_s4.jpg', 1),
(10, 2, 'Hãng bảo mật của Nhật phát hành công cụ giải mã Ransomware miễn phí', '<p>(D&acirc;n tr&iacute;) - Nhận thức được t&aacute;c động cũng như ph&aacute;t triển của ransomware, h&atilde;ng bảo mật Trend Micro đ&atilde; ph&aacute;t h&agrave;ng c&ocirc;ng cụ giải m&atilde; ransomware miễn ph&iacute;, c&oacute; thể giải m&atilde; c&aacute;c tập tin bị m&atilde; h&oacute;a bởi c&aacute;c ransomware nhất định.</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Nhận thức được t&aacute;c động cũng như ph&aacute;t triển của ransomware, h&atilde;ng bảo mật Trend Micro đ&atilde; ph&aacute;t h&agrave;ng c&ocirc;ng cụ giải m&atilde; ransomware miễn ph&iacute;, c&oacute; thể giải m&atilde; c&aacute;c tập tin bị m&atilde; h&oacute;a bởi c&aacute;c ransomware nhất định.&nbsp; (D&acirc;n tr&iacute;) - Nhận thức được t&aacute;c động cũng như ph&aacute;t triển của ransomware, h&atilde;ng bảo mật Trend Micro đ&atilde; ph&aacute;t h&agrave;ng c&ocirc;ng cụ giải m&atilde; ransomware miễn ph&iacute;, c&oacute; thể giải m&atilde; c&aacute;c tập tin bị m&atilde; h&oacute;a bởi c&aacute;c ransomware nhất định. (D&acirc;n tr&iacute;) - Nhận thức được t&aacute;c động cũng như ph&aacute;t triển của ransomware, h&atilde;ng bảo mật Trend Micro đ&atilde; ph&aacute;t h&agrave;ng c&ocirc;ng cụ giải m&atilde; ransomware miễn ph&iacute;, c&oacute; thể giải m&atilde; c&aacute;c tập tin bị m&atilde; h&oacute;a bởi c&aacute;c ransomware nhất định.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1474193259_1469365620_s6310.jpg', 1),
(11, 2, 'Facebook cất cánh thành công siêu máy bay không người lái', '<p>(D&acirc;n tr&iacute;) - Sau nhiều năm chờ đợi, Facebook cuối c&ugrave;ng đ&atilde; cất c&aacute;nh th&agrave;nh c&ocirc;ng chiếc m&aacute;y bay kh&ocirc;ng người l&aacute;i cỡ lớn chạy bằng năng lượng mặt trời của m&igrave;nh. &Ocirc;ng chủ Mark Zuckerberg kh&ocirc;ng giấu được sự phấn kh&iacute;ch v&agrave; ngay lập tức chia sẻ th&ocirc;ng tin tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh</p>\r\n', '<p>(D&acirc;n tr&iacute;) - Sau nhiều năm chờ đợi, Facebook cuối c&ugrave;ng đ&atilde; cất c&aacute;nh th&agrave;nh c&ocirc;ng chiếc m&aacute;y bay kh&ocirc;ng người l&aacute;i cỡ lớn chạy bằng năng lượng mặt trời của m&igrave;nh. &Ocirc;ng chủ Mark Zuckerberg kh&ocirc;ng giấu được sự phấn kh&iacute;ch v&agrave; ngay lập tức chia sẻ th&ocirc;ng tin tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh&nbsp; (D&acirc;n tr&iacute;) - Sau nhiều năm chờ đợi, Facebook cuối c&ugrave;ng đ&atilde; cất c&aacute;nh th&agrave;nh c&ocirc;ng chiếc m&aacute;y bay kh&ocirc;ng người l&aacute;i cỡ lớn chạy bằng năng lượng mặt trời của m&igrave;nh. &Ocirc;ng chủ Mark Zuckerberg kh&ocirc;ng giấu được sự phấn kh&iacute;ch v&agrave; ngay lập tức chia sẻ th&ocirc;ng tin tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh&nbsp; (D&acirc;n tr&iacute;) - Sau nhiều năm chờ đợi, Facebook cuối c&ugrave;ng đ&atilde; cất c&aacute;nh th&agrave;nh c&ocirc;ng chiếc m&aacute;y bay kh&ocirc;ng người l&aacute;i cỡ lớn chạy bằng năng lượng mặt trời của m&igrave;nh. &Ocirc;ng chủ Mark Zuckerberg kh&ocirc;ng giấu được sự phấn kh&iacute;ch v&agrave; ngay lập tức chia sẻ th&ocirc;ng tin tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh &nbsp; (D&acirc;n tr&iacute;) - Sau nhiều năm chờ đợi, Facebook cuối c&ugrave;ng đ&atilde; cất c&aacute;nh th&agrave;nh c&ocirc;ng chiếc m&aacute;y bay kh&ocirc;ng người l&aacute;i cỡ lớn chạy bằng năng lượng mặt trời của m&igrave;nh. &Ocirc;ng chủ Mark Zuckerberg kh&ocirc;ng giấu được sự phấn kh&iacute;ch v&agrave; ngay lập tức chia sẻ th&ocirc;ng tin tr&ecirc;n trang c&aacute; nh&acirc;n của m&igrave;nh</p>\r\n', '1474193269_1469365656_samsung-galaxy-tab-3-80-ofic.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 'admin@mail.com', '$2y$10$NM6rTjLGq8.J6eN9RCPQ0u9ofZIOyig81yi64f20GsoWxDkfHivT2', 'opzEIAdw50qsJfoKkw5HUGhZgGll6hRMh9PBzA7CtZV9gnDi1bfpauaQ5qS4', NULL, '2016-09-11 03:41:05'),
(2, 'Nguyễn Văn B@', 'user1@mail.com', '$2y$10$ntEfThgVj5oSNHEm//uUkONKJ81QkYf1EZ9H2et.BxAzEYqVtoiN2', NULL, NULL, NULL),
(3, 'Nguyễn Văn C', 'admin2@mail.com', '', NULL, NULL, NULL),
(5, 'test', 'test@mail.com', '$2y$10$kJf1UcWW7VN1YA9IUxCFAOIdRdL./tvf392q7geNsIqgAJJpp7iI6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_category_news`
--
ALTER TABLE `tbl_category_news`
  ADD PRIMARY KEY (`pk_category_news_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category_news`
--
ALTER TABLE `tbl_category_news`
  MODIFY `pk_category_news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
