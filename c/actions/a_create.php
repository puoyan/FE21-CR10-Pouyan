<?php
require_once 'db_connect.php';

if ($_POST) {  

    $type = $_POST['type'];
    $title = $_POST['title'];
    $author_first_name= $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $image= $_POST['image'];
    $short_description = $_POST['short_description'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];
    $isbn_code = $_POST['isbn_code'];
    $stutus = $_POST['stuts'];

  
    $sql = "INSERT INTO big_library (
        type,
         title,
          author_first_name,
           author_last_name, 
           image, 
           short_description, 
           publisher_name, 
           publisher_address, 
           publish_date, 
           isbn_code, 
           status) 
           VALUES (
               '$type',
                '$title',
                '$author_first_name',
                '$author_last_name',
                '$image',
                '$short_description',
                '$publisher_name',
                '$publisher_address', 
                '$publish_date',
                '$isbn_code',
                '$status'
                )";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $type </td>
            <td> $titel </td>
            </tr></table><hr>";
        
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        
    }
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Media</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>

<form action="" method="POST">
<div class="form-group">
    <label class="text-danger" for="">Type:</label>
    <input type="text" name="type" class="form-control">
</div>
<div class="form-group">
    <label class="text-danger" for="">Title:</label>
    <input type="text" name="title" class="form-control" required>
</div>
<div class="form-group">
    <label  for="">Author First Name:</label>
    <input type="text" name="author_first_name" class="form-control" >
</div>
<div class="form-group">
    <label for="">Author last Name:</label>
    <input type="text" name="author_last_name" class="form-control">
</div>
<div class="form-group">
    <label for="">image:</label>
    <input type="text" name="image" class="form-control">
</div>
<div class="form-group">
    <label for="">Short Desceription:</label>
    <input type="text" name="short_description" class="form-control">
</div>
<div class="form-group">
    <label for="">Pulblisher Name:</label>
    <input type="text" name="publisher_name" class="form-control">
</div>
<div class="form-group">
    <label for="">Pulblisher Address:</label>
    <input type="text" name="publisher_address" class="form-control">
</div>
<div class="form-group">
    <label class="text-danger"  for="">Pulblish Date:</label>
    <input type="date" name="publish_date" class="form-control"  required>
</div>

<div class="form-group ">
    <label  class="text-danger" for="">ISBN:</label>
    <input type="number" name="isbn_code" class="form-control" required>
</div>

<button class="btn btn-primary">Add</button>

</form>
            
        </div>
    </body>
</html>

