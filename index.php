<?php
$errors = [];
if (isset($_POST['first'])) {
    $first = ($_POST ['first']);
    if (!preg_match ('/[0-9]/',$first))
    {
        $errors [] = "ERROR please enter first number correctly<br>";
    }
} else {
    $first = '';
}
if (isset($_POST['calculation'])) {
    $calculation = $_POST ['calculation'];
    if (!preg_match ('/(\+|\-|\/|\*)+/',$calculation))
    {
        $errors [] = "ERROR please enter the sign of action<br>";
    }
} else {
    $calculation = '';
}
if (isset($_POST['second'])) {
    $second = $_POST ['second'];
    if (!preg_match ('/[0-9]/',$second))
    {
        $errors [] = "ERROR please enter second number correctly <br>";
    }
} else {
    $second = '';
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
}

$form = <<<FORM
<form action="index.php" method="post">
 <p>First number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="first" value="$first" />
 <p>Sign of action:&nbsp;&nbsp;&nbsp; <input type="text" name="calculation" value="$calculation" /></p>
 <p>Second number:&nbsp;<input type="text" name="second" value="$second" /></p>
 <p><input type="submit" /></p>
</form>
FORM;
echo $form;
echo "<a href='index.php'>Back</a><br>";
switch ($calculation) {
    case '+':
        echo "The result is: ", ($first + $second);
        break;
    case '-':
        echo "The result is: ", ($first - $second);
        break;
    case '*':
        echo "The result is: ", $first * $second;
        break;
    case '/':
        echo "The result is: ",  $first / $second;
        break;
}
?>