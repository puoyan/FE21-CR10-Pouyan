<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM big_library";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $image = $row['image'] != "" ? $row['image'] : '/pictures/product.png';
        $tbody .= "<tr>
        <td>" .$row['id']."</td>
            <td><img class='img-thumbnail' src='/c/pictures/" .$image."'</td>
            <td>" .$row['type']."</td>
            <td>" .$row['title']."</td>
            <td>" .$row['author_first_name']."</td>
            <td>" .$row['author_last_name']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['publisher_address']."</td>
            <td>" .$row['isbn_code']."</td>
            <td>" .$row['status']."</td>
            <td colspan='2'><a href='/c/update.php?id=" .$row['id']."'><button class='btn btn-primary btn-md' type='button'>Edit</button></a></td>
            <td colspan='2'><a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP CRUD</title>
       <?php require_once 'components/boot.php'?>
       <style type="text/css">
       body {
       background-color: #ABB2B9 ;
}
           .managelibrary {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
               height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
           .navbar-nav .nav-item .nav-link{
               color:#fff !important;
           }
           
       </style>
   </head>
   <body>

   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #45637d !important;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>   
     </ul>
      
    </div>
  </div>
</nav>



<div class="container">
<div class="row">


<p class='h2'>Library</p>

           <div class="col-md-12">
           
           <div class="card">
           <div class="card-header">Books <div class="float-end"><a style="text-decoration:none" href= "/c/actions/a_create.php">+Add Media</a></div></div>
           <div class="card-body table-responsive" style="overflow:scroll !important">
           

           <table class='table table-bordered'>
               <thead class='table-success'>
                   <tr>
                   <th>index</th>
                       <th>image</th>
                       <th>Type</th>
                       <th>Title</th>
                       <th>Author-First Name</th>
                       <th>Author-family Name</th>
                       <th>Short Description</th>
                       <th>Publisher Name</th>
                       <th>publish date</th>

                       <th>publisher Address</th>
                       <th>ISBN</th>
                       <th>Status</th>
                       <th colspan="2">edit</th>
                       <th colspan='2'>delete</th>

                   </tr>
               </thead>
               <tbody>

               <?= $tbody;?>
               <!-- the data will appear here but, at the moment,
                   we haven't used any queries yet :-) -->
               </tbody>
           </table>
           



           </div>
           </div>
           
           </div>
                

</div>
</div>
 
       
<br>
           


       


    




       <footer class="text-center text-white" style="background-color: #45637d;width:100%">
       <div class="text-center p-3" style="background-color: #45637d;">
            © 2021 Copyright:
        <p class="text-white" >Codefactory (classwork-CodeReview)</p>
        </div>
        </footer>
   </body>
</html>