<!DOCTYPE html>
<html>
<head>
	<title>Cистема малювання</title>
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
        <center><h1>Cистема малювання</h1></center>
        <br>
        <p>Система малювання Qt дозволяє малювати на екрані і друкуючих пристроях використовуючи один і той же API, і заснована, в основному, на класах QPainter, QPaintDevice і QPaintEngine.</p>
        <p>QPainter використовується для виконання операцій малювання, QPaintDevice - абстракція двомірного простору, на якому можна малювати використовуючи QPainter, а QPaintEngine надає інтерфейс, який малює використовує для малювання на різних типах пристроїв. Клас QPaintEngine використовується для внутрішніх потреб в QPainter і QPaintDevice, і невидимий для програмістів додатків якщо тільки вони не створять свій власний тип пристрою.</p>
        <br><img src="images/paint1.png"><br>
        <p>Головна перевага такого підходу полягає в тому, що все малювання виконується одним і тим же конвеєром малювання, полегшуючи додавання підтримки нових можливостей і надаючи реалізації за замовчуванням для підтримуються можливостей.</p>
        <p>В якості альтернативи, Qt надає модуль QtOpenGL, що пропонує класи, які роблять більш легким використання OpenGL в додатках Qt. Крім іншого, модуль надає клас віджету OpenGL, який може використовуватися також як і будь-який інший віджет Qt, за винятком того що він відкриває дисплейний буфер OpenGL, де може бути використано OpenGL API для формування зображення вмісту.</p>
        <h2>Mалювання</h2>
        <p>QPainter надає ретельно оптимізовані функції для виконання більшої частини малювання, необхідного програмами з ДПІ. Він може намалювати все, починаючи з простих графічних примітивів (подаються класами QPoint, QLine, QRect, QRegion і QPolygon) і закінчуючи складними фігурами, наприклад, векторними траєкторіями. В Qt векторні траєкторії представлені класом QPainterPath. QPainterPath надає контейнер для операцій малювання, що дозволяє створювати і повторно використовувати графічні фігури.</p>
        <h2>QPainterPath</h2>
        <p>Траєкторія рисувальника - об'єкт, що складається з ліній і кривих. Наприклад, прямокутник складається з ліній, а еліпс складається з кривих.</p>
        <p>Основна перевага траєкторій рисувальника над звичайними операціями малювання полягає в тому, що досить створити складні фігури один раз; потім їх можна малювати не один раз викликаючи тільки функцію QPainter :: drawPath ().</p>
        <p>Об'єкт QPainterPath можна використовувати для заповнення, малювання контуру і обрізки. Щоб створити заливаються контури для заданої траєкторії рисувальника використовується клас QPainterPathStroker.</p>
        <p>Лінії і контури малюються використовуючи клас QPen. Перо визначається своїм стилем (тобто своїм типом лінії, line-type), шириною, пензлем, способом малювання точок закінчення (стилем закінчень, cap-style) і як малюється місце з'єднання двох з'єднаних ліній (стиль об'єднання, join-style) . Пензлем пера є об'єкт QBrush, який використовується для заповнення штрихів, що створюються пером, тобто клас QBrush визначає візерунок-заповнювач (fill pattern).</p>
        <p>QPainter також може малювати вирівняний текст і растрові зображення.</p>
        <p>При відображенні тексту шрифт задається використовуючи клас QFont. Qt буде використовувати шрифт з заданими атрибутами або, якщо немає відповідного шрифту, то Qt буде використовувати найбільш схожий встановлений шрифт. Атрибути шрифту, які дійсно використовуються, можна отримати використовуючи клас QFontInfo. Крім того, клас QFontMetrics надає розміри шрифту, а клас QFontDatabase надає інформацію про шрифтах, доступних в основний віконній системі.</p>
        <p>Зазвичай QPainter малює в "природною" системі координат, але може виконувати перетворення виду і світове перетворення, використовуючи клас QMatrix. Для отримання додаткової інформації дивіться документацію Система координат, яка також описує процес візуалізації, тобто співвідношення між логічним поданням і візуалізіруемого пікселями, а також переваги згладженого малювання.</p>
        <h2>Згладжене малювання</h2>
        <p>Коли йде малювання, візуалізація пікселя контролюється підказкою візуалізації (render hint) QPainter :: Antialiasing. Перерахування QPainter :: RenderHint використовується для вказівки прапорів QPainter'у, які можуть або не можуть бути дотримані будь-які передбачені механізмом.</p>
        <p>Значення QPainter :: Antialiasing вказує на те, що механізм повинен згладити краї примітивів якщо це можливо, тобто згладити краї використовуючи різну інтенсивність кольору.</p>
        <h2>Заливка</h2>
        <p>Фігури заповнюються з використанням класу QBrush. Кисть визначається своїм кольором і стилем (тобто своїм візерунком-заповнювачем).</p>
        <p>Всі кольори в Qt представляються класом QColor, який підтримує колірні моделі RGB, HSV і CMYK. QColor також підтримує альфа-змішування контурів і внутрішніх областей (задаючи ефект прозорості), а клас є незалежним від платформи і пристрої (кольори відображаються на апаратне забезпечення з використанням класу QColormap). Для отримання додаткової інформації дивіться документацію класу QColor.</p>
        <p>При створенні нового віджету рекомендується використовувати кольори палітри віджета замість жорстко запрограмованих конкретних квітів. Всі віджети в Qt містять палітру і використовують свою палітру для відтворення самих себе. Палітра віджета представляється класом QPalette, який містить групи кольорів для кожного стану віджета.</p>
        <p>Доступні візерунки-наповнювачі описуються перерахуванням Qt :: BrushStyle. Воно включає базові шаблони, що тягнуться від рівномірного кольору до дуже розрідженого шаблону, різні комбінації ліній, градієнтні заливки і текстури. Qt надає клас QGradient для визначення користувача градієнтних заливок, в той час як текстурні шаблони задаються використовуючи клас QPixmap.</p>
        <h2>QGradient</h2>
        <p>Клас QGradient використовується в поєднанні з QBrush для завдання градієнтних заливок.</p>
        <br><img src="images/paint2.png"><br>
        <p>В даний час Qt підтримує три типи градієнтних заливок: Лінійні градієнти интерполируют кольору від початкової до кінцевої точки, радіальні градієнти интерполируют кольору між фокусом і точками на колі навколо неї, а конічні градієнти интерполируют кольору навколо центральної точки.</p>
        <h2>Створення пристрою малювання</h2>
        <p>Клас QPaintDevice є базовим для об'єктів, на яких можна малювати, тобто QPainter може малювати на будь-яких підкласах QPaintDevice. Можливості малювання на QPaintDevice'е в даний час реалізовані підкласами QWidget, QImage, QPixmap, QGLWidget, QGLPixelBuffer, QPicture і QPrinter.</p>
        <br><img src="images/paint3.png"><br>
        <h2>Призначені для користувача серверні частини (Backends)</h2>
        <p>Поддержка новой серверной части может быть реализована производным классом от QPaintDevice и переопределенной виртуальной функции QPaintDevice::paintEngine(), сообщающей QPainter'у каким механизмом рисования воспользоваться для рисования на данном конкретном устройстве. Чтобы на самом деле быть способным рисовать на устройстве, этот механизм рисования должен быть пользовательским механизмом рисования, созданным наследованием от класса QPaintEngine.</p>
        <h2>Віджет</h2>
        <p>Клас QWidget є базовим класом для всіх об'єктів користувальницького інтерфейсу. Віджет - це елементарний об'єкт призначеного для користувача інтерфейсу: він отримує події миші, клавіатури та інші події від віконної системи і малює своє зображення на екрані.</p>
        <h2>Зображення</h2>
        <p>Клас QImage надає апаратно-незалежне представлення зображення, яке спроектовано і оптимізовано для введення / виведення і для безпосереднього доступу до пікселів і маніпуляцій з ними. QImage підтримує кілька форматів зображень, включаючи монохромне, 8-бітове, 32-бітове і зображення з альфа-змішуванням.</p>
        <p>Однією з переваг використання QImage як пристрій малювання є можливість гарантувати піксельну точність будь-якої операції малювання незалежним від платформи способом. Іншою перевагою є те, що малювання може виконуватися в іншому потоці, а не в поточному потоці ДПІ.</p>
        <h2>Pастрове зображення</h2>
        <p>Клас QPixmap є позаекранного поданням зображення, яке спроектовано і оптимізовано для перегляду зображень на екрані. На відміну від QImage, дані про пікселях в растровому зображенні є внутрішніми і управляються основний віконною системою, тобто доступ до пікселів може бути здійснений тільки через функції QPainter'а або після перетворення QPixmap в QImage.</p>
        <p>Щоб оптимізувати малювання за допомогою QPixmap, Qt надає клас QPixmapCache, який можна використовувати для збереження тимчасових растрових зображень, які дорого генерувати без використання області пам'яті, що перевищує граничний розмір кеша.</p>
        <p>Qt також надає допоміжний клас QBitmap, успадкований від QPixmap. QBitmap забезпечує монохромні (глибиною в 1 біт) растрові зображення і використовується головним чином для створення призначених для користувача об'єктів QCursor і QBrush, створення об'єктів QRegion, а також для установки масок для растрових зображень і віджетів.</p>
        <h2>Віджет OpenGL</h2>
        <p>Як було сказано вище, Qt надає модуль QtOpenGL, що пропонує класи, які спрощують використання OpenGL в додатках Qt. Наприклад, QGLWidget дозволяє OpenGL API для візуалізації.</p>
        <p>Однак QGLWidget також є підкласом QWidget і може бути використаний QPainter'ом як будь-який інший пристрій малювання. Однією з переваг є те, що це дозволяє Qt використовувати високу продуктивність OpenGL для більшості операцій малювання, таких як перетворення і малювання растрових зображень.</p>
        <h2>Піксельний буфер</h2>
        <p>Модуль QtOpenGL також надає клас QGLPixelBuffer, який є прямим спадкоємцем QPaintDevice.</p>
        <p>QGLPixelBuffer инкапсулирует піксельний буфер OpenGL, pbuffer. Візуалізація в pbuffer зазвичай проводиться з використанням повного апаратного прискорення, що може бути значно швидше ніж візуалізація в QPixmap.</p>
        <h2>Framebuffer Object</h2>
        <p>Модуль QtOpenGL також надає клас QGLFramebufferObject, який є прямим спадкоємцем QPaintDevice.</p>
        <p>QGLFramebufferObject инкапсулирует об'єкт буфера кадрів OpenGL. Об'єкти буфера кадрів можна також використовувати для позаекранного візуалізації, і дає деякі переваги перед використанням піксельних буферів для цієї мети. Вони описані в документації класу QGLFramebufferObject.</p>
        <h2>Зображення</h2>
        <p>Клас QPicture - пристрій малювання, яке записує і відтворює команди QPainter'а. Зображення перетворює команди рисувальника для пристрою введення-виведення в послідовну форму в платформонезавісимость форматі. QPicture також не залежить від роздільної здатності, тобто QPicture може відображатися на різних пристроях (наприклад, svg, pdf, ps, принтері і екрані), маючи при цьому один і той же зовнішній вигляд.</p>
        <p>Qt надає функції QPicture :: load () і QPicture :: save () для завантаження і збереження зображень. Але крім того клас QPictureIO надається щоб дати можливість програмісту встановлювати нові формати зображень крім тих, що надає Qt.</p>
        <h2>Принтер</h2>
        <p>Клас QPrinter - пристрій малювання, яке малює на принтер. У Windows або Mac OS X QPrinter використовує вбудовані драйвера принтера. У X11 QPrinter генерує postscript і відправляє його в lpr, lp або іншу програму друку. QPrinter може також друкувати на будь-який інший об'єкт QPrintEngine.</p>
        <p>Клас QPrintEngine визначає інтерфейс, через який QPrinter взаємодіє з наявної підсистемою друку. У загальному випадку, коли створюється власний механізм друку, він успадковується і від QPaintEngine і від QPrintEngine.</p>
        <p>Формат виведення за замовчуванням залежить від платформи, на якій працює принтер, але явно налаштувавши формат виведення для QPrinter :: PdfFormat, QPrinter буде генерувати свій висновок у вигляді PDF-файлу.</p>
        <h2>Читання і запис файлів зображень</h2>
        <p>Найбільш поширений спосіб читання зображень - за допомогою конструкторів QImage і QPixmap, або виклику функцій QImage :: load () і QPixmap :: load (). Крім того, Qt надає клас QImageReader, який дає більший контроль за процесом. Залежно від базової підтримки в форматі зображення, функції надаються класом можуть зберігати пам'ять і прискорити завантаження зображень.</p>
        <p>Також Qt надає клас QImageWriter, який підтримує установку опцій, специфічних для формату, наприклад, гамма-рівень, рівень стиснення і якість, перед збереженням зображення. Якщо вам не потрібні такі опції, використовуйте замість QImage :: save () або QPixmap :: save ().</p>
        <h2>QMovie</h2>
        <p>QMovie - допоміжний клас для відображення анімації, який використовує клас QImageReader для внутрішніх потреб. Після того, як клас QMovie створений, він надає різні функції і для запуску, і для управління наявною анімацією.</p>
        <p>Класи QImageReader і QImageWriter залежать від класу QImageIOHandler, який є загальним інтерфейсом введення / виведення зображення для всіх форматів зображень в Qt. Об'єкти QImageIOHandler використовуються для внутрішніх потреб в QImageReader і QImageWriter для додавання в Qt підтримки різних форматів зображення.</p>
        <p>Список підтримуваних форматів файлів доступний за допомогою функцій QImageReader :: supportedImageFormats () і QImageWriter :: supportedImageFormats (). Qt підтримує кілька форматів файлів за замовчуванням, а крім того нові формати можуть бути додані в якості модулів. Підтримувані в даний час формати перераховані в документації класів QImageReader і QImageWriter.</p>
        <p>Механізм модулів Qt може також використовуватися для написання обробників користувальницьких форматів зображення. Це робиться успадкуванням від класу QImageIOHandler і створенням об'єкта QImageIOPlugin, який є фабрикою для створення об'єктів QImageIOHandler. Коли модуль встановлений, QImageReader і QImageWriter автоматично завантажать його і почнуть його використовувати.</p>
        <h2>Візуалізація SVG</h2>
        <p>Масштабна векторна графіка (Scalable Vector Graphics, SVG) - мова опису як статичної, так і анімованої двомірної векторної графіки. Qt включає підтримку статичних можливостей SVG 1.2 Tiny.</p>
        <p>Малюнки SVG можуть бути візуалізовані на будь-якому підкласі QPaintDevice. Такий підхід дає розробникам гнучкість і можливість експериментувати і знаходити найкраще рішення для конкретної ситуації.</p>
        <p>Найлегший спосіб відображення файлів SVG - це створення QSvgWidget і завантаження в нього файлу SVG за допомогою однієї з функцій QSvgWidget :: load (). Візуалізація виконується класом QSvgRenderer, який також може бути використаний безпосередньо для надання підтримки SVG для призначених для користувача віджетів.</p>
        <p>Для отримання додаткової інформації дивіться документацію модуля QtSvg.</p>
        <h2>Застосування стилів</h2>
        <p>Вбудовані віджети Qt використовують клас QStyle для виконання майже всіх своїх операцій малювання. QStyle - абстрактний базовий клас, який інкапсулює зовнішній вигляд і поведінку ДПІ, і може використовуватися щоб змусити віджети виглядати точно також як "рідні" еквівалентні віджети або щоб надати віджетів призначений для користувача зовнішній вигляд.</p>
        <p>Qt надає набір підкласів QStyle, які емулюють зовнішній вигляд, властивий різним платформам, підтримуваних Qt (QWindowsStyle, QMacStyle, QMotifStyle і т.д.). Ці стилі вбудовані в бібліотеку QtGui, інші ж стилі можна зробити доступними використовуючи механізм модулів Qt.</p>
        <p>Більшість функцій для відтворення елементів стилю отримують чотири аргументи:</p>
        <p> - значення перерахування, яке вказує який графічний елемент малюється</p>
        <p> - об'єкт QStyleOption вказує як і де візуалізувати елемент</p>
        <p> - об'єкт QPainter, який буде використовуватися для відтворення елемента</p>
        <p> - об'єкт QWidget, на якому виконується малювання (необов'язковий)</p>
        <p>Стиль отримує всю інформацію, необхідну для візуалізації графічного елементу, з класу QStyleOption. Віджет передається в останньому аргумент в тому випадку, якщо стиль має потребу в ньому для створення спеціальних ефектів (таких як анімовані кнопки за замовчуванням в Mac OS X), але це не обов'язково. Фактично, QStyle може використовуватися для малювання на будь-якому пристрої малювання (не тільки віджети), в цьому випадку аргумент віджета дорівнює нульовому вказівником (zero pointer).</p>
        <p>Система рисования также предоставляет класс QStylePainter, унаследованный от QPainter. QStylePainter - вспомогательный класс для отрисовки элементов QStyle внутри виджета, а также расширяет QPainter с помощью набора высокоуровневых функций рисования, реализованных поверх API QStyle'а. Преимущество от использования QStylePainter заключается в том, что списки получаемых параметров значительно короче.</p>
        <h2>QIcon</h2>
        <p>Клас QIcon надає масштабовані піктограми в різних режимах і станах.</p>
        <p>QIcon може сформувати растрові зображення, що відображають стан піктограми, режим і розмір. Ці растрові зображення формуються з набору растрових зображень, які робляться доступними для піктограми, і використовуються віджетами Qt для показу піктограми, що представляє окрему дію.</p>
        <p>Візуалізація об'єкта QIcon обробляється класом QIconEngine. Кожна піктограма має механізм піктограм, який відповідає за отрисовку піктограми з необхідним розміром, режимом і станом.</p>
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