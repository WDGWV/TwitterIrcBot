<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

function isadmin($nick = 'noadmin',$command = false) 
 {
  global $admins;
  if(in_array($nick,$admins)) {
   return true;
  }
  else
  {
   global $socket;
   $message = $nick . " is geen admin maar used admin commands! (" . $command . ")";
   $msgebck = $nick . " U Heeft Hier Geen Rechten Toe!";
   fputs($socket, "NOTICE " . $nick . " :" . $msgebck . "\n");
   fputs($socket, "NOTICE Wes :" . $message . "\n");
   return false;
  }
}

?>