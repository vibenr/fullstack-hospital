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
     <ul class="nav nav-tabs ">  
       <li ><a href="../index.php">HOME</a></li>
       <li ><a href="../login.php">LOGIN</a></li>
       <li ><a href="../register.php">REGISTER </a></li>
     </ul>

    </div>

   </div>

</nav>

<br>
<br>



<div class="main-form" style="margin: auto;">

<form class="form-tag" action="" method="">
    <div class="row">
    <h3 style="color: wheat;">PATIENT DATA ENTRY<h3>
    </div>
<div class="row">

       <div class="form-group">
         <label for="textinput1" class="col-lg-1.7"style="color: wheat;">FULL NAME</label>  <!--sr-only class is used to remove the label from the form-->
         <input type="text" id="name" class="inputtags col-lg-8.3" placeholder="Enter Your Name">
        </div>
<br>
<br>

        <div class="form-group">
          <label for="textinput2" class="col-lg-1.9" style="color: wheat;">E-MAIL</label>
          <input type="email" id="email"  class="inputtags1" placeholder="Enter Your Email">
        </div>
        <br>
<br>
<br>

        <div class="row">
        <div class="form-group col-lg-7">
            <label for="textinput3" style="color: wheat;">PATIENT NO</label>
            <input type="number"  id="patientid" placeholder="Enter Patient No">
        </div>

        <div class="form-group col-lg-5">
            <label for="textinput3" style="color: wheat;">AGE</label>
            <input type="number" id="age"  placeholder="Enter Your Age">
        </div>
        </div>
        <br>

        
<div class="form-group">
        <label for="address" class="col-lg-offset-0.5"  style="color: wheat;">ADDRESS</label>
        <textarea rows="4" id="address" class="address col-lg-offset-0.5" placeholder="Address"  ></textarea>
</div>
<br>

       


      <div>
            <label for="textinput3" style="color: wheat;">DISEASE</label>
            <br>
            <input type="text" class="disease"  id="disease" style="color: black;"  placeholder="Disease">
      </div>
            
      <br> 

     <div>
          <label for="textinput3"style="color: wheat;">DESCRIPTION</label>
            <br>
           <textarea id="description" rows="5" cols="80" placeholder="Description"></textarea>
    </div>
    <br>
         
        <div class="form-group">
            <label for="textinput3" style="color: wheat;">Add Your Photo</label>
            <input type="file" id="upload" value="Upload Your Photo">
        </div>
        <br>
               <div class="form-group">
                    <span class="button"style="color: wheat;">
                        Gender:  
                        <input type="radio" name="gender" id="male"style="color: wheat;">Male
                        <input type="radio" name="gender" id="female"style="color: wheat;">Female
                    </span>
                   
                </div>

     
     <br>
     <input class="btn btn-success" type="button" class="subtn" value="SUBMIT">


</div>

</div>

</form>

</div>

<div class="footer">
<p>FILE SHOULD BE </p>

</div>

</body>
</html>