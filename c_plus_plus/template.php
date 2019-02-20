<!DOCTYPE html>
<html>
<head>
	<title>template</title>
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
        <center><h1>Шаблони функцій в С++</h1></center>
        <br>
        <p>
Шаблони функцій, своїми словами,- Це інструкції, згідно з якими створюються локальні версії шаблованої функції для певного набору параметрів і типів даних.</p>
         <p>Насправді, шаблони функцій -це потужний інструмент у С , який значно спрощує роботу програміста. Наприклад, нам потрібно запрограмувати функцію, яка виводила б на екран елементи масиву. Завдання не складне! Але, щоб написати таку функцію, ми повинні знати тип даних масиву, який будемо виводити на екран. І тут нам говорять – тип даних не один, ми хочемо, щоб функція виводила масиви типу int, double, float і char.</p>
         <p>Як виявилося, завдання ускладнилося. І тепер ми розуміємо, що нам потрібно запрограмувати цілих 4 функції, які виконують одні й ті ж дії, але для різних типів даних. Так як ми ще не знайомі з шаблонами функцій, ми поступимо так: скористаємося перевантаженням функцій.</p>
         <pre><code class="cpp">  // перевантаження функції printArray для виведення масиву на екран
         void printArray(const int * array, int count)
         {
            for (int ix = 0; ix < count; ix++)

               cout << array[ix] << " ";

               cout << endl;
            }
         void printArray(const double * array, int count)
         {
            for (int ix = 0; ix < count; ix++)

            cout << array[ix] << " ";

            cout << endl;
         }</code></pre>
         <p>Таким чином, ми маємо 4 перевантажені функції, для різних типів даних. Як бачите, вони відрізняються тільки заголовком функції, тіло у них абсолютно однакове. Я написав один раз тіло функції для типу int і три рази його скопіював для інших типів даних.</p>
         <p>І, якщо запустити програму з цими функціями, то вона буде справно працювати. Компілятор сам визначатиме яку функцію використовувати при виклику.</p>
         <p>Як бачите, коду вийшло досить багато, як для такої простої операції. А що якщо, нам знадобиться запрограмувати алгоритм сортування у вигляді функції. Виходить, що для кожного типу даних доведеться свою функцію створювати. Тобто, самі розумієте, що один і той же код буде в кількох примірниках, нам це ні до чого. Тому в С придуманий такий механізм - шаблони функцій.</p>
         <p>Ми створюємо один шаблон, в якому описуємо всі типи даних. Таким чином вихідний код НЕ БУДЕ захаращуватися нікому не потрібними рядками коду. Нижче розглянемо приклад програми з шаблоном функції. Отже, згадаємо умову: “запрограмувати функцію, яка виводила б на екран елементи масиву”.</p>
         <pre><code class="cpp">   #include "stdafx.h"
         #include < iostream >
         #include < cstring >
         using namespace std;
         // шаблон функциї printArray
         template < typename T >
         void printArray(const T * array, int count)
         {

            for (int ix = 0; ix < count; ix++)

               cout << array[ix] << " ";

            cout << endl;

         } // кінець шаблону функції printArray

         int main() {
         // розміри масивів
         const int iSize = 10,dSize = 7;
         // масиви різних типів даних

         int iArray[iSize] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};

         double dArray[dSize] = {1.2345, 2.234, 3.57, 4.67876, 5.346, 6.1545, 7.7682};

         cout <<"\t\t Шаблон функції виведення масиву на екран\n\n";

         // виклик локальної версії функції printArray для типу int через шаблон

         cout << "\nМассив типу int:\n"; printArray(iArray, iSize);

         //виклик локальної версії функції printArray для типу double через шаблон

         cout << "\nМассив типу double:\n"; printArray(dArray, dSize);

         return 0;
         }</code></pre>
         <p>Всі шаблони функцій починаються зі слова template, після якого йдуть кутові дужки, в яких перераховується список параметрів. Кожному параметру повинно передувати зарезервоване слово class або typename.</p>
         <pre><code class="cpp">template < class T ></code></pre>
         <p>або</p>
         <pre><code class="cpp">template  < typename T ></code></pre>
         <p>або</p>
         <pre><code class="cpp">template < typename T1, typename T2 ></code></pre>
         <p>Ключове слово typename говорить про те, що в шаблоні буде використовуватися вбудований тип даних, такий як: int, double, float, char і т. д. А ключове слово class повідомляє компілятору, що в шаблоні функції як параметр будуть використовуватися для користувача типи даних, тобто класи.</p>
         <p>Шаблони функцій також можна перевантажувати іншими шаблонами функцій, змінивши кількість переданих параметрів у функцію. Ще однією особливістю перевантаження є те, що шаблонні функції можуть бути перевантажені зазвичай не шаблонними функціями. Тобто вказується те ж саме ім'я функції, з тими ж параметрами, але для певного типу даних, і все буде коректно працювати.</p>
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