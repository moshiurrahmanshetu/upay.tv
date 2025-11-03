<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Campaign</title>
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
    <h1 class="fw-bold">Campaign</h1>
    <p class="lead mb-0">Insights, updates, and stories from the uPay Ad Network team</p>
  </section>
 
  <section class="py-5 bg-light">
  <div class="container">
    <!-- Page Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold ">Create New Campaign</h2>
      <p class="text-muted">Launch a smart, goal-driven campaign with advanced targeting and tracking.</p>
    </div>

    <!-- Campaign Form -->
    <div class="card shadow-sm border-0 rounded-4 p-4">
      <form>
        <div class="row g-4">
          <!-- Campaign Name -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Campaign Name</label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter campaign name">
          </div>

          <!-- Campaign Type -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Campaign Type</label>
            <select class="form-select form-select-lg">
              <option selected disabled>Select Type</option>
              <option>URL Shortening</option>
              <option>QR Campaign</option>
              <option>Banner Advertisement</option>
              <option>Affiliate Campaign</option>
            </select>
          </div>

          <!-- Target URL -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Target URL</label>
            <input type="url" class="form-control form-control-lg" placeholder="https://example.com">
          </div>

          <!-- Budget and Duration -->
          <div class="col-md-6">
            <label class="form-label fw-semibold">Campaign Budget ($)</label>
            <input type="number" class="form-control form-control-lg" placeholder="e.g. 200">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold">Duration</label>
            <input type="date" class="form-control form-control-lg">
          </div>

          <!-- Audience Targeting -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Audience Targeting</label>
            <input type="text" class="form-control form-control-lg" placeholder="Country, Age Group, Interest etc.">
          </div>

          <!-- Campaign Description -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Campaign Description</label>
            <textarea rows="4" class="form-control form-control-lg" placeholder="Describe your campaign goals and strategy..."></textarea>
          </div>

          <!-- Upload Banner -->
          <div class="col-md-12">
            <label class="form-label fw-semibold">Upload Banner (Optional)</label>
            <input type="file" class="form-control form-control-lg">
          </div>

          <!-- Buttons -->
          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-gradient btn-lg px-5 me-2 mb-3">Create Campaign</button>
            <button type="reset" class="btn btn-outline-secondary btn-lg px-5 mb-3">Reset</button>
          </div>
        </div>
      </form>
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
 
  .btn-gradient {
    background: var(--primary-color);
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }
  .btn-gradient:hover {
    opacity: 0.8;
    color: #fff;
    background: var(--primary-color);
    transform: translateY(-2px);
  }
  .form-control:focus, .form-select:focus {
    border-color: #9FACE6;
    box-shadow: 0 0 0 0.2rem rgba(159, 172, 230, 0.25);
  }
  .card {
    transition: all 0.3s ease;
    background: #e4e4e4ff;
  }
  .card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  }
  .btn-outline-secondary{
    background: #424242ff;
    color: #fff;
  }
</style>
