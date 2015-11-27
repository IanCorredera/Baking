DROP TABLE IF EXISTS tblIngredients;
CREATE TABLE IF NOT EXISTS tblIngredients (
    pmkRecipeName varchar(255) DEFAULT NULL,
    fldIngredient1 varchar(255) DEFAULT NULL,
    fldIngredient2 varchar(255) DEFAULT NULL,
    fldIngredient3 varchar(255) DEFAULT NULL,
    fldIngredient4 varchar(255) DEFAULT NULL,
    fldIngredient5 varchar(255) DEFAULT NULL,
    fldIngredient6 varchar(255) DEFAULT NULL,
    fldIngredient7 varchar(255) DEFAULT NULL,
    fldIngredient8 varchar(255) DEFAULT NULL,
    fldIngredient9 varchar(255) DEFAULT NULL,
    fldIngredient10 varchar(255) DEFAULT NULL,
    fldIngredient11 varchar(255) DEFAULT NULL,
    fldIngredient12 varchar(255) DEFAULT NULL,
    fldIngredient13 varchar(255) DEFAULT NULL
);

INSERT INTO tblIngredients (pmkRecipeName, fldIngredient1, fldIngredient2, fldIngredient3, fldIngredient4, fldIngredient5, fldIngredient6, fldIngredient7, fldIngredient8, fldIngredient9, fldIngredient10, fldIngredient11, fldIngredient12, fldIngredient13) VALUES
('Lemon-Poppy Seed Bread', '1.5 cups white whole wheat flour', 
'1/2 cup oat flour', '3/4 cup unbleached all purpose flour', 
'2 teaspoons baking powder', '1/2 teaspoon baking soda', '1/2 teaspoon salt', 
'1/2 cup unsalted butter', '1 cup sugar', '2 large eggs', '2 tablespoons grated lemon zest',
'1/2 cup fresh lemon juice', '3/4 cup lemon yogurt', '1/4 cup poppy seeds'), 
('Banana Bread', '1/2 cup unsalted butter', '2/3 cup brown sugar', '1 teaspoon vanilla extract',
'1 teaspoon ground cinnamon', '1/4 teaspoon ground nutmeg', '1 teaspoon baking soda', '1 teaspoon baking powder', 
'1 teaspoon salt', '1 1/2 cups mashed ripe bananas (about 3 medium or 2 large bananas)', 
'3 tablespoons apricot jam', '1/4 cup honey', '2 large eggs', '2 1/4 cups flour'),
('Chocolate Chip Cookies', '6 tablespoons unsalted butter', 
'1/3 cup granulated sugar', '1/2 cup brown sugar', '3 tablespoons honey',
'2 teaspoons vanilla extract', '1/2 teaspoon espresso powder', '3/4 teaspoon salt' 
'1 tablespoon cider vinegar', '1 large egg', '1/2 teaspoon baking soda', 
'1/2 teaspoon baking powder', '2 cups whole wheat flour', '2 2/3 to 3 cups semisweet chocolate chips'), 
('Blueberry Muffins', '2 1/4 cups whole wheat flour', '1 cup brown sugar', '3/4 teaspoon salt', 
'1 teaspoon baking powder', '1/2 teaspoon baking soda', '1/2 teaspoon ground cinnamon', 
'1 cup blueberries', '1 teaspoon vanilla extract', '1/3 cup vegetable oil', 
'1 1/2 cups buttermilk or plain (not Greek) yogurt', NULL, NULL, NULL)
;

