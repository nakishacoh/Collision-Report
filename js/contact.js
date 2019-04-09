console.log("Contact connected");

var submit = document.getElementById("submitContact");
submit.addEventListener("click", submitContact, false);

function submitContact(e){
	e.preventDefault();
	var myRequest = new XMLHttpRequest;
	myRequest.onreadystatechange = function(){
		if(myRequest.readyState === 4){
			// console.log(myRequest.responseText); // modify or populate html elements based on response.
			// var process = JSON.parse(myRequest.responseText);
		}
	};

	var firstname = document.getElementById("firstname");
	var lastname = document.getElementById("lastname");
	var email = document.getElementById("email");
	var message = document.getElementById("message");

	myRequest.open("POST", "http://localhost/collision-report/processes/processing-contact.php", true);
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	myRequest.send("firstname=" + firstname.value +
					"&lastname=" + lastname.value +
					"&email=" + email.value +
					"&message=" + message.value);
	document.getElementById("contactForm").reset();
	window.location.href = "#contact";
}
