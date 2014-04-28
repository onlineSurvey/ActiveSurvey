<!----File name:create-survey.php--->
<!-----Author's name:Gurneet Saggu--->
<!-----Website Name:VGP Site Survey--->
<!-----http://localhost/Final%20Project/create-survey.php---->
<!-----File Description:This is the login file of creating survey--->
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
			<h2>Welcome to Online Survey</h2>
			<hr>
			<h3>Hello my freinds,</h3>
			<p>In this web page, user can create the survey by entering the username and password.</p>		
			
		</aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">
				<form id="feedback-form" action="create-survey-process.php" method="post">
				<h2>Login</h2>
				<fieldset>
				<div class="field">
					<label>Username:</lable>
					<input type="text" value="" name="username"/>
			    </div>
			    <div class="field">
					<label>Password:</lable>
					<input type="password" value="" name="password">
				</div>
			    <div class="field1">
					<label><input type="submit" name="btnSubmit" value="Login"></label>
				</div>	
				<a href="registration.php">New Register</a>
				</fieldset>
				</form>
				<?php
				if(isset($_SESSION['err_msg']))
				{
					echo "<font color='red'>".$_SESSION['err_msg']."</font>";
					unset($_SESSION['err_msg']);
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
