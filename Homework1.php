<?php

function addStrings($text1,$text2)
{
    return $text1 . " " . $text2;
}

function outputSomeLetter($var,$numberOfLetter)
{
    return substr($var, $numberOfLetter, 1) . "<br />";
}

function isNumberInRangeFromZeroToFive($number)
{
    if ($number >= 0 && $number <= 5){
        return "Right";
    }
    return "Wrong";
}

function whichQuarter($min)
{
    if ($min >= 0 && $min <= 15) {
        return "first";
    } elseif ($min >= 16 && $min <= 30) {
        return "second";
    } elseif ($min >= 31 && $min <= 45) {
        return "third";
    } elseif ($min >= 46 && $min <= 59) {
        return "fourth";
    }
    return "Wrong. Input number from 0 to 59";
}

function isThisYearIntercalary($year)
{
    if ($year % 4 == 0 && $year % 100 != 0) {
        return "This year is intercalary";
    }elseif ($year % 400 == 0){
        return "This year is intercalary";
    }
    return "This year isn't intercalary";
}

function isSumOfTwoPartOfStringEqual($stringOfNumbers)
{
    $explodeString = preg_split('//', $stringOfNumbers, -1, PREG_SPLIT_NO_EMPTY);
    list($firstExplodeString, $secondExplodeString) = array_chunk($explodeString, 3);
    $sumOfFirstArray = array_sum($firstExplodeString);
    $sumOfSecondArray = array_sum($secondExplodeString);
    if ($sumOfFirstArray == $sumOfSecondArray) {
        return "Yes. They are equal. Sum = $sumOfFirstArray";
    } else {
        return "No. They aren't equal. First sum = $sumOfFirstArray First sum = $sumOfSecondArray";
    }
}

echo "<hr />"."TASK 1.1"."<hr />"."<br />";
echo addStrings('Hello','World');

echo "<hr />"."TASK 1.2"."<hr />"."<br />";
echo outputSomeLetter('hello',0);
echo outputSomeLetter('hello',1);
echo outputSomeLetter('hello',-1);

echo "<hr />"."TASK 1.3"."<hr />"."<br />";
$number=[5, 0, -3, 2];
echo isNumberInRangeFromZeroToFive($number[0])."<br />";
echo isNumberInRangeFromZeroToFive($number[1])."<br />";
echo isNumberInRangeFromZeroToFive($number[2])."<br />";
echo isNumberInRangeFromZeroToFive($number[3])."<br />";

echo "<hr />"."TASK 1.4"."<hr />"."<br />";
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

echo "<hr />"."TASK 1.5"."<hr />"."<br />";
echo isThisYearIntercalary(2012)."<br />";
echo isThisYearIntercalary(2000)."<br />";
echo isThisYearIntercalary(2001)."<br />";

echo "<hr />"."TASK 1.6"."<hr />"."<br />";
echo isSumOfTwoPartOfStringEqual("385934")."<br />";
echo isSumOfTwoPartOfStringEqual("387934");
?>
