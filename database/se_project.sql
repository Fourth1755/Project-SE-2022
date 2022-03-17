-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 05:14 PM
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

INSERT INTO `company` (`ID`, `name`, `address`, `type`, `phoneNumber`, `faxNumber`, `agentName`, `agentPosition`, `HR_Name`, `HR_Position`, `HR_PhoneNamber`, `requestPosition`, `jobDescription`, `amountPerson`, `requiredSkill`, `startDate`, `endDate`) VALUES
(1, 'บริษัท โกไฟว์ จำกัด', '30/88 หมู่ที่ 1 ถ.เจษฎาวิถี ตำบลโคกขาม อำเภอเมืองสมุทรสาคร จังหวัดสมุทรสาคร 74000', 'บริษัทจำกัด', '027845855', '4562369876', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'บริษัท บิท โซลูชั่น จำกัด', '454 ถ.รัชดาภิเษก\r\nแขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310', 'บริษัทจำกัด', '029381602', '029381618', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Drone Academy Thailand', '58/64 เมืองทองธานี ต. คลองเกลือ อ.ปากเกร็ด จ.นนทบุรี 11120\r\n', 'บริษัทจำกัด', '020000199', '1239567894', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `reasonReject` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`ID`, `requestID`, `statusName`, `createDate`, `phoneNumber`, `facebookName`, `positionRequest`, `agentName`, `agentPosition`, `HR_Name`, `HR_PhoneNamber`, `HR_Email`, `startDate`, `endDate`, `approverID`, `companyID`, `reasonReject`) VALUES
(10001, 'b6220503201', 'waiting', '2022-03-07', '0321234567', 'Bie Juntawong', 'Network Engineer', 'อดิศักดิ์ วิชชุปัญญาพาณิชย์', 'Head of Engineer', 'อรชพร กอหามะ', '0856498531', 'bitsolution@gmail.com', '2022-04-18', '2022-06-10', NULL, 2, NULL),
(10002, 'b6220504666', 'waiting', '2022-03-07', '0321234567', 'Dream Wongtungjaroensuk', 'Mobile Developer', 'อดิศร จรัสโยธินนุวัฒน์', 'Human Resources Department Manager', 'Supanida Ouamprathum', '0836516795', 'internship@gofive.co.th', '2022-04-18', '2022-06-10', NULL, 1, NULL),
(10003, 'b6220504771', 'waiting', '2022-03-07', '0891684952', 'Meaw Apirakausanee', 'Data Engineer', 'ชัยวัฒน์ ประสิทธิพิพัฒน์', 'senior data engineer', 'ภูผา อธิษฐ์โภคิน', '0984561237', 'droneacademy@gmail.com', '2022-04-18', '2022-06-10', NULL, 3, NULL);

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
('A7527000001', 'sasitorn7527', 'admin', 'ศศิธร', 'ชลรัตน์อมฤต', NULL, NULL),
('b6220503201', 'bie0503201', 'student', 'ณัฐวรรธน์', 'จันทวงศ์', NULL, NULL),
('b6220504631', 'ploy0504631', 'student', 'ชัชชญา', 'พรมรินทร์', NULL, NULL),
('b6220504666', 'dream0504666', 'student', 'ธนพัฒน์', 'วงษ์ตั้งเจริญสุข', NULL, NULL),
('b6220504755', 'fourth0504755', 'student', 'ภูริวัฒน์', 'ภูลับ', NULL, NULL),
('b6220504771', 'meaw0504771', 'student', 'ลลิตา', 'อภิรักษ์อุษณีย์', NULL, NULL),
('T9043000001', 'boonyaratE9043', 'lecturer', 'อ.ดร.บุญรัตน์', 'เผดิมรอด', NULL, NULL);

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
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requestform`
--
ALTER TABLE `requestform`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10008;

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
