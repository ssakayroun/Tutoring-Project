<?php
session_start();

?>
<!DOCTYPE html>
<HTML>
<HEAD>
<link rel="stylesheet" href="../css/Index.css">
<link rel="stylesheet" href="../css/AdminIndex.css">
<TITLE>Home-Westminster College Tutors</TITLE>
</HEAD>

<BODY>
<div class="background">
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
		<div class="ViewTutees">
			<form action="" method="post">
				<fieldset>
					<legend>List of Tutees</legend>
					<label>Start Date:<br>
					<input type="date" name="StartDate" required></label><br>
					<label>End Date:<br>
					<input type="date" name="EndDate" required></label><br><br>
					<label><input type="submit" name="ViewTutees" value="View Tutees"></label>
				</fieldset>
			</form>
		</div>
		<div class="TutorInput">
			<form action="" method="post">
				<fieldset>
					<legend>Add Tutor</legend>
					<label>First Name:
					<input type="text" name="StudentName" required></label>
					<label>Surname:
					<input type="text" name="StudentSurname" required></label><br>
					<label>Email(login):
					<input type="text" name="StudentEmail" required></label><br>
					<label>Password:<br>
					<input type="password" name="StudenPassword" required></label><br>
					<label>Course Code:
					<input type="text" name="CourseCode" required></label><br><br>
					<label><input type="submit" name="StudentSubmit" value="Submit"></label>
				</fieldset>
			</form>
		</div>
		<div class="TuteeList">
			The tutee list goes here.
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
</div>
</BODY>
</HTML>
