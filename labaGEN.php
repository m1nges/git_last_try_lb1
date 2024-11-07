<?php
// Инициализация переменных
$num1 = null;
$num2 = null;

// Функция для отображения меню
function showMenu() {
    echo "Меню:\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "6. Выйти\n";
    echo "Выберите пункт меню: ";
}

// Основной цикл приложения
while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Введите первое число: ";
            $num1 = trim(fgets(STDIN));
            echo "Введите второе число: ";
            $num2 = trim(fgets(STDIN));
            break;
        case 2:
            echo "Сложение: " . addition($num1, $num2) . "\n";
            break;
        case 3:
            echo "Вычитание: " . subtraction($num1, $num2) . "\n";
            break;
        case 4:
            echo "Деление: " . division($num1, $num2) . "\n";
            break;
        case 5:
            echo "Возведение в степень: " . power($num1, $num2) . "\n";
            break;
        case 6:
            exit("Выход из приложения\n");
        default:
            echo "Неверный выбор. Пожалуйста, попробуйте снова.\n";
    }
}

?>
