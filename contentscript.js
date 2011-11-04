/**
 * @author Brent Labasan
 */

//alert("content script");

// pops up every time a new page is loaded
// document.getElementById('header-img-a').innerHTML = 'Fred Flinstone'; // works on reddit.com

/* // doesn't work
 function displayTabURL() {
 chrome.tabs.getSelected(null, function(tab) {
 alert(tab.url);
 });
 }

 displayTabURL();
 */

window.onload = function() {
	//
	//spar = document.getElementsByClassName("body");
	//raps = spar[0];
	
	newDiv = document.createElement("div");
	newContent = document.createTextNode("Hi there and greetings!");
	newDiv.appendChild(newContent);
	
	newDiv.style.backgroundColor = "GREY";
	newDiv.style.position = "absolute" ;
	//newDiv.style.marginRight = "10px";
	//newDiv.style.marginTop = "15px";
	newDiv.style.width = "320px";
	newDiv.style.height = "86px";
	newDiv.style.top = "20px";
	newDiv.style.right = "40px";
	newDiv.style.zIndex = "9999999999";
	newDiv.style.borderWidth = "thick";
	newDiv.style.borderColor = "black";
	newDiv.id = "fuckface";
	//add the text node to the newly created div.

	votingWindow = document.createElement("div");
	votingWindowText = document.createTextNode("Voting window text.");
	votingWindow.appendChild(votingWindowText);
	
	votingWindow.style.backgroundColor = "BLUE";
	votingWindow.style.position = "absolute" ;
	votingWindow.style.width = "320px";
	votingWindow.style.height = "700px";
	votingWindow.style.top = "20px";
	votingWindow.style.right = "380px";
	votingWindow.style.zIndex = "9999999999";
	votingWindow.style.borderWidth = "thick";
	votingWindow.style.borderColor = "black";
	votingWindow.id = "votingWindow";

	//raps.appendChild(newDiv);
	//document.body.appendChild(newDiv);
	//cool = document.getElementsByTagName('body')[0];
	//cool = document.getElementById('masthead');
	//cool.appendChild(newDiv) ;
	
	document.body.appendChild(newDiv);
	document.body.appendChild(votingWindow);
	
	//$("#fuckface").click(function(){alert("gee")});
	
	//newDiv.innerHTML(" <img src='chrome-extension://@@extension_id/images/RAMEdotConstitution_logo300x46.png' />" )
	var myid = chrome.i18n.getMessage("@@extension_id");
	smang = " <img src='chrome-extension://" + myid + "/images/RAMEdotConstitution_logo300x46.png' />" ;
	smang += "<br/><div id='clickHereToVote'>CLICK HERE TO VOTE</div>" ;
	$("#fuckface").html(smang);
	
	$("#clickHereToVote").click(function() {
		$("#votingWindow").toggle('slow');
	});
	
//alert("end of onload script");
}

//alert("end of content script");
