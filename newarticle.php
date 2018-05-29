<?php 

include_once 'inc/header.php';

 ?>
 

 <form action="search.php" method="POST">
 	<input type="text" name="search" placeholder="Search">
 	<button type="submit" name="submit-search">Search</button>
 </form>

<h1>Submit New Article</h1>

<div class="article-container">
	<form action="newarticlephp.php" method="POST">
		<input type="text" name="title" placeholder="Title">
		<textarea name="text" placeholder="Article Text"></textarea>
		<input type="text" name="date" placeholder="Date">
		<input type="text" name="author" placeholder="Author">
		<button type="submit" name="submit">Submit</button>
	</form>
</div>

 </body>
 </html>