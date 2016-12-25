<?php
include "validation.php";
$errors = [];
$resultOfCalc = [];
if (isset($_POST['FirstNumber'])) {
    $FirstNumber = ($_POST ['FirstNumber']);
} else {
    $FirstNumber = '';
}
if (isset($_POST['CalculationSymbol'])) {
    $CalculationSymbol = $_POST ['CalculationSymbol'];
} else {
    $CalculationSymbol = '';
}
if (isset($_POST['SecondNumber'])) {
    $SecondNumber = $_POST ['SecondNumber'];
} else {
    $SecondNumber = '';
}
checkingInputFirstNumber($FirstNumber, 'FirstNumber', $errors);
checkingInputSymbol($CalculationSymbol, 'CalculetionSymbol', $errors);
checkingInputSecondNumber($SecondNumber, 'SecondtNumber', $errors);
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
}
calculation($CalculationSymbol, $FirstNumber, $SecondNumber, $resultOfCalc);

$form = <<<FORM
<form action="index.php" method="post">
 <p>First number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="FirstNumber" value="$FirstNumber" />
 <p>Sign of action:&nbsp;&nbsp;&nbsp; <input type="text" name="CalculationSymbol" value="$CalculationSymbol" /></p>
 <p>Second number:&nbsp;<input type="text" name="SecondNumber" value="$SecondNumber" /></p>
 <p><input type="submit" value="Считать!"></p>
</form>
FORM;
echo $form;
echo "<a href='index.php'>Back</a><br>";
echo $resultOfCalc;
?>