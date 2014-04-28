<!----File name:edit_process.php--->
<!----Author's name:Varin Upadhyay--->
<!-----Website Name:VGP Site Survey--->
<!----File Description: This is the database file of editform.--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=online_survey';

$username = 'survey';
$password= 'root';
$db = new PDO($dsn, $username, $password);
	
<<<<<<< HEAD
	if(isset($_POST['btnsubmit']))
=======
	if(isset($_POST['btnok']))
>>>>>>> e861b431cede3bfdbc79c950e19ec96fc5bc71b1
	{
	$id=$_POST['id'];
	$first_name=$_POST["txtFirstname"];
	$last_name=$_POST["txtLastname"];
	$date_of_birth=$_POST["txtyear"]."-".$_POST['txtmonth']."-".$_POST['txtday'];
	$username=$_POST["txtUsername"];
	$password=$_POST["txtpassword"];
	$email_id=$_POST["txtEmailID"];
	$phone_no=$_POST["txtPhoneno"];
	$city=$_POST["txtcity"];
	$address=$_POST["txtAddress"];
	$postal_code=$_POST["txtPostalCode"];
    $query = "update `users` set `firstname`='$first_name',`lastname`='$last_name',`birthdate`='$date_of_birth',`username`='$username',`password`= '$password',`emailid`='$email_id',`phoneno``='$phone_no',`city`='$city',`address`='$address',`postalcode`='$postal_code' where `user_id`='1'";
	$records = $db->query($query);
	}
	if($records)
	{
		$_SESSION['msg']="Profile is updated successfully";
<<<<<<< HEAD
		header("Location:login_db.php");
=======
		header("Location:editform.php");
>>>>>>> e861b431cede3bfdbc79c950e19ec96fc5bc71b1
		echo"hello1";
	}	
	else
	{
		$_SESSION['err_msg']="a error has been occured";
<<<<<<< HEAD
		header("Location:login_db.php");
=======
		header("Location:editform.php");
>>>>>>> e861b431cede3bfdbc79c950e19ec96fc5bc71b1
	}	
?>
	