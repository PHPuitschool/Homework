<?php
$errors = [];
if (isset($_POST['first'])) {
    $first = $_POST ['first'];
    if (gettype($first) != 'integer') ;
    {
        $errors [] = "ERROR please enter first number<br>";
    }
} else {
    $first = '';
}
if (isset($_POST['second'])) {
    $second = $_POST ['second'];
    if (gettype($second) != 'integer') ;
    {
        $errors [] = "ERROR please enter second number<br>";
    }
} else {
    $second = '';
}
if (isset($_POST['calculation'])) {
    $calculation = $_POST ['calculation'];
    if ($calculation != ("+" | "-" | "*" | "/")) ;
    {
        $errors [] = "ERROR please enter the sign of action<br>";
    }
} else {
    $calculation = '';
}
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
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
switch ($calculation) {
    case '+':
        echo "The result is " . ($first + $second);
        break;
    case '-':
        echo "The result is " . ($first - $second);
        break;
    case '*':
        echo "The result is " . $first * $second;
        break;
    case '/':
        echo "The result is " . $first / $second;
        break;
    //  default:
    //      echo "ERROR please enter the sign of action<br>";
}

?>.