<?php
error_reporting(E_ERROR | E_PARSE);
$connection = mysqli_connect('localhost','root','','employees');
if(mysqli_connect_errno()){
    die("Sorry the database does not connected");
}
$employee_id = $_GET['employee_id'];
$employee_name = $_GET['employee_name'];
$employee_salary = $_GET['employee_salary'];
$employee_position = $_GET['employee_position'];
$employee_age = $_GET['employee_age'];
if(isset($_GET['add'])){
$insertdata = "INSERT INTO employee (id,name,salary,position,age) 
               VALUES ('$employee_id','$employee_name','$employee_salary','$employee_position','$employee_age')";
mysqli_query($connection,$insertdata);
}
if(isset($_GET['delete'])){
$deletedata = "delete from employee where id=\"$_GET[employee_id]\"";
mysqli_query($connection,$deletedata);
}
if(isset($_GET['update'])){
$updatedata = "update employee set salary = '$_GET[employee_salary]' where  name = '$_GET[employee_name]'";
mysqli_query($connection,$updatedata);
}
