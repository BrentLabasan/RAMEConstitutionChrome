<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>RAME Constitution - Amendment Chooser Confirmation</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<h1>RAME Constitution Logo
		<br/>
		Amendment Chooser Confirmation</h1>
		<h2>Article Title: <?php 
		
			echo $_GET["domain"];
			echo $_GET["pathname"];
		?></h2>

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

		Click <a href="article_results.php?domain=<?php echo $_GET["domain"];?>&pathname=<?php echo $_GET["pathname"];?>">HERE</a> to see what Amendments other RAME.Constitution users have voted for !!

		<br/>

		Or click <a href="http://<?php echo $_GET["domain"];
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