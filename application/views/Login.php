<!DOCTYPE html>
<html>
<head>
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <title>Login / Sign Up Form</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/7d24721300.js" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/Style_Login.css">

</head>
<body>
    <div><footer class="footer">
        <div class="footer-1">
            <img class="logo" src="<?= base_url() ?>assets/img/logo.png">
            <br>
            <h1><p>ELITE COOLING FOR YOUR CPU</p></h1>
            <br>
            <h5><p>All-in-one liquid CPU coolers with integrated ICL RGB for a rig</p></h5>
            <h5><p>that’s cool in every sense of the word</p></<h5>
            <button class="form__button" type="submit">Shop Now</button>
        </div>
    </footer>
    </div>
    <div class="container">
        <form class="form" action="c_Home">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
            <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
                <div class="form__input-error-message"></div>
            </div>
            <center>
            <button class="form__button" type="submit">Login</button>
            </center>
            <p class="form__text">
                <br>
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="c_Daftar">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <center>
            <button class="form__button" type="submit">Submit</button>
            </center>
            <p class="form__text">
                <br>
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>

    <script src="./js/js.js"></script>
</body>
</html>