<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion
 #
 # © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
 # © 2012-2013 WDG.P, All Rights Reserved
 #
 # Rules: http://wdgp.nl/#conditions

if (!function_exists('_Tparse'))
{
	function _Tparse($e)
	{
		//$e = preg_replace("/@([^\s]+)(:+)?/", "http://twitter.com/\\1", $e);
		//$e = preg_replace("/#([^\s]+)(:+)?/", "http://twitter.com/#!/search?q=%23\\1", $e);
		return $e;
	}
}

if (!function_exists('GetTwitter'))
{
	function GetTwitter($user,$values=0)
	{
		$file = "http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=".$user;
		$file = @file_get_contents($file);  
		if (!empty($file))
		{
			$twitter = new SimpleXMLElement($file);

			if(isset($twitter->channel->item[$values]->title))
	  			return _Tparse($twitter->channel->item[$values]->title);
	  	}
	    else
	    {
	    	echo "[!] Failed To Check: {$user}\n";
	    }
	}
}

if (!function_exists('_Twitter'))
{
	function _Twitter($username,$val=0) 
	{
		        			$LastTweet 	= GetTwitter($username,$val);
		        			$file 		= 'data/twitter/' . $username . '.twt';
		        			$valq 		= (file_exists($file))?file_get_contents($file):'NotLoadedTweetFromUser' . $username;

		        			if ( $LastTweet != $valq )
		        			{
	        					$twitterfile = fopen($file,'w');
	        					fwrite($twitterfile,$LastTweet);
	        					fclose($twitterfile);
	        					return $LastTweet;
	         				}
	         				else
	         				{
	         					return 'ERROR';
	         				}
	}
}
?>