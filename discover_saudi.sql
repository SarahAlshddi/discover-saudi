-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 06, 2026 at 12:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `features` text DEFAULT NULL,
  `activities` text DEFAULT NULL,
  `landmarks` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gallery_image1` varchar(255) DEFAULT NULL,
  `gallery_image2` varchar(255) DEFAULT NULL,
  `gallery_image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `category`, `city`, `description`, `features`, `activities`, `landmarks`, `image`, `gallery_image1`, `gallery_image2`, `gallery_image3`) VALUES
(1, 'الدرعية', 'تاريخية', 'وسطى', 'منطقة تاريخية تقع في مدينة الرياض، وتعد من أبرز المواقع التراثية في المملكة العربية السعودية.', 'موقع تاريخي عريق، مدرج ضمن التراث العالمي، تصميم معماري تقليدي، بيئة ثقافية مميزة، فعاليات سياحية', 'زيارة المواقع التاريخية، التصوير، حضور الفعاليات الثقافية، التنزه، التعرف على تاريخ المملكة', 'حي الطريف، وادي حنيفة، قصر سلوى ', 'images/diriyah.jpg', 'images/diriyah2.webp', 'images/diriyah3.jpg', 'images/Salwa-Palace.jpg'),
(2, 'البلد', 'تاريخية', 'غربية', 'منطقة تاريخية في مدينة جدة، وتتميز بمبانيها القديمة وأسواقها الشعبية وتراثها العمراني.', 'مباني تراثية، أسواق قديمة، أجواء تاريخية', 'التجول، التسوق، التصوير', 'بيت نصيف، سوق العلوي، باب مكة', 'images/albalad.webp', 'images/albalad1.webp', 'images/albalad2.webp', ''),
(3, 'جبل الفيل', 'تاريخية', 'شمالية', 'معلم طبيعي مشهور في العلا يتميز بتكوين صخري يشبه شكل الفيل، ويعد من أشهر وجهات الزوار.', 'طبيعة فريدة، منظر غروب جميل، موقع مفتوح', 'التصوير، الجلوس، مشاهدة الغروب', 'جبل الفيل، التكوينات الصخرية، صحراء العلا', 'images/elephant-rock.jpg', 'images/elephant-rock1.jpg', 'images/elephant-rock2.webp', ''),
(4, 'قرية عقدة', 'تاريخية', 'شمالية', 'قرية تاريخية تقع بين جبال أجا في حائل، وتتميز بطبيعتها الجبلية وبيئتها التراثية.', 'هدوء، طبيعة، تراث', 'التجول، الاسترخاء', 'جبال أجا، المزارع القديمة، البيوت التراثية', 'images/aqdah.jpg', 'images/aqdah1.jpg', 'images/aqdah2.jpg', ''),
(6, 'كورنيش جدة', 'ساحلية', 'غربية', 'واجهة بحرية جميلة على ساحل البحر الأحمر، وتضم مساحات للتنزه ومواقع ترفيهية وإطلالات بحرية.', 'إطلالة بحرية، ممشى، جلسات عائلية', 'المشي، ركوب الدراجات، الجلوس', 'الواجهة البحرية، نافورة الملك فهد، ممشى الكورنيش', 'images/jeddah-corniche.jpg', 'images/jeddah-corniche1.webp', 'images/jeddah-corniche2.webp', 'images/jeddah-corniche3.webp'),
(7, 'مركز الملك عبد الله المالي', 'حديثة', 'وسطى', 'منطقة حديثة في الرياض تضم أبراجًا ومرافق عمرانية متطورة، وتعكس جانبًا من التطور الحضري في المملكة.', 'تصميم عصري، أبراج حديثة، بيئة أعمال', 'التصوير، زيارة المقاهي، التنزه', 'أبراج كافد، المركز المالي، المباني الحديثة', 'images/kafd.jpg', 'images/kafd1.jpg', 'images/kafd2.jpg', 'images/kafd3.webp'),
(9, 'شاطئ نصف القمر', 'ساحلية', 'شرقية', 'يُعد من أشهر الشواطئ في المنطقة الشرقية، ويتميز بمياهه الهادئة وشكله المنحني الذي يشبه نصف القمر، ويعد وجهة مميزة للترفيه والاستجمام.', 'هدوء، مياه صافية، مناسب للعائلات', 'السباحة، التخييم، الألعاب البحرية', 'الشاطئ الرملي، الأنشطة البحرية، مناطق الجلوس', 'images/half-moon.jpg', 'images/half-moon1.png', '', ''),
(10, 'واجهة روشن', 'حديثة', 'وسطى', 'منطقة حديثة تضم مجموعة من المطاعم والمقاهي والمتاجر، وتعد من أبرز الوجهات الترفيهية الحديثة في مدينة الرياض.', 'تصميم حديث، فعاليات، تنوع المطاعم', 'التسوق، الأكل، المشي', 'المطاعم العالمية، المولات، المساحات الترفيهية', 'images/riyadh-front.jpg', 'images/riyadh-front1.png', 'images/riyadh-front2.webp', ''),
(11, 'نيوم', 'حديثة', 'شمالية', 'مشروع مستقبلي ضخم في شمال غرب المملكة يهدف إلى إنشاء مدينة ذكية تعتمد على التكنولوجيا والاستدامة.', 'تقنية متقدمة، بيئة مستقبلية، استدامة', 'الاستكشاف، التصوير، السياحة المستقبلية', 'مشاريع نيوم، ذا لاين، التطوير المستقبلي', 'images/neom.jpg', 'images/neom1.jpg', 'images/neom2.jpg', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
