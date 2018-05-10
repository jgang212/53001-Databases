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

// Getting the input parameter (Watch type):
$watchtype = $_REQUEST['watchtype'];

// Get the number of watches of given type in the database
$query = "SELECT count(*) as typeCount
    from Watch
    where WatchType = '$watchtype'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

// Check if input is valid
$tuple = mysqli_fetch_array($result)
  or die("Watch type $watchtype not found!");

// Printing count in HTML
print "Watch type <b>$watchtype</b> has {$tuple['typeCount']} entries in the database";

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 