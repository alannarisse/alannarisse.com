	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Super Big Karaoke Fun Time	</title>

</head>
<body>
	<?php

	// The value of the variable name is found
	echo "<h1>Hello " . $_GET["Ontheway"] . "</h1>";
	echo  $_GET["color"];

	?>

<br>



<?php
$favcolor = $_GET["color"];
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "yellow":
        echo "Your favorite color is yellow!";
        break;
    case "rainbow":
        echo "Your favorite color is rainbow!";
        break;
    default:
        echo "Your favorite color is neither red, yellow, nor rainbow!";
}
?>



</body>
</html>
