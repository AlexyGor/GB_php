<?php
header("Content-type:text/html; charset=utf-8");

/*
 * 9. (*) Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
 * производит транслитерацию и замену пробелов на подчеркивания
 * (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
 *
 * Функцию strtr() использовать запрещено!
 */

$string = "<p>Windows 11 — проприетарная операционная система для персональных компьютеров, 
разработанная компанией Microsoft в рамках семейства Windows NT, чтобы стать преемницей Windows 10. 
Она была представлена на мероприятии Microsoft 24 июня 2021 года[4]. Выпущена 5 октября 2021 года</p>
  <p>Источник:&nbsp;https://ru.wikipedia.org/wiki/Windows_11</p>";

function translit($string)
{
    $dictionary = [
        " " => "_",
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "e",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ь" => "'",
        "ы" => "y",
        "ъ" => "''",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya"
    ];

    // Преобразование строки в массив. Решение проблемы с UTF-8
    $stringToArray = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($stringToArray as $key => $character) {
        foreach ($dictionary as $rus => $trans) {
            if ($character == $rus) {
                $stringToArray[$key] = $trans;
                break;
            } elseif ($character == mb_strtoupper($rus)) {
                $stringToArray[$key] = mb_strtoupper($trans);
                break;
            }
        }
    }

    // implode — Объединяет элементы массива в строку
    return implode($stringToArray);
}

echo "<b>Исходная строка:</b> $string <hr>";
echo "<b>Преобразованная:</b>" . translit($string);