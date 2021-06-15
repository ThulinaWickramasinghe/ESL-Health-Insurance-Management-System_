-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_d`
--

CREATE TABLE `basic_d` (
  `UID` char(7) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `pTpNo` int(10) NOT NULL,
  `eAddress` varchar(20) NOT NULL,
  `pAddress` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `marriage` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `empName` varchar(20) NOT NULL,
  `empAddress` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `empPeriod` varchar(10) NOT NULL,
  `busName` varchar(20) NOT NULL,
  `busType` varchar(20) NOT NULL,
  `busAddress` varchar(100) NOT NULL,
  `busAnTurnover` float NOT NULL,
  `sEmpName` varchar(20) NOT NULL,
  `selfAnTurnover` float NOT NULL,
  `sPeriod` int(10) NOT NULL,
  `empIncome` float NOT NULL,
  `busSelfIncome` float NOT NULL,
  `otherIncome` float NOT NULL,
  `totIncome` float NOT NULL,
  `totMonDed` float NOT NULL,
  `selectBankName` varchar(10) NOT NULL,
  `branchName` varchar(10) NOT NULL,
  `accNum` int(10) NOT NULL,
  `accType` varchar(10) NOT NULL,
  `insPlan` varchar(10) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DID` char(7) NOT NULL,
  `Dname` varchar(20) NOT NULL,
  `Dspecialization` varchar(20) NOT NULL,
  `Dpayment` float NOT NULL,
  `Dhospital` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DID`, `Dname`, `Dspecialization`, `Dpayment`, `Dhospital`) VALUES
('DID0001', 'DR.Sanath lanerrol', 'Dentist', 3000, 'Asiri hospital'),
('DID0002', 'DR.Sasanka perera', 'Cardiologist', 4000, 'Hemas Hospital'),
('DID0003', 'DR.Pawani Rathnayake', 'Anesthiologist', 2700, 'Lanka Hospital'),
('DID0004', 'DR.Abhi Aditya', 'Gynochologist', 4500, 'Hemas Hospital'),
('DID0005', 'DR.Sithu Nishara', 'Physcian', 1500, 'Asiri Hospital'),
('DID0006', 'DR.Sithum Perera', 'Nuero surgeon', 6000, 'Asiri hospital');

-- --------------------------------------------------------

--
-- Table structure for table `healthplans`
--

CREATE TABLE `healthplans` (
  `PID` char(7) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Pdescription` varchar(100) NOT NULL,
  `Pprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthplans`
--

INSERT INTO `healthplans` (`PID`, `Pname`, `Pdescription`, `Pprice`) VALUES
('PID0001', 'Medicare Plans', 'Find options for Medicare plans, health insurance for people who are 65 or older, or those under 65 ', 500000),
('PID0002', 'Individual & Family ', 'Browse plans for people and their families before age 65 and coverage to add on to other insurance p', 400000),
('PID0003', 'Medicaid Plans', 'Find low cost medicaid plans for people who have limited incomes', 300000),
('PID0004', 'Employer Plans', 'Shop and get online quotes for health insurance plans for your employees, including medical, vision,', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(11) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `card_number` int(16) NOT NULL,
  `expire_date` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `cvn` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `payment_type`, `card_number`, `expire_date`, `amount`, `cvn`) VALUES
(2, 'Credit Car', 2147483647, '11/8', 12, 123);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `UID` char(7) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `newtpno` int(10) NOT NULL,
  `emailAddress` varchar(20) NOT NULL,
  `newPwd` varchar(10) NOT NULL,
  `newUserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`UID`, `userAddress`, `newtpno`, `emailAddress`, `newPwd`, `newUserName`) VALUES
('UID0001', '1027/2,Kottawa,Pannipitiya', 763759243, 'thanushi07@gmail.com', 'abcd@1234', 'thanuperera'),
('UID0002', '32/1,Meridion coat,colombo', 776019443, 'sahan9@gmail.com', 'acvf1234', 'sahanalwis'),
('UID0003', '100/5,kurunagala road,kurunagala', 763754567, 'rumal45@gmail.com', 'Wer67', 'rumalranaweera'),
('UID0004', '32/8,wakada road, homagama', 76433897, 'kavi09@gmail.com', 'dfr343#', 'kaviduinduwara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_d`
--
ALTER TABLE `basic_d`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `healthplans`
--
ALTER TABLE `healthplans`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
