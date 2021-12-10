<?php

setcookie("lastname", $_POST['lastname']);
setcookie("firstname", $_POST['firstname']);
setcookie("gender1", $_POST['gender1']);
setcookie("gender2", $_POST['gender2']);
setcookie("age", $_POST['age']);
setcookie("zipcode", $_POST['zipcode']);
setcookie("mail", $_POST['mail']);
setcookie("picture", $_POST['picture']);

$lastname=$_cookie['lastname'];
$firstname=$_cookie['firstname'];
$gender1=$_cookie['gender1'];
$gender2=$_cookie['gender2'];
$age=$_cookie['age'];
$zipcode=$_cookie['zipcode'];
$mail=$_cookie['mail'];
$picture=$_cookie['picture'];

?>