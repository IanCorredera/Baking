DROP TABLE IF EXISTS tblRecipes;
CREATE TABLE IF NOT EXISTS tblRecipes (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldBakeTime mediumint(8) DEFAULT NULL,
    fldYield varchar(255) DEFAULT NULL,
    fldCategory varchar(50) DEFAULT NULL
)   ENGINE=InnoDB AUTO_INCREMENT=2228 DEFAULT CHARSET=utf8;


