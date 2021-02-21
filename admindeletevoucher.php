<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>3C Online Store[Admin]</title>
	<link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/reliance-digital-tv.png" type="image/png">

        <!-- Bootstrap Core CSS -->
        <link href="admincss/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="admincss/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="admincss/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="admincss/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
  include 'db_connect.php';
  session_start();
  
  ?>
    <body>



<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
					<div class='confirmation-card' style='text-align: center'>
					<div class='container'>
					<br><br><br>
                    <form method="post" action="#">
					<h3>Do you sure want to delete?</h3>
					<input type="submit" value="Delete" name="submit" class="btn btn-primary" style="background-color:red;width:20em; margin:0;">
					</form><br></div></div></div>
                    <div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
                    <div class='confirmation-card' style='text-align: center'>
					<div class='container'>
                    <a href="adminvoucher.php"><input type="submit" value="Cancel" name="cancel" class="btn btn-primary" style="width:20em; margin:0;">
                    </a></div></div></div>
</body>
</html>
<?php
      if(isset($_POST['submit'])){

        $id=$_GET['del']; 

         $query = "DELETE FROM voucher 
                    WHERE id = '$id'";
        $result = mysqli_query($con, $query);             
      ?>
        
        <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "adminvoucher.php";
        </script>
        <?php } ?> 