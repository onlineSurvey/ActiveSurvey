<!----File name:Business_Contacts_Link_db.php--->
<!-----Author's name:Gurneet Saggu / Varin Upadhyay / Paras sharma--->
<!----File Description: This is the database file of Business_Contacts_Link.--->
<?php
session_start();

$id=$_GET['id'];
	$dsn= 'mysql:host=localhost;dbname=online_survey';
	$username = 'survey';
	$password= 'root';
	$db = new PDO($dsn, $username, $password);

	
		
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
//UPDATE `online_survey`.`users` SET `firstname` = 'gurneet' WHERE `users`.`user_id` =2;
	$query = "update `users` SET `firstname`='$first_name', `lastname`='$last_name',`birthdate`='$date_of_birth',`username`='$username',
	`password`='$password',`emailid`='$email_id',`phoneno``='$phone_no',`city`='$city',`address`='$address',`postalcode`='$postal_code' where `users_id`='$id'";
	$records = $db->query($query);
	
	if($records)
	{
		$_SESSION['msg']="Profile is updated successfully";
	}	
	else
	{
		$_SESSION['err_msg']="a error has been occured";
	}
	header("Location:login_db.php");
?>	
	