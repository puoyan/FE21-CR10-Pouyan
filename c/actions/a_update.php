<?php
require_once 'db_connect.php';

if($_POST){
	$type = $_POST['type'];
    $title = $_POST['title'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $image= $_POST['image'];
    $short_description = $_POST['short_description'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];
    $isbn_code = $_POST['isbn_code'];
    $status = $_POST['status'];
    $id = $_GET['id'];
    
    $sql = "UPDATE big_library SET 
    title = '$title',
    type = '$type',
    author_first_name = '$author_first_name',
    author_last_name = '$author_last_name',
    image = '$image',
    short_description = '$short_description',
    publisher_name = '$publisher_name',
    publisher_address = '$publisher_address',
    publish_date = '$publish_date',
    isbn_code = '$isbn_code',
    status = '$status'
      WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if($result){
	header("location: ../index.php");   
    }
    die(var_dump($result));
}
