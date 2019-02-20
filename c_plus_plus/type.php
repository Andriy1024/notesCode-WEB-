<!DOCTYPE html>
<html>
<head>
	<title>Типи даних</title>
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
		<center><h1>Типи даних</h1></center>
		<br>
		<p>Обробка даних різного типу є головною метою будь-якої програми. Кожне з даних характеризується класом пам’яті, ім’ям, типом і значенням. Імена дозволяють ідентифікувати дані, тобто відрізняти їх між собою. Програміст обирає тип кожної величини, що використовується для подання реальних об’єктів. Тип задає множину можливих значень даних і способи їх зберігання, перетворення та використання.</p>
		<p> <b>Обов’язкове оголошення типу даних дозволяє</b> компілятору робити перевірку допустимості різних конструкцій програми.</p>
		<p>Усі типи даних мови C++ можна розділити на <b>основні</b> (базові) і <b>складені</b>. Основні типи визначені для представлення цілих, дійсних, символьних і логічних даних. На основі цих типів вводиться опис складених типів, до яких належать масиви, перелічення, функції, структури, посилання, покажчики, об’єднання і класи.</p>
		<p><b>Основні типи даних</b>  часто називають арифметичними, тому що їх можна використовувати в арифметичних операціях. Для опису основних типів мови C++ використовують такі службові слова:</p>
		<ul>
			<li><b>- int</b> (цілий);</li>
			<li><b>- char</b> (символьний);</li>
			<li><b>- bool</b> (логічний);</li>
			<li><b>- float</b> (дійсний);</li>
			<li><b>- double</b> (дійсний з подвійною точністю);</li>
			<li><b>- void</b> (порожній, не має значення).</li>
		</ul>
		<p>Типи <b>int</b>, <b>char</b>, <b>bool</b> називають <b>цілими</b>, а типи <b>float</b> та <b>double — дійсними з плаваючою крапкою</b>. Код, що формує компілятор для обробки цілих величин, відрізняється від коду для величин з плаваючою крапкою.</p>
		<p>Для уточнення внутрішнього подання та діапазону значень стандартних типів <b>мова C++ використовує чотири специфікатори типу:</b></p>
		<ul>
			<li><b>- short</b> (короткий);</li>
			<li><b>- long</b> (довгий);</li>
			<li><b>- signed</b> (знаковий);</li>
			<li><b>- unsigned</b> (беззнаковий).</li>
		</ul>

		<p>Тип: <b>bool</b>, розмір байт <b>1</b> , значення <b>true або false</b></p>
		<p>Тип: <b>unsigned short int</b>, розмір байт <b></b> , значення <b></b></p>
		<p>Тип: <b>short int</b>, розмір байт <b>2</b> , значення <b>від 0 до 65 535</b></p>
		<p>Тип: <b>unsigned long int</b>, розмір байт <b>4</b> , значення <b>від 0 до 4 294 967 295</b></p>
		<p>Тип: <b>long int</b>, розмір байт <b>4</b> , значення <b>від -2 147 483 648 до 2 147 483 647</b></p>
		<p>Тип: <b>int (16 розрядів)</b>, розмір байт <b>2</b> , значення <b>від -32 768 до 32 767</b></p>
		<p>Тип: <b>int (32 розряди)</b>, розмір байт <b>4</b> , значення <b>від -2 147 483 648 до 2 147 483 647</b></p>
		<p>Тип: <b>unsigned int (16 розрядів)</b>, розмір байт <b>2</b> , значення <b>від 0 до 65 535</b></p>
		<p>Тип: <b>unsigned int (32 розрядів)</b>, розмір байт <b>4</b> , значення <b>від 0 до 4 294 967 295</b></p>
		<p>Тип: <b>char</b>, розмір байт <b>1</b> , значення <b>від 0 до 256</b></p>
		<p>Тип: <b>float</b>, розмір байт <b>4</b> , значення <b>від 1.2е-38 до 3.4е38</b></p>
		<p>Тип: <b>double</b>, розмір байт <b>8</b> , значення <b></b></p>
		<p>Тип: <b>long double</b>, розмір байт <b>10</b> , значення <b>від 3.4е-4932 до 3.4е+4932</b></p>
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