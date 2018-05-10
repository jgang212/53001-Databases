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

// Find all users whose favorite watches cost more than $9900
$query = 'SELECT WatchUser.UserName from WatchUser
where WatchUser.FavoriteWatch in (select WatchName from Watch where Price > 9900)';
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error());

// Check if there are any users with favorite watches above $9900
$tuple = mysqli_fetch_array($result)
  or die("No serious watch collectors here in this database");

print "The users with expensive favorite watches in the database are:<br>";

// Printing user names in HTML
print '<ul>';
print "<li> {$tuple['UserName']}";
while ($tuple = mysqli_fetch_array($result)) {
   print "<li> {$tuple['UserName']}";
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>