# YellowBrickRoadQRApp
 A simple PHP application designed to be used for showing progress through a room tour, maps, and current room bookings. This application was developed in 2011 to support pregeneration of QR codes that were placed outside of rooms. 

The application is intended to be accessed on mobiles by scanning QR codes that would pass the required parameters to each page. The yellowbrickroad.php is one entry point that allows setting of the "p" parameter to a value inclusive of 1 to 7, maps1 to maps4, intro, maps, or locations. This would cause the associated data to be included from the data directory by loading a matching file with p[p].inc.php where [p] would be replaced with the value of p. 

The roomdetails.php no longer functions because the underlying roombook.taf page I redirected to no longer exists. 