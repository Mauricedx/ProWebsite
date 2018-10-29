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
                <li><a href="../html/Informatie.html">Over</a></li>
                <li><div class="dropdownnav"><p>Opleidingen</p>
                        <div  class="navddcontent">
                            <a href="../html/KlassiekeMuziekInstrumenten.html">Klassieke Intrumentenbouw</a><br/>
                            <a href="../html/Vliegtuigbouw.html">Vliegtuigbouw</a><br/>
                            <a href="../html/Helikopterbouw.html">Helikopterbouw</a><br/>
                            <a href="../html/ElektronischeMuziek.html">Electronische Muziek</a><br/>
                        </div>
                    </div>
                </li>
                <li><a href="https://student.sl-cloud.nl/">Inschriven</a></li>
                <li><a href="../index.html">Welkom bij Vleugels Hogeschool!</a></li>
                <li><a href="Contact.php">Contact</a></li>

                <li><a href="Upload.php">Foto's</a></li>
            </ul>
        </div>
        <div id ="content">
            <div id="uploadform">
            <div class="dropdownnav"><p>Check photos</p>
                <div  class="navddcontent">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                        <input type="password" name="password" placeholder="Wachtwoord"><br>
                        <input type="submit" name="inlogsubmit" value="Inloggen">
                    </form>
                </div>
                <?php
                /*
                * Filename   :   Upload.php
                * Assignment :   Professional Website Photo Uploader
                * Created    :   19-10-2018
                * Description:   Professional Website Uploading function and display
                * Programmer :  Maurice Hoekstra
                */
                if (isset($_POST["inlogsubmit"])){
                    if ($_POST["password"] === "wachtwoord"){
                        header('Location: photocheck.php');
                    }
                    else{
                        echo "<p>Onjuist wachtwoord</p>";
                    }
                }
                
                ?>
            </div>
                <h2>Upload jouw eigen foto!</h2>
                
                <form enctype="multipart/form-data" action="photocheck.php" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                    <input name="userfile" type="file" />
                    <input type="submit" name="submit" value="Upload"/>
                </form>
                <div class="dropdownnav"><p>Check fotos</p>
                </div>
                <a href="photocheck.php">Photo check</a> 
                <?php
                
                if (isset($_POST["submit"])) {
                    $uploadfile = '../upphoto/' . basename($_FILES['userfile']['name']);
                
                
                    echo '<p>';
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                        echo "Bestand is geüpload en wacht op validering";
                    } else {
                        echo "Bestand is niet geüpload, is het een foto?";
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
            <div id="photogallery">
                <?php
                $photoDir = '../upphotoapproved/';
                $photoArray = scandir($photoDir);
                $varPhotoDirCount = count($photoArray); 
                for($count = 3; $count <= $varPhotoDirCount -1; $count++){
                    echo '<img class="upimg" src="../upphoto/'.  $photoArray[$count] . '" alt="UploadedPhoto" height="200" width="200"/>'; 
                } 
                ?>
            </div>
        </div>
    </body>
</html>
