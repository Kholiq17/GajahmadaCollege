-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 05:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gajahmada`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`) VALUES
(17, 'R6K5MVZfOvy23Sdh.jpg'),
(18, 'iFuLRNgbjvqWKts7.jpg'),
(19, 'snHf746jgSQVXxmb.jpg'),
(20, 'yJjSReKzlM1vFTaE.jpg'),
(21, 'p63YxfjM9KEwvQyC.jpg'),
(22, '2luQxCv7fEWj1ime.jpg'),
(23, '9uWMd7B25CypkjV0.jpg'),
(24, 'yz68YHlqspFkCBLv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `clean_url` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(9999) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `clean_url`, `judul`, `isi`, `tanggal`) VALUES
(7, 'Lorem-ipsum-dolor-sit-amet', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit. Erat pellentesque adipiscing commodo elit at imperdiet dui. Justo nec ultrices dui sapien eget. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Quis imperdiet massa tincidunt nunc pulvinar sapien et. Pharetra sit amet aliquam id. Morbi non arcu risus quis varius quam. Sit amet nulla facilisi morbi tempus iaculis urna id. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Mattis aliquam faucibus purus in massa tempor nec feugiat. Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Aliquet bibendum enim facilisis gravida neque convallis. Pellentesque massa placerat duis ultricies. Sit amet nisl purus in mollis. Imperdiet sed euismod nisi porta. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Sit amet massa vitae tortor condimentum lacinia quis.</p><p>Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Dui sapien eget mi proin. Netus et malesuada fames ac turpis egestas maecenas. Bibendum est ultricies integer quis auctor. Lectus sit amet est placerat in egestas erat. Amet consectetur adipiscing elit pellentesque. Molestie a iaculis at erat pellentesque adipiscing commodo elit at. Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Purus gravida quis blandit turpis cursus in hac. Etiam erat velit scelerisque in dictum non consectetur a. Id velit ut tortor pretium viverra suspendisse potenti nullam. Semper feugiat nibh sed pulvinar proin gravida. Sit amet purus gravida quis blandit turpis cursus. Accumsan tortor posuere ac ut consequat semper viverra. Risus quis varius quam quisque id diam. Ultrices dui sapien eget mi proin sed libero. Vitae tortor condimentum lacinia quis vel eros donec. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Diam maecenas sed enim ut sem. Purus viverra accumsan in nisl nisi scelerisque eu.</p><p>Porttitor lacus luctus accumsan tortor posuere ac. Ac placerat vestibulum lectus mauris. Porttitor rhoncus dolor purus non enim praesent. Nullam eget felis eget nunc lobortis mattis aliquam. Tincidunt eget nullam non nisi est. Risus in hendrerit gravida rutrum quisque non. Etiam tempor orci eu lobortis. Faucibus turpis in eu mi bibendum neque egestas. Purus gravida quis blandit turpis. Pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Mauris nunc congue nisi vitae suscipit tellus. Diam maecenas sed enim ut sem viverra aliquet eget sit. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Leo a diam sollicitudin tempor id. Feugiat vivamus at augue eget arcu dictum varius. Morbi tincidunt ornare massa eget egestas purus viverra.</p><p>Non blandit massa enim nec dui nunc mattis. Sed vulputate mi sit amet mauris commodo quis imperdiet. Eleifend mi in nulla posuere sollicitudin. Massa massa ultricies mi quis hendrerit. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Enim diam vulputate ut pharetra. Urna nunc id cursus metus. In arcu cursus euismod quis viverra nibh cras pulvinar mattis. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Leo vel fringilla est ullamcorper eget nulla facilisi etiam. Dui vivamus arcu felis bibendum ut tristique et. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Amet est placerat in egestas erat imperdiet sed euismod.</p><p>Diam in arcu cursus euismod. Ornare arcu odio ut sem nulla pharetra diam. Netus et malesuada fames ac turpis. Massa sapien faucibus et molestie ac feugiat sed lectus. Aliquam faucibus purus in massa tempor. Rutrum quisque non tellus orci ac auctor augue mauris. Dictum varius duis at consectetur lorem donec massa. Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Convallis convallis tellus id interdum. Suspendisse sed nisi <strong>lacus sed viverra tellus in.</strong></p>', '2019-11-21'),
(8, 'Lorem-Ipsum-Generator', 'Lorem Ipsum Generator', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas pretium aenean pharetra magna. Id cursus metus aliquam eleifend. Pharetra pharetra massa massa ultricies mi quis hendrerit. Auctor elit sed vulputate mi sit amet mauris commodo quis. <strong>Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis</strong>. Sagittis eu volutpat odio facilisis mauris sit amet. Amet risus nullam eget felis. Dictum non consectetur a erat nam. Id diam maecenas ultricies mi eget mauris pharetra et.</p><p>Congue quisque egestas diam in arcu. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Tempus egestas sed sed risus pretium quam vulputate dignissim. In nisl nisi scelerisque eu ultrices vitae auctor eu. Leo a diam sollicitudin tempor. Adipiscing at in tellus integer feugiat scelerisque varius morbi enim. At tellus at urna condimentum mattis. Tortor at auctor urna nunc id cursus metus. Adipiscing tristique risus nec feugiat in fermentum posuere urna. Dui id ornare arcu odio ut sem nulla. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Suscipit tellus mauris a diam maecenas sed enim ut. Non curabitur gravida arcu ac tortor dignissim.</p><p>Curabitur vitae nunc sed velit dignissim sodales ut. Pellentesque eu tincidunt tortor aliquam. Donec massa sapien faucibus et molestie ac. Et magnis dis parturient montes nascetur ridiculus. Dapibus ultrices in iaculis nunc sed augue lacus viverra. Dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Quis viverra nibh cras pulvinar mattis. Nibh sit amet commodo nulla facilisi nullam vehicula. Ut pharetra sit amet aliquam id diam maecenas ultricies. Ultricies leo integer malesuada nunc vel risus commodo viverra maecenas. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra. Aliquet sagittis id consectetur purus ut faucibus pulvinar elementum. Elementum curabitur vitae nunc sed velit dignissim sodales ut eu. Velit egestas dui id ornare arcu odio ut sem nulla. In egestas erat imperdiet sed euismod. Aliquam ut porttitor leo a diam sollicitudin. Libero enim sed faucibus turpis in eu mi bibendum. Enim nulla aliquet porttitor lacus luctus accumsan tortor. Felis donec et odio pellentesque diam.</p><p>Cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque. Ut tellus elementum sagittis vitae et. Lectus proin nibh nisl condimentum. Viverra tellus in hac habitasse platea dictumst vestibulum. Feugiat nisl pretium fusce id velit ut tortor pretium viverra. Volutpat consequat mauris nunc congue nisi vitae. Erat pellentesque adipiscing commodo elit. Nunc sed augue lacus viverra vitae congue eu consequat ac. Arcu cursus euismod quis viverra. Varius vel pharetra vel turpis nunc eget lorem dolor. Felis donec et odio pellentesque. Tincidunt dui ut ornare lectus sit amet est placerat in. Pellentesque nec nam aliquam sem et tortor consequat id porta. Facilisi etiam dignissim diam quis enim lobortis. Enim lobortis scelerisque fermentum dui. Risus pretium quam vulputate dignissim suspendisse in. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Iaculis nunc sed augue lacus viverra. A arcu cursus vitae congue mauris rhoncus aenean.</p>', '2019-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `counter` text NOT NULL,
  `browser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(0, '2019-12-06', '127.0.0.1', '1', 'Chrome/Opera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`ip_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
