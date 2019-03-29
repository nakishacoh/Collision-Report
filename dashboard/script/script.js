var form = document.getElementById("FORM");
var account = document.getElementById("ACCOUNT");
var logout = document.getElementById("LOGOUT");
var contact = document.getElementById("CONTACT");
var sub1 = document.getElementById("sub1");
var sub2 = document.getElementById("sub2");
var sub3 = document.getElementById("sub3");
var sub4 = document.getElementById("sub4");

form.addEventListener("mouseover", sub1Show);

function sub1Show(){
	form.style.color = "yellow";
	sub1.style.display = "block";
	logout.style.color = "white";
	sub3.style.display = "none";
	account.style.color = "white";
	sub2.style.display = "none";
	contact.style.color = "white";
	sub4.style.display = "none";
}

sub1.addEventListener("mouseout", sub1Hide);

function sub1Hide(){
	form.style.color = "white";
	sub1.style.display = "none";
}

account.addEventListener("mouseover", sub2Show);

function sub2Show(){
	account.style.color = "yellow";
	sub2.style.display = "block";
	logout.style.color = "white";
	sub3.style.display = "none";
	form.style.color = "white";
	sub1.style.display = "none";
	contact.style.color = "white";
	sub4.style.display = "none";
}

sub2.addEventListener("mouseout", sub2Hide);

function sub2Hide(){
	account.style.color = "white";
	sub2.style.display = "none";
}

logout.addEventListener("mouseover", sub3Show);

function sub3Show(){
	logout.style.color = "yellow";
	sub3.style.display = "block";
	account.style.color = "white";
	sub2.style.display = "none";
	form.style.color = "white";
	sub1.style.display = "none";
	contact.style.color = "white";
	sub4.style.display = "none";
}

sub3.addEventListener("mouseout", sub3Hide);

function sub3Hide(){
	logout.style.color = "white";
	sub3.style.display = "none";
}

contact.addEventListener("mouseover", sub4Show);

function sub4Show(){
	contact.style.color = "yellow";
	sub4.style.display = "block";
	logout.style.color = "white";
	sub3.style.display = "none";
	account.style.color = "white";
	sub2.style.display = "none";
	form.style.color = "white";
	sub1.style.display = "none";
}

sub4.addEventListener("mouseout", sub4Hide);

function sub4Hide(){
	contact.style.color = "white";
	sub4.style.display = "none";
}