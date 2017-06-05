-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 08:41 AM
-- Server version: 5.5.48
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group3`
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
(1, 'เชิญร่วมบริจาคอุปกรณ์กีฬา,ของเล่นเด็กเก่าๆ,อุปกรณ์เครื่องเขียน,ฯลฯ แก่โรงเรียนห่างไกล ด้อยโอกาส', 'เนื่องด้วย คณะมนุษยศาสตร์ มหาวิทยาลัยมหาจุฬาลงกรณ์ราชวิทยาลัยวิทยาเขตนครราชสีมา    ได้จัดโครงการค่ายมนุษย์ศาสตร์สัมพันธ์ขึ้นเป็นประจำทุกปี  โดยมีกิจกรรมมอบอุปกรณ์การศึกษาแก่    \r\nโรงเรียนห่างไกล และกิจกรรมสันทนาการ เพื่อแบ่งปันสิ่งของจากผู้ที่บริจาคไปสู่เด็กๆที่ขาดโอกาส อีกทั้งยังมีจุดประสงค์เพื่อให้เด็กๆได้ไกล้ชิดกับพระสงฆ์ และส่งเสริมทัศนคติที่ดีต่อพระพุทธศาสนา ดังรูปที่แนบมา (เป็นรูปเก่า จากการจัดกิจกรรมครั้งก่อนๆ) และในปีนี้ คณะกรรมการชมรมภาษาอังกฤษ คณะมนุษยศาสตร์ ได้เห็นควรให้จัดกิจกรรม ณ โรงเรียนบ้านโนนสว่าง ต.อ่างศิลา อ.พิบูลมังสาหาร จ.อุบลราชธานี ในวันที่ ๒ - ๓ มีนาคม ๒๕๕๖ \r\nอาตมา พระเรืองศักดิ์ จนฺทวฑฺโฒ ในนามเลขานุการชมรมภาษาอังกฤษ คณะมนุษยศาสตร์ มจร.วิทยาเขตนครราชสีมา จึงขอความอนุเคราะห์บอกบุญผ่านมายังเว๊ปบอร์ดแห่งนี้ เพื่อประชาสัมพันธ์ให้ญาติโยมผู้มีใจเป็นบุญเป็นกุศล ได้บริจาคสิ่งของ อุปกรณ์การกีฬา,สมุด,หนังสือภาพสำหรับเด็ก,ของเล่น (ของเก่าหรือของใหม่ก็ได้),ขนม ฯลฯ ตามแต่กำลังศรัทธา \r\n\r\n\r\n     โดยสามารถบริจาคผ่านทางพัสดุไปรษณีย์ จ่าหน้า พระเรืองศักดิ์ จนฺทวฑฺโฒ 77 หมู่ 14 วัดดอนโบสถ์ ต.โนนไทย อ.โนนไทย จ.นครราชสีมา 30220 โทรศัพท์ 088 7196328 \r\n\r\n     และเพื่อตัดปัญหาการทุจริตต่างๆ จึง ไม่ขอรับเป็นเงินสด หรือโอนผ่านบัญชีใดๆทั้งสิ้น \r\nสุดท้ายนี้ ขออำนาจคุณพระศรีรัตนตรัย และสิ่งศักดิ์สิทธิ์ทั่วสากลโลกจงดลบันดาลให้ท่านผู้มีใจเป็นบุญเป็นกุศลได้แคล้วคลาดปราศจากโรคภัยทั้งปวง ภูติผีมารร้ายอย่าได้มารบกวน ขอให้ประสพล้วนแต่ผลคือลาภอาบอิ่มใจ คิดสิ่งหนึ่งประการใด ขอให้บุญนั้นนำพาให้สำเร็จสมหวังทุกประการ เทอญ... ', 'pic1', '2013-02-17 19:10:00'),
(2, 'รินน้ำใจ ช่วยเหลือกัน : ขอรับบริจาคสิ่งของเพื่อต้านภัยหนาวที่แม่ฮ่องสอน', 'สำหรับผู้สนใจและต้องการบริจาคสิ่งของสำหรับผู้ที่ขาดแคลนเพื่อบรรเทาทุกข์และช่วยเหลือเพื่อนมนุษย์ด้วยกัน\r\nสิ่งของที่จะบริจาค ท่านสามารถบริจาคได้หลากหลายครับ ยกเว้น ผมไม่สะดวกรับบริจาคเป็น “เงิน” ครับ อาจจะยุ่งยากภายหลังได้\r\nสิ่งของที่จะขอรับบริจาคมีดังนี้\r\n\r\nเสื้อผ้าเครื่องนุ่งห่มกันหนาว ทั้งใหม่และเก่า เช่น เสื้อ กางเกงขายาว ถุงเท้า  ถุงมือ หมวก ผ้าห่ม และอื่นๆ\r\nอุปกรณ์เครื่องเขียนสำหรับเด็กนักเรียน เช่นดินสอ ปากกา หนังสือ\r\nของเด็กเล่น เช่นตุ๊กตา ทั้งที่ใช้แล้ว และใหม่ (ส่วนนี้จะนำไปให้ศูนย์เด็กเล็กตามศูนย์เด็กเล็กบนดอย)\r\nเครื่องคอมพิวเตอร์มือสองที่ใช้แล้ว ส่วนนี้จะนำไปมอบให้โรงเรียนไว้ใช้งาน ซึ่งต้องการใช้เป็นอย่างมาก\r\n ----------------------------------------------------------  \r\n\r\nและ ผมกับเพื่อนที่กรุงเทพท่านหนึ่ง กำลังจะช่วยกันจัดสร้าง รวบรวมหนังสือธรรมะเพื่อเป็นห้องสมุดธรรมะ ที่วัดพระธาตุดอยจอมแจ้ง อ.ปาย จ.แม่ฮ่องสอน หากท่านไหน มีหนังสือธรรมะที่อ่านแล้ว ต้องการจะบริจาคมอบเป็นธรรมทานเพื่อรวบรวมเก็บไว้ในห้องสมุดธรรมะที่เรากำลังดำเนินการ ยินดีรับบริจาคครับตอนนี้ก็ได้หนังสือธรรมะที่ส่งมาบ้างแล้วเล็กน้อย  \r\n\r\nในโอกาสนี้ผมต้องขอขอบคุณทุกท่านที่เมตตา บริจาคสิ่งของ หรือแม้กระทั่งกำลังใจให้ผมและทีมงานในปีที่แล้ว และในปีนี้หนาวที่จะมาถึง', 'pic2', '2017-03-12 19:29:00'),
(3, 'ขอเชิญร่วมบริจาคอุปกรณ์สื่อการเรียนการสอน', 'ตามที่โรงเรียนบ้านแก่งสะเดา ตำบลทุ่งมหาเจริญ   อำเภอวังน้ำเย็น จังหวัดสระแก้ว สังกัดสำนักงานเขตพื้นที่การศึกษาประถมศึกษาสระแก้ว เขต 1  เป็นโรงเรียนขนาดกลางประชาชนในชุมชนมีฐานะความเป็นอยู่ยากจน มีอาชีพรับจ้างทั่วไป จัดการเรียนการสอนตั้งแต่ชั้นปฐมวัย - ถึงชั้นประถมศึกษาปีที่ 6 ได้ส่งหนังสือขอความอนุเคราะห์ที่ ศธ 04153.117/67 ลงวันที่  18  มีนาคม 2556  เรื่องขอความอนุเราะห์อุปกรณ์สื่อการเรียนการสอน อุปกรณ์กีฬา โต๊ะอาหาร และอื่น ๆ มานั้น  ชมรมนักวิทยุสมัครเล่นเพื่อการศึกษาและคณะกรรมการบริหารชมรม ฯ  พิจารณาแล้วเห็นว่า  ควรที่จะให้การสนับสนุนตามที่ร้องขอมา   เนื่องจากโรงเรียนดังกล่าวเป็นโรงเรียนขนาดกลางมีนักเรียนจำนวน 147  คน  การจัดการเรียนการสอนเป็นไปอย่างขาดแคลน เพราะเป็นโรงเรียนที่อยู่ห่างไกล ได้รับงบประมาณจัดสรรจากภาครัฐน้อย ไม่เพียงพอ ทางชมรมนักวิทยุสมัครเล่นเพื่อการศึกษา จึงใคร่ขอความอนุเคราะห์จากผู้ใจบุญทุกท่านร่วมกันบริจาคอุปกรณ์สื่อการเรียนการสอน อุปกรณ์กีฬา โต๊ะอาหารและสิ่งที่เห็นสมควรตามกำลังศรัทธาของแต่ท่าน และทางชมรม ฯ จะไปส่งมอบในวันเสาร์ที่ 23 พฤศจิกายน 2556', 'pic3', '2013-09-26 19:24:00'),
(4, 'บ้านนกขมิ้นขอรับบริจาคเสื้อผ้ามือ2ช่วยเด็กกำพร้า', 'มูลนิธิบ้านนกขมิ้น เปิดขอรับบริจาคเสื้อผ้ามือสอง - ของเหลือใช้ทุกชนิด หาทุนช่วยเด็กกำพร้ากว่า 200 ชีวิต\r\n\r\nเจ้าหน้าที่มูลนิธิบ้านนกขมิ้น ซึ่งตั้งอยู่ใน ซ.เสรีไทย 17 ถ.เสรีไทย แขวงคลองกุ่ม เขตบึงกุ่ม กรุงเทพมหานคร เปิดเผยกับสำนักข่าว ไอ.เอ็น.เอ็น. ว่า ขณะนี้มูลนิธิบ้านนกขมิ้น กำลังเปิดขอรับบริจาคเสื้อผ้ามือสอง และของเหลือใช้ทุกชนิด เพื่อนำมาให้เด็กภายในมูลนิธิ รวมถึงนำไปจำหน่าย สำหรับหารายได้เข้ามาเป็นค่าเทอมและสร้างโอกาสให้แก่เด็กกำพร้า, เด็กเร่ร่อน และเด็กที่ถูกทอดทิ้งที่อยู่ในการดูแลกว่า 200 ชีวิต ซึ่งเด็กของบ้านนกขมิ้นจะมีค่าใช้จ่ายอยู่ประมาณ คนละ 3,000 บาทต่อเดือน รวม 200 คน จะอยู่ที่ 600,000 บาท โดยปัจจุบันพบว่ารายได้ที่จะนำมาใช้บริหารจัดการภายในมูลนิธิ ยังค่อนข้างอยู่แบบเดือนชนเดือน ทำให้ต้องหาช่องทางในการเงินเข้ามาสนับสนุนเพิ่มเติม\r\n\r\nทั้งนี้ การเปิดรับบริจาคดังกล่าวนั้น จะเปิดอย่างไม่มีกำหนด ผู้ที่สนใจสามารถบริจาคเข้ามาได้เรื่อย ๆ ที่มูลนิธิบ้านนกขมิ้น ซ.เสรีไทย 17 ถ.เสรีไทย หรือส่งพัสดุไปรษณีย์มาที่มูลนิธิบ้านนกขมิ้น ตู้ปณ 3 ปณศ.มีนบุรี กรุงเทพฯ 10510 หรือโทรศัพท์ที่ 0814321890, 0949400606, 023756497, 023752455 รวมถึงกดติดตามและถูกใจ ที่หน้าเพจ Facebook  \r\nhttps://www.facebook.com/baannokkamin เพื่อเป็นการช่วยประชาสัมพันธ์อีกทางหนึ่ง\r\n', 'pic4', '2017-03-20 15:48:24'),
(5, '"มูลนิธิปลอมเรี่ยไร" เจอคนจริงถึงกับเงิบ !! ', 'เพจดัง “เจ้าพ่อคลิปเด็ด” โพสต์คลิป วีดีโอความยาวประมาณ 2 นาที พร้อมระบุข้อความ “ต้องเอาให้หนัก "มูลนิธิปลอมเรี่ยไร" เจอคนสุรินทร์เข้าไป เถียงไม่ออกเลยงานนี้”\r\nเป็นเหตุการณ์ที่ชายเสื้อสีชมพู ถามข้อกฎหมายการออกมาเรี่ยไรเงินบริจาคกับสาวที่อ้างว่าเป็นเจ้าหน้าที่มูลนิธิ ช่วงแรกเธอสามารถตอบคำถามได้ แต่เมื่อโดนถามหนักเข้าในข้อกฎหมาย ทำเอาสาวเจ้าหน้าที่มูลนิธิถึงกับมีอาการตอบติดๆ ขัดๆ เพราะตอบไม่ได้ เช่น ถามว่ารู้หรือไม่ว่าการออกมาเรี่ยไรเงินบริจาคแบบนี้ต้องขออนุญาตหน่วยงานไหน ซึ่งสาวที่อ้างตัวเป็นเจ้าหน้าที่มูลนิธิ ตอบว่ารู้ ต้องขออนุญาตกระทรวงมหาดไทย และได้รับอนุญาตแล้วทั้งนี้ ชายคนเดิมจึงถามต่อว่า เมื่อกระทรวงมหาดไทยอนุญาต ก็หมายความมาสามารถขอรับบริจาคในพื้นที่ที่ยื่นขอ แต่นี่ที่จังหวัดสุรินทร์ จะเอาหนังสือที่ได้รับอนุญาตที่อ้างว่าได้รับมานั้นมาขอรับบริจาคข้ามถิ่นไม่ได้ ต้องไปยื่นขอใหม่ที่ท้องถิ่นนั้น ๆและหนังสืออนุญาตที่ได้มามันมีระยะเวลาไม่เกิน 24 ชั่วโมง หรือ การเดินออกมารับบริจาคในลักษณะนี้ผิดวัตถุประสงค์ของมูลนิธิ ที่ต้องตั้งโต๊ะรับบริจาคที่มูลนิธิของตัวเองเท่านั้น', 'pic5', '2017-03-20 16:35:44'),
(6, 'หลายภาคส่วนร่วมบริจาคช่วยเหลือมูลนิธิเพื่อนช้าง', 'การประกาศปัญหาสถานะทางการเงินของมูลนิธิเพื่อนช้างจนทำให้ส่อเค้าว่า สถานพยาบาลช้างที่อยู่มานานกว่า 30 ปี อาจจะต้องปิดตัวลง ทำให้หลายภาคส่วน เริ่มทยอยบริจาคเงินให้แก่มูลนิธิ\r\nผู้บริหาร และ พนักงาน บริษัทเอกชน ร่วมกิจกรรม ทำดีเพื่อช้าง โดยประดิษฐ์เทียนและครีมสปา จำหน่ายหารายได้มอบให้ มูลนิธิเพื่อนช้าง อำเภอห้างฉัตร จังหวัดลำปาง ซึ่งเป็นกิจกรรมที่ทำต่อเนื่องกว่า 5 ปี พร้อมบริจาคเงินช่วยเหลือช้าง กว่า 1 ล้านบาท\r\nผู้ร่วมกิจกรรมยังให้กำลังใจ นางโซไรดา ซาลวาลา ผู้ก่อตั้ง และ เลขาธิการมูลนิธิเพื่อนช้าง หลังนางโซไรดา ทำหนังสือถึงคณะกรรมการมูลนิธิเพื่อนช้าง ขอยุติการดำเนินงานของมูลนิธิฯ เนื่องจากประสบปัญหางบประมาณ ขณะที่นางโซไรดา ระบุว่า หลังมีการนำเสนอข่าวผ่านสื่อต่างๆ ได้มีการสอบถามทั้งในและต่างประเทศว่า มูลนิธิเพื่อนช้างปิดทำการแล้วหรือไม่\r\nซึ่งขอยืนยันว่า มูลนิธิฯยังไม่ปิดในขณะนี้ เนื่องจากยังมีเงินทุนกว่า 10 ล้านบาท ยังบริหารงานได้อีกระยะหนึ่ง และล่าสุด เริ่มมีผู้สนใจร่วมบริจาคเงินแก่มูลนิธิฯ ขณะเดียวกันจะมีการหารือถึงปัญหาที่เกิดขึ้นเร็วๆนี้\r\nมูลนิธิเพื่อนช้าง ก่อตั้งเมื่อปี 2536 ถือเป็นองค์กรที่ให้บริการ โรงพยาบาลช้างเป็นแห่งแรกของโลก แต่ละปี มีช้างเข้ามารักษาเกือบ 200 เชือก และตลอด 25 ปี ได้รักษาช้างจำนวน 4,651 เชือกและที่ผ่านมามีบทบาทในการผลักดันร่างกฎหมายช้าง เพื่อแก้ปัญหาเกี่ยวกับช้าง\r\n', 'pic6', '2017-03-20 16:40:18'),
(7, 'ใจใหญ่มาก! หนุ่มน้อยจีนอายุ 16 บริจาคอวัยวะให้ชีวิตใหม่ผู้ป่วยอื่น 7 ชีวิต', 'หนุ่มน้อยชาวจีนวัย 16 ปี บริจาคอวัยวะถึง 9 ชิ้น ให้แก่ผู้ป่วยหนักรายอื่นกว่า 7 คน หลังประสบอุบัติเหตุทางรถยนต์จนเสียชีวิต\r\n\r\nสำนักข่าวไชน่า นิวส์ของจีนรายงานว่า เมื่อวันที่ 4 มี.ค. ที่ผ่านมา หนุ่มน้อยชาวจีนแซ่หลี่ (นามสมมุติ) คนหนึ่งในนครคุนหมิง มณฑลยูนนาน ได้บริจาคอวัยวะให้กับผู้ป่วยหนักรายอื่น หลังประสบอุบัติเหตุทางรถยนต์จนเสียชีวิตในวันดังกล่าว\r\n\r\nทางทีมแพทย์โรงพยาบาลประชาชนที่ 1 นครคุนหมิง มณฑลยูนนาน ที่ทำการผ่าตัดเผยว่า หนุ่มน้อยใจใหญ่คนนี้ได้บริจาคอวัยวะรวมทั้งหมด 9 อวัยวะ ให้ชีวิตใหม่กับผู้ป่วยหนักจำนวน 7 คน โดยทางทีมแพทย์กำลังเตรียมการผ่าตัดปลูกถ่ายหัวใจและตับ ซึ่งหนุ่มน้อยคนนี้เป็นคนแรกและคนเดียวในขณะนี้ ที่บริจาคอวัยวะให้คนอื่นมากที่สุดในมณฑลยูนนาน\r\n\r\nอย่างไรก็ตาม เรื่องราวของหนุ่มน้อยที่บริจาคอวัยวะให้กับผู้อื่นคนนี้ กลายเป็นกระแสพูดถึงในโลกออนไลน์ของจีน หลายคนประทับใจและซาบซึ้ง แต่ก็รู้สึกเสียใจกับการสูญเสียครั้งนี้ไม่น้อย\r\n', 'pic7', '2017-03-20 16:48:15'),
(8, 'สรรพากร แจง รายละเอียดบริจาคช่วยน้ำท่วมใต้ ย้ำลดภาษีในการยื่นปี 61', 'ตามที่ได้เกิดเหตุการณ์อุทกภัยน้ำท่วมใหญ่ทางภาคใต้ ซึ่งได้สร้างความเดือดร้อนให้แก่ประชาชนเป็นอย่างมาก จนมีหลายหน่วยงานทั้งภาครัฐและเอกชนได้ตั้งศูนย์ช่วยเหลือผู้ประสบอุทกภัย โดยเปิดบัญชีเงินฝากเพื่อรับเงินบริจาค และรับบริจาคสิ่งของ เพื่อนำไปช่วยเหลือบรรเทาทุกข์ให้แก่ผู้ประสบภัย นั้น\r\nนายสมชาย แสงรัตนมณีเดช รองอธิบดีกรมสรรพากร ในฐานะโฆษกกรมสรรพากร ชี้แจงว่า “กระทรวงการคลังได้มีมาตรการภาษีเพื่อช่วยเหลือผู้ประสบอุทกภัยในภาคใต้ ให้สิทธิผู้บริจาคสามารถนำเงินหรือมูลค่าทรัพย์สินที่ได้บริจาคระหว่างวันที่ 1 มกราคม 2560 ถึงวันที่ 31 มีนาคม 2560 มาหักเป็นค่าลดหย่อนหรือหักเป็นรายจ่ายในการคำนวณภาษีได้ 1.5 เท่า โดย\r\n1. เป็นการบริจาคให้แก่ผู้รับบริจาคที่เป็น\r\n- ส่วนราชการ มูลนิธิ องค์การหรือสถานสาธารณกุศลที่รัฐมนตรีว่าการกระทรวงการคลังประกาศกำหนดในราชกิจจานุเบกษา เพื่อช่วยเหลือผู้ประสบอุทกภัย\r\n- ตัวแทนรับบริจาคที่เป็นบริษัทหรือห้างหุ้นส่วนนิติบุคคล หรือนิติบุคคลอื่น ที่ได้ขึ้นทะเบียนแจ้งขอเป็นตัวแทนรับบริจาคกับกรมสรรพากร เช่น สถานีโทรทัศน์ หรือสถานีวิทยุ\r\n2. ผู้บริจาคมีสิทธิหักลดหย่อนหรือหักรายจ่ายดังนี้\r\n- บุคคลธรรมดาที่บริจาคเงิน สามารถนำจำนวนเงินดังกล่าวไปหักลดหย่อนในการคำนวณเสียภาษีเงินได้บุคคลธรรมดาได้ 1.5 เท่า แต่เมื่อรวมกับเงินบริจาคอื่นแล้วต้องไม่เกินร้อยละ 10 ของเงินได้พึงประเมิน\r\nหลังหักค่าใช้จ่ายและหักค่าลดหย่อน และใช้สำหรับการหักลดหย่อนของปีภาษี 2560 ที่จะต้องยื่นรายการ ภายในเดือนมกราคม - มีนาคม 2561\r\n- บริษัทหรือห้างหุ้นส่วนนิติบุคคลที่บริจาคเงินหรือทรัพย์สิน สามารถนำจำนวนเงินหรือมูลค่าทรัพย์สินที่บริจาคไปหักเป็นรายจ่ายได้ 1.5 เท่า แต่เมื่อรวมกับรายจ่ายเพื่อการกุศลสาธารณะหรือเพื่อการสาธารณประโยชน์แล้วต้องไม่เกินร้อยละ 2 ของกำไรสุทธิ \r\n3. หลักฐานการรับบริจาค ระหว่างวันที่ 1 มกราคม 2560 ถึงวันที่ 31 มีนาคม 2560\r\n- หลักฐานการรับเงิน หรือทรัพย์สิน ที่มีข้อความระบุว่าเป็นโครงการหรือเป็นการบริจาค เพื่อช่วยเหลือผู้ประสบอุทกภัยภาคใต้ โดยอาจระบุช่วงเวลาที่เกิดอุทกภัยไว้ด้วย\r\n- หลักฐานการโอนเงินเข้าบัญชีธนาคารในช่วงระยะเวลาที่เกิดอุทกภัย ซึ่งพิสูจน์ผู้โอน\r\nและผู้รับโอนได้\r\nมาตรการภาษีดังกล่าวนอกจากจะเป็นการช่วยบรรเทาภาระภาษีแล้ว ยังเป็นการสนับสนุนให้ มีการบริจาคเพื่อระดมความช่วยเหลือและฟื้นฟูสภาพความเป็นอยู่ให้แก่ผู้ประสบอุทกภัย และทำให้ทุกภาคส่วน มีส่วนร่วมรับผิดชอบต่อสังคมในเหตุอุทกภัยครั้งใหญ่ที่เกิดขึ้นในประเทศขณะนี้”\r\nสำหรับผู้ที่มีข้อสงสัยสามารถสอบถามเพิ่มเติมได้ที่สำนักงานสรรพากรพื้นที่ทุกพื้นที่ และ ศูนย์สารนิเทศสรรพากร โทร.1161', 'pic8', '2017-03-20 16:52:05'),
(9, '\'เฉินหลง\'ช่วยใต้ บริจาค2.4ล. ให้ผู้ประสบภัย', '“วู้ดดี้” ขนทัพดารานักแสดงมีทั้ง “ณเดชน์” และ “ชมพู่-อารยา” ร่วมงานตัดผมหาเงินช่วยผู้ประสบภัยน้ำท่วมภาคใต้ ส่วนซุปเปอร์สตาร์คนดัง “เฉินหลง” ร่วมมอบถุงยังชีพ พร้อมประกาศมอบเงินส่วนตัวอีก 500,000 เหรียญฮ่องกง ช่วยซับน้ำตาชาวใต้ หลายพื้นที่ยังอ่วมหนัก ยะลาน้ำป่าหอบเอาดินจากภูเขาบีโลถล่มกำแพงโรงไฟฟ้า กฟผ.พังทลายไปทับโรงงานผลิตทุเรียนทอด เป็นสินค้า “โอทอป” ส่งออกขายต่างประเทศ พังเสียหายยับ ส่วนที่เมืองคอน คลื่นซัดเรือประมงจมปากอ่าวขณะออกเรือจับปลา 5 ลูกเรือได้รับการช่วยเหลือกลับเข้าฝั่งปลอดภัย ในขณะที่ภาคเหนือ-อีสาน เผชิญอากาศหนาวเย็น ต้องก่อไฟผิง กินข้าวจี่คลายหนาว ปภ.เตือน 9 จังหวัดใต้เตรียมรับมือน้ำท่วมหนักอีกระลอก', 'pic9', '2017-03-20 17:02:22'),
(10, 'แห่สรรเสริญ “ทอฟฟี” บริจาค 10 ล้าน ช่วยมาสคอตเป็นมะเร็ง ', 'ทุกคนพากันสรรเสริญ เอฟเวอร์ตัน ที่ประกาศบริจาคเงิน 200,000 ปอนด์ (ประมาณ 10 ล้านบาท) แก่มาสคอต ซันเดอร์แลนด์ เพื่อใช้เป็นค่าใช้จ่ายในการต่อสู้กับโรคมะเร็ง       \r\n       	สำหรับเงินดังกล่าวจะเข้ากองทุน แบร็ดลีย์ ลอว์รีย์ หลังเกม พรีเมียร์ ลีก อังกฤษ เมื่อวันจันทร์ที่ 12 กันยายน ที่ผ่านมา ซึ่ง เอฟเวอร์ตัน โชว์ฟอร์มยอดเยี่ยมบุกยำใหญ่ ซันเดอร์แลนด์ 3-0 คาถิ่น สเตเดียม ออฟ ไลท์ จากแฮตทริกของ โรเมลู ลูกากู หอกทีมชาติเบลเยียม       \r\n       	เจ้าหนูวัยแค่ 5 ขวบนั้น เป็นแฟนบอล ซันเดอร์แลนด์ โชคร้ายป่วยเป็นมะเร็งเนื้อเยื่อประสาทชนิด นิวโรบลาสโตมา ที่พบมากในเด็ก ซึ่งต้องใช้เงินถึง 700,000 ปอนด์ (ประมาณ 35 ล้านบาท) ในการเดินทางไปรักษาที่ประเทศสหรัฐอเมริกา       \r\n       	เกมนั้น แบร็ดลีย์ ลอว์รีย์ ได้สวมเสื้อเป็นมาสคอตให้ ซันเดอร์แลนด์ พร้อมกับได้รับเสียงปรบมือกึกก้องถึง 5 นาทีเลยทีเดียว เพื่อเป็นกำลังใจให้ต่อสู้กับโรคร้ายต่อไปอย่ายอมแพ้       \r\n       	คนที่ได้รับคำชมเต็ม ๆ ก็คือ บิล เคนไรท์ ประธานสโมสร เอฟเวอร์ตัน โดย โรนัลด์ คูมัน นายใหญ่ “ทอฟฟีสีน้ำเงิน” ได้โพสต์ข้อความผ่าน “ทวิตเตอร์” สื่อสังคมออนไลน์ เช่นเดียวกับ เจมี คาร์ราเกอร์ อดีตแนวรับทีมชาติอังกฤษที่ปัจจุบันผันตัวเป็นคอมเมนเตเตอร์\r\n', 'pic10', '2017-03-20 17:03:27'),
(11, 'ขอรับบริจาคโลหิต,ข้าวสาร-นมช่วยน้ำท่วมที่เมืองคอน', 'ขอความช่วยเหลือ ผู้ประสบภัยน้ำท่วมใน จ.นครศรีธรรมราช รับบริจาคโลหิต นม และ ข้าวสาร\r\nนางนิยะดา บัวงาม นักพัฒนาสังคมปฏิการ สถานสงเคราะห์เด็กชายบ้านศรีธรรมราช แจ้งขอความช่วยเหลือน้ำท่วมทะลักเข้าสถานสงเคราะห์เมื่อคืนนี้ ล่าสุดพบระดับน้ำเพิ่มขึ้นเกือบ 80 - 100 เซนติเมตร ขอนม, ข้าวสาร, อาหารแห้ง ช่วยส่งให้เด็ก ๆ โดยที่นี่มีเด็กเล็กอยู่ประมาณ 120 คน และเด็กโตประมาณ 100 คน สำหรับผู้ต้องการให้ความช่วยเหลือสามารถติดต่อได้ที่ นางนิยะดา บัวงาม นักพัฒนาสังคมปฏิการสถานสงเคราะห์เด็กชายบ้านศรีธรรมราช เบอร์ 084-0607057\r\nส่วนที่ ม.7 บ้านห้วยตง ต.กรุงชิง อ.นบพิตำ ได้รับรายงานว่า ล่าสุดสถานการณ์ค่อนข้างอยู่ในภาวะ น้ำท่วมขังสูง ถนนทุกสายถูกตัดขาดจากโลกภายนอก และมีผู้ป่วยติดอยู่ด้านใน นอกจากนี้ ยังพบว่ากระแสไฟฟ้าดับ, ดินถล่ม จึงอยากวอนผู้ใจบุญขอรับบริจาคข้าวสารอาหารแห้ง \r\nขณะที่สภากาชาดไทยได้ออกประกาศขอรับบริจาคโลหิต เพื่อสำรองช่วยผู้ประสบภัยน้ำท่วม กรณีเคลื่อนย้ายโลหิต และผู้ป่วย ไม่ได้ โดย ภาคบริการโลหิตที่ 11 จ.นครศรีธรรมราช สภากาชาดไทย จะยังคงจัดเจ้าหน้าที่ออกรับบริจาคโลหิต เพื่อส่งต่อไปยังผู้ป่วยตามโรงบาลต่าง ๆ ให้ทันท่วงที จึงขอรับบริจาคจากผู้ที่ไม่ประสบภัยน้ำท่วม ร่วมบริจาคได้ที่สำนักงานกาชาด ภาคฯ ทุ่งสง (หน้ารพ.ทุ่งสง ควนไม้แดงแห่งใหม่) จันทร์ - ศุกร์ เวลา 08.30 - 16.30 น., เสาร์และวันหยุดนักขัตฤกษ์เวลา 09.00 - 15.30 น. สอบถามเพิ่มเติมติดต่อ 087-498-2152', 'pic11', '2017-03-20 17:07:02'),
(12, 'ฮีโร่มาแล้ว!! \'เจ-เจตริน\'ประกาศรวมพลช่วยน้ำท่วมใต้     ', 'เจ-เจตริน วรรธนะสิน นักร้องชื่อดัง ประกาศรวมพลเพื่อช่วยผู้ประสบภัยน้ำท่วมในพื้นที่ภาคใต้ผ่านอินสตาแกรม "jjetrin" โดยระบุว่า jjetrin ประกาศฉบับที่1 "ขณะนี้ผมกำลังรวมพล คนเจ็ทสกี และ ประสานกับทาง Sumet Saekhow ทีมเจ็ทสกีที่อยู่สุราษฎร์ธานี ว่าเราสามารถไปช่วยจุดใดได้(ที่จะอพยพคนหรือส่งเสบียง) เพื่อให้เกิดประโยชน์แท้จริงและไม่ไปทำภาระเพิ่มให้เจ้าหน้าที่ที่ต้องมาดูแลพื้นที่(เพราะการลงไปแบบไม่พร้อมมันจะยิ่งเป็นภาระมากกว่าประโยชน์ \r\n\r\nทั้งนี้ทั้งนั้น ผมกำลังสั่งผลิตเสื้อยืด Save south side ออกมาเพื่อระดมหาเงินไปช่วยเยียวยา (เท่าที่จะทำได้) ต่อไป กำหนดการยังไม่ชัดว่าวันใดแต่ สถานที่ขาย อาจจะ เอ็มควอเทียร และ ห้าง แฟชั่นไอร์แลน ติดตามการ อัพเดทต่อไปนะครับ\r\nฝากถึง ทีมเจ็ทใดที่ต้องการเข้าร่วม ติดต่อผมมาได้เลย (ขอเป็น เรือ นั่ง สภาพใหม่ และ มีทีมงานขนเรือ) หรือเรือ dinggy ติดมอเตอร์จะดีมากๆ \r\n\r\nฝากถึงองค์กรอิสระใดต้องการบริจาคเงินช่วยเหลือ หรือ สิ่งของเพื่อเป็นถุงยังชีพ เช่น ข้าวสาร อาหารกระป๋อง อาหารสำเร็จ ไฟแช็ค น้ำเปล่าขวดใหญ่ (ต้องการ)ไฟฉายแบบมีคุณภาพ ยากันยุง ยาแก้น้ำกัดเท้า ยาสามัญ ผ้าเช็ดตัว องค์กรการบินใด สะดวกให้ขนของได้ แจ้งมาได้เลยครับ ติดต่อผมมาได้เลย \r\n\r\nขณะที่ประกาศช่วยน้ำท่วมใต้ฉบับที่ 2 ระบุว่า "ผมจะลงไปสุราษฎร์ธานีวันอาทิตย์ที่ 8 มกราคมนี้ ไปสมทบกับทาง ทีมเจ็ทสกีและกู้ภัย พร้อมคนในพื้นที่ โดยภาคเอกชน นำโดย Sumet Saekhow กำลังประสานจัดเตรียม ข้าวสาร อาหารกระป๋อง น้ำสะอาด ไฟฉาย ยาสามัญ (จำนวนให้ใช้ได้ 4-5วันต่อ 1 ถุง ขณะนี้ได้รับแจ้งจากทางกู้ภัยว่าอำเภอไชยา, อำเภอท่าชนะ และอำเภอกาญจนดิษฐ์ เป็นพื้นที่ประสบภัยพิบัติของจังหวัดสุราษฎร์ธานีและมีระดับน้ำค่อนข้างสูง ในส่วนการเข้าช่วยเหลือคาดว่าในวันอาทิตย์สถานการณ์น่าจะเปลี่ยนเนื่องจากจะมีปริมาณน้ำจากจังหวัดนครศรีธรรมราชเข้ามาสมทบที่จังหวัดสุราษฎร์ธานีอาจจะมีบางอำเภอเช่น อำเภอพระแสง และอำเภอพุนพิน ได้รับผลกระทบเพิ่มเติม (ทั้งนี้ทั้งนั้น เราจะประเมินสถานการณ์วันต่อวันว่าเขตใดน้ำขึ้นหรือ น้ำลด เรียงลำดับการเข้า อพยพ และแจกถุงยังชีพ ) \r\n\r\nส่วนการรับการบริจาค ผมจะรีบทำการเปิดบัญชี เปิดรับการบริจาค เอาตามจิตศรัทธา มากน้อยแต่ขอให้ช่วยๆกันครับ (จะมารีบแจ้งเบอร์บัญชีในประกาศฉบับต่อไป) ขออนุญาตรับเป็นเงินบริจาคแทนสิ่งของ เพราะการขนย้ายจาก กทม. หรือ จังหวัดอื่น ส่งลงไป ลำบาก เราจะไปหาซื้อในตัวเมือง หรือ เขตใกล้เคียง จะง่ายกว่า และ ขนย้ายลงพื้นที่ได้สะดวก (เอาตามที่สบายใจและมั่นใจกันครับ เงินทุกบาทเราจะใช้อย่างคุ้มค่าที่สุด) \r\n', 'pic12', '2017-03-20 17:17:32'),
(13, '"เนชั่น กรุ๊ป เชิญชวนผู้ชมร่วมบริจาคผู้ประสบอุทกภัยภาคใต้"    ', '"ยังคงมีสิ่งของและเงินบริจาค เพื่อเหลือผู้ประสบภัยน้ำท่วมในภาคใต้ ถูกส่งผ่าน เครือเนชั่น เพื่อเยียวยาความเสียหายที่เกิดขึ้น และวันนี้เป็นการ เปิดรับบริจาคเป็นวันสุดท้าย เพื่อนำเงิน และสิ่งของ ที่ได้ทั้งหมดไปร่วมฟื้นฟูชีวิตผู้ประสบภัยจากกรณี เนชั่น กรุ๊ป เชิญชวนบริจาคผู้ประสบอุทกภัยภาคใต้ ผ่านบัญชี "ช่วยน้ำท่วมชาวใต้" ธ.กรุงเทพ สาขาบางนา และ ธ.กสิกรไทย สำนักราษฎร์บูรณะ ยอดรวมทั้งหมดจากบัญชี "ช่วยน้ำท่วมชาวใต้" ตั้งเเต่วันที่ 7 ม.ค. ถึง วันนี้ 31 มกราคม รวม 25 วันจนถึงวันนี้ มียอดเงินบริจาคแล้ว 10,437,480.01 บาทส่วนผู้ที่มาร่วมบริจาคกับเราวันนี้ มีสมาคมอุตสหกรรมเครื่องนุ่งห่มไทย TGMAได้นำเสื้อผ้ามาบริจาค  คุณสุนารถ ทัศนกุล  ครอบครัวธานินทร์ โพธิพัฒนานนท์ ครอบครัวบังเกิดผล  บริษัท ที สัน เทรดมาร์ค นำของมาบริจาคทั้ง เสื้อผ้า น้ำดื่ม ของเล่น ขนมคบเคี้ยวมาร่วมบริจาคซึ่งวันนี้เครือเนชั่น ขอปิดรับบริจาค และขอขอบคุณทุกท่าน ที่ได้ร่วมแสดงน้ำใจ ไม่ละเลยความเดือนร้อนของพี่น้องร่วมชาติ  สิ่งของทั้งหมด รวมถึงเงินทุกบาท จะนำไปร่วมจัดซื้ออุปกรณ์ซ่อมสร้างบ้านเรือน โรงเรียน วัด สถานที่สำคัญของพี่น้องชาวใต้ผู้ประสบภัย"\r\n', 'pic13', '2017-03-20 17:36:15'),
(14, 'ร.พ.ดังเปิดรับบริจาคถุงผ้าใส่ยาผู้ป่วยลดโลกร้อน   ', 'โรงพยาบาลวัดโบสถ์ จ.พิษณุโลกชวนบริจาคถุงผ้าใส่ยาให้ผู้ป่วยประหยัดค่าใช้จ่ายและช่วยลดโลกร้อนรักษาสิ่งแวดล้อม เมื่อวันที่19ม.ค.2560 ที่ร.พ.วัดโบสถ์ อ.วัดโบสถ์ จ.พิษณุโลก เภสัชกรหญิงกานติมา สุขโฉม หัวหน้าฝ่ายเภสัชกรรม  ได้ตั้งกล่องรับบริจาคถุงผ้าเพื่อนำไปใส่ยารักษาโรคให้กับผู้ป่วยแทนการใช้ถุงพลาสติก โดยเมื่อวันที่1ม.ค.60 โรงพยาบาลได้ประกาศงดการใช้ถุงพลาสติกใส่ยาให้กับผู้ป่วยกลับบ้าน และประชาสัมพันธ์ให้ผู้ป่วยที่มารักษานำถุงผ้ามาใส่ยากลับบ้านแทน  แต่ก็มีผู้ป่วยบางรายไม่ทราบเรื่องการงดใช้ถุงพลาสติก โรงพยาบาลจึงพยายามจัดหาถุงผ้าหรือถุงกระดาษมาทดแทน\r\n	เภสัชกรหญิงกานติมา กล่าวว่า แต่ละปีโรงพยาบาลต้องใช้ถุงพลาสติกในการนำใส่ถุงยาให้กับผู้ป่วยไม่ต่ำกว่า 200,000 ใบ จึงได้มีการเสนอผู้บริหารในการงดการใช้ถุงพลาสติกเมื่อทางผู้บริหารเห็นชอบจึงได้เริ่มประชาสัมพันธ์ตั้งแต่เดือนต.ค.59 นอกจากมีส่วนช่วยลดค่าใช้จ่ายให้กับโรงพยาบาลแล้วยังช่วยลดปัญหาโลกร้อนและสิ่งแวดล้อมด้วย ทั้งนี้ผู้สนใจจะนำถุงผ้ามาบริจาคให้กับโรงพยาบาลสามารถติดต่อสอบถามได้ที่ ได้ที่เบอร์ 055-361079 ต่อ 118 หรือ 081-9534535 หรือ 098-5326762 หรือ 081-2802049  หรือ สามารถส่งไปรษณีย์มาได้ที่ 135 ม.1 ฝ่ายเภสัชกรรมชุมชน โรงพยาบาลวัดโบสถ์ ต.วัดโบสถ์ อ.วัดโบสถ์ จ.พิษณุโลก 65160 และสามารถดูรายละเอียด ได้ที่ https://www.facebook.com/ห้องยา รพ.วัดโบสถ์\r\n', 'pic14', '2017-03-20 18:40:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`Aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
