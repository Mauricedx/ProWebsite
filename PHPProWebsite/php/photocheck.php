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
                for($count = 3; $count <= $varPhotoDirCount -1; $count++){
                    echo '<div class="photocheckform">';
                    echo '<form action="' . htmlentities($_SERVER['PHP_SELF']). '" method=POST>';
                    echo '<img src="../upphoto/'.  $photoArray[$count] . '" alt="UploadedPhoto" height="200" width="200"/></br>'; 
                    echo '<input type= submit name = approved value = "Goedkeuren">';
                    echo '<input type= submit name = delete value = "Delete">';
                    echo '</form>';
                    echo '</div>';
                }
                
                ?>
            </div>
        </div>
    </body>
</html>

