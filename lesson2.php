<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 19.04.2018
 * Time: 16:37
 */

// ЗАДАНИЕ 1
echo "<h1> Задание 1 </h1>", "<br>";
$a = rand(-100, 100);
$b = rand(-100, 100);
$c = "";
$z = "";

echo "Пусть а = $a и b = $b", "<br>";

if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
    echo "Разность равна $c", "<br>";
}
elseif ($a < 0 && $b < 0) {
    $c = $a * $b;
    echo "Произведение равно $c", "<br>";
}
elseif ($a * $b < 0) {
    $c = $a + $b;
    echo "Сумма равна $c", "<br>";
}

// ЗАДАНИЕ 2
echo "<h1> Задание 2 </h1>", "<br>";
$d = rand(0, 15);
echo 'Выбрали число ' . $d, "<br>";
echo 'Получим последовательность: ';
switch ($d) {
    case "0":
        echo $d++;
    case "1":
        echo $d++ . ', ';
    case "2":
        echo $d++ . ', ';
    case "3":
        echo $d++ . ', ';
    case "4":
        echo $d++ . ', ';
    case "5":
        echo $d++ . ', ';
    case "6":
        echo $d++ . ', ';
    case "7":
        echo $d++ . ', ';
    case "8":
        echo $d++ . ', ';
    case "9":
        echo $d++ . ', ';
    case "10":
        echo $d++ . ', ';
    case "11":
        echo $d++ . ', ';
    case "12":
        echo $d++ . ', ';
    case "13":
        echo $d++ . ', ';
    case "14":
        echo $d++ . ', ';
    case "15":
        echo $d . '.', "<br>";
        break;
    default :
        echo "Что-то пошло не так!";
        break;
}

// ЗАДАНИЕ 3
echo "<h1> Задание 3 </h1>", "<br>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "Сумма a и b из Задания 1: " . sum($a, $b), "<br>";

function composition($x, $y) {
    $z = $x * $y;
    return $z;
}
echo "Произведение a и b из Задания 1: " . composition($a, $b), "<br>";

function residual($x, $y) {
    $z = $x - $y;
    return $z;
}
echo "Разница a и b из Задания 1: " . residual($a, $b), "<br>";

function quotient($x, $y) {
    $z = round($x / $y, 2);
    return $z;
}
echo "Частное a и b из Задания 1: " . quotient($a, $b), "<br>";

// ЗАДАНИЕ 4
echo "<h1> Задание 4 </h1>", "<br>";

function mathOperation($arg1, $arg2, $operation) {
    $z = "";
    switch ($operation) {
        case "сумма":
            $z = sum($arg1, $arg2);
            break;
        case "произведение":
            $z = composition($arg1, $arg2);
            break;
        case "разность":
            $z = residual($arg1, $arg2);
            break;
        case "частное":
            $z = quotient($arg1, $arg2);
            break;
        default :
            echo "Что-то пошло не так!";
            break;
    }
    return $z;
}

echo "Проверяю сумму чисел a и b из  Здания 1: " . mathOperation($a,$b, "сумма"), "<br>";
echo "Проверяю произведение чисел a и b из  Здания 1: " . mathOperation($a,$b,"произведение"), "<br>";
echo "Проверяю разность чисел a и b из  Здания 1: " . mathOperation($a,$b,"разность"), "<br>";
echo "Проверяю частное чисел a и b из  Здания 1: " . mathOperation($a,$b,"частное"), "<br>";

?>


<?php
// ЗАДАНИЕ 5
echo "<h1> Задание 5 </h1>", "<br>";
?>

    <p>Copyright &copy; 2014-<?php echo date("Y"); ?>.
        Все права защищены. <br /></p>

    <p>Замечание: в прошлое ДЗ год был вствлен в футер аналогичным образом <br /></p>

<?php
// ЗАДАНИЕ 6
echo "<h1> Задание 6 </h1>", "<br>";

function power($val, $pow) {
    if ($val >= 0) {
        if ($pow > 0) {
            $z = $val;
            if ($pow <= 1) {
                return $z;
            }
            else $z = $z * power($val, $pow - 1);
        }
        elseif ($pow < 0) {
            if ($val != 0) {
                $z = 1 / $val;
                if ($pow >= -1) {
                    return $z;
                }
                else $z = $z * power($val, $pow + 1);
            }
            else $z = "Деление на 0 запрещено!";
            return $z;
        }
        else $z = 1;
    }
    else $z = "В степень можно возводить только неотрицательное число!";
    return $z;
}

echo "Проверим полученную степенную функцию: ", "<br>";
echo "- число 2 в степени 1: " . power(2,1), "<br>";
echo "- число 2 в степени 5: " . power(2,5), "<br>";
echo "- число 2 в степени -5: " . power(2,-5), "<br>";
echo "- число 2 в степени -1: " . power(2,-1), "<br>";
echo "- число -2 в степени 5: " . power(-2,5), "<br>";
echo "- число 0 в степени 5: " . power(0,5), "<br>";
echo "- число 2 в степени 0: " . power(2,0), "<br>";
echo "- число 0 в степени -5: " . power(0,-5), "<br>";
echo "- число 0 в степени 0: " . power(0,0), "<br>";

// ЗАДАНИЕ 7
echo "<h1> Задание 7 </h1>", "<br>";

function hour() {
    //определяю ЧАС/ЧАСА/ЧАСОВ
    if (date("G") == 1 || date("G") == 21) {
        $hour = "час";
        return $hour;
    }
    elseif (date("G") == 2 || date("G") == 3 || date("G") == 4 || date("G") == 22 || date("G") == 23) {
        $hour = "часa";
        return $hour;
    }
    else $hour = "часов";
    return $hour;
}

function minut () {
    //определяю МИНУТ/МИУТА/МИНУТЫ
    if (date("i") == 1 || date("i") == 21 || date("i") == 31 || date("i") == 41 || date("i") == 51) {
        $minut = "минута";
        return $minut;
    }
    elseif ((date("i") >= 2 && date("i") <= 4) || (date("i") >= 22 && date("i") <= 24) ||
        (date("i") >= 32 && date("i") <= 34) || (date("i") >= 42 && date("i") <= 44) ||
        (date("i") >= 52 && date("i") <= 54)) {
        $minut = "минуты";
        return $minut;
    }
    else $minut = "минут";
    return $minut;
}

function mytime () {
    return date("G") . ' ' . hour() . ' ' . date("i") . ' ' . minut();
}

echo mytime();
?>
