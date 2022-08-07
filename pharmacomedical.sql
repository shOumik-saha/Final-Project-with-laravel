-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 07:12 PM
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
-- Database: `pharmacomedical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `appointmentDateTime` datetime NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visited` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasPaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidDateTime` datetime NOT NULL,
  `appointmentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appID`, `userID`, `doctorID`, `appointmentDateTime`, `purpose`, `visited`, `hasPaid`, `paidDateTime`, `appointmentStatus`, `link`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2020-06-21 11:00:00', 'test', 'true', 'true', '2020-06-21 10:00:00', 'true', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(2, 13, 1, '2022-07-26 23:40:57', 'cough', 'no', 'true', '2022-07-19 23:00:57', 'true', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(3, 1, 2, '2022-07-17 23:03:25', 'Allergy', 'no', 'true', '2022-07-26 23:03:25', 'true', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL),
(4, 20, 2, '2022-07-02 17:59:00', 'Fever', 'no', 'paid', '2022-07-10 17:59:00', 'true', 'https://meet.google.com/nvg-fcfc-dzp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `fee` double NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorID`, `userID`, `fee`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 1000, '4.5', NULL, NULL),
(2, 12, 800, '3.5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reviews`
--

CREATE TABLE `doctor_reviews` (
  `doctorReviewID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_reviews`
--

INSERT INTO `doctor_reviews` (`doctorReviewID`, `userID`, `doctorID`, `point`, `description`, `created_at`, `updated_at`) VALUES
(4, 4, 1, '4.5', 'Good doctor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_06_20_162709_create_doctors_table', 1),
(61, '2022_06_21_063345_create_doctors_table', 3),
(62, '2022_06_21_063623_create_appointments_table', 4),
(63, '2022_06_21_064136_create_pharmaceutical_items_table', 5),
(64, '2022_06_21_064731_create_prescriptions_table', 6),
(65, '2022_06_21_065028_create_doctor_reviews_table', 7),
(66, '2022_06_21_065322_create_orders_table', 8),
(67, '2014_10_12_100000_create_password_resets_table', 9),
(68, '2019_08_19_000000_create_failed_jobs_table', 9),
(69, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(70, '2022_06_19_140406_create_users_table', 9),
(71, '2022_06_25_192104_create_doctors_table', 10),
(72, '2022_06_25_192421_create_appointments_table', 11),
(73, '2022_06_25_192624_create_pharmaceutical_items_table', 12),
(74, '2022_06_25_192728_create_prescriptions_table', 13),
(75, '2022_06_25_192909_create_doctor_reviews_table', 14),
(76, '2022_06_25_193007_create_orders_table', 15),
(77, '2022_07_01_065039_create_doctor_reviews_table', 16),
(78, '2022_07_01_165116_create_appointments_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL,
  `totalAmount` double NOT NULL,
  `hasPaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paidDate&Time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `userID`, `pharmaceuticalItemID`, `totalAmount`, `hasPaid`, `paidDate&Time`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 100, '1', '2020-01-01 11:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` int(11) NOT NULL,
  `otp` int(6) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(200) DEFAULT NULL,
  `expired_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `otp`, `email`, `created_at`, `expired_at`, `updated_at`) VALUES
(1, 3211, 'mahfuzasharmili@gmail.com', '2022-08-07 13:10:10', '0', '2022-08-07 13:10:10'),
(2, 3719, 'mahfuzasharmili@gmail.com', '2022-08-07 13:13:09', '0', '2022-08-07 13:13:09'),
(3, 1982, 'mahfuzasharmili@gmail.com', '2022-08-07 13:14:23', '0', '2022-08-07 13:14:23'),
(4, 2792, 'mahfuzasharmili@gmail.com', '2022-08-07 13:15:50', '0', '2022-08-07 13:15:50'),
(5, 5805, 'mahfuzasharmili@gmail.com', '2022-08-07 13:17:48', '0', '2022-08-07 13:17:48'),
(6, 1099, 'mahfuzasharmili@gmail.com', '2022-08-07 13:33:31', '0', '2022-08-07 13:33:31'),
(7, 3907, 'mahfuzasharmili@gmail.com', '2022-08-07 13:34:49', '0', '2022-08-07 13:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmaceutical_items`
--

CREATE TABLE `pharmaceutical_items` (
  `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `itemName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmaceutical_items`
--

INSERT INTO `pharmaceutical_items` (`pharmaceuticalItemID`, `userID`, `itemName`, `price`, `created_at`, `updated_at`) VALUES
(1, 3, 'Paracetamol', 100, NULL, NULL),
(2, 3, 'Algin', 80, NULL, NULL),
(3, 3, 'Algin', 80, NULL, NULL),
(4, 12, 'Ace', 30, NULL, NULL),
(5, 16, 'Paracetamol', 80, NULL, NULL),
(6, 13, 'Algin', 80, NULL, NULL),
(8, 13, 'Prodep', 100, NULL, NULL),
(9, 3, 'Ceevit', 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescriptionID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `doctorID` int(10) UNSIGNED NOT NULL,
  `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL,
  `advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescriptionID`, `userID`, `doctorID`, `pharmaceuticalItemID`, `advice`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 'Consume it twice a day after breakfast and dinner', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(100) NOT NULL,
  `userID` int(100) NOT NULL,
  `token` varchar(1000) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `expired_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `userID`, `token`, `role`, `created_at`, `expired_at`, `updated_at`) VALUES
(1, 35, 'oclv5QkK52J6VTmBuXiSGyVMeal7KTPv1jeIej6WbZX5NJjYBcDOKWj3Fetupzfv', 'admin', '2022-08-07 13:33:38.000000', NULL, '2022-08-07 13:33:38.000000'),
(2, 35, 'DTFv0afGBStegb9cqOJRSS7pLWNcatPn1gy5V2FHwSECtDZrEd4mubrbz18eVlSj', 'admin', '2022-08-07 13:54:36.000000', NULL, '2022-08-07 13:54:36.000000'),
(3, 35, 'QieXlN8D1qzTR6BWoVA9tLtNj032FKf8363o6rGIsf2EtFxXAKrtyazj7LAbFpcS', 'admin', '2022-08-07 15:12:52.000000', NULL, '2022-08-07 15:12:52.000000'),
(4, 35, 'N7Z4wKyQsjAmryxUw47by9RUD3A5tBnFoUFMaitMA55Vz98iPyf84UVJniG6NlRO', 'admin', '2022-08-07 15:16:00.000000', NULL, '2022-08-07 15:16:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `phoneNumber`, `password`, `dob`, `gender`, `role`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'Mahfuza', 'jui@gmail.com', '+880212345678', 'e10adc3949ba59abbe56e057f20f883e', '1999-05-20', 'female', 'admin', 'true', NULL, NULL),
(2, 'Sreejan Roy', 'sreejan@gmail.com', '+88012345677', 'e10adc3949ba59abbe56e057f20f883e', '1912-06-11', 'male', 'doctor', 'true', NULL, NULL),
(3, 'Shoumik Saha', 'shoumik@gmail.com', '+880198765444', 'e10adc3949ba59abbe56e057f20f883e', '1912-06-11', 'male', 'pharmacist', 'true', NULL, NULL),
(4, 'Dip Roy', 'dipr@gmail.com', '+8801944444444', '10ed1697617fe7758b4236d5b791286c', '1912-06-11', 'male', 'patient', 'true', NULL, NULL),
(12, 'Juthika', 'juthika@gmail.com', '01977777777', '614b8e510efc167704a728634b1a7f5f', '2000-03-02', 'female', 'doctor', 'true', NULL, NULL),
(13, 'Shawon', 'shawon@gmail.com', '012357777777', 'c26be8aaf53b15054896983b43eb6a65', '1912-06-11', 'male', 'pharmacist', 'true', NULL, NULL),
(16, 'Suraiya', 'suraiya@gmail.com', '01876767673', 'e10adc3949ba59abbe56e057f20f883e', '1970-07-13', 'female', 'patient', 'true', NULL, NULL),
(20, 'Spider', 'spi@gmail.com', '01344444444', 'f4cc399f0effd13c888e310ea2cf5399', '2022-07-20', 'male', 'patient', 'true', NULL, NULL),
(21, 'Spidet', 'spd@gmail.com', '013444455444', 'c26be8aaf53b15054896983b43eb6a65', '2022-07-20', 'male', 'patient', 'false', NULL, NULL),
(22, 'abc', 'abc@gmail.com', '0193838383838', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-19', 'male', 'patient', 'false', NULL, NULL),
(27, 'roi', 'roi@gmail.com', '013838383838', '227e731c7c1b1b7dadd2bf96808a0a10', '2022-07-19', 'male', 'patient', 'true', NULL, NULL),
(35, 'Mahfu', 'mahfuzasharmili@gmail.com', '01955059308', 'e10adc3949ba59abbe56e057f20f883e', '1998-07-18', 'female', 'admin', 'false', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `appointments_userid_foreign` (`userID`),
  ADD KEY `appointments_doctorid_foreign` (`doctorID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorID`),
  ADD KEY `doctors_userid_foreign` (`userID`);

--
-- Indexes for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD PRIMARY KEY (`doctorReviewID`),
  ADD KEY `doctor_reviews_userid_foreign` (`userID`),
  ADD KEY `doctor_reviews_doctorid_foreign` (`doctorID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_userid_foreign` (`userID`),
  ADD KEY `orders_pharmaceuticalitemid_foreign` (`pharmaceuticalItemID`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  ADD PRIMARY KEY (`pharmaceuticalItemID`),
  ADD KEY `pharmaceutical_items_userid_foreign` (`userID`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescriptionID`),
  ADD KEY `prescriptions_userid_foreign` (`userID`),
  ADD KEY `prescriptions_doctorid_foreign` (`doctorID`),
  ADD KEY `prescriptions_pharmaceuticalitemid_foreign` (`pharmaceuticalItemID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phonenumber_unique` (`phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  MODIFY `doctorReviewID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  MODIFY `pharmaceuticalItemID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescriptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`doctorID`),
  ADD CONSTRAINT `appointments_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD CONSTRAINT `doctor_reviews_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`doctorID`),
  ADD CONSTRAINT `doctor_reviews_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_pharmaceuticalitemid_foreign` FOREIGN KEY (`pharmaceuticalItemID`) REFERENCES `pharmaceutical_items` (`pharmaceuticalItemID`),
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `pharmaceutical_items`
--
ALTER TABLE `pharmaceutical_items`
  ADD CONSTRAINT `pharmaceutical_items_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_doctorid_foreign` FOREIGN KEY (`doctorID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `prescriptions_pharmaceuticalitemid_foreign` FOREIGN KEY (`pharmaceuticalItemID`) REFERENCES `pharmaceutical_items` (`pharmaceuticalItemID`),
  ADD CONSTRAINT `prescriptions_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
