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

-- Database: `lhike`

-- Table structure for table `modules`
CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `selectedmodules`
CREATE TABLE selectedmodules (
    selected_id INT PRIMARY KEY AUTO_INCREMENT,
    module_id INT,        
    version_name VARCHAR(255),  
    description TEXT,         
    release_date DATE,         
    FOREIGN KEY (module_id) REFERENCES modules(module_id)
);

-- Insert sample data into `modules`
INSERT INTO `modules` (`modulename`, `description`, `release_date`) VALUES
('Pancake', 'A delicious food item, served with syrup and butter', '2023-01-01'),
('Documentation', 'User documentation for software tools', '2023-02-01'),
('DTR', 'Device Test Report system', '2023-03-01');

-- Insert sample data into `selectedmodules`
INSERT INTO `selectedmodules` (`module_id`, `version_name`, `description`, `release_date`) VALUES
(1, 'Pancake 1', 'First version of the pancake recipe, basic and simple', '2023-01-01'),
(1, 'Pancake 2', 'Improved version with extra toppings and options', '2023-02-01'),
(1, 'Pancake 3', 'Final version with extra syrup and new flavors', '2023-03-01'),
(2, 'Documentation 1', 'Basic user documentation with setup instructions', '2023-01-15'),
(2, 'Documentation 2', 'Updated guide for advanced users, new sections added', '2023-02-15'),
(3, 'DTR 1', 'Initial device test report, includes basic device tests', '2023-03-10'),
(3, 'DTR 2', 'Updated test report, includes additional device tests and fixes', '2023-04-10');

-- AUTO_INCREMENT for table `modules`
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;
