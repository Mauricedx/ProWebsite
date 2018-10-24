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
                <li><a href="https://student.sl-cloud.nl/">Inschrijven</a></li>
                <li><a href="../index.html">Welkom bij Vleugels Hogeschool!</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><div class="dropdownnav"><p>Inloggen</p>
                        <div  class="navddcontent">
                            <form action="Contact.php" method="POST">
                                <input type="text" name="user" placeholder="Gebruikersnaam"><br>
                                <input type="password" name="password" placeholder="Wachtwoord"><br>
                                <input type="submit" name="submit" value="Inloggen">
                            </form>
                        </div>
                    </div>
                </li> 
                <li><a href="Upload.php">Foto's</a></li>
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
            <div id="langflagpushcontact"> 
                <a href="Contact_en.php"><img src="../Images/engflag.png" alt="ENG" height="80" width="160"></a>
            </div>
            <div id="Contactform">
                
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <h2>Contactformulier</h2>
                    <br/>
                    <p>* verplichte velden</p>
                    <p>Naam*</p>
                    <input type="text" name="appname" required/>
                    <p>Geslacht</p>
                    <input type="radio" name="sex" value="male" checked>Man
                    <input type="radio" name="sex" value="female"> Vrouw
                    <input type="radio" name="sex" value="other"> Anders
                    <p>E-mailadres*</p>
                    <input type="text" name="email" required/>
                    <p>Professie</p>
                    <input type="radio" name="occupation" value="student" checked> Student
                    <input type="radio" name="occupation" value="interested"> Geïntresseerde
                    <input type="radio" name="occupation" value="teacher"> Docent
                    <input type="radio" name="occupation" value="other"> Anders
                    <p>Studentnummer</p>
                    <input type="text" name="studentnummer">
                    <p>Telefoonnummer</p>
                    <input type="text" name="telnr"/>
                    <p>Plaats</p>
                    <input type="text" name="place"/>
                    <p>Postcode</p>
                    <input type="text" name="zipcode"/>
                    <p>Huisnummer</p>
                    <input type="text" name="housenumber"/>
                    <p>Opmerking</p>
                    <textarea></textarea><br/>
                    <input type="submit" name="submit" value="Opsturen"/>
                </form>
            </div>
            

        </div>
    </body>
</html>


