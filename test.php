<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>popup</title>
		<meta name="author" content="Brent Labasan" />
		<!-- Date: 2011-11-02 -->
		<script type="text/javascript">
		
		/* // works. displays the current tabs's url every time you open up the popup page
			function displayTabURL() {
				chrome.tabs.getSelected(null, function(tab) {
					alert(tab.url);
				});
			}
			displayTabURL();
		*/
		
		chrome.tabs.getSelected(null, function(tab) {
					alert(tab.url);
				});
		
		</script>
	</head>
	<body>
		THIS IS TEST.PHP
		<br/>
		VOTE ON THIS ARTICLE
		<br/>
		VIEW VOTING RESULTS FOR THIS ARTICLE
	</body>
</html>