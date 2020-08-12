-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image/1595762732.png', NULL, NULL),
(2, 'image/1595762775.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `locale`, `title`, `description`, `about_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'what do we do', 'We firmly believe in creativity and creating unique ideas in the world of design, and we are considered one of the most important design companies operating in Dubai.\r\nAvocode Interior Design specializes in providing stunning, high-quality interior design', 1, NULL, NULL),
(2, 'ar', 'ماذا نعمل\r\n', 'نؤمن إيماناً راسخاً في الإبداع وخلق أفكار فريدة في عالم التصميم، ونعتبر واحداً من أهم شركات التصميم العاملة في دبي.\r\nأفوكود للتصميم الداخلي متخصصة في تقديم خدمات التصميم الداخلي المذهلة والعالية الجودة والتي تشمل مخططات المساحات، التصميم بأنواعه، إدارة ال', 1, NULL, NULL),
(3, 'en', 'Why choose Avocode?', '. We believe that every customer has different taste, special and unique requirements, and in order to support this trend, Avocode team makes every effort to understand the customer\'s ideas and add their best creativity and innovation to achieve the custo', 2, NULL, NULL),
(4, 'ar', 'لماذا تختار أفوكود ؟\r\n', '. نؤمن بأن كل عميل لديه ذوق مختلف ومتطلبات خاصة وفريدة من نوعها، وسعياً لدعم هذا التوجه يبذل فريق عمل أفوكود جل جهده لفهم أفكار العميل وإضافة أفضل ما عنده من إبداع وابتكار لتحقيق حلم العميل وجعل مشروعه واقعاً حقيقياً. لدينا أفكار وتصاميم إبداعية لا حصر له', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'nasora', 'nasora@gmail.com', 'image/1597062448toptech.jpg', NULL, '$2y$10$cyQq/8pjSZWBel05jGziu.e7vVOEBfEyaRBQaHRdVs5tXI3EeEkm2', NULL, '2020-07-04 10:34:33', '2020-08-10 09:27:28'),
(38, 'superadmin', 'toptechsuperadmin@gmail.com', 'image/1597062296toptech.jpg', NULL, '$2y$10$Bj1p1nJO8Pv.okGNdH9cyO78pt7dQWEVLY5DmV7sLKceDQ388KjqO', NULL, '2020-07-28 05:49:02', '2020-08-10 09:24:56'),
(39, 'subadmin', 'toptechsubadmin@gmail.com', 'image/1597062342toptech.jpg', NULL, '$2y$10$8MHGaszunABK8R88ITR4x.hFe2pEVn2B2iFrnbJU0uyJZS5nm2UZi', NULL, '2020-07-28 05:49:47', '2020-08-10 09:25:42'),
(40, 'new', 'new@gmail.com', 'image/1597062514avatar3.jpg', NULL, '$2y$10$M4XdY019jlpbOPOudaKrreWSA1w3jDWRqv2uoz.AizpFYIdcLH/26', NULL, '2020-08-10 09:28:35', '2020-08-10 09:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `number`, `image`, `created_at`, `updated_at`) VALUES
(1, '/#', 1, 'image/1595875242.png', NULL, '2020-07-27 15:40:42'),
(2, '/#', 2, 'image/1595841632.png', NULL, NULL),
(6, 'ln', 2, 'image/1595876773.png', '2020-07-27 16:06:12', '2020-07-27 16:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `ad_translations`
--

CREATE TABLE `ad_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_translations`
--

INSERT INTO `ad_translations` (`id`, `locale`, `title`, `description`, `button`, `ad_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Avocode Company', 'We seek your services in developing websites and applications', 'Order Service', 1, NULL, NULL),
(2, 'ar', 'شركة افوكود', 'نسعى لخدماتكم في تطوير المواقع والتطبيقات', 'اطلب خدمة', 1, NULL, NULL),
(3, 'en', 'Do you want to create a software company?', 'Do you want this idea to appear to the world? So, what are you waiting for?\r\nDo not let the opportunity be lost in your hands!', 'Order Service', 2, NULL, NULL),
(4, 'ar', 'هل تريد إنشاء شركة برمجيات؟\r\n', 'هل تريد لهذه الفكره أن تظهر للعالم؟ إذا, ماذا تنتظر؟\r\nلا تدع الفرصة تضيع من بين يديك!', 'اطلب خدمة', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `admin_id`, `created_at`, `updated_at`) VALUES
(4, 'image/1595180569.png', 2, NULL, '2020-07-19 14:42:49'),
(5, 'image/1595180595.png', 2, NULL, '2020-07-19 14:43:15'),
(6, 'image/1595180636.png', 2, NULL, '2020-07-19 14:43:56'),
(7, 'image/1595180689.png', 2, NULL, '2020-07-19 14:44:49'),
(8, 'image/1595180689.png', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_translations`
--

CREATE TABLE `article_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_translations`
--

INSERT INTO `article_translations` (`id`, `locale`, `title`, `description`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'article title 1', 'Is a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me', 4, NULL, NULL),
(2, 'ar', 'عنوان المقال 1', 'هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها  التعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.', 4, NULL, NULL),
(3, 'en', 'article title2', 'Is a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me', 5, NULL, NULL),
(4, 'ar', 'عنوان المقال 2', 'هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.', 5, NULL, NULL),
(5, 'en', 'article title 3', 'Is a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me', 6, NULL, NULL),
(6, 'ar', 'عنوان المقال 3', 'هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.', 6, NULL, NULL),
(7, 'en', 'article title 4', 'Is a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me', 7, NULL, NULL),
(8, 'ar', 'عنوان المقال 4', 'هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.', 7, NULL, NULL);
INSERT INTO `article_translations` (`id`, `locale`, `title`, `description`, `article_id`, `created_at`, `updated_at`) VALUES
(9, 'en', 'article title 5', 'Is a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need The simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me\r\n\r\nIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without meIs a vegetarian diet healthier than eating meat? And what should vegan women eat when pregnant? Read more about the vegetarians and vitamins they need\r\n\r\nThe simplest definition of vegetarianism is the consumption of vegetable food is nutrition without me', 8, NULL, NULL),
(10, 'ar', 'عنوان المقال 5', 'هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.هل النظام الغذائي النباتي أكثر صحة من تناول اللحوم؟ وماذا يتوجب على النساء النباتيات أن يتناولن عند حملهن؟ اقرأ المزيد عن النباتيين والفيتامينات التي يحتاجونها\r\n\r\nالتعريف الأبسط للنباتية هو استهلاك الغذاء النباتي هو التغذية دون اللحوم والأسماك والدواجن.', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `image`, `created_at`, `updated_at`) VALUES
(6, 'image/1595183224.png', NULL, '2020-07-19 15:27:04'),
(7, 'image/1595183243.png', NULL, '2020-07-19 15:27:23'),
(8, 'image/1595183264.png', NULL, '2020-07-19 15:27:44'),
(9, 'image/1595183289.png', NULL, '2020-07-19 15:28:09'),
(10, 'image/1595183315.png', NULL, '2020-07-19 15:28:35'),
(11, 'image/1595183330.png', NULL, '2020-07-19 15:28:50'),
(13, 'image/1597136600avatar3_small.jpg', '2020-08-11 06:03:20', '2020-08-11 06:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `client_review_translations`
--

CREATE TABLE `client_review_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_review_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_review_translations`
--

INSERT INTO `client_review_translations` (`id`, `locale`, `name`, `review`, `client_review_id`, `created_at`, `updated_at`) VALUES
(7, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 6, NULL, NULL),
(8, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 6, NULL, NULL),
(11, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 7, NULL, NULL),
(12, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 7, NULL, NULL),
(15, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 8, NULL, NULL),
(16, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 8, NULL, NULL),
(17, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 9, NULL, NULL),
(18, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 9, NULL, NULL),
(19, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 10, NULL, NULL),
(20, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 10, NULL, NULL),
(21, 'en', 'D. ayman thawki', 'It is my pleasure to deal with Avocode Interior Design because of its distinctive credibility in presenting designs and working on them in a timely manner, in addition to the accuracy and taste in meeting the needs of its customers and the wonderful ideas', 11, NULL, NULL),
(22, 'ar', 'د. أيمن الذوقي', 'إنه من دواعي سروري تعاملي مع شركة أفوكود للتصميم الداخلي بسبب مصداقيتها المميزة في تقديم التصاميم والعمل عليها في وقتها المناسب، بالإضافة إلى الدقة والذوق في تلبية حاجات عملائها وأفكارها الرائعة التي تقدمها لعملائها أيضا وأتمنى لهم كل التوفيق مستقبلاً', 11, NULL, NULL),
(25, 'en', NULL, 'n', 13, NULL, NULL),
(26, 'ar', 'lkb', 'klb', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `email`, `whatsapp`, `image`, `created_at`, `updated_at`) VALUES
(1, 'info@toptech.com', '+972 59-512-5689', 'image/1597041549toptech.jpg', NULL, '2020-08-10 03:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `company_features`
--

CREATE TABLE `company_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_features`
--

INSERT INTO `company_features` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'image/1595182636.png', '2020-06-30 04:20:36', '2020-07-19 15:17:16'),
(4, 'image/1595328243.png', NULL, '2020-07-21 07:44:03'),
(5, 'image/1595182685.png', NULL, '2020-07-19 15:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `company_feature_translations`
--

CREATE TABLE `company_feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_feature_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_feature_translations`
--

INSERT INTO `company_feature_translations` (`id`, `locale`, `title`, `description`, `company_feature_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Thinking and creativity', 'As we strive to reach unique and innovative solutions in order to shine and highlight the distinctiveness of your brand and business and attract the attention of customers, the basis of business success is the idea.', 3, NULL, NULL),
(2, 'ar', 'تفكير وإبداع', 'حيث نسعى الى الوصول لحلول فريدة من نوعها ومبتكرة حتى تلمّع وتُبرز تميز علامتك التجارية وأعمالك وتجذب انتباه العملاء، فأساس نجاح العمل هو الفكرة.', 3, NULL, NULL),
(3, 'en', 'Professional staff', 'Every day the team learns something new and holds the passion to benefit you with its expertise and skills. Our team works as one unit in favor of making the work a success.', 4, NULL, NULL),
(4, 'ar', 'فريق عمل محترف', 'كل يوم يتعلم فريق العمل شيئاً جديداً، ويحمل الشغف لإفادتك بخبراته ومهاراته، ففريق العمل لدينا يعمل كوحدة واحدة في صالح انجاح العمل.', 4, NULL, NULL),
(5, 'en', 'suitable prices', 'Quality services designed in a variety of different packages, at reasonable prices and flexible, to suit all institutions and all companies of all sizes.', 5, NULL, NULL),
(6, 'ar', 'أسعار مناسبة', 'خدمات عالية الجودة صُمّمت في باقات متنوعة ومتعددة، وبأسعار مناسبة ومرنة حتى تناسب كافة المؤسسات وجميع الشركات بمختلف أحجامها.', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_translations`
--

CREATE TABLE `company_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_translations`
--

INSERT INTO `company_translations` (`id`, `locale`, `name`, `description`, `address`, `footer`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'TopTech', 'this text is an example of description text, we can replace it with any description', 'Gaza ElRemall Street', 'All right reserved to TopTech company ©', 1, NULL, NULL),
(2, 'ar', 'توب تيك', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من', 'غزة الرمال', '© جميع الحقوق محفوظة لدى توبتيك', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `project_id`, `created_at`, `updated_at`) VALUES
(41, 'image/1595158643.png', 38, '2020-07-19 08:37:23', '2020-07-19 08:37:23'),
(42, 'image/1595158665.png', 39, '2020-07-19 08:37:45', '2020-07-19 08:37:45'),
(44, 'image/1595173039.png', 40, '2020-07-19 12:37:19', '2020-07-19 12:37:19'),
(45, 'image/1595173079.png', 41, '2020-07-19 12:37:59', '2020-07-19 12:37:59'),
(47, 'image/1595173141.png', 42, NULL, NULL),
(52, 'image/1595913106.png', 37, '2020-07-28 02:11:46', '2020-07-28 02:11:46');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_14_090324_create_service_types_table', 1),
(4, '2020_06_14_092129_create_client_reviews_table', 1),
(5, '2020_06_14_112825_create_services_table', 1),
(6, '2020_06_17_140157_create_users_table', 1),
(7, '2020_06_17_160513_create_projects_table', 1),
(8, '2020_06_18_050606_create_teams_table', 1),
(9, '2020_06_20_190544_create_articles_table', 2),
(10, '2020_06_20_192400_create_article_translations_table', 3),
(11, '2020_06_20_192456_create_images_table', 4),
(12, '2020_06_28_075926_create_project_translations_table', 5),
(13, '2020_06_28_180831_create_service_type_translations_table', 6),
(14, '2020_06_28_180900_create_team_translations_table', 6),
(15, '2020_06_28_182540_create_company_features_table', 7),
(16, '2020_06_28_182557_create_company_feature_translations_table', 7),
(17, '2020_06_28_183337_create_client__review_translations_table', 7),
(18, '2020_06_28_183936_create_client_review_translations_table', 8),
(19, '2020_06_29_114431_create_permission_tables', 9),
(20, '2020_06_30_182330_create_admins_table', 10),
(21, '2020_07_03_125831_create_admins_table', 11),
(22, '2020_07_03_130728_create_admins_table', 12),
(23, '2020_07_03_132237_create_admins_table', 13),
(24, '2020_07_03_165457_create_permission_translations_table', 14),
(25, '2020_07_18_141019_create_images_table', 15),
(26, '2020_07_19_162241_create_articles_table', 16),
(27, '2020_07_19_162413_create_article_translations_table', 16),
(28, '2020_07_25_145607_create_companies_table', 17),
(29, '2020_07_25_145607_create_company_table', 18),
(30, '2020_07_25_145643_create_company_translations_table', 19),
(31, '2020_07_25_173215_create_company_table', 20),
(32, '2020_07_25_173310_create_company_translations_table', 20),
(33, '2020_07_26_053220_create_order_steps_table', 21),
(34, '2020_07_26_053317_create_order_step_translations_table', 21),
(35, '2020_07_26_103245_create_abouts_table', 22),
(36, '2020_07_26_105451_create_abouts_table', 23),
(37, '2020_07_26_110723_create_about_translations_table', 24),
(38, '2020_07_27_084710_create_ads_table', 25),
(39, '2020_07_27_085547_create_ads_table', 26),
(40, '2020_07_27_085921_create_ad_translations_table', 27),
(46, '2016_06_01_000001_create_oauth_auth_codes_table', 28),
(47, '2016_06_01_000002_create_oauth_access_tokens_table', 28),
(48, '2016_06_01_000003_create_oauth_refresh_tokens_table', 28),
(49, '2016_06_01_000004_create_oauth_clients_table', 28),
(50, '2016_06_01_000005_create_oauth_personal_access_clients_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Admin', 2),
(1, 'App\\Admin', 38),
(1, 'App\\Admin', 39),
(1, 'App\\Admin', 40),
(2, 'App\\Admin', 2),
(3, 'App\\Admin', 2),
(4, 'App\\Admin', 2),
(4, 'App\\Admin', 38),
(33, 'App\\Admin', 2),
(33, 'App\\Admin', 38),
(33, 'App\\Admin', 39),
(33, 'App\\Admin', 40),
(34, 'App\\Admin', 2),
(34, 'App\\Admin', 38),
(35, 'App\\Admin', 2),
(35, 'App\\Admin', 38),
(36, 'App\\Admin', 2),
(36, 'App\\Admin', 38),
(37, 'App\\Admin', 2),
(37, 'App\\Admin', 38),
(37, 'App\\Admin', 39),
(37, 'App\\Admin', 40),
(38, 'App\\Admin', 2),
(38, 'App\\Admin', 38),
(39, 'App\\Admin', 2),
(39, 'App\\Admin', 38),
(40, 'App\\Admin', 2),
(41, 'App\\Admin', 2),
(41, 'App\\Admin', 38),
(41, 'App\\Admin', 39),
(41, 'App\\Admin', 40),
(42, 'App\\Admin', 2),
(42, 'App\\Admin', 38),
(43, 'App\\Admin', 2),
(44, 'App\\Admin', 2),
(44, 'App\\Admin', 38),
(45, 'App\\Admin', 2),
(45, 'App\\Admin', 38),
(45, 'App\\Admin', 39),
(45, 'App\\Admin', 40),
(46, 'App\\Admin', 2),
(46, 'App\\Admin', 38),
(47, 'App\\Admin', 2),
(47, 'App\\Admin', 38),
(48, 'App\\Admin', 2),
(48, 'App\\Admin', 38),
(49, 'App\\Admin', 2),
(49, 'App\\Admin', 38),
(49, 'App\\Admin', 39),
(49, 'App\\Admin', 40),
(50, 'App\\Admin', 2),
(51, 'App\\Admin', 2),
(51, 'App\\Admin', 38),
(52, 'App\\Admin', 2),
(52, 'App\\Admin', 38),
(53, 'App\\Admin', 2),
(53, 'App\\Admin', 38),
(53, 'App\\Admin', 39),
(53, 'App\\Admin', 40),
(54, 'App\\Admin', 2),
(54, 'App\\Admin', 38),
(55, 'App\\Admin', 2),
(55, 'App\\Admin', 38),
(56, 'App\\Admin', 2),
(56, 'App\\Admin', 38),
(57, 'App\\Admin', 2),
(57, 'App\\Admin', 38),
(57, 'App\\Admin', 39),
(57, 'App\\Admin', 40),
(58, 'App\\Admin', 2),
(58, 'App\\Admin', 38),
(59, 'App\\Admin', 2),
(59, 'App\\Admin', 38),
(60, 'App\\Admin', 2),
(60, 'App\\Admin', 38),
(69, 'App\\Admin', 2),
(69, 'App\\Admin', 38),
(69, 'App\\Admin', 39),
(69, 'App\\Admin', 40),
(70, 'App\\Admin', 2),
(70, 'App\\Admin', 38),
(71, 'App\\Admin', 2),
(71, 'App\\Admin', 38),
(72, 'App\\Admin', 2),
(72, 'App\\Admin', 38),
(73, 'App\\Admin', 2),
(73, 'App\\Admin', 38),
(73, 'App\\Admin', 39),
(73, 'App\\Admin', 40),
(74, 'App\\Admin', 2),
(74, 'App\\Admin', 38),
(75, 'App\\Admin', 2),
(75, 'App\\Admin', 38),
(76, 'App\\Admin', 2),
(76, 'App\\Admin', 38),
(77, 'App\\Admin', 2),
(77, 'App\\Admin', 38),
(77, 'App\\Admin', 39),
(77, 'App\\Admin', 40),
(78, 'App\\Admin', 2),
(78, 'App\\Admin', 38),
(79, 'App\\Admin', 2),
(79, 'App\\Admin', 38),
(80, 'App\\Admin', 2),
(80, 'App\\Admin', 38),
(81, 'App\\Admin', 2),
(81, 'App\\Admin', 38),
(81, 'App\\Admin', 39),
(81, 'App\\Admin', 40),
(82, 'App\\Admin', 2),
(82, 'App\\Admin', 38),
(83, 'App\\Admin', 2),
(83, 'App\\Admin', 38);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'APP\\Admin', 2),
(1, 'App\\Admin', 38),
(2, 'App\\Admin', 39),
(2, 'App\\Admin', 40);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('18392c40d9414899fdcd92485f53fed660d6c5b272a573bce59c89bbb56a8a1f382caf9cb9e42818', 31, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-10 11:11:23', '2020-08-10 11:11:23', '2021-08-10 14:11:23'),
('55f4bacf37ddaf32807506782ff17f5ec87eaf3a6bbd6dec508c57c1522c95a2d6757e640e76b7c1', 32, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-11 07:46:51', '2020-08-11 07:46:51', '2021-08-11 10:46:51'),
('5b63e82249c43df0046f805d54319e7058226bbcd5eb256d9295e89c966da31c3fb972cafa734191', 17, '9130', 'MyApp', '[]', 0, '2020-08-09 09:08:13', '2020-08-09 09:08:13', '2021-08-09 12:08:13'),
('6cc5786bb3e739cf52279faaf063e0dbccfddb97c3ae09c65847c0f1dad40108d4279dcf8fef1e19', 31, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-11 06:12:02', '2020-08-11 06:12:02', '2021-08-11 09:12:02'),
('79b3c3624a34e85ded9cc2ab33eab0fc443b72de20640e4d549c2d830afbe5000b37e1e0b33be8a5', 17, '9130', 'MyApp', '[]', 0, '2020-08-09 13:29:20', '2020-08-09 13:29:20', '2021-08-09 16:29:20'),
('8bb541637a9bb6baa4045c914f9ba1a311f9b0eac7cdcc640a7001ecf0d96dbb9a23bbc63cb81bc3', 31, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-10 10:29:05', '2020-08-10 10:29:05', '2021-08-10 13:29:05'),
('938d98a9bc7ad8cda62f9138fa0ff3161875ba71dfcb348be85c24c201a53b7ad9667a3f037d55e6', 1, '913e1f19-4096-45d2-9482-0eb841f92691', NULL, '[]', 0, '2020-08-09 06:00:24', '2020-08-09 06:00:24', '2021-08-09 09:00:24'),
('9cdd406be33ce1596d1e90c277023579096829dee32e50e9dc16ea05cb3b903d2c67714805674913', 17, '9130', 'MyApp', '[]', 0, '2020-08-09 08:44:18', '2020-08-09 08:44:18', '2021-08-09 11:44:18'),
('b43376978903f910f9b34774f8ea6fe874d22b4399126958c9fab6df77a2b39cd4780959d3719e6a', 17, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-09 15:35:28', '2020-08-09 15:35:28', '2021-08-09 18:35:28'),
('c28edce69fab44fddb4bd3fcf9d30b5d2a9ac68c2c1da4788f26769eefae1f05f2dbd39c8d006b18', 32, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-11 07:48:04', '2020-08-11 07:48:04', '2021-08-11 10:48:04'),
('c9b7835c164c0234e88e5bc07fadc5ccc266de65e5a84d4521df8e943c7334fa4a51d21076b5701e', 31, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-10 11:10:56', '2020-08-10 11:10:56', '2021-08-10 14:10:56'),
('d30c2a56f200fbf8fa5d54cdf8eb9ff61d571db7a9ff7643ff91f1a90d96f9de514a4eafa7ab72d1', 32, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-11 07:48:11', '2020-08-11 07:48:11', '2021-08-11 10:48:11'),
('f439755845a0019d49bdde7138510fee6212cefba52490a1211fdd41b3c79accdbf2323d0d3dc757', 31, '913e1f18-a699-4595-964f-b596c9c17d6c', 'MyApp', '[]', 0, '2020-08-10 11:11:33', '2020-08-10 11:11:33', '2021-08-10 14:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
('913e1f18-a699-4595-964f-b596c9c17d6c', NULL, 'Laravel Personal Access Client', 'A2MIvcIC0TRPdiLZSPL9bYfLFFJyDRR88QWBdqU1', NULL, 'http://localhost', 1, 0, 0, '2020-08-09 04:59:17', '2020-08-09 04:59:17'),
('913e1f19-4096-45d2-9482-0eb841f92691', 1, 'Laravel Password Grant Client', 'F545pBdH3NOPAWGPUGODMlt6LlZip84IhDBLDU9o', 'users', 'http://localhost', 0, 1, 0, '2020-08-09 04:59:17', '2020-08-09 04:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, '913e1f18-a699-4595-964f-b596c9c17d6c', '2020-08-09 04:59:17', '2020-08-09 04:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('85555f46e016b73c65d414597cba1d5920298dcc33acafbbe11c9e1ad7c34fcf71f08e256bb3e9af', '938d98a9bc7ad8cda62f9138fa0ff3161875ba71dfcb348be85c24c201a53b7ad9667a3f037d55e6', 0, '2021-08-09 09:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_steps`
--

CREATE TABLE `order_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_steps`
--

INSERT INTO `order_steps` (`id`, `number`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'image/1595751902.png', NULL, NULL),
(2, 2, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_step_translations`
--

CREATE TABLE `order_step_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_step_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_step_translations`
--

INSERT INTO `order_step_translations` (`id`, `locale`, `title`, `description`, `order_step_id`, `created_at`, `updated_at`) VALUES
(1, 'en', 'apply order', 'By clicking on the service request button and typing all the details of your project', 1, NULL, NULL),
(2, 'ar', 'تقديم الطلب', 'عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك', 1, NULL, NULL),
(3, 'en', 'applay order', 'By clicking on the service request button and typing all the details of your project', 2, NULL, NULL),
(4, 'ar', 'تقديم الطلب', 'عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك\r\n\r\n', 2, NULL, NULL),
(5, 'en', 'applay order', 'By clicking on the service request button and typing all the details of your project', 3, NULL, NULL),
(6, 'ar', 'تقديم الطلب', 'عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك\r\n\r\n', 3, NULL, NULL),
(7, 'en', 'applay order', 'By clicking on the service request button and typing all the details of your project', 4, NULL, NULL),
(8, 'ar', 'تقديم الطلب', 'عن طريق الضغط على زر طلب خدمة وكتابة كافة تفاصيل مشروعك\r\n\r\n', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('entesar.2000banna@gmail.com', '$2y$10$vek3P03qDsHyImG3orQ82.SyevAns7j6VW.FRsYkfPXJnjqxxkMbq', '2020-08-09 15:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read articles', 'admin', '2020-06-30 12:44:23', '2020-07-07 02:41:42'),
(2, 'create articles', 'admin', '2020-06-30 13:48:57', '2020-06-30 13:48:57'),
(3, 'edit articles', 'admin', '2020-07-01 07:31:43', '2020-07-01 07:31:43'),
(4, 'delete articles', 'admin', '2020-07-01 07:32:23', '2020-07-01 07:32:23'),
(33, 'read parts', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(34, 'create parts', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(35, 'edit parts', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(36, 'delete parts', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(37, 'read projects', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(38, 'create projects', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(39, 'edit projects', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(40, 'delete projects', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(41, 'read client reviews', 'admin', '2020-07-03 12:37:15', '2020-07-03 12:37:15'),
(42, 'create client reviews', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(43, 'edit client reviews', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(44, 'delete client reviews', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(45, 'read working teams', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(46, 'create working teams', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(47, 'edit working teams', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(48, 'delete working teams', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(49, 'read company features', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(50, 'create company features', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(51, 'edit company features', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(52, 'delete company features', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(53, 'read admins', 'admin', '2020-07-03 12:37:16', '2020-07-03 12:37:16'),
(54, 'create admins', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(55, 'edit admins', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(56, 'delete admins', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(57, 'read permissions', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(58, 'create permissions', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(59, 'edit permissions', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(60, 'delete permissions', 'admin', '2020-07-03 12:37:17', '2020-07-03 12:37:17'),
(69, 'read order_steps', 'admin', '2020-07-28 05:22:00', '2020-07-28 05:22:00'),
(70, 'create order_steps', 'admin', '2020-07-28 05:22:00', '2020-07-28 05:22:00'),
(71, 'edit order_steps', 'admin', '2020-07-28 05:22:00', '2020-07-28 05:22:00'),
(72, 'delete order_steps', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(73, 'read ads', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(74, 'create ads', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(75, 'edit ads', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(76, 'delete ads', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(77, 'read roles', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(78, 'create roles', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(79, 'edit roles', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(80, 'delete roles', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(81, 'read company', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(82, 'edit company', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01'),
(83, 'read users', 'admin', '2020-07-28 05:22:01', '2020-07-28 05:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `permission_translations`
--

CREATE TABLE `permission_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `service_type_id`, `created_at`, `updated_at`) VALUES
(37, 4, NULL, '2020-07-19 08:37:03'),
(38, 4, NULL, NULL),
(39, 4, NULL, NULL),
(40, 5, NULL, NULL),
(41, 4, NULL, NULL),
(42, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_locale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `locale`, `title`, `description`, `project_locale`, `project_id`, `created_at`, `updated_at`) VALUES
(20, 'en', 'first app', 'first app description', 'en', 37, NULL, NULL),
(21, 'ar', 'التطبيق الأول', 'وصف التطبيق الأأول', 'ar', 37, NULL, NULL),
(22, 'en', 'second app', 'second app description', 'en', 38, NULL, NULL),
(23, 'ar', 'التطبيق الثاني', 'وصف التطبيق الثاني', 'ar', 38, NULL, NULL),
(24, 'en', 'third app', 'third app description', 'en', 39, NULL, NULL),
(25, 'ar', 'التطبيق الثالث', 'وصف التطبيق الثالث', 'ar', 39, NULL, NULL),
(26, 'en', 'first website', 'first website description', 'en', 40, NULL, NULL),
(27, 'ar', 'الموقع الأول', 'وصف الموقع الأول', 'ar', 40, NULL, NULL),
(28, 'en', 'fourth app', 'fourth app description', 'en', 41, NULL, NULL),
(29, 'ar', 'التطبيق الرابع', 'وصف التطبيق الرابع', 'ar', 41, NULL, NULL),
(30, 'en', 'fifth app', 'fifth app description', 'en', 42, NULL, NULL),
(31, 'ar', 'التطبيق الخامس', 'وصف التطبيق الخامس', 'ar', 42, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'admin', '2020-06-30 12:44:23', '2020-07-06 15:21:08'),
(2, 'reader', 'admin', '2020-07-01 07:31:41', '2020-07-01 07:31:41');

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
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(33, 1),
(33, 2),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 2),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 2),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(45, 2),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(49, 2),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(53, 2),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(57, 2),
(58, 1),
(59, 1),
(60, 1),
(69, 1),
(69, 2),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(73, 2),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(77, 2),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(81, 2),
(82, 1),
(83, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'image/1595150123.png', '2020-06-29 02:47:25', '2020-07-19 06:15:23'),
(5, 'image/1595150150.png', '2020-06-29 02:51:00', '2020-07-19 06:15:50'),
(7, 'image/1595150193.png', '2020-06-29 11:51:30', '2020-07-19 06:16:33'),
(8, 'image/1595348616.png', NULL, '2020-07-21 13:23:36'),
(9, 'image/1595150307.png', NULL, '2020-07-19 06:18:27'),
(10, 'image/1595150325.png', NULL, '2020-07-19 06:18:45'),
(11, 'image/1595150383.png', NULL, '2020-07-19 06:19:43'),
(12, 'image/1595150403.png', NULL, '2020-07-19 06:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_type_translations`
--

CREATE TABLE `service_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type_locale` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_type_translations`
--

INSERT INTO `service_type_translations` (`id`, `locale`, `name`, `about_service`, `service_type_locale`, `service_type_id`, `created_at`, `updated_at`) VALUES
(3, 'en', 'Website design and programming', 'Website design and programming description', 'en', 4, NULL, NULL),
(4, 'ar', 'تصميم وبرمجة المواقع', 'وصف قسم تصميم وبرمجة المواقع', 'ar', 4, NULL, NULL),
(5, 'en', 'Application development and programming', 'web-apps development description', 'en', 5, NULL, NULL),
(6, 'ar', 'تطوير وبرمجة التطبيقات', 'وصف قسم تطوير تطبيقات الويب', 'ar', 5, NULL, NULL),
(9, 'en', 'design and montage', 'design and montage description', 'en', 7, NULL, NULL),
(10, 'ar', 'التصميم والمونتاج', 'وصف قسم التصميم والمونتاج', 'ar', 7, NULL, NULL),
(11, 'en', 'Marketing', 'marketting description', 'en', 8, NULL, NULL),
(12, 'ar', 'التسويق الإلكتروني', 'وصف خدمة التسويق الإلكتروني', 'ar', 8, NULL, NULL),
(13, 'en', 'Feasibility studies', 'Feasibility studies description', 'en', 9, NULL, NULL),
(14, 'ar', 'دراسات الجدوى', 'وصف قسم دراسات الجدوى ', 'ar', 9, NULL, NULL),
(15, 'en', 'Web hosting', 'Web hosting description', 'en', 10, NULL, NULL),
(16, 'ar', 'استضافة المواقع', 'وصف قسم استضافة المواقع', 'ar', 10, NULL, NULL),
(17, 'en', 'Private servers', 'Private servers description', 'en', 11, NULL, NULL),
(18, 'ar', 'سيرفرات خاصة', 'وصف قسم سيرفرات خاصة', 'ar', 11, NULL, NULL),
(19, 'en', 'App store', 'App store description', 'en', 12, NULL, NULL),
(20, 'ar', 'متجر التطبيقات', 'وصف متجر التطبيقات', 'ar', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'image/1595183450.png', NULL, '2020-07-19 15:30:50'),
(3, 'image/1595183466.png', NULL, '2020-07-19 15:31:06'),
(4, 'image/1595183483.png', NULL, '2020-07-19 15:31:23'),
(5, 'image/1595183510.png', NULL, '2020-07-19 15:31:50'),
(6, 'image/1595183528.png', NULL, '2020-07-19 15:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `locale`, `name`, `bio`, `team_id`, `created_at`, `updated_at`) VALUES
(3, 'en', 'mohammad', 'mohammad bio', 2, NULL, NULL),
(4, 'ar', 'محمد', 'محمد بيو', 2, NULL, NULL),
(5, 'en', 'ahmad', 'ahmad bio', 3, NULL, NULL),
(6, 'ar', 'أحمد', 'أحمد بيو', 3, NULL, NULL),
(7, 'en', 'mahmod', 'mahmod bio', 4, NULL, NULL),
(8, 'ar', 'محمود', 'محمود بيو', 4, NULL, NULL),
(9, 'en', 'hamed', 'hamid bio', 5, NULL, NULL),
(10, 'ar', 'حامد', 'حامد بيو', 5, NULL, NULL),
(11, 'en', 'mostafa', 'mostafa bio', 6, NULL, NULL),
(12, 'ar', 'مصطفى', 'مصطفى بيو', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'maha', 'maha.2000banna@gmail.com', NULL, '$2y$10$YiGJFwK0Jz1PcjBdhg2o4eqlYFZ51FgdqzD9OrKlg0rFZ3F/V7gqa', 'image/1597064119avatar3.jpg', NULL, '2020-07-04 14:00:36', '2020-07-04 14:00:36'),
(17, 'entesar', 'entesar.2000banna@gmail.com', NULL, '$2y$10$q/IdSySrdmdSS6Z7hSF73.8gXRW1cLKNw3SXFfbFfQjaShHygDNFO', 'image/1597065848avatar1.jpg', NULL, '2020-08-09 08:44:14', '2020-08-10 08:22:03'),
(31, 'entesarupdate', 'newuser@gmail.com', NULL, '$2y$10$QFFDEDAI9HGCQMLl1N3rC./2jLIyn0z23CX6oBUfJ/iGVa6rAIr32', 'image/1597139175avatar8.jpg', NULL, '2020-08-10 10:29:02', '2020-08-11 06:46:15'),
(32, 'testapi', 'testapi@gmail.com', NULL, '$2y$10$eUVegyKJUs1pCv6b81aKcex7Z.bf9gDZRKjR8/RSXXDsTYRWW/WGm', 'image/1597142809avatar1.jpg', NULL, '2020-08-11 07:46:49', '2020-08-11 07:46:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_translations_about_id_locale_unique` (`about_id`,`locale`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_translations`
--
ALTER TABLE `ad_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ad_translations_ad_id_locale_unique` (`ad_id`,`locale`),
  ADD KEY `ad_translations_locale_index` (`locale`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `article_translations`
--
ALTER TABLE `article_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_translations_article_id_locale_unique` (`article_id`,`locale`),
  ADD KEY `article_translations_locale_index` (`locale`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_review_translations`
--
ALTER TABLE `client_review_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_review_translations_client_review_id_locale_unique` (`client_review_id`,`locale`),
  ADD KEY `client_review_translations_locale_index` (`locale`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_features`
--
ALTER TABLE `company_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_feature_translations`
--
ALTER TABLE `company_feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_feature_translations_company_feature_id_locale_unique` (`company_feature_id`,`locale`),
  ADD KEY `company_feature_translations_locale_index` (`locale`);

--
-- Indexes for table `company_translations`
--
ALTER TABLE `company_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_translations_company_id_locale_unique` (`company_id`,`locale`),
  ADD KEY `company_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_project_id_foreign` (`project_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `order_steps`
--
ALTER TABLE `order_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_step_translations`
--
ALTER TABLE `order_step_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_step_translations_order_step_id_locale_unique` (`order_step_id`,`locale`),
  ADD KEY `order_step_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_translations_permission_id_locale_unique` (`permission_id`,`locale`),
  ADD KEY `permission_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_service_type_id_foreign` (`service_type_id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_translations_project_id_locale_unique` (`project_id`,`locale`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type_translations`
--
ALTER TABLE `service_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_type_translations_service_type_id_locale_unique` (`service_type_id`,`locale`),
  ADD KEY `service_type_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ad_translations`
--
ALTER TABLE `ad_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `article_translations`
--
ALTER TABLE `article_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_review_translations`
--
ALTER TABLE `client_review_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_features`
--
ALTER TABLE `company_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_feature_translations`
--
ALTER TABLE `company_feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_translations`
--
ALTER TABLE `company_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_steps`
--
ALTER TABLE `order_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_step_translations`
--
ALTER TABLE `order_step_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `permission_translations`
--
ALTER TABLE `permission_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_type_translations`
--
ALTER TABLE `service_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`);

--
-- Constraints for table `ad_translations`
--
ALTER TABLE `ad_translations`
  ADD CONSTRAINT `ad_translations_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `article_translations`
--
ALTER TABLE `article_translations`
  ADD CONSTRAINT `article_translations_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client_review_translations`
--
ALTER TABLE `client_review_translations`
  ADD CONSTRAINT `client_review_translations_client_review_id_foreign` FOREIGN KEY (`client_review_id`) REFERENCES `client_reviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_feature_translations`
--
ALTER TABLE `company_feature_translations`
  ADD CONSTRAINT `company_feature_translations_company_feature_id_foreign` FOREIGN KEY (`company_feature_id`) REFERENCES `company_features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_translations`
--
ALTER TABLE `company_translations`
  ADD CONSTRAINT `company_translations_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

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
-- Constraints for table `order_step_translations`
--
ALTER TABLE `order_step_translations`
  ADD CONSTRAINT `order_step_translations_order_step_id_foreign` FOREIGN KEY (`order_step_id`) REFERENCES `order_steps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD CONSTRAINT `permission_translations_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`);

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_type_translations`
--
ALTER TABLE `service_type_translations`
  ADD CONSTRAINT `service_type_translations_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
