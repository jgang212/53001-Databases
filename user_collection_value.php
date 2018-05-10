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

// Getting the input parameter (user name):
$username = $_REQUEST['username'];

// check for single quote corner case
if (strpos($username, "'") !== false)
{ 
	die("Invalid Username $username because it contains a single quote!"); 
}

// Get the real name and collection value of user
$query = "SELECT RealName, sum(TotalPrice) as CollectionValue from
WatchUser,
(select * from
(select CollectionName, sum(Price) as TotalPrice
from Collection, CollectionContains, Watch
where Collection.CollectionID = CollectionContains.CollectionID
and CollectionContains.WatchName = Watch.WatchName
group by CollectionName) a
natural join Collection) b
where WatchUser.UserName = '$username'
and WatchUser.UserName = OwnedUserName";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

// Check if user exists
$tuple = mysqli_fetch_array($result)
  or die("Username $username not found!");
if (is_null($tuple['CollectionValue']))
{ 
	die("Username $username not found or has no collection!"); 
}

// Printing average age in HTML
print "<b>{$tuple['RealName']}</b> has a collection worth \${$tuple['CollectionValue']}";

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 