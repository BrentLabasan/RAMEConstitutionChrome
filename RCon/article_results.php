<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta property="fb:app_id" content="143192419055772" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>RAME Constitution - Article Results</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
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
		<h1>LOGO<br/>Article Results</h1>
		<h2>Article Title: <?php echo $_SESSION["domain"] ; echo $_SESSION["pathname"] ; ?></h2>
		<h3>All RAME Users</h3>
		
		<?php
		
			$con = mysql_connect("localhost","fabrcat1_user","user")
				or die('Could not connect: ' . mysql_error());
				
				mysql_select_db("fabrcat1_RAMEdotCo");
				
				$query = "SELECT * FROM articles WHERE articlePath = '" . $_SESSION["pathname"] . "'" ;
				
				$result = mysql_query($query) or die(mysql_error());
				
				$row = mysql_fetch_array($result) or die(mysql_error());
				//DIAGNOSTICS//echo $row['Amend1'] ;
				//DIAGNOSTICS//echo "<br/>" ;
				
			
			echo "<img src='http://chart.apis.google.com/chart?chxl=0:|0|50|100|1:|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27&chxr=1,0,27&chxt=y,x&chbh=a&chs=800x225&cht=bvg&chco=A2C180&chd=t:". $row['Amend1'] ."," . $row['Amend2'] . "," . $row['Amend3']  . "," . $row['Amend4']  . "," . $row['Amend5']  . "," . $row['Amend6']  . "," . $row['Amend7']  . "," . $row['Amend8']  . "," . $row['Amend9']  . "," . $row['Amend10']  . "," . $row['Amend11']  . "," . $row['Amend12']  . "," . $row['Amend13']  . "," . $row['Amend14']  . "," . $row['Amend15']  . "," . $row['Amend16']  . "," . $row['Amend17']  . "," . $row['Amend18']  . "," . $row['Amend19']  . "," . $row['Amend20']  . "," . $row['Amend21']  . "," . $row['Amend22']  . "," . $row['Amend23']  . "," . $row['Amend24']  . "," . $row['Amend25']  . "," . $row['Amend26']  . "," . $row['Amend27'] . "&chdl=Amendments+Voted+For&chtt=Chart+of+Which+Amendments+Are+Related+To+This+Article&chts=676767,12.833' width='800' height='225' alt='Chart of Which Amendments Are Related To This Article' />"
		
		?>
		<br/><br/>
		<?php
 require($DOCUMENT_ROOT . "footer.html");
 ?>
		
		
	</body>
</html>