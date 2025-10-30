<?php

$a = array('ābols', 'bumbiers');
foreach ($a as $value) {
    echo $value, ",";  // Izdrukās katru elementu atsevišķi
}

?>

<?php
$a = array('one', 'two');
echo implode(', ', $a);  // Izdrukās "one, two implode funkcija"
?>

<?php

$fruits = array('bumbiers', 'ābols', 'banāns', 'zemene');

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i], ', ';  // Izdrukās "one, two, for funkcija"
}

?>


