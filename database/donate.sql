-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 03:34 PM
-- Server version: 10.1.19-MariaDB
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
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `Aid` int(11) NOT NULL,
  `Aname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Adetail` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `APic` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`Aid`, `Aname`, `Adetail`, `APic`, `Date`) VALUES
(1, 'เด็กหนองคายใช้เวลาว่างจับปลาหารายได้เสริม', 'พบเด็กชายหนองคาย-วัย 11 ปี ลูกตำรวจ สภ.ท่าบ่อ ใช้เวลาว่างชวนเพื่อนๆออกจับปลาหารายได้เสริม\r\n\r\nผู้สื่อข่าวได้เดินทางไปที่บ้านโคกคอน หมู่ที่ 6 ต.โคกคอน อ.ท่าบ่อ จ.หนองคาย ได้พบเด็กกับ ด.ช.รัฐพงษ์ กำเนิดเกิด อายุ11ปี ซึ่งเป็นเด็กนักเรียนที่ศึกษาอยู่โรงเรียนบ้านโคกคอนกับกลุ่มเพื่อนๆ ซึ่งเด็กเหล่านี้ หลังจากวันหยุดเสาร์-อาทิตย์ ได้ใช้เวลาว่างให้เกิดประโยชน์ ไม่สนใจเล่นเกมส์ แต่ชวนกันออกหาปลา เพื่อเป็นอาหารและนำออกขายเสริมรายได้ช่วงวันหยุด โดย ด.ช.รัฐพงษ์ พร้อมกลุ่มเพื่อนใช้วิธีจับปลาโดยใช้สุ่มจับปลา ที่ทำขึ้นเองแบบง่าย ๆ นำมาจับปลาได้มากถึง 10-20 ตัว ได้ปลาหลายชนิดทั้งปลาช่อน ปลาดุก ฯ ซึ่งในช่วงเข้าสู่หน้าแล้งปริมาณน้ำในลำห้วย เริ่มลดลงทำให้ปลาหลากหลายชนิดจับได้ง่าย เวลาได้ปลามา จะนำมาแบ่งกันเป็นอาหาร นำกลับไปให้ครอบครัวที่บ้าน หรือ บางวันได้กันมาก ก็พอแบ่งขาย เป็นรายได้เสริมในช่วงวันหยุดเสาร์-อาทิตย์ \r\n\r\nด.ช.รัฐพงษ์ กล่าวว่า ตนมีบิดาเป็นตำรวจ (ด.ต.ปิยวัฒน์ กำเนิดเกิด หัวหน้าศูนย์บริการประชาชนตำบลโคกคอน) โดยบิดาจะสอนให้รู้จักทำมาหากิน โดยยึดอาชีพที่สุจริต ให้รู้จักทำงานเพื่อแลกกับเงิน ตนจึงยึดถือคำสอนของบิดามาชวนเพื่อนๆใช้เวลาว่างวันหยุด เสาร์-อาทิตย์ ชวนกันออกหาปลา ซึ่งเพื่อนๆทุกคนต่างชอบใจ เพราะได้ทั้งปลาไปกินและได้ไปขาย มีเงินเก็บไว้ซื้อขนมกิน และให้ครอบครัวอีกด้วย\r\n\r\n', 'pic1', '2017-03-12 19:10:00'),
(2, 'อาลัย.. บัณฑิตแพทย์จบใหม่ยังไม่ทันรับปริญญา ประสบอุบัติเหตุเสียชีวิต', 'เมื่อเวลา 02.30 น. วันที่ 13 มกราคม 2560 ร.ต.อ.มนตรี ดวงวะณา รอง สว.(สอบสวน) สภ.เกาะคา จ.ลำปาง ได้รับแจ้งมีอุบัติเหตุรถยนต์เก๋งชนต้นไม้เป็นเหตุให้มีผู้เสียชีวิต 2 รายบนถนนพหลโยธินสายลำปาง ตาก(ขาขึ้น) หลักกิโลเมตรที่ 684-685 เขต ต.วังพร้าว อ.เกาะคา จ.ลำปาง เจ้าหน้าที่ตรวจสอบที่เกิดเหตุพบรถยนต์เก๋ง มาสด้า สีแดง เลขทะเบียน 4กง6677 กรุงเทพฯ อยู่ในสภาพพลิกคว่ำ ใกล้กันพบต้นไม้หักล้ม\r\n\r\nภายในรถพบศพผู้เสียชีวิต 2 ราย ทราบชื่อคนขับรถคือ นายจักราวุฒิ อิงคะประดิษฐ์ อายุ 33 ปี เป็นลูกชายเจ้าของร้านวัสดุก่อสร้างใน อ.เถิน ส่วนผู้เสียชีวิตอีกรายคือ นายธีระทัศน์ อินทรประพันธ์ อายุ 25 ปี เป็นแพทย์จบใหม่ประจำโรงพยาบาลเถิน เจ้าหน้าที่กู้ภัยต้องใช้เครื่องตัดถ่างงัดร่างผู้เสียชีวิตออกจากซากรถด้วยความยากลำบาก   \r\n\r\nสอบสวนทราบว่ารถเก๋งคันนี้ขับมาจาก อ.เถิน จ.ลำปาง มุ่งหน้าเข้าสู่ตัวเมือง คาดว่าน่าจะขับรถมาด้วยความเร็วสูง เมื่อมาถึงจุดเกิดเหตุซึ่งเป็นทางโค้ง ประกอบกับช่วงเช้ามืดมีหมอกลงหนาจัด อาจทำให้คนขับมองไม่เห็นจึงเกิดอุบัติเหตุดังกลาว  \r\n\r\nจากข้อมูลทราบว่านายธีระทัศน์  1 ในผู้เสียชีวิตเป็นแพทย์จบใหม่ประจำโรงพยาบาลเถิน อ.เถิน จ.ลำปาง และเตรียมจะเข้ารับพระราชทานปริญญาบัตรที่มหาวิทยาลัยเชียงใหม่  ในวันที่ 23 มกราคมนี้  แต่ก็มาประสบอุบัติเหตุจนเสียชีวิตก่อน', 'pic2', '2017-03-12 19:29:00'),
(3, 'พบ ดร.ปลอมเกลื่อนมหาวิทยาลัย ดีเอสไอสอบโยง ม.สันติภาพโลก', 'วันนี้ (16 ม.ค. 60) ผู้สื่อข่าวรายงานว่า ข้อมูลบัญชีรายชื่อ รหัสนักศึกษา  ชื่อ – นามสกุล ของคนไทย ที่อ้างว่าเรียนต่อในมหาวิทยาลัยต่างประเทศ ถูกนำมาเปิดเผยอยู่บนเว็บไซต์ โฆษณาเรียน วุฒิต่างประเทศ ปริญญาทุกระดับ ในหลักสูตร 6 เดือนถึง 2 ปี มีค่าใช้จ่ายตลอดหลักสูตร 225,000 และสามารถเลือกเรียนในมหาวิทยาลัยต่างประเทศได้ โดยใช้หนังสือเดินทาง วุฒิการศึกษาเดิม และถาพถ่ายขนาดวีซ่า เป็นหลักฐานในการสมัคร\r\n\r\nนอกจากนี้ ทีมข่าวยังพบตัวอย่างมหาวิทยาลัยในภาคเหนือ ที่มีอาจารย์ท่านหนึ่งจบปริญญาเอกจากมหาวิทยาลัยเซาธ์แทมป์ตัน ประเทศอังกฤษจริง แต่กลับไม่รู้จักอาจารย์อีกคนหนึ่ง ซึ่งเข้ามาบรรจุสอนสาขาเดียวกัน โดยอ้างว่าจบมาจากมหาวิทยาลัยดียวกัน จึงตรวจสอบพบว่า ได้ทำปริญญาเอกปลอมมา แต่ก็ยังคงได้กลับไปสอนในระดับปริญญาโท\r\n\r\nหลังเปิดเผยเรื่องวุฒิปริญญาเอกปลอม ศูนย์ประสานงานบุคลากรในสถาบันอุดมศึกษาของรัฐ หรือ เชส ได้รับแจ้งข้อมูลเพิ่ม อีกถึง 10 ราย มี 3 ราย อ้างว่าจบปริญญาเอกจากที่เดียวกันกับรายที่ตรวจสอบรายแรก คือ มหาวิทยาลัยเซาธ์แทมป์ตัน แต่เมื่อตรวจสอบไปที่มหาวิทยาลัย กลับไม่พบชื่อในระบบนักศึกษา\r\n\r\nข้อมูลที่พบยังบ่งชี้ว่า สถานที่รับทำวุฒิการศึกษาปลอมระดับปริญญาเอก มีที่ตั้งอยู่ในพื้นที่ภาคเหนือ ซึ่งเมื่อตรวจสอบดูแล้วไม่ใช่ที่ตั้งของสถานศึกษา ทั้งนี้ นายวีระชัย พุทธวงศ์ เลขาธิการ เชส จึงรวบรวมข้อมูส่งให้กรมสอบสวนคดีพิเศษ หรือ ดีเอสไอ ตรวจสอบ เพราะคาดว่าอาจเชื่อมโยงกับมหาวิทยาลัยสันติภาพโลก ที่ถูกดำเนินคดีไปก่อนหน้านี้ ซึ่ง ดีเอสไอ รับไปดำเนินการ', 'pic3', '2017-03-12 19:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE `demand` (
  `demand_id` int(11) NOT NULL,
  `demand_name` varchar(200) NOT NULL,
  `demand_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demand`
--

INSERT INTO `demand` (`demand_id`, `demand_name`, `demand_date`) VALUES
(1, 'ต้องการหนังสือรายวิชาคณิตศาสตร์ สังคม และวิชาภาษาอังกฤษสำหรับเด็กชั้นประถมศึกษา โรงเรียนบ้านกุดจอก อำเภอเมือง จังหวัดขอนแก่น', '2017-03-01 09:43:00'),
(2, 'ต้องการเครื่องเขียน ดินสอ และสีไม้จำนวนมากที่โรงเรียนบ้านหนองน้ำ อำเภอเมือง จังหวัดสุรินทร์', '2017-03-09 18:29:00'),
(3, 'ไทย ซีซีทีวี รับบริจาคเครื่องเขียนช่วยนักเรียนภาคใต้ ถูกน้ำท่วม', '2017-03-14 10:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `list_item`
--

CREATE TABLE `list_item` (
  `Lid` int(11) NOT NULL,
  `Lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Condi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Pic_list` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Did` int(11) NOT NULL,
  `Rid` int(11) NOT NULL,
  `Ddate` datetime NOT NULL,
  `Rdate` datetime NOT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Descript` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Width` float DEFAULT NULL,
  `Height` float DEFAULT NULL,
  `Depth` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_item`
--

INSERT INTO `list_item` (`Lid`, `Lname`, `Condi`, `Pic_list`, `Did`, `Rid`, `Ddate`, `Rdate`, `Amount`, `Descript`, `Width`, `Height`, `Depth`) VALUES
(1, 'ปากกา ดินสอ ยางลบ และกบเหลา', 'สภาพใหม่ ไม่ได้ใช้', 'เครื่องเขียน1', 1, 0, '2017-03-12 16:11:00', '0000-00-00 00:00:00', 20, 'ปากกา ดินสอ ยางลบ และกบเหลาที่พี่ ๆ เอามาฝากน้อง ๆ', 0, 0, 0),
(2, 'หนังสือเรียน', 'ต้องการส่งต่อหนังสือและเครื่องเขียนให้น้องๆ ', 'เครื่องเขียน2', 2, 0, '2017-03-10 08:41:00', '0000-00-00 00:00:00', 15, 'หนังสือเรียนวิชาสังคม หมวดภูมิศาสตร์', 0, 0, 0),
(3, 'ดินสอ ยางลบ', 'ซื้อมาไม่ได้ใช้เลยค่ะ มีปากกา ลิควิด ดินสอ วงเวียน ', 'เครื่องเขียน3', 3, 0, '2017-03-11 18:46:00', '0000-00-00 00:00:00', 19, 'ปากกา ดินสอ น้ำยาลบคำผิด วงเวียน อุปกรณ์การเรียนใหม่ ๆ ยังไม่ได้แกะ', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `list_item_refer`
--

CREATE TABLE `list_item_refer` (
  `refer_id` int(11) NOT NULL,
  `list_item_Lid` int(11) NOT NULL,
  `pic_of_item` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_item_refer`
--

INSERT INTO `list_item_refer` (`refer_id`, `list_item_Lid`, `pic_of_item`) VALUES
(1, 1, 'เครื่องเขียน1.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Nid` int(11) NOT NULL,
  `nameNews` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Nid`, `nameNews`, `Detail`, `Pic`, `Date`) VALUES
(2, 'โรงแรมดุสิตธานี พัทยาได้ร่วมบริจาคอุปกรณ์การศึกษาและสิ่งของเครื่องใช้ต่างๆเนื่องในวันเด็กแห่งชาติปี 2560', 'เมื่อเร็ว ๆ นี้คุณเนียว เคียน บูน ผู้จัดการทั่วไป (ที่ 3 จากซ้าย) และคุณคุณชาลิสา วาณิชรัตนากร ผู้อำนวยการแผนกทรัพยากรบุคคล (ที่ 2 จากขวา) นำทีมพนักงานโรงแรมดุสิตธานีพัทยามอบของเล่น   อุปกรณ์เครื่องเขียน ตลอดจนขนมต่างๆให้แก่คุณณัฐนา ลีเจ้ยวะระ ปลัดอำเภอบางละมุง (กลาง) ณ ที่ว่าการอำเภอบางละมุง เมืองพัทยา เพื่อเข้าร่วมแคมเปญบริจาคสิ่งของต่างๆให้แก่เด็กๆ เนื่องในวันเด็กแห่งชาติในวันที่ 14 มกราคม 2560', '1', '2017-03-12 17:24:25'),
(3, 'ไทย ซีซีทีวี รับบริจาคเครื่องเขียนช่วยนักเรียนภาคใต้ ถูกน้ำท่วม', 'เนื่องจากสถานการณ์น้ำท่วมภาคใต้ ทางสถานีโทรทัศน์ไทย ซีซีทีวีจึงขอปรับโครงการ “ขยายกอด ปี 3” ขยายวัน และ เวลา รับบริจาคเครื่องเขียนและอุปกรณ์การเรียนทั้ง ดินสอ สี สมุด ปากกา ให้กับพวกเราตี๋ หมวย นำอุปกรณ์การเรียนไปช่วยพี่-น้อง นักเรียนภาคใต้แทน เริ่มตั้งแต่วันนี้ จนถึงวันอังคารที่ 31 มกราคม 2560 ที่อาคารรอยัลลี ชั้น 3 สอบถามข้อมูลเพิ่มเติมที่  02-102-6100', '2', '2017-03-12 17:31:20'),
(4, 'ไถ่ชีวิตโค', 'บ.ไทยประกันชีวิต จำกัด (มหาชน) ร่วมบริจาคเงินไถ่ชีวิตโค จำนวน 36 ตัว เนื่องในโอกาสวันคล้ายวันก่อตั้งบริษัทฯ ครบ 75 ปี \r\n      \r\n\r\n          นายไชย ไชยวรรณ กรรมการผู้จัดการใหญ่ บริษัท ไทยประกันชีวิต จำกัด (มหาชน) พร้อมด้วยผู้บริหาร พนักงาน และฝ่ายขาย ร่วมบริจาคเงินเพื่อไถ่ชีวิตโค จำนวน 36 ตัว เนื่องในโอกาสวันคล้ายวันก่อตั้งบริษัทฯ ครบ 75 ปี ให้แก่นายอำนวย ธรรมลังกา ปศุสัตว์อำเภอเมืองปทุมธานี โดยบริษัทฯ จะนำไปมอบให้กับโครงการธนาคารโค - กระบือ เพื่อเกษตรกรตามพระราชดำริ กรมปศุสัตว์ต่อไป ณ โรงฆ่าสัตว์ เทศบาลเมืองปทุมธานี จ.ปทุมธานี', 'โค', '2017-03-12 17:54:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`demand_id`);

--
-- Indexes for table `list_item`
--
ALTER TABLE `list_item`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `list_item_refer`
--
ALTER TABLE `list_item_refer`
  ADD PRIMARY KEY (`refer_id`),
  ADD KEY `fk_list_item_refer_list_item_idx` (`list_item_Lid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `demand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `list_item`
--
ALTER TABLE `list_item`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `list_item_refer`
--
ALTER TABLE `list_item_refer`
  MODIFY `refer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_item_refer`
--
ALTER TABLE `list_item_refer`
  ADD CONSTRAINT `fk_list_item_refer_list_item` FOREIGN KEY (`list_item_Lid`) REFERENCES `list_item` (`Lid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
