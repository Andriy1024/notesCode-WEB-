<!DOCTYPE html>
<html>
<head>
	<title>Ітератори</title>
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
        <center><h1>Ітератори</h1></center>
        <br>
        <p>Ітератори - об'єкти для уніфікованого доступу до елементів контейнера.</p>
        <p>Ви повинні бути знайомі з ітераторами, якщо маєте хороший досвід програмування на C ++ з використанням STL, або на Java. В Qt є як ітератори в стилі STL, так і ітератори в стилі Java. Перші трохи ефективніше, але з другими зручніше працювати.</p>
        <h2>Ітератори в стилі Java</h2>
        <p>Ітератори в стилі Java є новими в Qt 4 і є стандартними, використовуваними в додатках Qt. Вони більш зручні у використанні, ніж ітератори в стилі STL, але вони трохи менш ефективні. Їх API зроблений за зразком класів-ітераторів Java.</p>
        <p>Ітератори в стилі Java є новими в Qt 4 і є стандартними, використовуваними в додатках Qt. Вони більш зручні у використанні, ніж ітератори в стилі STL, але вони трохи менш ефективні. Їх API зроблений за зразком класів-ітераторів Java.</p>
        <h2>Ітератори тільки для читання</h2>
        <p>QList&lt;T>, QQueue&lt;T> - QListIterator&lt;T></p>
        <p>QLinkedList&lt;T> - QLinkedListIterator&lt;T></p>
        <p>QVector&lt;T>, QStack&lt;T> - QVectorIterator&lt;T></p>
        <p>QSet&lt;T> - QSetIterator&lt;T></p>
        <p>QMap&lt;Key, T>, QMultiMap&lt;Key, T> - QMapIterator&lt;Key, T></p>
        <p>QHash&lt;Key, T>, QMultiHash&lt;Key, T> - QHashIterator&lt;Key, T></p>
        <h2>Ітератори для читання-запису</h2>
        <p>QList&lt;T>, QQueue&lt;T> - QMutableListIterator&lt;T></p>
        <p>QLinkedList&lt;T> - QMutableLinkedListIterator&lt;T></p>
        <p>QVector&lt;T>, QStack&lt;T> - QMutableVectorIterator&lt;T></p>
        <p>QSet&lt;T> - QMutableSetIterator&lt;T></p>
        <p>QMap&lt;Key, T>, QMultiMap&lt;Key, T> - QMutableMapIterator&lt;Key, T></p>
        <p>QHash&lt;Key, T>, QMultiHash&lt;Key, T> - QMutableHashIterator&lt;Key, T></p>
        <p>В цьому обговоренні ми сконцентруємося на QList і QMap. Типи ітераторів для QLinkedList, QVector і QSet мають точно такий же інтерфейс, що і ітератори QList; аналогічно, типи ітераторів для QHash мають той же інтерфейс, що і ітератори QMap.</p>
        <p>На відміну від ітераторів в стилі STL (що розглядаються нижче), ітератори в стилі Java вказують на осередок пам'яті між елементами, а не на самі елементи. Тому вони вказують або на початок контейнера (перед першим елементом), або на кінець контейнера (після останнього елемента), або між двома елементами. На діаграмі нижче червоними стрілками показані можливі позиції ітератора в списку, що містить чотири елементи:</p>
        <br><img src="images/iterator_java.png"><br>
        <p>Ось типовий приклад циклу для перебору всіх елементів QList < QString > по порядку і виведення їх в консоль:</p>
        <pre><code class="cpp">  QList list;   

        list << "A" << "B" << "C" << "D";   

        QListIterator i(list);   

        while (i.hasNext())   

            qDebug() << i.next();  </code></pre>
        <p>Він працює таким чином: щоб перебрати елементи, QList поміщається в конструктор QListIterator. У цей момент итератор позиціонується на початок першого елемента в списку (перед елементом "A"). Потім ми викликаємо hasNext () для перевірки, чи існує який-небудь елемент після позиції ітератора. Якщо є, то ми викликаємо next (), щоб перестрибнути через нього. Функція next () повертає елемент, через який перестрибнув итератор. Для QList &lt;QString>, це елемент типу QString.</p>
        <p>Ось як перебрати елементи QList в зворотному порядку:</p>
        <pre><code class="cpp">  QListIterator i(list);   

        i.toBack();   

        while (i.hasPrevious())   

            qDebug() << i.previous();   </code></pre>
        <p>Цей код симетричний перебору в прямому порядку, за виключення того, що ми починаємо з виклику toBack () для переміщення ітератора на позицію, після останнього елемента в списку.</p>
        <p>Діаграма, наведена нижче, показує ефект від викликів функцій ітератора next () і previous ():</p>
        <br><img src="images/iterator_java2.png"><br>
        <h2>Функції</h2>
        <p>toFront () переміщує ітератор в початок списку (перед першим елементом)</p>
        <p>toBack () переміщує ітератор в кінець списку (після останнього елемента)</p>
        <p>hasNext () Повертає true, якщо итератор не в кінці списку</p>
        <p>next () Повертає наступний елемент і переміщає ітератор на одну позицію вперед</p>
        <p>peekNext () Повертає наступний елемент без переміщення ітератора</p>
        <p>hasPrevious () Повертає true, якщо итератор не на початку списку</p>
        <p>previous () Повертає попередній елемент і переміщає ітератор на одну позицію назад</p>
        <p>peekPrevious () Повертає попередній елемент без переміщення ітератора</p>
        <p>QListIterator не надає функцій для вставки або видалення елементів перебирати списку. Для того, щоб зробити це, ви повинні використовувати QMutableListIterator. Ось приклад, де ми видаляємо всі елементи з непарними значеннями з QList &lt;int> використовуючи QMutableListIterator:</p>
        <pre><code class="cpp">  QMutableListIterator< int > i(list);   

        while (i.hasNext()) {   

            if (i.next() % 2 != 0)   

                i.remove();   

        }   </code></pre>
        <p>Виклик next () здійснюється в кожній ітерації циклу. Він перестрибує через наступний елемент у списку. Функція remove () видаляє останній елемент, через який ми перестрибнули в списку. Виклик remove () робить итератор недійсним, і він залишається придатним для подальшого використання. Це працює точно також і при переборі елементів в зворотному порядку:</p>
        <pre><code class="cpp">  QMutableListIterator< int > i(list);   

        i.toBack();   

        while (i.hasPrevious()) {   

            if (i.previous() % 2 != 0)   

                i.remove();   

        }   </code></pre>
        <p>Якщо ви бажаєте лише змінити значення існуючого елемента, то можете використовувати функцію setValue (). У коді нижче, ми замінюємо будь-яке значення більше ніж 128, на 128:</p>
        <pre><code class="cpp"> QMutableListIterator<int> i(list);   

        while (i.hasNext()) {   

            if (i.next() > 128)   

                i.setValue(128);   

        }   </code></pre>
        <p>Точно також, як і remove (), setValue () працює з останньому елементом, який ми перестрибнули. Якщо ви перебирає елементи в прямому напрямку, то це елемент, розташований прямо перед ітератором, якщо ви перебирає елементи в зворотному порядку, то це елемент, розташований відразу за ітератором.</p>
        <p>Функція next () повертає неконстантную посилання на елемент списку. Для простих операцій нам навіть не потрібно setValue ():</p>
        <pre><code class="cpp"> QMutableListIterator<int> i(list);   

        while (i.hasNext())   

            i.next() *= 2;   </code></pre>
        <p>Як було сказано вище, ітератори класів QLinkedList, QVector і QSet мають абсолютно такий же API як і у QList. Тепер звернемося до QMapIterator, який дещо відрізняється, так як служить для перебору пар (ключ, значення).</p>
        <p>Як і QListIterator, QMapIterator надає toFront (), toBack (), hasNext (), next (), peekNext (), hasPrevious (), previous () і peekPrevious (). Компоненти ключ і значення можуть бути отримані викликом key () і value () для об'єкта, повернутого next (), peekNext (), previous () або peekPrevious ().</p>
        <p>У наступному прикладі видаляються всі пари (столиця, держава), в яких назва столиці закінчується на "City":</p>
        <pre><code class="cpp"> QMap<QString, QString> map;   

        map.insert("Paris", "France");   

        map.insert("Guatemala City", "Guatemala");   

        map.insert("Mexico City", "Mexico");   

        map.insert("Moscow", "Russia");   

        ...   

        QMutableMapIterator<QString, QString> i(map);   

        while (i.hasNext()) {   

                if (i.next().key().endsWith("City"))   

                i.remove();   

        }   </code></pre>
        <p>QMapIterator також надає функції key () і value (), які працюють безпосередньо з ітератором і повертають ключ і значення останнього елемента, який перестрибнув итератор. Наприклад, в наступному коді проводиться копіювання вмісту QMap в QHash:</p>
        <pre><code class="cpp"> QMap< int, QWidget * > map;   

        QHash< int, QWidget * > hash;   

        QMapIterator< int, QWidget * > i(map);   

        while (i.hasNext()) {   

             i.next();   

            hash.insert(i.key(), i.value());   

        }   </code></pre>
        <p>Якщо ми хочемо перебрати всі елементи, що містять один і той же значення, то ми можемо використовувати findNext () або findPrevious (). Ось приклад, де ми видаляємо всі елементи з заданим значенням:</p>
        <pre><code class="cpp"> QMutableMapIterator< int, QWidget * > i(map);   

        while (i.findNext(widget))   

            i.remove();</code></pre>
        <h2>Ітератори в стилі STL</h2>
        <p>Ітератори в стилі STL стали доступні, починаючи з версії Qt 2.0. Вони сумісні з базовими алгоритмами Qt і STL і оптимізовані за швидкістю.</p>
        <p>Для кожного контейнерного класу є два типи ітераторів в стилі STL: один з них надає доступ тільки для читання, а інший - доступ для читання-запису. Ітератори тільки для читання повинні використовуватися всюди, де це тільки можливо, так як вони швидше, ніж ітератори для читання-запису.</p>
        <h2>Ітератори тільки для читання</h2>
        <p>QList&lt;T>, QQueue&lt;T> - QList&lt;T>::const_iterator</p>
        <p>QLinkedList&lt;T> - QLinkedList&lt;T>::const_iterator</p>
        <p>QVector&lt;T>, QStack&lt;T> - QVector&lt;T>::const_iterator</p>
        <p>QSet&lt;T> -    QSet&lt;T>::const_iterator</p>
        <p>QMap&lt;Key, T>, QMultiMap&lt;Key, T> - QMap&lt;Key, T>::const_iterator</p>
        <p>QHash&lt;Key, T>, QMultiHash&lt;Key, T> - QHash&lt;Key, T>::const_iterator    </p>
        <h2>Ітератори для читання-запису</h2>
        <p>QList&lt;T>, QQueue&lt;T> - QList&lt;T>::iterator</p>
        <p>QLinkedList&lt;T> - QLinkedList&lt;T>::iterator</p>
        <p>QVector&lt;T>, QStack&lt;T> - QVector&lt;T>::iterator</p>
        <p>QSet&lt;T> - QSet&lt;T>::iterator</p>
        <p>QMap&lt;Key, T>, QMultiMap&lt;Key, T> - QMap&lt;Key, T>::iterator</p>
        <p>QHash&lt;Key, T>, QMultiHash&lt;Key, T> - QHash&lt;Key, T>::iterator</p>
        <p>API ітераторів в стилі STL зроблений за зразком покажчиків в масиві. Наприклад, оператор ++ переміщує ітератор до наступного елементу, а оператор * повертає елемент, на який позиціонується итератор. Фактично, для QVector і QStack, що зберігають свої елементи в суміжних комірках пам'яті, тип iterator - це всього лише typedef для T *, а тип const_iterator - всього лише typedef для const T *.</p>
        <p>В цьому обговоренні ми сконцентруємося на QList і QMap. Типи ітераторів для QLinkedList, QVector і QSet мають точно такий же інтерфейс, що і ітератори QList; аналогічно, типи ітераторів для QHash мають той же інтерфейс, що і ітератори QMap.</p>
        <p>Ось типовий приклад циклу для перебору всіх елементів QList &lt;QString> по порядку і конвертації їх в в нижній регістр:</p>
        <pre><code class="cpp">  QList< QString > list;   

        list << "A" << "B" << "C" << "D";   

        QList< QString >::iterator i;   

        for (i = list.begin(); i != list.end(); ++i)   

            *i = (*i).toLower(); </code></pre>
        <p>На відміну від ітераторів в стилі Java, ітератори в стилі STL вказують прямо на елемент. Функція контейнера begin () повертає ітератор, який вказує на перший елемент контейнера. Функція контейнера end () повертає ітератор, який вказує на уявний елемент, що знаходиться в позиції, наступної за останнім елементом контейнера. end () позначає неіснуючу позицію; він ніколи не повинен разименовиваться. Зазвичай, він використовується, як умова виходу з циклу. Якщо список порожній, то begin () дорівнює end (), тому цикл ніколи не виконається.</p>
        <p>На діаграмі нижче червоними стрілками показані можливі позиції ітератора в списку, що містить чотири елементи:</p>
        <br><img src="images/iterator_stl.png"><br>
        <p>При переборі елементів в зворотному порядку за допомогою ітераторів в стилі STL, потрібно, щоб оператор декремента використовувався перед звернення до елементу. Ось необхідний цикл while:</p>
        <pre><code class="cpp">  QList< QString > list;   

        list << "A" << "B" << "C" << "D";   

        QList< QString >::iterator i = list.end();   

        while (i != list.begin()) {   

            --i;   

            *i = (*i).toLower();   

        }   </code></pre>
        <p>У цих фрагментах коду, ми використовували унарний оператор * для відновлення значення елемента (типу QString), що зберігається в деякій позиції ітератора, а потім для нього викликали QString :: toLower (). Більшість компіляторів C ++ (але не всі) також дозволяють писати i-> toLower () ().</p>
        <p>Для доступу до елементів тільки для читання, можна використовувати const_iterator, constBegin () і constEnd (). наприклад:</p>
        <pre><code class="cpp">  QList< QString >::const_iterator i;   

        for (i = list.constBegin(); i != list.constEnd(); ++i)   

            qDebug() << *i;   </code></pre>
        <p>*i Повертає поточний елемент</p>
        <p>++ i переміщує ітератор до наступного елементу</p>
        <p>i + = n переміщує ітератор вперед на n елементів</p>
        <p>--i переміщує ітератор на один елемент назад</p>
        <p>i - = n переміщує ітератор назад на n елементів</p>
        <p>i - j Повертає кількість елементів, що знаходяться між позицією ітератора i та j</p>
        <p>Обидва оператора ++ і - можуть використовуватися і як префіксние (++ i, --i) і як постфіксні (i ++, i--) оператори. Префіксная версія змінює итератор, і повертає посилання на змінений итератор; Постфіксний версія, бере копію ітератора перед його зміною, і повертає цю копію. У виразах, в яких повертається значення ігнорується, ми рекомендуємо використовувати префіксних версію (++ i, --i), так як вона трохи швидше.</p>
        <p>Для неконстантних ітераторів, яке значення унарна оператора *, може бути використано з лівого боку від оператора присвоювання.</p>
        <p>Для QMap і QHash, оператор * повертає компонент значення елемента. Якщо ви хочете отримати ключ, викличте key () для ітератора. Для симетрії, типи ітераторів надають також функцію value (), витягує значення. Наприклад, тут показано, як ми можемо надрукувати всі елементи в QMap в консоль:</p>
        <pre><code class="cpp"> QMap< int, int > map;   

        ...   

        QMap< int, int >::const_iterator i;   

        for (i = map.constBegin(); i != map.constEnd(); ++i)   

            qDebug() << i.key() << ":" << i.value();   </code></pre>
        <p>Завдяки неявному спільному використанню даних, використання значень контейнера вельми недорого. API Qt містить безліч функцій, які повертають QList або QStringList зі значеннями (наприклад, QSplitter :: sizes ()). Якщо ви хочете перебрати ці значення за допомогою ітератора в стилі STL, то ви завжди повинні мати копію контейнера і перебирати її елементи. наприклад:</p>
        <pre><code class="cpp">  // ПРАВИЛЬНО   

        const QList< int > sizes = splitter->sizes();   

        QList< int >::const_iterator i;   

        for (i = sizes.begin(); i != sizes.end(); ++i)   

        ...   

        // НЕПРАВИЛЬНО   

        QList< int >::const_iterator i;   

        for (i = splitter->sizes().begin();   

            i != splitter->sizes().end(); ++i)   

        ...   </code></pre>
        <p>Ця проблема не повинна виникати при використанні функцій, які повертають константний або неконстантний покажчик на контейнер.</p>
        <p>Неявне спільне використання даних має і інший вплив на використання ітераторів в стилі STL: ви не повинні робити копії контейнера, якщо для нього активні неконстантние ітератори. Ітератори в стилі Java не страждають таким обмеженням.</p>
        <script  type="text/javascript">hljs.initHighlightingOnLoad();</script>        
        <div class="comments">
            <div class="fb-comments" data-width="100%"  data-numposts="5"></div>
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