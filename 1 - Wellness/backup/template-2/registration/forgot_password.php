<?php
require_once 'controllers/authController.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="forgot_password.php" method="post">
                    <h3 class="text-center">Recover Password</h3>
                    <!-- Entering text to show when the user clicks forgot password button -->
                    <p>Please enter the email address registered with your account so that we can get your account up and running in no time</p>
                    <!-- Checking if any fields are incorrect or missing -->
                    <?php if(count($errors)>0): ?>

                    <!-- Providing placeholder for showing errors -->
                    <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach ?>
                    </div>
                    <?php endif; ?>
                    <!-- Placeholder ends -->
                    
                    
                    <div class="form-group">
                        <!-- <label for="username">Enter email registered with your account</label> -->
                        <input type="email" name="email" class="form-control form-control-lg">
                    </div>
                                                         
                    <div class="form-group">
                        <button type="submit" name="forgot-password" class="btn btn-primary btn-block btn-lg">Recover your password</button>
                    </div>
                    <p class="text-center">Not a member?<a href=
                    "signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>






</body>
</html>