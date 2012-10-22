<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

if(!isset($WDG_TWITTER_TIME))
{
 $WDG_TWITTER_TIME=date('i')+1; // --1 minute. :) [--=+]
}

if ( $WDG_TWITTER_TIME < date('i') && $twitter['silence'] == false )
{
for($i=0; $i<sizeof($twitter['following_array']); $i++)
{
	global $config;
 	//fputs($socket, 'PRIVMSG #WDG.P :Checking user: ' . $twitter['following_array'][$i] . "\n");
 	echo "[i] Checking User {$twitter['following_array'][$i]}\n";

 	$tweet = _Twitter($twitter['following_array'][$i]);
 	if($tweet != 'ERROR')
 		fputs($socket, 'PRIVMSG '.($conf['twitterchannel']).' :[Twitter] ' . $tweet . "\n");

 	echo (($tweet == 'ERROR')?"[i]":"[√]") . " Got " . (($tweet != 'ERROR')?null:'NO ') . "New Tweets\n";
 	sleep(5); 	
}

$WDG_TWITTER_TIME = ((date('i')+5)>59)?o:date('i')+5;
}

/*

*/
?>