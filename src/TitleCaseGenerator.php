<?php

class TitleCaseGenerator
{

    function makeTitleCase($input_title)
    {
        $input_array_of_words = explode(" ", strtolower($input_title));
        $output_titlecased = array();
        $small_word_exceptions = array("of", "the", "in", "a", "and", "an");
        foreach ($input_array_of_words as $word) {
            if(in_array($word, $small_word_exceptions)) {
                array_push($output_titlecased, lcfirst($word));
            } else {
                array_push($output_titlecased, ucfirst($word));
            }
        }
        return implode(" ", $output_titlecased);
    }
}


// // find the key of "Of" in $output_titlecased
// // return print_r($output_titlecased);
// array_replace($output_titlecased[1], lcfirst($output_titlecased[1]));
// // drop word from that key
// // put in lower case "of" in its place

// lcfirst("Of")

// strtolower($input_title)
?>
