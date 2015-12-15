<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Flickr Image - Search</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body style="margin:100px" font-family="arial">
        <img src="search_flickr.jpg" alt="Search Flickr" />

    <?php
        define('FLICKR_URL', 'https://api.flickr.com/services/feeds/photos_public.gne?format=rss');
        

        // Read the XML data into an object
        $xml = simplexml_load_file(FLICKR_URL);
        
        //print "<pre>";
        //print_r($xml);
        //print "</pre>";
        
        $num_photos_found = count($xml->channel->item);
        
        if ($num_photos_found > 0) {
            
            for ($i = 0; $i < $num_photos_found; $i++) {
                // Get the title
                $channel = $xml->channel->item[$i];
                
                echo $channel->description;
                   
            }
        }    
        
    
    ?>      
    </body>
</html>