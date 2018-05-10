CREATE TABLE WatchUser (
	UserName varchar(32) PRIMARY KEY,
    RealName varchar(32),
    Age int,
    ZipCode char(5),
    FavoriteWatch varchar(50)
    );
    
CREATE TABLE Collection (
	CollectionID varchar(10) PRIMARY KEY,
    CollectionName varchar(32),
    OwnedUserName varchar(16)
    );
    
CREATE TABLE Watch (
	WatchName varchar(50) PRIMARY KEY,
    WatchType varchar(20),
    Price real,
    CreationYear char(4),
    MovementID varchar(20),
    CompanyName varchar(30)
    );
    
CREATE TABLE Customization (
	CustomizationName varchar(20) PRIMARY KEY,
    Price real
    );
    
CREATE TABLE WatchStore (
	StoreName varchar(50) PRIMARY KEY,
    Location varchar(20),
    OpenYear char(4)
    );
    
CREATE TABLE WatchMovement (
	MovementID varchar(20) PRIMARY KEY,
    MovementType varchar(20),
    Jewels int,
    VibrationsPerHour int,
    ManufactureYear char(4),
    CompanyName varchar(30)
    );
    
CREATE TABLE WatchCompany (
	CompanyName varchar(30) PRIMARY KEY,
    Location varchar(20),
    YearFounded char(4)
    );

CREATE TABLE CollectionContains (
	CollectionID varchar(10),
    WatchName varchar(50)
    );

CREATE TABLE Incorporates (
	CustomizationName varchar(20),
    WatchName varchar(50)
    );

CREATE TABLE Sells (
	StoreName varchar(50),
    WatchName varchar(50),
    SoldDate date
    );