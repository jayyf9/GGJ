-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 10:52 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ggjewellery`
--
CREATE DATABASE IF NOT EXISTS `ggjewellery` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ggjewellery`;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE IF NOT EXISTS `designs` (
  `Dsn_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Dsn_UserID` int(11) NOT NULL,
  `Dsn_Type` text NOT NULL,
  `Dsn_Quantity` int(11) NOT NULL,
  `Dsn_Size` int(11) NOT NULL,
  `Dsn_Req` text NOT NULL,
  `Dsn_Gem` text NOT NULL,
  `Dsn_Date` date NOT NULL,
  `Dsn_Gift` tinyint(1) NOT NULL,
  `Dsn_Complete` tinyint(1) NOT NULL,
  PRIMARY KEY (`Dsn_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`Dsn_ID`, `Dsn_UserID`, `Dsn_Type`, `Dsn_Quantity`, `Dsn_Size`, `Dsn_Req`, `Dsn_Gem`, `Dsn_Date`, `Dsn_Gift`, `Dsn_Complete`) VALUES
(3, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(4, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(5, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(6, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(7, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(8, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(9, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(10, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(11, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(12, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(13, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(14, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(15, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(16, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(17, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(18, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(19, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(20, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(21, 1, 'Necklace', 1, 0, '', 'Amethyst', '2014-04-22', 0, 0),
(22, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(23, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(24, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(25, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(26, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(27, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(28, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(29, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0),
(30, 1, 'Bracelet', 1, 7, '', 'Carnelian', '2014-04-22', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gemstones`
--

CREATE TABLE IF NOT EXISTS `gemstones` (
  `Gem_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gem_Name` text NOT NULL,
  `Gem_Desc` text NOT NULL,
  `Gem_Image` text NOT NULL,
  `Gem_Zodiac` text NOT NULL,
  PRIMARY KEY (`Gem_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `gemstones`
--

INSERT INTO `gemstones` (`Gem_ID`, `Gem_Name`, `Gem_Desc`, `Gem_Image`, `Gem_Zodiac`) VALUES
(1, 'Amethyst', 'The word ''amethyst'' comes from the Greek word ''amethystos'', meaning "non-intoxicating. In ancient times, its most common application was to prevent drunkenness. The stone has a long history with religious practices. In the Egyptian Book of the Dead, instructions are given for placing heart shaped amethyst on the body of the deceased. A member of the quartz family, it is mined in South America and Africa and has always been valued as an ornament or jewel for adornment. Amethysts healing properties are associated with the brain. It is thought to help with migraine and headaches (particularly those brought on by stress), improve concentration and support mental faculties. It is also believed to strengthen the immune system.', 'Amethyst.jpg', 'Capricorn.jpg'),
(2, 'Agate', 'Agate was given its name by  the Greek philosopher and naturalist Theophrastus. He discovered the stone along the shore line of the\r\nriver Achates. It is often used in hardstone carving and has been recovered at a number of ancient sites, indicating its widespread use\r\nin the ancient world .Agate occurs in nodules, or fills veins in volcanic rocks. It is a silicon dioxide that comes in a variety of colours, often banded due to the nature of its formation. Agate is said to protect from stress and bad dreams and to relieve stomach ache. Carry an agate when you have to make an important decision. \r\n', 'Agate.jpg', 'Capricorn.jpg'),
(3, 'Agatised Coral', 'Agatized Coral are formed from primal Coral Reefs that grew in the warm coastal waters of ancient oceans. Over millions of years silica rich solutions slowly replace the decaying coral matter. Pressure from the accumulating layers above, changes the silica and produces amazing Chalcedony formations. Agatized coral is found in Florida where it played an important role for early settlers. They used it to make spear points, knives and bowls – remnants have been found dating back to 5000 years BC. Agatised coral is a gemstone associated with love and harmony. It is thought also to help in achieving excellence in both your personal and professional life. If you plan to travel on or near water, it is said to be a protective companion.', 'Agatised Coral.jpg', 'Capricorn.jpg'),
(4, 'Aquamarine', 'Aquamarine is March''s birthstone and a member of the beryl family. It is closely related to emerald. The subtle blue and green shades of this gemstone certainly evoke the sea and give it its name. However, almost all aquamarine sold has been heat treated to enhance its colour. In ancient times it was thought to be a stone of courage and people believed that carrying it would help them return safe and prosperous from all sea voyages. Aquamarine''s healing properties are not surprisingly associated with water. It is thought to reduce fluid retention, help the kidneys to function and purify the body. Long ago, eyeglasses were made of aquamarine as the stone is soothing to the eyes.', 'Aquamarine.jpg', 'Capricorn.jpg'),
(5, 'Aventurine', 'Aventurine is a variety of microcrystalline quartz. The name aventurine comes from the phrase "a ventura" which means "by chance". The stone was named after an incident where copper filings accidentally fell into the molten glass that 18th century Venetian glass workers were preparing. This produced a sparkling green glass product similar to the naturally produced stone. A very lucky stone to wear, aventurine promotes cheerfulness and wellbeing and relieves anxiety. It is also thought to bring about unexpected adventures and luck in love. ', 'Aventurine.jpg', 'Capricorn.jpg'),
(6, 'Carnelian', 'Associated with the month of September, carnelian is a chalcedony and primarily comes from India. The gemstone comes in a variety of shades of pale yellow to deep orange. The ancient Egyptians placed it in their tombs as protection in life after death. In Renaissance magic, carnelian was thought to guard the home from lighting and storms. In present times, carnelian is thought to help strengthen concentration and self-worth. It promotes career success and also stimulates creativity. ', 'Carnelian.jpg', 'Capricorn.jpg'),
(7, 'Citrine', 'November''s birthstone and a member of the quartz family. Much of the deeper orange coloured citrine you might see is actually heat treated amethyst. The paler yellow natural citrine is a rare gemstone, highly prized in jewellery making and mostly comes from Brazil. Citrine is said to help in the achievement of personal goals and also to help find the best solution to a problem.  Thought to inspire enthusiasm,  and feelings of self-confidence, citrine is good to wear in the work environment. Citrine has been called the ''Merchant''s Stone''. Carrying or wearing Citrine is believed to have a positive effect on cash flow and to invite wealth and abundance into your life.', 'Citrine.jpg', 'Capricorn.jpg'),
(8, 'Dumortierite', 'Dumortierite was first discovered in the Rhine Alps in France but is now found in America, Brazil, Italy and Russia among other places. It is found in metamorphic rocks that have been subjected to high temperatures. It is used in the manufacture of high quality porcelain. This crystal is thought to be very stimulating to the brain and brings enhanced intellectual abilities as it assists with all mental skills,both mathematical and language based.  Dumortierite also enhances patience.', 'Dumortierite.jpg', 'Capricorn.jpg'),
(9, 'Haematite', 'Haematite is the mineral form of iron oxide. The name hematite is derived from the Greek word for blood “haima” because haematite can be red. Ochre comes from haematite and has been used in cave paintings. Grey haematite is usually found in places where there has been standing water or hot springs, for example in Yellowstone National Park. Haematite has also been found on Mars! Well known for its magnetic properties, it is also thought to calm down heart and soul, maintain balance in life, and give inner happiness and satisfaction.', 'Haematite.jpg', 'Capricorn.jpg'),
(10, 'Ocean Jasper', 'Ocean jasper (or “orbicular jasper”) contains a variety of orb like inclusions. It comes in a variety of beautiful patterns and colours. Ocean jasper originates from just one place – Madagascar and can only be mined at low tide. It''s supply has now been exhausted so it is becoming a rare stone and highly sought after by gem collectors. Its healing properties include its soothing effects on relationships at work or at home. Carry an Ocean Jasper if you are going on a sea journey - it is thought to protect and bring luck.', 'Ocean Jasper.jpg', 'Capricorn.jpg'),
(11, 'Picasso Jasper', 'Jasper is variety of Chalcedony - a microcrystalline variety of quartz. It is a metamorphic limestone and undergoes several transformations of heat and pressure deep within the earth which result in the layered effect of this beautiful gemstone. Picasso jasper is so named as it often resembles a painting. It is a reminder to celebrate and enjoy life. A nurturing stone, it is thought to attract like minded people who become loyal friends. Picasso Jasper is said to be useful for eye problems and can help with weight-loss. ', 'Picasso Jasper.jpg', 'Capricorn.jpg'),
(12, 'Picture Jasper', 'Jasper is variety of chalcedony - a microcrystalline variety of quartz. It is a metamorphic limestone and undergoes several transformations of heat and pressure deep within the earth which result in the layered effect of this beautiful gemstone. Picture jasper is much associated with the earth and is thought to promote harmony and balance in life. The ancient Egyptians made scarab amulets out of jasper and believed that it enhanced their sexual energy. In business pursuits, wearing this\r\ngemstone may create positive energy flow. \r\n', 'Picture Jasper.jpg', 'Capricorn.jpg'),
(13, 'Labradorite', 'Labradorite is found in igneous rocks such as basalt in Labrador, Canada and has also been seen in Norway. The stone has an iridescent quality called labradorescence which is caused by light refracting off different layers in the  mineral''s structure. Proximity to the gemstone is said to help to renew energy for those who overwork. It relieves anxiety and stress. As jewellery, labradorite is good to wear through change, imparting strength and perseverance. In crystal healing it is used in the treatment of colds. It is also believed to help lower blood pressure, and aid digestion.  ', 'Labradorite.jpg', 'Capricorn.jpg'),
(14, 'Lapis Lazuli', 'Lapis Lazuli''s name comes from the Latin lapis, "stone," and the Persian lazhuward, "blue." The composite minerals of Lazurit and  Sodalite give it its royal blue colour. Pyrite gives it the gold flecks. Lapis Lazuli was highly prized in ancient Egypt. The sarcophagus of Tutankhamen was inlaid with it and it was used in scarabs, jewellery, and ground into powder for dyes, eye shadow and medicinal elixirs. Lapis is said to be excellent for executives, journalists, and psychologists, stimulating wisdom and good judgment. It is good for aiding intellectual ability and stimulates the desire for knowledge, truth and understanding. It is also a stone of friendship and brings harmony in relationships.', 'Lapis Lazuli.jpg', 'Capricorn.jpg'),
(15, 'Onyx', 'Onyx comes through Latin from the Greek ????, meaning "claw" or "fingernail". The flesh color, of some types of onyx were thought to look like a fingernail. It is a silicon dioxide mineral. Onyx has been used for centuries in jewellery and in ancient Egypt was used to make bowls. Onyx is also mentioned in the Bible at various points, such as in Genesis 2:12 "and the gold of that land is good: there is bdellium and the onyx stone."', 'Onyx.jpg', 'Capricorn.jpg'),
(16, 'Peridot', 'Peridot is August''s birthstone and is the gemstone form of the mineral olivine. It is found in Afghanistan but in the 1990s a rich deposit of this mineral was found in Kashmir and excellent quality stones are still mined there. Its radiant green shine does not change, even in artificial light. The ancient Romans highly prized this gemstone and because of its colour properties called it the ''emerald of the evening''. Peridot is also found in Europe in medieval churches It  is an ancient gemstone and was used  in Egyptian jewellery from the early 2nd millennium B.C. It was, and still is, believed to have the ability to slow the aging process and has the ability to bring healing and vitality to the whole body.  It said to increase patience, confidence and assertiveness. The joyful and friendly energy of this stone helps to make and seal friendships.', 'Peridot.jpg', 'Capricorn.jpg'),
(17, 'Pyrite', 'Nicknamed fool''s gold, it''s colour is the only thing this gemstone has in common with its namesake. Pyr is the Greek word for fire - striking it against flint for example is a way of creating sparks which can be used to ignite tinder. It is mined in many places all over the world. The ancient Incas used it to help meditate and it is thought to aid reflection and decision making. It''s a stone the French associate with good health and its healing properties include balancing hormones and reducing fevers.', 'Pyrite.jpg', 'Capricorn.jpg'),
(18, 'Quartz', 'Quartz is the most common mineral found on the surface of the Earth and there are many different varieties of this gemstone including smoky, rose and rutile. Quartz occurs in many different rocks, sometimes in veins. Quartz is abundant and has high thermal and chemical stability It is therefore used much in abrasives, ceramics and cements. It is associated with communication, wisdom, general healing, memory,  positive thoughts, harmony and love.', 'Quartz.jpg', 'Capricorn.jpg'),
(19, 'Rhodonite', 'Not recieved', 'Rhodonite.jpg', 'Capricorn.jpg'),
(20, 'Smoky Quartz', 'Smoky Quartz is a brown to black variety of silicon dioxide crystal.\r\nThe colour comes from the free silicon, formed from the silicon dioxide by natural irradiation. It occurs in granitic rocks. Varieties of the gemstone include Cairngorm, Morion, Coon Tail and Gwindel.\r\nIn the 12th century flat planes of smoky quartz were used to make sunglasses. Smoky Quartz brings emotional calmness, relieving stress and anxiety. It is said to aid concentration and communication difficulties. Smokey Quartz dissolves cramps, strengthens the back and fortifies the nerves. It is  particularly effective for abdomen, hips and legs. It may also help to relieve headaches and back pain.\r\n', 'Smoky Quartz.jpg', 'Capricorn.jpg'),
(21, 'Rose Quartz', 'Not recieved', 'Rose Quartz.jpg', 'Capricorn.jpg'),
(22, 'Spinel', 'Not recieved', 'Spinel.jpg', 'Capricorn.jpg'),
(23, 'Turquoise', 'Not recieved', 'Turquoise.jpg', 'Capricorn.jpg'),
(24, 'Fossilised or Petrified Wood', 'Petrified wood is a three-dimensional copy of the original organic material. The wood becomes buried under sediment and is initially preserved due to a lack of oxygen. Mineral-laden water flowing through the sediment deposits minerals in the plant and as it decays, a stone mould forms in its place. Different minerals produce different colours. This process can take as little as a hundred years. ', 'Wood.jpg', 'Capricorn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Item_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Item_GEMID` int(11) NOT NULL,
  `Item_NAME` text NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Item_Desc` text NOT NULL,
  `Item_IMAGE` text NOT NULL,
  `Item_Type` text NOT NULL,
  `Item_Quantity` int(11) NOT NULL,
  `Item_Date` date NOT NULL,
  PRIMARY KEY (`Item_ID`),
  KEY `Item_Price` (`Item_Price`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_GEMID`, `Item_NAME`, `Item_Price`, `Item_Desc`, `Item_IMAGE`, `Item_Type`, `Item_Quantity`, `Item_Date`) VALUES
(1, 2, 'Agate & Labradorite Necklace ', 10, 'Agate & Labradorite Necklace', 'Agate & Labradorite Necklace.jpg', '', 0, '2014-04-07'),
(2, 2, 'Agate Necklace', 0, 'Agate necklace', 'Agate Necklace.jpg', '', 0, '2014-04-16'),
(3, 5, 'Aventurine, Citrine and Carnelian Necklace', 0, 'Aventurine, Citrine and Carnelian Necklace', 'Aventurine, Citrine and Carnelian Necklace.jpg', '', 2, '0000-00-00'),
(4, 18, 'Natural shell, quartz and apatite earrings', 0, 'Natural shell, quartz and apatite earrings', 'Natural shell, quartz and apatite earrings.jpg', '', 0, '0000-00-00'),
(5, 7, 'Kyanite and citrine necklace', 0, 'Kyanite and citrine necklace', 'Kyanite and citrine necklace.jpg', '', 0, '0000-00-00'),
(6, 10, 'Orbicular Jasper and agatised coral bracelet', 0, 'Orbicular Jasper and agatised coral bracelet', 'Orbicular Jasper and agatised coral bracelet.jpg', '', 2, '2014-04-19'),
(7, 18, 'Natural shell, quartz and apatite bracelet', 0, 'Natural shell, quartz and apatite bracelet', 'Natural shell, quartz and apatite bracelet.JPG', '', 0, '0000-00-00'),
(8, 18, 'Natural shell, quartz and apatite necklace', 0, 'Natural shell, quartz and apatite necklace', 'Natural shell, quartz and apatite necklace.JPG', '', 0, '2014-04-19'),
(9, 10, 'Orbicular Jasper and agatised coral necklace', 0, 'Orbicular Jasper and agatised coral necklace', 'Orbicular Jasper and agatised coral necklace.jpg', '', 0, '0000-00-00'),
(10, 12, 'Picture jasper earrings', 0, 'Picture jasper earrings', 'Picture jasper earrings.jpg', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `Purch_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Purch_UserID` int(11) NOT NULL,
  `Purch_ItemID` int(11) NOT NULL,
  `Purch_Qty` int(11) NOT NULL,
  `Purch_Size` int(11) NOT NULL,
  `Purch_Price` int(11) NOT NULL,
  `Purch_Gift` tinyint(1) NOT NULL,
  `Purch_Date` date NOT NULL,
  `Purch_Status` text NOT NULL,
  PRIMARY KEY (`Purch_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`Purch_ID`, `Purch_UserID`, `Purch_ItemID`, `Purch_Qty`, `Purch_Size`, `Purch_Price`, `Purch_Gift`, `Purch_Date`, `Purch_Status`) VALUES
(56, 1, 0, 1, 0, 0, 0, '2014-04-03', ''),
(55, 1, 0, 1, 0, 0, 0, '2014-04-03', ''),
(54, 1, 0, 1, 0, 0, 0, '2014-04-03', ''),
(53, 1, 0, 1, 0, 0, 0, '2014-04-03', ''),
(52, 1, 0, 1, 0, 0, 0, '2014-02-22', ''),
(51, 1, 0, 1, 0, 0, 0, '2014-02-22', ''),
(50, 1, 0, 1, 0, 0, 0, '2014-02-22', ''),
(58, 1, 0, 1, 0, 0, 0, '2014-04-16', ''),
(57, 1, 0, 1, 0, 0, 0, '2014-04-03', ''),
(49, 1, 0, 1, 0, 0, 0, '2014-02-22', ''),
(59, 6, 2, 2, 0, 10, 1, '2014-04-16', ''),
(60, 5, 3, 2, 4, 10, 1, '2014-04-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Forename` text NOT NULL,
  `User_Surname` text NOT NULL,
  `User_Email` text NOT NULL,
  `User_DOB` date NOT NULL,
  `User_Accesslevel` int(11) NOT NULL,
  `User_Name` text NOT NULL,
  `User_Password` text NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Forename`, `User_Surname`, `User_Email`, `User_DOB`, `User_Accesslevel`, `User_Name`, `User_Password`) VALUES
(3, 'Jayyy', 'French', 'Jake@email.com', '1992-11-09', 1, 'Jayyf9', ''),
(4, '', '', '', '0000-00-00', 1, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
