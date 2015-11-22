DROP TABLE IF EXISTS tblRecipes;
CREATE TABLE IF NOT EXISTS tblRecipes (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldYield varchar(255) DEFAULT NULL,
    fldBakeTime varchar(50) DEFAULT NULL,
    fldCategory varchar(50) DEFAULT NULL
)   ENGINE=InnoDB AUTO_INCREMENT=2228 DEFAULT CHARSET=utf8;

INSERT INTO tblRecipes (pmkRecipeName, fldYield, fldBakeTime, fldCategory) VALUES
('Lemon-Poppy Seed Bread', 'One 9 x 5-inch loaf', '1 hour', 'Quick Bread');

