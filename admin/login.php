<?php
    if(isset($_POST['login'])){
        $username = $_POST['uname'];
        $password = $_POST['password'];

        if($username=="admin" && $password== "prisha"){
            session_start();
            $_SESSION["user"] = "admin";
            header("Location:../index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family:"poppins",sans-serif;
            background-color: #D9AFD9;
            background-image: linear-gradient(90deg, #D9AFD9 0%, #97D9E1 100%);
            font-size: 20px;
           
        }   
        .container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  margin-top: 35px;
  max-height: 100vh;
}

.form_area {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #EDDCD9;
  height: auto;
  width: auto;
  border: 2px solid #264143;
  border-radius: 20px;
  box-shadow: 3px 4px 0px 1px #E99F4C;
}

.title {
  color: #264143;
  font-weight: 900;
  font-size: 1.5em;
  margin-top: 20px;
}

.sub_title {
  font-weight: 600;
  margin: 5px 0;
}

.form_group {
  display: flex;
  flex-direction: column;
  align-items: baseline;
  margin: 10px;
}

.form_style {
  outline: none;
  border: 2px solid #264143;
  box-shadow: 3px 4px 0px 1px #E99F4C;
  width: 290px;
  padding: 12px 10px;
  border-radius: 4px;
  font-size: 15px;
}

.form_style:focus, .btn:focus {
  transform: translateY(4px);
  box-shadow: 1px 2px 0px 0px #E99F4C;
}

.btn {
  padding: 15px;
  margin: 25px 0px;
  width: 290px;
  font-size: 15px;
  background: #DE5499;
  border-radius: 10px;
  font-weight: 800;
  box-shadow: 3px 3px 0px 0px #E99F4C;
}

.btn:hover {
  opacity: .9;
}

.link {
  font-weight: 800;
  color: #264143;
  padding: 5px;
}
    </style>
</head>

<body>

    <div class="container ">
        <div class="form_area ">
            <a href="../index.php" style="text-decoration: none;"><p class="title">Login</p></a> 
            <form action="login.php" method="post">
               
                <div class="form_group">
                    <label class="sub_title" for="email">Username</label>
                    <input placeholder="Enter your email" id="uname" class="form_style" type="uname" name="uname">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="password">Password</label>
                    <input placeholder="Enter your password" id="password" class="form_style" type="password" name="password">
                </div>
                <div>
                    <button class="btn" type="submit" name="login">Login</button>
                    
            
        </a></form></div><a class="link" href="">
    </a></div>
    
</body>
</html>