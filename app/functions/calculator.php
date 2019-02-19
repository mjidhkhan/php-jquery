<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['dataOne']) && isset($_POST['dataTwo']) && isset($_POST['actionOperand'])) {

    $fristValue = $_POST['dataOne'];
    $secondValue = $_POST['dataTwo'];
    $operand = $_POST['actionOperand'];

    if ($secondValue != '=') {
        $secondValue = substr($secondValue, 0, -1);
    }


    echo $response = Calculator($fristValue, $secondValue, $operand);
}

function Calculator($fristValue, $secondValue, $operand) {



    switch ($operand) {
        case '+':
            if ($secondValue === '=') {
                $result = ($fristValue + $fristValue);
            } else {
                $result = $fristValue + $secondValue;
            }
            break;
            
        case '-':
            if ($secondValue === '=') {
                $result = ($fristValue - $fristValue);
            } else {
                $result = $fristValue - $secondValue;
            }
            break;
        case '|':
            if ($secondValue === '=') {
                $result = ((-$fristValue) - (-$fristValue));
            } else {
                $result = (-$fristValue ) - (-$secondValue);
            }
            break;
            
        case 'x':
            if ($secondValue === '=') {
                $result = ($fristValue * $fristValue);
            } else {
                $result = $fristValue * $secondValue;
            }
            break;
            
        case '/':
            if ($secondValue === '=') {
                $result = 'Error';
            } else {
                $result = $fristValue / $secondValue;
            }
            break;
            
        case '%':
            if ($secondValue === '=') {
                $result = ($fristValue / 100);
            } elseif ($secondValue == '') {
                $result = 'Error';
            } else {
                $result = ($fristValue / $secondValue) * 100;
            }
            break;

        default:
            $result = 'Error';
            break;
    }

    return $result;
}
