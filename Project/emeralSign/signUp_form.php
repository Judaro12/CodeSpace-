<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emerald Sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link rel="stylesheet" href="Include\style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: whitesmoke; border-bottom: 2px solid rgba(47, 88, 49, 0.342);">
      <div class="container-fluid">
          <!-- Left aligned items -->
          <div class="navbar-nav me-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li><a class="nav-link" href="#">Stationery</a></li>
                <li><a class="nav-link" href="shop.php">Wedding Cards</a></li>
                <li><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Log in</a>
                  <div class="dropdown-menu">
                    <form class="px-4 py-3" action="Include\login_action.php" method="post" enctype="multipart/form-data" novalidate>
                      <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" name="email" class="form-control" id="user_email" placeholder="email@example.com">
                      </div>
                      <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" name="pass" class="form-control" id="user_password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                          <label class="form-check-label" for="dropdownCheck">
                           Remember me
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-outline-success">Sign in</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="signUp_form.php">New around here? Sign up</a>
                    <a class="dropdown-item" href="forgotPass.html">Forgot password?</a>
                  </div>
              </li>
          </ul>
              
          </div>
  
          
          </div>
          <form class="d-flex" role="search">
                      <button class="btn btn-outline-success" style="margin-right: 10px;" type="submit">Search</button>
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
      </div>
    </nav>

    <div class="container">
        <div class="py-5 text-center">         
            <h1>The Emerald Sign</h1>
            <h2>Sign Up</h2>
        </div>
    </div> 

    <div class="container">
        <form action="Include\signUp.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-sm-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="John"
                    required value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>">
                    
                </div>
                <div class="col-sm-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Smith"
                    required value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']?>">                                 
                   
                </div>
                <div class="col-sm-12">
                    <label for="user_email" class="form-label">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>                                           
                        <input id="user_email" name="user_email" type="email" class="form-control" placeholder="Email@example.com"
                        required value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']?>">
                    </div>                    
                </div>
                <div class="col-sm-6">
                    <label for="user_password" class="form-label">Password</label>
                    <input id="user_password" name="user_password" type="Password" class="form-control"
                    required value="<?php if(isset($_POST['user_password'])) echo $_POST['user_password']?>">
                    
                </div>
                <div class="col-sm-6">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input id="confirm_password" name="confirm_password" type="password" class="form-control">
                    
                </div>
                     
            
                <button type="submit" class="btn btn-outline-success btn-lg btn-block" style="margin-top: 20px;">Sign Up</button>  
                
                <a href="index.html">
                    <img src="Img\emeralFooter.png" class="float-start" width="1300"  id="footerImage" style="margin-top: 20px;">
                </a>
            </div>
            
            
        </form>
    </div>

    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>