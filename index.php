<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>

        <div>
            <h2>Задание 1</h2>
            <?php

                $students = array("Денис", "Амир", "Ильяс", "Никитос", "Булатка");

                print_r($students);

                $num_students = count($students);
                echo "Количество студентов: $num_students\n";

                if (in_array("Сидоров", $students)) {
                echo "Сидоров есть в списке\n";
                } else {
                echo "Сидорова нет в списке\n";
                }

                $expelled = array_pop($students);
                echo "Последняя фамилия была удалена: $expelled\n";

            ?>
        </div>
        <div>
            <h2>Задание 2</h2>
            <?php

                $clubs = array(
                    "Спортивный" => "Сидоров",
                    "Художественный" => "Емелина",
                    "Музыкальный" => "Иванова",
                    "Литературный" => "Петров",
                    "Биологический" => "Антонова"
                );
                
                // Отсортировать список по фамилиям
                asort($clubs);
                
                // Вывести список в формате Кружок - Фамилия
                foreach ($clubs as $club => $surname) {
                    echo "$club - $surname\n";
                }
            
            ?>
        </div>

        <?php
            $student = [
                'name' => 'Денис',
                'surname' => 'Гатиятуллин',
                'group' => '427',
                'hobby' => 'Езда на велике',
                'social' => [
                    'Telegram' => '@denisI06'
                ]
            ];
        ?>

        <div>
            <h2>Задание 3</h2>
            <h3>Студент <?= $student['name'] ?> <?= $student['surname'] ?></h3>
            <p>Группа: <?= $student['group'] ?></p>
            <p>Хобби: <?= $student['hobby'] ?></p>
            <p>Соцсети:
                <?php
                foreach ($student['social'] as $social => $link) {
                    echo "$social: $link<br>";
                }
                ?>
            </p>
        </div>
    </section>
</body>

</html>