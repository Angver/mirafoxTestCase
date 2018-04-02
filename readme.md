### Задача. Предсказывание счета в футбольном матче


Необходимо создать простую программу, предсказывающую исход
футбольного матча. Без front-end.
- На основе таблицы выступления сборных на ЧМ, нужно рассчитать условную
мощность атаки и обороны каждой команды. Как именно рассчитывать
мощность – решать вам.
Таблица с данными в документе data.php.
- Необходимо создать функцию match($c1, $c2).
    * Входные параметры: $c1, $c2 - порядковый номер команды из исходного
файла (нумерация с 0);
    * Выходные параметры: массив из 2х элементов. 0й индекс - сколько 1я
команда забила голов 2й команде, 1й индекс - сколько 2я команда забила
голов первой команде. Например:
```
    function match($c1, $c2){
        return array(2, 1);
    }
```
- Результат рассчитывается случайным образом, но на основе данных о
мощности команд.