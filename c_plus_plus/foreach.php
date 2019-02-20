<!DOCTYPE html>
<html>
<head>
	<title>foreach</title>
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
        <center><h1>Конструкція foreach</h1></center>
        <br>
        <p>Якщо ви хочете перебрати всі елементи контейнера по порядку, то можете використовувати конструкцію Qt foreach. Дана конструкція - це доповнення Qt до мови C ++, реалізоване за допомогою засобів препроцесора.</p>
        <pre><code class="cpp">  cout << "Помилка №" << i << " - на 0 ділити неможна!!!!" << endl; </code></pre>
        <p>Її синтаксис :: foreach (змінна, контейнер) оператор. У наступному прикладі показано використання конструкції foreach для перебору всіх елементів контейнера QLinkedList < QString>:</p>
        <pre><code class="cpp">  QLinkedList < QString > list;   

        ...   

        QString str;   

        foreach (str, list)   

        qDebug() << str;   </code></pre>
        <p>Код з конструкцією foreach значно коротше, ніж аналогічний код, який використовує ітератори:</p>
        <pre><code class="cpp">  QLinkedList< QString > list;   

        ...   

        QLinkedListIterator< QString > i(list);   

        while (i.hasNext())   

        qDebug() << i.next();   </code></pre>
        <p>За винятком типу даних, що містить кому (наприклад, QPair &lt;int, int>), змінна, яка використовується для перебору елементів контейнера може бути визначена всередині виразу foreach:</p>
        <pre><code class="cpp">  QLinkedList< QString > list;   

        foreach (QString str, list)   

            qDebug() < str;    </code></pre>
        <p>І подібно до будь-якого циклу C ++, ви можете укласти тіло циклу foreach в фігурні дужки і використовувати break для переривання циклу:</p>
        <pre><code class="cpp">  QLinkedList< QString > list;   

        foreach (QString str, list) {   

            if (str.isEmpty())   

                break;   

            qDebug() < str;   

        }   </code></pre>
        <p>При використанні з QMap і QHash, foreach надає доступ до парам значень (key, value). Якщо ви хочете перебрати і ключі і значення, то можете використовувати ітератори (які швидше) або написати код, подібний наступного:</p>
        <pre><code class="cpp">QMap< QString, int > map;   

        foreach (QString str, map.keys())   

            qDebug() << str << ":" << map.value(str);  </code></pre>
        <p>Для багатозв'язних карт:</p>
        <pre><code class="cpp">  QMultiMap < QString, int > map;   

        foreach (QString str, map.uniqueKeys()) {   

            foreach (int i, map.values(str))   

                qDebug() << str << ":" << i;   

        }   </code></pre>
        <p>При вході в цикл foreach, Qt автоматично робить копію контейнера. Якщо ви зміните контейнер під час виконання циклу, то в циклі цього не буде помітно. (Якщо ви не змінювали контейнер, копіювання все ще має місце, але, завдяки неявному спільному використанню даних, копіювання контейнера здійснюється дуже швидко.)</p>
        <p>На додаток до foreach, Qt також надає псевдоключевое слово forever, для нескінченного циклу:</p>
        <pre><code class="cpp"> forever {   

            ...   

        }  </code></pre>
        <p>Якщо вас турбує засмічення простору імен, то ви можете відключити використання цих макросів, додавши в .pro-файл такий рядок:</p>
        <pre><code class="cpp"> CONFIG += no_keywords   </code></pre>
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