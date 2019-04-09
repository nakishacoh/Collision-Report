var home = document.getElementById("v-pills-home-tab");
var ReportAccident = document.getElementById("v-pills-profile-tab");
var Account = document.getElementById("v-pills-messages-tab");
var Contact = document.getElementById("v-pills-settings-tab");
var Logout = document.getElementById("#logout");
var form = document.getElementById("form");
var edit = document.getElementById("edit");
var update = document.getElementById("update");
var editForm = document.getElementById("editForm");

home.style.backgroundColor = "#707070";

editForm.style.display = "none";
// form.style.setProperty('display', 'none', 'important');
ReportAccident.addEventListener("mousedown", changeColor);
Account.addEventListener("mousedown", changeColor);
Contact.addEventListener("mousedown", changeColor);
Logout.addEventListener("mousedown", changeColor);

function changeColor(){
	home.style.backgroundColor = "#217eba";
}

edit.addEventListener("mousedown", editFunction);

function editFunction(){
	form.style.display = "none";
	editForm.style.display = "block";
}

update.addEventListener("mousedown", updateFunction);

function updateFunction(){
	editForm.style.display = "none";
	form.style.display = "block";
}
