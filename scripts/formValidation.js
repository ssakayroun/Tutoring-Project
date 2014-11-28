/*
Function: checkUsername
Purpose: Validates username fields to ensure that they have a value and that they are a Westminster email address
*/
//var check=[]
/*check['username']= */function checkUsername(){
	var elMsg = document.getElementById('Usernamefeedback');	//elMsg is set to the feedback id
	if(this.value.length == 0){								//If the length of the username is 0
		elMsg.className = "invalid";						//Feedback's class is changed to 'invalid'
		elMsg.textContent = "Username is a required field";	//Feedback's text says that 'Username is a required field'
	}
	else{													//If the length of the username is not 0
		if(this.value.search("@westminster-mo.edu") == -1){	//If '@westminster-mo.edu' is not in the username
			elMsg.className = "invalid";					//Feedback's class is changed to 'invalid'
			elMsg.textContent = "Please enter a Westminster email address";	//Feedback's text says that 'Please enter a Westminster email address'		}
		}
		else{
			elMsg.textContent = "";
		}
	}
}/*;*/
var elUsername = document.getElementById('username');		//elUsername is set to the username id
elUsername.onfocus = checkUsername;							//Check the username when the user enters the field
elUsername.oninput = checkUsername;							//Check the username when the user changes the text
elUsername.onblur = checkUsername;							//Check the username when the user leaves the field

/*
Function: checkPassword
Purpose: Validates that the password is greater than six characters
*/
/*check['pass']=*/function checkPassword(){
	var elMsg = document.getElementById('Passwordfeedback');
	if(this.value.length < 6){
		elMsg.className = "invalid";
		elMsg.textContent = "Enter your password";
		return false;
	}
	else{
		elMsg.textContent = "";
		return true;
	}
}//;
var elPassword = document.getElementById('password');
elPassword.onfocus = checkPassword;
elPassword.oninput = checkPassword;
elPassword.onblur = checkPassword;
/*///////////////////////////////////////////////////////////////Preventing the form from submitting on wrong input//////////////////////////////////
myForm.onsubmit= function() 
{
  var result = true;

  for (var i in check) {
    result = check[i](i) && result;
  }

  if (result) {
    alert('The form is well filled out.');
	return true;
  }
  else
  {
  	return false;
  }
}
*/
/*TUTOR INDEX CHECK NAMES*/