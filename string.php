<?php
$text="Hello World";
$obj = new main();
$obj->printthis($text);
$obj->strlen($text);
$obj->str_replace($text);
$obj->strcmp();
$obj->lowercase();
$obj->trimthis($text);
$obj->str_split($text);
$obj->cslash($text);
$obj->character();
$obj->joinstring();


class main
{
  public function __construct() {
        echo '<h1>String functions</h1>';
	echo'<hr>';
	}


  public function printthis($text) {
  	echo '<h1>Print function </h1>';
	print($text);
	echo'<hr>';
	}	

  public function strlen($text) {
        echo '<h1>String length function</h1>';
 	echo '<h3>Length of Hello World is </h3>';
	echo strlen($text);
	echo'<hr>';
	}

  public function str_replace($text) {
        echo '<h1>"Replace text within a String" function</h1>';
	echo str_replace("World","India",$text);
	echo '<hr>';
	}

  public function strcmp ($text) {
        echo '<h1>"String comparison" function</h1>';
	$str1="Hello";
	$str2="World";
	if (strcmp($str1, $str2) !== 0) {
	echo 'Hello is not equal to World';
	}
        echo'<hr>';
	}

  public function lowercase() {
        echo '<h1> Lowercase function</h1>';
	$str= 'HELLO WORLD';
	$str= lcfirst($str);
	echo "$str";
        echo '<hr>';
	}

  public function trimthis($text) {
        echo '<h1>Trim function</h1>';
	echo chop($text,'World');
	echo '<hr>';
	}

  public function str_split($text) {
	$arr = str_split($text,3);
	echo '<h1>Converts string to array</h1>';
	print_r($arr);
	echo '<hr>';
	}

  public function cslash($text) {
        echo '<h1>Slash function</h1>';
	echo addcslashes($text,'a..z');
	echo'<hr>';
	}

  public function character() {
        echo '<h1>Character function</h1>';
	$str=chr(046);
	echo "$str";
	echo '<hr>';
        }

  public function joinstring() {
        echo '<h1> Implode function</h1>';
        $str=array('Hello','World','!');
        echo implode (" ",$str);
	echo '<hr>';
	}





}
?>
