<?php 
require('db.php');
if(isset($_POST) & !empty($_POST))
{
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $sql="SELECT * from register where username='$username'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);

    if($count>0)
    {
        echo '<div style="color:red"><b>"'.$username.'</b>"is taken by other user</div>';
    }
    else
    {
        echo '<div style="color:red"><b>"'.$username.'</b>"is available for now</div>';
    }

}
?>