<?php
// session_start();

function getUser($username,$password,$mysqli){
    $sql = "select * from users where user_name = '$username'";
    $result = $mysqli->query($sql);
    if(mysqli_num_rows($result)===1){
        $result=$result->fetch_assoc();
        $auth=passwordChecking($password,$result['password']);
        if($auth){
            $_SESSION['authenticated']=1;
            $_SESSION['username']=$username;
            $_SESSION['id']=$result['id']; //required for tasks db (foreign  key);
            header('Location: ./index.php');
            die();
        }else{
            $_SESSION['authenticated']=0;
        }   
    }else{
        echo '<h1 class="text-danger text-center">Username dose`t exist </h1>';
    }

}

function passwordChecking($inputPassword,$userDBPassword){
if(password_verify($inputPassword,$userDBPassword)){
    echo "password matched";
    return true;
}
echo "wrong password";
return false;
}

function getUserTasks(){

}


?>