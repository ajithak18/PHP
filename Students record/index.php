<!DOCTYPE html>
<head>
<title>Student Details</title>
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
table{
    border-collapse: collapse;
    width: 80%;
    background-color: #68dda7af;
    align-items: center;
    box-shadow: 0 0 10px gray;
}
th,td{
    border:1px solid #ddd;
    padding:10px;
    text-align:left;
}
th{
    background-color: blue;
    color:white;
}
h1{
    text-align:center;
    text-transform: uppercase;
    color:darkblue;
}
</style>
</head>
<body>
<?php 
class Student{
    public $student_Name="abc";
    public $student_Degree="BE";
    public $student_Department="Computer Science and Engineering";
    public $student_CGPA="80%";
    public $student_Email="xyz@gmail.com";
    public $student_Phone="8787878787";
    public $student_age="26";
    public $student_City="chennai";
    
}
$student_details=new Student();
?>
<div>
<h1>Student Details</h1>
<center>
<table>
<tr>
<th>Field</th><th>Details</th>
</tr>
<tr><td>Name</td><td><?php echo $student_details->student_Name; ?></td></tr>
<tr><td>Degree</td><td><?php echo $student_details->student_Degree; ?></td></tr>
<tr><td>Department</td><td><?php echo $student_details->student_Department; ?></td></tr>
<tr><td>CGPA</td><td><?php echo $student_details->student_CGPA; ?></td></tr>
<tr><td>Email</td><td><?php echo $student_details->student_Email; ?></td></tr>
<tr><td>Phone</td><td><?php echo $student_details->student_Phone; ?></td></tr>
<tr><td>Age</td><td><?php echo $student_details->student_age; ?></td></tr>
<tr><td>City</td><td><?php echo $student_details->student_City; ?></td></tr>
</table></center>
</div>
</body>
</html>