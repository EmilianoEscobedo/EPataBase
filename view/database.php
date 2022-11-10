
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
<body style="min-width: fit-content;">
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
    <p class="text-end me-5" style="color: #BE916E;"><?php echo ucwords($_SESSION['username'])?></p>
    <div>
      <form action="index.php?controller=company&action=search&input&option" method="post" class="text-white my-5 me-5 text-end">
        <input required type="text" name="input" class="login__input me-2">
        <select required name="option" class="me-3">
          <option value="" selected disabled"> Filter by</option>
          <option value="name"> Name </option>
          <option value="range"> Range </option>
          <option value="max_weight"> Weight </option>
          <option value="max_width"> Width </option>
          <option value="max_height"> Height </option>
        </select>
        <button type="submit" class="btn btn-secondary">
          🔍
        </button>
      </form>
    <div class="mx-5 my-5">
          <?php
                foreach($this->model->getAll() as $company):
            ?>
        <div class="row mt-5 text-white">
            <div class="col-sm-1 mb-3 d-flex align-items-center">
              <img src="<?php echo $company->image; ?>" class="card-img-top" alt="new company">
            </div>
            <div class="col-sm-3  mb-1 d-flex align-items-center justify-content-center text-center">
              <h4 class="fw-bold"><?php echo $company->name; ?></h4>
            </div>
            <div class="col-sm-1 mb-1 col-6 d-flex align-items-center justify-content-center flex-column">
              <p class="fw-bold">Range</p>  
              <p><?php echo $company->range; ?></p>
            </div>
            <div class="col-sm-1 mb-1 col-6 d-flex align-items-center justify-content-center flex-column">
              <p class="fw-bold">Max Weight</p>
              <p><?php echo $company->max_weight; ?> kgs</p>
            </div>
            <div class="col-sm-1 mb-1 col-6 d-flex align-items-center justify-content-center flex-column">
              <p class="fw-bold">Max Width</p>
              <p><?php echo $company->max_width; ?> mts</p>
            </div>
            <div class="col-sm-1 mb-1 col-6 d-flex align-items-center justify-content-center flex-column">
              <p class="fw-bold">Max Height</p>
              <p><?php echo $company->max_height; ?> mts</p>
            </div>
            <div class="col-sm-4 mb-1 d-flex justify-content-center text-center flex-column">
              <p class="fw-bold">Comments</p>
              <p><?php echo $company->comments; ?></p>
            </div>
            <div class="row pb-3 mt-3" style="border-bottom: 2px solid #BE916E;">
              <div class="col-sm-12 text-end">
                <a href="index.php?controller=company&action=showById&id=<?php echo $company->id;?>" class="btn btn-secondary"> Edit </a>
                <a href="index.php?controller=company&action=quit&id=<?php echo $company->id;?>" class="btn btn-secondary" onclick="javascript:return confirm('Are you sure?');">Delete</a>
              </div>
            </div>
            </div>
            <?php endforeach; ?>
    </div>
            
    </div>        
  <!-- BS Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>