<!DOCTYPE html>
<html>
<head>
	<title>Оператори C++</title>
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
	<?php require "top.php";?>
	<main>
	<div class="manual_wrapper">
		<?php require "sidebar.php";?>
        <div class="content_of_manual">
		<center><h1>Оператори C++</h1></center>
			<br>
			<h2>Оператор присвоєння</h2>
			<pre><code class="cpp"> name = value or name;  </code></pre>
			<p>Оператор присвоювання вимагає, щоб ідентифікатор (name) на лівій стороні був неконстантной змінної. Тобто, його значення може бути змінено за допомогою виразу, справа.</p>
			<h2>Перевірте рівність</h2>
			<pre><code class="cpp"> name1 == name2  </code></pre>
			<p>Знак <b>==</b> використовується для порівняння значень стандартних типів даних, таких як: <b>char, int, double,</b> і т.д. Оператор порівняння повертає істину, якщо дві змінні рівні. Якщо оператор порівняння застосувати до масивів або рядках, то результат ви отримаєте найнесподіваніший, тому, що він порівняє обсяги пам'яті, які вони займають, а елементи масивів порівнювати ні буде.</p>
			<h2>Логічне АБО</h2>
			<pre><code class="cpp"> bollValue1 || bollValue2;</code></pre>
			<p>Логічне АБО | | повертає істину, якщо один або обидва значення істинні, в іншому випадку – брехня.</p>
			<h2>Логічне І</h2>
			<pre><code class="cpp"> bollValue1 && bollValue2;</code></pre>
			<p>Логічне І повертає істину, якщо обидва умови істинні, в іншому випадку – брехня.</p>
			<h2>Логічне НЕ</h2>
			<pre><code class="cpp"> !boolValue;</code></pre>
			<p>Повертає протилежне значення. Наприклад, !0 – правда. Подробно про використання логічних операцій в С ви можете прочитати у нас на сайті.</p>
			<h2>Бінарне І</h2>
			<pre><code class="cpp"> intValue & intValue;</code></pre>
			<p>Бінарне І це логічна операція, яка оперує окремими бітами з двох своїх аргументів. Якщо біти обох аргументів встановлені в 1, то і результат 1, в іншому випадку – 0.<br> Наприклад, 0010 і 0110 повертається 0010.</p>
			<h2>Бінарне АБО</h2>
			<pre><code class="cpp"> intValue || intValue;</code></pre>
			<p>Бінарне АБО – побітовий оператор, який оперує окремими бітами з двох своїх аргументів. Якщо один з бітів у двох її аргументах дорівнює 1, то результат дорівнює 1. В іншому випадку, якщо обидва біти рівні 0, то результат – 0.</p>
			<h2>Тернарний оператор</h2>
			<pre><code class="cpp"> (condition) ? (true-сode) : (false-code);</code></pre>
			<p>Тернарний оператор дозволяє виконувати різні коди залежно від значення умови, і результатом вираження є результат виконання коду.</p>
			<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
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
	<?php require "bottom.php";?>
</body>
</html>