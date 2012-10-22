<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!html" && isadmin($nick,$command)) {
        $thisw       = 2;
        $ex2[$thisw] = eregi_replace("!html ","",$ex2[$thisw]);
        $wesssssss   = explode("|",$ex2[$thisw]); 
        
        $logsew = $ex2[$thisw];
        ob_start();
        $wezzdfgjf = file_get_contents($logsew);
        $wezzdfgjf = ob_get_contents();
        ob_end_clean();
        $entered = explode("\n",$wezzdfgjf);
         foreach ( $entered as $backtouser ) {
          fputs($socket, "NOTICE " . $nick . " :".$backtouser."\n");
         }
        } 

?>