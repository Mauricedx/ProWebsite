<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels Hogeschool</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <a href="index.html">
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
                <li><a href="php/Contact.php">Contact</a></li>
                <li><a href="#">Inloggen</a></li>
                <li><a href="php/Upload.php">Foto's</a></li>
            </ul>
        </div>
        <div id ="content">
            <div id="BuiRaRRS">
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
        </div>
    </body>
</html>


