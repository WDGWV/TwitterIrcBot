<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!silence") {
        	$conf['silence']=true;
        }
        if ($command == "!silenceoff") {
        	$conf['silence']=false;
        }
        if ($command == "!google") {
         $thisw       = 2;
         $ex2[$thisw] = eregi_replace("!google ","",$ex2[$thisw]);
         $addsearch   = $ex2[$thisw];
         fputs($socket, "PRIVMSG " . $chan . " :http://www.google.nl/search?hl=nl&q=" . urlencode($addsearch) . "&btnG=Google+zoeken&meta=#searchby=" . $nick . "&chan=" . $chan . "\n");
        }

?>