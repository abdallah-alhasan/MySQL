<?php
include "connection.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="connection.php" method="GET">
    <div>employee_id<input type="text" name="employee_id"></div>
    <div>employee_name<input type="text" name="employee_name"></div>
    <div>employee_salary<input type="text" name="employee_salary"></div>
    <div>employee_position<input type="text" name="employee_position"></div>
    <div>employee_age<input type="text" name="employee_age"></div>
<input type="submit" name="add" value="ADD">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="UPDATE">
</form>



<!-- create table -->


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">employee_id</th>
      <th scope="col">employee_name</th>
      <th scope="col">employee_salary</th>
      <th scope="col">employee_position</th>
      <th scope="col">employee_age</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $res = mysqli_query($connection,"select * from employee");
    while($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>";echo $row["id"]; echo "</td>";
        echo "<td>";echo $row["name"]; echo "</td>";
        echo "<td>";echo $row["salary"]; echo "</td>";
        echo "<td>";echo $row["position"]; echo "</td>";
        echo "<td>";echo $row["age"]; echo "</td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>