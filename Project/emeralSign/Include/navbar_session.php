<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: whitesmoke; border-bottom: 2px solid rgba(47, 88, 49, 0.342);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Stationery</a></li>
                <li class="nav-item"><a class="nav-link" href="shop.php">Wedding Cards</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <?php if (isset($_SESSION['user_id'])): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo htmlspecialchars($_SESSION['first_name'] . " " . ($_SESSION['last_name'] ?? '')); // Display the user's full name ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Include\signout.php">Sign Out</a></li>
                </ul>
              </li>
              <?php else: ?>
              <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
              <?php endif; ?>
            </ul>

        </div>
        <button class="btn btn-outline-success" style="margin-right: 10px;" type="submit">Search</button> 
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
</nav>