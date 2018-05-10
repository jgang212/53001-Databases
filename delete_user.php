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
$username = $_REQUEST['username'];

// check for single quote corner case
if (strpos($username, "'") !== false)
{ 
	die("Invalid username $username because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($username) > 32 )
{
    die('username cannot exceed 32 characters');
}

// Delete from collection where collection is owned by user
$query = "DELETE FROM Collection
		WHERE OwnedUserName = '$username';";

// Delete from user
$query2 = "DELETE FROM WatchUser
		WHERE UserName = '$username';";

$query3 = "SELECT UserName FROM WatchUser WHERE UserName = '$username';";

$result = mysqli_query($dbcon, $query)
  or die('User collection unable to be deleted from collection.');

$result2 = mysqli_query($dbcon, $query2)
  or die('User unable to be deleted from users.');

$result3 = mysqli_query($dbcon, $query3)
  or die('Delete successful.');

print "User <b>$username</b> has successfully been deleted.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);
mysqli_free_result($result3);

// Closing connection
mysqli_close($dbcon);
?> 