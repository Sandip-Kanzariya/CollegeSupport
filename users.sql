-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `Rank_of_college` int(11) NOT NULL,
  `Name_of_the_college` varchar(60) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Cutoff_Gen` int(11) NOT NULL,
  `Cutoff_EWS` int(11) NOT NULL,
  `Cutoff_OBC` int(11) NOT NULL,
  `Cutoff_SC` int(11) NOT NULL,
  `Cutoff_ST` int(11) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Fees` varchar(30) NOT NULL,
  `Campus_area(acres)` int(11) NOT NULL,
  `Average_placement_of_2021` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`Rank_of_college`, `Name_of_the_college`, `Branch`, `Cutoff_Gen`, `Cutoff_EWS`, `Cutoff_OBC`, `Cutoff_SC`, `Cutoff_ST`, `Address`, `Fees`, `Campus_area(acres)`, `Average_placement_of_2021`) VALUES
(1, 'DAIICT, Gandhinagar', 'ICT-CS', 58, 112, 154, 1639, 4053, 'Near Indroda Circle, Gandhinagar - 382007', '1,72,000', 50, '17 LPA'),
(2, 'DAIICT, Gandhinagar', 'MnC', 123, 191, 563, 3073, 10709, 'Near Indroda Circle, Gandhinagar - 382007', '1,72,000', 50, '17 LPA'),
(3, 'DAIICT, Gandhinagar', 'ICT', 158, 195, 487, 2208, 13555, 'Near Indroda Circle, Gandhinagar - 382007', '1,72,000', 50, '17 LPA'),
(4, 'DDU(GIA), Nadiad', 'CE', 265, 277, 634, 3388, 16161, 'Dharmsinh Desai University, College Road, Nadiad 387001', '1,500', 42, '6 LPA'),
(5, 'Nirma University, Institute of Technology', 'CSE', 325, 419, 967, 3455, 27032, 'Sarkhej-Gandhinagar Highway, Post-Chandlodia, via:Gota, Vill', '1,81,000', 115, '6 LPA'),
(6, 'MSU, Vadodara', 'CSE', 467, 601, 1106, 3326, 10530, 'M.S. University, kalabhavan, Dandiya Bazar, Vadodara - 39000', '1,500', 350, '4 LPA'),
(7, 'DDU(SFI), Nadiad', 'CE', 496, 595, 1201, 4371, 31750, 'Dharmsinh Desai University, College Road, Nadiad 387001', '1,52,000', 42, '6 LPA'),
(8, 'L.D. Engineering College, Ahmedabad', 'CE', 545, 643, 1159, 3416, 15728, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '4 LPA'),
(9, 'BVM(GIA), V.V.Nagar', 'CE', 720, 752, 1552, 4628, 23726, 'Birla Vishvakarma Mahavidhyalaya, GIA, V.V. Nagar', '1,500', 19, '3 LPA'),
(10, 'L.D. Engineering College, Ahmedabad', 'IT', 855, 923, 1679, 5322, 15728, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '3 LPA'),
(11, 'DDU(SFI), Nadiad', 'IT', 1108, 1256, 2116, 6247, 0, 'Dharmsinh Desai University, College Road, Nadiad 387001', '1,52,000', 42, '4 LPA'),
(12, 'Vishwakarma Government Engineering College, Chandkheda', 'CE', 1111, 1243, 2146, 5522, 26799, 'Nr. visat petrol pump, sabarmati-koba highway, chandkheda, A', '1,500', 25, '3 LPA'),
(13, 'Ahmedabad University, School of Engineering and Applied Scie', 'CSE', 1134, 1260, 2508, 8545, 32699, 'Ahmedabad University, GICT Building Central Campus, Navarang', '1,73,000', 250, '4 LPA'),
(14, 'Vishwakarma Government Engineering College, Chandkheda', 'IT', 1371, 1406, 2422, 6187, 24658, 'Nr. visat petrol pump, sabarmati-koba highway, chandkheda, A', '1,500', 19, '3 LPA'),
(15, 'BVM(SFI), V.V.Nagar', 'IT', 1594, 1758, 3053, 7784, 35211, 'Vallabh Vidhyanagar - 388120, Dist: Anand', '1,31,000', 50, '2 LPA'),
(16, 'MSU, Vadodara', 'CHEM', 1597, 1871, 5084, 7873, 19365, 'M.S. University, kalabhavan, Dandiya Bazar, Vadodara - 39000', '1,500', 350, '2 LPA'),
(17, 'Pandit Deendayal Energy University', 'CE', 1665, 2179, 4463, 6768, 35210, 'Raisan Village, Gandhinagar 382007', '2,34,000', 100, '3 LPA'),
(18, 'G. H. Patel College of Engineering & Technology, V.V. Nagar', 'CE', 1769, 2147, 3278, 9768, 33210, 'Bakrol Road, Vallabh Vidyanagar, Dist:Anand - 388120', '1,19,000', 20, '2 LPA'),
(19, 'Nirma University, Institute of Technology', 'EC', 1907, 2551, 6834, 13448, 34311, 'Sarkhej-Gandhinagar Highway, Post-Chandlodia, via:Gota, Vill', '1,81,000', 115, '4 LPA'),
(20, 'Government Engineering college, Gandhinagar', 'CE', 1924, 2082, 2984, 8047, 29616, 'Sector-28, Near Animal Vaccine Institute, Gandhinagar- 38202', '1,500', 33, '3 LPA'),
(21, 'Chandubhai S Patel Institute of Technology, Charusat Univers', 'CSE', 2112, 2318, 4535, 8279, 32698, 'CHARUSAT Campus, At Post: Changa, Nadiad - Petlad Highway Ta', '1,28,000', 120, '3 LPA'),
(22, 'DDU(GIA), Nadiad', 'CHEM', 2779, 3549, 7348, 9532, 16161, 'Dharmsinh Desai University, College Road, Nadiad 387001', '1,500', 42, '3 LPA'),
(23, 'Devang Patel Institute of Advance Technology and Research , ', 'CSE', 2968, 3205, 7507, 16531, 31234, 'CHARUSAT Campus, At Post: Changa, Nadiad - Petlad Highway Ta', '98,000', 45, '2 LPA'),
(24, 'Sarvajanik College of Engineering and Technology, Surat', 'CE', 3026, 3370, 6256, 17234, 18790, 'Dr. R. K. Desai Marg, Opp. Mission Hospital, Athwalines, Cho', '1,18,000', 17, '2 LPA'),
(25, 'Chandubhai S Patel Institute of Technology, Charusat Univers', 'IT', 3124, 3453, 7172, 14106, 21903, 'CHARUSAT Campus, At Post: Changa, Nadiad - Petlad Highway Ta', '1,28,000', 115, '2 LPA'),
(26, 'DDU(GIA), Nadiad', 'EC', 3403, 4814, 7259, 16097, 31092, 'Dharmsinh Desai University, College Road, Nadiad 387001', '1,500', 42, '3 LPA'),
(27, 'Adani Institute of Infrastructure Engineering', 'CSE-AI', 3406, 4248, 13492, 15293, 28903, 'Shantigram Township, Nr. Vaishnodevi Circle, S. G. Highway, ', '1,65,000', 600, '3 LPA'),
(28, 'L.D. Engineering College, Ahmedabad', 'EC', 3412, 4409, 7842, 12719, 31212, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '2 LPA'),
(29, 'L.D. Engineering College, Ahmedabad', 'BM', 3446, 4835, 14305, 10816, 33706, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '1 LPA'),
(30, 'Devang Patel Institute of Advance Technology and Research , ', 'CE', 3472, 3589, 7677, 18723, 32145, 'CHARUSAT Campus, At Post: Changa, Nadiad - Petlad Highway Ta', '98,000', 115, '2 LPA'),
(31, 'MSU, Vadodara', 'EL', 3488, 5716, 9878, 17354, 28565, 'M.S. University, kalabhavan, Dandiya Bazar, Vadodara - 39000', '1,500', 350, '2 LPA'),
(32, 'MSU, Vadodara', 'CHEM', 3614, 6050, 8947, 15826, 26055, 'M.S. University, kalabhavan, Dandiya Bazar, Vadodara - 39000', '1,500', 350, '3 LPA'),
(33, 'Devang Patel Institute of Advance Technology and Research , ', 'IT', 3640, 3792, 8595, 21403, 33201, 'CHARUSAT Campus, At Post: Changa, Nadiad - Petlad Highway Ta', '98,000', 45, '2 LPA'),
(34, 'Government Engineering college, Bhavnagar', 'CE', 3674, 4287, 6570, 9017, 32222, 'Nr. BPTI, Vidhyanagar, Bhavnagar - 364002', '1,500', 11, '1 LPA'),
(35, 'Sarvajanik College of Engineering and Technology, Surat', 'IT', 3688, 3856, 7432, 13019, 29658, 'Dr. R. K. Desai Marg, Opp. Mission Hospital, Athwalines, Cho', '1,18,000', 17, '2 LPA'),
(36, 'L.D. Engineering College, Ahmedabad', 'CHEM', 3784, 4687, 6021, 11306, 30042, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '3 LPA'),
(37, 'L.D. Engineering College, Ahmedabad', 'MECH', 4039, 6270, 8354, 11863, 22235, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '2 LPA'),
(38, 'Nirma University, Institute of Technology', 'CHEM', 4061, 4923, 13304, 8224, 32694, 'Sarkhej-Gandhinagar Highway, Post-Chandlodia, via:Gota, Vill', '1,81,000', 120, '3 LPA'),
(39, 'A. D. Patel Institute of Technology, V. V. Nagar', 'CE', 4319, 4563, 8108, 15999, 32241, 'Behind 4th Phase, Post Box No-52, GIDC, Vitthal Udyognagar, ', '1,06,000', 41, '2 LPA'),
(40, 'Pandit Deendayal Energy University', 'EC', 4399, 6054, 15977, 17881, 31498, 'Raisan Village, Gandhinagar 382007', '2,34,000', 100, '2 LPA'),
(41, 'V.V.P Engineering College, Rajkot', 'CE', 4544, 5405, 11147, 17120, 32147, 'Virda Vajadi, Opp. Motel the village, Kalawad Road, Rajkot -', '93,000', 71, '3 LPA'),
(42, 'MSU, Vadodara', 'ELEC', 4593, 6787, 8651, 14966, 23021, 'M.S. University, kalabhavan, Dandiya Bazar, Vadodara - 39000', '1,500', 350, '1 LPA'),
(43, 'Nirma University, Institute of Technology', 'MECH', 4622, 6641, 12709, 13877, 28754, 'Sarkhej-Gandhinagar Highway, Post-Chandlodia, via:Gota, Vill', '1,81,000', 120, '2 LPA'),
(44, 'G. H. Patel College of Engineering & Technology, V.V. Nagar', 'CSE - IoT', 4688, 5571, 11877, 21187, 32322, 'Bakrol Road, Vallabh Vidyanagar, Dist:Anand - 388120', '1,19,000', 12, '2 LPA'),
(45, 'L.J. Institute of Engineering & Technology, Ahmedabad', 'CE', 4815, 5551, 8841, 13965, 25698, 'Near L.J. Campus, Near Sarkhej - Sanand Circle, S.G. Highway', '73,000', 11, '4 LPA'),
(46, 'Government Engineering college, Bhavnagar', 'IT', 4818, 5120, 6877, 14843, 31566, 'Nr. BPTI, Vidhyanagar, Bhavnagar - 364002', '1,500', 11, '2 LPA'),
(47, 'Sardar Vallabbhai Patel Institute of Technology, Vasad', 'CE', 4933, 5877, 9544, 10933, 32641, 'Behind S.T. Depot, Vasad - 388 306', '74,000', 26, '2 LPA'),
(48, 'Adani Institute of Infrastructure Engineering', 'ICT', 5060, 5952, 14939, 12239, 32212, 'Shantigram Township, Nr. Vaishnodevi Circle, S. G. Highway, ', '1,65,000', 600, '2 LPA'),
(49, 'Government Engineering college, Rajkot', 'CE', 5163, 5819, 7290, 16195, 32654, 'Mavdi - Kankot Road, Near Hanuman Mandir, Near Krishna Nagar', '1,500', 40, '2 LPA'),
(50, 'L.D. Engineering College, Ahmedabad', 'ELEC', 5174, 7189, 10230, 13928, 17630, 'Opp Gujarat University, Navrangpura, Ahmedabad - 380015', '1,500', 75, '1 LPA');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `username` varchar(30) NOT NULL,
  `password` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`username`, `password`, `date`) VALUES
('sandip', 32, '2022-07-17 16:12:58'),
('Gopinath', 234, '2022-07-17 16:16:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
