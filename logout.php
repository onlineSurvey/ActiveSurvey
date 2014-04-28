
<?php
session_start();
echo"hello";
unset($_SESSION["isloggedin"]);
unset($_SESSION["username"]);
session_destroy();
session_unset();
header('location:Business_Contacts_Link.php');
?>