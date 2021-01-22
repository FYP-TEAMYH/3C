<?php 
session_start();

if(isset($_GET['id'])){
    foreach($_SESSION["shopping_cart"] as $key => $value) {
        if($_GET["id"] == $key)
            unset($_SESSION["shopping_cart"][$key]);				
        }
    header('location:cart.php');
}

?>