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
    fldStep15 varchar(1000) DEFAULT NULL
);   

INSERT INTO tblDirections (pmkRecipeName, fldStep1, fldStep2, fldStep3, fldStep4,
fldStep5, fldStep6, fldStep7, fldStep8, fldStep9, fldStep10, fldStep11, fldStep12,
fldStep13, fldStep14, fldStep15) VALUES
('Lemon-Poppy Seed Bread',
'Whisk together the flours with the baking powder, baking soda, and salt in a medium bowl.',
'Cream together the butter and sugar in a large mixing bowl until fluffy. Add the eggs, one 
at a time, scraping the sides and bottom of the bowl between additions. 
Preheat the oven to 350°F. Add the lemon zest, then one-third of the dry ingredients. Add the lemon juice, 
then another third of the dry ingredients. 
Mix in the yogurt and poppy seeds, then the remaining dry ingredients.', 
'Pour the batter into the prepared pan. Bake until a toothpick inserted in the center comes out clean, 1 hour to 1 hour 5minutes. 
Remove from the oven, place on a rack, and cool in the pan for 15 to 20 minutes. After that time, run a table knife around the edge of the pan, and tip the bread out. 
Return the bread to the rack to cool completely before glazing.', 
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL),
('Banana Bread', 
'In a large bowl, combine the butter, sugar, vanilla, cinnamon, nutmeg, baking soda, baking powder, and salt, beating till smooth.', 
'Add the mashed bananas, jam, honey, and eggs, again beating until smooth.', 
'Add the flour, stirring just until smooth.',
'Spoon the batter into the prepared loaf pan, smoothing the top. Let it rest at room temperature for 10 minutes. Preheat the oven to 325°F.' 
'Bake the bread for 1 hour. Remove the bread from the oven; a long toothpick or cake tester inserted into the center should come out clean, with at most a few wet crumbs clinging to it.',  
'Allow the bread to cool for 10 minutes in the pan. Remove it from the pan, and cool it completely on a rack.', 
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL),
('Chocolate Chip Cookies',
' In a large bowl, beat together the butter, sugars, honey, vanilla, espresso powder, and salt until smooth. 
Beat in the vinegar, egg, baking soda, and baking powder. 
Stir in the flour, then the chocolate chips, mixing just until combined. 
Drop the dough, by tablespoonfuls, onto the prepared baking sheets. 
A tablespoon cookie scoop works well here.',
'Bake the cookies for 10 to 11 minutes (9 to 10 minutes for smaller cookies), until their bottoms are barely starting to brown (gently lift one up to peek). 
Remove them from the oven, and allow them to cool for 10 minutes before transferring them to a rack to cool completely.',
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL),
('Blueberry Muffins', 'Preheat the oven to 400°F.', 
'Lightly grease the cups of a standard muffin pan; or line with paper baking cups, and grease the paper cups.', 
'Whisk together all of the dry ingredients, including the blueberries.', 
'In a separate bowl, whisk together the vanilla, vegetable oil, and buttermilk or whey.', 
'Pour the liquid ingredients into the dry ingredients, stirring just to combine.', 
'Spoon the batter into the prepared muffin cups, filling them nearly full.', 
'Sprinkle the tops of the muffins with coarse sparkling sugar or cinnamon sugar, if desired.', 
'Bake the muffins for 18 to 20 minutes, until a toothpick inserted into the middle of one of the center muffins comes out clean.',
'Remove the muffins from the oven, and after 5 minutes transfer them to a rack to cool.', 
NULL,
NULL,
NULL,
NULL,
NULL,
NULL,
NULL) 
;

