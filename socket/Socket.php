<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

  $socket   = fsockopen($server, $port);
  // Send auth info
  
  fputs($socket,"USER " . $nick . " " . $nick . " " . $nick . " :PHPBot by WesDeGroot\n");
  fputs($socket,"NICK " . $nick . "\n");
  // Join channel
  fputs($socket,"JOIN " . $chans . ",#botnet,#testbot\n");


?>