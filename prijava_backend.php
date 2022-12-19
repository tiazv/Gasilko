<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $elektronska_posta = $_POST['elektronska_posta'];
  $geslo = $_POST['geslo'];
  $hashed_pass = password_hash($_POST['geslo'], PASSWORD_DEFAULT);
  echo "pred praznim";
  if (!empty($elektronska_posta) && !empty($geslo)) {
    //read from database
    $query = "SELECT * FROM uporabnik WHERE elektronska_posta = '$elektronska_posta' LIMIT 1";
    echo $query;
    $result = mysqli_query($con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['geslo'] === $geslo || password_verify($geslo, $hashed_pass)) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }
    echo "Napačen email ali geslo!";
  } else {
    echo "Prosim vpišite podatke";
  }
}
?>