<?php
session_start();

include_once('inc/connection.inc.php');
 ?>
<html lang="en" dir="ltr">
<head>
	<title>This is a blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css">
	<link href="css/master.css" rel="stylesheet" type="text/css" />
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
				<?php
        $num = mysqli_num_rows($result);
        for ($i=0; $i < $num; $i++)
        {
          $row = $result->fetch_assoc();
       ?>
          <div class="blog-container">
            <section class="display-title">
              <?php
              echo "<h3>Title: ";
            echo $row['articleTitle'];
            echo "</h3>";
            echo "<h4>Author: ";
            echo $row['articleAuthor'];
            echo "</h4>";
            echo "<p>Date Published: ";
            echo $row['articleDate'];
            echo "</p>";
            echo $row['articleBody']; ?>
            </section>
<?php
}
 ?>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<!-- LOGIN FORM -->
		<div id="sidebar">
			<?php
            if (isset($_SESSION['logged'])) {
                ?>
			<form class="login-form" name="register" method="post" action="submit">
				<?php echo '<h1>' .'Welcome: ' .$_SESSION['email']. '</br>'.' You have been logged in'.'</h1>'; ?>
				<p class="">
					<input type="button" name="submit" value="profile" />
				</p>
				<p class="">
					<input type="button" name="submit" value="UPLOAD BLOG!!!!!!" />
				</p>
				<p class="">
					<a href="logout.php"><input type="button" name="submit" value="logout"/></a>
				</p>
			</form>
			<?php
            } else {
                ?>
			<div id="login">
				<form class="login-form" name="register" method="post" action="login.php">
					<h2><span class="log-in">Log in</span> or <span class="sign-up"><a href="register.php">sign up</a></span></h2>
					<p class="float">
						<label for="email"><i class="icon-user"></i>Email</label>
						<input type="text" name="email" placeholder="Email">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Password" class="showpassword">
					</p>
					<p>
						<input type="submit" name="submit" value="Log in">
					</p>
				</form>
				<?php
            }
           ?>
			</div>
			<!-- END LOGIN FORM -->
			<ul>
				<li>
					<h2>Blog</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
	</div>
	<div id="footer" class="container">
		<p>&copy; 2019. Designed by Dean Jeffery</p>
	</div>
</body>

</html>
