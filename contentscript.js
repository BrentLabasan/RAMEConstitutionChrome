/**
 * @author Brent Labasan
 */

alert("content script") ;// pops up every time a new page is loaded
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
	/*
	 newDiv = document.createElement("div");
  newContent = document.createTextNode("Hi there and greetings!");
  newDiv.appendChild(newContent); //add the text node to the newly created div.

  // add the newly created element and it's content into the DOM
  my_div = document.getElementById("lga");
  document.body.insertBefore(newDiv, my_div);

button.id = "goose";
button.style.backgroundColor = "BLUE";
	*/
	
	tar = document.getElementById("lga");
	tar.style.backgroundColor = "blue";
	
	newDiv = document.createElement("div");
  newContent = document.createTextNode("Hi there and greetings!");
  newDiv.appendChild(newContent); //add the text node to the newly created div.

tar.appendChild(newDiv);
}
	
	 
	




alert("end of content script");