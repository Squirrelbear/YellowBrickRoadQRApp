<?php
if(!isset($_GET['bldg']) || !isset($_GET['room']))
{
	die("<h1>Error! Currently the supplied details are not supported. Please supply both a bldg and room variable.</h1>");
}

$bldg = $_GET['bldg'];
$room = $_GET['room'];

if($bldg != "IST" && $bldg != "ENGR")
{
	die("<h1>Sorry, only IST and ENGR rooms are currently supported by this function.</h1>");
}

if(!is_numeric($room))
{
	die("<h1>Invalid room supplied.</h1>");
}

$date = strtoupper(date("d-M-Y"));

header( 'Location: http://stusyswww.flinders.edu.au/roombook.taf?_function=detail&bldg=' . $bldg . '&room=' . $room  . '&weekday=' . $date ) ;

?>