<!DOCTYPE html>
<html>
<head>
	<title>Клас часу QTime</title>
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
        <center><h1>Клас часу QTime</h1></center>
        <br>
        <p>Контроль над часом - дуже важливе завдання, за допомогою якої можна обчислювати затримки в роботі програми, відображати на екрані поточний час, перевіряти час створення файлів і т. Д.</p>
        <p>Для роботи з часом бібліотека Qt надає клас QTime. Як і у випадку з об'єктами дати, з об'єктами часу можна проводити операції порівняння ==,! =, <, <=,> Або> =. Об'єкти часу здатні зберігати час з точністю до мілісекунд. У конструктор класу QTime передаються чотири параметри. Перший параметр задає годинник, другий - хвилини, третій - секунди, а четвертий - мілісекунди. Третій і четвертий параметри можна опустити, за замовчуванням вони дорівнюють нулю. наприклад:</p>
        <pre><code class="cpp">QTime time(20, 4); </code></pre>
        <p>Ці значення можна встановлювати і після створення об'єкта часу за допомогою методу setHMS (). наприклад:</p>
        <pre><code class="cpp">  QTime time;   
        time.setHMS (20, 4, 23, 3);</code></pre>
        <p>Для отримання значень годин, хвилин, секунд і мілісекунд, встановлених в об'єкті часу, в класі QTime визначені наступні методи:</p>
        <p>hour () - повертає позитивні значення години в діапазоні від 0 до 23;</p>
        <p>minute () - повертає ціле значення, що позначає хвилини, в діапазоні від 0 до 59;</p>
        <p>second () - повертає ціле значення, що позначає секунди, в діапазоні від 0 до 59;</p>
        <p>msec () - повертає ціле значення в діапазоні від 0 до 999, що представляє собою мілісекунди.</p>
        <p>Клас QTime надає метод toString () для передачі даних об'єкта часу у вигляді рядка. У цей метод, як параметр, можна передати одне з форматів часу або задати свій власний. наприклад:</p>
        <pre><code class="cpp">  QTime time(20, 4, 23, 3);   

        QString str;   

        str = time.toString("hh:mm:ss.zzz"); //str = "20:04:23.003"   

        str = time.toString("h:m:s ap"); //str = "8:4:23 pm"   </code></pre>
        <p>За допомогою статичного методу fromString () можна зробити перетворення з строкового типу в тип QTime. Для цього, в першому параметрі методу потрібно передати одне зі значень форматів.</p>
        <p>Отримати змінений об'єкт часу можна, додавши або віднявши значення секунд (або мілісекунд) від існуючого об'єкта. Ці значення передаються в методи addSecs () і addMSecs (). Для отримання поточного часу в класі QTime міститься статичний метод currentTime ().</p>
        <p>За допомогою методу start () можна почати відлік часу, а для того щоб дізнатися скільки часу пройшло з моменту початку відліку, слід викликати метод elapsed (). Наприклад, на базі цих методів можна зробити невеликий профайлер.</p>
        <p>Наступний приклад обчислює час роботи функції test ():</p>
        <pre><code class="cpp">  QTime time;   

        time.start () ;   

        test();   

        qDebu</code></pre>
        <p>Недолік класу QTime полягає в обмеженні 24-годинним інтервалом, після закінчення якого відлік буде проводитися з нуля. Для вирішення цієї проблеми можна скористатися класом QDateTime.</p>
        <p>Об'єкти класу QDateTime містять в собі дату і час. Викликом методу date () можна отримати об'єкт дати QDate, а виклик time () повертає об'єкт часу QTime. Цей клас також містить методи toString () для представлення даних у вигляді рядка.</p>
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