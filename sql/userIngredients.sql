DROP TABLE IF EXISTS tblUserIngredients;
CREATE TABLE IF NOT EXISTS tblUserIngredients (
    pmkUserName varchar(255) NOT NULL PRIMARY KEY,
    fldEmail varchar(50) DEFAULT NULL,
    fldIngred1 varchar(50) DEFAULT NULL,
)  
