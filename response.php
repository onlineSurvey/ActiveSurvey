<!----File name:response.php--->
<!----Author's name:Varin Upadhyay------>
<!-----Website Name:VGP Site Survey--->
<!----http://localhost/Final%20Project/response.php ---->
<!----File Description: This page is link to the database--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=online_survey';

$username = 'survey';
$password= 'root';

$db = new PDO($dsn, $username, $password);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Style.css">
	<title>Online Survey</title
</head>
<body>
	<div id="container1">
		<!----nav---->
		<nav>
			<ul>
				<li><a href="index.php">Home Page</a>
				<li><a href="create-survey.php">Create Survey</a>
				<li><a href="take-survey.php">Response Survey</a></li>
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
			<h2>Welcome to Online Survey</h2>
			<hr>
			<h3>Responds Survey,</h3>
			<p>In this web page ,anonymous user can give response any survey.</p>		
			
		</aside>
		
		<!---section---->
		<h3>Surveys</h3>
				<hr>
					<form action="response_db.php" method="post">
					<ul class="projects">
						<li><h4><a href="response_db.php?questions_id=1 ">Survey On this website</a></h4></li>
					</ul>
					</form>
					<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset ($_SESSION['msg']);
						}
					?>
		</div>
		</div>	
	
		<!---footer---->
		<footer>		
		<div id="copyright">Copyright By:Varin Upadhyay, Gurneet Saggu and Paras Shrama</div>
		</footer>
		
</body>
</html>