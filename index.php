<?php 

include_once 'inc/header.php';

 ?>
 

 <form action="search.php" method="POST">
 	<input type="text" name="search" placeholder="Search">
 	<button type="submit" name="submit-search">Search</button>
 </form>
 <form action="newarticle.php" method="POST">
 	<button type="text" name="new-article">New Artile</button>
 </form>

<h1>Front Page</h1>
<h2>All Articles</h2>

<div class="article-container">
	<?php 
		$sql = "SELECT * FROM article";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);
		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "
					<a href='article.php?title=" .$row['a_title']. "&date=".$row['a_date']."'><div class='article-box'>
						<h3>".$row['a_title']."</h3>
						<p>".$row['a_text']."</p>
						<p>".$row['a_date']."</p>
						<p>".$row['a_author']."</p>
					</div></a>
				";
			}
		}
	 ?>
</div>

 </body>
 </html>