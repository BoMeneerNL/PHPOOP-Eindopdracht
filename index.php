<?php
spl_autoload_register(function ($class) {
    include "classes\\$class.php";
});
$Product = new Product("Good product name",10,1,420.21,true);
$CD = new CD("Good CD Name",10,1,420.21,true);
$DVD = new DVD("Good DVD Name",10,1,420.21,true);
echo "name: " . $Product->getNaam() . "\r\n";
echo "Price: ".$Product->getPrijs() . "\r\n";
$Product->setNaam("New Product Name");
echo $Product;
echo "name: " . $DVD->getNaam() . "\r\n";
echo "Price: ".$DVD->getPrijs() . "\r\n";
$DVD->setNaam("New DVD Name");
echo $DVD;
echo "name: " . $CD->getNaam() . "\r\n";
echo "Price: ".$CD->getPrijs() . "\r\n";
$CD->setNaam("New CD Name");
echo $CD;
$CSV = new CSV();
$data1 = $CSV->read("data_1.csv");
$data2 = $CSV->read("data_2.csv");
$data3 = $CSV->read("data_3.csv");
echo "===========data_1================\n\n";
foreach ($data1 as $key => $value) {
    echo("----------\r\n");
    echo("Naam: ".$value["naam"]."\r\n");
    echo("In voorraad: ".$value["aantalInVoorraad"]."\r\n");
    echo("Minimum voorraad: ".$value["minimumVoorraad"]."\r\n");
    echo("Prijs: ".$value["prijs"]."€\r\n");
    echo("Actief: ".($value["actief"] == "true" ?"Ja":"Nee")."\r\n");
    echo("----------\r\n");
}
echo "===========data_2================\n";
foreach ($data2 as $key => $value) {
    echo("----------\r\n");
    echo("Artiest(en): ".$value["artiest"]."\r\n");
    echo "Aantal songs: ".$value["aantalSongs"]."\r\n";
    echo "Label: ".$value["label"]."\r\n";
    echo "Naaam: ".$value["naam"]."\r\n";
    echo "Aantal in voorraad: ".$value["aantalInVoorraad"]."\r\n";
    echo "Minimum voorraad: ".$value["minimumVoorraad"]."\r\n";
    echo "Prijs: ".$value["prijs"]."€\r\n";
    echo "Actief: ".($value["actief"] == "true" ?"Ja":"Nee")."\r\n";
    echo("----------\r\n");
}

echo "===========data_3================\n";
foreach ($data3 as $key => $value) {
    echo("----------\r\n");
    echo "Lengte: ".$value["lengteInMinuten"]." minuten\r\n";
    echo "Uit: ".$value["jaarUitgifte"]."\r\n";
    echo "Filmstudio: ".$value["filmStudio"]."\r\n";
    echo "Naam: ".$value["naam"]."\r\n";
    echo "Aantal in voorraad: ".$value["aantalInVoorraad"]."\r\n";
    echo "Minimum voorraad: ".$value["minimumVoorraad"]."\r\n";
    echo "Prijs: ".$value["prijs"]."€\r\n";
    echo "Actief: ".($value["actief"] == "true" ?"Ja":"Nee")."\r\n";
    echo("----------\r\n");
}

