<?php

function addStrings($text1,$text2){
    return $text1 . " " . $text2;
}

function outputSomeLetter($var,$numberOfLetter) {
    return substr($var, $numberOfLetter, 1);

}

function isNumberInRangeFromZeroToFive($number)
{
    if ($number > 0 && $number < 5){
        return "Right";
    }
    return "Wrong";
}

function whichQuarter($min) {

    if ($min >= 0 && $min <= 15) {
        return "first";
    } elseif ($min >= 16 && $min <= 30) {
        return "second";
    } elseif ($min >= 31 && $min <= 45) {
        return "third";
    } elseif ($min >= 46 && $min <= 59) {
        return "fourth";
    } else {
        return "Wrong. Input number from 0 to 59";
    }
}

function isThisYearIntercalary($year)
{
    if ($year % 4 === 0 && $year % 100 !== 0) {
        return true;
    }elseif ($year % 400 === 0){
        return true;
    }
    return false;
}

function isSumOfTwoPartOfStringEqual($stringOfNumbers){
    $explodeString = preg_split('//', $stringOfNumbers, -1, PREG_SPLIT_NO_EMPTY);
    list($firstExplodeString, $secondExplodeString) = array_chunk($explodeString, 3);
    $sumOfFirstArray = array_sum($firstExplodeString);
    $sumOfSecondArray = array_sum($secondExplodeString);
    if ($sumOfFirstArray == $sumOfSecondArray) {
        return "Yes. They are equal. Sum = $sumOfFirstArray";
    } else {
        return "No. They aren't equal";
    }
}

echo "<hr /> TASK 1.1 <hr /><br />";
echo addStrings('Hello','World');
echo "<hr /> TASK 1.2 <hr /><br />";
echo outputSomeLetter('hello',0)."<br />";
echo outputSomeLetter('hello',1)."<br />";
echo outputSomeLetter('hello',-1)."<br />";
echo "<hr />"."TASK 1.3"."<hr />"."<br />";

if(isset($_POST["done"])) {
    if ($_POST["number"] == "") {
        echo "Please input number 5, 0, -3, 2";
    }
}
include_once "header.php";
echo "Your number: " . $_POST["number"] . "<br />";
if (isset($_POST["done"])) {
    if ($_POST["number"] >= 0 && $_POST["number"] <= 5 &&$_POST["number"]!="") {
        echo "Right";
    }
    elseif ($_POST["number"]!="") {
        echo "Wrong";
    }

}
echo "<hr /> TASK 1.4 <hr /><br />";
echo "Our quarter: ";
echo whichQuarter(15)."<br />";
echo "Our quarter: ";
echo whichQuarter(16)."<br />";
echo "Our quarter: ";
echo whichQuarter(33)."<br />";
echo "Our quarter: ";
echo whichQuarter(59)."<br />";
echo "Our quarter: ";
echo whichQuarter(60)."<br />";
echo "<hr /> TASK 1.5 <hr /><br />";
isThisYearIntercalary(2012);
isThisYearIntercalary(2000);
isThisYearIntercalary(2001);
echo "<hr /> TASK 1.6 <hr /><br />";
isSumOfTwoPartOfStringEqual("385934")."<br/>";
isSumOfTwoPartOfStringEqual("387934")."<br/>";
?>
