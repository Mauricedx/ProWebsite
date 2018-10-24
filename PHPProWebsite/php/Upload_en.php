<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels University</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <a href="../index_en.html">
            <h1>Vleugels University</h1>
            <p>- Music and aerospace construction -</p>
            </a>
        </header>
        <div id="navbar">
            <ul>
                <li><a href="../html/Informatie_en.html">About</a></li>
                <li><div class="dropdownnav"><p>Courses</p>
                        <div  class="navddcontent">
                            <a href="../html/KlassiekeMuziekInstrumenten_en.html">Classic Instrument Construction</a><br/>
                            <a href="../html/Vliegtuigbouw_en.html">Airplane Construction</a><br/>
                            <a href="../html/Helikopterbouw_en.html">Helicopter Construction</a><br/>
                            <a href="../html/ElektronischeMuziek_en.html">Electronic Music</a><br/>
                        </div>
                    </div>
                </li>
                <li><a href="https://student.sl-cloud.nl/">Apply</a></li>
                <li><a href="../index_en.html">Welcome to Vleugels University!</a></li>
                <li><a href="Contact_en.php">Contact</a></li>
                <li><div class="dropdownnav"><p>Log in</p>
                        <div  class="navddcontent">
                            <form action="Contact_en.php" method="POST">
                                <input type="text" name="user" placeholder="Username"><br>
                                <input type="password" name="password" placeholder="Password"><br>
                                <input type="submit" name="submit" value="Log in">
                            </form>
                        </div>
                    </div>
                </li>
                <li><a href="Upload_en.php">Pictures</a></li>
            </ul>
        </div>
        <div id ="content">
            
            <div id="uploadform">
                <h2>Upload your own photo!</h2>
                <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
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
                <a href="Upload.php"><img src="../Images/nlflag.png" alt="NL" height="80" width="160"></a>
            </div>
            <div id="photogallery">
                <?php
                $photoDir = '../upphoto/';
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
