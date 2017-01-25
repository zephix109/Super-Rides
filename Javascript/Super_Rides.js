/* Andrew Laramee, ID:27050925
 * Comp 353, Section F, Professor Bipin C Desai 
 */

 //Suber_Rides.js
function goHome() {
	window.open("HomePage.php", "_self", false);	
}
function goFacebook() {
	window.open("https://www.facebook.com/ConcordiaUniversity/");
}

//Members pages
function goMember() {
	window.open("Member.php", "_self", false);
}
function goMemberProfile() {
	window.open("MemberProfile.php", "_self", false);
}
function clearCredit(){
	if(document.logForm.creditcard.value=="Credit card number")
		document.logForm.creditcard.value="";
}
function clearExpiry(){
	if(document.logForm.expirydate.value=="Expiry date")
		document.logForm.expirydate.value="";
}
function clearCode(){
	if(document.logForm.creditcode.value=="3-digit code")
		document.logForm.creditcode.value="";
}
function clearAmount(){
	if(document.logForm.amount.value=="Amount")
		document.logForm.amount.value="";
}

//Vehicle pages
function addVehicle() {
	window.open("AddVehicle.php", "_self", false);
}
function clearLicensePlate() {
	if(document.vehicleForm.licenseplate.value=="License Plate")
		document.vehicleForm.licenseplate.value="";
}
function clearVehicleType() {
	if(document.vehicleForm.vehicletype.value=="Vehicle Type")
		document.vehicleForm.vehicletype.value="";
}
/*
function clearCarYear() {
	if(document.vehicleForm.year.value=="Year")
		document.vehicleForm.year.value="";
}
function clearNumberOfSeats() {
	if(document.vehicleForm.numberofseats.value=="Number of Seats")
		document.vehicleForm.numberofseats.value="";
}
*/
function clearInsurance() {
	if(document.vehicleForm.insurancepolicy.value=="Insurance Policy")
		document.vehicleForm.insurancepolicy.value="";
}

//Rides pages
function goRide() {
	window.open("RideHome.php", "_self", false);
}
//Post various ride types
function clearDepStreetNum(){
	if(document.postRideForm.depStreetNum.value=="Street number")
		document.postRideForm.depStreetNum.value="";
}
function clearDepCity(){
	if(document.postRideForm.depCity.value=="City")
		document.postRideForm.depCity.value="";
}
function clearDepProvince(){
	if(document.postRideForm.depProvince.value=="Province")
		document.postRideForm.depProvince.value="";
}
function clearDepPostalCode(){
	if(document.postRideForm.depPostalCode.value=="Postal code")
		document.postRideForm.depPostalCode.value="";
}
function clearDestStreetNum(){
	if(document.postRideForm.destStreetNum.value=="Street number")
		document.postRideForm.destStreetNum.value="";
}
function clearDestCity(){
	if(document.postRideForm.destCity.value=="City")
		document.postRideForm.destCity.value="";
}
function clearDestProvince(){
	if(document.postRideForm.destProvince.value=="Province")
		document.postRideForm.destProvince.value="";
}
function clearDestPostalCode(){
	if(document.postRideForm.destPostalCode.value=="Postal code")
		document.postRideForm.destPostalCode.value="";
}
function clearFrequencyOfTrip(){
	if(document.postRideForm.freqOfTrip.value=="Frequency of trip")
		document.postRideForm.freqOfTrip.value="";
}
function clearMaxDistance(){
	if(document.postRideForm.maxDistance.value=="Max distance")
		document.postRideForm.maxDistance.value="";
}
function clearTripDescription(){
	if(document.postRideForm.tripDescription.value=="Trip description")
		document.postRideForm.tripDescription.value="";
}

//Contact us page
function goContact() {
	window.open("ContactUs.php", "_self", false);
}

//Registration page
function goRegister() {
	window.open("SignUp.php", "_self", false);
}
function validateReg() {
	var error = 0;
	
	var fName=document.regForm.firstname.value;
	var x=fName.search(/^[a-zA-Z\-]+$/);
	if(x=="-1"){
		alert("First name must contain only letters and hyphens");
		document.regForm.firstname.value+=" <";
		error++;
	}
	var lName=document.regForm.lastname.value;
	var x1=lName.search(/^[a-zA-Z\-]+$/);
	if(x1=="-1"){
		alert("Last name must contain only letters and hyphens");
		document.regForm.lastname.value+=" <";
		error++;
	}
	var emailA=document.regForm.emailaddress.value;
	var x3=emailA.search(/@\w+\.+\w+$/);
	if(x3=="-1"){
		alert("Email address must be in form 'emailaddress@something.com'");
		document.regForm.emailaddress.value+=" <";
		error++;
	}
	var userN=document.regForm.username.value;
	var x4=userN.search(/^[a-zA-Z0-9]{6,}$/);
	if(x4=="-1"){
		alert("Username must be at least 6 characters and contain only letters and numbers");
		document.regForm.username.value+=" <";
		error++;
	}
	var passW=document.regForm.userpassword.value;
	var x5=passW.search(/(?=.*\d)(?=.*[A-Za-z])[A-Za-z\d$!@#?%&*]{6,}/i);
	if(x5=="-1"){
		alert("Password must be at least 6 characters with at least one letter and one number");
		document.regForm.userpassword.value="";
		error++;
	}
	var passW=document.regForm.userpassword.value;
	var confPass=document.regForm.confirmpassword.value;
	if(passW!=confPass){
		alert("Confirmation must match the password entered. Password is case sensitive");
		document.regForm.confirmpassword.value="";
		error++;
	}
	var e = document.getElementById("drivride");
	var dORr = e.options[e.selectedIndex].value;
	var licenseNum = document.regForm.licensenumber.value;
	if(dORr == 'driver' || dORr == 'both'){
		if(licenseNum == '' || licenseNum == 'License Number'){
			alert("A driver must have a valid license number");
			error++;
		}
	}
	
	if(error>0)
		return false;
	else
		return true;
}	


//Clear registration text fields on first click if default text is present
function clearFName() {
	if(document.regForm.firstname.value=="First name")
		document.regForm.firstname.value="";
}
function clearLName() {
	if(document.regForm.lastname.value=="Last name")
		document.regForm.lastname.value="";
}
function clearLicense() {
	if(document.regForm.licensenumber.value=="License number")
		document.regForm.licensenumber.value="";
}
function clearEmail() {
	if(document.regForm.emailaddress.value=="Email address")
		document.regForm.emailaddress.value="";
}
function clearAddress() {
	if(document.regForm.address.value=="Address")
		document.regForm.address.value="";
}
function clearUser() {
	if(document.regForm.username.value=="Username")
		document.regForm.username.value="";
}
function clearPassword() {
	if(document.regForm.userpassword.value=="Password")
		document.regForm.userpassword.value="";
}
function clearConfirm() {
	if(document.regForm.confirmpassword.value=="Password")
		document.regForm.confirmpassword.value="";
}
function clearRefFName() {
	if(document.regForm.reffirstname.value=="Member's first name")
		document.regForm.reffirstname.value="";
}
function clearRefEmail() {
	if(document.regForm.refemailaddress.value=="Member's email address")
		document.regForm.refemailaddress.value="";
}


//Clear login page text fields on first click if default
function clearLogUser() {
	if(document.logForm.loginUser.value=="Username")
		document.logForm.loginUser.value="";
}
function clearLogPass() {
	if(document.logForm.loginPassword.value=="Password")
		document.logForm.loginPassword.value="";
}
