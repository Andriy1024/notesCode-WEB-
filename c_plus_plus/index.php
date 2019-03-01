<!DOCTYPE html>
<html>
<head>
	<title>C++</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/reset.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/vs2015.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.shuffleLetters.js"></script>
	<script type="text/javascript" src="../js/script.js" defer></script>
    <script type="text/javascript" src="../js/highlight.pack.js"></script>
	<link href="../img/ICON.ico" rel="shortcut icon" type="image/x-icon">
	<meta charset="utf-8">
</head>
<body>
<?php require "../index/top.php";?>
<main>
	<div class="manual_wrapper">
		<?php require "sidebar.php";?>
        <div class="content_of_manual">
        <?php 
            if (isset($_GET['file']) && file_exists($_GET['file'])) {
                require $_GET['file'];
            } else {
                require "main.php";
            }
        ?>
        <div class="comments">
            <div class="fb-comments"  data-width="100%" data-numposts="5"></div>
            <script>
                var url = location.href;
                var comm = document.getElementsByClassName('fb-comments')[0];
                comm.setAttribute('data-href',url);
            </script>
            </div>
        </div>
    </div>
</main>
<?php require "../index/bottom.php";?>
</body>
</html>