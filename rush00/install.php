<?php

$link = mysqli_connect("localhost", "root", "Micken22");

$query = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS rush00");

$link = mysqli_connect("localhost", "root", "Micken22", "rush00");

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `items` (
      `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(160) NOT NULL,
      `category` varchar(600) NOT NULL,
      `subcategory` varchar(600) NOT NULL,
      `description` varchar(700) NOT NULL,
      `price` decimal(7,2) NOT NULL,
      `img` varchar(800) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `order` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(160) DEFAULT NULL,
      `name` varchar(160) NOT NULL,
      `price` decimal(7,2) NOT NULL,
      `ordered` int(11) NOT NULL,
      `addr` varchar(30) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) NOT NULL,
      `email` varchar(60) NOT NULL,
      `password` varchar(500) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");

?>