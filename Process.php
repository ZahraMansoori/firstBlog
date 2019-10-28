<?php

$fileName = rand(100, 999) . '-' . $_FILES['upload']['name'];
$filePath = __DIR__ . '/' . $fileName;
$allowedType = array('image/png', 'image/jpg');

if (in_array($_FILES['upload']['type'], $allowedType)){
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $filePath)) {
        echo "The file uploaded successfully";
    } else {
        echo "There is something wrong on file path";
    }
}else {
    echo "there is something wrong on file type";}

//foreach ($_REQUEST as $key => $value) {
//    if (is_array($value)) {
//        echo "<pre>";
//        print_r($value);
//        echo "<pre>";
//    } else {
//        echo "$value : $key ";
//    }
//}