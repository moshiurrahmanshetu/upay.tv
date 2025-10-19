<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upay.Tv</title>
  <meta name="description" content="Learn more about uPAY.tv and our mission.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

  <?php include __DIR__ . '/includes/header.php'; ?>


  <section class="hero text-center">
    <!-- Floating background icons -->
    <i class="fa fa-globe floating-icon icon-1"></i>
    <i class="fa fa-bolt floating-icon icon-2"></i>
    <i class="fa fa-qrcode floating-icon icon-3"></i>

    <div class="container hero-content">
      <h1>Earn More by Shortening Your Links</h1>
      <p>Smart link shortener & QR code generator to boost your marketing reach.</p>

      <!-- Hero Card -->
      <div class="hero-card mx-auto col-lg-8 col-md-10 col-12">
        <ul class="nav nav-tabs mb-4" id="heroTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="shorten-tab" data-bs-toggle="tab" data-bs-target="#shorten" type="button" role="tab">
              <i class="fa fa-link me-1"></i> Shorten URL
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="qr-tab" data-bs-toggle="tab" data-bs-target="#qr" type="button" role="tab">
              <i class="fa fa-qrcode me-1"></i> Generate QR
            </button>
          </li>
        </ul>

        <div class="tab-content" id="heroTabsContent">
          <!-- Shorten URL Tab -->
          <div class="tab-pane fade show active" id="shorten" role="tabpanel">
            <div class="input-group">
              <input type="url" class="form-control" placeholder="Enter your long URL here...">
              <button class="btn btn-hero"><i class="fa fa-magic me-1"></i> Shorten</button>
            </div>
          </div>

          <!-- QR Code Tab -->
          <div class="tab-pane fade" id="qr" role="tabpanel">
            <div class="input-group">
              <input type="url" class="form-control" placeholder="Enter link to generate QR code...">
              <button class="btn btn-hero"><i class="fa fa-qrcode me-1"></i> Generate</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container my-4">
    <div class="p-4 p-md-5 hero">
      <div class="row align-items-center g-4">
        <div class="col-md-7">
          <span class="badge-soft">Premium Link Shortener</span>
          <h1 class="fw-bold mb-3 mt-2">Earn more from every click</h1>
          <p class="opacity-75 mb-4">Shorten. Share. Monetize. With smart ads, CPA boost, and fraud control, uPAY.tv helps you maximize earnings while advertisers get real results.</p>
          <div class="d-flex gap-2">
            <a href="/user-join.php" class="btn btn-light text-dark px-4">Start Earning</a>
            <a href="#" class="btn btn-outline-light px-4" data-create-ad>Create Ad</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="bg-white text-dark rounded-xl shadow-soft p-4">
            <h5 class="mb-3">How it works</h5>
            <div class="d-flex gap-3 align-items-start mb-2">
              <div class="icon-chip icon-indigo"><i class="fa fa-compress"></i></div>
              <div><strong>01. Squeeze</strong>
                <div class="small text-muted">Shorten viral/movie/music links</div>
              </div>
            </div>
            <div class="d-flex gap-3 align-items-start mb-2">
              <div class="icon-chip icon-teal"><i class="fa fa-share"></i></div>
              <div><strong>02. Share</strong>
                <div class="small text-muted">Post in relevant groups & pages</div>
              </div>
            </div>
            <div class="d-flex gap-3 align-items-start">
              <div class="icon-chip icon-pink"><i class="fa fa-dollar-sign"></i></div>
              <div><strong>03. Earn</strong>
                <div class="small text-muted">Get paid for views, clicks, conversions</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 p-4" style="background:linear-gradient(135deg, #fff, #f3f0ff);">
            <div class="icon-chip icon-indigo mb-3"><i class="fa fa-bolt"></i></div>
            <h5>Higher Earnings</h5>
            <p class="text-muted">We blend impression, click, and conversion ads to optimize your revenue across geos and devices.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-4" style="background:linear-gradient(135deg, #fff, #eefcfb);">
            <div class="icon-chip icon-teal mb-3"><i class="fa fa-shield-heart"></i></div>
            <h5>Fraud Control</h5>
            <p class="text-muted">Advanced bot filtering protects advertisers and keeps your account safe and profitable.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-4" style="background:linear-gradient(135deg, #fff, #fff0f7);">
            <div class="icon-chip icon-pink mb-3"><i class="fa fa-chart-line"></i></div>
            <h5>CPA Boost</h5>
            <p class="text-muted">Integrated CPA offers deliver 5x more income potential than text‑only ads.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-primary">
    <div class="container">
      <div class="row g-3 text-center">
        <div class="col-6 col-md-3">
          <div class="stat-tile">
            <div class="h3 mb-0">+120M</div>
            <div class="small opacity-75">Clicks tracked</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-tile">
            <div class="h3 mb-0">98.9%</div>
            <div class="small opacity-75">Uptime</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-tile">
            <div class="h3 mb-0">200+</div>
            <div class="small opacity-75">Countries</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-tile">
            <div class="h3 mb-0">1.5k+</div>
            <div class="small opacity-75">Advertisers</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-accent">
    <div class="container text-center">
      <h3 class="mb-2">Ready to grow your earnings?</h3>
      <p class="opacity-75 mb-3">Join thousands of publishers and advertisers using uPAY.tv today.</p>
      <a href="/user-join.php" class="btn btn-light text-dark">Create Free Account</a>
    </div>
  </section>

  <section id="earn-money">
    <div class="container">
      <h2 class="section-title">Earn Money by Shortening your links</h2>
      <div class="row g-4 text-center">
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fa fa-link"></i>
            <h5>01. Squeeze Link</h5>
            <p>Shorten a popular link, viral link, or music link. Anything people want to watch or check out!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fa fa-share-alt"></i>
            <h5>02. Share</h5>
            <p>Share with social media audiences — people who love content in groups, pages, and videos.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fa fa-dollar-sign"></i>
            <h5>03. Earn Money</h5>
            <p>Get paid for every user visit — view, click, or conversion. Simple and transparent.</p>
          </div>
        </div>
      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-chart-line"></i>
          <h5>Earn Maximum</h5>
          <p>We show ads that pay best — impression, click, and conversion ads for higher income.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-shield-halved"></i>
          <h5>Fraud Control</h5>
          <p>We block fraudulent activity and ensure a fair system — you earn while keeping advertisers safe.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-coins"></i>
          <h5>Integrated CPA</h5>
          <p>Earn 20-40% commission with CPA ads. This means 5x more income than basic ad clicks.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-bullseye"></i>
          <h5>CTA Button</h5>
          <p>Click-to-Action buttons increase genuine engagement — advertisers are happier, and so are you.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-chart-pie"></i>
          <h5>High ROI</h5>
          <p>Our platform drives premium traffic sources that boost conversions and advertiser success.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card">
          <i class="fa fa-award"></i>
          <h5>Experience Matters</h5>
          <p>With 10+ years in ad tech, we’ve built a system that benefits both publishers and advertisers.</p>
        </div>
      </div>
      </div>
    </div>
  </section>

  <style>
    section {
      padding: 80px 0;
    }

    h2.section-title {
      text-align: center;
      font-weight: 600;
      margin-bottom: 60px;
      color: #0e7dc1;
    }

    /* ==== Feature Card ==== */
    .feature-card {
      background: #cfe6fd;
      border-radius: 10px;
      padding: 28px 25px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      opacity: 0;
      transform: translateY(40px);
      min-height: 240px;
    }

    .feature-card:hover {
      transform: translateY(-8px);
      background: var(--card-hover);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .feature-card i {
      font-size: 40px;
      color: #0e7dc1;
      margin-bottom: 20px;
      transition: 0.3s;
    }

    .feature-card:hover i {
      transform: scale(1.1);
    }

    .feature-card h5 {
      font-weight: 600;
      margin-bottom: 15px;
      color: #0e7dc1;
    }

    .feature-card p {
      color: #555;
      font-size: 15px;
    }

    .cta-box {
      background: var(--card-hover);
      border-radius: 20px;
      padding: 40px;
      text-align: center;
      margin: 60px 0;
      opacity: 0;
      transform: translateY(40px);
    }

    .cta-box h6 {
      font-weight: 500;
      color: #444;
    }

    .btn-custom {
      border-radius: 30px;
      padding: 10px 25px;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn-primary {
      background-color: var(--primary-color);
      border: none;
    }

    .btn-primary:hover {
      background-color: #5b2cb0;
    }

    .btn-outline-primary {
      border-color: var(--primary-color);
      color: var(--primary-color);
    }

    .btn-outline-primary:hover {
      background-color: var(--primary-color);
      color: #fff;
    }

    /* ==== Scroll Animation ==== */
    .animate {
      opacity: 1 !important;
      transform: translateY(0) !important;
      transition: all 0.8s ease;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .feature-card {
        padding: 30px 20px;
      }
    }


    /* ===== Hero Section ===== */
    .hero {
      position: relative;
      background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
      color: #fff;
      padding: 100px 0 120px;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      bottom: -80px;
      left: 0;
      width: 100%;
      height: 120px;
      background: #fff;
      clip-path: ellipse(70% 100% at 50% 100%);
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .hero p {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-top: 10px;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    /* ===== Hero Card ===== */
    .hero-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: 50px;
      animation: floatUp 1.2s ease;
    }

    @keyframes floatUp {
      from {opacity: 0; transform: translateY(40px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* ===== Tabs ===== */
    .nav-tabs {
      border: none;
      justify-content: center;
      gap: 18px;
    }

    .nav-tabs .nav-link {
      border: 1px solid var(--primary-color);
      color: var(--primary-color);
      font-weight: 500;
      padding: 10px 25px;
      transition: all 0.3s ease;
      border-radius: 50px;
    }

    .nav-tabs .nav-link:hover, .nav-tabs .nav-link.active {
      background-color: var(--primary-color);
      color: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    /* ===== Form ===== */
    .input-group {
      border-radius: 50px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .form-control {
      border: none;
      padding: 14px 20px;
      font-size: 1rem;
    }

    .btn-hero {
      background: var(--primary-color);
      color: #fff;
      font-weight: 600;
      border: none;
      padding: 0 25px;
      transition: 0.3s;
    }

    .btn-hero:hover {
      background: var(--accent-color);
    }

    /* ===== Floating Icons ===== */
    .floating-icon {
      position: absolute;
      animation: float 6s ease-in-out infinite;
      opacity: 0.15;
      color: #fff;
      font-size: 60px;
    }

    .icon-1 { top: 20%; left: 10%; animation-delay: 0s; }
    .icon-2 { top: 60%; right: 15%; animation-delay: 2s; }
    .icon-3 { bottom: 10%; left: 30%; animation-delay: 4s; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }

    @media screen and (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }
      .hero-card {
        padding: 20px;
      }
    }
    :root {
      --primary-color: #1857e0ff;
      --accent-color: #9b6cff;
      --bg-light: #f8f5ff;
      --text-dark: #2b2b2b;
    }
  </style>

  <?php include __DIR__ . '/includes/footer.php'; ?>


  <script>
    // ===== Smooth Scroll Animation =====
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('animate');
      });
    });

    document.querySelectorAll('.feature-card, .cta-box').forEach(el => observer.observe(el));
  </script>
</body>

</html>