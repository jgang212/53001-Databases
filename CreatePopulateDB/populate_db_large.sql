INSERT INTO WatchUser VALUES('jgang', 'Jack Gang', 27, 60605, "Tag Heuer Aquaracer");
INSERT INTO WatchUser VALUES('msmith', 'Michael Smith', 27, 60610, "Ferrari 0830105");
INSERT INTO WatchUser VALUES('yamagi', 'Yukiko Amagi', 25, 60605, "Tissot Classic Dream");
INSERT INTO WatchUser VALUES('ztribes', 'Zidane Tribal', 17, 60610, "Casio PRW3000");
INSERT INTO WatchUser VALUES('shepard', 'Kari Shepard', 32, 10010, "Michael Kors Lexington");
INSERT INTO WatchUser VALUES('wowlegendary', 'Harth Stonebrew', 54, 12345, "Jaeger-LeCoultre Reverso");
INSERT INTO WatchUser VALUES('jimmyray', 'James Raynor', 45, 98312, "Tag Heuer Aquaracer");
INSERT INTO WatchUser VALUES('theenemy', 'Brave Lyn', 23, 45561, "Zenith El Primero");
INSERT INTO WatchUser VALUES('iamgundam', 'Setsuna F. Seiei', 21, 19491, "Omega Seamaster Planet Ocean");
INSERT INTO WatchUser VALUES('christina', 'Kurisu Makise', 17, 56199, "Maurice Lacroix Cinq Aiguilles");

INSERT INTO Collection VALUES('398FSD', 'Best Watches', 'msmith');
INSERT INTO Collection VALUES('490JDSOF', 'Watch This', 'jgang');
INSERT INTO Collection VALUES('90JF340JF', 'Best Watches', 'christina');
INSERT INTO Collection VALUES('9SCIV', 'Timepieces', 'msmith');
INSERT INTO Collection VALUES('23K423', 'Timepieces 2', 'theenemy');
INSERT INTO Collection VALUES('90VIC90XV', 'Horology', 'wowlegendary');
INSERT INTO Collection VALUES('3R', '#WatchGeek', 'ztribes');
INSERT INTO Collection VALUES('I', 'Collection1', 'yamagi');
INSERT INTO Collection VALUES('CX9V', 'DefaultName', 'msmith');
INSERT INTO Collection VALUES('324MKL', 'Wow Much Watch', 'jimmyray');
INSERT INTO Collection VALUES('X8CHJV', 'Wow Such Watch', 'iamgundam');
INSERT INTO Collection VALUES('23', 'Really', 'jimmyray');

INSERT INTO Watch VALUES("Tag Heuer Aquaracer", "Diver", 1199.99, 2010, "Calibre 5", "Tag Heuer");
INSERT INTO Watch VALUES("Ferrari 0830105", "Sport", 150, 2012, "Quartz", "Ferrari");
INSERT INTO Watch VALUES("Tissot Classic Dream", "Dress(W)", 124.99, 2007, "Quartz", "Tissot");
INSERT INTO Watch VALUES("Casio PRW3000", "Sports", 79.99, 2011, "Quartz", "Casio");
INSERT INTO Watch VALUES("Jaeger-LeCoultre Reverso", "Dress", 5750, 2005, "JLC 965", "Jaeger-LeCoultre");
INSERT INTO Watch VALUES("Michael Kors Lexington", "Dress(W)", 199.99, 2010, "Quartz", "Michael Kors");
INSERT INTO Watch VALUES("Zenith El Primero", "Chronograph", 3599.99, 2011, "El Primero 400B", "Zenith");
INSERT INTO Watch VALUES("Omega Seamaster Planet Ocean", "Diver", 4500, 2013, "8500", "Omega");
INSERT INTO Watch VALUES("Maurice Lacroix Cinq Aiguilles", "Dress", 1150, 2012, "ML 159", "Maurice Lacroix");
INSERT INTO Watch VALUES("iWatch", "Smart", 299.99, 2016, "Quartz", "Apple");

INSERT INTO Customization VALUES("Touchscreen", 150);
INSERT INTO Customization VALUES("Moon phase", 450);
INSERT INTO Customization VALUES("Chronograph", 125);
INSERT INTO Customization VALUES("Rotating Bezel", 75);
INSERT INTO Customization VALUES("Diamond", 1000);
INSERT INTO Customization VALUES("Sapphire Crystal", 100);
INSERT INTO Customization VALUES("Stainless Steel", 50);
INSERT INTO Customization VALUES("Cote de Geneve", 400);
INSERT INTO Customization VALUES("Waterproof", 175);
INSERT INTO Customization VALUES("Skeleton", 200);

INSERT INTO WatchStore VALUES("Princeton Jewelers", "Princeton", 1940);
INSERT INTO WatchStore VALUES("Fine Jewelers's", "New York", 1931);
INSERT INTO WatchStore VALUES("Jomashop", "Internet", 2010);
INSERT INTO WatchStore VALUES("The Times", "Chicago", 1990);
INSERT INTO WatchStore VALUES("Haute Horology", "Geneva", 1985);
INSERT INTO WatchStore VALUES("Fresh Jewelers", "Philadelphia", 2018);
INSERT INTO WatchStore VALUES("Marcy's", "San Francisco", 1978);
INSERT INTO WatchStore VALUES("Biao", "Beijing", 2000);
INSERT INTO WatchStore VALUES("WatchUSeek", "Internet", 2012);
INSERT INTO WatchStore VALUES("At The Tower", "Dubai", 2015);

INSERT INTO WatchMovement VALUES("Calibre 5", "Automatic", 25, 28800, 2005, "Tag Heuer");
INSERT INTO WatchMovement VALUES("ETA-2824", "Automatic", 25, 28800, 1990, "ETA");
INSERT INTO WatchMovement VALUES("Quartz", "Battery", 0, 0, 1905, "Bell Labs");
INSERT INTO WatchMovement VALUES("JLC 965", "Automatic", 28, 28800, 2010, "Jaeger-LeCoultre");
INSERT INTO WatchMovement VALUES("El Primero 400B", "Automatic", 32, 36000, 2004, "Zenith");
INSERT INTO WatchMovement VALUES("8500", "Automatic", 27, 28800, 2007, "Omega");
INSERT INTO WatchMovement VALUES("ML 159", "Automatic", 26, 28800, 2009, "Maurice Lacroix");
INSERT INTO WatchMovement VALUES("Valjoux 7750", "Automatic", 27, 28800, 2000, "Valjoux");
INSERT INTO WatchMovement VALUES("Caliber 5000", "Automatic", 26, 28800, 2004, "IWC");
INSERT INTO WatchMovement VALUES("Caliber 2121", "Automatic", 35, 28800, 2000, "Audemars Piguet");

INSERT INTO WatchCompany VALUES("Tag Heuer", "Geneva", 1940);
INSERT INTO WatchCompany VALUES("Jaeger-LeCoultre", "Zurich", 1930);
INSERT INTO WatchCompany VALUES("Maurice Lacroix", "Geneva", 1990);
INSERT INTO WatchCompany VALUES("IWC", "Zurich", 1922);
INSERT INTO WatchCompany VALUES("Audemars Piguet", "Geneva", 1905);
INSERT INTO WatchCompany VALUES("Omega", "Zurich", 1933);
INSERT INTO WatchCompany VALUES("Zenith", "Geneva", 1956);
INSERT INTO WatchCompany VALUES("Apple", "San Francisco", 1980);
INSERT INTO WatchCompany VALUES("Tissot", "Geneva", 1980);
INSERT INTO WatchCompany VALUES("Casio", "New York", 1988);

INSERT INTO CollectionContains VALUES('398FSD', 'Tag Heuer Aquaracer');
INSERT INTO CollectionContains VALUES('490JDSOF', 'Omega Seamaster Planet Ocean');
INSERT INTO CollectionContains VALUES('90JF340JF', 'Jaeger-LeCoultre Reverso');
INSERT INTO CollectionContains VALUES('9SCIV', 'iWatch');
INSERT INTO CollectionContains VALUES('23K423', 'Casio PRW3000');
INSERT INTO CollectionContains VALUES('90VIC90XV', 'Casio PRW3000');
INSERT INTO CollectionContains VALUES('3R', 'Michael Kors Lexington');
INSERT INTO CollectionContains VALUES('I', 'Tissot Classic Dream');
INSERT INTO CollectionContains VALUES('CX9V', 'Ferrari 0830105');
INSERT INTO CollectionContains VALUES('324MKL', 'Maurice Lacroix Cinq Aiguilles');
INSERT INTO CollectionContains VALUES('X8CHJV', 'Ferrari 0830105');
INSERT INTO CollectionContains VALUES('23', 'Maurice Lacroix Cinq Aiguilles');
INSERT INTO CollectionContains VALUES('90VIC90XV', 'Ferrari 0830105');
INSERT INTO CollectionContains VALUES('3R', 'Maurice Lacroix Cinq Aiguilles');
INSERT INTO CollectionContains VALUES('I', 'Casio PRW3000');
INSERT INTO CollectionContains VALUES('CX9V', 'Tissot Classic Dream');
INSERT INTO CollectionContains VALUES('324MKL', 'Tissot Classic Dream');
INSERT INTO CollectionContains VALUES('X8CHJV', 'Casio PRW3000');
INSERT INTO CollectionContains VALUES('23', 'Ferrari 0830105');

INSERT INTO Incorporates VALUES("Touchscreen", 'iWatch');
INSERT INTO Incorporates VALUES("Moon phase", 'Maurice Lacroix Cinq Aiguilles');
INSERT INTO Incorporates VALUES("Chronograph", 'Omega Seamaster Planet Ocean');
INSERT INTO Incorporates VALUES("Rotating Bezel", 'Tag Heuer Aquaracer');
INSERT INTO Incorporates VALUES("Diamond", "Jaeger-LeCoultre Reverso");
INSERT INTO Incorporates VALUES("Sapphire Crystal", 'Maurice Lacroix Cinq Aiguilles');
INSERT INTO Incorporates VALUES("Stainless Steel", 'Tag Heuer Aquaracer');
INSERT INTO Incorporates VALUES("Cote de Geneve", "Zenith El Primero");
INSERT INTO Incorporates VALUES("Waterproof", 'Omega Seamaster Planet Ocean');
INSERT INTO Incorporates VALUES("Skeleton", "Zenith El Primero");

INSERT INTO Sells VALUES("Princeton Jewelers", "Michael Kors Lexington", '2018-01-02');
INSERT INTO Sells VALUES("Fine Jewelers's", "Zenith El Primero", '2018-01-12');
INSERT INTO Sells VALUES("Jomashop", 'Maurice Lacroix Cinq Aiguilles', '2016-04-02');
INSERT INTO Sells VALUES("The Times", "Michael Kors Lexington", '2017-11-02');
INSERT INTO Sells VALUES("Haute Horology", "Tissot Classic Dream", '2015-03-03');
INSERT INTO Sells VALUES("Fresh Jewelers", 'Casio PRW3000', '2011-07-05');
INSERT INTO Sells VALUES("Marcy's", 'iWatch', '2018-01-15');
INSERT INTO Sells VALUES("Biao", "Jaeger-LeCoultre Reverso", '2015-05-05');
INSERT INTO Sells VALUES("WatchUSeek", 'Omega Seamaster Planet Ocean', '2017-02-03');
INSERT INTO Sells VALUES("At The Tower", 'Omega Seamaster Planet Ocean', '2018-01-23');
INSERT INTO Sells VALUES("Fresh Jewelers", 'Omega Seamaster Planet Ocean', '2014-07-05');
INSERT INTO Sells VALUES("Marcy's", 'Tissot Classic Dream', '2014-01-15');
INSERT INTO Sells VALUES("Biao", "Zenith El Primero", '2013-05-05');
INSERT INTO Sells VALUES("WatchUSeek", 'Maurice Lacroix Cinq Aiguilles', '2017-02-03');
INSERT INTO Sells VALUES("At The Tower", 'Omega Seamaster Planet Ocean', '2018-01-23');

# load large data files
LOAD DATA LOCAL INFILE "data/WatchUser.csv" INTO TABLE WatchUser
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(UserName, RealName, Age, ZipCode, FavoriteWatch);

LOAD DATA LOCAL INFILE "data/Watch.csv" INTO TABLE Watch
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(WatchName, WatchType, Price, CreationYear, MovementID, CompanyName);

LOAD DATA LOCAL INFILE "data/Sells.csv" INTO TABLE Sells
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(StoreName, WatchName, SoldDate);