<?php
/*
 * Filename   :   RSSFeed.php
 * Assignment :   Professional Website RSS Feed
 * Created    :   23-10-2018
 * Description:   Professional Website RSS Feed functions
 * Programmers :   Maurice Hoekstra
 */

    function rssLoader($url, $startDataNum, $endDataNum){
        //Loads RSS Feed through simplexml, returns the feed.
        $html = "";
        $xml = simplexml_load_file($url);
        for($i = $startDataNum; $i < $endDataNum; $i++){
            //Arrow is Object method to access properties of an object
            $description = $xml->channel->item[$i]->description;
            $html .= "$description";
        }
        return $html;
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RSS FEED</title>
    </head>
    <body> 
        
    </body>
</html>

