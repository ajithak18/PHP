<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations in PHP</title>
</head>
<body>
  <style>
body{
    
    font-family: Arial, sans-serif;
    background: linear-gradient(#72d1e9ff);
    background-size: cover;
    display: flex;
    background-color: #5a93adff;
    display: flex;
    height: 100vh;
}
table {
    border-collapse: collapse;
    width: 80%;
    background-color: #68dda7af;
    align-items: center;
    box-shadow: 0 0 10px gray;
    }
  </style>


<?php

$a = 100;
$b = 50;

$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;
$modulus = $a % $b;
$exponentiation = $a ** $b;

?>
<div>
<h1>Arithmetic Operators</h1>
<center>

<table border="1">
  <tr>
    <th>Operation</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>Addition (+)</td>
    <td><?php echo $addition; ?></td>
  </tr>
  <tr>
    <td>Subtraction (-)</td>
    <td><?php echo $subtraction; ?></td>
  </tr>
  <tr>
    <td>Multiplication (*)</td>
    <td><?php echo $multiplication; ?></td>
  </tr>
  <tr>
    <td>Division (/)</td>
    <td><?php echo $division; ?></td>
  </tr>
  <tr>
    <td>Modulus (%)</td>
    <td><?php echo $modulus; ?></td>
  </tr>
  <tr>
    <td>Exponentiation (**)</td>
    <td><?php echo $exponentiation; ?></td>
  </tr>

</table></center>
</div>

</body>
</html>