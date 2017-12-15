-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 08:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeplusplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `ID` int(3) NOT NULL,
  `COUNTRY_CODE` varchar(2) NOT NULL,
  `COUNTRY_NAME` varchar(40) NOT NULL,
  `EXCHANGE_RATE` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`ID`, `COUNTRY_CODE`, `COUNTRY_NAME`, `EXCHANGE_RATE`) VALUES
(1, 'AF', 'Afghanistan', '53.66'),
(2, 'AL', 'Albania', '89.74'),
(3, 'DZ', 'Algeria', '89.99'),
(4, 'DS', 'American Samoa', '0.78'),
(5, 'AD', 'Andorra', '0.68'),
(6, 'AO', 'Angola', '129.11'),
(7, 'AI', 'Anguilla', '2.11'),
(8, 'AQ', 'Antarctica', '1.00'),
(9, 'AG', 'Antigua and Barbuda', '2.11'),
(10, 'AR', 'Argentina', '13.81'),
(11, 'AM', 'Armenia', '379.49'),
(12, 'AW', 'Aruba', '1.39'),
(13, 'AU', 'Australia', '1.02'),
(14, 'AT', 'Austria', '0.68'),
(15, 'AZ', 'Azerbaijan', '1.33'),
(16, 'BS', 'Bahamas', '0.78'),
(17, 'BH', 'Bahrain', '0.29'),
(18, 'BD', 'Bangladesh', '64.79'),
(19, 'BB', 'Barbados', '1.56'),
(20, 'BY', 'Belarus', '1.57'),
(21, 'BE', 'Belgium', '0.68'),
(22, 'BZ', 'Belize', '1.56'),
(23, 'BJ', 'Benin', '439.52'),
(24, 'BM', 'Bermuda', '0.78'),
(25, 'BT', 'Bhutan', '50.56'),
(26, 'BO', 'Bolivia', '5.36'),
(27, 'BA', 'Bosnia and Herzegovina', '1.32'),
(28, 'BW', 'Botswana', '8.25'),
(29, 'BV', 'Bouvet Island', '6.39'),
(30, 'BR', 'Brazil', '2.56'),
(31, 'IO', 'British Indian Ocean Territory', '0.78'),
(32, 'BN', 'Brunei Darussalam', '1.07'),
(33, 'BG', 'Bulgaria', '1.32'),
(34, 'BF', 'Burkina Faso', '439.52'),
(35, 'BI', 'Burundi', '1361.30'),
(36, 'KH', 'Cambodia', '3149.50'),
(37, 'CM', 'Cameroon', '442.58'),
(38, 'CA', 'Canada', '1.00'),
(39, 'CV', 'Cape Verde', '74.48'),
(40, 'KY', 'Cayman Islands', '0.64'),
(41, 'CF', 'Central African Republic', '442.58'),
(42, 'TD', 'Chad', '442.58'),
(43, 'CL', 'Chile', '496.17'),
(44, 'CN', 'China', '5.19'),
(45, 'CX', 'Christmas Island', '1.02'),
(46, 'CC', 'Cocos (Keeling) Islands', '1.02'),
(47, 'CO', 'Colombia', '2375.80'),
(48, 'KM', 'Comoros', '330.96'),
(49, 'CG', 'Congo', '442.58'),
(50, 'CK', 'Cook Islands', '1.13'),
(51, 'CR', 'Costa Rica', '441.66'),
(52, 'HR', 'Croatia (Hrvatska)', '5.09'),
(53, 'CU', 'Cuba', '0.78'),
(54, 'CY', 'Cyprus', '0.68'),
(55, 'CZ', 'Czech Republic', '17.25'),
(56, 'DK', 'Denmark', '5.02'),
(57, 'DJ', 'Djibouti', '138.39'),
(58, 'DM', 'Dominica', '2.11'),
(59, 'DO', 'Dominican Republic', '36.81'),
(60, 'TP', 'East Timor', '0.78'),
(61, 'EC', 'Ecuador', '0.78'),
(62, 'EG', 'Egypt', '13.77'),
(63, 'SV', 'El Salvador', '0.78'),
(64, 'GQ', 'Equatorial Guinea', '442.58'),
(65, 'ER', 'Eritrea', '11.97'),
(66, 'EE', 'Estonia', '0.68'),
(67, 'ET', 'Ethiopia', '21.17'),
(68, 'FK', 'Falkland Islands (Malvinas)', '0.60'),
(69, 'FO', 'Faroe Islands', '5.02'),
(70, 'FJ', 'Fiji', '1.62'),
(71, 'FI', 'Finland', '0.68'),
(72, 'FR', 'France', '0.68'),
(73, 'FX', 'France, Metropolitan', '0.68'),
(74, 'GF', 'French Guiana', '0.68'),
(75, 'PF', 'French Polynesia', '80.11'),
(76, 'TF', 'French Southern Territories', '0.68'),
(77, 'GA', 'Gabon', '442.58'),
(78, 'GM', 'Gambia', '36.74'),
(79, 'GE', 'Georgia', '2.03'),
(80, 'DE', 'Germany', '0.68'),
(81, 'GH', 'Ghana', '3.46'),
(82, 'GI', 'Gibraltar', '0.60'),
(83, 'GK', 'Guernsey', '0.59'),
(84, 'GR', 'Greece', '0.68'),
(85, 'GL', 'Greenland', '5.02'),
(86, 'GD', 'Grenada', '2.11'),
(87, 'GP', 'Guadeloupe', '0.68'),
(88, 'GU', 'Guam', '0.78'),
(89, 'GT', 'Guatemala', '5.75'),
(90, 'GN', 'Guinea', '7038.80'),
(91, 'GW', 'Guinea-Bissau', '439.52'),
(92, 'GY', 'Guyana', '159.88'),
(93, 'HT', 'Haiti', '47.95'),
(94, 'HM', 'Heard and Mc Donald Islands', '1.02'),
(95, 'HN', 'Honduras', '18.38'),
(96, 'HK', 'Hong Kong', '6.11'),
(97, 'HU', 'Hungary', '210.26'),
(98, 'IS', 'Iceland', '82.84'),
(99, 'IN', 'India', '50.91'),
(100, 'IM', 'Isle of Man', '0.59'),
(101, 'ID', 'Indonesia', '10573.00'),
(102, 'IR', 'Iran (Islamic Republic of)', '27469.00'),
(103, 'IQ', 'Iraq', '912.52'),
(104, 'IE', 'Ireland', '0.68'),
(105, 'IL', 'Israel', '2.75'),
(106, 'IT', 'Italy', '0.68'),
(107, 'CI', 'Ivory Coast', '439.52'),
(108, 'JE', 'Jersey', '0.59'),
(109, 'JM', 'Jamaica', '98.37'),
(110, 'JP', 'Japan', '89.11'),
(111, 'JO', 'Jordan', '0.55'),
(112, 'KZ', 'Kazakhstan', '261.05'),
(113, 'KE', 'Kenya', '80.92'),
(114, 'KI', 'Kiribati', '1.02'),
(115, 'KP', 'Korea, Democratic People\'s Republic of', '708.97'),
(116, 'KR', 'Korea, Republic of', '872.21'),
(117, 'XK', 'Kosovo', '0.68'),
(118, 'KW', 'Kuwait', '0.24'),
(119, 'KG', 'Kyrgyzstan', '54.16'),
(120, 'LA', 'Lao People\'s Democratic Republic', '6498.40'),
(121, 'LV', 'Latvia', '0.68'),
(122, 'LB', 'Lebanon', '1178.80'),
(123, 'LS', 'Lesotho', '11.14'),
(124, 'LR', 'Liberia', '93.34'),
(125, 'LY', 'Libyan Arab Jamahiriya', '1.08'),
(126, 'LI', 'Liechtenstein', '0.78'),
(127, 'LT', 'Lithuania', '0.68'),
(128, 'LU', 'Luxembourg', '0.68'),
(129, 'MO', 'Macau', '6.29'),
(130, 'MK', 'Macedonia', '41.38'),
(131, 'MG', 'Madagascar', '2474.10'),
(132, 'MW', 'Malawi', '560.74'),
(133, 'MY', 'Malaysia', '3.31'),
(134, 'MV', 'Maldives', '12.19'),
(135, 'ML', 'Mali', '439.52'),
(136, 'MT', 'Malta', '0.68'),
(137, 'MH', 'Marshall Islands', '0.78'),
(138, 'MQ', 'Martinique', '0.68'),
(139, 'MR', 'Mauritania', '274.81'),
(140, 'MU', 'Mauritius', '26.89'),
(141, 'TY', 'Mayotte', '0.68'),
(142, 'MX', 'Mexico', '15.01'),
(143, 'FM', 'Micronesia, Federated States of', '0.78'),
(144, 'MD', 'Moldova, Republic of', '13.64'),
(145, 'MC', 'Monaco', '0.68'),
(146, 'MN', 'Mongolia', '1915.10'),
(147, 'ME', 'Montenegro', '0.68'),
(148, 'MS', 'Montserrat', '2.11'),
(149, 'MA', 'Morocco', '7.46'),
(150, 'MZ', 'Mozambique', '47.21'),
(151, 'MM', 'Myanmar', '1067.20'),
(152, 'NA', 'Namibia', '11.13'),
(153, 'NR', 'Nauru', '1.02'),
(154, 'NP', 'Nepal', '81.07'),
(155, 'NL', 'Netherlands', '0.68'),
(156, 'AN', 'Netherlands Antilles', '1.39'),
(157, 'NC', 'New Caledonia', '80.16'),
(158, 'NZ', 'New Zealand', '1.13'),
(159, 'NI', 'Nicaragua', '23.81'),
(160, 'NE', 'Niger', '439.52'),
(161, 'NG', 'Nigeria', '276.32'),
(162, 'NU', 'Niue', '1.13'),
(163, 'NF', 'Norfolk Island', '1.02'),
(164, 'MP', 'Northern Mariana Islands', '0.78'),
(165, 'NO', 'Norway', '6.39'),
(166, 'OM', 'Oman', '0.30'),
(167, 'PK', 'Pakistan', '82.23'),
(168, 'PW', 'Palau', '0.78'),
(169, 'PS', 'Palestine', '2.75'),
(170, 'PA', 'Panama', '0.78'),
(171, 'PG', 'Papua New Guinea', '2.54'),
(172, 'PY', 'Paraguay', '4409.40'),
(173, 'PE', 'Peru', '2.54'),
(174, 'PH', 'Philippines', '40.25'),
(175, 'PN', 'Pitcairn', '1.13'),
(176, 'PL', 'Poland', '2.87'),
(177, 'PT', 'Portugal', '0.68'),
(178, 'PR', 'Puerto Rico', '0.78'),
(179, 'QA', 'Qatar', '2.99'),
(180, 'RE', 'Reunion', '0.68'),
(181, 'RO', 'Romania', '3.12'),
(182, 'RU', 'Russian Federation', '46.44'),
(183, 'RW', 'Rwanda', '650.70'),
(184, 'KN', 'Saint Kitts and Nevis', '2.11'),
(185, 'LC', 'Saint Lucia', '2.11'),
(186, 'VC', 'Saint Vincent and the Grenadines', '2.11'),
(187, 'WS', 'Samoa', '2.01'),
(188, 'SM', 'San Marino', '0.68'),
(189, 'ST', 'Sao Tome and Principe', '16550.00'),
(190, 'SA', 'Saudi Arabia', '2.94'),
(191, 'SN', 'Senegal', '439.52'),
(192, 'RS', 'Serbia', '79.73'),
(193, 'SC', 'Seychelles', '10.35'),
(194, 'SL', 'Sierra Leone', '5964.80'),
(195, 'SG', 'Singapore', '1.07'),
(196, 'SK', 'Slovakia', '0.68'),
(197, 'SI', 'Slovenia', '0.68'),
(198, 'SB', 'Solomon Islands', '6.09'),
(199, 'SO', 'Somalia', '436.01'),
(200, 'ZA', 'South Africa', '11.14'),
(201, 'GS', 'South Georgia South Sandwich Islands', '0.59'),
(202, 'ES', 'Spain', '0.68'),
(203, 'LK', 'Sri Lanka', '120.04'),
(204, 'SH', 'St. Helena', '0.60'),
(205, 'PM', 'St. Pierre and Miquelon', '0.68'),
(206, 'SD', 'Sudan', '5.26'),
(207, 'SR', 'Suriname', '5.78'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands', '6.39'),
(209, 'SZ', 'Swaziland', '11.13'),
(210, 'SE', 'Sweden', '6.57'),
(211, 'CH', 'Switzerland', '0.78'),
(212, 'SY', 'Syrian Arab Republic', '403.12'),
(213, 'TW', 'Taiwan', '23.64'),
(214, 'TJ', 'Tajikistan', '6.89'),
(215, 'TZ', 'Tanzania, United Republic of', '1750.30'),
(216, 'TH', 'Thailand', '25.93'),
(217, 'TG', 'Togo', '439.52'),
(218, 'TK', 'Tokelau', '1.13'),
(219, 'TO', 'Tonga', '1.78'),
(220, 'TT', 'Trinidad and Tobago', '5.25'),
(221, 'TN', 'Tunisia', '1.96'),
(222, 'TR', 'Turkey', '3.04'),
(223, 'TM', 'Turkmenistan', '2.76'),
(224, 'TC', 'Turks and Caicos Islands', '0.78'),
(225, 'TV', 'Tuvalu', '1.02'),
(226, 'UG', 'Uganda', '2836.80'),
(227, 'UA', 'Ukraine', '20.90'),
(228, 'AE', 'United Arab Emirates', '2.87'),
(229, 'GB', 'United Kingdom', '0.59'),
(230, 'US', 'United States', '0.78'),
(231, 'UM', 'United States minor outlying islands', '0.78'),
(232, 'UY', 'Uruguay', '22.83'),
(233, 'UZ', 'Uzbekistan', '6301.40'),
(234, 'VU', 'Vanuatu', '82.83'),
(235, 'VA', 'Vatican City State', '0.68'),
(236, 'VE', 'Venezuela', '8.74'),
(237, 'VN', 'Vietnam', '17769.00'),
(238, 'VG', 'Virgin Islands (British)', '0.78'),
(239, 'VI', 'Virgin Islands (U.S.)', '0.78'),
(240, 'WF', 'Wallis and Futuna Islands', '80.14'),
(241, 'EH', 'Western Sahara', '7.46'),
(242, 'YE', 'Yemen', '195.64'),
(243, 'ZR', 'Zaire', '1225.40'),
(244, 'ZM', 'Zambia', '7839.51'),
(245, 'ZW', 'Zimbabwe', '0.78');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(4) NOT NULL,
  `SELLER_ID` int(4) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `PRICE` decimal(6,2) NOT NULL,
  `IMAGEURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*INSERT INTO `items` (`ID`, `SELLER_ID`, `NAME`, `DESCRIPTION`, `PRICE`, `IMAGEURL`) VALUES
(1, 13, 'Puma', 'PUMA SE, branded as PUMA, is a German multinational company that designs and manufactures athletic and casual footwear, apparel and accessories, headquartered in Herzogenaurach, Bavaria. PUMA is the third largest sportswear manufacturer in the world.. The company was founded in 1948 by Rudolf Dassler.', 49.99, null),
(2, 12, 'Adidas', 'Adidas was registered on 18 August 1949 by Adolf Dassler, following a family feud at the Gebrüder Dassler Schuhfabrik company between him and his older brother Rudolf.[1] Rudolf had earlier established Puma, which quickly became the business rival of Adidas, and is also headquartered in Herzogenaurach. The companys clothing and shoe designs typically feature three parallel bars, and the same motif is incorporated into Adidass current official logo.[6][7] The brand name is uncapitalized and is stylized with a lower case "a".', 59.99, null),
(3, 6, 'Nike', 'The company was founded on January 25, 1964, as Blue Ribbon Sports, by Bill Bowerman and Phil Knight, and officially became Nike, Inc. on May 30, 1971. The company takes its name from Nike, the Greek goddess of victory. Nike markets its products under its own brand, as well as Nike Golf, Nike Pro, Nike+, Air Jordan, Nike Blazers, Air Force 1, Nike Dunk, Air Max, Foamposite, Nike Skateboarding, and subsidiaries including Brand Jordan, Hurley International and Converse. Nike also owned Bauer Hockey (later renamed Nike Bauer) between 1995 and 2008, and previously owned Cole Haan and Umbro.[8] In addition to manufacturing sportswear and equipment, the company operates retail stores under the Niketown name. Nike sponsors many high-profile athletes and sports teams around the world, with the highly recognized trademarks of "Just Do It" and the Swoosh logo.', 69.99, null),
(4, 10, 'Michael Kors', 'Michael Kors Holdings Limited is an American luxury fashion company that was established in 1981 by designer Michael Kors.[2] The company is known for apparel, footwear, watches, handbags and other accessories. As of 2015, Michael Kors Holdings has more than 550 stores and over 1500 in-store boutiques in various countries.', 79.99, null),
(5, 1, 'Crocs', 'Crocs, Inc. is a shoe manufacturer founded by Scott Seamans, Lyndon "Duke" Hanson, and George Boedecker, Jr. — to produce and distribute a foam clog[3] design acquired from a company called Foam Creations. The shoe was originally developed as a boating shoe. The first model produced by Crocs, the Beach, was unveiled in 2002 at the Fort Lauderdale Boat Show in Florida, and sold out the 200 pairs produced at that time.[4] It has since sold 300 million pairs of shoes.', 89.99, null);
*/
-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `FROM_ID` int(4) NOT NULL,
  `TO_ID` int(4) NOT NULL,
  `SUBJECT` varchar(25) NOT NULL,
  `CONTENT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(10) NOT NULL,
  `USER_ID` int(4) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ORDER_ID` int(4) NOT NULL,
  `ITEM_ID` int(4) NOT NULL,
  `QUANTITY` int(3) NOT NULL,
  `UNIT_PRICE` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `WRITER_ID` int(4) NOT NULL,
  `ITEM_ID` int(4) NOT NULL,
  `RATING` int(1) NOT NULL,
  `CONTENT` varchar(255) NOT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(4) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWORD_HASH` varchar(100) NOT NULL,
  `UNAME` varchar(30) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `COUNTRY_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*INSERT INTO `users` (`ID`, `EMAIL`, `PASSWORD_HASH`, `UNAME`, `FNAME`, `LNAME, `COUNTRY_ID`) VALUES
(1, 'yellowopera49@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'rubystretch', 'Jeremya', 'Deneault', 38),
(2, 'atputhawhatnot@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'banuyan', 'Banujan', 'Atputhrajah', 203),
(3, 'sirsweatsalot@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'gobbs', 'Austin', 'Gobby', 230),
(4, 'potterraymond@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'chinaman', 'Raymond', 'Wu', 44),
(5, 'idonotlikejeremya@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'theycallmegod', 'Alex', 'Lussier-Cullen', 205),
(6, 'mylastnameislong@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'leagueoflegendsfan', 'Viraj', 'Dehisgapage', 99),
(7, 'benxjenna@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'benny', 'Benjamin', 'Valentine', 13),
(8, 'hewhoforgothisbagpipes@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'bbc', 'Luke Thomas', 'Evans', 229),
(9, 'fearthebeard@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'beardboy', 'Alec', 'Arakilyan', 11),
(10, 'tontonlovescats@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'lastwomanstanding', 'Ton Thuy An', 'Huynh', 237),
(11, 'iamnotchinese@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'sonofkhan', 'Kirill', 'Mirinov', 146),
(12, 'arejohnandistillfriends@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'pizzaman', 'Joseph', 'Pagliuca', 106),
(13, 'pumaproducts@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'myaccentthough', 'Andrei', 'Alaev', 144),
(14, 'thatsmyforte@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'json', 'Jason', 'Forte', 72),
(15, 'imhereyouknow@gmail.com', '$2y$10$dffCMEPL1K92Ftx2aXUcROVJkHlMZNjaOelsrYEdXQxvmqGWAxHkO', 'glasses', 'Alexander', 'Marks', 158);
*/
--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ITEMS_SELLER_ID_FK` (`SELLER_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`FROM_ID`,`TO_ID`),
  ADD KEY `MESSAGES_TO_ID_FK` (`TO_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ORDERS_USER_ID_FK` (`USER_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ORDER_ID`,`ITEM_ID`),
  ADD KEY `ORDER_DETAILS_ITEM_ID_FK` (`ITEM_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`WRITER_ID`,`ITEM_ID`),
  ADD KEY `REVIEWS_ITEM_ID_FK` (`ITEM_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UNAME` (`UNAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `USERS_COUNTRY_ID_FK` (`COUNTRY_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `ITEMS_SELLER_ID_FK` FOREIGN KEY (`SELLER_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `MESSAGES_FROM_ID_FK` FOREIGN KEY (`FROM_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MESSAGES_TO_ID_FK` FOREIGN KEY (`TO_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ORDERS_USER_ID_FK` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `ORDER_DETAILS_ITEM_ID_FK` FOREIGN KEY (`ITEM_ID`) REFERENCES `items` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ORDER_DETAILS_ORDER_ID_FK` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `REVIEWS_ITEM_ID_FK` FOREIGN KEY (`ITEM_ID`) REFERENCES `items` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `REVIEWS_WRITER_ID_FK` FOREIGN KEY (`WRITER_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `USERS_COUNTRY_ID_FK` FOREIGN KEY (`COUNTRY_ID`) REFERENCES `countries` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
