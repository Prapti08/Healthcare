-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 07:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `number` int(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`number`, `email`, `message`) VALUES
(1, 'prapti8@gmail.com', 'working'),
(7, 'radheya8@gmail.com', 'working good'),
(9, 'xyz@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `appointment` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`id`, `name`, `degree`, `category`, `contact`, `address`, `city`, `appointment`, `email`, `password`) VALUES
(1, 'vaishnavi', 'M.B.B.S', 'gynaecologist', '2147483647', 'xyz pune', 'pune', '9am to 3 pm', 'vaishnavi8@gmail.com', '1234'),
(3, 'Dr. Ashutosh Sahu', 'MBBS,MD-Internal Medicine ', 'Cardiology', '987722002', 'Ashoka Medicover Hsopitals, Nasik ', 'Nasik', '10 am to 3 pm \r\n6 pm to 9 pm ', 'ashutoshsahu123@gmail.com', '1234'),
(4, 'DR. MAHESH MANGULKAR', 'MD Medicine DNB Gastroenterology', 'Gastroenterology', '703027984', 'opposite BYK college, near Yog Vidyadham\r\nCollege Road', 'Nasik', '\r\nMon-Sat:09:00 AM - 11:00 AM/ 02:00 PM - 05:00 PM', 'mahesh7@gmail.com', '1234'),
(5, 'DR. Vijaysinh patil', 'MD, MBBS', ' Cardiology', '982345697', 'Wani House, Mumbai - Agra National Hwy, Wadala Naka, Renuka Nagar, Nashik', 'Nasik', 'Mon-Sat:10:00 AM - 06:00 PM', 'Vijaysinhpatil123@gmail.com', ''),
(6, 'DR. Mohan Patel', 'MBBS, MD, DM Nephrology', 'Nephrology\r\n', '91-253-2628549, 91-253-2628574', 'Swaminarayan Nagar, Off Mumbai-Agra Highway\r\nNashik\r\n', 'Nasik', 'Mon-Sat:12:00 PM - 02:30 PM/ 03:15 PM - 05:00 PM', 'mohanpatel88@gmail.com', ''),
(7, '\r\nDr. Muktesh Daund', ' MBBS, DNB Psychiatr', ' Psychiatry', '91-253-2518674', 'Above Abhishek Sweets, Dindori Naka\r\nNear Nimani Bus Stand, Panchavati\r\n', 'Nasik', 'Mon-Fri:12:00 PM - 02:00 PM/ 05:00 PM - 09:00 PM', 'muktesh766@gmail.com', ''),
(8, 'DR. Deepika', 'Obstetrics & Gynecology', 'Obstetrics & Gynecology', '91-0129-24161679', 'Green park', 'Nasik', 'Mon-Sat:12:00 PM - 11:45 PM', 'deepika123@gmail.com', ''),
(9, '\r\nDr. Anil Jadav', 'M.B.B.S., MS. (ORTHO)', 'Obstetrics & Gynecology', '9422246552', 'Plot No 1, Swaminarayan Nagar, Aurangabad Naka, Panchavati, Opposite Mumbai - Agra Highway, ', 'Nasik', 'Mon-Sat\r\n 09:00 AM-05:30 PM ', 'jhadhavanil56@gmail.com', ''),
(10, '\r\nDr Niraj Patil', 'M.S. ENT', 'Ent Specialist', '982345697', 'Plot No 1, Swaminarayan Nagar, Aurangabad Naka, Panchavati, Opposite Mumbai - Agra Highway, Nashik', 'Nasik', 'Mon-Sat:10:00 AM - 06:00 PM', 'nirajpatil99@gmail.com', ''),
(11, 'Dr Priyanka Patil', 'Bachelor of dental Surgeon(B.D.S)\r\n\r\n', 'Dentist', '9823866432', 'Plot No 1, Swaminarayan Nagar, Aurangabad Naka, Panchavati, Opposite Mumbai - Agra Highway, Nashik', 'Nasik', 'Mon-sat 9:00 AM-5:30 PM', 'priyankapatil99@gmail.com', ''),
(12, 'Dr Sachin Thakur', 'MD, BHMS, MD - Homeopathy', 'Homeopathy\r\n', '9833278456', 'Opp Pune Peoples Bank, Behind Hotel Aapulki, Shriman Society, Vitthal Mandir Road', 'Pune', 'Mon-Sat:10:00 AM - 06:00 PM', 'sachinthakur788@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `email`, `password`) VALUES
(1, 'doctor1@gmail.com', '7030'),
(2, 'ashutoshsahu123@gmail.com', '1234'),
(3, 'mahesh7@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback`) VALUES
(''),
('xyz'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('q'),
(''),
('r'),
('r'),
(''),
(''),
(''),
(''),
(''),
(''),
(' working'),
('not working'),
('abcd'),
('not working'),
('pqr'),
('caos'),
('not working'),
('not working'),
('not working'),
('not working'),
('not working'),
('pqr'),
('not working'),
('abcd'),
('not working'),
('Nice website '),
('not working'),
('not working'),
('not working'),
('great work');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(200) NOT NULL,
  `downloads` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(1, 'Screenshot (286).png', 49751, 0),
(2, '2.png', 665744, 0),
(3, '2.png', 665744, 0),
(4, '2.png', 665744, 0),
(5, '2.png', 665744, 0),
(6, '2.png', 665744, 0),
(7, '2.png', 665744, 0),
(8, 'Screenshot (261).png', 128700, 0),
(9, '2.png', 665744, 0),
(10, 'Screenshot (940).png', 531908, 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(200) NOT NULL,
  `weight` int(200) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `allergies` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reports` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`id`, `name`, `height`, `weight`, `bloodgroup`, `gender`, `dob`, `allergies`, `email`, `reports`) VALUES
(25, 'vaishnavi', 140, 50, 'B+', 'female', '2001-12-12', 'no', 'praptimaheshwari8@gmail.com', 'AOSPROJECT2.pdf'),
(29, 'juhi', 12, 50, 'B-', 'female', '2001-06-29', 'yes', 'prapti@gmail.com', 'caos1_37.pdf'),
(42, 'xyz', 140, 50, 'A-', 'female', '2001-09-17', 'No', 'xyz123@gmail.com', 'OS_PHASE 1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `patientrequest`
--

CREATE TABLE `patientrequest` (
  `id` int(200) NOT NULL,
  `patientid` int(100) NOT NULL,
  `patientemail` varchar(100) NOT NULL,
  `doctorid` int(200) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `flag` int(100) NOT NULL DEFAULT 0,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientrequest`
--

INSERT INTO `patientrequest` (`id`, `patientid`, `patientemail`, `doctorid`, `problem`, `flag`, `date`, `time`) VALUES
(1, 25, 'prapti@gmail.com', 3, 'xyz', 1, '2021-01-31', '04:05'),
(2, 25, 'prapti@gmail.com', 3, 'abccc', 0, '2021-01-15', '14:04'),
(3, 29, 'prapti@gmail.com', 4, 'pqrst', 0, '2021-01-20', '14:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(9, 'prapti ', 'prapti@gmail.com', '7030', '7030279886', 'xyz'),
(11, 'vaishnavi', 'xyz@gmail.com', '7030', '348866', 'xyz'),
(12, 'aarya', 'aarya@gmail.com', '1234', '348866', 'xyaaaa'),
(14, 'Dipti ', 'diptim8@gmail.com', '1234', '7030279886', 'nasik'),
(15, 'prapti ', 'praptimaheshwari8@gmail.com', '7030', '7030279886', 'nasik'),
(17, 'xyz', 'xyz123@gmail.com', 'xyz123', '7030279886', 'nasik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrequest`
--
ALTER TABLE `patientrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `number` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patientrequest`
--
ALTER TABLE `patientrequest`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
