<!DOCTYPE html>
<html lang="en">
<body>
<div class='col-md-14 col-xl-12 mb-12 mb-xl-0'>
<div class='confirmation-card' style='text-align: center'>
    <div class="wrapper-main" >
        <section class="section-default">

            <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if(empty($selector) || empty($validator)){
                    echo "Could not validate your request!";
                }else {
                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator)){
                    ?>

                    <form action="reset-password.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator ?>">
                        <input type="password" name="pwd" placeholder="Enter a new password...">
                        <input type="password" name="pwd-repeat" placeholder="Repeat a new password...">
                        <input type="submit" value="Reset password" name="reset-password-submit"></button>
                    </form>

                    <?php
                    }
                }
            ?>


        </section>
    </div>
    </div>
    </div>
</body>
</html>

