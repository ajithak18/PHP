<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: Arial, Helvetica;
  background: linear-gradient(135deg, #e2e6e7ff, #c1c5c9ff);
  margin: 0;
  width: 100%;
  align-items: center;
  padding: 40px;
}
h1 {
            font-size: 42px;
            text-transform: uppercase;
            color: green;
        }


td, th {
  border: 1px solid #e9e3e3ff;
  padding: 8px;
}

tr:nth-child(even){background-color: #d7dbdfff;}

tr:hover {background-color: #529258ff;}

th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: center;
  background-color: #04AA6D;
  color: black;
}
</style>
</head>
<body>
<?php
$x= true;
var_dump($x);
?>
<h1>Students Record</h1>

<table>
  <tr>
    <th>Reg.No</th>
    <th>Name</th>
    <th>Mark</th>
  </tr>
  <tr>
    <td>01</td>
    <td>A</td>
    <td>85</td>
  </tr>
  <tr>
    <td>02</td>
    <td>B</td>
    <td>100</td>
  </tr>
  <tr>
    <td>03</td>
    <td>C</td>
    <td>80</td>
  </tr>
  <tr>
    <td>04</td>
    <td>D</td>
    <td>84</td>
  </tr>
  <tr>
    <td>05</td>
    <td>E</td>
    <td>90</td>
  </tr>
  <tr>
    <td>06</td>
    <td>F</td>
    <td>78</td>
  </tr>
  <tr>
    <td>07</td>
    <td>G</td>
    <td>90</td>
  </tr>
  <tr>
    <td>08</td>
    <td>H</td>
    <td>88</td>
  </tr>
  <tr>
    <td>09</td>
    <td>I</td>
    <td>87</td>
  </tr>
  <tr>
    <td>10</td>
    <td>J</td>
    <td>85</td>
  </tr>
</table>

</body>
</html>