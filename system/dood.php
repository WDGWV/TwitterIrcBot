<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == "!dood" && isadmin($nick,$command)) {
            trigger_error("!!! ".$nick." Quited! (dood) The Bot!!! (" . $chan . ")", E_USER_ERROR);
            fputs($socket, "QUIT :Shutdown. request By ".$nick." In " . $chan . "\n");
            exit;
        }

?>