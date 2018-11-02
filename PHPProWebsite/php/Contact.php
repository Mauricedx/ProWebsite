<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels Hogeschool</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <div id="headerlogo">
                <a href="../index.html"><img src="../Images/VleugelsHSLogo.png" alt="VHS Logo"></a>
            </div>
            <a href="../index.html">
            <h1>Vleugels Hogeschool</h1>
            <p>- Muziek en vliegtuigbouw -</p>
            </a>
            <a href="Contact_en.php"><img id="langflag" src="../Images/engflag.png" alt="ENG"></a>
        </header>
        <div id="navbar">
            <ul>
                <li><a href="../index_en.html"><b>Homepage</b></a></li>
                <li><a href="https://student.sl-cloud.nl/"><b>Apply</b></a></li>
                <li><a href="Upload_en.php"><b>Pictures</b></a></li> 
                <li><a href="Contact_en.php"><b>Contact</b></a></li>
            </ul>
        </div>
        <div id ="contentCont">
            
            <div id="BuiRaRRS">
                <h3>Actueel Weer</h3>
                <?php
                /*
                 * Filename   :   Contact.php
                 * Assignment :   Professional Website Contact page + RSS Feed
                 * Created    :   11-10-2018
                 * Description:   Professional Website Contact page's RSS Feeds
                 * Programmers :   Maurice Hoekstra & Kevin Trip
                 */
                include 'RSSFeed.php';
                echo rssLoader('https://api.buienradar.nl/data/xml/1.0/rssbuienradar', 1, 2)
                ?>
            </div>
            
            <div id="Contactform">
                
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <h2>Contactformulier</h2>
                    <br/>
                    <p>* verplichte velden</p>
                    <h3>Naam*</h3>
                    <input type="text" name="appname" required/>
                    <h3>E-mailadres*</h3>
                    <input type="text" name="email" required/>  
                    <h3>Studentnummer</h3>
                    <input type="text" name="studentnummer">
                    <h3>Professie</h3>
                    <input type="radio" name="occupation" value="student" checked> Student
                    <input type="radio" name="occupation" value="interested"> Geïntresseerde
                    <input type="radio" name="occupation" value="teacher"> Docent
                    <input type="radio" name="occupation" value="other"> Anders
                    <h3>Opmerking</h3>
                    <textarea></textarea><br/>
                    <input type="submit" name="submit" value="Opsturen"/>
                </form>
            </div>
            <div id="RouteRSS">
                <h3>Routebeschrijving</h3>
                <form id="Form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET"></form>
                <form id="Form2" action="<?php echo htmlentities($_SERVER['PHP_SELF']) .'?'.http_build_query($_GET);; ?>" method="POST"></form>
                <p>Wilt u naar de school of van de school reizen?<p>
                van: <input type="radio" name="direction" value="van" checked="checked" form="Form1"><br>
                naar: <input type="radio" name="direction" value="naar" form="Form1"><br>
                <input type="submit" name="button" form="Form1" value="Volgende"><br>
                <?php
                include 'RSSFeedRoute.php'
                ?>
            </div>
        </div>
    </body>
</html>


