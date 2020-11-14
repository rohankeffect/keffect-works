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
                <form action="login.php" method="post">
                    <h3 class="text-center">Login</h3>
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
                    <!-- Providing placeholder for showing errors -->
                    <!-- <div class="alert alert-danger"> 
                    </div>-->
                    <!-- Placeholder ends -->
                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?php echo $username; ?>"class="form-control form-control-lg">
                    </div>
    <!-- Duplicating fields for email and password confirmation -->
                    
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>
                    <p class="text-center">Not a member?<a href=
                    "signup.php">Sign Up</a></p>
                    <div style="font-size:0.8 em; text-align:center">
                    <a href="forgot_password.php">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>






</body>
</html>