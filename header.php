<?php 

$database= connect();
$results = $database->prepare("SELECT username FROM users WHERE username =:name");
$results->bindParam(':name', $session);
$results->execute();
$row=$results->fetch();

echo " <div class='user'> 

<p class='signedIn'> Signed in as ".$row["username"]. "</p>

</div>"
?>