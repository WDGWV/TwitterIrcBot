<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!raw" && isadmin($nick,$command)) {
            $wwwwwwwwwwww = $ex2[$thisw];
             if ( isset ( $ex2[$thisw+1] ) )
              $wwwwwwwwwwww .= $ex2[$thisw+1];
             if ( isset ( $ex2[$thisw+2] ) )
              $wwwwwwwwwwww .= $ex2[$thisw+2];
              
            $wwwwwwwwwwww = eregi_replace("!raw ","", $wwwwwwwwwwww);
            fputs($socket, $wwwwwwwwwwww . "\n");
        }

?>