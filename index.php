<?php
require_once "../config.php";

// The Tsugi PHP API Documentation is available at:
// http://do1.dr-chuck.com/tsugi/phpdoc/

use \Tsugi\Core\LTIX;
use \Tsugi\Core\Settings;
use \Tsugi\Util\Net;

// No parameter means we require CONTEXT, USER, and LINK
$LAUNCHSESSION = LTIX::session_start(); 
$LAUNCH = LTIX::requireData();

// Handle Post Data

if (isset($_POST['createVenue']))
{

   $PDOX->queryDie("INSERT INTO {$p}venue
            (link_id, user_id, venue_id, added_on)
            VALUES ( :LI, :UI, :IP, NOW(), NOW() )
            ON DUPLICATE KEY UPDATE updated_at = NOW()",
            array(
                ':LI' => $LINK->id,
                ':UI' => $USER->id,
                ':venue_id' => $_POST['txtVenue'],
                ':added_on' =>$_POST['txtDate']
            )


return;
}
if (isset($_POST['addBooking']))
{


return;
}

// Render view
$OUTPUT->header();
$OUTPUT->bodyStart();
$OUTPUT->topNav();
$OUTPUT->welcomeUserCourse();
$OUTPUT->flashMessages();

echo("<!-- Classic single-file version of the tool -->\n");

// We could use the settings form - but we will keep this simple
//Body content here:
include(addVenue.php);
//include(makeBooking.php);





$OUTPUT->footer();
