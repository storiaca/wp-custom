<?php
$myName = "Aca";
$names = ['Brad', 'John', 'Milan', 'Zika'];

$count = 0;

$arrLength = count($names);

while ($count < $arrLength) {
  echo "<li>Hi my name is $names[$count]</li></ul>";
  $count++;
}
?>

<p>My name is <?php echo $myName ?>.</p>
<p>My name is <?php echo $names[1] ?>.</p>