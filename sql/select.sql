select pmkRecipeName, fldYield, fldBakeTime, fldIngredient, fldStep1, fldStep2, fldStep3 
from tblRecipes, tblIngredients, tblDirections
where tblRecipes.pmkRecipeName = tblIngredients.pmkRecipeName 
and tblRecipes.pmkRecipeName = tblDirections.pmkRecipeName;  
