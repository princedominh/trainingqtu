-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 11:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trainingmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `acl_classes`
--

INSERT INTO `acl_classes` (`id`, `class_type`) VALUES
(4, 'Application\\Sonata\\UserBundle\\Entity\\Group'),
(3, 'Application\\Sonata\\UserBundle\\Entity\\User'),
(5, 'QTU\\DepartmentMajorBundle\\Admin\\DepartmentAdmin'),
(6, 'QTU\\DepartmentMajorBundle\\Admin\\MajorAdmin'),
(7, 'QTU\\MarkBundle\\Admin\\MarkTypeAdmin'),
(2, 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin'),
(1, 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=96 ;

--
-- Dumping data for table `acl_entries`
--

INSERT INTO `acl_entries` (`id`, `class_id`, `object_identity_id`, `security_identity_id`, `field_name`, `ace_order`, `mask`, `granting`, `granting_strategy`, `audit_success`, `audit_failure`) VALUES
(1, 1, NULL, 1, NULL, 0, 64, 1, 'all', 0, 0),
(2, 1, NULL, 2, NULL, 1, 8224, 1, 'all', 0, 0),
(3, 1, NULL, 3, NULL, 2, 4098, 1, 'all', 0, 0),
(4, 1, NULL, 4, NULL, 3, 4096, 1, 'all', 0, 0),
(5, 2, NULL, 5, NULL, 0, 64, 1, 'all', 0, 0),
(6, 2, NULL, 6, NULL, 1, 8224, 1, 'all', 0, 0),
(7, 2, NULL, 7, NULL, 2, 4098, 1, 'all', 0, 0),
(8, 2, NULL, 8, NULL, 3, 4096, 1, 'all', 0, 0),
(9, 3, NULL, 1, NULL, 0, 64, 1, 'all', 0, 0),
(10, 3, NULL, 2, NULL, 1, 32, 1, 'all', 0, 0),
(11, 3, NULL, 3, NULL, 2, 4, 1, 'all', 0, 0),
(12, 3, NULL, 4, NULL, 3, 1, 1, 'all', 0, 0),
(13, 4, NULL, 5, NULL, 0, 64, 1, 'all', 0, 0),
(14, 4, NULL, 6, NULL, 1, 32, 1, 'all', 0, 0),
(15, 4, NULL, 7, NULL, 2, 4, 1, 'all', 0, 0),
(16, 4, NULL, 8, NULL, 3, 1, 1, 'all', 0, 0),
(17, 4, 4, 9, NULL, 0, 128, 1, 'all', 0, 0),
(18, 3, 5, 9, NULL, 0, 128, 1, 'all', 0, 0),
(19, 5, NULL, 10, NULL, 0, 64, 1, 'all', 0, 0),
(20, 5, NULL, 11, NULL, 1, 8224, 1, 'all', 0, 0),
(21, 5, NULL, 12, NULL, 2, 4098, 1, 'all', 0, 0),
(22, 5, NULL, 13, NULL, 3, 4096, 1, 'all', 0, 0),
(23, 6, NULL, 14, NULL, 0, 64, 1, 'all', 0, 0),
(24, 6, NULL, 15, NULL, 1, 8224, 1, 'all', 0, 0),
(25, 6, NULL, 16, NULL, 2, 4098, 1, 'all', 0, 0),
(26, 6, NULL, 17, NULL, 3, 4096, 1, 'all', 0, 0),
(27, 4, 8, 9, NULL, 30, 128, 1, 'all', 0, 0),
(28, 4, 9, 9, NULL, 0, 128, 1, 'all', 0, 0),
(29, 3, 10, 9, NULL, 32, 128, 1, 'all', 0, 0),
(30, 4, 8, 18, NULL, 0, 0, 1, 'all', 0, 0),
(31, 4, 8, 19, NULL, 1, 0, 1, 'all', 0, 0),
(32, 4, 8, 20, NULL, 2, 0, 1, 'all', 0, 0),
(33, 4, 8, 21, NULL, 3, 0, 1, 'all', 0, 0),
(34, 4, 8, 22, NULL, 4, 0, 1, 'all', 0, 0),
(35, 4, 8, 23, NULL, 5, 0, 1, 'all', 0, 0),
(36, 4, 8, 24, NULL, 6, 0, 1, 'all', 0, 0),
(37, 4, 8, 25, NULL, 7, 0, 1, 'all', 0, 0),
(38, 4, 8, 26, NULL, 8, 0, 1, 'all', 0, 0),
(39, 4, 8, 27, NULL, 9, 0, 1, 'all', 0, 0),
(40, 4, 8, 28, NULL, 10, 0, 1, 'all', 0, 0),
(41, 4, 8, 29, NULL, 11, 0, 1, 'all', 0, 0),
(42, 4, 8, 30, NULL, 12, 0, 1, 'all', 0, 0),
(43, 4, 8, 31, NULL, 13, 0, 1, 'all', 0, 0),
(44, 4, 8, 14, NULL, 14, 0, 1, 'all', 0, 0),
(45, 4, 8, 15, NULL, 15, 0, 1, 'all', 0, 0),
(46, 4, 8, 16, NULL, 16, 0, 1, 'all', 0, 0),
(47, 4, 8, 17, NULL, 17, 0, 1, 'all', 0, 0),
(48, 4, 8, 10, NULL, 18, 0, 1, 'all', 0, 0),
(49, 4, 8, 11, NULL, 19, 0, 1, 'all', 0, 0),
(50, 4, 8, 12, NULL, 20, 0, 1, 'all', 0, 0),
(51, 4, 8, 13, NULL, 21, 0, 1, 'all', 0, 0),
(52, 4, 8, 5, NULL, 22, 0, 1, 'all', 0, 0),
(53, 4, 8, 6, NULL, 23, 0, 1, 'all', 0, 0),
(54, 4, 8, 7, NULL, 24, 0, 1, 'all', 0, 0),
(55, 4, 8, 8, NULL, 25, 0, 1, 'all', 0, 0),
(56, 4, 8, 1, NULL, 26, 0, 1, 'all', 0, 0),
(57, 4, 8, 2, NULL, 27, 0, 1, 'all', 0, 0),
(58, 4, 8, 3, NULL, 28, 0, 1, 'all', 0, 0),
(59, 4, 8, 4, NULL, 29, 0, 1, 'all', 0, 0),
(60, 3, 10, 32, NULL, 30, 1, 1, 'all', 0, 0),
(61, 3, 10, 33, NULL, 31, 0, 1, 'all', 0, 0),
(62, 3, 10, 18, NULL, 0, 0, 1, 'all', 0, 0),
(63, 3, 10, 19, NULL, 1, 0, 1, 'all', 0, 0),
(64, 3, 10, 20, NULL, 2, 0, 1, 'all', 0, 0),
(65, 3, 10, 21, NULL, 3, 0, 1, 'all', 0, 0),
(66, 3, 10, 22, NULL, 4, 0, 1, 'all', 0, 0),
(67, 3, 10, 23, NULL, 5, 0, 1, 'all', 0, 0),
(68, 3, 10, 24, NULL, 6, 0, 1, 'all', 0, 0),
(69, 3, 10, 25, NULL, 7, 0, 1, 'all', 0, 0),
(70, 3, 10, 26, NULL, 8, 0, 1, 'all', 0, 0),
(71, 3, 10, 27, NULL, 9, 0, 1, 'all', 0, 0),
(72, 3, 10, 28, NULL, 10, 0, 1, 'all', 0, 0),
(73, 3, 10, 29, NULL, 11, 0, 1, 'all', 0, 0),
(74, 3, 10, 30, NULL, 12, 0, 1, 'all', 0, 0),
(75, 3, 10, 31, NULL, 13, 0, 1, 'all', 0, 0),
(76, 3, 10, 14, NULL, 14, 0, 1, 'all', 0, 0),
(77, 3, 10, 15, NULL, 15, 0, 1, 'all', 0, 0),
(78, 3, 10, 16, NULL, 16, 0, 1, 'all', 0, 0),
(79, 3, 10, 17, NULL, 17, 0, 1, 'all', 0, 0),
(80, 3, 10, 10, NULL, 18, 0, 1, 'all', 0, 0),
(81, 3, 10, 11, NULL, 19, 0, 1, 'all', 0, 0),
(82, 3, 10, 12, NULL, 20, 0, 1, 'all', 0, 0),
(83, 3, 10, 13, NULL, 21, 0, 1, 'all', 0, 0),
(84, 3, 10, 5, NULL, 22, 0, 1, 'all', 0, 0),
(85, 3, 10, 6, NULL, 23, 0, 1, 'all', 0, 0),
(86, 3, 10, 7, NULL, 24, 0, 1, 'all', 0, 0),
(87, 3, 10, 8, NULL, 25, 0, 1, 'all', 0, 0),
(88, 3, 10, 1, NULL, 26, 0, 1, 'all', 0, 0),
(89, 3, 10, 2, NULL, 27, 0, 1, 'all', 0, 0),
(90, 3, 10, 3, NULL, 28, 0, 1, 'all', 0, 0),
(91, 3, 10, 4, NULL, 29, 0, 1, 'all', 0, 0),
(92, 7, NULL, 28, NULL, 0, 64, 1, 'all', 0, 0),
(93, 7, NULL, 29, NULL, 1, 8224, 1, 'all', 0, 0),
(94, 7, NULL, 30, NULL, 2, 4098, 1, 'all', 0, 0),
(95, 7, NULL, 31, NULL, 3, 4096, 1, 'all', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `acl_object_identities`
--

INSERT INTO `acl_object_identities` (`id`, `parent_object_identity_id`, `class_id`, `object_identifier`, `entries_inheriting`) VALUES
(1, NULL, 1, 'sonata.user.admin.user', 1),
(2, NULL, 2, 'sonata.user.admin.group', 1),
(3, NULL, 3, '1', 1),
(4, NULL, 4, '1', 1),
(5, NULL, 3, '2', 1),
(6, NULL, 5, 'qtu_department_major.admin.department', 1),
(7, NULL, 6, 'qtu_department_major.admin.major', 1),
(8, NULL, 4, '2', 1),
(9, NULL, 4, '3', 1),
(10, NULL, 3, '3', 1),
(11, NULL, 7, 'qtu_mark.admin.mark_type', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acl_object_identity_ancestors`
--

INSERT INTO `acl_object_identity_ancestors` (`object_identity_id`, `ancestor_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `acl_security_identities`
--

INSERT INTO `acl_security_identities` (`id`, `identifier`, `username`) VALUES
(9, 'Application\\Sonata\\UserBundle\\Entity\\User-admin', 1),
(32, 'Application\\Sonata\\UserBundle\\Entity\\User-dominhduc', 1),
(33, 'Application\\Sonata\\UserBundle\\Entity\\User-phamvilien', 1),
(21, 'ROLE_ADMIN', 0),
(18, 'ROLE_ALLOWED_TO_SWITCH', 0),
(24, 'ROLE_DEAN', 0),
(23, 'ROLE_DEPARTMENT_AGENT', 0),
(25, 'ROLE_LECTURER', 0),
(10, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_ADMIN', 0),
(11, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_EDITOR', 0),
(13, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_GUEST', 0),
(12, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_STAFF', 0),
(14, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_ADMIN', 0),
(15, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_EDITOR', 0),
(17, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_GUEST', 0),
(16, 'ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_STAFF', 0),
(28, 'ROLE_QTU_MARK_ADMIN_MARK_TYPE_ADMIN', 0),
(29, 'ROLE_QTU_MARK_ADMIN_MARK_TYPE_EDITOR', 0),
(31, 'ROLE_QTU_MARK_ADMIN_MARK_TYPE_GUEST', 0),
(30, 'ROLE_QTU_MARK_ADMIN_MARK_TYPE_STAFF', 0),
(20, 'ROLE_SONATA_ADMIN', 0),
(5, 'ROLE_SONATA_USER_ADMIN_GROUP_ADMIN', 0),
(6, 'ROLE_SONATA_USER_ADMIN_GROUP_EDITOR', 0),
(8, 'ROLE_SONATA_USER_ADMIN_GROUP_GUEST', 0),
(7, 'ROLE_SONATA_USER_ADMIN_GROUP_STAFF', 0),
(1, 'ROLE_SONATA_USER_ADMIN_USER_ADMIN', 0),
(2, 'ROLE_SONATA_USER_ADMIN_USER_EDITOR', 0),
(4, 'ROLE_SONATA_USER_ADMIN_USER_GUEST', 0),
(3, 'ROLE_SONATA_USER_ADMIN_USER_STAFF', 0),
(27, 'ROLE_STUDENT', 0),
(19, 'ROLE_SUPER_ADMIN', 0),
(22, 'ROLE_TRAINING_AGENT', 0),
(26, 'ROLE_USER', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fos_user_group`
--

INSERT INTO `fos_user_group` (`id`, `name`, `roles`) VALUES
(1, 'Giảng viên', 'a:1:{i:0;s:13:"ROLE_LECTURER";}'),
(2, 'Quản trị Đào tạo', 'a:13:{i:0;s:19:"ROLE_TRAINING_AGENT";i:1;s:48:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_GUEST";i:2;s:48:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_STAFF";i:3;s:49:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_EDITOR";i:4;s:48:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_DEPARTMENT_ADMIN";i:5;s:43:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_GUEST";i:6;s:43:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_STAFF";i:7;s:44:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_EDITOR";i:8;s:43:"ROLE_QTU_DEPARTMENT_MAJOR_ADMIN_MAJOR_ADMIN";i:9;s:35:"ROLE_QTU_MARK_ADMIN_MARK_TYPE_GUEST";i:10;s:35:"ROLE_QTU_MARK_ADMIN_MARK_TYPE_STAFF";i:11;s:36:"ROLE_QTU_MARK_ADMIN_MARK_TYPE_EDITOR";i:12;s:35:"ROLE_QTU_MARK_ADMIN_MARK_TYPE_ADMIN";}'),
(3, 'Quản trị Khoa', 'a:1:{i:0;s:21:"ROLE_DEPARTMENT_AGENT";}');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'dominhduc@quangtrung.edu.vn', 'dominhduc@quangtrung.edu.vn', 1, '6t4ore8k6xwkko4okcc40wowsckssoc', 'aI7L6AL/lqJ5WcEzBbDNk7CeyChGgyqG7esivV8yu8aqfYSWZPof15rgueAYC3GTb5qYRAkeFrRHfq4xBl3nQw==', '2016-09-12 21:23:44', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-09-09 20:49:30', '2016-09-12 21:23:44', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(2, 'phamvilien', 'phamvilien', 'phamvilien@quangtrung.edu.vn', 'phamvilien@quangtrung.edu.vn', 1, 'eipzdmh7zfkgssso8w0gso44o4g8s8w', 'mpT255fJbbcEOEx1yx9c+XrH6ksDSC4h2oJ0qspWcHhz4Zoj+aIAdHC4WEkc7hdUhntuYTVkVKYIUTya/Vxk8w==', '2016-09-12 14:41:41', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '2016-09-12 10:09:54', '2016-09-12 14:41:41', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(3, 'dominhduc', 'dominhduc', 'dominhdc@gmail.com', 'dominhdc@gmail.com', 1, '7ecvzf0754gskw4wgows4og4ck8css8', '9dAVF5hZwqsiaPsfbVFWR5r72XJAoxlP4xG5QEuqWtt0CjVMiu5jXT7BZpo+/NyOKTCII0nXrYifmrJ+/AJoQA==', '2016-09-12 23:20:02', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '2016-09-12 20:17:20', '2016-09-12 23:20:02', '1984-07-29 00:00:00', 'Minh Đức', 'Đỗ', NULL, NULL, 'm', 'vi_VN', 'Asia/Ho_Chi_Minh', '0905778292', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qtu_class_management`
--

CREATE TABLE IF NOT EXISTS `qtu_class_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `major_details_id` int(11) DEFAULT NULL,
  `shortname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admission_year` smallint(6) NOT NULL,
  `graduation_year` smallint(6) DEFAULT NULL,
  `max_duration_year` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `major_details_id` (`major_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_class_management_student`
--

CREATE TABLE IF NOT EXISTS `qtu_class_management_student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `class_management_id` int(11) DEFAULT NULL,
  `student_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_management_id` (`class_management_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_class_management`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_class_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_management_id` int(11) DEFAULT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `class_management_id` (`class_management_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_class_management_specialized`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_class_management_specialized` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curriculum_for_class_management_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_curriculum_for_class_management_specialized_qtu_curr_idx` (`curriculum_for_class_management_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_class_management_subject`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_class_management_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `knowledge_block_id` tinyint(1) DEFAULT NULL,
  `curriculum_for_class_management_specialized_id` int(11) DEFAULT NULL,
  `semester` tinyint(1) NOT NULL DEFAULT '1',
  `group_value` int(11) DEFAULT NULL,
  `group_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `knowledge_block_id` (`knowledge_block_id`),
  KEY `fk_qtu_curriculum_for_class_management_subject_qtu_curricul_idx` (`curriculum_for_class_management_specialized_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_major`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_major` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `major_details_id` int(11) DEFAULT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `major_details_id` (`major_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_major_specialized`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_major_specialized` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curriculum_for_major_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_curriculum_for_major_specialized_qtu_curriculum_for__idx` (`curriculum_for_major_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_curriculum_for_major_specialized_subject`
--

CREATE TABLE IF NOT EXISTS `qtu_curriculum_for_major_specialized_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `knowledge_block_id` tinyint(1) DEFAULT NULL,
  `curriculum_for_major_specialized_id` int(11) DEFAULT NULL,
  `semester` tinyint(1) NOT NULL DEFAULT '1',
  `group_value` int(11) DEFAULT NULL,
  `group_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `knowledge_block_id` (`knowledge_block_id`),
  KEY `fk_qtu_curriculum_for_major_specialized_subject_qtu_curricu_idx` (`curriculum_for_major_specialized_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_department`
--

CREATE TABLE IF NOT EXISTS `qtu_department` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `shortname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_knowledge_block`
--

CREATE TABLE IF NOT EXISTS `qtu_knowledge_block` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_lecturer`
--

CREATE TABLE IF NOT EXISTS `qtu_lecturer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `qtu_department_id` smallint(6) DEFAULT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_lecture_qtu_department1_idx` (`qtu_department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_major`
--

CREATE TABLE IF NOT EXISTS `qtu_major` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `department_id` smallint(6) DEFAULT NULL,
  `shortname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_major_qtu_department1_idx` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_major_details`
--

CREATE TABLE IF NOT EXISTS `qtu_major_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_form_id` smallint(6) DEFAULT NULL,
  `training_level_id` smallint(6) DEFAULT NULL,
  `major_id` smallint(6) DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `major_id` (`major_id`),
  KEY `fk_qtu_major_details_qtu_training_form1_idx` (`training_form_id`),
  KEY `fk_qtu_major_details_qtu_training_level1_idx` (`training_level_id`),
  KEY `fk_qtu_major_details_qtu_major1_idx` (`major_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_mark_type`
--

CREATE TABLE IF NOT EXISTS `qtu_mark_type` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student`
--

CREATE TABLE IF NOT EXISTS `qtu_student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_status_id` tinyint(1) DEFAULT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `native_land` text COLLATE utf8_unicode_ci,
  `admission_year` smallint(6) NOT NULL DEFAULT '0',
  `graduation_year` smallint(6) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `ethnic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identity_card` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identity_card_at` date DEFAULT NULL,
  `identity_card_location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_status_id` (`student_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_reserve`
--

CREATE TABLE IF NOT EXISTS `qtu_student_reserve` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_reward_discipline`
--

CREATE TABLE IF NOT EXISTS `qtu_student_reward_discipline` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `document` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_status`
--

CREATE TABLE IF NOT EXISTS `qtu_student_status` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_subject`
--

CREATE TABLE IF NOT EXISTS `qtu_student_subject` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_student_subject_qtu_student1_idx` (`student_id`),
  KEY `fk_qtu_student_subject_qtu_subject1_idx` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_subject_course`
--

CREATE TABLE IF NOT EXISTS `qtu_student_subject_course` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `subject_course_id` bigint(20) DEFAULT NULL,
  `overall_mark` double DEFAULT NULL,
  `is_pass` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`,`subject_course_id`),
  KEY `subject_course_id` (`subject_course_id`),
  KEY `IDX_1DB3DD44CB944F1A` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_student_subject_course_details`
--

CREATE TABLE IF NOT EXISTS `qtu_student_subject_course_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subject_course_id` bigint(20) DEFAULT NULL,
  `mark_type_id` smallint(6) DEFAULT NULL,
  `mark` double NOT NULL,
  `percentage` double NOT NULL,
  `created_at` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `subject_course_id` (`subject_course_id`),
  KEY `mark_type_id` (`mark_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_subject`
--

CREATE TABLE IF NOT EXISTS `qtu_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit` tinyint(1) NOT NULL,
  `ntheory` tinyint(1) NOT NULL DEFAULT '0',
  `npractice` tinyint(1) NOT NULL DEFAULT '0',
  `nproject` tinyint(1) NOT NULL DEFAULT '0',
  `condition` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_subject_course`
--

CREATE TABLE IF NOT EXISTS `qtu_subject_course` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `term_id` smallint(6) DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `subject_id` (`subject_id`),
  KEY `term_id` (`term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_subject_course_has_qtu_lecturer`
--

CREATE TABLE IF NOT EXISTS `qtu_subject_course_has_qtu_lecturer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subject_course_id` bigint(20) DEFAULT NULL,
  `lecturer_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_qtu_subject_course_has_qtu_lecture_qtu_lecture1_idx` (`lecturer_id`),
  KEY `fk_qtu_subject_course_has_qtu_lecture_qtu_subject_course1_idx` (`subject_course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_term`
--

CREATE TABLE IF NOT EXISTS `qtu_term` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `order_term` smallint(6) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_training_form`
--

CREATE TABLE IF NOT EXISTS `qtu_training_form` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qtu_training_level`
--

CREATE TABLE IF NOT EXISTS `qtu_training_level` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sonata_user_group_association`
--

CREATE TABLE IF NOT EXISTS `sonata_user_group_association` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_1D155015A76ED395` (`user_id`),
  KEY `IDX_1D155015FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sonata_user_group_association`
--

INSERT INTO `sonata_user_group_association` (`user_id`, `group_id`) VALUES
(2, 1),
(3, 1),
(3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qtu_class_management`
--
ALTER TABLE `qtu_class_management`
  ADD CONSTRAINT `FK_C429416C2BBB1984` FOREIGN KEY (`major_details_id`) REFERENCES `qtu_major_details` (`id`);

--
-- Constraints for table `qtu_class_management_student`
--
ALTER TABLE `qtu_class_management_student`
  ADD CONSTRAINT `FK_9A659F922126B34` FOREIGN KEY (`class_management_id`) REFERENCES `qtu_class_management` (`id`),
  ADD CONSTRAINT `FK_9A659F92CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `qtu_student` (`id`);

--
-- Constraints for table `qtu_curriculum_for_class_management`
--
ALTER TABLE `qtu_curriculum_for_class_management`
  ADD CONSTRAINT `FK_F3F730332126B34` FOREIGN KEY (`class_management_id`) REFERENCES `qtu_class_management` (`id`);

--
-- Constraints for table `qtu_curriculum_for_class_management_specialized`
--
ALTER TABLE `qtu_curriculum_for_class_management_specialized`
  ADD CONSTRAINT `FK_364C36B5C981E0BC` FOREIGN KEY (`curriculum_for_class_management_id`) REFERENCES `qtu_curriculum_for_class_management` (`id`);

--
-- Constraints for table `qtu_curriculum_for_class_management_subject`
--
ALTER TABLE `qtu_curriculum_for_class_management_subject`
  ADD CONSTRAINT `FK_2BA42DE723EDC87` FOREIGN KEY (`subject_id`) REFERENCES `qtu_subject` (`id`),
  ADD CONSTRAINT `FK_2BA42DE794955B93` FOREIGN KEY (`knowledge_block_id`) REFERENCES `qtu_knowledge_block` (`id`),
  ADD CONSTRAINT `FK_2BA42DE7A0F4CB68` FOREIGN KEY (`curriculum_for_class_management_specialized_id`) REFERENCES `qtu_curriculum_for_class_management_specialized` (`id`);

--
-- Constraints for table `qtu_curriculum_for_major`
--
ALTER TABLE `qtu_curriculum_for_major`
  ADD CONSTRAINT `FK_1327D34D2BBB1984` FOREIGN KEY (`major_details_id`) REFERENCES `qtu_major_details` (`id`);

--
-- Constraints for table `qtu_curriculum_for_major_specialized`
--
ALTER TABLE `qtu_curriculum_for_major_specialized`
  ADD CONSTRAINT `FK_20C7AF5B2B3D7F90` FOREIGN KEY (`curriculum_for_major_id`) REFERENCES `qtu_curriculum_for_major` (`id`);

--
-- Constraints for table `qtu_curriculum_for_major_specialized_subject`
--
ALTER TABLE `qtu_curriculum_for_major_specialized_subject`
  ADD CONSTRAINT `FK_FB05921823EDC87` FOREIGN KEY (`subject_id`) REFERENCES `qtu_subject` (`id`),
  ADD CONSTRAINT `FK_FB059218772A9A59` FOREIGN KEY (`curriculum_for_major_specialized_id`) REFERENCES `qtu_curriculum_for_major_specialized` (`id`),
  ADD CONSTRAINT `FK_FB05921894955B93` FOREIGN KEY (`knowledge_block_id`) REFERENCES `qtu_knowledge_block` (`id`);

--
-- Constraints for table `qtu_lecturer`
--
ALTER TABLE `qtu_lecturer`
  ADD CONSTRAINT `FK_46A764D1C41AA302` FOREIGN KEY (`qtu_department_id`) REFERENCES `qtu_department` (`id`);

--
-- Constraints for table `qtu_major`
--
ALTER TABLE `qtu_major`
  ADD CONSTRAINT `FK_915513E8AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `qtu_department` (`id`);

--
-- Constraints for table `qtu_major_details`
--
ALTER TABLE `qtu_major_details`
  ADD CONSTRAINT `FK_B048C59482C80B73` FOREIGN KEY (`training_form_id`) REFERENCES `qtu_training_form` (`id`),
  ADD CONSTRAINT `FK_B048C594B8D45830` FOREIGN KEY (`training_level_id`) REFERENCES `qtu_training_level` (`id`),
  ADD CONSTRAINT `FK_B048C594E93695C7` FOREIGN KEY (`major_id`) REFERENCES `qtu_major` (`id`);

--
-- Constraints for table `qtu_student`
--
ALTER TABLE `qtu_student`
  ADD CONSTRAINT `FK_B7F40E80C99C13D` FOREIGN KEY (`student_status_id`) REFERENCES `qtu_student_status` (`id`);

--
-- Constraints for table `qtu_student_reserve`
--
ALTER TABLE `qtu_student_reserve`
  ADD CONSTRAINT `FK_44487AD3CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `qtu_student` (`id`);

--
-- Constraints for table `qtu_student_reward_discipline`
--
ALTER TABLE `qtu_student_reward_discipline`
  ADD CONSTRAINT `FK_571F918FCB944F1A` FOREIGN KEY (`student_id`) REFERENCES `qtu_student` (`id`);

--
-- Constraints for table `qtu_student_subject`
--
ALTER TABLE `qtu_student_subject`
  ADD CONSTRAINT `FK_A066AE8B23EDC87` FOREIGN KEY (`subject_id`) REFERENCES `qtu_subject` (`id`),
  ADD CONSTRAINT `FK_A066AE8BCB944F1A` FOREIGN KEY (`student_id`) REFERENCES `qtu_student` (`id`);

--
-- Constraints for table `qtu_student_subject_course`
--
ALTER TABLE `qtu_student_subject_course`
  ADD CONSTRAINT `FK_1DB3DD441A4D5DB8` FOREIGN KEY (`subject_course_id`) REFERENCES `qtu_subject_course` (`id`),
  ADD CONSTRAINT `FK_1DB3DD44CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `qtu_student` (`id`);

--
-- Constraints for table `qtu_student_subject_course_details`
--
ALTER TABLE `qtu_student_subject_course_details`
  ADD CONSTRAINT `FK_6583768D1A4D5DB8` FOREIGN KEY (`subject_course_id`) REFERENCES `qtu_student_subject_course` (`id`),
  ADD CONSTRAINT `FK_6583768DA4DE1A2A` FOREIGN KEY (`mark_type_id`) REFERENCES `qtu_mark_type` (`id`);

--
-- Constraints for table `qtu_subject_course`
--
ALTER TABLE `qtu_subject_course`
  ADD CONSTRAINT `FK_668F92A123EDC87` FOREIGN KEY (`subject_id`) REFERENCES `qtu_subject` (`id`),
  ADD CONSTRAINT `FK_668F92A1E2C35FC` FOREIGN KEY (`term_id`) REFERENCES `qtu_term` (`id`);

--
-- Constraints for table `qtu_subject_course_has_qtu_lecturer`
--
ALTER TABLE `qtu_subject_course_has_qtu_lecturer`
  ADD CONSTRAINT `FK_318857A71A4D5DB8` FOREIGN KEY (`subject_course_id`) REFERENCES `qtu_subject_course` (`id`),
  ADD CONSTRAINT `FK_318857A7BA2D8762` FOREIGN KEY (`lecturer_id`) REFERENCES `qtu_lecturer` (`id`);

--
-- Constraints for table `sonata_user_group_association`
--
ALTER TABLE `sonata_user_group_association`
  ADD CONSTRAINT `FK_1D155015A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1D155015FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
