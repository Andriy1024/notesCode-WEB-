<!DOCTYPE html>
<html>
<head>
	<title>Клас дати QDate</title>
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
        <center><h1>Клас дати QDate</h1></center>
        <br>
        <p>Додатків часто потрібна інформація про дату і час. Наприклад, для видачі звітної інформації або для реалізації годин. Qt надає для роботи з датою і часом три класи: QDate, QTime і QDateTime, певні в заголовних файлах QDate, QTime і QDateTime.</p>
        <p>Клас QDate є структурою даних для зберігання дат і проведення з ними різного роду операцій. У конструкторі класу QDate передаються три цілочисельних параметра. У першому передається рік, у другому - місяць, а в третьому - день. Наприклад, створимо об'єкт, який буде містити дату 25 жовтня 2004: Додати</p>
        <pre><code class="cpp">QDate date(2007, 10, 25);</code></pre>
        <p>Ці значення можна встановити і після створення об'єкта за допомогою методу setDate (). наприклад:</p>
        <pre><code class="cpp">  QDate date;   
        date.setDate(2007, 10, 25); </code></pre>
        <p>Для отримання значень року, місяця і дня, встановлених в об'єкті дати, слід скористатися наступними методами:</p>
        <p> - year () - повертає цілий рік в діапазоні від 1752 до 8000;</p>
        <p> - month () - повертає ціле значення місяця в діапазоні від 1 до 12 (з січня по грудень);</p>
        <p> - day () - повертає день місяця в діапазоні від 1 до 31.</p>
        <p>За допомогою методу daysInMonth () можна дізнатися кількість днів у місяці, а за допомогою методу daysInYear () - кількість днів в році.</p>
        <p>Для отримання дня тижня слід викликати метод dayOfWeek (). Для отримання дня року служить метод dayOfYear (). Можна також дізнатися номер тижні, для чого потрібно викликати метод weekNumber ().</p>
        <p>Метод toString () дозволяє отримати текстове представлення дати.</p>
        <p>Можна визначити власний формат часу, передавши в метод toString () рядок-шаблон, що описує його. наприклад:</p>
        <pre><code class="cpp">QDate date(2007, 10, 25);   

       QString str;   

       str = date.toString ("d.M.yy"); // str - "3.7.07"   

       str = date.toString ("dd / MM / yy"); // str - "03/07/04"   

       str = date.toString ("yyyy.MMM.ddd"); // str = "2007.іюл.Сб"   

       str = date.toString ("yyyy.MMMM.dddd"); // str = "2007.Іюль.суббота"     </code></pre>
        <p>За допомогою методу addDays () можна отримати змінену дату, додавши або віднявши від неї дні. Дії методів addMonths () і addYears () аналогічні, але різниця в тому, що вони оперують місяцями і роками. наприклад:</p>
        <pre><code class="cpp">QDate date(2007, 1, 3);   

       QDate date2 = date.addDays(-7);   

       QString str = date2.toString("dd/MM/yy"); //str = "27/12/06"  </code></pre>
        <p>Клас QDate надає метод fromString (), що дозволяє проводити зворотне перетворення з строкового типу до типу QDate. Для цього, в першому параметрі методу потрібно передати формат. Одна з найбільш частих операцій - отримання поточної дати. Для цього потрібно викликати метод currentDate ().</p>
        <p>За допомогою методу daysTo () можна дізнатися різницю в днях між двома датами. Наступний приклад визначає кількість днів від поточної дати до Нового року:</p>
       <pre><code class="cpp">QDate dateToday = QDate::currentDate();   

       QDate dateNewYear(dateToday.year(), 12, 31);   

       qDebug () << "Залишилося" << dateToday.daysTo (dateNewYear) << "днів до Нового року";   </code></pre>
       <p>Об'єкти дат можна порівнювати один з одним, для чого в класі QDate визначені оператори ==,! =, <, <=,> І> =. наприклад:</p>
       <pre><code class="cpp">QDate datel(2007, 1, 3);   

       QDate date2(2007, 1, 5);   

       bool b = (datel == date2); //b = false </code></pre>	
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