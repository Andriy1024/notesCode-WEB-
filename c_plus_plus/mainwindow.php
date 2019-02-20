<!DOCTYPE html>
<html>
<head>
	<title>QMainWindow</title>
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
        <center><h1>Клас головного вікна QMainWindow</h1></center>
        <br>
        <p>QMainWindow - це дуже важливий клас, який реалізує головне вікно, що містить в собі типові віджети, необхідні більшості додатків, такі як меню, секції для панелей інструментів, робочу область, рядка стану. В цьому класі зовнішній вигляд вже підготовлений і його віджети не потребують додаткового розміщення, так як вони вже знаходяться в потрібних місцях.</p>
        <p>Вікно додатка, зображене на малюнку, має рамку, область заголовка для відображення імені і три кнопки, що керують вікном. Крім цього, вікно програми має меню, яке розташовується нижче області заголовка вікна. Панель інструментів розташована під меню. Під робочою областю розташований рядок стану.</p>
        <p>Покажчик на віджет меню можна отримати викликом методу QMainWindow :: menuBar () і встановити в ньому потрібні спливаючі меню:</p>
        <pre><code class="cpp">QMenu* pmnuFile = new QMenu("&File") ;   

       pmnuFile->addAction("&Save");   

       menuBar()->addMenu(pmnuFile);  </code></pre>
        <br><img src="images/mainwindow.png"><br>
        <p>Як правило, встановлюються такі спливаючі меню:</p>
        <p> File (Файл) - містить основні операції для роботи з файлами: New (Створити) Open (Відкрити), Save (Зберегти), Print (Друк) і Quit (Вихід);</p>
        <p> Edit (Правка) - містить команди загального редагування: Cut (Вирізати), Сміттю (Копіювати), Paste (Вставити); Undo (Скасувати), Redo (Повторити), Find (Знайти), Replace (Замінити) і Delete (Очистити);</p>
        <p> View (Вид) - містить команди, що змінюють уявлення даних вікна. Наприклад, команда Zoom (Масштаб) масштабує відображення документа. У цей меню можна включати і ті команди, які керують відображенням елементів інтерфейсу програми, наприклад: панелі інструментів і рядка стану;</p>
        <p> Help (Довідка) - необхідна для надання допомоги користувачеві, при освоєнні програми. А також, звичайно, включає в себе інформацію про авторські права додатки. Наприклад, при виборі команди About (Про програму) з'явиться вікно, що відображає назва програми, його версію, інформацію про авторські права.</p>
        <p>Щоб отримати покажчик на робочу область, слід викликати метод QMainWindow :: centralWidget (), який поверне покажчик на QWidget. Для установки віджета робочої області буде потрібно викликати метод QMainWindows :: setCentralWidget () і передати в нього покажчик на цей віджет.</p>
        <p>Метод QMainWindow :: statusBar () повертає покажчик на віджет рядки стану. Кнопка зміни розмірів вікна, розташована в нижньому правому куті рядка стану, є всього лише підказкою для користувача, що повідомляє про те, що розміри головного вікна можуть бути змінені. Цей віджет реалізований в класі QSizeGrip. Отримати покажчик на нього з класу головного вікна (QMainWindow) неможливо, так як він знаходиться під контролем віджета рядки стану.</p>
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