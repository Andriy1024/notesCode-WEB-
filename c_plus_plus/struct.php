
        <center><h1>Структури в С++</h1></center>
        <br>
        <p>Якщо ви читаєте цю статтю, то звичайно досить багато вже знаєте про типах даних мови С++ . А тепер тільки уявіть – ви самі можете створювати, свого роду, типи даних, які вам необхідні і з якими вам буде зручно працювати! І це нескладно!</p>   
        <p>Структура – це , якесь об'єднання різних змінних (навіть з різними типами даних), якому можна присвоїти ім'я. Наприклад можна об'єднати дані про об'єкт Будинок: місто (в якому будинок знаходиться), вулиця, кількість квартир, інтернет(проведено чи ні) і т.д. в одній структурі. Загалом, можна зібрати в одну сукупність дані про все, що завгодно, точніше про все, що необхідно конкретному програмісту. Всім відразу стало зрозуміло :)</p>
        <p>Якщо ви вперше до знайомству зі структурами в С , спочатку, вам необхідно ознайомитися з синтаксисом структур в мові С . Розглянемо простий приклад, який допоможе познайомитися зі структурами і покаже, як з ними працювати. У цій програмі ми створимо структуру, створимо об'єкт структури, заповнимо значеннями елементи структури (дані про об'єкт) і виведемо ці значення на екран. Ну що ж, приступимо!</p>
        <pre><code class="cpp">
        #include <iostream>

        using namespace std;

        struct building //створюєм структуру!

        {

        char *owner; //тут буде зберігатися ім'я власника

        char *city; //назва міста

        int amountRooms; //кількість кiмнат

        float price; //цiна

        };

        int main()

        {

        setlocale (LC_ALL, "ukr")

        building apartment1; //це об'єкт структури з типом даних, ім'ям структури, building

        apartment1.owner = "Денис"; //заповнюємо дані про власника і т.д.

        apartment1.city = "Сiмферополь";

        apartment1.amountRooms = 5;

        apartment1.price = 150000;

        cout << "Власник квартири: " << apartment1.owner << endl;

        cout << "Квартира знаходиться в місті: " << apartment1.city << endl;

        cout << "Кількість кімнат : " << apartment1.amountRooms << endl;

        cout << "вартість: " << apartment1.price << " $" << endl;

        return 0;

        }
        </code></pre>
        <h2>Коментарі за кодом програми:</h2>
        <p>В рядках 4 – 10 ми створюємо структуру. Щоб її оголосити використовуємо зарезервоване слово struct і даємо їй будь, бажано логічне, ім'я. У нашому випадку – building. З правилами іменування змінних, ви можете ознайомитися в цій статті. Далі відкриваємо фігурну дужку { , перераховуємо 4 елемента структури через крапку з комою ; , закриваємо фігурну дужку } і в завершенні ставимо крапку з комою ;. Це буде нашим шаблоном (формою) структури.</p>
        <p>В рядку 16 оголошуємо об'єкт структури. Як і для звичайних змінних, необхідно оголосити тип даних. У цій якості виступить ім'я нашої створеної структури – building.</p>
        <p>Як же заповнити даними (инициализировать) елементи структури? Синтаксис такий: Ім'я об'єкта далі оператор крапка . і ім'я елемента структури. Наприклад: apartment1.owner. Таким чином, в рядках 18-21 присвоюємо дані елементам структури.</p>
        <p>Отже, дані ми внесли. Наступне питання: “Як до них звернутися, як працювати і використовувати їх в програмі?” Відповідь – “Дуже просто – так само, як і при ініціалізації, використовуючи точку . і ім'я елемента структури”. В рядках 23 – 26 виводимо заповнені елементи структури на екран.</p>
        <h2>Що ще важливо знати:</h2>
        <p>Об'єкт структури можна оголосити до функції main().</p>
        <p>Ініціалізувати структуру можна і таким способом:</p>
        <pre><code class="cpp">
        building apartment1 = {"Денис", "Сiмферополь", 5, 150000};
        </code></pre>
        <p>труктуру можна вкладати в інші структури.</p>
        <p>через покажчик до елементу структури потрібно звертатися використовуючи оператор -> ; У прикладі це буде так: apartment0->owner, але можна і так (*apartment0).owner. Круглі скобки, у другому випадку, обов'язкові.</p>
        <p>Ось так, коротко, ми познайомилися зі структурами в мові С++ , попрактикували на прикладах і дізналися основи. Це тільки початок!</p>
        <script type="text/javascript">hljs.initHighlightingOnLoad();</script>
        