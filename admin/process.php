<?php
if(isset($_POST["create"])){
    include("../connect.php");
    $title   = mysqli_real_escape_string($conn,$_POST["title"]);
    $summary = mysqli_real_escape_string($conn,$_POST["summary"]);
    $content = mysqli_real_escape_string($conn,$_POST["content"]);
    $date    = mysqli_real_escape_string($conn,$_POST["date"]);
    $fileName= $_FILES["image"]["name"];
    $ext =pathinfo($fileName,PATHINFO_EXTENSION);
    $allowedTypes =array("jpg","jpeg","png","gif");
    $tempName =$_FILES["image"]["tmp_name"];
    $targetpath ="uploads/".$fileName;
    if(in_array($ext,$allowedTypes)){
        if(move_uploaded_file($tempName,$targetpath)){

            $sql_insert = "INSERT INTO posts (date,title,summary,content,filename) VALUES
            ('$date','$title','$summary','$content','$fileName')";
        
            if(mysqli_query( $conn, $sql_insert)){
                session_start();
                $_SESSION["create"] = "Post Created Successfully!";
                header("Location:index.php");
        }else{
            die("DATA NOT INSERTED!");

        }
    }
    
}
}
?>


<?php
if(isset($_POST["update"])){
    include("../connect.php");
    $title   = mysqli_real_escape_string($conn,$_POST["title"]);
    $summary = mysqli_real_escape_string($conn,$_POST["summary"]);
    $content = mysqli_real_escape_string($conn,$_POST["content"]);
    $date    = mysqli_real_escape_string($conn,$_POST["date"]);
    $id      =  mysqli_real_escape_string($conn,$_POST["id"]);
    $sql_UPDATE = "UPDATE posts SET title='$title' , summary='$summary', content='$content', date='$date' WHERE  id = $id";

    if(mysqli_query( $conn, $sql_UPDATE)){
        session_start();
        $_SESSION["update"] = "Post Updated Successfully!";
        header("Location:index.php");
    }else{
        die("DATA NOT UPDATED!");
    }
    
}
?>

