
        <center><h1>Модальні і немодальні вікна</h1></center>
        <br>
        <p>Клас QDialog є базою для всіх діалогових вікон, представлених у класовій херургії Qt. Хоча діалогове вікно можна створювати за допомогою будь-якого іншого widget, зробивши його виходом верхнього рівня, тим не менше, зручніше скористатися класом QDialog, який надає ряд можливостей, необхідних всім діалоговым вікнам. Диалогові вікна підрозділяються на дві групи:</p>
        <p> - модальні;</p>
        <p> - немодальні.</p>
        <p>Режим модальності і немодального можна встановити і дізнатися за допомогою методів QDialog :: setModal () і QDialog :: isModal () відповідно.</p>
        <p>При установці true відповідає модальному режиму, a false - немодальному.</p>
        <h2>Модальні діалогові вікна</h2>
        <p>Такі вікна зазвичай використовуються для виведення важливих повідомлень. Наприклад, є помилки, на які користувач повинен відреагувати, перш ніж продовжити працювати з додатком. Модальні вікна переривають роботу програми і для продовження його роботи таке вікно має бути закрите.</p>
        <p>У цих випадках модальний діалог - ідеальний засіб для звернення уваги користувача на себе.</p>
        <p>Для блокування програми запускається цикл події тільки для діалогового вікна, а події клавіатури, миші та інших елементів програми просто ігноруються. Цей цикл запускається викликом слота exec (), який повертає значення цілого типу після закриття діалогового вікна. Це значення інформує про кнопці і може приймати значення QDialog :: Accepted або QDialog :: Rejected, відповідні кнопках Ok і Cancel (Скасувати). Типовим прикладом модального вікна є нагадування користувачеві, перед закриттям програми, про необхідність збереження документа. У момент відображення цього вікна можливість роботи з самим додатком повинна бути заблокована. Принцип виклику модального діалогового вікна приблизно наступний:</p>
       <pre><code class="cpp"> MyDialog* pdlg = new MyDialog(&data);   

       if (pdlg->exec() == QDialog::Accepted)   

       {   

           // Користувач вибрав Accepted   

           // Отримати дані для подальшого аналізу і обробки   

           Data data = pdlg->getData();   

           ...   

       }   

       delete pdlg;   </code></pre>
        <h2>Немодальні діалогові вікна</h2>
        <p>Немодальні діалогові вікна поводяться як нормальні віджети, не перериваючи, зі своєю появою, роботу додатка. На перший погляд може здатися, що застосування немодального діалогових вікон має більше сенсу, так як в цьому випадку користувач має більше свободи в своїх діях. Але, насправді, більшість додатків потребує зупинці і очікуванні рішення користувача для відновлення своїх подальших дій.</p>
        <p>Немодального вікно може бути відображено за допомогою методу show (), також як і для звичайного віджета. Метод show () не повертає ніяких значень і не зупиняє виконання всієї програми. Метод hide () дозволяє зробити вікно невидимим. Цим властивістю можна скористатися, і в цьому випадку не потрібно створювати кожен раз об'єкт діалогового вікна, а при закритті видаляти його з пам'яті. Можна обмежитися викликом методів show () і hide (), що дасть можливість відобразити діалогове вікно, на тому ж місці, на якому воно було згорнуто. Немодальні діалогові вікна необхідно постачати кнопкою Close (Закрити) для того, щоб дати можливість користувачу закрити його.</p>
        <script type="text/javascript">hljs.initHighlightingOnLoad();</script>
       