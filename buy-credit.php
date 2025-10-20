<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buy Credit</title>
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


	<section class="section section-primary py-5">
		<div class="container text-center">
			 <h1 class="fw-bold">Buy Credit</h1>
      <p class="fs-5">Top up your account securely and start scaling your ad campaigns instantly.</p>
		</div>
	</section>

 <section class="py-5" style="background: #f8faff;">
  <div class="container">
    <div class="row g-4 py-4 mb-5">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift" style="transition: all .3s;">
          <div class="card-body">
            <div class="icon-box mx-auto bg-gradient text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:70px; height:70px; font-size:26px;">
              💎
            </div>
            <h4 class="fw-bold mb-2">Basic Credit</h4>
            <h2 class="fw-bold text-gradient mb-3">$25</h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>✅ Suitable for small campaigns</li>
              <li>✅ Instant account activation</li>
              <li>✅ 24/7 Support access</li>
            </ul>
            <a href="#" class="btn btn-gradient px-4 py-2 fw-bold rounded-pill shadow-sm">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Standard -->
      <div class="col-md-4">
        <div class="card border-0 shadow h-100 text-center p-4 hover-lift" style="transform: scale(1.05); border: 2px solid var(--brand-primary);">
          <div class="card-body">
            <div class="icon-box mx-auto bg-gradient text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:70px; height:70px; font-size:26px;">
              🚀
            </div>
            <h4 class="fw-bold mb-2">Standard Credit</h4>
            <h2 class="fw-bold text-gradient mb-3">$75</h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>💰 Recommended for active advertisers</li>
              <li>⚡ Priority processing</li>
              <li>🛡️ Advanced fraud protection</li>
            </ul>
            <a href="#" class="btn btn-gradient px-4 py-2 fw-bold rounded-pill shadow-sm">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4 hover-lift">
          <div class="card-body">
            <div class="icon-box mx-auto bg-gradient text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:70px; height:70px; font-size:26px;">
              👑
            </div>
            <h4 class="fw-bold mb-2">Premium Credit</h4>
            <h2 class="fw-bold text-gradient mb-3">$200</h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>⭐ Best for heavy advertisers</li>
              <li>🎯 Priority support & analytics</li>
              <li>🔒 Multi-account top-up</li>
            </ul>
            <a href="#" class="btn btn-gradient px-4 py-2 fw-bold rounded-pill shadow-sm">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
		</div>
</section>

<section class="py-5 payment-types-section">
  <div class="container">
    <div class="mt-5 text-center">
      <h3 class="fw-bold text-gradient mb-4">We Accept</h3>
      <div class="d-flex justify-content-center flex-wrap gap-3">
        <img src="../assets/Visa_Logo.png" alt="Visa" height="40">
        <img src="../assets/MasterCard_Logo.svg" alt="MasterCard" height="40">
        <img src="../assets/PayPal.svg.png" alt="PayPal" height="40">
        <img src="../assets/Bkash-Logo.png" alt="bKash" height="40">
      </div>
      <p class="text-muted mt-3">All payments are securely processed via SSL encryption.</p>
    </div>
  </div>
</section>

<!-- Gradient, Animation & Hover Styles -->
<style>
	:root{
			--grad-hover:linear-gradient(135deg,  var(--brand-secondary) 0%,var(--brand-primary) 100%);
	}
  .text-gradient {
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .btn-gradient {
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
    border: none;
    color: #fff;
  }
  .btn-gradient:hover {
    transform: translateY(-2px);
    transition: 0.3s;
		background:var(--grad-hover);
		color: #ffffffff;
  }
  .hover-lift {
    transition: transform .3s ease, box-shadow .3s ease;
  }
  .hover-lift:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
  }
	ul.list-unstyled{
		text-align: left;
	}
	.payment-types-section{
		background: #fdf2f2;
	}
</style>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>