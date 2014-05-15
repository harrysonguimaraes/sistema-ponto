-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2014 at 03:10 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `empregado`
--

CREATE TABLE `empregado` (
  `id_empregado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_empregado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `horas`
--

CREATE TABLE `horas` (
  `id_horas` int(11) NOT NULL AUTO_INCREMENT,
  `id_empregado` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `saida` datetime DEFAULT NULL,
  `horas_dia` double DEFAULT NULL,
  PRIMARY KEY (`id_horas`),
  KEY `id_empregado` (`id_empregado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;


--
-- Constraints for dumped tables
--

--
-- Constraints for table `horas`
--
ALTER TABLE `horas`
  ADD CONSTRAINT `horas_ibfk_1` FOREIGN KEY (`id_empregado`) REFERENCES `empregado` (`id_empregado`);
