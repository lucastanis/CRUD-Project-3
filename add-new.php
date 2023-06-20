<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $product = $_POST['product'];
   $beschrijving = $_POST['beschrijving'];
   $email = $_POST['email'];
   $plaats = $_POST['plaats'];

   $sql = "INSERT INTO `crud`(`id`, `product`, `beschrijving`, `email`, `plaats`) VALUES (NULL,'$product','$beschrijving','$email','$plaats')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Toevoegen product gelukt!");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #5F9EA0;">
      PHP Complete CRUD Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Voeg nieuw product toe</h3>
         <p class="text-muted">Vul dit in om een nieuw product toe te voegen</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Product</label>
                  <input type="text" class="form-control" name="product">
               </div>

               <div class="col">
                  <label class="form-label">Beschrijving</label>
                  <input type="text" class="form-control" name="beschrijving">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
               <label class="form-label">Plaats:</label>
               <input type="plaats" class="form-control" name="plaats">
            </div>
   

            <div>
               <button type="submit" class="btn btn-success" name="submit">Opslaan</button>
               <a href="index.php" class="btn btn-danger">Annuleer</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>