<?php
include ('process_config.php');
	$id=$_POST['del'];
	mysqli_query($conn,"DELETE FROM record WHERE id='$id'")or die(mysqli_error());mysqli_close($conn);
	header('Location: search.php');
?>