-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 04:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_uas_1810520035`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `desc_singkat` varchar(100) NOT NULL,
  `desc_lengkap` varchar(10000) NOT NULL,
  `image_url` varchar(1000) DEFAULT NULL,
  `kategori_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `desc_singkat`, `desc_lengkap`, `image_url`, `kategori_barang`) VALUES
(1, 'PlayStation 5', 'Console next gen dari sony untuk pengalaman bermain yang baru.', 'PlayStation 5 (disingkat PS5) merupakan konsol permainan yang dikembangkan oleh Sony Interactive Entertainment. Diumumkan sebagai penerus PlayStation 4 pada tahun 2019, dan akan dirilis pada akhir tahun 2020. Konsol ini akan menggunakan solid state drive (SSD) khusus, GPU dengan dukungan ray tracing, serta kompatibilitas mundur dengan permainan PlayStation 4 dan PlayStation VR. PlayStation 5 menggunakan AMD Zen 2 dengan 8 inti yang berjalan hingga 3.5 GHz. GPU menggunakan system-on-chip (SOC) berdasarkan AMD RDNA 2, dengan 36 compute units yang berjalan hingga 2.23 GHz, dan mampu menghasilkan 10.28 TFLOPS. CPU dan GPU menggunakan teknologi AMD SmartShift yang mengatur frekuensi berdasarkan penggunaan, untuk mencapai performa dan penggunaan daya yang ideal. Mark Cerny megatakan bahwa perbandingan langsung berdasarkan compute unit maupun FLOPS mungkin tidak akurat. GPU memiliki dukungan perangkat keras untuk ray-tracing, memungkinkan ray-tracing secara realtime. PS 5 menggunakan 16GB GDDR6 SDRAM dengan bandwith 448 GB/s.', 'https://miro.medium.com/max/3696/0*UqnTgDYpNqtEJrsC.jpg', 2),
(2, 'PlayStation 4', 'Salah satu console terbaik saat ini!', 'PlayStation 4 atau PS4 adalah konsol permainan video buatan Sony Computer Entertainment. Konsol yang diumumkan sebagai penerus PlayStation 3 dalam sebuah konferensi pers pada tanggal 20 Februari 2013 ini dirilis di Amerika Utara pada tanggal 15 November 2013, di Eropa dan Australia pada tanggal 29 November 2013, serta di Indonesia pada tanggal 9 Februari 2014, PlayStation 4 menggunakan Accelerated Processing Unit (APU) yang dikembangkan AMD bersama dengan Sony. Menggabungkan central processing unit (CPU) dan graphics processing unit (GPU), serta komponen lain seperti kontroler memori dan video decoder.[17] [18]CPU terdiri dari dua modul Jaguar empat-inti, dengan total 8 inti prosesor x86-64.[19] Pengembang dapat menggunakan 7 inti yang tersedia.[20] GPU terdiri dari 18 compute unit yang secara teori memiliki performa 1,84 TFLOPS.[21] Menggunakan RAM bertipe GDDR5 yang memiliki clock frequency maksimum 2.75 GHz dan bandwidth maksimum 176 GB/s.[22][23][24] Konsol menggunakan RAM 8 GB,[25][26] 16 kali dari PS3. Memiliki chip tambahan untuk mengunduh, menunggah,dan hal lain ketika sistem dalam permainan atau mode sleep. PS 4 juga memiliki modul audio yang mendukung percakapan dalam game serta audio stream dalam jumlah besar yang dapat digunakan dalam permainan.[27] Semua model PS4 mendukung profil warna HDR.[28] PlayStation 4 memiliki optical drive yang mampu membaca cakram Blu-Ray tiga kali lebih cepat dibandingkan dengan PlayStation 3.[29][30] PlayStation 4 juga memiliki perangkat keras untuk dekompresi zlib secara langsung.[31] Model PS4 awal mendukung pemutaran media 4K, tetapi tidak mampu memainkan game dalam resolusi 4K.[32][33] PlayStation 4 memiliki konektivitas Wi-Fi. eternet, Bluetooth, dan USB 3.0.[34][35] Playstation memiliki fitur \"Rest mode\", yang memungkinkan perangkat dalam kondisi rendah daya, dan memungkinkan pengguna untuk secara seketika melanjutkan permainan atau aplikasi saat PS4 aktif kembali. PS4 juga mampu mengunduh konten seperti permainan dan pembaruan sistem operasi ketika dalam mode ini.\r\n', 'https://cdn.medcom.id/images/content/2020/08/05/1172164/WsIX52qJko.jpg', 2),
(3, 'AMD Ryzen 5000 series', 'Processor terbaik didunia saat ini dalam hal game maupun produktivitas.', 'Ryzen ( /ˈraɪzən/ ry-zən ) [1] adalah merek [2] mikroprosesor x86-64 yang dirancang dan dipasarkan oleh Advanced Micro Devices, Inc. (AMD) untuk platform desktop, mobile, dan sistem benam berdasarkan arsitektur Zen dan turunannya. Terdiri dari unit pemroses central (CPU) dan unit pemroses terakselerasi (APU).\r\n\r\nAMD secara resmi mengumumkan produk Ryzen 14nm dalam acara bertajuk New Horizon pada 13 Desember 2016 dan pada bulan Februari menunjukkan prosesor pertama dengan CPU 8-core, 16 thread yang dirilis pada 2 Maret 2017. [3] CPU Ryzen generasi kedua menggunakan arsitektur mikro Zen + yang dibangun pada proses 12nm dan dirilis pada April 2018. Generasi ini memiliki peningkatan Instruksi per siklus (IPC) dan clockspeed sebesar 3% dan 6%, yang memberikan peningkatan performa sebesar 10% dibandingkan dengan generasi sebelumnya. [4] Generasi ketiga dirancang berdasarkan Zen 2 dan menampilkan peningkatan yang lebih signifikan dengan penyusutan proses ke 7nm milik TSMC, diluncurkan pada 7 Juli 2019. Menurut AMD Zen 2 memiliki peningkatan IPC 15% , meskipun hasil dari MSI [5] dan userbenchmark [6] menunjukkan peningkatan hanya 13%. Pada akhir 2019, Zen 3 terungkap sebagai arsitektur yang sepenuhnya baru dan dibangun dengan teknologi 7nm+ TSMC, dan saat ini sedang menjalani pengambilan sampel teknik pada Q4 2019.\r\n\r\nMeski sebagian besar produk Ryzen menggunakan platform soket AM4, pada Agustus 2017 AMD menambahkan lini prosesor desktop dengan jumlah core tinggi yang ditujukan untuk pasar stasiun kerja dengan nama Ryzen Threadripper. Threadripper menggunakan soket yang lebih besar, yaitu TR4 dan sTRX4. Keduanya mendukung lebih banyak saluran memori dan jalur PCI Express.   \r\n\r\nPada bulan Desember 2019, AMD mulai mengeluarkan produk Ryzen generasi pertama yang dibangun menggunakan arsitektur Zen + generasi kedua. [7] Sebagai contoh, Ryzen 5 1600 produksi terbaru dengan kode \"AF\" yang pada dasarnya adalah Ryzen 5 2600 dengan spesifikasi yang sama seperti Ryzen 5 1600 awal.', 'https://www.pcgamesn.com/wp-content/uploads/2018/05/AMD-Ryzen-5-2600-review.png', 1),
(4, 'Mortal Kombat XI', 'Game pertarungan yang sangat seru untuk dimainkan', 'Mortal Kombat 11 merupakan game pertarungan yang dikembangkan oleh NetherRealm Studios dan diterbitkan oleh Warner Bros. Interactive Entertainment. Berjalan dengan versi Unreal Engine 3 yang dimodifikasi besar-besaran, [7] ini adalah angsuran utama kesebelas dalam seri Mortal Kombat dan sekuel Mortal Kombat X tahun 2015. Diumumkan di The Game Awards 2018, game ini dirilis di Amerika Utara dan Eropa pada tanggal 23 April 2019 untuk Microsoft Windows, Nintendo Switch, PlayStation 4, dan Xbox One - kecuali versi Switch Eropa yang dirilis pada 10 Mei 2019. [8] Permainan ini dirilis di Stadia pada 19 November 2019. [9]\r\n\r\nSetelah dirilis, versi konsol dari Mortal Kombat 11 menerima ulasan yang umumnya menguntungkan, yang memuji gameplay, cerita, grafik, dan kode jaringan yang ditingkatkan, tetapi menerima kritik karena adanya transaksi mikro, dan ketergantungan yang berlebihan pada penggilingan. Sebuah ekspansi untuk game tersebut dirilis pada 26 Mei 2020 berjudul Mortal Kombat 11: Aftermath. Perluasan ini termasuk mode cerita tambahan, tiga karakter baru, tahapan baru, dan kembalinya kematian panggung dan langkah penyelesaian persahabatan. Versi gim yang disempurnakan yang berisi semua konten yang dapat diunduh hingga saat itu, berjudul Mortal Kombat 11: Edisi Ultimate, dirilis untuk PlayStation 5 dan Xbox Series X / S pada 17 November 2020.', 'https://upload.wikimedia.org/wikipedia/en/7/7e/Mortal_Kombat_11_cover_art.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id_fav` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kt_barang` int(11) NOT NULL,
  `nama_kategori_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kt_barang`, `nama_kategori_barang`) VALUES
(1, 'pc component'),
(2, 'console'),
(3, 'game fisik dvd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kt_barang` (`kategori_barang`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `fk_barang` (`id_barang`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kt_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kt_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `kt_barang` FOREIGN KEY (`kategori_barang`) REFERENCES `kategori_barang` (`id_kt_barang`);

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
