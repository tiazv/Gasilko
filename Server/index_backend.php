<?php
    $sIP = $_SERVER['REMOTE_ADDR'];
    $sURL = "http://ipinfo.io/" .$sIP . "/json";
    $sJSON = file_get_contents($sURL);
    $view = (object) array();
    $view->JSON = $sJSON;

session_start();

include("connection.php");
include("functions.php");
?>