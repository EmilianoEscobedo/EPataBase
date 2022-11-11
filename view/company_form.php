<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Edit EP DB</title>
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
    <header class="d-flex justify-content-between align-items-center header__index-margin">
        <a href="index.php">
            <img src="./assets/images/logo-white.png" alt="logo" class="login__logo ms-5">
        </a>
        <ul>  
          <li class="nav-item dropdown d-flex align-items-center justify-content-center me-5 btn btn-secondary mt-5">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ⚙️ Options 
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?controller=company&action=showById">Add company</a></li>
              <li><a class="dropdown-item" href="index.php?controller=user&action=logout">Logout</a></li>
            </ul>
          </li>
        </ul>
    </header>
    <p class="text-end me-5 session__name"><?php echo ucwords($_SESSION['username'])?></p>
    <div class="container">
        <div class="row mt-5 align-items-center">
          <h1 class="text-white text-center">
            Add or edit a Company
          </h1>
            <div class="col-12 col-sm-5 mb-5 mt-5 text-white ">
                <form action="index.php?controller=company&action=save" method="post" class=" mt-5 w-100 d-flex flex-column h-100 justify-content-around">
                    <input required id="name" name="name" value="<?php echo $company->name; ?>" class="all__input"/>
                    <label for="name" class="mb-4 mt-1 fw-bold">Name </label>
                    <input required id="image" name="image" value="<?php echo $company->image; ?>" class="all__input"/>
                    <label for="image" class="mb-4 mt-1 fw-bold">Image URL</label>
                    <input required id="range" name="range" class="all__input" value="<?php echo $company->range; ?>"/>
                    <label for="range" class="mb-4 mt-1 fw-bold">Range</label>
                    <input required id="price_km" name="price_km" value="<?php echo $company->price_km; ?>" class="all__input"/>
                    <label for="price_km" class="mb-4 mt-1 fw-bold">Km price</label>
                    <input required id="max_weight" name="max_weight" value="<?php echo $company->max_weight; ?>" class="all__input"/>
                    <label for="max_weight" class="mb-4 mt-1 fw-bold">Max weight transportation</label>
                    <input required id="max_width" name="max_width" value="<?php echo $company->max_width; ?>" class="all__input"/>
                    <label for="max_width" class="mb-4 mt-1 fw-bold">Max width transportation</label>
                    <input required id="max_height" name="max_height" value="<?php echo $company->max_height; ?>" class="all__input"/>
                    <label for="max_height" class="mb-4 mt-1 fw-bold">Max Height transportation</label>
                    <textarea id="comments" name="comments" class="all__input"> <?php echo $company->comments; ?> </textarea>
                    <label for="comments" class="mb-4 mt-1 fw-bold">Comments</label>
                    <input type="submit" class="btn btn-success mt-4"
                       value="Push to database" />
                    <input type="hidden" name="id" value="<?php echo $company->id; ?>">
                </form>
            </div>
            <div class="col-1"></div>
            <div class="col-12 col-sm-5">
                <div class="card">
                    <img src= <?php echo $company->image; ?> class="card-img-top" alt="">
                </div>
            </div>
        </div>
        
    </div>

<!-- BS Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
