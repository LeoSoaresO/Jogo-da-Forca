<?php 
    class Word {
        public function chooseWord() {
            $words = ['one', 'two', 'three'];
            $randomWord = rand(0, count($words) - 1);

            return $words[$randomWord];
        }
        public function showTraitsByWord($word) {
            $traits = strlen($word);
            $array_word = str_split($word, 1);
    
            for($i = 1; $i <= $traits; $i++) {
                echo " __ "; 
                echo $array_word[$i - 1]; 
            }
        }
    }
