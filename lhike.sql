-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 06:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhike`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,  -- Renamed for clarity
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `module_versions` (
  `version_id` INT(11) NOT NULL AUTO_INCREMENT,
  `module_id` INT(11) NOT NULL,
  `version_name` VARCHAR(100) NOT NULL,
  `version_description` TEXT DEFAULT NULL,
  `release_date` DATE DEFAULT NULL,
  PRIMARY KEY (`version_id`),  -- Add this line to make version_id the primary key
  FOREIGN KEY (`module_id`) REFERENCES `modules`(`module_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`modulename`, `description`, `release_date`) VALUES
('Documentation Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-18'),
('Pancake Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-19'),
('Human Resource Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-20'),
('Board Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-21'),
('User Management Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-22'),
('DTR Module', 'Ensuring easy access, streamlined collaboration, and enhanced productivity.', '2025-02-23');

INSERT INTO `module_versions` (`module_id`, `version_name`, `version_description`, `release_date`) VALUES
(1, 'Documentation Version 1', 'Initial version of the Documentation Module.', '2025-03-01'),
(1, 'Documentation Version 2', 'Updated documentation with new features.', '2025-04-01'),

(2, 'Pancake Version 1', 'First version of the Pancake Module.', '2025-03-05'),
(2, 'Pancake Version 2', 'Improved pancake recipes and instructions.', '2025-04-05'),

(3, 'HR Version 1', 'Initial release of the Human Resource Module.', '2025-03-10'),
(3, 'HR Version 2', 'Added new employee management features.', '2025-04-10'),

(4, 'Board Version 1', 'First version of the Board Module.', '2025-03-15'),

(5, 'User Management Version 1', 'Initial version of the User Management Module.', '2025-03-20'),
(5, 'User Management Version 2', 'Enhanced user role management.', '2025-04-20'),

(6, 'DTR Version 1', 'Initial version of the DTR Module.', '2025-03-25');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
