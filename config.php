<?php
 #New Php File
 # Created With  Macbook Pro, 15", Late 2011
 # Mac OS X Mountain Lion

  $nick     = "BotNickName";
  $server   = "irc.myserver.tld";
  $port     = "6667";
  $chans    = "#Channel"; //more channels? add ,#channel2 
                          //And more if needed

$admins = array(
  "AdminNick1", "AdminNick2"
);

$conf = array(
 "debug" => false,
 "admins" => $admins,
 
 "rssname" => "Fok!",
 "rssurl" => "http://rss.fok.nl/feeds/nieuws",
 
 "ver" => "2.0", // do not edit
 "twitterchannel" => "#Channel", //twitter SendToChannel Config :)
 "silence" => false, //Silenced?
);

?>