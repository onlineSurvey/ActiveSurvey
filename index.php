<!----File name:index.html.--->
<!-----Author's name:Varin Upadhyay--->
<!-------http://localhost/Project/index.html ---->
<!-------File Description: This is the index file of this project--->
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Style.css">
<script type="text/javascript">

var image1 = new Image()
image1.src ="image/varin2.jpg";
var image2 = new Image()
image2.src ="image/Varin.jpg";
var image3 = new Image()
image3.src ="image/varin1.jpg";

</script>
	<title>Online Survey</title>
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
			<hr>
			<h3>Hello my freinds,</h3>
			<p>By visiting this website, you can participate in online survey. Not only participate, but also you can create your own survey.</p>		
			<p>For creating survey, you should fill this registration form.So you wii have your username and password.</p>
			<p>Anonymous user can also participate in this survey.</p>
		</aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">
				<form id="feedback-form" action="login_db.php" method="post">
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
		<div class="img">
			<a target="_blank" href="https://twitter.com"><img src="image/twitter.png" alt="Klematis"></a>
			<a target="_blank" href="https://ca.linkedin.com/"><img src="image/linkedin.png" alt="Klematis"></a>
			<a target="_blank" href="http://www.youtube.com/"><img src="image/youtube.png" alt="Klematis"></a>
			<a target="_blank" href="https://www.facebook.com/"><img src="image/facebook.png" alt="Klematis"></a>
		</div>
	
		<div id="copyright">Copyright By:Varin Upadhyay, Gurneet Saggu and Paras Shrama</div>
		</footer>
</body>
</html>
</html>