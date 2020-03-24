<header>
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Navbar Toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index.html"><img class="logo"  src="<?= ADMIN_ASSET_URL ?>img/logo.png" alt="GLIMPSE"></a>
        </div>
        <!-- Navbar Toggle End -->

        <!-- navbar-collapse start-->
        <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
          <ul class="nav navbar-nav rq-menus">
              <li class="active">
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="select-room-grid.php">Room</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="single-room.php">Single Room</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="about-us.php">About</a>
              </li>
              <li>
                <a href="cart.php">Pages</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Check Out</a>
                    </li>
                   
                </ul>
              </li>
              <li>
                <a href="blog.php">Blog</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="blog-details.php">Blog Details</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
          </ul>
        </div>
        <!-- navbar-collapse end-->

        <div class="rq-extra-btns-wrapper">
            <div class="rq-language">
                <select class="js-example-placeholder-single form-control">
                    <option value="Eng">EN</option>
                    <option value="Spn">SPN</option>
                    <option value="Ger">GER</option>
                    <option value="Rus">RUS</option>
                </select>
            </div>
            <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
        </div>

      </div>
    </nav>
    <!-- Navigation Menu end-->
  </header> <!-- / rq-header-section end here-->