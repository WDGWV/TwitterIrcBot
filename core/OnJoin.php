<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if (isset($ex[1]) && $ex[1] == "JOIN")
        {
         if ( file_exists ( 'auto' ) )
         {
          $nl = file_get_contents('auto');
          $nl = str_replace(array("\r"),'',$nl);
          $nl = explode("\n",$nl);
          for($i=0; $i<sizeof($nl); $i++)
          {          
           if ( substr($nl[$i],0,strlen($nick)) == $nick )
           {
            $mode = explode(";",$nl[$i]);
            $chan  = str_replace(array(':',"\n","\r"),array(''),$chan);
            $doooo = $mode[1] . $mode[2];
            $nnick = $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick . " " . $nick;
            fputs($socket, "MODE {$chan} {$doooo} {$nnick}");
            //echo "$nick found in auto list do: MODE {$chan} {$doooo} {$nick}";
           }
          }
         }
         else
         {
          echo "missing auto file\n";
         }
        }

?>