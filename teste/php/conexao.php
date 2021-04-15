<?php

	$conecta=mysqli_connect("localhost","root","")
	or print (mysqli_error());

	mysqli_select_db($conecta,"jr")
	or print(mysqli_error());
?>