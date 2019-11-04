<?php

$fileName = rand(100, 999) . '-' . $_FILES['upload']['name'];
$filePath = __DIR__ . '/' . $fileName;
//var_dump($_FILES['upload']);

$_FILES['upload']['type'] = substr_replace($_FILES['upload']['type'], 'jpg', 6);
echo $_FILES['upload']['type'];
if (move_uploaded_file($_FILES['upload']['tmp_name'], $filePath)) {
    echo "The file uploaded successfully";
} else {
    echo "There is something wrong on file path";
}


//foreach ($_REQUEST as $key => $value) {
//    if (is_array($value)) {
//        echo "<pre>";
//        print_r($value);
//        echo "<pre>";
//    } else {
//        echo "$value : $key ";
//    }
//}