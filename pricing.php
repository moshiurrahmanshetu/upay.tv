<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pricing</title>
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

<style>

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
      color: var(--text-dark);
    }

    header {
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
      color: var(--white);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar-brand img {
      height: 40px;
    }

    .pricing-header {
      text-align: center;
      padding: 4rem 1rem 2rem;
    }

    .pricing-header h1 {
      font-weight: 700;
    }

    .toggle-switch {
      text-align: center;
      margin-bottom: 2rem;
    }

    .toggle-switch label {
      font-weight: 500;
      color: var(--text-dark);
      margin: 0 0.5rem;
    }

    .plan-card {
      background-color: var(--white);
      border: none;
      border-radius: var(--border-radius);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    .plan-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    .plan-header {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: var(--white);
      padding: 2rem;
      border-top-left-radius: var(--border-radius);
      border-top-right-radius: var(--border-radius);
      text-align: center;
    }

    .plan-header h3 {
      font-weight: 600;
    }

    .plan-price {
      font-size: 2.2rem;
      font-weight: 700;
      margin: 1rem 0;
    }

    .plan-body {
      padding: 2rem;
      text-align: center;
    }

    .plan-body ul {
      list-style: none;
      padding: 0;
      margin: 1rem 0;
    }

    .plan-body ul li {
      padding: 0.5rem 0;
      color: var(--text-light);
    }

    .plan-body ul li i {
      color: var(--primary-color);
      margin-right: 0.5rem;
    }

    .plan-body .btn {
      margin-top: 1rem;
      padding: 0.75rem 2rem;
      font-weight: 500;
      border-radius: 50px;
    }

    .table-section {
      background-color: var(--white);
      border-radius: var(--border-radius);
      padding: 2rem;
      margin: 3rem auto;
      max-width: 900px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
    }

    .table-section table {
      width: 100%;
    }

    .table-section th {
      text-align: center;
      background: var(--primary-color);
      color: var(--white);
      padding: 1rem;
    }

    .table-section td {
      text-align: center;
      padding: 0.8rem;
      color: var(--text-dark);
    }

    
  </style>
</head>
<body>

  <!-- Header -->
  <header class="py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="/index.php" class="navbar-brand d-flex align-items-center gap-2 text-white text-decoration-none">
        <img src="../assets/logo.png" alt="uPay Logo">
        <strong>uPay Ad Network</strong>
      </a>
      <div>
        <a href="/user-login.php" class="btn btn-outline-light btn-sm me-2"><i class="fa fa-lock"></i> Login</a>
        <a href="/user-join.php" class="btn btn-light btn-sm text-primary"><i class="fa fa-user-plus"></i> Join</a>
      </div>
    </div>
  </header>

  <!-- Pricing Section -->
  <section class="pricing-header">
    <h1>Flexible Pricing Plans</h1>
    <p class="text-muted">Choose the plan that fits your ad goals and start growing today!</p>
  </section>

  <!-- Toggle -->
  <div class="toggle-switch">
    <label>Monthly</label>
    <input type="checkbox" id="billingToggle" class="form-check-input">
    <label>Yearly <small class="text-success">(Save 20%)</small></label>
  </div>

  <!-- Plans -->
  <div class="container">
    <div class="row g-4 justify-content-center">
      <!-- Basic -->
      <div class="col-md-4">
        <div class="plan-card">
          <div class="plan-header">
            <h3>Basic</h3>
            <div class="plan-price" data-monthly="$9" data-yearly="$80">$9</div>
            <p>/ month</p>
          </div>
          <div class="plan-body">
            <ul>
              <li><i class="fa fa-check"></i> Up to 5 Campaigns</li>
              <li><i class="fa fa-check"></i> Basic Analytics</li>
              <li><i class="fa fa-check"></i> Email Support</li>
            </ul>
            <a href="#" class="btn btn-outline-primary">Get Started</a>
          </div>
        </div>
      </div>

      <!-- Standard -->
      <div class="col-md-4">
        <div class="plan-card">
          <div class="plan-header">
            <h3>Standard</h3>
            <div class="plan-price" data-monthly="$19" data-yearly="$170">$19</div>
            <p>/ month</p>
          </div>
          <div class="plan-body">
            <ul>
              <li><i class="fa fa-check"></i> Up to 20 Campaigns</li>
              <li><i class="fa fa-check"></i> Advanced Analytics</li>
              <li><i class="fa fa-check"></i> Priority Support</li>
            </ul>
            <a href="#" class="btn btn-primary">Choose Plan</a>
          </div>
        </div>
      </div>

      <!-- Premium -->
      <div class="col-md-4">
        <div class="plan-card">
          <div class="plan-header">
            <h3>Premium</h3>
            <div class="plan-price" data-monthly="$29" data-yearly="$250">$29</div>
            <p>/ month</p>
          </div>
          <div class="plan-body">
            <ul>
              <li><i class="fa fa-check"></i> Unlimited Campaigns</li>
              <li><i class="fa fa-check"></i> Deep Insights</li>
              <li><i class="fa fa-check"></i> Dedicated Manager</li>
            </ul>
            <a href="#" class="btn btn-success">Go Premium</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Comparison Table -->
  <div class="table-section">
    <h4 class="text-center mb-4">Compare All Features</h4>
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Features</th>
          <th>Basic</th>
          <th>Standard</th>
          <th>Premium</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Campaign Limit</td><td>5</td><td>20</td><td>Unlimited</td></tr>
        <tr><td>Analytics</td><td>Basic</td><td>Advanced</td><td>Full Insights</td></tr>
        <tr><td>Support</td><td>Email</td><td>Priority</td><td>Dedicated Manager</td></tr>
        <tr><td>Ad Review Time</td><td>48h</td><td>24h</td><td>Instant</td></tr>
        <tr><td>Referral Bonus</td><td>2%</td><td>4%</td><td>6%</td></tr>
      </tbody>
    </table>
  </div>


 <?php include __DIR__.'/includes/footer.php'; ?>

  <script>
    const toggle = document.getElementById('billingToggle');
    const prices = document.querySelectorAll('.plan-price');

    toggle.addEventListener('change', () => {
      prices.forEach(price => {
        if (toggle.checked) {
          price.textContent = price.dataset.yearly;
        } else {
          price.textContent = price.dataset.monthly;
        }
      });
    });
  </script>


</body>
</html>