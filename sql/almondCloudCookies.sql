select tblRecipes.pmkRecipeName, fldYield, fldBakeTime, fldIngredient1, fldIngredient2, fldIngredient3, fldIngredient4, fldIngredient5, fldIngredient6, fldIngredient7, fldIngredient8, fldStep1, fldStep2, fldStep3, fldStep4, fldStep5, fldStep6, fldStep7
from tblRecipes, tblIngredients, tblDirections
where tblRecipes.pmkRecipeName = tblIngredients.pmkRecipeName 
and tblIngredients.pmkRecipeName = tblDirections.pmkRecipeName
and tblRecipes.pmkRecipeName = 'Almond Cloud Cookies'; 

