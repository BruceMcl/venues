echo("Add new venue");
echo("<table>
<form method='post'>
<tr>
<td>Venue:</td>
<td>Date:</td>
</tr>
<tr>
<td><input type='text' required name='txtVenue' id='txtVenue' /></td>
<td><input type='date' required name='txtDate' id='txtDate' /></td>
</tr>
<tr>
<td>
<input type='submit' name='createVenue' id='createVenue' value='Go'>
</td>
</tr>
</form>
</table>");