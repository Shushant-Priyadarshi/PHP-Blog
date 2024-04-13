<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header("Location:admin/login.php");
  }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Edit Posts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family:"poppins",sans-serif;
            background-color: #D9AFD9;
            background-image: linear-gradient(90deg, #D9AFD9 0%, #97D9E1 100%);
            overflow: hidden;

        .no-resize {
            resize: none;
        }
        
        }  
        .sidebar {
            width: 100%;
            border-right: 1px solid #dee2e6;
            height: 100%;
        }
        .sidebar {
            position: fixed;
            left: 0;
            width: 250px; /* adjust width as needed */
            background-color: #f8f9fa; /* add background color */
        
        }

 
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    

  
    
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">

  
  
  
  <symbol id="house-fill" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
  </symbol>

  
  <symbol id="plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </symbol>
  

</svg>

<header class="navbar sticky-top  flex-md-nowrap p-0 shadow ">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-dark bg-white shadow" href="../index.php">ManthanMosic</a>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
        <h1 class="h2">Edit Post📝</h1>
   
      </div>
</header>

  

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto sidebar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
              <i class="bi bi-person-circle fs-6 mb-2"></i>
                Dashboard
              </a>
            </li>
         
     
        
         
        
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>OTHER</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg class="bi"><use xlink:href="#plus-circle"/></svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="index.php">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
               Back to Posts
              </a>
            </li>
           
           
          </ul>

         

         
        </div>
      </div>
    </div>
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<?php
    $id =$_GET['id'];
    if($id){
            include("../connect.php");
            $sqlEdit="SELECT * FROM posts WHERE id = $id";
            $result = mysqli_query($conn, $sqlEdit  );
           
    }else{
            echo "POST NOT FOUND!";
    }   
?>
                <div class="create-form w-100 mx-auto mb-3 mt-5 container-fluid" style="max-width:700px;">
                    <form action="process.php" method="post">
                        <?php
                        while($data =mysqli_fetch_array($result)){

                        ?>

                       
                        <div class="form-field">
                            <input type="text" name="title" id="" placeholder="Enter Title" class="form-control mb-4"
                             value="<?= $data['title'] ?>">
                        </div>
                        <div class="form-field">
                            <textarea name="summary" cols="30" rows="7" placeholder="Enter Summary"
                                class="form-control mb-4 no-resize"><?= $data['summary'] ?></textarea>
                        </div>
                        <div class="form-field">
                            <textarea name="content" cols="30" rows="10" placeholder="Enter Post"
                                class="form-control mb-4 no-resize"><?= $data['content'] ?></textarea>
                        </div>
                        <input type="hidden" name="date" value="<?= date("Y/m/d"); ?>">
                        <input type="hidden" name="id" value="<?=  $id; ?>">
                        <div class="form-field ">
                            <input type="submit" value="Update" name="update" class="btn btn-primary w-100 fs-5">
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </main> 
  </div>
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/dashboard.js">

</script></body>
</html>
