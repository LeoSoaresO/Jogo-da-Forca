<?php 
    $word = $_POST['word'];
    echo "</br>";
    $letter = $_POST['letter'];

    findIfLetterExists($letter, $word);

    function findIfLetterExists($letter, $word) {
        $exists = strpos($word, $letter);
        if($exists > 1) {
            echo "Essa letra existe!";
        } else {
            echo "Essa letra não existe!";
        }
    }
?>