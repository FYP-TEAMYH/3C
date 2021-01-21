<?php 
session_start();

if(isset($_GET['id'])){
    foreach($_SESSION["cart"] as $key => $value) {
        if($_GET["id"] == $key)
            unset($_SESSION["cart"][$key]);				
        }
    header('location:cart.php');
}

?>