<?php session_start(); $user = $_SESSION['user']['username']??'Guest'; ?>

<html>
<head>
    <meta charset="utf-8">
    <link href="../stylesheets/patient-form.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<nav role="navigation" class="navbar navbar-inverse ">
  <div class="container-fluid">

  <div class="navbar-collapse collapse" id="navbarcollapse">
     <ul class="nav nav-tabs" style="margin-top:10px;">
       <li><a href="../index.php">Home</a></li>
       <li ><a href="../login.php">Login</a></li>
       <li ><a href="../register.php">Register </a></li>
       <?php if (isset($_SESSION['user']) && $_SESSION['user']['loggedin']): ?>
           <li>
               <a href="patients.php">
                   Patients
               </a>
           </li>
           <li style="float:right;padding:3px;">
               <form action="../../PRIVATE/logout.php" method="GET">
                   <input class="btn btn-success" type="submit" name="logout" value="Logout">
               </form>
           </li>
       <?php else: ?>
           <li>Guest</li>
       <?php endif; ?>
       <li id="show_user"><a href="#" style="color:white;"><?php echo "Welcome " . ucfirst($user); ?></a></li>
     

     </ul>

    </div>

   </div>

</nav>
<br>
<br>

<div class="main-form" style="margin:0 auto;border-radius:10px;padding:10px 20px;">

<form  class="form-tag" action="../../PRIVATE/patient/patient_form.php" method="POST" enctype="multipart/form-data">
    <div class="row" >
        <h3 style="color:wheat; text-align:left;margin-bottom:-20px;">Patient Data Entry Form<h3>
        <hr style="width:90%; float:left;">
    </div>
    
<div class="row">
       <div class="form-group">
         <label for="textinput1" class="col-lg-1.7" style="color: wheat;">Full name</label>  <!--sr-only class is used to remove the label from the form-->
         <input name="fullname" value="<?php echo $_POST['fullname']??''; ?>" type="text" id="fullname" class="inputtags col-lg-8.3" placeholder="Enter Your Name">
        </div> <br><br>

        <div class="form-group">
          <label for="textinput2" class="col-lg-1.9" style="color:wheat;">E-mail</label>
          <input name="email" value="<?php echo $_POST['email']??''; ?>" type="email" id="email"  class="inputtags1" placeholder="Enter Your Email">
        </div> <br><br><br>

        <div class="row">
        <div class="form-group col-lg-6">
            <label for="textinput3" style="color:wheat;">Patient number:</label>
            <input name="patient_number" value="<?php echo $_POST['patient_number']??''; ?>" type="number" id="patientid" placeholder="Enter Patient No">
        </div>

        <div class="form-group col-lg-5">
            <label for="textinput3" style="color:wheat;">Age</label>
            <input name="age" value="<?php echo $_POST['age']??''; ?>" type="number" id="age"  placeholder="Enter Your Age">
        </div>
        </div> <br>
        
        <div class="form-group">
                <label for="address" class="col-lg-offset-0.5"  style="color:wheat;">Address</label>
                <textarea name="address" rows="4" id="address" class="address col-lg-offset-0.5" placeholder="Address"><?php echo $_POST['address']??''; ?></textarea>
        </div>
        <br>

      <div class="form-group">
            <label for="textinput3" style="color:wheat;">Disease</label> <br>
            <input name="disease" value="<?php echo $_POST['disease']??''; ?>" type="text" class="disease" id="disease" placeholder="name of your disease or concern">
      </div><br>

     <div>
          <label for="textinput3" style="color:wheat;">Description</label><br>
           <textarea name="description" id="description" rows="5" cols="80" placeholder="Description"><?php echo $_POST['description']??''; ?></textarea>
    </div>
    <br>
    
    
    <div class="form-group">
        <span class="button"style="color:wheat;">
            Gender:
            <input type="radio" value="M" name="gender" id="male"style="color: wheat;">Male
            <input type="radio" name="gender" value="F" id="female"style="color: wheat;">Female
        </span>
    </div>
         
    <div class="form-group">
        <label for="textinput3" style="color:wheat;">Add Your Image</label>
        <input style="width:95%;background:white;border-radius:5px;" name="fileToUpload" type="file" id="fileToUpload" value="Upload Your Photo">
    </div> <br>

    <div>
        <input style="width:95%;margin:0 auto;" name="submit" class="btn btn-success" type="submit" class="submit" value="submit">
    </div>

</div>
</div>
</form>
</div>

<div class="footer">
<p>FILE SHOULD BE </p>

</div>

</body>
</html>