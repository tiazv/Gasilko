<?php
//poglej ce si prijavljen
function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM uporabnik WHERE user_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: prijava.php");
    die;
}

//random stevilo za user id
function random_num($dolzina){
    $text = "";
    if($dolzina < 5){
        $dolzina = 5;
    }
    $length = rand(4,$dolzina);
    for($i= 0; $i < $length; $i++){
        $text .= rand(0,9);
    }
    return $text;
}