<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Ads</title>
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
    <h1 class="fw-bold">My Ads</h1>
    <p class="lead mb-0">Manage all your active and completed ad campaigns easily</p>
  </section>
 
  <section class="my-ads-section">
  <div class="container">
    <!-- Filters -->
    <div class="filters-bar">
      <div class="filters-left">
        <select class="filter-select">
          <option>All Status</option>
          <option>Active</option>
          <option>Paused</option>
          <option>Completed</option>
        </select>
        <select class="filter-select">
          <option>Sort by</option>
          <option>Most Clicks</option>
          <option>Highest Spend</option>
          <option>Newest</option>
        </select>
      </div>
      <button class="btn-new-ad">+ New Ad</button>
    </div>

      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="ad-card active">
            <span class="badge status">Active</span>
            <img src="assets/blog-6.jpg" class="ad-banner" alt="Ad Banner">
            <h5>Tech Gadget Promotion</h5>
            <p class="meta">🌍 Global • Banner Ad</p>

            <div class="stats">
              <div><strong>12.4K</strong><span>Clicks</span></div>
              <div><strong>1.8M</strong><span>Impressions</span></div>
              <div><strong>$230</strong><span>Spent</span></div>
            </div>

            <div class="ad-actions">
              <button class="btn btn-outline-primary btn-action">Edit</button>
              <button class="btn btn-outline-danger btn-action">Delete</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="ad-card paused">
            <span class="badge status">Paused</span>
            <img src="assets/blog-5.jpg" class="ad-banner" alt="Ad Banner">
            <h5>Holiday Travel Deals</h5>
            <p class="meta">🇺🇸 USA • Affiliate Ad</p>

            <div class="stats">
              <div><strong>4.9K</strong><span>Clicks</span></div>
              <div><strong>700K</strong><span>Impressions</span></div>
              <div><strong>$90</strong><span>Spent</span></div>
            </div>

            <div class="ad-actions">
              <button class="btn btn-outline-primary btn-action">Edit</button>
              <button class="btn btn-outline-danger btn-action">Delete</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="ad-card completed">
            <span class="badge status">Completed</span>
            <img src="assets/blog-4.jpg" class="ad-banner" alt="Ad Banner">
            <h5>E-commerce Mega Sale</h5>
            <p class="meta">🌏 Asia • QR Campaign</p>

            <div class="stats">
              <div><strong>18.3K</strong><span>Clicks</span></div>
              <div><strong>2.1M</strong><span>Impressions</span></div>
              <div><strong>$350</strong><span>Spent</span></div>
            </div>

            <div class="ad-actions">
              <button class="btn btn-outline-primary btn-action">Edit</button>
              <button class="btn btn-outline-danger btn-action">Delete</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="ad-card completed">
            <span class="badge status">Completed</span>
            <img src="assets/blog-4.jpg" class="ad-banner" alt="Ad Banner">
            <h5>E-commerce Mega Sale</h5>
            <p class="meta">🌏 Asia • QR Campaign</p>

            <div class="stats">
              <div><strong>18.3K</strong><span>Clicks</span></div>
              <div><strong>2.1M</strong><span>Impressions</span></div>
              <div><strong>$350</strong><span>Spent</span></div>
            </div>

            <div class="ad-actions">
              <button class="btn btn-outline-primary btn-action">Edit</button>
              <button class="btn btn-outline-danger btn-action">Delete</button>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</section>


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
    .site-header{
		background:var(--grad-primary);
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
 
    .my-ads-section {
    background: #f9fafc;
    padding: 60px 0;
    font-family: 'Inter', sans-serif;
    position: relative;
    z-index: 2;
}
.filters-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 40px;
}
.filters-left {
    display: flex;
    gap: 15px;
}
.filter-select {
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid #ddd;
    background: #fff;
    transition: 0.3s;
}
.btn-new-ad {
  background: linear-gradient(90deg, #007bff, #00b4d8);
  border: none;
  color: #fff;
  font-weight: 600;
  border-radius: 8px;
  padding: 10px 18px;
  transition: 0.3s;
}
.btn-new-ad:hover {
  background: linear-gradient(90deg, #0056b3, #0084a8);
}
.ad-card {
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  padding: 15px;
  position: relative;
  transition: 0.3s ease;
  height: 100%;
  border: 1px solid #acacacff;
  box-shadow: rgba(50, 50, 93, 0.21) 0px 13px 27px -5px, rgba(0, 0, 0, 0.23) 0px 8px 16px -8px;
}
.ad-card:hover {
  transform: translateY(-5px);
}
.ad-banner {
  width: 100%;
  height: auto;
  border-radius: 10px;
  margin-bottom: 12px;
}
.badge.status {
  position: absolute;
  top: 12px;
  right: 12px;
  padding: 6px 10px;
  border-radius: 8px;
  font-size: 12px;
  font-weight: 600;
}
.ad-card.active .badge.status {
  background-color: #d1f7d1;
  color: #28a745;
}
.ad-card.paused .badge.status {
  background-color: #fff4cd;
  color: #ffc107;
}
.ad-card.completed .badge.status {
  background-color: #f8d7da;
  color: #dc3545;
}
.meta {
  color: #6c757d;
  font-size: 14px;
}
.stats {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 15px;
  font-size: 14px;
}
.stats div {
  text-align: center;
}
.stats strong {
  display: block;
  font-size: 16px;
  color: #212529;
}
.ad-actions {
  border-top: 1px solid #eee;
  margin-top: 15px;
  padding-top: 10px;
  display: flex;
  justify-content: space-between;
}
.btn-action {
  font-size: 13px;
  border-radius: 6px;
  padding: 5px 10px;
}
@media (max-width: 768px) {
  .filters {
    flex-direction: column;
    gap: 10px !important;
  }
  .btn-new-ad {
    width: 100%;
    margin-top: 20px;
  }
}


</style>
