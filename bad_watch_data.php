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

// Find all watches with bad data and count by company name
$query = 'SELECT WatchCompany.CompanyName, count(*) as TimeTravelingWatches from Watch, WatchCompany
where Watch.CreationYear < WatchCompany.YearFounded
and Watch.CompanyName = WatchCompany.CompanyName
group by WatchCompany.CompanyName
order by WatchCompany.CompanyName asc;';
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error());

// See if there is bad data in the database
$tuple = mysqli_fetch_array($result)
  or die("Yay! No bad data found!");

print "The time traveling watches in the database are:<br>";

// Printing companies with bad watch data in HTML
print '<ul>';
print "<li> {$tuple['CompanyName']} has {$tuple['TimeTravelingWatches']} bad watch data";
while ($tuple = mysqli_fetch_array($result)) {
   print "<li> {$tuple['CompanyName']} has {$tuple['TimeTravelingWatches']} bad watch data";
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>