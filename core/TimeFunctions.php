<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

# PHP5 // Windows Time Bug?
 # WORKAROUND
if ( function_exists ( "date_default_timezone_set" ) && function_exists ( "date_default_timezone_get" ) ) 
{
  date_default_timezone_set( date_default_timezone_get( ) ) ; 
}


?>