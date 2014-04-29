<!----File name:create-survey-process.php--->
<!-----Author's name:Paras Sharma------>
<!-----Website Name:VGP Site Survey--->
<!-------http://localhost/Project/index.html ---->
<!-------File Description: This is the index file of this project--->
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

			if($userfound)
			{
				if($password == $pass)
				{
					$_SESSION["isloggedin"] = true;
					$_SESSION["username"] = $username;
					echo "welcome: " . $_SESSION["username"];?><h1><a href="logout.php">Logout</a><h1><a href="response.php">Responds a Survey</a></h1><br/><h1><a href="survey_form.php">Create Survey</a></h1><?php
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
		<!---footer---->
		<footer>		
		<div id="copyright">Copyright By:Varin Upadhyay, Gurneet Saggu and Paras Shrama</div>
		</footer>
</body>
</html>
