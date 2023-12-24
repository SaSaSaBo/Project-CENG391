<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tables.css">

</head>
<body>

<form action="marks.php" method="post" style="max-width:500px;margin:auto">

<h2>Course Table</h2>

<table>

  <tr>
    <th>CourseID</th>
    <th>CourseName</th>
  </tr>

  <?php

    include "connection.php";

    $select = "SELECT * FROM Course";
    $result = $connection->query($select);

    if ($result->num_rows > 0) {
      while ($select = $result->fetch_assoc()) {
        echo "<tr><td style='color: white;'>" . $select["CourseID"] . "</td><td style='color: white;'>" . $select["CourseName"] . "</td></tr>";
      }
    }
    else {
      echo "<tr><td colspan='2'>0 results</td></tr>";
    }
    

  ?>

</table>

<button type="submit" class="btn">Next</button>
</form>

</body>
</html>