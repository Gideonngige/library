<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="signin.css">
    <title>sign in</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
            <h2>Sign In</h2><hr>
            <form action="signin.php" method="post">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="your username" required/>
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="your password" required />
                <input type="submit" value="Login" />
                <p>Do not have an account? <a href="signup.php">Sign up here</a></p>
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

            if(isset($_POST["username"]) && isset($_POST["password"]) ){
                $username = $_POST["username"];
                $password = $_POST["password"];

                $sql = "SELECT username FROM users WHERE password = '$password'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) >  0){
                    //echo "Login successful";
                    echo '<div class="alert alert-danger" role="alert">'; echo "Login successful";
                    while($row = mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["is_logged_in"] = true;
                        header("Location: home.php");
                        
                    }
                }
                else{
                    echo '<div class="alert alert-danger" role="alert">'; echo "Invalid username or password!!";
                    //echo "Invalid username or password";
                }
            }
            

            ?>

        </div>
    </div>
    
</body>
</html>