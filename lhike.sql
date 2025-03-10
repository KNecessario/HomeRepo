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
    `selected_id` INT PRIMARY KEY AUTO_INCREMENT,
    `module_id` INT NOT NULL,        
    `version_name` VARCHAR(255) NOT NULL,  
    `description`TEXT NOT NULL,         
    `release_date` DATE NOT NULL,
    `link` varchar(255) NOT NULL,
    FOREIGN KEY (module_id) REFERENCES modules(module_id)
);

-- Table structure for table `releaseNotes`
CREATE TABLE releaseNotes(
    `releasenote_id` INT PRIMARY KEY AUTO_INCREMENT,
    `releasenote_name` VARCHAR(100) NOT NULL,
    `description` TEXT NOT NULL,
    `note_release_date` DATE NOT NULL,
    `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `modules`
INSERT INTO `modules` (`modulename`, `description`, `release_date`) VALUES
('Dashboard', 'A delicious food item, served with syrup and butter', '2023-01-01'),
('Ecommerce', 'User documentation for software tools', '2023-02-01'),
('Pancake', 'Device Test Report system', '2023-03-01'),
('Board', 'Device Test Report system', '2023-03-01'),
('Finance', 'Device Test Report system', '2023-03-01'),
('Logistics and Inventory', 'Device Test Report system', '2023-03-01'),
('Human resource', 'Device Test Report system', '2023-03-01'),
('User Management', 'Device Test Report system', '2023-03-01'),
('DTR', 'Device Test Report system', '2023-03-01');


-- Insert sample data into `selectedmodules`
INSERT INTO `selectedmodules` (`module_id`, `version_name`, `description`, `release_date`, `link`)
VALUES
(1, 'Introduction', 'LHIKE ERP is a software that combines the functionalities of Logistics, Human Resource, Inventory, Kanban, and E-commerce into a single platform..', '2025-03-03','https://drive.google.com/file/d/1E01SjRzHOSgXfZTYTnxZGwY_Qz82FAOt/view'),
(1, 'Sales Warehouse Logistics', 'This feature is a crucial aspect of modern supply chain management and movement of storage and goods within a warehouse facility', '2025-03-03','https://drive.google.com/file/d/1KkzeNWql1WpgpSZA7prCXuW-srTnqgPb/view'),
(1, 'Finance', 'This feature refers to the management of money, investments, and financial activities within an individual, organization, or economy.', '2025-03-03','https://drive.google.com/file/d/1dfxYU1Gtl3rOiBwAA8yq4vex01lnnTJ8/view?usp=drive_link'),
(2, 'Pages and Store', 'It offers interface screens for managing sales, status, platform, finance, and inventory.', '2023-01-15','https://drive.google.com/file/d/1Gz0wuwBGZwsXXLrG8XU2ooBzAeboKS4p/view'),
(2, 'Page ROAS Tracker', 'It features tracking advertising campaign effectiveness and profitability on a webpage by monitoring conversion earnings. ', '2025-03-03','https://drive.google.com/file/d/1JjJyzVD90c2LeVvTrbsVTmaTuvuq6WNH/view'),
(2, 'Adspent ROAS Summary', 'It features Return on Ad Spend (ROAS), a crucial KPI for online and mobile marketing, indicating the profit generated per advertising investment at various levels of granularity.', '2023-03-10','https://drive.google.com/file/d/1adkurEg68BogzAkigYiDuuw-uZsuDCvB/view'),
(2, 'Sales Tracker', 'A sales tracker helps firms monitor sales, analyze performance, predict trends, manage teams, and integrate data from multiple platforms. ', '2025-05-05','https://drive.google.com/file/d/19PfzBVUcVxliDfCyMUZOWfGXibzDLj5_/view'),
(2, 'Update Tracking Number', 'This feature automates of export of order records from Pancake POS to ERP and assign them with tracking number.', '2025-05-05','https://drive.google.com/file/d/1c4QC6GFQYcV10F2T_DpzC3uPQQfEOavP/view'),
(2, 'Sales from 3P Apps', 'It helps the administrator to add and track orders depending on the status of the order.', '2025-05-05','https://drive.google.com/file/d/1V8iFPg1Lg2LEeqEN5JG5Z7c5ttzjvyAh/view'),
(2, 'Upload Sales Monitoring', 'A feature similar to Download Sales from 3P Apps. The only difference is you can upload batch of order using excel.', '2025-05-05','https://drive.google.com/file/d/1v1YUrbt0aiZql6JM47s8WsBy5vIzz_K7/view'),
(2, 'User ID', 'It enables firms to improve sales operations and generate revenue.', '2025-05-05','https://drive.google.com/file/d/1PqMgKQtdQqBRSIxdqYxecVNz7dnCh4gp/view'),
(2, 'Deleted Uploaded Sales Monitoring', 'Refers to removing or erasing data related to sales monitoring that has been previously uploaded or entered into a system or database.', '2025-05-05','https://drive.google.com/file/d/1XJylhyfHNi8hGi2vgnHCeAKcsYriH35s/view'),
(2, 'Product Testing', 'Assesses a product`s performance and usability to ensure user satisfaction, including instructions for accessing the product Testing Menu Lhike ERP System', '2025-05-05','https://drive.google.com/file/d/1_MYfOf32WM2hRY70qzXatwr8cOVresff/view'),
(2, 'Pages and Store', 'Features multiple interface screens for controlling various business tasks like sales, status, platform, and finance.', '2025-05-05','https://drive.google.com/file/d/1Gz0wuwBGZwsXXLrG8XU2ooBzAeboKS4p/view'),
(2, 'BM & Ad Account', 'It promotes team cooperation, allows for granular control over access and permissions, and provides reporting and analytics to monitor campaign performance.', '2025-05-05','https://drive.google.com/file/d/147A9ngTARjYacV0UTsAjVukX6u1Uqsj8/view'),
(2, 'Profitability Formula', 'The profitability formula divides a profit metric by net revenue, offering insight into a company`s margin profile and future trajectory.', '2025-05-05','https://drive.google.com/file/d/15zNFXrBfgiPEsscMldjCfX0SJiCkhZtJ/view'),
(3, 'Pancake Shop ID', 'Pancake is a management software supporting business owner manage, doing customer care and online sales, warehouse, and shipping management.', '2025-05-05','https://drive.google.com/file/d/1bwuzLYGq9CcteDK3r3br1OsH0kGziNZj/view'),
(4, 'Kanban Board', 'Serves as a helpful visual aid for project management, aiding teams in visualizing their task and monitoring their advancement.', '2025-05-05','https://drive.google.com/file/d/1YHln141Zigv-VWBdNPFi9BQtYDpphJBg/view'),
(4, 'General-Settings', 'Kanban board settings aid project management by providing a visual tool for task visualization and progress monitoring.', '2025-05-05','https://drive.google.com/file/d/19YYab1mlstNd-gOphOaFT_seG6-icP-P/view'),
(5, 'Income Statement', 'This provides an overview of the company`s operating revenue along with the expenditures to achieve that revenue.', '2025-05-05','https://drive.google.com/file/d/17LzbjEkXRMexIVvAao3XeLSM6-a8ibG2/view'),
(5, 'Book Keeping', 'This provides an overview of the company`s operating revenue along with the expenditures to achieve that revenue.', '2025-05-05','https://drive.google.com/file/d/19qnp2oZySxG5wiGOCis3CHdOYC06kz9G/view'),
(5, 'Reimbursement', 'This refers to the compensation paid by an organization to an individual or party for out-of-pocket expenses incurred or overpayments made.', '2025-05-05','https://drive.google.com/file/d/103SZhMed-Cl5_gzK6MhMO_zh0lOT3_tp/view'),
(5, 'Utility Expenses', 'This refers to the costs incurred by a company for utilizing necessities such as electricity, water, waste disposal, heating, and sewage.', '2025-05-05','https://drive.google.com/file/d/1DmS6f8kLLJ1vCLYVnmkqGGx6hOGNPFzr/view'),
(5, 'Settings', 'This feature enables and disables the ability of the user to Hide/Unhide the shared expense and type request in reimbursement/utility expenses submodules.', '2025-05-05','https://drive.google.com/file/d/1Ad5jcHP-O-BccDZpxj3bW7TcY51HW2Dz/view'),

(6,'Purchase Order', 'This is a formal document detailing items or services a company plans to buy from suppliers. It includes item descriptions, quantities, prices, delivery dates, and terms.', '2025-05-05','https://drive.google.com/file/d/1Ycm7Z6r4FEv6ka-Hs5bQUNl_PnRuTs5K/view'),
(6,'Supplier', 'This is an entity or individual that provides goods or services to another entity or individual.', '2025-05-05','https://drive.google.com/file/d/1s_rbPD2CJ1TV2mXErSszvEBuWoF_FlhP/view'),
(6,'Product Items ', 'This represents the individual units or measurements by which a product is distinguished and marketed.', '2025-05-05','https://drive.google.com/file/d/1SGx_IcGJJhAClwTQiWdvKSPVc5GjTkiC/view'),
(6,'Unit Codes', 'This feature provides a standardized and efficient way to categorize and reference specific units, be it military operations, academic programs, or industrial processes.', '2025-05-05','https://drive.google.com/file/d/16H3qdP1pm09ok9SE8iOXK0YXnpEzCPlD/view'),
(6,'Stocks', 'Stocks are the things businesses own to make or sell stuff. It could be raw materials, finished products, or even shares of other companies. ', '2025-05-05','https://drive.google.com/file/d/1N3ad9n0m5XXuI68JknnfyNqu5Z8UheRQ/view'),
(6,'Transaction History', 'This contains all the detailed information toward the company`s transaction on obtaining and releasing items from the inventory.  ', '2025-05-05','https://drive.google.com/file/d/1NnHmmGEln2F_eodBilQxpv6AUCIl1RJK/view'),
(6,'Fullfilment', 'This feature contains all the detailed information toward the company`s transaction on obtaining and releasing items from the inventory. ', '2025-05-05','https://drive.google.com/file/d/1_MjYuJWkKe_KwCScJJjwWHJepvj3wkRv/view'),
(6,'Shipped Out (Barcode)', 'This feature refers to a process where shipped items or packages are scanned to track their delivery status.  ', '2025-05-05','https://drive.google.com/file/d/1cjEU3YPr503TA3di6O0IU_YVYGy1gpUT/view'),
(6,'PPW (Barcode)', 'This feature allows the user to create a pending printed waybill of an item / product that is printed and attached to a package for delivery. ', '2025-05-05','https://drive.google.com/file/d/1b6rHDPICjjG37cVsCTUNI7T9HROJVf-i/view'),
(6,'RTS Items', 'refers to a "Return to Sender" package or mail returned instead of being delivered due to reasons like incorrect addresses or recipient refusal.', '2025-05-05','https://drive.google.com/file/d/1MBza1NaSohpa8P_aahd_6QuzKQl2iggN/view'),
(6,'Settings', 'generally refer to the configurable options within the ERP system that allow users to customize various aspects of the software to suit their specific business needs. ', '2025-05-05','https://drive.google.com/file/d/14ZbUCSYftToLPJu5FiFwA0AC-dk8dpF5/view'),

(7,'201 File', 'A 201 file, sometimes called an employee personnel file or personnel record, basically holds a bunch of documents that tell the story of a person`s work life. ', '2025-05-05','https://drive.google.com/file/d/1xaa-XbEwE4CftBwcW8sTmbzjQewg0OCf/view'),
(7,'Deductions', 'This features allows for customization of deductions for individual employees or groups ensuring fairness and accuracy.', '2025-05-05','https://drive.google.com/file/d/1I4rtgqtdqCbwtbSZoc0QYq00u_Tsv1eo/view'),
(7,'Cash Advance', 'This simplifies employee requests and approvals for cash advances. Once approved, its deducted to the amount from subsequent salaries, ensuring efficient fund management. ', '2025-05-05','https://drive.google.com/file/d/1WHeOQHKG64_rYqVk-Dg9A0CXdh0s9gUY/view'),
(7,'Department', 'This feature allows the user to add a department and set the employees on a department.  ', '2025-05-05','https://drive.google.com/file/d/1s9gCUmphujRTakFbu3PEmzMEsDqm34hf/view'),
(7,'Schedule', 'An interface in HR Module that redefined plans detailing activities, tasks for employees, and resources. ', '2025-05-05','https://drive.google.com/file/d/1vxFhDjYVAKgSzt3aa_fBwx94Qz_6DTTs/view'),
(7,'Holiday', 'An interface in HR Module integrated into the calendar functionality, allowing administrators to set up holidays with details like name and date. ', '2025-05-05','https://drive.google.com/file/d/1TZDvyjX7-OKLGlTNJ2hj5_mXJh16g6fo/view'),
(7,'Events', 'An interface in HR Module that gives organizers an overview of many aspects of event planning, management, and performance.', '2025-05-05','https://drive.google.com/file/d/14jYH1429UZnTj4GAANR4r6uF6O34_JN1/view'),
(7,'Payroll', 'An interface in the HR Module that refers to the compensation that a business provides to its employees for a specific period or on a designated date.', '2025-05-05','https://drive.google.com/file/d/1wa5YAtLog8rBIMfCP7YJzHPLd-yUetzU/view'),
(7,'Payroll Period', 'An interface in the HR Module that refers to the specific timeframe during which employee wages are calculated and processed.', '2025-05-05','https://drive.google.com/file/d/12f-dMEo7RoDmXO2LtpFJvqxE_6cEVsYk/view'),
(7,'Leave Credits', 'Accumulate at the company, specifying the  rate for employees, and mentions the types of leave that can be taken using these credits subject to approval and adherence to company policies.', '2025-05-05','https://drive.google.com/file/d/1ghZqVke2Nq2ZGitB-N_PzC57k7NuRgiQ/view'),
(7,'Request', 'formal communication made by an employee to their manager or another relevant authority figure, seeking permission, and any other work-related issues.', '2025-05-05','https://drive.google.com/file/d/1aT7XmKd7IDsK-FnUnnfbh8LzURcTKe8x/view'),
(7,'branch', 'A branch of a company is a physical establishment on a location aside from the main office/ headquarters wherein business activities are also conducted. ', '2025-05-05','https://drive.google.com/file/d/1g_VpfTaqtNNnj31XiOuDydt1ml9ikZqh/view'),
(7,'Settings', 'This feature allows user to modify the Night Shift Policy, Break Time Logs Policy, Grace Period for Time In, Over Time Pay Rules, Holiday Pay Rules and Change Logs Requests ', '2025-05-05','https://drive.google.com/file/d/1B2PEaj_Go2Hmu87TAZp-adMxhaP8FNY_/view'),

(8,'User Management', 'This feature involves the procedures and tasks related to overseeing user accounts and their access rights within a system.', '2025-05-05','https://drive.google.com/file/d/1dovYCpm7zFTjDfSlE48ekHdOZZqqZP4D/view'),

(9,'Request Access', 'This functionality enables users to update their personal details directly from their LHIKE DTR Account. ', '2025-05-05','https://drive.google.com/file/d/1qolP9C40amt97OEr7Q7hkMiUyNrUuhSE/view'),
(9,'Timesheet', 'This tool allows employees to easily monitor their clock-in and clock-out times. Displaying hours worked, for  time management and payroll processing ', '2025-05-05','https://drive.google.com/file/d/1k07Lqq1O1GcKLA4i9MsLtoHsJr-hGi7J/view'),
(9,'Change Schedule Request', 'This feature shows a type of requests an employee can ask for change schedule', '2025-05-05','https://drive.google.com/file/d/1u5U3UKiE-7yHK546mH0he-SKjo6_Ihttps://drive.google.com/file/d/1ry3Xvqv8a514RY0qL9PfHQa0wtsE233Z/viewrzP/view'),
(9,'Leave Request', 'This feature shows a type of requests an employee can ask for leave request', '2025-05-05','https://drive.google.com/file/d/1ry3Xvqv8a514RY0qL9PfHQa0wtsE233Z/view'),
(9,'Overtime Request', 'This feature shows a type of requests an employee can ask for overtime request', '2025-05-05','https://drive.google.com/file/d/1e-XyX1yqGahylIeVyojgyOv_-ztwk5dp/view'),
(9,'Offset Request', 'This functionality enables users to update their personal details directly from their LHIKE DTR Account.', '2025-05-05','https://drive.google.com/file/d/1X-KA6ZzX0Qm4xKQzeCr_dzvSiMjgLpfI/view');






-- Insert sample data into `releaseNotes`
INSERT INTO releaseNotes (`releasenote_name`, `description`, `note_release_date`, `link`) 
VALUES
('Release 2.4.0', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-06-06','https://www.youtube.com/watch?v=46_3SXve4Po'),
('Release 2.4.1', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-06-25', 'https://www.youtube.com/watch?si=gsfOkBbWbm05f-Bj&v=sFEaeZI8J8Y&feature=youtu.be'),
('Release 2.4.2', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-07-10', 'https://www.youtube.com/watch?v=K2G2zYuFHvw'),
('Release 2.4.3', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-07-24', 'https://www.youtube.com/watch?v=XZPuOizmNQc'),
('Release 2.4.4', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-08-07', 'https://www.youtube.com/watch?v=EdkyCK5Q7BM'),
('Release 2.4.5', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-08-21', 'https://www.youtube.com/watch?v=s6qNpefDD9Y'),
('Release 2.4.6', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-10-09', 'https://www.youtube.com/watch?v=3f4wNpyliQw'),
('Release 2.4.7', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-11-04', 'https://www.youtube.com/watch?v=Pe_6TkEWmJU'),
('Release 2.4.8', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-09-18', 'https://www.youtube.com/watch?v=ZsyDyOtKPUQ'),
('Release 2.4.9', 'To ensure a smooth transition and optimal utilization of the latest features, we have prepared a detailed guide for your reference.', '2024-11-27', 'https://www.youtube.com/watch?v=CHN3YP8ILTQ');






-- AUTO_INCREMENT for table `modules`
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;
