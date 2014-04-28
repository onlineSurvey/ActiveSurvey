<!----File name:index.html.--->
<!-----Author's name:Gurneet Saggu / Varin Upadhyay / Paras sharma--->
<!-------http://localhost/Project/index.html ---->
<!-------File Description: This is the index file of this project--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=online_survey';
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <script src="js/javascript.js"></script> 
  <title>Online Survey</title>
</head>
<body>
	<div id="container1">
		
		<!----nav---->
		<nav>
			<ul >
				<li><a href="index.php">Home Page</a>
				<li><a href="create-syrvey.php">Create Survey</a>
				<li><a href="response.php">Response Survey</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="response.php">Survey Response</a></li>
				<li><a href="https://github.com/Varin6033/Business-Contact-List">Git Hub</a></li>
			</ul> 
		</nav>	
		<!----header---->
		<header>
			<image id="logo" src="image/surveys_and_polls.jpg"></img>
		</header>
		
		<div class="container">
		<!-----aside---->
		<aside>
			<br/><br/>
			<h2>Welcome to Online Survey</h2>
			
		</aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">	
		<?php
			$username = 'survey';
			$password= 'root';
			$db = new PDO($dsn, $username, $password);
			//this section of code logs out the user
			if(isset($_GET["login"]))
		{
			if($_GET["login"])
			{
				$_SESSION["isloggedin"] = false;
				$_SESSION["username"] = "";
				/*session_destroy();*/
				return;
			}
		}
		$username = $_SESSION["username"];
		$password = $_SESSION["password"];
		
		$query= "select * from `users` where username = '".$username."' and  password = '".$password."'"; 
		
		$records = $db->query($query);
		
		echo"<table border=1>";
		echo"<tr>";
			echo"<td align=center>"."user_id"."</td>"."<td align=center>"."firstname"."</td>"."<td align=center>"."lastname"."</td>"."<td align=center>"."birthdate"."</td>"."<td align=center>"."username"."</td>"."<td align=center>"."password"."</td>"."<td align=center>"."emailid"."</td>"."<td align=center>"."phoneno"."</td>"."<td align=center>"."city"."</td>"."<td align=center>"."address"."</td>"."<td align=center>"."postalcode"."</td>"."<td align=center>"."&nbsp"."&nbsp"."delete"."&nbsp"."&nbsp"."</td>"."<td align=center>"."&nbsp"."&nbsp"."edit"."&nbsp"."&nbsp"."</td>";
		echo"<tr/>";
		foreach($records as $row)
		{
		echo"hello";
		echo"<tr>";
			echo"<td align=center>";
				echo $row['user_id'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['firstname'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['lastname'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['birthdate'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['username'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['password'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['emailid'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['phoneno'];
			echo"</td>";
			echo"<td align=center>";
				echo $row['city'];
			echo"</td>";
			echo"<td align=center>";
			echo $row['address'];
			echo"</td>";			
			echo"<td align=center>";
			echo $row['postalcode'];
			echo"</td>";
			echo"<td align=center>";
				echo"<a href='delete.php?id=$row[user_id]' style=color:red; font-family:verdana;font-weight:bold;text-decoration:none;>"."x"."</a>";
			echo"</td>";
			echo"<td align=center>";
				echo"<a href='editform.php?id=$row[user_id]' style=color:blue; font-family:verdana; font-weight:bold;text-decoration:none;>"."E"."</a>";
			echo"</td>";			
		echo"</tr>";
		//print_r($row['first_name']);
		//echo $row;
	 }
	 
//	 mysql_close($db);
?>