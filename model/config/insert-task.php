
<?php

function insertTask($mysqli,$taskContent,$UserId){

    $sql="INSERT INTO `tasks` (`task_id`, `user_id`, `content`, `submit_date`) VALUES (NULL, '$UserId', '$taskContent', current_timestamp())";
    $result=$mysqli->query($sql);
    echo $result;
}
?>