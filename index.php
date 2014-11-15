<?php
session_start();
$_SESSION['login']=NULL;
$_SESSION['status']=NULL;
$_SESSION['error']="";
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<link rel="stylesheet" href="css/Index.css">
<TITLE>Home-Westminster College Tutors</TITLE>
</HEAD>

<BODY>
	<div class="header">
	<h1><center>Westminster College Tutors</center></h1>
	</div>
	<div class="TopLinkBar">
		<table>
			<tr>
				<td><a href="http://www.westminster-mo.edu">WestMO</a></td>
				<td style="width:504px"></td>
				<td><a href="">Contact Us</a></td>
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
		<div class="Login">
		<form action="ppages/p_index.php" method="post">
			<fieldset>
				<legend>Login</legend>
				<label>Username:<br>
				<input type="text" name="username"></label><br>
				<label>Password:<br>
				<input type="password" name="password"></label><br>
				<label><input type="submit" name="login" value="Login"></label>
				<br/>
				
			</fieldset>
		</form>
		</div>
		<hr color = "RoyalBlue" size ="1">
		<div class="News">
			News
		</div>
	</div>
</BODY>
</HTML>
