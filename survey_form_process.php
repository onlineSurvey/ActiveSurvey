<!----File name:survey_form_process.php--->
<!-----Author's name:Gurneet Saggu--->
<!-----Website Name:VGP Site Survey--->
<!-------http://localhost/Final%20Project/survey_form.php---->
<!-------File Description: This page provides the user to create a survey--->
<?php
session_start();

$ownerID = 1;
$title = $_POST["txtTitle"];
$description = $_POST["txtDescription"];
$startdate=$_POST["txtyear"]."-".$_POST['txtmonth']."-".$_POST['txtday'];
$enddate=$_POST["txtyear"]."-".$_POST['txtmonth']."-".$_POST['txtday'];
$category = $_POST["txtCategory"];
$isactive = $_POST["active"];


    if(isset($_SESSION["btnsubmit"]))
    {    
      $dsn= 'mysql:host=localhost;dbname=online_survey';
	  $username = 'survey';
      $password= 'root';
      $db = new PDO($dsn, $username, $password);
	  
      $query = "insert into `surveys` values('null','$ownerID','$description','$startdate','$enddate','$category','$title','$isactive')";
	  $records = $db->query($query);
		
      
      header("Location:survey_form.php");  
    }
?>