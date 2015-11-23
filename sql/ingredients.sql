DROP TABLE IF EXISTS tblIngredients;
CREATE TABLE IF NOT EXISTS tblIngredients (
    pmkRecipeName varchar(255) DEFAULT NULL,
    fldIngredient varchar(255) DEFAULT NULL,
)

INSERT INTO tblIngredients (pmkRecipeName, fldIngredient) VALUES
('Lemon-Poppy Seed Bread', '1.5 cups white whole wheat flour'),
('Lemon-Poppy Seed Bread', '1/2 cup oat flour'), 
('Lemon-Poppy Seed Bread','3/4 cup unbleached all purpose flour'), 
('Lemon-Poppy Seed Bread', '2 teaspoons baking powder'),
('Lemon-Poppy Seed Bread', '1/2 teaspoon baking soda'),
('Lemon-Poppy Seed Bread', '1/2 teaspoon salt'),
('Lemon-Poppy Seed Bread', '1/2 cup unsalted butter'),
('Lemon-Poppy Seed Bread', '1 cup sugar'),
('Lemon-Poppy Seed Bread', '2 large eggs'),
('Lemon-Poppy Seed Bread', '2 tablespoons grated lemon zest'),
('Lemon-Poppy Seed Bread', '1/2 cup fresh lemon juice'),
('Lemon-Poppy Seed Bread', '3/4 cup lemon yogurt'),
('Lemon-Poppy Seed Bread', '1/4 cup poppy seeds');
