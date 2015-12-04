<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include "top.php";

print '<h2>Banana Bread</h2>';

print '<table>';

$query = "select tblRecipes.pmkRecipeName, fldYield, fldBakeTime, fldIngredient1, fldIngredient2, fldIngredient3, fldIngredient4, fldIngredient5, fldIngredient6, fldIngredient7, fldIngredient8, fldIngredient9, fldIngredient10, fldIngredient11, fldIngredient12, fldIngredient13, fldStep1, fldStep2, fldStep3, fldStep4, fldStep5, fldStep6 
from tblRecipes, tblIngredients, tblDirections
where tblRecipes.pmkRecipeName = tblIngredients.pmkRecipeName 
and tblIngredients.pmkRecipeName = tblDirections.pmkRecipeName
and tblRecipes.pmkRecipeName = 'Banana Bread'";
    
    $columns = 22;
    
    //$info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 2, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 2, 0, false, false);

    

    // all done
    print '</table>';

    include 'footer.php';
    ?>