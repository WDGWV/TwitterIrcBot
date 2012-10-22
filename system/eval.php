<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!eval") {
         $thisw       = 2;
         $ex2[$thisw] = eregi_replace("!eval ","",$ex2[$thisw]);
         $addsearch   = $ex2[$thisw];
         ob_start();
         $return = eval($addsearch);
         $return = ob_get_contents();
         ob_end_clean();
         fputs($socket, "PRIVMSG " . $chan . " :".$return."\n");
        }

?>