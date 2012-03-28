-- MySQL dump 10.11
--
-- Host: localhost    Database: W00006074
-- ------------------------------------------------------
-- Server version	5.0.51a-3ubuntu5.8-log
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `final_dealer_ratings`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_dealer_ratings` (
  `User_ID` int(11) NOT NULL,
  `Dealer_ID` int(11) NOT NULL,
  `Star_Rating` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY  (`User_ID`,`Dealer_ID`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_dealer_ratings`
--


--
-- Table structure for table `final_dealers`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_dealers` (
  `License_Number` varchar(15) NOT NULL,
  `Region` int(11) NOT NULL,
  `District` int(11) NOT NULL,
  `County` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Expiration` varchar(2) NOT NULL,
  `Sequence_Num` int(11) NOT NULL,
  `License_Name` varchar(50) NOT NULL,
  `Business_Name` varchar(50) default NULL,
  `Business_Bio` text,
  `Premise_Address` varchar(50) NOT NULL,
  `Premise_City` varchar(30) NOT NULL,
  `Premise_State` varchar(2) NOT NULL,
  `Premise_Zip` int(11) NOT NULL,
  `Mail_Street` varchar(50) NOT NULL,
  `Mail_City` varchar(30) NOT NULL,
  `Mail_State` varchar(2) NOT NULL,
  `Mail_Zip` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Expire_Date` date NOT NULL,
  `Accept_Transfers` tinyint(4) NOT NULL COMMENT 'Zero or One',
  `Transfer_Fee` float NOT NULL,
  PRIMARY KEY  (`License_Number`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_dealers`
--


--
-- Table structure for table `final_favorites_xref`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_favorites_xref` (
  `User_ID` int(11) NOT NULL,
  `Dealer_ID` int(11) NOT NULL,
  PRIMARY KEY  (`User_ID`,`Dealer_ID`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_favorites_xref`
--


--
-- Table structure for table `final_license_types`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_license_types` (
  `ID` int(11) NOT NULL,
  `Description` varchar(75) NOT NULL,
  PRIMARY KEY  (`ID`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_license_types`
--

INSERT INTO `final_license_types` VALUES (1,'Dealer in Firearms Other Than Destructive Devices (Includes Gunsmiths)');
INSERT INTO `final_license_types` VALUES (2,'Pawnbroker in Firearms Other Than Destructive Devices');
INSERT INTO `final_license_types` VALUES (3,'Collector of Curios and Relics');
INSERT INTO `final_license_types` VALUES (6,'Manufacturer of Ammunition for Firearms');
INSERT INTO `final_license_types` VALUES (7,'Manufacturer of Firearms Other Than Destructive Devices');
INSERT INTO `final_license_types` VALUES (8,'Importer of Firearms Other Than Destructive Devices');
INSERT INTO `final_license_types` VALUES (9,'Dealer in Destructive Devices');
INSERT INTO `final_license_types` VALUES (10,'Manufacturer of Destructive Devices');
INSERT INTO `final_license_types` VALUES (11,'Importer of Destructive Devices');

--
-- Table structure for table `final_posts`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_posts` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date` text NOT NULL,
  `Post` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ID`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_posts`
--


--
-- Table structure for table `final_users`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `final_users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Zipcode` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `final_users`
--


--
-- Table structure for table `tbl_user`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` VALUES (1,'test1','pass1','test1@example.com');
INSERT INTO `tbl_user` VALUES (2,'test2','pass2','test2@example.com');
INSERT INTO `tbl_user` VALUES (3,'test3','pass3','test3@example.com');
INSERT INTO `tbl_user` VALUES (4,'test4','pass4','test4@example.com');
INSERT INTO `tbl_user` VALUES (5,'test5','pass5','test5@example.com');
INSERT INTO `tbl_user` VALUES (6,'test6','pass6','test6@example.com');
INSERT INTO `tbl_user` VALUES (7,'test7','pass7','test7@example.com');
INSERT INTO `tbl_user` VALUES (8,'test8','pass8','test8@example.com');
INSERT INTO `tbl_user` VALUES (23,'admin','admin','sdwestbroek@digitalephex.com');
INSERT INTO `tbl_user` VALUES (22,'gtuck','j@mM@$t3r9K','gtuck@weber.edu');

--
-- Table structure for table `testDB`
--

SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `testDB` (
  `title` varchar(150) default NULL,
  `bodytext` text,
  `created` varchar(100) default NULL
);
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `testDB`
--

INSERT INTO `testDB` VALUES ('Herbs are here!','We now have a small collection of herbs available for purchase in bulk.  We will continue to expact our inventory as time passes.','2012-01-30 14:57:56');
INSERT INTO `testDB` VALUES ('Spices coming soon!','We now have a provider which will make it possible for us to provide spices in bulk.','2012-01-30 14:57:56');
INSERT INTO `testDB` VALUES ('Spice blends coming soon!','We are currently working on spice blends (such as curry powder or barbeque spice).  When we have a sufficient list of options, we will begin offering these blends.','2012-01-30 15:00:10');
INSERT INTO `testDB` VALUES ('Spices now available!','We now have a small list of spices available for bulk purchase.  Many of these spices have medicinal use as well as cullinary.','2012-01-30 15:04:48');
INSERT INTO `testDB` VALUES ('Spice blends now available!','We now have a selection of spice blends that can be used to flavor a multitude of foods.','2012-01-30 15:14:06');
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-28 18:03:54
