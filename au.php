<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $con = $_POST['con'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "reg";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `rugi` (`name`, `age`, `con`, `dt`) VALUES ('$name', '$age','$con', current_timestamp());";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>About Irish</title>
    <style>

      *{
        margin:00px;
        padding:00px;
      }
h2{
  text-align:center;
}
h1{
  text-align:center;
}
.h:hover {
      background-color: rgb(4, 98, 240)
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="h navbar-brand" href="/irish/home.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="h nav-link active" aria-current="page" href="/irish/gl.php">Gallery</a>
            <div class="box">


            </div>

          </div>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="h nav-link active" aria-current="page" href="/irish/au.php">About Us</a>
              <div class="box">


              </div>

            </div>
          
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="h nav-link active" aria-current="page" href="/irish/index.php">Log Out</a>
              <div class="box">


              </div>
        </div>
        </div>
        </div>
    </nav>
    <h1>About Us</h1>
    <div class="row g-0 border rounded overflow-hidden inline-md-row mb-2 shadow-sm h-md-200 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Photographer</strong>
          <h3 class="mb-0">Saheb Dey</h3>
          <div class="mb-1 text-muted"></div>
          <p class="card-text mb-auto">This is a wider oportunity to Everyone.</p>
          <a href="/irish/gl.php" class="stretched-link">Open Gallery</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <img src="saheb.jpg"width="230vw" alt="">

        </div>
      </div>

      <h2>Want to Join with Us?</h2>
      <form action="/irish/au.php" method="post" class="row g-3 mx-2 my-2 needs-validation" novalidate >
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Contact</label>
    <div class="input-group has-validation">
      
      <input type="text" name="con" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
<footer class="navbar navbar-expand-lg navbar-light bg-dark">
        <h3>&copy Irish Photography</h3>
     </footer> 
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>