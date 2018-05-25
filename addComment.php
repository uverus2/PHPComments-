<?php 

include('functions.php');

session_start();
$database = connect();

$user = $_POST["currUser"];
$comment = $_POST["comment"];


$results=$database->prepare("INSERT INTO comments (comment,username) VALUES (:com,:user)");
$results->bindParam(':user', $user);
$results->bindParam(':com', $comment);
$results->execute();

header("Location:showComment.php");






?>
