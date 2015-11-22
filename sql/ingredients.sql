DROP TABLE IF EXISTS tblIngredients;
CREATE TABLE IF NOT EXISTS tblIngredients (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldIngredient varchar(50) DEFAULT NULL,
)   ENGINE=InnoDB AUTO_INCREMENT=2228 DEFAULT CHARSET=utf8;