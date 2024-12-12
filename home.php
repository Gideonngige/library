<?php 
session_start();
$username = "";
if(isset($_SESSION["is_logged_in"])){
    $username = $_SESSION["username"];
}
else{
    $username = "User";
}


    if(isset($_POST["python"])){
        $file_path = 'books/python';
        session_start();
        $_SESSION["file_path"] = $file_path;
        header("Location: read.php"); 
    }
    if(isset($_POST["java"])){
        $file_path = 'books/java';
        session_start();
        $_SESSION["file_path"] = $file_path;
        header("Location: read.php"); 
    }
    if(isset($_POST["c++"])){
        $file_path = 'books/c++';
        session_start();
        $_SESSION["file_path"] = $file_path;
        header("Location: read.php"); 
    }
     
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="home.css"/>
    <title>library</title>
</head>
<body>
    <div class="container">
        <div class="inner-container">
        <nav class="navbar navbar-expand-sm navbar-custom">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="assets\images\library.png" alt="Logo" style="width:40px;" class="rounded-pill">
        </a>
        <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="You are on this page">Home</a>
        <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="This is your username"><?php echo $username ?></a>
        <a href="signin.php" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to sign in">Sign In</a>
        <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to logout">Logout</a>
    </div>
    </nav>
    <div>
        <table class="table table-dark table-custom">
            <tr>
                <td>
                    <img src="assets\images\book.png" alt="Library" class="image">
                </td>
                <td>
                    <h1>Welcome to our Library!</h1>
                    <p>Categories: Programming, Self-improvement, Science, Food technology</p>
                </td>
                <td>
                    <h3>Top Books</h3>
                    <a href=""><button class="top-books">Python Programming</button></a><br>
                    <a href=""><button class="top-books">Java Programming</button></a>
                </td>
                <td>
                    <button type="button" class="btn btn-help" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-placement="bottom" title="Click to get help">
                    <h3>Help</h3>
                    </button>
                    <a href="" class="nav-link"><h3>Logout</h3></a>
                </td>
            </tr>
        </table>
    </div>
    <h3 style="margin-left:30px">Programming</h3><hr>
    <form action="home.php" method="post">
    <div class="row">
        <div class="col-sm-3">
            <button class="btn-books" name="python" type="submit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to see python books"><img src="assets\images\python.png" alt="Library" class="image-btn"><br>Python
            </button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" name="java" type="submit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to see Java books"> <img src="assets\images\java.png" alt="Library" class="image-btn"><br>Java</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" name="c++" type="submit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to see C++ books"><img src="assets\images\cplus.png" alt="Library" class="image-btn"><br>C++</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to see JavaScript books"><img src="assets\images\javascript.png" alt="Library" class="image-btn"><br>JavaScript</button>
        </div>
    </div><br>
    <h3 style="margin-left:30px">Self Development</h3><hr>
    <div class="row">
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\python.png" alt="Library" class="image-btn"><br>Python</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"> <img src="assets\images\java.png" alt="Library" class="image-btn"><br>Java</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\cplus.png" alt="Library" class="image-btn"><br>C++</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\javascript.png" alt="Library" class="image-btn"><br>JavaScript</button>
        </div>
    </div><br>
    <h3 style="margin-left:30px">Business</h3><hr>
    <div class="row">
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\python.png" alt="Library" class="image-btn"><br>Python</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"> <img src="assets\images\java.png" alt="Library" class="image-btn"><br>Java</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\cplus.png" alt="Library" class="image-btn"><br>C++</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\javascript.png" alt="Library" class="image-btn"><br>JavaScript</button>
        </div>
    </div><br>
    <h3 style="margin-left:30px">Science</h3><hr>
    <div class="row">
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\python.png" alt="Library" class="image-btn"><br>Python</button>
        </div>
        <div class="col-sm-3">
        <button class="btn-books" type="button"><img src="assets\images\javaScript.png" alt="Library" class="image-btn"><br>Python</button>
            
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\cplus.png" alt="Library" class="image-btn"><br>C++</button>
        </div>
        <div class="col-sm-3">
            <button class="btn-books" type="button"><img src="assets\images\javascript.png" alt="Library" class="image-btn"><br>JavaScript</button>
        </div>
    </div>

        </div>
        </form>
    </div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!--end of modal content-->

   
    <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

</body>
</html>