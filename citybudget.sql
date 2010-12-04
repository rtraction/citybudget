# Sequel Pro dump
# Version 1630
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.0.51b)
# Database: ldnbudget
# Generation Time: 2010-12-04 11:40:16 -0500
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table amounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `amounts`;

CREATE TABLE `amounts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `program` varchar(45) NOT NULL,
  `amount` float NOT NULL,
  `grouping` varchar(140) NOT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `type` enum('approved','actual') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5531 DEFAULT CHARSET=latin1;

LOCK TABLES `amounts` WRITE;
/*!40000 ALTER TABLE `amounts` DISABLE KEYS */;
INSERT INTO `amounts` (`id`,`program`,`amount`,`grouping`,`organization_id`,`year`,`type`)
VALUES
	(5311,'Department Administration',1001,'',661,2008,'actual'),
	(5312,'Department Administration',1038,'',661,2009,'approved'),
	(5313,'Department Administration',1005,'',661,2009,'actual'),
	(5314,'Department Administration',1005,'',661,2010,'approved'),
	(5315,'Audit, Risk and Management Support',864,'Corporate Management',661,2008,'actual'),
	(5316,'Audit, Risk and Management Support',1299,'Corporate Management',661,2009,'approved'),
	(5317,'Audit, Risk and Management Support',896,'Corporate Management',661,2009,'actual'),
	(5318,'Audit, Risk and Management Support',1108,'Corporate Management',661,2010,'approved'),
	(5319,'Corporate Communication',735,'Corporate Management',661,2008,'actual'),
	(5320,'Corporate Communication',816,'Corporate Management',661,2009,'approved'),
	(5321,'Corporate Communication',799,'Corporate Management',661,2009,'actual'),
	(5322,'Corporate Communication',799,'Corporate Management',661,2010,'approved'),
	(5323,'Culture Office',1659,'Corporate Management',661,2008,'actual'),
	(5324,'Culture Office',1939,'Corporate Management',661,2009,'approved'),
	(5325,'Culture Office',1949,'Corporate Management',661,2009,'actual'),
	(5326,'Culture Office',1999,'Corporate Management',661,2010,'approved'),
	(5327,'Human Resources',2739,'',661,2008,'actual'),
	(5328,'Human Resources',2819,'',661,2009,'approved'),
	(5329,'Human Resources',2786,'',661,2009,'actual'),
	(5330,'Human Resources',2786,'',661,2010,'approved'),
	(5331,'Corporate & Strategic Initiatives',995,'',661,2008,'actual'),
	(5332,'Corporate & Strategic Initiatives',752,'',661,2009,'approved'),
	(5333,'Corporate & Strategic Initiatives',408,'',661,2009,'actual'),
	(5334,'Corporate & Strategic Initiatives',408,'',661,2010,'approved'),
	(5335,'Corporate Law',2073,'',661,2008,'actual'),
	(5336,'Corporate Law',2467,'',661,2009,'approved'),
	(5337,'Corporate Law',2440,'',661,2009,'actual'),
	(5338,'Corporate Law',2441,'',661,2010,'approved'),
	(5339,'Administration',2056,'Parks & Recreation',662,2008,'actual'),
	(5340,'Administration',0,'Parks & Recreation',662,2009,'approved'),
	(5341,'Administration',2404,'Parks & Recreation',662,2009,'actual'),
	(5342,'Administration',2400,'Parks & Recreation',662,2010,'approved'),
	(5343,'Storybook Gardens',385,'Parks & Recreation',662,2008,'actual'),
	(5344,'Storybook Gardens',0,'Parks & Recreation',662,2009,'approved'),
	(5345,'Storybook Gardens',161,'Parks & Recreation',662,2009,'actual'),
	(5346,'Storybook Gardens',122,'Parks & Recreation',662,2010,'approved'),
	(5347,'Golf Courses',0,'Parks & Recreation',662,2008,'actual'),
	(5348,'Golf Courses',0,'Parks & Recreation',662,2009,'approved'),
	(5349,'Golf Courses',-228,'Parks & Recreation',662,2009,'actual'),
	(5350,'Golf Courses',-113,'Parks & Recreation',662,2010,'approved'),
	(5351,'Community Centres',-15,'Parks & Recreation',662,2008,'actual'),
	(5352,'Community Centres',0,'Parks & Recreation',662,2009,'approved'),
	(5353,'Community Centres',-26,'Parks & Recreation',662,2009,'actual'),
	(5354,'Community Centres',-20,'Parks & Recreation',662,2010,'approved'),
	(5355,'Arenas',-3057,'Parks & Recreation',662,2008,'actual'),
	(5356,'Arenas',0,'Parks & Recreation',662,2009,'approved'),
	(5357,'Arenas',-3226,'Parks & Recreation',662,2009,'actual'),
	(5358,'Arenas',-3191,'Parks & Recreation',662,2010,'approved'),
	(5359,'Parks Operations',6702,'Parks & Recreation',662,2008,'actual'),
	(5360,'Parks Operations',0,'Parks & Recreation',662,2009,'approved'),
	(5361,'Parks Operations',6953,'Parks & Recreation',662,2009,'actual'),
	(5362,'Parks Operations',6907,'Parks & Recreation',662,2010,'approved'),
	(5363,'Recreation Operations',5421,'Parks & Recreation',662,2008,'actual'),
	(5364,'Recreation Operations',0,'Parks & Recreation',662,2009,'approved'),
	(5365,'Recreation Operations',4609,'Parks & Recreation',662,2009,'actual'),
	(5366,'Recreation Operations',4742,'Parks & Recreation',662,2010,'approved'),
	(5367,'Other (Special Events, Aquatics, Sports Servi',-200,'Parks & Recreation',662,2008,'actual'),
	(5368,'Other (Special Events, Aquatics, Sports Servi',0,'Parks & Recreation',662,2009,'approved'),
	(5369,'Other (Special Events, Aquatics, Sports Servi',566,'Parks & Recreation',662,2009,'actual'),
	(5370,'Other (Special Events, Aquatics, Sports Servi',460,'Parks & Recreation',662,2010,'approved'),
	(5371,'Administration',1215,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5372,'Administration',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5373,'Administration',1305,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5374,'Administration',1306,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5375,'Youth & Adult Programs',169,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5376,'Youth & Adult Programs',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5377,'Youth & Adult Programs',267,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5378,'Youth & Adult Programs',228,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5379,'Community Development Services',128,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5380,'Community Development Services',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5381,'Community Development Services',88,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5382,'Community Development Services',88,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5383,'Community Recreation & Senior Centers',477,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5384,'Community Recreation & Senior Centers',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5385,'Community Recreation & Senior Centers',463,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5386,'Community Recreation & Senior Centers',500,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5387,'Community Partnerships & Funding',2481,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5388,'Community Partnerships & Funding',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5389,'Community Partnerships & Funding',2702,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5390,'Community Partnerships & Funding',2729,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5391,'Children\'s Servoces Funding',163,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5392,'Children\'s Servoces Funding',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5393,'Children\'s Servoces Funding',163,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5394,'Children\'s Servoces Funding',163,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5395,'Child and Youth Agenda',0,'Neighbourhood & Childrens\'s Services',662,2008,'actual'),
	(5396,'Child and Youth Agenda',0,'Neighbourhood & Childrens\'s Services',662,2009,'approved'),
	(5397,'Child and Youth Agenda',600,'Neighbourhood & Childrens\'s Services',662,2009,'actual'),
	(5398,'Child and Youth Agenda',600,'Neighbourhood & Childrens\'s Services',662,2010,'approved'),
	(5399,'London CAReS',622,'Social & Community Support Services',662,2008,'actual'),
	(5400,'London CAReS',0,'Social & Community Support Services',662,2009,'approved'),
	(5401,'London CAReS',638,'Social & Community Support Services',662,2009,'actual'),
	(5402,'London CAReS',738,'Social & Community Support Services',662,2010,'approved'),
	(5403,'Anti-Poverty Initiatives',285,'Social & Community Support Services',662,2008,'actual'),
	(5404,'Anti-Poverty Initiatives',0,'Social & Community Support Services',662,2009,'approved'),
	(5405,'Anti-Poverty Initiatives',285,'Social & Community Support Services',662,2009,'actual'),
	(5406,'Anti-Poverty Initiatives',285,'Social & Community Support Services',662,2010,'approved'),
	(5407,'Day Program',15,'Long Term Care',662,2008,'actual'),
	(5408,'Day Program',0,'Long Term Care',662,2009,'approved'),
	(5409,'Day Program',1,'Long Term Care',662,2009,'actual'),
	(5410,'Day Program',0,'Long Term Care',662,2010,'approved'),
	(5411,'Rest Homes, Homemaker & Nursing',62,'Long Term Care',662,2008,'actual'),
	(5412,'Rest Homes, Homemaker & Nursing',0,'Long Term Care',662,2009,'approved'),
	(5413,'Rest Homes, Homemaker & Nursing',63,'Long Term Care',662,2009,'actual'),
	(5414,'Rest Homes, Homemaker & Nursing',67,'Long Term Care',662,2010,'approved'),
	(5415,'External Services',36,'Long Term Care',662,2008,'actual'),
	(5416,'External Services',0,'Long Term Care',662,2009,'approved'),
	(5417,'External Services',0,'Long Term Care',662,2009,'actual'),
	(5418,'External Services',0,'Long Term Care',662,2010,'approved'),
	(5419,'Dearness Home',4550,'Long Term Care',662,2008,'actual'),
	(5420,'Dearness Home',0,'Long Term Care',662,2009,'approved'),
	(5421,'Dearness Home',4732,'Long Term Care',662,2009,'actual'),
	(5422,'Dearness Home',4279,'Long Term Care',662,2010,'approved'),
	(5423,'Department Management',848,'',663,2008,'actual'),
	(5424,'Department Management',0,'',663,2009,'approved'),
	(5425,'Department Management',-169,'',663,2009,'actual'),
	(5426,'Department Management',-437,'',663,2010,'approved'),
	(5427,'Administrative Services',709,'',663,2008,'actual'),
	(5428,'Administrative Services',0,'',663,2009,'approved'),
	(5429,'Administrative Services',749,'',663,2009,'actual'),
	(5430,'Administrative Services',767,'',663,2010,'approved'),
	(5431,'Transportation Planning and Design',650,'Roads & Transportation',663,2008,'actual'),
	(5432,'Transportation Planning and Design',0,'Roads & Transportation',663,2009,'approved'),
	(5433,'Transportation Planning and Design',970,'Roads & Transportation',663,2009,'actual'),
	(5434,'Transportation Planning and Design',994,'Roads & Transportation',663,2010,'approved'),
	(5435,'Transportation and Roadside Operations',25945,'Roads & Transportation',663,2008,'actual'),
	(5436,'Transportation and Roadside Operations',0,'Roads & Transportation',663,2009,'approved'),
	(5437,'Transportation and Roadside Operations',23304,'Roads & Transportation',663,2009,'actual'),
	(5438,'Transportation and Roadside Operations',24819,'Roads & Transportation',663,2010,'approved'),
	(5439,'Parking',-2233,'Roads & Transportation',663,2008,'actual'),
	(5440,'Parking',0,'Roads & Transportation',663,2009,'approved'),
	(5441,'Parking',-2473,'Roads & Transportation',663,2009,'actual'),
	(5442,'Parking',-2268,'Roads & Transportation',663,2010,'approved'),
	(5443,'Traffic Signals',5397,'Roads & Transportation',663,2008,'actual'),
	(5444,'Traffic Signals',0,'Roads & Transportation',663,2009,'approved'),
	(5445,'Traffic Signals',6605,'Roads & Transportation',663,2009,'actual'),
	(5446,'Traffic Signals',6777,'Roads & Transportation',663,2010,'approved'),
	(5447,'Geomatics',796,'Roads & Transportation',663,2008,'actual'),
	(5448,'Geomatics',0,'Roads & Transportation',663,2009,'approved'),
	(5449,'Geomatics',804,'Roads & Transportation',663,2009,'actual'),
	(5450,'Geomatics',813,'Roads & Transportation',663,2010,'approved'),
	(5451,'Solid Waste Management',13218,'Environmental Programs & Solid Waste',663,2008,'actual'),
	(5452,'Solid Waste Management',0,'Environmental Programs & Solid Waste',663,2009,'approved'),
	(5453,'Solid Waste Management',12914,'Environmental Programs & Solid Waste',663,2009,'actual'),
	(5454,'Solid Waste Management',13430,'Environmental Programs & Solid Waste',663,2010,'approved'),
	(5455,'Customer Relations & Compliance',729,'Environmental Programs & Solid Waste',663,2008,'actual'),
	(5456,'Customer Relations & Compliance',0,'Environmental Programs & Solid Waste',663,2009,'approved'),
	(5457,'Customer Relations & Compliance',731,'Environmental Programs & Solid Waste',663,2009,'actual'),
	(5458,'Customer Relations & Compliance',744,'Environmental Programs & Solid Waste',663,2010,'approved'),
	(5459,'Animal Services',1010,'Environmental Programs & Solid Waste',663,2008,'actual'),
	(5460,'Animal Services',0,'Environmental Programs & Solid Waste',663,2009,'approved'),
	(5461,'Animal Services',921,'Environmental Programs & Solid Waste',663,2009,'actual'),
	(5462,'Animal Services',915,'Environmental Programs & Solid Waste',663,2010,'approved'),
	(5463,'Environmental Programs',753,'Environmental Programs & Solid Waste',663,2008,'actual'),
	(5464,'Environmental Programs',0,'Environmental Programs & Solid Waste',663,2009,'approved'),
	(5465,'Environmental Programs',925,'Environmental Programs & Solid Waste',663,2009,'actual'),
	(5466,'Environmental Programs',916,'Environmental Programs & Solid Waste',663,2010,'approved'),
	(5467,'Facilites',11548,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5468,'Facilites',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5469,'Facilites',12444,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5470,'Facilites',12566,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5471,'Fleet Operating Costs',9115,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5472,'Fleet Operating Costs',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5473,'Fleet Operating Costs',9895,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5474,'Fleet Operating Costs',10214,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5475,'Fleet Contribution to Reserve Fund',3793,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5476,'Fleet Contribution to Reserve Fund',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5477,'Fleet Contribution to Reserve Fund',3838,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5478,'Fleet Contribution to Reserve Fund',3436,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5479,'Fleet Internal Equipment Recovery',-13764,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5480,'Fleet Internal Equipment Recovery',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5481,'Fleet Internal Equipment Recovery',-13733,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5482,'Fleet Internal Equipment Recovery',-13650,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5483,'Corporate Security & Emergency Management',1014,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5484,'Corporate Security & Emergency Management',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5485,'Corporate Security & Emergency Management',1044,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5486,'Corporate Security & Emergency Management',1043,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5487,'Departmental Resources',1079,'Fleet Facilites & Departmental Resources',663,2008,'actual'),
	(5488,'Departmental Resources',0,'Fleet Facilites & Departmental Resources',663,2009,'approved'),
	(5489,'Departmental Resources',1039,'Fleet Facilites & Departmental Resources',663,2009,'actual'),
	(5490,'Departmental Resources',1054,'Fleet Facilites & Departmental Resources',663,2010,'approved'),
	(5491,'Engineering Review',1532,'',663,2008,'actual'),
	(5492,'Engineering Review',0,'',663,2009,'approved'),
	(5493,'Engineering Review',1328,'',663,2009,'actual'),
	(5494,'Engineering Review',1399,'',663,2010,'approved'),
	(5495,'Construction Administration',433,'',663,2008,'actual'),
	(5496,'Construction Administration',0,'',663,2009,'approved'),
	(5497,'Construction Administration',512,'',663,2009,'actual'),
	(5498,'Construction Administration',523,'',663,2010,'approved'),
	(5499,'One Time Draw from Contingency Reserve',0,'',663,2008,'actual'),
	(5500,'One Time Draw from Contingency Reserve',0,'',663,2009,'approved'),
	(5501,'One Time Draw from Contingency Reserve',0,'',663,2009,'actual'),
	(5502,'One Time Draw from Contingency Reserve',-550,'',663,2010,'approved'),
	(5503,'Departmental Management',319,'',664,2008,'actual'),
	(5504,'Departmental Management',333,'',664,2009,'approved'),
	(5505,'Departmental Management',327,'',664,2009,'actual'),
	(5506,'Departmental Management',327,'',664,2010,'approved'),
	(5507,'Technology Services',14985,'',664,2008,'actual'),
	(5508,'Technology Services',15232,'',664,2009,'approved'),
	(5509,'Technology Services',15397,'',664,2009,'actual'),
	(5510,'Technology Services',15645,'',664,2010,'approved'),
	(5511,'Finance',3429,'',664,2008,'actual'),
	(5512,'Finance',4018,'',664,2009,'approved'),
	(5513,'Finance',3994,'',664,2009,'actual'),
	(5514,'Finance',3957,'',664,2010,'approved'),
	(5515,'Centennial Hall',56,'',664,2008,'actual'),
	(5516,'Centennial Hall',98,'',664,2009,'approved'),
	(5517,'Centennial Hall',98,'',664,2009,'actual'),
	(5518,'Centennial Hall',98,'',664,2010,'approved'),
	(5519,'City Clerk\'s Office',1111,'',664,2008,'actual'),
	(5520,'City Clerk\'s Office',1285,'',664,2009,'approved'),
	(5521,'City Clerk\'s Office',1271,'',664,2009,'actual'),
	(5522,'City Clerk\'s Office',1310,'',664,2010,'approved'),
	(5523,'Realty Services Division',-8,'',664,2008,'actual'),
	(5524,'Realty Services Division',165,'',664,2009,'approved'),
	(5525,'Realty Services Division',158,'',664,2009,'actual'),
	(5526,'Realty Services Division',158,'',664,2010,'approved'),
	(5527,'Financial Planning and Policy',866,'',664,2008,'actual'),
	(5528,'Financial Planning and Policy',955,'',664,2009,'approved'),
	(5529,'Financial Planning and Policy',949,'',664,2009,'actual'),
	(5530,'Financial Planning and Policy',949,'',664,2010,'approved');

/*!40000 ALTER TABLE `amounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table organizations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `organizations`;

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=665 DEFAULT CHARSET=latin1;

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` (`id`,`name`)
VALUES
	(661,'CAO\'s Department'),
	(662,'Community Services'),
	(663,'Environmental & Engineering Services Department'),
	(664,'Finance and Corporate Services');

/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
