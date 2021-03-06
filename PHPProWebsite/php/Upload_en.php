<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Photo's</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <div id="headerlogo">
                <a href="../index_en.html"><img src="../Images/VleugelsHSLogo.png" alt="VHS Logo"></a>
            </div>
            <h1>Vleugels University</h1>
            <p>- Music and aerospace construction -</p>
            <a href="Upload.php"><img id="langflag" src="../Images/nlflag.png" alt="NL"></a>
        </header>
            <div id="navbar">
                <ul>
                <li><a href="../index_en.html"><b>Homepage</b></a></li>
                <li><a href="https://student.sl-cloud.nl/"><b>Apply</b></a></li>
                <li><a href="Upload_en.php"><b>Pictures</b></a></li> 
                <li><a href="Contact_en.php"><b>Contact</b></a></li>
            </ul>
            </div>
        <div id ="content">
            <div id="uploadform">
                
                <div class="dropdownlogin"><p>Check photos</p>
                    <div  class="loginddcontent">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                            <input type="password" name="password" placeholder="Password"><br>
                            <input type="submit" name="inlogsubmit" value="Log in">
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
                    //Check password on the inlog screen, if it matches, send user to photo checking page
                    if (isset($_POST["inlogsubmit"])){
                        if ($_POST["password"] === "wachtwoord"){
                            header('Location: photocheck.php');
                        }
                        else{
                            echo "<p>Incorrect Password</p>";
                        }
                    }
                    ?>
                </div>
                
                <h2>Upload your own photo!</h2>
                <form enctype="multipart/form-data" action="<?php htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                    <input id= "fileinput" name="userfile" type="file" />
                    <label id="fileinputbutton" for="fileinput">Select a file...</label>
                    <input type="submit" name="submit" value="Upload"/>
                </form>
                
                <?php
                //Check whether or not the file is uploaded, and move it to the uploaded file folder for checking
                if (isset($_POST["submit"])) {
                    $uploadfile = '../upphoto/' . basename($_FILES['userfile']['name']);
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                        echo "<p>File has been uploaded and is awaiting validation</p>";
                    } else {
                        echo "<p>Invalid file, is it a photo?</p>";
                    }
                }
                else{
                    echo '<br/>';
                }
                ?>
                
            </div>
            
            <div id="photogallery">
                <?php
                //For each photo in the approved photo folder, create a html img element with a class
                $photoDir = '../upphotoapproved/';
                $photoArray = scandir($photoDir);
                $varPhotoDirCount = count($photoArray); 
                for($count = 3; $count <= $varPhotoDirCount -1; $count++){
                    echo '<img class="upimg" src="../upphotoapproved/'.  $photoArray[$count] . '" alt="UploadedPhoto" height="200" width="200"/>'; 
                } 
                ?>
            </div>
            
        </div>
    </body>
</html>
