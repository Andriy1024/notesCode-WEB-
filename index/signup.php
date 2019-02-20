<!DOCTYPE html>
<html>
<head>
	<title>notesCode</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/reset.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.shuffleLetters.js"></script>
	<script type="text/javascript" src="../js/script.js" defer></script>
	<link href="../img/ICON.ico" rel="shortcut icon" type="image/x-icon">
	<meta charset="utf-8">
</head>
<body>
<?php require "top.php";?>
<main>
    <div class="wrapper reg">
		<h1>Registration</h1>
		<h2  style="<?php echo @$_SESSION['color'];?> font-size: 30px;"> <?php echo @$_SESSION['mess']; unset($_SESSION['mess']);?></h2>
		<form action="../php/signup_cod.php" method="post">
			<label>Your name:<br><input type="text" name="name" placeholder="name"  required></label>
			<label>Your secondname:<br><input type="text" name="secondname" placeholder="secondname"  required></label>
			<label>Login:<br><input type="text"  name="login" placeholder="login"  required></label>
			<label>Your password:<br><input type="text" name="password" placeholder="password"  required></label>
			<label>Enter password again:<br><input type="text" name="password_2" placeholder="password"  required></label>
			<button type="submit" name="do_signup">Sign up</button>
		</form>
    </div>
</main>
<?php require "bottom.php";?>
</body>
</html>