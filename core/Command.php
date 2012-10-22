<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

        if (isset($ex[3])) {
           $command = str_replace(array(chr(10), chr(13)), '', $ex[3]);
        }else{
           $command = false;
        }
        $command = str_replace(":","",$command);
        //echo "----------------------------------------------";        
        $wes      = explode("!",$ex[0]);
        $wes['0'] = str_replace(":","",$wes['0']);
        $nick     = $wes['0'];
        $channel  = isset($ex[2]) ? $ex[2] : 'ERROR!';
                $channel  = str_replace(array(':'),'',$channel);
        $chan     = $channel;
        ///wes functs!
        $thisw = 2;
        if(isset($ex2[$thisw])) {
        $ex2[$thisw] = preg_replace("#{chan}#"  ,$chan,   $ex2[$thisw]);
        $ex2[$thisw] = preg_replace("#{nick}#"  ,$nick,   $ex2[$thisw]);
        $ex2[$thisw] = preg_replace("#{server}#",$server, $ex2[$thisw]);
        $ex2[$thisw] = preg_replace("#{chans}#" ,$chans,  $ex2[$thisw]);
        $ex2[$thisw] = preg_replace("#{kleur=(.*?)}#si" ,"\\1",  $ex2[$thisw]); //kleur
        // alert 4,0/01,00!04,00\ \\1 4,0/01,00!04,00\
        $ex2[$thisw] = preg_replace("#{alert=(.*?)}#si" ,"4,0/01,00!04,00\ \\1 4,0/01,00!04,00\",  $ex2[$thisw]); //kleur
        }


?>