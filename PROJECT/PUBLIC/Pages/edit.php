<?php if (isset($_GET['id'])) {
    require_once('../../PRIVATE/config/connection.php');
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $sql = "SELECT * FROM patient WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
}
?>
<?php include_once('inc/header.php'); if (isset($id)): ?>

    <style media="screen">
        
        section {
            width: 30%;
            margin:0 27%;
        }
        
        .container {
            background-color:#e3e3e3;
            width: 150%;
            border: 1px solid black;
            border-radius:10px;
            margin: 20px auto;
            height:900px;
            padding:30px;
        }

    </style>

    <section>
        
        <div class="container">
            
            <h1>Editing: <?php echo $row['fullname'] . " details."; ?></h1>
                
            
            <form action="../../PRIVATE/patient/edit_details.php?id=<?php echo $row['id']; ?>" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full name</label>
                  <input name="fullname" value="<?php echo $row['fullname']; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" value="<?php echo $row['email']; ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3" style="width:50%;">
                  <label for="exampleInputEmail1" class="form-label">Age</label>
                  <input name="age" type="number" value="<?php echo $row['age']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3" style="width:50%;">
                  <label for="gender" style="margin-right:20px;">Gender</label>
                  <input name="gender" type="radio" value="M" > Male
                  <input name="gender" type="radio" value="F" > Female
                </div>
                
                <div class="mb-3" style="width:50%;">
                  <label for="exampleInputEmail1" class="form-label">Disease</label>
                  <input name="disease" value="<?php echo $row['disease']; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <textarea  rows="5" cols="80"  name="address" class="form-control"> <?php echo $row['address']; ?> </textarea>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea  rows="5" cols="80"  name="description" class="form-control"> <?php echo $row['description']; ?> </textarea>
                </div>

              <input style="width:100%;" name="update" type="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
        


    </section>
    <?php include_once('inc/footer.php'); ?>

<?php else: ?>

    <section>
        Sorry, No patient avaliable
    </section>

<?php endif; ?>