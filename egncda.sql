-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2020 at 09:40 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egncda`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'aaaa', '2020-04-22 12:33:10', '2020-04-22 12:33:10'),
(2, 1, 'bbbb', '2020-04-22 12:33:10', '2020-04-22 12:33:10'),
(3, 1, 'cccc', '2020-04-22 12:33:10', '2020-04-22 12:33:10'),
(4, 1, 'dddd', '2020-04-22 12:33:11', '2020-04-22 12:33:11'),
(5, 2, 'aaaaa', '2020-04-22 12:34:25', '2020-04-22 12:34:25'),
(6, 2, 'bbbbb', '2020-04-22 12:34:25', '2020-04-22 12:34:25'),
(7, 2, 'cccc', '2020-04-22 12:34:25', '2020-04-22 12:34:25'),
(8, 2, 'dddd', '2020-04-22 12:34:25', '2020-04-22 12:34:25'),
(9, 3, 'aaaa', '2020-04-22 12:35:26', '2020-04-22 12:35:26'),
(10, 3, 'bbbb', '2020-04-22 12:35:26', '2020-04-22 12:35:26'),
(11, 3, 'cccc', '2020-04-22 12:35:26', '2020-04-22 12:35:26'),
(12, 3, 'dddd', '2020-04-22 12:35:26', '2020-04-22 12:35:26'),
(13, 4, 'aaaa', '2020-04-22 12:36:18', '2020-04-22 12:36:18'),
(14, 4, 'bbbb', '2020-04-22 12:36:18', '2020-04-22 12:36:18'),
(15, 4, 'cccc', '2020-04-22 12:36:18', '2020-04-22 12:36:18'),
(16, 4, 'dddd', '2020-04-22 12:36:18', '2020-04-22 12:36:18'),
(17, 5, 'aaaa', '2020-04-22 12:37:36', '2020-04-22 12:37:36'),
(18, 5, 'bbbb', '2020-04-22 12:37:36', '2020-04-22 12:37:36'),
(19, 5, 'cccc', '2020-04-22 12:37:36', '2020-04-22 12:37:36'),
(20, 5, 'dddd', '2020-04-22 12:37:36', '2020-04-22 12:37:36'),
(21, 6, 'aaaa', '2020-04-22 12:38:53', '2020-04-22 12:38:53'),
(22, 6, 'bbbb', '2020-04-22 12:38:53', '2020-04-22 12:38:53'),
(23, 6, 'cccc', '2020-04-22 12:38:53', '2020-04-22 12:38:53'),
(24, 6, 'dddd', '2020-04-22 12:38:53', '2020-04-22 12:38:53'),
(25, 7, 'aaaa', '2020-04-22 12:40:00', '2020-04-22 12:40:00'),
(26, 7, 'bbbb', '2020-04-22 12:40:00', '2020-04-22 12:40:00'),
(27, 7, 'cccc', '2020-04-22 12:40:00', '2020-04-22 12:40:00'),
(28, 7, 'dddd', '2020-04-22 12:40:00', '2020-04-22 12:40:00'),
(29, 8, 'aaaa', '2020-04-22 12:41:03', '2020-04-22 12:41:03'),
(30, 8, 'bbbb', '2020-04-22 12:41:03', '2020-04-22 12:41:03'),
(31, 8, 'cccc', '2020-04-22 12:41:03', '2020-04-22 12:41:03'),
(32, 8, 'dddd', '2020-04-22 12:41:03', '2020-04-22 12:41:03'),
(33, 9, 'aaaa', '2020-04-22 12:42:33', '2020-04-22 12:42:33'),
(34, 9, 'bbbb', '2020-04-22 12:42:33', '2020-04-22 12:42:33'),
(35, 9, 'bbbb', '2020-04-22 12:42:34', '2020-04-22 12:42:34'),
(36, 9, 'dddd', '2020-04-22 12:42:34', '2020-04-22 12:42:34'),
(37, 10, 'adel', '2020-04-26 10:22:34', '2020-04-26 10:22:34'),
(38, 10, 'adellll', '2020-04-26 10:22:34', '2020-04-26 10:22:34'),
(39, 10, 'adellllll', '2020-04-26 10:22:34', '2020-04-26 10:22:34'),
(40, 10, 'adelllllllllllllll', '2020-04-26 10:22:35', '2020-04-26 10:22:35'),
(41, 11, 'ppppppppppp', '2020-05-03 09:08:34', '2020-05-03 09:08:34'),
(42, 11, 'pppppppppppppppppppppppp', '2020-05-03 09:08:34', '2020-05-03 09:08:34'),
(43, 11, 'ppppppppppppppppppppppppppppppppp', '2020-05-03 09:08:34', '2020-05-03 09:08:34'),
(44, 11, 'ppppppppppppppppppppppppppppppppppppppp', '2020-05-03 09:08:34', '2020-05-03 09:08:34'),
(45, 12, 'dasdsad', '2020-05-03 09:11:12', '2020-05-03 09:11:12'),
(46, 12, 'sadsadsad', '2020-05-03 09:11:13', '2020-05-03 09:11:13'),
(47, 12, 'dasdsad', '2020-05-03 09:11:13', '2020-05-03 09:11:13'),
(48, 12, 'sadsadasd', '2020-05-03 09:11:13', '2020-05-03 09:11:13'),
(49, 13, 'vcvcvc', '2020-05-03 09:11:52', '2020-05-03 09:11:52'),
(50, 13, 'cvcvcvc', '2020-05-03 09:11:52', '2020-05-03 09:11:52'),
(51, 13, 'cvcvcvcv', '2020-05-03 09:11:52', '2020-05-03 09:11:52'),
(52, 13, 'vcvcvcv', '2020-05-03 09:11:52', '2020-05-03 09:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `basic_managements`
--

CREATE TABLE `basic_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_managements`
--

INSERT INTO `basic_managements` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Books', 'fa-book', NULL, NULL),
(2, 'Curriculum', 'fa-book-open', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link_exam` varchar(255) NOT NULL,
  `link_curriculum` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `img`, `icon`, `link_exam`, `link_curriculum`, `created_at`, `updated_at`) VALUES
(1, 'CVS', 'CVS.png', 'fa-heartbeat', 'exam', 'cvs-curriculum', NULL, NULL),
(2, 'Diabetes', 'Endocrinology.png', 'fa-stethoscope', 'diabetes-exam', 'diabetes-curriculum', NULL, NULL),
(3, 'Respiratory', 'Respiratory.png', 'fa-lungs', 'respiratory-exam', 'respiratory-curriculum', NULL, NULL),
(4, 'Oncology', 'Oncology.png', 'fa-user-nurse', 'oncology-exam', 'oncolcgy-curriculum', NULL, NULL),
(5, 'Miscellaneous', 'Miscellaneous.png', 'fa-user-md', 'miscellaneous-exam', 'miscellaneous-curriculum', NULL, NULL),
(6, 'Assessment', 'Exam.png', 'fa-newspaper', '', '', NULL, NULL),
(7, 'Courses Registration', 'Event.png', 'fa-star-of-life', '', '', NULL, NULL),
(8, 'Drug index ', 'Drug.png', 'fa-capsules', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categoriesofdoctors`
--

CREATE TABLE `categoriesofdoctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoriesofdoctors`
--

INSERT INTO `categoriesofdoctors` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Basic Resources', 'fa-plus-square', NULL, NULL),
(2, 'Clinical Scenarios', 'fa-plus-circle', NULL, NULL),
(3, 'Guidelines', 'fa-search', NULL, NULL),
(4, 'Updates & News', 'fa-edit', NULL, NULL),
(5, 'Exam', 'fa-newspaper', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numbercode` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `numbercode`, `status`, `created_at`, `updated_at`) VALUES
(1, 'djLOor55', 1, '2020-03-18 11:41:09', '2020-03-18 11:42:19'),
(2, '4MIKiA93', 1, '2020-03-18 11:41:09', '2020-03-18 11:48:44'),
(3, 'l7IRj986', 0, '2020-03-18 11:41:09', '2020-03-18 11:41:09'),
(4, 'dflGlI96', 0, '2020-03-18 11:41:09', '2020-03-18 11:41:09'),
(5, 'iuzmrS90', 0, '2020-03-18 11:41:09', '2020-03-18 11:41:09'),
(6, 'JXaEog97', 0, '2020-03-18 11:41:09', '2020-03-18 11:41:09'),
(7, 'e28TtK36', 0, '2020-03-18 11:41:09', '2020-03-18 11:41:09'),
(8, 'POOfpu36', 0, '2020-03-18 11:41:10', '2020-03-18 11:41:10'),
(9, 'SrteYC17', 0, '2020-03-18 11:41:10', '2020-03-18 11:41:10'),
(10, 'd2RPdO36', 0, '2020-03-18 11:41:10', '2020-03-18 11:41:10'),
(11, '0UyJmF10', 0, '2020-03-18 11:41:10', '2020-03-18 11:41:10'),
(12, 'one', 0, NULL, NULL),
(13, 'two', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_eams`
--

CREATE TABLE `comment_eams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `questionnaire_title` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_eams`
--

INSERT INTO `comment_eams` (`id`, `first_name`, `questionnaire_title`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'adel', 'DIABETES PRACTICE QUESTIONS', 'kkk', '2020-04-10 14:15:51', '2020-04-10 14:15:51'),
(3, 'adel', 'aeam', 'ok', '2020-04-10 14:57:46', '2020-04-10 14:57:46'),
(4, 'dr', 'popopopop', '0000', '2020-04-21 15:56:42', '2020-04-21 15:56:42'),
(5, 'dr', 'cvs', 'lo', '2020-04-23 00:01:05', '2020-04-23 00:01:05'),
(6, 'dr', 'diabetes', 'marcos', '2020-04-23 00:11:06', '2020-04-23 00:11:06'),
(7, 'dr', 'miscellaneous', '0000', '2020-04-23 01:58:16', '2020-04-23 01:58:16'),
(8, 'Fady Tamer', 'cvs-curriculum', '0000', '2020-04-23 02:30:04', '2020-04-23 02:30:04'),
(9, 'Fady Tamer', 'cvs', '0000', '2020-04-23 02:30:14', '2020-04-23 02:30:14'),
(10, 'dr', 'respiratory', '0000', '2020-04-26 07:35:27', '2020-04-26 07:35:27'),
(11, 'dr', 'oncology', '0000', '2020-04-26 07:40:49', '2020-04-26 07:40:49'),
(12, 'Koko', 'respiratory', '0000', '2020-04-26 07:43:20', '2020-04-26 07:43:20'),
(13, 'Koko', 'miscellaneous', '0000', '2020-04-26 07:45:13', '2020-04-26 07:45:13'),
(14, 'Koko', 'oncology', '0000', '2020-04-26 07:50:52', '2020-04-26 07:50:52'),
(15, 'Koko', 'diabetes', '0000', '2020-04-26 07:58:39', '2020-04-26 07:58:39'),
(16, 'Koko', 'cvs', '0000', '2020-04-26 08:01:20', '2020-04-26 08:01:20'),
(17, 'dr', 'cvs', '0000', '2020-04-26 08:16:55', '2020-04-26 08:16:55'),
(18, 'dr', 'cvs', '0000', '2020-04-26 08:31:50', '2020-04-26 08:31:50'),
(19, 'dr', 'cvs', '0000', '2020-04-26 08:33:18', '2020-04-26 08:33:18'),
(20, 'dr', 'cvs', '0000', '2020-04-26 08:36:55', '2020-04-26 08:36:55'),
(21, 'dr', 'cvs', '0000', '2020-04-26 08:41:31', '2020-04-26 08:41:31'),
(22, 'dr', 'cvs', '0000', '2020-04-26 08:46:49', '2020-04-26 08:46:49'),
(23, 'dr', 'cvs', '0000', '2020-04-26 09:11:52', '2020-04-26 09:11:52'),
(24, 'dr', 'cvs', '0000', '2020-04-26 09:12:59', '2020-04-26 09:12:59'),
(25, 'dr', 'cvs', '0000', '2020-04-26 09:14:01', '2020-04-26 09:14:01'),
(26, 'dr', 'cvs', '0000', '2020-04-26 09:21:49', '2020-04-26 09:21:49'),
(27, 'dr', 'cvs', '0000', '2020-04-26 09:22:24', '2020-04-26 09:22:24'),
(28, 'dr', 'assessment', 'dwsdsa', '2020-04-26 10:32:39', '2020-04-26 10:32:39'),
(29, 'Fady Tamer', 'assessment', '00', '2020-05-26 02:33:05', '2020-05-26 02:33:05'),
(30, 'Fady Tamer', 'cvs', '00', '2020-05-26 02:44:44', '2020-05-26 02:44:44'),
(31, 'Fady Tamer', 'pols', '00', '2020-05-26 02:44:55', '2020-05-26 02:44:55'),
(32, 'MOmar', 'cvs', '0000', '2020-06-03 21:53:31', '2020-06-03 21:53:31'),
(33, 'MOmar', 'pols', '0000', '2020-06-03 21:54:06', '2020-06-03 21:54:06'),
(34, 'MOmar', 'diabetes', '0000', '2020-06-03 21:56:53', '2020-06-03 21:56:53'),
(35, 'dr', 'miscellaneous', '00', '2020-06-04 05:23:38', '2020-06-04 05:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `cvscurriculums`
--

CREATE TABLE `cvscurriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cvscurriculums`
--

INSERT INTO `cvscurriculums` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to NCD’s and burden of CV diseases', 'fa-book-reader', NULL, NULL),
(2, 'Hypertension ', 'fa-book-reader', NULL, NULL),
(3, 'Risk assessment in hypertension', 'fa-book-reader', NULL, NULL),
(4, 'interactive case ', 'fa-book-reader', NULL, NULL),
(5, 'Latest guidelines of hypertension ', 'fa-book-reader', NULL, NULL),
(6, 'Atherosclerosis', 'fa-book-reader', NULL, NULL),
(7, 'Cholesterol', 'fa-book-reader', NULL, NULL),
(8, 'Dietary and life style recommendations ', 'fa-book-reader', NULL, NULL),
(9, 'Drug therapy overview', 'fa-book-reader', NULL, NULL),
(10, 'managing cholesterol & interactive case', 'fa-book-reader', NULL, NULL),
(11, 'Diabetes for the Cardiologist', 'fa-book-reader', NULL, NULL),
(12, 'Smoking and Heart diseases ', 'fa-book-reader', NULL, NULL),
(13, 'Smoking cessation therapies for the cardiologist ', 'fa-book-reader', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diabetescurriculums`
--

CREATE TABLE `diabetescurriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diabetescurriculums`
--

INSERT INTO `diabetescurriculums` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to NCD’s and burden of diabetes', 'fa-book-reader', NULL, NULL),
(2, 'Pathogenesis and Diagnosis of Diabetes, and Prediabetes', 'fa-book-reader', NULL, NULL),
(3, 'Nutrition Therapy and Physical Activity', 'fa-book-reader', NULL, NULL),
(4, 'Smoking and related to incidence of diabetes ', 'fa-book-reader', NULL, NULL),
(5, 'Management in Children and Adolescents With Diabetes', 'fa-book-reader', NULL, NULL),
(6, 'Psychosocial aspects of diabetes ', 'fa-book-reader', NULL, NULL),
(7, 'Oral health and Diabetes', 'fa-book-reader', NULL, NULL),
(8, 'Sexual health in diabetes', 'fa-book-reader', NULL, NULL),
(9, 'Insulin therapy', 'fa-book-reader', NULL, NULL),
(10, 'Interactive case', 'fa-book-reader', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc_scoures`
--

CREATE TABLE `doc_scoures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `scoure` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_scoures`
--

INSERT INTO `doc_scoures` (`id`, `doctor_id`, `scoure`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2020-04-23 00:01:05', '2020-04-23 00:01:05'),
(2, 2, 0, '2020-04-23 00:11:06', '2020-04-23 00:11:06'),
(3, 2, 0, '2020-04-23 01:58:16', '2020-04-23 01:58:16'),
(4, 16, 0, '2020-04-23 02:30:04', '2020-04-23 02:30:04'),
(5, 16, 0, '2020-04-23 02:30:14', '2020-04-23 02:30:14'),
(6, 2, 1, '2020-04-26 07:35:27', '2020-04-26 07:35:27'),
(7, 2, 0, '2020-04-26 07:40:48', '2020-04-26 07:40:48'),
(8, 15, 1, '2020-04-26 07:43:19', '2020-04-26 07:43:19'),
(9, 15, 1, '2020-04-26 07:45:13', '2020-04-26 07:45:13'),
(10, 15, 0, '2020-04-26 07:50:51', '2020-04-26 07:50:51'),
(11, 15, 0, '2020-04-26 07:58:39', '2020-04-26 07:58:39'),
(12, 15, 0, '2020-04-26 08:01:19', '2020-04-26 08:01:19'),
(13, 2, 0, '2020-04-26 08:16:55', '2020-04-26 08:16:55'),
(14, 2, 0, '2020-04-26 08:31:50', '2020-04-26 08:31:50'),
(15, 2, 1, '2020-04-26 08:33:17', '2020-04-26 08:33:17'),
(16, 2, 0, '2020-04-26 08:36:54', '2020-04-26 08:36:54'),
(17, 2, 0, '2020-04-26 08:41:31', '2020-04-26 08:41:31'),
(18, 2, 0, '2020-04-26 08:46:49', '2020-04-26 08:46:49'),
(19, 2, 0, '2020-04-26 09:11:52', '2020-04-26 09:11:52'),
(20, 2, 50, '2020-04-26 09:12:59', '2020-04-26 09:12:59'),
(21, 2, 0, '2020-04-26 09:14:01', '2020-04-26 09:14:01'),
(22, 2, 0, '2020-04-26 09:21:49', '2020-04-26 09:21:49'),
(23, 2, 0, '2020-04-26 09:22:24', '2020-04-26 09:22:24'),
(24, 2, 0, '2020-04-26 10:32:39', '2020-04-26 10:32:39'),
(25, 16, 1, '2020-05-26 02:33:05', '2020-05-26 02:33:05'),
(26, 16, 1, '2020-05-26 02:44:44', '2020-05-26 02:44:44'),
(27, 16, 1, '2020-05-26 02:44:55', '2020-05-26 02:44:55'),
(28, 28, 0, '2020-06-03 21:53:31', '2020-06-03 21:53:31'),
(29, 28, 0, '2020-06-03 21:54:06', '2020-06-03 21:54:06'),
(30, 28, 0, '2020-06-03 21:56:53', '2020-06-03 21:56:53'),
(31, 2, 0, '2020-06-04 05:23:38', '2020-06-04 05:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_book` varchar(255) NOT NULL,
  `pre_book` varchar(255) NOT NULL,
  `photo_book` varchar(255) NOT NULL,
  `pdf_book` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `categoriesofdoctors_id` int(11) NOT NULL,
  `basicmanagements_id` int(11) NOT NULL,
  `cvscurriculums_id` int(11) NOT NULL,
  `diabetescurriculums_id` int(11) NOT NULL,
  `respiratorycurriculums_id` int(11) NOT NULL,
  `oncolcgycurriculums_id` int(11) NOT NULL,
  `miscellaneouscurriculums_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `name_book`, `pre_book`, `photo_book`, `pdf_book`, `desc`, `cat_id`, `categoriesofdoctors_id`, `basicmanagements_id`, `cvscurriculums_id`, `diabetescurriculums_id`, `respiratorycurriculums_id`, `oncolcgycurriculums_id`, `miscellaneouscurriculums_id`, `created_at`, `updated_at`) VALUES
(1, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1586183227book.jpg', 'uploads/1586183227allchapters.pdf', '<p>Allchapters<br></p>', 1, 1, 1, 0, 0, 0, 0, 0, '2020-04-06 12:27:07', '2020-04-06 12:27:07'),
(2, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1586255986book.jpg', 'uploads/1586255986allchapters.pdf', '<p>Allchapters</p>', 3, 1, 1, 0, 0, 0, 0, 0, '2020-04-07 08:39:46', '2020-04-07 08:39:46'),
(3, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1586256112book.jpg', 'uploads/1586256112allchapters.pdf', '<p>Allchapters</p>', 4, 1, 1, 0, 0, 0, 0, 0, '2020-04-07 08:41:52', '2020-04-07 08:41:52'),
(4, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1586339917book.jpg', 'uploads/1586339917allchapters.pdf', '<p>Allchapters</p>', 2, 1, 1, 0, 0, 0, 0, 0, '2020-04-08 07:58:37', '2020-04-08 07:58:37'),
(5, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1586341773book.jpg', 'uploads/1586341773allchapters.pdf', '<p>Allchapters</p>', 5, 1, 1, 0, 0, 0, 0, 0, '2020-04-08 08:29:33', '2020-04-08 08:29:33'),
(6, 'cccccccccccc', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589983631book.jpg', 'uploads/1589983631allchapters.pdf', '<p>Allchapters</p>', 1, 2, 0, 0, 0, 0, 0, 0, '2020-05-20 12:07:11', '2020-05-20 12:07:11'),
(7, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589983982book.jpg', 'uploads/1589983982allchapters.pdf', '<p>Allchapters</p>', 1, 3, 0, 0, 0, 0, 0, 0, '2020-05-20 12:13:02', '2020-05-20 12:13:02'),
(8, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589984627book.jpg', 'uploads/1589984627allchapters.pdf', '<p>Allchapters</p>', 1, 4, 0, 0, 0, 0, 0, 0, '2020-05-20 12:23:47', '2020-05-20 12:23:47'),
(9, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589985675book.jpg', 'uploads/1589985675allchapters.pdf', '<p>Allchapters</p>', 2, 2, 0, 0, 0, 0, 0, 0, '2020-05-20 12:41:15', '2020-05-20 12:41:15'),
(10, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589985977book.jpg', 'uploads/1589985977allchapters.pdf', '<p>Allchapters</p>', 2, 3, 0, 0, 0, 0, 0, 0, '2020-05-20 12:46:17', '2020-05-20 12:46:17'),
(11, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589986284book.jpg', 'uploads/1589986284allchapters.pdf', '<p>Allchapters</p>', 2, 4, 0, 0, 0, 0, 0, 0, '2020-05-20 12:51:24', '2020-05-20 12:51:24'),
(12, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589986549book.jpg', 'uploads/1589986549allchapters.pdf', '<p>Allchapters</p>', 3, 2, 0, 0, 0, 0, 0, 0, '2020-05-20 12:55:49', '2020-05-20 12:55:49'),
(13, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589986849book.jpg', 'uploads/1589986849allchapters.pdf', '<p>Allchapters</p>', 3, 3, 0, 0, 0, 0, 0, 0, '2020-05-20 13:00:49', '2020-05-20 13:00:49'),
(14, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589987162book.jpg', 'uploads/1589987162allchapters.pdf', '<p>Allchapters</p>', 3, 4, 0, 0, 0, 0, 0, 0, '2020-05-20 13:06:02', '2020-05-20 13:06:02'),
(15, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589988561book.jpg', 'uploads/1589988561allchapters.pdf', '<p>Allchapters</p>', 4, 3, 0, 0, 0, 0, 0, 0, '2020-05-20 13:29:21', '2020-05-20 13:29:21'),
(16, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589988746book.jpg', 'uploads/1589988746allchapters.pdf', '<p>Allchapters</p>', 4, 2, 0, 0, 0, 0, 0, 0, '2020-05-20 13:32:26', '2020-05-20 13:32:26'),
(17, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589988854book.jpg', 'uploads/1589988854allchapters.pdf', '<p>Allchapters</p>', 4, 4, 0, 0, 0, 0, 0, 0, '2020-05-20 13:34:14', '2020-05-20 13:34:14'),
(18, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589988967book.jpg', 'uploads/1589988967allchapters.pdf', '<p>Allchapters</p>', 5, 2, 0, 0, 0, 0, 0, 0, '2020-05-20 13:36:07', '2020-05-20 13:36:07'),
(19, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1589989083book.jpg', 'uploads/1589989083allchapters.pdf', '<p>Allchapters</p>', 5, 3, 0, 0, 0, 0, 0, 0, '2020-05-20 13:38:03', '2020-05-20 13:38:03'),
(20, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590059603book.jpg', 'uploads/1590059603allchapters.pdf', '<p>Allchapters</p>', 5, 4, 0, 0, 0, 0, 0, 0, '2020-05-21 09:13:23', '2020-05-21 09:13:23'),
(21, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590059800book.jpg', 'uploads/1590059800allchapters.pdf', '<p>Allchapters</p>', 8, 0, 0, 0, 0, 0, 0, 0, '2020-05-21 09:16:40', '2020-05-21 09:16:40'),
(22, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590060465book.jpg', 'uploads/1590060465allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 1, 0, 0, 0, 0, '2020-05-21 09:27:45', '2020-05-21 09:27:45'),
(23, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590069709book.jpg', 'uploads/1590069709allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 2, 0, 0, 0, 0, '2020-05-21 12:01:49', '2020-05-21 12:01:49'),
(24, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590069845book.jpg', 'uploads/1590069845allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 3, 0, 0, 0, 0, '2020-05-21 12:04:05', '2020-05-21 12:04:05'),
(25, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590069946book.jpg', 'uploads/1590069946allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 4, 0, 0, 0, 0, '2020-05-21 12:05:46', '2020-05-21 12:05:46'),
(26, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070055book.jpg', 'uploads/1590070055allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 5, 0, 0, 0, 0, '2020-05-21 12:07:35', '2020-05-21 12:07:35'),
(27, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070175book.jpg', 'uploads/1590070175allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 6, 0, 0, 0, 0, '2020-05-21 12:09:35', '2020-05-21 12:09:35'),
(28, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070290book.jpg', 'uploads/1590070290allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 7, 0, 0, 0, 0, '2020-05-21 12:11:30', '2020-05-21 12:11:30'),
(29, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070403book.jpg', 'uploads/1590070403allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 8, 0, 0, 0, 0, '2020-05-21 12:13:23', '2020-05-21 12:13:23'),
(30, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070515book.jpg', 'uploads/1590070515allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 9, 0, 0, 0, 0, '2020-05-21 12:15:16', '2020-05-21 12:15:16'),
(31, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070628book.jpg', 'uploads/1590070628allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 10, 0, 0, 0, 0, '2020-05-21 12:17:08', '2020-05-21 12:17:08'),
(32, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070745book.jpg', 'uploads/1590070745allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 11, 0, 0, 0, 0, '2020-05-21 12:19:05', '2020-05-21 12:19:05'),
(33, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070863book.jpg', 'uploads/1590070863allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 12, 0, 0, 0, 0, '2020-05-21 12:21:03', '2020-05-21 12:21:03'),
(34, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590070973book.jpg', 'uploads/1590070973allchapters.pdf', '<p>Allchapters</p>', 1, 1, 2, 13, 0, 0, 0, 0, '2020-05-21 12:22:53', '2020-05-21 12:22:53'),
(35, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071076book.jpg', 'uploads/1590071076allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 1, 0, 0, 0, '2020-05-21 12:24:36', '2020-05-21 12:24:36'),
(36, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071250book.jpg', 'uploads/1590071250allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 2, 0, 0, 0, '2020-05-21 12:27:30', '2020-05-21 12:27:30'),
(37, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071400book.jpg', 'uploads/1590071400allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 3, 0, 0, 0, '2020-05-21 12:30:00', '2020-05-21 12:30:00'),
(38, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071533book.jpg', 'uploads/1590071533allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 4, 0, 0, 0, '2020-05-21 12:32:13', '2020-05-21 12:32:13'),
(39, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071638book.jpg', 'uploads/1590071638allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 5, 0, 0, 0, '2020-05-21 12:33:58', '2020-05-21 12:33:58'),
(40, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071783book.jpg', 'uploads/1590071783allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 6, 0, 0, 0, '2020-05-21 12:36:23', '2020-05-21 12:36:23'),
(41, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590071924book.jpg', 'uploads/1590071924allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 7, 0, 0, 0, '2020-05-21 12:38:44', '2020-05-21 12:38:44'),
(42, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072039book.jpg', 'uploads/1590072039allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 8, 0, 0, 0, '2020-05-21 12:40:39', '2020-05-21 12:40:39'),
(43, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072275book.jpg', 'uploads/1590072275allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 9, 0, 0, 0, '2020-05-21 12:44:35', '2020-05-21 12:44:35'),
(44, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072372book.jpg', 'uploads/1590072372allchapters.pdf', '<p>Allchapters</p>', 2, 1, 2, 0, 10, 0, 0, 0, '2020-05-21 12:46:12', '2020-05-21 12:46:12'),
(45, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072468book.jpg', 'uploads/1590072468allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 1, 0, 0, '2020-05-21 12:47:48', '2020-05-21 12:47:48'),
(46, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072570book.jpg', 'uploads/1590072570allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 2, 0, 0, '2020-05-21 12:49:30', '2020-05-21 12:49:30'),
(47, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072666book.jpg', 'uploads/1590072666allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 3, 0, 0, '2020-05-21 12:51:06', '2020-05-21 12:51:06'),
(48, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072771book.jpg', 'uploads/1590072771allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 4, 0, 0, '2020-05-21 12:52:51', '2020-05-21 12:52:51'),
(49, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072872book.jpg', 'uploads/1590072872allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 5, 0, 0, '2020-05-21 12:54:32', '2020-05-21 12:54:32'),
(50, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590072979book.jpg', 'uploads/1590072979allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 6, 0, 0, '2020-05-21 12:56:19', '2020-05-21 12:56:19'),
(51, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590073850book.jpg', 'uploads/1590073850allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 7, 0, 0, '2020-05-21 13:10:50', '2020-05-21 13:10:50'),
(52, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590224593book.jpg', 'uploads/1590224593allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 8, 0, 0, '2020-05-23 07:03:13', '2020-05-23 07:03:13'),
(53, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590224717book.jpg', 'uploads/1590224717allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 9, 0, 0, '2020-05-23 07:05:17', '2020-05-23 07:05:17'),
(54, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590224960book.jpg', 'uploads/1590224960allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 10, 0, 0, '2020-05-23 07:09:20', '2020-05-23 07:09:20'),
(55, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590225074book.jpg', 'uploads/1590225074allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 11, 0, 0, '2020-05-23 07:11:14', '2020-05-23 07:11:14'),
(56, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590225260book.jpg', 'uploads/1590225260allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 12, 0, 0, '2020-05-23 07:14:20', '2020-05-23 07:14:20'),
(57, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590226011book.jpg', 'uploads/1590226011allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 13, 0, 0, '2020-05-23 07:26:51', '2020-05-23 07:26:51'),
(58, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590226196book.jpg', 'uploads/1590226196allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 14, 0, 0, '2020-05-23 07:29:56', '2020-05-23 07:29:56'),
(59, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590227000book.jpg', 'uploads/1590227000allchapters.pdf', '<p>Allchapters</p>', 3, 1, 2, 0, 0, 15, 0, 0, '2020-05-23 07:43:20', '2020-05-23 07:43:20'),
(60, 'Allchapters', 'https://drive.google.com/file/d/16nyodjE0iHuKCi1iNc0BqJ-Bj6PHO_BH/view', 'uploads/1590227127book.jpg', 'uploads/1590227127allchapters.pdf', '<p>Allchapters</p>', 5, 1, 2, 0, 0, 0, 0, 3, '2020-05-23 07:45:27', '2020-05-23 07:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_09_154845_create_categoriesofdoctors_table', 1),
(6, '2020_03_09_165929_create_code_table', 1),
(9, '2020_03_12_110054_create_questions_table', 1),
(10, '2020_03_12_110123_create_answers_table', 1),
(11, '2020_03_13_145541_create_users_eams_table', 1),
(12, '2020_03_13_180544_create_redeems_table', 1),
(13, '2020_03_14_110058_create_doc_scoures_table', 1),
(15, '2020_03_17_162800_create_codes_table', 3),
(16, '2014_10_12_000000_create_users_table', 4),
(19, '2020_03_30_091711_create_comment_eams_table', 7),
(27, '2020_03_10_112733_create_flights_table', 13),
(28, '2020_03_28_182943_create_basic_managements_table', 14),
(29, '2016_06_01_000001_create_oauth_auth_codes_table', 15),
(30, '2016_06_01_000002_create_oauth_access_tokens_table', 15),
(31, '2016_06_01_000003_create_oauth_refresh_tokens_table', 15),
(32, '2016_06_01_000004_create_oauth_clients_table', 15),
(33, '2016_06_01_000005_create_oauth_personal_access_clients_table', 15),
(34, '2020_04_04_073204_create_cvscurriculums_table', 16),
(35, '2020_04_04_104707_create_diabetescurriculums_table', 17),
(36, '2020_04_04_111551_create_respiratorycurriculums_table', 18),
(37, '2020_04_04_113648_create_miscellaneouscurriculums_table', 19),
(38, '2020_03_11_192518_create_questionnaires_table', 20),
(39, '2020_03_09_161126_create_cat_table', 21),
(40, '2020_05_23_075415_create_oncolcgycurriculums_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneouscurriculums`
--

CREATE TABLE `miscellaneouscurriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `miscellaneouscurriculums`
--

INSERT INTO `miscellaneouscurriculums` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'smoking cessation', 'fa-book-reader', NULL, NULL),
(2, 'obesity and nutrition ', 'fa-book-reader', NULL, NULL),
(3, 'mental Health ', 'fa-book-reader', NULL, NULL),
(4, 'country specific health issues', 'fa-book-reader', NULL, NULL),
(5, 'basics of GCP and research', 'fa-book-reader', NULL, NULL),
(6, 'basics of medical statistics ', 'fa-book-reader', NULL, NULL),
(7, 'conflict resolution and basic communication skills', 'fa-book-reader', NULL, NULL),
(8, 'Physical exercise', 'fa-book-reader', NULL, NULL),
(10, 'digital health', 'fa-book-reader', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('002f825641cabebba9ceea9d12a39d4db9493fd60654ddb4a7fda6cf99c5721111354cdbc6cd8e80', 3, 1, 'MyApp', '[]', 0, '2020-04-10 12:15:58', '2020-04-10 12:15:58', '2021-04-10 14:15:58'),
('117838cbe582f7174760a781dcbb76d4407e70491dbed47983fa6410853187a591d69bb51aeedbea', 16, 1, 'MyApp', '[]', 0, '2020-05-26 02:43:48', '2020-05-26 02:43:48', '2021-05-25 19:43:48'),
('17290b819b4cc9b105225aa114adac6a25454d5e14fc27104d9a0d3558008d020d8440b1656064fb', 9, 1, 'MyApp', '[]', 0, '2020-04-10 12:35:58', '2020-04-10 12:35:58', '2021-04-10 14:35:58'),
('4238a67e06f0eef7e53f9c907937428cc4dfba5e838355de6d3f8250492722b4788f6016e4431c7d', 13, 1, 'MyApp', '[]', 0, '2020-04-10 13:30:45', '2020-04-10 13:30:45', '2021-04-10 15:30:45'),
('5545c4b48f57a188eadc0f844c2f6107e987694bf90d6e4212a8834c44dda2416221f92cf989cd92', 2, 1, 'MyApp', '[]', 0, '2020-05-29 20:09:47', '2020-05-29 20:09:47', '2021-05-29 13:09:47'),
('5c258bbd1693c1dd9c8dee63a1c6d254b461b4479376b2dcbf9f503a183c9739399b27191488e083', 11, 1, 'MyApp', '[]', 0, '2020-04-10 12:50:35', '2020-04-10 12:50:35', '2021-04-10 14:50:35'),
('6a213cc6de4a767ddbeb3ed1b954a07a60216a1b004761babc81e15286206981999d412ae08e68f7', 2, 1, 'MyApp', '[]', 0, '2020-06-03 17:50:55', '2020-06-03 17:50:55', '2021-06-03 10:50:55'),
('6b7d65208d3955774e18880823f0485960eba8df2bc27cc03b7279ece45f00bcf810143b3dab621f', 13, 1, 'MyApp', '[]', 0, '2020-04-10 12:58:22', '2020-04-10 12:58:22', '2021-04-10 14:58:22'),
('6bc542bb92809cf27cce04ba1c69766bb7d03897a22072bdcb40b60b96a71928d04ca8a493046c8c', 13, 1, 'MyApp', '[]', 0, '2020-04-10 12:51:10', '2020-04-10 12:51:10', '2021-04-10 14:51:10'),
('72ba918ab3e4e84f745df348a5b5828be885d28b5c97e6bba08b9330c861e759c34e8c8999f08327', 2, 1, 'MyApp', '[]', 0, '2020-06-11 03:23:30', '2020-06-11 03:23:30', '2021-06-10 20:23:30'),
('72eef905d5ac7b982028a7ab6b2a17dd84acb0a3a5029644d1380d1f04e8e8b64c305c29c2226c7e', 2, 1, 'MyApp', '[]', 0, '2020-04-22 23:55:55', '2020-04-22 23:55:55', '2021-04-22 16:55:55'),
('76a6d5d295af791b5367da757efc76a5ccd9f595508600f62f13b51986929d5c1afdf2a743ed8203', 16, 1, 'MyApp', '[]', 0, '2020-06-04 23:17:49', '2020-06-04 23:17:49', '2021-06-04 16:17:49'),
('8218dc6fd439022528ec05f957e5a21158e11bfe11679a34a7140f314b33744e15e8b0094dc48858', 2, 1, 'MyApp', '[]', 0, '2020-06-11 03:21:05', '2020-06-11 03:21:05', '2021-06-10 20:21:05'),
('956fe37daf9367e3864a778e13ca7ee77e44929131dfa237e1969324dce46d734a028804fe61f5dc', 2, 1, 'MyApp', '[]', 0, '2020-06-10 00:54:45', '2020-06-10 00:54:45', '2021-06-09 17:54:45'),
('998747806bdeff1e3b3823f712538a7638e72113b4034ae85784cb6ac823f1340819b216a3cec072', 6, 1, 'MyApp', '[]', 0, '2020-04-10 12:18:40', '2020-04-10 12:18:40', '2021-04-10 14:18:40'),
('99e7475441762f057479bb0f851025bb4692c7d65e865661df98aa9d3243ecfa74156549863844fa', 8, 1, 'MyApp', '[]', 0, '2020-04-10 12:22:06', '2020-04-10 12:22:06', '2021-04-10 14:22:06'),
('a30e6d7deccc6820128301b0d93fc2b23e2679163d8afd8cd24e6767d5c6948afc90d4fbaacd8b6f', 2, 1, 'MyApp', '[]', 0, '2020-06-02 01:34:05', '2020-06-02 01:34:05', '2021-06-01 18:34:05'),
('a598429ff0fa55f55ba3a6426f3f00dc17aa79e2ef0aea934e4238c91197d56a07cd0fccc6e205bd', 17, 1, 'MyApp', '[]', 0, '2020-05-26 02:43:05', '2020-05-26 02:43:05', '2021-05-25 19:43:05'),
('a82c3ba7318db5b50d9b5deb81887a60e9a67f1a7dcea8952e175e1a5c762372053f711123bb9678', 2, 1, 'MyApp', '[]', 0, '2020-06-03 14:26:43', '2020-06-03 14:26:43', '2021-06-03 07:26:43'),
('aa086e6cb171e9aaedf7ac220919c89befede20e60bdd7fc018fa4b0011a4f7808d8f9741fb09a44', 5, 1, 'MyApp', '[]', 0, '2020-04-10 12:17:35', '2020-04-10 12:17:35', '2021-04-10 14:17:35'),
('ad63cc6531143774e37f2165089c23df3dc822f5515f5d64d8b734e527f6a106e9d08bfd2f665e05', 27, 1, 'MyApp', '[]', 0, '2020-06-04 15:59:56', '2020-06-04 15:59:56', '2021-06-04 08:59:56'),
('b50df257620d1aedb87afdf87fcca489e17f8b5c1963f2c10e4246a7c6600a470a5dcc9dfc03ef8a', 16, 1, 'MyApp', '[]', 0, '2020-05-26 02:29:00', '2020-05-26 02:29:00', '2021-05-25 19:29:00'),
('bacf4cce15e8c84c0e24352ae3da20b0e1ed8d10bb166943568813a4b00a81c8f6bc4908fe22a1b4', 16, 1, 'MyApp', '[]', 0, '2020-06-04 22:40:46', '2020-06-04 22:40:46', '2021-06-04 15:40:46'),
('be0a0146d9d02f2da2941d9526073a1cfffecea9ab4d41ebc21e8a2f1d03135e459559bcbe046c31', 2, 1, 'MyApp', '[]', 0, '2020-06-02 00:52:39', '2020-06-02 00:52:39', '2021-06-01 17:52:39'),
('d0368bc422ba7abad11c2fb42af4eb78f68c3e2ff03096159df0a4bcdf976d7f1e7497523ce4106f', 2, 1, 'MyApp', '[]', 0, '2020-05-30 20:42:06', '2020-05-30 20:42:06', '2021-05-30 13:42:06'),
('d7c6a73dad68b75d3c722684acd32e708c33c030d5baded5eb2d14203d75c97901f6b79d5474cb09', 28, 1, 'MyApp', '[]', 0, '2020-06-04 16:02:41', '2020-06-04 16:02:41', '2021-06-04 09:02:41'),
('db85e1541f57af064aa7ff832fe72d5c61982db300352b39c5d47f29287871fe3ad39dfcd6224220', 13, 1, 'MyApp', '[]', 0, '2020-04-10 15:13:21', '2020-04-10 15:13:21', '2021-04-10 17:13:21'),
('df8408a249135745aaea170a0ef2bb30d66895f68ddddf7694e8c92caf3e3acf5b3884bf6367c2b4', 2, 1, 'MyApp', '[]', 0, '2020-06-06 15:41:12', '2020-06-06 15:41:12', '2021-06-06 08:41:12'),
('e1e9e0e4e047259b0f279dc35b2ad66501a4fcb57be4c8085da3a06cdc5c57a474dab907ef04dff0', 10, 1, 'MyApp', '[]', 0, '2020-04-10 12:36:27', '2020-04-10 12:36:27', '2021-04-10 14:36:27'),
('ed33f77fa90c6b0fc09009b116e4e49798298b144819527817211ada9403e140567d9a925308ec5d', 2, 1, 'MyApp', '[]', 0, '2020-04-23 18:06:14', '2020-04-23 18:06:14', '2021-04-23 11:06:14'),
('f031290bc1248ce46d120f6c74c7195e119b55d507db4fae5230d94b45ad0d210070f6a0a5ab2808', 2, 1, 'MyApp', '[]', 0, '2020-04-23 17:32:43', '2020-04-23 17:32:43', '2021-04-23 10:32:43'),
('f60342898955bedffe8bd920c37b6bcc28dd07e2fee27f5e730c8f7bc28c45cb12a0956be6f2155f', 2, 1, 'MyApp', '[]', 0, '2020-06-02 01:33:23', '2020-06-02 01:33:23', '2021-06-01 18:33:23'),
('fbe158f8df9acb0dc8320d0be1a56942858260868cbe11ef8c8f0898eac9473b2431fdfc6e9150d4', 1, 1, 'MyApp', '[]', 0, '2020-05-26 02:43:32', '2020-05-26 02:43:32', '2021-05-25 19:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'ux6qZmSS0Bdyb29TXnpE3bcOoSAdlAlNsdsggb9e', 'http://localhost', 1, 0, 0, '2020-04-08 10:39:36', '2020-04-08 10:39:36'),
(2, NULL, 'Laravel Password Grant Client', 'TlQ6F0I7A30YINKxhWsbwCthR3gzkqlvGxC6p2IV', 'http://localhost', 0, 1, 0, '2020-04-08 10:39:36', '2020-04-08 10:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-04-08 10:39:36', '2020-04-08 10:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oncolcgycurriculums`
--

CREATE TABLE `oncolcgycurriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pola_pola270@yahoo.com', '$2y$10$VeWvYbLdCGCN0xNxtKQqwepEuOK/HspCwl3LRlh1kihmKxXuD80Za', '2020-05-07 14:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `categoriesofdoctors_id` int(11) NOT NULL,
  `cvscurriculums_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `user_id`, `title`, `purpose`, `cat_id`, `categoriesofdoctors_id`, `cvscurriculums_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'cvs', 'cvs', 1, 5, 0, '2020-04-22 12:32:31', '2020-04-22 12:32:31'),
(2, 1, 'diabetes', 'diabetes', 2, 5, 0, '2020-04-22 12:33:54', '2020-04-22 12:33:54'),
(3, 1, 'respiratory', 'respiratory', 3, 5, 0, '2020-04-22 12:35:00', '2020-04-22 12:35:00'),
(4, 1, 'oncology', 'oncology', 4, 5, 0, '2020-04-22 12:35:55', '2020-04-22 12:35:55'),
(5, 1, 'miscellaneous', 'miscellaneous', 5, 5, 0, '2020-04-22 12:37:04', '2020-04-22 12:37:04'),
(6, 1, 'cvs-curriculum', 'cvs-curriculum', 1, 1, 2, '2020-04-22 12:38:29', '2020-04-22 12:38:29'),
(7, 1, 'diabetes-curriculum', 'diabetes-curriculum', 2, 1, 2, '2020-04-22 12:39:42', '2020-04-22 12:39:42'),
(8, 1, 'respiratory-curriculm', 'respiratory-curriculm', 3, 1, 2, '2020-04-22 12:40:38', '2020-04-22 12:40:38'),
(9, 1, 'miscellaneous-curriculum', 'miscellaneous-curriculum', 5, 1, 2, '2020-04-22 12:42:11', '2020-04-22 12:42:11'),
(10, 1, 'assessment', 'assessment', 6, 0, 0, '2020-04-26 10:22:07', '2020-04-26 10:22:07'),
(11, 1, 'pols', 'ssss', 1, 5, 0, '2020-05-03 09:08:16', '2020-05-03 09:08:16'),
(12, 1, 'dsd', 'dsdsd', 3, 5, 0, '2020-05-20 11:23:35', '2020-05-20 11:23:35'),
(13, 1, 'dsd', 'dsdsd', 1, 5, 0, '2020-05-20 11:24:28', '2020-05-20 11:24:28'),
(14, 1, '45454', '7844564', 1, 2, 1, '2020-05-20 11:25:15', '2020-05-20 11:25:15'),
(15, 1, 'dsdsd', 'sdsdsds', 3, 2, 1, '2020-05-20 11:30:29', '2020-05-20 11:30:29'),
(16, 1, 'eqee', 'eqwe', 2, 5, 1, '2020-05-20 11:38:25', '2020-05-20 11:38:25'),
(17, 1, 'ewewew', 'ewwew', 2, 3, 2, '2020-05-20 11:40:28', '2020-05-20 11:40:28'),
(18, 1, 'wdsfdsf', 'dfsdfdsf', 2, 5, 2, '2020-05-20 11:47:25', '2020-05-20 11:47:25'),
(19, 1, 'cxczxc', 'cxzcxzcxz', 2, 3, 2, '2020-05-20 11:55:53', '2020-05-20 11:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `number_answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionnaire_id`, `question`, `number_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '3', '2020-04-22 12:33:10', '2020-04-22 12:33:10'),
(2, 2, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:34:25', '2020-04-22 12:34:25'),
(3, 3, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:35:26', '2020-04-22 12:35:26'),
(4, 4, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '2', '2020-04-22 12:36:18', '2020-04-22 12:36:18'),
(5, 5, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:37:35', '2020-04-22 12:37:35'),
(6, 6, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:38:52', '2020-04-22 12:38:52'),
(7, 7, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:40:00', '2020-04-22 12:40:00'),
(8, 8, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:41:03', '2020-04-22 12:41:03'),
(9, 9, 'In this section, read our entertaining short stories specially written for intermediate (CEFR level B1) or upper intermediate (CEFR level B2) learners.\r\n\r\nYou will improve your reading fluency and comprehension and develop your vocabulary. Each story has interactive exercises to help you understand and use the language', '1', '2020-04-22 12:42:33', '2020-04-22 12:42:33'),
(10, 10, 'polaaaaaaaaaaaaaaaaaaaaaaa', '3', '2020-04-26 10:22:34', '2020-04-26 10:22:34'),
(11, 11, 'pppppppppppp', '3', '2020-05-03 09:08:34', '2020-05-03 09:08:34'),
(12, 11, 'dsadsd', '3', '2020-05-03 09:11:12', '2020-05-03 09:11:12'),
(13, 11, 'ccvcvc', '3', '2020-05-03 09:11:52', '2020-05-03 09:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `redeems`
--

CREATE TABLE `redeems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mr_mrs` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `prof` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type_of_attendance` varchar(255) NOT NULL,
  `type_of_contribution_submitted` varchar(255) NOT NULL,
  `title_of_the_contribution` varchar(255) NOT NULL,
  `conference_fee` varchar(255) NOT NULL,
  `conference_dinner` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `money_order_issued_on` varchar(255) NOT NULL,
  `money_order_issued_to` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redeems`
--

INSERT INTO `redeems` (`id`, `first_name`, `middle_name`, `last_name`, `mr_mrs`, `dr`, `prof`, `nationality`, `passport`, `affiliation`, `mobile_no`, `email`, `type_of_attendance`, `type_of_contribution_submitted`, `title_of_the_contribution`, `conference_fee`, `conference_dinner`, `total_amount`, `money_order_issued_on`, `money_order_issued_to`, `created_at`, `updated_at`) VALUES
(3, 'pola', 'adel', 'anton', 'hanen', 'mechel', 'tony', '2123132132', 'sadasdas', 'sadasdasd', '0212332', 'adel@p.com', 'Participant', 'Oral Presentation (Short paper 15 Minutes)', 'sfsfdsfds', '512', '51515', '81515', '151', '15648', '2020-03-18 07:13:09', '2020-03-18 07:13:09'),
(4, 'gehan', 'helmy', 'srbana', 'sadasd', 'sadsafdbgfxb', 'bfdbfdbfbg', '325488946', 'zvxvxvxv', 'dbdbfbgnh', '01154857575', 'gehan@gehan.com', 'Participant', 'Review Talk (Long paper 40 Minutes)', 'fsdfdsfds', '1485415', '91841', '4914946', '599888', '15151515', '2020-03-18 07:16:35', '2020-03-18 07:16:35'),
(5, 'first_name', 'middle_name', 'last_name', 'mr_mrs', 'dr', 'prof', 'nationality', 'passport', 'affiliation', 'mobile_no', 'email@email.com', 'type_of_attendance', 'type_of_contribution_submitted', 'title_of_the_contribution', 'conference_fee', 'conference_dinner', 'total_amount', 'money_order_issued_on', 'money_order_issued_to', '2020-04-10 15:11:30', '2020-04-10 15:11:30'),
(7, 'pols', 'sdel', 'anton', 'mddd', 'dr', 'prof', 'nationality', 'passport', 'affiliation', '01288019733', 'p@p.com', 'type_of_attendance', 'type_of_contribution_submitted', 'title_of_the_contribution', 'conference_fee', 'conference_dinner', 'total_amount', 'money_order_issued_on', 'money_order_issued_to', '2020-04-11 07:20:43', '2020-04-11 07:20:43'),
(8, 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', 'ma7mouda7med1995@gmail.com', 'Participant', 'Regular talk (Long paper 25 Minutes)', 'mm', 'mm', 'mm', 'mm', 'mm', 'mm', '2020-06-03 21:59:56', '2020-06-03 21:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `respiratorycurriculums`
--

CREATE TABLE `respiratorycurriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `respiratorycurriculums`
--

INSERT INTO `respiratorycurriculums` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Definition, Pathogenesis, Pathophysiology & Risk factors of COPD', 'fa-book-reader', NULL, NULL),
(2, 'Grading and Grouping of COPD', 'fa-book-reader', NULL, NULL),
(3, 'Management of COPD stable & Exacerbation', 'fa-book-reader', NULL, NULL),
(4, 'Risk Factors, classifications and clinical manifestations of Lung Cancer', 'fa-book-reader', NULL, NULL),
(5, 'Investigation for Diagnosis & Staging of Lung Cancer  ', 'fa-book-reader', NULL, NULL),
(6, 'Definition, Pathogenesis, Pathophysiology & Risk factors of Bronchial Asthma', 'fa-book-reader', NULL, NULL),
(7, 'Diagnosis of Bronchial Asthma History, Clinical Examination, Spirometry\r\n\r\n', 'fa-book-reader', NULL, NULL),
(8, 'Assessment of Bronchial Asthma Severity & control', 'fa-book-reader', NULL, NULL),
(9, 'Medications of Bronchial Asthma: pharmacological(Controller, Reliever, Add-on) and non-pharmacological', 'fa-book-reader', NULL, NULL),
(10, 'Guidelines of Management of Stable Asthma and exacerbations', 'fa-book-reader', NULL, NULL),
(11, 'Normal Sleep Physiology , Definition, Risk factors and Pathogenesis of OSA', 'fa-book-reader', NULL, NULL),
(12, 'Clinical Manifestation and Scoring of sleep disordered breathing', 'fa-book-reader', NULL, NULL),
(13, 'Burden of OSA on different body System Brain – heart – diabetes, Respiratory', 'fa-book-reader', NULL, NULL),
(14, 'Diagnosis of OSA & Interpretation of Sleep Report', 'fa-book-reader', NULL, NULL),
(15, 'TTT of OSA Medical and Surgical', 'fa-book-reader', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `scoure` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `scoure`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`, `dr_id`, `admin`) VALUES
(1, 'admin', 'admin@admin.com', 0, '2020-05-19 08:11:13', '$2y$10$l/PggFZv.5m40mBHAYAiCe5IiW4diDxAZ.3a9gUewUsTUvn79.dMS', NULL, '2020-03-18 11:47:13', '2020-03-18 11:47:13', 0, 0, 1),
(2, 'dr', 'pola_pola270@yahoo.com', 53, '2020-05-17 08:25:41', '$2y$10$0EI2dLRFyo7bQzM4iKjEZ.Bq4IuoD16IfYPqu8A/NASh6n2JVM8dG', NULL, '2020-03-18 11:49:04', '2020-06-04 05:23:38', 1, 0, 0),
(13, 'adel', 'adel@adel.com', 8, '2020-05-25 07:00:00', '$2y$10$lRGyZtwz7sShP478J/8zTOq2.ImcEb736ZpgqpnnpblCl6qUFp9Sm', NULL, '2020-04-10 12:51:10', '2020-04-10 14:57:46', 1, 0, 0),
(14, 'mohsn', 'mohsn@mohsn.com', 0, '2020-05-25 07:00:00', '$2y$10$4umMPmos6iNx0y70OysVXeGvWh2j3hE/GTDN4lBVuGOhJisuqfOH.', NULL, '2020-04-22 07:29:09', '2020-04-22 07:29:09', 0, 0, 0),
(15, 'Koko', 'koko@koko.com', 2, NULL, '$2y$10$lAXpGY0oxDIKB8sY8JiL.OJDtuWfI2FDLvOlSFXqcyQuhiSQhV.Gy', NULL, '2020-04-22 23:21:57', '2020-04-26 08:01:19', 1, 0, 0),
(16, 'Fady Tamer', 'fadytamer.gd@hotmail.com', 3, '2020-05-25 07:00:00', '$2y$10$LjM4gchKv5Q/ABnvKmu/5uJ8pI4f5hSLXRlooegLVAerKzPLWvey2', '6vLzSAsm2ruUkaGcUJ5r6cmC4nSeYfj5aZx8j7TVxYZ6yeEGyycZNPi0wwJL', '2020-04-23 02:09:47', '2020-05-26 02:44:55', 1, 0, 0),
(17, 'Fady Tamer222', 'fadytamer.gd@gmail.com', 0, '2020-05-25 07:00:00', '$2y$10$seouwDK4nTWqrF.AT.pPfucibGCd3BQnhQqqpSv1LK2//H1m8K9CC', NULL, '2020-04-23 02:35:12', '2020-04-23 02:35:12', 0, 0, 0),
(18, 'Wagida Abdel Rahman Anwar', 'wagidaanwar@gmail.com', 0, '2020-05-25 07:00:00', '$2y$10$XQBZCo9T2sK3Ah3Yd7KpRuBkPpXD0i3fiw/JKXWr1P4FtZlD6gwcK', NULL, '2020-04-23 02:55:45', '2020-04-23 02:55:45', 1, 0, 0),
(19, 'Wael safwat', 'wgabal@hotmail.com', 0, '2020-05-25 07:00:00', '$2y$10$kl04hdf6/6bTM1K0ue.V9uV4ekVTI1fYBUQpNPrZemUQPsoiuZTGu', NULL, '2020-04-23 02:56:43', '2020-04-23 02:56:43', 1, 0, 0),
(20, 'Adel', 'adelaelsayed@gmail.com', 0, NULL, '$2y$10$iAoNOevhjl47vOsg/E1EqO0AhPghwS566Dp1EfXxKQUF6uo//67nq', NULL, '2020-04-23 03:01:47', '2020-04-23 03:01:47', 1, 0, 0),
(21, 'Joseph', 'joseph@yahoo.com', 0, '2020-05-25 07:00:00', '$2y$10$O62EpH1nSFnFWAMSj8SXrOEqqYf5m65l8AUos5iWcj7a2pvv1NZ1a', NULL, '2020-04-23 17:27:25', '2020-04-23 17:27:25', 0, 0, 0),
(22, 'Sherein', 'sh.bareky@gmail.com', 0, '2020-05-25 07:00:00', '$2y$10$6vhDlqnWwvoVvaYZYbP/nO2Gv/BxhZhKq3KTQtW/.5gJoCPLmZWOO', 'j4JT5zJLU9ucShIuqe9YLKJIBos1UlaWlzIlsKTC1ydcYkDxzkW6tCsz0IIf', '2020-04-24 07:41:50', '2020-06-14 16:00:18', 1, 0, 0),
(23, 'remon', 'remonhany2000@hotmail.com', 0, '2020-05-25 07:00:00', '$2y$10$.66YdPm4UsQUq1Po3g.2Qew8olXXj4DuFbadob7Ss2J0eXqhqqZlK', NULL, '2020-04-24 20:58:37', '2020-04-24 20:58:37', 0, 0, 0),
(24, 'globlatrademap', 'polycarpus.adel@gmail.com', 0, '2020-05-05 08:25:14', '$2y$10$p9F51VrEz5iPyr99f4jUG.Qlhm6pgb/df.oJLZe02qtQljQ9l74Ne', NULL, '2020-05-12 10:04:18', '2020-05-12 10:04:18', 1, 0, 0),
(25, 'globlatrademap', 'adel_anton@gmail.com', 0, NULL, '$2y$10$ShKl1zdjvhZFnFy7mP.BpO7izSNEP45vkHC1bHDJnOVFNRJSAftw.', NULL, '2020-05-13 06:04:48', '2020-05-13 06:04:48', 1, 0, 0),
(26, 'Kassem', 'kassem@acs-egypt.com', 0, '2020-06-03 20:13:03', '$2y$10$rwqM7Gnv30FZ3S6gsK8geuOvE.aJG/hJT0y5xpY391pb76dRxfg0S', 'L10HLtFKu8qrDJETzsn3iNBwwtSzE950wBvs9347uMjzwfTAvYR9GjdYbpkP', '2020-06-03 20:05:22', '2020-06-03 20:13:03', 1, 0, 0),
(27, 'mostafa gamal', 'mostafa.dimamart@gmail.com', 0, '2020-06-03 20:56:21', '$2y$10$S2hb8Bex0z1Ps/Pl7YZS5uKK5X4EMdO5NBY/n/u5WATXqw1loUd2G', 'WIXNucQvP3iYX9ElnxVzaERTUw1XWNo94kjakIYj3PNQnrBh7PUMuyLQ6XNE', '2020-06-03 20:50:30', '2020-06-03 20:56:21', 1, 0, 0),
(28, 'MOmar', 'momar@acs-egypt.com', 0, '2020-06-03 21:30:36', '$2y$10$98uSfjBxBHiYM8CMDYJ0p.FQonMjOhnWp2nW1EcpSrf1c6BrMG8DG', NULL, '2020-06-03 20:55:19', '2020-06-03 21:56:53', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_eams`
--

CREATE TABLE `users_eams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `questionnaire_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_eams`
--

INSERT INTO `users_eams` (`id`, `user_id`, `questionnaire_id`, `created_at`, `updated_at`) VALUES
(23, 2, 1, '2020-04-26 09:22:24', '2020-04-26 09:22:24'),
(24, 2, 10, '2020-04-26 10:32:39', '2020-04-26 10:32:39'),
(25, 16, 10, '2020-05-26 02:33:05', '2020-05-26 02:33:05'),
(26, 16, 1, '2020-05-26 02:44:44', '2020-05-26 02:44:44'),
(27, 16, 11, '2020-05-26 02:44:55', '2020-05-26 02:44:55'),
(28, 28, 1, '2020-06-03 21:53:31', '2020-06-03 21:53:31'),
(29, 28, 11, '2020-06-03 21:54:06', '2020-06-03 21:54:06'),
(30, 28, 2, '2020-06-03 21:56:53', '2020-06-03 21:56:53'),
(31, 2, 5, '2020-06-04 05:23:38', '2020-06-04 05:23:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_managements`
--
ALTER TABLE `basic_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriesofdoctors`
--
ALTER TABLE `categoriesofdoctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_eams`
--
ALTER TABLE `comment_eams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvscurriculums`
--
ALTER TABLE `cvscurriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diabetescurriculums`
--
ALTER TABLE `diabetescurriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_scoures`
--
ALTER TABLE `doc_scoures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miscellaneouscurriculums`
--
ALTER TABLE `miscellaneouscurriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncolcgycurriculums`
--
ALTER TABLE `oncolcgycurriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeems`
--
ALTER TABLE `redeems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `redeems_email_unique` (`email`);

--
-- Indexes for table `respiratorycurriculums`
--
ALTER TABLE `respiratorycurriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_eams`
--
ALTER TABLE `users_eams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `basic_managements`
--
ALTER TABLE `basic_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categoriesofdoctors`
--
ALTER TABLE `categoriesofdoctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment_eams`
--
ALTER TABLE `comment_eams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cvscurriculums`
--
ALTER TABLE `cvscurriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `diabetescurriculums`
--
ALTER TABLE `diabetescurriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doc_scoures`
--
ALTER TABLE `doc_scoures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `miscellaneouscurriculums`
--
ALTER TABLE `miscellaneouscurriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oncolcgycurriculums`
--
ALTER TABLE `oncolcgycurriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `redeems`
--
ALTER TABLE `redeems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `respiratorycurriculums`
--
ALTER TABLE `respiratorycurriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users_eams`
--
ALTER TABLE `users_eams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
