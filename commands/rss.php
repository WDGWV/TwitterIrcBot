<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!rss") {
          $rss_file = $conf['rssurl']; // URL to rss file
          $xml = simplexml_load_file($rss_file);
          $westel = 0;
            while ($westel < 6) {
              //foreach($xml->channel->item as $item) {
                fputs($socket, "PRIVMSG " . $chan . " : [04".$conf['rssname']."] ".$xml->channel->item->$westel->title." - ".$xml->channel->item->$westel->link . "\n");
                $westel = $westel + 1;
              //}
            }
        }

?>