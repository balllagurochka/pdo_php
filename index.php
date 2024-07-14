<?php
require_once "vendor/autoload.php";
require __DIR__ . "/vendor/larapack/dd/src/helper.php";

try{
    $db = new PDO('mysql:host=localhost;dbname=pdo_db;port:3306', 'root', '');
}catch(PDOException $e){
    echo $e->getMessage();
}
//
//$q = $db->query("SELECT * FROM `comments`  WHERE id=$id");
//$data = $q->fetch(PDO::FETCH_ASSOC);
//dd($data);

//$id = $_GET['id'];
//
//$q = $db->prepare("SELECT * FROM `articles`  WHERE id = :id AND category_id = :category_id");
//$q->execute([
//    'id' => $id,
//    'category_id' => 2
//]);
//$data = $q->fetch(PDO::FETCH_ASSOC);
//dd($data);

$category_id = $_GET['category_id'];
$new_category_name = $_GET['new_category_name'];

$q = $db->prepare("UPDATE `categories` SET `name`= :new_category_name WHERE id = :category_id");
$q->execute(
    ['new_category_name' => $new_category_name,
        'category_id' => $category_id]
);









//$id = $_GET['id'];
//
//
//$q = $db->query("SELECT * FROM `comments`  WHERE id=1");
//$data = $q->fetch(PDO::FETCH_ASSOC);
//dd($data);
