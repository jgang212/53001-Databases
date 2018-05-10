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
$watchname = $_REQUEST['watchname'];
$watchtype = $_REQUEST['watchtype'];
$price = $_REQUEST['price'];
$creationyear = $_REQUEST['creationyear'];
$movementid = $_REQUEST['movementid'];
$companyname = $_REQUEST['companyname'];

// check for single quote corner case
if (strpos($watchname, "'") !== false)
{ 
	die("Invalid watchname $watchname because it contains a single quote!"); 
}
if (strpos($watchtype, "'") !== false)
{ 
	die("Invalid watchtype $watchtype because it contains a single quote!"); 
}
if (strpos($movementid, "'") !== false)
{ 
	die("Invalid movementid $movementid because it contains a single quote!"); 
}
if (strpos($companyname, "'") !== false)
{ 
	die("Invalid companyname $companyname because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($watchname) > 50 )
{
    die('watchname cannot exceed 50 characters');
}
if (strlen($watchtype) > 20 )
{
    die('watchtype cannot exceed 20 characters');
}
if ($price < 0)
{
    die('price cannot be negative');
}
if ($creationyear > 2018 || $creationyear < 0)
{
    die('creationyear cannot exceed 2018 and cannot be negative');
}
if (strlen($movementid) > 20 )
{
    die('movementid cannot exceed 20 characters');
}
if (strlen($companyname) > 30 )
{
    die('companyname cannot exceed 30 characters');
}

// add or update new Watch
$query = "INSERT INTO Watch (WatchName, WatchType, Price, CreationYear, MovementID, CompanyName)
		VALUES ('" . $watchname . "', '" . $watchtype . "', '" . $price . "', '" . $creationyear . "', '" . $movementid . "', '" . $companyname . "')
		ON DUPLICATE KEY UPDATE WatchType='" . $watchtype . "',
								Price= '" . $price . "',
								CreationYear= '" . $creationyear . "',
								MovementID= '" . $movementid . "',
								CompanyName='" . $companyname . "';";

$querycheck = "SELECT * FROM Watch WHERE WatchName = '$watchname';";
$result = mysqli_query($dbcon, $query)
  or die('Registration failed. ' . mysqli_error($dbcon));

$result2 = mysqli_query($dbcon, $querycheck)
  or die('Registration failed. ' . mysqli_error($dbcon));

print "Watch <b>$watchname</b> has successfully been added/updated.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);

// Closing connection
mysqli_close($dbcon);

?>