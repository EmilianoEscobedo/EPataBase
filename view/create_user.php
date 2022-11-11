<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EP Database</title>
    <!-- BS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- GFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="index.php">
            <img src="./assets/images/logo-white.png" alt="logo" class="login__logo">
        </a>
    </header>
    <div class="container mt-5">
    <form action="index.php?controller=user&action=createUser" class="login_form mt-5" method="post">
        <div class="row">
            <div class="col-sm-5 mt-5">
                <input type="text" name="username" id="username" class="all__input " placeholder="New user" required>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 mt-5">
                <input type="password" name="password" id="password" class="all__input" placeholder="New password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mt-5">
                <input type="text" name="email" id="email" class="all__input" placeholder="Your email" required>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 mt-5">
                <input type="text" name="name" id="name" class="all__input" placeholder="Your Name" required>
            </div>   
        </div>
        <div class="row">
            <div class="col-sm-5 mt-5">
                <input type="text" name="lastname" id="lastname" class="all__input" placeholder="Your lastname" required>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 mt-5">
                <input type="text" name="adress" id="adress" class="all__input" placeholder="Your adress" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-12 mt-5">
                <button type="submit" class="login__btn">
                    Create account
                </button>
            </div>
        </div>
            
            </form>
        </div>
    </div>
   
    <!-- BS Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>