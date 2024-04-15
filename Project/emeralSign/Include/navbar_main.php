<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: whitesmoke; border-bottom: 2px solid rgba(47, 88, 49, 0.342);">
      <div class="container-fluid">
          <!-- Left aligned items -->
          <div class="navbar-nav me-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
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
                    <a class="dropdown-item" href="forgotPass.php">Forgot password?</a>
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