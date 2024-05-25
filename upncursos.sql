-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: upncursos
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividad` (
  `idActividad` int NOT NULL AUTO_INCREMENT,
  `idContenido` int NOT NULL,
  `titulo` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `enlace` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (1,1,'oclark@example.com','48330 Kristina Summit Apt. 382\nKellyside, IN 22937',0,'adamsstephanie@example.org','1972-12-21',NULL,NULL),(2,1,'danielgonzales@example.net','USCGC Carson\nFPO AP 74613',0,'jennifersmith@example.net','1976-09-05',NULL,NULL),(3,1,'wyoung@example.org','340 Michele Forest Apt. 953\nWilliamsberg, CO 65001',0,'millercrystal@example.com','1992-04-30',NULL,NULL),(4,1,'vincent46@example.org','Unit 6562 Box 2239\nDPO AE 95532',0,'cgarza@example.com','1976-08-15',NULL,NULL),(5,1,'dominiquecochran@example.net','98123 Kelly Passage\nNorth Amber, WA 72179',0,'jerrybarton@example.net','2019-03-29',NULL,NULL),(6,1,'jennifer59@example.net','79948 Hernandez Ranch Suite 884\nPort James, VT 38329',0,'robinsonsarah@example.org','2023-09-12',NULL,NULL),(7,1,'john22@example.com','873 Steven Glen\nSouth Jill, MS 38557',0,'omarshall@example.com','1980-02-25',NULL,NULL),(8,1,'clementslindsay@example.net','6744 Harrington Falls Suite 386\nEast Michaelmouth, CT 33471',0,'allison02@example.com','2022-04-03',NULL,NULL),(9,1,'cooperlynn@example.net','055 Thomas Freeway Suite 175\nNorth Jeffreyville, OR 17399',0,'urodriguez@example.com','1990-06-20',NULL,NULL),(10,1,'lreed@example.net','98768 Thornton Heights\nLake Brandon, NC 98452',0,'igarza@example.net','1978-10-23',NULL,NULL),(11,1,'jcooper@example.com','6497 Gonzalez Ranch Apt. 305\nLaurafort, WA 44400',0,'cblack@example.net','2002-02-19',NULL,NULL),(12,1,'jrivera@example.com','6714 Elizabeth Trail Suite 273\nEricberg, NV 84384',0,'roysantiago@example.net','1988-05-01',NULL,NULL),(13,1,'daniel70@example.org','998 Morris Locks\nJaredborough, IN 85081',0,'jonathan37@example.com','2002-07-09',NULL,NULL),(14,1,'tammynguyen@example.org','55640 Cooper Knolls Suite 077\nHollyville, AK 53439',0,'williskathleen@example.org','1975-06-24',NULL,NULL),(15,1,'hannahlane@example.org','PSC 1677, Box 5903\nAPO AE 66386',0,'veronicaglover@example.com','1998-07-29',NULL,NULL),(16,1,'tblake@example.org','26649 Jeffrey Lane\nWest Sandrabury, NH 38720',0,'chowell@example.org','1973-01-25',NULL,NULL),(17,1,'brownmichael@example.org','USNV Solis\nFPO AP 33273',0,'martin37@example.com','1972-11-08',NULL,NULL),(18,1,'pcox@example.com','7937 Elizabeth Drives\nAtkinsview, AS 07590',0,'timothy21@example.org','2011-02-10',NULL,NULL),(19,1,'ramirezbobby@example.com','6590 Jimenez Dam Suite 278\nPort Richardchester, ID 08375',0,'mosleykelly@example.com','1981-03-16',NULL,NULL),(20,1,'millercheryl@example.org','57520 Angela Court\nWest Jesseberg, MH 50597',0,'vgutierrez@example.net','1993-10-30',NULL,NULL),(21,1,'julie13@example.org','Unit 2178 Box 5566\nDPO AP 55091',0,'darryl07@example.org','1979-03-10',NULL,NULL),(22,1,'pmiller@example.net','848 Matthew Vista\nJoelstad, AS 72161',0,'williamross@example.com','2003-05-09',NULL,NULL),(23,1,'kayla49@example.net','16556 Johnson Way Suite 230\nTaylorbury, MO 43115',0,'jessicaturner@example.net','1980-11-29',NULL,NULL),(24,1,'trodriguez@example.com','706 Ellis Villages\nNorth Wesleyfort, AL 22668',0,'williamsdustin@example.net','1977-05-02',NULL,NULL),(25,1,'matthewmyers@example.com','71021 Courtney Knoll\nJesusborough, CO 84156',0,'trevor30@example.org','2022-08-23',NULL,NULL),(26,1,'jamesbuchanan@example.net','129 Sarah Trail\nMoorestad, DC 42336',0,'nguyentheresa@example.com','1991-08-13',NULL,NULL),(27,1,'qbishop@example.org','5838 Francis Trace Apt. 821\nNorth Scott, CT 39992',0,'andrewbrooks@example.com','1992-03-01',NULL,NULL),(28,1,'dorothylong@example.net','644 Kayla Mall Suite 153\nNew Michellemouth, KS 87655',0,'mariahconley@example.org','1981-06-16',NULL,NULL),(29,1,'johnsonjessica@example.net','1579 Ford Parkways\nPaynefort, AK 28747',0,'cwashington@example.net','2011-07-20',NULL,NULL),(30,1,'kirbyjames@example.com','8795 Ashley Wall\nSmithton, FM 19431',0,'odean@example.com','1998-03-10',NULL,NULL),(31,1,'steven09@example.com','73386 Page Land\nCynthiatown, NE 51351',0,'xavier13@example.com','1975-09-12',NULL,NULL),(32,1,'qmiller@example.com','43553 Harris Villages\nAdamsmouth, VA 34890',0,'patricia22@example.net','1979-04-15',NULL,NULL),(33,1,'megan51@example.org','5096 Denise Cape Suite 427\nHugheston, MO 32757',0,'willisjennifer@example.net','2013-04-25',NULL,NULL),(34,1,'nancymcmahon@example.net','420 Danielle Stravenue\nDavisshire, MO 44426',0,'georgejennings@example.com','1987-08-06',NULL,NULL),(35,1,'christopher97@example.org','5171 Johnson Station\nSouth Brandonbury, MI 18610',0,'michaelhamilton@example.net','2019-07-08',NULL,NULL),(36,1,'udavis@example.net','8061 Stanton Row\nWebbside, TX 82401',0,'xhenderson@example.com','1976-10-18',NULL,NULL),(37,1,'pattyclay@example.net','375 Hansen Union\nWeberbury, SC 40983',0,'sryan@example.net','2012-04-12',NULL,NULL),(38,1,'morganrebecca@example.net','USNS Williams\nFPO AP 79732',0,'martinroger@example.com','2016-02-01',NULL,NULL),(39,1,'xjohnson@example.net','960 Tyler Lake\nBrianstad, VA 25808',0,'zmartin@example.org','2022-05-08',NULL,NULL),(40,1,'williamallen@example.com','7263 Crystal Plains\nMcclainhaven, VA 25544',0,'fmyers@example.com','1990-08-09',NULL,NULL),(41,1,'amontgomery@example.net','63553 Thomas Vista\nWest Harry, IN 70743',0,'holly84@example.net','2021-07-03',NULL,NULL),(42,1,'beverly74@example.com','76009 Smith Oval\nSouth Randy, VT 07353',0,'marydixon@example.com','1976-10-17',NULL,NULL),(43,1,'kimberlyjordan@example.net','741 Evans Canyon Apt. 869\nNew Davidfurt, MT 69564',0,'brandonchandler@example.org','1973-03-25',NULL,NULL),(44,1,'carterchristopher@example.com','871 Thompson Hollow Suite 552\nCruzton, NV 28115',0,'mendozasusan@example.org','1997-01-25',NULL,NULL),(45,1,'melissawilliams@example.com','Unit 7112 Box 5344\nDPO AA 89710',0,'gomezcharles@example.org','1989-02-06',NULL,NULL),(46,1,'dschwartz@example.net','8550 Barbara Rue\nFoxberg, OK 64144',0,'tford@example.com','2007-03-29',NULL,NULL),(47,1,'ysanchez@example.net','6187 Harvey Place\nNorth Lindsay, MS 85458',0,'dorseyjoseph@example.net','2008-09-14',NULL,NULL),(48,1,'youngheather@example.org','USNV Serrano\nFPO AP 22300',0,'qhernandez@example.org','2009-11-10',NULL,NULL),(49,1,'francisco23@example.net','5091 Dana Parkways\nNelsonmouth, NH 71915',0,'meagangross@example.org','1983-01-01',NULL,NULL),(50,1,'victoriadaniels@example.org','74096 Phillips Summit Suite 919\nLake Richard, NV 30610',0,'amy57@example.net','1986-05-17',NULL,NULL),(51,1,'julie45@example.net','957 Taylor Drive Apt. 918\nStewartfurt, KS 83873',0,'shane13@example.org','2023-02-17',NULL,NULL),(52,1,'rebecca24@example.com','7979 Olson Stravenue\nPort Thomasmouth, OR 15695',0,'maurice59@example.com','2009-03-12',NULL,NULL),(53,1,'xgrimes@example.org','PSC 2636, Box 5273\nAPO AE 25554',0,'julia05@example.com','1984-03-05',NULL,NULL),(54,1,'amy69@example.org','6056 Melissa Lodge\nKimberlyside, NY 16054',0,'kellynathan@example.net','1992-07-06',NULL,NULL),(55,1,'michaelwilson@example.com','4029 Yang Unions\nMcdonaldchester, MS 09810',0,'oflynn@example.org','1990-05-25',NULL,NULL),(56,1,'walkerpatrick@example.net','89365 Jennifer Freeway Suite 859\nKristenberg, OK 50414',0,'latoyafuentes@example.com','2004-10-15',NULL,NULL),(57,1,'vfoster@example.com','461 Derrick Run Suite 441\nErinberg, ME 87259',0,'elizabeth62@example.com','1989-02-06',NULL,NULL),(58,1,'holmesangela@example.net','PSC 1050, Box 2415\nAPO AA 30596',0,'eatonbrandon@example.com','1987-10-29',NULL,NULL),(59,1,'jimmy57@example.net','20540 Rachel Islands Suite 385\nCarterside, IA 05450',0,'gregoryelizabeth@example.net','1984-08-27',NULL,NULL),(60,1,'keith67@example.org','743 Bowers Turnpike\nKarenview, NV 69621',0,'jeffreyjones@example.org','1983-10-18',NULL,NULL),(61,1,'shafferjoshua@example.org','37046 Marc Ways Apt. 095\nPort Ronald, AS 52325',0,'jasonalvarez@example.com','1985-10-28',NULL,NULL),(62,1,'andrea07@example.org','67061 Kirk Fall\nNew Justin, WY 36784',0,'dale68@example.net','1975-03-06',NULL,NULL),(63,1,'kenneth15@example.net','USS Snow\nFPO AA 33289',0,'cmcconnell@example.org','1980-06-05',NULL,NULL),(64,1,'robert11@example.net','2906 Lopez Loaf\nAnthonystad, DC 06362',0,'katie13@example.net','2000-05-07',NULL,NULL),(65,1,'scampbell@example.net','4040 Smith Dale Apt. 072\nNorth Meredith, NH 82512',0,'melendezwanda@example.com','2007-10-03',NULL,NULL),(66,1,'jason63@example.org','390 Kristina Lodge\nPort Daniel, CT 59971',0,'tammygarcia@example.org','1973-07-25',NULL,NULL),(67,1,'randall79@example.net','633 Bryan Lane Apt. 837\nNorth Lawrenceview, SC 69481',0,'garciarobert@example.net','1996-03-03',NULL,NULL),(68,1,'michellenelson@example.net','296 Jasmine Fords\nMileston, MD 83556',0,'ethomas@example.org','1988-04-13',NULL,NULL),(69,1,'btrujillo@example.net','9830 Kyle Junctions Apt. 811\nJessicabury, VT 09411',0,'williamedwards@example.net','1978-02-20',NULL,NULL),(70,1,'erica30@example.com','64336 Rose Dam\nEast Amber, IA 91706',0,'ufrost@example.com','1970-05-25',NULL,NULL),(71,1,'scottreese@example.net','39733 Hopkins Pines\nSouth Alexander, UT 46225',0,'jacobpeters@example.com','1975-10-05',NULL,NULL),(72,1,'gavin55@example.com','89054 Howard Well Apt. 457\nGibsonmouth, MH 90530',0,'josephmullen@example.com','2005-08-18',NULL,NULL),(73,1,'robertgarcia@example.com','134 Brooks Island Suite 552\nKristintown, HI 44355',0,'stevenramirez@example.net','2023-09-29',NULL,NULL),(74,1,'amyduffy@example.com','1123 Chavez Villages\nNew Davidfurt, DC 41147',0,'amanda77@example.net','2014-08-16',NULL,NULL),(75,1,'andrew50@example.net','21992 Freeman Ways Apt. 614\nCruzport, OK 41748',0,'craig08@example.org','1993-08-05',NULL,NULL),(76,1,'annette07@example.net','8238 Bennett Spurs\nPort Monicahaven, PA 38699',0,'rosalessusan@example.org','1990-02-25',NULL,NULL),(77,1,'imack@example.org','1117 Meadows Plains Suite 039\nEast Kathrynbury, MA 08233',0,'meghan32@example.org','1987-11-06',NULL,NULL),(78,1,'michaelmoss@example.org','1364 Spencer Branch Apt. 425\nPort Patrick, SD 24561',0,'kimberly02@example.org','1975-01-24',NULL,NULL),(79,1,'brockbradley@example.net','554 Elliott Locks\nNew Mariaville, KS 80993',0,'tonyfox@example.com','1973-11-11',NULL,NULL),(80,1,'zachary06@example.net','42480 Patrick Rue\nMasseyshire, ME 95707',0,'kevin30@example.com','1976-10-21',NULL,NULL),(81,1,'jasmine34@example.net','35613 Perez Inlet\nAlexanderbury, MP 23348',0,'chelsea55@example.com','1990-09-29',NULL,NULL),(82,1,'gdaniel@example.com','1324 Bryan Trace\nWest Nicholas, PR 03184',0,'williamhowell@example.net','2013-12-11',NULL,NULL),(83,1,'zreese@example.org','325 Carolyn Drives\nNew Christinatown, MA 41331',0,'tony64@example.com','1991-09-21',NULL,NULL),(84,1,'jamie23@example.org','90166 Jeremiah Walk\nJulieland, TN 96946',0,'cynthia70@example.net','2008-09-23',NULL,NULL),(85,1,'juliewaller@example.net','43008 Kenneth Skyway Suite 340\nLoveborough, ND 46704',0,'orichardson@example.net','1992-04-19',NULL,NULL),(86,1,'jose59@example.com','604 Mary Drive\nNorth Brittanymouth, AZ 68592',0,'hlarson@example.org','1998-05-21',NULL,NULL),(87,1,'mackenzie55@example.net','8360 Kevin Dam Apt. 681\nTammyborough, SC 47658',0,'alyssa27@example.com','2004-11-30',NULL,NULL),(88,1,'christopher17@example.com','371 Palmer River\nSouth Deborahland, IN 77454',0,'michael70@example.com','1995-06-21',NULL,NULL),(89,1,'jacobolsen@example.com','7340 Brad Trace\nWhitneyton, OR 59104',0,'kelly15@example.org','1992-12-20',NULL,NULL),(90,1,'jamesandrews@example.net','6893 Morris Throughway Apt. 557\nEast Williammouth, ID 40689',0,'nancycunningham@example.org','1971-03-08',NULL,NULL),(91,1,'garciabryan@example.org','597 Nichols Extensions\nPort Samuel, OR 01905',0,'michael25@example.net','1979-02-22',NULL,NULL),(92,1,'joneswilliam@example.net','843 Gutierrez Groves\nEast Sean, MS 70130',0,'josephbennett@example.com','1974-06-04',NULL,NULL),(93,1,'alexanderwilliam@example.net','9998 Walters Harbor Suite 350\nShepherdton, WY 05055',0,'james64@example.net','1986-09-15',NULL,NULL),(94,1,'donald41@example.net','57921 Bush Lock\nMillerhaven, MT 13411',0,'anunez@example.net','1990-11-05',NULL,NULL),(95,1,'denisesnyder@example.org','583 Taylor Fork Suite 780\nNorth Johnbury, WY 03700',0,'ikeller@example.net','2006-03-22',NULL,NULL),(96,1,'sheri55@example.com','863 Rodriguez Orchard\nStephaniehaven, PW 93872',0,'thomasmurphy@example.net','1970-10-26',NULL,NULL),(97,1,'kathleensmith@example.net','67959 Jeremy Trail Apt. 068\nNorth Paulachester, OH 66631',0,'laurie61@example.net','2009-07-28',NULL,NULL),(98,1,'kimberlybuchanan@example.net','USNV Baird\nFPO AE 72578',0,'ttorres@example.org','2001-04-06',NULL,NULL),(99,1,'kortiz@example.com','190 Chelsea Hollow\nCalderonville, MI 59004',0,'edwinpatterson@example.com','1978-07-04',NULL,NULL),(100,1,'michaelmartin@example.org','4179 Wilson Stravenue Apt. 926\nKimview, IA 80934',0,'gomezjordan@example.net','2007-08-06',NULL,NULL);
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=504 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Programación','Contenidos relacionados con la programación de software.','2024-05-05',NULL,NULL),(2,'Bases de datos','Contenidos relacionados con el almacenamiento y gestión de datos.','2024-05-06',NULL,NULL),(3,'Diseño de interfaces','Contenidos relacionados con el diseño de interfaces de usuario.','2024-05-07',NULL,NULL),(311,'Wrong.','Dream detail building third ahead member economic. Phone mind dog avoid family American. Price fast parent main leg economic.','2023-07-16',NULL,NULL),(312,'Agency.','Through side will air check table assume. Cup become however Mrs page by put plant. Cell word can.','2023-10-16',NULL,NULL),(313,'Travel.','Foreign high major need. Beyond us phone sea strategy human.','2023-07-16',NULL,NULL),(314,'Someone.','Plant great understand letter record.','2024-05-17',NULL,NULL),(315,'Represent.','Inside learn site television. City amount card citizen lawyer. Build fall address case into at study.','2024-05-09',NULL,NULL),(316,'Address.','Recently plant seem. As may indicate.','2024-04-04',NULL,NULL),(317,'Play.','Human mouth follow ok. Catch yourself think. Go state room focus. Fill some or start fund model decide seat.','2024-02-28',NULL,NULL),(318,'Talk.','North each number. Outside contain begin life.','2023-07-30',NULL,NULL),(319,'Lawyer.','Blue effort parent whether. Thank why able recently. Win image own ball young no.','2024-02-04',NULL,NULL),(320,'Song.','Audience require and new. Use center myself positive test.','2023-08-02',NULL,NULL),(321,'Couple.','Industry civil simply least speech conference much. Partner middle assume brother person oil college.','2024-03-24',NULL,NULL),(322,'West.','Project wall partner teach. Decide people shake religious hot want.','2024-01-09',NULL,NULL),(323,'Bag.','Than north suggest. Coach someone sea church try pay case local.','2024-03-20',NULL,NULL),(324,'Bank.','Radio south war seven force answer offer. Scientist late early then figure father. For majority wind evidence. Short seem would left other.','2023-08-19',NULL,NULL),(325,'Population.','To message usually write. Natural international risk call drive wide lead.','2023-09-29',NULL,NULL),(326,'Smile.','Her within anyone professional. Level television assume a. Nor season spring from house blue collection.','2023-12-31',NULL,NULL),(327,'Because.','Pull term store possible. Suddenly represent its save. What anything material particularly game public ago.','2024-03-25',NULL,NULL),(328,'Their.','Large strong difference society why degree situation. Sense design throw.','2023-08-30',NULL,NULL),(329,'Everybody.','Campaign lead nearly scientist push. Various program high up head chair trouble.','2023-07-11',NULL,NULL),(330,'Use.','Crime resource industry again friend material avoid. Poor few military put surface.','2024-04-12',NULL,NULL),(331,'Approach.','Reveal pass likely nature resource. Everybody piece ask ago. Next three sure simple else.','2023-11-12',NULL,NULL),(332,'Time.','These my house pretty eat. Somebody popular create hospital ahead share subject. Single week full authority catch leg day.','2023-06-17',NULL,NULL),(333,'First.','Safe approach off energy. Song coach different church another both. Poor when face gun bank different.','2024-04-22',NULL,NULL),(334,'Oil.','Back over help attorney do community entire.','2023-08-11',NULL,NULL),(335,'Course.','Truth organization information without tell charge. Ahead until improve push.','2023-09-05',NULL,NULL),(336,'Discuss.','Third easy girl within. High amount article director find debate. Scientist treatment fine serious put gas public before. Worry perform blood time expert raise.','2024-05-04',NULL,NULL),(337,'Push.','Grow down leave attorney amount follow. Star herself position us perform. Force society like health fly threat once.','2023-07-04',NULL,NULL),(338,'Stand.','Him fly bit remain. Several under product try today. Treatment computer case.','2024-03-18',NULL,NULL),(339,'Thing.','Go on Republican. Parent friend no cover. Man join human agent.','2023-06-10',NULL,NULL),(340,'Whether.','Voice white argue stand question cause challenge ask. I possible long say might loss read.','2023-12-24',NULL,NULL),(341,'Billion.','Scientist open whose example among. Vote meet forward state yard consumer.','2024-05-11',NULL,NULL),(342,'Sea.','Increase list any. Green leg law I government. Positive lot rule at difficult happen how.','2023-10-21',NULL,NULL),(343,'Dog.','Set cause while responsibility conference.','2023-11-01',NULL,NULL),(344,'Move.','At something activity view heavy positive.','2023-07-16',NULL,NULL),(345,'Realize.','Skill full at plant increase game nearly.','2023-11-08',NULL,NULL),(346,'Leg.','Include knowledge resource since. Right senior that science.','2024-05-17',NULL,NULL),(347,'Health.','National total suddenly month will seem lawyer. Reach financial middle grow.','2023-09-08',NULL,NULL),(348,'Information.','Coach other base letter physical article those. Media make teach to make hear visit. Ten end cut total bed.','2024-03-18',NULL,NULL),(349,'Seek.','Allow might area certainly buy thousand political why.','2024-05-17',NULL,NULL),(350,'Attack.','Because defense buy cell benefit trade against. Fill home me thus bit hit way. Contain beautiful animal each ok.','2024-03-09',NULL,NULL),(351,'Simply.','Decide modern policy entire care until. Site paper always wall son continue without. Late low author four sell west.','2023-11-17',NULL,NULL),(352,'Picture.','The friend building data. Eye risk return modern attorney imagine protect. Society arrive two off option degree must. Wind stuff clearly reach daughter fund.','2023-10-31',NULL,NULL),(353,'Central.','Big nothing career every window. Evidence provide very strategy hope billion.','2023-07-19',NULL,NULL),(354,'Thus.','Other line day trial continue rather by quite. Light maintain professional election one bring. Save now from billion. Same expert green.','2024-03-15',NULL,NULL),(355,'Though.','Then at under line though defense. Decade girl their generation society case. Beautiful security financial central wide white.','2023-10-23',NULL,NULL),(356,'Threat.','Create sell off leader camera ever would responsibility. Test open term economic group. Available cut large surface mind under. Sign recently deal picture late big financial.','2023-11-24',NULL,NULL),(357,'Face.','Mean on ready together. Election economy hard form practice tend. Service south writer quality hour cut.','2024-03-02',NULL,NULL),(358,'Nothing.','Amount add no attack environmental price region. During worry we new night. Though theory here hope affect third.','2024-03-07',NULL,NULL),(359,'Through.','Turn long site tough who. Your each future cause. Computer prevent hand station interesting call bag.','2023-09-23',NULL,NULL),(360,'Fire.','Significant beyond dark himself either. After vote view total.','2024-03-24',NULL,NULL),(361,'Under.','Everybody summer pressure sing else or.','2024-01-24',NULL,NULL),(362,'Course.','Break design bar resource rather weight.','2024-02-08',NULL,NULL),(363,'Play.','Act feeling turn simply guess girl get. Get someone something on something whatever Democrat whom. Push try scene begin.','2023-10-11',NULL,NULL),(364,'Couple.','Again draw purpose likely. Live wish single structure purpose. Score budget talk.','2023-10-30',NULL,NULL),(365,'Others.','Order network whose. Look notice agreement. Nor avoid attorney democratic short.','2023-11-09',NULL,NULL),(366,'Need.','Anyone although phone respond go. Hold radio five crime pass team building. Coach matter determine summer couple national. Between rather thing couple including good speak.','2023-07-16',NULL,NULL),(367,'Garden.','Smile tree put. Republican grow civil far bag.','2024-05-06',NULL,NULL),(368,'Few.','Future nice suddenly tree career again. Later population might section table write believe. Trade how region best time white maintain.','2023-06-14',NULL,NULL),(369,'Think.','Forget finish mother media. For almost fast up nearly visit put age. Pretty return exist record.','2023-06-25',NULL,NULL),(370,'Must.','Similar give pattern work chair. Main laugh particular article west.','2024-04-20',NULL,NULL),(371,'Community.','Address western wrong environment. Reflect environmental technology wonder daughter fight cup. Wide media spend during.','2024-05-17',NULL,NULL),(372,'Late.','Majority way single moment feel sing. Soldier for federal. Top land lawyer story respond.','2023-12-15',NULL,NULL),(404,'Raise.','Enjoy together him. Summer personal reality offer.','2023-09-03',NULL,NULL),(405,'Because.','Beautiful adult throughout allow behavior window church. Large from study still. Seem yet again water others shake worry. Through water thing authority tax morning what easy.','2023-10-24',NULL,NULL),(406,'Approach.','Cost church ability everyone. Chair sign clearly expert environmental happen whom. Big consumer by stage.','2023-08-21',NULL,NULL),(407,'Service.','Drop cup either spring brother. Sure tax born travel matter economy.','2024-01-27',NULL,NULL),(408,'People.','List agent southern court follow. School state bit finish. Real blood authority change father.','2024-01-08',NULL,NULL),(409,'Take.','Others myself debate show name he. Whole clearly challenge traditional listen. Build situation training choice room once. Drive strong technology.','2023-07-06',NULL,NULL),(410,'Other.','Degree degree well attorney season. Of know visit professional four.','2024-03-17',NULL,NULL),(411,'Newspaper.','Term mouth candidate modern show heart listen. Sometimes ready artist all size degree. Education carry kind view list hospital option.','2024-02-07',NULL,NULL),(412,'Company.','Mother table travel door fund leader. Worker task half property church.','2024-04-15',NULL,NULL),(413,'After.','Kitchen else go section. Despite its detail likely. Fear great for experience group.','2024-04-26',NULL,NULL),(414,'For.','Officer establish can wide. Thought today step many ability.','2024-04-16',NULL,NULL),(415,'Early.','Your important get read memory avoid real.','2023-11-05',NULL,NULL),(416,'Generation.','Determine arm rest office challenge none lot character.','2024-01-31',NULL,NULL),(417,'Old.','Name ahead use should agent. Do piece marriage between turn.','2023-07-13',NULL,NULL),(418,'Number.','History ask type and feeling economy she. Activity product end expert middle exist. Long expert must evidence.','2023-08-09',NULL,NULL),(419,'Pass.','Next any run they. Compare brother interview imagine some present sister.','2024-01-18',NULL,NULL),(420,'Fight.','Environmental myself material simple girl many anyone. Response only magazine glass. Continue court standard direction professional help like agree. Level move director baby no himself.','2023-07-05',NULL,NULL),(421,'Effort.','Offer whose social project. Four everybody lose protect past charge save itself. Respond election various likely.','2023-07-01',NULL,NULL),(422,'Tonight.','Now read production senior including. Do they most before. Win say ground visit TV strategy measure probably. While add true many fall likely.','2024-05-09',NULL,NULL),(423,'I.','Public month lawyer someone could else figure.','2024-01-24',NULL,NULL),(424,'Why.','Unit our dark rich character trouble strong.','2023-12-03',NULL,NULL),(425,'Industry.','Born evening pass discover it third goal. West actually test national short.','2024-05-16',NULL,NULL),(426,'Somebody.','Collection contain occur field drug base up have. Send Congress situation science spend Republican. It campaign attorney year figure environmental deal.','2023-12-09',NULL,NULL),(427,'War.','Think information right. Have plan health speech behavior security run perhaps.','2024-01-28',NULL,NULL),(428,'Let.','Mrs necessary more bed ask painting. Town about great receive. Without evidence have.','2024-02-13',NULL,NULL),(429,'That.','Finally chance only hard sea get property. Certain thus deal contain apply nice.','2023-09-09',NULL,NULL),(430,'Them.','Material sister design picture for dark expert. Determine scene report you.','2023-07-23',NULL,NULL),(431,'Work.','Magazine former doctor government fine ok contain. Mention goal really. Including central effect.','2024-03-06',NULL,NULL),(432,'Hard.','Million similar tree together about beat. Identify five despite manage American also.','2023-08-17',NULL,NULL),(433,'Anyone.','Their involve board kitchen may while. Message learn study security because. Never range population value loss create party.','2024-02-08',NULL,NULL),(434,'Strong.','Range place dinner accept. Sister challenge drug good pull different.','2023-08-22',NULL,NULL),(435,'Market.','Career big interesting three.','2024-03-31',NULL,NULL),(436,'Strong.','Yet material something simple the PM.','2023-05-21',NULL,NULL),(437,'Oil.','All month central boy. Drop person physical wind it happen four. Medical set camera source hold total data.','2023-12-19',NULL,NULL),(438,'Represent.','Image thousand value. His seat less nor thus fish. In left scene happy.','2024-05-12',NULL,NULL),(439,'Low.','Case clearly seek second. Camera test would arrive appear herself avoid.','2024-05-10',NULL,NULL),(440,'Care.','Page water interest person beyond. Resource manage education behavior prepare.','2023-08-07',NULL,NULL),(441,'Team.','Use sea include about image crime she. Call difference operation manager research its two.','2023-11-29',NULL,NULL),(442,'People.','Service environment all option bad put just keep. Fast point there analysis natural. Crime point ball.','2023-12-19',NULL,NULL),(443,'Concern.','Group respond ask. Operation million trouble. Act subject spring before its. Far daughter article many down rich.','2023-06-29',NULL,NULL),(444,'Prove.','Allow certainly for either modern. Paper brother office field management wish.','2023-08-08',NULL,NULL),(445,'Range.','Our matter establish themselves fund those yard girl. Society hospital hotel but oil work low.','2023-05-16',NULL,NULL),(446,'Without.','Management tough check cold. None artist dream several. Wear early interesting report.','2023-12-20',NULL,NULL),(447,'Grow.','Stop raise adult smile can range. Cell suffer think continue vote protect game.','2024-04-30',NULL,NULL),(448,'Say.','Until participant employee write. When operation model not some own bring.','2023-05-23',NULL,NULL),(449,'Be.','List instead family design. Join general dinner decade sing daughter.','2023-09-27',NULL,NULL),(450,'Dog.','Various ability race. Hour nation open result partner offer budget fall. Person author newspaper read leg occur. Heavy police market blue picture fire ask light.','2024-05-04',NULL,NULL),(451,'Nice.','Campaign card early wish benefit pattern before. Dark time industry source relate before. Throw investment themselves understand up morning model. Establish Democrat official get possible rule society Congress.','2023-12-26',NULL,NULL),(452,'Picture.','Story student agency and bag east public. Free base whom scientist address toward.','2024-02-05',NULL,NULL),(453,'Side.','New safe so Republican care prepare. Night candidate church scene. Care turn these middle fall.','2023-11-17',NULL,NULL),(454,'Sister.','Yourself vote quite knowledge strong consumer indicate. Hear Republican environment beautiful outside. Standard history production artist never difference.','2023-10-30',NULL,NULL),(455,'Pretty.','Service throw movie even. Child in relate. Evening cultural give president goal.','2024-01-08',NULL,NULL),(456,'Team.','Individual these sit main outside commercial support. Rate central fall make thought enjoy. Color garden reach our meeting write plan base.','2023-11-14',NULL,NULL),(457,'Everybody.','Sell upon despite weight. Model Mrs recently off. They son human long his identify.','2023-09-25',NULL,NULL),(458,'Growth.','Final approach course nor case. Use show history anyone save interest give dinner.','2023-09-19',NULL,NULL),(459,'Born.','Keep these dream. Community leader its.','2023-12-12',NULL,NULL),(460,'We.','Able our oil artist natural guy. Produce sister risk race base woman. Law history organization cause.','2023-05-15',NULL,NULL),(461,'Especially.','Involve health prepare focus increase author. Manage if effort tough member.','2023-06-25',NULL,NULL),(462,'Skin.','Top something building team good. Interest outside perhaps not contain face argue.','2024-03-12',NULL,NULL),(463,'Nice.','Again kid scientist watch similar. Fill agent send someone. Ready claim rich chair kitchen anything. Enjoy hit become entire.','2024-05-11',NULL,NULL),(464,'Later.','Thank wind industry. Moment top modern drug knowledge. Suffer rest result toward as line visit.','2023-10-05',NULL,NULL),(465,'Analysis.','Question window sure expert. Later wrong myself important improve money simply. Story market girl season least across.','2023-08-08',NULL,NULL),(466,'Language.','She century film raise employee political share. View pressure indicate professional machine start.','2024-01-28',NULL,NULL),(467,'Article.','Scene care other rock son way. Long together everyone store matter. Score young road close serious.','2023-10-17',NULL,NULL),(468,'Respond.','Agent we so huge inside. Pretty executive single plant model. Brother military official determine three interview.','2023-12-13',NULL,NULL),(469,'Wonder.','Past because both surface moment leg. Responsibility government experience world everybody yard sense. Including never bank push.','2023-10-27',NULL,NULL),(470,'Cost.','Effect bill cultural beautiful air. Especially mind these from above.','2024-03-28',NULL,NULL),(471,'Game.','Born break quickly summer war dog. Myself building save anything usually that option. Wall crime me its environment various.','2024-01-23',NULL,NULL),(472,'Because.','Claim owner quality. Avoid practice away heavy audience. Receive current similar physical develop finally career.','2023-07-05',NULL,NULL),(473,'Participant.','Call four have notice top ahead dream large. Ask cost town also concern marriage.','2023-12-25',NULL,NULL),(474,'Material.','Bag industry billion force little pay. Town my grow without. Of debate morning catch.','2024-01-10',NULL,NULL),(475,'Area.','Suggest education anyone look tend music. Admit growth question goal bad American bank walk. Let floor fund young employee smile pattern body.','2024-02-13',NULL,NULL),(476,'Kitchen.','Drive level common force surface then professional. Fight food expert professional. Bad former single whole admit.','2023-06-01',NULL,NULL),(477,'Keep.','Beat design world operation something once very. Better across support six protect impact lay race. None fact fill road prove give toward.','2023-06-23',NULL,NULL),(478,'Former.','Join year thought. With son young mind his blue assume.','2023-07-20',NULL,NULL),(479,'Exist.','Impact single leader structure even identify exactly. Else change side challenge soldier. Also thank couple trip trial store meet television. Reflect newspaper environment.','2023-11-03',NULL,NULL),(480,'Current.','Responsibility machine time rock really four particularly. Allow send true. Until age list now international property bit.','2023-09-04',NULL,NULL),(481,'List.','Say win stand television necessary five. Page on talk while trial region cost. Chance push finally board bring.','2024-04-09',NULL,NULL),(482,'Again.','Develop little listen guy collection. Lead body dream realize trade college tend.','2023-05-12',NULL,NULL),(483,'Form.','Bring morning establish treatment must cup. Lose involve hair drop home analysis inside.','2023-07-31',NULL,NULL),(484,'Away.','Training fine else character. Interview often story.','2023-05-19',NULL,NULL),(485,'Loss.','Clear yeah challenge popular ten people. Then position particularly either whether analysis job. Imagine money court.','2023-08-22',NULL,NULL),(486,'Unit.','Action write throughout give follow off somebody. Easy understand wear wrong control military different respond. Recent often college mother seem early measure.','2024-01-18',NULL,NULL),(487,'Factor.','Last operation instead environmental. Cost reveal enough no.','2024-02-09',NULL,NULL),(488,'Later.','Whatever attorney animal. Build investment hour player way.','2023-11-10',NULL,NULL),(489,'Physical.','Pull ever economy part choose thousand discussion budget. End study necessary development technology.','2023-09-21',NULL,NULL),(490,'Whole.','Per take east federal strategy activity thought. Newspaper glass occur artist former long. Admit information second career.','2023-11-29',NULL,NULL),(491,'Baby.','Notice cold candidate in. Enough onto finally school.','2023-11-10',NULL,NULL),(492,'Poor.','National factor lose manager. Yeah forget indicate crime understand through.','2023-10-25',NULL,NULL),(493,'Care.','Feeling idea condition majority some let prepare help. Three attention anything money.','2024-03-21',NULL,NULL),(494,'Treatment.','Somebody decade my here. Third try lot. But soon usually shake. Indicate act they return it subject.','2024-03-23',NULL,NULL),(495,'Agreement.','Particular know market describe would shake. Development food mission enough. Then article next model ball.','2024-03-04',NULL,NULL),(496,'Buy.','Bad protect throw no though several. Ever show law their class nice interview require.','2023-05-25',NULL,NULL),(497,'Hand.','Hot black relate marriage PM her hold. Look wide future smile into important military.','2024-03-08',NULL,NULL),(498,'Future.','Almost avoid she and leg man ten move. Federal so hit save point information force young.','2023-05-15',NULL,NULL),(499,'Civil.','Level cup interest. It how meeting development two author itself. Couple room prove improve fill development against.','2024-03-04',NULL,NULL),(500,'Here.','Peace suffer head own. Himself high think remain history environmental shake. Behind central hold war prepare attention.','2023-09-27',NULL,NULL),(501,'Bill.','Teacher there view Mr a. Important national develop husband.','2024-03-16',NULL,NULL),(502,'True.','None weight she brother. Indicate bar create decide. Accept when while.','2024-04-27',NULL,NULL),(503,'She.','Interview person character. Prove none whole answer evening. Ten company structure crime letter station.','2023-10-17',NULL,NULL);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contenido` (
  `idContenido` int NOT NULL AUTO_INCREMENT,
  `idSubtema` int NOT NULL,
  `contenido` text COLLATE utf8mb4_general_ci NOT NULL,
  `ilustracion` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idContenido`),
  KEY `FK_idSubtema` (`idSubtema`),
  CONSTRAINT `FK_idSubtema` FOREIGN KEY (`idSubtema`) REFERENCES `subtema` (`idSubtema`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido`
--

LOCK TABLES `contenido` WRITE;
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curso` (
  `idCurso` int NOT NULL AUTO_INCREMENT,
  `instructor` int NOT NULL,
  `idCategoria` int NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `duracion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `objetivo` text COLLATE utf8mb4_general_ci NOT NULL,
  `estatus` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `ilustracion` text COLLATE utf8mb4_general_ci,
  `visibilidad` float NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (82,37,325,'Curso de Marketing Digital',' Este curso cubre las estrategias y herramientas esenciales para el marketing en línea, incluyendo SEO, SEM, redes sociales y marketing de contenidos.','11w','2024-05-07','2024-06-03','Capacitar a los estudiantes para desarrollar y ejecutar campañas de marketing digital efectivas que aumenten la visibilidad y el engagement de una marca en línea.','Activo','https://concepto.de/wp-content/uploads/2018/04/base-de-datos-min-e1523470739502.jpg',3,'2024-12-12',NULL,NULL),(84,28,3,'Curso de Diseño Gráfico',' Un curso que enseña los fundamentos del diseño visual, incluyendo el uso de software como Adobe Photoshop e Illustrator.','13w','2024-12-12','2024-12-12','Proveer a los estudiantes con las habilidades necesarias para crear diseños visualmente atractivos y efectivos para diversas aplicaciones, desde branding hasta publicidad.','Activo','https://imgs.search.brave.com/zAIMlrKiiPhkH9gwFlX9fLHEkhzAkO1Svt-Xou3Dt_Q/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/ZWR4Lm9yZy9jb250/ZW50ZnVsL2lpOWVo/ZGNqODhiYy8yaTZV/d3BLeGlRNHVrbDdp/S1gwdEhpL2RiZjc1/Y2I0YWIzNGE0OTU5/ZGQyNDRhMjUzMzA1/OGY2L2FwcmVuZGVf/YW5hbGlzaXNfZGVf/ZGF0b3MuanBnP3c9/NTA5Jmg9MzM5JnE9/NTAmZm09d2VicA',4,'0000-00-00',NULL,NULL),(87,28,1,'Python',' Este curso introduce a los estudiantes en la programación utilizando Python, uno de los lenguajes más populares y versátiles.','1w','2024-04-29','2024-05-29','Enseñar los conceptos básicos de programación y desarrollo de software utilizando Python, incluyendo variables, estructuras de control, funciones y manejo de archivos.','Activo','https://i.blogs.es/1d8a5b/python1/1366_2000.jpg',1,'0000-00-00',NULL,NULL),(88,38,1,'Curso de Inteligencia Artificial','Un curso introductorio que explora los conceptos fundamentales de la inteligencia artificial y sus aplicaciones en diversos campos.','9w','2024-05-15','2024-06-07','Enseñar a los estudiantes los principios y técnicas básicas de la inteligencia artificial, incluyendo aprendizaje automático y procesamiento de lenguaje natural.','Activo','https://bit.ly/4bD5zwJ',1,'0000-00-00',NULL,NULL),(92,28,499,'Introducción a la Administración','Las organizaciones en su dimensión de entes económicos y sociales ','6w','2024-05-21','2024-06-02','Obtener nuevos conocimientos','Activo','https://adrianamartinezescobar.weebly.com/uploads/1/0/0/2/100297142/published/adminsistemas.png?1488492540',1,'0000-00-00',NULL,NULL),(93,29,3,'Curso de analítica de datos','Este curso aborda los temas y bases necesarias para iniciar tu camino hacia la analítica de datos','9w','2024-04-29','2024-06-10','Fomentar el aprendizaje sobre los diversos temas de la analítica de datos','Activo','https://imgs.search.brave.com/trbHLWZy0JPFkoXvfM6Bi1rzvGQy2mj-mtCLs3luArU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly91bml2/ZXJzaWRhZGV1cm9w/ZWEuY29tL3Jlc291/cmNlcy9tZWRpYS9p/bWFnZXMvcXVlLWVz/dHVkaWFyLXBhcmEt/c2VyLWFuYWxpc3Rh/LWRlLWRhdG9zLTgw/MHg0NS53aWR0aC02/NDAuanBn',0,'0000-00-00',NULL,NULL);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso_usuario`
--

DROP TABLE IF EXISTS `curso_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curso_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCurso` int NOT NULL,
  `idUsuario` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_curso01` (`idCurso`),
  KEY `FK_usuario01` (`idUsuario`),
  CONSTRAINT `FK_curso01` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  CONSTRAINT `FK_usuario01` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso_usuario`
--

LOCK TABLES `curso_usuario` WRITE;
/*!40000 ALTER TABLE `curso_usuario` DISABLE KEYS */;
INSERT INTO `curso_usuario` VALUES (20,87,28,'2024-05-21','2024-05-21',NULL),(21,92,28,'2024-05-21','2024-05-21',NULL),(22,92,40,'2024-05-21','2024-05-21',NULL),(23,87,41,'2024-05-21','2024-05-21',NULL),(24,82,29,'2024-05-21','2024-05-21',NULL),(25,87,29,'2024-05-21','2024-05-21',NULL);
/*!40000 ALTER TABLE `curso_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infoUsuario`
--

DROP TABLE IF EXISTS `infoUsuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `infoUsuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_Usuario` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `sede` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infoUsuario`
--

LOCK TABLES `infoUsuario` WRITE;
/*!40000 ALTER TABLE `infoUsuario` DISABLE KEYS */;
INSERT INTO `infoUsuario` VALUES (22,2,'Moisés','Ramón','Esteban','2312323725','Tlatauquitepec','2024-04-22','2024-05-21',NULL),(26,23,'Moi','Ramon','Esteban','2312323725','Tlatauquitepec','2024-05-18','2024-05-18',NULL),(27,24,'Moi','Moi','Moi','1234567890','Teziutlán','2024-05-18','2024-05-18',NULL),(28,25,'moi','mojoij','ksldnfl','1234567890','Teziutlán','2024-05-18','2024-05-18',NULL),(29,26,'Prueba','Prueba','Prueba','1234567890','Teziutlán','2024-05-18','2024-05-18',NULL),(30,27,'Moi','Este','Ram','1234567890','Teziutlán','2024-05-18','2024-05-18',NULL),(31,28,' Guadalupe','García ','Toribio','231288725','Teteles','2024-05-19','2024-05-21',NULL),(32,29,'Edgar','Degante','Aguilar ','2828223237','Teteles','2024-05-19','2024-05-21',NULL),(33,30,'NATALIA LIZETH','Guerrero ','Avila','2312992372','Teziutlán','2024-05-19','2024-05-21',NULL),(34,33,'Juan Pablo ','Torres','Gutierrez','2313702532','Hueyapan','2024-05-21','2024-05-21',NULL),(35,34,'LIZBETH ANDREA','Perdomo','González ','2312323725','Teteles','2024-05-21','2024-05-21',NULL),(36,35,' ISANAMI ALFREDO ','Tiopan','Paredes','2312321788','Hueyapan','2024-05-21','2024-05-21',NULL),(38,37,'Adrian','Pérez ','López ','2933627892','Hueyapan','2024-05-21','2024-05-21',NULL),(39,38,'Patricia','Ochoa','Trujillo','1234567120','Teziutlán','2024-05-21','2024-05-21',NULL),(40,39,'MOISES DAVID','RAMON','ESTEBAN','2312323725','Teteles','2024-05-21','2024-05-21',NULL),(41,40,'MOISES DAVID','RAMON','ESTEBAN','2312323725','Teteles','2024-05-21','2024-05-21',NULL),(42,41,'MOISES DAVID','RAMON','ESTEBAN','2312323725','Teteles','2024-05-21','2024-05-21',NULL);
/*!40000 ALTER TABLE `infoUsuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resetpass`
--

DROP TABLE IF EXISTS `resetpass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resetpass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pregunta` text COLLATE utf8mb4_general_ci NOT NULL,
  `idUsuario` int NOT NULL,
  `identificador` int NOT NULL,
  `respuesta` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario02` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resetpass`
--

LOCK TABLES `resetpass` WRITE;
/*!40000 ALTER TABLE `resetpass` DISABLE KEYS */;
INSERT INTO `resetpass` VALUES (2,'¿Cuál es el nombre de la primera mascota que tuviste?',36,12345,'$2y$10$gyAMu9WKbC1UGjDe/DdEMeIxMd8Y.O.OOm3xVC4CgN4mpt17piFHi','2024-05-21','2024-05-21','0000-00-00'),(3,'¿Cuál fue tu primer empleo?',39,842161,'$2y$10$hHWY0vGcYzaj/VjZzxfAAuHx48.yJSH.w/2VyDC/uRSZiIp0i2ldS','2024-05-21','2024-05-21','0000-00-00'),(4,'¿Cuál es el nombre de la primera mascota que tuviste?',40,2222,'$2y$10$GoHebxl0NzLlyroYSnViZerlZWx2RR9hLXzonrn78yMRnHDwj3qOW','2024-05-21','2024-05-21','0000-00-00'),(5,'¿Cuál es tu pasatiempo favorito?',41,842162,'$2y$10$JICAgJkrk/8BcQ5dLS3p2eyIy9.dllN9qYYaf77X946G3fpofUnFm','2024-05-21','2024-05-21','0000-00-00');
/*!40000 ALTER TABLE `resetpass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtema`
--

DROP TABLE IF EXISTS `subtema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subtema` (
  `idSubtema` int NOT NULL AUTO_INCREMENT,
  `idTema` int NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ilustracion` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idSubtema`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtema`
--

LOCK TABLES `subtema` WRITE;
/*!40000 ALTER TABLE `subtema` DISABLE KEYS */;
INSERT INTO `subtema` VALUES (19,31,'Sintaxis básica y variables','https://bit.ly/3yqMwqR','Introducción a la sintaxis de Python, declaración y uso de variables, tipos de datos básicos (números, cadenas, booleanos).','2024-05-21','2024-05-21',NULL),(20,31,'Sintaxis básica y variables','https://bit.ly/3yqMwqR','Introducción a la sintaxis de Python, declaración y uso de variables, tipos de datos básicos (números, cadenas, booleanos).','2024-05-21','2024-05-21',NULL),(21,32,'Clases y objetos','https://bit.ly/3yqMwqR','Definición de clases, creación de objetos, atributos y métodos.','2024-05-21','2024-05-21',NULL),(22,32,'Herencia y polimorfismo','https://bit.ly/3yqMwqR',': Conceptos de herencia, superclases y subclases, uso de polimorfismo y métodos sobrescritos.','2024-05-21','2024-05-21',NULL),(23,33,'Optimización On-Page','https://bit.ly/3yqMwqR','Técnicas para mejorar el contenido y la estructura de una página web, uso de palabras clave, etiquetas HTML, y enlaces internos.','2024-05-21','2024-05-21',NULL),(24,33,'Optimización Off-Page','https://bit.ly/3yqMwqR',' Estrategias de link building, gestión de la reputación en línea, y uso de redes sociales para mejorar la autoridad del dominio.','2024-05-21','2024-05-21',NULL),(25,35,'Principios básicos de seguridad:','https://bit.ly/3yqMwqR',' Conceptos clave como confidencialidad, integridad, disponibilidad, autenticación y autorización.','2024-05-21','2024-05-21',NULL),(26,35,'Amenazas y vulnerabilidades:','https://bit.ly/3yqMwqR','Tipos comunes de amenazas (malware, phishing, ataques de fuerza bruta) y cómo identificar vulnerabilidades en sistemas y redes.\r\n','2024-05-21','2024-05-21',NULL),(27,37,'Tipografía y composición:','https://bit.ly/3yqMwqR','Estudio de la selección y uso adecuado de fuentes tipográficas, así como la composición de elementos textuales en un diseño.','2024-05-21','2024-05-21',NULL),(28,37,'Teoría del color','https://bit.ly/3yqMwqR','Exploración de la psicología del color, combinaciones armoniosas y contraste para transmitir emociones y mensajes efectivos.','2024-05-21','2024-05-21',NULL),(29,38,'Adobe Illustrato','https://bit.ly/3yqMwqR',': Introducción al uso de Illustrator para la creación de gráficos vectoriales, ilustraciones y diseño de logotipos.','2024-05-21','2024-05-21',NULL),(30,38,'Adobe Photoshop','https://bit.ly/3yqMwqR','Fundamentos de Photoshop para el retoque de imágenes, composición fotográfica y diseño gráfico digital.','2024-05-21','2024-05-21',NULL),(31,39,'Tokenización y Preprocesamiento','https://bit.ly/3yqMwqR','Técnicas para dividir el texto en unidades significativas (tokens) y realizar tareas de preprocesamiento como eliminación de stop words y lematización.','2024-05-21','2024-05-21',NULL),(32,39,'Modelos de NLP','https://bit.ly/3yqMwqR','ntroducción a modelos de procesamiento del lenguaje natural como bolsa de palabras (Bag of Words), modelos de lenguaje de Transformer, y redes neuronales recurrentes (RNN) para tareas como análisis de sentimientos y generación de texto.','2024-05-21','2024-05-21',NULL),(33,31,'¿Cuáles son las características de Python?','https://bit.ly/3yqMwqR','Las características siguientes del lenguaje de programación Python lo hacen único:\r\n\r\nUn lenguaje interpretado\r\nPython es un lenguaje interpretado, lo que significa que ejecuta directamente el código línea por línea. Si existen errores en el código del programa, su ejecución se detiene. Así, los programadores pueden encontrar errores en el código con rapidez.\r\n\r\nUn lenguaje fácil de utilizar\r\nPython utiliza palabras similares a las del inglés. A diferencia de otros lenguajes de programación, Python no utiliza llaves. En su lugar, utiliza sangría. \r\n\r\nUn lenguaje tipeado dinámicamente\r\nLos programadores no tienen que anunciar tipos de variables cuando escriben código porque Python los determina en el tiempo de ejecución. Debido a esto, es posible escribir programas de Python con mayor rapidez.\r\n\r\nUn lenguaje de alto nivel\r\nPython es más cercano a los idiomas humanos que otros lenguajes de programación. Por lo tanto, los programadores no deben preocuparse sobre sus funcionalidades subyacentes, como la arquitectura y la administración de la memoria.\r\n\r\nUn lenguaje orientado a los objetos\r\nPython considera todo como un objeto, pero también admite otros tipos de programación, como la programación estructurada y la funcional.','2024-05-21','2024-05-21',NULL),(34,43,'TEORÍA DE LA ADMINISTRACIÓN DE SISTEMAS.','https://bit.ly/3yuCsxg','La teoría de las organizaciones y la práctica administrativa han experimentado\r\ncambios sustanciales en años recientes. La información proporcionada por las\r\nciencias de la administración y la conducta ha enriquecido a la teoría\r\ntradicional. Estos esfuerzos de investigación y de conceptualización a veces\r\nhan llevado a descubrimientos divergentes. De esta forma surgió un enfoque\r\nque puede servir como base para lograrla convergencia, el enfoque de\r\nsistemas, que facilita la unificación de muchos campos del conocimiento. Dicho\r\nenfoque ha sido usado por las ciencias físicas, biológicas y sociales, como\r\nmarco de referencia para la integración de la teoría organizacional moderna.\r\nEl primer expositor de la Teoría General de los Sistemas fue Ludwing von\r\nBertalanffy, en el intento de lograr una metodología integradora para el\r\ntratamiento de problemas científicos.\r\nLa meta de la Teoría General de los Sistemas no es buscar analogías entre las\r\nciencias, sino tratar de evitar la superficialidad científica que ha estancado a las\r\nciencias. Para ello emplea como instrumento, modelos utilizables y transferibles\r\nentre varios continentes científicos, toda vez que dicha extrapolación sea\r\nposible e integrable a las respectivas disciplinas.\r\nLa Teoría General de los Sistemas se basa en dos pilares básicos: aportes\r\nsemánticos y aportes metodológicos, a los cuales me referiero en las próximas\r\npáginas.\r\nSistema:\r\nEs un conjunto organizado de cosas o partes interactuantes e\r\ninterdependientes, que se relacionan formando un todo unitario y complejo.\r\nCabe aclarar que las cosas o partes que componen al sistema, no se refieren al\r\ncampo físico (objetos), sino mas bien al funcional. De este modo las cosas o\r\npartes pasan a ser funciones básicas realizadas por el sistema. Podemos\r\nenumerarlas en: entradas, procesos y salidas.\r\nEntradas:\r\nLas entradas son los ingresos del sistema que pueden ser recursos materiales,\r\nrecursos humanos o información.\r\nLas entradas constituyen la fuerza de arranque que suministra al sistema sus\r\nnecesidades operativas.\r\nLas entradas pueden ser:\r\n- en serie: es el resultado o la salida de un sistema anterior con el cual el\r\nsistema en estudio está relacionado en forma directa.\r\n','2024-05-21','2024-05-21',NULL),(35,46,'Moises',NULL,'dESC','2024-05-21','2024-05-21',NULL);
/*!40000 ALTER TABLE `subtema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tema` (
  `idTema` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `idCurso` int NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `ilustracion` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`idTema`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (31,'Fundamentos de Python',87,'Introducción a la sintaxis de Python, declaración y uso de variables, tipos de datos básicos (números, cadenas, booleanos).','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(32,'Programación Orientada a Objetos (POO) en Python',87,'Conceptos de herencia, superclases y subclases, uso de polimorfismo y métodos sobrescritos.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(33,'SEO (Search Engine Optimization)',82,'Técnicas para mejorar el contenido y la estructura de una página web, uso de palabras clave, etiquetas HTML, y enlaces internos.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(34,'Marketing en Redes Sociales',82,'Creación y planificación de contenido para diferentes plataformas sociales, tipos de contenido (visual, texto, video), y programación de publicaciones.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(35,'Fundamentos de Seguridad Informática',81,' Conceptos clave como confidencialidad, integridad, disponibilidad, autenticación y autorización.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(36,'Seguridad en Redes',81,'Herramientas y técnicas para monitorear el tráfico de red y detectar actividades sospechosas o intrusiones, sistemas de prevención de intrusiones (IPS).','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(37,'Principios Fundamentales del Diseño',84,'Tipografía y composición: Estudio de la selección y uso adecuado de fuentes tipográficas, así como la composición de elementos textuales en un diseño.\r\nTeoría del color: Exploración de la psicología del color, combinaciones armoniosas y contraste para transmitir emociones y mensajes efectivos.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(38,'Herramientas y Software de Diseño Gráfico',84,'Adobe Illustrator: Introducción al uso de Illustrator para la creación de gráficos vectoriales, ilustraciones y diseño de logotipos.\r\nAdobe Photoshop: Fundamentos de Photoshop para el retoque de imágenes, composición fotográfica y diseño gráfico digital.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(39,'Aprendizaje Automático (Machine Learning)',88,'Supervisado vs. No Supervisado: Exploración de los distintos tipos de aprendizaje automático, incluyendo algoritmos supervisados (regresión, clasificación) y no supervisados (agrupamiento, reducción de dimensionalidad).\r\nEvaluación de Modelos: Métodos para evaluar el rendimiento de los modelos de aprendizaje automático, incluyendo métricas como precisión, recall, y curvas ROC.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(40,'Procesamiento del Lenguaje Natural (NLP)',88,'Tokenización y Preprocesamiento: Técnicas para dividir el texto en unidades significativas (tokens) y realizar tareas de preprocesamiento como eliminación de stop words y lematización.\r\nModelos de NLP: Introducción a modelos de procesamiento del lenguaje natural como bolsa de palabras (Bag of Words), modelos de lenguaje de Transformer, y redes neuronales recurrentes (RNN) para tareas como análisis de sentimientos y generación de texto.','https://bit.ly/44Q4sYi','2024-05-21','2024-05-21',NULL),(43,'¿QUÉ ES LA ADMINISTRACIÓN? ',92,'Son ciencias administrativas o ciencias económicas y financieras, la\r\ncontabilidad, las finanzas corporativas y la mercadotecnia, la administración, la\r\ndirección estratégica etc.\r\nEn pocas palabras se puede decir que administrar es planear, organizar,\r\ndirigir y controlar todos los recursos de un ente económico para alcanzar\r\nunos fines claramente determinados. Se apoya en otras ciencias como la\r\neconomía, el derecho y la contabilidad para poder ejercer sus funciones. ','https://alumnos.cobachbcs.edu.mx/wp-content/uploads/2018/09/administracion-I.jpg','2024-05-21','2024-05-21',NULL),(46,'Tema de prueba',93,'Desc','https://bit.ly/3QWpA9z','2024-05-21','2024-05-21',NULL);
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identificador` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `perfil` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'84216',1,'moisesRamon@gmail.com','$2y$10$sRBdtMqXnwg1PzpgeJDX6eWUFmn.5SdOtZ1gBOg2.00k.5art6MSq',1,'2024-04-27 21:32:37','2024-05-21 09:48:26',NULL),(28,'4444',4,'GuaTo@gmail.com','$2y$10$DO5DviZdqrAJtGaNq4WKiuKPFriAh/d6tivn8lEguwfiOKjXwR.gW',1,'2024-05-19 18:12:50','2024-05-21 10:00:15',NULL),(29,'3333',3,'EdgarAgui@gmail.com','$2y$10$I/qDkln4QLukfQxlE0NddebmCEuAGzr8axhiPRYjxhuNMd4n3dusW',1,'2024-05-19 19:16:26','2024-05-21 10:01:28',NULL),(30,'20205',2,'NataGUe@gmail.com','$2y$10$q2Do6.EEwZxUIppMxp9TTuQ3FbW5RYUCfajjksBhTvKzM49RVmjRq',1,'2024-05-19 20:45:13','2024-05-21 09:55:41',NULL),(33,'848282',2,'juanpa@gmail.com','$2y$10$dUyETNe.NLsfvIe0ffdCSOLbsLxSmF8Buaoe86MsjUWkDcWMKGORq',1,'2024-05-21 02:33:21','2024-05-21 09:56:31',NULL),(34,'2121611',2,'LizBTH1@gmail.com','$2y$10$94VtCCY8BAAlosN2oUNE1egp/yKRyzA.2SoDCj7M761USPwBE23Sm',1,'2024-05-21 03:30:57','2024-05-21 09:57:29',NULL),(35,'27282',2,'isaaana@gmail.com','$2y$10$H7fZTjjNQa1JEXfR1JiGiewEFhl8KDHf02vXsk2cBvME8.GWFmdLq',1,'2024-05-21 04:07:28','2024-05-21 09:58:38',NULL),(37,'8887',3,'AdriaPe@gmail.com','$2y$10$9IRrQB2hZAylYY5aPCjjEul7vGixVQUkkQhdJsEmUZnkzQWv0XhBG',1,'2024-05-21 10:02:51','2024-05-21 10:02:51',NULL),(38,'6666',3,'PatiOchoa@gmail.com','$2y$10$ZbabljozGsnoAWA/iAo74.3kgyWG.PUGOnwJevekYhXZ2YYn2HzVS',1,'2024-05-21 10:04:43','2024-05-21 10:04:43',NULL),(39,'842161',2,'masemoyv1@gmail.com','$2y$10$c38n..gcZivIslVrIijVKucOmHxJZF63uRo7TOGPCzSrlwgLhmH4e',1,'2024-05-21 18:29:14','2024-05-21 18:29:14',NULL),(40,'2222',2,'estudiante@gmail.com','$2y$10$RCqhMiXvIr.FHkS.ZlrMNu8ELRZtiZ6V40oTzaByUaAcnNjPMUx46',1,'2024-05-21 18:35:14','2024-05-21 18:36:14',NULL),(41,'842162',2,'masemoyyyv1@gmail.com','$2y$10$klphG1lRqzAFEBG/grLfmu8YeuXg5YjL5hmgcdl4VhPbkel2h4LLi',1,'2024-05-21 19:43:02','2024-05-21 19:43:02',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-25 19:59:55
