<!----File name:answer_db.php--->
<!----Author's name:Varin Upadhyay--->
<!-----Website Name:VGP Site Survey--->
<!----File Description:This is the database file of response_db.php.--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=online_survey';

$username = 'survey';
$password= 'root';
$db = new PDO($dsn, $username, $password);

	if(isset($_POST["btnok"]))
	{
	$answer=$_POST["selrating"].$_POST["radChoice"].$_POST["txtdescription"];
		
	$query= "insert into `userresponses` values('null',1,1,'$answer')";
	$_SESSION['msg'] = "Your answers submitted successfully";
	$records = $db->query($query);
	}
	echo"hello";
	header("Location:response.php");
	die();
?>
