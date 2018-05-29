<?php

include_once 'dbh.php';
if (isset($_POST['submit'])) {
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$text = mysqli_real_escape_string($conn, $_POST['text']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);

	$sql = "INSERT INTO `article`(`a_title`, `a_text`, `a_author`, `a_date`) VALUES ('$title', '$text', '$author', '$date');";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if (!empty($result)) {
		header("Location: newarticle.php?article=success");
	} else {
		header("Location: newarticle.php?article=error");
	}

}




