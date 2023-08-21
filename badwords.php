<?php
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];

    echo "Paragrafo originale: $paragraph (lunghezza: " . strlen($paragraph) . " caratteri)\n";

    $censoredParagraph = str_replace($word, "***", $paragraph);

    echo "Paragrafo censurato: $censoredParagraph (lunghezza: " . strlen($censoredParagraph) . " caratteri)\n";

?>