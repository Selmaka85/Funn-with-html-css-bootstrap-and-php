<!DOCTYPE html>
<html lang="en">
<?php require_once ('functions.php'); ?>
<head>
<meta charset="utf-8">
<title>Just test knowledge</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
<h1 class="text-center bg bg-success">This is just a test to check my knowledge!</h1>
</header>
<nav class="nav navbar-nav text-center bg bg-warning">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Contact</a></li>
</ul>
</nav>
<article>
<section>
<br>
<hr>
<form class="text-center" action="" method="post">
<div class="form-group">
<input type="email" name="username" placeholder="Please enter username">
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Please enter password ">
</div>
<div class="form-group">
<input type="password" name="retypepassword" placeholder="Please retype password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</form>
</section>
</article>
<aside>
<h2 class="text-center answer"><?php submitData(); ?></h2>
</aside>
<footer>
</footer>
</body>
</html>