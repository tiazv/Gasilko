<?php
// PODATKI ZA POVEZAVO NA PODATKOVNO BAZO
$host = "localhost";
//dsr.feri.um.si
$uporabniskoIme = "tia";
$mojeGeslo = "1234";
$imePodatkovneBaze = "gasilko";
// USTVARJANJE NOVE POVEZAVE NA PODATKOVNO BAZO
$povezava = new PDO('mysql:host='.$host.';dbname='.$imePodatkovneBaze.';charset=utf8mb4', $uporabniskoIme, $mojeGeslo);
if(!$con = mysqli_connect($host, $uporabniskoIme, $mojeGeslo, $imePodatkovneBaze)){
	die("Couldn't connect");
}
/*
if($povezava -> connect_error){
	die("Connection failed: "
		. $povezava->connect_error);
  }
  */

/*
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$elektronska_posta = $_POST['elektronska_posta'];
$geslo = $_POST['geslo'];


//$email = $_GET["elektronska_posta"];

// PRIPRAVA POIZVEDBE
//prijava
$poizvedba = $povezava->prepare('SELECT * FROM uporabnik WHERE  elektronska_posta= :elektronska_posta AND geslo= :geslo'); //SPREMENI POIZVEDBO GLEDE NA PODATKOVNO BAZO

$poizvedba->bindValue(':elektronska_posta', $_GET["elektronska_posta"]);
$poizvedba->bindValue(':geslo', $_GET["geslo"]);

// DEJANSKA IZVEDBA POIZVEDBE
$poizvedba->execute();

// PRIDOBIVANJE REZULTATOV
$rezultat = $poizvedba->fetchAll(\PDO::FETCH_OBJ);


// IZPIS REZULTATOV
echo "<ul>";
foreach ($rezultat as $vrstica){ // ZANKA, KI SE PONOVI ZA VSAKO VRSTICO IZ REZULTATA
	echo "<li>";
	echo $vrstica->id_uporabnik . " " . $vrstica->ime; // IZPIŠI VSEBINE TABELE: v tem primeru [ID presledek IME]
	echo "</li>";
}
echo "</ul>";

*/
?>