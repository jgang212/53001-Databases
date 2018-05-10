<?php 
echo "In Peyo's watch database, one pretty interesting piece of information that could be more easily analyzed through data warehousing is which factors of a watch impact its price. Specifically, we'd not only need to look at the attributes on the watch, but also the customizations, movement, and any additional information about the watch company. We would need to transform the following tables to make this analysis easier:<br>
<br>
-Watch: This has the majority of the factors we need to look at as well as the outcome we want to analyze: the price.<br>
<br>
-WatchMovement: We need this table to match the watch's MovementID to get all of the attributes of the watch movement.<br>
<br>
-WatchCompany: This table will tell us more about the CompanyName of the Watch in case any of those attributes affect its price.<br>
<br>
-Customization and Incorporates: These two tables help us link watch Customizations to Watches, as they surely have an impact on the price of the watch (since Customizations themselves have prices). 
<br>
<br>
A second topic that would be interesting to look at is seeing if certain attributes of users are tied to the types of watches they put as their favorite watch. For example, people in certain zip codes or age groups might like or dislike watches with quartz movements. These tables would need to be transformed to more easily look at this:<br>
<br>
-WatchUser: This gives us all of the user attributes we might match with watch attributes, as well as the variable we are interested in, FavoriteWatch.<br>
<br>
-Watch: This has the majority of the factors we need to look at to see how they are related to user attributes.<br>
<br>
-WatchMovement: We need this table to match the watch's MovementID to get all of the attributes of the watch movement.<br>
<br>
-WatchCompany: This table will tell us more about the CompanyName of the Watch in case any of those attributes affect its likelihood of being favorited.<br>
<br>
-Customization and Incorporates: These two tables help us link watch Customizations to Watches, since these customizations might have an impact on the whether a watch is favorited by a user. ";
?>