
        <center><h1>virtual в С++</h1></center>
        <br>
        <p>Поліморфізм часу виконання забезпечується за рахунок використання похідних класів і віртуальних функцій. Віртуальна функція - це функція, оголошена з ключовим словом virtual в базовому класі і перевизначена в одному або в декількох похідних класах. Віртуальні функції є особливими функціями, тому що при виклику об'єкта похідного класу за допомогою покажчика або посилання на нього С ++ визначає під час виконання програми, яку функцію викликати, грунтуючись на типі об'єкта. Для різних об'єктів викликаються різні версії однієї і тієї ж віртуальної функції. Клас, що містить одну або більше віртуальних функцій, називається поліморфним класом (polymorphic class).</p>
        <p>Віртуальна функція оголошується в базовому класі з використанням ключового слова virtual. Коли ж вона переопределяется в похідному класі, повторювати ключове слово virtual немає необхідності, хоча і в разі його повторного використання помилки не виникне.</p>
        <p>В качестве первого примера виртуальной функции рассмотрим следующую короткую программу:</p>
        <pre><code class="cpp"> // невеликий приклад використання віртуальних функцій   

        #include < iostream.h >   

        class Base {   

            public:   

            virtual void who() { // визначення віртуальної функції   

                cout << "Base\n";   

            }   

        };   

        class first_d: public Base {   

             public:   

            void who() { // визначення who () стосовно first_d   

            cout << "First derivation\n";   

            }   

        };   

        class seconded: public Base {   

            public:   

            void who() { // визначення who () стосовно second_d   

                cout << "Second derivation\n*";   

            }   

        };   

        int main()   

        {   

            Base base_obj;   

            Base *p;   

            first_d first_obj;   

            second_d second_obj;   

            p = &base_obj;   

            p->who(); // доступ до who класу Base   

            p = &first_obj;   

            p->who(); // доступ до who класу first_d   

            p = &second_ob;   

            p->who(); // доступ до who класу second_d   

             return 0;   

        } </code></pre>
        <p>Програма видасть наступний результат:</p>
        <pre><code class="cpp">Base   

        First derivation   

        Second derivation </code></pre>
        <p>Проаналізуємо детальніше цю програму, щоб зрозуміти, як вона працює.</p>
        <p>Як можна бачити, в об'єкті Base функція who () оголошена як віртуальна. Це означає, що ця функція може бути перевизначена в похідних класах. У кожному з класів first_d і second_d функція who () перевизначена. У функції main () визначено три змінні. Першою є об'єкт base_obj, що має тип Base. Після цього оголошений покажчик р на клас Base, потім об'єкти first_obj і second_obj, що відносяться до двох похідним класам. Далі вказівником р присвоєно адресу об'єкта base_objі викликана функція who (). Оскільки ця функція оголошена як віртуальна, то С ++ визначає на етапі виконання, яку з версій функції who () вжити, в залежності від того, на який об'єкт вказує покажчик р. В даному випадку їм є об'єкт типу Base, тому виповнюється версія функції who (), оголошена в класі Base. Потім вказівником р присвоєно адресу об'єкта first_obj. (Як відомо, покажчик на базовий клас може бути використаний для будь-якого похідного класу.) Після того, як функція who () була викликана, С ++ знову аналізує тип об'єкта, на який вказує р, для того, щоб визначити версію функції who ( ), яку необхідно викликати. Оскільки р вказує на об'єкт типу first_d, то використовується відповідна версія функції who (). Аналогічно, коли вказівником р присвоєно адресу об'єкта second_obj, то використовується версія функції who (), оголошена в класі second_d.</p>
        <p>Найбільш поширеним способом виклику віртуальної функції служить використання параметра функції. Наприклад, розглянемо наступну модифікацію попередньої програми:</p>
        <pre><code class="cpp"> /* Тут посилання на базовий клас використовується для доступу до віртуальної функції */   
        #include < iostream.h >   

        class Base {   

            public:   

            virtual void who() { // визначення віртуальної функції   

            cout << "Base\n";   

            }   

        };   

        class first_d: public Base {   

            public:   

            void who () {   

                // визначення who () стосовно first_d   

                cout << "First derivation\n";   

            }   

        };   

        class second_d: public Base {   

            public:   

            void who() { // визначення who () стосовно second_d   

                cout << "Second derivation\n*";   

            }   

        };   

        // використання в якості параметра посилання на базовий клас   

        void show_who (Base &r) {   

            r.who();   

        }   

        int main() {   

            Base base_obj;   

            first_d first_obj;   

            second_d second_obj;   

            show_who (base_ob j) ; // доступ до who класу Base   

            show_who(first_obj); // доступ до who класу first_d   

            show_who(second_obj); // доступ до who класу second_d   

            return 0;   

         }    </code></pre>
         <p>Ця програма виводить на екран ті ж самі дані, що і попередня версія. В даному прикладі функція show_who () має параметр типу посилання на клас Base. У функції main () виклик віртуальної функції здійснюється з використанням об'єктів типу Base, first_d і second_d. Її викликає версія функції who () у функції show_who () визначається типом об'єкта, на який посилається параметр при виклику функції.</p> 
        <p>Ключовим моментом у використанні віртуальної функції для забезпечення поліморфізму часу виконання служить те, що використовується покажчик саме на базовий клас. Поліморфізм часу виконання досягається тільки при виклику віртуальної функції з використанням покажчика або посилання на базовий клас. Однак ніщо не заважає викликати віртуальні функції, як і будь-які інші «нормальні» функції, однак досягти поліморфізму часу виконання на цьому шляху не вдасться.</p>
        <p>На перший погляд перевизначення віртуальної функції в похідному класі виглядає як спеціальна форма перевантаження функції. Але це не так, і термін перевантаження функції не можна застосувати до перевизначення віртуальної функції, оскільки між ними є істотні відмінності. По-перше, функція повинна відповідати прототипу. Як відомо, при перевантаженні звичайної функції число і тип параметрів повинні бути різними. Якщо ви перевизначаєте віртуальної функції інтерфейс функції повинен в точності відповідати прототипу. Якщо ж такої відповідності немає, то така функція просто розглядається як перевантажена і вона втрачає свої віртуальні властивості. Крім того, якщо відрізняється тільки тип значення, то видається повідомлення про помилку. (Функції, що відрізняються тільки типом значення, що повертається, породжують невизначеність.) Іншим обмеженням є те, що віртуальна функція повинна бути членом, а не другом класу, для якого вона визначена. Проте віртуальна функція може бути другом іншого класу. Хоча деструктор може бути віртуальним, але конструктор віртуальним бути не може.</p>
        <p>В силу відмінностей між перевантаженням звичайних функцій і перевизначенням віртуальних функцій будемо використовувати для останніх термін перевизначення (overriding).</p>
        <p>Якщо функція була оголошена як віртуальна, то вона і залишається такою незалежно від кількості рівнів в ієрархії класів, через які вона пройшла. Наприклад, якщо клас second_d отриманий з класу first_d, а не з класу Base, то функція who () залишиться віртуальної і буде викликатися коректна її версія.</p>
        <p>Якщо в похідному класі віртуальна функція не переважають, то тоді використовується її версія з базового класу.</p>
        <p>Треба мати на увазі, що характеристики успадкування носять ієрархічний характер. Щоб проілюструвати це, припустимо, що в попередньому прикладі клас second_d породжений від класу first_d замість класу Base. Коли функцію who () викликають, використовуючи покажчик на об'єкт типу second_d (в якому функція who () не визначалась), то буде викликана версія функції who (), оголошена в класі first_d, оскільки цей клас - найближчий до класу second_d. У загальному випадку, коли клас не переважають віртуальну функцію, С ++ використовує перше з визначень, яке він знаходить, йдучи від нащадків до предків.</p>
        <script type="text/javascript">hljs.initHighlightingOnLoad();</script>
        