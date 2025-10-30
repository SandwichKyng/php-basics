<?php

$auto = [
    "marka" => "Toyota",
    "modelis" => "Corolla",
    "gads" => 2012
];


echo "Automašīnas marka: " . $auto["marka"] . "\n";


$gads_tagad = 2025;   //date("Y") - pašreizējais gads
$vecums = $gads_tagad - $auto["gads"];

if ($vecums > 10) {
    echo "Auto ir vecāks par 10 gadiem\n";
} else {
    echo "Auto nav vecāks par 10 gadiem\n";
}
?>
