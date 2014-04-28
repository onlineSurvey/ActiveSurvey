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
			<p>In this webpage, User can reister for online survey.If user is registered then he/she can create a survey and participate on survey.</p>		
	    </aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">
				<h2>Registration</h2>
				<form action="response_process.php" method="post">
				Firstname:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtFirstname" value="<?php if(isset($_SESSION['pres_val']['txtFirstname'])){ echo $_SESSION['pres_val']['txtFirstname']; }?>">
				<?php
				if(isset($_SESSION['err_firstname']))
				{
					echo "<font color='red'>".$_SESSION['err_firstname']."</font>";
					unset($_SESSION['err_firstname']);
				}
				?>
				<br/><br/>
				Lastname&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtLastname" value="<?php if(isset($_SESSION['pres_val']['txtLastname'])){echo $_SESSION['pres_val']['txtLastname'];}?>">
				<?php
				if(isset($_SESSION['err_lastname']))
				{
					echo "<font color='red'>".$_SESSION['err_lastname']."</font>";
					unset($_SESSION['err_lastname']);
				}
				?>				
				<br/><br/>
				
				Date of Birth 
                <select name="txtyear" id="txtyear" >
				<option value"Year">Year</option>
				<?php 
				for($i=1960;$i<=2013;$i++)
				{?>
					<option value""><?php echo $i; ?></option>
				<?php	}?>
				</select>
				<select name="txtmonth" id="txtmonth" >
				<option value"Month">Month</option>
				<?php 
				for($i=1;$i<=12;$i++)
				{?>
					<option value""><?php echo $i; ?></option>
				<?php } ?>
				</select>
				<select name="txtday" id="txtday" >
				<option value"Day">Day</option>
				<?php 
				for($i=1;$i<=31;$i++)
				{?>
				<option value""><?php echo $i; ?></option>
				<?php } ?>
				</select>
			    
				<br/><br/>
				Username:&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtUsername" value="<?php if(isset($_SESSION['pres_val']['txtUsername'])){echo $_SESSION['pres_val']['txtUsername'];}?>">
				<?php
				if(isset($_SESSION['err_username']))
				{
					echo "<font color='red'>".$_SESSION['err_username']."</font>";
					unset($_SESSION['err_username']);
				}
				?>
				<br/><br/>
				Password:&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="password" name="txtpassword">
				<?php
				if(isset($_SESSION['err_password']))
				{
					echo "<font color='red'>".$_SESSION['err_password']."</font>";
					unset($_SESSION['err_password']);
				}
				?>
				<br/><br/>
				EmailID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtEmailID" value="<?php if(isset($_SESSION['pres_val']['txtEmailID'])){echo $_SESSION['pres_val']['txtEmailID'];}?>">
				<?php
				if(isset($_SESSION['err_EmailID']))
				{
					echo "<font color='red'>".$_SESSION['err_EmailID']."</font>";
					unset($_SESSION['err_EmailID']);
				}
				?>
		 		<br/><br/>
				Phone No: &nbsp;&nbsp;&nbsp;
				<input type="text" name="txtPhoneno" value="<?php if(isset($_SESSION['pres_val']['txtPhoneno'])){echo $_SESSION['pres_val']['txtPhoneno'];}?>">
				<?php
				if(isset($_SESSION['err_Phoneno']))
				{
					echo "<font color='red'>".$_SESSION['err_Phoneno']."</font>";
					unset($_SESSION['err_Phoneno']);
				}
				?>
				<br/><br/>
				City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="text" name="txtcity" value="<?php if(isset($_SESSION['pres_val']['txtcity'])){echo $_SESSION['pres_val']['txtcity'];}?>">
				<?php
				if(isset($_SESSION['err_city']))
				{
					echo "<font color='red'>".$_SESSION['err_city']."</font>";
					unset($_SESSION['err_city']);
				}
				?>
				<br/><br/>
				Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="textarea" name="txtAddress" value="<?php if(isset($_SESSION['pres_val']['txtAddress'])){echo $_SESSION['pres_val']['txtAddress'];}?>">
				<?php
				if(isset($_SESSION['err_Address']))
				{
					echo "<font color='red'>".$_SESSION['err_Address']."</font>";
					unset($_SESSION['err_Address']);
				}
				?>
				<br/><br/>
				PostalCode&nbsp:&nbsp;
				<input type="text" name="txtPostalCode" value="<?php if(isset($_SESSION['pres_val']['txtPostalCode'])){echo $_SESSION['pres_val']['txtPostalCode'];}?>">
				<?php
				if(isset($_SESSION['err_state']))
				{
					echo "<font color='red'>".$_SESSION['err_state']."</font>";
					unset($_SESSION['err_state']);
				}
				?>
				<br/>
				<input type="submit" value="submit" name="btnsubmit">
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