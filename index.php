<?php
include_once 'Classes'.str_starts_with(strtoupper(PHP_OS),"WIN") ? "\\" :"/".'CD.php';
include_once 'Classes'.str_starts_with(strtoupper(PHP_OS),"WIN") ? "\\" :"/".'DVD.php';
include_once 'Classes'.str_starts_with(strtoupper(PHP_OS),"WIN") ? "\\" :"/".'Product.php';
$dvd = new DVD();
$dvd->setLengteInMinuten(107);
$dvd->setNaam('The Shawshank Redemption');
echo $dvd;