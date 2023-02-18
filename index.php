<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

<main class="container p-4">
   <div class="row">
    <div class="col-md-4">
     
       <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
             <?= $_SESSION['message']?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
       <?php session_unset();} ?>    
     
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Agrega palabra clave 🧐" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Agrega una descripción 💁🏻‍♂️"></textarea>
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar 🚀">
        </form>
      </div>
    </div> 
    <div class="col-md-8">
        <table class="table table-bordered">
           <thead>
               <tr>
                   <th>Nombre</th>
                   <th>Descripción</th>
                   <th>Opciones</th>
               </tr>
            </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM dic";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
              <a href="modificar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i><br>
              </a>
              <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
         </table>
       </div>
   </div>
</main>  
    
<?php include("includes/footer.php")?>