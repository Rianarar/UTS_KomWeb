-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 11:40 AM
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
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `prof` varchar(50) DEFAULT NULL,
  `home` varchar(50) DEFAULT NULL,
  `abt` varchar(50) DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `ask` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `nmb` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cr` varchar(50) DEFAULT NULL,
  `title_abt` varchar(50) DEFAULT NULL,
  `desc_abt` varchar(50) DEFAULT NULL,
  `bg` varchar(50) DEFAULT NULL,
  `desc_1` varchar(200) DEFAULT NULL,
  `desc_2` varchar(200) DEFAULT NULL,
  `hobby` varchar(50) DEFAULT NULL,
  `gaming` varchar(50) DEFAULT NULL,
  `coding` varchar(50) DEFAULT NULL,
  `reading` varchar(50) DEFAULT NULL,
  `drawing` varchar(50) DEFAULT NULL,
  `desc_gaming` varchar(50) DEFAULT NULL,
  `desc_coding` varchar(50) DEFAULT NULL,
  `desc_reading` varchar(50) DEFAULT NULL,
  `desc_drawing` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`prof`, `home`, `abt`, `exp`, `art`, `ask`, `name`, `adr`, `nmb`, `eml`, `ig`, `wa`, `link`, `cr`, `title_abt`, `desc_abt`, `bg`, `desc_1`, `desc_2`, `hobby`, `gaming`, `coding`, `reading`, `drawing`, `desc_gaming`, `desc_coding`, `desc_reading`, `desc_drawing`) VALUES
('Profolio', 'Home', 'About', 'Experience', 'Article', 'Ask Me A Question', 'Nurfajrian Abdurrohman', 'BSD, Tangerang Selatan, Indonesia', '+62 812-1173-6169', 'nurfajrian.ar@gmail.com', 'https://www.instagram.com/rian_jae', 'https://www.wa.link/euss8e', 'https://www.linkedin.com/in/nurfajrian-abdurrohman-732aaa287/', '2024 Nurfajrian Abdurrohman. All Rights Reserved.', 'About Me!', 'Get To Know Me Better!', 'Background', 'Mahasiswa aktif di Universitas Pembangunan Jaya dengan Prodi Informatika dan juga anggota aktif Himaforka (Himpunan Prodi) dalam Departemen Prestasi (Depresi).', 'Pengajar Privat mengajarkan Sekolah Menengah Atas (SMA), Sekolah Menengah Pertama (SMP), dan Sekolah Dasar (SD) di bimbel BelVita dalam pelajaran Matematika, Fisika, dan Biologi.', 'Hobby', 'Gaming', 'Coding', 'Reading', 'Drawing', 'MLBB, Valorant, Dota, etc', 'C, Python, Html, PHP, etc', 'Study, Fiction, Non-fiction, Comics, etc', 'Digital, Traditional, Painting, etc');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `prof` varchar(50) DEFAULT NULL,
  `home` varchar(50) DEFAULT NULL,
  `abt` varchar(50) DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `ask` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `nmb` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cr` varchar(50) DEFAULT NULL,
  `title_art` varchar(50) DEFAULT NULL,
  `desc_art` varchar(50) DEFAULT NULL,
  `title_abt` varchar(50) DEFAULT NULL,
  `judul1` varchar(100) DEFAULT NULL,
  `judul2` varchar(100) DEFAULT NULL,
  `judul3` varchar(100) DEFAULT NULL,
  `link1` varchar(200) DEFAULT NULL,
  `link2` varchar(200) DEFAULT NULL,
  `link3` varchar(200) DEFAULT NULL,
  `desc1` varchar(200) DEFAULT NULL,
  `desc2` varchar(200) DEFAULT NULL,
  `desc3` varchar(200) DEFAULT NULL,
  `kum` varchar(15) DEFAULT NULL,
  `kom` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`prof`, `home`, `abt`, `exp`, `art`, `ask`, `name`, `adr`, `nmb`, `eml`, `ig`, `wa`, `link`, `cr`, `title_art`, `desc_art`, `title_abt`, `judul1`, `judul2`, `judul3`, `link1`, `link2`, `link3`, `desc1`, `desc2`, `desc3`, `kum`, `kom`) VALUES
('Profolio', 'Home', 'About', 'Experience', 'Article', 'Ask Me A Question', 'Nurfajrian Abdurrohman', 'BSD, Tangerang Selatan, Indonesia', '+62 812-1173-6169', 'nurfajrian.ar@gmail.com', 'https://www.instagram.com/rian_jae', 'https://www.wa.link/euss8e', 'https://www.linkedin.com/in/nurfajrian-abdurrohman-732aaa287/', '2024 Nurfajrian Abdurrohman. All Rights Reserved.', 'My Articles!', 'Articles That I Have Made', 'Article', 'Lima Rekomendasi PTS di Daerah Banten', 'Bahaya dan Pidana Hoax', 'Dampak pada Lingkungan dari Sisi Negatif Fast Fashion', 'https://www.kompasiana.com/rian4321/65826828de948f4489624682/lima-rekomendasi-pts-di-daerah-banten', 'https://www.kompasiana.com/rian4321/660aeb72de948f152e4f1223/hukum-dan-kebijakan-teknologi-informasi-bahaya-dan-pidana-hoax', 'https://kumparan.com/rian-1702312626407804402/dampak-pada-lingkungan-dari-sisi-negatif-fast-fashion-23iu6HBnGxm', 'Pendapat saya mengenai PTS di daerah Banten.', 'Pendapat saya dalam bahaya dan juga pidana dari berita-berita palsu (hoax).', 'Pendapat saya dalam sisi negatif dari fast fashion kepada lingkungan.', 'Kumparan', 'Kompasiana');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `prof` varchar(50) DEFAULT NULL,
  `home` varchar(50) DEFAULT NULL,
  `abt` varchar(50) DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `ask` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `nmb` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cr` varchar(50) DEFAULT NULL,
  `title_exp` varchar(50) DEFAULT NULL,
  `desc_exp` varchar(50) DEFAULT NULL,
  `title_abt` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `pengajar` varchar(50) DEFAULT NULL,
  `hima` varchar(50) DEFAULT NULL,
  `part` varchar(50) DEFAULT NULL,
  `desc_pengajar` varchar(200) DEFAULT NULL,
  `desc_hima` varchar(200) DEFAULT NULL,
  `desc_part` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`prof`, `home`, `abt`, `exp`, `art`, `ask`, `adr`, `nmb`, `eml`, `ig`, `wa`, `link`, `cr`, `title_exp`, `desc_exp`, `title_abt`, `title`, `pengajar`, `hima`, `part`, `desc_pengajar`, `desc_hima`, `desc_part`) VALUES
('Profolio', 'Home', 'About', 'Experience', 'Article', 'Ask Me A Question', 'BSD, Tangerang Selatan, Indonesia', '+62 812-1173-6169', 'nurfajrian.ar@gmail.com', 'https://www.instagram.com/rian_jae', 'https://www.wa.link/euss8e', 'https://www.linkedin.com/in/nurfajrian-abdurrohman-732aaa287/', '2024 Nurfajrian Abdurrohman. All Rights Reserved.', 'My Experiences', 'My Past Job & Experiences!', 'Experiences', 'My Current Activities', 'Pengajar', 'Anggota Hima', 'Part-Time', 'Pengajar Privat mengajarkan Sekolah Menengah Atas (SMA), Sekolah Menengah Pertama (SMP), dan Sekolah Dasar (SD) di bimbel BelVita dalam pelajaran Matematika, Fisika, dan Biologi.', 'Anggota aktif Himaforka (Himpunan Prodi Informatika) Universitas Pembangunan Jaya dalam Departemen Prestasi (Depresi).', 'Bekerja dalam bidang Sales Promotion Team di perusahaan NALURI untuk Pertamina.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `prof` varchar(50) DEFAULT NULL,
  `home` varchar(50) DEFAULT NULL,
  `abt` varchar(50) DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `ask` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `nmb` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cr` varchar(50) DEFAULT NULL,
  `desc_abt` varchar(50) DEFAULT NULL,
  `desc_exp` varchar(50) DEFAULT NULL,
  `desc_art` varchar(50) DEFAULT NULL,
  `desc_ask` varchar(50) DEFAULT NULL,
  `desc_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`prof`, `home`, `abt`, `exp`, `art`, `ask`, `name`, `adr`, `nmb`, `eml`, `ig`, `wa`, `link`, `cr`, `desc_abt`, `desc_exp`, `desc_art`, `desc_ask`, `desc_name`) VALUES
('Profolio', 'Home', 'About', 'Experience', 'Article', 'Ask Me A Question', 'Nurfajrian Abdurrohman', 'BSD, Tangerang Selatan, Indonesia', '+62 812-1173-6169', 'nurfajrian.ar@gmail.com', 'https://www.instagram.com/rian_jae', 'https://www.wa.link/euss8e', 'https://www.linkedin.com/in/nurfajrian-abdurrohman-732aaa287/', '2024 Nurfajrian Abdurrohman. All Rights Reserved.', 'Get to know me better!', 'My past experience!', 'See my works!', 'Contact Me!', 'Mahasiswa aktif Universitas Pembangunan Jaya Prodi Informatika dan Pengajar Privat di bimbel BelVita.');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `name` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `msg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`name`, `eml`, `msg`) VALUES
('Nurfajrian Abdurrohman', 'nurfajrian.ar@gmail.com', 'Halo'),
('Nurfajrian Abdurrohman', 'nurfajrian.ar@gmail.com', 'Halo');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `prof` varchar(50) DEFAULT NULL,
  `home` varchar(50) DEFAULT NULL,
  `abt` varchar(50) DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `ask` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `nmb` varchar(50) DEFAULT NULL,
  `eml` varchar(50) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `cr` varchar(50) DEFAULT NULL,
  `title_que` varchar(50) DEFAULT NULL,
  `desc_que` varchar(50) DEFAULT NULL,
  `question` varchar(50) DEFAULT NULL,
  `yname` varchar(10) DEFAULT NULL,
  `yemail` varchar(10) DEFAULT NULL,
  `ymsg` varchar(10) DEFAULT NULL,
  `send` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`prof`, `home`, `abt`, `exp`, `art`, `ask`, `name`, `adr`, `nmb`, `eml`, `ig`, `wa`, `link`, `cr`, `title_que`, `desc_que`, `question`, `yname`, `yemail`, `ymsg`, `send`) VALUES
('Profolio', 'Home', 'About', 'Experience', 'Article', 'Ask Me A Question', 'Nurfajrian Abdurrohman', 'BSD, Tangerang Selatan, Indonesia', '+62 812-1173-6169', 'nurfajrian.ar@gmail.com', 'https://www.instagram.com/rian_jae', 'https://www.wa.link/euss8e', 'https://www.linkedin.com/in/nurfajrian-abdurrohman-732aaa287/', '2024 Nurfajrian Abdurrohman. All Rights Reserved.', 'Contact Me!', 'Ask Me Anything!', 'Ask Me!', ' Your Name', 'Your Email', 'Message', 'Send Message');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
