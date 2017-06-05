-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 09:11 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_item`
--

CREATE TABLE `list_item` (
  `Lid` int(11) NOT NULL,
  `Lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Pic_list` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Did` int(11) NOT NULL,
  `Rid` int(11) NOT NULL,
  `Ddate` datetime NOT NULL,
  `Rdate` datetime NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Descript` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `condi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Width` float DEFAULT NULL,
  `Height` float DEFAULT NULL,
  `Depth` float DEFAULT NULL,
  `ItemType` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DeliveryType` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_item`
--

INSERT INTO `list_item` (`Lid`, `Lname`, `Pic_list`, `Did`, `Rid`, `Ddate`, `Rdate`, `Amount`, `Descript`, `condi`, `Width`, `Height`, `Depth`, `ItemType`, `DeliveryType`) VALUES
(1, 'ปากกา ดินสอ ยางลบ และกบเหลา', 'เครื่องเขียน1.png', 1, 0, '2017-03-12 16:11:00', '0000-00-00 00:00:00', 20, 'ปากกา ดินสอ ยางลบ และกบเหลาที่พี่ ๆ เอามาฝากน้อง ๆ', '', 0, 0, 0, '', ''),
(2, 'หนังสือเรียน', 'เครื่องเขียน2.png', 2, 0, '2017-03-10 08:41:00', '0000-00-00 00:00:00', 15, 'หนังสือเรียนวิชาสังคม หมวดภูมิศาสตร์', '', 0, 0, 0, '', ''),
(3, 'ดินสอ ยางลบ', 'เครื่องเขียน3.png', 3, 0, '2017-03-11 18:46:00', '0000-00-00 00:00:00', 19, 'ปากกา ดินสอ น้ำยาลบคำผิด วงเวียน อุปกรณ์การเรียนใหม่ ๆ ยังไม่ได้แกะ', '', 0, 0, 0, '', ''),
(4, 'กระเป๋าผ้า', 'กระเป๋าผ้า.png', 4, 0, '2017-03-20 08:30:10', '0000-00-00 00:00:00', 8, 'แจกกระเป๋าผ้าไม่ได้ใช้ มีเยอะมากๆ\r\nติดต่อรับได้ที่ หอสมุดวิทยาลัยขอนแก่น \r\nติดต่อ 062-5651456', '', 40, 60, 0, '', ''),
(5, 'กระเป๋าดินสอ', 'กระเป๋าดินสอ.png', 5, 0, '2017-03-20 15:24:00', '0000-00-00 00:00:00', 8, 'สนใจรับของ ติดต่อได้ที่อีเมล kan.kk@gmail.com', '', 15, 10, 0, '', ''),
(6, 'ดินสอ', 'ดินสอ.png', 6, 0, '2017-03-20 20:21:00', '0000-00-00 00:00:00', 100, 'ติดต่อได้ที่ Line ID : Kavin.V\r\n', '', 0, 15, 0, '', ''),
(7, 'ปากกาสองหัว', 'ปากกาสองหัว.png', 7, 0, '2017-03-20 19:17:26', '0000-00-00 00:00:00', 15, 'มารับได้ที่คณะวิทยาศาสตร์นะ \r\nโทร 095-5652315 มล ค่ะ', '', 0, 20, 0, '', ''),
(8, 'ไม้บรรทัด', 'ไม้บรรทัด.png', 1, 0, '2017-03-18 00:00:00', '0000-00-00 00:00:00', 6, 'ไม้บรรทัดจ้า รับได้ที่หอวนาเพลส หลัง มข.', '', 3, 4, 0, '', ''),
(11, 'แฟ้ม', 'แฟ้ม.png', 8, 0, '2017-03-20 21:34:00', '0000-00-00 00:00:00', 19, 'แฟ้มใส่เอกสารขนาด A4 ซื้อมาไม่ได้ใช้เลยค่ะ \r\nท่านใดต้องการ ติดต่อหาเราโทร 087-6561234', '', 21, 30, 0, '', ''),
(12, 'ยางลบ', 'ยางลบ.png', 2, 0, '2017-03-20 21:34:00', '0000-00-00 00:00:00', 30, 'ยางลบหลากหลายสีมากมาย สำหรับเด็กๆ ไม่มีสารเคมีที่อันตราย ติดต่อนัดรับของ 091-1121123 หรือ มารับที่ชั้น 1 ตึกลาเวนเดอร์ สำนักงานเพื่อเด็กและสังคม ข้างโลตัส นครศรีธรรมราช', '', 2, 1, 2, '', ''),
(13, 'วงเวียน', 'วงเวียน.png', 3, 0, '2017-03-23 00:00:00', '0000-00-00 00:00:00', 1, 'ติดต่อรับที่ สถาบันคณิตศาสตร์ ครูมิว 082-77456879 ', '', 1, 1, 1, '', ''),
(14, 'สมุด', 'สมุด.png', 4, 0, '2017-03-16 15:00:00', '0000-00-00 00:00:00', 100, 'สมุดมากมาย ร่วมบริจาคโดยคุณตัน อ้วนจนตัน\r\nมารับได้ที่ แผนกยาชา รพ.ศรีนครินทร์ โทร 029-7984561', '', 10, 6, 10, '', ''),
(15, 'สีโปสเตอร์', 'สีโปสเตอร์.png', 5, 0, '2017-03-06 06:18:34', '0000-00-00 00:00:00', 5, 'นัดรับได้ที่บ้านผมครับ ข้างๆร้านนมมีมี่ มีฟรีไวไฟ แอร์เย็น โทร 069-6699669', '', 2, 4, 4, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_item`
--
ALTER TABLE `list_item`
  ADD PRIMARY KEY (`Lid`),
  ADD KEY `Lid` (`Lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_item`
--
ALTER TABLE `list_item`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
