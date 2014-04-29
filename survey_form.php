<!----File name:survey_form.php--->
<!-----Author's name:Gurneet Saggu--->
<!-----Website Name:VGP Site Survey--->
<!-------http://localhost/Final%20Project/survey_form.php---->
<!-------File Description: This page provides the user to create a survey--->
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
				<li><a href="https://github.com/Varin6033/Business-Contact-List">Git Hub</a></li>
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
			<p>In this webpage, User can reister for online survey.If user is registered then he/she can create a survey and participate on survey.</p>		
	    </aside>
		
		<!---section---->
		<section id="content">
			<div id="banner">
				<h2>Survey Registration</h2>
				<form action="survey_form_process.php" method="post">
				Description:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtDescription" value="<?php if(isset($_SESSION['pres_val']['txtDescription'])){ echo $_SESSION['pres_val']['txtDescription']; }?>">
				<?php
				if(isset($_SESSION['err_description']))
				{
					echo "<font color='red'>".$_SESSION['err_description']."</font>";
					unset($_SESSION['err_description']);
				}
				?>
				<br/><br/>
				Start Date:&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="txtyear" id="txtyear" >
				<option value"Year">Year</option>
				<?php 
				{?>
					<option value=""><?php echo $i=2013; ?></option>
				<?php	}?>
				</select>
				<select name="txtmonth" id="txtmonth" >
				<option value"Month">Month</option>
				<?php 
				for($i=1;$i<=12;$i++)
				{?>
					<option value=""><?php echo $i; ?></option>
				<?php } ?>
				</select>
				<select name="txtday" id="txtday" >
				<option value"Day">Day</option>
				<?php 
				for($i=1;$i<=31;$i++)
				{?>
				<option value=""><?php echo $i; ?></option>
				<?php } ?>
				</select>
			    <br/><br/>
				End Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="txtyear" id="txtyear">
				<option value"Year">Year</option>
				<?php 
				{?>
					<option value=""><?php echo $i=2013; ?></option>
				<?php	}?>
				</select>
				<select name="txtmonth" id="txtmonth" >
				<option value"Month">Month</option>
				<?php 
				for($i=1;$i<=12;$i++)
				{?>
					<option value=""><?php echo $i; ?></option>
				<?php } ?>
				</select>
				<select name="txtday" id="txtday" >
				<option value"Day">Day</option>
				<?php 
				for($i=1;$i<=31;$i++)
				{?>
				<option value=""><?php echo $i; ?></option>
				<?php } ?>
				</select>
			    <br/><br/>				
				Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtCategory" value="<?php if(isset($_SESSION['pres_val']['txtCategory'])){echo $_SESSION['pres_val']['txtCategory'];}?>">
				<?php
				if(isset($_SESSION['err_category']))
				{
					echo "<font color='red'>".$_SESSION['err_category']."</font>";
					unset($_SESSION['err_category']);
				}
				?>
				<br/><br/>
				Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="Title" name="txtTitle">
				<?php
				if(isset($_SESSION['err_Title']))
				{
					echo "<font color='red'>".$_SESSION['err_Title']."</font>";
					unset($_SESSION['err_Title']);
				}
				?>
				<br/>
				Active:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<select name="active">
				  <option value="Y" selected>Y</option>
				  <option value="N">N</option>
				</select>
				<br/><br/>
				<input type="submit" value="submit" name="btnsubmit">
			</form>
				<?php
				if(isset($_SESSION['err_Title']))
				{
					echo "<font color='red'>".$_SESSION['err_Title']."</font>";
					unset($_SESSION['err_Title']);
				}
				?>
				<br/>
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
