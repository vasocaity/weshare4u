-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 03:27 PM
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
(1, 'เด็กหนองคายใช้เวลาว่างจับปลาหารายได้เสริม', 'พบเด็กชายหนองคาย-วัย 11 ปี ลูกตำรวจสภ.ท่าบ่อ ใช้เวลาว่างชวนเพื่อนๆออกจับปลา หารายได้เสริม\r\n\r\nผู้สื่อข่าวได้เดินทางไปที่บ้านโคกคอน หมู่ที่ 6 ต.โคกคอน อ.ท่าบ่อ จ.หนองคาย ได้พบเด็กกับ ด.ช.รัฐพงษ์ กำเนิดเกิด อายุ11ปี ซึ่งเป็นเด็กนักเรียนที่ศึกษาอยู่โรงเรียนบ้านโคกคอนกับกลุ่มเพื่อนๆ ซึ่งเด็กเหล่านี้ หลังจากวันหยุดเสาร์-อาทิตย์ ได้ใช้เวลาว่างให้เกิดประโยชน์ ไม่สนใจเล่นเกมส์ แต่ชวนกันออกหาปลา เพื่อเป็นอาหารและนำออกขายเสริมรายได้ช่วงวันหยุด โดย ด.ช.รัฐพงษ์ พร้อมกลุ่มเพื่อนใช้วิธีจับปลาโดยใช้สุ่มจับปลา ที่ทำขึ้นเองแบบง่าย ๆ นำมาจับปลาได้มากถึง 10-20 ตัว ได้ปลาหลายชนิดทั้งปลาช่อน ปลาดุก ฯ ซึ่งในช่วงเข้าสู่หน้าแล้งปริมาณน้ำในลำห้วย เริ่มลดลงทำให้ปลาหลากหลายชนิดจับได้ง่าย เวลาได้ปลามา จะนำมาแบ่งกันเป็นอาหาร นำกลับไปให้ครอบครัวที่บ้าน หรือ บางวันได้กันมาก ก็พอแบ่งขาย เป็นรายได้เสริมในช่วงวันหยุดเสาร์-อาทิตย์ \r\n\r\nด.ช.รัฐพงษ์ กล่าวว่า ตนมีบิดาเป็นตำรวจ (ด.ต.ปิยวัฒน์ กำเนิดเกิด หัวหน้าศูนย์บริการประชาชนตำบลโคกคอน) โดยบิดาจะสอนให้รู้จักทำมาหากิน โดยยึดอาชีพที่สุจริต ให้รู้จักทำงานเพื่อแลกกับเงิน ตนจึงยึดถือคำสอนของบิดามาชวนเพื่อนๆใช้เวลาว่างวันหยุด เสาร์-อาทิตย์ ชวนกันออกหาปลา ซึ่งเพื่อนๆทุกคนต่างชอบใจ เพราะได้ทั้งปลาไปกินและได้ไปขาย มีเงินเก็บไว้ซื้อขนมกิน และให้ครอบครัวอีกด้วย\r\n\r\n', 'pic1', '2017-03-12 19:10:00'),
(2, 'อาลัย.. บัณฑิตแพทย์จบใหม่ยังไม่ทันรับปริญญา ประสบอุบัติเหตุเสียชีวิต', 'เมื่อเวลา 02.30 น. วันที่ 13 มกราคม 2560 ร.ต.อ.มนตรี ดวงวะณา รอง สว.(สอบสวน) สภ.เกาะคา จ.ลำปาง ได้รับแจ้งมีอุบัติเหตุรถยนต์เก๋งชนต้นไม้เป็นเหตุให้มีผู้เสียชีวิต 2 ราย บนถนนพหลโยธินสายลำปาง - ตาก(ขาขึ้น) หลักกิโลเมตรที่ 684-685 เขต ต.วังพร้าว อ.เกาะคา จ.ลำปาง เจ้าหน้าที่ตรวจสอบที่เกิดเหตุพบรถยนต์เก๋ง มาสด้า สีแดง เลขทะเบียน 4กง6677 กรุงเทพฯ อยู่ในสภาพพลิกคว่ำ ใกล้กันพบต้นไม้หักล้ม\r\n\r\nภายในรถพบศพผู้เสียชีวิต 2 ราย ทราบชื่อคนขับรถคือ นายจักราวุฒิ อิงคะประดิษฐ์ อายุ 33 ปี เป็นลูกชายเจ้าของร้านวัสดุก่อสร้างใน อ.เถิน ส่วนผู้เสียชีวิตอีกรายคือ นายธีระทัศน์ อินทรประพันธ์ อายุ 25 ปี เป็นแพทย์จบใหม่ประจำโรงพยาบาลเถิน เจ้าหน้าที่กู้ภัยต้องใช้เครื่องตัดถ่างงัดร่างผู้เสียชีวิตออกจากซากรถด้วยความยากลำบาก   \r\n\r\nสอบสวนทราบว่ารถเก๋งคันนี้ขับมาจาก อ.เถิน จ.ลำปาง มุ่งหน้าเข้าสู่ตัวเมือง คาดว่าน่าจะขับรถมาด้วยความเร็วสูง เมื่อมาถึงจุดเกิดเหตุซึ่งเป็นทางโค้ง ประกอบกับช่วงเช้ามืดมีหมอกลงหนาจัด อาจทำให้คนขับมองไม่เห็นจึงเกิดอุบัติเหตุดังกลาว  \r\n\r\nจากข้อมูลทราบว่านายธีระทัศน์  1 ในผู้เสียชีวิตเป็นแพทย์จบใหม่ประจำโรงพยาบาลเถิน อ.เถิน จ.ลำปาง และเตรียมจะเข้ารับพระราชทานปริญญาบัตรที่มหาวิทยาลัยเชียงใหม่  ในวันที่ 23 มกราคมนี้  แต่ก็มาประสบอุบัติเหตุจนเสียชีวิตก่อน', 'pic2', '2017-03-12 19:29:00'),
(3, 'พบ ดร.ปลอมเกลื่อนมหาวิทยาลัย ดีเอสไอสอบโยง ม.สันติภาพโลก', 'วันนี้ (16 ม.ค. 60) ผู้สื่อข่าวรายงานว่า ข้อมูลบัญชีรายชื่อ รหัสนักศึกษา  ชื่อ – นามสกุล ของคนไทย ที่อ้างว่าเรียนต่อในมหาวิทยาลัยต่างประเทศ ถูกนำมาเปิดเผยอยู่บนเว็บไซต์ โฆษณาเรียน วุฒิต่างประเทศ ปริญญาทุกระดับ ในหลักสูตร 6 เดือนถึง 2 ปี มีค่าใช้จ่ายตลอดหลักสูตร 225,000 และสามารถเลือกเรียนในมหาวิทยาลัยต่างประเทศได้ โดยใช้หนังสือเดินทาง วุฒิการศึกษาเดิม และถาพถ่ายขนาดวีซ่า เป็นหลักฐานในการสมัคร\r\n\r\nนอกจากนี้ ทีมข่าวยังพบตัวอย่างมหาวิทยาลัยในภาคเหนือ ที่มีอาจารย์ท่านหนึ่งจบปริญญาเอกจากมหาวิทยาลัยเซาธ์แทมป์ตัน ประเทศอังกฤษจริง แต่กลับไม่รู้จักอาจารย์อีกคนหนึ่ง ซึ่งเข้ามาบรรจุสอนสาขาเดียวกัน โดยอ้างว่าจบมาจากมหาวิทยาลัยดียวกัน จึงตรวจสอบพบว่า ได้ทำปริญญาเอกปลอมมา แต่ก็ยังคงได้กลับไปสอนในระดับปริญญาโท\r\n\r\nหลังเปิดเผยเรื่องวุฒิปริญญาเอกปลอม ศูนย์ประสานงานบุคลากรในสถาบันอุดมศึกษาของรัฐ หรือ เชส ได้รับแจ้งข้อมูลเพิ่ม อีกถึง 10 ราย มี 3 ราย อ้างว่าจบปริญญาเอกจากที่เดียวกันกับรายที่ตรวจสอบรายแรก คือ มหาวิทยาลัยเซาธ์แทมป์ตัน แต่เมื่อตรวจสอบไปที่มหาวิทยาลัย กลับไม่พบชื่อในระบบนักศึกษา\r\n\r\nข้อมูลที่พบยังบ่งชี้ว่า สถานที่รับทำวุฒิการศึกษาปลอมระดับปริญญาเอก มีที่ตั้งอยู่ในพื้นที่ภาคเหนือ ซึ่งเมื่อตรวจสอบดูแล้วไม่ใช่ที่ตั้งของสถานศึกษา ทั้งนี้ นายวีระชัย พุทธวงศ์ เลขาธิการ เชส จึงรวบรวมข้อมูส่งให้กรมสอบสวนคดีพิเศษ หรือ ดีเอสไอ ตรวจสอบ เพราะคาดว่าอาจเชื่อมโยงกับมหาวิทยาลัยสันติภาพโลก ที่ถูกดำเนินคดีไปก่อนหน้านี้ ซึ่ง ดีเอสไอ รับไปดำเนินการ', 'pic3', '2017-03-12 19:24:00');

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
  `Rdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_item`
--

INSERT INTO `list_item` (`Lid`, `Lname`, `Condi`, `Pic_list`, `Did`, `Rid`, `Ddate`, `Rdate`) VALUES
(1, 'ปากกา ดินสอ ยางลบ และกบเหลา', 'สภาพใหม่ ไม่ได้ใช้', 'เครื่องเขียน1', 1, 0, '2017-03-12 16:11:00', '0000-00-00 00:00:00'),
(2, 'หนังสือเรียน', 'ต้องการส่งต่อหนังสือและเครื่องเขียนให้น้องๆ ', 'เครื่องเขียน2', 2, 0, '2017-03-10 08:41:00', '0000-00-00 00:00:00'),
(3, 'ดินสอ ยางลบ', 'ซื้อมาไม่ได้ใช้เลยค่ะ มีปากกา ลิควิด ดินสอ วงเวียน ', 'เครื่องเขียน3', 3, 0, '2017-03-11 18:46:00', '0000-00-00 00:00:00');

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
(2, 'ผู้ใหญ่ใจดี จัดกิจกรรมเพื่อสังคมร่วมบริจาคเสื้อผ้า และสิ่งของที่จำเป็นให้น้องๆ โรงเรียนตำรวจตระเวนชายแดน', 'สร้างความรู้สึกอิ่มเอมใจพร้อมแบ่งปันกับการเป็นผู้ให้ เมื่อเครื่องสำอางบีเอสซี คอสเมโทโลจี จับมือ ฮีส แอนด์ เฮอร์ พลัส พอยท์ โดยบริษัท ไอ.ซี.ซี.อินเตอร์เนชั่นแนล จำกัด (มหาชน) จัดกิจกรรมซีเอสอาร์ร่วมบริจาคเสื้อผ้า สิ่งของที่จำเป็น เครื่องอุปโภคบริโภค ข้าวสาร อาหารแห้ง อุปกรณ์การเรียน ขนมและของเด็กเล่น มอบให้น้องๆ ผู้ยากไร้และช่วยเหลือครอบครัวในถิ่นทุรกันดาร ซึ่งเป็นโครงการที่ทำต่อเนื่องมาตลอดทุกปี พร้อมพาลูกค้าสร้างความประทับใจร่วมกัน ที่โรงเรียนตำรวจตระเวนชายแดนบ้านคีรีล้อม ต.ช้างแรก อ.บางสะพานน้อย จ.ประจวบคีรีขันธ์ เมื่อวันก่อน \r\nโดยครั้งนี้เราเดินทางไปที่โรงเรียนตำรวจตระเวนชายแดนบ้านคีรีล้อม ซึ่งอยู่ในภูเขาลึกมากๆ เป็นโรงเรียนขนาดเล็กมีนักเรียนทั้งหมดประมาณ 120 คน ซึ่งในครั้งนี้เราได้จัดเตรียมอุปกรณ์ สื่อการเรียนการสอน ทุนการศึกษา เสื้อผ้า ข้าวสาร อาหารแห้ง รวมไปถึงสิ่งขาดไม่ได้สำหรับเด็กๆ คือ ของเล่น ขนมและไอศกรีม ไปมอบให้ถึงมือเด็กๆ ซึ่งเด็กๆ จะดีใจเป็นอย่างมากทุกครั้งที่ได้รับ นอกจากนี้พี่ๆ ยังได้มอบความสุขด้วยกิจกรรมนันทนาการ เล่นเก่มร่วมกับเด็กมีความสุขเป็นอย่างมาก สุขทั้งผู้ให้และผู้รับ', 'ปัน', '2017-03-12 17:24:25'),
(3, 'เปลี่ยน ‘รองเท้า’ เป็นทุนการศึกษาให้น้อง', 'บริจาครองเท้าใช้แล้วที่มีสภาพดี เพื่อเปลี่ยนเป็นทุนการศึกษาแก่น้องที่ขาดแคลนทุนทรัพย์ ผ่านร้านปันกัน\r\nต้อนรับเดือนแห่งความรัก ด้วยการจุดประกายการแบ่งปันภายใต้โครงการ “โรบินสันทำดี” ที่ห้างสรรพสินค้าโรบินสันจัดขึ้น โดยเชิญชวนนักช็อปรวมพลังส่งต่อความรักกับกิจกรรม“แชร์ ยัวร์ ชูส์” ในแคมเปญ “โรบินส์ ออน ชูส์ ปี 2” ด้วยการบริจาครองเท้าใช้แล้วที่มีสภาพดี เพื่อเปลี่ยนเป็นทุนการศึกษาแก่น้องที่ขาดแคลนทุนทรัพย์ ผ่านร้านปันกัน โดยมูลนิธิยุวพัฒน์ ตั้งแต่วันนี้-5 มีนาคมนี้ ที่โรบินสัน ดีพาร์ทเมนท์ สโตร์ และโรบินสันไลฟ์สไตล์ สาขาที่ร่วมรายการ \r\n       ทั้งนี้ภายในงานได้รับเกียรติจาก 3 เซเลบริตี้ ที่งานนี้ขอร่วมทำบุญด้วยการขนรองเท้าคู่ใจมาร่วมบริจาคในกิจกรรมดีๆ นี้รวมทั้งช็อปรองเท้าคู่ใหม่ในแคมเปญ “โรบินส์ ออน ชูส์ ปี 2" เริ่มที่เซเลบสาวหวาน “มายด์” แพรวปรียา ชุมพล ณ อยุธยา ที่บอกว่า ปกติเป็นคนชอบซื้อรองเท้ามากจนกลายเป็นของสะสม วันนี้ก็เลยถือโอกาสมามองหารองเท้าถูกใจ เพื่อร่วมทำบุญกับมูลนิธิขาเทียมของสมเด็จย่า และนำรองเท้ามาบริจาคในกิจกรรมด้วย เพราะเชื่อว่าน้ำใจจาก 1 คนรวมกัน จะกลายเป็นฝันที่ยิ่งใหญ่ของน้องๆ', 'รองเท้า', '2017-03-12 17:31:20'),
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
-- Indexes for table `list_item`
--
ALTER TABLE `list_item`
  ADD PRIMARY KEY (`Lid`);

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
-- AUTO_INCREMENT for table `list_item`
--
ALTER TABLE `list_item`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
