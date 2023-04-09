<?php
echo "<style>
  .multiplication_table {
    border-collapse: collapse;
  }
  .multiplication_table th, .multiplication_table td {
    border: 1px solid black;
    padding: 5px;
  }
  .multiplication_table th { 
    background-color: lightgray;
    font-weight: bold;
  }
</style>";
if(isset($_POST['number'])) {
  $number = $_POST['number'];
  echo "<table class='multiplication_table'>";
  // Print column indexes
  echo "<tr><th></th>";
  for($i = 1; $i <= $number; $i++) {
    echo "<th>" . $i . "</th>";
  }
  echo "</tr>";
  // Print row indexes and multiplication table
  for($i = 1; $i <= $number; $i++) {
    echo "<tr><th>" . $i . "</th>";
    for($j = 1; $j <= $number; $j++) {
      echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>
