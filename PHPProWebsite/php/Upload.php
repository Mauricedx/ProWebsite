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
            <ul>
                <li><a href="html/Informatie.html">Over</a></li>
                <li><div class="dropdownnav"><p>Opleidingen</p>
                        <div  class="navddcontent">
                            <a href="html/KlassiekeMuziekInstrumenten.html">Klassieke Intrumentenbouw</a><br/>
                            <a href="html/Vliegtuigbouw.html">Vliegtuigbouw</a><br/>
                            <a href="html/Helikopterbouw.html">Helikopterbouw</a><br/>
                            <a href="html/ElektronischeMuziek.html">Electronische Muziek</a><br/>
                        </div>
                    </div>
                </li>
                <li><a href="https://student.sl-cloud.nl/">Inschriven</a></li>
                <li><p>Welkom bij Vleugels Hogeschool!</p></li>
                <li><a href="html/Contact.html">Contact</a></li>
                <li><a href="#">Inloggen</a></li>
                <li><a href="Upload.php">Foto's</a></li>
            </ul>
        </div>
        <div id ="content">
            <div id="uploadform">
                <h2>Upload jouw eigen foto!</h2>
                <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
                    <input name="userfile" type="file" />
                    <input type="submit" value="Upload"/>
                </form>
                <?php
                /*
                * Filename   :   Upload.php
                * Assignment :   Professional Website Photo Uploader
                * Created    :   11-10-2018
                * Description:   Professional Website Uploading function and display
                * Programmers :  Maurice Hoekstra
                */
                
                $uploadfile = '../upphoto/' . basename($_FILES['userfile']['name']);
             
                
                echo '<p>';
                if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                    echo "File has been uploaded";
                } else {
                    echo "File failed to upload, is it valid?";
                }
                echo "</p>";
                ?>
            </div>
        </div>
    </body>
</html>
