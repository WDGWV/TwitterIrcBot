<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!zeg" && isadmin($nick,$command)) {
         $thisw       = 2;
         $ex2[$thisw] = eregi_replace("!zeg ","",$ex2[$thisw]);
         $wesssssss   = explode("|",$ex2[$thisw]);       
         if (!isset($wesssssss['1'])) {
          $wesssssss['1'] = preg_replace("/!zeg (.*)/","",$ex2[$thisw]);
         }
         fputs($socket, "PRIVMSG " . $wesssssss['0'] . " :".$wesssssss['1']."\n");
        }

?>