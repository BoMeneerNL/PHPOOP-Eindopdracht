<?php
include_once 'Classes/DVD.php';
include_once 'Classes/Product.php';
$dvd = new DVD();
$dvd->setLengteInMinuten(107);
$dvd->setNaam('The Shawshank Redemption');
echo $dvd;