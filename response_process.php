<!----File name:response.php--->
<!----Author's name:Varin Upadhyay--->
<!-----Website Name:VGP Site Survey--->
<!----File Description: This is the database file of registration process.--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=online_survey';

$username = 'survey';
$password= 'root';
$db = new PDO($dsn, $username, $password);
	
	$_SESSION['pres_val']=$_POST;	
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
	
		if($first_name=="")
		{
			$_SESSION['err_firstname']='please enter the firstname';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['firstname']=$first_name;
			
		}
		if($last_name=="")
		{
			$_SESSION['err_lastname']='please enter the last name';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['lastname']=$last_name;
		}
		if($date_of_birth=="")
		{
			$_SESSION['err_dateofbirth']='please enter the birth-date';
			header("Location:registration.php");
		}
		else
		{
				$_SESSION['date_of_birth']=$date_of_birth;
		}
		if($username=="")
		{
			$_SESSION['err_username']='please enter the username';
			header("Location:registration.php");
		}
		else
		{
				$_SESSION['username']=$username;
		}
		if($password=="")
		{
			$_SESSION['err_password']='please enter the password';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['password']=$password;
		}
		if($email_id=="")
		{
			$_SESSION['err_EmailID']='please enter the emailid';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['EmailID']=$email_id;
		}
		if($phone_no=="")
		{
			$_SESSION['err_Phoneno']='please enter the phoneno';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['Phoneno']=$phone_no;
		}
		if($address=="")
		{
			$_SESSION['err_Address']='please enter the Address';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['Address']=$address;
		}
		if($city=="")
		{
			$_SESSION['err_city']='please enter the city';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['city']=$city;
		}
		if($postal_code=="")
		{
			$_SESSION['err_postalcode']='please enter the postal code';
			header("Location:registration.php");
		}
		else
		{
			$_SESSION['postalcode']=$postal_code;
		}
		
		$query = "insert into `users` values('null','$first_name','$last_name','$date_of_birth','$username','$password','$email_id','$phone_no','$city','$address','$postal_code')";
		$records = $db->query($query);
		
		if($records)
		{
			$_SESSION['msg']="You are registered successfully ";
			header("Location:index.php");
		}
		else
		{
			$_SESSION['err_msg']="a error has been occured";
		}
		mysql_close($link);
		
		die();
?>