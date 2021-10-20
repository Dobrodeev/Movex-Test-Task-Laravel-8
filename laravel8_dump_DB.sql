-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных laravel8
CREATE DATABASE IF NOT EXISTS `laravel8` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `laravel8`;

-- Дамп структуры для таблица laravel8.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravel8.blogs: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `author_name`, `text`, `date`, `created_at`, `updated_at`) VALUES
	(1, 'Man', 'my first text', '2021-06-27', NULL, NULL),
	(2, 'Null', '<p style="color:green">Null</p> text', '2021-06-26', NULL, NULL),
	(3, 'Олег Ляшко', 'Всех на вила', '2021-06-28', NULL, NULL),
	(4, 'Юлия Тимошенко', 'Игорный бизнес - зло', '2021-06-28', NULL, NULL),
	(5, 'Сергей Тигипко', 'Поддержим малый и средний бизнес', '2021-06-28', NULL, NULL),
	(6, 'Тягнибок', 'Шухевич и Бандера - герои Украины', '2021-06-24', NULL, NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
