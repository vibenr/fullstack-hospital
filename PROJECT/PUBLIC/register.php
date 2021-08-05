<html>
    <head>
        
    <link href="stylesheets/register.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>REGISTER YOURSELF</title>
    </head>
<body>
 <header>

 </header>

    <div id="container form_inputs">
       <header>REGISTER</header>
       <form method="POST" action="../PRIVATE/register.php" id="register_form">
          <fieldset>
             <br/>
             <input class="" value="<?php $_POST['username']??''; ?>" type="text" name="username" id="username" placeholder="Username"  required autofocus>
             <br/><br/>
             <input class="" value="<?php $_POST['email']??''; ?>" type="text" name="email" id="email" placeholder="Email-id"  required autofocus>
             <br/><br/>
             <input class="" type="password" name="password" id="password" placeholder="Password"  required autofocus value="">
             <br/><br/>
             <input class="" type="password" name="password2" id="password2" placeholder="Retype-Password"  required  value="">
             <br/><br/>
             <label for="submit"></label>
             <input type="submit" name="submit" id="submit" value="Sign up">
             <p class="lastSentence">Already have an account? <a href="login.php" class = "login">Log in</a></p>
            </fieldset>
         </form>
      </div>



   <footer>

   </footer>
 </body>
 </html>