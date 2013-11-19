-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2013 at 01:02 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis`
--
CREATE DATABASE IF NOT EXISTS `thesis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thesis`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `app_copy`
--

CREATE TABLE IF NOT EXISTS `app_copy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `data` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `app_copy`
--

INSERT INTO `app_copy` (`ID`, `key`, `data`) VALUES
(1, 'block_1', '<div class="block features">\n	<h2 class="title-divider">\n		<span>Core <span class="de-em">Featurasdasdasdasdasdasdasdasdes</span></span> <small>Core features included in all plans.</small></h2>\n	<ul class="thumbnails">\n		<li class="span3">\n			<a href="features.htm"><!--<img alt="Feature 1" src="img/features/feature-1.png" />--></a>\n			<h3 class="title">\n				<a href="features.htm">Mobile <span class="de-em">Friendly</span></a></h3>\n			<p>\n				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n		</li>\n		<li class="span3">\n			<a href="features.htm"><!--<img alt="Feature 2" src="img/features/feature-2.png" />--></a>\n			<h3 class="title">\n				<a href="features.htm">24/7 <span class="de-em">Support</span></a></h3>\n			<p>\n				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n		</li>\n		<li class="span3">\n			<a href="features.htm"><!--<img alt="Feature 3" src="img/features/feature-3.png" />--></a>\n			<h3 class="title">\n				<a href="features.htm">Free Upgrade <span class="de-em">Assistance</span></a></h3>\n			<p>\n				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\n		</li>\n		<li class="span3">\n			<a href="features.htm"><!--<img alt="Feature 4" src="img/features/feature-4.png" />--></a>\n			<h3 class="title">\n				<a href="features.htm">99.9% <span class="de-em">Uptime</span></a></h3>\n			<p>\n				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n		</li>\n	</ul>\n</div>\n'),
(2, 'block_2', '<div class="block">\r\n      <h2 class="title-divider"><span>Pricing <span class="de-em">Plans</span></span> <small>Competitive pricing plans to suit your needs</small></h2>\r\n      <div class="row pricing-stack">\r\n        <div class="span3">\r\n          <div class="well">\r\n            <h3 class="title">Starter</h3>\r\n            <p class="price"><span class="fancy">Free!</span></p>\r\n            <ul class="unstyled points">\r\n              <li>3 User Accounts</li>\r\n              <li>3 Private Projects</li>\r\n              <li>Umlimited Public Projects</li>\r\n              <li>5GB of space</li>\r\n            </ul>\r\n            <a class="btn btn-primary">Sign Up</a>\r\n          </div>\r\n        </div>\r\n\r\n        <div class="span3">\r\n          <div class="well active">\r\n            <h3 class="title"><span class="em">Pro</span> <span class="fancy">Plus</span></h3>\r\n            <p class="price"><span class="currency">php</span> <span class="digits">49<span>.95</span></span> <span class="term">/MO</span></p>\r\n            <ul class="unstyled points">\r\n              <li>50 User Accounts</li>\r\n              <li>50 Private Projects</li>\r\n              <li>Umlimited Public Projects</li>                  \r\n              <li>Unlimited space</li>\r\n            </ul>\r\n            <a class="btn btn-primary">Sign Up</a>\r\n          </div>\r\n        </div>\r\n        \r\n        <div class="span3">\r\n          <div class="well active">\r\n            <h3 class="title"><span class="em">Biz</span> <span class="fancy">Plus</span></h3>\r\n            <p class="price"><span class="currency">php</span> <span class="digits">199<span>.95</span></span> <span class="term">/MO</span></p>\r\n            <ul class="unstyled points">\r\n              <li>Umlimited User Accounts</li>\r\n              <li>Umlimited Private Projects</li>\r\n              <li>Umlimited Public Projects</li>                  \r\n              <li>Unlimited space</li>\r\n            </ul>\r\n            <a class="btn btn-primary">Sign Up</a>\r\n          </div>\r\n        </div>            \r\n        \r\n        <div class="span3">\r\n          <div class="well">\r\n            <h3 class="title">Starter <span class="fancy">Plus</span></h3>\r\n            <p class="price"><span class="currency">php</span> <span class="digits">19<span>.95</span></span> <span class="term">/MO</span></p>\r\n            <ul class="unstyled points">\r\n              <li>10 User Accounts</li>\r\n              <li>10 Private Projects</li>\r\n              <li>Umlimited Public Projects</li>\r\n              <li>15GB of space</li>\r\n            </ul>\r\n            <a class="btn btn-primary">Sign Up</a>\r\n          </div>\r\n        </div>\r\n      </div>'),
(3, 'block_3', '<div class="row-fluid">\r\n        <!-- Plan features -->\r\n        <div class="well well-mini pull-center">\r\n          <h4 class="inline-el pad-right"><span>All Plans <span class="de-em">Include</span>:</span></h4>\r\n          <p class="inline-el pad-left muted">90 day money back guarantee <span class="spacer">//</span> 24/7 telephone support <span class="spacer">//</span> FREE BLAH!! Setup <span class="spacer">//</span> BLAH!! Help <span class="spacer">//</span> BLAH!! BLAH!! BLAH!!</p>\r\n        </div>\r\n      </div>'),
(4, 'slide_1', '<div class="span7">\n	<img src="/assets/images/b.jpg" style="width: 400px !important;\nmargin-top: 65px;\nmargin-left: 90px;" /></div>\n<div class="span5 caption">\n	<h2>\n		Start Now!</h2>\n	<h4>\n		&nbsp;</h4>\n	<p>\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\n	<a class="btn btn-large btn-primary" href="#">Sign Up</a></div>\n'),
(5, 'slide_2', '<div class="span7">\r\n            	<h2>Our Customer</h2>\r\n            </div>\r\n            <div class="span5 caption">\r\n              <h2>Start Now!</h2>\r\n              <h4></h4>\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\r\n              <a href="#" class="btn btn-large btn-primary">Sign Up</a>\r\n            </div>'),
(6, 'header_1', '		            \r\n<h3>About Us</h3>\r\n            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..........</p>\r\n            <a href="about.htm" class="btn btn-mini btn-primary">Find out more</a>               \r\n'),
(7, 'header_2', '		            \r\n<!--@todo: replace with company contact details-->\r\n            <h3>Contact Us</h3>\r\n            <address>\r\n              <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 0912312312312412</p>\r\n              <p><abbr title="Email"><i class="icon-envelope"></i></abbr> sample@gmail.com</p>\r\n              <p><abbr title="Address"><i class="icon-home"></i></abbr> address at brgy 8 here.</p>\r\n            </address> \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'nat', 'symon', 'yow', '2013-10-01 22:42:56', 1),
(2, 'symon', 'nat', 'asd', '2013-10-01 22:43:00', 1),
(3, 'nat', 'symon', 'asd', '2013-10-01 22:43:02', 1),
(4, 'nat', 'symon', 'sad', '2013-10-01 22:46:43', 1),
(5, 'symon', 'nat', 'no', '2013-10-01 22:46:45', 1),
(6, 'nat', 'symon', 'yow joe', '2013-10-01 22:49:33', 1),
(7, 'symon', 'nat', 'sd', '2013-10-01 23:04:41', 1),
(8, 'nat', 'symon', 'hey', '2013-10-01 23:04:49', 1),
(9, 'symon', 'nat', 'asd', '2013-10-01 23:04:52', 1),
(10, 'symon', 'nat', 'asdasd', '2013-10-01 23:09:22', 1),
(11, 'nat', 'symon', 'asd', '2013-10-01 23:09:34', 1),
(12, 'nat', 'symon', 'low', '2013-10-01 23:12:13', 1),
(13, 'nat', 'symon', 'hey yah', '2013-10-01 23:12:29', 1),
(14, 'nat', 'symon', 'ui', '2013-10-01 23:14:00', 1),
(15, 'nat', 'symon', 'helo', '2013-10-01 23:14:13', 1),
(16, 'symon', 'nat', 'nice', '2013-10-01 23:15:17', 1),
(17, 'nat', 'symon', 'asdasd', '2013-10-01 23:16:09', 1),
(18, 'nat', 'symon', 'asd', '2013-10-01 23:16:10', 1),
(19, 'nat', 'symon', 'asd', '2013-10-01 23:16:10', 1),
(20, 'symon', 'nat', 'asd', '2013-10-01 23:17:11', 1),
(21, 'symon', 'symon', 'asd', '2013-10-01 23:17:33', 1),
(22, 'symon', 'nat', 'asdasd', '2013-10-01 23:20:21', 1),
(23, 'symon', 'symon', 'asd', '2013-10-01 23:22:15', 1),
(24, 'symon', 'nat', 'asd', '2013-10-01 23:22:20', 1),
(25, 'symon', 'symon', 'asd', '2013-10-01 23:22:34', 1),
(26, 'symon', 'symon', 'asd', '2013-10-01 23:22:35', 1),
(27, 'symon', 'symon', 'sad', '2013-10-01 23:22:36', 1),
(28, 'symon', 'symon', 'hey', '2013-10-01 23:22:39', 1),
(29, 'symon', 'symon', 'why', '2013-10-01 23:23:30', 1),
(30, 'symon', 'nat', 'why', '2013-10-01 23:23:37', 1),
(31, 'symon', 'nat', 'asd', '2013-10-01 23:24:37', 1),
(32, 'symon', 'symon', 'asd', '2013-10-01 23:27:16', 1),
(33, 'symon', 'symon', 'sad', '2013-10-01 23:36:01', 1),
(34, 'nat', 'symon', 'asd', '2013-10-01 23:37:36', 1),
(35, 'che', 'symon', 'asd', '2013-10-01 23:37:53', 1),
(36, 'che', 'nat', 'yow', '2013-10-01 23:40:33', 1),
(37, 'che', 'nat', 'asd', '2013-10-01 23:40:54', 1),
(38, 'che', 'symon', 'hoy', '2013-10-01 23:46:35', 1),
(39, 'symon', 'che', 'problema', '2013-10-01 23:47:05', 1),
(40, 'symon', 'che', 'wala', '2013-10-01 23:47:18', 1),
(41, 'che', 'symon', 'hahaha', '2013-10-01 23:57:01', 1),
(42, 'symon', 'topalits', 'hoy', '2013-10-02 00:01:02', 0),
(43, 'symon', 'vivian', 'hehehe', '2013-10-02 00:01:21', 0),
(44, 'symon', 'che', 'hihihi', '2013-10-02 00:02:13', 1),
(45, 'che', 'symon', 'd nga', '2013-10-02 00:02:22', 1),
(46, 'che', 'symon', 'admin', '2013-10-02 00:02:35', 1),
(47, 'che', 'symon', 'asd', '2013-10-02 00:03:05', 1),
(48, 'che', 'symon', 'asd', '2013-10-02 00:03:05', 1),
(49, 'che', 'symon', 'asd', '2013-10-02 00:03:06', 1),
(50, 'che', 'symon', 'asd', '2013-10-02 00:03:06', 1),
(51, 'che', 'symon', 'asd', '2013-10-02 00:03:06', 1),
(52, 'symon', 'che', 'hey', '2013-10-02 00:04:16', 1),
(53, 'symon', 'che', 'asd', '2013-10-02 00:05:12', 1),
(54, 'symon', 'che', 'no', '2013-10-02 00:07:24', 1),
(55, 'che', 'symon', 'anu', '2013-10-02 00:07:36', 1),
(56, 'che', 'symon', 'panu', '2013-10-02 00:07:44', 1),
(57, 'symon', 'che', 'asd', '2013-10-02 00:08:26', 1),
(58, 'che', 'symon', 'asd', '2013-10-02 00:08:30', 1),
(59, 'symon', 'che', 'sd', '2013-10-02 00:10:50', 1),
(60, 'che', 'symon', 'asd', '2013-10-02 00:10:55', 1),
(61, 'symon', 'che', 'asdasd', '2013-10-02 00:12:43', 1),
(62, 'symon', 'che', 'ahahha yes', '2013-10-02 00:13:09', 1),
(63, 'che', 'symon', 'hola', '2013-10-02 00:13:42', 1),
(64, 'che', 'symon', 'hoy', '2013-10-02 01:14:58', 1),
(65, 'symon', 'che', 'bakit', '2013-10-02 01:15:34', 1),
(66, 'che', 'symon', 'hey', '2013-10-02 07:31:11', 1),
(67, 'symon', 'che', 'yow', '2013-10-02 07:31:22', 1),
(68, 'ako', 'symon', 'hi', '2013-10-02 08:29:27', 1),
(69, 'ako', 'symon', 'can i asked question', '2013-10-02 08:29:36', 1),
(70, 'symon', 'ako', 'what is it', '2013-10-02 08:29:45', 1),
(71, 'ako', 'symon', 'secret', '2013-10-02 08:29:53', 1),
(72, 'symon', 'ako', 'sad', '2013-10-02 08:30:10', 1),
(73, 'che', 'symon', 'yow', '2013-10-02 10:38:21', 1),
(74, 'symon', 'che', 'bakit', '2013-10-02 10:38:28', 1),
(75, 'che', 'symon', 'hoy', '2013-10-02 13:30:49', 1),
(76, 'symon', 'che', 'bakit', '2013-10-02 13:30:58', 1),
(77, 'che', 'symon', 'wala lng', '2013-10-02 13:31:02', 1),
(78, 'symon', 'che', 'asdasd', '2013-10-02 13:31:43', 1),
(79, 'symon', 'che', 'asd', '2013-10-02 13:31:43', 1),
(80, 'symon', 'che', 'asd', '2013-10-02 13:31:43', 1),
(81, 'symon', 'che', 'nasan ka', '2013-10-02 13:32:33', 1),
(82, 'asd', 'symon', 'cage', '2013-10-02 13:39:00', 1),
(83, 'asd', 'symon', 'ahahha', '2013-10-02 13:39:20', 1),
(84, 'symon', 'asd', 'asdasdasd', '2013-10-02 13:39:25', 1),
(85, 'laguna', 'laguna', 'laguna', '2013-10-07 00:00:36', 1),
(86, 'laguna', 'laguna', 'hey', '2013-10-07 00:00:42', 1),
(87, 'laguna', 'laguna', 'sad', '2013-10-07 00:00:49', 1),
(88, 'laguna', 'symon', 'yow', '2013-10-07 00:01:36', 1),
(89, 'symon', 'laguna', 'why', '2013-10-07 00:01:44', 1),
(90, 'laguna', 'symon', 'nothing', '2013-10-07 00:01:49', 1),
(91, 'symon', 'laguna', 'ah ok', '2013-10-07 00:01:52', 1),
(92, 'che', 'symon', 'hey', '2013-10-07 00:02:10', 1),
(93, 'symon', 'che', 'wy', '2013-10-07 00:02:14', 1),
(94, 'laguna', 'nat', 'yow', '2013-10-07 00:03:07', 1),
(95, 'che', 'symon', 'yow', '2013-10-07 00:03:21', 1),
(96, 'che', 'symon', 'joe', '2013-10-07 00:03:41', 1),
(97, 'che', 'symon', 'asdasd', '2013-10-07 00:03:47', 1),
(98, 'che', 'nat', 'asd', '2013-10-07 00:04:01', 1),
(99, 'che', 'nat', 'asdasd', '2013-10-07 00:04:05', 1),
(100, 'che', 'nat', 'asdasd', '2013-10-07 00:04:07', 1),
(101, 'che', 'symon', 'helo', '2013-10-14 05:13:52', 1),
(102, 'symon', 'che', 'sup', '2013-10-14 05:13:58', 1),
(103, 'laguna', 'symon', 'sad', '2013-10-14 05:14:28', 1),
(104, 'symon', 'laguna', 'asdasd', '2013-10-14 05:14:34', 1),
(105, 'symon', 'laguna', 'wheres the history', '2013-10-14 05:14:41', 1),
(106, 'symon', 'che', 'here', '2013-10-14 05:14:45', 1),
(107, 'symon', 'nat', 'asd', '2013-10-14 05:16:01', 1),
(108, 'che', 'symon', 'asdas', '2013-10-14 09:44:44', 1),
(109, 'che', 'nat', 'asdasd\\', '2013-10-14 09:44:49', 1),
(110, 'che', 'asd', 'dasdasd', '2013-10-14 09:44:53', 0),
(111, 'che', 'asd', 'asdasd', '2013-10-14 09:44:58', 0),
(112, 'che', 'symon', 'hoy', '2013-10-14 09:45:07', 1),
(113, 'symon', 'che', 'hudas ka', '2013-10-14 09:45:54', 1),
(114, 'che', 'nat', 'hoy', '2013-10-14 12:49:42', 1),
(115, 'nat', 'che', 'yow', '2013-10-14 12:50:06', 1),
(116, 'che', 'nat', 'bakit', '2013-10-14 12:50:11', 0),
(117, 'nat', 'che', 'sdasdasd', '2013-10-14 12:50:16', 1),
(118, 'che', 'nat', 'asdasdasd', '2013-10-14 12:50:19', 0),
(119, 'che', 'nat', 'asdasd', '2013-10-14 12:50:20', 0),
(120, 'che', 'nat', 'asd', '2013-10-14 12:50:21', 0),
(121, 'nat', 'che', 'asd', '2013-10-14 12:50:23', 1),
(122, 'nat', 'che', 'asd', '2013-10-14 12:50:24', 1),
(123, 'nat', 'che', 'asd', '2013-10-14 12:50:24', 1),
(124, 'nat', 'che', 'asd', '2013-10-14 12:50:25', 1),
(125, 'nat', 'che', 'asd', '2013-10-14 12:50:25', 1),
(126, 'che', 'nat', 'aaa', '2013-10-14 12:50:28', 0),
(127, 'che', 'nat', 'aa', '2013-10-14 12:50:29', 0),
(128, 'che', 'symon', 'asd', '2013-10-14 12:52:43', 1),
(129, 'che', 'symon', 'asd', '2013-10-14 12:54:17', 1),
(130, 'symon', 'che', 'aaaaaa', '2013-10-14 12:54:23', 1),
(131, 'che', 'symon', 'kkk', '2013-10-14 12:54:26', 1),
(132, 'che', 'tcsp', 'asdasd', '2013-10-14 12:55:36', 1),
(133, 'che', 'tcsp', 'aa', '2013-10-14 12:55:44', 1),
(134, 'tcsp', 'che', 'asdasd', '2013-10-14 12:55:48', 1),
(135, 'che', 'tcsp', 'asd', '2013-10-14 12:55:50', 1),
(136, 'che', 'tcsp', 'asdasd', '2013-10-14 13:07:09', 1),
(137, 'che', 'wewe', 'asdasd', '2013-10-16 06:59:04', 1),
(138, 'che', 'wewe', 'yo', '2013-10-16 06:59:33', 1),
(139, 'wewe', 'che', 'asdasd', '2013-10-16 06:59:37', 1),
(140, 'che', 'wewe', 'bakit', '2013-10-16 06:59:46', 1),
(141, 'wewe', 'che', 'wala lng', '2013-10-16 06:59:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_post` int(11) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_user` int(11) NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `message_subject` varchar(255) NOT NULL,
  `is_mark` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `message_post`, `message_content`, `message_user`, `message_email`, `message_subject`, `is_mark`) VALUES
(1, 0, '', 0, 'asd', 'asd', 1),
(2, 0, '', 0, 'asdas', 'asdasd', 1),
(3, 0, '', 0, 'asdas', 'asdasd', 1),
(4, 0, 'xxx', 0, 'xxx', 'xxx', 1),
(5, 0, 'hide and seek', 0, 'help@gmail.com', 'asdasd', 1),
(6, 0, 'hide and seek', 0, 'help@gmail.com', 'asdasd', 1),
(7, 0, 'qqq', 0, 'qqq', 'qqq', 1),
(8, 0, 'qqq', 0, 'qqq', 'qqq', 1),
(9, 0, 'qqq', 0, 'qqq', 'qqq', 1),
(10, 0, 'page refresh', 0, 'page refresh', 'page refresh', 1),
(11, 0, 'asdasd', 0, 'helo@gmail.com', 'cold world', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `content` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `payment_user` int(11) NOT NULL,
  `payment_plan` varchar(255) NOT NULL,
  `payment_price` int(11) NOT NULL,
  `payment_created` datetime NOT NULL,
  `is_ok` int(11) NOT NULL DEFAULT '0',
  `payment_due` datetime NOT NULL,
  PRIMARY KEY (`payment_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `payment_user`, `payment_plan`, `payment_price`, `payment_created`, `is_ok`, `payment_due`) VALUES
(1, 16, 'premier-plan', 0, '2013-10-06 00:00:00', 1, '2014-10-06 00:00:00'),
(2, 17, 'premier-plan', 0, '2013-10-06 00:00:00', 1, '2014-10-06 00:00:00'),
(3, 18, 'premier-plan', 0, '2013-10-06 00:00:00', 1, '2014-10-06 00:00:00'),
(4, 19, 'premier-plan', 0, '2013-10-07 00:00:00', 4, '2014-10-07 00:00:00'),
(5, 20, 'premier-plan', 0, '2013-10-07 00:00:00', 1, '2014-10-07 00:00:00'),
(6, 21, 'New Member', 0, '2013-10-13 00:00:00', 1, '2014-10-13 00:00:00'),
(7, 22, 'New Member', 0, '2013-10-13 00:00:00', 4, '2014-10-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `done` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `usertype` varchar(32) NOT NULL DEFAULT 'member',
  `email` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '1',
  `note` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT '0',
  `postal-code` varchar(255) NOT NULL,
  `land-number` varchar(255) DEFAULT NULL,
  `mobile-number` varchar(255) DEFAULT NULL,
  `company-name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `company-land-number` varchar(255) NOT NULL,
  `company-mobile-number` varchar(255) DEFAULT NULL,
  `company-address` varchar(255) NOT NULL,
  `company-postal-code` varchar(255) NOT NULL,
  `company-city` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `created`, `firstname`, `surname`, `usertype`, `email`, `address`, `city`, `enable`, `note`, `online`, `postal-code`, `land-number`, `mobile-number`, `company-name`, `position`, `company-land-number`, `company-mobile-number`, `company-address`, `company-postal-code`, `company-city`) VALUES
(1, 'tcsp', 'pass', '2013-08-14 14:33:17', 'TCSP', 'ADMIN', 'admin', '', '', '', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(3, 'rm', 'pass', '2013-08-17 05:00:42', 'raph matthew', 'mojica', 'member', 'raph@gmail.com', '435 Maduya St, Binan, Laguna', 'Laguna', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(5, 'vivian', 'pass', '2013-08-17 05:56:31', 'vivian', 'buenavista', 'member', 'vivian@gmail.com', '123 poblacion st. sta. rosa, Lag', 'Laguna', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(6, 'che', 'pass', '2013-08-17 05:56:54', 'gretchen', 'alvarez', 'member', 'che@gmail.com', '132 bonifacio st. Madaluyong Cit', 'Mandaluyong', 1, '', 1, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(8, 'topalits', 'pass', '2013-08-17 06:03:28', 'emelito', 'mojica', 'member', 'emelito@gmail.com', '123 quantum st. imus, cavite', 'cavite', 1, 'high profile member, always treat as high priority anytime and anywhere', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(14, 'sysy', 'pass', '2013-10-06 14:53:21', 'ahhaah', 'yoyoyo', 'member', 'sybuena2@gmail.com', '883 rosario st. carmona, cavite', 'cavite', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(15, 'asdasdas', 'pass', '2013-10-06 14:54:26', 'asd', 'asd', 'member', 'asd', 'asd', 'asd', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(16, 'asdasdasd', 'pass', '2013-10-06 14:55:18', 'asdasdas', 'asdasdasd', 'member', 'asdasdasd', 'asdasdasd', 'asdasdasd', 0, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(17, 'asdasdasdas', 'asdasdasdasdasd', '2013-10-06 15:01:03', 'asdasdasd', 'asdasdasdasd', 'member', 'asdasdasdasd', 'asdasdasd', 'asdasdasdasd', 0, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(18, 'laguna', 'pass', '2013-10-06 15:39:05', 'welcome', 'to here', 'member', 'welcome2@gmail.com', 'binan, laguna', 'laguna', 1, 'new comer', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(19, 'shaina', 'pass', '2013-10-07 04:25:07', 'shaina', 'asuncion', 'member', 'shaina@gmail.com', 'carmona, cavite', 'cavite', 1, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(20, 'asdasdasd', 'asdasdasdasd', '2013-10-07 04:26:35', 'asd', 'asdasdasd', 'member', 'asdasdasdasd', 'asdasdasd', 'asdasdasdasd', 0, '', 0, '', NULL, NULL, '', '', '', NULL, '', '', ''),
(21, 'q', '1', '2013-10-13 19:09:49', 'hahaha', 'hohooh', 'member', 'asd@gmail.com', '1', '1', 1, '', 0, '1', NULL, NULL, '1', '1', '1', NULL, '1', '1', '1'),
(22, 'symons', '1', '2013-10-13 19:15:40', '', '', 'member', 'asdasd@gmail.com', '1', '1', 1, '', 0, '1', NULL, NULL, '1', '1', '1', NULL, '1', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
