<?php
echo"Hello<br>";
echo("Hello<br>");
echo "Hello work <br>";
echo "Hello","work<br>";
echo "==============end===============<br>";

//   ------------------end bai 1------------------------------------------------
$str="Hello string";
$x=200;
$y=44.6;
echo "string is:$str<br>";
echo "integer is:$x<br>";
echo "float is:$y<br>";
echo "==============end===============<br>";
// ------------------end bai 2------------------------------------------------
$color="red";
$COLOR="blue";
$coLOR="red";

echo "My car is " . $color ."<br>";
echo "My house is " . $COLOR ."<br>";
echo "My boat is ". $coLOR . "<br>";
echo "==============end===============<br>";
//------------------end bai 3------------------------------------------------

$x=(2==3);

$x=(2!=3);
$x=(2<>3);
$x=(2===3);
$x=(2!==3);
$x=(2>3);
$x=(2<3);
$x=(2<=3);
echo "==============end===============<br>";
//   ------------------end bai toán tử------------------------------------------------
$s="Hello\nWorld";
echo $s ."<br>";
$s='It\'s\n';
echo $s;
echo "\nHello<br>World";
echo "\u{00C2A9}";
echo "\u{C2A9}". "<br>";
echo "==============end===============<br>";

$a='Hello';
$$a='world';
echo "<br>";
echo "$a ${$a} <br>";
echo "==============end===============<br>";
//   ------------------end bai chuỗi-------------------------------

$a=4;
$b=5;
$c=$a+$b;


echo "Tông la $c" . "<br>";

// ------------------end bai 3-------------------------------



?>