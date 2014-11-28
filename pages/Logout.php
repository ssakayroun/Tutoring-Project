<div class="Login">
	<form action="../ppages/p_logout.php" method="post">
		<fieldset>
			<legend>Logout</legend>
			<label>Welcome 
			<?php 
				$pos = strpos($_SESSION['login'], '@');
				echo substr($_SESSION['login'], 0,$pos); 
			?>
			</label><br><br>
			<label><input type="submit" name="logout" value="Log out"></label>
		</fieldset>
	</form>
</div>