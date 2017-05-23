<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs.log');

//$stri = '{"id_category":1,"items":[{"title":"Мимимишный ёж","image":"133379_224090_1541232215.jpg","data":154125211},{"title":"Кенгуру отдыхает","image":"213977_1541225215.jpg","data":154125212},{"title":"Дружба в дикой природе. Птиц помогает уставшему рыбу попасть домой","image":"91263183_154165215.jpg","data":154125213},{"title":"Две брюнетки постят себя в инстаграме. Смотреть без регистрации и СМС","image":"Animals_2_154165215.jpg","data":154125214},{"title":"Кролик показывает язык","image":"maxresdefault_154165215.jpg","data":154125215},{"title":"Ёж в катусах","image":"oboi-rabochego-stola-zhivotnie-priroda-prikoli.orig_154165215.jpg","data":154125216}],"bunners":[{"position":"left","bunner":"ads.png"},{"position":"center","bunner":"ads.png"},{"position":"center","bunner":"ads.png"}]}';

//проверка существования файла
//echo file_exists("animal.json");

/*получение из файла*/

$fileName = $_GET["filename"];

//echo $fileName;

$data = file_get_contents($fileName);
echo file_get_contents($fileName);

//var_dump($stri);
//var_dump($data);

/*преобразование в объект*/
//$data_decode = json_decode($data);
//echo $data_decode;
//var_dump($data_decode);

//$old_name = $data_decode->{"name"};
//$data_decode->{"name"} = "Vasil";
//echo $data_decode->{"name"};
//echo $data_decode;
//file_put_contents("data.json", $data_decode);
//file_get_contents()
?>