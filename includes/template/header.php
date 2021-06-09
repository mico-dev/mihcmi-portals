<header class="header transp sticky">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar navbar-expand-md justify-content-between">
          <a class="navbar-brand" href=""><img src="images/Metro Iloilo Hospital and Medical Center Inc.png" class="img-fluid" alt="logo"></a>
        <div class="mg-navs">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <div class="collapse navbar-collapse ml-auto"  id="navbarSupportedContent">
            <ul class="navbar-nav navbar-right">
              <?php 
                if(isset($_SESSION['ssid'])) {
                  echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';
                }else {
                  echo '<li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
