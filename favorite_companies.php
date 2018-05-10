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

// List each company's number of favorite watches
$query = 'SELECT WatchCompany.CompanyName, count(*) as NumFavs from WatchUser
inner join Watch on WatchUser.FavoriteWatch = Watch.WatchName
inner join WatchCompany on WatchCompany.CompanyName = Watch.CompanyName
group by WatchCompany.CompanyName
order by WatchCompany.CompanyName asc';
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error());

// Make sure there are watch companies in the database
$tuple = mysqli_fetch_array($result)
  or die("No companies in the database.");

print "Here are all of the watch companies in the database and how many users have favorited their watches:<br>";

// Printing watch companies and number of favorites in HTML
print '<ul>';
print "<li> {$tuple['CompanyName']}: {$tuple['NumFavs']}";
while ($tuple = mysqli_fetch_array($result)) {
   print "<li> {$tuple['CompanyName']}: {$tuple['NumFavs']}";
}
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>