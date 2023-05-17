<?php

function deleteTask($mysqli,$taskId){

    $sql = "delete from tasks where task_id =$taskId";

    $result=$mysqli->query($sql);
}

?>