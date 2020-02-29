<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
//Include db connection file
include_once('inc/connection.inc.php');
//check to see if the form has been submitted
if (isset($_POST['submit']))
{
	//check to see all fields have been completed
  $articleTitle = $_POST['articleTitle'];
  $articleAuthor = $_POST['articleAuthor'];
  $articleDate = $_POST['articleDate'];
  $articleBody = $_POST['articleBody'];
	// create sql query to add the comment
	$query = "INSERT INTO tblArticles (articleTitle, articleAuthor, articleDate, articleBody) VALUES ('$articleTitle','$articleAuthor','$articleDate','$articleBody')";
	$result = $db->query($query);
	if ($result)
		echo 'Blog uploaded';
	$db->close();
}
?>
<head>
	<title>This is a blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css">
	<link href="css/master.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="index.php">This is a blogging site</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php">Homepage</a></li>
					<li><a href="allarticles.php">Blog posts</a></li>
          <li><a href="name.php">Search..</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Upload blog</a></h2>
          <form id="register" name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					  <div class="label"><label for="articleTitle">Title of blog</label></div>
					  <div class="input"><input type="text" name="articleTitle"  tabindex="1" /></div>
					  <br />
					  <div class="label"><label for="articleAuthor">Author of blog</label></div>
					  <div class="input"><input type="text" name="articleAuthor"  tabindex="2" /></textarea></div>
					  <br />
					  <div class="label"><label for="articleDate">Date of blog</label></div>
					  <div class="input"><input type="text" name="articleDate"  tabindex="3" /></div>
					  <br />
					  <div class="label"><label for="articleBody">Main body of blog</label></div>
					  <div class="input"><input type="text" name="articleBody"  tabindex="4" /></div>
					  <div class="label">&nbsp;</div>
					  <div class="input">
						<input type="reset" name="reset"  value="Reset" tabindex="5" />
						<input type="submit" name="submit" value="Submit" tabindex="6" />
					  </div>
					</form>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
	</div>
	<div id="footer" class="container">
		<p>&copy; 2019. Designed by Dean Jeffery</p>
	</div>
</body>
</html>
