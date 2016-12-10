<?php

if (isset($_POST["first"]))
{
    $first = $_POST ["first"];
}
else
{
    $first = '';
    echo "ERROR please enter ferst number<br>";
}
if (isset($_POST["second"]))
{
    $second = $_POST ["second"];
}
else
{
    $second = '' ;
    echo "ERROR please enter second number<br>";
}
if (isset($_POST["calculation"]))
{
    $calculation = $_POST ["calculation"];
}
else
{
    $calculation = '';
    echo "ERROR please enter the sign of action<br>";
}


$form = <<<FORM
<form action="index.php" method="post">
 <p>First number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first" value="$first" />
 <p>Calculation of mark : <input type="text" name="calculation" value="$calculation" /></p>
 <p>Second number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="second" value="$second" /></p>
 <p><input type="submit" /></p>
</form>
FORM;
echo $form;
echo "<a href='index.php'>Back</a><br>";
switch ($calculation)
{
    case '+':
        echo "The result is ". $first + $second;
        break;
    case '-':
        echo "The result is ". $first - $second;
        break;
    case '*':
        echo "The result is ".$first * $second;
        break;
    case '/':
        echo "The result is ".$first / $second;
        break;
    default:
        echo "Please enter the correct character actions<br>";

}

?>.