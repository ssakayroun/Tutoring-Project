<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<link rel="stylesheet" href="../css/Index.css">
<link rel="stylesheet" href="../css/TutorIndex.css">
<TITLE>Tutors-Westminster College Tutors</TITLE>
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
			<li><a href="http://www.westminster-mo.edu/Pages/default.aspx">WestMO College</a></li>
			<li><a href="https://mywc.westminster-mo.edu/ics">MyWC</a></li>
			<li><a href="http://moodle2.westminster-mo.edu/">Moodle</a></li>
		</ul></center>
	</div>
	<div class="MiddleBox">
		<div class="TutorHours">
			<form id = "TutorHours" action="p_TutorIndex.php" method="post">
				<fieldset>
					<legend>Input Hours</legend>
					<label>Date worked:<br>
					<input type="date" name="DateWorked" required></label><br>
					<label>Start Time:<br>
					<input type="time" name="StartTime" required></label><br>
					<label>End Time:<br>
					<input type="time" name="EndTime" required></label><br>
					<label><input type="submit" name="HoursSubmit" value="Submit"></label>
				</fieldset>
			</form>
		</div>
		<div class="StudentInput">
			<form action="../ppages/p_TutoringIndex.php" method="post">
				<fieldset>
					<legend>Input Students</legend>
					<label>First Name:
					<input type="text" id="name" name="StudentName" required></label>
					<label>Surname:
					<input type="text" id="name" name="StudentSurname" required></label>
					<label><input type="submit" name="StudentSubmit" value="Submit"></label>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="LoginNews">
	<?php 
		if($_SESSION['status']=="visitor") //we check if the person is logged in or not
		{
			include('login.html');
		} else 
		{
			include('logout.php');
		} 
		?>
		<hr color = "RoyalBlue" size ="1">
		<div class="News">
			News
		</div>
	</div>
</BODY>
</HTML>
