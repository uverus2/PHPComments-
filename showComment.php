<?php 


include('functions.php');
$database = connect();
session_start();

$result = $database->query("SELECT * FROM comments");


while($row=$result->fetch()){
    echo "Username: </br>";
    echo $row['username']." </br>";

    echo "Comment: </br>";
    echo $row['comment']."</br>";
    
}




?>