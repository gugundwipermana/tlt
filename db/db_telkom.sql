-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 03:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `telkom_contact`
--

CREATE TABLE IF NOT EXISTS `telkom_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `send_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `telkom_contact`
--

INSERT INTO `telkom_contact` (`id`, `name`, `email`, `phone`, `message`, `send_date`) VALUES
(1, 'rizal', 'rizal@psiinformatika.com', '081234567890', 'Ehhhhm ...\r\nyaa gitu deh', '0000-00-00 00:00:00'),
(2, 'masih rizala', 'rizal@psiinformatika.com', '081234567890', 'masih ehhhm\r\nok !...', '2016-03-21 11:48:40'),
(3, 'gugun', 'gugun@gmail.com', '081234567890', 'okey bray', '2016-03-24 10:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `telkom_contents`
--

CREATE TABLE IF NOT EXISTS `telkom_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_by` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `content_name` varchar(150) NOT NULL,
  `content_parent` int(11) DEFAULT NULL,
  `content_level` int(11) NOT NULL,
  `content_code` varchar(250) NOT NULL,
  `content_detail` tinyint(4) NOT NULL,
  `content_description_1` text NOT NULL,
  `content_description_2` text,
  `content_description_3` text,
  `content_description_4` text,
  `content_description_5` text,
  `content_description_1_id` text,
  `content_description_2_id` text,
  `content_description_3_id` text,
  `content_description_4_id` text,
  `content_description_5_id` text,
  `content_keyword` varchar(150) NOT NULL,
  `content_date` date DEFAULT NULL,
  `content_end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `telkom_contents`
--

INSERT INTO `telkom_contents` (`id`, `cu_by`, `created`, `updated`, `content_name`, `content_parent`, `content_level`, `content_code`, `content_detail`, `content_description_1`, `content_description_2`, `content_description_3`, `content_description_4`, `content_description_5`, `content_description_1_id`, `content_description_2_id`, `content_description_3_id`, `content_description_4_id`, `content_description_5_id`, `content_keyword`, `content_date`, `content_end_date`) VALUES
(1, 'admin', '2016-03-04 16:25:32', '2016-03-24 11:51:05', 'home', NULL, 0, '', 0, '<p>a New Icon Rising</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>a Masterpiece</p>\r\n\r\n<p>from Telkom Group</p>\r\n', '<p>Iconic</p>\r\n\r\n<p>Prestigious Landmark</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(2, 'admin', '2016-03-04 16:29:33', '2016-03-24 11:02:16', 'home', NULL, 0, '', 0, '<p>Integrated</p>\r\n\r\n<p>Complex</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(3, 'admin', '2016-03-07 11:22:13', '2016-03-24 11:02:27', 'home', NULL, 0, '', 0, '<p>Secure and</p>\r\n\r\n<p>Hi-Tech Complex</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(4, 'admin', '2016-03-08 10:56:07', '2016-03-23 13:48:43', 'building', NULL, 0, '', 0, 'BUILDINGS', '<p>Discover Jakarta&rsquo;s Best New<br />\r\nBusiness Address</p>\r\n', '<p>Introducing Telkom Landmark Tower, an exciting new working space on the edge of the CBD. This modern grade A office is brought to you by Telkom Group, Indonesia&rsquo;s leading telecommunications provider which in 2013 made the Forbes Global 2000, a list of the 2000 best-performing public companies in the world.</p>\r\n\r\n<p>Anchored by Telkom Group subsidiaries, Telkom Landmark Tower is designed to be a high-quality office environment equipped with innovative ICT (Information-Communication-Technology) facilities. A proper address for world-class businesses ready to advance their goals.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(5, 'admin', '2016-03-08 13:26:37', '2016-03-28 15:33:49', 'about', 4, 0, '', 0, 'ABOUT US', '<p>Telkom Landmark Tower<br />\r\na New Icon of Indonesia</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<h4><strong>Vision</strong></h4>\r\n\r\n<p>To become a leading property development company in indonesia who owns Telkom Landmark Tower as the best developed and managed landmark office building in Indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Mission</strong></h4>\r\n\r\n<ol>\r\n	<li>To provide a TIMES oriented office building for Telkom Group head quarters</li>\r\n	<li>To provide an international standard Premium Grade A and Gold Rated Certified Green Office Building Council Indonesia</li>\r\n	<li>To be the best managed property company</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Objectives</strong></h4>\r\n\r\n<ol>\r\n	<li>To complete Telkom Landmark Tower development, ready for operation as the Committed Budget, Quality and Schedule</li>\r\n	<li>To provide the best managed landmark office building in Indonesia</li>\r\n</ol>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(6, 'admin', '2016-03-09 16:02:49', '2016-03-14 13:38:25', 'bod', 5, 0, '', 0, 'Lorem Ipsum', 'Komisaris', NULL, NULL, NULL, 'Lorem Ipsum', NULL, NULL, NULL, NULL, '', NULL, NULL),
(7, 'admin', '2016-03-09 17:26:10', '2016-03-14 13:39:15', 'bod', 5, 0, '', 0, 'Lorem Ipsum', 'Direktur Utama', NULL, NULL, NULL, 'Lorem Ipsum', NULL, NULL, NULL, NULL, '', NULL, NULL),
(8, 'admin', '2016-03-10 10:17:47', '2016-03-14 13:41:30', 'award', 4, 0, '', 0, 'AWARDS & CERTIFICATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(9, 'admin', '2016-03-10 13:59:41', '2016-03-23 09:55:06', 'awards', 8, 0, '', 0, 'MIPIM ASIA', '<p>The MIPIM Asia Awards recognize the property industry&rsquo;s best and brightest in Asia Pacific, rewarding innovation and achievement in 11 categories with more than 150 candidates each year.</p>\r\n\r\n<p>PT Telkom Landmark Tower has won category The Best Futura Project, from MIPIM Asia Award 2015.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(10, 'admin', '2016-03-10 14:41:41', '2016-03-23 09:54:39', 'awards', 8, 0, '', 0, 'GBCI', '<p>GBCI / Green Building Council Indonesia is a non-profit and independent institution that is committed to the community education in applying environmental practices and facilitate the transformation of the global sustainable building industry. </p>\r\n                                    <p>PT Telkom Landmark Tower has won Platinum Design Recognition from GBCI in 2015.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(11, 'admin', '2016-03-10 16:39:55', '2016-03-14 13:45:00', 'buildingspec', 4, 0, '', 0, 'BUILDING SPECIFICATIONS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(12, 'admin', '2016-03-10 19:02:58', '2016-03-10 19:21:02', 'specification', 11, 0, '', 0, 'TOTAL BUILDING SIZE', '<p>Tower 2 - 69,000 sqm semigrossx</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(13, 'admin', '2016-03-10 20:05:34', '2016-03-14 13:50:04', 'project_team', 4, 0, '', 0, 'PROJECT TEAMS', 'Telkom Landmark Tower', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(14, 'admin', '2016-03-11 10:26:04', '2016-03-14 13:53:17', 'team', 13, 0, '', 0, 'PRINCIPAL ARCHITECT', 'Woods Bagot (San Fransisco - USA)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(15, 'admin', '2016-03-11 11:35:02', '2016-03-23 13:49:48', 'location', NULL, 0, '', 0, 'LOCATION', '<p>Strategically Positioned<br />\r\non Jl. Jend. Gatot Subroto</p>\r\n', 'PRIME CBD LOCATION WITH MULTIPLE ACCESS TO IMPORTANT BUSINESS AREAS', '<p>Strategically positioned on the main thoroughfare of Jl. Jend Gatot Subroto in the Central Business District, Telkom Landmark Tower has direct access to the Sudirman Central Business District (SCBD) area and the Semanggi interchange which is easily accessed from multiple directions and toll roads.</p>\r\n', NULL, NULL, '<p>Strategically Positioned<br />\r\non Jl. Jend. Gatot Subroto</p>\r\n', 'PRIME CBD LOCATION WITH MULTIPLE ACCESS TO IMPORTANT BUSINESS AREAS', '<p>Strategically positioned on the main thoroughfare of Jl. Jend Gatot Subroto in the Central Business District, Telkom Landmark Tower has direct access to the Sudirman Central Business District (SCBD) area and the Semanggi interchange which is easily accessed from multiple directions and toll roads.</p>\r\n', NULL, '', NULL, NULL),
(16, 'admin', '2016-03-11 14:15:50', '2016-03-23 13:50:18', 'floorplan', NULL, 0, '', 0, 'FLOOR PLAN', '<p>Flexible &amp; Efficient<br />\r\nColumn-Free<br />\r\nFloorplan</p>\r\n', '<p>Each floor gives slightly different experience due to the dynamics twisting building design. Tenants enjoy a choice of multiple zones and layout configurations thanks to the flexible and efficient column-free floor plan. Columns are located in the building perimeter, leaving the center open. Most working areas enjoy plenty of daylight during working hours, while the generous 2.8m floor-to-ceiling height enhances the feeling of spaciousness.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(17, 'admin', '2016-03-11 15:50:34', '2016-03-23 16:56:11', 'zone_floorplan', 16, 0, '', 0, 'High Zone', 'FLOORPLAN', '<h2>High Zone<br />\r\nof Telkom Landmark<br />\r\nTower</h2>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(52, 'admin', '2016-03-17 13:50:30', '2016-03-23 10:06:36', 'zone_floorplan', 16, 0, '', 0, 'Low Zone', '\nFLOORPLAN', '<h2>Low Zone<br />\nof Telkom Landmark<br />\nTower</h2>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(53, 'admin', '2016-03-17 13:51:15', '2016-03-23 10:10:16', 'zone_floorplan', 16, 0, '', 0, 'Retail Area', '\nFLOORPLAN', '<h2>Retail Area<br />\nof Telkom Landmark<br />\nTower</h2>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(54, 'admin', '2016-03-17 13:51:48', '2016-03-23 10:10:28', 'zone_floorplan', 16, 0, '', 0, 'Facility', '\nFLOORPLAN', '<h2>Facility<br />\nof Telkom Landmark<br />\nTower</h2>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(55, 'admin', '2016-03-17 14:11:32', '2016-03-23 16:57:34', 'image_floorplan', 17, 0, '', 0, '<p>Floor 38<sup>th</sup>&nbsp;: 1,555 sqm semigross</p>\r\n\r\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\r\n\r\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\r\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(18, 'admin', '2016-03-13 13:01:37', '2016-03-23 11:05:12', 'facilities', NULL, 0, '', 0, ' Bicycle Parking', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(19, 'admin', '2016-03-13 13:54:24', '2016-03-28 14:46:02', 'newsevents', NULL, 0, '', 0, '<p>Topping Off Tower 2</p>\r\n', '<p>DISCORVER JAKARTA&#39;S BEST</p>\r\n\r\n<p>NEW BUSINESS ADDRESS</p>\r\n', 'NEWSEVENT', '<p>Introducing Telkom Landmark Tower, an exiting new orking space on the edge of the CDB. This modern grade 219m tail A office is brought to you by Telkom Group, Indonesia&#39;s leading telecomunications provider which in 2013 made the Forbes Global 2000, as list of the 2000 best performing public companies in the world.<br />\r\nAnchored by Telkom</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(20, 'admin', '2016-03-13 15:34:50', '2016-03-13 16:07:29', 'detail_newsevents', 19, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(21, 'admin', '2016-03-14 09:36:17', '2016-03-23 11:46:46', 'gallery', NULL, 0, '', 0, 'LANDMARK 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(22, 'admin', '2016-03-14 10:43:41', '2016-03-22 16:35:01', 'contact', NULL, 0, '', 0, 'SOLE EXCLUSIVE AGENT', 'Leads Property', 'Indonesia Stock Exchange Building Tower 1,26th Floor Jl. Jend. Sudirman Kav 52-53, Jakarta 12190', '+62 21 5215 576', 'info@tlt.co.id', 'Leads Property', ' SOLE EXCLUSIVE AGENT', 'Indonesia Stock Exchange Building Tower 1,26th Floor Jl. Jend. Sudirman Kav 52-53, Jakarta 12190', '+62 21 2903 5111', 'info@leads-property.com', '', NULL, NULL),
(23, 'admin', '2016-03-14 11:45:17', '2016-03-23 18:12:29', 'sosmed', NULL, 0, '', 0, 'facebook', 'https://www.facebook.com/tlt', NULL, NULL, NULL, 'facebook', 'https://www.facebook.com/tlt', NULL, NULL, NULL, '', NULL, NULL),
(24, 'admin', '2016-03-14 11:46:37', '2016-03-23 18:13:17', 'sosmed', NULL, 0, '', 0, 'instagram', 'https://instagram.com/', NULL, NULL, NULL, 'twitter', 'https://instagram.com/', NULL, NULL, NULL, '', NULL, NULL),
(25, 'admin', '2016-03-14 13:40:09', NULL, 'bod', 5, 0, '', 0, 'Lorem Ipsum', 'Wakil Direktur', NULL, NULL, NULL, 'Lorem Ipsum', NULL, NULL, NULL, NULL, '', NULL, NULL),
(27, 'admin', '2016-03-14 13:47:15', NULL, 'specification', 11, 0, '', 0, 'NO. OF FLOORS', '<p>&bull; 52 levels of office tower<br />\r\n&bull; 3 levels of podium<br />\r\n&bull; 3 levels of basement and<br />\r\n3 levels of podium parking</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(28, 'admin', '2016-03-14 13:47:44', NULL, 'specification', 11, 0, '', 0, 'CEILING HEIGHT', '<p>Ground Floor : 13-14m<br />\r\nTypical Floor : 2.8m</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(29, 'admin', '2016-03-14 13:48:13', NULL, 'specification', 11, 0, '', 0, 'ELEVATORS', '<p>&bull; Tower<br />\r\n&bull; 6 units low zone<br />\r\n&bull; 7 units low zone<br />\r\n&bull; 1 Service Lift<br />\r\n&bull; 2 Parking Lifts</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(30, 'admin', '2016-03-14 13:48:38', NULL, 'specification', 11, 0, '', 0, 'AC', '<p>VAV System with 16 zonings per floor</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(31, 'admin', '2016-03-14 13:49:05', NULL, 'specification', 11, 0, '', 0, 'PARKING', '<p>&bull; Total car parking 1.600 lots</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(32, 'admin', '2016-03-14 13:54:00', NULL, 'team', 13, 0, '', 0, 'ARCHITECT OF RECORD', 'PT Pandega Desain Weharima', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(33, 'admin', '2016-03-14 13:54:22', NULL, 'team', 13, 0, '', 0, 'STRUCTURAL ENGINEER', 'PT Haerte Widya Consultant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(34, 'admin', '2016-03-14 13:54:42', NULL, 'team', 13, 0, '', 0, 'MEP ENGINEER', 'PT Arnan Pratama Consultant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(35, 'admin', '2016-03-14 13:55:23', NULL, 'team', 13, 0, '', 0, 'FACADE CONSULTANT', 'Meinhardt Facade Technology. PTE. LTD (Sin)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(36, 'admin', '2016-03-14 13:55:47', NULL, 'team', 13, 0, '', 0, 'LANDSCAPE CONSULTANT', 'Bennitt Design Group', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(37, 'admin', '2016-03-14 13:56:10', NULL, 'team', 13, 0, '', 0, 'SPECIAL LIGHTING CONSULTANT', 'Litac Consultant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(38, 'admin', '2016-03-14 13:56:29', NULL, 'team', 13, 0, '', 0, 'QUANTITY SURVEYOR CONSULTANT', 'PT Jurukur Bahan Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(39, 'admin', '2016-03-14 13:56:50', NULL, 'team', 13, 0, '', 0, 'GREEN BUILDING CONSULTANT', 'ANT PT Narama Mandiri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(40, 'admin', '2016-03-14 13:57:14', NULL, 'team', 13, 0, '', 0, 'CONSTRUCTION MANAGEMENT', 'PT Trimatra Jaya Persada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(41, 'admin', '2016-03-14 13:58:19', NULL, 'team', 13, 0, '', 0, 'MAIN CONTRACTOR', 'PT Adhi Karya Tbk.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(42, 'admin', '2016-03-14 13:58:37', NULL, 'team', 13, 0, '', 0, 'SOLE EXECUTIVE AGENT', 'PT Leads Property Services Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(43, 'admin', '2016-03-14 13:59:06', NULL, 'team', 13, 0, '', 0, 'PROPERTY MANAGEMENT', 'PT Jones Lang LaSalle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(44, 'admin', '2016-03-14 14:10:09', '2016-03-23 11:05:48', 'facilities', NULL, 0, '', 0, 'Canteen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(45, 'admin', '2016-03-14 14:10:44', '2016-03-23 11:06:17', 'facilities', NULL, 0, '', 0, 'Fitness', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(46, 'admin', '2016-03-14 14:11:32', '2016-03-23 11:06:48', 'facilities', NULL, 0, '', 0, 'Function Hall', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(47, 'admin', '2016-03-14 14:12:02', '2016-03-23 11:07:49', 'facilities', NULL, 0, '', 0, 'Mosque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(48, 'admin', '2016-03-14 14:21:52', '2016-03-23 11:47:14', 'gallery', NULL, 0, '', 0, 'LANDMARK 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(49, 'admin', '2016-03-14 14:22:32', '2016-03-23 11:47:51', 'gallery', NULL, 0, '', 0, 'LANDMARK 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(50, 'admin', '2016-03-14 14:23:03', '2016-03-23 11:48:23', 'gallery', NULL, 0, '', 0, 'LANDMARK 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(51, 'admin', '2016-03-14 14:23:38', '2016-03-23 11:53:16', 'gallery', NULL, 0, '', 0, 'LANDMARK 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(56, 'admin', '2016-03-17 16:12:29', '2016-03-23 16:58:02', 'image_floorplan', 17, 0, '', 0, '<p>Floor 39<sup>th</sup>&nbsp;: 1,345 sqm semigross</p>\r\n\r\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\r\n\r\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\r\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(57, 'admin', '2016-03-17 16:13:48', '2016-03-28 15:36:07', 'image_floorplan', 17, 0, '', 0, '<p>Floor 40<sup>th</sup>&nbsp;: 1,340 sqm semigross</p>\r\n\r\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\r\n\r\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\r\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(75, 'admin', '2016-03-23 10:45:49', '2016-03-23 10:48:37', 'image_floorplan', 52, 0, '', 0, '<p>Floor 25<sup>th</sup>&nbsp;: 1,667 sqm semigross</p>\n\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\n\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(71, 'admin', '2016-03-22 12:06:24', '2016-03-28 14:45:34', 'newsevents', NULL, 0, '', 0, '<p>Topping Off Tower 1</p>\r\n', '<p>DISCORVER JAKARTA&#39;S BEST</p>\r\n\r\n<p>NEW BUSINESS ADDRESS</p>\r\n', 'NEWSEVENT', '<p>Introducing Telkom Landmark Tower, an exiting new orking space on the edge of the CDB. This modern grade 219m tail A office is brought to you by Telkom Group, Indonesia&#39;s leading telecomunications provider which in 2013 made the Forbes Global 2000, as list of the 2000 best performing public companies in the world.<br />\r\nAnchored by Telkom</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(72, 'admin', '2016-03-22 12:07:40', '2016-03-23 11:39:46', 'detail_newsevents', 71, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(73, 'admin', '2016-03-22 16:43:58', NULL, 'contact', NULL, 0, '', 0, 'DEVELOPED BY', 'PT Telkom Landmark Tower', 'Gedung Telkom Landmark Tower, Jl. Jend. Gatot Subroto Kav. 52, Jakarta 12710', '+62 21 225 33 004', 'marketing@tlt.co.id', 'DEVELOPED BY', 'PT Telkom Landmark Tower', 'Gedung Telkom Landmark Tower, Jl. Jend. Gatot Subroto Kav. 52, Jakarta 12710', '+62 21 225 33 004', 'marketing@tlt.co.id', '', NULL, NULL),
(74, 'admin', '2016-03-22 17:01:34', NULL, 'background_contact', NULL, 0, '', 0, 'background_contact', NULL, NULL, NULL, NULL, 'background_contact', NULL, NULL, NULL, NULL, '', NULL, NULL),
(76, 'admin', '2016-03-23 10:49:55', NULL, 'image_floorplan', 52, 0, '', 0, '<p>Floor 26<sup>th</sup>&nbsp;: 1,487 sqm semigross</p>\n\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\n\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(77, 'admin', '2016-03-23 10:51:27', NULL, 'image_floorplan', 52, 0, '', 0, '<p>Floor 27<sup>th</sup>&nbsp;: 1,482 sqm semigross</p>\n\n<p><strong>UNIQUE DESIGN &amp; ENCOURAGING TEAMWORK</strong></p>\n\n<p>Unique infrastructure and smart building design encourages open communication and collaboration. Form multi-storey tenants, certain floors are combined and connected by stairs, certain floors are combined and connected by stairs, creating a large, shared office space with efficient vertical mobility. Between floors, special meeting areas called sky atriums have also been set up where people can meet, swap ideas and collaborate in a fresh new environment.</p>\n', '<h2>Low Zone<br />\nof Telkom Landmark<br />\nTower</h2>\n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(78, 'admin', '2016-03-23 11:00:18', '2016-03-28 16:46:13', 'image_floorplan', 53, 0, '', 0, '<h3>Floor 7<sup>th</sup>&nbsp;: Food &amp; Beverage</h3>\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>Food Court</li>\r\n				<li>Indonesian Resto</li>\r\n				<li>Asian Resto</li>\r\n				<li>Japanessee Resto</li>\r\n				<li>Chinessee Resto</li>\r\n			</ul>\r\n			</td>\r\n			<td>&nbsp;\r\n			<ul>\r\n				<li>Western Resto</li>\r\n				<li>Coffee Shop</li>\r\n				<li>Bakery &amp; Pastry</li>\r\n				<li>etc</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(79, 'admin', '2016-03-23 11:01:23', NULL, 'image_floorplan', 53, 0, '', 0, '<p>Floor 8<sup>th</sup>&nbsp;: Non Food &amp; Beverage</p>\n\n<ul>\n	<li>Convenience Store</li>\n	<li>Beauty &amp; Healthcare</li>\n	<li>Tour &amp; Travel</li>\n	<li>Salon / Barber Shop</li>\n	<li>Etc</li>\n</ul>\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(86, 'admin', '2016-03-28 11:48:13', NULL, 'detail_newsevents', 85, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(80, 'admin', '2016-03-23 11:02:47', NULL, 'image_floorplan', 54, 0, '', 0, '<p>Floor 6<sup>th</sup></p>\n\n<ul>\n	<li>Auditorium</li>\n	<li>Fitness Centre</li>\n	<li>Telkom Experience Centre</li>\n</ul>\n', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(81, 'admin', '2016-03-23 11:11:13', '2016-03-28 14:44:09', 'newsevents', NULL, 0, '', 0, '<p>Kunjungan Mahasiswa Untar</p>\r\n', '<p>DISCORVER JAKARTA&#39;S BEST</p>\r\n\r\n<p>NEW BUSINESS ADDRESS</p>\r\n', 'NEWSEVENT', '<p>Introducing Telkom Landmark Tower, an exiting new orking space on the edge of the CDB. This modern grade 219m tail A office is brought to you by Telkom Group, Indonesia&#39;s leading telecomunications provider which in 2013 made the Forbes Global 2000, as list of the 2000 best performing public companies in the world.<br />\r\nAnchored by Telkom</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(82, 'admin', '2016-03-23 11:34:36', NULL, 'detail_newsevents', 81, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(83, 'admin', '2016-03-23 11:52:57', NULL, 'gallery', NULL, 0, '', 0, 'LANDMARK 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `telkom_images`
--

CREATE TABLE IF NOT EXISTS `telkom_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_by` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `images_name` varchar(150) NOT NULL,
  `content` varchar(50) NOT NULL,
  `id_table` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `telkom_images`
--

INSERT INTO `telkom_images` (`id`, `cu_by`, `created`, `updated`, `images_name`, `content`, `id_table`) VALUES
(1, 'admin', '2016-03-07 09:52:18', '2016-03-14 13:28:14', '20160314_132814.jpg', 'home', '1'),
(2, 'admin', '2016-03-07 10:25:18', '2016-03-14 13:29:51', '20160314_132951.JPG', 'home', '2'),
(3, 'admin', '2016-03-07 11:22:13', '2016-03-14 13:31:14', '20160314_133114.jpg', 'home', '3'),
(4, 'admin', '2016-03-08 09:58:02', '2016-03-14 07:35:43', '20160314_073543.JPG', 'about', '5'),
(5, 'admin', '2016-03-09 16:10:19', '2016-03-14 13:38:25', '20160314_133825.png', 'bod', '6'),
(6, 'admin', '2016-03-09 17:26:10', '2016-03-14 13:39:15', '20160314_133915.png', 'bod', '7'),
(7, 'admin', '2016-03-10 04:59:26', '2016-03-23 03:57:11', '20160323_035711.jpg', 'award', '8'),
(8, 'admin', '2016-03-10 13:59:41', '2016-03-23 09:55:06', '20160323_095506.png', 'awards', '9'),
(9, 'admin', '2016-03-10 14:41:41', '2016-03-23 09:54:39', '20160323_095439.png', 'awards', '10'),
(10, 'admin', '2016-03-10 11:03:49', '2016-03-14 07:46:05', '20160314_074605.jpg', 'buildingspec', '11'),
(11, 'admin', '2016-03-11 15:50:34', '2016-03-23 10:04:32', '20160323_100432.png', 'zone_floorplan', '17'),
(12, 'admin', '2016-03-13 13:01:37', '2016-03-23 11:05:12', '20160323_110512.jpg', 'facilities', '18'),
(13, 'admin', '2016-03-13 13:54:24', '2016-03-23 11:18:53', '20160323_111853.jpg', 'newsevents', '19'),
(14, 'admin', '2016-03-13 11:29:14', '2016-03-23 05:43:31', '20160323_054331.JPG', 'detail_newsevents', '20'),
(15, 'admin', '2016-03-14 09:36:17', '2016-03-23 11:46:46', '20160323_114646.jpg', 'gallery', '21'),
(16, 'admin', '2016-03-14 04:50:46', '2016-03-22 16:35:01', '20160322_163501.png', 'contact', '22'),
(17, 'admin', '2016-03-14 11:45:18', '2016-03-23 18:12:29', '20160323_181229.png', 'sosmed', '23'),
(18, 'admin', '2016-03-14 11:46:37', '2016-03-23 18:13:17', '20160323_181317.png', 'sosmed', '24'),
(19, 'admin', '2016-03-14 13:40:09', NULL, '20160314_134009.png', 'bod', '25'),
(21, 'admin', '2016-03-14 14:10:09', '2016-03-23 11:05:48', '20160323_110548.jpg', 'facilities', '44'),
(22, 'admin', '2016-03-14 14:10:44', '2016-03-23 11:06:17', '20160323_110617.jpg', 'facilities', '45'),
(23, 'admin', '2016-03-14 14:11:32', '2016-03-23 11:06:48', '20160323_110648.jpg', 'facilities', '46'),
(24, 'admin', '2016-03-14 14:12:02', '2016-03-23 11:07:49', '20160323_110749.jpg', 'facilities', '47'),
(25, 'admin', '2016-03-14 14:21:52', '2016-03-23 11:47:14', '20160323_114714.jpg', 'gallery', '48'),
(26, 'admin', '2016-03-14 14:22:32', '2016-03-23 11:47:51', '20160323_114751.jpg', 'gallery', '49'),
(27, 'admin', '2016-03-14 14:23:03', '2016-03-23 11:48:23', '20160323_114823.jpg', 'gallery', '50'),
(28, 'admin', '2016-03-14 14:23:38', '2016-03-23 11:53:16', '20160323_115316.jpg', 'gallery', '51'),
(37, 'admin', '2016-03-18 10:57:52', '2016-03-23 05:44:17', '20160323_054417.jpg', 'detail_newsevents', '20'),
(30, 'admin', '2016-03-17 13:50:30', '2016-03-23 10:05:49', '20160323_100549.png', 'zone_floorplan', '52'),
(31, 'admin', '2016-03-17 13:51:15', '2016-03-23 10:07:54', '20160323_100754.png', 'zone_floorplan', '53'),
(32, 'admin', '2016-03-17 13:51:48', '2016-03-23 10:09:26', '20160323_100926.png', 'zone_floorplan', '54'),
(33, 'admin', '2016-03-17 14:11:32', '2016-03-23 16:57:34', '20160323_165734.png', 'image_floorplan', '55'),
(34, 'admin', '2016-03-17 16:12:29', '2016-03-23 16:58:02', '20160323_165802.png', 'image_floorplan', '56'),
(35, 'admin', '2016-03-17 16:13:48', '2016-03-23 16:58:21', '20160323_165821.png', 'image_floorplan', '57'),
(51, 'admin', '2016-03-22 06:08:13', '2016-03-23 05:38:50', '20160323_053850.JPG', 'detail_newsevents', '72'),
(50, 'admin', '2016-03-22 12:06:24', '2016-03-23 11:12:32', '20160323_111232.jpg', 'newsevents', '71'),
(53, 'admin', '2016-03-22 16:43:58', NULL, '20160322_164358.png', 'contact', '73'),
(54, 'admin', '2016-03-22 17:01:34', NULL, '20160322_170134.jpg', 'background_contact', '74'),
(55, 'admin', '2016-03-23 10:45:49', '2016-03-23 10:48:37', '20160323_104837.png', 'image_floorplan', '75'),
(56, 'admin', '2016-03-23 10:49:55', NULL, '20160323_104955.png', 'image_floorplan', '76'),
(57, 'admin', '2016-03-23 10:51:27', NULL, '20160323_105127.png', 'image_floorplan', '77'),
(58, 'admin', '2016-03-23 11:00:18', NULL, '20160323_110018.png', 'image_floorplan', '78'),
(59, 'admin', '2016-03-23 11:01:23', NULL, '20160323_110123.png', 'image_floorplan', '79'),
(60, 'admin', '2016-03-23 11:02:47', NULL, '20160323_110247.png', 'image_floorplan', '80'),
(61, 'admin', '2016-03-23 11:11:13', '2016-03-23 11:18:06', '20160323_111806.jpg', 'newsevents', '81'),
(62, 'admin', '2016-03-23 05:36:07', NULL, '20160323_053607.jpg', 'detail_newsevents', '82'),
(63, 'admin', '2016-03-23 05:36:53', NULL, '20160323_053653.jpg', 'detail_newsevents', '82'),
(64, 'admin', '2016-03-23 05:41:24', NULL, '20160323_054124.png', 'detail_newsevents', '72'),
(65, 'admin', '2016-03-23 11:52:57', NULL, '20160323_115257.jpg', 'gallery', '83');

-- --------------------------------------------------------

--
-- Table structure for table `telkom_menu`
--

CREATE TABLE IF NOT EXISTS `telkom_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_by` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_name_id` varchar(50) NOT NULL,
  `route_be` varchar(50) NOT NULL,
  `route_fe` varchar(50) NOT NULL,
  `fe` varchar(2) DEFAULT NULL,
  `be` varchar(2) DEFAULT NULL,
  `controller` varchar(25) NOT NULL,
  `master` int(2) NOT NULL DEFAULT '0',
  `viewed` varchar(2) NOT NULL DEFAULT '1',
  `menu_order` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `telkom_menu`
--

INSERT INTO `telkom_menu` (`id`, `cu_by`, `created`, `updated`, `menu_name`, `menu_name_id`, `route_be`, `route_fe`, `fe`, `be`, `controller`, `master`, `viewed`, `menu_order`) VALUES
(1, 'admin', '2016-03-01 10:23:33', NULL, 'Dashboard', '', 'admin_controller', '', '0', '1', '', 0, '1', 1),
(2, 'admin', '2016-03-01 13:59:29', NULL, 'Menu', '', 'admin_controller/menu', '', '0', '1', '', 0, '1', 2),
(3, 'admin', '2016-03-01 13:51:23', NULL, 'Users', '', 'admin_controller/users', '', '0', '1', '', 0, '1', 3),
(4, 'admin', '2016-03-04 14:27:31', '2016-03-21 15:24:41', 'Home', 'Beranda', 'admin_controller/home', '', '0', '1', '', 0, '1', 4),
(5, 'admin', '2016-03-08 10:18:23', '2016-03-23 13:57:35', 'BUILDINGS', '', 'admin_controller/building', 'buildings', '1', '1', '', 0, '1', 5),
(6, 'admin', '2016-03-08 12:02:30', '2016-03-18 10:58:30', 'About Us', '', 'admin_controller/about', 'about_us', '1', '1', '', 5, '1', 6),
(7, 'admin', '2016-03-10 09:44:24', '2016-03-18 10:59:01', 'award & certification', '', 'admin_controller/award', 'award_and_certification', '1', '1', '', 5, '1', 7),
(8, 'admin', '2016-03-10 14:51:12', '2016-03-18 10:59:23', 'building specification', '', 'admin_controller/buildingspec', 'building_specification', '1', '0', '', 5, '1', 8),
(9, 'admin', '2016-03-10 19:37:18', '2016-03-18 10:59:53', 'Project Teams', '', 'admin_controller/project_team', 'project_teams', '1', '0', '', 5, '1', 9),
(10, 'admin', '2016-03-11 10:49:54', '2016-03-23 13:57:52', 'LOCATION', '', 'admin_controller/location', 'location', '1', '1', '', 0, '1', 10),
(11, 'admin', '2016-03-11 13:45:52', '2016-03-23 13:58:54', 'FLOORPLAN', '', 'admin_controller/floorplan', 'floorplan', '1', '1', '', 0, '1', 11),
(12, 'admin', '2016-03-13 12:06:14', '2016-03-23 13:59:04', 'FACILITIES', '', 'admin_controller/facilities', 'facilities', '1', '1', '', 0, '1', 12),
(13, 'admin', '2016-03-13 13:12:15', '2016-03-23 13:59:16', 'NEWS & EVENTS', '', 'admin_controller/newsevents', 'news_events', '1', '1', '', 0, '1', 13),
(14, 'admin', '2016-03-14 09:04:54', '2016-03-23 13:59:25', 'GALLERY', '', 'admin_controller/gallery', 'gallery', '1', '1', '', 0, '1', 14),
(15, 'admin', '2016-03-14 10:15:00', '2016-03-23 13:59:36', 'CONTACT', '', 'admin_controller/contact', 'contact', '1', '1', '', 0, '1', 15),
(16, 'admin', '2016-03-14 11:34:35', NULL, 'Social Media', '', 'admin_controller/sosmed', '', '0', '1', '', 0, '1', 16),
(17, 'admin', '2016-03-24 10:07:05', NULL, 'Contact Us', '', 'admin_controller/messages', '', '0', '1', '', 0, '1', 17);

-- --------------------------------------------------------

--
-- Table structure for table `telkom_sosmed`
--

CREATE TABLE IF NOT EXISTS `telkom_sosmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_by` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `telkom_users`
--

CREATE TABLE IF NOT EXISTS `telkom_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_by` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `user_name` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `telkom_users`
--

INSERT INTO `telkom_users` (`id`, `cu_by`, `created`, `updated`, `user_name`, `name`, `password`, `group_id`, `last_login`) VALUES
(1, 'admin', '2016-02-29 14:33:35', NULL, 'admin', 'administrator', 'F7QHhTnI/V+gDX1JK3337LzYkdPH7P55tlJjHQqdasgrVwvybYHAB4lzWPYoNMw9gs9ax2u46s5sr2Fhlx+CvA==', NULL, '2016-03-28 04:29:05'),
(2, 'admin', '2016-03-01 14:10:23', NULL, 'test', 'test', 'FAe103k8YpPsjCEKy23jZHchTajl9pLSAAZWpcdjw6ZlSoyKcaA0NvcSEevNy0qPOcl4VePMfdJyHQMDZ0MmKw==', NULL, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
