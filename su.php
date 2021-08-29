<?php
$showAlert = false;
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
$cpass = $_POST["cpass"];
$exists=false;
if(($pass==$cpass) && $exists==false){
$sql ="INSERT INTO `don` (`email`, `pass`, `cpass`, `dt`) VALUES ('$email', '$pass', '$cpass', current_timestamp());";
$result = mysqli_query($conn,$sql);
if ($result){
  $showAlert= true;
}
}
else{
  $showError = "Password do not match";
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

    <title>Register yourself</title>
    
    <style>
*{
  margin:00;
  padding:00;
}

body{
  
  background: url(ena.jpg) no-repeat fixed;
  background-size:cover;

  
 
  
}
      .box1{
        
        background-color: rgb(228, 238, 238);
        width: 30vw;
        margin-top: 20px;
        padding: 2vw;
        border: 2px solid ;
        border-radius: 10px;
        position: relative;
        left: 2vw;
       

       
       
        
      }
      .box1 h3{
position: relative;
top:50vw ;
left: 25vw;
      }
     
      .box1 input{
        background: none;
        outline: none;
        
       
      }
      .container
      {
        
        background-color: rgb(244, 247, 247);
        padding: 8px;
        border: 2px;
        width: 25vw;
        border-radius: 10px;
        height: auto;
        position: relative;
        left: 23vw;
        top: 00vw;
        
      }
      .container h3, p{
        text-align: center;
      }
      .container1
      {
        background-color: rgb(244, 247, 247);
        padding: 8px;
        border: 2px;
        border-radius: 10px;
        width: 25vw;
        height: auto;
        position: relative;
        left: 14vw;
        top: 00vw;
        
      }
      .container1 h3, p{
        text-align: center;
      }

      .container2
      {
        background-color: rgb(244, 247, 247);
        padding: 8px;
        border: 2px;
        width: 25vw;
        border-radius: 10px;
        height: auto;
        position: relative;
        left: 60vw;
        top: 00vw;
        
      }
      .container2 h3, p{
        text-align: center;
      }
      .box5 img{

        width: 358px;
      }
      .box6 img{

        width: 358px;
      }
      .box7 img{

        width: 358px;
      }

      /* main{
        background-image: url(s8.jpg);
        background-size: cover;
        height: 80vw; */
        
      
     
      footer h3{
        text-align: center;
        font-weight: 400;
        color: aliceblue;
      }
      .bg{
        width: 100%;
        position: absolute;
        z-index: -1;
        opacity:0.7;
      }
      .b2{
position: relative;
top:-22vw ;
left: 74vw;
      }
.h:hover{
  background-color:rgb(4, 98, 240)
 
  


}

      
      .c{
        font-weight: bold;

      }
      .b{
        font-weight: bold;
      }
      .d{
        font-weight: bold;
      }
footer{
  position: relative;
  top: 6vw;
}

@media screen and (max-width:600px){
   body{
    background: url(e1.jpg) no-repeat fixed;
  background-size:cover;
   }
    .b2{
        position: relative;
        top:-32vw ;
        left: 24vw;
              
    
    }
    .box1 .btn{
      display: flex;
      justify-content: center;
    }
    .box1{
      display: inline-block;
        color:white;
      background: none;
      width: 290px;
      margin: 30px 00px 10px 00px;
      
      padding: 2vw;
      border: 2px solid ;
      border-radius: 14px;
      position: relative;
      left: 5vw;
    }
    .container
    {
      background-color: rgb(244, 247, 247);
      padding: 2px;
      border: 2px;
      border-radius: 10px;
      display: inline-block;
     
      width: 260px;
    position: relative;
    left: -30px;
  
      
    }

    .container1
    {
      background-color: rgb(244, 247, 247);
      padding: 2px;
      border: 2px;
      display: inline-block;
      border-radius: 10px;
      width:  250px;
      position: relative;
    left: 16px;
    top: 10px;
   
      
    }
    .container2
    {
      background-color: rgb(244, 247, 247);
      padding: 2px;
      border: 2px;
      border-radius: 10px;
      display: inline-block;
      width:  250px;
      position: relative;
    left: 15px;
    top: 21px;
      
    
  }
    .box5 img{

      width:250px;
    }
    .box6 img{

      width:240px;
    }
    .box7 img{

      width:240px;
    }

    footer {
      text-align: center;
      font-weight: 400;
      color: aliceblue;
      position: relative;
      top: 160px
    }
  }
  .cert{
    display: flex;
        flex-direction: column;
  }
    </style>
  </head>

  <body>
    
    
   <div class="box3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class=" container-fluid">
          <a class="h navbar-brand" href="/irish/su.php">Sign-Up</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="h nav-link active" aria-current="page" href="/irish/index.php">Sign-In</a>
             <div class="box">
                   

             </div>
             
            </div>
          </div>
        </div>
      </nav>
    </div>
    
    
      
      <main>
    
      <div class="box1">
       
      <form action="/irish/su.php" method="post">
        <div class="b">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="c ">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" name="cpass" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary my-2">Submit</button>
        <a href="/irish/index.php"button type="submit" class=" btn btn-primary my-2">Sign In</button></a>
      </form>
      
      
   
  </div>

  <?php
  if($showAlert){

  
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!!!</strong> Your account is created
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

// if($showError){


  
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Error!!!</strong> '.$showError.'
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
?>
<div class="cert">

<div class="container">

<div class="box5 " >
  <img src="l4.jpg"  alt="">
</div>
<h3 >Free Registraion</h3>
<p class="">You dont have to pay any charges for registration</p>
</div>
<div class="container1 ">

<div class="box6 " >
  <img src="s55.png"  alt="">
</div>
<h3 >Professional Photography</h3>
<p class="">Our professional photographers make things more attractive</p>
</div>

<div class="container2 ">

<div class="box7" >
  <img src="a4.jpg"  alt="">
</div>
<h3 >Best Opertunity</h3>
<p class="">We will provide best opertunity to perform in internatioal platform</p>
</div>

</div>
</main>
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
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