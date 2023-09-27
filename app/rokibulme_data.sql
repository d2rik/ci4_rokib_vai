-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 06:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rokibulme_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `quote` text NOT NULL,
  `fun_fact1` text NOT NULL,
  `fun_fact1_count` text NOT NULL,
  `fun_fact2` text NOT NULL,
  `fun_fact2_count` text NOT NULL,
  `fun_fact3` text NOT NULL,
  `fun_fact3_count` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `quote`, `fun_fact1`, `fun_fact1_count`, `fun_fact2`, `fun_fact2_count`, `fun_fact3`, `fun_fact3_count`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto officiis sequi veniam iure, quo nam ad? Laboriosam accusamus magnam ea nostrum dignissimos? Provident voluptatum voluptates quae perspiciatis culp. hello', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam modi illum repudiandae cumque, aliquid esse autem? Voluptate debitis itaque reprehenderit?', 'Movie Watched', '50+', 'Book Read', '200+', 'Nothing', '30+', '2023-09-21 05:08:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achievements_and_excellence`
--

CREATE TABLE `achievements_and_excellence` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements_and_excellence`
--

INSERT INTO `achievements_and_excellence` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Selected for', 'Selected for top Engineering, Medical (National combined merit position 187th, 2014) universities of Bangladesh through highly competitive entrance exams in 2014.', '2023-09-21 04:17:46', NULL),
(2, '1st Position', '1st Position in, Board Talent Category Scholarship, Higher Secondary School Certificate (12th grade) (HSc.) Exam -2014, Dhaka Education Board (Largest in BD), Bangladesh.', '2023-09-21 04:19:56', NULL),
(3, '1st Position', '1st Position in Baraigram Upazilla (Sub District) Talent pool Scholarship, Junior (8th Grade Level) Scholarship Exam-2009, Rajshahi Education Board, Bangladesh.', '2023-09-21 04:21:50', NULL),
(4, 'General Scholarship', 'General Scholarship in Primary Scholarship Examination-2006, (5th Grade Level).', '2023-09-21 04:22:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'rokibul', '$2y$10$f5ws7QKBCnAHqD7ZDP1SX.ma88T0RsEIEQme.DJuQkVZTlECe425m', '2023-09-25 05:11:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `blog` text NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `blog`, `thumbnail`, `created_at`, `updated_at`) VALUES
(43, '৭ উইকেটে ম্যাচ, ২-০-তে সিরিজ হারল বাংলাদেশ', '6512feed72e89', 'নিজের ষষ্ঠ ওভারে তৃতীয় নো বলটি করলেন ফার্গুসন। তবে তাঁর তিনটি ফ্রি হিটে এসেছে মাত্র ৩ রান। সর্বশেষ ফ্রি হিটে রানই নিতে পারেননি নাসুম। \r\n\r\nনাজমুলকে আপাতত সঙ্গ দেওয়ার চেষ্টা করছেন মেহেদী। মুশফিক শুরুতে নাজমুলকে শুধু সঙ্গই দেওয়ার চেষ্টা করেছিলেন, এরপর খোলস ছেড়ে বেড়োনোর আভাস দেওয়ার পরই হয়ে যান আউট। মাহমুদউল্লাহ ও মেহেদী অবশ্য শুরু থেকে নিজেরাই আক্রমণের চেষ্টা করে গেছেন। টেকেননিও বেশিক্ষণ। \r\n\r\nএবার নাসুমের পালা। আপাতত বল পার করার দিকেই নজর তাঁর। সর্বশেষ এশিয়া কাপে ভারতের বিপক্ষে ৪০-পেরোনো ইনিংস খেলা নাসুমের ব্যাটিংয়ে উন্নতি স্পষ্টই। আজ তাঁর দায়িত্বটা বেশি।', '1695743982_c0b53a7170d9ae1f82f7.jpg', '2023-09-26 15:55:25', NULL),
(44, 'fasdfafsd dsasdf', '651301e342d61', 'asdfafasdf sd', '1695744496_0d211c3fdfad55bd2146.jpg', '2023-09-26 16:08:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conference_publications`
--

CREATE TABLE `conference_publications` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `conference` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conference_publications`
--

INSERT INTO `conference_publications` (`id`, `title`, `link`, `authors`, `conference`, `created_at`, `updated_at`) VALUES
(1, 'Effect of solid volume fraction and tilt angle in a quarter circular', 'https://www.codeigniter.com/user_guide/index.html', 'MM Rahman, S Mojumder, S Saha, S Mekhilef, R Saidur', 'Journal of Applied Physics 118 (12)', '2023-09-21 08:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residence` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sub_title`, `phone`, `email`, `residence`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Want to connect with me? ok let\'s talk!', '01700-000000', 'rokibulme14@gmail.com', 'USA', 'Dhaka, Bangladesh', '2023-09-21 04:39:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualifications`
--

CREATE TABLE `educational_qualifications` (
  `id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `academy` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educational_qualifications`
--

INSERT INTO `educational_qualifications` (`id`, `degree`, `subject`, `academy`, `session`, `created_at`, `updated_at`) VALUES
(1, 'Secondary School Certificate', 'Science', 'Diargarfa Khairash (D.K.) High School, Natore', '2011 - 2012', '2023-09-21 04:25:12', NULL),
(2, 'Higher Secondary School Certificate', 'Science', 'Hamdard Public College, Dhaka', '2013 - 2014', '2023-09-21 04:06:25', NULL),
(3, 'Bachelor of Science', 'Mechanical Engineering', 'Bangladesh University of Engineering and Technology (BUET)', '2014 - 2015', '2023-09-20 17:45:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `external_link_model`
--

CREATE TABLE `external_link_model` (
  `id` int(11) NOT NULL,
  `site_name` text NOT NULL,
  `site_link` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `external_link_model`
--

INSERT INTO `external_link_model` (`id`, `site_name`, `site_link`, `created_at`, `updated_at`) VALUES
(25, 'BUET', 'https://www.buet.ac.bd/web/', '2023-09-26 16:44:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journal_publications`
--

CREATE TABLE `journal_publications` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `journal` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_publications`
--

INSERT INTO `journal_publications` (`id`, `title`, `link`, `authors`, `journal`, `created_at`, `updated_at`) VALUES
(1, 'Effect of solid volume fraction and tilt angle in a\r\n                    quarter circular', 'https://www.codeigniter.com/', 'MM Rahman, S Mojumder, S Saha, S Mekhilef, R\r\n                        Saidur', 'Journal of Applied Physics 118 (12)', '2023-09-21 07:52:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_skills`
--

CREATE TABLE `language_skills` (
  `id` int(11) NOT NULL,
  `skill_name` text NOT NULL,
  `skill_level` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_skills`
--

INSERT INTO `language_skills` (`id`, `skill_name`, `skill_level`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', 90, '2023-09-26 13:37:43', NULL),
(2, 'English', 100, '2023-09-26 13:38:17', NULL),
(3, 'Hindi', 40, '2023-09-26 13:41:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `overall_skills`
--

CREATE TABLE `overall_skills` (
  `id` int(11) NOT NULL,
  `skill_name` text NOT NULL,
  `skill_level` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overall_skills`
--

INSERT INTO `overall_skills` (`id`, `skill_name`, `skill_level`, `created_at`, `updated_at`) VALUES
(1, 'Design', 60, '2023-09-26 13:01:38', NULL),
(2, 'Writing', 70, '2023-09-26 13:29:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professional_experience`
--

CREATE TABLE `professional_experience` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `title` text NOT NULL,
  `company` text NOT NULL,
  `company_logo` text NOT NULL,
  `responsibilities` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_experience`
--

INSERT INTO `professional_experience` (`id`, `year`, `title`, `company`, `company_logo`, `responsibilities`, `created_at`, `updated_at`) VALUES
(1, '2023 - Present', 'Assistant Engineer (Mechanical)', 'Siddhirganj 2*120 MW [Simple Cycle Gas Turbine] Peaking                Power Plant, Electricity Generation Company of Bangladesh                Limited (EGCB)', '1695703091_47c3f1f76c0d20510c5c.png', 'Operation of Simple Cycle Gas Turbine Power Plant as Control Room\r\nEngineer according to Standard Operating Procedure (SOP) as per instructions and\r\ndemands of National Load Dispatch Center (NLDC), GoB, Continuous tracking of\r\nnecessary operating parameters of GT as per specifications, Preparation of reports for\r\nPower Plant as per ISO standards.', '2023-09-21 05:25:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `name`, `date_of_birth`, `designation`, `profile_image`, `banner_image`, `link1`, `link2`, `link3`, `created_at`, `updated_at`) VALUES
(1, 'Rokibul Islam', '1996-10-03', 'Writer,Researcher,Philoshopher', '1695745414_a6ad0042d7bec2d4a22b.jpg', '1695782184_bb32b4e1c4e3b42b9a61.jpg', 'https://www.facebook.com/profile.php?id=100008300803119', '', '', '2023-09-23 04:23:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teaching_and_mentoring`
--

CREATE TABLE `teaching_and_mentoring` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teaching_and_mentoring`
--

INSERT INTO `teaching_and_mentoring` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, '1695787670_2de137c2bd40e50b5bf8.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus minima vitae tempora beatae quaerat sapiente dolore, aperiam sit suscipit eaque nemo commodi reprehenderit vero molestiae dolorum officia blanditii\r\n\r\ns voluptas exercitationem laudantium totam. Nam facere vero reiciendis asperiores adipisci dolorum expedita non ipsam autem? Veniam magnam asperiores aspernatur dolore volupta\r\n\r\ntum beatae, animi quaerat aperiam, nesciunt reprehenderit sint facilis. Hic maiores officiis nobis eaque debitis illo. Quam animi, corrupti natus atque laboriosam consequatur beatae eos distinctio ea. Eum voluptates reprehenderit dolorem dolorum, illum, earum enim debitis autem voluptate dignissimos veritatis, officia est. Reiciendis doloremque voluptatum maxime. Repellendus ducimus, consectetur quas dicta facilis odit quisquam quos, perspiciatis voluptates aliquid enim iure consequatur harum, esse exercitationem impedit? Voluptate aliquam sint qua\r\n\r\nerat laboriosam excepturi, hic nesciunt nemo doloremque non deleniti eum ad quas at illo itaque fuga. Praesentium, eaque? Non eaque facilis repellat deleniti soluta voluptas libero nostrum eos veniam, incidunt delectus harum quisquam odio quam quas vel placeat praesentium, iusto laborum. Aut ut neque acc\r\n\r\nusamus dolore recusandae. Quam esse saepe nobis, sint quos necessitatibus, amet voluptates praesentium, distinctio reprehenderit cupiditate at. Repudiandae necessitatibus dicta laboriosam. Ratione ullam velit consectetur excepturi laudantium, explicabo tenetur ipsum tempore est. In provident maxime doloremque accusamus amet quae omnis!', '2023-09-27 03:21:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, '#009dff', '2023-09-23 05:05:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements_and_excellence`
--
ALTER TABLE `achievements_and_excellence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conference_publications`
--
ALTER TABLE `conference_publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_link_model`
--
ALTER TABLE `external_link_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_publications`
--
ALTER TABLE `journal_publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_skills`
--
ALTER TABLE `language_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overall_skills`
--
ALTER TABLE `overall_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_experience`
--
ALTER TABLE `professional_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_and_mentoring`
--
ALTER TABLE `teaching_and_mentoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `achievements_and_excellence`
--
ALTER TABLE `achievements_and_excellence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `conference_publications`
--
ALTER TABLE `conference_publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `external_link_model`
--
ALTER TABLE `external_link_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `journal_publications`
--
ALTER TABLE `journal_publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language_skills`
--
ALTER TABLE `language_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `overall_skills`
--
ALTER TABLE `overall_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professional_experience`
--
ALTER TABLE `professional_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teaching_and_mentoring`
--
ALTER TABLE `teaching_and_mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
