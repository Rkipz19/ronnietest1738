<?php
class pagecontent{
    public function navbar(){
        ?>
        <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="images/favicon.ico" alt="" width="30" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usersignup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userlogin.php">Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      </section>
      <?php
    }
}