<!doctype hmtl>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/styleContainers.css">
        <link rel="stylesheet" href="css/styleFieldValidation.css">
    </head>
    <body style="background-color: rgb(219, 219, 219);">
       <div class="containerSignup">
        <h2>Create account</h2>
            <form action="#" method="POST" name="form-signup">
                <!-- FIELD USERNAME -->
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br><br>
                <p id="errorUsername" class="errorFields">Username in use..</p>
                <!-- END FIELD USERNAME -->

                <!-- FIELD EMAIL -->
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="name@example.com" required><br><br>
                <p id="errorEmail" class="errorFields">Invalid Email..</p>
                <p id="errorEmail2" class="errorFields">Email in use, try again.</p>
                <!-- END FIELD EMAIL -->

                <!-- FIELD PASSWORD -->
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="******" required><br><br>
                <p id="errorPassword1" class="errorFields">Must have an uppercase letter and a number.</p>
                <p id="errorPassword2" class="errorFields">Password must be 8-16 characters.</p>
                <!-- END FIELD PASSWORD -->

                <button type="button" name="btnSignup" onclick="signUp();">Sign Up</button>
            </form>
       </div>
    </body>

    <script src="../backend/js/validationSignUp.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
