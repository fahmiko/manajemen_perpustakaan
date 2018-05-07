-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 11:55 PM
-- Server version: 5.6.36
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `bahasa` varchar(25) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `keterangan`, `tahun_terbit`, `bahasa`, `pengarang`, `penerbit`, `gambar`) VALUES
(1, 1, 'Seventh Edition', 'Software Engineering presents a broad perspective on software systems engineering, concentrating on widely used techniques for developing large-scale systems. The objectives of this seventh edition are to include new material on iterative software development, component-based software engineering and system architectures, to emphasize that system dependability is not an add-on but should be considered at all stages of the software process, and not to increase the size of the book significantly. \r\n\r\nTo this end the book has been restructured into 6 parts, removing the separate section on evolution as the distinction between development and evolution can be seen as artificial. New chapters have been added on: \r\n\r\nSocio-technical Systems A discussing the context of software in a broader system composed of other hardware and software, people, organisations, policies, procedures and laws. \r\n\r\nApplication System Architectures A to teach students the general structure of application systems such as transaction systems, information systems and embedded control systems. The chapter covers 6 common system architectures with an architectural overview and discussion of the characteristics of these types of system. \r\n\r\nIterative Software Development A looking at prototyping and adding new material on agile methods and extreme programming. \r\n\r\nComponent-based Software Engineering A introducing the notion of a component, component composition and component frameworks and covering design with reuse. Software Evolution A revising the presentation of the 6th edition to cover re-engineering and software change in a single chapter. \r\n\r\nThe book supports students taking undergraduate or graduate courses in software engineering, and software engineers in industry needing to update their knowledge', 2018, 'indonesia', 'Ian Sommerville', 'Ian Sommerville', 'sommerville.jpg'),
(2, 3, 'CorelDRAW', 'Kemampuan program Adobe Photoshop dalam mengolah file gambar berbasis bitmap mungkin belum ada tandingannya hingga kini. Sama halnya, kemampuan CorelDRAW dalam mengolah file gambar berbasis vektor juga masih menjadi juara hingga kini. Menggunakan dua program terbaik di bidangnya, hampir tidak ada pekerjaan desain cetak yang tidak bisa Anda kerjakan. Kedua program ini dapat digunakan bersamaan untuk menciptakan karya desain yang Anda inginkan. Pada buku ini akan dibahas cara pembuatan desain permainan kreatif untuk memberikan edukasi pada anak-anak. Akan dijelaskan mulai dari tujuan pembuatan, tools yang digunakan, hingga cara pembuatannya langkah demi langkah. Anda akan dipandu membuat: - Desain Ular Tangga - Wayang Kulit Vektor - Puzzle dengan Photoshop dan CorelDRAW - Teka-Teki Silang Unik - Permainan Pasang Gambar Hewan - Desain Mewarnai Gambar Kartun - Desain Mewarnai Gambar Hewan - Desain Mewarnai Gambar Pemandangan Laut', 2013, 'Indonesia', 'Elex Media Komputindo', 'Elex Media Komputindo', 'corel_draw.jpg'),
(3, 4, 'Cryptocurrency', 'Bitcoin merupakan terobosan baru penggunaan kriptografi dalam sistem pembayaran berbasis teknologi digital. Sebagai pionir dalam teknologi cryptocurrency, Bitcoin menawarkan sebuah sistem pembayaran yang tidak memerlukan bank sentral untuk mengatur sistem tersebut dan mengandalkan kalkulasi matematis dalam melakukan verifikasi atas transaksi yang dilakukan. Buku ini akan membantu Anda mengenal Bitcoin, dasar-dasar teknologi yang digunakan, cara mendapatkan dan menggunakan bitcoin. Buku ini juga mengulas beberapa jenis AltCoin, uang digital yang muncul setelah Bitcoin', 2016, 'Indonesia', 'Dimaz Ankaa Wijaya', 'Puspantara', 'bitcoin.jpg'),
(4, 5, 'Point of Sale dengan Ajax', 'Aplikasi POS banyak dibutuhkan oleh pelaku usaha. Laravel merupakan framework yang paling popular saat ini. Mempelajari keduanya sekaligus, yaitu membuat aplikasi POS dengan Laravel, tentu akan menjadi pembelajaran yang sangat menarik. Apalagi disertai dengan penggunaan AJAX yang dapat membuat aplikasi berbasis web terasa seperti aplikasi desktop. Itulah yang akan dibahas di dalam buku ini. Aplikasi POS yang dibuat ini memiliki fitur menarik seperti cetak barcode, cetak kartu member, pilihan cetak nota menggunakan PDF atau direct printing ke printer Dot Matrix, tampilan tabel dengan DataTable, serta desain menggunakan template AdminLTE. Pembahasan dimulai dari dasar-dasar penggunaan Laravel dilengkapi dengan trik Laravel untuk aplikasi POS, seperti ekspor dan impor file Excel, membuat file PDF, cetak barcode, direct printing ke printer Dot Matrix, pembuatan helper angka terbilang, dan sebagainya. Dibahas juga langkah demi langkah pembuatan operasi CRUD, dengan dan tanpa AJAX. Di bagian akhir dibahas langkah demi langkah membuat aplikasi POS dengan Laravel dan AJAX. Pembahasan selengkapnya mencakup: - Memahami berbagai fitur Laravel - Operasi CRUD pada Laravel, dengan dan tanpa AJAX - Trik-trik Laravel untuk aplikasi POS - Proses membuat aplikasi POS - Menerapkan template AdminLTE pada Laravel - Trik direct printing ke printer Dot Matrix pada aplikasi PHP', 2017, 'Indonesia', 'Rohi Abdullah', 'Elex Media Komputindo', 'ajax.jpg'),
(8, 6, 'Facebook Hacker', 'Bisa dibilang ini adalah buku terlarang! Karena perbuatan meng-hack atau membajak adalah perbuatan yang merugikan pihak lain. Namun diluar itu semua, yang perlu diketahui, ini adalah sebuah pengetahuan atau ilmu. Sungguh tidak ada ruginya mempelajari atau mengetahui sebuah wawasan baru. Dalam buku terbitan JAL PUBLISHING ini memberikan Anda penjelasan mengenai apa itu hacker, seperti apa proses hacking itu, juga tentang perantasan media sosial Facebook.\r\nSesungguhnya tidak ada senjata yang berbahaya. Pisau, pistol atau nuklir sekalipun hanyalah sesuatu yang biasa. Namun siapa yang menggunakannya itulah yang BERBAHAYA!\r\nSebab dia menentukan ingin menggunakannya seperti apa?', 2011, 'Indonesia', 'Arya Dipanegara', 'Lembar Langit Indonesia', 'hacking.jpg'),
(9, 5, 'Head First PHP & MySQL', 'If you\'re ready to create web pages more complex than those you can build with HTML and CSS, Head First PHP & MySQL is the ultimate learning guide to building dynamic, database-driven websites using PHP and MySQL. Packed with real-world examples, this book teaches you all the essentials of server-side programming, from the fundamentals of PHP and MySQL coding to advanced topics such as form validation, session IDs, cookies, database queries and joins, file I/O operations, content management, and more.', 2008, 'English', 'Lynn Beighley', 'O\'Reilly Media, Inc', 'php_mysql.jpg'),
(10, 1, 'Practical DevOps', 'Harness the power of DevOps to boost your skill set and make your IT organization perform betterAbout This Book\r\nGet to know the background of DevOps so you understand the collaboration between different aspects of an IT organization and a software developer\r\nImprove your organization\'s performance to ensure smooth production of software and services\r\nDeploy top-quality software and ensure software maintenance and release management with this practical guide', 2016, 'English', 'Joakim Verona', 'Packt Publishing Ltd', 'devos.jpg'),
(11, 6, 'Carding Pemula', 'Apakah Anda seseorang yang baru saja mengenal dunia maya? atau pemilik kartu kredit, admin situs, pebisnis yang mulai merambah dunia maya, atau seorang yang ingin tahu sisi lain dunia maya berkaitan dengan CyberCrime? Bila iya, buku ini dapat menjadi modal bagi Anda untuk lebih mengenal dunia maya. Carding merupakan suatu aksi menggunakan data pribadi orang lain seperti kartu kredit untuk bertransaksi secara online. Data yang digunakan biasanya merupakan data kartu kredit korban yang akan digunakan untuk membeli barang atau jasa yang pelaku inginkan. Pelaku inilah yang sering dikenal dengan sebutan carder. Buku ini mengupas berbagai hal mengenai carding mulai pengenalan siapa itu carder, bagaimana cara menjadi carder, contoh kasus carder yang tertangkap, dan lingkungan carder. Selain itu, pembaca juga akan mendapatkan pengetahuan tentang IRC Bot sebagai alat bantu carder dalam menjalankan aksinya hingga teknik-teknik yang dapat dipakai seorang carder untuk mendapatkan data penting milik orang lain. Teknik-teknik tersebut adalah SQL Injection dengan atau tanpa tools dan phising. Sepanjang perjalanan membaca buku ini, pengetahuan Anda tentang keamanan berselancar di internet pun akan ditambah karena buku ini juga membahas bagaimana carder dapat menyembunyikan IP address mereka. Tidak hanya itu, Anda akan ditunjukkan tools yang biasanya digunakan carder untuk melancarkan aksinya seperti Credit Card Validator, CVV Getter dan PayPal Login Checker. Di akhir buku ini Anda masih tetap akan mendapatkan tambahan pengetahuan agar dapat memperkecil kemungkinan diri Anda menjadi korban seorang carder, baik dari sisi pemilik kartu kredit maupun pemilik toko online. Mau ambil risiko lebih untuk menjadi korban carder? Jangan beli buku ini!', 2014, 'Indonesia', 'Aryya Dwisatya Widigdha', 'Elex Media Komputindo', 'carding.jpg'),
(12, 7, 'Excel Pemula', 'Mengapa harus kursus kalau bisa menguasai MS Excel 2010 hanya dengan mempelajari buku ini. \r\nDi dalam buku ini membahas fitur-fitur utama & penting MS Excel, seperti:\r\n\r\n- Workbook, Worksheet, Data, dan Sel\r\n\r\n- Fungsi dan Formula\r\n\r\n- Olah Teks, Tanggal, dan Angka\r\n\r\n- Buat dan Desain Tabel\r\n\r\n- Chart dan Modifikasi Chart', 2016, 'Indonesia', 'J.U.D', 'Jubilee Enterprise', 'excel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi`) VALUES
(1, 'Software Engineering', 'Rekayasa perangkat lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.'),
(2, 'Jaringan Komputer', 'Jaringan Komputer Untuk Mahasiswa'),
(3, 'Desain', 'Desain Grafis dan Gambar'),
(4, 'Bitcoin', 'Deskripsi tentang bitcoin dan lain lain'),
(5, 'Website Advanced', 'Jquery, Ajax, Javascript, PHP 5 dll'),
(6, 'Hacking', 'Dasar Hacking dan cara cara'),
(7, 'Kantor', 'Word, Excel, Powerpoint, dll');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `instansi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `instansi`) VALUES
(1, 'Fahmiko Purnama Putra', 'Malang City Hardcore', 'Polinema'),
(2, 'Irfak Hakiki', 'Malang', 'Polinema'),
(3, 'Hanavi Dwi', 'Pakisaji', 'Polinema'),
(4, 'M Nirwan Firdaus', 'Malang Raya', 'Polinema');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan` text NOT NULL,
  `status` enum('dipinjam','kembali') NOT NULL,
  `denda` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `id_member`, `id_buku`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `catatan`, `status`, `denda`) VALUES
(1, 4, 4, 1, '2018-05-08', '2018-05-10', 'Belajar Web Dinamis', 'dipinjam', 0),
(2, 1, 2, 1, '2018-05-08', '2018-05-16', 'Desain Logo ', 'dipinjam', 0),
(3, 1, 3, 1, '2018-05-08', '2018-05-15', 'Belajar mengelola Bitcoin', 'dipinjam', 0),
(4, 1, 9, 1, '2018-05-08', '2018-05-15', 'Belajar sql dasar', 'dipinjam', 0),
(5, 3, 12, 1, '2018-05-08', '2018-05-09', 'Buat uts excel', 'dipinjam', 0),
(6, 2, 10, 1, '2018-05-08', '2018-05-11', 'Pengembangan software', 'dipinjam', 0),
(7, 3, 8, 1, '2018-05-08', '2018-04-11', 'Belajar bobol facebook', 'dipinjam', 0),
(8, 2, 1, 1, '2018-05-08', '2018-02-13', 'Perancangan ERD', 'dipinjam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `akses`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `fk_member` (`id_member`),
  ADD KEY `fk_buku` (`id_buku`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `pinjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pinjaman_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
