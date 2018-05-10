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
$realname = $_REQUEST['realname'];
$age = $_REQUEST['age'];
$zipcode = $_REQUEST['zipcode'];
$favoritewatch = $_REQUEST['favoritewatch'];

// check for single quote corner case
if (strpos($username, "'") !== false)
{ 
	die("Invalid username $username because it contains a single quote!"); 
}
if (strpos($realname, "'") !== false)
{ 
	die("Invalid realname $realname because it contains a single quote!"); 
}
if (strpos($favoritewatch, "'") !== false)
{ 
	die("Invalid favoritewatch $favoritewatch because it contains a single quote!"); 
}

// check for valid inputs
if (strlen($username) > 32 )
{
    die('username cannot exceed 32 characters');
}
if (strlen($realname) > 32 )
{
    die('realname cannot exceed 32 characters');
}
if ($age < 0)
{
    die('age cannot be negative');
}
if ($zipcode > 99999 || $zipcode < 0)
{
    die('zipcode cannot exceed 5 digits and cannot be negative');
}
if (strlen($favoritewatch) > 50 )
{
    die('favoritewatch cannot exceed 50 characters');
}

// add or update new WatchUser
$query = "INSERT INTO WatchUser (UserName, RealName, Age, ZipCode, FavoriteWatch)
		VALUES ('" . $username . "', '" . $realname . "', '" . $age . "', '" . $zipcode . "', '" . $favoritewatch . "')
		ON DUPLICATE KEY UPDATE RealName='" . $realname . "',
								Age= '" . $age . "',
								ZipCode= '" . $zipcode . "',
								FavoriteWatch='" . $favoritewatch . "';";

$querycheck = "SELECT * FROM WatchUser WHERE UserName = '$username';";
$result = mysqli_query($dbcon, $query)
  or die('Registration failed. ' . mysqli_error($dbcon));

$result2 = mysqli_query($dbcon, $querycheck)
  or die('Registration failed. ' . mysqli_error($dbcon));

print "User <b>$username</b> has successfully been added/updated.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);

// Closing connection
mysqli_close($dbcon);

?>