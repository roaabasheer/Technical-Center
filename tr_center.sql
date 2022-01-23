-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 04:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tr_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Detail` longtext NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Id`, `Name`, `Detail`, `Image`) VALUES
(1, 'تطبيقات الويب', 'نظراً للتقدم المتسارع في استخدام الحاسوب كوسيلة رئيسية لتداول المعلومات في المجال', 'img/download.jfif'),
(2, 'التصميم الجرافيكي', 'يتميز تخصص التصميم الجرافيكي graphic design بارتباطه الوثيق بتكنولوجيا المعلومات الحدي', 'img/download (1).jfif'),
(3, 'تطبيقات الموبايل', 'تعتبر الهواتف الذكية في الوقت الحالي من الحاجات الأساسية والمقومات اليومية في حيا', 'img/download (2).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `Head` varchar(255) NOT NULL,
  `Detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Head`, `Detail`) VALUES
(5, 'اتصل بنا', 'تصنيف المركز : حكومي نوع المؤسسة : مدرسة رقم الهاتف :422222566 رقم الفاكس : 22222222 البريد الإلكتروني :palestine.industrial@yahoo.com العنوان : محافظات الوطن'),
(6, 'عن المركز .. ', 'يعتبر المركز الفلسطيني للتعليم التقني أحد المؤسسات التي تقدم التعليم المهني الصناعي في محافظات الوطن . يوجد في المركز ثلاث تخصصات رئيسية هي :تطبيقات الويب ، تطبيقات الموبايل والتصميم الجرافيكي         والعمل جاري لتوفير دعم وفتح تخصصات جديدة تخدم المحافظات. حرصاً من وزارة التربية والتعليم العاي على تطوير التعليم المهني والتقني في فلسطين فانه قد تم تبني استراتيجية وطنية للتعليم والتدريب المهني التقني .بحيث يكون هذا النظام كفؤا .وفعالا ،ومرنا ،ومرتبطا باحتياجات سوق العمل الفلسطينية حيث يجري العمل على 4 محاور رئيسية هي :تطوير الانظمة ،وتطوير المنهاج،وتطوير المواد البشرية والمادية . تكون الدراسة في المركز سنتان ،ويكون الدوام 40% نظري و 60% عملي ويشترط في المتقدمين للدراسة ان يكون الطالب ناجحا في الصف العاشر ولا يزيد عمره في اول سنة دراسية عن 20 عاما ولن يجتاز فحص القبول في المدرسة. يتقدم الطالب في نهاية السنة الدراسية الثانية لامتحان شهادة الدراسة الثانوية العامة/ الفرع الصناعي. ويحق للطالب الالتحاق بالجامعات والمعاهد العامة او مزاولة مهنة في سوق العمل .');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Detail` longtext NOT NULL,
  `Image` text NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Detail`, `Image`, `Data`) VALUES
(1, 'تهنئة بقدوم العام الجديد', 'يتقدم المركز المهني التقني الفلسطيني بالتهنئة القلبية الحارة من عموم الشعب الفلسطيني عامة والطاقم التدريسي وطلبة المركز خاصة بمناسبة حلول العام الدراسي الجديد.', 'img/pexels-rodnae-productions-7842649.jpg', '2019-10-07'),
(3, 'العمل الحر', 'تعلن الطلبة الخريجين عن دورة تدريبية في مجال العمل الحر الأعداد محدودة ... سارع في التسجيل', 'img/pexels-vlada-karpovich-4050315.jpg', '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Depnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Name`, `Email`, `Age`, `Address`, `Phone`, `Depnum`) VALUES
(5, 'نغم المصري', 'nany@gmail.com', 18, 'غزة', 5568984, 'تطبيقات الويب'),
(6, 'shahed', 'shahed@gmail.com', 19, 'غزة', 56525842, 'تطبيقات الويب'),
(7, 'roaabasheer', 'roaabasheer34@gmail.com', 17, 'دير البلح', 59878077, 'تطبيقات الويب'),
(9, 'jood', 'jood@gmail.com', 15, 'دير البلح', 2147483647, 'التصميم الجرافيكي'),
(10, 'dodo', 'adood22@gmail.com', 17, 'غزة', 594785698, 'تطبيقات الهواتف الذكية');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`) VALUES
(1, 'roaa22', '123456'),
(5, 'admin', '987'),
(6, 'ahmad', '123654'),
(7, 'khaled', '963'),
(8, 'نغم المصري', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
