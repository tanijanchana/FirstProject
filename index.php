<?php
/**
 * Created by PhpStorm.
 * User: niran.w
 * Date: 02/10/2018
 * Time: 19:48:20
 */
$name= "Open world";
$x= 70;
$y= 30;
    print $name ."<br/>". "x=" . $x . "<br/>" . "y=" . $y . "<br/>" . "Total = " . ($x / $y);

    $grade ="";

    Print "<br/>" . $grade ;

    function cal($x){
        $score =$x;
        if ($score >= 80){
            $grade = "A";
        }else if($score >= 70 && $score <= 79){
            $grade = "B";
        }else if($score >= 60 && $score <= 69){
            $grade = "C";
        }else if($score >= 50 && $score <= 59){
            $grade = "D";
        }else {
            $grade = "E";
        }
        return $grade;
    }
    print cal(100);

    function salary($x,$y){
        return $x * $y;
    }
    print salary(26,300);