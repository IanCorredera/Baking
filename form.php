<?php
/* the purpose of this page is to display a form to allow a poet and allow us
 * to add a new poet or update an existing poet 
 * 
 * Written By: Robert Erickson robert.erickson@uvm.edu
 
 */

include "top.php";
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1 Initialize variables
$update = false;

// SECTION: 1a.
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1b Security
//
// define security variable to be used in SECTION 2a.
$yourURL = $domain . $phpSelf;

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1c form variables
//
// Initialize variables one for each form element
// in the order they appear on the form

if (isset($_GET["id"])) {
    $pmkEmail = (int) htmlentities($_GET["id"], ENT_QUOTES, "UTF-8");

    $query = 'SELECT fldFirstName, fldLastName, fldBirthDate ';
    $query .= 'FROM tblPoet WHERE pmkPoetId = ?';

    $results = $thisDatabase->select($query, array($pmkEmail), 1, 0, 0, 0, false, false);

    $firstName = $results[0]["fldFirstName"];
    $ingred1 = $results[0]["fldIngred1"];
    
} else {
    $pmkEmail = -1;
    $firstName = "";
    $ingred1 = "";
    
}

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1d form error flags
//
// Initialize Error Flags one for each form element we validate
// in the order they appear in section 1c.
$pmkEmailERROR = false;
$firstNameERROR = false;
$ingred1ERROR = false;
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1e misc variables
//
// create array to hold error messages filled (if any) in 2d displayed in 3c.
$errorMsg = array();
$data = array();
$dataEntered = false;

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2 Process for when the form is submitted
//
if (isset($_POST["btnSubmit"])) {
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2a Security
//
    /*    if (!securityCheck(true)) {
      $msg = "<p>Sorry you cannot access this page. ";
      $msg.= "Security breach detected and reported</p>";
      die($msg);
      }
     */
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2b Sanitize (clean) data
// remove any potential JavaScript or html code from users input on the
// form. Note it is best to follow the same order as declared in section 1c.
    $pmkEmailId = (int) htmlentities($_POST["txtEmail"], ENT_QUOTES, "UTF-8");
    if ($pmkEmailId > 0) {
        $update = true;
    }
    // I am not putting the ID in the $data array at this time

    $firstName = htmlentities($_POST["txtFirstName"], ENT_QUOTES, "UTF-8");
    $data[] = $firstName;

    $ingred1 = htmlentities($_POST["txtIngred1"], ENT_QUOTES, "UTF-8");
    $data[] = $ingred1;

    

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2c Validation
//

    if ($firstName == "") {
        $errorMsg[] = "Please enter your first name";
        $firstNameERROR = true;
    }// elseif (!verifyAlphaNum($firstName)) {
     //   $errorMsg[] = "Your first name appears to have extra character.";
    //    $firstNameERROR = true;
    //}

    if ($pmkEmail == "") {
        $errorMsg[] = "Please enter your email";
        $pmkEmailERROR = true;
    }// elseif (!verifyAlphaNum($pmkEmail)) {
      //  $errorMsg[] = "Your last name appears to have extra character.";
      //  $pmkEmailERROR = true;
    //}
    
    if ($ingred1 == "") {
        $errorMsg[] = "Please enter an ingredient";
        $ingred1ERROR = true;
    } 


   
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2d Process Form - Passed Validation
//
// Process for when the form passes validation (the errorMsg array is empty)
//
    if (!$errorMsg) {
        if ($debug) {
            print "<p>Form is valid</p>";
        }

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2e Save Data
//

        $dataEntered = false;
        try {
            $thisDatabase->db->beginTransaction();

            if ($update) {
                $query = 'UPDATE tblUserIngredients SET ';
            } else {
                $query = 'INSERT INTO tblUserIngredients SET ';
            }

            $query .= 'fldFirstName = ?, ';
            $query .= 'pmkEmail = ?, ';
            $query .= 'fldIngred1 = ? ';

            if ($update) {
                $query .= 'WHERE pmkEmail = ?';
                $data[] = $pmkPoetId;

                if ($_SERVER["REMOTE_USER"] == 'icorrede') {
                    $results = $thisDatabase->update($query, $data, 1, 0, 0, 0, false, false);
                }
            } else {
                if ($_SERVER["REMOTE_USER"] == 'icorrede'){
                    $results = $thisDatabase->insert($query, $data);
                    $primaryKey = $thisDatabase->lastInsert();
                    if ($debug) {
                        print "<p>pmk= " . $primaryKey;
                    }
                }
            }

            // all sql statements are done so lets commit to our changes
            //if($_SERVER["REMOTE_USER"]=='rerickso'){
            $dataEntered = $thisDatabase->db->commit();
            // }else{
            //     $thisDatabase->db->rollback();
            // }
            if ($debug)
                print "<p>transaction complete ";
        } catch (PDOExecption $e) {
            $thisDatabase->db->rollback();
            if ($debug)
                print "Error!: " . $e->getMessage() . "</br>";
            $errorMsg[] = "There was a problem with accpeting your data please contact us directly.";
        }
    } // end form is valid
} // ends if form was submitted.
//#############################################################################
//
// SECTION 3 Display Form
//
?>
<article id="main">
    <?php
//####################################
//
// SECTION 3a.
//
//
//
//
// If its the first time coming to the form or there are errors we are going
// to display the form.
    if ($dataEntered) { // closing of if marked with: end body submit
        print "<h1>Record Saved</h1> ";
    } else {
//####################################
//
// SECTION 3b Error Messages
//
// display any error messages before we print out the form
        if ($errorMsg) {
            print '<div id="errors">';
            print '<h1>Your form has the following mistakes</h1>';

            print "<ol>\n";
            foreach ($errorMsg as $err) {
                print "<li>" . $err . "</li>\n";
            }
            print "</ol>\n";
            print '</div>';
        }
        //####################################
        //
        // SECTION 3c html Form
        //
        /* Display the HTML form. note that the action is to this same page. $phpSelf
          is defined in top.php
          NOTE the line:
          value="<?php print $email; ?>
          this makes the form sticky by displaying either the initial default value (line 35)
          or the value they typed in (line 84)
          NOTE this line:
          <?php if($emailERROR) print 'class="mistake"'; ?>
          this prints out a css class so that we can highlight the background etc. to
          make it stand out that a mistake happened here.
         */
        ?>

        <form action="<?php print $phpSelf; ?>"
              method="post"
              id="frmIngredients">

            <fieldset class="wrapper">
                <legend>Enter Ingredients</legend>
                <p>List the ingredients you have on hand to find recipes that you can make</p>

                <fieldset class="wrapperTwo">
                    <legend>Please complete the following form</legend>

                    <fieldset class="contact">
                        <legend>Contact Information</legend>
                        <label for="txtFirstName" class="required">First Name
                            <input type="text" id="txtFirstName" name="txtFirstName"
                                   value="<?php print $firstName; ?>"
                                   tabindex="100" maxlength="45" placeholder="Enter your first name"
                                   <?php if ($firstNameERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        
                        <label for="txtEmail" class="required">Email
                            <input type="text" id="txtEmail" name="txtEmail"
                                   
                                   tabindex="120" maxlength="45" placeholder="Enter a valid email address"
                                   <?php if ($emailERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()" 
                                   >
                        </label>
                    </fieldset> <!-- ends contact -->
                    
                    <fieldset class="ingredients">
                        <legend>Ingredients</legend>
                        
                        
                        <label for="txtIngred1" class="required">
                            <input type="text" id="txtIngred1" name="txtIngred1"
                                   
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred1ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        
                        
                        <label for="txtIngred2">
                            <input type="text" id="txtIngred2" name="txtIngred2"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred2ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        
                        <label for="txtIngred3">
                            <input type="text" id="txtIngred3" name="txtIngred3"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred3ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred4">
                            <input type="text" id="txtIngred4" name="txtIngred4"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred4ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred5">
                            <input type="text" id="txtIngred3" name="txtIngred5"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred5ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred6">
                            <input type="text" id="txtIngred6" name="txtIngred6"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred6ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred7">
                            <input type="text" id="txtIngred7" name="txtIngred7"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred7ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred8">
                            <input type="text" id="txtIngred8" name="txtIngred8"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred8ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred8">
                            <input type="text" id="txtIngred8" name="txtIngred8"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred8ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred9">
                            <input type="text" id="txtIngred9" name="txtIngred9"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred9ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred10">
                            <input type="text" id="txtIngred10" name="txtIngred10"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred10ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred11">
                            <input type="text" id="txtIngred11" name="txtIngred11"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred11ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred12">
                            <input type="text" id="txtIngred12" name="txtIngred12"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred12ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred13">
                            <input type="text" id="txtIngred13" name="txtIngred13"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred13ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred14">
                            <input type="text" id="txtIngred14" name="txtIngred14"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred14ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                        <br />
                        <label for="txtIngred15">
                            <input type="text" id="txtIngred15" name="txtIngred15"
                                   value=""
                                   tabindex="100" maxlength="45" placeholder="Enter ingredient name"
                                   <?php if ($ingred15ERROR) print 'class="mistake"'; ?>
                                   onfocus="this.select()"
                                   autofocus>
                        </label>
                    </fieldset> <!-- ends ingredient -->
                    
                </fieldset> <!-- ends wrapper Two -->
                
                <fieldset class="buttons">
                    <legend></legend>
                    <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
                </fieldset> <!-- ends buttons -->
                
            </fieldset> <!-- Ends Wrapper -->
        </form>

    <?php
    } // end body submit
    ?>

</article>

<?php include "footer.php"; ?>

</body>
</html>