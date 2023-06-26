<?php

/*1.write a php program to print a "hello world" using variables.*/
function hellomessage(){
    echo "Hello World<br>";
    }
    hellomessage();
/*2. write a php program to show the current month using switch.*/
$month= date('m');
switch($month){
case "1":
    echo "january";
     break;
case "2":
     echo "february";
     break;
case "3":
    echo "march";
    break;
case "4":
    echo "april";
    break;
case "5":
    echo "may";
    break;
case "6":
    echo "june";
     break;
case "7";
echo "july";
     break;
case "8":
    echo "august";
    break;
case "9":
    echo "september";
    break;
case "10":
     echo "october";
    break;
                                            
case "11":
    echo "november";
     break;
case "12":
    echo "december";
    break;
}
/*3. write a php program to add two numbers*/
function addingfunction($num1, $num2){
  $sum=$num1 + $num2;
  echo "<br>";
  echo "print $sum <br>";
}
addingfunction(100,20);
/*4. write a php program to calculate circumfrence of a circle*/
$radius=14;
$circumference=2*3.14*$radius;
echo "circumference of the circle is" .$circumference;

/*5.write a php program to reverse the string technology*/
$str="technology";
$reverse=strrev($str);
echo "<br>";
echo $reverse;



