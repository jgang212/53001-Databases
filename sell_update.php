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
$storename = $_REQUEST['storename'];
$watchname = $_REQUEST['watchname'];
$solddate = $_REQUEST['solddate'];

// check for single quote corner case
if (strpos($watchname, "'") !== false)
{ 
	die("Invalid watchname $watchname because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($watchname) > 50 )
{
    die('watchname cannot exceed 50 characters');
}

// add new watch sale
$query = "INSERT INTO Sells (StoreName, WatchName, SoldDate)
		VALUES ('" . $storename . "', '" . $watchname . "', '" . $solddate . "');";

$querycheck = "SELECT * FROM Sells 
              WHERE StoreName = '$storename'
              and WatchName = '$watchname'
              and SoldDate = '$solddate';";
$result = mysqli_query($dbcon, $query)
  or die('Registration failed. ' . mysqli_error($dbcon));

$result2 = mysqli_query($dbcon, $querycheck)
  or die('Registration failed. ' . mysqli_error($dbcon));

print "The sales record <b>({$storename}, {$watchname}, {$solddate})</b> has successfully been added/updated.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);

// Closing connection
mysqli_close($dbcon);

?>