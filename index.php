<!DOCTYPE html>
<html>
    <head><link href="https://fonts.googleapis.com/css?family=Gotham+Black&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Hind+Mysuru&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet" />
        <title>DENTECH</title>
    </head>
    <body>
            <div class="v2361_4">
            <div class="v2361_5"></div>
            <span class="v2361_11">Manalili Peña</span>
            <span class="v2361_6">Dent<br></span>
            <span class="v2361_22">l Clinic</span>
            <span class="v2361_7">DenTech</span>
            <div class="v2361_8"></div>
            <div class="v2361_9"></div>
            <div class="v2361_10"></div>
            <div class="v2369_346"></div>




        <div class="container" id="signUp" style="display: none;">
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <input type="text" id="fName" placeholder="First Name" required>
                    <label for="fname">First Name</label>
                </div>
                <div class="input-group">
                    <input type="lName" id="lName" placeholder="Last Name" required>
                    <label for="lName">Last Name</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </div>


        <div class="container" id="signIn">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="register.php"> 
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <p class="recover">
                    <a href="#">Forget password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <div class="links">
                <p>Don't Have Account ?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
    </html>