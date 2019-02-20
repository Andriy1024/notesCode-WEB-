<!DOCTYPE html>
<html>
<head>
	<title>Конструктор і деструктор</title>
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
        <center><h1>Конструктор і деструктор класів в  С++</h1></center>
        <br>
        <p>Почнемо з того, що коли ми створюємо елементи (змінні) класу, ми не можемо присвоїти їм значення в самому визначенні класу. Компілятор видасть помилку. Тому нам необхідно створювати окремий метод (так звану set-функцію) класу, за допомогою якого і буде відбуватися ініціалізація елементів. При цьому, якщо необхідно створити, наприклад, 20 об'єктів класу, то щоб ініціалізувати елементи потрібно 20 раз викликати set-функції.</p>
        <p>Тут нам якраз зможе допомогти конструктор класу. До речі, конструктор (від слова побудувати – створювати) - Це спеціальний метод класу, який призначений для ініціалізації елементів класу деякими початковими значеннями.</p>
        <p>На відміну від конструктора, деструктор (від слова самознищення – руйнувати) – спеціальний метод класу, який служить для знищення елементів класу. Найчастіше його використовують тоді, коли в конструкторі,при створенні об'єкта класу, динамічно була виділена ділянка пам'яті і необхідно цю пам'ять очистити, якщо ці значення вже не потрібні для подальшої роботи програми.</p>
        <p>Важливо запам'ятати:</p>
        <p>1. конструктор і деструктор, ми завжди оголошуємо в розділі public;</p>
        <p>2. при оголошенні конструктора, тип даних значення, що повертається не вказується, в тому числі – void!!!;</p>
        <p>3. у деструктора також немає типу даних для повертається значення, до того ж деструктора не можна передавати ніяких параметрів;</p>
        <p>4. ім'я класу і конструктора повинно бути ідентично;</p>
        <p>5. ім'я деструктора ідентично імені конструктора, але з приставкою ~ ;</p>
        <p>6. У класі допустимо створювати кілька конструкторів, якщо це необхідно. Імен, згідно з пунктом 2 нашого списку, будуть однаковими. Компілятор буде їх розрізняти по переданим параметрам (як при перевантаженні функцій). Якщо ми не передаємо в конструктор параметри, він вважається конструктором за замовчуванням;</p>
        <p>7. Зверніть увагу на те, що в класі може бути оголошений лише один деструктор;</p>
        <p>Відразу хочу привести приклад, який доступно покаже, як працює конструктор:</p>
        <pre><code class="cpp">  # include < iostream >   
        using namespace std;   
        class AB //клас   
        {   

            private:   

            int a;   

            int b;   

            public:   

            AB() //це конструктор: 1) у конструктора нема типа значення, що повертається! в тому числі void!!!   

            // 2) ім'я повинне бути таким як і у класу (в нашому випадку AB)   

            {   

                a = 0;//дамо початкові значення змінним   

                b = 0;   

                cout << "Робота конструктора при створенні нового об'єкта: " << endl;//і тут же їх відобразимо на екран   

                cout << "a = " << a << endl;   

                cout << "b = " << b << endl << endl;   

            }   

        void setAB() // за допомогою цього методу змінимо початкові значення задані конструктором   

        {       

            cout << "Введіть ціле число а: ";   

            cin >> a;   

            cout << "Введіть ціле число b: ";   

            cin >> b;   

        }   

        void getAB() //виведемо на екран змінені значення   

        {   

            cout << "a = " << a << endl;   

             cout << "b = " << b << endl << endl;   

        }   

        ~AB() // це деструкція. Не будемо змушувати його очистити пам'ять, нехай просто покаже де він спрацював   

        {   

            cout << "Тут спрацював деструктор" << endl;   

        }   

        };   

        int main()   {   

            setlocale(LC_ALL, "ukr");   

            AB obj1; //конструктор спрацює на даному етапі (під час створення об'єкта класу)   

            obj1.setAB(); // дамо нові значення змінних   

            obj1.getAB(); //і виведемо їх на екран  

            AB obj2; //конструктор спрацює на даному етапі (під час створення 2-го об'єкта класу)   

            return 0;   

        } </code></pre>
        <p>Хочеться ще додати, що, як і звичайних функцій, ми можемо передавати конструктору параметри. Через параметри, конструктору можна передавати будь-які дані, які будуть необхідні при ініціалізації об'єктів класу.</p>
        <p>Деструкція спрацьовує в той момент, коли завершується робота програми і знищуються всі дані.</p>
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