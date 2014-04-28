<?php
	$id=$_GET['id'];
	$dsn= 'mysql:host=localhost;dbname=online_survey';

	$username = 'survey';
	$password= 'root';
	$db = new PDO($dsn, $username, $password);
			
	
	$query="select * from `users` where `user_id`='$id'";
		
	$records = $db->query($query);
	foreach($records as $row)
	
?>
<?php
  session_start();
 ?>
<html>
<head>
	<title>Entry Form</title>
</head>
<body>
			<form action="edit_process.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row[0];?>"/>
			Firstname:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtFirstname" value="<?php echo $row[1];?>">
				<?php
				if(isset($_SESSION['err_firstname']))
				{
					echo "<font color='red'>".$_SESSION['err_firstname']."</font>";
					unset($_SESSION['err_firstname']);
				}
				?>
				<br/><br/>
				Lastname&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtLastname" value="<?php echo $row[2];?>">
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
				<input type="text" name="txtUsername" value="<?php echo $row[4];?>">
				<?php
				if(isset($_SESSION['err_username']))
				{
					echo "<font color='red'>".$_SESSION['err_username']."</font>";
					unset($_SESSION['err_username']);
				}
				?>
				<br/><br/>
				EmailID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtEmailID" value="<?php echo $row[5];?>">
				<?php
				if(isset($_SESSION['err_EmailID']))
				{
					echo "<font color='red'>".$_SESSION['err_EmailID']."</font>";
					unset($_SESSION['err_EmailID']);
				}
				?>
		 		<br/><br/>
				Phone No: &nbsp;&nbsp;&nbsp;
				<input type="text" name="txtPhoneno" value="<?php echo $row[6];?>">
				<?php
				if(isset($_SESSION['err_Phoneno']))
				{
					echo "<font color='red'>".$_SESSION['err_Phoneno']."</font>";
					unset($_SESSION['err_Phoneno']);
				}
				?>
				<br/><br/>
				City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="text" name="txtcity" value="<?php echo $row[7];?>">
				<?php
				if(isset($_SESSION['err_city']))
				{
					echo "<font color='red'>".$_SESSION['err_city']."</font>";
					unset($_SESSION['err_city']);
				}
				?>
				<br/><br/>
				Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="textarea" name="txtAddress" value="<?php echo $row[8];?>">
				<?php
				if(isset($_SESSION['err_Address']))
				{
					echo "<font color='red'>".$_SESSION['err_Address']."</font>";
					unset($_SESSION['err_Address']);
				}
				?>
				<br/><br/>
				PostalCode&nbsp:&nbsp;
				<input type="text" name="txtPostalCode" value="<?php echo $row[9];?>">
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
		<?php
		if(isset($_SESSION['firstname']))
		{
			//echo "Firstname:$_SESSION[Firstname]";
			unset($_SESSION['firstname']);
		}
		echo "<br/>";
		if(isset($_SESSION['Lastname']))
		{
			//echo "Lastname:$_SESSION[Lastname]";
			unset($_SESSION['Lastname']);
		}
		echo "<br/>";
		if(isset($_SESSION['EmailID']))
		{
			//echo "EmailID:$_SESSION[EmailID]";
			unset($_SESSION['EmailID']);
		}
		echo "<br/>";
		if(isset($_SESSION['Phoneno']))
		{
			//echo "Phoneno:$_SESSION[Phoneno]";
			unset($_SESSION['Phoneno']);
		}
		echo "<br/>";
		if(isset($_SESSION['Address']))
		{
			//echo "Address:$_SESSION[Address]";
			unset($_SESSION['Address']);
		}
		echo "<br/>";
		if(isset($_SESSION['Country']))
		{
			//echo "Country:$_SESSION[Country]";
			unset($_SESSION['Country']);
		}
		echo "<br/>";
		if(isset($_SESSION['Gender']))
		{
			//echo "Gender:$_SESSION[Gender]";
			unset($_SESSION['Gender']);
		}
		echo "<br/>";
		if(isset($_SESSION['Hobby']))
		{
			//echo "Hobby::";
			foreach($_SESSION['Hobby'] as $i)
			{
				
			//	echo $i;
				echo ",";
			}
			unset($_SESSION['Hobby']);
		}
	?>        
	<?php
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
	?>
	<?php
		include 'dbform.php';
	?>

</body>
</html>