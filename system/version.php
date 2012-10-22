<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if ($command == chr(1) . "VERSION" . chr(1)) {
         //:wes!wes@wes.users.damnation.nl PRIVMSG PHPBOT :VERSION
         fputs($socket, "NOTICE ".$nick." :".chr(1)."VERSION WesDeGroot PhpBot V" . $conf['ver'] .chr(1)."\n");
        }

?>