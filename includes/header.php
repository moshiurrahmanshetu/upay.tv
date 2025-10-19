<header class="site-header">
  <header class="site-header border-bottom bg-white">
    <div class="container py-2 d-flex align-items-center justify-content-between"> <a href="/index.php" class="d-inline-flex align-items-center gap-2 text-decoration-none"> <img src="../assets/logo.png" alt="uPay Ad network" height="40"> </a>
      <div class="headlink d-none d-md-flex gap-3"> <a href="/user-login.php"><i class="fa fa-lock"></i> Login</a> <a href="/user-join.php"><i class="fa fa-address-card"></i> Join Now</a> </div> <button class="btn btn-light d-md-none" id="mobileMenuToggle" aria-label="Toggle menu"> <i class="fa fa-bars"></i> </button>
    </div>
    <nav class="main-nav">
      <div class="container">
        <ul class="nav list-unstyled d-flex flex-wrap align-items-center gap-2 py-2 justify-content-center" id="primaryNav">
          <li>
            <div class="btn-group"> <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bullhorn"></i> Advertise</button>
              <ul class="dropdown-menu shadow-sm">
                <li>
                  <h6 class="dropdown-header">-- Campaign --</h6>
                </li>
                <li><a class="dropdown-item" href="/user-login81be.php"><i class="fa fa-plus"></i> Create New Campaign</a></li>
                <li><a class="dropdown-item" href="/user-login81be.php"><i class="fa fa-list"></i> My Ads</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Credit --</h6>
                </li>
                <li><a class="dropdown-item" href="/buy-credit.php"><i class="fa fa-bitcoin"></i> Buy Credit</a></li>
                <li><a class="dropdown-item" href="/user-login81be.php"><i class="fa fa-clock"></i> Credit History</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">-- Help --</h6>
                </li>
                <li><a class="dropdown-item" href="/faq-en-adv.php"><i class="fa fa-life-ring"></i> FAQ</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-book"></i> Tips: Get Maximum</a></li>
                <li><a class="dropdown-item" href="/contact.php"><i class="fa fa-envelope"></i> Contact Admin</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="btn-group"> <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-money-bill"></i> Earn</button>
              <ul class="dropdown-menu shadow-sm">
                <li>
                  <h6 class="dropdown-header">-- Earn --</h6>
                </li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-plus"></i> Shorten New Link</a></li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-link"></i> My Links</a></li>
                <li><a class="dropdown-item" href="/dashboard.php"><i class="fa fa-handshake"></i> Refer Friend</a></li>
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
          <li class="d-none d-md-inline">
            <a class="btn" href="/pricing.php">
              <i class="fa fa-dollar-sign"></i> Price</a>
          </li>
          <li class="d-none d-md-inline">
            <a class="btn" href="/bot-control.php">
              <i class="fa fa-bug"></i> Bot Control</a>
          </li>
          <li class="d-none d-md-inline">
            <a class="btn" href="/refer.php">
              <i class="fa fa-handshake"></i> Refer</a>
          </li>
          <li class="ms-auto d-md-none" id="moreWrapper">
            <button class="btn btn-outline-secondary" id="moreToggle">More</button>
          </li>
        </ul>
        <ul class="nav list-unstyled flex-column gap-2" id="moreMenu">
          <li><a class="btn btn-light w-100" href="/pricing.php"><i class="fa fa-dollar-sign"></i> Price</a></li>
          <li><a class="btn btn-light w-100" href="/bot-control.php"><i class="fa fa-bug"></i> Bot Control</a></li>
          <li><a class="btn btn-light w-100" href="/refer.php"><i class="fa fa-handshake"></i> Refer</a></li>
          <li class="d-flex gap-2"> <a class="btn btn-primary flex-fill" href="/user-login.php">Login</a> <a class="btn btn-success flex-fill" href="/user-join.php">Join</a> </li>
        </ul>
      </div>
    </nav>
  </header>


  <style>
    :root {
      --primary-1: #4f46e5;
      --primary-2: #06b6d4;
      --accent: #7dd3fc;
      --white: #fff;
      --muted: #6b7280;
    }
    .site-header {
      position: sticky;
      top: 0;
      z-index: 1100;
    }
    .top-bar {
      background: linear-gradient(90deg, var(--primary-1), var(--primary-2));
      color: var(--white);
      padding: .5rem 0;
      box-shadow: 0 2px 10px rgba(15, 23, 42, 0.06);
    }
    .top-bar .brand {
      display: flex;
      align-items: center;
      gap: .5rem;
      color: var(--white);
      text-decoration: none;
    }
    .top-bar .brand img {
      height: 40px;
    }
    .top-bar a.top-action {
      color: var(--white);
      font-weight: 600;
      text-decoration: none;
    }
    .top-bar a.top-action:hover {
      color: var(--accent);
    }
    .main-nav{
      background: #b4d5f7ff;
      box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
    }
    .second-nav {
      background: #fff;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    .second-nav .navbar {
      padding-top: .25rem;
      padding-bottom: .25rem;
    }
    .second-nav .nav-link {
      color: #111827;
      font-weight: 500;
      padding: .5rem 0.75rem;
      transition: all .18s ease;
    }
    .second-nav .nav-link:hover {
      color: var(--primary-1);
      background: rgba(79, 70, 229, 0.06);
      border-radius: 6px;
    }
    .dropdown-menu {
      border-radius: 8px;
      border: none;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
      transition: all 0.3s ease;
    }
    .dropdown-header {
      font-size: .85rem;
      color: var(--muted);
    }
    .dropdown-item i {
      width: 18px;
    }
    .nav-center {
      display: flex;
      justify-content: center;
      width: 100%;
    }
    #moreMenu {
      display: none;
      background: #fff;
      border-top: 1px solid rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    }
    #moreMenu a {
      display: block;
      padding: .6rem 1rem;
      color: #111827;
      text-decoration: none;
    }

    #moreMenu a:hover {
      background: var(--primary-1);
      color: #fff;
    }

    /* small tweaks */
    .btn-ghost {
      background: transparent;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }
  </style>