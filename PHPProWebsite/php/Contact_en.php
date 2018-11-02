<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vleugels University</title>
        <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    </head>
    <body>
        <header>
            <div id="headerlogo">
                <a href="../index_en.html"><img src="../Images/VleugelsHSLogo.png" alt="VHS Logo"></a>
            </div>
            <h1>Vleugels University</h1>
            <p>- Music and aerospace construction -</p>
            <a href="Contact.php"><img id="langflag" src="../Images/nlflag.png" alt="NL"></a>
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
                <h3>Actueel Weather</h3>
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
                    <h2>Contact form</h2>
                    <br/>
                    <p>* required fields</p>
                    <h3>Name*</h3>
                    <input type="text" name="appname" required/>
                    <h3>E-mail adress*</h3>
                    <input type="text" name="email" required/>  
                    <h3>Student number</h3>
                    <input type="text" name="studentnummer">
                    <h3>Profession</h3>
                    <input type="radio" name="occupation" value="student" checked> Student
                    <input type="radio" name="occupation" value="interested"> Interested party
                    <input type="radio" name="occupation" value="teacher"> Teacher
                    <input type="radio" name="occupation" value="other"> Other
                    <h3>Remark</h3>
                    <textarea></textarea><br/>
                    <input type="submit" name="submit" value="Opsturen"/>
                </form>
            </div>
            <div id="RouteRSS">
                <h3>Route planner</h3>
                <form id="Form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET"></form>
                <form id="Form2" action="<?php echo htmlentities($_SERVER['PHP_SELF']) .'?'.http_build_query($_GET);; ?>" method="POST"></form>
                <p>Do you wish to travel to or from the university?<p>
                from: <input type="radio" name="direction" value="van" checked="checked" form="Form1"><br>
                to: <input type="radio" name="direction" value="naar" form="Form1"><br>
                <input type="submit" name="button" form="Form1" value="Next"><br>
                <?php
                include 'RSSFeedRoute_en.php'
                ?>
            </div>
        </div>
    </body>
</html>



