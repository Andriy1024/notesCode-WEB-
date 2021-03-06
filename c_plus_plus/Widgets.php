
        <center><h1>Віджети та компонування</h1></center>
        <br>
        <h2>Віджети</h2>
        <p>Віджети - це вихідні елементи для створення призначеного для користувача інтерфейсу в Qt. Віджети можуть відображати дані та інформацію про стан, отримати введення від користувача і надавати контейнер для інших віджетів, які повинні бути згруповані. Віджет, що не вбудований в батьківський віджет, називається вікном.</p>
        <p>Клас QWidget надає базову можливість для відтворення на екрані і для обробки подій для користувача введення. Всі елементи призначеного для користувача інтерфейсу, що надаються Qt, є підкласами QWidget або використовуються в поєднанні з підкласом QWidget. Створення призначених для користувача віджетів виконується успадкуванням від QWidget або відповідного підкласу і перевизначення віртуальних обробників подій.</p>
        <h2>Компонування</h2>
        <p>Компонування - елегантний і гнучкий спосіб для автоматичного розміщення дочірніх віджетів всередині контейнера. Кожен віджет повідомляє компонувальнику свої вимоги до розміру за допомогою властивостей sizeHint і sizePolicy, а компоновщик відповідно розподіляє обсяг пам'яті, доступний.</p>
        <p>Qt Designer - потужний інструмент для інтерактивного створення та розміщення віджетів в компоновках.</p>
        <h2>Стилі віджета</h2>
        <p>Стилі малюють від імені віджетів і інкапсулюють зовнішній вигляд і поведінку графічного призначеного для користувача інтерфейсу. Вбудовані віджети Qt використовують його для виконання майже всіх операцій малювання, гарантуючи схожість з аналогічними рідними віджетами.</p>
        <p>Таблиці стилів Qt - потужний механізм, який дозволяє настроювати зовнішній вигляд віджетів, на додаток до того, що вже доступний за допомогою створення підкласів QStyle.</p>
        <h2>Основні віджети</h2>
        <p>Основні віджети (елементи управління), наприклад, кнопки, списки, що випадають і смуги прокрутки, спроектовані для безпосереднього використання.</p>
        <p>QCheckBox - Прапорець з текстовою міткою</p>
        <p>QComboBox - Поєднання кнопки і спливаючого списку</p>
        <p>QCommandLinkButton - Командна кнопка-посилання в стилі Vista</p>
        <p>QDateEdit - Віджет для редагування дати, заснований на віджеті QDateTimeEdit</p>
        <p>QDateTimeEdit - Віджет для редагування дати та часу</p>
        <p>QDial - Елемент управління, проградуйований по колу (на зразок спідометра або потенціометра)</p>
        <p>QDoubleSpinBox - Віджет лічильника, яка приймає значення з плаваючою точкою</p>
        <p>QFocusFrame - Рамка фокуса, яка може відображатися навколо стандартної області перемальовування віджета</p>
        <p>QFontComboBox - Список, що випадає, який дозволяє користувачеві вибрати сімейство шрифтів</p>
        <p>QLCDNumber - Показує число за допомогою цифр, що імітують ЖК-індикатор</p>
        <p>Label - Відображає текст або малюнок</p>
        <p>QLineEdit - Однорядковий редактор тексту</p>
        <p>QMenu - Віджет меню, який використовується в панелі меню, контекстного меню та інших спливаючих меню</p>
        <p>QProgressBar - Горизонтальний або вертикальний індикатор виконання</p>
        <p>QPushButton - командна кнопка</p>
        <p>QRadioButton - Радіокнопка з текстовою міткою</p>
        <p>QScrollArea  - Область прокрутки на іншому віджеті</p>
        <p>QScrollBar - Вертикальна або горизонтальна смуга прокрутки</p>
        <p>QSizeGrip - Область захоплення для зміни розміру вікна верхнього рівня</p>
        <p>QSlider - Вертикальний або горизонтальний повзунок (slider)</p>
        <p>QSpinBox - Віджет лічильника</p>
        <p>QTabBar - Картотека для використання, наприклад, в діалогах з вкладками</p>
        <p>QTabWidget - Стек віджетів з вкладками</p>
        <p>QTimeEdit - Віджет для завдання часу, заснований на віджеті QDateTimeEdit</p>
        <p>QToolBox  - Вертикальний набір елементів віджетів з вкладками</p>
        <p>QToolButton - Кнопка швидкого доступу до команд або налаштувань, зазвичай використовується в QToolBar</p>
        <p>QWidget - Базовий клас для всіх об'єктів інтерфейсу користувача</p>
        <h2>Pозширені віджети</h2>
        <p>Розширені віджети ДПІ, наприклад, віджети зі складками і індикатори виконання, надають більш складні елементи управління призначеним для користувача інтерфейсом.</p>
        <p>QCalendarWidget - Віджет помісячного календаря, що дозволяє користувачеві вибрати дату</p>
        <p>QColumnView - Реалізація ідеї модель / подання до вигляді постолбцового уявлення</p>
        <p>QDataWidgetMapper - Відображення області даних моделі на віджети</p>
        <p>QDesktopWidget - Доступ до інформації про екран в багатоекранний системах</p>
        <p>QListView - Подання списку або піктограм в моделі</p>
        <p>QMacCocoaViewContainer - Віджет для Mac OS X, який може використовуватися для обгортання довільних уявлень Cocoa (тобто підкласів NSView) і вставки їх в ієрархії Qt</p>
        <p>QMacNativeWidget - Виджет для Mac OS X, который предоставляет способ помещения виджетов Qt в иерархии Carbon или Cocoa, в зависимости от того, как Qt была сконфигурирована</p>
        <p>QTableView - Реалізація за замовчуванням моделі / подання таблиці</p>
        <p>QTreeView - Реалізація моделі / уявлення за замовчуванням для представлення дерева</p>
        <p>QUndoView - Показує вміст QUndoStack</p>
        <p>QWSEmbedWidget - Надає можливість вбудовувати віджети верхнього рівня в Qt для вбудованих Linux-систем</p>
        <p>QWebView - Віджет, який використовується для перегляду і редагування веб-документів</p>
        <p>QX11EmbedContainer - Віджет-контейнер XEmbed</p>
        <p>QX11EmbedWidget - Віджет-клієнт XEmbed</p>
        <p>Phonon::VideoWidget - Віджет, який використовується для відображення відео</p>
        <h2>Віджети упорядкування</h2>
        <p>Такі класи, як роздільники, панелі вкладок, групи кнопок і т.д. використовуються для впорядкування і угруповання примітивів ДПІ в більш складних додатках і діалогах.</p>
        <p>QButtonGroup - Контейнер для управління групою віджетів-кнопок</p>
        <p>QGroupBox - Рамка з заголовком для панелі-контейнера</p>
        <p>QSplitter - Реалізує віджет-роздільник</p>
        <p>QSplitterHandle - Обробка функціональності роздільник</p>
        <p>QStackedWidget - Стек віджетів, в якому в один момент видно тільки один віджет</p>
        <p>QTabWidget - Стек віджетів з вкладками</p>
        <h2>Абстрактні класи віджетів</h2>
        <p>Абстрактні класи віджетів є базовими класами. Вони не використовуються в якості самостійних класів, але надають функціональність при створенні їх спадкоємців.</p>
        <p>QAbstractButton - Абстрактний базовий клас віджета кнопки, який реалізує загальні функції кнопок</p>
        <p>QAbstractScrollArea - Прокручувати область з смугами прокрутки, відображеними на вимогу</p>
        <p>QAbstractSlider - Ціле значення з діапазону</p>
        <p>QAbstractSpinBox - Лічильник і рядок редагування для відображення значення лічильника</p>
        <p>QDialog - Базовий клас для діалогових вікон</p>
        <p>QFrame - Базовий клас для віджетів, здатних мати рамку</p>
        