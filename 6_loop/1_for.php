<?php 
// mulitiplication table  *  
$row = 10;
$col = 10;
echo "<table border='1'>";
for($i = 1; $i <= $row; $i++){
 echo "<tr>";
 for($j = 1; $j <= $col; $j++){
  echo "<td>";
  echo $i * $j;
  echo "</td>";
 }
 echo "</tr>";
}


echo "</table>";
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php 

$table_row = 12;
$table_col = 12;

for($i = 1; $i <= $table_row; $i++) :
?>
 <table style="border-collapse: collapse; width: 100%; max-width: 600px;">
  <tr>
   <?php 
  for($j = 1; $j <= $table_col; $j++) :
  ?>
   <td style="border: 1px solid #ccc; padding: 8px;">
    <?php echo $i * $j; ?>
   </td>
   <?php endfor; ?>
  </tr>
 </table>
 <?php endfor; ?>
</body>

</html>