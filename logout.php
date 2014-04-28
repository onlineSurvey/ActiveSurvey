<!----File name:logout.php--->
<!-----Author's name:Varin Upadhyay--->
<!-----Website Name:VGP Site Survey--->
<!-------File Description: This is the logout page of user's account--->
<?php
session_start();
echo"hello";
unset($_SESSION["isloggedin"]);
unset($_SESSION["username"]);
session_destroy();
session_unset();
header('location:index.php');
?>