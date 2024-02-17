<?php
function remove_accent($str)
{
    $accents = array(
        'À', 'Á', 'Â', 'Ã', 'È', 'É', 'Ê', 'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'Ý', 'à', 'á', 'â', 'ã', 'è', 'é', 'ê', 'ì', 'í', 'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'ý', 'ỳ', 'đ',
        'Ă', 'ă', 'Đ', 'Ê', 'ê', 'Ô', 'ô', 'Ơ', 'ơ', 'Ư', 'ư'
    );
    $no_accents = array(
        'A', 'A', 'A', 'A', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'y', 'y', 'd',
        'A', 'a', 'D', 'E', 'e', 'O', 'o', 'O', 'o', 'U', 'u'
    );
    return str_replace($accents, $no_accents, $str);
}

$text = "chúng tôi";
$text = remove_accent($text);
$text = str_replace(' ', '-', $text);
echo $text;