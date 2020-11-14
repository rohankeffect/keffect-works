<?php
session_start();
require 'config/db.php';
require_once 'emailController.php';

$errors=array();
$username="";
$email="";


// if the user clicks on the signup button
if (isset($_POST['signup-btn']))
{
    $username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwordConf=$_POST['passwordConf'];

	//Validation of fields

	if(empty($username))
		{
			$errors['username']="username required";
		}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$errors['email']="The email address is invalid";
	}

	if(empty($email))
		{
			$errors['email']="Email required";
		}
	if(empty($password))
		{
			$errors['password']="password required";
		}
	if($password !== $passwordConf)
	{
		$errors['password']="The passwords do not match";
    }
    // Using prepared SQL statements to check if email is already present in user table
    // Prepared SQL statements are supposed to be very secure.
    $emailQuery="SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt= $conn->prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result=$stmt->get_result();
    $userCount=$result->num_rows;
    $stmt->close();
    if($userCount > 0)
    {
        $errors['email']="Email already exists";
    }
    if(count($errors)===0)
    {
        $password=password_hash("$password",PASSWORD_DEFAULT);
        $token=bin2hex(random_bytes(50));
        $verified=false;
        $sql="INSERT INTO users(username,email,verified,token,password) VALUES(?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param('ssbss',$username,$email,$verified,$token,$password);
        if($stmt->execute())
        {
            // login user to index.php
           
			$user_id=$conn->insert_id;
			$_SESSION['id']=$user_id;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
            $_SESSION['verified']=$verified;
           
            // Attempting to delay verification email using sleep
            sleep(10);
            // Send Verification Email
            sendVerificationEmail($email,$token);


            //Set Flash Message
            $_SESSION['message']="You are now logged in";
            $_SESSION['alert-class']="alert-success";
            header('location:index.php');
            exit();
        }
        else{
            $errors['db_error']="Database Error: failed to register";
        }
    }

} 

//When the user clicks on the login/signin button
if (isset($_POST['login-btn']))
{
    $username=$_POST['username'];
	$password=$_POST['password'];

    //Validation of fields

	if(empty($username))
		{
			$errors['username']="username required";
		}
	

	
	if(empty($password))
		{
			$errors['password']="password required";
        }
        // Checking if the number of errors is zero
        if(count($errors)===0)
        {
            $sql="SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param('ss',$username,$username);
            $stmt->execute();
            $result=$stmt->get_result();
            $user=$result->fetch_assoc();
            // password_verify is a default function in php to verify the password fields 
            if(password_verify($password,$user['password']))
            {   //Logging user into index.php
                $_SESSION['id']=$user['id'];
                $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
                $_SESSION['verified']=$user['verified']; 
                //Set Flash Message
                $_SESSION['message']="You are now logged in";
                $_SESSION['alert-class']="alert-success";
                header('location:index.php');
                exit();
            }
            else
            {
                $errors['login-fail']="Wrong credentials";
            }
            
        }
}



        // getting username or email field for the login form
        // $sql="SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
        // $stmt=$conn->prepare($sql);
        // $stmt->bind_param('ss',$username,$username);
        // $stmt->execute();
        // $result=$stmt->get_result();
        // $user=$result->fetch_assoc();
        // // password_verify is a default function in php to verify the password fields 
        // if(password_verify($password,$user['password']))
        // {   //Logging user into index.php
		// 	$_SESSION['id']=$user['id'];
		// 	$_SESSION['username']=$user['username'];
		// 	$_SESSION['email']=$user['email'];
		// 	$_SESSION['verified']=$user['verified']; 
        //     //Set Flash Message
        //     $_SESSION['message']="You are now logged in";
        //     $_SESSION['alert-class']="alert-success";
        //     header('location:index.php');
        //     exit();
        // }
        // else
        // {
        //     $errors['login-fail']="Wrong credentials";
        // }

//logging out user
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location:login.php');
    exit();


}

//Verify user by token
function verifyUser($token)
{
    global $conn;
    $sql="SELECT * from users where token='$token' LIMIT 1";
    $result=mysqli_query($conn,$sql); 

    if(mysqli_num_rows($result)>0)
    {
        $user=mysqli_fetch_assoc($result);
        $update_query="UPDATE users SET verified=1 WHERE token='$token'";
        if(mysqli_query($conn,$update_query))
        {
            //Logging user into index.php
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['email']=$user['email'];
            $_SESSION['verified']=1; 
            //Set Flash Message
            $_SESSION['message']="Your email address was successfully verified";
            $_SESSION['alert-class']="alert-success";
            header('location:index.php');
            exit();

        }
    }
    else{
        echo "user not found";
    }
}
// Forgot password code
if(isset($_POST['forgot-password']))
{
    $email=$_POST['email'];
    // validating email fields
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	    {
		    $errors['email']="The email address is invalid";
	    }

	if(empty($email))
		{
			$errors['email']="Email required";
        }
        
    if(count($errors)==0) 
    {
        $sql="SELECT * FROM users WHERE email=$'$email' LIMIT 1";
        $result=mysqli_query($conn,$sql);
        $user=mysqli_fetch_assoc($result);
        $token=$user['token'];
        // Send email to user using token as unique identifier
        sendPasswordResetLink($email,$token);
        header('location:password_message.php');
        exit(0);
    }  
}

// If user clicked on reset password button
if(isset($_POST['reset-password-btn']))
{
    $password=$_POST['password'];
    $passwordConf=$_POST['passwordConf'];
    if(empty($password)||empty($passwordConf))
		{
			$errors['password']="password required";
		}
	if($password !== $passwordConf)
	{
		$errors['password']="The passwords do not match";
    }

    // Encrypting new password
    // $password=$_SESSION['password'];
     $password=password_hash($password,PASSWORD_DEFAULT);
    $email=$_SESSION['email'];

    // Check for errors and then upload to database
    if(count($errors) == 0)
    {
        $sql="UPDATE users SET password='$password' where email='$email'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header('location:login.php');
            exit(0);
        }

    }


}




// Code for resetPassword method defined in index.php
//Making sure that the user with the unique token can only reset password
function resetPassword($token)
{
     global $conn;
     $sql="SELECT * FROM users where token='$token' LIMIT 1";
     $result=mysqli_query($conn,$sql);
     $user=mysqli_fetch_assoc($result);
     $_SESSION['email']=$user['email'];
     header('location:reset_password.php');
     exit(0);


}