<!DOCTYPE html>
<html>
<head>
	<title>Mодулі Qt</title>
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
        <center><h1>Mодулі Qt</h1></center>
        <br>
        <p>Qt 4 складаєтьсaя з декількох модулів, кожен з яких знаходиться в окремій бібліотеці.</p>
        <p>Модулі для розробки загального програмного забезпечення:</p>
        <p> QtCore - Ядро НЕ-графічних класів, використовуваних іншими модулями</p>
        <p> QtGui - Компоненти графічного призначеного для користувача інтерфейсу (GUI)</p>
        <p> QtNetwork - Класи для програмування мережевих додатків</p>
        <p> QtOpenGL - Класи, що підтримують OpenGL</p>
        <p> QtScript - Класи для роботи з Qt Scripts</p>
        <p> QtScriptTools - Додаткові компоненти Qt Script</p>
        <p> QtSql - Класи для роботи з базами даних, що використовують SQL</p>
        <p> QtSvg - Класи для відображення вмісту SVG-файлів</p>
        <p> QtWebKit - Класи для відображення і редагування вмісту веб-сторінок</p>
        <p> QtXml - Класи для обробки XML</p>
        <p> QtXmlPatterns - Механізм XQuery & XPath для XML і призначених для користувача моделей даних</p>
        <p> Phonon - Класи мультимедійного каркасу</p>
        <p> Qt3Support - Класи сумісності з Qt 3</p>
        <p>Модулі для роботи з інструментами Qt:</p>
        <p> QtDesigner - Класи для розширення Qt Designer</p>
        <p> QtUiTools - Класи для обробки форм Qt Designer в додатку </p>
        <p> QtHelp - Класи для онлайнових підказок</p>
        <p> QtAssistant - Підтримка онлайнових підказок</p>
        <p> QtTest - Класи інструментів для тестування модулів</p>
        <p>Наступні модулі розширення доступні в Qt Commercial Editions для Windows:</p>
        <p> QAxContainer - Розширення, що дозволяє працювати з елементами управління ActiveX</p>
        <p> QAxServer - Розширення для створення ActiveX-серверів</p>
        <p>Наступний модуль розширення доступний у всіх Qt Editions на Unix платформах:</p>
        <p> QtDBus - Підтримка взаємодії між процесами через інтерфейс D-Bus</p>
        <p>Якщо для створення ваших проектів ви використовуєте qmake, то модулі QtCore і QtGui включаються в проект за замовчуванням. Для складання проекту тільки з QtCore, додайте в ваш .pro-файл такий рядок:</p>
        <pre><code class="cpp">QT -= gui</code></pre>
        <p>У Windows, якщо ви не використовуєте qmake, Visual Studio Integration, доступний за комерційним ліцензіями, або інші інструменти для збірки, такі як CMake, вам необхідно також прілінкованние бібліотеку qtmain.</p>
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