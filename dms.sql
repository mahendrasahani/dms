-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_check_lists`
--

CREATE TABLE `assigned_check_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `is_checked` tinyint(4) DEFAULT NULL COMMENT '0 = unchecked, 1 = checked',
  `make_model` varchar(255) DEFAULT NULL,
  `make_manufacture` varchar(255) DEFAULT NULL,
  `unit_location` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `item_status` varchar(255) DEFAULT NULL COMMENT '1 = new, 2 = processing, 3 = complete',
  `remark` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` varchar(255) DEFAULT NULL COMMENT 'group by category',
  `order` varchar(255) DEFAULT NULL COMMENT 'order number',
  `check_list_information_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigned_check_lists`
--

INSERT INTO `assigned_check_lists` (`id`, `category`, `category_id`, `item_name`, `is_checked`, `make_model`, `make_manufacture`, `unit_location`, `qty`, `item_status`, `remark`, `department_id`, `group_id`, `order`, `check_list_information_id`, `status`, `created_at`, `updated_at`) VALUES
(388, 'Epabx', 1, 'IPBX', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '2', '2', 'testing', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(389, 'Epabx', 1, 'Epabx Main 400 Pair Mdf Installation', 1, 'Crone Box', 'Crone Box', 'Delhi', '8', '1', 'testing', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(390, 'Epabx', 1, 'Epabx Extension Testing At Each Floor', 1, 'Crone Box', 'Crone Box', 'Delhi', '5', '1', 'testing', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(391, 'Epabx', 1, 'Guest Bath-Room Handsets', 1, 'Tata', '21', 'Delhi', '4', '2', 'DTPN0012 DOLPHY', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(392, 'Epabx', 1, 'Office Phone', 1, 'Tata', '10 Channel', 'Delhi', '9', '1', 'As per HOD', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(393, 'Epabx', 1, 'Extenssion List And Programing', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '5', '3', 'testing', 1, '1', '1', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(394, 'CCTV', 2, 'Camera Installation', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '4', '2', 'testing', 1, '2', '2', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(395, 'CCTV', 2, 'Wiring', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '6', '2', 'Cp Plus / Hikvision', 1, '2', '2', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(396, 'CCTV', 2, '24 Port POE Switch', 1, 'Canon', 'As per Camera', 'Delhi', '6', '1', 'Hp/ CISCO', 1, '2', '2', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(397, 'CCTV', 2, '8 TB surveillance Hdd', 1, 'Canon', 'As per Camera', 'Delhi', '12', '2', 'Testing', 1, '2', '2', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(398, 'Sound System', 3, 'Speaker Installation', 1, 'Sony', '\"6W METAL GRILLE CEILING SPEAKER,BOSLBD0606\"', 'Delhi', '6', '2', 'Testing', 1, '3', '3', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(399, 'Sound System', 3, 'Amplifier Installation', 1, 'Sony', '\"PLENA all-in-one 180W Two Zone Mixer Amplifier\"', 'Delhi', '13', '3', 'Testing', 1, '3', '3', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(400, 'Sound System', 3, 'Pen Drive', 1, 'Hp', 'HP', 'Delhi', '22', '2', 'Testing', 1, '3', '3', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(401, 'IT HARDWARE', 4, 'Laptop', 1, 'HP', 'M8420', 'Delhi', '2', '2', 'Testing', 1, '4', '4', 15, '1', '2024-06-24 23:43:50', '2024-06-24 23:46:03'),
(402, 'IT HARDWARE', 4, 'Desktop', 1, 'Dell', 'Optiplex 3040', 'Delhi', '2', '1', 'Testing', 1, '4', '4', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(403, 'IT HARDWARE', 4, 'Online UPS For CCTV,IPBX', 1, 'Hp', 'As per Load', 'Delhi', '5', '3', 'Testing', 1, '4', '4', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(404, 'IT HARDWARE', 4, 'Pos Printers', 1, 'Hp', 'As per Load', 'Delhi', '5', NULL, 'Testing', 1, '4', '4', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(405, 'Networking', 5, 'Network Switches 24ports', 1, 'HP', 'Hp/CISCO', 'Delhi', '6', '2', 'Testing', 1, '5', '5', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(406, 'Networking', 5, 'Patch Chords', 1, 'D-link', 'D-link', 'Delhi', '5', '2', 'Testing', 1, '5', '5', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(407, 'Networking', 5, 'Io Point Termination On Each Floor & Office', 1, 'D-link', 'D-link', 'Delhi', '3', '1', 'Testing', 1, '5', '5', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(408, 'Software', 6, 'Anti Virus Software As Per user Quick Heal', 1, 'Quick Heal', 'As per System', 'Delhi', '5', '2', 'Testing', 1, '6', '6', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(409, 'Software', 6, 'Windows & Ms Office', 1, 'Quick Heal', 'As per System', 'Delhi', '2', '2', 'Testing', 1, '6', '6', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(410, 'Broadband', 8, 'Isp For Broadband', 1, 'D-link', '100 MBPS For Backup', 'Delhi', '6', '1', 'Testing', 1, '8', '8', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(411, 'Attendance Systen', 9, 'Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'Wi-FI,Fingerprint,RFID,Face', 1, '9', '9', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(412, 'Cable TV', 10, 'connection in all rooms', 1, 'Airtel Dish TV', 'Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(413, 'PA System', 11, 'Mic Amplifire', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '6', '3', 'Testing', 1, '11', '11', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(414, 'E-Mail For All Department', 12, 'G-suite Cygnett Email I\'d as per user', 1, 'Gmail', 'As per User', 'Delhi', '6', '2', 'Testing', 1, '12', '12', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(415, 'Computer Security', 13, 'Firwall', 1, 'Cisco / SoPhos', 'Cisco / SoPhos', 'Delhi', '3', '2', 'Testing', 1, '13', '13', 15, '1', '2024-06-24 23:43:51', '2024-06-24 23:46:03'),
(416, 'Epabx', 1, 'IPBX', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '2', '2', 'testing', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(417, 'Epabx', 1, 'Epabx Main 400 Pair Mdf Installation', 1, 'Crone Box', 'Crone Box', 'Delhi', '8', '1', 'testing', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(418, 'Epabx', 1, 'Epabx Extension Testing At Each Floor', 1, 'Crone Box', 'Crone Box', 'Delhi', '5', '1', 'testing', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(419, 'Epabx', 1, 'Guest Bath-Room Handsets', 1, 'Tata', '21', 'Delhi', '4', '2', 'DTPN0012 DOLPHY', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(420, 'Epabx', 1, 'Office Phone', 1, 'Tata', '10 Channel', 'Delhi', '9', '1', 'As per HOD', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(421, 'Epabx', 1, 'Extenssion List And Programing', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '5', '3', 'testing', 1, '1', '1', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(422, 'CCTV', 2, 'Camera Installation', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '4', '2', 'testing', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(423, 'CCTV', 2, 'Camera', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '5', '3', 'Testing', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(424, 'CCTV', 2, 'NVR Encoder Installation', 1, 'Canon', 'NVR', 'Delhi', '7', '2', 'Testing', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(425, 'CCTV', 2, 'Wiring', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '6', '2', 'Cp Plus / Hikvision', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(426, 'CCTV', 2, 'Camera Display Screen', 1, 'Canon', 'As per Camera', 'Delhi', '12', '3', 'Hp/ CISCO', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(427, 'CCTV', 2, '24 Port POE Switch', 1, 'Canon', 'As per Camera', 'Delhi', '6', '1', 'Hp/ CISCO', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(428, 'CCTV', 2, '8 TB surveillance Hdd', 1, 'Canon', 'As per Camera', 'Delhi', '12', '2', 'Testing', 1, '2', '2', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(429, 'Sound System', 3, 'Speaker Installation', 1, 'Sony', '\"6W METAL GRILLE CEILING SPEAKER,BOSLBD0606\"', 'Delhi', '6', '2', 'Testing', 1, '3', '3', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(430, 'Sound System', 3, 'Amplifier Installation', 1, 'Sony', '\"PLENA all-in-one 180W Two Zone Mixer Amplifier\"', 'Delhi', '13', '1', 'Testing', 1, '3', '3', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(431, 'Sound System', 3, 'Volume Installation', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '19', '2', 'Testing', 1, '3', '3', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(432, 'Sound System', 3, 'Pen Drive', 1, 'Hp', 'HP', 'Delhi', '22', '2', 'Testing', 1, '3', '3', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(433, 'Sound System', 3, 'Racks', 1, 'Dell', 'Cisco/Dell', 'Delhi', '5', '1', 'Testing', 1, '3', '3', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(434, 'IT HARDWARE', 4, 'Laptop', 1, 'HP', 'M8420', 'Delhi', '2', '2', 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(435, 'IT HARDWARE', 4, 'Desktop', 1, 'Dell', 'Optiplex 3040', 'Delhi', '2', '1', 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(436, 'IT HARDWARE', 4, 'Colour Printer', 1, 'Canon', 'M44TY', 'Delhi', '5', '2', 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(437, 'IT HARDWARE', 4, 'Laser Printers All In One', 1, 'HP', 'M44TY', 'delhi', '2', '1', 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(438, 'IT HARDWARE', 4, 'Online UPS For CCTV,IPBX', 1, 'Hp', 'As per Load', 'Delhi', '5', '3', 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(439, 'IT HARDWARE', 4, 'Pos Printers', 1, 'Hp', 'As per Load', 'Delhi', '5', NULL, 'Testing', 1, '4', '4', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(440, 'Networking', 5, 'Network Switches 24ports', 1, 'HP', 'Hp/CISCO', 'Delhi', '6', '2', 'Testing', 1, '5', '5', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(441, 'Networking', 5, 'Network Rack', 1, 'Cisco', 'Cisco/Dell', 'Delhi', '3', '1', 'Testing', 1, '5', '5', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(442, 'Networking', 5, 'Patch Panel', 1, 'Cisco', 'Cisco', 'Delhi', '5', '3', 'Testing', 1, '5', '5', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(443, 'Networking', 5, 'Patch Chords', 1, 'D-link', 'D-link', 'Delhi', '5', '2', 'Testing', 1, '5', '5', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(444, 'Networking', 5, 'Io Point Termination On Each Floor & Office', 1, 'D-link', 'D-link', 'Delhi', '3', '1', 'Testing', 1, '5', '5', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(445, 'Software', 6, 'Hotel Management Cloud Base Software Cygnett Cloud', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(446, 'Software', 6, 'Cygnett Cloud PMS Installtion', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '2', 'Testing', 1, '6', '6', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(447, 'Software', 6, 'Anti Virus Software As Per user Quick Heal', 1, 'Quick Heal', 'As per System', 'Delhi', '5', '2', 'Testing', 1, '6', '6', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(448, 'Software', 6, 'Windows & Ms Office', 1, 'Quick Heal', 'As per System', 'Delhi', '2', '2', 'Testing', 1, '6', '6', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(449, 'Lised Line', 7, 'Lised Line', 1, 'D-link', 'Minimum 30 MBPS', 'Delhi', '6', '2', 'Testng', 1, '7', '7', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(450, 'Lised Line', 7, 'Wi-fi Hotspot Service Provider', 1, 'D-link', 'HSIA/ 24 Online', 'Delhi', NULL, '1', 'Pms Interface & Coupon Generator', 1, '7', '7', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(451, 'Lised Line', 7, 'Wi Fi Service Provider', 1, 'D-link', 'Microtek / Airpro', 'Delhi', NULL, '1', 'Testng', 1, '7', '7', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(452, 'Broadband', 8, 'Isp For Broadband', 1, 'D-link', '100 MBPS For Backup', 'Delhi', '6', '1', 'Testing', 1, '8', '8', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(453, 'Attendance System', 9, 'Wiring For Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'E9C ESSL', 1, '9', '9', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(454, 'Attendance Systen', 9, 'Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'Wi-FI,Fingerprint,RFID,Face', 1, '9', '9', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(455, 'Cable TV', 10, 'Setuptop box', 1, 'Tata Sky /Airtel Dish TV', 'Tata Sky /Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(456, 'Cable TV', 10, 'connection in all rooms', 1, 'Airtel Dish TV', 'Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(457, 'PA System', 11, 'Mic Amplifire', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '6', '3', 'Testing', 1, '11', '11', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(458, 'PA System', 11, 'Wiring For Hooter', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '12', '2', 'Testing', 1, '11', '11', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(459, 'E-Mail For All Department', 12, 'G-suite Cygnett Email I\'d as per user', 1, 'Gmail', 'As per User', 'Delhi', '6', '2', 'Testing', 1, '12', '12', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(460, 'Computer Security', 13, 'Firwall', 1, 'Cisco / SoPhos', 'Cisco / SoPhos', 'Delhi', '3', '2', 'Testing', 1, '13', '13', 16, '1', '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(461, 'Epabx', 1, 'PRI Line Connection / SIP', 1, 'Tata', '10 Channel', 'Delhi', '6', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(462, 'Epabx', 1, 'IPBX', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '2', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(463, 'Epabx', 1, 'Epabx Main Unit Installation', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '10', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(464, 'Epabx', 1, 'Epabx Main 400 Pair Mdf Installation', 1, 'Crone Box', 'Crone Box', 'Delhi', '8', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(465, 'Epabx', 1, 'Epabx Extension Testing At Each Floor', 1, 'Crone Box', 'Crone Box', 'Delhi', '5', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(466, 'Epabx', 1, 'Digital Phones', 1, 'Tata', '6', 'Delhi', '4', '1', 'Reception-2,Gm Office,IRD,HK,MD OFFICE', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(467, 'Epabx', 1, 'Guest Room Handsets', 1, 'Tata', '22', 'Delhi', '5', '1', 'DTPN0012 DOLPHY', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(468, 'Epabx', 1, 'Guest Bath-Room Handsets', 1, 'Tata', '21', 'Delhi', '4', '1', 'DTPN0012 DOLPHY', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(469, 'Epabx', 1, 'Epabx Points', 1, 'Tata', 'Alkatel / NEC', 'Dlhi', '5', '1', 'As per HOD', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(470, 'Epabx', 1, 'Office Phone', 1, 'Tata', '10 Channel', 'Delhi', '9', '1', 'As per HOD', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(471, 'Epabx', 1, 'Extenssion List And Programing', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '5', '1', 'testing', 1, '1', '1', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(472, 'CCTV', 2, 'Camera Installation', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '4', '1', 'testing', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(473, 'CCTV', 2, 'Camera', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '5', '1', 'Testing', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(474, 'CCTV', 2, 'NVR Encoder Installation', 1, 'Canon', 'NVR', 'Delhi', '7', '1', 'Testing', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(475, 'CCTV', 2, 'Wiring', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '6', '1', 'Cp Plus / Hikvision', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(476, 'CCTV', 2, 'Camera Display Screen', 1, 'Canon', 'As per Camera', 'Delhi', '12', '1', 'Hp/ CISCO', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(477, 'CCTV', 2, '24 Port POE Switch', 1, 'Canon', 'As per Camera', 'Delhi', '6', '1', 'Hp/ CISCO', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(478, 'CCTV', 2, '8 TB surveillance Hdd', 1, 'Canon', 'As per Camera', 'Delhi', '12', '1', 'Testing', 1, '2', '2', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(479, 'Sound System', 3, 'Speaker Installation', 1, 'Sony', '\"6W METAL GRILLE CEILING SPEAKER,BOSLBD0606\"', 'Delhi', '6', '1', 'Testing', 1, '3', '3', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(480, 'Sound System', 3, 'Amplifier Installation', 1, 'Sony', '\"PLENA all-in-one 180W Two Zone Mixer Amplifier\"', 'Delhi', '13', '1', 'Testing', 1, '3', '3', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(481, 'Sound System', 3, 'Volume Installation', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '19', '1', 'Testing', 1, '3', '3', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(482, 'Sound System', 3, 'Pen Drive', 1, 'Hp', 'HP', 'Delhi', '22', '1', 'Testing', 1, '3', '3', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(483, 'Sound System', 3, 'Racks', 1, 'Dell', 'Cisco/Dell', 'Delhi', '5', '1', 'Testing', 1, '3', '3', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(484, 'IT HARDWARE', 4, 'Laptop', 1, 'HP', 'M8420', 'Delhi', '2', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(485, 'IT HARDWARE', 4, 'Desktop', 1, 'Dell', 'Optiplex 3040', 'Delhi', '2', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(486, 'IT HARDWARE', 4, 'Colour Printer', 1, 'Canon', 'M44TY', 'Delhi', '5', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(487, 'IT HARDWARE', 4, 'Laser Printers All In One', 1, 'HP', 'M44TY', 'delhi', '2', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(488, 'IT HARDWARE', 4, 'Online UPS For CCTV,IPBX', 1, 'Hp', 'As per Load', 'Delhi', '5', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(489, 'IT HARDWARE', 4, 'Pos Printers', 1, 'Hp', 'As per Load', 'Delhi', '5', '1', 'Testing', 1, '4', '4', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(490, 'Networking', 5, 'Network Switches 24ports', 1, 'HP', 'Hp/CISCO', 'Delhi', '6', '1', 'Testing', 1, '5', '5', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(491, 'Networking', 5, 'Network Rack', 1, 'Cisco', 'Cisco/Dell', 'Delhi', '3', '1', 'Testing', 1, '5', '5', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(492, 'Networking', 5, 'Patch Panel', 1, 'Cisco', 'Cisco', 'Delhi', '5', '1', 'Testing', 1, '5', '5', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(493, 'Networking', 5, 'Patch Chords', 1, 'D-link', 'D-link', 'Delhi', '5', '1', 'Testing', 1, '5', '5', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(494, 'Networking', 5, 'Io Point Termination On Each Floor & Office', 1, 'D-link', 'D-link', 'Delhi', '3', '1', 'Testing', 1, '5', '5', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(495, 'Software', 6, 'Hotel Management Cloud Base Software Cygnett Cloud', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(496, 'Software', 6, 'Cygnett Cloud PMS Installtion', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(497, 'Software', 6, 'Anti Virus Software As Per user Quick Heal', 1, 'Quick Heal', 'As per System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(498, 'Software', 6, 'Windows & Ms Office', 1, 'Quick Heal', 'As per System', 'Delhi', '2', '1', 'Testing', 1, '6', '6', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(499, 'Lised Line', 7, 'Lised Line', 1, 'D-link', 'Minimum 30 MBPS', 'Delhi', '6', '1', 'Testng', 1, '7', '7', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(500, 'Lised Line', 7, 'Wi-fi Hotspot Service Provider', 1, 'D-link', 'HSIA/ 24 Online', 'Delhi', NULL, '1', 'Pms Interface & Coupon Generator', 1, '7', '7', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(501, 'Lised Line', 7, 'Wi Fi Service Provider', 1, 'D-link', 'Microtek / Airpro', 'Delhi', NULL, '1', 'Testng', 1, '7', '7', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(502, 'Broadband', 8, 'Isp For Broadband', 1, 'D-link', '100 MBPS For Backup', 'Delhi', '6', '1', 'Testing', 1, '8', '8', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(503, 'Attendance System', 9, 'Wiring For Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'E9C ESSL', 1, '9', '9', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(504, 'Attendance Systen', 9, 'Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'Wi-FI,Fingerprint,RFID,Face', 1, '9', '9', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(505, 'Cable TV', 10, 'Setuptop box', 1, 'Tata Sky /Airtel Dish TV', 'Tata Sky /Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(506, 'Cable TV', 10, 'connection in all rooms', 1, 'Airtel Dish TV', 'Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(507, 'PA System', 11, 'Mic Amplifire', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '6', '1', 'Testing', 1, '11', '11', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(508, 'PA System', 11, 'Wiring For Hooter', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '12', '1', 'Testing', 1, '11', '11', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(509, 'E-Mail For All Department', 12, 'G-suite Cygnett Email I\'d as per user', 1, 'Gmail', 'As per User', 'Delhi', '6', '1', 'Testing', 1, '12', '12', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56'),
(510, 'Computer Security', 13, 'Firwall', 1, 'Cisco / SoPhos', 'Cisco / SoPhos', 'Delhi', '3', '1', 'Testing', 1, '13', '13', 17, '1', '2024-07-01 06:05:56', '2024-07-01 06:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `check_list_information`
--

CREATE TABLE `check_list_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `hotel_detail` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_list_information`
--

INSERT INTO `check_list_information` (`id`, `hotel_name`, `hotel_detail`, `title`, `description`, `start_date`, `start_time`, `end_date`, `end_time`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Holiday Inn New Delhi Int\'l Airport', 'New Delhi', 'Holiday Inn New Delhi Int\'l Airport', 'Holiday Inn New Delhi Int\'l Airport', '2024-06-26', NULL, '2024-07-13', NULL, 39, 1, '2024-06-24 23:43:50', '2024-06-24 23:43:50'),
(16, '10', 'New Delhi', 'testing', 'Testing', '2024-07-02', NULL, '2024-07-04', NULL, 39, 1, '2024-07-01 05:55:58', '2024-07-01 05:55:58'),
(17, 'Homegrown Hideaway', 'New Delhi', 'Welcome to Serenity Suites: Your Home Away from Home', 'Indulge in Luxury at Serenity Suites', '2024-07-03', NULL, '2024-07-05', NULL, 39, 1, '2024-07-01 06:05:56', '2024-07-01 06:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IT (Information Technology)', NULL, 1, '2024-06-19 00:50:52', '2024-06-19 00:50:52'),
(2, 'Accounts', NULL, 1, '2024-06-19 00:51:11', '2024-06-19 00:51:11'),
(3, 'HR (Human Resources)', NULL, 1, '2024-06-19 00:51:22', '2024-06-19 00:51:22'),
(4, 'FO (Front Office)', NULL, 1, '2024-06-19 00:51:30', '2024-06-19 00:51:30'),
(5, 'F & BS (Food & Beverage Service)', NULL, 1, '2024-06-19 00:51:37', '2024-06-19 00:51:37'),
(6, 'HK (House Keeping)', NULL, 1, '2024-06-19 00:51:49', '2024-06-19 00:51:49'),
(7, 'F & BP (Food and Beverage Production)', NULL, 1, '2024-06-19 00:51:57', '2024-06-19 00:51:57'),
(8, 'Engineering', NULL, 1, '2024-06-19 00:52:04', '2024-06-19 00:52:04'),
(9, 'Store Purchase', NULL, 1, '2024-06-19 00:52:11', '2024-06-19 00:52:11'),
(10, 'Security', NULL, 1, '2024-06-19 00:52:17', '2024-06-19 00:52:17'),
(11, 'Sales', NULL, 1, '2024-06-19 00:52:23', '2024-06-19 00:52:23'),
(12, 'Administration', NULL, 1, '2024-06-19 00:52:28', '2024-06-19 00:52:28'),
(13, 'Legal', NULL, 1, '2024-07-01 04:37:34', '2024-07-01 04:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `department_types`
--

CREATE TABLE `department_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `main_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `role_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `can_download` tinyint(4) DEFAULT NULL,
  `doc_file` varchar(255) DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `disk` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `folder_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Homegrown Hideaway', 'New Delhi', 44, 1, '2024-06-22 00:29:35', '2024-06-22 00:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Main Cat Testing One', 'Main Cat Testing Onesdds', 1, '2024-06-12 23:45:50', '2024-06-14 03:04:59'),
(2, 'Main Cat Testing  Two', 'Main Cat Testing Two', 1, '2024-06-12 23:46:19', '2024-06-12 23:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `master_check_lists`
--

CREATE TABLE `master_check_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `is_checked` tinyint(4) DEFAULT NULL COMMENT '0 = unchecked, 1 = checked',
  `make_model` varchar(255) DEFAULT NULL,
  `make_manufacture` varchar(255) DEFAULT NULL,
  `unit_location` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `item_status` varchar(255) DEFAULT NULL COMMENT '1 = new, 2 = processing, 3 = complete',
  `remark` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` varchar(255) DEFAULT NULL COMMENT 'group by category',
  `order` varchar(255) DEFAULT NULL COMMENT 'order number',
  `status` varchar(255) DEFAULT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_check_lists`
--

INSERT INTO `master_check_lists` (`id`, `category`, `category_id`, `item_name`, `is_checked`, `make_model`, `make_manufacture`, `unit_location`, `qty`, `item_status`, `remark`, `department_id`, `group_id`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Epabx', 1, 'PRI Line Connection / SIP', 1, 'Tata', '10 Channel', 'Delhi', '6', '1', 'testing', 1, '1', '1', '1', '2024-06-19 08:29:43', '2024-07-01 06:05:56'),
(2, 'Epabx', 1, 'IPBX', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '2', '1', 'testing', 1, '1', '1', '1', '2024-06-19 08:31:10', '2024-07-01 06:05:56'),
(3, 'Epabx', 1, 'Epabx Main Unit Installation', 1, 'Tata', 'Alkatel / NEC', 'Delhi', '10', '1', 'testing', 1, '1', '1', '1', '2024-06-19 08:32:34', '2024-07-01 06:05:56'),
(4, 'Epabx', 1, 'Epabx Main 400 Pair Mdf Installation', 1, 'Crone Box', 'Crone Box', 'Delhi', '8', '1', 'testing', 1, '1', '1', '1', '2024-06-19 11:59:23', '2024-07-01 06:05:56'),
(5, 'Epabx', 1, 'Epabx Extension Testing At Each Floor', 1, 'Crone Box', 'Crone Box', 'Delhi', '5', '1', 'testing', 1, '1', '1', '1', '2024-06-19 11:59:43', '2024-07-01 06:05:56'),
(6, 'Epabx', 1, 'Digital Phones', 1, 'Tata', '6', 'Delhi', '4', '1', 'Reception-2,Gm Office,IRD,HK,MD OFFICE', 1, '1', '1', '1', '2024-06-19 11:59:57', '2024-07-01 06:05:56'),
(7, 'Epabx', 1, 'Guest Room Handsets', 1, 'Tata', '22', 'Delhi', '5', '1', 'DTPN0012 DOLPHY', 1, '1', '1', '1', '2024-06-19 12:00:13', '2024-07-01 06:05:56'),
(8, 'Epabx', 1, 'Guest Bath-Room Handsets', 1, 'Tata', '21', 'Delhi', '4', '1', 'DTPN0012 DOLPHY', 1, '1', '1', '1', '2024-06-19 12:00:28', '2024-07-01 06:05:56'),
(9, 'Epabx', 1, 'Epabx Points', 1, 'Tata', 'Alkatel / NEC', 'Dlhi', '5', '1', 'As per HOD', 1, '1', '1', '1', '2024-06-19 12:00:42', '2024-07-01 06:05:56'),
(10, 'Epabx', 1, 'Office Phone', 1, 'Tata', '10 Channel', 'Delhi', '9', '1', 'As per HOD', 1, '1', '1', '1', '2024-06-19 12:01:00', '2024-07-01 06:05:56'),
(11, 'Epabx', 1, 'Extenssion List And Programing', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '5', '1', 'testing', 1, '1', '1', '1', '2024-06-19 12:01:19', '2024-07-01 06:05:56'),
(12, 'CCTV', 2, 'Camera Installation', 1, 'Canon', 'Ip camera Minimum 2,4,5Mega Pixel', 'Delhi', '4', '1', 'testing', 1, '2', '2', '1', '2024-06-19 12:15:55', '2024-07-01 06:05:56'),
(13, 'CCTV', 2, 'Camera', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '5', '1', 'Testing', 1, '2', '2', '1', '2024-06-19 12:16:54', '2024-07-01 06:05:56'),
(14, 'CCTV', 2, 'NVR Encoder Installation', 1, 'Canon', 'NVR', 'Delhi', '7', '1', 'Testing', 1, '2', '2', '1', '2024-06-19 12:17:12', '2024-07-01 06:05:56'),
(15, 'CCTV', 2, 'Wiring', 1, 'Canon', 'One 4 MP camera with Recoding system In Reception', 'Delhi', '6', '1', 'Cp Plus / Hikvision', 1, '2', '2', '1', '2024-06-19 12:17:29', '2024-07-01 06:05:56'),
(16, 'CCTV', 2, 'Camera Display Screen', 1, 'Canon', 'As per Camera', 'Delhi', '12', '1', 'Hp/ CISCO', 1, '2', '2', '1', '2024-06-19 12:17:44', '2024-07-01 06:05:56'),
(17, 'CCTV', 2, '24 Port POE Switch', 1, 'Canon', 'As per Camera', 'Delhi', '6', '1', 'Hp/ CISCO', 1, '2', '2', '1', '2024-06-19 12:17:59', '2024-07-01 06:05:56'),
(18, 'CCTV', 2, '8 TB surveillance Hdd', 1, 'Canon', 'As per Camera', 'Delhi', '12', '1', 'Testing', 1, '2', '2', '1', '2024-06-19 12:18:13', '2024-07-01 06:05:56'),
(19, 'Sound System', 3, 'Speaker Installation', 1, 'Sony', '\"6W METAL GRILLE CEILING SPEAKER,BOSLBD0606\"', 'Delhi', '6', '1', 'Testing', 1, '3', '3', '1', '2024-06-19 12:20:01', '2024-07-01 06:05:56'),
(20, 'Sound System', 3, 'Amplifier Installation', 1, 'Sony', '\"PLENA all-in-one 180W Two Zone Mixer Amplifier\"', 'Delhi', '13', '1', 'Testing', 1, '3', '3', '1', '2024-06-19 12:21:17', '2024-07-01 06:05:56'),
(21, 'Sound System', 3, 'Volume Installation', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '19', '1', 'Testing', 1, '3', '3', '1', '2024-06-19 12:21:33', '2024-07-01 06:05:56'),
(22, 'Sound System', 3, 'Pen Drive', 1, 'Hp', 'HP', 'Delhi', '22', '1', 'Testing', 1, '3', '3', '1', '2024-06-19 12:21:51', '2024-07-01 06:05:56'),
(23, 'Sound System', 3, 'Racks', 1, 'Dell', 'Cisco/Dell', 'Delhi', '5', '1', 'Testing', 1, '3', '3', '1', '2024-06-19 12:22:05', '2024-07-01 06:05:56'),
(24, 'IT HARDWARE', 4, 'Laptop', 1, 'HP', 'M8420', 'Delhi', '2', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:23:46', '2024-07-01 06:05:56'),
(25, 'IT HARDWARE', 4, 'Desktop', 1, 'Dell', 'Optiplex 3040', 'Delhi', '2', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:24:36', '2024-07-01 06:05:56'),
(26, 'IT HARDWARE', 4, 'Colour Printer', 1, 'Canon', 'M44TY', 'Delhi', '5', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:24:55', '2024-07-01 06:05:56'),
(27, 'IT HARDWARE', 4, 'Laser Printers All In One', 1, 'HP', 'M44TY', 'delhi', '2', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:25:12', '2024-07-01 06:05:56'),
(28, 'IT HARDWARE', 4, 'Online UPS For CCTV,IPBX', 1, 'Hp', 'As per Load', 'Delhi', '5', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:25:30', '2024-07-01 06:05:56'),
(29, 'IT HARDWARE', 4, 'Pos Printers', 1, 'Hp', 'As per Load', 'Delhi', '5', '1', 'Testing', 1, '4', '4', '1', '2024-06-19 12:25:44', '2024-07-01 06:05:56'),
(30, 'Networking', 5, 'Network Switches 24ports\n', 1, 'HP', 'Hp/CISCO', 'Delhi', '6', '1', 'Testing', 1, '5', '5', '1', '2024-06-19 12:27:15', '2024-07-01 06:05:56'),
(31, 'Networking', 5, 'Network Rack', 1, 'Cisco', 'Cisco/Dell', 'Delhi', '3', '1', 'Testing', 1, '5', '5', '1', '2024-06-19 12:28:12', '2024-07-01 06:05:56'),
(32, 'Networking', 5, 'Patch Panel', 1, 'Cisco', 'Cisco', 'Delhi', '5', '1', 'Testing', 1, '5', '5', '1', '2024-06-19 12:28:27', '2024-07-01 06:05:56'),
(33, 'Networking', 5, 'Patch Chords', 1, 'D-link', 'D-link', 'Delhi', '5', '1', 'Testing', 1, '5', '5', '1', '2024-06-19 12:28:41', '2024-07-01 06:05:56'),
(34, 'Networking', 5, 'Io Point Termination On Each Floor & Office', 1, 'D-link', 'D-link', 'Delhi', '3', '1', 'Testing', 1, '5', '5', '1', '2024-06-19 12:28:56', '2024-07-01 06:05:56'),
(35, 'Software', 6, 'Hotel Management Cloud Base Software Cygnett Cloud', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', '1', '2024-06-19 12:31:55', '2024-07-01 06:05:56'),
(36, 'Software', 6, 'Cygnett Cloud PMS Installtion', 1, 'Hotels System', 'Hotels System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', '1', '2024-06-19 12:32:30', '2024-07-01 06:05:56'),
(37, 'Software', 6, 'Anti Virus Software As Per user Quick Heal', 1, 'Quick Heal', 'As per System', 'Delhi', '5', '1', 'Testing', 1, '6', '6', '1', '2024-06-19 12:32:47', '2024-07-01 06:05:56'),
(38, 'Software', 6, 'Windows & Ms Office', 1, 'Quick Heal', 'As per System', 'Delhi', '2', '1', 'Testing', 1, '6', '6', '1', '2024-06-19 12:33:00', '2024-07-01 06:05:56'),
(39, 'Lised Line\r\n', 7, 'Lised Line', 1, 'D-link', 'Minimum 30 MBPS', 'Delhi', '6', '1', 'Testng', 1, '7', '7', '1', '2024-06-19 12:34:46', '2024-07-01 06:05:56'),
(40, 'Lised Line\n', 7, 'Wi-fi Hotspot Service Provider', 1, 'D-link', 'HSIA/ 24 Online', 'Delhi', NULL, '1', 'Pms Interface & Coupon Generator', 1, '7', '7', '1', '2024-06-19 12:35:27', '2024-07-01 06:05:56'),
(41, 'Lised Line\n', 7, 'Wi Fi Service Provider', 1, 'D-link', 'Microtek / Airpro', 'Delhi', NULL, '1', 'Testng', 1, '7', '7', '1', '2024-06-19 12:35:46', '2024-07-01 06:05:56'),
(42, 'Broadband', 8, 'Isp For Broadband', 1, 'D-link', '100 MBPS For Backup', 'Delhi', '6', '1', 'Testing', 1, '8', '8', '1', '2024-06-19 12:36:40', '2024-07-01 06:05:56'),
(43, 'Attendance System', 9, 'Wiring For Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'E9C ESSL', 1, '9', '9', '1', '2024-06-19 12:37:25', '2024-07-01 06:05:56'),
(44, 'Attendance Systen', 9, 'Attendance System', 1, 'E9C ESSL', 'E9C ESSL', 'Delhi', '6', '1', 'Wi-FI,Fingerprint,RFID,Face', 1, '9', '9', '1', '2024-06-19 12:38:14', '2024-07-01 06:05:56'),
(45, 'Cable TV', 10, 'Setuptop box', 1, 'Tata Sky /Airtel Dish TV', 'Tata Sky /Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', '1', '2024-06-19 12:39:28', '2024-07-01 06:05:56'),
(46, 'Cable TV', 10, 'connection in all rooms', 1, 'Airtel Dish TV', 'Airtel Dish TV', 'Delhi', '4', '1', 'Testing', 1, '10', '10', '1', '2024-06-19 12:40:57', '2024-07-01 06:05:56'),
(47, 'PA System', 11, 'Mic Amplifire', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '6', '1', 'Testing', 1, '11', '11', '1', '2024-06-19 12:42:59', '2024-07-01 06:05:56'),
(48, 'PA System', 11, 'Wiring For Hooter', 1, 'BOSCH', 'BOSCH Plena 180W 18IN with USB and 23700 FM+2 Zone', 'Delhi', '12', '1', 'Testing', 1, '11', '11', '1', NULL, '2024-07-01 06:05:56'),
(49, 'E-Mail For All Department', 12, 'G-suite Cygnett Email I\'d as per user', 1, 'Gmail', 'As per User', 'Delhi', '6', '1', 'Testing', 1, '12', '12', '1', '2024-06-19 12:44:32', '2024-07-01 06:05:56'),
(50, 'Computer Security', 13, 'Firwall', 1, 'Cisco / SoPhos', 'Cisco / SoPhos', 'Delhi', '3', '1', 'Testing', 1, '13', '13', '1', '2024-06-19 12:46:34', '2024-07-01 06:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `permission_name` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `controller_name` varchar(255) DEFAULT NULL,
  `function` varchar(255) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `display_name`, `description`, `url`, `permission_name`, `method`, `controller_name`, `function`, `route_name`, `icon`, `order`, `parent_menu_id`, `group_id`, `group_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'View', 'Dashboard', 'admin/dashboard', 'view_dashboard', 'get', 'DashboardController', 'dashboard', 'dashboard', NULL, 1, NULL, 1, 'Dashboard', 1, '2024-06-12 12:48:30', '2024-06-12 12:48:30'),
(2, 'Main Category ', 'View List', 'Main Category ', 'admin/main-category', 'view_main_category_list', 'get', 'MainCategoryController', 'index', 'backend.main_category.index', NULL, 2, NULL, 2, 'Main Category', 1, '2024-06-12 13:00:18', '2024-06-12 13:00:18'),
(3, 'Main Category Edit', 'Edit', 'Main Category Edit', 'admin/main-category/edit/{id}', 'edit_main_category', 'get', 'MainCategoryController', 'edit', 'backend.main_category.edit', NULL, 3, 2, 2, 'Main Category', 1, '2024-06-12 13:14:18', '2024-06-12 13:14:18'),
(4, 'Main Category Store', 'Store', 'Main Category Store', 'admin/main-category/store', 'store_main_category', 'post', 'MainCategoryController', 'store', 'backend.main_category.store', NULL, 4, 2, 2, 'Main Category', 1, '2024-06-12 13:16:18', '2024-06-12 13:16:18'),
(5, 'Main category Update', 'Update', 'Main category Update', 'admin/main-category/update/{id}', 'update_main_category', 'post', 'MainCategoryController', 'update', 'backend.main_category.update', NULL, 5, 2, 2, 'Main Category', 1, '2024-06-12 13:20:11', '2024-06-12 13:20:11'),
(6, 'Main Category Delete', 'Delete', 'Main Category Delete', 'admin/main-category/delete/{id}', 'delete_main_category', 'get', 'MainCategoryController', 'destroy', 'backend.main_category.delete', NULL, 6, 2, 2, 'Main Category', 1, '2024-06-12 13:21:52', '2024-06-12 13:21:52'),
(7, 'Main Category Change Status', 'Change Status', 'Main Category Change Status', 'admin/main-category/update-status', 'change_main_category_status', 'get', 'MainCategoryController', 'updateStatus', 'backend.main_category.update_status', NULL, 7, 2, 2, 'Main Category', 1, '2024-06-12 13:21:52', '2024-06-12 13:21:52'),
(8, 'Sub Category List', 'View List', 'Sub Category List', 'admin/sub-category', 'View Sub Category List', 'get', 'SubCategoryController', 'index', 'backend.sub_category.index', NULL, NULL, NULL, 3, 'Sub Category', 1, '2024-06-14 01:01:52', '2024-06-14 01:01:52'),
(9, 'Sub Category Edit', 'Edit', 'Sub Category Edit', 'admin/sub-category/edit/{id}', 'Edit Sub Category', 'get', 'SubCategoryController', 'edit', 'backend.sub_category.edit', NULL, NULL, 8, 3, 'Sub Category', 1, '2024-06-14 01:04:17', '2024-06-14 01:04:17'),
(10, 'Sub Category Store', 'Store', 'Sub Category Store', 'admin/sub-category/store', 'store_sub_category', 'post', 'SubCategoryController', 'store', 'backend.sub_category.store', NULL, NULL, 8, 3, 'Sub Category', 1, '2024-06-14 01:09:56', '2024-06-14 01:09:56'),
(11, 'Sub Category Update', 'Update', 'Sub Category Update', 'admin/sub-category/update/{id}', 'update_sub_category', 'post', 'SubCategoryController', 'update', 'backend.sub_category.update', NULL, NULL, 8, 3, 'Sub Category', 1, '2024-06-14 01:10:55', '2024-06-14 01:10:55'),
(12, 'Sub Category Delete', 'Delete', 'Sub Category Delete', 'admin/sub-category/delete', 'delete_sub_category', 'get', 'SubCategoryController', 'destroy', 'backend.sub_category.delete', NULL, NULL, 8, 3, 'Sub Category', 1, '2024-06-14 01:11:47', '2024-06-14 01:11:47'),
(13, 'Sub Category Change Status', 'Change Status', 'Sub Category Change Status', 'admin/sub-category/update-status', 'change_sub_category_status', 'get', 'SubCategoryController', 'updateStatus', 'backend.sub_category.update_status', NULL, NULL, 8, 3, 'Sub Category', 1, '2024-06-14 01:12:47', '2024-06-14 01:12:47'),
(14, 'Document List', 'View List', 'Document List', 'admin/document', 'view_document_list', 'get', NULL, NULL, 'backend.document.index', NULL, NULL, NULL, 4, 'Document', 1, '2024-06-14 01:16:23', '2024-06-14 01:16:23'),
(15, 'Add New Document', 'Add New', 'Add New Document', 'admin/document/create', 'create_document', 'get', NULL, NULL, 'backend.document.create', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:17:10', '2024-06-14 01:17:10'),
(16, 'Store Document', 'Store', 'Store new doument', 'admin/document/store', 'store_document', 'post', NULL, NULL, 'backend.document.store', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:18:02', '2024-06-14 01:18:02'),
(17, 'Edit Document', 'Edit', 'Edit Document', 'admin/document/edit/{id}', 'edit_document', 'get', NULL, NULL, 'backend.document.edit', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:18:54', '2024-06-14 01:18:54'),
(18, 'Update Document', 'Update', 'Update Document', 'admin/document/update/{id}', 'update_document', 'post', NULL, NULL, 'backend.document.update', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:19:33', '2024-06-14 01:19:33'),
(19, 'Update Document Status', 'Update Status', 'Change Document Status', 'admin/document/', 'update_document_status', 'get', NULL, NULL, 'backend.document.update_status', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:20:39', '2024-06-14 01:20:39'),
(20, 'Delete Document', 'Delete', 'Delete Document', 'admin/document/delete/{id}', 'delete_document', 'get', NULL, NULL, 'backend.document.delete', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:22:36', '2024-06-14 01:22:36'),
(21, 'View Document', 'View', 'View one document', 'admin/document/{id}', 'view_document', 'get', NULL, NULL, 'backend.document.view', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:23:20', '2024-06-14 01:23:20'),
(22, 'Comment On Document', 'Comment', 'Comment on document', 'admin/document/comment/{id}', 'comment_on_document', 'post', NULL, NULL, 'backend.document.comment', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:24:59', '2024-06-14 01:24:59'),
(23, 'Download Document', 'Download', 'Download Document', 'admin/document/download', 'download_document', 'get', NULL, NULL, 'backend.document.download', NULL, NULL, 14, 4, 'Document', 1, '2024-06-14 01:25:39', '2024-06-14 01:25:39'),
(24, 'View Hotel List', 'Hotel List', 'View Hotel List', 'admin/hotel', 'view_hotel_list', NULL, NULL, NULL, 'backend.hotel.index', NULL, NULL, NULL, 5, 'Hotel', 1, '2024-06-14 01:27:21', '2024-06-14 01:27:21'),
(25, 'Create Hotel', 'Create', 'Create Hotel', 'admin/hotel/create', 'create_hotel', NULL, NULL, NULL, 'backend.hotel.create', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:27:59', '2024-06-14 01:27:59'),
(26, 'Store Hotel', 'Store', 'Store Hotel', 'admin/hotel/store', 'store_hotel', NULL, NULL, NULL, 'backend.hotel.store', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:28:40', '2024-06-14 01:28:40'),
(27, 'Edit Hotel', 'Edit', 'Edit Hotel', 'admin/hotel/edit/{id}', 'edit_hotel', NULL, NULL, NULL, 'backend.hotel.edit', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:29:17', '2024-06-14 01:29:17'),
(28, 'Update Hotel', 'Update', 'Update Hotel', 'admin/hotel/update/{id}', 'update_hotel', NULL, NULL, NULL, 'backend.hotel.update', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:29:59', '2024-06-14 01:29:59'),
(29, 'Delete Hotel', 'Delete', 'Delete Hotel', 'admin/hotel/delete/{id}', 'delete_hotel', NULL, NULL, NULL, 'backend.hotel.delete', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:31:53', '2024-06-14 01:31:53'),
(30, 'Update Hotel Status', 'Update Status', 'Update Hotel Status', 'admin/hotel/update-status', 'update_hotel_status', NULL, NULL, NULL, 'backend.hotel.update_status', NULL, NULL, 24, 5, 'Hotel', 1, '2024-06-14 01:33:11', '2024-06-14 01:33:11'),
(31, 'View Employee List', 'View List', 'View All Employee List', 'admin/employee', 'view_employee_list', NULL, NULL, NULL, 'backend.employee.index', NULL, NULL, NULL, 6, 'Employee', 1, '2024-06-14 01:35:08', '2024-06-14 01:35:08'),
(32, 'Create Employee', 'Create', 'Create Employee', 'admin/employee/create', 'create_employee', NULL, NULL, NULL, 'backend.employee.create', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:36:10', '2024-06-14 01:36:10'),
(33, 'Store Employee', 'Store', 'Store Employee', 'admin/employee/store', 'store_employee', NULL, NULL, NULL, 'backend.employee.store', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:36:44', '2024-06-14 01:36:44'),
(34, 'Edit Employee', 'Edit', 'Edit Employee', 'admin/employee/edit/{id}', 'edit_employee', NULL, NULL, NULL, 'backend.employee.edit', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:42:53', '2024-06-14 01:42:53'),
(35, 'Update Employee', 'Update', 'Update Employee', 'admin/employee/update/{id}', 'update_employee', NULL, NULL, NULL, 'backend.employee.update', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:43:30', '2024-06-14 01:43:30'),
(36, 'Delete Employee', 'Delete', 'Delete Employee', 'admin/employee/delete/{id}', 'delete_employee', NULL, NULL, NULL, 'backend.employee.delete', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:44:32', '2024-06-14 01:44:32'),
(37, 'Update Employee Status', 'Update Status', 'Update Employee Status', 'admin/employee/update-status', 'update_employee_status', NULL, NULL, NULL, 'backend.employee.update_status', NULL, NULL, 31, 6, 'Employee', 1, '2024-06-14 01:48:30', '2024-06-14 01:48:30'),
(38, 'View Department List', 'View List', 'View All Department List', 'admin/department', 'view_department_list', NULL, NULL, NULL, 'backend.department.index', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:27:13', '2024-06-14 02:27:13'),
(39, 'Create Department', 'Create', 'Create Department', 'admin/department/create', 'create_department', NULL, NULL, NULL, 'backend.department.create', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:28:29', '2024-06-14 02:28:29'),
(40, 'Store Department', 'Store', 'Store Department', 'admin/department/store', 'store_department', NULL, NULL, NULL, 'backend.department.store', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:31:49', '2024-06-14 02:31:49'),
(41, 'Edit Department', 'Edit', 'Edit Department', 'admin/department/edit/{id}', 'edit_department', NULL, NULL, NULL, 'backend.department.edit', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:32:46', '2024-06-14 02:32:46'),
(42, 'Update Department', 'Update', 'Update Department', 'admin/department/update/{id}', 'update_department', NULL, NULL, NULL, 'backend.department.update', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:33:31', '2024-06-14 02:33:31'),
(43, 'Delete Department', 'Delete', 'Delete Department', 'admin/department/delete/{id}', 'delete_department', NULL, NULL, NULL, 'backend.department.delete', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:34:18', '2024-06-14 02:34:18'),
(44, 'Update Department Status', 'Update Status', 'Update Department Status', 'admin/department/update-status', 'update_department_status', NULL, NULL, NULL, 'backend.department.update_status', NULL, NULL, NULL, 7, 'Department', 1, '2024-06-14 02:35:13', '2024-06-14 02:35:13'),
(45, 'View Head Department', 'View List', 'Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 07:00:14', '2024-06-22 07:00:20'),
(46, 'Create Head Department', 'Create', 'Create Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 06:59:19', '2024-06-22 06:59:19'),
(47, 'Store Head Department', 'Store', 'Store Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 01:31:04', '2024-06-22 01:31:04'),
(48, 'Edit Head Department', 'Edit', 'Edit Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 01:31:17', '2024-06-22 01:31:17'),
(49, 'Update Head Department', 'Update', 'Update Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 01:31:24', '2024-06-22 01:31:24'),
(50, 'Delete Head Department', 'Delete', 'Delete Head Department', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 01:31:36', '2024-06-22 01:31:36'),
(51, 'Update Head Department Status', 'Update Status', 'Update Head Department Status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Head Department', 1, '2024-06-22 01:32:03', '2024-06-22 01:32:03'),
(52, 'View Master Check List', 'View List', 'View Master Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 'Master Check List', 1, '2024-06-22 01:34:03', '2024-06-22 01:34:03'),
(53, 'Edit Master Check List', 'Edit', 'Edit Master Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 'Master Check List', 1, '2024-06-22 01:39:17', '2024-06-22 01:39:17'),
(54, 'Assign Master Check List', 'Assign', 'Assign Master Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 'Master Check List', 1, '2024-06-22 01:39:27', '2024-06-22 01:39:27'),
(55, 'View Assigned Check List', 'View List', 'View Assigned Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'Assigned Check List', 1, '2024-06-22 01:46:34', '2024-06-22 01:46:34'),
(56, 'Edit Assigned Check List', 'Edit', 'Edit Assigned Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'Assigned Check List', 1, '2024-06-22 01:47:58', '2024-06-22 01:47:58'),
(57, 'Update Assigned Check List', 'Update', 'Update Assigned Check List', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'Assigned Check List', 1, '2024-06-22 01:48:11', '2024-06-22 01:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_29_045621_create_permission_tables', 2),
(7, '2024_06_06_072409_add_column_in_users', 3),
(8, '2024_06_08_045434_create_main_categories_table', 4),
(9, '2024_06_08_100436_create_sub_categories_table', 5),
(11, '2024_06_11_061646_create_role_types_table', 7),
(12, '2024_06_12_062334_add_column_in_users', 8),
(13, '2024_06_12_073852_add_column_in_users', 9),
(14, '2024_06_12_082151_create_hotels_table', 10),
(15, '2024_06_12_110111_create_documents_table', 11),
(16, '2024_06_12_123242_create_menus_table', 12),
(17, '2024_06_12_130519_add_column_in_menus', 13),
(19, '2024_06_13_052326_add_column_in_menus', 14),
(20, '2024_06_13_053759_create_user_permissions_table', 15),
(21, '2024_06_13_115449_remove_column_from_users', 16),
(22, '2024_06_15_052919_addd_column_in_menus', 17),
(23, '2024_06_18_074834_create_departments_table', 18),
(24, '2024_06_19_063002_add_column_in_users', 19),
(25, '2024_06_19_080823_create_master_check_lists_table', 20),
(26, '2024_06_19_082700_add_column_in_master_check_lists', 21),
(27, '2024_06_20_122221_create_check_list_information_table', 22),
(28, '2024_06_20_124841_create_assigned_check_lists_table', 23),
(29, '2024_06_21_070513_add_column_in_check_list_information', 24),
(30, '2024_07_24_110950_create_folders_table', 25),
(31, '2024_07_31_070011_create_department_types_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'view roll', 'web', '2024-05-29 01:50:45', '2024-05-29 01:50:45'),
(3, 'create roll', 'web', '2024-05-29 01:51:23', '2024-05-29 01:51:23'),
(4, 'edit roll', 'web', '2024-05-29 01:51:26', '2024-05-29 01:51:26'),
(5, 'delete roll', 'web', '2024-05-29 01:51:31', '2024-05-29 01:51:31'),
(6, 'view permission', 'web', '2024-05-29 01:51:37', '2024-05-29 01:51:37'),
(7, 'create permission', 'web', '2024-05-29 01:51:41', '2024-05-29 01:51:41'),
(8, 'edit permission', 'web', '2024-05-29 01:51:49', '2024-05-29 01:51:49'),
(9, 'delete permission', 'web', '2024-05-29 01:51:54', '2024-05-29 01:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'super admin', 'web', '2024-05-29 01:16:36', '2024-05-29 01:16:36'),
(3, 'admin', 'web', '2024-05-29 01:16:51', '2024-05-29 01:16:51'),
(4, 'user', 'web', '2024-05-29 01:16:55', '2024-05-29 01:16:55'),
(5, 'staff', 'web', '2024-05-29 01:16:58', '2024-05-29 01:16:58'),
(6, 'manager', 'web', '2024-05-29 01:17:01', '2024-05-29 01:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 2),
(2, 3),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(6, 3),
(7, 2),
(8, 2),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role_types`
--

CREATE TABLE `role_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_types`
--

INSERT INTO `role_types` (`id`, `name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, 1, '2024-06-11 07:29:33', '2024-06-12 05:20:55'),
(2, 'Head Department', NULL, 1, '2024-06-11 07:30:00', '2024-06-11 07:30:00'),
(3, 'Hotel', NULL, 1, '2024-06-19 06:16:42', '2024-06-19 06:16:42'),
(4, 'Hotel Department', NULL, 1, '2024-06-19 06:17:05', '2024-06-19 06:17:05'),
(5, 'Manager', NULL, 1, '2024-06-19 06:17:20', '2024-06-19 06:17:20'),
(6, 'Team Leader', NULL, 1, '2024-06-19 06:17:39', '2024-06-19 06:17:39'),
(7, 'Team Member', NULL, 1, '2024-06-19 06:17:58', '2024-06-19 06:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `main_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `description`, `main_category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sub cat testing one', 'Sub cat testing one', 1, 1, '2024-06-12 23:46:55', '2024-06-12 23:46:55'),
(2, 'Sub cat testing two', 'Sub cat testing two', 2, 1, '2024-06-12 23:47:21', '2024-06-12 23:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `role_type_id`, `department_id`, `created_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anil Kumar', 'anil.digitaldesign@gmail.com', NULL, NULL, NULL, '$2y$10$FV2/3Q62uDD/2FHQjFkKP.o5CdZlesWC1bkG1KoLo9fmnYMVinepy', NULL, 1, NULL, NULL, 1, '2024-06-12 23:43:22', '2024-06-12 23:43:22'),
(39, 'Akash Oberoi', 'akashoberoi@gmail.com', 9632587410, NULL, NULL, '$2y$10$.8qaIMl8dT00zmLziluuROdxGDkYLCX8y0pTHcnc.LNsKmqjDQsR6', NULL, 2, 1, 1, 1, '2024-06-19 01:12:01', '2024-06-19 01:12:01'),
(40, 'Harsh Sahni', 'harshsahni@gmail.com', 9874563210, NULL, NULL, '$2y$10$D5xkaVetibh2TAtih2qbheL.QkmzyNQV2gR/lvPKnUpVimxyrJa6W', NULL, 2, 2, 1, 1, '2024-06-19 01:38:56', '2024-06-19 01:38:56'),
(41, 'Jackson', 'jackson@gmail.com', 9988556633, NULL, NULL, '$2y$10$593gpQSbwFmPswqlfHhNtOGx3JFCufOTdnxJfRnwE/B.lNKxT7v5K', NULL, 2, 3, 1, 1, '2024-06-19 01:42:02', '2024-06-19 01:42:02'),
(42, 'Daniel', 'daniel@gmail.com', 8566554454, NULL, NULL, '$2y$10$fTYykpTtga/pm6TsW/2EUO0s3anEiwAolwMfQQQQyJxLv9.P6AO4C', NULL, 2, 4, 1, 1, '2024-06-19 01:43:23', '2024-06-19 01:43:23'),
(44, 'Homegrown Hideaway', 'homegrownhideaway@gmail.com', 9898989898, NULL, NULL, '$2y$10$Ku6eYhlQ75NZy9As/nufB.G8b7QpJN622fUkLkzK2ljJDt/ZebJf.', NULL, 3, 39, 1, 1, '2024-06-22 00:29:35', '2024-06-22 00:29:35'),
(45, 'Freddie', 'freddie@gmail.com', 9832145214, NULL, NULL, '$2y$10$Ynv2qFqMFpR57PbOaRa.Q.GBMBcYiZwGZfDGMPCytZQPA0A0ZA2bC', NULL, 2, 5, 1, 1, '2024-06-22 01:02:44', '2024-06-22 01:02:44'),
(46, 'Shashank shekhar', 'shekhar.wts@gmail.com', 9525378530, NULL, NULL, '$2y$10$d/8wUxWxeDbiC8xhr6ebFO4w.GDK7pPT3eDeNKOXlxKyrWX7xIaw6', NULL, 2, 13, 1, 1, '2024-07-01 04:41:19', '2024-07-01 04:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `menu_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(264, 1, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(265, 2, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(266, 3, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(267, 4, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(268, 5, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(269, 6, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(270, 7, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(271, 8, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(272, 9, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(273, 10, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(274, 11, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(275, 12, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(276, 13, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(277, 14, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(278, 15, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(279, 16, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(280, 17, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(281, 18, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(282, 19, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(283, 20, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(284, 21, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(285, 22, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(286, 23, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(287, 24, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(288, 25, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(289, 26, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(290, 27, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(291, 28, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(292, 29, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(293, 30, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(294, 31, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(295, 32, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(296, 33, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(297, 34, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(298, 35, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(299, 36, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(300, 37, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(301, 38, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(302, 39, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(303, 40, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(304, 41, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(305, 42, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(306, 43, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(307, 44, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(308, 45, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(309, 46, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(310, 47, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(311, 48, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(312, 49, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(313, 50, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(314, 51, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(315, 52, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(316, 53, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(317, 54, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(318, 55, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(319, 56, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(320, 57, 1, 1, '2024-06-22 02:00:32', '2024-06-22 02:00:32'),
(322, 1, 39, 1, '2024-06-24 23:18:35', '2024-06-24 23:18:35'),
(323, 55, 39, 1, '2024-06-24 23:18:35', '2024-06-24 23:18:35'),
(324, 56, 39, 1, '2024-06-24 23:18:35', '2024-06-24 23:18:35'),
(325, 57, 39, 1, '2024-06-24 23:18:35', '2024-06-24 23:18:35'),
(338, 1, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(339, 24, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(340, 25, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(341, 26, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(342, 27, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(343, 28, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(344, 29, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55'),
(345, 30, 46, 1, '2024-07-01 04:41:55', '2024-07-01 04:41:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_check_lists`
--
ALTER TABLE `assigned_check_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_list_information`
--
ALTER TABLE `check_list_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_types`
--
ALTER TABLE `department_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_check_lists`
--
ALTER TABLE `master_check_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_types`
--
ALTER TABLE `role_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_check_lists`
--
ALTER TABLE `assigned_check_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT for table `check_list_information`
--
ALTER TABLE `check_list_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `department_types`
--
ALTER TABLE `department_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_check_lists`
--
ALTER TABLE `master_check_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_types`
--
ALTER TABLE `role_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
