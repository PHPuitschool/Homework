<?php
$form = <<<FORM
<form action="index.php" method="post">
 <p>First number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first" value="$first" />
 <p>Calculation of mark : <input type="text" name="calculation" value="$calculation" /></p>
 <p>Second number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="second" value="$second" /></p>
 <p><input type="submit" /></p>
</form> 
FORM;