<!----File name:index.html.--->
<!-----Author's name:Gurneet Saggu / Varin Upadhyay / Paras sharma--->
<!-------http://localhost/Project/index.html ---->
<!-------File Description: This is the index file of this project--->
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
				<li><a href="take-survey.php">Response Survey</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="survey-response.php">Survey Response</a></li>
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
			<h3>Responds Survey,</h3>
			<p>In this web page ,anonymous user can give response any survey.</p>		
			
		</aside>
		
		<!---section---->
		
				<?php
							if(isset($_GET["questions_id"]))
							{
							
								$id = $_GET['questions_id']  ;
								$query1="SELECT * FROM questions where `questions_id`='$id'";
								$result=$db->query($query1); 
							
								$res = $result->fetch();
								;?>
								
				<?php
							}
				?> 
		<section id="content">
			<div class="inside">
				<h3>Surveys</h3>
				<hr>
					<h4>Survey On this website</h4>
					
				<form action="insert2.php" method="post">
			<tr>
				<td>Question1:<?php echo $res['title']."</br>";?></td>
			<tr>
			<tr>
			<td>Rating:</td>
			<td><select name="selrating">
			<option></option>
			<option>1.0</option>
			<option>2.0</option>
			<option>3.0</option>
			<option>4.0</option>
			<option>5.0</option>
			<option>6.0</option>
			<option>7.0</option>
			<option>8.0</option>
			<option>9.0</option>
			<option>10.0</option>
			
			</select>
			<?php
			if(isset($_SESSION['err_Country']))
			{
				echo $_SESSION['err_Country'];
				unset($_SESSION['err_Country']);
			}
			?>
			</tr>
			<br/><br/><br/>
			Question2:This website is fully user friendly.<br/>
			<input type="radio" name="radGender" value="male"/>Disagree
			<input type="radio" name="radGender" value="Female"/>Agree
			<?php
			if(isset($_SESSION['err_Gender']))
			{
				echo"<td>";
				echo $_SESSION['err_Gender'];
				echo "</td>";
				unset ($_SESSION['err_Gender']);
			}
			?>
			<br/><br/>
			Question3:Write your opinion of this website.<br/>
			<textarea name="txtdescription"></textarea>
			<?php
			if(isset($_SESSION['err_Hobby']))
			{
				echo $_SESSION['err_Hobby'];
				unset($_SESSION['err_Hobby']);
			}
			?>
			<td colspan="2"><br/> 
			<input type="submit" value="submit responses" name="btnok"/>
			</form>
			</table>
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
