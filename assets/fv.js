function log()
    {
	    let username = document.getElementById('name').value;
		let pass = document.getElementById('pass').value;
		if(username == ""){
			document.getElementById('usernameError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
		return false;
		}
		document.getElementById('usernameError').innerHTML = "";
		if(pass == ""){
			document.getElementById('passError').innerHTML = "<span>&#9888;</span> Please Provide your Password";
		return false;
		}
			document.getElementById('passError').innerHTML = "";
			return true;
	}
function reg(){
	let username = document.getElementById('name').value;
	let pass = document.getElementById('pass').value;
	let first = document.getElementById('first').value;
	let last = document.getElementById('last').value;
	let email = document.getElementById('email').value;
	let number = document.getElementById('number').value;

	if(username == ""){
	document.getElementById('usernameError').innerHTML = "<span>&#9888;</span> Please Provide your Username";
		return false;
	}document.getElementById('usernameError').innerHTML = "";
	if(pass == ""){
		document.getElementById('passError').innerHTML = "<span>&#9888;</span> Please Provide your Password";
		return false;
	}document.getElementById('passError').innerHTML = "";
	if(first == ""){
		document.getElementById('firstError').innerHTML = "<span>&#9888;</span> Please Provide your First Name";
		return false;
	}document.getElementById('firstError').innerHTML = "";
	if(last == ""){
		document.getElementById('lastError').innerHTML = "<span>&#9888;</span> Please Provide your Last Name";
		return false;
	}document.getElementById('lastError').innerHTML = "";
	if(email == ""){
		document.getElementById('emailError').innerHTML = "<span>&#9888;</span> Please Provide your Email";			
		return false;
	}document.getElementById('emailError').innerHTML = "";
	if(number == ""){
		document.getElementById('numberError').innerHTML = "<span>&#9888;</span> Please Provide your Contact Number";
		return false;
	}document.getElementById('numberError').innerHTML = "";
		return true;
	}
