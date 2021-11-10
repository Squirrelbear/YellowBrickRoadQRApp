<?php
if(isset($_GET['m']))
{
	$m = $_GET['m'];
	if((is_numeric($m) && $m > 0 && $m < 5))
	{
		include('data/maps' . $m . '.inc.php');
	}
	else
	{
		include('data/maps.inc.php');
	}
}
else
{
	include('data/maps.inc.php');
}
?>