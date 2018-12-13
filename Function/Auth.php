<?php


function AuthUser(){
    // variables
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Validation Mail 
    if (isset($_COOKIE["$username"]) && $_COOKIE["Username"] === $password ) {
        header("Location: ./Product.php ");
    } else {
        header("Location: ./Noauth.php "); 
    }
}