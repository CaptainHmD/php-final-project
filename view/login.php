<?php

  // if(password_verify($password,$password2)){
  //   echo "password match";
  // }
  session_start();
if(isset($_SESSION['authenticated'])){
    $_SESSION['authenticated']===1 ? header("Location: ./index.php"): "";
    
}
  include '../model/conn.php';
  include '../model/get-data.php';

  if(isset($_GET['user'])){
    if($_GET['user']=='false'){
        echo '<h1 class="text-danger text-center"> Username dose`t exists </h1>';
    } 
    
  }


  if(isset($_POST['submit'])){
    getUser($_POST['username'],$_POST['password'],$mysqli);
}






?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">

</head>

<body class="overflow-x-hidden">
<nav class="border p-3">
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link" href="./index.php">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./register.php">Register</a>
            </li>
        </ul>
    </nav>
    <div class="row d-flex justify-content-center">
        <img src="https://img.icons8.com/external-bearicons-gradient-bearicons/256/external-login-call-to-action-bearicons-gradient-bearicons.png" class="img-fluid w-25 m-3" alt="...">
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <!-- <div class="col-md-12 d-flex justify-content-center"> -->
        <form action="" method="post" class="col-sm-12 d-flex flex-column justify-content-center p-5 border border-light w-75">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" require>
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary submit-color fs-res fs-3 fw-bolder" type="submit" value="submit" name="submit">Submit form</button>
            </div>
        </form>
        <!-- </div> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>