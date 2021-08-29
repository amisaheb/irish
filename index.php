<?php
$login = false;
$showError= false;
if($_SERVER["REQUEST_METHOD"] == "POST"){



$server="localhost";
$username = "root";
$password="";
$database="reg";

$conn = mysqli_connect($server ,$username ,$password ,$database);
if (!$conn){
 
  die("Error" . mysqli_connect_error());
}

$email = $_POST["email"];
$pass = $_POST["pass"];



$sql = "Select * from don where email='$email' AND pass='$pass'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if ($num = 1){
  $login = true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['email'] = $email;
  header("location: home.php");

}
else{
  $showError="invalid";
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
   
    <title>Log in to Irish Photography</title>
    <style>

      *{
        margin: 00;
        padding: 00;
      }
  body{
    background: url(gima.jpg) no-repeat fixed;
  background-size:cover;
  }
  .box4{
    background-color: rgb(228, 238, 238);
        width: 30vw;
        margin-top: 20px;
        padding: 2vw;
        border: 2px solid ;
        border-radius: 10px;
        position: relative;
        left: 60vw;
       
       

  }
  .box input{
        background: none;
        outline: none;
        
       
      }
  

  footer{
    position: relative;
    top: 45vw;
    color: aliceblue;
  }
 
  @media screen and (max-width:600px){
body{

  background: url(a66.jpg) no-repeat fixed;
  background-size: contain;

}
    .box4{
      
    background:none;
        width: 270px;
        margin-top: 2px;
        display: inline-block;
        padding: 2vw;
        
        color: rgb(253, 245, 245);
       
        position: relative;
        left: 2px;

  }
  .box4 .b2 {
    margin: 4px 00px;
    display: flex;
    justify-content: center;
   

  }

  .b input{
    
  }
footer{
  position: relative;
    top: 70vw;
    color: aliceblue;
}


    
    </style>
  
  </head>

  <body>
    <main>
        
        <div class="box3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="h navbar-brand" href="/irish/su.php">Sign-Up</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="h nav-link active" aria-current="page" href="/irish/">Sign-In</a>
                   <div class="box">
                         
      
                   </div>
                   
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <div class="box4">
           
          
          <div class="box">
            
          <form action="/irish/index.php" method="post">
            <div class="b mb-2">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="c mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            
  <?php
  if($login){

  
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!!!</strong> You are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($showError){

  
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!!!</strong> '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
            
            
            <button type="submit" class="b2 btn btn-primary">Submit</button>
            <a href="/irish/su.php"button type="submit" class="b2 btn btn-primary">Sign Up</button></a>
          </form>

         
        </div>
    </div>
    </main>
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
