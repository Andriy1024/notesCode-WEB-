<!DOCTYPE html>
<html>
<head>
	<title>QtSql</title>
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
        <center><h1>Модуль QtSql</h1></center>
        <br>
        <p>Модуль QtSql допомагає забезпечити однорідну інтеграцію БД в ваші Qt програми.</p>
        <h2>Класи</h2>
        <p>QSqlDatabase - Надає з'єднання з базою даних</p>
        <p>QSqlDriver - Абстрактний базовий клас для доступу до специфічних баз даних SQL</p>
        <p>QSqlDriverCreator - Клас-шаблон, який надає фабрику драйверів SQL для специфічних типів драйверів</p>
        <p>QSqlDriverCreatorBase - Базовий клас для фабрик драйверів SQL</p>
        <p>QSqlDriverPlugin - Абстрактний базовий клас для призначених для користувача модулів QSqlDriver</p>
        <p>QSqlError - Інформація про помилку бази даних SQL</p>
        <p>QSqlField - Управління полями в таблицях і уявленнях бази даних SQL</p>
        <p>QSqlIndex - Функції для управління індексами бази даних і їх опису</p>
        <p>QSqlQuery - Засоби управління виразами SQL і їх виконання</p>
        <p>QSqlQueryModel - Модель даних тільки для читання результуючої SQL-вибірки</p>
        <p>QSqlRecord - укладає в собі запис бази даних</p>
        <p>QSqlRelation - Містить інформацію про зовнішньому ключі SQL</p>
        <p>QSqlRelationalDelegate - Делегат, який використовується для відображення і редагування даних з QSqlRelationalTableModel</p>
        <p>QSqlRelationalTableModel - Модель даних для редагування однієї таблиці бази даних з підтримкою зовнішніх ключів</p>
        <p>QSqlResult - Абстрактний інтерфейс для доступу до даних специфічною бази SQL</p>
        <p>QSqlTableModel - Редагована модель даних для однієї таблиці бази даних</p>
        <p>Класи SQL поділяються на три шари:</p>
        <p>Драйвер шару - Включає класи QSqlDriver, QSqlDriverCreator &lt;T>, QSqlDriverCreatorBase, QSqlDriverPlugin і QSqlResult. Цей шар надає низькорівневий міст між певними базами даних і шаром SQL API. Для отримання більш детальної інформації дивіться Драйвера баз даних SQL.</p>
        <p>SQL API Layer - Ці класи надають доступ до баз даних. З'єднання встановлюються за допомогою класу QSqlDatabase. Взаємодія з базою даних здійснюється за допомогою класу QSqlQuery. На додаток до класів QSqlDatabase і QSqlQuery шар SQL API спирається на класи QSqlError, QSqlField, QSqlIndex і QSqlRecord.</p>
        <p>Шар призначеного для користувача інтерфейсу - Ці класи пов'язують дані з бази даних з дата-орієнтованими віджетами. Сюди входять такі класи, як QSqlQueryModel, QSqlTableModel і QSqlRelationalTableModel. Ці класи розроблені для роботи з каркасом Qt модель / подання.</p>
        <p>Пам'ятайте, що до використання будь-якого з цих класів слід буде почати об'єкт класу QCoreApplication. Для включення визначень класів цього модуля використовуйте наступну директиву:</p>
        <pre><code class="cpp"> #include < QtSql ></code></pre>
        <p>Для лінковки додатки з цим модулем, додайте в ваш qmake файл проекту .pro:</p>
        <pre><code class="cpp"> QT += sql </code></pre>
        <p>Модуль QtSql є частиною Випуску Qt Full Framework і Версій Open Source Qt.</p>
        <p>Даний огляд передбачає, що ви маєте, по крайней мере, базові знання про SQL. Ви повинні розуміти прості вирази SELECT, INSERT, UPDATE і DELETE. Незважаючи на те, що клас QSqlTableModel надає інтерфейс для перегляду і редагування бази даних без знання SQL, наявність базових уявлень про SQL настійно рекомендується. Стандартне опис баз даних SQL представлено в An Introduction to Database Systems (7th Ed.) By C. J. Date, ISBN 0201385902.</p>
        <h2>З'єднання з базою даних</h2>
        <p>Щоб отримати доступ до бази даних за допомогою QSqlQuery і QSqlQueryModel, створіть і відкрийте одне або більше з'єднань з базою даних. З'єднання з базою даних зазвичай ідентифікується по імені з'єднання, а не по імені бази даних. Ви можете мати безліч з'єднань з однієї і тієї ж базою даних. QSqlDatabase також підтримує концепцію з'єднання за замовчуванням, яке є неіменованого. Коли викликаються функції-члени QSqlQuery або QSqlQueryModel, які отримують ім'я з'єднання як аргумент, то якщо ви не вказуєте ім'я з'єднання, буде використовуватися з'єднання за замовчуванням. Створення з'єднання за замовчуванням зручно, коли вашому додатку потрібно тільки одне з'єднання з базою даних.</p>
        <p>Зверніть увагу на відмінність між створенням з'єднання і його відкриттям. Створення з'єднання включає в себе створення екземпляра класу QSqlDatabase. З'єднання не придатне до використання до тих пір, поки воно не буде відкрито. Наступний фрагмент коду показує, як створити з'єднання за замовчуванням і потім відкрити його:</p>
        <pre><code class="cpp">  QSqlDatabase db = QSqlDatabase::addDatabase("QMYSQL");   

        db.setHostName("bigblue");   

        db.setDatabaseName("flightdb");   

        db.setUserName("acarlson");   

        db.setPassword("1uTbSbAs");   

        bool ok = db.open(); </code></pre>
        <p>Перший рядок створює об'єкт з'єднання, а остання відкриває його. У проміжку, ми ініціалізували деяку інформацію про з'єднання, включаючи ім'я бази даних, ім'я вузла, ім'я користувача, пароль. У цьому прикладі, ми з'єднувалися з базою даних MySQL flightdb на вузлі bigblue. Аргумент "QMYSQL" в addDatabase () тип драйвера бази даних, щоб використовувати для з'єднання. Набір драйверів баз даних включених в Qt показаний в таблиці підтримувані драйвери баз даних.</p>
        <p>З'єднання в прикладі буде з'єднанням за замовчуванням, тому що ми не передаємо другий аргумент в addDatabase (), який є ім'ям з'єднання. Наприклад, тут ми встановлюємо два з'єднання з базою даних MySQL званих "first" і "second":</p>
        <pre><code class="cpp"> QSqlDatabase firstDB = QSqlDatabase::addDatabase("QMYSQL", "first");   

        QSqlDatabase secondDB = QSqlDatabase::addDatabase("QMYSQL", "second"); </code></pre>
        <p>Після цього з'єднання ініціалізовані, open (), для кожного з них, встановлює активність сполук. Якщо open () зазнає невдачі, він поверне false. В цьому випадку, викличте QSqlDatabase :: lastError (), щоб отримати інформацію про помилку.</p>
        <p>Як тільки з'єднання встановлено, ми можемо викликати статичну функцію QSqlDatabase :: database (), з будь-якого місця програми із зазначенням імені з'єднання, щоб отримати покажчик на це з'єднання. Якщо ми не передаємо ім'я з'єднання, вона поверне з'єднання за замовчуванням. наприклад:</p>
        <pre><code class="cpp"> QSqlDatabase defaultDB = QSqlDatabase::database();   

        QSqlDatabase firstDB = QSqlDatabase::database("first");   

        QSqlDatabase secondDB = QSqlDatabase::database("second");  </code></pre>
        <p>Для видалення з'єднання з базою даних, спочатку закрийте базу даних за допомогою QSqlDatabase :: close (), а потім, потрібно видалити її за допомогою статичного методу QSqlDatabase :: removeDatabase ().</p>
        <h2>Виконання інструкцій SQL</h2>
        <p>Клас QSqlQuery забезпечує інтерфейс для виконання SQL запитів і навігації по результуючої вибіркою.</p>
        <p>Класи QSqlQueryModel і QSqlTableModel, описані в наступному розділі, надають високорівнева інтерфейс для доступу до баз даних. Якщо ви не знайомі з SQL, вам, можливо, захочеться відразу перейти до наступного розділу (Використання класів SQL моделі).</p>
        <p>Виконання запиту</p>
        <p>Для виконання SQL запитів, просто створюють об'єкт QSqlQuery і викликають QSqlQuery :: exec (). Наприклад, ось так:</p>
        <pre><code class="cpp"> QSqlQuery query;   

        query.exec("SELECT name, salary FROM employee WHERE salary > 50000");   </code></pre>
        <p>Конструктор QSqlQuery приймає необов'язковий аргумент QSqlDatabase, який вказує, яке з'єднання з базою даних використовується. У наведеному нижче прикладі ми не вказуємо з'єднання, тому використовується з'єднання за замовчуванням.</p>
        <p>Якщо виникає помилка, exec () повертає false. Доступ до помилки можна отримати за допомогою QSqlQuery :: lastError ().</p>
        <p>Навігація по результуючої вибіркою
QSqlQuery надає одноразовий доступ до результуючої вибіркою одного запиту. Після виклику exec (), внутрішній покажчик QSqlQuery вказує на позицію перед першим записом. Ми повинні викликати метод QSqlQuery :: next () один раз, щоб перемістити покажчик до першого запису, потім знову повторювати виклик next (), щоб отримувати доступ до інших записів, до тих пір поки він не поверне false. Ось типовий цикл, перебирають всі записи по порядку:</p>
        <pre><code class="cpp"> while (query.next()) {   

                QString name = query.value(0).toString();   

                int salary = query.value(1).toInt();   

                qDebug() << name << salary;   

        }</code></pre>
         <p>Функція QSqlQuery :: value () повертає значення поля поточного запису. Поля задаються індексами, починаючи з нуля. Функція QSqlQuery :: value () повертає значення типу QVariant, який може зберігати значення різних типів C ++ і ядра Qt, такі як int, QString і QByteArray. Різні типи значень бази даних автоматично приводяться до найближчого еквівалента в Qt. У цьому фрагменті коду ми викликаємо QVariant :: toString () і QVariant :: toInt () для перетворення змінних в QString і int.</p>
         <p>For an overview of the recommended types used with Qt supported Databases, please refer to this table.</p>
         <p>Ви можете переміщатися взад і вперед по вибірці, використовуючи функції QSqlQuery :: next (), QSqlQuery :: previous (), QSqlQuery :: first (), QSqlQuery :: last () і QSqlQuery :: seek (). Поточний номер рядка можна отримати за допомогою QSqlQuery :: at (), а загальна кількість рядків у вибірці, якщо це підтримується базою даних, повертається функцією QSqlQuery :: size ().</p>
         <p>Визначити, чи підтримує драйвер бази даних певну особливість можна за допомогою виклику функції QSqlDriver :: hasFeature (). У наступному прикладі ми викликаємо QSqlQuery :: size () для визначення розміру результуючої вибіркою, тільки в тому випадку, якщо база даних підтримує таку можливість; в іншому випадку ми подорожуємо до останнього запису і використовуємо її позицію в вибірці для визначення кількості записів.</p>
         <pre><code class="cpp"> QSqlQuery query;   

        int numRows;   

        query.exec("SELECT name, salary FROM employee WHERE salary > 50000");   

        QSqlDatabase defaultDB = QSqlDatabase::database();   

        if (defaultDB.driver()->hasFeature(QSqlDriver::QuerySize)) {   

                numRows = query.size();   

        } else {   

                query.last();   

                numRows = query.at() + 1;   

        }  </code></pre>
         <p>Якщо ви перебирає результуючу вибірку тільки за допомогою викликів next () і seek () з позитивними значеннями, то можете перед викликом exec () викликати QSqlQuery :: setForwardOnly (true). Ця невелика оптимізація сильно прискорить виконання запитів, які повертають великі вибірки.</p>
         <h2>Вставка, зміна і видалення записів</h2>
         <p>QSqlQuery може виконувати будь-які SQL виразу, а не просто SELECT'и. Наступний приклад вставляє запис в таблицю, використовуючи INSERT:</p>
         <pre><code class="cpp"> QSqlQuery query;   

         .exec("INSERT INTO employee (id, name, salary) ""VALUES (1001, 'Thad Beaumont', 65000)");   </code></pre>
         <p>Якщо ви хочете одночасно вставити безліч записів, то найчастіше ефективніше відокремити запит від реально вставляються значень. Це можна зробити за допомогою вставки значень через параметри. Qt підтримує два синтаксису вставки значень: зазначені параметри і позиційні параметри. У наступному прикладі показана вставки за допомогою пойменованого параметра:</p>
         <pre><code class="cpp"> QSqlQuery query;   

        query.prepare("INSERT INTO employee (id, name, salary) ""VALUES (:id, :name, :salary)");   

        query.bindValue(":id", 1001);   

        query.bindValue(":name", "Thad Beaumont");   

        query.bindValue(":salary", 65000);   

        query.exec(); </code></pre>
         <p>Обидва синтаксису працюють з усіма драйверами баз даних надаються Qt. Якщо база даних підтримує синтаксис, Qt просто пересилає запит у СУБД; в іншому випадку, Qt симулює синтаксис параметрів і здійснює предобработку запиту. Фактичний запит, який надходить на виконання в СУБД доступний за допомогою QSqlQuery :: executedQuery ().</p>
         <p>При вставці безлічі записів, вам потрібно зателефонувати QSqlQuery :: prepare () тільки один раз. Далі ви можете викликати bindValue () або addBindValue () з подальшим викликом exec () стільки разів, скільки буде потрібно.</p>
         <p>Крім зручності виконання, вставка через параметри має ще й ту перевагу, що ви позбавлені від необхідності піклуватися про перетворення спеціальних символів.</p>
         <p>Зміна записів дуже схоже на вставку в таблицю:</p>
         <pre><code class="cpp">  QSqlQuery query;   

        query.exec("UPDATE employee SET salary = 70000 WHERE id = 1003"); </code></pre>
         <p>Ви також можете використовувати пойменовану або позиційну вставку для асоціювання параметрів рядка запиту з актуальними значеннями.</p>
         <p>В кінці наведемо приклад вираження DELETE:</p>
         <pre><code class="cpp">    QSqlQuery query;   

         query.exec("DELETE FROM employee WHERE id = 1007");   </code></pre>
         <h2>Транзакції</h2>
         <p>Якщо основний двигун бази даних підтримує транзакції, то QSqlDriver :: hasFeature (QSqlDriver :: Transactions) поверне true. Для ініціації транзакції ви можете використовувати QSqlDatabase :: transaction (), потім запустити інструкції SQL, які ви хочете виконати в межах транзакції, а після викликати QSqlDatabase :: commit () або QSqlDatabase :: rollback (). При використанні транзакції ви повинні почати її, перш ніж створите свій запит.</p>
         <p>Приклад:</p>
         <pre><code class="cpp">   QSqlDatabase::database().transaction();   

        QSqlQuery query;   

        query.exec("SELECT id FROM employee WHERE name = 'Torild Halvorsen'");   

        if (query.next()) {   

                int employeeId = query.value(0).toInt();   

                query.exec("INSERT INTO project (id, name, ownerid) ""VALUES (201, 'Manhattan Project', "+ QString::number(employeeId) + ')');   

        }   

        QSqlDatabase::database().commit();</code></pre>
         <p>Транзакції можна використовувати для того, щоб гарантувати атомарность складного дії (наприклад, перегляд зовнішніх ключів і створення запису) або для можливості скасування складної дії в процесі його виконання.</p>
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