#!/usr/bin/php
<?php

#this is a comment,yo

echo "begin script ".$argv[0].PHP_EOL;#hasdfkjksdh

class Student 
{
    private $name;
    private $address;
    private $gpa;
    private $year;
    
    public function __construct($name,$address="",$gpa=0.0,$year=1)
    {
	$this->name = $name;
	$this->address= $address;
	$this->gpa= $gpa;
	$this->year= $year;
    }
    
    
    public function printName()
    {
	echo "name: ".$this->name.PHP_EOL;
    }
    
    public function PrintStudent()
    {
	echo "student:".PHP_EOL;
	echo "	name: ".$this->name.PHP_EOL;
    }
    
    public function setGPA($gpa)
    {
	$this->gpa = $gpa;
    }
}

$myStudent= new Student("steve");
$myStudent->setGPA(2.3);
$myStudent->major = "information technology";
//$myStudent->gpa = 4.0;
$myStudent->printName();

/*
this whole
block
of comments

*/

$var = "some value";
$var = $var."some other value";
$number = 1231432415;
$realNumber= 31342123.12341;// this is also comment
//this is also a comment, datebayo
$arr= array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5434.2345;
$arr[] = array("food","water","shelter","heart");

//print_r($arr);

//var_dump($arr);

echo "end script ".$argv[0].PHP_EOL;

?>