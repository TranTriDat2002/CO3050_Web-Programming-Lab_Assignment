-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 02:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybestcv`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_information`
--

CREATE TABLE `additional_information` (
  `id` int(11) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `hobbies` text DEFAULT NULL,
  `habits` text DEFAULT NULL,
  `personal_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_information`
--

INSERT INTO `additional_information` (`id`, `resume_id`, `user_id`, `hobbies`, `habits`, `personal_info`) VALUES
(2, 2, 2, 'Traveling, reading', 'Morning yoga routine, regular meditation', 'I am passionate about sustainable living and take steps to reduce my carbon footprint.'),
(3, 3, 3, 'Playing tennis, skiing', 'Regular exercise, healthy eating habits', 'I am an avid traveller and have visited over 20 countries.'),
(4, 4, 4, 'Hiking, painting', 'Regular exercise, yoga', 'I am a certified yoga instructor and teach classes on the weekends.'),
(5, 5, 5, 'Photography, hiking', 'Regular exercise, healthy eating habits', 'I am a dog lover and have two rescue dogs.'),
(6, 6, 6, 'Volunteering, playing piano', 'Regular exercise, healthy eating habits', 'I am passionate about social justice and human rights issues.'),
(7, 7, 7, 'Playing basketball, hiking', 'Regular exercise, healthy eating habits', 'I am an accomplished public speaker and have given keynote addresses at several conferences.'),
(8, 8, 8, 'Blogging, playing guitar', 'Regular exercise, healthy eating habits', 'I am a lifelong learner and enjoy taking courses in various subjects.'),
(9, 9, 9, 'Reading, woodworking', 'Regular exercise, meditation', 'I enjoy taking on DIY projects and have built several pieces of furniture for my home.'),
(10, 10, 10, 'Playing volleyball, camping', 'Regular exercise, healthy eating habits', 'I am a big sports fan and enjoy watching and playing a variety of sports.'),
(11, 11, 1, 'Regular exercise, healthy eating habits', 'Playing guitar, camping, hiking', 'I am fluent in Spanish and have lived abroad for several years.');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(50) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `obtained_date` date NOT NULL,
  `expiration_date` date DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `resume_id`, `user_id`, `title`, `organization`, `obtained_date`, `expiration_date`, `date_added`, `date_updated`) VALUES
(3, 2, 2, 'Certified Business Analyst', 'International Institute of Business Analysis', '2022-03-22', NULL, '2023-12-01 16:03:18', NULL),
(4, 3, 3, 'Certified Public Accountant', 'American Institute of Certified Public Accountants', '2020-07-01', '2025-06-30', '2023-12-01 16:03:18', NULL),
(5, 4, 4, 'AWS Certified Developer - Associate', 'Amazon Web Services', '2020-05-12', NULL, '2023-12-01 16:03:18', NULL),
(6, 5, 5, 'Certified Electrical Engineer', 'Institute of Electrical and Electronics Engineers', '2019-12-30', NULL, '2023-12-01 16:03:18', NULL),
(7, 6, 6, 'Certified Administrative Professional', 'International Association of Administrative Professionals', '2022-02-01', NULL, '2023-12-01 16:03:18', NULL),
(8, 7, 7, 'Certified Customer Service Professional', 'National Customer Service Association', '2021-11-15', NULL, '2023-12-01 16:03:18', NULL),
(9, 7, 7, 'Project Management Professional', 'Project Management Institute', '2018-10-01', '2023-10-01', '2023-12-01 16:03:18', NULL),
(10, 8, 8, 'Google Ads Certification', 'Google', '2021-06-25', NULL, '2023-12-01 16:03:18', NULL),
(11, 9, 9, 'Lean Six Sigma Green Belt', 'International Association for Six Sigma Certification', '2022-01-10', NULL, '2023-12-01 16:03:18', NULL),
(12, 10, 10, 'Certified Writer', 'National Writers Association', '2021-09-03', NULL, '2023-12-01 16:03:18', NULL),
(13, 11, 1, 'Google Analytics Individual Qualification', 'Google', '2021-02-01', '2022-02-01', '2023-12-01 16:19:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(50) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `school` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `gpa` varchar(250) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `resume_id`, `user_id`, `school`, `degree`, `major`, `year`, `gpa`, `date_added`, `date_updated`) VALUES
(2, 2, 2, 'University of Michigan', 'Bachelor', 'Business Administration', '2021', '7/10', '2023-12-01 16:03:18', NULL),
(3, 3, 3, 'University of Illinois', 'MBA', 'Accounting', '2021', '7/10', '2023-12-01 16:03:18', NULL),
(4, 4, 4, 'Massachusetts Institute of Technology', 'Bachelor', 'Computer Science', '2021', '7/10', '2023-12-01 16:03:18', NULL),
(5, 5, 5, 'Stanford University', 'Bachelor', 'Electrical Engineering', '2021', '9/10', '2023-12-01 16:03:18', NULL),
(6, 6, 6, 'University of Texas at Austin', 'Bachelor', 'Business Administration', '2021', '8/10', '2023-12-01 16:03:18', NULL),
(7, 7, 7, 'Arizona State University', 'Bachelor', 'Communication', '2021', '8/10', '2023-12-01 16:03:18', NULL),
(8, 8, 8, 'Columbia University', 'MBA', 'Marketing', '2021', '10/10', '2023-12-01 16:03:18', NULL),
(9, 9, 9, 'Virginia Polytechnic Institute and State University', 'Bachelor', 'Mechanical Engineering', '2021', '10/10', '2023-12-01 16:03:18', NULL),
(10, 10, 10, 'University of Washington', 'Bachelor', 'English', '2021', '10/10', '2023-12-01 16:03:18', NULL),
(11, 11, 1, 'University of California', 'Bachelor', 'Computer Science', '2021', '8/10', '2023-12-01 16:19:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(250) NOT NULL,
  `relationship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `resume_id`, `user_id`, `name`, `email`, `phone`, `relationship`) VALUES
(3, 2, 2, 'Mark Chen', 'markchen@email.com', '0123457789', 'Former Manager'),
(4, 2, 2, 'Emily Wang', 'emilywang@email.com', '0127456789', 'Former Tutor'),
(5, 3, 3, 'Amy Zhang', 'amyzhang@email.com', '0123456689', 'Former Manager'),
(6, 3, 3, 'Michael Li', 'michaelli@email.com', '0123456769', 'Former Colleague'),
(7, 4, 4, 'Jennifer Kim', 'jenniferkim@email.com', '0823456789', 'Former Supervisor'),
(8, 5, 5, 'Daniel Cho', 'danielcho@email.com', '0825456789', 'Former Colleague'),
(9, 6, 6, 'Andrew Kwon', 'andrewkwon@email.com', '0923456789', 'Former Manager'),
(10, 8, 8, 'Jessica Park', 'jessicapark@email.com', '023456789', 'Former Colleague'),
(11, 11, 1, 'Sarah Lee', 'sarahlee@email.com', '0421412421', 'Former Manager'),
(12, 11, 1, 'David Kim', 'davidkim@email.com', '0123456779', 'Former Colleague');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `employment_type` varchar(255) NOT NULL,
  `desire_salary` int(10) NOT NULL,
  `goals` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `user_id`, `title`, `position`, `employment_type`, `desire_salary`, `goals`, `date_added`, `date_updated`) VALUES
(2, 2, 'Data Crawling', 'Business Analyst', 'full-time', 90, 'To help companies make data-driven decisions', '2023-12-01 16:03:18', NULL),
(3, 3, 'Money Counting', 'Accountant', 'part-time', 50, 'To gain more experience in accounting', '2023-12-01 16:03:18', NULL),
(4, 4, 'Frontend Developer', 'Software Engineer', 'full-time', 120, 'To work on challenging projects and innovate', '2023-12-01 16:03:18', NULL),
(5, 5, 'Building Electronic System', 'Associate Electrical Engineer', 'full-time', 80, 'To design and implement electrical systems', '2023-12-01 16:03:18', NULL),
(6, 6, 'Do something', 'Administrative Assistant', 'contract', 60, 'To provide efficient administrative support', '2023-12-01 16:03:18', NULL),
(7, 7, 'Do nothing', 'Customer Service Representative', 'full-time', 50, 'To provide excellent service to customers', '2023-12-01 16:03:18', NULL),
(8, 8, 'Event Hosting', 'Marketing Coordinator', 'full-time', 70, 'To develop and implement effective marketing plans', '2023-12-01 16:03:18', NULL),
(9, 9, 'Teaching Assistance', 'Mentor', 'part-time', 30, 'To help guide and inspire others', '2023-12-01 16:03:18', NULL),
(10, 10, 'Facebook Content', 'Content Creator', 'full-time', 80, 'To create engaging and informative content for audiences', '2023-12-01 16:03:18', NULL),
(11, 1, 'Backend Developer', 'Web developer', 'full-time', 10, 'To become an expert in web development', '2023-12-01 16:19:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `resume_id`, `user_id`, `skill`) VALUES
(5, 2, 2, 'JavaScript'),
(6, 2, 2, 'Python'),
(7, 2, 2, 'C#'),
(8, 3, 3, 'Java'),
(9, 3, 3, 'C#'),
(10, 4, 4, 'Python'),
(11, 4, 4, 'ReactJS'),
(12, 4, 4, 'VueJS'),
(13, 5, 5, 'Leadership'),
(14, 6, 6, 'PHP'),
(15, 7, 7, 'HTML'),
(16, 8, 8, 'C++'),
(17, 9, 9, 'Team Working'),
(18, 10, 10, 'Research Skills'),
(19, 11, 1, 'PHP'),
(20, 11, 1, 'JavaScript'),
(21, 11, 1, 'HTML'),
(22, 11, 1, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `address`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Kara-lynn', 'Bownas', 'kbownas0', '$2a$12$cSW.5v9YkERnqtoAKvgwJ.IX2kDNxBJB2feslM/.CLG4f3AmMCI4i', 'kbownas0@gmail.com', '0402849675', 'Sydney, Australia', 'uploads/female1.jpg', NULL, 0, '2023-12-01 16:03:17', '2023-12-01 16:10:04'),
(2, 'Siuu', 'Bretelle', 'kbretelle1', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'kbretelle1@gmail.com', '0477247106', 'Melbourne, Australia', 'uploads/male1.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(3, 'Ingra', 'Brugger', 'ibrugger2', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'ibrugger2@gmail.com', '0559349117', 'Brisbane, Australia', 'uploads/female2.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(4, 'Michell', 'Medford', 'mmedford3', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'mmedford3@gmail.com', '0325057104', 'Adelaide, Australia', 'uploads/male2.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(5, 'Cart', 'Stringman', 'cstringman4', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'cstringman4@gmail.com', '0631353477', 'Perth, Australia', 'uploads/female3.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(6, 'Sabine', 'Baguley', 'sbaguley5', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'sbaguley5@gmail.com', '0872532363', 'Hobart, Australia', 'uploads/male3.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(7, 'Coralie', 'Carslaw', 'ccarslaw6', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'ccarslaw6@gmail.com', '0401625846', 'Darwin, Australia', 'uploads/female4.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(8, 'Garvin', 'Galbreth', 'ggalbreth7', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'ggalbreth7@gmail.com', '0867198979', 'Canberra, Australia', 'uploads/male4.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(9, 'Cirilo', 'Nosworthy', 'cnosworthy8', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'cnosworthy8@gmail.com', '0861791717', 'Gold Coast, Australia', 'uploads/female5.jpg', NULL, 0, '2023-12-01 16:03:17', NULL),
(10, 'Gertrudis', 'Espinas', 'gespinas9', '$2y$10$cJAewUStwaJsscmFmQ.09eL08hWQs38.hdfUkNww9c8JCcCTLLuyK', 'gespinas9@gmail.com', '0291168164', 'Newcastle, Australia', 'uploads/male5.jpg', NULL, 0, '2023-12-01 16:03:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_history`
--

CREATE TABLE `working_history` (
  `id` int(11) NOT NULL,
  `resume_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `position` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `tasks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `working_history`
--

INSERT INTO `working_history` (`id`, `resume_id`, `user_id`, `position`, `company_name`, `work_type`, `duration`, `tasks`) VALUES
(3, 2, 2, 'Business Analyst', 'XYZ Corporation', 'full-time', '5', 'Worked closely with key stakeholders to model business processes, gather and define business requirements. Conducted system analysis, developed use cases and prepared functional specifications.'),
(4, 3, 3, 'Senior Accountant', 'Super Accounting Firm', 'full-time', '6', 'Conducted multiple audits of firms and provided internal control analysis while communicating documents and performing fieldwork.'),
(5, 4, 4, 'Software Developer', 'Global Software Solutions', 'full-time', '4', 'Coded, tested and deployed software applications, APIs and software libraries. Worked in a team environment with frequent code reviews.'),
(6, 5, 5, 'Associate Electrical Engineer', 'Electricity Innovations', 'full-time', '4', 'Constructed, implemented and analyzed electrical testing to provide safety and optimization in electrical products. Collaborated in a team environment to ensure goal completion.'),
(7, 6, 6, 'Administrative Assistant', 'Super Industries, Inc.', 'full-time', '4', 'Answered calls and greeted visitors, assigned schedules and acted as the point of contact for all executive appointments.'),
(8, 7, 7, 'Customer Service Representative', 'Helpful Corp.', 'full-time', '1', 'Provided top-notch customer service using voice and digital channels. Provided solutions to consumer problems by escalating larger issues to management staff when necessary.'),
(9, 8, 8, 'Marketing Coordinator', 'Marketing Firm', 'full-time', '-1', 'Designed and implemented digital marketing campaigns using a variety of mediums on channels like LinkedIn, Instagram, and Twitter. Analyzed campaign success and made recommendations for updates to the company strategy.'),
(10, 9, 9, 'Mechanical Engineer', 'Mechanical Industries, LLC', 'full-time', '5', 'Researched, designed and created mechanical systems in machines and structures. Collaborated with a team to ensure the completion of important projects.'),
(11, 10, 10, 'Content Writer', 'Content Creation, Inc.', 'full-time', '5', 'Wrote engaging content across a variety of web products, ranging from press releases to landing pages to full-fledged articles. Worked with clients to develop content strategies that were appropriate to their specific needs.'),
(12, 11, 1, 'Web Developer', 'ABC Company', 'full-time', '0', 'Developed and maintained custom websites and web applications using HTML, CSS, JavaScript, and PHP. Collaborated with clients and designers to ensure project accuracy and completed projects on time.'),
(13, 11, 1, 'Web Developer', 'ABllC Company', 'full-time', '1', 'Developed and maintained custom websites and web applications using HTML, CSS, JavaScript, and PHP.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_information`
--
ALTER TABLE `additional_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_history`
--
ALTER TABLE `working_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_id` (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_information`
--
ALTER TABLE `additional_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `working_history`
--
ALTER TABLE `working_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_information`
--
ALTER TABLE `additional_information`
  ADD CONSTRAINT `additional_information_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `additional_information_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `certificate_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `education_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reference_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `working_history`
--
ALTER TABLE `working_history`
  ADD CONSTRAINT `working_history_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `working_history_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
