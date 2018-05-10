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

// Getting the input parameter (WatchName):
$watchname = $_REQUEST['watchname'];

// check for single quote corner case
if (strpos($watchname, "'") !== false)
{ 
	die("Invalid watchname $watchname because it contains a single quote!"); 
}

// Get the attributes of the Watch with the given WatchName
$query = "SELECT Watch.*, MovementType, Jewels as MovementJewels, VibrationsPerHour as MovementVPH,
    ManufactureYear as MovementManufactureYear, WatchMovement.CompanyName as MovementCompany,
    Location as CompanyLocation, YearFounded as CompanyFoundedYear
    from Watch
    inner join WatchMovement using (MovementID)
    inner join WatchCompany on Watch.CompanyName = WatchCompany.CompanyName
    where WatchName = '$watchname'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

// Check if watchname exists
$tuple = mysqli_fetch_array($result)
  or die("Watch name $watchname not found!");

print "Watch <b>$watchname</b> has the following attributes:";

// Printing Watch attributes in HTML
print '<ul>';  
print '<li> WatchName: '.$tuple['WatchName'];
print '<li> WatchType: '.$tuple['WatchType'];
print '<li> Price: $'.$tuple['Price'];
print '<li> CreationYear: '.$tuple['CreationYear'];
print '<li> MovementID: '.$tuple['MovementID'];
print '<li> CompanyName: '.$tuple['CompanyName'];
print '<li> MovementType: '.$tuple['MovementType'];
print '<li> MovementJewels: '.$tuple['MovementJewels'];
print '<li> MovementVPH: '.$tuple['MovementVPH'];
print '<li> MovementManufactureYear: '.$tuple['MovementManufactureYear'];
print '<li> MovementCompany: '.$tuple['MovementCompany'];
print '<li> CompanyLocation: '.$tuple['CompanyLocation'];
print '<li> CompanyFoundedYear: '.$tuple['CompanyFoundedYear'];
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 