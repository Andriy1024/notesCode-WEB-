<!DOCTYPE html>
<html>
<head>
	<title>Qt Designer</title>
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
        <center><h1>Знайомство з Qt Designer</h1></center>
        <br>
        <p>Qt Designer - кроссплатформенная вільне середовище для розробки графічних інтерфейсів (GUI) програм використовують бібліотеку Qt. Входить до складу Qt framework [1].</p><br>
        <img src="images/designer.png"><br>
        <h2>Короткий опис</h2>
        <p>Qt Designer дозволяє створювати графічні інтерфейси користувача за допомогою ряду інструментів. Існує панель інструментів «Панель віджетів», в якій доступні для використання елементи інтерфейсу - віджети, такі як, наприклад, «випадає» ComboBox, «поле введення» LineEdit, «кнопка» PushButton і багато інших. Кожен віджет має свій набір властивостей, що визначається відповідним йому класом бібліотеки Qt. Властивості віджета можуть бути змінені за допомогою «Редактора властивостей». Для кожного класу властивостей віджета існує свій спеціалізований редактор [2]. Характерною особливістю Qt Designer є підтримка візуального редагування сигналів і слотів. Так, наприклад, можна зв'язати сигнал, що генерується з переключення стану віджета CheckBox зі слотом відповідає за доступність іншого віджета.</p>
        <p>Qt Designer може бути запущений як окремий додаток, так і у вбудованому в IDE Qt Creator вигляді.</p>
        <h2>Формат файлу з інтерфейсом</h2>
        <p>Розроблений інтерфейс зберігається в файл з розширенням ui, який підключається до створюваної програмі за допомогою спеціальних методів бібліотеки Qt. Цей файл має xml-формат, і може, в разі необхідності, редагуватися в будь-якому текстовому редакторі.</p>
        <h2>Інтерфейси мобільних пристроїв</h2>
        <p>Qt Designer застосовується не тільки для розробки десктопних додатків, але і для створення графічних інтерфейсів користувача в мобільних пристроях [3]. Для цього існує спеціальна бібліотека Qt Quick [4].</p>
        <h2>Qt Designer's Widget Box</h2>
        <p>Вікно віджета забезпечує вибір стандартних віджетів Qt, макетів та інших об'єктів, які можна використовувати для створення користувацьких інтерфейсів у формах. Кожна з категорій у полі віджету містить віджети зі схожими цілями або пов'язаними з ними функціями.</p>
        <p>Примітка. З Qt 4.4 нові widgets були включені, наприклад, QPlainTextEdit, QCommandLinkButton, QScrollArea, QMdiArea та QWebView.</p>
        <p>Ви можете відобразити всі доступні об'єкти в категорії, натиснувши ручку поруч із міткою категорії. Коли в режимі редагування віджетів ви можете додати об'єкти до форми, перетягуючи відповідні елементи з вікна віджету до форми та видаливши їх у потрібних місцях.</p>
        <p>Qt Designer забезпечує функцію подряпини, яка дозволяє збирати часто використовувані об'єкти в окремій категорії. Категорію клавіатури можна заповнити будь-яким віджетом, який зараз відображається у формі, перетягнувши їх з форми та видаливши їх у вікно віджетів. Ці віджети можна використовувати так само, як і будь-які інші віджети, але вони також можуть містити дитячі віджети. Відкрийте контекстне меню через віджет, щоб змінити його назву або видалити його з нуля.</p><br>
        <img src="images/widget-box.png"><br>
        <h2>Концепція компонування в Qt</h2>
        <p>Макет використовується для упорядкування та керування елементами, які складають інтерфейс користувача. Qt надає ряд класів для автоматичної обробки макета - QHBoxLayout, QVBoxLayout, QGridLayout і QFormLayout. Ці класи вирішують завдання викладання віджетів автоматично, забезпечуючи користувальницький інтерфейс, який веде себе передбачувано. На щастя, знання класів макета не вимагають розташування віджетів за допомогою Qt Designer. Замість цього виберіть контекстне меню одного з варіантів "Вирівнювання з горизонталі", "Вирівняти в таблиці" та ін. ".</p>
        <p>Кожен віджет Qt має рекомендований розмір, відомий як sizeHint (). Менеджер макета намагатиметься змінити розмір віджету, щоб відповідати розміру підказки. У деяких випадках немає необхідності мати інший розмір. Наприклад, висота QLineEdit завжди є фіксованим значенням залежно від розміру шрифту та стилю. В інших випадках, можливо, вам знадобиться змінити розмір, наприклад, ширину QLineEdit або віджетів перегляду ширини та висоти. Тут починають грати обмеження розміру віджета - обмеження мінімального розміру та максимального розміру. Це властивості, які ви можете встановити в редакторі властивостей. Наприклад, щоб перевизначити розмір по умолчанию sizeHint (), просто встановіть мінімальний розмір і максимальний розмір до одного значення. Крім того, щоб використовувати поточний розмір як значення обмеження розміру, виберіть контекстне меню віджета один з параметрів обмеження розміру. Макет потім забезпечить, щоб ці обмеження були виконані. Щоб контролювати розмір віджетів за допомогою коду, ви можете повторно виконати розмір () у вашому коді.</p>
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