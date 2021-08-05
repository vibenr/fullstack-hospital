<html>
    <head>
        
    <link href="stylesheets/login.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>LOGIN PAGE</title>
    </head>
<body>
 <header>

 </header>

    <div id="container">
       <header style="text-decoration:underline;">MEMBER LOGIN</header>
       <form method="POST" action="../PRIVATE/login.php">
          <fieldset>
             <br/>
             <input value="<?php echo $_POST['email']??'' ?>" type="text" name="email" id="email" placeholder="Enter your email"  required autofocus>
             <br/><br/>
             <input type="password" name="password" id="password" placeholder="Enter Your Password"  required  value="">
             <br/><br/>
             <label for="submit"></label>                                                             <!-- Pages/patient-form.php -->
             <input name="login" style="width:100%; margin:5px auto;" class="btn btn-success" type="submit" id="login">LOGIN</button>
             <p class="text-center md">Don't have an account? <a href="register.php" class = "sign-up">Sign up here!</a></p>
          </fieldset>
       </form>
    </div>


   <footer>

   </footer>

    
 </body>
 </html>