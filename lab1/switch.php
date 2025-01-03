<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное целочисленное значение.
*/
$day = 5;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция switch</title>
</head>
<body>
	<h1>Конструкция switch</h1>
	<?php
    switch (true) {
        case ($day >= 1 && $day <= 5):
            echo "Это рабочий день";
            break;
        case ($day == 6 || $day == 7):
            echo "Это выходной день";
            break;
        default:
            echo "Неизвестный день";
        }
	echo '<br>';
	/*
	ЗАДАНИЕ 2
	- С помощью конструкции switch выведите фразу 'Это рабочий день', если значение переменной $day попадает в диапазон чисел от 1 до 5 (включительно).
	- Выведите фразу 'Это выходной день', если значение переменной $day равно числам 6 или 7.
	- Выведите фразу 'Неизвестный день', если значение переменной $day не попадает в диапазон чисел от 1 до 7 (включительно).
	ЗАДАНИЕ 3
	- Выполните задание 2 используя управляющую конструкцию match. Результат сохраните в файле match.php.
	*/
    include "match.php";
    echo 'Результат из файла match.php: ' . match_value($day);
	?> 
</body>
</html>