<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'jgang';
$password = 'Feiyei9n';
$database = $username.'DB';

// Attempting to connect
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());

// Getting the input parameters:
$companyname = $_REQUEST['companyname'];
$location = $_REQUEST['location'];
$yearfounded = $_REQUEST['yearfounded'];

// check for single quote corner case
if (strpos($companyname, "'") !== false)
{ 
	die("Invalid companyname $companyname because it contains a single quote!"); 
}
if (strpos($location, "'") !== false)
{ 
	die("Invalid location $location because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($companyname) > 30 )
{
    die('companyname cannot exceed 30 characters');
}
if (strlen($location) > 20 )
{
    die('location cannot exceed 20 characters');
}
if ($yearfounded > 2018 || $yearfounded < 0)
{
    die('yearfounded cannot exceed 2018 and cannot be negative');
}

// add or update new WatchCompany
$query = "INSERT INTO WatchCompany (CompanyName, Location, YearFounded)
		VALUES ('" . $companyname . "', '" . $location . "', '" . $yearfounded . "')
		ON DUPLICATE KEY UPDATE Location='" . $location . "',
								YearFounded='" . $yearfounded . "';";

$querycheck = "SELECT * FROM WatchCompany WHERE CompanyName = '$companyname';";
$result = mysqli_query($dbcon, $query)
  or die('Registration failed. ' . mysqli_error($dbcon));

$result2 = mysqli_query($dbcon, $querycheck)
  or die('Registration failed. ' . mysqli_error($dbcon));

print "WatchCompany <b>$companyname</b> has successfully been added/updated.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);

// Closing connection
mysqli_close($dbcon);

?>