<?php
echo "<hr />"."TASK 1.1"."<hr />"."<br />";
$text1='Hello';
$text2='World';
echo $text1." ".$text2;

echo "<hr />"."TASK 1.2"."<hr />"."<br />";
$var = 'hello';
echo substr($var,0,1)."<br />";
echo substr($var,1,1)."<br />";
echo substr($var,-1,1)."<br />";

echo "<hr />"."TASK 1.3"."<hr />"."<br />";
if(isset($_POST["done"]))
{
    if ($_POST["number"] == "") {
        echo "Please input number 5, 0, -3, 2";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HomeTask </title></head>
<body>
<form name="test" action="" method="post">

    <input type="text" name="number" placeholder="Input number" /><br />

    <input type= "submit" name = "done" value ="Done" />
</form>
</body>
</html>
<?php


    echo "Your number: " . $_POST["number"] . "<br />";
    if (isset($_POST["done"]))
    {
        if ($_POST["number"] >= 0 && $_POST["number"] <= 5 &&$_POST["number"]!="")
        {
            echo "Вірно";
        }
        elseif ($_POST["number"]!="")
        {
            echo "Невірно";
        }

    }
echo "<hr />"."TASK 1.4"."<hr />"."<br />";

$min=15;
echo "Наша змінна min= $min "."<br />"."Наша чверть: ";
if ($min>=0 && $min<=15)
{
    echo "перша";
}
elseif ($min>=16 && $min<=30)
{
    echo "друга";
}
elseif ($min>=31 && $min<=45)
{
    echo "третя";
}
elseif  ($min>=46 && $min<=59)
{
    echo "четверта";
}
else echo "Число не є в межах від 0 до 59";
echo "<hr />"."TASK 1.5"."<hr />"."<br />";

$year =2000;
echo "Наш рік: $year"."<br />";
if (($year%4==0&&$year%100!=0)||$year%400==0)
{
    echo "Високосний рік";
}
else echo "Не високосний рік";

echo "<hr />"."TASK 1.6"."<hr />"."<br />";
$stringOfNumbers="386935";
$explodeString=preg_split('//',$stringOfNumbers, -1,PREG_SPLIT_NO_EMPTY);
list($firstExplodeString,$secondExplodeString)=array_chunk($explodeString,3);
$sumOfFirstArray=array_sum($firstExplodeString);
$sumOfSecondArray=array_sum($secondExplodeString);
if ($sumOfFirstArray==$sumOfSecondArray)
{
    echo "Так - строки рівні і дорівнюють $sumOfFirstArray";
}
else
    echo "Ні - строки  нерівні";
?>
