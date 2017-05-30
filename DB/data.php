<?php
$lenght = 0;

header ('content-type: text/html; charset=UTF-8');

/*одиночный вывод*/
echo "hello world";

/*___________________________________________*/
/*построчный вывод с учетом формтатирования*/
echo "<pre>";

$ft = fopen("category_animal.csv", "r");
while (!feof($ft)) {
//    $bufer = fgets($ft);
//    echo $bufer;
    fgets($ft);
    $lenght++;
}

//fwrite($ft, '23');

fclose($ft);

echo $lenght;

/*___________________________________________*/

?>