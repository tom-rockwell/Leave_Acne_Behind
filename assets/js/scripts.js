// JavaScript Document


// Set up Close buttons
var closeButtons = document.querySelectorAll(".close");
for (var i=0; i<closeButtons.length; i++) {
	
	var closeButton = closeButtons[i];
	closeButton.addEventListener("click", closeOverlay);
	
}

// Set up Cancel buttons
var cancelButtons = document.querySelectorAll(".cancel");
for (var i=0; i<cancelButtons.length; i++) {
	
	var cancelButton = cancelButtons[i];
	cancelButton.addEventListener("click", closeOverlay);
	
}

// Set up Exit links
var exitPoints = document.querySelectorAll("a.exit");
for (var i=0; i<exitPoints.length; i++) {
	
	var exitPoint = exitPoints[i];
	
	exitPoint.addEventListener("click", function() {
		showOverlay("exit");
		var exitURL = this.dataset["url"];
		setContinueButton("exit", exitURL);
	});
	
}

// Set up Sign Up buttons 
var signUps = document.querySelectorAll("a.signup"); 
for (var i=0; i<signUps.length; i++) {
	
	var signUp = signUps[i];
	
	signUp.addEventListener("click", function() {
		showOverlay("signup");
	});
}


// Set up the Sign Up Continue button
// NOTE: THIS IS A TEMPORARY SOLUTION TO MOCK UP THE EFFECT OF SIGNING UP
var signUpCont = document.getElementById("signUpCont");
signUpCont.addEventListener("click", function() {
	closeOverlay();
	showOverlay("signUpThankyou")
});




// Sets the behavior of the Continue button for the given overlay
function setContinueButton (overlayID, targetURL) {

	var continueBtn = document.querySelector("div#"+overlayID+" div a.continue");
	
	window.continueAction = function() {
		window.open(targetURL);
		var overlay = document.getElementById(overlayID);
		closeMe(overlay);
		continueBtn.removeEventListener("click", window.continueAction);
	};
	
	continueBtn.addEventListener("click", window.continueAction);
	console.log(continueBtn);
	
}

// Closes any and all overlays on the site 
function closeOverlay () {
	
	var overlays = document.querySelectorAll(".overlay");
	for (var i=0; i<overlays.length; i++) {
		
		var overlay = overlays[i];
		closeMe(overlay);
		
	}
	
}


// Closes the given overlay by setting them to display:none;
function closeMe (overlay) {
	
	overlay.style.display = "none";
	
}


// Displays the overlay for the given ID
function showOverlay (overlayID) {
	
	var overlay = document.getElementById(overlayID);
	overlay.style.display = "flex";
	
}


