-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 05:57 AM
-- Server version: 10.6.8-MariaDB-1
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E-Commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'Youssef Mohamed', 'wRx5bZll+J8=', 'tBeUZHgm1hJotBnavicoz78cNnhdmSP4', '$2y$10$A/YfhjOViOoAZ4wksGaxI.4i01mgNgTWAKTlR0A9ETXw0EnIAvVaO', '01234567890');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 17),
(3, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`) VALUES
(1, 'Egypt'),
(2, 'Saudi Arabia'),
(3, 'USA'),
(4, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'Mohamed Hashem', 'mohamed', 'justformobile4747@gmail.com', '$2y$10$XcyLVw3Xp3cZ4AD8EQHSiOuzP9oWi8rg5DcPbqrlp5/Z6Md7TWXoS', '01234567890'),
(2, 'Asmaa Hosney', 'asmaa', 'justformobile4747@gmail.com', '$2y$10$lU6wrb5OdI.Vls6lkqR0RuCRSeW.XthcQq.X6PxVzmTeSx./87LgS', '01234567890'),
(3, 'testFullName', 'testUserName', 'testEmail@gmail.com', '$2y$10$wGuEc5rTaHX/gBX5/HDIROE20VtajLJyn7gRd.m086sYjAmGMBeju', '01066970621'),
(4, 'Yousseff Baset', 'gggg', 'lenoza@afia.pro', '$2y$10$is5yvDmkl7e6ctmCCe8okOVvCwardlwEO3EWSR.Tgk3fwl.KBN7Xy', '+441066970621'),
(5, 'vcvvcxv xcvc v cxvxc', 'joe', 'lenoza@afia.pro', '$2y$10$A/YfhjOViOoAZ4wksGaxI.4i01mgNgTWAKTlR0A9ETXw0EnIAvVaO', '+441066970621'),
(6, 'Yousseff Baset', 'Yousseff', 'testEmail@gmail.com', '$2y$10$mlg8X/bQGF09o8Ddc4bRNedz1ebIh9uAAceelPHpOVeKZJ0DFunBG', '+2222222222222'),
(7, 'testForNow With my Team', 'Meow', 'test@testMyEmail.com', '$2y$10$tbXDQqngkRY4o.3mLLAcQ.4Yn7D0RsnRw69bSQPd5uq8hk731TU9.', '+1111111111111111111'),
(8, 'tttttttt', 'ddd', 'lenoza@afia.pro', '$2y$10$UZJDVKOXO4nVntjJCRC/X.z2kofLZgVr1GHZ2AG66ILpdabFJ3Lfi', '+111111'),
(9, 'testName testLast', 'topG', 'topGtopG@gmail.com', '$2y$10$FthHPl.Bjp2v9h9JuaMfg.MBuAQNtYDwPfl76oIVBe4U5iN8c9kSG', '123123123'),
(10, 'testName testLast', 'topYousseff', 'topG@tutuapp.bid', '$2y$10$mR26GUOET2Ny6Vo2R6bpx.VtKhxVPuM0u8nHyJM0/l63UTv2cT6FW', '4842989259'),
(11, 'testName testLast', 'cus', 'qadafoki@tutuapp.bid', '$2y$10$ZVEGl5wCoe7B2hCqfPOf/.x70PaviLgyo3Z3Hhx9CZjKPfdgwd7u6', '4842989259'),
(12, 'testName testLast', 'cust', 'qadafoki@tutuapp.bid', '$2y$10$CFvU0bnpku784ZH7p0VQxuR6f0KwteeLHHPYU3lnHCq.UfrmX2LlC', '4842989259'),
(13, 'WW91c3NlZmYgQmFzZXQ=', 'd3d3', 'am92dXh1a29AbHlmdC5saXZl', '$2y$10$X1KpVRnDC2IssMuuG18yd.af5CtJzxLNumVP/1iH9pVzUtfR8Upvy', '01066970621'),
(14, 'WW91c3NlZmYgQmFzZXQ=', 'YmJi', 'am92dXh1a29AbHlmdC5saXZl', '$2y$10$IISfCaHo4fMOeTNSWysd1OkGZTjTE8lOf6srrk/V6O9OBxuKoD6NO', '01066970621'),
(15, 'HthPzBfThBf5CFpR+g1t2A==', 'gx6S5s2RIho=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$LTqlfp0qWjXu1T15xrsRn.lhQG0IhBu78h9wTqPOskAJ.rIV39thy', '01066970621'),
(16, 'HthPzBfThBf5CFpR+g1t2A==', 'QcJCgtMojmI=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$G23WTfQS0M6CtEfVvb3quuJ7F9uBbAHPtj.9ywBER046heRUT1FZW', '01066970621'),
(17, 'HthPzBfThBf5CFpR+g1t2A==', 'vDTpGEHYmJg=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$hEzOSb/y.m2VYWSAQIli6.h28yrtwagc8UMrBAaXCh6O8t2ODnRDu', '01066970621'),
(28, 'HthPzBfThBf5CFpR+g1t2A==', '4DHORmSewXs=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$LOwX6h0TT8mIT4tH3XxnGer2gxFjbtBH8l7Rlkfdfof0l9mrIWiTK', '01066970621'),
(29, 'HthPzBfThBf5CFpR+g1t2A==', 'fIOVVQuy1TuQrpQYuutPgg==', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$zCOUkZ/bfB..RSj9n5AD2uOjvS0ahRhFgrk0ftMD69xbn.lsFSm.u', '01066970621'),
(30, 'HthPzBfThBf5CFpR+g1t2A==', 'N7rS01LaZd5zkgFM0nC6rg==', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$mnqnA768.zcjRQnYEXny2.2Vtu9WCFdvvL79PrNRuLBihjxm5.iw6', '01066970621'),
(31, 'gtS4893ZlPYrWZfOdy+RcZsajr0CVtVT', 'N7rS01LaZd7FgzAIxfdIrQ==', 'kfwCfd5Iu51UKKhMEuog+uYkMBhK/OmC', '$2y$10$fQpLwSydRXF/Viqo9uf3nuZ0Qdzg1thc9UmyxjlJ9gskyRY.nU85G', '4842989259'),
(32, 'HthPzBfThBf5CFpR+g1t2A==', 'TqBybX8Yr1ImHjYRPT7uiQ==', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$KUzacLT7Ajdii21ihdcun../KkYBBz0pczsomFVFUMyQSkvXfW/HG', '01066970621'),
(33, '8Lf9OzeGheo=', '40ZDDXNNFZk=', 'TqBybX8Yr1JGEGLIRRMqNKoNczr/XUquOHAWszDFSBE=', '$2y$10$NHP0.g7GKQTXUXzUi0mEWuKum6GOZCRAdX7shMEzyKHDfGPuQtkX.', '01066970621'),
(34, 'FgZ9XoGnthM=', '9ezR4vpnxr8=', 'GMHWx6Q6RKl+BHys5xqulkBZfmjSRoX9', '$2y$10$GqmMeXVp5QQ/XtfmhdKDAuhehM3bEhGq5vh4zhnFkPlvAG36if2SK', '01066970621'),
(37, 'HthPzBfThBf5CFpR+g1t2A==', '1lxIym2RQ/Y=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$DUHQPR.ze65VUjibMGP6A.zMDZTol06oqUjNPyJS4nUbOAFARnX8e', '01066970621'),
(38, 'FgZ9XoGnthM=', 'geUr4X7hY1E=', 'GMHWx6Q6RKl+BHys5xqulkBZfmjSRoX9', '$2y$10$IvcmL7o4iXPZ3vnkqWOqMe48W.VClz3lxlFPVi4mJlMFQq7N8XlpO', '01066970621'),
(39, 'zGcwRB7xKqxzkgFM0nC6rg==', 'pw+TBBxkYiY=', 'GrQV/jTyGTcFs3AVMzQeiAotE6vWwrsX', '$2y$10$vrnxcXXGN1JMcPMVoKyDAeqA2TimrrYyLCvKrqajHHrX4ku7vWHam', '2142343243'),
(40, 'wIdNfQZA8sgz9BvZl3k2hA==', 'N7rS01LaZd6BVszcChubpw==', '2PG8hDajRxGWbJ++PRpg58YKng3xjcK4', '$2y$10$OvGABIieTgTyhZzmo4h1AOXAwZq5zd1gTmP0UgpioeVXfaO26.VTy', '4324234'),
(41, 'jAP/uNmxEPNzkgFM0nC6rg==', 'poY+iaNxkKQ=', 'a5OAy18izjKdbkkqZjR+DnOSAUzScLqu', '$2y$10$iSkXMfo1pjchWGAht6GWm.mnfEqvMjZTua5ST6Mx2Lh2NsUI27eA2', '123'),
(42, 'YXVi8yKcWFo=', 'qXWj4bbEDkdAn8A4P8U4Iw==', 'fXoDwwQCuSMynxBe5I/uXThwFrMwxUgR', '$2y$10$F71g/Yt17aPsrtVD/eFKnuMgxC7Mrqn0yotQ23BP3doqt9uoXh4Im', '2132434'),
(43, 'W50mcGUaPTw=', 'emAonLFPx0I=', 'EOE4jBkHJHdpERUpjHRfiLCe1846dGWb', '$2y$10$hUct7gVmQg9gdCsCmJOzSOAm8vd24Rn80iOGvgcgf4vEy5g9HcDZi', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `area_name` varchar(255) DEFAULT NULL,
  `street_name` varchar(255) DEFAULT NULL,
  `bulding_number` int(11) DEFAULT NULL,
  `floor_number` int(11) DEFAULT NULL,
  `apartment_number` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `card_date` varchar(255) DEFAULT NULL,
  `card_cvc` varchar(255) DEFAULT NULL,
  `card_holder` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `area_name`, `street_name`, `bulding_number`, `floor_number`, `apartment_number`, `order_date`, `customer_id`, `product_id`, `seller_id`, `card_number`, `card_date`, `card_cvc`, `card_holder`) VALUES
(1, 'Test Name', 'Test Name', 10, 4, 4, '2023-05-09 18:45:00', 1, 1, 1, '012345678901234', '09/27', '123', 'Dina'),
(2, 'Test Name', 'Test Name', 10, 4, 4, '2023-05-09 22:50:00', 1, 17, 2, '012345678901234', '09/27', '123', 'Mohamed'),
(3, 'Test Name', 'Test Name', 3, 1, 1, '2023-05-12 06:45:00', 2, 7, 1, '012345678901234', '10/26', '123', 'Asmaa');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image_url`, `name`, `description`, `price`, `seller_id`, `country_id`) VALUES
(1, '../uploads/pexels-photo.jpg', 'A pair of shoes', 'A blue pair of shoes. A blue pair of shoes. A blue pair of shoes. A blue pair of shoes.', '49', 1, 1),
(2, '../uploads/pexels-photo.jpg', 'A pair of shoes', 'A blue pair of shoes. A blue pair of shoes. A blue pair of shoes. A blue pair of shoes.', '49', 1, 2),
(3, '../uploads/pexels-photo.jpg', 'A pair of shoes', 'A blue pair of shoes. A blue pair of shoes. A blue pair of shoes. A blue pair of shoes.', '49', 1, 3),
(4, '../uploads/pexels-photo.jpg', 'A pair of shoes', 'A blue pair of shoes. A blue pair of shoes. A blue pair of shoes. A blue pair of shoes.', '49', 1, 4),
(5, '../uploads/pexels-photo-2562992.jpeg', 'A pair of shoes', 'A brown pair of shoes. A brown pair of shoes. A brown pair of shoes. A brown pair of shoes.', '39', 1, 1),
(6, '../uploads/pexels-photo-2562992.jpeg', 'A pair of shoes', 'A brown pair of shoes. A brown pair of shoes. A brown pair of shoes. A brown pair of shoes.', '39', 1, 2),
(7, '../uploads/pexels-jess-bailey-designs-850359.jpg', 'A pink flower', 'A pink flower. A pink flower. A pink flower. A pink flower. A pink flower. A pink flower.', '9', 1, 1),
(8, '../uploads/pexels-jess-bailey-designs-850359.jpg', 'A pink flower', 'A pink flower. A pink flower. A pink flower. A pink flower. A pink flower. A pink flower.', '9', 1, 2),
(9, '../uploads/pexels-jess-bailey-designs-850359.jpg', 'A pink flower', 'A pink flower. A pink flower. A pink flower. A pink flower. A pink flower. A pink flower.', '9', 1, 3),
(10, '../uploads/pexels-jess-bailey-designs-850359.jpg', 'A pink flower', 'A pink flower. A pink flower. A pink flower. A pink flower. A pink flower. A pink flower.', '9', 1, 4),
(11, '../uploads/pexels-photo-170811.jpeg', 'A BMW Car', 'A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car.', '9999', 1, 3),
(12, '../uploads/pexels-photo-170811.jpeg', 'A BMW Car', 'A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car. A blue BMW car.', '9999', 1, 4),
(13, '../uploads/pexels-photo-1402787.jpeg', 'A black car', 'A black car. A black car. A black car. A black car. A black car. A black car. A black car. A black car.', '19000', 1, 1),
(14, '../uploads/pexels-photo-1402787.jpeg', 'A black car', 'A black car. A black car. A black car. A black car. A black car. A black car. A black car. A black car.', '19000', 1, 2),
(15, '../uploads/pexels-photo-1402787.jpeg', 'A black car', 'A black car. A black car. A black car. A black car. A black car. A black car. A black car. A black car.', '19000', 1, 3),
(16, '../uploads/pexels-photo-1402787.jpeg', 'A black car', 'A black car. A black car. A black car. A black car. A black car. A black car. A black car. A black car.', '19000', 1, 4),
(17, '../uploads/pexels-photo-100650.jpeg', 'A BMW Car', 'A white BMW car. A white BMW car. A white BMW car. A white BMW car. A white BMW car. A white BMW car.', '12000', 2, 1),
(18, '../uploads/pexels-photo-100650.jpeg', 'A BMW Car', 'A white BMW car. A white BMW car. A white BMW car. A white BMW car. A white BMW car. A white BMW car.', '12000', 2, 4),
(19, '../uploads/pexels-photo-457418.jpeg', 'A Car', 'A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car.', '7000', 2, 2),
(20, '../uploads/pexels-photo-457418.jpeg', 'A Car', 'A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car.', '7000', 2, 3),
(21, '../uploads/pexels-photo-457418.jpeg', 'A Car', 'A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car. A yellow car.', '7000', 2, 4),
(22, '../uploads/pexels-photo-5413301.jpeg', 'A pair of shoes', 'A pair of green shoes. A pair of green shoes. A pair of green shoes. A pair of green shoes.', '44', 2, 1),
(23, '../uploads/pexels-photo-5413301.jpeg', 'A pair of shoes', 'A pair of green shoes. A pair of green shoes. A pair of green shoes. A pair of green shoes.', '44', 2, 2),
(24, '../uploads/pexels-photo-5413301.jpeg', 'A pair of shoes', 'A pair of green shoes. A pair of green shoes. A pair of green shoes. A pair of green shoes.', '44', 2, 3),
(25, '../uploads/pexels-photo-5413301.jpeg', 'A pair of shoes', 'A pair of green shoes. A pair of green shoes. A pair of green shoes. A pair of green shoes.', '44', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'Tahany', 'Tahany', 'justformobile4747@gmail.com', '$2y$10$h0Lc1AIWxc6QRIMw1sKVSeZoHX2f8d2Ogxz4dh/TpkAtuoaPkwB1.', '01234567890'),
(2, 'Reham', 'Reham', 'justformobile4747@gmail.com', '$2y$10$mJN.KXLcW24NU.FczZhCsOipx/we8mBze0zp0Ens0mWoPdqzQQUR.', '01234567890'),
(3, 'testFullName', 'testUserName', 'testEmail@gmail.com', '$2y$10$w.ZmWj0ia.4LhZIUDnFMSuPAnrw2ZMnFaB7yxgKevPVzeS//5h4f.', '+441066970621'),
(4, 'Yousseff Baset', 'gggg', 'lenoza@afia.pro', '$2y$10$nqo5xfNwM6n4f27MKQkZ3uTkO/GYQHgv7k/yyF0ori9UFdfZZfGyK', '+441066970621'),
(6, 'testFullName', 'ssss', 'lenoza@afia.pro', '$2y$10$mHXS1k4G7xn5YFTYkuOasuUSiS.aageyehGLrmZ/V5ngY00jM0.Ai', '+441066970621'),
(7, 'sdfsdfdfssdf', 'aaa', 'lenoza@afia.pro', '$2y$10$ayK1eZ8jBQyw8tjhTm9bjOTTemqllw./7wbgSFBX0ukYRsP/IHsza', '+441066970621'),
(8, 'Yousseff Baset', 'Yousseff', 'testEmail@gmail.com', '$2y$10$sbIWPjZkSUWu0kAHKuqp0ecvK1h59ntCE9Jv7qJz40w55thjcW8Xq', '+441066970621'),
(10, 'aaaaaaaaaaaa', 'qqq', 'aaaa@aljd.com', '$2y$10$OSJpWSeDW6wcG8CWMeJBqe5xtKzkj6PCuvRYOYtI/ZCvQ9zmU4RNK', '+441066970621'),
(11, 'Yousseff Baset', 'ttt', 'lenoza@afia.pro', '$2y$10$pLIYeB2YCBIZQmEllkODW.JIvGi2IEPNZne9VMNqr36cU/9o9t9/K', '+111111'),
(12, 'testName testLast', 'topSeller', 'topSeller@tutuapp.bid', '$2y$10$YuNdXQ/MqceyVH5vTDsIvOFq.L1BN3YhPCyJucKAHqjhrTthYpsjy', '4842989259'),
(13, 'Yousseff Baset', 'se', 'jovuxuko@lyft.live', '$2y$10$IKKbh9Y5M4jHeUFgND2Qyu7FzNZ5pH3talmnQ1o61jGv5QtOLZIjW', '01066970621'),
(14, '8Lf9OzeGheo=', 'layceshJz+o=', 'TqBybX8Yr1JGEGLIRRMqNKoNczr/XUquOHAWszDFSBE=', '$2y$10$.sGZrX4O0FC/qqqZN7GItOzh4CTiyFWi8RMxMvNF7Wtq0UUe.mV2m', '01066970621'),
(15, 'HthPzBfThBf5CFpR+g1t2A==', 'vDTpGEHYmJg=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$f2035FqX1uP2fupDKd3oieF.Kt.roaDkNHkH63jXFJMXEq8Bvvz6O', '01066970621'),
(16, 'HthPzBfThBf5CFpR+g1t2A==', '3B5KKfW/YOs=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$LcIsLjyaG9UBW8CZPfO.HeqML7BplPW72eiXwrvlg/wNVtAgUdaUK', '01066970621'),
(17, 'HthPzBfThBf5CFpR+g1t2A==', 'mEB3bLi7PfM=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$UxXkkMG4VbPyBxWe/d/0aeIerEr5IIZOyPeasm2wGUY1nc/eOXHz.', '01066970621'),
(18, 'HthPzBfThBf5CFpR+g1t2A==', 'wRx5bZll+J8=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$5wYmuFs8puQbk5nu0p8M8e0AZ/ngSA/i4f4LskDAX7Mj9KoZThA.q', '01066970621'),
(19, 'zGcwRB7xKqwoUjpZFMBSpw==', 'xyS59RJaLLA=', 'c/d2u2f3fjtEvuCtZbcbDnOSAUzScLqu', '$2y$10$llHTOOLLCSyeKo9neDlpmODKVuSa5gClMF0CMzomeAwcIgEwhowPK', '324234324'),
(20, 'x6fAACj8I5RzkgFM0nC6rg==', 'LnDddrU4+J5bKSPa8rmcxNi7q7LF47Jx', 'MghDmkYB0EdQlWyoklHJjwvw6nKjQn7k', '$2y$10$HUWLjM50y5KtfnrhqhckLe/uS2dwrCevMdauH0sKQU8bO66JKjKNm', '7777777777777777777777');

-- --------------------------------------------------------

--
-- Table structure for table `seller_requests`
--

CREATE TABLE `seller_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_requests`
--

INSERT INTO `seller_requests` (`id`, `name`, `description`, `price`, `image_path`) VALUES
(51, 'testName', 'fjdklsfjd flkjdslfk lkdsf lkdsfjldsk fjlkdf lsdfl kjsdlfksdjflkj df dsjkld fl', '213', '../uploads/sssssssss.jpeg'),
(52, 'Yousseff', 'fjdklsfjd flkjdslfk lkdsf lkdsfjldsk fjlkdf lsdfl kjsdlfksdjflkj df dsjkld fl', '122', '../uploads/image2.png'),
(53, 'Yousseff', 'fjdklsfjd flkjdslfk lkdsf lkdsfjldsk fjlkdf lsdfl kjsdlfksdjflkj df dsjkld fl', '122', '../uploads/tree.jpeg'),
(55, 'Yousseff', 'fjdklsfjd flkjdslfk lkdsf lkdsfjldsk fjlkdf lsdfl kjsdlfksdjflkj df dsjkld fl', '122', '../uploads/85f6d5c01963c8cef31884ce7d29a43746ed24df025aa533eceb0cda6220f027'),
(56, 'Yousseff Baset', 'erwdfwr', '213', '../uploads/threads_Java.png'),
(57, 'Yousseff Baset', 'erwdfwr', '213', '../uploads/CORS_Misconfiguration.png'),
(58, 'Yousseff Baset', 'erwdfwr', '213', '../uploads/tree.jpeg'),
(59, 'Yousseff Baset', 'erwdfwr', '213', '../uploads/image2.png');

-- --------------------------------------------------------

--
-- Table structure for table `viewers`
--

CREATE TABLE `viewers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewers`
--

INSERT INTO `viewers` (`id`, `fullname`, `username`, `email`, `password`, `phonenumber`) VALUES
(4, 'HthPzBfThBf5CFpR+g1t2A==', 'vDTpGEHYmJg=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$PhLU2.esKIs9BsaggNTNfutX1A1hVbuOECYJuNXZt.N1VNYmHPYeq', '01066970621'),
(5, 'HthPzBfThBf5CFpR+g1t2A==', 'UGuw9+5phGk=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$DXD6A63/E5JtIQqHEwepuOeqq6p6XBDjyItc7aAQD0rLlMCg7JBVu', '01066970621'),
(6, 'HthPzBfThBf5CFpR+g1t2A==', 'xDrWF6VMPgc=', 'YYEgKYruu4HDOY6sawp2BdLs+ZH4Su13', '$2y$10$zvjTjys52iztC.ERGVCfUeN3V3h63tGpoh9b8ZCS/rFewQNIgGo1K', '01066970621'),
(7, 'ncasrA1z7Ykqnhr33Um2WQ==', 'aALKvZDqtjVzkgFM0nC6rg==', 'zzsJ4EbNbV+YL+ysHMpqyThwFrMwxUgR', '$2y$10$is2udeEsWwbu0C.QlZ4eee94W5qnihUvupOPo7d0m/sUTinpchNl.', '234234234');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id`, `customer_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 17),
(3, 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `seller_requests`
--
ALTER TABLE `seller_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewers`
--
ALTER TABLE `viewers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seller_requests`
--
ALTER TABLE `seller_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `viewers`
--
ALTER TABLE `viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `wish_list_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
