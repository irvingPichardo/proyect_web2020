<?php
include("db.php");

if(isset($_POST['guardar'])){
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query= "INSERT INTO dic(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    
    if(!$result){
        die("Error");
    }
    
    $_SESSION['message']='Se ha guardado correctamente';
    $_SESSION['message_type']='success';
    header("Location: index.php");
    
}

?>