<?php require_once 'controllers/authController.php'; 
// Code to validate user on clicking email verification button
if(isset($_GET['token']))
{
    $token=$_GET['token'];
    verifyUser($token);
}
// Code to validate user on clicking forgot password button
if(isset($_GET['password-token']))
{
    $passwordToken=$_GET['password-token'];
    resetPassword($passwordToken);
}
// performing check to make sure the user is unable to view the index.php without either signup or sign in.
if(!isset($_SESSION['id']))
{
    header('location:login.php');
    exit();
}

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
            <?php if(isset($_SESSION['message'])): ?>
            <!-- importing alert classes from authController.php -->
                <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                <?php echo $_SESSION['message']; 
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
                </div>
            <?php endif; ?>
                <h3> Welcome <?php echo $_SESSION['username']; ?></h3>
                <a href="index.php?logout=1" class="logout">Logout</a>
                <!-- Adding php to show the user this message repeatedly till he has verified his email id -->
                <?php if(!$_SESSION['verified']): ?>

                <div class="alert alert-warning">
                You need to verify your account.Click on the link we just emailed you at <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
                <?php endif; ?>
                <?php if($_SESSION['verified']): ?>
                <button class="btn btn-block btn-lg btn-primary">I am Verified</button>
                <?php endif; ?>
            </div>
        </div>
    </div>






</body>
</html>