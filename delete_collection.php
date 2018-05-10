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
$collectionid = $_REQUEST['collectionid'];

// check for single quote corner case
if (strpos($collectionid, "'") !== false)
{ 
	die("Invalid collectionid $collectionid because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($collectionid) > 10 )
{
    die('username cannot exceed 10 characters');
}

// Delete from collection
$query = "DELETE FROM Collection
		WHERE CollectionID = '$collectionid';";

$query2 = "SELECT * FROM Collection WHERE CollectionID = '$collectionid';";

$result = mysqli_query($dbcon, $query)
  or die('Collection unable to be deleted from collections.');

$result2 = mysqli_query($dbcon, $query3)
  or die('Delete successful.');

print "Collection <b>$collectionid</b> has successfully been deleted.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);
mysqli_free_result($result3);

// Closing connection
mysqli_close($dbcon);
?> 