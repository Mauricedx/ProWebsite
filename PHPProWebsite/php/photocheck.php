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
            <div id="uploadform">
                <form enctype="multipart/form-data" action="photocheck.php" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                    <input name="userfile" type="file" />
                    <input type="submit" name="submit" value="Upload"/>
                </form>
                <?php
                /*
                * Filename   :   Upload.php
                * Assignment :   Professional Website Photo Uploader
                * Created    :   19-10-2018
                * Description:   Professional Website Uploading function and display
                * Programmers :  Maurice Hoekstra
                */
                
                if (isset($_POST["submit"])) {
                    $uploadfile = '../upphoto/' . basename($_FILES['userfile']['name']);
                
                
                    echo '<p>';
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                        echo "File has been uploaded";
                    } else {
                        echo "File failed to upload, is it valid?";
                    }
                    echo "</p>";
                
                }
                else{
                    echo '<br/>';
                }
                ?>
            </div>
            <div id="langflagpushphoto"> 
                <a href="Upload_en.php"><img src="../Images/engflag.png" alt="ENG" height="80" width="160"></a>
            </div>
            
        </div>
    </body>
</html>

