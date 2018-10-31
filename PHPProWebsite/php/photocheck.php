<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels Hogeschool</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <a href="../index.html">
            <h1>Vleugels Hogeschool</h1>
            <p>- Muziek en vliegtuigbouw -</p>
            </a>
        </header>
        <div id="navbar">
            <a href="Upload.php">Terug</a>
        </div>
        <div id ="content">
            <div id="photogallery">
                <?php
                /*
                * Filename   :   photocheck.php
                * Assignment :   Professional Website Photo Checker
                * Created    :   29-10-2018
                * Description:   Professional Website Photo checking and approving/deleting
                * Programmer :   Maurice Hoekstra
                * 
                * For each unapproved photo, create a form to approve and move the image to the approved image folder.
                * If it is not approved, delete it.
                */
                $photoDir = '../upphoto/';
                $photoArray = scandir($photoDir);
                $varPhotoDirCount = count($photoArray); 
                echo '<form action="' . htmlentities($_SERVER['PHP_SELF']). '" method=POST>';
                echo '<div id="photocheckform"><input type="submit" name="approve" value="Goedkeuren">';
                echo '<input type="submit" name="delete" value="Delete"></div>';
                for($count = 3; $count <= $varPhotoDirCount -1; $count++){
                    //Echo to be approved photos in a form with a checkbox, depending on which submit button, the checked photos will be approved or deleted
                    echo '<div class="photostobejudged">';
                    echo '<img src="../upphoto/'.  $photoArray[$count] . '" alt="UploadedPhoto" height="200" width="200"/></br>'; 
                    echo '<input type="checkbox" name="photoselect[]" value="../upphoto/' . $photoArray[$count] . '"/>';
                    echo '</div>';
                    
                }
                echo '</form>';
                //If submit button approve is pressed, and it's checkbox array is not empty,move all selected photos to approved photo folder
                if (isset($_POST["approve"])) {
                    if (isset($_POST['photoselect'])){
                        foreach($_POST['photoselect'] as $oldDir){
                            $newDir = '../upphotoapproved' . substr($oldDir, 10);
                            rename($oldDir, $newDir);
                            
                        }                      
                    }
                }
                //If submit button delete is pressed, and the checkbox array is not empty, delete all selected photos
                elseif (isset($_POST["delete"])) {
                    if (isset($_POST['photoselect'])){
                       foreach($_POST['photoselect'] as $photo){
                            unlink($photo);
                          
                        } 
                        
                    }
                }
                else{
                    
                }
                ?>
            </div>
        </div>
    </body>
</html>

