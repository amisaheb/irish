<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: index.php");
exit;

}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title> Welcome - <?php $_SESSION['email']?> </title>
  <link rel="stylesheet" href="home.css">
  
</head>

<body>
  <main>
    <!-- <img class="bg" src="b6.jpg" alt="">  -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="h navbar-brand" href="/irish/home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
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
    </nav>
    <h1>WELCOME TO IRISH PHOTOGRAPHY </h1>
    <a href="/irish/gl.php" button type="submit" class="b2 mx-2 my-2 btn btn-primary">Open Gallery</button></a>
    <a href="/irish/au.php" button type="submit" class="b2 mx-2 my-2 btn btn-primary">About Us</button></a>
    <a href="/irish/index.php" button type="submit" class="b2 mx-2 my-2 btn btn-primary">Log Out</button></a>
    <div class="box3 mx-2 my-2">
      <figure class="figure">
        <img src="s5.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Sumana</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="t1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Tiyasa</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="a1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Ankita</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="a8.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Anindita</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="a6.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Alivia</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="d1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Dipsita</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="l3.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Lisa</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="l8.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Lipika</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="m1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Mou</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="s1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Suparna</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="s11.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Sneha</figcaption>
      </figure>
      <figure class="f1 figure">
        <img src="e1.jpg" width="200" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="t1 figure-caption">Ena</figcaption>
      </figure>
    </div>
  </main>
  <div class="container my-4">
    <h2 class="text-center"></h2>
     
        <!-- <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Add an item to the list</small>
        </div> --> 

          <div class="form-group">
            <label for="description">Write your Comment...</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        

        <button   id="add" class="btn btn-primary my-2">Post</button>
         <button  id="clear" class="btn btn-primary" onclick="clearStorage()"></button> 
     

     <div id="items" class="my-4">
        <h2></h2>
        <table class="table">
            <thead>
              <tr>
                 <th scope="col"></th> 
                
                <th scope="col">Your Comments</th> 
                <th scope="col"></th> 
              </tr>
            </thead>
            <tbody id="tableBody">
              <tr>
                <th scope="row">1</th> 
                
                <td>You need coffee as you are a coder</td> 
                <td><button class="btn btn-sm btn-primary">Delete</button></td> 
              </tr>
              
            </tbody>
          </table>
    </div>
</div>  
  
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">

        <span class="text-muted">© 2021 IRISH PHOTOGRAPHY PVT. LTD.</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter"></use>
            </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/sourajyoti.dey.79"><img src="f.jpg"
          width="30vw" alt=""></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/rahulbanik5/"><img src="i2.png"
              width="30vw" alt=""></a></li>
      </ul>
    </footer>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
  crossorigin="anonymous"></script>
  <script>
      function getAndUpdate(){
          console.log("Updating List...");
          
          desc = document.getElementById('description').value;
          if (localStorage.getItem('itemsJson')==null){
              itemJsonArray = [];
              itemJsonArray.push([desc]);
              localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
          }
          else{
              itemJsonArrayStr = localStorage.getItem('itemsJson')
              itemJsonArray = JSON.parse(itemJsonArrayStr);
              itemJsonArray.push([desc]);
              localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
          }
          update();
      }

      function update(){
          if (localStorage.getItem('itemsJson')==null){
              itemJsonArray = []; 
              localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
          } 
          else{
              itemJsonArrayStr = localStorage.getItem('itemsJson')
              itemJsonArray = JSON.parse(itemJsonArrayStr); 
          }
          // Populate the table
          let tableBody = document.getElementById("tableBody");
          let str = "";
          itemJsonArray.forEach((element ,index) => {
              str += `
              <tr>
                <th scope="row">${index + 1}</th>
              <td>${element[0]}</td>
             
              <td><button class="btn btn-sm btn-primary" onclick="deleted(${index})">Delete</button></td> 
              </tr>`; 
          });
          tableBody.innerHTML = str;
      }
      add = document.getElementById("add");
      add.addEventListener("click", getAndUpdate);
      update();
      function deleted(itemIndex){
          console.log("Delete", itemIndex);
          itemJsonArrayStr = localStorage.getItem('itemsJson')
          itemJsonArray = JSON.parse(itemJsonArrayStr);
          // Delete itemIndex element from the array
          itemJsonArray.splice(itemIndex, 1);
          localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray));
          update();

      }
      function clearStorage(){
          if (confirm("Do you areally want to clear?")){
          console.log('Clearing the storage')
          localStorage.clear();
          update()
          }
      }
  
</script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>