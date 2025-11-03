
  <header class="site-header">
    <div class="container py-2 d-flex align-items-center justify-content-between"> <a href="/" class="d-inline-flex align-items-center gap-2 text-decoration-none"> <img src="../assets/logo.png" alt="uPay Ad network" height="40"> </a>
      <div class="headlink d-none d-md-flex gap-3">
        <a href="/user-login.php"><i class="fa fa-lock"></i> Login</a> 
        <a href="/user-join.php"><i class="fa fa-address-card"></i> Join Now</a> 
      </div>
      <button class="btn btn-light d-md-none" id="moreWrapper" aria-label="Toggle menu">
        <span id="moreToggle" class="btn btn-outline-secondary">More</span> 
    </button>
    </div>
    <nav class="main-nav">
      <div class="container">
        <ul class="nav list-unstyled d-flex flex-wrap align-items-center gap-2 py-2 justify-content-center" id="primaryNav">
          <li class="dropdown-button nav-item">
            <div class="btn-group"> <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bullhorn"></i> Advertise</button>
              <ul class="dropdown-menu">
                <li>
                  <h6 class="dropdown-header">-- Campaign --</h6>
                </li>
                <li><a class="dropdown-item" href="/campaign.php"><i class="fa fa-plus"></i> Create New Campaign</a></li>
                <li><a class="dropdown-item" href="/my-ads.php"><i class="fa fa-list"></i> My Ads</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Credit --</h6>
                </li>
                <li><a class="dropdown-item" href="/buy-credit.php"><i class="fa-solid fa-bitcoin-sign"></i> Buy Credit</a></li>
                <li><a class="dropdown-item" href="/credit-history.php"><i class="fa fa-clock"></i> Credit History</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Help --</h6>
                </li>
                <li><a class="dropdown-item" href="/faq.php"><i class="fa fa-life-ring"></i> FAQ</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-book"></i> Tips: Get Maximum</a></li>
                <li><a class="dropdown-item" href="/contact.php"><i class="fa fa-envelope"></i> Contact Admin</a></li>
              </ul>
            </div>
          </li>
          <li class="dropdown-button nav-item">
            <div class="btn-group"> <button type="button" id="earnDropdown" class="btn dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-money-bill"></i> Earn</button>
              <ul class="dropdown-menu earn-drop-menu">
                <li>
                  <h6 class="dropdown-header">-- Earn --</h6>
                </li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-plus"></i> Shorten New Link</a></li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-link"></i> My Links</a></li>
                <li><a class="dropdown-item" href="/refer.php"><i class="fa fa-handshake"></i> Refer Friend</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Withdraw --</h6>
                </li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-dollar-sign"></i> My Income</a></li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-arrow-up"></i> Withdraw</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Help --</h6>
                </li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-question-circle"></i> Earner's FAQ</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-book"></i> Tips: Earn Max</a></li>
                <li><a class="dropdown-item" href="/contact.php"><i class="fa fa-envelope"></i> Support</a></li>
              </ul>
            </div>
          </li>
          <li class="d-none d-md-inline nav-item">
            <a class="btn" href="/pricing.php">
              <i class="fa fa-dollar-sign"></i> Price</a>
          </li>
          <li class="d-none d-md-inline nav-item">
            <a class="btn" href="/bot-control.php">
              <i class="fa fa-bug"></i> Bot Control</a>
          </li>
          <li class="d-none d-md-inline nav-item">
            <a class="btn" href="/refer.php">
              <i class="fa fa-handshake"></i> Refer</a>
          </li>
          <!-- <li class="ms-auto d-md-none" id="moreWrapper">
            <button class="btn btn-outline-secondary" id="moreToggle">More</button>
          </li> -->
        </ul>
        <ul class="nav list-unstyled flex-column gap-2" id="moreMenu">
          <li><a class="btn btn-light w-100" href="/pricing.php"><i class="fa fa-dollar-sign"></i> Price</a></li>
          <li><a class="btn btn-light w-100" href="/bot-control.php"><i class="fa fa-bug"></i> Bot Control</a></li>
          <li><a class="btn btn-light w-100" href="/refer.php"><i class="fa fa-handshake"></i> Refer</a></li>
          <li class="d-flex gap-2 login-join-btn">
            <a class="btn btn-futuristic flex-fill" href="/user-login.php"><i class="fa fa-lock"></i> &nbsp; Login</a> 
            <a class="btn btn-futuristic alt flex-fill" href="/user-join.php"><i class="fa fa-address-card"></i> &nbsp; Join</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
