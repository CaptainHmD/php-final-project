<?php

function getTask($mysqli){
    if(isset($_SESSION['id'])){
        $sql ="select * from tasks where user_id=".$_SESSION['id'];
        $result=$mysqli->query($sql);
        $row=$result->fetch_all(MYSQLI_ASSOC);
        // print_r($row[0]["content"]);
        // echo sizeof($row); 
        return $row;
    }
}


?>