
<?php
session_start();
include('functions.php');

$session = $_SESSION["gatekeeper"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
<nav>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="index.php">home</a></li>
            <li><a href="index.php">home</a></li>
            <li><a href="index.php">home</a></li>
        </ul>

    </nav>

    

    <div class="space"> </div>

    <div class="grid">
    
    
    <?php include 'header.php';?>
    
    <div class="video">
    <iframe class="yt" width="560" height="315" src="https://www.youtube.com/embed/GoW8Tf7hTGA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    </div>
    <div class="comments">
    <form action="addComment.php">
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <?php  echo "<input type='hidden' name='currUser'  value='$session' /> "; ?>
        <input type="submit" value="Add">

        </form>
    </div>
    <footer class="foot" ></footer>
    
    
</div>


</body>
</html>