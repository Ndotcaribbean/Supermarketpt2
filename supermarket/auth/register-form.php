<?php
//connection to DB
@include '../config.php';


if(isset($_POST['submit'])){
//contection of form to DB
$email = mysqli_real_escape_string($conn, $_POST['email']);
$name = mysqli_real_escape_string($conn, $_POST['name']);

//validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $error[] = 'Invalid email!';
}
//validate password length
elseif(strlen($_POST['password']) < 6){
  $error[] = 'Password must be at leasth 6 characters long!';
}
//validate password
elseif($_POST['password'] != $_POST['cpassword']){
  $error[] = 'Password does not match!';
}
else{
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); //hashes password

  $select = " SELECT * FROM user_form WHERE email = ?"; //? is placeholder
  $stmt = mysqli_prepare($conn, $select); //statement prepare
  
  mysqli_stmt_bind_param($stmt, "s", $email); //binding email value
  
  mysqli_stmt_execute($stmt); //execute the statement
  
  $result = mysqli_stmt_get_result($stmt); //runs in sql

if(mysqli_num_rows($result) > 0){  

 $error[] = 'user already exists!';

}else{

  $stmt = mysqli_prepare($conn, "INSERT INTO user_form(name, email, password) VALUES(? , ? , ?)");
  mysqli_stmt_bind_param($stmt, "sss", $name, $email, $pass);
    
    if(mysqli_stmt_execute($stmt)){
      header('location:login-form.php');  //sends user to login page
    exit();
    }else{
      $error[] = 'Registration failed: ' . mysqli_error($conn);
    }
    
  }
}

  

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h3 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container .form-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container .form-btn:hover {
            background-color: #45a049;
        }
        .form-container p {
            text-align: center;
            margin-top: 10px;
        }
        .form-container a {
            color: #4CAF50;
            text-decoration: none;
        }
        .form-container a:hover {
            text-decoration: underline;
        }
        .error-msg {
            color: red;
            margin-bottom: 10px;
            text-align: center;
            display: block;
        }
    </style>
</head>
<body>
 
<div class="form-container">

    <form action="" method="post">
        <h3>Register Now</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>
        <input type="email" name="email" required placeholder="Enter your email">
        <input type="name" name="name" required placeholder="Enter your name">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="password" name="cpassword" required placeholder="Confirm your password">
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>Already have an account? <a href="login-form.php">Login Now</a></p>
    </form>

</div>

</body>
</html>
