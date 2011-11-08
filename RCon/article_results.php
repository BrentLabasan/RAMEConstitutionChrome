<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>RAME Constitution - Article Results</title>
		<link rel="stylesheet" type="text/css" href="css/RCon.css" />
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18482449-1']);
  _gaq.push(['_setDomainName', '.brentlabasan.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body>
		<h1><img src="http://brentlabasan.com/RCon/images/logo520px.png" alt="RAME Constitution logo"/>
		<br/>
		Article Results</h1>
		<h2>Article URL: <a href="article_results.php?domain=<?php echo $_GET["domain"];?>&pathname=<?php echo $_GET["pathname"];?>"><?php echo $_GET["domain"] ; echo $_GET["pathname"] ; ?></a></h2>
		<h3>All RAME Constitution Users</h3>
		
		<?php
		
			$con = mysql_connect("localhost","brentlab_admin","PlatinumParking")
				or die('Could not connect: ' . mysql_error());
				
				mysql_select_db("brentlab_RCon");
				
				$query = "SELECT * FROM articles WHERE domain = '" . $_GET["domain"] . "' AND pathname = '" . $_GET["pathname"] . "'";
				
				$result = mysql_query($query) or die(mysql_error());
				
				$row = mysql_fetch_array($result) or die(mysql_error());
				//DIAGNOSTICS//echo $row['A1'] ;
				//DIAGNOSTICS//echo "<br/>" ;
				
			
			echo "<img src='http://chart.apis.google.com/chart?chxl=0:|0|50|100|1:|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27&chxr=1,0,27&chxt=y,x&chbh=a&chs=800x225&cht=bvg&chco=A2C180&chd=t:". $row['A1'] ."," . $row['A2'] . "," . $row['A3']  . "," . $row['A4']  . "," . $row['A5']  . "," . $row['A6']  . "," . $row['A7']  . "," . $row['A8']  . "," . $row['A9']  . "," . $row['A10']  . "," . $row['A11']  . "," . $row['A12']  . "," . $row['A13']  . "," . $row['A14']  . "," . $row['A15']  . "," . $row['A16']  . "," . $row['A17']  . "," . $row['A18']  . "," . $row['A19']  . "," . $row['A20']  . "," . $row['A21']  . "," . $row['A22']  . "," . $row['A23']  . "," . $row['A24']  . "," . $row['A25']  . "," . $row['A26']  . "," . $row['A27'] . "&chdl=Amendments+Voted+For&chtt=Chart+of+Which+Amendments+Are+Related+To+This+Article&chts=676767,12.833' width='800' height='225' alt='Chart of Which Amendments Are Related To This Article' />"
		
		?>
		<br/><br/>
		<?php/*
 require($DOCUMENT_ROOT . "footer.html");
		 * 
		 */
 ?>
		
		
	</body>
</html>