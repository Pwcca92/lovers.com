<?php
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender1'])  && isset($_POST['gender2']) && isset($_POST['age']) && isset($_POST['zipcode']) && isset($_POST['mail'])){
    setcookie("lastname", $_POST['lastname'], time()+3600*24, "/");
setcookie("firstname", $_POST['firstname'], time()+3600*24, "/");
setcookie("gender1", $_POST['gender1'], time()+3600*24, "/");
setcookie("gender2", $_POST['gender2'], time()+3600*24, "/");
setcookie("age", $_POST['age'], time()+3600*24, "/");
setcookie("zipcode", $_POST['zipcode'], time()+3600*24, "/");
setcookie("mail", $_POST['mail'], time()+3600*24, "/");
setcookie("picture", $_POST['picture'], time()+3600*24, "/");
}
header("location: ../views/users.php");
?>