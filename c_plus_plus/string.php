<!DOCTYPE html>
<html>
<head>
	<title>Символи і рядки в С++</title>
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
        <center><h1>Символи і рядки в С++</h1></center>
        <br>
        <p>Символ - елементарна одиниця, деякий набір, певного змісту. В мові програмування С++ передбачено використання символьних констант. Символьна константа - це ціле значення (типу int) представлене у вигляді символу, поміщеного в одинарні лапки, наприклад 'a'. У таблиці ASCII представлені символи і їх цілочисельні значення.</p>
        <pre><code class="cpp">
        // оголошення змінної

        char symbol = 'a';

        // де symbol – імя перемінної типу char

        // char – тип данних для зберігання символов
        </code></pre>
        <p>Рядки в С++ представляються як масиви елементів типу char, завершуються нуль-термінатором \0 називаються C рядками або рядками в стилі С.</p>
        <p>\0 – символ нуль-термінатора.</p>
        <p>Символьні рядки складаються з набору символьних констант поміщених в подвійні лапки. При оголошенні рядкового масиву необхідно враховувати наявність в кінці рядка нуль-термінатора, і відводити додатковий байт під нього.</p>
        <pre><code class="cpp">
        // приклад оголошення стрічки

        char string[10];

        // де string – імя стрічкової змінної

        // 10 – розмір массива, тобто в даній стрічці може поміститися 9 символів , останнє місце виділяється під нуль-термінатор.
        </code></pre>
        <p>Рядок при оголошенні може бути ініційований початковим значенням, наприклад, так:</p>
        <pre><code class="cpp">
        char string[10] = "abcdefghf";
        </code></pre>
        <p>Якщо підрахувати кількість символів у подвійних лапках після символу дорівнює, їх виявиться 9, а розмір рядка 10 символів, останнє місце відводиться під нуль-термінатор, та компілятор самостійно додасть його в кінець рядка.</p>
        <pre><code class="cpp">
        // посимвольна ініціалізація стрічки:

        char string[10] = {'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'f', '\0'};

        //При оголошенні рядка не обов'язково вказувати його розмір, але при цьому обов'язково потрібно його форматувати початковим значенням. Тоді розмір рядка визначиться автоматично і в кінець рядка буде додано нуль-термінатор.

        //ініціалізація рядки без вказання розміру

        char string[] = "abcdefghf";

        //все те ж саме тільки розмір не вказуємо.

        //Рядок може містити символи, цифри та спеціальні знаки. В С++ рядки розміщують в подвійних лапках. Ім'я рядка є константним покажчиком на перший символ. Розробимо програму, з використанням рядків.

        #include "stdafx.h"

        #include < iostream >

        using namespace std;

        int main(int argc, char* argv[])

        {

        char string[] = "this is string - "; // оголошення і ініціалізація рядка

        cout << "Enter the string: ";

        char in_string[500]; // строковий масив для введення

        gets(in_string); // функція gets() зчитує всі введені символи з пробілами до тих пір, поки ви не натиснете Enter

        cout << string << in_string << endl; // вивід стрічки

        system("pause");

        return 0;

        }
        </code></pre> 
        <p>У рядку 12 за допомогою функції gets() зчитуються всі введені символи з пробілами доти, поки у вводимому потоці не трапиться код клавіші enter. Якщо використовувати операцію cin то з усього введеного зчитується послідовність символів до першого пробілу</p>
        <h2>Функції для роботи з рядками і символами</h2>
        <p>StrLen(ім'я_рядка)   визначає довжину вказаного рядка, без урахування нуль-символу</p>
        <p>strcpy(S1, S2)   виконує побайтне копіювання символів з рядка s2 в рядок s1</p>
        <p>strncpy(S1, S2, N)   виконує побайтное копіювання n символів з рядка s2 в рядок s1. повертає значення s1</p>
        <p>strcat(S1, S2)   об'єднує рядок s2 з рядком s1. Результат зберігається в s1</p>
        <p>strncat(S1, S2, N)   об'єднує n символів рядка s2 з рядком s1. Результат зберігається в s1</p>
        <p>strcmp(S1, S2)   порівнює рядок s1 з рядком s2 і повертає результат типу int: 0 - якщо рядки еквівалентні, >0 - якщо s1&lt;s2, &lt;0 – якщо s1>s2 З урахуванням регістру</p>
        <p>atof(S1) перетворить рядок s1 в тип double</p>
        <p>atoi(S1) перетворить рядок s1 в тип int</p>
        <p>atol(S1) перетворить рядок s1 в тип long int</p> 
        <p>gets(s)  зчитує потік символів зі стандартного пристрою введення в рядок s доти, поки не буде натиснута клавіша ENTER</p>
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