<!----File name:index.html.--->
<!----Author's name:Gurneet Saggu----->
<!-----Website Name:VGP Site Survey--->
<!----http://localhost/Final%20Project/login_db.php ---->
<!----File Description:This is the user profile page------>
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Style.css">
	<title>Online Survey</title>
	</head>
<body>
	<div id="container1">
		<!----nav---->
		<nav>
			<ul >
				<li><a href="index.php">Home Page</a>
				<li><a href="create-survey.php">Create Survey</a>
				<li><a href="response.php">Response Survey</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="https://github.com/onlineSurvey/ActiveSurvey">Git Hub</a></li>
			</ul> 
		</nav>	
		
		<!----header---->
		<header>
			<image id="logo" src="image/logo.png"></img>
		</header>
		
		<div class="container">
		<!-----aside---->
		<aside>
			<br/><br/>
			
		</aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">
			<?php
			$dsn= 'mysql:host=localhost;dbname=online_survey';

			$username = 'survey';
			$password= 'root';
			$db = new PDO($dsn, $username, $password);
			
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
	
			$username = $_POST["username"];
			$password = $_POST["password"];

			$query= "select * from `users` where username = '".$username."' and  password = '".$password."'";    
			$records = $db->query($query);
			$userfound = false;
			foreach($records as $row)
			{
				$pass = $row['password']; 
				$userfound = true;
			}
			/*This portion retrieve the records of user from database--->*/
			if($userfound)
			{
				if($password == $pass)
				{
					$_SESSION["isloggedin"] = true;
					$_SESSION["username"] = $username;
					echo "welcome: " . $_SESSION["username"];?><h1><a href="logout.php">Logout</a></h1><?php
		            echo"<br/>"."<br/>";
					$query= "select * from `users` where username = '".$username."' and  password = '".$password."'"; 
					$records = $db->query($query);
					echo"<table border=1>";
					echo"<tr>";
						echo"<td align=center>"."user_id"."</td>"."<td align=center>"."firstname"."</td>"."<td align=center>"."lastname"."</td>"."<td align=center>"."birthdate"."</td>"."<td align=center>"."username"."</td>"."<td align=center>"."password"."</td>"."<td align=center>"."emailid"."</td>"."<td align=center>"."phoneno"."</td>"."<td align=center>"."city"."</td>"."<td align=center>"."address"."</td>"."<td align=center>"."postalcode"."</td>"."<td align=center>"."&nbsp"."&nbsp"."edit"."&nbsp"."&nbsp"."</td>";
					echo"<tr/>";
					foreach($records as $row)
					{
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
						echo"<a href='editform.php?id=$row[user_id]' style=color:blue; font-family:verdana; font-weight:bold;text-decoration:none;>"."E"."</a>";
					echo"</td>";			
					echo"</tr>";
				}
			}
	}
			else
			{
				$_SESSION["isloggedin"] == false;
				$_SESSION['err_msg']='Please enter the username and password';
				header("location:index.php");
			}
		?>	
		</div>
		</section>
		</div>
	</div>
 </body>
</html>