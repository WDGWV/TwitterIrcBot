<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if (isset($ex[6]) && $ex[6] == "forced") {
         if ( $ex[8] == "join" ) {
          fputs($socket, "PART ".$ex[9]."\n");
         }else{
          fputs($socket, "Join ".$ex[9]."\n");
         }
        }

?>