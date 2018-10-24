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
        </header>>
        <div id="navbaren">
            <ul>
                <li><a href="html/Informatie.html">About</a></li>
                <li><div class="dropdownnav"><p>Courses</p>
                        <div  class="navddcontent">
                            <a href="html/KlassiekeMuziekInstrumenten_en.html">Classic Instrument Construction</a><br/>
                            <a href="html/Vliegtuigbouw_en.html">Airplane Construction</a><br/>
                            <a href="html/Helikopterbouw_en.html">Helicopter Construction</a><br/>
                            <a href="html/ElektronischeMuziek_en.html">Electronic Music</a><br/>
                        </div>
                    </div>
                </li>
                <li><a href="https://student.sl-cloud.nl/">Apply</a></li>
                <li><p>Welcome to Vleugels University!</p></li>
                <li><a href="html/Contact.html">Contact</a></li>
                <li><div class="dropdownnav"><p>Log in</p>
                        <div  class="navddcontent">
                            <form action="index.html" method="POST">
                                <input type="text" name="user" placeholder="Username"><br>
                                <input type="password" name="password" placeholder="Password"><br>
                                <input type="submit" name="submit" value="Log in">
                            </form>
                        </div>
                    </div>
                </li>
                <li><a href="#">Pictures</a></li>
            </ul>
        </div>
        <div id ="content">
            <div id="langflagpush"> 
                <a href="Contact.php"><img src="../Images/nlflag.png" alt="ENG" height="80" width="160"></a>
            </div>
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


