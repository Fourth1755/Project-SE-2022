-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 06:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(3) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `faxNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` enum('มี','ไม่มี') COLLATE utf8_unicode_ci DEFAULT NULL,
  `payPerDay` int(3) DEFAULT 0,
  `agentName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agentPosition` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HR_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HR_Position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HR_PhoneNamber` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requestPosition` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobDescription` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amountPerson` int(2) DEFAULT NULL,
  `requiredSkill` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `name`, `address`, `type`, `phoneNumber`, `faxNumber`, `department`, `payPerDay`, `agentName`, `agentPosition`, `HR_Name`, `HR_Position`, `HR_PhoneNamber`, `requestPosition`, `jobDescription`, `amountPerson`, `requiredSkill`, `startDate`, `endDate`) VALUES
(1, 'บริษัท โกไฟว์ จำกัด', '30/88 หมู่ที่ 1 ถ.เจษฎาวิถี ตำบลโคกขาม อำเภอเมืองสมุทรสาคร จังหวัดสมุทรสาคร 74000', 'บริษัทจำกัด', '027845855', '4562369876', 'มี', 300, 'อดิศร จรัสโยธินนุวัฒน์', 'Human Resources Department Manager', 'Supanida Ouamprathum', 'HR', '0836516795', 'Developer, System Analyst', 'เขียนโปรแกรม ศึกษางานตามโปรเจคที่ได้รับมอบหมำย', 5, 'ทักษะการใช้คอมพิวเตอร์ภาษา C,C#,JAVA,HTML และอื่นๆ', '2022-04-18', '2022-06-10'),
(2, 'บริษัท บิท โซลูชั่น จำกัด', '454 ถ.รัชดาภิเษก\r\nแขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310', 'บริษัทจำกัด', '029381602', '029381618', 'ไม่มี', 350, 'อดิศักดิ์ วิชชุปัญญาพาณิชย์', 'Head of Engineer', 'อรชพร กอหามะ', 'HR', '0856498531', 'Network Engineer', 'ช่วยงานฝ่าย Engineer', 3, 'Network', '2022-04-20', '2022-06-15'),
(3, 'Drone Academy Thailand', '58/64 เมืองทองธานี ต. คลองเกลือ อ.ปากเกร็ด จ.นนทบุรี 11120\r\n', 'บริษัทจำกัด', '020000199', '1239567894', 'ไม่มี', 0, '0984561237', '0984561237', 'ภูผา อธิษฐ์โภคิน', 'HR', '0984561237', 'Computer Programmer, Flying Robot, Internet of Things, AI Flying Robot', 'Internet of Thing, Hardware, Electronic, Flying Robot, Drone , RaspberryPi, Nvidia Jetson TX', 7, 'ไม่จำเป็นต้องรู้มาก่อนมาศึกษาภายหลังได้ Python, C/C++, PHP, Golang', '2022-04-19', '2022-06-24'),
(20, 'บริษัท ซินเน็ค (ประเทศไทย) จำก', 'ที่อยู่: 433 ถ. สุคนธสวัสดิ์ แขวงลาดพร้าว เขตลาดพร้าว กรุงเทพมหานคร 10230', 'จำกัด (มหาชน)', '025538888', '4561239805', 'ไม่มี', 0, 'เยาวเรศ', 'หัวหน้าฝ่ายบุคคล', 'วรรณนภา', 'ฝ่ายบุคคล', '0895554646', 'Programmer, Engineer/Presale, Product Manger/Product Sale', 'นักศึกษำฝึกงำนประจำฝ่ำยต่ำงๆ', 6, 'มีควำมรู้และทักษะในงำนด้ำนต่ำงๆ ที่เหมำะสมกับตำแหน่งที่ปฏิบัติงำน, มีควำมกระตือรือร้น', '2022-04-20', '2022-06-12'),
(21, 'บริษัท อินโนเวทีฟ ซอฟต์แวร์ คอ', '56 อาคารญาดา ชั้นที่ 7 ห้องเลขที่ 706-707 ถนนสีลม แขวงสุริยวงศ์ เขตบางรัก กรุงเทพมหานคร', 'บริษัทจำกัด', '026326872', '026326870', 'ไม่มี', 330, 'Tim Cook', 'CEO', 'คิม ฮยอน ซุค', 'HR Manager', '0759864329', '1. Software Engineer 2.Software Analyst', 'บริษัทจะมีโครงงำนจำลองให้นิสิตได้ฝึกเขียนโปรแกรมและออกแบบระบบตำมควำมสำมำรถของนิสิตแต่ละคน', 5, 'Java', '2022-04-17', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `ID` int(5) NOT NULL,
  `requestID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `statusName` enum('waiting','approve','reject') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `createDate` date NOT NULL DEFAULT current_timestamp(),
  `phoneNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `facebookName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `positionRequest` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agentName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `agentPosition` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HR_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HR_PhoneNamber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HR_Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `approverID` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyID` int(3) NOT NULL,
  `reasonReject` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `academicYear` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`ID`, `requestID`, `statusName`, `createDate`, `phoneNumber`, `facebookName`, `positionRequest`, `agentName`, `agentPosition`, `HR_Name`, `HR_PhoneNamber`, `HR_Email`, `startDate`, `endDate`, `approverID`, `companyID`, `reasonReject`, `academicYear`) VALUES
(10001, 'b6220503201', 'waiting', '2022-03-07', '0321234567', 'Bie Juntawong', 'Network Engineer', 'อดิศักดิ์ วิชชุปัญญาพาณิชย์', 'Head of Engineer', 'อรชพร กอหามะ', '0856498531', 'bitsolution@gmail.com', '2022-04-18', '2022-06-10', NULL, 2, NULL, '2564'),
(10002, 'b6220504666', 'approve', '2022-03-08', '0827631952', 'Dream Wongtungjaroensuk', 'Mobile Developer', 'อดิศร จรัสโยธินนุวัฒน์', 'Human Resources Department Manager', 'Supanida Ouamprathum', '0836516795', 'internship@gofive.co.th', '2022-04-18', '2022-06-10', 'reg00000002', 1, NULL, '2564'),
(10003, 'b6220504771', 'reject', '2022-03-10', '0891684952', 'Meaw Apirakausanee', 'Data Engineer', 'ชัยวัฒน์ ประสิทธิพิพัฒน์', 'senior data engineer', 'ภูผา อธิษฐ์โภคิน', '0984561237', 'droneacademy@gmail.com', '2022-04-18', '2022-06-10', 'reg00000002', 3, 'ตำแหน่งที่ไปฝึกงานไม่ตรงตามเงื่อนไขหลักสูตรของภาควิชา', '2564'),
(10017, 'b6220504755', 'waiting', '2022-03-12', '089123789', 'FouRth PooLab', 'Full stack', 'Tim Cook', 'CEO', 'คิม ฮยอน ซุค', '0759864329', 'applesamsung@hotmail.com', '2022-04-18', '2022-06-10', NULL, 21, NULL, '2564'),
(10018, 'b6020504623', 'waiting', '2020-02-11', '0456893217', 'Jittipon Kumurai', 'front-end', 'อดิศร จรัสโยธินนุวัฒน์', 'Human Resources Department Manager', 'Supanida Ouamprathum', '0836516795', 'internship@gofive.co.th', '2020-04-18', '2020-06-10', NULL, 1, NULL, '2562'),
(10019, 'b6120504801', 'waiting', '2021-01-23', '0891645239', 'Artid Yenpram', 'back-end', 'อดิศักดิ์ วิชชุปัญญาพาณิชย์', 'Head of Engineer', 'อรชพร กอหามะ', '0856498531', 'bitsolution@gmail.com', '2021-04-18', '2021-06-09', NULL, 2, NULL, '2563');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `position` enum('student','lecturer','admin') COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `academicYear` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagePath` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `position`, `firstName`, `lastName`, `academicYear`, `imagePath`) VALUES
('b6020504623', 'T0504623', 'student', 'จิตติพล', 'คำอุไร', '2560', 'https://cdn.discordapp.com/attachments/955087275593715734/956784054240440371/IMG_0383.JPG'),
('b6120504801', 'plai0504801', 'student', 'อาทฤต', 'เย็นเปรม', '2561', 'https://cdn.discordapp.com/attachments/955087275593715734/956614115315572816/IMG_0180.JPG'),
('b6220503201', 'bie0503201', 'student', 'ณัฐวรรธน์', 'จันทวงศ์', '2562', 'https://cdn.discordapp.com/attachments/955087275593715734/955087694365601802/IMG_0495.JPG'),
('b6220504631', 'ploy0504631', 'student', 'ชัชชญา', 'พรมรินทร์', '2562', 'https://cdn.discordapp.com/attachments/955087275593715734/955088060389928990/IMG_0215.JPG'),
('b6220504666', 'dream0504666', 'student', 'ธนพัฒน์', 'วงษ์ตั้งเจริญสุข', '2562', 'https://cdn.discordapp.com/attachments/955087275593715734/955087476899340359/IMG_0811.JPG'),
('b6220504755', 'fourth0504755', 'student', 'ภูริวัฒน์', 'ภูลับ', '2562', 'https://cdn.discordapp.com/attachments/955087275593715734/955087535678296134/IMG_0763.JPG'),
('b6220504771', 'meaw0504771', 'student', 'ลลิตา', 'อภิรักษ์อุษณีย์', '2562', 'https://cdn.discordapp.com/attachments/955087275593715734/955087839295594537/IMG_0219.JPG'),
('reg00000001', 'sasitorn001', 'admin', 'ศศิธร', 'ชลรัตน์อมฤต', NULL, 'https://cdn.discordapp.com/attachments/955087275593715734/955093635769172059/263630914_10227121019517783_1051386037829441816_n.jpg'),
('reg00000002', 'boonyarat002', 'lecturer', 'อ.ดร.บุญรัตน์', 'เผดิมรอด', NULL, 'https://cdn.discordapp.com/attachments/955087275593715734/955094017949978624/unknown.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requestform`
--
ALTER TABLE `requestform`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `requestID` (`requestID`),
  ADD KEY `companyID` (`companyID`),
  ADD KEY `approverID` (`approverID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `requestform`
--
ALTER TABLE `requestform`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10020;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requestform`
--
ALTER TABLE `requestform`
  ADD CONSTRAINT `requestform_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requestform_ibfk_2` FOREIGN KEY (`requestID`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requestform_ibfk_3` FOREIGN KEY (`approverID`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
