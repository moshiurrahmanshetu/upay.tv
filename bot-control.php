<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bot Control</title>
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


<section class="section section-primary">
	<div class="container text-center">
		<h2 class="mb-2">Bot Control</h2>
		<p class="opacity-75 mb-0">Multi‑layer fraud prevention to protect advertisers and boost publisher trust.</p>
	</div>
</section>

<section class="bot-control py-5">
  <div class="container">
    <!-- Hero / Header Section -->
    <div class="text-center mb-5">
      <h1 class="fw-bold display-5 text-gradient">Advanced Bot Control System</h1>
      <p class="lead text-muted">Protecting advertisers and publishers through intelligent traffic analysis and real-time fraud prevention.</p>
    </div>

    <!-- Intro Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/images/bot-control-security.svg" class="img-fluid rounded-4 shadow" alt="Bot Control">
      </div>
      <div class="col-md-6">
        <h3 class="fw-semibold">We control malicious traffic strictly</h3>
        <p class="text-muted">
          Around <strong>50%</strong> of new publishers try to make money unethically. We detect and block them efficiently.  
          Many popular ad media companies ignore this — but we don’t. We believe in a <strong>win-win business model</strong>.
        </p>
      </div>
    </div>

    <!-- Our Journey Section -->
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <div class="card border-0 shadow-lg rounded-4 p-4 gradient-bg text-white">
          <h4 class="fw-bold mb-3">Our Journey</h4>
          <p>
            Back in <strong>2013–2014</strong>, we paid over <strong>$130K</strong> due to bot traffic.  
            Our ad network collapsed — but we learned invaluable lessons.  
            In <strong>2016</strong>, we came back stronger with a mission to secure the advertising ecosystem,  
            and developed <strong>53+ advanced fraud control filters</strong>.
          </p>
        </div>
      </div>
    </div>

    <!-- How We Control Bots -->
    <div class="text-center mb-4">
      <h2 class="fw-bold">How We Detect and Block Bots</h2>
      <p class="text-muted">We use multiple layers of AI-driven filters and manual review systems.</p>
    </div>

    <div class="row g-4">
      <?php
        $methods = [
          ['Pattern Recognition', 'We understand how real users behave. Any deviation is instantly flagged.'],
          ['IP & ISP Filtering', 'Bots often originate from specific IP blocks or paid IP zones — we detect and block them.'],
          ['Browser Behavior Analysis', 'Our system identifies unnatural browser patterns that bots can’t mimic.'],
          ['Proxy & VPN Database', 'We maintain one of the largest proxy detection databases globally.'],
          ['Signup Tracking', 'We track signups and conversions to verify genuine user actions.'],
          ['Time Tracking', 'We analyze user engagement and timing behaviors for authenticity.'],
          ['Multi-Technology Serving', 'Our ads are served using different technologies — bots can’t adapt to all.'],
          ['Bot Traps', 'We set invisible ad traps that only bots interact with — instantly identifying them.'],
          ['Web Popularity Check', 'We verify link activity and popularity from trusted 3rd parties.'],
          ['Manual Verification', 'Our team manually reviews suspicious accounts before approving payments.']
        ];

        foreach ($methods as $i => $m) {
          echo '
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm p-4 hover-lift">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box me-3 bg-gradient text-white rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px; font-size:22px;">
                  '.($i+1).'
                </div>
                <h5 class="fw-bold mb-0">'.$m[0].'</h5>
              </div>
              <p class="text-muted">'.$m[1].'</p>
            </div>
          </div>';
        }
      ?>
    </div>

    <!-- Results / Success Section -->
    <div class="mt-5 text-center">
      <h2 class="fw-bold text-gradient mb-4">Bot Control Made Us Stronger</h2>
      <div class="row g-4">
        <?php
          $benefits = [
            ['7×', 'Advertisers Increased'],
            ['70%', 'Server Costs Reduced'],
            ['↑', 'Revenue and Publisher Income Boosted'],
            ['💼', 'More Focus on Quality'],
            ['🌍', 'Organic Referral Traffic Increased']
          ];

          foreach ($benefits as $b) {
            echo '
            <div class="col-md-4 col-lg-2 mx-auto">
              <div class="card border-0 shadow-sm p-3 hover-lift text-center">
                <h3 class="fw-bold text-gradient mb-2">'.$b[0].'</h3>
                <p class="text-muted">'.$b[1].'</p>
              </div>
            </div>';
          }
        ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>
<script>
// Simple smooth fade-in animation without external libraries
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('.hover-lift, .card, h1, h2, h3, p');
  elements.forEach((el, i) => {
    el.style.opacity = 0;
    el.style.transform = 'translateY(20px)';
    setTimeout(() => {
      el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      el.style.opacity = 1;
      el.style.transform = 'translateY(0)';
    }, i * 80);
  });
});
</script>


</body>
</html>


<style>
.text-gradient {
  background: linear-gradient(90deg, #00b4db, #0083b0);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.gradient-bg {
  background: linear-gradient(135deg, #00b4db, #0083b0);
}
.icon-box {
  background: linear-gradient(135deg, #0083b0, #00b4db);
}
.hover-lift {
  transition: all 0.3s ease;
}
.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
</style>