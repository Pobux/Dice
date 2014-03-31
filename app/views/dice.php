<?php

/* 
 * Auteur : Antoine LeBel - 27-Mar-2014
 */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	
	<title></title>
	
	<meta name="description" content=""/>
	<meta name="robots" content="index, follow, all"/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	
	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons
	<link rel="shortcut icon" href=".ico">
	<link rel="apple-touch-icon" href="">
	<link rel="apple-touch-icon" sizes="72x72" href="72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="114x114.png">
	 -->

</head>

<body>
<img class="img-sharing" src="img/moon.png" alt="The moon">
<div class="bg">

<!-- TOP -->
	<div id="top-section" class="top">
		<header class="container">
			<h1>What are you doing tonight ?</h1>
		</header>
		<div class="spacer"></div>
		<div class="button-wrap">
			<a href="#mid-section">Tap</a>
		</div>
	</div>

<!-- MID -->
	<div id="mid-section" class="mid">
		<div id="teaser" class="teaser-wrap">
			<h2>Use <br> Dice!</h2>
			<img src="img/arrow-full.png" alt="use dice tonight">
		</div>


		<!-- stay as a square with jquery, when reloaded! -->
		<div id="dice" class="dice"><p id="choice"><p></div>
		
		<p id="motivation"></p>
		
		<div id="after-roll" class="button-wrap">
			<a href="#end-section">OK</a>
		</div>
	</div>

<!-- END -->
<div id="end-section" class="end">
	<section>
		<div>
			<h3>What others are doing</h3>
			<a id="link-one" class="quote-link-wrapper" href="">
				<blockquote>Making supper for my girlfriend</blockquote>
				<cite>Jenny, QC</cite>
			</a>
			<a id="link-two" class="quote-link-wrapper" href="">
				<blockquote>Oiling my chest for some dancing!</blockquote>
				<cite>Brad, SA</cite>
			</a>
		</div>
	</section>
	<section>
		<div>
			<h3>What will you do?</h3>
			<input type="text" name="userDo" placeholder="Tonight, I will...">
			<input type="submit" value="connect">
			<br class="clear">
		</div>
	</section>
	<section>
		<div>
			<h3>Suggestions</h3>
			<a id="pub-one" class="quote-link-wrapper" href="">
				<blockquote>Buy a book get one free</blockquote>
				<cite>Bookstore LA</cite>
			</a>
			<a id="pub-two" class="quote-link-wrapper" href="">
				<blockquote>Tonight at 8 : WALKING DEAD</blockquote>
				<cite>AMC</cite>
			</a>	
		</div>
		
	</section>
</div>

</div>
<!-- JS-->

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/script.js"></script>

</html>