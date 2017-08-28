<?php
require_once "../config.php";

// The Tsugi PHP API Documentation is available at:
// http://do1.dr-chuck.com/tsugi/phpdoc/

use \Tsugi\Core\LTIX;
use \Tsugi\Core\Settings;
use \Tsugi\Util\Net;

// No parameter means we require CONTEXT, USER, and LINK
$LAUNCH = LTIX::requireData();

// Handle Post Data

if (isset($_POST["createVenuew"]))
{
echo "<script type='text/javascript'>alert(In post);</script>";
}
if (issset($_POST["addBooking"]))
{
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
echo("Add new venue");
echo("<table>
<form>
<tr>
<td>Venue:</td>
<td>Date:</td>
</tr>
<tr>
<td><input type='text' required name='txtVenue' id='txtVenue' /></td>
<td><input type='text' required name='txtDate' id='txtDate' /></td>
</tr>
<tr>
<input type='submit' value='createVenue'>
</tr>
</form>
</table>");






$OUTPUT->footer();
