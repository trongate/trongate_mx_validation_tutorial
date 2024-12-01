SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email_address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email_address`) VALUES
(1, 'Emily', 'Wilson', 'emily.wilson@webmail.org'),
(2, 'Sarah', 'Miller', 'sarah.miller@network.com'),
(3, 'Karen', 'Moore', 'karen.moore@address.org'),
(4, 'Robert', 'Moore', 'robert.moore@address.org'),
(5, 'Olivia', 'Miller', 'olivia.miller@mymail.com'),
(6, 'David', 'Garcia', 'david.garcia@random.net'),
(7, 'Sarah', 'Lee', 'sarah.lee@domain.com'),
(8, 'Karen', 'Martin', 'karen.martin@example.com'),
(9, 'Jessica', 'Wilson', 'jessica.wilson@place.com'),
(10, 'David', 'Smith', 'david.smith@domain.com'),
(11, 'William', 'Rodriguez', 'william.rodriguez@random.net'),
(12, 'Jessica', 'Lee', 'jessica.lee@place.com'),
(13, 'Karen', 'Wilson', 'karen.wilson@portal.org'),
(14, 'Michael', 'White', 'michael.white@random.net'),
(15, 'David', 'Thomas', 'david.thomas@webmail.org'),
(16, 'Andrew', 'Smith', 'andrew.smith@mymail.com'),
(17, 'William', 'Anderson', 'william.anderson@mymail.com'),
(18, 'Sophia', 'Jackson', 'sophia.jackson@address.org'),
(19, 'David', 'Thomas', 'david.thomas@network.com'),
(20, 'David', 'Taylor', 'david.taylor@example.com');


ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
