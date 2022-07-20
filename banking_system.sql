SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` int(3) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_mail` varchar(20) DEFAULT NULL,
  `c_balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES
(1, 'Jake Peralta', 'peralta@gmail.com', 100400),
(2, 'Amy Santiago', 'amyamy@gmail.com', 204400),
(3, 'Rosa Diaz', 'diazwithR@gmail.com', 55000),
(4, 'Charles Boyle', 'boyle@gmail.com', 32200),
(5, 'Gina Linetti', 'queenlinetti@gmail.com', 805000),
(6, 'Terry Jeffords', 'teddy@gmail.com', 630000),
(7, 'Raymond Holt', 'ray@gmail.com', 428000),
(8, 'Michael Hitchcok', 'hitchcok@gmail.com', 45610),
(9, 'Norm Scully', 'scully@gmail.com', 35000),
(10, 'Cheddar Holt', 'chedddar@gmail.com', 250030);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `s_no` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`s_no`, `sender`, `reciever`, `balance`) VALUES
(3, 'Jake Peralta', 'Amy Santiago', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_mail` (`c_mail`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `s_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;