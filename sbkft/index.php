<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Super Big Karaoke Fun Time	</title>

</head>
<body>


<h1>Super Big Karaoke Fun Time</h1>
Once upon a time, Lucas, Veronica, and Alanna went to karaoke. It was a memorable time. On the way there...

<form action="page2.php?Ontheway=<?php echo $_GET['Ontheway'];?>" method="get">
Lucas fell into a ditch: <input type="radio" name="Ontheway" value="lucas"><br>
Veronica stole a car: <input type="radio" name="Ontheway" value="veronica"><br>
<input type="submit">
</form>

</body>
</html>
