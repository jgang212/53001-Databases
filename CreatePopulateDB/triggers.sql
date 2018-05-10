# trigger 1: attribute constraint - no automatic watch has VibrationsPerHour < 7200
DELIMITER |
CREATE TRIGGER AutomaticVPHLowerBoundInsertTrigger
    BEFORE INSERT ON WatchMovement
    FOR EACH ROW
    BEGIN
        IF ((NEW.MovementType <> "Battery") AND (NEW.VibrationsPerHour < 7200)) THEN
            SET NEW.VibrationsPerHour = 7200;
        END IF;
    END; |
DELIMITER ;

# trigger 2: log table for Watch table
CREATE TABLE logWatch (
    action varchar(20),
    WatchName varchar(50),
    timestamp TIMESTAMP,
    WatchType varchar(20),
    Price real,
    CreationYear char(4),
    MovementID varchar(20),
    CompanyName varchar(30)
);

DELIMITER |
CREATE TRIGGER logInsert 
	AFTER INSERT ON Watch
    FOR EACH ROW
    BEGIN
        INSERT INTO logWatch VALUES('insert', NEW.WatchName, NOW(), NEW.WatchType, NEW.Price, NEW.CreationYear, NEW.MovementID, NEW.CompanyName);
    END; |
DELIMITER ;

DELIMITER |
CREATE TRIGGER logUpdate
	AFTER UPDATE ON Watch
    FOR EACH ROW
    BEGIN
        INSERT INTO logWatch VALUES('update', NEW.WatchName, NOW(), NEW.WatchType, NEW.Price, NEW.CreationYear, NEW.MovementID, NEW.CompanyName);
    END; |
DELIMITER ;

DELIMITER |
CREATE TRIGGER logDelete
	AFTER DELETE ON Watch
    FOR EACH ROW
    BEGIN
        INSERT INTO logWatch VALUES('delete', OLD.WatchName, NOW(), OLD.WatchType, OLD.Price, OLD.CreationYear, OLD.MovementID, OLD.CompanyName);
    END; |
DELIMITER ;

# trigger 3: after a new WatchUser with a FavoriteWatch, insert into Watch table with null info unless it already exists
DELIMITER |
CREATE TRIGGER WatchExistsTrigger
    AFTER INSERT ON WatchUser
    FOR EACH ROW
    BEGIN
        IF (NEW.FavoriteWatch is not NULL) THEN
            INSERT IGNORE INTO Watch(WatchName) VALUES(NEW.FavoriteWatch);
        END IF;
    END; |
DELIMITER ;