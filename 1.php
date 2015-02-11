<?php

$ids = array(1, 2, 3, 4);
$ids_string = implode(", ", $ids);
echo '$sql = \'SELECT\' * \'FROM \'table\' WHERE \'id\' IN'." ($ids_string)'";




?>

