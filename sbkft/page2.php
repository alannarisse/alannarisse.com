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

	?>



<?php
$Ontheway = $_GET["Ontheway"];

echo $Ontheway;
echo "<br />";

if(strcmp($Ontheway,'veronica')==0){
    echo "You wrote veronica";
    }else{
    echo "You did not write veronica";
    }

?>

<?php
$vars = array('Ontheway' => $Ontheway, 'color' => $color);
$querystring = http_build_query($vars);
$url = "page3.php?" . $querystring;
?>

<form action="page3.php?color=<?php echo $_GET['color'] . "&Ontheway=" . $_GET['Ontheway'];?>" method="get">


His blood flowed Red <input type="radio" name="color" value="red"><br>
Her pee was Yellow <input type="radio" name="color" value="yellow"><br>
Her vomit was Rainbow <input type="radio" name="color" value="rainbow"><br>

<input type="submit">
</form>

<br>
Person is: <?php echo $Ontheway; ?>
URL is: <?php echo $vars; ?>
</body>
</html>
