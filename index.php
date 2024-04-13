<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header("Location:admin/login.php");
  }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="assets/js/color-modes.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family:"poppins",sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
           
        }
        ::-webkit-scrollbar{
            display: none;
        }
        .carousel-item img {
        max-width: 95%; /* Adjust percentage as needed */
        max-height:650px; /* Adjust height as needed */
        margin: auto;
       
       
        }
        .fixed-footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%; /* Ensures footer stretches across entire width */
}

        
.btn-container button{
    margin: 2rem;
    border:1px solid rgb(13,110,253);
    background: none;
    padding: 10px 20px;
    font-size: 25px;
    font-weight: 600 ;   ;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    cursor: pointer;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    width: 10rem;
}

.btn1{
    color:rgb(13,110,253);

}

.btn1:hover{
    color:white;
    
}

.btn1::before{
    content: "";
    position:absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background:rgb(13,110,253) ;
    z-index: -1;
    transition: 0.8s;
}

.btn1::before{
    top:0;
    border-radius: 0 0 50% 50%;
}

.btn1:hover::before{
    height: 180%;
}


.Connect{
    font-weight: 600;
}

.resized-image {
  width: 600px; /* Adjust width as needed */
  height: 450px; /* Adjust height as needed */
}


      

        


    </style>
  </head>


  <body>
    <!-- NAVBAR -->
  <header >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark  px-4 border-bottom  fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="index.php"><strong><span class="text-primary">Manthan</span></strong><span class="text-light">Mosaic</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
              <li class="nav-item">
                <a class="nav-link active text-light " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="admin/create.php">Blog</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#contact">Contact</a>
                    </li>
              </li>

              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" href="admin/index.php">Admin</a></li>
            <li><a class="dropdown-item" href="admin/login.php">Login</a></li>
            <li ><hr class="dropdown-divider"></li> 
            <li><a class="dropdown-item" href="admin/logout.php">Log out</a></li>
          </ul>
        </li>
            
            </ul>
            
          </div>
        </div>
      </nav>
</header>

<!-- SLIDER -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="admin/uploads/img4.jpg" class=" img-fluid d-block  w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="admin/uploads/img3.jpg" class="  img-fluid d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="admin/uploads/img2.jpg" class="  img-fluid d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="admin/uploads/img1.jpg" class="  img-fluid d-block w-100" alt="...">
      </div>
    </div>  
   
  </div>

  <!-- MAIN -->
  <section class="about my-5" id="about">
    <div class="container-fluid">
        <h1 class=" text-center "  data-aos="fade-up" data-aos-offset="300" ><strong><span class="text-primary">Featured -</span></strong> Posts</h1>
        <hr class="w-25 m-auto">
        <br>

        <div class="row mb-2 justify-content-center">

        <?php
            include("connect.php");
            $sqllist ="SELECT * FROM posts";
            $result =mysqli_query($conn, $sqllist);
            while($data =mysqli_fetch_array($result)){
                $fileName =$data['filename'];
                $imgUrl ="admin/uploads/".$fileName;
             ?>

           

        
    
    <div class="col-md-6  mb-4 align-center" data-aos="flip-up" data-aos-offset="350">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative justify-content-center ">
        <div class="col p-4 d-flex flex-column position-static">
          
          <h3 class="mb-0"><?= $data['title']?></h3>
          <div class="mb-1 text-body-secondary"><?= $data['date']?></div>
          <p class="card-text mb-auto"><?= $data['summary']?></p>
          <a href="view.php?id=<?=$data['id']?>" class="icon-link gap-1 btn btn-primary w-50">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="<?=$imgUrl?>" class="bd-placeholder-img w-100" width="100" height="250">

        </div>
      </div>
      
    </div>
    
    <?php
    }
    ?>

   
    
  </div>
  
    </div>

    <!-- CONTACT FORM -->
    <section class="contact" id="contact">
    <div class="container py-5">
        <h1 data-aos="fade-up" data-aos-offset="300" class=" text-center "><strong><span class="text-primary">Contact -</span></strong> US</h1>
        <hr class="w-25 m-auto  ">
 
        <div class="row my-5">
            <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="fade-right" data-aos-offset="300">
                <img  src="https://img.freepik.com/free-vector/service-24-7-concept-illustration_114360-7500.jpg?t=st=1712780494~exp=1712784094~hmac=03874ff91ceaa51a618600766ac4b9a0207a25d7cc0daeeff05ea64a8fd8dcc8&w=740"  class="img-fluid   img-thumbnail rounded-circle  shadow resized-image" alt="figma">
                
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto  my-5"  data-aos="fade-left" data-aos-offset="300">
                <form class="row g-3" >
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                   
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">State</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="btn-container">
                      <button class="btn1" >Submit</button>
                     
                  </div>
                  </form>
            </div>

        </div>

    </div>
</section>

<footer >
    <div  class=" Connect container-fluid bg-primary fs-3 text-light text-center font-weight-bold fixed-footer"  data-aos="fade-up" data-aos-offset="300">Your daily dose of thought-provoking content</div>
</footer>

</section>








  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

  </body>

</html>
