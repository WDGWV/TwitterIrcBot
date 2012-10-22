<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if($ex[1] == "447") {
         //:Irc.XJSite.nl 447 Schaapie :Can not change nickname while on #Casino (+N)
          if(file_exists("server/nick.nick")) {
           ob_start();
           $nickwz = include("server/nick.nick");
           $nickwz = ob_get_contents();
           ob_end_clean();
           fputs($socket,"PART " . $ex[9] . " :Change NickName (" . $ex[2] . " To " . $nickwz . ")\n");
           fputs($socket,"Nick :" . $nickwz . "\n");
           fputs($socket,"JOIN " . $ex[9] . "\n");
           @unlink("server/nick.nick");
          }
         }

?>