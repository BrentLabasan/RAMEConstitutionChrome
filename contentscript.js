/**
 * @author Brent Labasan
 */

// alert("content script") // pops up every time a new page is loaded

function displayTabURL() {
	chrome.tabs.getSelected(null, function(tab) {
                  alert(tab.url);
        });
}

displayTabURL();
