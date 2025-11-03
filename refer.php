<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Refer</title>
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
<section class="refer-header">
    <div class="container">
      <h1>Invite Friends & Earn More!</h1>
      <p>Share your referral link and earn bonuses when your friends join uPay.</p>
    </div>
  </section>

  <!-- ===== REFERRAL CARD ===== -->
  <section class="container">
    <div class="referral-card text-center animate">
      <h4>Your Referral Link</h4>
      <div class="referral-link mt-3">
        <input type="text" id="refLink" value="https://upay.tv/register?ref=12345" readonly>
        <button id="copyBtn"><i class="fa fa-copy me-1"></i> Copy</button>
      </div>
      <p class="small text-muted mb-0">Share this link with your friends and earn commissions for each signup!</p>
    </div>
  </section>

  <!-- ===== REFERRAL STATS ===== -->
  <section class="container my-5">
    <div class="row g-4">
      <div class="col-md-4 col-12">
        <div class="stat-box animate">
          <div class="stat-icon"><i class="fa fa-user-friends"></i></div>
          <h4>245</h4>
          <p class="mb-0 text-muted">Total Referrals</p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="stat-box animate">
          <div class="stat-icon"><i class="fa fa-wallet"></i></div>
          <h4>$320</h4>
          <p class="mb-0 text-muted">Referral Earnings</p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="stat-box animate">
          <div class="stat-icon"><i class="fa fa-chart-line"></i></div>
          <h4>8%</h4>
          <p class="mb-0 text-muted">Commission Rate</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== REFERRAL BENEFITS ===== -->
  <section class="container my-5 text-center">
    <h2 class="mb-4 fw-bold text-primary">Why Refer to uPay?</h2>
    <div class="row g-4">
      <div class="col-md-4 col-12">
        <div class="benefit-card animate">
          <i class="fa fa-bolt"></i>
          <h5>Instant Rewards</h5>
          <p>Get instant commissions whenever your friend signs up and starts earning or advertising.</p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="benefit-card animate">
          <i class="fa fa-users"></i>
          <h5>Unlimited Referrals</h5>
          <p>There’s no limit! The more you refer, the more you earn. Invite as many friends as you like.</p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="benefit-card animate">
          <i class="fa fa-chart-pie"></i>
          <h5>Real-Time Tracking</h5>
          <p>Track your referrals, clicks, and earnings in real-time from your personalized dashboard.</p>
        </div>
      </div>
    </div>
  </section>


<?php include __DIR__.'/includes/footer.php'; ?>

<script>
    // Copy referral link
    document.getElementById('copyBtn').addEventListener('click', function() {
      const link = document.getElementById('refLink');
      link.select();
      link.setSelectionRange(0, 99999);
      document.execCommand('copy');
      this.innerHTML = '<i class="fa fa-check"></i> Copied!';
      setTimeout(() => { this.innerHTML = '<i class="fa fa-copy me-1"></i> Copy'; }, 2000);
    });

    // Animate on scroll
    const items = document.querySelectorAll('.animate');
    const onScroll = () => {
      items.forEach(el => {
        const pos = el.getBoundingClientRect().top;
        if (pos < window.innerHeight - 100) el.classList.add('visible');
      });
    };
    window.addEventListener('scroll', onScroll);
    onScroll();
  </script>

</body>
</html>

 <style>
    :root {
      --primary-color: #6f42c1;
      --accent-color: #9b6cff;
      --bg-light: #f8f5ff;
      --text-dark: #2b2b2b;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg-light);
      color: var(--text-dark);
    }
    .site-header{
		background:var(--grad-primary);
	}

    /* ===== Header Section ===== */
    .refer-header {
      background:var(--grad-primary);
      color: #fff;
      text-align: center;
      padding: 100px 20px 120px;
      position: relative;
      overflow: hidden;
    }

    .refer-header h1 {
      font-weight: 700;
      font-size: 2.8rem;
      animation: fadeDown 1s ease;
    }

    .refer-header p {
      font-size: 1.1rem;
      opacity: 0.9;
      animation: fadeUp 1s ease;
    }

    @keyframes fadeDown {
      from {opacity: 0; transform: translateY(-30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* ===== Referral Card ===== */
    .referral-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: -80px;
      position: relative;
      z-index: 2;
      transition: all 0.3s ease;
    }

    .referral-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    .referral-link {
      background: #f1edff;
      border: 2px dashed var(--primary-color);
      border-radius: 50px;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .referral-link input {
      border: none;
      background: transparent;
      width: 100%;
      font-weight: 500;
      color: var(--primary-color);
    }

    .referral-link button {
      background: var(--primary-color);
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 8px 18px;
      transition: all 0.3s ease;
    }

    .referral-link button:hover {
      background: var(--accent-color);
    }

    /* ===== Referral Stats ===== */
    .stat-box {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      padding: 25px;
      text-align: center;
      transition: all 0.3s ease;
      border: 1px solid #ababab;
    }

    .stat-box:hover {
      box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    }

    .stat-icon {
      font-size: 35px;
      color: var(--primary-color);
      margin-bottom: 10px;
    }

    /* ===== Referral Benefits ===== */
    .benefit-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      padding: 25px;
      text-align: center;
      transition: 0.3s;
      border: 1px solid #ababab;
    }
    .benefit-card:hover {
      box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    }
    .benefit-card i {
      font-size: 35px;
      color: var(--primary-color);
      margin-bottom: 15px;
    }
		input:focus-visible {
			outline: none;
		}

    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(40px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .animate {
      animation: fadeInUp 1s ease forwards;
    }

    @media screen and (max-width: 600px) {
    .refer-header h1{
        font-size: 1.8rem;
    }
      
    }



  </style>