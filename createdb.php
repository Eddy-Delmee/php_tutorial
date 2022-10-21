<?php
//Création de la base de données
$pdo = new PDO('mysql:host=localhost;port=3306','root','');
$sql = "CREATE DATABASE IF NOT EXISTS `listecourses` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$pdo->exec($sql);