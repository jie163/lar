# Host: 127.0.0.1  (Version: 5.7.26)
# Date: 2020-06-10 17:19:45
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "my_articles"
#

DROP TABLE IF EXISTS `my_articles`;
CREATE TABLE `my_articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_articles"
#

/*!40000 ALTER TABLE `my_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_articles` ENABLE KEYS */;

#
# Structure for table "my_failed_jobs"
#

DROP TABLE IF EXISTS `my_failed_jobs`;
CREATE TABLE `my_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_failed_jobs"
#

/*!40000 ALTER TABLE `my_failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_failed_jobs` ENABLE KEYS */;

#
# Structure for table "my_member"
#

DROP TABLE IF EXISTS `my_member`;
CREATE TABLE `my_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `my_member_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_member"
#

/*!40000 ALTER TABLE `my_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_member` ENABLE KEYS */;

#
# Structure for table "my_migrations"
#

DROP TABLE IF EXISTS `my_migrations`;
CREATE TABLE `my_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_migrations"
#

/*!40000 ALTER TABLE `my_migrations` DISABLE KEYS */;
INSERT INTO `my_migrations` VALUES (20,'2020_06_10_105439_add_is_admin_to_users_table',1),(87,'2014_10_12_000000_create_users_table',2),(88,'2019_08_19_000000_create_failed_jobs_table',2),(89,'2020_06_09_052105_create_user',2),(90,'2020_06_09_055231_create_member_table',2),(91,'2020_06_09_064138_create_articles_table',2),(92,'2020_06_10_134428_add_is_admin_to_users_table',2),(93,'2020_06_10_134732_add_activation_to_users_table',2);
/*!40000 ALTER TABLE `my_migrations` ENABLE KEYS */;

#
# Structure for table "my_user"
#

DROP TABLE IF EXISTS `my_user`;
CREATE TABLE `my_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_user"
#

/*!40000 ALTER TABLE `my_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_user` ENABLE KEYS */;

#
# Structure for table "my_users"
#

DROP TABLE IF EXISTS `my_users`;
CREATE TABLE `my_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `activation_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `my_users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "my_users"
#

/*!40000 ALTER TABLE `my_users` DISABLE KEYS */;
INSERT INTO `my_users` VALUES (1,'123456','2363986954@qq.com',NULL,'$2y$10$1d1Rm3TxDLq6SKShq8K.d.XmecQolbp96l/dr/TfNaFbSj4j.X8uC',NULL,'2020-06-10 15:52:04','2020-06-10 15:52:04',0,'lMe55vTk8w',0);
/*!40000 ALTER TABLE `my_users` ENABLE KEYS */;
