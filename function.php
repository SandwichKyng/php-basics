
<?php


function intSequence($first, $last) {

    for ($i = $first; $i <= $last; $i++) {
        echo $i;
        if ($i < $last) {
            echo ", ";
        }
    }
    echo ". ";
}

intSequence(5, 8);
intSequence(1, 10);
intSequence(7, 16);

?>
