-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 10:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unieat`
--

-- --------------------------------------------------------

--
-- Table structure for table `baksosumo`
--

CREATE TABLE `baksosumo` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baksosumo`
--

INSERT INTO `baksosumo` (`id`, `picture`, `nama`, `deskripsi`, `price`) VALUES
(1, 'bakso-sumo.jpeg', 'Bakso Sumo', 'Bakso berisi, kuat seperti pesumo', 20000),
(2, 'bakso-tumpeng.jpg', 'Bakso Tumpeng', 'Bakso lezat berbentuk tumpeng', 20000),
(3, 'bakso-keju.webp', 'Bakso Keju', 'Bakso daging, di balut keju. Lumer dimulut, luluh di hati.', 25000),
(4, 'bakso-mercon.webp', 'Bakso Mercon', 'Jika tidak kuat pedas, disarankan membeli Bakso Keju', 25000),
(5, 'bakso-bakar.webp', 'Bakso Bakar', 'Bakso bakar pilihan dibalut dengan bara api terpilih', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `escobaraisse`
--

CREATE TABLE `escobaraisse` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escobaraisse`
--

INSERT INTO `escobaraisse` (`id`, `picture`, `nama`, `deskripsi`, `price`) VALUES
(1, 'croffle.webp', 'Croffle', 'Lembut, garing, seperti lawakan ayah', 10000),
(2, 'eclair.webp', 'Eclair', 'Manis, lembut, seperti belaian sang kasih', 8000),
(3, 'kue-lobak.webp', 'Kue Lobak', 'Chewy, dibalut dengan lobak pilihan', 5000),
(4, 'sandwich.webp', 'Sandwich', 'Kini, sandwich lebih gurih dan dagingnya lebih berasa', 15000),
(7, 'matcha.webp', 'Matcha', 'Minuman berbahan dasar bubuk teh matcha hijau (dikenal berasal dari Jepang) yang dikombinasikan dengan susu cair yang sudah dipanaskan dan dibuihkan.', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `foiegras`
--

CREATE TABLE `foiegras` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foiegras`
--

INSERT INTO `foiegras` (`id`, `picture`, `nama`, `deskripsi`, `price`) VALUES
(1, 'foie-gras.png', 'Foie Gras', 'Dari angsa pilihan, terasa hingga relung sukma', 30000),
(2, 'ratatouille.jpg', 'Ratatouille', 'Menggunakan sayuran pilihan dari perancis', 40000),
(3, 'coq au vin.webp', 'Coq Au Vin', 'Bumbunya begitu terasa hingga relung batin', 30000),
(4, 'confit de canard.jpg', 'Confit de Canard', 'Gurih, lembut seperti belaian sang kasih', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `maninjaucafe`
--

CREATE TABLE `maninjaucafe` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maninjaucafe`
--

INSERT INTO `maninjaucafe` (`id`, `picture`, `nama`, `deskripsi`, `price`) VALUES
(1, 'rendang.jpg', 'Rendang', 'Dibuat dengan daging pilihan', 20000),
(2, 'ayam-bakar.jpg', 'Ayam Bakar', 'Dibuat dengan ayam pilihan, bukan ayam tiren :0', 15000),
(3, 'ayam-gulai.jpg', 'Ayam Gulai', 'Gulainya gurih, menusuk relung sukma', 15000),
(4, 'ayam-pop.jpg', 'Ayam Pop', 'Seperti namanya, pop pop dimulut', 15000),
(5, 'ikan-bakar.jpg', 'Ikan Bakar', 'Dibakar dengan ikan pilihan', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `meenum`
--

CREATE TABLE `meenum` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meenum`
--

INSERT INTO `meenum` (`id`, `picture`, `nama`, `deskripsi`, `price`) VALUES
(2, 'bubble-brown-sugar-fresh-milk.webp', 'Bubble Brown Sugar Fresh Milk', 'Boba pilihan', 15000),
(3, 'premium-chocolate-bubble-brown-sugar.webp', 'Premium Chocolate Bubble Brown Sugar', 'Boba pilihan', 15000),
(5, 'ice-thai-tea-medium.webp', 'Ice Thai Tea Medium', 'Boba pilihan', 7000),
(6, 'bubble-brown-sugar-milk-tea.webp', 'Bubble Brown Sugar Milk Tea', 'Boba pilihan', 20000),
(7, 'strawberry-fresh-milk-puding-leci.webp', 'Strawberry Fresh Milk Puding Leci', 'Boba pilihan', 25000),
(8, 'cheesy-fresh-milk-puding-coklat.webp', 'Cheesy Fresh Milk Puding Coklat', 'Boba pilihan', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `sajian`
--

CREATE TABLE `sajian` (
  `id` int(11) NOT NULL,
  `list` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sajian`
--

INSERT INTO `sajian` (`id`, `list`) VALUES
(1, 'Foods'),
(2, 'Drinks'),
(3, 'Snacks'),
(13, 'Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `tenant` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `picture`, `tenant`, `deskripsi`, `category`) VALUES
(1, 'baksosumo.png', 'Bakso Sumo', 'Bakso enak seantero jagat raya, rasanya seperti dipukul pesumo', 'Foods'),
(2, 'escobaraisse.webp', 'Escobaraisse', 'Escobaraisse! lebih berbahaya dari Pablo Escobar. Sekali coba, mungkin anda akan terbawa ke awang-awang.', 'Snacks'),
(3, 'foiegras.jpg', 'Foie Gras', 'De france. Makanan khas prancis yang memanjakan lidah anda di setiap rasanya.', 'Foods'),
(5, 'maninjaucafe.jpg', 'Maninjau Cafe', 'Belom kekinian, kalo lo belom makan nasi padang kekinian. #Maninjau_Cafe', 'Foods'),
(6, 'meenum.jpg', 'MeeNum', 'Minuman kekinian enak gak pake mahal', 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile`, `email`, `username`, `phoneNumber`, `password`, `roles`) VALUES
(7, 'admin.jpg', 'stevenforsythia@gmail.com', 'S. Admin', '0881025599917', '$2y$10$CgqIfv1S6KPGVEal.saQUOTIzTvHs/L4Sw2haipDdohlK/BiUlCy6', 'admin'),
(12, 'tenant.jpg', 'bakso@sumo.id', 'Bakso Sumo', '085050101012', '$2y$10$mEvNnfaSvw1Jd3BhkDqV8.EFYoOV/TrzGkc8/OSoiJ./gFhofizEe', 'tenant'),
(13, 'customer.jpg', 'cliff@co.id', 'Cliff', '08123456789', '$2y$10$qexwyLWRVcvIt6ncBl4qJefu0SbR/rZG5svm9ItP1NGvYADqaSrxG', 'customer'),
(14, 'customer.jpg', 'kaelakovalskia@gmail.com', 'Kaela', '08987654321', '$2y$10$mclvGXmxzD1nNfKX69eIpeAk.yebGT0Ji2h6RFbC/ah6d4csH4DP.', 'customer'),
(15, 'customer.jpg', 'bjorkanism@mail.id', 'Bjorka', '08123987456', '$2y$10$cDzKaFypzLjG2.MTqYnp/eAZ.vjGgd5Hv9q8xvzhb2ZbX0HZU61hu', 'customer'),
(16, 'customer.jpg', 'Ikhwan@ky.id', 'Ikhwan', '089080706050', '$2y$10$Rm4tfYfJWP8pSxduhaOTIumK9FpiBG162wPODq1dNDbkqGaafthK2', 'customer'),
(17, 'customer.jpg', 'historia@gmail.com', 'Historia', '089897969594', '$2y$10$X1SZlvM/PKBP2M3Z/5j4PelAN/fjbikaB.NaFm8aaB4vk2t/1Qpw2', 'customer'),
(18, 'tenant.jpg', 'escobaraisse@bara.id', 'Escobaraisse', '081122334455', '$2y$10$5g.tiYdP/.VA056.gOmGw.Zi/nu/4ctVWIEBcNONtTjEGA7AMLEne', 'tenant'),
(19, 'tenant.jpg', 'foie@gras.id', 'Foie Gras', '081213141516', '$2y$10$iFzhDUOlfa/YQqkJyxb78u23KzZ3xitLjlhmec54WqqWm6okf1k4G', 'tenant'),
(20, 'admin.jpg', 'arsythia@gmail.com', 'Arsythia', '089181716151', '$2y$10$4TwbV5Q13x.SAEiHh3Sl2u.RNi3rsCpcA.pFkcZN2exFJya4HpEyu', 'admin'),
(21, 'tenant.jpg', 'maninjau@cafe.id', 'Maninjau Cafe', '08123789234', '$2y$10$zn8ZRQByGam0gjINVrf3fOMn81cP1csnfQJ.VmQIJVCiI.yNKspqy', 'tenant'),
(22, 'tenant.jpg', 'meenum@me.id', 'MeeNum', '0876540123461', '$2y$10$IPHf9bpPRraY23KlazSStu1.X3NwZwzFp6Yk2DJYE5qvc5LwYi9Da', 'tenant'),
(28, 'admin.jpg', 'torotoro@co.id', 'Totoro', '+62123098456', '$2y$10$u5GZFjkwS/mPeRypzq1hC.NHqqI5tLMr/UrfICmRxmZt71LptlZSK', 'admin'),
(35, 'customer.jpg', 'azka@gmail.id', 'Azkaa', '08987651245', '$2y$10$3.z06Ba5Cjxfii.iZu1e9emIF0cuEGyEPpL.E1GKVI9diWlsZEZT6', 'customer'),
(36, 'customer.jpg', 'hendri@gmail.com', 'Hendri', '08123049241', '$2y$10$TiRLP0/gOPatH9QV.lcDIO7Dxe/eQNdwyQy5WAidZgjtRGzYDM44i', 'customer'),
(37, 'customer.jpg', 'arya@gmail.com', 'Aryaa', '0881025599999', '$2y$10$VoupE4j22Z6tHCQDKk0vbOGtAkHnX5y6qbcQCHGWmMWuZns6oUIIO', 'customer'),
(38, 'customer.jpg', 'reii@gmail.com', 'Reyyy', '081241412345', '$2y$10$.qBJ3lbxyP4tplDMUiK7Re6Y4hVne5ZAmP9Ft0uKXbzhy07OShLfm', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baksosumo`
--
ALTER TABLE `baksosumo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escobaraisse`
--
ALTER TABLE `escobaraisse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foiegras`
--
ALTER TABLE `foiegras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maninjaucafe`
--
ALTER TABLE `maninjaucafe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meenum`
--
ALTER TABLE `meenum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sajian`
--
ALTER TABLE `sajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baksosumo`
--
ALTER TABLE `baksosumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `escobaraisse`
--
ALTER TABLE `escobaraisse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foiegras`
--
ALTER TABLE `foiegras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maninjaucafe`
--
ALTER TABLE `maninjaucafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meenum`
--
ALTER TABLE `meenum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sajian`
--
ALTER TABLE `sajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
