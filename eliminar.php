<?php 

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM dic WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Fallo conexion ");
        }
        
        $_SESSION['message'] = 'Eliminado correctamente';
        $_SESSION['message_type']= 'danger';
            header("Location: index.php");
        
    }

?>