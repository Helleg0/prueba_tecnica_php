<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/styleContainers.css">
        <link rel="stylesheet" href="css/styleFieldValidation.css">
    </head>
    <body style="background-color: rgb(219, 219, 219);">
        
    <div class="containerLogin" >
    <h2>Log In</h2> 
    <form action="#" method="POST" name="form-login">
        <!-- FIELD EMAIL -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"  placeholder="name@example.com" required> <br><br>
                    <p id="errorEmail" class="errorFields">Invalid Email.</p>
                    <p id="errorEmail3" class="errorFields">invalid password or email.</p>  
        <!-- END FIELD EMAIL -->  
        
        <!-- FIELD PASSWORD -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="******"required>
                    <p id="errorPassword1" class="errorFields">Must have an uppercase letter and a number.</p>
                    <p id="errorPassword2" class="errorFields">Password must be 8-16 characters.</p>
                    <p id="errorPassword3" class="errorFields">invalid password or email.</p>
        <!-- END FIELD PASSWORD -->

        <button type="button" name="btnLogin" onclick="validateLoginFields();">LOG</button><br>
        <p class="mb-5 pb-lg-2">Don't have an account? <a href="signUp.php">Sign up here</a></p>
    </form>
    </div>
   
    </body>
    <script src="../backend/js/validationLogin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>