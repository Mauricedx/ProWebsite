<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels Hogeschool</title>
        <link rel="stylesheet" type="text/css" href="Styles/style.css"/>
    </head>
    <body>
        <header>
            <h1>Vleugels Hogeschool</h1>
            <p>- Muziek en vliegtuigbouw -</p>
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
                <li><a href="html/Contact.html">Contact</a></li>
                <li><a href="#">Inloggen</a></li>
                <li><a href="#">Foto's</a></li>
            </ul>
        </div>
        <div id="planeimg">    
        </div>
        <div id ="content">
        <?php
        /*
         * Filename   :   index.php
         * Assignment :   Professional Website
         * Created    :   11-10-2018
         * Description:   Professional Website with php
         * Programmers :   Maurice Hoekstra, Tim Groenewold, Kevin Trip, Onno Busscher,
         *                 Felice Zirkzee, Robin Haan, Jurrian Tanke
         */
        
        include 'php/RSSFeed.php';
        
        
        
        ?>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
