<!DOCTYPE html>
<html>
<head>
	<title>WebKit</title>
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
        <center><h1>WebKit в Qt</h1></center>
        <br>
        <p>Модуль QtWebKit надає механізм веб-браузера, а також класи для візуалізації та взаємодії з веб-контентом.</p>
        <h2>Класи</h2>
        <p> QWebDatabase - Доступ до баз даних HTML 5, створеним за допомогою JavaScript</p>
        <p> QWebElement - Зручний доступ до елементів DOM в QWebFrame</p>
        <p> QWebFrame - Являє фрейм в веб-сторінці</p>
        <p> QWebHistory - Представляє історію QWebPage</p>
        <p> QWebHistoryInterface - Інтерфейс до інструменту історії посилань</p>
        <p> QWebHistoryItem - Представляє один елемент в історії QWebPage</p>
        <p> QWebHitTestResult - Інформація про вміст веб-сторінки після перевірки наявності (hit test)</p>
        <p> QWebInspector - Дозволяє розміщення і контроль за інспектором QWebPage'а. Інспектор може виводити на екран ієрархію сторінки, статистику завантаження і поточний стан окремих елементів сторінки. Головним чином він використовується веб-розробниками</p>
        <p> QWebPage - Об'єкт для перегляду і редагування веб-документів</p>
        <p> QWebPluginFactory - Використовується для вбудовування користувацьких типів даних в веб-сторінки</p>
        <p> QWebSecurityOrigin - Визначає межі безпеки для веб-сайтів</p>
        <p> QWebSettings - Об'єкт для збереження налаштувань, які використовуються QWebPage і QWebFrame</p>
        <p> QWebView - Віджет, який використовується для перегляду і редагування веб-документів</p>
        <h2>Докладний опис</h2>
        <p>QtWebKit надає механізм веб-браузера, який робить легким вбудовування контенту з всесвітньої павутини в ваше додаток Qt. Одночасно веб-контент може бути розширений за допомогою елементів управління, властивих даній системі.</p>
        <p>QtWebKit надає можливості візуалізації документів HyperText Markup Language (HTML), Extensible HyperText Markup Language (XHTML) і масштабованої векторної графіки (Scalable Vector Graphics, SVG), застосовувати стилі з використанням каскадних таблиць стилів (Cascading Style Sheets, CSS) і розширювати сценаріями за допомогою JavaScript.</p>
        <p>Міст між середовищем виконання JavaScript і об'єктної моделлю Qt уможливлює розширення сценаріями і для об'єктів QObjects. Детальний опис дивіться в Міст QtWebkit. Інтеграція з модулем роботи з мережею Qt уможливлює прозору завантаження веб-сторінок з веб-серверів, з локальної файлової системи або навіть з системи ресурсів Qt.</p>
        <p>Крім того надаючи чисті засоби візуалізації можна зробити документи HTML повністю редаговані користувачами за допомогою використання атрибута contenteditable елементів HTML.</p>
        <p>QtWebKit заснований на механізмі з відкритими початковими кодами WebKit. Знайти додаткову інформацію про самому WebKit можна на веб-сайті Проекту з відкритими початковими кодами WebKit.</p>
        <h2>Включення в ваш проект</h2>
        <p>Для включення визначень класів цього модуля використовуйте наступну директиву:</p>
        <pre><code class="cpp"> #include < QtWebKit >  </code></pre>
        <p>Для лінковки додатки з цим модулем, додайте в ваш qmake файл проекту .pro:</p>
        <pre><code class="cpp">  QT += webkit   </code></pre>
        <h2>Зауваження</h2>
        <p>Зауваження: Збірка модуля QtWebKit з налагоджувальними символами є проблематичним на багатьох платформах через розмір движка WebKit. Ми рекомендуємо збирати модуль для вбудованих платформ тільки в режимі релізу. В даний час при використанні gcc QtWebKit завжди компілюється з налагоджувальними символами. Вивчіть останні рядки src / 3rdparty / webkit / WebCore / WebCore.pro, якщо вам потрібно це змінити.</p>
        <p>Зауваження: Піктограми сайтів, відомі також як "FavIcons", в даний час не підтримуються під Windows. Ми плануємо повернутися до цього в наступних випусках.</p>
        <p>Зауваження: WebKit має деякі мінімальні вимоги, які повинні виконуватися на вбудованих Linux-системах. Для отримання додаткової інформації зверніться до документа Вимоги Qt для вбудованих Linux-систем.</p>
        <h2>Aрхітектура</h2>
        <p>Найлегший спосіб візуалізувати контент - через клас QWebView. Як віджет він може бути вбудований у ваші форми або графічне представлення, і він надає допоміжні функції для скачування і візуалізації веб-сайтів.</p>
        <pre><code class="cpp"> QWebView *view = new QWebView(parent);   

        view->load(QUrl("http://qt.nokia.com/"));   

        view->show();</code></pre>
        <p>QWebView використовується для перегляду веб-сторінок. Примірник класу QWebView містить один об'єкт QWebPage. QWebPage надає доступ до структури документа сторінки, описуючи можливості, такі як фрейми, історія переміщення і стек скасування / повтору команд для редагованого контенту.</p>
        <p>Документи HTML можуть вкладені одна в одну з використанням фреймів в наборі фреймів. Окремий кадр в HTML представляється використовуючи клас QWebFrame. Цей клас містить міст до об'єкту вікна JavaScript і може бути відмалювали з використанням QPainter. Кожна QWebPage має один об'єкт QWebFrame в якості головного фрейму, а головний фрейм може містити безліч дочірніх фреймів.</p>
        <p>Окремі елементи документа HTML можуть бути доступні через інтерфейси DOM JavaScript зсередини веб-сторінки. Еквівалентом цього API в QtWebKit є уявлення QWebElement. Об'єкти QWebElement отримують використовуючи функції QWebFrame'а findAllElements () і findFirstElement () із запитами селектора CSS.</p>
        <p>Загальноприйняті можливості браузера, налаштування за замовчуванням і інші настройки можна конфігурувати за допомогою класу QWebSettings. Можна надати умовчання для всіх екземплярів класу QWebPage за допомогою налаштувань за замовчуванням. Окремі атрибути можуть бути перевантажені об'єктом налаштувань індивідуальним сторінки.</p>
        <h2>Підтримка модуля Netscape</h2>
        <p>Зауваження: Підтримка модуля Netscape доступна тільки на настільних платформах.</p>
        <p>Так як WebKit підтримує API модуля, додатки Qt можуть виводити на екран веб-сторінки, в які впроваджені поширені модулі. Щоб включити підтримку модуля у користувача повинні бути встановлені відповідні виконавчі файли цих модулів, а для додатка повинен бути включений атрибут QWebSettings :: PluginsEnabled.</p>
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