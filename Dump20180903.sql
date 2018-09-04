-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: sekolah_abc
-- ------------------------------------------------------
-- Server version	5.7.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `m_matapelajaran`
--

DROP TABLE IF EXISTS `m_matapelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_matapelajaran` (
  `idm_matapelajaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matapelajaran` varchar(45) DEFAULT NULL,
  `id_pengajar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idm_matapelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_matapelajaran`
--

LOCK TABLES `m_matapelajaran` WRITE;
/*!40000 ALTER TABLE `m_matapelajaran` DISABLE KEYS */;
INSERT INTO `m_matapelajaran` VALUES (1,'Kmia','1'),(2,'matematika','3');
/*!40000 ALTER TABLE `m_matapelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengajar`
--

DROP TABLE IF EXISTS `pengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengajar` varchar(45) DEFAULT NULL,
  `idm_matapelajaran` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pengajar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengajar`
--

LOCK TABLES `pengajar` WRITE;
/*!40000 ALTER TABLE `pengajar` DISABLE KEYS */;
INSERT INTO `pengajar` VALUES (1,'Hani','K001'),(3,'Sindi','K001');
/*!40000 ALTER TABLE `pengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relational_mp_pengajar`
--

DROP TABLE IF EXISTS `relational_mp_pengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relational_mp_pengajar` (
  `id_relational` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengajar` int(11) NOT NULL,
  `id_matapelajaran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_relational`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relational_mp_pengajar`
--

LOCK TABLES `relational_mp_pengajar` WRITE;
/*!40000 ALTER TABLE `relational_mp_pengajar` DISABLE KEYS */;
INSERT INTO `relational_mp_pengajar` VALUES (1,1,4),(2,1,3);
/*!40000 ALTER TABLE `relational_mp_pengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relational_siswa_mp`
--

DROP TABLE IF EXISTS `relational_siswa_mp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relational_siswa_mp` (
  `idrelational_siswa_mp` int(11) NOT NULL AUTO_INCREMENT,
  `idsiswa` varchar(45) DEFAULT NULL,
  `idm_matapelajaran` varchar(45) DEFAULT NULL,
  `nilai` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idrelational_siswa_mp`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relational_siswa_mp`
--

LOCK TABLES `relational_siswa_mp` WRITE;
/*!40000 ALTER TABLE `relational_siswa_mp` DISABLE KEYS */;
INSERT INTO `relational_siswa_mp` VALUES (1,'8','1',NULL),(3,'11','2',NULL),(5,'9','1',NULL),(6,'8','1','80'),(7,'8','1','90'),(8,'8','1','90');
/*!40000 ALTER TABLE `relational_siswa_mp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `idsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nama_orangtua` varchar(45) DEFAULT NULL,
  `nomor_telepon_orangtua` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (1,'ok','ok','o','o','kj','o','ko'),(5,'farhab','l','kl','k','lk','','l'),(7,'hasan','klk','ll','klk','l','k','kl'),(8,'Lina','Tanah Sereal','Siti','09808201','Perempuan','Jakarta','26/10/1997'),(9,'Halima','Tambora','Halim','09809809','Perempuan','Bekasi','26/09/1995'),(10,'Tusadiah','Keagungan','Firlan','09809232','Perempuan','Slipi','12/09/1965'),(11,'Ruly','Kalimantan','Hasan','09801223','Pria','Tanah Abang','09/02/1076');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sekolah_abc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-03 17:08:37
