<?php
     include 'db_connect.php';
     session_start();

        $id=$_GET['id']; 

         $query = "DELETE FROM order_table 
                    WHERE order_id = '$id'";
         $query2 = "DELETE FROM order_item 
                     WHERE order_id = '$id'";
        
        $result = mysqli_query($con, $query);         
        $result2 = mysqli_query($con, $query2);      
      ?>
        
        <script type="text/javascript">
            alert("Your item have received! Thank You!");
            window.location = "track_order.php";
        </script>
       
       