/**
 * @author Brent Labasan
 */

alert("content script") // pops up every time a new page is loaded
// document.getElementById('header-img-a').innerHTML = 'Fred Flinstone'; // works on reddit.com
alert("end of content script");

/* // doesn't work
function displayTabURL() {
	chrome.tabs.getSelected(null, function(tab) {
                  alert(tab.url);
        });
}

displayTabURL();
*/

