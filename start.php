<?php 
    include 'Word.php';

    $word = chooseWord();
    // echo $word;
    // showTraitsByWord($word);
    
    // $a = findIfLetterExists('e', $word);
    // print_r($a);

    function chooseWord() {
        $newWord = new Word();
        $word = $newWord->chooseWord();
        return $word;
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Jogo da Forca</title>

    <link href="https://fonts.googleapis.com/css?family=Cabin|Gloria+Hallelujah" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        $traits = strlen($word);
        $array_word = str_split($word, 1);

        for($i = 1; $i <= $traits; $i++) {
            echo " __ "; 
            // echo $array_word[$i - 1]; 
        } 
        echo "</br></br>"; 

    ?>
    <form action="testWord.php" method="POST">
        <input type="hidden" name="word" value="<?php echo $word; ?>">
        <?php 
            $abc = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

            for($i = 0; $i < count($abc); $i++) {
                echo "<button value='".$abc[$i]."' type='submit' name='letter'>".$abc[$i]."</button>"; 
            }
        ?>
    </form>

</body>
<script src="main.js"></script>
</html>