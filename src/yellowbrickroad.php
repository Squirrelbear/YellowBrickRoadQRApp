<html>
	<head>
		<title>Flinders CSEM: Yellow Brick Road Self Guided Tour</title>
		<link rel="stylesheet" type="text/css" href="ybr.css">
		<!--<<meta name="viewport" content="width=800">-->
	</head>

	<body>
	<?php include_once("analyticstracking.php") ?>
		<div id="main">
			<div id="head">
				CSEM: Yellow Brick Road
			</div>
			<div id="menu">
				<a href="yellowbrickroad.php?p=locations"><div id="btn">Stops</div></a><a href="yellowbrickroad.php?p=maps"><div id="btn">Maps</div></a><a href="https://twitter.com/FlindersCSEM"><div id="btnTwitter"><img src="images/twitter-bird-white-on-blue.jpg" width="40px" height="40px"/> Follow @FlindersCSEM for breaking news about <b>YOUR</b> School!</div></a>
			</div>
			<div id="content">
<?php
	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		if((is_numeric($p) && $p > 0 && $p < 8) || $p == "locations" || $p == "maps" || $p == "intro")
		{
			include('data/p' . $p . '.inc.php');
		}
		else
		{
			include('data/plocations.inc.php');
		}
	}
	else
	{
		include('data/plocations.inc.php');
	}
?>
			</div>
		</div>
	</body>
</html>