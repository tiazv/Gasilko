<?php
// PODATKI ZA POVEZAVO NA PODATKOVNO BAZO
$host = "localhost";
$uporabniskoIme = "tia";
$mojeGeslo = "1234";
$imePodatkovneBaze = "gasilko";
// USTVARJANJE NOVE POVEZAVE NA PODATKOVNO BAZO
$povezava = new PDO('mysql:host='.$host.';dbname='.$imePodatkovneBaze.';charset=utf8mb4', $uporabniskoIme, $mojeGeslo);
if(!$con = mysqli_connect($host, $uporabniskoIme, $mojeGeslo, $imePodatkovneBaze)){
	die("Couldn't connect");
}
//https://dsr.feri.um.si/web/tia_zvajker/Gasilko/index.php
?>