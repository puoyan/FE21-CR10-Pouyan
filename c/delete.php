<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM big_library WHERE id = {$id}" ;
   $result = mysqli_query($connect, $sql);
   if ($result) {
   $data = mysqli_fetch_assoc($result);
   } else {
       header("location: index.php");
   }
   mysqli_close($connect);
} 
 ?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Delete Media</title>
       <?php require_once 'components/boot.php'?>
       <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $name ?>"></legend>
           <h5>You have selected the data below:</h5>
           <table class="table w-75 mt-3">
               <tr>
                   <td><?php echo $name?></td>
               </tr>
           </table>

           <h3 class="mb-4">Do you really want to delete this product?</h3>
           <form action="actions/a_delete.php?id=<?php echo $id ?>" method="POST">
<div class="form-group">
    <label class="text-danger" for="">Type:</label>
    <input value="<?php echo $data['type'] ?>" type="text" name="type" class="form-control">
</div>
<div class="form-group">
    <label class="text-danger" for="">Title:</label>
    <input value="<?php echo $data['title'] ?>" type="text" name="title" class="form-control" required>
</div>
<div class="form-group">
    <label  for="">Author First Name:</label>
    <input value="<?php echo $data['author_first_name'] ?>" type="text" name="author_first_name" class="form-control" >
</div>
<div class="form-group">
    <label for="">Author last Name:</label>
    <input value="<?php echo $data['author_last_name'] ?>" type="text" name="author_last_name" type="text" class="form-control">
</div>
<div class="form-group">
    <label for="">image:</label>
    <input value="<?php echo $data['image'] ?>" type="text" name="image" type="text"  class="form-control">
</div>
<div class="form-group">
    <label for="">Short Description:</label>
    <input  value="<?php echo $data['short_description'] ?>" type="text" name="short_description"type="text"  class="form-control">
</div>
<div class="form-group">
    <label for="">Publisher Name:</label>
    <input value="<?php echo $data['publisher_name'] ?>" type="text" name="publisher_name" type="text"  class="form-control">
</div>
<div class="form-group">
    <label for="">Pulblisher Address:</label>
    <input value="<?php echo $data['publisher_address'] ?>" type="text" name="publisher_address" type="text" class="form-control">
</div>
<div class="form-group">
    <label class="text-danger"  for="">Pulblish Date:</label>
    <input value="<?php echo $data['publish_date'] ?>" type="date" name="publish_date" type="date"  class="form-control"  required>
</div>

<div class="form-group ">
    <label  class="text-danger" for="">ISBN:</label>
    <input value="<?php echo $data['isbn_code'] ?>" type="text" name="isbn_code" type="number"  class="form-control" required>
</div>

<div class="form-group ">
    <label   for="">Status:</label>
    <input value="<?php echo $data['isbn_code'] ?>" type="text" name="status" type="text"  class="form-control" required>
</div>

<button class="btn btn-danger">Delete</button>

</form>
       </fieldset>
   </body>
</html>

