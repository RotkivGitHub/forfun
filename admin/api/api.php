<?php

    define('CATEGORY', 'data/categories.json');
    define('INFO', 'DB/info.json');
    define('CATEGORY_ITEMS', 'data/category_');
    define('IMAGE_PATH', 'pictures/');


    $categories = getCategories();
    $info = getInfo();
    $items = getItemsFromCategoryIdByStep("animal",0,10);
    $banners = array();

//    var_dump($items);

//    echo $categories;

    function getCategories() {
        if (file_exists(CATEGORY)) {
            $data = file_get_contents(CATEGORY);
            return json_decode($data, true);

        }
        return "ERROR";

    }

    function getCategoriById($id) {
        if (file_exists(CATEGORY)) {
            $data = file_get_contents(CATEGORY);
            $categories = json_decode($data, true);
            foreach ($categories as $category) {
                if ($category["id"] == $id) {
                    return $category;
                }
            }
            return "file is empty";
        }
        return "ERROR";
    }

    function getInfo() {
        if (file_exists(INFO)) {
            $data = file_get_contents(INFO);
            return json_decode($data, true);
            }
        return "ERROR";
    }

    function getItemsFromCategoryIdByStep($id,$step = 0,$count = 10) {
        $fileName = CATEGORY_ITEMS.$id.".csv";
        $lenght = 0;
        $ft = fopen($fileName, "r");

        while (!feof($ft)) {
            fgets($ft);
            $lenght++;
        }
        fclose($ft);
      echo $lenght;

//        $startPosition = $step * $count;
//        $endPosition = $startPosition + $count;
        $startPosition = $lenght  - ($step * $count + $count);
        $endPosition = $startPosition + $count;
        if (file_exists($fileName)) {
            $items = array();
            $handler = fopen($fileName,"r");
            for ($i=0; $item = fgetcsv($handler); $i++) {
                if ($i >= $endPosition){
                    break;
                }
                if ($i >= $startPosition){
                    $items[] = $item;
                }
            }
            fclose($handler);
            var_dump($items);
            $itemsReversed = array_reverse($items);
            return $itemsReversed;

        }
        return "ERROR";
    }



?>


