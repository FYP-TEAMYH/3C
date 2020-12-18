<?php
//connection to database
$con=mysqli_connect("localhost","root","","fyp");

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>

<?php if (count($errors)>0) : ?>
  <div class = "error">
    <?php foreach ($errors as $error) : ?>
        <p><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>