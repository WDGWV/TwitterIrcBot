<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!nick" && isadmin($nick,$command)) {
         $thisw       = 2;
         $ex2[$thisw] = eregi_replace("!nick ","",$ex2[$thisw]);
         $addsearch   = $ex2[$thisw];
         if(file_exists("server/nick.nick")) {
          @unlink("server/nick.nick");
         }       
         fputs($socket, "NICK :" . $addsearch . "\n"); 
         $wesfilew = fopen("server/nick.nick", "a+");
         fwrite($wesfilew,$addsearch);
         fclose($wesfilew);
        }

?>