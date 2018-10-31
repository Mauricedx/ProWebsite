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
            <a href="Contact.php"><img id="langflag" src="../Images/nlflag.png" alt="NL"></a>
        </header>
        <div id="navbar">
            <ul>
                <li><a href="../index_en.html">Homepage</a></li>
                <li><a href="https://student.sl-cloud.nl/">Apply</a></li>
                <li><a href="Contact_en.php">Contact</a></li>
                <li><a href="Upload_en.php">Pictures</a></li>
            </ul>
        </div>
        <div id ="content">
            
            <div id="BuiRaRRS">
                <h3>Actual Weather of the Netherlands</h3>
                <?php
                /*
                 * Filename   :   Contact.php
                 * Assignment :   Professional Website Contact page + RSS Feed
                 * Created    :   11-10-2018
                 * Description:   Professional Website Contact page's RSS Feeds
                 * Programmers :   Maurice Hoekstra
                 */
                include 'RSSFeed.php';
                echo rssLoader('https://api.buienradar.nl/data/xml/1.0/rssbuienradar', 1, 2)
                ?>
            </div>
            <div id="Contactform">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <h2>Contactform</h2>
                    <br/>
                    <p>* required fields</p>
                    <p>Name*</p>
                    <input type="text" name="appname" required/>
                    <p>Sex</p>
                    <input type="radio" name="sex" value="male" checked>Male
                    <input type="radio" name="sex" value="female"> Female
                    <input type="radio" name="sex" value="other"> Other
                    <p>E-mailadres*</p>
                    <input type="text" name="email" required/>
                    <p>Profession</p>
                    <input type="radio" name="occupation" value="student" checked> Student
                    <input type="radio" name="occupation" value="interested"> Interested Party
                    <input type="radio" name="occupation" value="teacher"> Teacher
                    <input type="radio" name="occupation" value="other"> Other
                    <p>Student number</p>
                    <input type="text" name="studentnummer">
                    <p>Telephone number</p>
                    <input type="text" name="telnr"/>
                    <p>Place</p>
                    <input type="text" name="place"/>
                    <p>Zipcode</p>
                    <input type="text" name="zipcode"/>
                    <p>House number</p>
                    <input type="text" name="housenumber"/>
                    <p>Remark</p>
                    <textarea></textarea><br/>
                    <input type="submit" name="submit" value="Send"/>
                </form>
            </div>
            

        </div>
    </body>
</html>


