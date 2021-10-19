<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
	<link href="reset.css" rel="stylesheet"/>
	<link href="addentrystyle.css" rel="stylesheet"/>
  </head>
  <body>
	<header>
		<h1><strong> <a href="home.php">Jamal Haruna </a> </strong></h1>
		<h2> Blog Page</h2>
	</header>
		
		<article>
			<section class="BlogPost">
				<?php include 'addPost.php';?>
			</section>
			
			<section class="Blog">
				<div id=\"blogposts\">
					<h2 id="headerPreview">Header</h2>
					<h1 id="datePreview">Date</h1>
					<p id ="entryPreview">Entry</p>
				</div>
				<hr>
			</section>
		
		</article>
	<footer>
		<h2> To help make your way about my page! </h2>
		<nav>
			<ul>
				<li> <a href="home.php#AboutMe"> About Me </a></li>
				<li> <a href="home.php#Education">My Education </a></li>
				<li> <a href="home.php#Experience">My Experience </a></li>
				<li> <a href="home.php#Links">Links and Extras </a></li>
				<li> <a href="blog.php">Blog </a></li>
			</ul>
		</nav>
	</footer>
	<script src="blogScript.js"></script>
  </body>
</html>