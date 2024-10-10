<?php

$alhpabet = [
'а' => 'a', 'б' => 'b', 'в' => 'v','г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'Ъ' => '\'',
'ы' => 'y', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function translate(string $string, $alhpabet) {
    $res = "";

    for ($i = 0; $i < mb_strlen($string); $i++) {
        $letter = mb_substr($string, $i, 1);

        if (isset($alhpabet[mb_strtolower($letter)])) {
            if($letter === mb_strtolower($letter)) {
                $latin_letter = $alhpabet[$letter];
            }
            else {
                $latin_letter = ucfirst($alhpabet[mb_strtolower($letter)]);
            }
        }
        else {
            $latin_letter = $letter;
        }
        $res.=$latin_letter;
    }
    return $res;
}

echo translate('Дайте ка мне этих замечательных французских булочек к чаю', $alhpabet);