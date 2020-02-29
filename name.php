<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
//Include db connection file
include_once('inc/connection.inc.php');

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
				<h2 class="title">Search</h2>
          <form id="register" name="register" method="post" action="display.php?$articleAuthor = $articleAuthor">
					  <div class="label"><label for="search">Search by author name</label></div>
					  <div class="input"><input type="text" name="searchAuthor"  tabindex="1" /></div>
					  <br />
					  <div class="input">
						<input type="reset" name="reset"  value="Reset" tabindex="2" />
						<input type="submit" name="submit" value="Submit" tabindex="3" />
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
