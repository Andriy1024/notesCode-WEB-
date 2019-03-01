
			<center><h1>Цикли</h1></center>
            <br>
      <h2>Поняття циклу в мові програмування</h2>
      <p>Часто, при програмуванні задач, потрібно, щоб одна й таж послідовність команд виконувалась декілька ра0зів. Для цього у мовах програмування застосовується поняття циклічного процесу або циклу. Алгоритм, в якому певна послідовність команд повторюється декілька разів з новими вхідними даними називається циклічним.</p>
      <p>Циклічний процес організовується з допомогою операторів циклу. Мова програмування C/C++ має в наявності зручні для роботи оператори циклу.</p>
      <h2>Види операторів циклу у мові C++</h2>
      <p>У мові C++ існує 3 види операторів циклу</p>
       <ul>
        <li><b>- цикл for;</b></li>
        <li><b>- цикл while з передумовою;</b></li>
        <li><b>- цикл do…while з постумовою.</b></li>
     </ul>
     <p>Кожен з операторів циклу має свої особливості застосування. Будь-який з вищенаведених операторів циклу може бути замінений іншим.</p>
     <h2>Цикл for. Загальна форма оператора циклу for</h2>
     <p>У мові C++ цикл for може мати дуже широку реалізацію та застосування. Цикл for ще називається циклом з параметром.</p>
     <p>Загальна форма оператора циклу for:</p>
<pre><code class="cpp"> for (ініціалізація; вираз; приріст)

     {

     // послідовність операторів

     } 
     </code></pre>
     <p>де</p>
     <p>ініціалізація – операція присвоювання, в якій встановлюється початкове значення змінної циклу. Ця змінна є лічильником, який керує роботою циклу. Кількість змінних, що керують циклом for, може дві і більше;</p>
     <p>вираз – умовний вираз, в якому перевіряється значення змінної циклу. На цьому етапі визначається подальше виконання циклу;</p>
     <p>приріст – визначає, як буде змінюватись значення змінної циклу після кожної ітерації.</p>
     <p>Цикл <b>for</b> виконується до тих пір, поки значення вираз рівне <b>true</b>. Як тільки значення вираз стане <b>false</b>, виконання циклу припиняється і виконується оператор, що слідує за циклом <b>for</b>.</p>
     <h2>Приклади використання оператора циклу for</h2>
     <p>Знайти суму всіх цілих чисел від 100 до 300. Фрагмент коду, що розв‘язує дану задачу.</p>
<pre><code class="cpp"> // сума чисел від 100 до 300

     int sum;

     int i;

     sum = 0;

     for (i = 100; i<=300; i++)

     sum = sum + i;

     // sum = 40200   </code></pre>
     <h2>Які існують варіанти реалізації циклу for?</h2>
     <p>Цикл for може мати декілька різновидів реалізації. Кількість змінних, що керують циклом for може бути одна, дві і більше.</p>
     <p>У циклі for може бути відсутній будь-який з елементів заголовку циклу:</p>
     <ul>
        <li><b>- ініціалізація;</b></li>
        <li><b>- вираз;</b></li>
        <li><b>- приріст.</b></li>
     </ul>
     <p>Приклад оператора циклу for, в якому є 2 керуючі змінні. Знайти значення добутку:</p>
<pre><code class="cpp"> D = (1 + cos(9)) * (2 + cos(8)) * … * (9 + cos(1))   </code></pre>
     <p>Фрагмент коду, що розв‘язує дану задачу.</p>
<pre><code class="cpp"> // D = (1 + cos(9))*(2 + cos(8))* ... *(9 + cos(1))

     int i, j;

     float d;

     d = 1;

     for (i = 1, j = 9; i<=9; i++, j--)

     &nbsd = d * (i + Math::Cos(j));  </code></pre>
     <p>У вищенаведеному фрагменті коду в циклі for використовуються дві змінні, що змінюють своє значення (i, j).</p>
     <h2>Цикл while. Загальна форма</h2>
     <p>Цикл while називається циклом з передумовою. Загальна форма циклу while наступна:</p>
<pre><code class="cpp"> while (вираз)

     {

     // послідовність операторів

     }   </code></pre>
     <p>де вираз – будь-який допустимий вираз у мові C++.</p>
     <p>Послідовність операторів виконується до тих пір, поки умовний вираз повертає значення true. Як тільки вираз стає рівним false, виконання циклу while припиняється і управління передається наступному за циклом while оператору.</p>
     <h2>Приклад використання оператора циклу while</h2>
     <p>Дано натуральне число. Визначити кількість цифр 3 в ньому.</p>
     <p>Фрагмент коду, що розв‘язує дану задачу.</p>
<pre><code class="cpp"> // кількість цифр 3 у числі

     int n; // задане натуральне число

     int k; // кількість цифр 3 у числі

     int t, d; // додаткові змінні

     n = 12343;

     t = n; // робимо копію з n

     k = 0;

     while (t>0)

     {

     d = t % 10; // виділити останню цифру

     if (d == 3) k++;

     t = t / 10; // зменшити розрядність числа

     }

     // k = 2   </code></pre>
     <p>У даному прикладі, значення вихідного числа буде ділитись на 10 при кожній ітерації. Таким чином, буде зменшуватись розрядність числа. На кожній ітерації, з допомогою операції % мови C++ береться остача від ділення на 10, тобто визначається остання цифра числа. Якщо ця цифра рівна 3, то лічильник k збільшується на 1.</p>
     <h2>Загальна форма оператора циклу do…while</h2>
     <p>Цикл do … while доцільно використовувати у випадках, коли ітерацію потрібно зробити хоча б 1 раз. На відміну від циклів for та while, у циклі do…while умова перевіряється при виході з циклу (а не при вході в цикл).
Загальна форма оператора циклу do…while:</p>
<pre><code class="cpp"> do

     {

     // послідовність операторів

     }

     while (вираз);   </code></pre>
    <p>де  вираз – умовний вираз, в якому перевіряється значення змінної циклу. На цьому етапі визначається подальше виконання циклу.</p>
    <p>Фігурні дужки у цьому циклі необов‘язкові.</p>
    <p>Цикл працює наступним чином. Спочатку відбувається виконання тіла циклу. Потім перевіряється значення вираз (умовний вираз). Якщо значення вираз є істинним (true), виконується знову тіло циклу. Як тільки значення вираз стане false, виконання циклу припиняється.</p>
    <h2>Приклади використання оператора циклу do…while</h2>
<pre><code class="cpp"> S = 1 + 3 + … + 99   </code></pre>
    <p>Фрагмент коду, що розв‘язує дану задачу.</p>
<pre><code class="cpp"> // s = 1 + 3 + ... + 99

     int t;

     int s;

     s = 0;

     t = 1;

     do

     {

     s = s + t;

     t = t + 2;

     }

     while (t<=99);

     // s = 2500   </code></pre>
    <h2>Вкладені цикли. Приклад використання</h2>
    <p>Вкладені цикли можуть бути використані, наприклад, при роботі з двовимірними (багатовимірними) масивами (занулення масиву, обчислення сум, добутків та інше).</p>
    <p>Обчислити добуток</p>
<pre><code class="cpp"> D = 1 · (1 + 2) · (1 + 2 + 3) · … · (1 + 2 + … + 9)

     Фрагмент коду, що розв‘язує дану задачу.

     // D = 1 * (1+2) * (1+2+3) * ... * (1+2+...+9)

     float d; // результат - добуток

     int i, j; // лічильники циклів

     int s; // додаткова змінна

     d = 1;

     for (i = 1; i<=9; i++)

     {

     s = 0;

     for (j = 1; j<=i; j++)

     s = s + j;

     d = d * s;

     }

     // d = 2.571912E+09   </code></pre>
<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
