
function check() {
  if (document.getElementById('pwd').value ==
  document.getElementById('confirm_pwd').value)
  {
	document.getElementById('Pwd_msg').style.color = 'Yellow';
	document.getElementById('Pwd_msg').innerHTML = 'Password matching';
  }
  else {
	document.getElementById('Pwd_msg').style.color = 'red';
	document.getElementById('Pwd_msg').innerHTML = 'Password not matching';
  }
}

/*
function Validate() {
	var Password = document.getElementByName("pwd").value;
	var confirmPassword = document.getElementsByName("confirm_pwd").value;
	
		if(Password != confirmPassword)
		{
			alert("Your password not matching!!!" + <br> "Please enter same password in both");
		}
		
		else
		{
			alert("your account has been successfully created.");
		}
}

*/