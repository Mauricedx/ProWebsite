<?php

if (isset($_GET['button'])) {

    function direction() {
        $destination = $_GET['direction'];
        return $destination;
    }

    $destination = direction();
    if ($destination == "van") {
        echo '<input name="saddr" type="text" maxlength="120" placeholder="Put in your final destination here..." form="Form2"><br>';
        echo '<input type="submit" name="submit" value="Submit" form="Form2">';
    } else {
        echo '<input name="daddr" type="text" maxlength="120" placeholder="Put in your start destination here..." form="Form2"><br>';
        echo '<input type="submit" name="submit" value="Submit" form="Form2">';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if (isset($_POST['submit'])) {

        function van() {
            $van = $_POST['saddr'];
            return $van;
        }

        function naar() {
            $naar = $_POST['daddr'];
            return $naar;
        }

        function destination() {
            $destination = $_GET['direction'];
            return $destination;
        }

        $destination = destination();
        if ($destination == "naar") {
            $naar = "Van Schaikweg 94";
            $van = naar();
        } else {
            $van = "Van Schaikweg 94";
            $naar = van();
        }
        echo '<iframe name="mapframe" src="https://www.google.com/maps?z=6&amp;f=d&amp;output=embed&amp;ll=52.101713, 5.178414&saddr=' . $van . '&daddr=' . $naar . '" width="250" height="300"></iframe>';
    } else {
        echo '<iframe name="mapframe" src="https://www.google.com/maps?z=6&amp;f=d&amp;output=embed&amp;ll=52.101713, 5.178414" width="250" height="300"></iframe>';
    }
}   else {
    echo '<iframe name="mapframe" src="https://www.google.com/maps?z=6&amp;f=d&amp;output=embed&amp;ll=52.101713, 5.178414" width="250" height="300"></iframe>'; }
?>