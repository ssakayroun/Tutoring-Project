<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<link rel="stylesheet" href="css/Index.css">
<TITLE>Home-Westminster College Tutors</TITLE>
</HEAD>

<BODY>
	<div class="background">
	<div class="header">
	<h1><center><a href="index.php">Westminster College Tutors</a></center></h1>
	</div>
	<div class="TopLinkBar">
		<table>
			<tr>
				<td><a href="<?php 
					if($_SESSION['status']== "administrator" )
					        echo "http://www.westminster-mo.edu";
					else if($_SESSION['status']=="tutor")
							echo "www.facebook.com";
					else
						echo "www.westminster-mno.edu";
							?>">Home Page</a></td>
				<td style="width:504px"></td>
				<td><a href="pages/ContactInfo.php">Contact Us</a></td>
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
		<table id="tutors">
			<tr>
				<td>Course Code</td>
				<td>Class Name</td>
				<td>Tutor Name</td>
				<td>Hours</td>
			</tr>
			<tr class="alt"><td>code</td><td>class</td><td>tutor</td><td>time</td></tr>
			<tr><td>code</td><td>class</td><td>tutor</td><td>time</td></tr>
			<tr class="alt"><td>code</td><td>class</td><td>tutor</td><td>time</td></tr>
		</table>
	</div>
	<div class="LoginNews">
	<?php 
		if($_SESSION['status']=="visitor") //we check if the person is logged in or not
		{
			include('pages/login.html');
		} else 
		{
			include('pages/Logout.php');
		} 
		?>
		<hr color = "RoyalBlue" size ="1">
		<div class="News">
			News
		</div>
	</div>
	</div>
	<script type="text/javascript" src="scripts/formValidation.js"></script>
</BODY>
</HTML>
