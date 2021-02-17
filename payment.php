<?php

//payment.php

require('db_connect.php');

session_start();


 
 $name=$_POST["customer_name"];
 $email= $_POST["email_address"];
 $address= $_POST["customer_address"];
 $postcode = $_POST["customer_pin"];
 $city = $_POST["customer_city"];
 $state =  $_POST["customer_state"];
 $username=$_SESSION["username"];
 $total = $_POST["total_amount"];
 $cvc = $_POST["card_cvc"];
 $expiry_month = $_POST["card_expiry_month"];
 $expiry_year = $_POST["card_expiry_year"];
 $country= $_POST["customer_country"];
 $card_holder = $_POST["card_holder_number"];
 $tran=uniqid('txn_'); 

 $query=mysqli_query($con,"select * from register where username='$username'");
 if($row=mysqli_fetch_array($query)){  
 $id=$row["id"];
 $status=0;
 } 
   
 $order_number = rand(100000,999999);
 $date = date('Y-m-d H:i:s');
 
 $order_data = array(
   ':order_number'   => $order_number,
   ':order_total_amount' => $total,
    ':transaction_id'  => $tran,
   ':card_cvc'    => $_POST["card_cvc"],
   ':card_expiry_month' => $_POST["card_expiry_month"],
   ':card_expiry_year'  => $_POST["card_expiry_year"],
   ':card_holder_number' => $_POST["card_holder_number"],
   ':email_address'  => $_POST['email_address'],
   ':customer_name'  => $_POST["customer_name"],
   ':customer_address'  => $_POST['customer_address'],
   ':customer_city'  => $_POST['customer_city'],
   ':customer_pin'   => $_POST['customer_pin'],
   ':customer_state'  => $_POST['customer_state'],
   ':customer_country'  => $_POST['customer_country']
  );



  $query = "INSERT INTO `order_table`
     (order_number, order_total_amount,transaction_id, card_cvc, card_expiry_month, card_expiry_year, card_holder_number, email_address, customer_name, customer_address, customer_city, customer_pin, customer_state, customer_country, user_id, date,status) 
     VALUES (:order_number, :order_total_amount,:transaction_id, :card_cvc, :card_expiry_month, :card_expiry_year, :card_holder_number, :email_address, :customer_name, :customer_address, :customer_city, :customer_pin, :customer_state, :customer_country, '$id', '$date', '$status')
  ";
  $statement = $connect->prepare($query);

  $statement->execute($order_data);

  $order_id = $connect->lastInsertId();

  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
   $order_item_data = array(
    ':order_id'  => $order_id,
    ':order_item_name' => $values["product_name"],
    ':order_item_quantity' => $values["product_quantity"],
    ':order_item_price' => $values["product_price"],
    
   );


   $query2=mysqli_query($con,"select * from product ");
	while($row=mysqli_fetch_array($query2)){
		
		$newqty=$row['quantity']-$values["product_quantity"];
		
		mysqli_query($con,"update product set quantity='$newqty' where id='".$values["product_id"]."'");
		
		}


      $query = "
      INSERT INTO order_item 
      (order_id, order_item_name, order_item_quantity, order_item_price,user_id, date) 
      VALUES (:order_id, :order_item_name, :order_item_quantity, :order_item_price, '$id', '$date')
      ";

      $statement = $connect->prepare($query);

   $statement->execute($order_item_data);
   }
   unset($_SESSION["shopping_cart"]);
 header('location:confirmation.php?id=  '. $order_id .'');
   
?>


   

