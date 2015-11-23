DROP TABLE IF EXISTS tblRecipes;
CREATE TABLE IF NOT EXISTS tblRecipes (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldYield varchar(255) DEFAULT NULL,
    fldBakeTime varchar(50) DEFAULT NULL,
    fldCategory varchar(50) DEFAULT NULL
)   

INSERT INTO tblRecipes (pmkRecipeName, fldYield, fldBakeTime, fldCategory) VALUES ('LemonPoppySeedBread', 'One9x5-inchloaf', '1hour', 'QuickBread');

