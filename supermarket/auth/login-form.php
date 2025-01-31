<?php
session_start();

//connection to DB
@include '../config.php';

if (!$conn) {
  die("Database connection not established.");
}

if(isset($_POST['submit'])){
//contection of form data to DB
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = $_POST['password'];

$select = " SELECT * FROM user_form WHERE email = ?"; //? is placeholder
$stmt = mysqli_prepare($conn, $select); //statement prepare

mysqli_stmt_bind_param($stmt, "s", $email); //binding email value

mysqli_stmt_execute($stmt); //execute the statement

$result = mysqli_stmt_get_result($stmt); //runs in sql

if($row = mysqli_fetch_assoc($result)){

    if(password_verify($pass, $row['password'])){
        //store user information in session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];


        session_regenerate_id(true); //regenerate session id for security


        header('location:/index.php'); //sends user to home page
        exit();
    }else {
        $error[] = 'Incorrect email or password!';
    }
    
}else {
    $error[] = 'Incorrect email or password!';
}
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        .login-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
        .signup-option {
            text-align: center;
            margin-top: 10px;
        }
        .signup-option a {
            color: #4CAF50;
            text-decoration: none;
        }
        .signup-option a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php if (!empty($error)) : ?>
        <div class="error">
            <?php echo implode('<br>', $error); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit" name="submit">Login</button>
    </form>

    <div class="signup-option">
        <p>Don't have an account? <a href="register-form.php">Sign Up</a></p>
    </div>
</div>

</body>
</html>

