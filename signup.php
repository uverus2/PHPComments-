<?php 
include('functions.php');
$usernames = htmlentities($_POST["username"]);
$passwords = htmlentities($_POST["password"]);

session_start();

$database = connect();
$results =$database->prepare("SELECT * FROM users WHERE username =:name AND password =:pass");
$results->bindParam(':name', $usernames);
$results->bindParam(':pass', $passwords);
$results->execute();
 
$loginRow=$results->fetch();

if ($loginRow != false) 
{

        $_SESSION["gatekeeper"] = $usernames;
        header("Location: index.php");

}
else
{
    echo "Incorrect  username or password  </a> ";
}


?>