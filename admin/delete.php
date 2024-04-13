<?php
$id = $_GET['id'];
if($id){
    include('../connect.php');
    $sqlDELETE = "DELETE FROM posts WHERE id = $id";
    if(mysqli_query($conn, $sqlDELETE)){
        session_start();
        $_SESSION["delete"] = "Post Deleted Successfully!";
        header("Location:index.php");
    }else{
        die("DATA NOT DELETED!");
    }

}else{
    echo 'POST NOT FOUND!';
}
?>