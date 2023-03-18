<?php
function censorSentence($sentence) {
    $badWords = ['Good', 'Great'];

    foreach ($badWords as $badWord) {
        $stars = str_repeat('*', strlen($badWord));
        $sentence = str_replace($badWord, $stars, $sentence);
    }
    return $sentence;
}

$sentence = 'Good job! Great presentation';

echo censorSentence($sentence);
?>
