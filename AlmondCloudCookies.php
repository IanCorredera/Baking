<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include "top.php";



print '<ul style="list-style-type:none">';

$query = "select tblRecipes.pmkRecipeName, fldYield, fldBakeTime, fldIngredient1, fldIngredient2, fldIngredient3, fldIngredient4, fldIngredient5, fldIngredient6, fldIngredient7, fldIngredient8, fldStep1, fldStep2, fldStep3, fldStep4, fldStep5, fldStep6, fldStep7
from tblRecipes, tblIngredients, tblDirections
where tblRecipes.pmkRecipeName = tblIngredients.pmkRecipeName 
and tblIngredients.pmkRecipeName = tblDirections.pmkRecipeName
and tblRecipes.pmkRecipeName = 'Almond Cloud Cookies'";
    
    $columns = 17;
    
    //$info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 2, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 2, 0, false, false);

    
    foreach ($info2 as $rec) {
        
        //print records
        for ($i = 0; $i < 1; $i++) {
            print '<h2>' . $rec[$i] . '</h2>';
        }
        print '<p>Yield:</p>';
        for ($i = 1; $i < 2; $i++) {
            print '<li>' . $rec[$i] . '</li>';
        }
        print '<p>Baking time:</p>';
        for ($i = 2; $i < 3; $i++) {
            print '<li>' . $rec[$i] . '</li>';
        }
        print '<br />';
        print '<p>Ingredients:</p>';
        for ($i = 3; $i < 10; $i++) {
            print '<li>' . $rec[$i] . '</li>';
        }
        print '<br />';
        print '<p>Directions:</p>';
        for ($i = 10; $i < 18; $i++) {
            print '<li>' . $rec[$i] . '</li>';
        }
    }

    // all done
    print '</ul>';

    include 'footer.php';
    ?>