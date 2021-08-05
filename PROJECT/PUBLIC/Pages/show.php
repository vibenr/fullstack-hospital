<?php
require_once('../../PRIVATE/config/connection.php'); $id = $_GET['id']; $sql = "SELECT * FROM patient WHERE id='$id' LIMIT 1";
$result = $conn->query($sql); $row = $result->fetch_assoc();
?>
<?php include_once('inc/header.php'); ?>

<style media="screen">
    
    section div {
        margin:20px auto;
    }

</style>

<section>
    <div class="card" style="width: 30rem;">
      <img height=300 widtth=300 src="../../PRIVATE/patient/images/<?php echo $row['patient_no']; ?>.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <h4 class="card-title"><?php echo $row['fullname']; ?></h4>
          <small>last reviewed <?php echo $row['last_session']; ?></small>
          <p style="float:right;">Patient No. <b> <?php echo $row['patient_no']; ?></b></p>
          <p>
              Age: <b><?php echo $row['age']; ?></b>
              Gender: <b><?php echo $row['gender']=='M'?"Male":"Female"; ?></b>
          </p>
        </div>
            
        
        <div style="margin-bottom:-20px;">
            <h4>Case description</h4> <small>Diseased with <b><?php echo $row['disease']; ?></b></small> <br>
            <p class="card-text"><?php echo $row['description']; ?></p>
        </div> <br>
        
            
                
        
      </div>
      
      <ul class="list-group list-group-flush">
          <li class="list-group-item">Email: <b><?php echo $row['email']; ?></b> </li>
        <li class="list-group-item">Address: <b><?php echo $row['address']; ?></b> </li>
      </ul>
      <div class="card-body">
        <a href="edit.php?id=<?php echo $row['id']; ?>" style="width:220px;" class="btn btn-success">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" style="width:220px;" class="btn btn-warning">Delete</a>
      </div>
    </div>

</section>

<?php include_once('inc/footer.php'); ?>
