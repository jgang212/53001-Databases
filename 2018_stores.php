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

// Find all locations of store names that sold watches in 2018
$query = "SELECT distinct WatchStore.Location from WatchStore, Sells
where Sells.SoldDate > '2018-01-01'
and WatchStore.StoreName = Sells.StoreName";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error());

// Check if there are watch sales at all in 2018
$tuple = mysqli_fetch_array($result)
  or die("No watch sales so far in 2018.");

print "The stores that sold watches in 2018 are located in:<br>";

// Printing store locations in HTML
print '<ul>';
print "<li> {$tuple['Location']}";
while ($tuple = mysqli_fetch_array($result)) {
   print "<li> {$tuple['Location']}";
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>