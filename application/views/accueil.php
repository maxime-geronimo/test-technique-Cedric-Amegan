<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 26/10/2017
 * Time: 9:12 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Accueil desktop facebook connect</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">dsgn.media <span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">pop culture</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">design</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">photography</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">about us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Maxime Jacquet</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="col-md-12">
			<h1>Discover smart news for smart people.</h1>
		</div>

		<div class="col-md-12">
			<h1>Latest news</h1>
		</div>

		<div class="col-md-12">
		</div>

		<div class="col-md-12">
				<?php foreach ($news as $new) {?>
					<div class="col-md-3">
							<li><p style="font-weight: bold;"><?php print_r($new->title) ?></p></li>
							<li><p><?php print_r($new->content) ?></p></li>
							<li><?php print_r($new->mention) ?> likes</li>
							<li><?php print_r($countcomments)?> comments</li>
						</ul>
					</div>
				<?php }?>
		</div>

<!--		<div>-->
<!--			<h2>Comments</h2>-->
<!--			--><?php //foreach ($comments as $comment) {?>
<!--				<ul>-->
<!--					<li>--><?php //print_r($comment->comment)?><!--</li>-->
<!--				</ul>-->
<!--			--><?php //}?>
<!--		</div>-->

	</div>
	</body>
</html>
