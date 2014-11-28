<?php
session_start()

?>

<!DOCTYPE html>
<HTML>
<HEAD>
<link rel="stylesheet" href="../css/Index.css">
<link rel="stylesheet" href="../css/ContactInfo.css">
<TITLE>Contact Us-Westminster College Tutors</TITLE>
</HEAD>

<BODY>
<div class="header">
	<h1><center><a href="../index.php">Westminster College Tutors</a></center></h1>
	</div>
	<div class="TopLinkBar">
		<table>
			<tr>
				<td><a href="<?php 
					if($_SESSION['status']== "administrator" )
					        echo "AdminIndex.php";
					else if($_SESSION['status']=="tutor")
							echo "TutorIndex.php";
					else
						echo "www.westminster-mno.edu";
							?>">Home Page</a></td>
				<td style="width:504px"></td>
				<td><a href="ContactInfo.php">Contact Us</a></td>
			</tr>
		</table>	
	</div>
	<div class="QuickLinks">
		<center><ul>
			<li><b>Quick Links</b></li>
			<li><a target="blank" href="http://www.westminster-mo.edu/Pages/default.aspx">WestMO College</a></li>
			<li><a target="blank" href="https://mywc.westminster-mo.edu/ics">MyWC</a></li>
			<li><a target="blank" href="http://moodle2.westminster-mo.edu/">Moodle</a></li>
		</ul></center>
	</div>
	<div class="MiddleBox">
		<div class="ContactUs">
		<h4><center>Contact Us</center></h4>
		<form action="p_ContactInfo.php" method="post">
			<label>First Name: <br>
			<input type="text" name="FirstName"></label><br>
			<label>Last Name: <br>
			<input type="text" name="LastName"></label><br><br>
			<label>
			<textarea name="Comments" placeholder="Enter your comments..."></textarea></label><br>
			<label><input type="submit" name="ContactSubmit" value="Submit"></label>
		</form>
		</div>
	</div>
	<div class="LoginNews">
	<?php 
		if($_SESSION['status']=="visitor") //we check if the person is logged in or not
		{
			include('../pages/login.html');
		} else 
		{
			include('../pages/Logout.php');
		} 
		?>
		<hr color = "RoyalBlue" size ="1">
		<div class="News">
			News
		</div>
	</div>
</BODY>
</HTML>