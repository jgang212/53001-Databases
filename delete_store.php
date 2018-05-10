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

// Delete from sales that match store name
$query = "DELETE FROM Sells
		WHERE StoreName = '$storename';";

// Delete store from stores
$query2 = "DELETE FROM WatchStore
		WHERE StoreName = '$storename';";

$query3 = "SELECT StoreName FROM WatchStore WHERE StoreName = '$storename';";

$result = mysqli_query($dbcon, $query)
  or die('Store sales records unable to be deleted.');

$result2 = mysqli_query($dbcon, $query2)
  or die('Store unable to be deleted from stores.');

$result3 = mysqli_query($dbcon, $query3)
  or die('Delete successful.');

print "Store <b>$storename</b> has successfully been deleted.";

// Free result
mysqli_free_result($result);
mysqli_free_result($result2);
mysqli_free_result($result3);

// Closing connection
mysqli_close($dbcon);
?> 