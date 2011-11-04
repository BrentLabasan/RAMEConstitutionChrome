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
	
	newDiv.style.backgroundColor = "blue";
	newDiv.style.position = "absolute" ;
	//newDiv.style.marginRight = "10px";
	//newDiv.style.marginTop = "15px";
	newDiv.style.width = "50px";
	newDiv.style.height = "500px";
	newDiv.style.top = "20px";
	newDiv.style.right = "300px";
	newDiv.style.zIndex = "9999999999";
	newDiv.id = "fuckface";
	//add the text node to the newly created div.

	//raps.appendChild(newDiv);
	//document.body.appendChild(newDiv);
	//cool = document.getElementsByTagName('body')[0];
	//cool = document.getElementById('masthead');
	//cool.appendChild(newDiv) ;
	document.body.appendChild(newDiv);
	$("#fuckface").click(function(){alert("gee")});
	
	//newDiv.innerHTML(" <img src='chrome-extension://@@extension_id/images/RAMEdotConstitution_logo300x46.png' />" )
	var myid = chrome.i18n.getMessage("@@extension_id");
	smang = " <img src='chrome-extension://" + myid + "/images/RAMEdotConstitution_logo300x46.png' />" ;
	$("#fuckface").html(smang);
//alert("end of onload script");
}

//alert("end of content script");
