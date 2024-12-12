<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="signup.css">
    <title>sign up</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <h2>Sign Up</h2><hr>
            <form action="signup.php" method="post">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="your username" required />
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="e.g aaa@gmail.com" />
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="your password" />
                <label>Confirm password</label>
                <input type="password" class="form-control" name="password2" placeholder="confirm password" />
                <input type="submit" value="Sign Up" />
                <p>Already have an account? <a href="signin.php">Sign in here</a></p>

            </form>
<?php
$serverName="localhost";
$username="root";
$password="@mysql2024";
$dbname="library";

$conn= mysqli_connect($serverName,$username,$password,$dbname);

if (!$conn){
    //die("Connection failed)");
}
//echo "Connection";

if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password2"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    
    $sql = "SELECT password FROM users WHERE password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        //echo "User already exists";
        echo '<div class="alert alert-danger" role="alert">'; echo "User already exists";
    }
    else{
        if($password == $password2){
            $query="insert into users (username,email,password)values('$username','$email','$password')";
            mysqli_query($conn, $query);
            echo '<div class="alert alert-success" role="alert">'; echo "User registered successfully";
            //echo "User registered successfully";

        }
        else{
            echo '<div class="alert alert-danger" role="alert">'; echo "Incorrect password";
            //echo "Incorrect password";
        }
        
    }

}




?>
        </div>
    </div>
    
</body>
</html>