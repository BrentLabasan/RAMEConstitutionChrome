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
	votingWindow.style.width = "800px";
	votingWindow.style.height = "900px";
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
	
	$("#votingWindow").hide();
	
	//$("#fuckface").click(function(){alert("gee")});
	
	//newDiv.innerHTML(" <img src='chrome-extension://@@extension_id/images/RAMEdotConstitution_logo300x46.png' />" )
	var myid = chrome.i18n.getMessage("@@extension_id");
	smang = " <img src='chrome-extension://" + myid + "/images/RAMEdotConstitution_logo300x46.png' />" ;
	smang += "<br/><div id='clickHereToVote'>CLICK HERE TO VOTE</div>" ;
	$("#fuckface").html(smang);
	
	$("#clickHereToVote").click(function() {
		$("#votingWindow").toggle('slow');
	});
	
	lenny = "http://brentlabasan.com/RCon/amendment_chooser_confirmation.php?domain=" + document.domain + "&pathname=" + document.location.pathname ;
	//alert(lenny);
	carl = "homer";
	votingWindowHTML = "<form name='input' action='" + lenny + "' method='post'> <input type='checkbox' name='voteArray[]' value='1' /> Amendment 1: Freedom of religion, speech, the press, assembly, and petition.<br/> <input type='checkbox' name='voteArray[]' value='2' /> Amendment 2: Enumerates the right to keep and bear arms.<br/> <input type='checkbox' name='voteArray[]' value='3' /> Amendment 3: Bans forced quartering of soldiers.<br/> <input type='checkbox' name='voteArray[]' value='4' /> Amendment 4: Interdiction of unreasonable searches and seizures; a search warrant is required to search persons or property.<br/> <input type='checkbox' name='voteArray[]' value='5' /> Amendment 5: Indictments; due process; self-incrimination; double jeopardy; rules for eminent domain.<br/> <input type='checkbox' name='voteArray[]' value='6' /> Amendment 6: Rights to a fair and speedy public trial, to a notice of accusations, to confront the accuser, to subpoenas, and to counsel.<br/> <input type='checkbox' name='voteArray[]' value='7' /> Amendment 7: Provides for the right to trial by jury in civil cases.<br/> <input type='checkbox' name='voteArray[]' value='8' /> Amendment 8: Bans cruel and unusual punishment, and excessive fines or bail.<br/> <input type='checkbox' name='voteArray[]' value='9' /> Amendment 9: Unenumerated rights.<br/> <input type='checkbox' name='voteArray[]' value='10' /> Amendment 10: Limits the powers of the federal government to only those specifically granted by the constitution.<br/> <input type='checkbox' name='voteArray[]' value='11' /> Amendment 11: Immunity of states from suits from out-of-state citizens and foreigners not living within the state borders. Lays the foundation for sovereign immunity.<br/> <input type='checkbox' name='voteArray[]' value='12' /> Amendment 12: Revises presidential election procedures.<br/> <input type='checkbox' name='voteArray[]' value='13' /> Amendment 13: Abolishes slavery and involuntary servitude, except as punishment for a crime.<br/> <input type='checkbox' name='voteArray[]' value='14' /> Amendment 14: Defines citizenship and deals with post–Civil War issues.<br/> <input type='checkbox' name='voteArray[]' value='15' /> Amendment 15: Prohibits the denial of suffrage based on race, color, or previous condition of servitude.<br/> <input type='checkbox' name='voteArray[]' value='16' /> Amendment 16: Allows the federal government to collect income tax.<br/> <input type='checkbox' name='voteArray[]' value='17' /> Amendment 17: Allows senators to be directly elected.<br/> <input type='checkbox' name='voteArray[]' value='18' /> Amendment 18: Prohibition of alcohol (Repealed by Twenty-first Amendment).<br/> <input type='checkbox' name='voteArray[]' value='19' /> Amendment 19: Allows for women's suffrage.<br/> <input type='checkbox' name='voteArray[]' value='20' /> Amendment 20: Fixes the dates of term commencements for Congress (January 3) and the President (January 20); known as the 'lame duck amendment'.<br/> <input type='checkbox' name='voteArray[]' value='21' /> Amendment 21: Repeals the Eighteenth Amendment.<br/> <input type='checkbox' name='voteArray[]' value='22' /> Amendment 22: Limits the president to two terms, or a maximum of 10 years (i.e., if a Vice President serves not more than one half of a President's term, he can be elected to a further two terms).<br/> <input type='checkbox' name='voteArray[]' value='23' /> Amendment 23: Provides for representation of Washington, D.C. in the Electoral College.<br/> <input type='checkbox' name='voteArray[]' value='24' /> Amendment 24: Prohibits the revocation of voting rights due to the non-payment of poll taxes.<br/> <input type='checkbox' name='voteArray[]' value='25' /> Amendment 25: Codifies the Tyler Precedent; defines the process of presidential succession.<br/> <input type='checkbox' name='voteArray[]' value='26' /> Amendment 26: Establishes 18 as the national voting age.<br/> <input type='checkbox' name='voteArray[]' value='27' /> Amendment 27: Prevents laws affecting Congressional salary from taking effect until the beginning of the next session of Congress.<br/> <input type='submit' value='Submit' /> </form>" ;
	$("#votingWindow").html(votingWindowHTML);
	
//alert("end of onload script");
}

//alert("end of content script");
