<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM big_library WHERE id = {$id}";
   $result = mysqli_query($connect, $sql);
   if (mysqli_num_rows($result) == 1) {
       $data = mysqli_fetch_assoc($result);
   } else {
       header("location: error.php");
   }
   mysqli_close($connect);
} else {
   header("location: error.php");
}
?>


<!DOCTYPE html>
<html>
   <head>
       <title>Edit media</title>
       <?php require_once 'components/boot.php'?>
       <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }  
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
   </head>
   <body>
   <div class="container mt-5">
   <form action="actions/a_update.php?id=<?php echo $id ?>" method="POST">
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

<button class="btn btn-primary">Update</button>

</form>
   </div>
      
            
        </div>
       </fieldset>
   </body>
</html>