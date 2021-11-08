<?php
palindrome(readline("Note un mot: "));

function palindrome($mot){
    if($mot == strrev($mot)){
        echo "$mot est un palindrome";
    }
    else echo "$mot n'est pas un palindrome";
}
