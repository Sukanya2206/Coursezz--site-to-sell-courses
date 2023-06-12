<?php

include_once('dbcon.php');
session_start();
$cp = $_SESSION['login'];
$fid = $_SESSION['id'];


?>
    

<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<a href="spcourses.php"><h3 style="float: right">Back To Courses</h3></a>
<br>
<br>
<br>
<div style="margin-right: 10%; margin-left:10%">
<table>
  <tr>
    <th>My Enrolled</th>
  </tr>
  <?php
  
    $result = mysqli_query($conn,"SELECT * FROM courses c where c.uid='".$_SESSION['id']."' and c.username='".$_SESSION['login']."' ");
    //$result = mysqli_query($conn, "select * from courses where id = $fid and username = $cp ");
    if ($result !== false && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  ?>
  <tr >
    <td><?php echo $row['courses'] ?></td>
    </tr>
    <?php
        }
    }
    ?>
</table>
</div>

</body>
</html>