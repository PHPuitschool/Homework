<?php
function checkingInputFirstNumber($checkValue, $variableName, &$errors)
{
    if (!preg_match('/^(-)?[\d]+(.)?[\d]*$/', $checkValue))
        $errors[] = $variableName . ' Error';
    }
function checkingInputSecondNumber($checkValue, $variableName, &$errors)
{
    if (!preg_match('/^(-)?[\d]+(.)?[\d]*$/', $checkValue))
        $errors[] = $variableName . ' Error';
    if (preg_match('/^(0)+$/', $checkValue))
        $errors[] =$variableName . 'is zero - divide by zero not impossible';
    }
    function checkingInputSymbol ($checkValue, $variableName, &$errors)
{
    if (!preg_match('/^(\+|\-|\/|\*)$/', $checkValue))
        $errors[] = $variableName . ' Error';
 }
    function calculation($CalculationSymbol, $FirstNumber, $SecondNumber, &$resultOfCalc)
{
    if ($CalculationSymbol == '+')
            $resultOfCalc = $FirstNumber + $SecondNumber;
    if ($CalculationSymbol == '-')
          $resultOfCalc = $FirstNumber - $SecondNumber;
    if ($CalculationSymbol == '*')
          $resultOfCalc = $FirstNumber * $SecondNumber;
    if ($CalculationSymbol == '/')
          $resultOfCalc = $FirstNumber / $SecondNumber;
}

