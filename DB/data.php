<?php

header ('content-type: text/html; charset=UTF-8');

/*одиночный вывод*/
echo "hello world";

/*___________________________________________*/
/*построчный вывод с учетом формтатирования*/
echo "<pre>";

$ft = fopen("data.csv", "r");
while (!feof($ft)) {
    $bufer = fgets($ft);
    echo $bufer;
}

echo "</pre>";

fclose($ft);

/*___________________________________________*/

?>