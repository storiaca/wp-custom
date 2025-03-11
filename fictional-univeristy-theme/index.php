<?php
// function myFirstFunction()
// {
//   echo "<p>Hello, this is my firts function.</p>";
// }
// myFirstFunction();
// myFirstFunction();

#########################
function greet($name, $color)
{
  echo "<p>Hello, my is $name and my favorite color is $color.</p>";
}

greet("Milan", "green");
greet("Darko", "red");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>