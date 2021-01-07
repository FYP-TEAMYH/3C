<!DOCTYPE html>
<html lang="en">
<body>
<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
<div class='confirmation-card' style='text-align: center'>
    <div class="wrapper-main" >
        <section class="section-default">
            <h1>Reset your password</h1>
            <p>An e-mail will be send to you with instruction on how to reset your password.</p>
            <form action="reset-request.php" method="post">
                <input type="text" name="email" placeholder="Enter your e-mail address...">
                <input type="submit" value="Submit" name="reset-request-submit">

            </form>
            <?php
                if(isset($_GET["reset"])){
                    if($_GET["reset"]== "success"){
                        echo '<p class="signupsuccess">Check your email</p>';
                    }
                }
            ?>
            
        </section>
    </div>
    </div>
    </div>
</body>
</html>

