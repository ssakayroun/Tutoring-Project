 
<?php
session_start();


include ("connex.php");// If database connection is correct then the file is included and the connection made
extract($_POST);	
//We retrieve the information send through the form via the post method
$login= $_POST['username'];
$pass= $_POST['password'];

if(empty($login)||empty($pass))//we check if any of the two field is empty
{
	echo "empty fields<br>Login : ".$login."<br> Password:".$password ;
}
else
{
//We check of the user is in the administrator table and if he/she is active
	$req= "SELECT password,active FROM administrator WHERE email='".$login."' ";
	$result= $link->query($req);
	if($result->num_rows==1)
	{
	//We fetch the information related to the user
		$user= $result->fetch_array(MYSQLI_NUM);
		if($user[0]==$pass && $user[1]==1)
		{
			$_SESSION['login']= $_POST['username'];
			$_SESSION['status'] = "administrator"; 
			echo "The dude is an admin";
			$result->free();
			header('location:../pages/AdminIndex.php');
		}
		else
		{
			$_SESSION['error']="Error ocurred";//error code is sent back to index page
		
		}
		//Two different or else possibilities are:wrong password or not active admin account(active 0)
	}
	else//User is not in the administrator table
	{
		$req= "SELECT password FROM tutor WHERE email='".$login."' ";
		$result= $link->query($req);
		//We fetch the information related to the user
		if($result->num_rows==1)
		{
			$user= $result->fetch_array(MYSQLI_NUM);
			if($user[0]==$pass)
			{
				$_SESSION['login']= $_POST['username'];
				$_SESSION['status'] = "tutor"; 
				echo "The dude is a tutor";
				header('location:../pages/TutorIndex.php');
				
			}
			//else User's password is perhaps wrong 
		}//Else User is not in tutor table
		
	}
}

?>