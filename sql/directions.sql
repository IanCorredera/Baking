DROP TABLE IF EXISTS tblDirections;
CREATE TABLE IF NOT EXISTS tblDirections (
    pmkRecipeName varchar(255) NOT NULL PRIMARY KEY,
    fldStep1 varchar(1000) DEFAULT NULL,
    fldStep2 varchar(1000) DEFAULT NULL,
    fldStep3 varchar(1000) DEFAULT NULL,
    fldStep4 varchar(1000) DEFAULT NULL,
    fldStep5 varchar(1000) DEFAULT NULL,
    fldStep6 varchar(1000) DEFAULT NULL,
    fldStep7 varchar(1000) DEFAULT NULL,
    fldStep8 varchar(1000) DEFAULT NULL,
    fldStep9 varchar(1000) DEFAULT NULL,
    fldStep10 varchar(1000) DEFAULT NULL,
    fldStep11 varchar(1000) DEFAULT NULL,
    fldStep12 varchar(1000) DEFAULT NULL,
    fldStep13 varchar(1000) DEFAULT NULL,
    fldStep14 varchar(1000) DEFAULT NULL,
    fldStep15 varchar(1000) DEFAULT NULL,
)   

INSERT INTO tblDirections (pmkRecipeName, fldStep1, fldStep2, fldStep3, fldStep4,
fldStep5, fldStep6, fldStep7, fldStep8, fldStep9, fldStep10, fldStep11, fldStep12,
fldStep13, fldStep14, fldStep15) VALUES
('Lemon-Poppy Seed Bread','Whisk together the flours with the baking powder, baking soda, and salt in a medium bowl.',
'Cream together the butter and sugar in a large mixing bowl until fluffy. Add the eggs, one at a time, scraping the sides and bottom of the bowl between additions. 
Add the lemon zest, then one-third of the dry ingredients. Add the lemon juice, then another third of the dry ingredients. 
Mix in the yogurt and poppy seeds, then the remaining dry ingredients.', 
'Pour the batter into the prepared pan. Bake until a toothpick inserted in the center comes out clean, 1 hour to 1 hour 5minutes. 
Remove from the oven, place on a rack, and cool in the pan for 15 to 20 minutes. After that time, run a table knife around the edge of the pan, and tip the bread out. 
Return the bread to the rack to cool completely before glazing.');

