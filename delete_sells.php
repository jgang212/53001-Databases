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

// Delete from collection where collection is owned by user
$query = "DELETE FROM Sells
		WHERE StoreName = '$storename'
		and WatchName = '$watchname'
		and SoldDate = '$solddate';";

$query2 = "SELECT * FROM Sells
		WHERE StoreName = '$storename'
		and WatchName = '$watchname'
		and SoldDate = '$solddate';";

$result = mysqli_query($dbcon, $query)
  or die('Sales record unable to be deleted from sells.');

$result2 = mysqli_query($dbcon, $query3)
  or die('Delete successful.');

print "Sales record <b>({$storename}, {$watchname}, {$solddate})</b> has successfully been deleted.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);
mysqli_free_result($result3);

// Closing connection
mysqli_close($dbcon);
?> 