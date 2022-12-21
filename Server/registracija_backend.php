<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $ime = $_POST['ime'];
  $priimek = $_POST['priimek'];
  $elektronska_posta = $_POST['elektronska_posta'];
  $geslo = $_POST['geslo'];
  $hashed_pass = password_hash($_POST['geslo'], PASSWORD_DEFAULT);

  try {
    if (!empty($ime) && !empty($priimek) && !empty($elektronska_posta) && !empty($geslo)  && preg_match('/^[a-zčšžć\d_]{3,20}$/', $geslo)) {
        $user_id = random_num(20);
        $query = "INSERT INTO uporabnik (user_id, ime, priimek, elektronska_posta, geslo) VALUES ('$user_id', '$ime', '$priimek', '$elektronska_posta', '$hashed_pass')";
        echo $query;
        mysqli_query($con, $query);
        header("Location: prijava.php");
        die;
    } else {
      echo "Neveljavni vpisani podatki";
    }
  } catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
}

?>