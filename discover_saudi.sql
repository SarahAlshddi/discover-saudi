-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 05, 2026 at 05:20 PM
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
-- Database: `discover_saudi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `landmarks` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `category`, `city`, `description`, `landmarks`, `image`) VALUES
(1, 'الدرعية', 'تاريخية', 'الرياض', 'منطقة تاريخية تقع في مدينة الرياض، وتعد من أبرز المواقع التراثية في المملكة العربية السعودية.', 'حي الطريف، وادي حنيفة، قصر سلوى', 'images/diriyah.jpg'),
(2, 'البلد', 'تاريخية', 'جدة', 'منطقة تاريخية في مدينة جدة، وتتميز بمبانيها القديمة وأسواقها الشعبية وتراثها العمراني.', 'بيت نصيف، سوق العلوي، باب مكة', 'images/albalad.webp'),
(3, 'جبل الفيل', 'تاريخية', 'العلا', 'معلم طبيعي مشهور في العلا يتميز بتكوين صخري يشبه شكل الفيل، ويعد من أشهر وجهات الزوار.', 'جبل الفيل، التكوينات الصخرية، صحراء العلا', 'images/elephant-rock.jpg'),
(4, 'قرية عقدة', 'تاريخية', 'حائل', 'قرية تاريخية تقع بين جبال أجا في حائل، وتتميز بطبيعتها الجبلية وبيئتها التراثية.', 'جبال أجا، المزارع القديمة، البيوت التراثية', 'images/aqdah.jpg'),
(6, 'كورنيش جدة', 'ساحلية', 'جدة', 'واجهة بحرية جميلة على ساحل البحر الأحمر، وتضم مساحات للتنزه ومواقع ترفيهية وإطلالات بحرية.', 'الواجهة البحرية، نافورة الملك فهد، ممشى الكورنيش', 'images/jeddah-corniche.jpg'),
(7, 'مركز الملك عبد الله المالي', 'حديثة', 'الرياض', 'منطقة حديثة في الرياض تضم أبراجًا ومرافق عمرانية متطورة، وتعكس جانبًا من التطور الحضري في المملكة.', 'أبراج كافد، المركز المالي، المباني الحديثة', 'images/kafd.jpg'),
(9, 'شاطئ نصف القمر', 'ساحلية', 'الخبر', 'يُعد من أشهر الشواطئ في المنطقة الشرقية، ويتميز بمياهه الهادئة وشكله المنحني الذي يشبه نصف القمر، ويعد وجهة مميزة للترفيه والاستجمام.', 'الشاطئ الرملي، الأنشطة البحرية، مناطق الجلوس', 'images/half-moon.jpg'),
(10, 'واجهة روشن', 'حديثة', 'الرياض', 'منطقة حديثة تضم مجموعة من المطاعم والمقاهي والمتاجر، وتعد من أبرز الوجهات الترفيهية الحديثة في مدينة الرياض.', 'المطاعم العالمية، المولات، المساحات الترفيهية', 'images/riyadh-front.jpg'),
(11, 'نيوم', 'حديثة', 'تبوك', 'مشروع مستقبلي ضخم في شمال غرب المملكة يهدف إلى إنشاء مدينة ذكية تعتمد على التكنولوجيا والاستدامة.', 'مشاريع نيوم، ذا لاين، التطوير المستقبلي', 'images/neom.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
