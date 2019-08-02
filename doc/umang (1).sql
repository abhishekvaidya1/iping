-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 02:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) DEFAULT NULL,
  `stud_ans` text,
  `score` int(11) DEFAULT '0',
  `time` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`id`, `stud_id`, `stud_ans`, `score`, `time`, `created_at`, `updated_at`, `end_time`, `date`) VALUES
(1, 5, '{\"1\":\"E\",\"2\":\"17\",\"3\":\"22 years old\",\"4\":\"5\",\"5\":\"17\",\"6\":\"Abby\'s apartment has one bedroom.\",\"7\":\"20\",\"8\":\"127\\/7\",\"9\":\"0.1277777777777778\",\"10\":\"600\",\"11\":\"2100\",\"12\":\"120960\",\"13\":\"5030\",\"14\":\"10 sec\",\"15\":\"1040\",\"16\":\"20 cm\",\"17\":\"Rs.1200\",\"18\":\"48\",\"19\":\"54.96\",\"20\":\"22781.25\",\"21\":\"$120.00\",\"22\":\"3\"}', 22, '16:31:16', '2019-07-30 11:06:15', '2019-07-30 05:36:15', NULL, '2019-07-30'),
(2, 8, '{\"1\":\"F\",\"2\":\"20\",\"3\":\"22 years old\",\"4\":\"2\",\"5\":\"27\",\"6\":\"Tim lives in Tinyville.\",\"7\":\"25\",\"8\":\"127\\/7\",\"9\":\"0.1277777777777778\",\"10\":\"800\",\"11\":\"2200\",\"12\":\"120960\",\"13\":\"502\",\"14\":\"8 sec\",\"15\":\"250\",\"16\":\"25 cm\",\"17\":\"Rs.1000\",\"18\":null,\"19\":null,\"20\":null,\"21\":null,\"22\":\"2\"}', 12, '17:10:14', '2019-07-30 11:41:50', '2019-07-30 06:11:50', NULL, '2019-07-30'),
(3, 6, '{\"18\":null,\"19\":null,\"20\":null,\"21\":null}', 0, '16:44:36', '2019-07-30 06:14:42', '2019-07-30 06:14:42', '17:14:39', '2019-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(12) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `problem_fig` varchar(255) DEFAULT NULL,
  `answer_fig` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `flag`, `problem_fig`, `answer_fig`, `created_at`, `updated_at`) VALUES
(1, 'Find the missing letter: A, C, ?, G, I', 'D', 'B', 'F', 'E', 'E', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(2, 'Find the missing number:  15, ?, 30, 45', '25', '20', '17', '28', '20', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(3, 'William is 12 years older than Michael, and Michael is 2 years younger than Anna, who is 12 years old. How old is William?', '18 years old', '22 years old', '16 years old', '20 years old', '22 years old', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(4, 'Find the missing number: 4,?,20,10,100,50,500', '40', '5', '2', '30', '5', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(5, '47 - 13 = ? + 17', '17', '12', '22', '27', '17', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(6, ' Read the following statements carefully:\n1) Tim lives in a big apartment\n2)Abby lives in a small apartment\n3)There are no big apartments in Tinyville\n4) Small apartments have one bedroom\nWhich statement must be true?', 'Tim lives in Tinyville.', 'Abby lives in Tinyville.', 'Abby\'s apartment has one bedroom.', 'Big apartments have one bedroom', 'Abby\'s apartment has one bedroom.', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(7, 'A bookstore sells books at a profit of at least 15% of the final selling price. The store buys a certain book at a cost of $17. If the store gives students a 20% discount, what should the selling price of the book before the discount be?', '20', '25', '23', '24', '25', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(8, 'A can do piece of work in 30 days while B alone can do it in 40 days. In how many days can A and B working together do it?', '113/7', '120/7', '127/7', '134/7', '120/7', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(9, 'A pet shop has 0.75 as many dogs as cats. What is the ratio of cats to dogs in the shop?', '0.000708912037037037', '0.12638888888888888', '0.1277777777777778', '0.16874999999999998', '0.16874999999999998', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(10, 'Peter and Paul are roommates. Each of them pays the rent, according to their room’s size. Peter’s room is twice as big as Paul’s. How much rent does Peter pay, if the total rent is £1200?', '600', '800', '400', '500', '800', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(11, 'An organic greenhouse grows Roses and Lilies in an 11:10 ratio in favour of the Roses. On Valentine\'s Day, the owner of the greenhouse was overflowed with orders and sold out his entire stock of flowers. If the total amount of Lilies was 2,000 how many more Roses than Lilies were sold?', '2200', '2100', '200', '180', '200', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(12, 'In how many different ways can the letters of the word \'MATHEMATICS\' be arranged so that the vowels always come together?', '10080', '4989600', '120960', 'None of these', '120960', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(13, 'When an amount was distributed among 14 boys, each of them got rs 80 more than the amount received by each boy when the same amount is distributed equally among 18 boys. What was the amount?', '502', '5030', '5040', '5050', '5040', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(14, 'A train 150 m long is running with a speed of 68 kmph. In what time will it pass a man who is running at 8 kmph in the same direction in which the train is going?', '7 sec', '10 sec', '8 sec', '9 sec', '9 sec', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(15, '2 + 22 + 23 + … + 28 = ?', '510', '250', '1040', '680', '510', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(16, 'The length of a rectangle is twice its breadth. If its length is decreased by 5 cm and breadth is increased by 5 cm, the area of the rectangle is increased by 75 sq. cm. Find the length of the rectangle.', '20 cm', '21 cm', '22 cm', '25 cm', '20 cm', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(17, 'A man spends 2/5 of his salary on house rent,3/10 of his salary on food and 1/8 of his salary on conveyance. if he has Rs.1400 left with him, find his expenditure on food and conveyance', 'Rs.1200', 'Rs.1000', 'Rs.1050', 'Rs.1500', 'Rs.1000', 0, NULL, NULL, '2019-07-30 10:57:39', '2019-07-30 10:57:39'),
(18, 'A man had nine children, all born at regular intervals, and the sum of the squares of their ages was equal to the square of his own. What was the age of each? Every age was an exact number of years.', NULL, NULL, NULL, NULL, '48', 0, NULL, NULL, '2019-07-30 05:28:33', '2019-07-30 05:28:33'),
(19, '\"The guests at that ball the other night,\" said Dora at the breakfast table, \"thought that the clock had stopped because the hands appeared in exactly the same position as when the dancing began. But it was found that they had really only changed places. As you know, the dancing commenced between ten and eleven o\'clock. What was the exact time of the start?\"', NULL, NULL, NULL, NULL, '54.96', 0, NULL, NULL, '2019-07-30 05:29:00', '2019-07-30 05:29:00'),
(20, 'A man started a business with a capital of $2,000.00 and increased his wealth by 50 percent every three years. How much did he possess at the expiration of eighteen years?', NULL, NULL, NULL, NULL, '22781.25', 0, NULL, NULL, '2019-07-30 05:29:25', '2019-07-30 05:29:25'),
(21, 'A generous man set aside a certain sum of money for equal distribution weekly to the needy of his acquaintance. One day he remarked, \"If there are five fewer applicants next week, you will each receive two dollars more.\" Unfortunately, instead of there being fewer there were actually four more persons applying for the gift. \"This means,\" he pointed out, \"that you will each receive one dollar less.\" How much did each person receive at that last distribution?', NULL, NULL, NULL, NULL, '4120.00', 0, NULL, NULL, '2019-07-30 05:30:12', '2019-07-30 05:30:12'),
(22, 'Here you are presented with several images in a row. It is your job to comprehend the pattern and find the missing image. Note: The missing image will not necessarily be at the end of the row. Frequently it can be found in the middle of the line', '1', '2', '3', '4', '3', 0, '588problem.png', '880answer.png', '2019-07-30 05:31:12', '2019-07-30 05:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `timestamps` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mobile_no` varchar(15) DEFAULT NULL,
  `collage_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `api_token`, `timestamps`, `updated_at`, `created_at`, `mobile_no`, `collage_name`) VALUES
(1, 'admin', 'admin@iping.com', '$2y$10$N3NdZnNzCy19No2sHWTBzejXwYrx8yI25gwdIoUFIN1jrsY02PYKm', 1, NULL, 'dd87738b305cecc6e13d85a00b448b3f5d181cb9', '2019-07-29 13:04:22', '2018-04-09 11:05:45', '2018-04-05 12:19:52', NULL, NULL),
(5, 'shilpa', 'shilpa@iping.com', '$2y$10$tmUaTua9E/XiROm1TB0I8uIZ7YR2mRpR2GHZGHcsImyB.4AkngWLq', 2, NULL, NULL, '2019-07-30 07:19:02', '2019-07-30 01:49:02', '2019-07-29 23:01:44', '1234123412', 'BMIT'),
(6, 'Aishwarya', 'aish@iping.com', '$2y$10$5StidVnFb4yqkDcw6N7teOCNe.4zwjl1HoVaa0tYqjXREG7kiIGzi', 2, NULL, NULL, '2019-07-30 07:19:06', '2019-07-30 01:49:06', '2019-07-29 23:17:04', '546757867978', 'dgdf'),
(7, 'Rajlaxmi', 'raj@iping.com', '$2y$10$lGPRmOf7uoyxVt/R0ozaRO7QitaITmxtI3y0jsDX6me2Aei6V7bOm', 2, NULL, NULL, '2019-07-30 07:19:11', '2019-07-30 01:49:11', '2019-07-30 00:22:09', '123454312', 'WIT'),
(8, 'Gajanan Bandgar', 'gajanan.bandgar@iping.in', '$2y$10$zPjRe/2YCHWqDF97Ra5Ye.gHYEBeprQjfSIKPwwecaO.gdmN9tGpi', 2, NULL, NULL, '2019-07-30 11:40:12', '2019-07-30 06:10:12', '2019-07-30 06:10:12', '9370579255', 'WIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
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
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
