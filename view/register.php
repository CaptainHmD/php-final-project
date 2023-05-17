<?php
//imports
include "../model/conn.php";
include "../model/create-user.php";
session_start();
if(isset($_POST['submit'])){

  //! initialize variable
  //$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  define("username",trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
  define("email",trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
  $password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
  $alert="";
  $valid=true;


  if(!usernameValid(username)){
    $alert.='<h1 class="text-danger text-center"> username missing </h1>';
    $valid=false;
  }
  if(!emailValid(email)){
    $alert.='<h1 class="text-danger text-center">email missing </h1>';
    $valid=false;
  }
  if(!passwordValid($password)){
    $alert.='<h1 class="text-danger text-center"> password missing </h1>';
    $valid=false;
  }


  
  if($valid){ // if all inputs fills
    //! hash the password
    $password = password_hash($password,PASSWORD_DEFAULT);

    //! check for duplicates username or email
    if(checkDuplicate(username,email,$mysqli)){
      //! now create the new user
      $result = createUser(username,email,$password,$mysqli);    
      if ($result==1) {
        echo '<h1 class="text-success text-center"> User created </h1>';

      }else
        echo '<h1 class="text-danger text-center"> DB creation problem</h1>';
    }else{
      echo '<h1 class="text-danger text-center"> username or email already used</h1>';
    }
  }else{
    echo $alert;
  }

}


function checkDuplicate($username,$email,$mysql){
  $sql = "select * from users where user_name='$username' or email='$email'";
  $result = $mysql->query($sql);
  $feedback = mysqli_fetch_all($result,MYSQLI_ASSOC); // convert sql results to associative array , a numeric array, or both.
  if(empty($feedback)){ // return true if there is no email or username matched
    return true;// true for none duplicate
  }
  return false;
}
function usernameValid($username){
  if(empty($username))
    return false;
  return true;
}
function passwordValid($password){
  if(empty($password)){
    return false;
  }
  return true;
}
function emailValid($email){
  if(empty($email))
    return false;
  return true;
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
        <img src="https://img.icons8.com/external-filled-outline-geotatah/256/external-register-training-management-system-filled-outline-filled-outline-geotatah.png" class="img-fluid w-25 m-3" alt="...">
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <!-- <div class="col-md-12 d-flex justify-content-center"> -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="col-sm-12 d-flex flex-column justify-content-center p-5 border border-light w-75">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="username" class="form-control" id="username" name="username" placeholder="username" minlength="3" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" required>
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