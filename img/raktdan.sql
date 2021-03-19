-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 04:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raktdan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('rajesh@gmail.com', '12345'),
('suhel@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_registration`
--

CREATE TABLE `bloodbank_registration` (
  `regis_no` varchar(10) NOT NULL,
  `bloodbank_name` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `upload_regis` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank_registration`
--

INSERT INTO `bloodbank_registration` (`regis_no`, `bloodbank_name`, `state`, `city`, `address`, `pincode`, `owner`, `mobile_no`, `reg_date`, `upload_regis`, `password`, `status`) VALUES
('123456', 'Hopes', 'Madhya Pradesh', 'Bhopal', '9-c classmate boys hostel', '462021', 'Employee', '8458827320', '2019-04-08', 'vlcsnap-2019-02-23-15h25m09s614.png', '', 'Approved'),
('23456897', 'Aiims', 'Madhya Pradesh', 'Bhopal', '9-c classmate boys hostel', '462021', 'Owner', '8458827320', '2019-04-08', 'WIN_20190227_21_12_26_Pro.jpg', '', 'Pending'),
('741852963', 'Apex', 'Uttra Pradesh', 'Allahabad', 'Civil Lines', '211013', 'Employee', '8576873884', '2019-04-08', '123.jpg', '321', 'Pending'),
('98756423', 'RED CROSS', 'Madhya Pradesh', 'Bhopal', '9-c classmate boys hostel', '462021', 'Employee', '8458827320', '2019-04-08', 'WIN_20190227_21_12_26_Pro.jpg', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_name` varchar(50) NOT NULL,
  `state_code` int(2) NOT NULL,
  `city_code` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_name`, `state_code`, `city_code`) VALUES
('Visakhapatnam', 1, 1),
('Vijayawada', 1, 2),
('Guntur', 1, 3),
('Nellore', 1, 4),
('Tirupati', 1, 5),
('Aalo', 2, 6),
('Itanagar', 2, 7),
('Naharlagun', 2, 8),
('Pasighat', 2, 9),
('Basar', 2, 10),
('Guwahati', 3, 11),
('Silchar', 3, 12),
('Tezpur', 3, 13),
('Bilasipara', 3, 14),
('Dhubri', 3, 15),
('Patna', 4, 16),
('Gaya', 4, 17),
('Nawada', 4, 18),
('Bhagalpur', 4, 19),
('Darbhanga', 4, 20),
('Raipur', 5, 21),
('Bhilai', 5, 22),
('Bilaspur', 5, 23),
('Raigarh', 5, 24),
('Korba', 5, 25),
('Behlana', 6, 26),
('Daria', 6, 27),
('Khuda Alisher', 6, 28),
('Mani Majra', 6, 29),
('Mauli Jagran', 6, 30),
('New Delhi', 7, 31),
('Central', 7, 32),
('North East', 7, 33),
('North West', 7, 34),
('South west', 7, 35),
('Panaji', 8, 36),
('Mapusa', 8, 37),
('Ponda', 8, 38),
('Sancoale', 8, 39),
('Margao', 8, 40),
('Ahmadabad', 9, 41),
('Surat', 9, 42),
('Vadodara', 9, 43),
('Rajkot', 9, 44),
('Amreli', 9, 45),
('Fardiabad', 10, 46),
('Gurgaon', 10, 47),
('Panipat', 10, 48),
('Sonipat', 10, 49),
('HIsar', 10, 50),
('Baddi', 11, 51),
('Chamba', 11, 52),
('Kullu', 11, 53),
('Mandi', 11, 54),
('Shimla', 11, 55),
('Srinagar', 12, 56),
('Jammu', 12, 57),
('Udhampur', 12, 58),
('Baramula', 12, 59),
('Sopore', 12, 60),
('Jamshedpur', 13, 61),
('Dhanbad', 13, 62),
('Ranchi', 13, 63),
('Hazaribag', 13, 64),
('Deoghar', 13, 65),
('Bengaluru', 14, 66),
('Mysore', 14, 67),
('Mangalore', 14, 68),
('Bellary', 14, 69),
('Tumkur', 14, 70),
('Kochi', 15, 71),
('Thrissur', 15, 72),
('Malappuram', 15, 73),
('Kannur', 15, 74),
('Kollam', 15, 75),
('Indore', 16, 76),
('Bhopal', 16, 77),
('Jabalpur', 16, 78),
('Gwalior', 16, 79),
('Ujjain', 16, 80),
('Mumbai', 17, 81),
('Pune', 17, 82),
('Nagpur', 17, 83),
('Nashik', 17, 84),
('Solapur', 17, 85),
('Imphal', 18, 86),
('Kakching', 18, 87),
('Mayang Imphal', 18, 88),
('Thoubal', 18, 89),
('Ukhrul', 18, 90),
('Jowai', 19, 91),
('Nongstoin', 19, 92),
('Shilong', 19, 93),
('Tura', 19, 94),
('Williamnagar', 19, 95),
('Aizwal', 20, 96),
('Champhai', 20, 97),
('Lunglei', 20, 98),
('Saiha', 20, 99),
('Serchhip', 20, 100),
('Bhubaneswar', 21, 101),
('Cuttak', 21, 102),
('Rairangpur', 21, 103),
('Raurkela', 21, 104),
('Puri', 21, 105),
('Ludhiana', 22, 106),
('Amritsar', 22, 107),
('Jalandhar', 22, 108),
('Patiala', 22, 109),
('Moga', 22, 110),
('Jaipur', 23, 111),
('Jodhpur', 23, 112),
('Kota', 23, 113),
('Bikaner', 23, 114),
('Ajmer', 23, 115),
('Gangtok', 24, 116),
('Gyalshing', 24, 117),
('Namchi', 24, 118),
('Rangpo', 24, 119),
('SIngtam', 24, 120),
('Chennai', 25, 121),
('Madurai', 25, 122),
('Tiruppur', 25, 123),
('Vellore', 25, 124),
('Salem', 25, 125),
('Hyderabad', 26, 126),
('Warangal', 26, 127),
('Nizamabad', 26, 128),
('Adilabad', 26, 129),
('Nalgonda', 26, 130),
('Dehra Dun', 27, 131),
('Hardwar', 27, 132),
('Roorkee', 27, 133),
('Rishikesh', 27, 134),
('Jaspur', 27, 135),
('Kanpur', 28, 136),
('Lucknow', 28, 137),
('Varanasi', 28, 138),
('Allahabad', 28, 139),
('Agra', 28, 140),
('Kolkata', 29, 141),
('Asansol', 29, 142),
('Shiliguri', 29, 143),
('Durgapur', 29, 144),
('Baharampur', 29, 145);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_name` varchar(50) NOT NULL,
  `state_abbr` varchar(2) NOT NULL,
  `state_code` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_name`, `state_abbr`, `state_code`) VALUES
('Andhra Pradesh', 'AP', 1),
('Arunachal Pradesh', 'AR', 2),
('Assam', 'AS', 3),
('Bihar', 'BR', 4),
('Chhattisgarh', 'CG', 5),
('Chandigarh', 'CH', 6),
('Delhi', 'DL', 7),
('Goa', 'GA', 8),
('Gujarat', 'GJ', 9),
('Haryana', 'HR', 10),
('Himachal Pradesh', 'HP', 11),
('Jammu and Kashmir', 'JK', 12),
('Jharkhand', 'JH', 13),
('Karnataka', 'KA', 14),
('Kerala', 'KL', 15),
('Madhya Pradesh', 'MP', 16),
('Maharashtra', 'MH', 17),
('Manipur', 'MN', 18),
('Meghalaya', 'ML', 19),
('MIzoram', 'MZ', 20),
('Orissa', 'OR', 21),
('Punjab', 'PB', 22),
('Rajasthan', 'RJ', 23),
('Sikkim', 'SK', 24),
('Tamil Nadu', 'TN', 25),
('Telangana', 'TR', 26),
('Uttarakhand', 'UK', 27),
('Uttar Pradesh', 'UP', 28),
('West Bengal', 'WB', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood_record`
--

CREATE TABLE `tbl_blood_record` (
  `regis_no` varchar(10) DEFAULT NULL,
  `bgroup` varchar(3) DEFAULT NULL,
  `avl_unit` int(3) DEFAULT NULL,
  `cur_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE `tbl_donor` (
  `did` varchar(10) DEFAULT NULL,
  `blood_bank` varchar(10) DEFAULT NULL,
  `unit` int(1) NOT NULL,
  `bgroup` varchar(3) NOT NULL,
  `age` int(3) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `hospital` varchar(60) NOT NULL,
  `d_date` date NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donor`
--

INSERT INTO `tbl_donor` (`did`, `blood_bank`, `unit`, `bgroup`, `age`, `doctor`, `hospital`, `d_date`, `type`) VALUES
('8871616229', '98756423', 2, 'A+', 21, 'rajesh', 'Aims', '2019-04-08', 'Donar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bggroup` varchar(3) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `aadhar`, `address`, `bggroup`, `phone`, `email`, `password`) VALUES
('suhel', '741852963852', 'pragraj', 'A+', '122456799', 'suhel@gmail.com', '123654879'),
('Anand', '245628794625', 'kolkatta', 'A+', '8100509115', 'anand@gmail.com', '123456'),
('Ranjeet Ra', '852741963852', 'Verma', 'AB_', '8458828020', '22ranjeetkumarran@gmail.c', '535455'),
('anand shuk', '897465321254', '9-c classmate boys hostel, rajeev gandhi nagar, ay', 'B+', '8871616229', 'shukla@gmail.com', '12345'),
('rajesh', '123456789012', 'jhurjhuri', 'A', '9514403962', '22rajeshprasad@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `pass` (`pass`);

--
-- Indexes for table `bloodbank_registration`
--
ALTER TABLE `bloodbank_registration`
  ADD PRIMARY KEY (`regis_no`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD KEY `state_code` (`state_code`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_code`);

--
-- Indexes for table `tbl_blood_record`
--
ALTER TABLE `tbl_blood_record`
  ADD KEY `regis_no` (`regis_no`);

--
-- Indexes for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD KEY `did` (`did`),
  ADD KEY `blood_bank` (`blood_bank`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_code`) REFERENCES `state` (`state_code`);

--
-- Constraints for table `tbl_blood_record`
--
ALTER TABLE `tbl_blood_record`
  ADD CONSTRAINT `tbl_blood_record_ibfk_1` FOREIGN KEY (`regis_no`) REFERENCES `bloodbank_registration` (`regis_no`);

--
-- Constraints for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD CONSTRAINT `tbl_donor_ibfk_1` FOREIGN KEY (`did`) REFERENCES `user` (`phone`),
  ADD CONSTRAINT `tbl_donor_ibfk_2` FOREIGN KEY (`blood_bank`) REFERENCES `bloodbank_registration` (`regis_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
