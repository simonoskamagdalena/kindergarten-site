-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 06:25 PM
-- Server version: 10.1.34-MariaDB
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
-- Database: `kindergarten`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(4, 'galleryimage4.png', 'Halloween', '2019-02-04 18:06:35', '2019-02-04 18:06:35'),
(5, 'galleryimage5.png', 'International day', '2019-02-04 18:06:59', '2019-02-04 18:06:59'),
(6, 'galleryimage6.png', 'Arts and crafts class', '2019-02-04 18:07:25', '2019-02-04 18:07:25'),
(7, 'galleryimage7.png', 'Arts and crafts class', '2019-02-04 18:07:44', '2019-02-04 18:07:44'),
(8, 'galleryimage8.png', 'Kids on the playground', '2019-02-04 18:08:05', '2019-02-04 18:08:05'),
(10, 'galleryimage10.png', 'Grow a plant', '2019-02-04 18:08:48', '2019-02-04 18:08:48'),
(11, 'galleryimage11.png', 'Science class', '2019-02-04 18:09:11', '2019-02-04 18:09:11'),
(12, 'galleryimage12.png', 'Earth day', '2019-02-04 18:17:00', '2019-02-04 18:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_12_165049_create_posts_table', 1),
(4, '2019_02_01_115749_create_flights_table', 2),
(6, '2019_02_01_121039_create_galleries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'placeholder.jpg',
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `content`, `category`, `created_at`, `updated_at`) VALUES
(22, 'Creative menus', 'image22.png', 'Restaurant or takeaway menus are not just for ordering food – they can also be used to build your fifth grader’s language skills and vocabulary.\r\nOn Wednesday (17.02.2019) at 6 PM, student\'s parents and siblings are invited to try the extraordinary food prepared by the students taking the cooking classes.\r\n So the next time you go out to eat or order some takeaway, try this cool 5th grade activity for kids. Loads of fun guaranteed!', 'act', '2019-02-04 17:08:23', '2019-02-04 17:08:23'),
(23, 'Acting out Adverbs', 'image23.png', 'They say there’s a performer hidden within each child that only needs a little encouragement to come out. Get your little actor to come out of his shell and learn some grammar in the process.\r\nEvery Thursday after classes, watch your children\'s goofy, smart and creative acts of newly learnt adverbs. \r\nThe show must go on!', 'act', '2019-02-04 17:14:04', '2019-02-04 17:14:04'),
(24, 'All About Halloween', 'image24.png', 'Here is a fun Halloween activity that teaches kids all about the holiday! ‘All About Halloween’ is a fun crossword puzzle for kids that improves their Halloween vocabulary as well as improves their critical thinking skills.', 'act', '2019-02-04 17:15:54', '2019-02-04 17:15:54'),
(25, 'Grow a plant', 'image25.png', 'Growing a plant is not just a science activity; it’s a preschool activity that teaches kids about life, that every life has a cycle of growth. Germination and life cycle are two topics that will be introduced to kids in grade 3 but this science classroom activity will familiarize preschool kids with plants and their growth pattern without delving too deep into its science.\r\nGrow a plant is considered to be and eco-act that every student must participate in.', 'act', '2019-02-04 17:17:54', '2019-02-04 17:17:54'),
(26, 'Reading poetry', 'placeholder.jpg', '“Baa, baa, baa sheep, \r\nHave you any wool?\r\nYes sir, yes sir,\r\nThree bags full.”\r\nNursery rhymes often don’t make sense to beginners but they enjoy them nonetheless because of the sheer rhyming structure and the actions. They have endless fun enacting the action sequences like, “yes sir, yes sir” and “three bags full” from the nursery rhyme. Applaud and encourage them  on Friday at 4 PM while they enact the nursery rhymes and make the entire reading activity as much fun as possible.', 'act', '2019-02-04 17:38:04', '2019-02-04 17:38:04'),
(27, 'Boo-Hoo Breakfast', 'image27.png', 'Parents -- especially parent of kindergartners -- can have a difficult time letting go of students on the first day of school. Take their minds off the fact they\'re cutting loose those apron strings by putting on a special opening-day event. \"We provide juice and muffins -- and Kleenex -- outside the front entrance of our school,\" said Dawn Neely, principal at Hendrix Elementary School in Boiling Springs, South Carolina. The Boo-Hoo Breakfast, which can always be moved indoors if it rains, offers a great opportunity for PTO members to meet parents of the school\'s newest students and to share with them news of special upcoming events and other ways they can get involved. The parents aren\'t parting with a child, they\'re gaining many new opportunities to be part of a very special school community!', 'eve', '2019-02-04 17:51:08', '2019-02-04 17:51:08'),
(28, 'Greek Yogurt Party', 'image28.png', 'On November 13, the school organizes the first Greek Yogurt Party which will be full of Greek yogurts made by our kindergarteners. parents you are very welcome to join our festive day starting 12 PM.', 'eve', '2019-02-04 17:53:00', '2019-02-04 17:53:00'),
(29, 'American Education Week', 'image29.png', 'November also offers American Education Week. Many schools use this opportunity to combine a special Parents and Pastries day with activities focused on the great things going on behind their doors. The National Education Association (NEA) offers activity ideas to help make your American Education Week festivities a huge success.', 'eve', '2019-02-04 17:54:22', '2019-02-04 17:54:22'),
(30, 'International day', 'image30.png', 'Got the winter doldrums? Does January seem boring after all the hoopla of December? This month -- or any month, for that matter -- is a great time for an International Day or Multicultural Fair. \"The kids absolutely love this event, and they are learning invaluable lessons,\" said principal Nina Reznich of Riverview East High School in St. Clair, Michigan.\r\n\r\n\r\n At Riverview, each homeroom is assigned a different country. The students research the country and have eight school days to prepare a display and food. \"In the past, we have had Jamaican huts and a castle (England),\" said Reznich, adding, \"A panel of judges is on hand to judge student displays and foods.\"\r\n\r\nMeet the Authors\r\n\r\n\r\n Click here to learn more about the principals who contributed to this article. All of them are members of Education World\'s \"Principal Files\" team.\r\n\r\n\r\n Would you like to be a \"P-Files\" team member? Would you be willing to contribute to future article of a practical or topical nature? Click on this link to learn more.\r\n\r\n At Cedar Heights Junior High School, seventh graders team up with their language arts, geography, and science teachers to create a Culture Fair. Students produce a research project related to something important to their culture or arts interests. They write a report and create a visual representation of their project. \"On Fair night, parents and family members are invited to view the students\' projects and watch their presentations,\" said Patricia Green, adding, \"This fair is a longstanding tradition at the school and usually attracts more than 300 people.\"\r\n\r\n\r\n \"We hold a multicultural fair each year where different cultures\' foods, dances, dress, and languages are showcased,\" principal Dawn Neely told Education World. Of course, it helps that Hendrix Elementary\'s student body includes 18 distinct cultures. Each K-5 grade adopts a country, researches it, and decorates their hallway so that visitors \"enter\" different countries as they make their way through the building, said Neely.\r\n\r\n\r\n \"On the day of the fair, each student carries a \'passport,\'\" Neely added. \"As they tour the countries, students write down facts they learn. Then they tour our multi-purpose room, where parents -- many dressed in native costume -- display items related to their countries of origin. Last year we had 30 displays.\"\r\n\r\n\r\n Two school counselors, the student council, parents, and community leaders plan the fair, Neely noted. Due to health regulations, only vendors sell food at the fair. During lunch, students and parents perform on stage by dancing, singing, or playing an instrument native to their country. Families can also purchase T-shirts that read \"Hendrix Elementary School Cultural Day, Our Accent Is On Excellence\" on the front; the back has images of the flags of the 18 countries represented by students\' families. All students and visitors wear nametags that indicate where they were born.\r\n\r\n\"It is a great day -- a time for our children, parents, and community to shine!\" added Neely', 'eve', '2019-02-04 17:55:47', '2019-02-04 17:55:47'),
(31, 'Enrollment into PrimeKidz School', 'image31.png', 'The enrollment applications can be given at anytime from Monday to Friday from 8 AM until 4 PM.\r\nYou can take an application document from our school at the paper hall.\r\nBesides the application also attach a birth certificate of the child as well as identity number,\r\nThe applications are received at the offices 2, 4 and 8 in the halls of the school.', 'ann', '2019-02-04 17:59:47', '2019-02-04 17:59:47'),
(32, 'Parents Meeting', 'image32.png', 'On Monday (25. 02.2019), a parents\' meeting will be held at the main hall room in the school.', 'ann', '2019-02-04 18:01:46', '2019-02-04 18:01:46'),
(33, 'new post updated', 'image33.png', 'new post content', 'eve', '2019-03-06 12:53:37', '2019-03-06 12:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$/aGM3KnojSoGzZjxSs/vzOPoGv0RLPxvNZ1z0me.71/z9.oV2OhVW', 'fnuJX1gIOXK68Bna7ehDcOnrW79yKx7DjdfNIBP65QAQkoUJ2mSCG9oGbwGt', '2019-03-06 11:42:41', '2019-03-06 11:42:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
