<?php
  error_reporting(E_ALL);    // alle error`s laten zien
  set_time_limit(0);         // neem alle tijd
  ob_implicit_flush();       // Voor Connectie stabiliteit

define('cmd' , 'commands/');
define('sys' , 'system/'  );
define('init', 'core/'    );
define('sock', 'socket/'  );
define('mod' , 'modules/' );

include init . 'TimeFunctions.php';

include 'config.php';

include init . 'IsAdmin.php';
include init . 'CheckSocket.php';


  
echo "starting bot...\n" . "connecting to: " . $server . "\n" . "port: " . $port . "\n" . "nick: " . $nick . "\n" . "chans: " . $chans . "\n";

include sock . 'Socket.php';
 
while(1) {

include sock . 'PingPong.php';

$data = fgets($socket, 128); //Retrive Data.

include sock . 'DebugFunction.php';

flush(); //Handle Stablility.

// loading CORE FUNCTIONS

include init . 'DataConverter.php'; //NEED TO BE LOADED FIRST!
include init . 'PingPong.php';
        
if(isset($ex[1])) //Handle Special Server Raw's
{
  include init . 'JoinChannels.php';
  include init . 'OnError.php';
  include init . 'ProtectedNickChange.php';
}


// CORE FUNCTIONS
include init . "Command.php";
include init . "OnJoin.php";
include init . "ThrottleProtection.php";

// SYSTEM COMMANDS
include sys . "dood.php";
include sys . "join.php";
include sys . "nick.php";
include sys . "part.php";
include sys . "version.php";
include sys . "eval.php";
include sys . "raw.php";

// REGULAR COMMANDS
include cmd . "google.php";
include cmd . "admins.php";
include cmd . "zeg.php";
include cmd . "rss.php";
include cmd . "html.php";
//include cmd . "Twitter.php"; #TWITTER HAS CHANGED THEIR API, THIS IS NOW UN_SUPPORTED! SORRY, WORKING ON FIX.
include cmd . "CostumCommands.php";
}
?>