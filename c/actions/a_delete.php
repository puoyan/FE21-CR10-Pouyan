<?php 
require_once 'db_connect.php';

if ($_POST) {
   $id = $_GET['id'];
   $image= $_POST['image'];
   $path = "pictures/$image";
   if(unlink($path))
   {
       echo "image has been deleted";
   }
   else{
       echo "image doesn't exists";
   }

   $sql = "DELETE FROM big_library WHERE id = {$id}";
   if (mysqli_query($connect, $sql) === TRUE) {
       $class = "success";
       $message = "Successfully Deleted!";
       header("location: ../index.php");
   } else {
       $class = "danger";
       $message = "The entry was not deleted due to: <br>" . $connect->error;
   }
   mysqli_close($connect);
} else {
   header("location: ../index.php");
}
?>



