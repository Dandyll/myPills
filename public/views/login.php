<!doctype html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initail-scale=1.0">
        <script type="text/javascript" src="public/js/reg.js"></script>
        <link rel="stylesheet" type="text/css" href="public/css/login.css">

        <title>LOGIN PAGE</title>
    </head>
    <body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">

                <h2>Alrady Have an Account?</h2>
                <button class="signinBtn">Sign in</button>
            </div>

            <div class="box signup">
                <h2>Don't Have an Account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form class="login" action="login" method="POST">
                    <div class="messages">
                        <?php if(isset($messages)) {
                            foreach ($messages as $message) {
                                echo $messages;
                            }
                        }
                        ?>
                    </div>
                    <h3>Sign In</h3>
                    <input name="email" type="text" placeholder="email">
                    <input name="password" type="password" placeholder="Password">
                    <input type="submit" value="Login">
                    <a href="#" class="forgot">Forgot Password</a>
                </form>
            </div>
            <div class="form signupForm">
                <div class="registerr">
                    <h3>Sign Up</h3>
                    <input name="nameR" type="text" placeholder="Name">
                    <input name="SurnameR" type="text" placeholder="Surname">
                    <input name="emailR" type="text" placeholder="Email Address">
                    <input name="passwordR" type="password" placeholder="Password">
                    <input name="confirmpasswordR" type="password" placeholder="Confirm Password">
                    <input name="regbutton" type="button" value="Register" onclick="register()">
                </div>
            </div>
        </div>
    </div>

    <script>
        const signupBtn = document.querySelector('.signupBtn');
        const signinBtn = document.querySelector('.signinBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body')

        signupBtn.onclick = function (){
            formBx.classList.add('active')
            body.classList.add('active')
        }
        signinBtn.onclick = function (){
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
    <script type="text/javascript" src="public/js/register.js"></script>

    </body>
</html>