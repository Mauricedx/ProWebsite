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
                <li><a href="../index.html">Thuispagina</a></li> 
                <li><a href="https://student.sl-cloud.nl/">Inschrijven</a></li>
                <li><a href="Upload.php">Foto's</a></li> 
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
        <div id ="content">
            
            <div id="BuiRaRRS">
                <h3>Actueel Weer</h3>
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
                    <h2>Contactformulier</h2>
                    <br/>
                    <p>* verplichte velden</p>
                    <p>Naam*</p>
                    <input type="text" name="appname" required/>
                    <p>E-mailadres*</p>
                    <input type="text" name="email" required/>  
                    <p>Studentnummer</p>
                    <input type="text" name="studentnummer">
                    <p>Professie</p>
                    <input type="radio" name="occupation" value="student" checked> Student
                    <input type="radio" name="occupation" value="interested"> Geïntresseerde
                    <input type="radio" name="occupation" value="teacher"> Docent
                    <input type="radio" name="occupation" value="other"> Anders
                    <p>Opmerking</p>
                    <textarea></textarea><br/>
                    <input type="submit" name="submit" value="Opsturen"/>
                </form>
            </div>
            

        </div>
    </body>
</html>


