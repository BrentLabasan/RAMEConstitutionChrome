<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>RAME Constitution - Amendment Chooser Confirmation</title>
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
		<h1><a href="http://BrentLabasan.com/RAMEConstituiion/index.php" target="_blank"><img src="http://brentlabasan.com/RCon/images/logo520px.png" alt="RAME Constitution logo"/></a>
		<br/>
		Amendment Chooser Confirmation</h1>
		<h2>Article URL: <a href="http://<?php echo $_GET["domain"]; echo $_GET["pathname"];?>"><?php echo $_GET["domain"] ; echo $_GET["pathname"] ; ?></a></h2>

		<?php
		$con = mysql_connect("localhost", "brentlab_admin", "PlatinumParking") or die('Could not connect: ' . mysql_error());
		mysql_select_db("brentlab_RCon");
		$newArray = $_POST['voteArray'];
		if (empty($newArray)) {
			echo("You didn't vote for any Amendments.");
		} else {
			$N = count($newArray);
			echo("You have successfully voted for $N Amendment(s): ");
			// if articleDomain and articlePath don't exist, create a field with it

			$por = "SELECT * FROM articles WHERE domain = '" . $_GET["domain"] . "' AND pathname = '" . $_GET["pathname"] . "'";
			// doesn't check the domain name part
			$result = mysql_query($por) or die(mysql_error());

			$row = mysql_fetch_array($result);

			if ($row['COUNT(articlePath)'] == 0) {

				$row['COUNT(articlePath)'];

				//DIAGNOSTICS//echo "articlePath does not exist" ;

				//DIAGNOSTICS//echo "<br />";

				$bueno = "INSERT INTO articles (domain, pathname, A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, A11, A12, A13, A14, A15, A16, A17, A18, A19, A20, A21, A22, A23, A24, A25, A26, A27) VALUES ('" . $_GET["domain"] . "', '" . $_GET["pathname"] . "', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');";

				mysql_query($bueno);

			}

			for ($i = 0; $i < $N; $i++) {

				echo($newArray[$i] . " ");

				// update the database with each Amendment that has been voted for

				//$result = mysql_query("UPDATE articles SET Amend" . $newArray[$i] . "  = Amend" . $newArray[$i] . " + 1 WHERE articleDomain = " . $_SESSION['domain'] . ";");

				$que = "UPDATE articles SET A" . $newArray[$i] . " = A" . $newArray[$i] . " + 1 WHERE domain = '" . $_GET["domain"] . "' AND pathname = '" . $_GET["pathname"] . "'";

				//echo $que;

				mysql_query($que, $con);

				// NEXT check if article is in database, if not create a field for it

			}

		}
		?>

		<br/><br/>

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
<!--
		Click <a href="article_results.php?domain=<?php echo $_GET["domain"];?>&pathname=<?php echo $_GET["pathname"];?>">HERE</a> to see what Amendments other RAME Constitution users have voted for !!

		<br/>
		<br/>
		-->
		<br/><br/>
		Click <a href="http://<?php echo $_GET["domain"];
	echo $_GET["pathname"];
		?>">HERE</a>
		to go back to the news article.
		<br/>
		<br/>
		
		<?php
/*
		require ($DOCUMENT_ROOT . "footer.html");
 * 
 */
		?>
	</body>
</html>