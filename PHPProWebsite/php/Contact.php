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
                <li><a href="Contact.php">Contact</a></li>
                <li><div class="dropdownnav"><p>Inloggen</p>
                        <div  class="navddcontent">
                            <form action="index.html" method="POST">
                                <input type="text" name="user" placeholder="Gebruikersnaam"><br>
                                <input type="password" name="password" placeholder="Wachtwoord"><br>
                                <input type="submit" name="submit" value="Inloggen">
                            </form>
                        </div>
                    </div>
                </li> 
                <li><a href="php/Upload.php">Foto's</a></li>
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
                    <p>Naam*</p>
                    <input type="text" name="appname" required/><br/>
                    <p>Geslacht</p>
                    <input type="radio" name="sex" value="male" checked>Man
                    <input type="radio" name="sex" value="female">Vrouw
                    <input type="radio" name="sex" value="anders">Anders
                    <p>E-mailadres*</p>
                    <input type="text" name="email" required/><br/>
                    <p>Telefoonnummer</p>
                    <input type="text" name="telnr"/><br/>
                </form>
            </div>    

        </div>
    </body>
</html>


