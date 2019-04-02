var home = document.getElementById("v-pills-home-tab");
var ReportAccident = document.getElementById("v-pills-profile-tab");
var Account = document.getElementById("v-pills-messages-tab");
var Contact = document.getElementById("v-pills-settings-tab");
var Logout = document.getElementById("#logout");
// var account = document.getElementById("ACCOUNT");
// var logout = document.getElementById("LOGOUT");
// var contact = document.getElementById("CONTACT");
// var sub1 = document.getElementById("sub1");
// var sub2 = document.getElementById("sub2");
// var sub3 = document.getElementById("sub3");
// var sub4 = document.getElementById("sub4");
home.style.backgroundColor = "#707070";
// home.style.setProperty('backgroundColor', '#707070', 'important');
ReportAccident.addEventListener("mousedown", changeColor);
Account.addEventListener("mousedown", changeColor);
Contact.addEventListener("mousedown", changeColor);
Logout.addEventListener("mousedown", changeColor);

function changeColor(){
	home.style.backgroundColor = "#217eba";
}

// sub1.addEventListener("mouseout", sub1Hide);

// function sub1Hide(){
// 	form.style.color = "white";
// 	sub1.style.display = "none";
// }

// account.addEventListener("mouseover", sub2Show);

// function sub2Show(){
// 	account.style.color = "yellow";
// 	sub2.style.display = "block";
// 	logout.style.color = "white";
// 	sub3.style.display = "none";
// 	form.style.color = "white";
// 	sub1.style.display = "none";
// 	contact.style.color = "white";
// 	sub4.style.display = "none";
// }

// sub2.addEventListener("mouseout", sub2Hide);

// function sub2Hide(){
// 	account.style.color = "white";
// 	sub2.style.display = "none";
// }

// logout.addEventListener("mouseover", sub3Show);

// function sub3Show(){
// 	logout.style.color = "yellow";
// 	sub3.style.display = "block";
// 	account.style.color = "white";
// 	sub2.style.display = "none";
// 	form.style.color = "white";
// 	sub1.style.display = "none";
// 	contact.style.color = "white";
// 	sub4.style.display = "none";
// }

// sub3.addEventListener("mouseout", sub3Hide);

// function sub3Hide(){
// 	logout.style.color = "white";
// 	sub3.style.display = "none";
// }

// contact.addEventListener("mouseover", sub4Show);

// function sub4Show(){
// 	contact.style.color = "yellow";
// 	sub4.style.display = "block";
// 	logout.style.color = "white";
// 	sub3.style.display = "none";
// 	account.style.color = "white";
// 	sub2.style.display = "none";
// 	form.style.color = "white";
// 	sub1.style.display = "none";
// }

// sub4.addEventListener("mouseout", sub4Hide);

// function sub4Hide(){
// 	contact.style.color = "white";
// 	sub4.style.display = "none";
// }