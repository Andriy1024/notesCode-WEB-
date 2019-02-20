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
<?php  if(isset($_SESSION['logged_user'])) : ?>
    <div class="user">
        <h1>Profile</h1>
        <p>Name: <?php echo $_SESSION['logged_user']->name;?></p>
        <p>Secondname: <?php echo $_SESSION['logged_user']->secondname;?></p>
		<p>Login: <?php echo $_SESSION['logged_user']->login;?></p>
		<p>Тест з С++: Правильних відповідей <?php echo $_SESSION['logged_user']->test_c;?></p>
        <a href="../php/logout.php">Log out</a>
    </div>
<?php else : ?>
<?php header("location: index.php");?>
<?php endif; ?>
</main>
	<?php require "bottom.php";?>	
</body>
</html>