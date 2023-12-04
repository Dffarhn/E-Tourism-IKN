-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 04, 2023 at 01:51 AM
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
-- Database: `ikn_etourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_handphone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `no_handphone`, `email`) VALUES
(1, 'Vito', '10e79d7bfb4c3d77687ea5a2d0b45d02', '082253507765', 'vito@gmail.com '),
(2, 'daffa', '30703582f2f532a305c33d25bf8f40d6', '082253503380', '22523184@students.uii.ac.id  '),
(3, 'ayum', 'fa21fdc970e59db69853d1466169a158', '', ''),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', ''),
(5, 'jeki', '06284caf91aa2f9d44ec1d0a51dbfef7', '082253503355', 'd.raihan2004@gmail.com  '),
(6, 'zulfa', '1cf440e0df367e8a74becfa88ba0595a', '0812345678', 'zul@gmail.com '),
(7, 'naufal', '4d118fd4ce53d84b80a065ed1f020727', '082253503380', '22523087@students.uii.ac.id ');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdestinasi`
--

CREATE TABLE `bookingdestinasi` (
  `id_booking` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `harga_awal` int(255) NOT NULL,
  `harga_promo` int(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingdestinasi`
--

INSERT INTO `bookingdestinasi` (`id_booking`, `gambar`, `judul`, `harga_awal`, `harga_promo`, `deskripsi`, `fasilitas`, `id_jenis`) VALUES
(1, 'Destinasi1.png', 'Bukit Bengkirai', 20000, 15000, 'Bukit Bangkirai merupakan hutan mangrove yang terletak di Kecamatan Samboja, Kabupaten Kutai Kartanegara. Hutan ini memiliki pepohonan mangrove yang menjulang tinggi, dan menjadi salah satu destinasi wisata alam yang menarik', 'Toilet Bersih\n', 3),
(2, 'Destinasi2.png', 'Goa Tapak Raja', 20000, 15000, 'Goa Tapak Raja merupakan salah satu destinasi wisata alam dekat kawasan Ibu Kota Nusantara (IKN) yang sedang dibangun untuk kunjungan wisatawan. Lokasinya berada di Desa Wonosari, Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Kalimaatan Timur. Jarak lokasinya sekitar 31 kilometer dari Titik Nol Nusantara, dengan waktu tempuh kurang lebih satu jam perjalanan. Menurut penuturan Kepala Desa Wonosari bernama Kasiyono, Goa Tapak Raja ini diyakini sebagai lokasi pertapaan pada zaman kerajaan.', 'Fotografi \r\nToilet Bersih\r\nRuang Ganti', 3),
(3, 'Destinasi3.png', 'Gunung Parung', 50000, 40000, 'Gunung Parung menawarkan keasrian hutan yang masih terjaga, tempat ini menjadi pilihan yang menarik untuk menjelajahi alam bebas.\r\nLokasinya terletak di sebelah timur laut pusat IKN Nusantara. Dari puncak Gunung Parung, kamu akan melihat seluruh area IKN bahkan Teluk Balikpapan.\r\n', 'Pos Pendakian\r\nAir Bersih \r\nToilet', 3),
(4, 'Destinasi4.png', 'Air Terjun Tembinus', 15000, 13000, 'Air terjun Tembinus adalah salah satu destinasi alam yang memukau di Kalimantan Timur. Keindahan alamnya akan memikat pengunjung yang mencari petualangan dan ingin bersatu dengan alam.\r\nLokasinya terletak di Kecamatan Sepaku, Kabupaten Penajam Paser Utara. Kamu cukup menempuh perjalanan sekitar 3 jam dari Kecamatan Penajam ke air terjun Tembinus.\r\n', 'Toilet\r\nWarung ', 3),
(5, 'Destinasi5.png', 'Pantai Tanah Merah', 35000, 25000, 'Pantai Tanah Merah terletak di Tanjung Harapan, Kecamatan Samboja, Kutai Kartanegara.Pantai eksotis ini mampu memikat hati para pengunjung. \r\nPantai ini terkenal dengan pasir berwarna putih dan pohon cemara yang tumbuh di sepanjang pesisirnya. Pengunjung dapat bersantai di gazebo yang disediakan atau berenang di perairan dangkal dengan aman.\r\nJarak tempuh kurang lebih 74 kilometer dengan durasi perjalanan sekitar 2 jam dari Titik Nol IKN Nusantara.\r\n', 'Toilet Bersih\r\nRuang Bilas\r\nWarung makan\r\nspot fotografi', 3),
(6, 'Destinasi6.png', 'Desa Budaya Pampang', 70000, 60000, 'Desa Budaya Pampang adalah desa adat suku Dayak Kenyah di mana seni tarian tradisional yang menjadi daya tarik utama. Desa ini mudah diakses dari Kota Samarinda dan dekat dengan Bandara APT Pranoto Samarinda. \r\nPengunjung dapat menikmati pertunjukan tari tradisional sambil menikmati keindahan Sungai Pampang yang mengalir di dekatnya. Kamu bisa melihat sejumlah tarian, seperti tari hudoq, kanjet anyam tali, ajay piling, nyalama sakai, kancet punan lettu, dan bangen tawai.\r\nLokasi terletak di Kelurahan Sungai Siring, Kecamatan Samarinda Utara, Kalimantan Timur.\r\n', 'Spot Fotografi\r\nWarung\r\nToilet', 3),
(7, 'akomodasi1.png', 'The Rich Hotel', 467800, 400000, 'The Rich Hotel Penajam adalah pilihan yang sangat tepat bagi wisatawan yang ingin menikmati kenyamanan dekat dengan ibu kota baru Indonesia. Terletak di Jl. Penajam - Kuaro No.41 Lawe-Lawe, Penajam, hotel ini menawarkan akses mudah ke berbagai destinasi populer, termasuk Pantai Tanjung Jumlai dan Pantai Istana Amal Penajam. Dengan lokasi yang strategis, pelabuhan feri ke Kota Balikpapan juga dapat dijangkau dengan mudah', 'WiFi gratis yang cepat.\r\nKafe dan restoran untuk kenyamanan makan.\r\nSarapan disediakan.\r\nParkir gratis.\r\nResepsionis dan layanan kamar 24 jam.\r\nKamar dilengkapi dengan meja kerja, TV kabel, dan kulkas.\r\n', 4),
(8, 'akomodasi2.png', 'Villa Serenity Haven', 2200000, 1900000, 'Villa Serenity adalah tempat peristirahatan sempurna bagi mereka yang mencari ketenangan di jantung Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Damai no. 7, villa ini menyajikan suasana yang tenang namun tetap dekat dengan pusat kota. Taman Sakura dan Pusat Seni Kreatif IKN dapat diakses dengan mudah.', 'Kolam renang pribadi untuk relaksasi maksimal.\r\nRuang parkir eksklusif untuk kenyamanan tamu.\r\nDapur lengkap untuk kebebasan memasak.\r\nAkses internet cepat untuk koneksi yang lancar.\r\nArea kerja dan ruang pertemuan pribadi.\r\nLayanan kebersihan dan resepsionis 24 jam\r\n', 4),
(9, 'akomodasi3.png', 'Charming Cottage Stay', 999999, 850000, 'Charming Cottage Stay, adalah homestay yang tenang dan ramah, merupakan pilihan yang sempurna untuk para wisatawan yang ingin merasakan kehangatan rumah di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Sejahtera no. 5, homestay ini menawarkan atmosfer yang bersahaja dan dekat dengan pusat kota. Objek wisata seperti Taman Serasi dan Pasar Seni Lokal dapat dijangkau dengan mudah.\r\n\r\nCharming Cottage Stay mengundang para tamu untuk merasakan keramahan lokal dan kenyamanan seperti di rumah sendiri, menjadikannya pilihan ideal untuk workcation atau perjalanan santai di IKN Nusantara', 'Kamar tidur nyaman dengan dekorasi lokal.\r\nArea parkir yang aman dan nyaman.\r\nRuang bersama untuk bersantai dan berinteraksi.\r\nAkses WiFi gratis untuk tetap terhubung.\r\nDapur bersama untuk pengalaman masak lokal.\r\n', 4),
(10, 'akomodasi4.png', 'Kosan Gemilang', 1200000, 1100000, 'Kosan Gemilang adalah pilihan ideal bagi mereka yang mencari hunian sederhana namun modern di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Harmonis no. 15, kosan ini menawarkan kenyamanan seperti di rumah sendiri dengan sentuhan kontemporer. Dengan lokasi yang strategis, akses mudah ke pusat kota dan berbagai fasilitas umum.\r\n\r\nKosan Gemilang memberikan pengalaman tinggal yang modern dan terjangkau bagi mereka yang mencari tempat nyaman di IKN Nusantara, ideal untuk para mahasiswa atau pekerja muda.', 'Kamar pribadi dengan furnitur fungsional.\r\nArea parkir yang terawat dengan baik.\r\nDapur bersama untuk kebutuhan memasak ringan.\r\nKoneksi WiFi cepat untuk aktivitas online.\r\nRuang bersantai dan area komunal.\r\nLayanan kebersihan rutin untuk kenyamanan tamu.\r\n', 4),
(11, 'akomodasi5.png', 'Rumah Pohon Ketinggian Surgawi', 450000, 350000, 'Rumah Pohon Ketinggian Surgawi adalah tempat penginapan unik yang menawarkan pengalaman tinggal di tengah alam terbuka. Terletak di ketinggian di lereng Gunung Harmoni, Jalan Pohon Indah, rumah pohon ini memberikan suasana damai dan pemandangan alam yang menakjubkan di Ibu Kota Baru Indonesia di IKN Nusantara.\r\n\r\nRumah Pohon Ketinggian Surgawi mengajak para tamu untuk memeluk keindahan alam sambil merasakan kehangatan sebuah rumah pohon yang unik, membuatnya menjadi tempat sempurna untuk pelarian alam di IKN Nusantara', 'Rumah pohon dengan desain alami.\nTeras pribadi dengan pemandangan spektakuler.\nAkses ke jalur hiking dan kegiatan alam terbuka.\nTempat parkir yang aman untuk kendaraan.\nFasilitas mandi terbuka untuk pengalaman alam.\nArea berkumpul bersama untuk tamasya malam.\n', 4),
(12, 'akomodasi6.png', 'Skyline Elegence Apartments', 500000, 450000, 'Skyline Elegence Apartments menawarkan hunian mewah di lokasi strategis di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Metropolitan No. 7, apartemen ini menggabungkan gaya modern dengan kenyamanan lengkap untuk memenuhi kebutuhan penghuni yang cerdas dan berkelas.\nSkyline Elegence Apartments menawarkan pengalaman tinggal yang eksklusif dengan fasilitas premium, menjadi pilihan ideal untuk mereka yang menginginkan kenyamanan dan gaya hidup modern di IKN Nusantara', 'Kamar apartemen elegan dan nyaman.\nPemandangan kota yang spektakuler dari balkon pribadi.\nPusat kebugaran dan spa untuk kesehatan dan relaksasi.\nKolam renang infinity untuk bersantai.\nArea parkir aman dan terkelola dengan baik.\nRuang bersantai komunal dan aula pertemuan.\n', 4),
(13, 'transportasi1.png', 'Artour rent car', 650000, 500000, 'Didirikan dengan sebuah komitmen untuk memberikan kepuasan yang sempurna dengan pelayanan yang sepenuh hati dan profesional. Kami melayani informasi dan pengaturan perjalanan wisata seperti: penjualan paket tour, reservasi hotel dan villa, sewa kendaran / rental mobil, event organizer wisata petualangan, study tour, wisata bahari, wisata rohani layanan outbond untuk staf/ karyawan perusahaan, pelajar dan organisasi', 'Kami melayani jasa transportasi sebagai berikut:\r\nPersewaan Mobil Mewah\r\nAntar Jemput Bandara\r\nPersewaan Wedding Car\r\nPerjalanan Dalam dan Luar Kota\r\nPersewaan Mobil untuk Perjalanan Dinas\r\n', 2),
(14, 'transportasi2.png', 'Marketing Motor', 250000, 200000, 'Bagi Anda yang ingin meminimalisir biaya, Rental Motor Penajam Paser Utara terdekat inilah pilihan tepat bagi musafir yang berada di kota Penajam Paser Utara. Selain memberikan berbagai pelayanan yang terbaik namun juga memiliki berbagai keunggulan. Sehingga Anda akan mendapatkan berbagai keuntungan dengan Sewa Jasa Rental Motor Penajam Paser Utara Bagi Anda yang menggunakan Rental Sewa Motor Penajam Paser Utara untuk berwisata di Penajam Paser Utara maka Anda bisa sesuka hati berkunjung ke lokasi yang Anda kehendaki kapanpun dan dimanapun Anda dengan keluarga tanpa kerepotan mencari angkutan.', 'Unit motor\r\nHelm\r\n', 2),
(15, 'transportasi3.png', 'Rodalink', 130000, 120000, 'Rodalink memiliki misi untuk menjadi jaringan (chain store) outlet sepeda modern terbaik dengan pilihan produk yang lengkap dan berkualitas dengan harga yang terpercaya dan kompetitif, pelayanan yang profesional, dan perbaikan berkesinambungan untuk mengembangkan outlet sepeda yang nyaman bagi konsumen', 'Unit sepeda\r\nHelm\r\nPakaian Bersepeda', 2),
(16, 'transportasi4.png', 'Tugu Wisata', 3000000, 2850000, 'Kami melayani request sewa bus (berbagai jenis armada) baik dalam Kota Penajam Paser Utara maupun ke kota-kota sekitarnya. Layanan 24 jam, harga sewa terjangkau. Tunggu apalagi. Buruan pesan sekarang juga', 'Armada Bus yang memadai\r\nToilet dalam bus\r\nfree snack\r\nkupon makan ', 2),
(17, 'transportasi5.png', 'Majestic RV', 2000000, 1500000, 'Majestic RV menyediakan layanan penyewaan RV profesional kelas satu di seluruh Indonesia. Layanan bintang 5 kami yang lengkap menyediakan armada kendaraan rekreasi yang luar biasa, semuanya dengan akomodasi mewah dan luas, diantar ke lokasi yang Anda butuhkan', 'Free Konsumsi\r\nFree Minum\r\n', 2),
(19, 'taman-bunga-rozaline.png', 'Taman Bunga Rozaline', 30000, 20000, 'pohon rindang dan banyak pepohonan disana ygy', 'pohon rindang dan asri, toilet', 3),
(20, 'Desa_Wisata_Mentawir.jpg', 'Desa Wisata Mentawir ', 30000, 15000, 'Desa Wisata Mentawir adalah tujuan ekowisata selanjutnya yang tak kalah menakjubkan untuk kamu kunjungi di Kalimantan Timur. Memiliki luas sekitar 2.300 hektar, 300 hektar di antaranya dimanfaatkan sebagai kawasan ekowisata mangrove. \r\nDesa ini menawarkan keindahan alam, seperti hutan mangrove, arung jeram Sungai Mentawir, hutan tropis, dan hutan bambu.', 'toilet, pohon yang asri', 3),
(21, 'titikNol.jpg', 'Tititk Nol', 15000, 5000, 'Titik Nol IKN mulai menyedot perhatian publik sejak tanggal 14 Maret 2022. Titik ini adalah penanda pusat ibu kota baru nantinya.\r\n\r\nHingga sekarang, Titik Nol sudah berubah pusat sebagai objek wisata bagi masyarakat di sekitar. Di hari libur, lokasi pasti dipadati oleh pengunjung.\r\n\r\nAgar bisa sampai di titik Nol, pengunjung harus menuruni puluhan anak tangga terlebih dahulu yang berbentuk setengah lingkaran.\r\n\r\nDi sekitar lokasi terdapat pendapa luas dengan ornamen khas kalimantan yang selalu ramai dikunjungi pengunjung. Wisatawan bisa melepas lelah serta berfoto ria sambil menikmati hawa sejuk pohon pinus.', 'pohon rindang dan asri, toilet', 3);

-- --------------------------------------------------------

--
-- Table structure for table `booking_history`
--

CREATE TABLE `booking_history` (
  `id_purchase` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `no_hp_pemesanan` varchar(255) NOT NULL,
  `email_pemesanan` varchar(255) NOT NULL,
  `pembayaran` enum('BCA','BSI','MANDIRI','BRI','Gopay','Dana','OVO','SHOPEEPAY') NOT NULL,
  `voucher` varchar(255) DEFAULT NULL,
  `harga_total` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_history`
--

INSERT INTO `booking_history` (`id_purchase`, `nama_pemesan`, `tanggal_pemesanan`, `no_hp_pemesanan`, `email_pemesanan`, `pembayaran`, `voucher`, `harga_total`, `id_admin`, `id_booking`) VALUES
(11, 'Arum', '2024-01-06', '082253503356', 'd.raihan2004@gmail.com', 'Dana', NULL, '20000', 2, 19),
(22, 'bambang', '2024-01-06', '082253503356', '22523184@students.uii.ac.id', 'OVO', NULL, '60000', 5, 19),
(26, 'daffa', '2024-01-06', '082253503380', '22523184@students.uii.ac.id  ', 'BSI', NULL, '20000', 2, 21),
(27, 'daffa', '2024-02-03', '082253503380', '22523184@students.uii.ac.id  ', 'MANDIRI', NULL, '40000', 2, 21),
(28, 'Vito', '2023-12-31', '082253507765', 'vito@gmail.com ', 'BRI', NULL, '25000', 1, 21),
(29, 'daffa', '2024-01-04', '082253503380', '22523184@students.uii.ac.id  ', 'MANDIRI', NULL, '180000', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `destinasiwisata`
--

CREATE TABLE `destinasiwisata` (
  `id_destinasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasiwisata`
--

INSERT INTO `destinasiwisata` (`id_destinasi`, `judul`, `gambar`, `deskripsi`, `id_jenis`) VALUES
(1, 'Bukit Bengkirai', 'blogwisata1.png', 'Bukit Bengkirai adalah destinasi dengan hutan yang menakjubkan. Destinasi ini sangat populer untuk trekking dan menjelajahi keindahan alam serta berbagai habitat hewan.\r\n\r\nMemiliki hutan seluas 510 hektar, wisata ini menyuguhkan beragam fasilitas. Ada tanaman obat-obatan dan pengunjung bisa menyebrangi jembatan Canopy sepanjang 64 meter.\r\n\r\nPengunjung juga bisa bermain wahana, seperti flying fox, swing line, wall climbing, dan jembatan jaring. Lokasinya terletak di Kecamatan Samboja, Kabupaten Kutai Kartanegara dengan jarak tempuh 1 jam 12 menit dari Titik Nol IKN Nusantara.', 3),
(2, 'Goa Tapak Raja', 'blogwisata2.png', 'Goa Tapak Raja merupakan salah satu destinasi wisata alam yang terletak di Desa Wonosari, Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Kalimantan Timur. Goa ini berjarak sekitar 31 kilometer dari Titik Nol IKN Nusantara.\n\nGoa Tapak Raja memiliki luas sekitar 100 meter persegi, dan memiliki kedalaman sekitar 50 meter. Goa ini memiliki stalaktit dan stalakmit yang sangat indah. Di dalam goa, terdapat sebuah stalaktit yang menyerupai tapak kaki manusia, yang menjadi asal muasal nama goa ini.\n\nMenurut legenda, Goa Tapak Raja merupakan tempat pertapaan para raja di masa lampau. Goa ini juga dipercaya memiliki air yang dapat membuat awet muda.\n\nSaat ini, Goa Tapak Raja masih dalam tahap pengembangan menjadi destinasi wisata. Pemerintah setempat telah membangun beberapa fasilitas pendukung, seperti jalan, tempat parkir, dan toilet.\n\nBerikut adalah beberapa aktivitas yang dapat dilakukan di Goa Tapak Raja:\n\n    Menjelajahi goa\n    Mengabadikan momen dengan berfoto\n    Belajar tentang sejarah dan legenda Goa Tapak Raja\n\nGoa Tapak Raja merupakan destinasi wisata yang menarik untuk dikunjungi. Dengan keindahan alamnya dan nilai sejarahnya, Goa Tapak Raja dapat menjadi salah satu destinasi wisata favorit di IKN Nusantara. ', 3),
(3, 'Gunung Parung', 'blogwisata3.png', 'Gunung Parung merupakan salah satu destinasi wisata alam yang terletak di Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Kalimantan Timur. Gunung ini berjarak sekitar 30 kilometer dari Titik Nol IKN Nusantara.\nGunung Parung memiliki ketinggian sekitar 687 meter di atas permukaan laut. Gunung ini merupakan salah satu puncak tertinggi di wilayah IKN Nusantara.\nGunung Parung memiliki keindahan alam yang sangat luar biasa. Dari puncak gunung, pengunjung dapat melihat pemandangan yang sangat indah, mulai dari hutan hujan tropis, Teluk Balikpapan, hingga Pulau Balang.\nGunung Parung juga merupakan salah satu tempat yang cocok untuk kegiatan pendakian. Jalur pendakian ke puncak gunung relatif mudah, dan dapat ditempuh dengan waktu sekitar 3-4 jam.\nBerikut adalah beberapa aktivitas yang dapat dilakukan di Gunung Parung:\n•	Mendaki gunung\n•	Mengabadikan momen dengan berfoto\n•	Belajar tentang flora dan fauna di sekitar gunung\nGunung Parung merupakan destinasi wisata yang menarik untuk dikunjungi. Dengan keindahan alamnya dan aktivitas yang dapat dilakukan, Gunung Parung dapat menjadi salah satu destinasi wisata favorit di IKN Nusantara.\nBerikut adalah beberapa tips untuk berkunjung ke Gunung Parung:\n•	Gunakan pakaian dan sepatu yang nyaman untuk mendaki\n•	Bawa bekal makanan dan minuman yang cukup\n•	Hati-hati saat mendaki, terutama saat musim hujan\n•	Jangan membuang sampah sembarangan\n', 3),
(4, 'Air Terjun Tembinus', 'blogwisata4.png', 'Air Terjun Tembinus merupakan salah satu destinasi wisata alam yang terletak di Desa Mentawir, Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Kalimantan Timur. Air terjun ini berjarak sekitar 15 kilometer dari Titik Nol IKN Nusantara.\nAir Terjun Tembinus memiliki ketinggian sekitar 20 meter. Air terjun ini mengalir dari sebuah tebing yang menjulang tinggi. Air terjun ini memiliki kolam di bawahnya yang dapat digunakan untuk berenang.\nAir Terjun Tembinus memiliki pemandangan alam yang sangat indah. Air terjun ini dikelilingi oleh hutan hujan tropis yang masih sangat asri. Suasana di sekitar air terjun sangat sejuk dan tenang.\nBerikut adalah beberapa aktivitas yang dapat dilakukan di Air Terjun Tembinus:\n•	Menikmati keindahan air terjun\n•	Berenang di kolam air terjun\n•	Berfoto-foto\n•	Menjelajahi hutan hujan tropis di sekitar air terjun\nAir Terjun Tembinus merupakan destinasi wisata yang menarik untuk dikunjungi. Dengan keindahan alamnya dan aktivitas yang dapat dilakukan, Air Terjun Tembinus dapat menjadi salah satu destinasi wisata favorit di IKN Nusantara.\nBerikut adalah beberapa tips untuk berkunjung ke Air Terjun Tembinus:\n•	Gunakan pakaian dan sepatu yang nyaman untuk berjalan kaki\n•	Bawa bekal makanan dan minuman yang cukup\n•	Hati-hati saat berjalan kaki, terutama saat musim hujan\n•	Jangan membuang sampah sembarangan\n', 3),
(5, 'Pantai Tanah Merah', 'blogwisata5.png', 'Pantai Tanah Merah merupakan salah satu destinasi wisata alam yang terletak di Kecamatan Samboja, Kabupaten Kutai Kartanegara, Kalimantan Timur. Pantai ini berjarak sekitar 58 kilometer dari Titik Nol IKN Nusantara.\nPantai Tanah Merah memiliki pasir berwarna merah yang sangat unik. Pasir ini terbentuk dari hasil pelapukan batu bara yang terdapat di sekitar pantai. Pantai ini juga dikelilingi oleh pohon cemara yang rindang, sehingga suasana di pantai sangat sejuk dan nyaman.\nPantai Tanah Merah merupakan salah satu destinasi wisata yang populer di Kalimantan Timur. Pantai ini sering dikunjungi oleh wisatawan lokal maupun wisatawan mancanegara.\nBerikut adalah beberapa aktivitas yang dapat dilakukan di Pantai Tanah Merah:\n•	Menikmati keindahan pantai\n•	Bersantai di bawah pohon cemara\n•	Berfoto-foto\n•	Bermain air di pantai\n•	Berkemah\nPantai Tanah Merah merupakan destinasi wisata yang menarik untuk dikunjungi. Dengan keindahan alamnya dan aktivitas yang dapat dilakukan, Pantai Tanah Merah dapat menjadi salah satu destinasi wisata favorit di IKN Nusantara.\nBerikut adalah beberapa tips untuk berkunjung ke Pantai Tanah Merah:\n•	Gunakan pakaian dan sepatu yang nyaman untuk berjalan kaki\n•	Bawa bekal makanan dan minuman yang cukup\n•	Hati-hati saat berjalan kaki, terutama saat musim hujan\n•	Jangan membuang sampah sembarangan\n', 3),
(6, 'Desa Budaya Pampang', 'blogwisata6.png', 'Desa Budaya Pampang merupakan salah satu destinasi wisata budaya yang terletak di Kecamatan Samarinda Utara, Kota Samarinda, Provinsi Kalimantan Timur. Desa ini berjarak sekitar 23 kilometer dari pusat kota Samarinda.\nDesa Budaya Pampang merupakan desa adat yang dihuni oleh suku Dayak Kenyah. Desa ini memiliki budaya yang masih sangat kental, dan menjadi salah satu destinasi wisata edukasi yang menarik.\nDesa Budaya Pampang memiliki berbagai daya tarik wisata, antara lain:\n•	Rumah adat Lamin\nRumah adat Lamin merupakan rumah adat suku Dayak Kenyah. Rumah ini memiliki bentuk yang unik, dan terbuat dari kayu yang kokoh. Rumah adat Lamin biasanya digunakan untuk tempat tinggal, upacara adat, dan pertemuan masyarakat.\n•	Tarian Dayak Kenyah\nDesa Budaya Pampang memiliki berbagai tarian Dayak Kenyah yang indah dan menarik. Tarian-tarian ini biasanya ditampilkan dalam upacara adat atau acara-acara khusus.\n•	Upacara adat Dayak Kenyah\nDesa Budaya Pampang sering mengadakan upacara adat Dayak Kenyah. Upacara adat ini merupakan salah satu cara untuk melestarikan budaya Dayak Kenyah.\n•	Kehidupan sehari-hari masyarakat Dayak Kenyah\nPengunjung dapat belajar tentang kehidupan sehari-hari masyarakat Dayak Kenyah di Desa Budaya Pampang. Pengunjung dapat melihat bagaimana masyarakat Dayak Kenyah bercocok tanam, berburu, dan membuat kerajinan tangan.\nBerikut adalah beberapa aktivitas yang dapat dilakukan di Desa Budaya Pampang:\n•	Mengunjungi rumah adat Lamin\n•	Menonton tarian Dayak Kenyah\n•	Mengikuti upacara adat Dayak Kenyah\n•	Belajar tentang kehidupan sehari-hari masyarakat Dayak Kenyah\nDesa Budaya Pampang merupakan destinasi wisata yang menarik untuk dikunjungi. Dengan budaya yang masih sangat kental, Desa Budaya Pampang dapat menjadi salah satu destinasi wisata edukasi yang favorit di Kalimantan Timur.\n', 3),
(7, 'Ayam Panggang Bumbu Rempah ', 'blogmakanan1.png', 'Kuliner ayam panggang rempah khas IKN di Desa Tengin Baru, Kecamatan Sepaku, Kabupaten Penajam Paser Utara, menjadi salah satu yang kerap diburu oleh para pelancong.\r\nPasalnya, ayam panggang rempah khas IKN ini terbuat dari ayam kampung yang sengaja dibudidayakan secara mandiri oleh masyarakat setempat. Selain itu, bumbu rempah yang digunakan juga menggunakan bumbu rempah alami yang dipetik dari perkebunan masyarakat sekitar.', 1),
(8, 'Roba Ruan', 'blogmakanan2.png', 'Roba Ruan adalah hidangan ikan yang dimasak dengan bumbu rempah-rempah yang dibungkus dengan daun talas. Ikan yang digunakan biasanya adalah ikan gabus, ikan haruan, atau ikan patin. Bumbu rempah-rempah yang digunakan terdiri dari berbagai macam bumbu, seperti cabai merah, bawang merah, bawang putih, kunyit, jahe, dan lengkuas. Roba Ruan biasanya disajikan dengan nasi hangat dan sambal.', 1),
(9, 'Nasi Bekepor', 'blogmakanan3.png', 'Nasi Bekepor adalah hidangan nasi yang dimasak dengan santan dan bumbu rempah-rempah. Nasi yang digunakan biasanya adalah nasi putih. Bumbu rempah-rempah yang digunakan terdiri dari berbagai macam bumbu, seperti cabai merah, bawang merah, bawang putih, kunyit, jahe, dan lengkuas. Nasi Bekepor biasanya disajikan dengan lauk pauk, seperti ikan, ayam, atau daging.', 1),
(10, 'Daging Masak Bumi Hangus', 'blogmakanan4.png', 'Daging Masak Bumi Hangus adalah hidangan daging yang dimasak dengan bumbu rempah-rempah di dalam lubang tanah. Daging yang digunakan biasanya adalah daging sapi atau daging kambing. Bumbu rempah-rempah yang digunakan terdiri dari berbagai macam bumbu, seperti cabai merah, bawang merah, bawang putih, kunyit, jahe, dan lengkuas. Daging Masak Bumi Hangus biasanya disajikan dengan nasi hangat dan sambal.', 1),
(11, 'Sayur Gangan Asam Kutai', 'blogmakanan5.png', 'Sayur Gangan Asam Kutai adalah hidangan sayur yang dimasak dengan bumbu asam jawa dan bumbu rempah-rempah. Sayuran yang digunakan biasanya adalah sayur kangkung, sayur bayam, atau sayur pakis. Bumbu rempah-rempah yang digunakan terdiri dari berbagai macam bumbu, seperti cabai merah, bawang merah, bawang putih, kunyit, jahe, dan lengkuas. Sayur Gangan Asam Kutai biasanya disajikan dengan nasi hangat.', 1),
(12, 'Gance Ruan', 'blogmakanan6.png', 'Gance Ruan adalah hidangan ikan patin yang dimasak dengan bumbu rempah-rempah khas Kalimantan Timur. Ikan patin yang digunakan biasanya adalah ikan patin yang masih segar dan berukuran besar. Bumbu rempah-rempah yang digunakan terdiri dari berbagai macam bumbu, seperti cabai merah, bawang merah, bawang putih, kunyit, jahe, dan lengkuas. Gance Ruan biasanya disajikan dengan nasi hangat dan sambal.', 1),
(13, 'The Rich Hotel', 'blogtempat1.png', 'The Rich Hotel Penajam adalah pilihan yang sangat tepat bagi wisatawan yang ingin menikmati kenyamanan dekat dengan ibu kota baru Indonesia. Terletak di Jl. Penajam - Kuaro No.41 Lawe-Lawe, Penajam, hotel ini menawarkan akses mudah ke berbagai destinasi populer, termasuk Pantai Tanjung Jumlai dan Pantai Istana Amal Penajam. Dengan lokasi yang strategis, pelabuhan feri ke Kota Balikpapan juga dapat dijangkau dengan mudah.', 4),
(14, 'Villa Serenity Haven', 'blogtempat2.png', 'Villa Serenity adalah tempat peristirahatan sempurna bagi mereka yang mencari ketenangan di jantung Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Damai no. 7, villa ini menyajikan suasana yang tenang namun tetap dekat dengan pusat kota. Taman Sakura dan Pusat Seni Kreatif IKN dapat diakses dengan mudah.', 4),
(15, 'Charming Cottage Stay', 'blogtempat3.png', 'Charming Cottage Stay, adalah homestay yang tenang dan ramah, merupakan pilihan yang sempurna untuk para wisatawan yang ingin merasakan kehangatan rumah di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Sejahtera no. 5, homestay ini menawarkan atmosfer yang bersahaja dan dekat dengan pusat kota. Objek wisata seperti Taman Serasi dan Pasar Seni Lokal dapat dijangkau dengan mudah.', 4),
(16, 'Kosan Gemilang', 'blogtempat4.png', 'Kosan Gemilang adalah pilihan ideal bagi mereka yang mencari hunian sederhana namun modern di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Harmonis no. 15, kosan ini menawarkan kenyamanan seperti di rumah sendiri dengan sentuhan kontemporer. Dengan lokasi yang strategis, akses mudah ke pusat kota dan berbagai fasilitas umum.', 4),
(17, 'Rumah Pohon Ketinggian Surgawi', 'blogtempat5.png', 'Rumah Pohon Ketinggian Surgawi adalah tempat penginapan unik yang menawarkan pengalaman tinggal di tengah alam terbuka. Terletak di ketinggian di lereng Gunung Harmoni, Jalan Pohon Indah, rumah pohon ini memberikan suasana damai dan pemandangan alam yang menakjubkan di Ibu Kota Baru Indonesia di IKN Nusantara.', 4),
(18, 'Skyline Elegence Apartments', 'blogtempat6.png', 'Skyline Elegence Apartments menawarkan hunian mewah di lokasi strategis di Ibu Kota Baru Indonesia di IKN Nusantara. Terletak di Jalan Metropolitan No. 7, apartemen ini menggabungkan gaya modern dengan kenyamanan lengkap untuk memenuhi kebutuhan penghuni yang cerdas dan berkelas.\nSkyline Elegence Apartments menawarkan pengalaman tinggal yang eksklusif dengan fasilitas premium, menjadi pilihan ideal untuk mereka yang menginginkan kenyamanan dan gaya hidup modern di IKN Nusantara', 4),
(19, 'Artour rent car', 'blogkendaraan1.png', 'Didirikan dengan sebuah komitmen untuk memberikan kepuasan yang sempurna dengan pelayanan yang sepenuh hati dan profesional. Kami melayani informasi dan pengaturan perjalanan wisata seperti: penjualan paket tour, reservasi hotel dan villa, sewa kendaran / rental mobil, event organizer wisata petualangan, study tour, wisata bahari, wisata rohani layanan outbond untuk staf/ karyawan perusahaan, pelajar dan organisasi', 2),
(20, 'Marketing Motor', 'blogkendaraan2.png', 'Bagi Anda yang ingin meminimalisir biaya, Rental Motor Penajam Paser Utara terdekat inilah pilihan tepat bagi musafir yang berada di kota Penajam Paser Utara. Selain memberikan berbagai pelayanan yang terbaik namun juga memiliki berbagai keunggulan. Sehingga Anda akan mendapatkan berbagai keuntungan dengan Sewa Jasa Rental Motor Penajam Paser Utara Bagi Anda yang menggunakan Rental Sewa Motor Penajam Paser Utara untuk berwisata di Penajam Paser Utara maka Anda bisa sesuka hati berkunjung ke lokasi yang Anda kehendaki kapanpun dan dimanapun Anda dengan keluarga tanpa kerepotan mencari angkutan.', 2),
(21, 'Roda Link revisi', 'blogkendaraan3.png', 'Rodalink memiliki misi untuk menjadi jaringan (chain store) outlet sepeda modern terbaik dengan pilihan produk yang lengkap dan berkualitas dengan harga yang terpercaya dan kompetitif, pelayanan yang profesional, dan perbaikan berkesinambungan untuk mengembangkan outlet sepeda yang nyaman bagi konsumen 12', 2),
(23, 'Tugu Wisata', 'blogkendaraan4.png', 'Kami melayani request sewa bus (berbagai jenis armada) baik dalam Kota Penajam Paser Utara maupun ke kota-kota sekitarnya. Layanan 24 jam, harga sewa terjangkau. Tunggu apalagi. Buruan pesan sekarang juga', 2),
(24, 'Majestic RV edit sekarang', 'blogkendaraan5.png', 'Majestic RV menyediakan layanan penyewaan RV profesional kelas satu di seluruh Indonesia. Layanan bintang 5 kami yang lengkap menyediakan armada kendaraan rekreasi yang luar biasa, semuanya dengan akomodasi mewah dan luas, diantar ke lokasi yang Anda butuhkan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jeniswisata`
--

CREATE TABLE `jeniswisata` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeniswisata`
--

INSERT INTO `jeniswisata` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Kuliner'),
(2, 'Transportasi'),
(3, 'Wisata'),
(4, 'Akomodasi');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `isi_testimoni` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_booking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `isi_testimoni`, `rating`, `id_admin`, `id_booking`) VALUES
(1, 'blabla', 5, 1, 5),
(2, 'tes', 4, 2, 19),
(3, 'qwqewerw', 2, 2, 21),
(4, 'sangat mantap sekali bisa berleha-leha disana dengan ada nya banyak pohon rindang', 4, 1, 21),
(5, 'mantap sekali ini desa budaya pampang sangat terharu sudah bisa kesana', 4, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bookingdestinasi`
--
ALTER TABLE `bookingdestinasi`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD PRIMARY KEY (`id_purchase`),
  ADD KEY `idadmin` (`id_admin`),
  ADD KEY `idbooking` (`id_booking`);

--
-- Indexes for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  ADD PRIMARY KEY (`id_destinasi`),
  ADD KEY `idjenis` (`id_jenis`);

--
-- Indexes for table `jeniswisata`
--
ALTER TABLE `jeniswisata`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `testimoni_ibfk_1` (`id_admin`),
  ADD KEY `testimoni_ibfk_2` (`id_booking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookingdestinasi`
--
ALTER TABLE `bookingdestinasi`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `booking_history`
--
ALTER TABLE `booking_history`
  MODIFY `id_purchase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jeniswisata`
--
ALTER TABLE `jeniswisata`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdestinasi`
--
ALTER TABLE `bookingdestinasi`
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jeniswisata` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD CONSTRAINT `idadmin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idbooking` FOREIGN KEY (`id_booking`) REFERENCES `bookingdestinasi` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  ADD CONSTRAINT `idjenis` FOREIGN KEY (`id_jenis`) REFERENCES `jeniswisata` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`id_booking`) REFERENCES `bookingdestinasi` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
