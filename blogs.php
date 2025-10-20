<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blogs</title>
	<meta name="description" content="Learn more about uPAY.tv and our mission.">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<?php include __DIR__.'/includes/header.php'; ?>

<section class="page-header">
    <h1 class="fw-bold">Our Blog</h1>
    <p class="lead mb-0">Insights, updates, and stories from the uPay Ad Network team</p>
  </section>

  <div class="container py-5">
    <div class="row g-4">

      <!-- Blog Post 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-1.jpg')"></div>
          <div class="blog-content">
            <div class="blog-category">Monetization</div>
            <h3 class="blog-title"><a href="#">How to Maximize Ad Revenue Without Hurting UX</a></h3>
            <p class="text-muted">Discover proven strategies to increase your earnings while maintaining a pleasant user experience...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Oct 16, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-2.jpg');"></div>
          <div class="blog-content">
            <div class="blog-category">Technology</div>
            <h3 class="blog-title"><a href="#">Behind the Scenes: Our Bot Detection Technology</a></h3>
            <p class="text-muted">Learn how uPay detects and filters fraudulent traffic using AI-powered algorithms...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Oct 10, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-3.jpg');"></div>
          <div class="blog-content">
            <div class="blog-category">Business</div>
            <h3 class="blog-title"><a href="#">Publisher Success Stories: Real Growth with uPay</a></h3>
            <p class="text-muted">Meet some of our top publishers and see how they achieved consistent income through ethical growth...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Oct 01, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Post 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-4.jpg');"></div>
          <div class="blog-content">
            <div class="blog-category">Tips</div>
            <h3 class="blog-title"><a href="#">10 Proven Tips to Increase Ad Click Rate</a></h3>
            <p class="text-muted">Boost your CTR and earn more with our tried-and-tested advertising optimization tips...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Sep 22, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Post 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-5.jpg');"></div>
          <div class="blog-content">
            <div class="blog-category">News</div>
            <h3 class="blog-title"><a href="#">uPay Launches New Real-Time Analytics Dashboard</a></h3>
            <p class="text-muted">We’ve released an updated analytics system to help you track your performance more efficiently...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Sep 14, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog Post 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-img" style="background-image: url('../assets/blog-6.jpg');"></div>
          <div class="blog-content">
            <div class="blog-category">Security</div>
            <h3 class="blog-title"><a href="#">How We Protect Your Earnings from Fraud</a></h3>
            <p class="text-muted">A deep dive into uPay’s multi-layered fraud detection and prevention systems...</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="blog-meta"><i class="fa-regular fa-calendar me-1"></i> Sep 10, 2025</span>
              <a href="#" class="btn-read">Read More</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <nav class="mt-5 d-flex justify-content-center">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
      </ul>
    </nav>
  </div>
<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>
<style>
    :root {
      --gradient: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
      --text-dark: #222;
      --text-muted: #666;
      --bg-light: #f9fbfd;
    }

   a{
    text-decoration: none;
   }
    .page-header {
      background: var(--gradient);
      color: #fff;
      padding: 80px 0 60px;
      text-align: center;
      border-radius: 0 0 50px 50px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      animation: fadeDown 0.8s ease;
    }

    @keyframes fadeDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .blog-card {
      border: none;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      background: #fff;
      height: 100%;
    }

    .blog-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .blog-img {
      height: 220px;
      background-size: cover;
      background-position: center;
    }

    .blog-content {
      padding: 25px;
    }

    .blog-category {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--brand-secondary);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 8px;
    }

    .blog-title {
      font-weight: 700;
      font-size: 1.25rem;
      margin-bottom: 10px;
    }

    .blog-title a {
      text-decoration: none;
      color: var(--text-dark);
      transition: color 0.3s;
    }

    .blog-title a:hover {
      color: var(--brand-secondary);
    }

    .blog-meta {
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    .btn-read {
      background: var(--gradient);
      color: #fff;
      border-radius: 25px;
      padding: 8px 18px;
      font-size: 0.9rem;
      border: none;
      transition: 0.3s;
    }

    .btn-read:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .pagination .page-link {
      border: none;
      color: var(--brand-secondary);
      font-weight: 500;
      background: #8debfcff
    }

    .pagination .page-item.active .page-link {
      background: var(--gradient);
      color: #fff;
      border-radius: 30px;
    }
    .pagination .page-item{
      margin: 0 8px;
    }
  </style>