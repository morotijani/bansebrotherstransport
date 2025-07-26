-- phpMyAdmin SQL Dump
-- Transport Company Database Structure

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transport_services`
--

CREATE TABLE `transport_services` (
  `id` bigint(20) NOT NULL,
  `service_id` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_slug` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_image` varchar(255) DEFAULT NULL,
  `service_icon` varchar(100) DEFAULT NULL,
  `service_status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_quote_requests`
--

CREATE TABLE `transport_quote_requests` (
  `id` bigint(20) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `request_name` varchar(100) NOT NULL,
  `request_email` varchar(100) NOT NULL,
  `request_phone` varchar(20) NOT NULL,
  `request_company` varchar(100) DEFAULT NULL,
  `request_freight_type` varchar(50) NOT NULL,
  `request_origin` varchar(100) NOT NULL,
  `request_destination` varchar(100) NOT NULL,
  `request_weight` varchar(50) DEFAULT NULL,
  `request_dimensions` varchar(100) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `request_message` text DEFAULT NULL,
  `request_status` enum('pending','processed','completed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_fleet`
--

CREATE TABLE `transport_fleet` (
  `id` bigint(20) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_capacity` varchar(50) NOT NULL,
  `vehicle_description` text DEFAULT NULL,
  `vehicle_image` varchar(255) DEFAULT NULL,
  `vehicle_status` enum('active','maintenance','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_testimonials`
--

CREATE TABLE `transport_testimonials` (
  `id` bigint(20) NOT NULL,
  `testimonial_id` varchar(100) NOT NULL,
  `testimonial_client_name` varchar(100) NOT NULL,
  `testimonial_client_company` varchar(100) DEFAULT NULL,
  `testimonial_client_position` varchar(100) DEFAULT NULL,
  `testimonial_content` text NOT NULL,
  `testimonial_rating` int(1) DEFAULT 5,
  `testimonial_image` varchar(255) DEFAULT NULL,
  `testimonial_status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_contact_messages`
--

CREATE TABLE `transport_contact_messages` (
  `id` bigint(20) NOT NULL,
  `message_id` varchar(100) NOT NULL,
  `message_name` varchar(100) NOT NULL,
  `message_email` varchar(100) NOT NULL,
  `message_phone` varchar(20) DEFAULT NULL,
  `message_subject` varchar(100) DEFAULT NULL,
  `message_message` text NOT NULL,
  `message_status` enum('unread','read','replied') DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_users`
--

CREATE TABLE `transport_users` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` enum('admin','staff','customer') NOT NULL DEFAULT 'customer',
  `user_status` enum('active','inactive','suspended') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transport_services`
--
ALTER TABLE `transport_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_id` (`service_id`),
  ADD UNIQUE KEY `service_slug` (`service_slug`);

--
-- Indexes for table `transport_quote_requests`
--
ALTER TABLE `transport_quote_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `request_id` (`request_id`);

--
-- Indexes for table `transport_fleet`
--
ALTER TABLE `transport_fleet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `transport_testimonials`
--
ALTER TABLE `transport_testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_id` (`testimonial_id`);

--
-- Indexes for table `transport_contact_messages`
--
ALTER TABLE `transport_contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `message_id` (`message_id`);

--
-- Indexes for table `transport_users`
--
ALTER TABLE `transport_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transport_services`
--
ALTER TABLE `transport_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_quote_requests`
--
ALTER TABLE `transport_quote_requests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_fleet`
--
ALTER TABLE `transport_fleet`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_testimonials`
--
ALTER TABLE `transport_testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_contact_messages`
--
ALTER TABLE `transport_contact_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_users`
--
ALTER TABLE `transport_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;