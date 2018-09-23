<?php 
 $servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password,1);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}   
   
   // The Installation URL   like [https://wwww.example.com
    $url= 'http://localhost';
	// The main path (if installed at root type ' ' else type '/foldername' )
	$path= '/1';
	
    // Full path url
	$fullpath=$url.$path;
?>
