<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
	<link href="reset.css" rel="stylesheet"/>
	<link href="blogstyle.css" rel="stylesheet"/>
  </head>
  <body>
	<header>
		<h1><strong> <a href="home.php">Jamal Haruna </a> </strong></h1>
		<h2> Blog Page</h2>
	</header>
	<article>
		
		<div class="addButton">
			<a href="addEntry.php"> + </a>
		</div>
		
		<section class="Blog">
			<form method = "POST" id = "monthSelector">
				<select name = "month" onchange="this.form.submit()">
					<option value="" disabled selected>Select your month</option>
					<option value="-1"> Any </option>
					<option value="1"> January </option>
					<option value="2"> February </option>
					<option value="3"> March </option>
					<option value="4"> April </option>
					<option value="5"> May </option>
					<option value="6"> June </option>
					<option value="7"> July </option>
					<option value="8"> August </option>
					<option value="9"> September </option>
					<option value="10"> October </option>
					<option value="11"> November </option>
					<option value="12"> December </option>
				</select>
			</form>
			<?php include 'viewBlog.php'; ?>
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
				<li> <a href="#">Blog </a></li>
			</ul>
		</nav>
	</footer>
	<script src="blogScript.js"></script>
  </body>
</html>