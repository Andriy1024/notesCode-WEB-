<!DOCTYPE html>
<html>
<head>
	<title>QFile </title>
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
        <center><h1>QFile і файли. Читання і запис рядків у файл.</h1></center>
        <br>
        <p>На сьогоднішній день переважна більшість комп'ютерних програм працюють з файлами, а тому важливо вміти користуватися функціями або класами, які дозволяють відкривати і закривати, записувати і зчитувати інформацію з файлів. У цій статті я трохи розповім про файлах і про клас QFile, а також покажу приклад використання цього класу.</p>
        <h2>Файл, повні і відносні імена файлів</h2>
        <p>Файл - це іменована область даних, яка зберігається на накопичувачі інформації. Тобто зрозуміло, що на накопичувачі є ділянка пам'яті, який містить послідовність біт, у цієї ділянки є своє унікальне ім'я (приклад: /home/nick/Desktop/file.txt або C: \\ Downloads \ file.txt - це повні імена файлів). На ім'я можна звертатися до цієї ділянки пам'яті.</p>
        <p>Існує таке поняття, як відносне ім'я файлу. Відносне ім'я файлу не містить повного шляху до нього. Його ім'я по відношенню до поточної робочої директорії, наприклад з якої запущена програма, яка працює з файлами.</p>
        <p> . - це посилання, яка містить адресу на поточну директорію</p>
        <p> .. — это ссылка, которая содержит адрес на предыдущую директорию</p>
        <p>Якщо ми хочемо звернутися до файлу /text.txt, перебуваючи в директорії / etc /, то необхідно писати ../text.txt</p>
        <p>Якщо до файлу в поточному каталозі, то text.txt або ./text.txt</p>
        <p>Зазвичай, коли говорять про ім'я файлу, то мають на увазі ту частину, де опущений повний шлях до нього, тобто просто file.txt. Шлях до файлу і повне ім'я файл поняття взаємозамінні.</p>
        <p>Більш детальну інформацію про файлах можна знайти в мережі.</p>
        <h2>QFile і приклади використання</h2>
        <p>Клас QFile успадковує клас QIODevice, який для роботи з файлами надає методи: відкриття і закриття файлів, для запису і читання з файлу, для створення і видалення файлів.</p>
        <p>Щоб створити об'єкт для роботи з файлом, потрібно передати в конструктор ім'я файлу.</p>
        <pre><code class="cpp">   QFile file("myfile.txt");  </code></pre>
        <p>Можна не передавати ім'я файлу в конструктор, а встановити його в об'єкті методом setName ().</p>
       <pre><code class="cpp"> QFile file;   
        file.setName("myfile.txt");   </code></pre>
        <p>Часто при роботі з файлами потрібно дізнатися, чи відкритий файл. Метод QIODevice :: isOpen () повертає значення true, якщо файл відкритий і false в іншому випадку. А так як QFile успадкований від нього, то ми можемо перевірити, чи відкритий файл.</p>
       <pre><code class="cpp">QFile file("myfile.txt");   

       if(file.isOpen)   

       {   

            qDebug() << "File is open";   

       }   </code></pre>
        <p>Для закриття файлу потрібно викликати метод QFile :: close ()</p>
        <pre><code class="cpp">file.close(); </code></pre>
        <p>Зверніть увагу, що дані відразу не записуються в файл на накопичувачі, вони записуються в буфер в оперативній пам'яті. Після закриття файлу дані з буфера записуються в файл на носії. Це зроблено для того, щоб не навантажувати жорсткий диск або будь-який інший тип накопичувача, на якому знаходиться файл. Інформацію з буфера в файл можна записати примусово без закриття файлу, викликавши метод QFile :: flush ()</p>
        <pre><code class="cpp">file.flush()  </code></pre>
        <p>Існує дуже корисний метод QFile :: exists (). Він приймає на вхід рядок з ім'ям файлу і повертає значення true, якщо такий файл існує. Існує статичний і нестатичних методи. Для роботи зі статичним методом необхідно вказати ім'я файлу.</p>
        <pre><code class="cpp">if(QFile::exists("myfile.txt"))   

       {   

            qDebug() << "Файл существует";   

       }   </code></pre>
        <p>Для роботи з нестатичних досить просто його викликати.</p>
        <pre><code class="cpp">if(file.exists())   

        {   

            qDebug() << "Файл существует";   

        }   </code></pre>
        <p>Для можливості запису або читання необхідно відкрити файл із зазначенням прапора читання QIODevice :: ReadOnly або записи QIODevice :: WriteOnly. Приклад відкриття файлу для запису:</p>
        <pre><code class="cpp">QFile file("myfile.txt");   

       if (!file.open(QIODevice::WriteOnly))   

       {   

             qDebug() << "Ошибка при открытии файла";   

       }   </code></pre>
        <p>Є різні способи читання з фалів і записи. Можна вважати або записати всю інформацію за один раз, а можна по одному символу або блоками.</p>
        <p>Для прикладу напишемо програму, яка зчитує з файлу блок з перших 10-ти символів, а потім вставляє в інший файл.</p>
        <pre><code class="cpp">#include < QCoreApplication >   

       #include < QFile > // Підключаємо для роботи з класом QFile QFile   

       int main(int argc, char *argv[])   

       {   

           QCoreApplication a(argc, argv);   

           QFile fileIn("filein.txt");   

           QFile fileOut("fileout.txt");   

           if(fileIn.open(QIODevice::ReadOnly) && fileOut.open(QIODevice::WriteOnly))   

           {  // Якщо перший файл відкритий для читання, а другий для запису успішно   

               QByteArray block = fileIn.read (10); // Прочитуємо 10 байт в масив block з filein.txt   

               fileOut.write(block);  // Записуємо 10 байт в файл fileout.txt   

               fileIn.close();  // Закриваємо filein.txt   

               fileOut.close();  // Закриваємо fileout.txt   

           }   

           return a.exec();   

       }   </code></pre>
        <p>Я создал файл filein.txt и внёс в него произвольный текст с помощью текстового редактора. После запуска программы я открыл filein.txt и fileout.txt в текстовом редакторе.</p>
        <br><img src="images/file1.png"><br>
        <p>Можна було вважати все байти, тоді весь вміст першого файлу копіювалося в другій. Для повного зчитування рядок</p>
        <pre><code class="cpp">QByteArray block = fileIn.read(10);</code></pre>
        <p>Потрібно замінити на рядок</p>
        <pre><code class="cpp">QByteArray block = fileIn.readAll();   </code></pre>
        <p>В результаті програма вважає все байти в масив block, а після запише їх у другій файл.</p>
        <p>Ми можемо записувати інформацію в файл рядками, для цього його потрібно відкрити в текстовому режимі.</p>
        <pre><code class="cpp">fileOut.open(QIODevice::WriteOnly | QIODevice::Text);   </code></pre>
        <p>Після передати адресу в конструктор нового об'єкта класу QTextStream.</p>
        <pre><code class="cpp"> QTextStream writeStream(&fileOut);   </code></pre>
        <p>А далі за допомогою оператора << посилати рядки в потік записи.</p>
        <p>Приклад програми, в яка записує в файл fileout.txt рядок «Text, text, text.»</p>
        <pre><code class="cpp">#include < QCoreApplication >   

       #include < QFile >  // Підключаємо клас QFile   

       #include < QTextStream >  // Підключаємо клас QTextStream  

       int main(int argc, char *argv[])   

       {   

           QCoreApplication a(argc, argv);   

           QFile fileOut("fileout.txt");  // Зв'язуємо об'єкт з файлом fileout.txt   
 
           if(fileOut.open(QIODevice::WriteOnly | QIODevice::Text))   

           {    // Якщо файл успішно відкритий для запису в текстовому режимі   

               QTextStream writeStream (& fileOut); // Створюємо об'єкт класу QTextStream   

               // і передаємо йому адресу об'єкта fileOut   

               writeStream << "Text, text, text."; // Надсилаємо рядок в потік для запису   

               fileOut.close (); // Закриваємо файл   

           }   

           return a.exec ();   

       }   </code></pre>
        <p>Вміст fileout.txt після запуску програми</p>
        <br><center><img src="images/file2.png"></center><br>
        <h2>Запис в кінець файлу</h2>
        <p>Попередній метод повністю перезаписував дані у файлі, тобто очищав весь його вміст і записував нові дані. Перезапису можна уникнути і записувати нові дані в кінець файлу.</p>
        <p>Прапор QIODevice :: Append поміщає покажчик для запису (seek) в кінець файлу, в результаті вхідний потік записується відразу після наявною інформацією в файлі. Приклад фрагмента використання:</p>
        <pre><code class="cpp">fileOutf .open(QIODevice::Append | QIODevice::Text); </code></pre>
        <p>У прикладі замість QIODevice :: WriteOnly використовується QIODevice :: Append. Якщо зробити таку зміну в попередній програмі, то після декількох запусків у файлі fileout.txt буде зберігатися рядок</p>
        <p>Text, text, text.Text, text, text.Text, text, text.</p>
        <p>Отже, ми розглянули основні методи для роботи з файлами. Більш детальну інформацію про всі методи класу QFile і QIODevice можна знайти в офіційній документації Qt і в мережі.</p>
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