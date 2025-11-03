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

</head>
<body>

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

  <div class="container">
    <div class="row g-4 justify-content-center">
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

  <h2 class="text-center mt-5">Table version 1</h2>

  <div class="table-section">
    <h4 class="text-center mb-4">Compare All Features</h4>
    <div class="table-responsive">
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
  </div>

<h2 class="text-center mt-4">Table version 2</h2>

<section class="pricing-header">
  <h1>Choose Your Plan</h1>
  <p>Flexible plans built for every advertiser and publisher</p>

  <div class="toggle-buttons">
    <button id="monthlyBtn" class="active">Monthly</button>
    <button id="yearlyBtn">Yearly</button>
  </div>
</section>

<!-- Pricing Cards -->
<div class="container pb-5">
  <div class="row g-4 justify-content-center">
    <div class="col-md-4">
      <div class="card pricing-card">
        <div class="card-header">Basic</div>
        <div class="card-body text-center">
          <div class="price" id="basicPrice">$9<span class="text-muted fs-6">/mo</span></div>
          <p class="text-muted">Perfect for beginners</p>
          <ul class="list-unstyled text-start small">
            <li><i class="fa fa-check text-success"></i> Up to 100 shortened links</li>
            <li><i class="fa fa-times text-danger"></i> Advanced analytics</li>
            <li><i class="fa fa-check text-success"></i> Basic support</li>
          </ul>
          <a href="#" class="btn btn-primary w-100 mt-3">Get Started</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card pricing-card">
        <div class="card-header bg-primary text-white">Standard</div>
        <div class="card-body text-center">
          <div class="price" id="standardPrice">$29<span class="text-muted fs-6">/mo</span></div>
          <p class="text-muted">Best for growing businesses</p>
          <ul class="list-unstyled text-start small">
            <li><i class="fa fa-check text-success"></i> 10,000 shortened links</li>
            <li><i class="fa fa-check text-success"></i> Click analytics</li>
            <li><i class="fa fa-check text-success"></i> Priority support</li>
          </ul>
          <a href="#" class="btn btn-primary w-100 mt-3">Get Started</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card pricing-card">
        <div class="card-header">Premium</div>
        <div class="card-body text-center">
          <div class="price" id="premiumPrice">$59<span class="text-muted fs-6">/mo</span></div>
          <p class="text-muted">For large-scale advertisers</p>
          <ul class="list-unstyled text-start small">
            <li><i class="fa fa-check text-success"></i> Unlimited links</li>
            <li><i class="fa fa-check text-success"></i> Advanced reports</li>
            <li><i class="fa fa-check text-success"></i> 24/7 support</li>
          </ul>
          <a href="#" class="btn btn-primary w-100 mt-3">Get Started</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Comparison Table -->
  <div class="table-responsive mt-5">
    <table class="table table-bordered feature-table align-middle">
      <thead>
        <tr>
          <th>Features</th>
          <th>Basic</th>
          <th>Standard</th>
          <th>Premium</th>
        </tr>
      </thead>
      <tbody>
        <tr class="category-row">
          <td colspan="4">Monthly Volumes</td>
        </tr>
        <tr>
          <td>Links with Unlimited Trackable Clicks</td>
          <td><i class="fa fa-times"></i></td>
          <td>500</td>
          <td>Custom</td>
        </tr>
        <tr>
          <td>Click Analytics</td>
          <td><i class="fa fa-times"></i></td>
          <td>10,000</td>
          <td>Custom</td>
        </tr>
        <tr>
          <td>Branded Links</td>
          <td>30</td>
          <td>10,000</td>
          <td>Unlimited</td>
        </tr>

        <tr class="category-row">
          <td colspan="4">Link Management</td>
        </tr>
        <tr>
          <td>Customize URL Aliases</td>
          <td><i class="fa fa-check"></i></td>
          <td><i class="fa fa-check"></i></td>
          <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
          <td>Tag Links</td>
          <td><i class="fa fa-times"></i></td>
          <td><i class="fa fa-check"></i></td>
          <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
          <td>Delete Links</td>
          <td><i class="fa fa-times"></i></td>
          <td><i class="fa fa-check"></i></td>
          <td><i class="fa fa-check"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
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

<script>
  const monthlyBtn = document.getElementById("monthlyBtn");
  const yearlyBtn = document.getElementById("yearlyBtn");

  monthlyBtn.addEventListener("click", () => {
    monthlyBtn.classList.add("active");
    yearlyBtn.classList.remove("active");
    document.getElementById("basicPrice").innerHTML = "$9<span class='text-muted fs-6'>/mo</span>";
    document.getElementById("standardPrice").innerHTML = "$29<span class='text-muted fs-6'>/mo</span>";
    document.getElementById("premiumPrice").innerHTML = "$59<span class='text-muted fs-6'>/mo</span>";
  });

  yearlyBtn.addEventListener("click", () => {
    yearlyBtn.classList.add("active");
    monthlyBtn.classList.remove("active");
    document.getElementById("basicPrice").innerHTML = "$90<span class='text-muted fs-6'>/yr</span>";
    document.getElementById("standardPrice").innerHTML = "$290<span class='text-muted fs-6'>/yr</span>";
    document.getElementById("premiumPrice").innerHTML = "$590<span class='text-muted fs-6'>/yr</span>";
  });
</script>
</body>
</html>


<style>

  body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--light-bg);
    color: var(--text-dark);
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
  .form-check-input[type=checkbox] {
    border: 1px solid #426af3;
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
    background: linear-gradient(135deg, var(--primary-color), #fa36bfff);
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

/* version 2 css  */

.feature-table th {
  background: #e9f5ff;
  font-weight: 600;
  color: #0d6efd;
}
.feature-table td, .feature-table th {
  text-align: center;
  vertical-align: middle;
  padding: 12px;
}
.feature-table .category-row {
  background: #dff0ff;
  font-weight: 600;
  text-align: left;
}
.fa-check {
  color: #28a745;
}
.fa-times {
  color: #dc3545;
}
.pricing-header {
  text-align: center;
  padding: 80px 20px 50px;
}
.pricing-header h1 {
  font-weight: 700;
  color: #0d6efd;
}
.pricing-header p {
  color: #6c757d;
  font-size: 18px;
}
.toggle-buttons {
  display: flex;
  justify-content: center;
  margin: 30px 0;
}
.toggle-buttons button {
  border: none;
  background: #e9f2ff;
  color: #0d6efd;
  padding: 8px 25px;
  border-radius: 50px;
  margin: 0 5px;
  transition: all 0.3s ease;
}
.toggle-buttons button.active {
  background: #0d6efd;
  color: #fff;
}
.pricing-card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}
.pricing-card:hover {
  transform: translateY(-6px);
}
.pricing-card .card-header {
  background: linear-gradient(135deg, var(--primary-color), #fa36bfff);
  color: #fff;
  text-align: center;
  font-weight: 600;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}
.price {
  font-size: 36px;
  font-weight: 700;
  color: #0d6efd;
}
@media screen and (max-width: 600px) {
  .table-section{
    padding: 2rem 12px !important;
  }
  
}
</style>