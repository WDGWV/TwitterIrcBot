<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

 if(!extension_loaded('sockets')) {
  if(!dl('php_sockets.dll')) {
   if(!dl('php_sockets.so')) {
   exit("Error While Loading php_sockets");
   }
  }
 }

?>