-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Nisan 2016 saat 16:19:32
-- Sunucu sürümü: 5.0.51
-- PHP Sürümü: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `database`
--
CREATE DATABASE `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Tablo yapısı: `giris`
--

CREATE TABLE `giris` (
  `id` int(11) NOT NULL auto_increment,
  `ad` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `seviye` varchar(50) NOT NULL,
  `onay` varchar(50) NOT NULL,
  `tarih` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `giris`
--

INSERT INTO `giris` (`id`, `ad`, `sifre`, `seviye`, `onay`, `tarih`) VALUES
(1, '1', '1', '1', '1', '2016-04-12 08:51:41'),
(2, '2', '2', '1', '1', '2016-04-12 08:51:41'),
(3, 'ahmet', '1234', 'admin', '', '2016-04-12 14:12:15');

-- --------------------------------------------------------

--
-- Tablo yapısı: `urun`
--

CREATE TABLE `urun` (
  `id` int(11) NOT NULL auto_increment,
  `model` varchar(50) NOT NULL,
  `fiyat` int(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `resim` text NOT NULL,
  `kordont` varchar(50) NOT NULL,
  `kordonr` varchar(50) NOT NULL,
  `kadrant` varchar(50) NOT NULL,
  `kadranr` varchar(50) NOT NULL,
  `kasa` varchar(50) NOT NULL,
  `takvim` varchar(50) NOT NULL,
  `su` varchar(50) NOT NULL,
  `kasay` varchar(50) NOT NULL,
  `ti` varchar(50) NOT NULL,
  `kro` varchar(50) NOT NULL,
  `tarih` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `model`, `fiyat`, `stok`, `resim`, `kordont`, `kordonr`, `kadrant`, `kadranr`, `kasa`, `takvim`, `su`, `kasay`, `ti`, `kro`, `tarih`, `ip`) VALUES
(1, 'Puma Air', 11, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2016-04-12 14:17:07', '127.0.0.1'),
(2, 'PU910981005 PUMA ACTIVE Serisi Erkek Kol Saati', 150, 20, '1', 'plastik', 'k?rm?z?', 'yuvarlak', 'beyaz', 'celik', 'var', '100', '50', 'Spor', 'var', '2016-04-12 14:19:16', '127.0.0.1'),
(4, 'PU102941001 PUMA KOL SAAT?', 120, 7, '2', 'Plastik', 'Siyah', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '75M', '50', 'Spor', 'Yok', '2016-04-12 15:03:05', '127.0.0.1'),
(5, 'Puma PU103461001 Erkek Kol Saati', 99, 100, '3', 'plastik', 'Siyah', 'Yuvarlak', 'Siyah', 'Çelik', 'Yok', '50', '53', 'Spor', 'Var', '2016-04-12 15:04:32', '127.0.0.1'),
(6, 'PUMA PU102941003 ERKEK KOL SAAT?', 59, 2, '4', 'Plastik', 'Siyah', 'Yuvarlak', 'Siyah', 'Plastik', 'Yok', '100', '50', 'Spor', 'Var', '2016-04-12 15:05:37', '127.0.0.1'),
(7, 'Puma PU102941001 Erkek Kol Saati', 89, 34, '5', 'Plastik', 'Beyaz', 'Yuvarlak', 'Siyah', 'Çelik', 'Yok', '100', '50', 'Spor', 'Var', '2016-04-12 15:06:40', '127.0.0.1'),
(8, 'Puma Motorsport Oversize PU103461014 Kol Saati', 3996, 20, '5', 'Plastik', 'Siyah', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '100', '50', 'Spor', 'Var', '2016-04-12 15:08:50', '127.0.0.1'),
(9, 'Puma PU102941005 Erkek Kol Saati', 110, 20, '6', 'Plastik', 'Siyah', 'Yuvarlak', 'beyaz', 'Çelik', 'Var', '75M', '53', 'Spor', 'Var', '2016-04-12 15:12:42', '127.0.0.1'),
(10, 'http://urun.n11.com/erkek-kol-saati/puma-pu1035110', 75, 20, '7', 'Plastik', 'Beyaz', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '100', '53', 'Spor', 'Var', '2016-04-12 15:14:22', '127.0.0.1'),
(11, 'Puma PU103751001 Motorsport Series Erkek Kol Saati', 56, 7, '8', 'Plastik', 'Beyaz', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '75M', '53', 'Spor', 'Var', '2016-04-12 15:15:30', '127.0.0.1'),
(12, 'http://urun.n11.com/erkek-kol-saati/puma-motorspor', 98, 87, '9', 'Plastik', 'Beyaz', 'Yuvarlak', 'beyaz', 'Çelik', 'Var', '100', '53', 'Spor', 'Var', '2016-04-12 15:16:33', '127.0.0.1'),
(13, 'Puma Motorsport Series PU102941004 Erkek Kol Saati', 87, 98, '10', 'Plastik', 'k?rm?z?', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '100', '53', 'Spor', 'Var', '2016-04-12 15:17:27', '127.0.0.1'),
(14, 'Puma PU103461001 Erkek Kol Saati', 96, 34, '11', 'Plastik', 'Siyah', 'Yuvarlak', 'beyaz', 'Çelik', 'Var', '75M', '53', 'Spor', 'Var', '2016-04-12 15:18:31', '127.0.0.1'),
(15, 'Puma A1', 87, 34, '12', 'Plastik', 'k?rm?z?', 'Yuvarlak', 'Siyah', 'Çelik', 'Yok', '100', '53', 'Spor', 'Var', '2016-04-12 15:19:13', '127.0.0.1'),
(16, 'Puma A2', 145, 7, '13', 'Plastik', 'Siyah', 'Yuvarlak', 'beyaz', 'Çelik', 'Var', '50', '1', 'Spor', 'Var', '2016-04-12 15:19:48', '127.0.0.1'),
(17, 'Puma  A3', 78, 54, '14', 'Plastik', 'Mavi', 'Yuvarlak', 'Mavi', 'Plastik', 'Var', '100', '53', 'Standart', 'Yok', '2016-04-12 15:22:05', '127.0.0.1'),
(18, 'Puma A7', 79, 7, '15', 'Demir', 'k?rm?z?', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '100', '53', 'Standart', 'Var', '2016-04-12 15:23:00', '127.0.0.1'),
(19, 'Puma A8', 89, 34, '16', 'plastik', 'Siyah', 'Yuvarlak', 'Mavi', 'Plastik', 'Var', '100', '53', 'Spor', 'Var', '2016-04-12 15:23:37', '127.0.0.1'),
(20, 'Puma A10', 87, 20, '16', 'Plastik', 'Siyah', 'Yuvarlak', 'Mavi', 'Çelik', 'Var', '100', '50', 'Spor', 'Yok', '2016-04-12 15:24:59', '127.0.0.1'),
(21, 'Puma A12', 3996, 100, '17', 'plastik', 'Siyah', 'Yuvarlak', 'Siyah', 'Plastik', 'Var', '75M', '53', 'Standart', 'Var', '2016-04-12 15:27:11', '127.0.0.1'),
(22, 'Puma A14', 140, 20, '18', 'Plastik', 'Mor', 'Yuvarlak', 'Siyah', 'Çelik', 'Var', '100', '50', 'Standart', 'Var', '2016-04-12 15:27:58', '127.0.0.1'),
(23, 'Puma Slm Cnms', 2000, 20, '19', 'Demir', 'Mavi', 'Yuvarlak', 'K?rm?z?', 'Plastik', 'Var', '100', '50', 'Spor', 'Var', '2016-04-12 15:29:08', '127.0.0.1'),
(24, 'Puma Anka', 115, 100, '20', 'Demir', 'Mavi', 'Yuvarlak', 'K?rm?z?', 'Plastik', 'Yok', '100', '50', 'Standart', 'Yok', '2016-04-12 15:30:02', '127.0.0.1'),
(25, 'Puma Ejderiya', 89, 20, '21', 'Plastik', 'Siyah', 'Yuvarlak', 'beyaz', 'Plastik', 'Var', '100', '50', 'Standart', 'Var', '2016-04-12 15:31:08', '127.0.0.1'),
(26, 'Puma Day?', 87, 20, '22', 'Demir', 'Mavi', 'Yuvarlak', 'K?rm?z?', 'Plastik', 'Yok', '100', '50', 'Standart', 'Var', '2016-04-12 15:31:43', '127.0.0.1'),
(27, 'Puma Amca', 89, 100, '23', 'Plastik', 'Kahverengi', 'Yuvarlak', 'Pembe', 'Plastik', 'Yok', '100', '53', 'Spor', 'Yok', '2016-04-12 15:32:31', '127.0.0.1'),
(28, 'Puma Emra', 57, 20, '24', 'Demir', 'Kahverengi', 'Yuvarlak', 'Siyah', 'Plastik', 'Yok', '', '50', 'Standart', 'Yok', '2016-04-12 15:33:16', '127.0.0.1'),
(29, 'Puma P15', 110, 100, '25', 'Plastik', 'Beyaz', 'Yuvarlak', 'K?rm?z?', 'Plastik', 'Yok', '50', '53', 'Standart', 'Var', '2016-04-12 15:34:10', '127.0.0.1'),
(30, 'Puma Emmoglu', 120, 100, '26', 'Demir', 'Pembe', 'Kare', 'Mor', 'Plastik', 'Yok', '50', '50', 'Standart', 'Var', '2016-04-12 15:34:59', '127.0.0.1');
