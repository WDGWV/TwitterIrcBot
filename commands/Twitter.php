<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

$users = array (
        "djanne" => "AnnetteKoetje",
        "wes"    => "wesdegroot",
        "kuukie" => "chickenzzzzz",
        "djwilfried" => "WilfriedDekker",
        "trust" => "AnvdBerg",
        "mariska" => "Marisjuhh_"
);

$twitter = array();
$twitter['following']       = file_get_contents("mod.TwitterConfig.php");
$twitter['following_array'] = explode(",",$twitter['following']);

include mod . "mod.twitter.php";
include mod . "mod.twitter.last.php";

if (!is_dir('data'))
 exit('need the "data" directory.');

if (!is_dir('data/twitter'))
 exit('need "data/twitter" directory.');

 		// $command = $ex[3];
        if ($command == "!twitter")
        {
        	if ( !isset($ex[4]) Or @$ex[4] == null )
        	{
        		fputs($socket, "PRIVMSG " . $chan . " :Gebruik \"!twitter help\" voor de help\n");
        	}
        	else
        	{
        		$ex[4] = preg_replace("#\\n#",null,$ex[4]);
        		$ex[4] = preg_replace("#\\r#",null,$ex[4]);
        		if(isset($ex[5]))
        		{
	        		$ex[5] = preg_replace("#\\n#",null,$ex[5]);
        			$ex[5] = preg_replace("#\\r#",null,$ex[5]);
        		}
        		if(isset($ex[6]))
        		{
	        		$ex[6] = preg_replace("#\\n#",null,$ex[6]);
        			$ex[6] = preg_replace("#\\r#",null,$ex[6]);
        		}
        		        		
        		if ($ex[4] == "following") {
         			fputs($socket, "PRIVMSG " . $chan . " :Ik Volg: " . implode(", ",$twitter['following_array']) . "\n");
        		}
        		elseif ($ex[4] == "add")
        		{
        			if (isset($ex[5]))
        			{
        				$ex[5] = preg_replace("#\@#",null,$ex[5]);
        				$twitter['following_array'][]=$ex[5];
        				$twitterfile = fopen('mod.TwitterConfig.php','w');
        				fwrite($twitterfile,implode(",",$twitter['following_array']));
        				fclose($twitterfile);
        				fputs($socket, "NOTICE " . $nick . " :Gebruiker \"{$ex[5]}\" Toegevoegd\n");
         			        fputs($socket, "PRIVMSG " . $chan . " :Volgend: " . implode(", ",$twitter['following_array']) . "\n");
        			}
        			else
        			{
        				fputs($socket, "NOTICE " . $nick . " :Gebruik \"!twitter add twitternaam\"\n");
        			}
        		}
        		elseif ($ex[4] == "del")
        		{
        			if (isset($ex[5]))
        			{
        				$ex[5] = preg_replace("#\@#",null,$ex[5]);

        				$TempArray=array();
        				for($i=0; $i<sizeof($twitter['following_array']); $i++)
        				{
        					if ($ex[5] != $twitter['following_array'][$i])
        					{
        						$TempArray[] = $twitter['following_array'][$i];
        					}

        				}
        				$twitter['following_array'] = $TempArray;
        				unset($TempArray);

        				$twitterfile = fopen('mod.TwitterConfig.php','w');
        				fwrite($twitterfile,implode(",",$twitter['following_array']));
        				fclose($twitterfile);
        				fputs($socket, "NOTICE " . $nick . " :Gebruiker \"{$ex[5]}\" Verwijderd\n");
         			        fputs($socket, "NOTICE " . $nick . " :Volgend: " . implode(", ",$twitter['following_array']) . "\n");
        			}
        			else
        			{
        				fputs($socket, "NOTICE " . $nick . " :Gebruik \"!twitter del twitternaam\"\n");
        			}
        		}
        		elseif ($ex[4] == "tweet")
        		{
        			if (isset($ex[5]))
        			{
        				$ex[5] = preg_replace("#\@#",null,$ex[5]);
        				if ( isset ( $users[strtolower($ex[5])] ) )
                                        {
                                                $ex[5] = $users[strtolower($ex[5])];
                                        }
        				$LastTweet=GetTwitter($ex[5]);//'_ditiseentestvanwesley_';
        				if(!empty($LastTweet))
                                        {
                                            $twitterfile = fopen('data/twitter/' . $ex[5] . '.twt','w');
        				    fwrite($twitterfile,$LastTweet);
        				    fclose($twitterfile);
                                        }
                                        if(empty($LastTweet))
                                        {
                                                $LastTweet = "[!] kan tweets niet ophalen!, laatste tweet: " . file_Get_contents('data/twitter/' . $ex[5] . '.twt');
                                        }
        				//fputs($socket, "NOTICE " . $chan . " :Gebruiker \"@{$ex[5]}\" Tweette:\n");
         			        fputs($socket, "NOTICE " . $chan . " :" . $LastTweet . "\n");
        			}
        			else
        			{
        				fputs($socket, "NOTICE " . $nick . " :Gebruik \"!twitter tweet twitternaam\"\n");
        			}
        		}        		        		

        		elseif ($ex[4] == "help")
        		{
        			    fputs($socket, "PRIVMSG " . $chan . " :Hoi, {$nick}. Hieronder de Twitter Help.\n");
         			    fputs($socket, "PRIVMSG " . $chan . " :!twitter following         -- Houd de bot mij al bij?\n");
         			    fputs($socket, "PRIVMSG " . $chan . " :!twitter tweet twitternaam -- laat \"twitternaam's\" laatste tweet zien\n");
         			    fputs($socket, "PRIVMSG " . $chan . " :!twitter add twitternaam   -- voeg \"twitternaam\" toe aan de twitter lijst\n");
         			    fputs($socket, "PRIVMSG " . $chan . " :!twitter del twitternaam   -- verwijder \"twitternaam\" van de twitter lijst\n");
        		}        		        		

        		else
        		{
	        		fputs($socket, "PRIVMSG " . $chan . " :Gebruik aub \"!twitter help\"\n");
	        	}
        	}
        }
?>