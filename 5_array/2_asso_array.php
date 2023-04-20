<?php 

// associative array -> array with string index = key => value

$persons = array(
 'name' => 'John',
 'age' => 20,
 'address' => 'Ha Noi',
 'phone' => '0123456789',
 'relationship' => 'single',
 'school' => 'HUST',
 'job' => 'developer',
);

echo $persons['name']; // print John
echo "<br>";
echo "<pre>";
print_r($persons);
echo "</pre>";
echo "<hr>";

// foreach loop -> loop with array

foreach($persons as $value) 
{
 echo $value . "<br>";
}

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
 <table style="border-collapse: collapse; width: 100%; max-width: 600px;">
  <thead>
   <th style="border: 1px solid #ccc; padding: 8px;">Key</th>
   <th style="border: 1px solid #ccc; padding: 8px;">Info</th>
  </thead>

  <tbody>
   <tr>
    <?php foreach($persons as $key => $value) : ?>
    <td style="border: 1px solid #ccc; padding: 8px;"><?= $key; ?></td>
    <td style="border: 1px solid #ccc; padding: 8px;"><?= $value; ?></td>
   </tr>
   <?php endforeach; ?>
  </tbody>
 </table>
</body>

</html>