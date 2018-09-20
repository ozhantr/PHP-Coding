<?php

$words = ['face', 'cafe', 'name', 'morning', 'cfae', 'tuesday', 'mane', 'leap', 'pale', 'aaaa', 'bbb', 'fface'];

function isAnagram(array $anagrams)
{
    $results = [];
    $check = [];

    foreach ($anagrams as $key => $word) {
        for ($i = $key + 1; $i < count($anagrams); ++$i) {
            if (count_chars($word, 1) == count_chars($anagrams[$i], 1) && !in_array($word, $check)) {
                $results[$key][] = $anagrams[$i];
                if (!in_array($word, $results[$key])) {
                    $results[$key][] = $word;
                }
                $check[] = $anagrams[$i];
            }
        }
    }

    return $results;
}

print_r(isAnagram($words));

/*
Array
(
    [0] => Array
        (
            [0] => cafe
            [1] => face
            [2] => cfae
        )

    [2] => Array
        (
            [0] => mane
            [1] => name
        )

    [7] => Array
        (
            [0] => pale
            [1] => leap
        )

)
*/

//array_filter($words, "isAnagram");
//call_user_func_array("foobar", array("one", "two"));
//PHP levenshtein() Function
