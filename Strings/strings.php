<!DOCTYPE html>
<head><title>STRINGS</title></head>
<body>
  <div>
        <p>
<?php
$str = "Welcome to Online Class";
echo "Length of the string : ".strlen(string: $str);

echo "<br>Number of words in the strings are: ". str_word_count($str);

$z=" string position ";
echo  "<br>position of the given string  :".strpos($z,needle:"string");

echo "<br>string uppercase :".strtoupper($str);

echo "<br>string lowercase :". strtolower($str);

echo   "<br>string replace :".str_replace("Class", "Session", $str);

echo " <br> string reverse :". strrev($str);

$x= "     Artificial  ";
echo "<br>".trim($x);

$y ="intelligence course";
echo "<br>explode function :";
print_r(explode(" ", $y));

echo "<br>string concatenation:";
echo $x.$y;

echo "<br>the substring :";
echo substr($str,7,23);
?>
</p>
</div>
</body>
