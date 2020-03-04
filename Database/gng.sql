-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 06:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `address`, `contact`, `email`, `password`, `add_date`) VALUES
(1, 'bappy', 'Uttara', 1233, 'bappy@gmail.com', '123', '0000-00-00'),
(2, 'Kabir', 'uttara', 1687713808, 'kabirhasan2002@gmail.com', '12', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(50) NOT NULL,
  `b_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `b_name`) VALUES
(1, 'iphone'),
(2, 'Asus'),
(3, 'Samsung'),
(4, 'Xiaomi'),
(5, 'htc'),
(6, 'Huawei'),
(7, 'Oppo'),
(8, 'Walton');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `o_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `temp` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `o_id`, `p_id`, `model`, `b_name`, `price`, `quantity`, `total_price`, `email`, `temp`, `status`, `order_date`) VALUES
(1, 1, 4, 'Iphone XS Max', 'iphone', 125000, 1, 125000, 'adnanbappy23@gmail.com', '', 1, '2018-12-19'),
(3, 4, 15, 'Huawei P20 Pro', 'Huawei', 82990, 1, 82990, 'fatematuzzohura95@gmail.com', '', 1, '2018-12-20'),
(4, 5, 8, 'Samsung Galaxy Note 9', 'Samsung', 94900, 1, 94900, 'dmsbappy@gmail.com', '', 1, '2018-12-21'),
(5, 6, 10, 'Xiaomi Pocophone F1', 'Xiaomi', 29999, 1, 29999, 'dmsbappy@gmail.com', '', 1, '2018-12-22'),
(8, 9, 16, 'Oppo F9', 'Oppo', 28990, 1, 28990, 'dmsbappy@gmail.com', '', 1, '2018-12-24'),
(10, 11, 2, 'Iphone 8', 'iphone', 94999, 1, 94999, 'dmsbappy@gmail.com', '', 1, '2018-12-25'),
(11, 12, 15, 'Huawei P20 Pro', 'Huawei', 82990, 1, 82990, 'adnanbappy23@gmail.com', '', 1, '2018-12-25'),
(12, 13, 2, 'Iphone 8', 'iphone', 94999, 1, 94999, 'dmsbappy@gmail.com', '', 1, '2018-12-26'),
(13, 14, 15, 'Huawei P20 Pro', 'Huawei', 82990, 1, 82990, 'dmsbappy@gmail.com', '', 1, '2018-12-26'),
(15, 16, 4, 'Iphone XS Max', 'iphone', 125000, 1, 125000, 'dmsbappy@gmail.com', '', 1, '2018-12-26'),
(16, 16, 15, 'Huawei P20 Pro', 'Huawei', 82990, 1, 82990, 'dmsbappy@gmail.com', '', 1, '2018-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_date` date DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `address`, `contact`, `email`, `password`, `create_date`, `status`) VALUES
(1, 'Adnan', 'Uttara, Dhaka-1230', '01687713808', 'adnanbappy23@gmail.com', '12', '2018-12-24', 1),
(2, 'Fatima', 'Uttara', '01682441619', 'fatematuzzohura95@gmail.com', '12', '2018-12-24', 1),
(3, 'Bappy', 'Mirpur', '01687713845', 'dmsbappy@gmail.com', '12', '2018-12-24', 1),
(4, 'Tony', 'Ajampur', '01682441616', 'tony@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2018-12-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `o_id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `p_method` varchar(100) NOT NULL,
  `ins_duration` int(10) NOT NULL,
  `typeOfcc` varchar(100) NOT NULL,
  `name_cc` varchar(100) NOT NULL,
  `cc_number` varchar(100) NOT NULL,
  `ex_date` varchar(100) NOT NULL,
  `order_amount` int(100) NOT NULL,
  `temp` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_order`
--

INSERT INTO `c_order` (`o_id`, `fname`, `email`, `address`, `city`, `contact`, `p_method`, `ins_duration`, `typeOfcc`, `name_cc`, `cc_number`, `ex_date`, `order_amount`, `temp`, `order_date`, `Email_id`, `status`) VALUES
(1, 'Adnan', 'adnanbappy23@gmail.com', 'house-54, Road-11, sector-10, uttara, Dhaka', 'Dhaka', 168771380, 'Cash on delivery', 0, '', '', '', '', 125000, '', '2018-12-19', 'adnanbappy23@gmail.com', 1),
(4, 'Fatima', 'fatematuzzohura95@gmail.com', 'Mirpur Dohs', 'Dhaka', 1682441619, 'Cash on delivery', 0, '', '', '', '', 82990, '', '2018-12-20', 'fatematuzzohura95@gmail.com', 1),
(5, 'Badhon', 'dmsbappy@gmail.com', 'Ajampur', 'Dhaka', 0, 'Cash on delivery', 0, '', '', '', '', 94900, '', '2018-12-21', 'dmsbappy@gmail.com', 1),
(6, 'Bappy', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 1687713808, 'emi', 3, 'Visa', 'Bappy', '123456', '04/2021', 29999, '', '2018-12-22', 'dmsbappy@gmail.com', 1),
(9, 'Bappy', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 1687713808, 'Cash on delivery', 0, '', '', '', '', 28990, '', '2018-12-24', 'dmsbappy@gmail.com', 1),
(11, 'Bappy 122', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 168771380, 'Cash on delivery', 0, '', '', '', '', 94999, '', '2018-12-25', 'dmsbappy@gmail.com', 1),
(12, 'Adnan', 'adnanbappy23@gmail.com', 'uttara', 'Dhaka', 1687713808, 'emi', 3, 'Visa', '34dssss', '2131232132323', '09/2021', 82990, '', '2018-12-25', 'adnanbappy23@gmail.com', 1),
(13, 'Bappy 122', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 1687713808, 'Cash on delivery', 0, '', '', '', '', 94999, '', '2018-12-26', 'dmsbappy@gmail.com', 1),
(14, 'Bappy', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 1687713808, 'Cash on delivery', 0, '', '', '', '', 82990, '', '2018-12-26', 'dmsbappy@gmail.com', 1),
(16, 'Bappy', 'dmsbappy@gmail.com', 'uttara', 'Dhaka', 1687713808, 'Cash on delivery', 0, '', '', '', '', 207990, '', '2018-12-26', 'dmsbappy@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `model`, `b_name`, `description`, `price`, `quantity`, `image`, `status`, `add_date`) VALUES
(1, 'iphone 7', 'iphone', '5.5-inch Retina HD display | IP67 water and dust r', 73990, 10, 'iphone7.jpg', 'Active', '2018-12-15'),
(2, 'Iphone 8', 'iphone', 'Network	2G, 3G, 4G Battery	Lithium-ion 2691 mAh (n', 94999, 8, 'apple-iphone-8-plus.jpg', 'Active', '2018-12-15'),
(3, 'Iphone XS', 'iphone', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-ion 2658 ', 115000, 8, 'Apple-iPhone-XS.jpg', 'Active', '2018-12-16'),
(4, 'Iphone XS Max', 'iphone', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-ion 3174 ', 125000, 3, 'Apple-iPhone-XS-Max.jpg', 'Active', '2018-12-17'),
(5, 'Asus ZenFone 6', 'Asus', '2G Network	GSM 850 / 900 / 1800 / 1900 3.5mm Jack	', 19000, 5, 'Asus-ZenFone-6-compressed.jpg', 'Active', '2018-12-18'),
(6, 'Asus Zenfone 2 Deluxe', 'Asus', 'Network	2G, 3G, 4G Battery	Lithium-polymer 3000 mA', 18590, 8, 'Asus-Zenfone-2-Deluxe-ZE551ML.jpg', 'Active', '2018-12-18'),
(7, 'Asus ZenFone 5', 'Asus', 'Network Scope	2G, 3G Battery Type & Performance	Li', 13000, 5, 'Asus-ZenFone-5-compressed.jpg', 'Active', '2018-12-19'),
(8, 'Samsung Galaxy Note 9', 'Samsung', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-ion 4000 ', 94900, 0, 'Samsung-Galaxy-Note-9.jpg', 'Active', '2018-12-20'),
(9, 'Samsung Galaxy J6+', 'Samsung', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-ion 3300 mAh (non-removable) Body	161.4 x 76.9 x 7.9 millimeter, 178 grams (Plastic body) Camera (Back)	Dual 13+5 Megapixel - f/1.9 & f/2.2, depth sensor, 28mm (wide-angle lens), autofocus, LED flash, HDR, panorama, live focus, background blur shape Camera (Front)	8 Megapixel - F/1.9 aperture, LED flash Chipset	Qualcomm Snapdragon 425 Colors	Black, Blue, Red Display	6.0 inches, HD+ 720 x 1480 pixels Display Type	18.5:9 ration Full-View TFT Infinity Touchscreen GPU	Adreno 308 Memory Card	MicroSD, up to 512 GB Operating System	Android Oreo v8.1 Processor	Quad-core, 1.4 GHz RAM	3 GB ROM	32 GB Release Date	October 2018 Sensors	Fingerprint, accelerometer, proximity, light SIM Card	Dual SIM (Nano-SIM, dual stand-by)', 18990, 5, 'Samsung-Galaxy-J6-Plus.jpg', 'Active', '2018-12-20'),
(10, 'Xiaomi Pocophone F1', 'Xiaomi', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-polymer 4000 mAh (non-removable) - Fast Battery Charging (Quick Charge 3.0) Body	155.5 x 75.3 x 8.8 millimeter, 180 grams (Plastic body) Camera (Back)	Dual 12+5 Megapixel - f/1.9 & f/2.0, 1/2.55\", 1.4 & 1.12Âµm, dual pixel PDAF, depth sensor, Dual-LED flash, HDR, panorama, portrait bokeh, face detection, EIS Camera (Front)	20 Megapixel - f/2.0, superpixel, 0.9Âµm, HDR, full-HD video rec. Chipset	Qualcomm Snapdragon 845 Colors	Graphite Black, Steel Blue, Rosso Red, Armored Edition Display	6.18 inches, Full HD+ 1080 x 2246 pixels (403 ppi) Display Type	18.7:9 ratio Full-View IPS LCD Touchscreen with Corning Gorilla Glass protection (unspecified version) GPU	Adreno 630 Memory Card	MicroSD, up to 256 GB (uses SIM 2 slot) Operating System	Android Oreo v8.1 based on MIUI 9.6 (POCO customization)', 29999, 9, 'Xiaomi-Poco-F1.jpg', 'Active', '2018-12-24'),
(11, 'Xiaomi Redmi 6', 'Xiaomi', 'Network	2G, 3G, 4G Battery	Lithium-polymer 3000 mAh (non-removable) Body	147.5 x 71.5 x 8.3 millimeter, 146 grams (Plastic Body) Camera (Back)	12+5 Megapixel - 2x f/2.2, 1.25 & 1.12 Î¼m, depth sensor, PDAF, LED flash, HDR, panorama, AI portrait mode Camera (Front)	5 Megapixel - 1.12um pixels, f/2.2 aperture, beautify, portrait mode, HDR Chipset	Mediatek Helio P22 Colors	Dark Grey, Blue, Gold, Black Display	5.45 inches, HD 720 x 1280 pixels (296 ppi) Display Type	18:9 ration Full-View IPS LCD Touchscreen GPU	PowerVR GE8320 Memory Card	MicroSD, up to 256 GB (uses SIM slot 2) Operating System	Android Oreo v8.1 (based on MIUI 9.0) Processor	Octa-core, 2.0 GHz (12 nm technology) RAM	3 GB ROM	32 GB Release Date	June 2018 Sensors	Fingerprint, accelerometer, proximity, compass SIM Card	Hybrid Dual SIM (Nano-SIM, dual stand-by) USB	MicroUSB v2.0, USB-on-the-go (OTG) Video	Full HD (1080p) Wireless LAN	Yes, dual band, Wi-Fi Direct, hotspot Special Features	- Face Unlock Other Features	- Bluetooth', 12999, 5, 'Xiaomi-Redmi-6.jpg', 'Active', '2018-12-21'),
(12, 'HTC U Ultra', 'htc', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-ion 3000 mAh (non-removable) Stand-by time: up to 13 days (3G) Talk time: up to 26 hours (3G) - Quick Charge 3.0 Body	162.4 x 79.8 x 8 millimeter, 170 grams (back glass, aluminum frame) Camera (Back)	12 Megapixel - F/1.8, 26mm, 1/2.3\", 1.55 Âµm, OIS, phase detection & laser autofocus, dual-LED flash, BSI, face detection, auto-HDR, panorama Camera (Front)	16 Megapixel - Ultra-Pixel mode, BSI, auto selfie, selfie panorama, Full HD video rec. Chipset	Qualcomm Snapdragon 821 Colors	Brilliant Black, Cosmetic Pink, Ice White, Sapphire Blue Display	5.7 inches, Quad HD 1440 x 2560 pixels, Dual Display pixel density (513 ppi) Display Type	Super LCD5 Touchscreen, Corning Gorilla Glass 5 protection GPU	Adreno 530', 29490, 5, 'HTC-U-Ultra-Bangladesh.jpg', 'Active', '2018-12-24'),
(13, 'HTC Desire 628', 'htc', 'Network	2G, 3G, 4G Battery	Lithium-ion 2200 mAh (non-removable) Body	146.9 x 70.9 x 8.1 millimeter, 142 grams Camera (Back)	13 Megapixel - Autofocus, LED flash, f/2.0 aperture, 28mm, face detection, HDR, panorama Camera (Front)	5 Megapixel (f/2.4 aperture, 28mm, full HD video rec.) Chipset	- Colors	Black, White Display	5.0 inches, HD 720 x 1280 pixels (294 ppi) Display Type	IPS LCD touchscreen GPU	- Memory Card	MicroSD, up to 256GB Operating System	Android Lollipop v5.1', 19900, 5, 'HTC-Desire-10-pro-bangladesh.jpg', 'Active', '2018-12-22'),
(14, 'Huawei Mate 20 Pro', 'Huawei', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-polymer 4200 mAh (non-removable) - Fast battery charging 40W Huawei Supercharge (70% in 30 min) - Qi wireless fast charging 15W - Reverse wireless charging Body	157.8 x 72.3 x 8.6 millimeter, 189 grams (glass back & aluminum metal frame) Camera (Back)	Leica Triple Camera 40+20+8 MP - 27mm wide-angle lens, 80mm telephoto lens, 1/4\", 16mm ultrawide lens, 1/2.7\", 5x optical zoom, OIS, 1/1.7\", PDAF/Laser autofocus, Leica optics, dual-LED flash, HDR, panorama mode, AIS (AI Image Stabilization) Camera (Front)	24 Megapixel - F/2.0 aperture, 3D depth sensing, 26mm wide-angle lens, HDR, Full HD video rec. Chipset	HiSilicon Kirin 980 Colors	Emerald Green, Midnight Blue, Twilight, Pink Gold, Black Display	6.39 inches, 2K+ 1440 x 3120 pixels (538 ppi) Display Type	19.5:9 ratio Full-View AMOLED Touchscreen with Corning Gorilla Glass protection GPU	Mali-G76 MP10', 89990, 6, 'Huawei-Mate-20-Pro-Bangladesh-1.jpg', 'Active', '2018-12-23'),
(15, 'Huawei P20 Pro', 'Huawei', 'Network	2G, 3G, 4G Battery	Lithium-polymer 4000 mAh (non-removable) Body	155 x 73.9 x 7.8 millimeter, 180 grams Camera (Back)	Triple 40+20+8 MP - RGB, OIS, Monochrome, Telephoto, Leica optics, 5x hybrid zoom, PDAF and laser autofocus, dual-LED flash, face detection, HDR, panorama, AI image stabilization Camera (Front)	24 Megapixel - F/2.0 aperture, autofocus, Full HD video rec. Chipset	Hisilicon Kirin 970 Colors	Twilight, Black, Midnight Blue, Pink Gold Display	6.1 inches, Full HD 1080 x 2244 pixels (408 ppi) Display Type	OLED Touchscreen with Full-View display GPU	Mali-G72 MP12 Memory Card	No Operating System	Android Oreo v8.1 (EMUI 8.1) Processor	Octa-core + Microcore i7 (4x2.4 GHz & 4x1.8 GHz) RAM	6 GB ROM	128 GB Release Date	April 2018', 82990, 10, 'Huawei-P20-Pro-Bangladesh-min.jpg', 'Active', '2018-12-24'),
(16, 'Oppo F9', 'Oppo', 'Network	2G, 3G, 4G (LTE) Battery	Lithium-polymer 3500 mAh (non-removable) - Fast battery charging: VOOC Flash Charge Body	156.7 x 74 x 7.99 millimeter, 169 grams Camera (Back)	Dual 16+2 Megapixel - F/1.8 & f/2.4, 1/3.1, 1.0Âµm, PDAF, depth sensor, LED flash, face detection, HDR, panorama Camera (Front)	25 MP - F/2.0 aperture, AI Beauty, 26mm, 1/2.8, 0.9Âµm Chipset	MediaTek Helio P60 Colors	Sunrise Red, Twilight Blue, Starry Purple Display	6.3 inches, Full HD+ 1080 x 2340 pixels (409 ppi) Display Type	LTPS TFT Full-View screen with Corning Gorilla Glass 6 protection GPU	Mali-G72 MP3 Memory Card	MicroSD, up to 256 GB (dedicated slot) Operating System	Android Oreo v8.1 (ColorOS 5.2) Processor	Octa-core, 2.0 GHz RAM	4/6 GB ROM	64 GB Release Date	August 2018', 28990, 4, 'Oppo-F9-Bangladesh.jpg', 'Active', '2018-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `c_order`
--
ALTER TABLE `c_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c_order`
--
ALTER TABLE `c_order`
  MODIFY `o_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
