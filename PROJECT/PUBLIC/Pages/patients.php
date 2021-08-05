<?php include_once('inc/header.php'); ?>

        <style media="screen">
        
            #heading {
                text-align:center;
                margin: 30px auto;
            }
            
            
        </style>


        <section>
            <table class="table" style="width:70%;margin:0 auto;">
              <thead>
                <tr style="text-align:center;">
                  <th scope="col">#</th>
                  <th scope="col">Full name</th>
                  <th scope="col">Patient No.</th>
                  <th scope="col">Disease</th>
                  <th scope="col">Age</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Last session</th>
                  <th scope="col">More info</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                  
                </tr>
              </thead>
              <tbody>
                  
                <?php require_once('../../PRIVATE/config/connection.php');
                $result = $conn->query("SELECT * FROM patient ORDER BY id");
                ?>
                
                <div id="heading">
                    <h4>Total number of patients : <?php echo $result->num_rows; ?></h4>
                </div>
                
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr style="text-align:center;">
                      <th scope="row"><?php $id = $row['id']; echo $id; ?></th>
                      <td><?php echo $row['fullname']; ?></td>
                      <td><?php echo $row['patient_no']; ?></td>
                      <td><?php echo $row['disease']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['gender']=='M' ? "Male" : "Female"; ?></td>
                      <td><?php echo $row['last_session']; ?></td>
                      <td><a href="show.php?id=<?php echo $id; ?>"><i class="fas fa-info"></i></a> </td>
                      <td><a href="edit.php?id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a> </td>
                      <td><a href="delete.php?id=<?php echo $id; ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php endwhile; ?>
        
              </tbody>
            </table>

        </section>
        
        
<?php include_once('inc/footer.php'); ?>