DROP TABLE IF EXISTS tblRecipes;
CREATE TABLE IF NOT EXISTS tblRecipes (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldYield varchar(255) DEFAULT NULL,
    fldBakeTime varchar(50) DEFAULT NULL,
    fldCategory varchar(50) DEFAULT NULL
);   

INSERT INTO tblRecipes (pmkRecipeName, fldYield, fldBakeTime, fldCategory) VALUES 
('Lemon-Poppy Seed Bread', 'One 9x5-inch loaf', '1 hour', 'Quick Bread'),
('Banana Bread', 'One 9x5-inch loaf', '1 hour', 'Quick Bread'),
('Chocolate Chip Cookies', '3 dozen cookies', '10 minutes', 'Cookies'),
('Blueberry Muffins', '12 muffins', '20 minutes', 'Muffins');

