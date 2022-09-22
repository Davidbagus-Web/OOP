<?php
// require_once untuk menghubungkan ke file yang dituju
require_once "Airasia.php";
require_once "Lionair.php";
require_once "Merpati.php";

$Airasia = new Airasia('A321neo');
$Lionair = new Lionair('Boeing 737');
$Merpati = new Merpati('B737-200');
//echo berfungsi untuk mencetak ke layar
echo "Daftar Pesawat :";
echo "<br>";
echo $Airasia->getMerk();
echo "<br>";
echo $Lionair->getMerk();
echo "<br>";
echo $Merpati->getMerk();
echo "<br>";

echo "<hr>";

// echo berfungsi untuk mencetak ke layar
echo $Airasia->getMerk();
echo $Airasia->getTipe();
echo "<br>";
echo $Airasia->nyalakan();
echo "<br>";
echo $Airasia->getKetinggian();
echo "<br>";
$Airasia->ketinggianUp(); 
echo "<br>";
$Airasia->ketinggianUp(); 
echo "<br>";
$Airasia->ketinggianUp(); 
echo "<br>";
$Airasia->ketinggianUp(); 
echo "<br>";
$Airasia->ketinggianUp(); 
echo "<br>";
$Airasia->ketinggianUp(); 
echo $Airasia->getKetinggian();
echo "<br>";
echo $Airasia->ketinggianDown();
echo "<br>";
echo $Airasia->getKetinggian();
echo "<br>";
echo $Airasia->BahanBakar();
echo "<br>";
echo $Airasia->oli();
echo "<br>";
echo $Airasia->matikan();
echo "<br>";
echo $Airasia->setTahunPembuatan(2002);
echo $Airasia->getTahunPembuatan();

echo "<hr>";

//echo berfungsi untuk mencetak ke layar
echo $Lionair->getMerk();
echo $Lionair->getTipe();
echo "<br>";
echo $Lionair->nyalakan();
echo "<br>";
echo $Lionair->getKetinggian();
echo "<br>";
$Lionair->ketinggianUp(); 
echo "<br>";
$Lionair->ketinggianUp(); 
echo "<br>";
$Lionair->ketinggianUp(); 
echo "<br>";
$Lionair->ketinggianUp(); 
echo "<br>";
$Lionair->ketinggianUp(); 
echo "<br>";
$Lionair->ketinggianUp(); 
echo $Lionair->getKetinggian();
echo "<br>";
echo $Lionair->ketinggianDown();
echo "<br>";
echo $Lionair->getKetinggian();
echo "<br>";
echo $Lionair->BahanBakar();
echo "<br>";
echo $Lionair->oli();
echo "<br>";
echo $Lionair->matikan();
echo "<br>";
echo $Lionair->setTahunPembuatan(2022);
echo $Lionair->getTahunPembuatan();

echo "<hr>";
//echo berfungsi untuk mencetak ke layar
echo $Merpati->getMerk();
echo $Merpati->getTipe();
echo "<br>";
echo $Merpati->nyalakan();
echo "<br>";
echo $Merpati->getKetinggian();
echo "<br>";
$Merpati->ketinggianUp(); 
echo "<br>";
$Merpati->ketinggianUp(); 
echo "<br>";
$Merpati->ketinggianUp(); 
echo "<br>";
$Merpati->ketinggianUp(); 
echo "<br>";
$Merpati->ketinggianUp(); 
echo "<br>";
$Merpati->ketinggianUp(); 
echo $Merpati->getKetinggian();
echo "<br>";
echo $Merpati->ketinggianDown();
echo "<br>";
echo $Merpati->getKetinggian();
echo "<br>";
echo $Merpati->BahanBakar();
echo "<br>";
echo $Merpati->oli();
echo "<br>";
echo $Merpati->matikan();
echo "<br>";
echo $Merpati->setTahunPembuatan(2020);
echo $Merpati->getTahunPembuatan();
