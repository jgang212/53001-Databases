<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'jgang';
$password = 'Feiyei9n';
$database = $username.'DB';

// Attempting to connect
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
//print 'Connected successfully!<br>';

// Getting the input parameter (zip code):
$zipcode = $_REQUEST['zipcode'];

// check correct input
if ($zipcode > 99999 || $zipcode < 0 || empty($zipcode))
{
    die('invalid zip code value');
}

// Get the average age of users with the given zip code
$query = "SELECT avg(Age) as avgAge
    from WatchUser
    where ZipCode = $zipcode";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

// Can if zip code exists
$tuple = mysqli_fetch_array($result)
	or die("Zip code $zipcode not found!");
if (is_null($tuple['avgAge']))
{ 
	die("Zip code $zipcode not found!"); 
}

// Printing average age in HTML
print "Zip code <b>$zipcode</b> has an average age of ".$tuple['avgAge'];

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 