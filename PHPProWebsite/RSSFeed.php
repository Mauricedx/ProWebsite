<?php
/*
 * Filename   :   RSSFeed.php
 * Assignment :   Professional Website RSS Feed
 * Created    :   11-10-2018
 * Description:   Professional Website RSS Feed functions
 * Programmers :   Maurice Hoekstra
 */

    function rssLoader($url, $startDataNum, $endDataNum){
        //Loads RSS Feed through simplexml, returns the feed.
        $html = "";
        $xml = simplexml_load_file($url);
        for($i = $startDataNum; $i < $endDataNum; $i++){
            //Arrow is Object method to access properties of an object
            $title = $xml->channel->item[$i]->title;
            $link = $xml->channel->item[$i]->link;
            $description = $xml->channel->item[$i]->description;
            $pubDate = $xml->channel->item[$i]->pubDate;

                $html .= "<a href='$link'><h3>$title</h3></a>";
            $html .= "$description";
            $html .= "<br />$pubDate<hr />";
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

