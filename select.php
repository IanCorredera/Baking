<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include "top.php";

print '<table>';

$query = "select pmkRecipeName, fldYield, fldBakeTime, fldIngredient, fldStep1, fldStep2, fldStep3 
from tblRecipes, tblIngredients, tblDirections
where tblRecipes.pmkRecipeName = tblIngredients.pmkRecipeName 
and tblRecipes.pmkRecipeName = tblDirections.pmkRecipeName";
    $columns = 7;
    
    $info2 = $thisDatabaseReader->testquery($query, "", 1, 2, 0, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 0, 0, false, false);

    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';

    ?>