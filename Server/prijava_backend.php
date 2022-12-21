<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $elektronska_posta = $_POST['elektronska_posta'];
  $vpisano_geslo = $_POST['geslo'];
  if (!empty($elektronska_posta) && !empty($vpisano_geslo)) {
    $query = "SELECT * FROM uporabnik WHERE elektronska_posta = '$elektronska_posta' LIMIT 1";
    $result = mysqli_query($con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if (password_verify($vpisano_geslo, $user_data['geslo'])) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        } else {echo "Napačen email ali geslo!";}
      }
    }
  } else { echo "Prosim vpišite podatke";}
}
?>