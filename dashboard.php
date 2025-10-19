<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
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
	<div class="container">
		<div class="d-flex align-items-center justify-content-between">
			<h2 class="mb-0">Dashboard</h2>
			<div class="d-flex gap-2">
				<a href="#" class="btn btn-light text-dark" data-create-ad><i class="fa fa-plus"></i> Create Ad</a>
				<a href="/create-ad.php" class="btn btn-outline-light">Advanced</a>
			</div>
		</div>
	</div>
</section>

<section class="container my-4">
	<div class="row g-4">
		<div class="col-md-4">
			<div class="card p-4 h-100" style="background:linear-gradient(135deg, rgba(108,99,255,.12), rgba(0,196,179,.12));">
				<h6 class="text-muted">Balance</h6>
				<div class="display-6">$120.40</div>
				<a href="/buy-credit.php" class="btn btn-gradient mt-3">Buy Credit</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card p-4 h-100">
				<h6 class="mb-3">Quick Shorten</h6>
				<div class="input-group">
					<input type="url" class="form-control" placeholder="Paste a long URL here">
					<button class="btn btn-gradient">Shorten</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row g-4 mt-1">
		<div class="col-12">
			<h5>Recent Links</h5>
		</div>
		<div class="col-lg-6">
				<div class="card p-3" style="border-left:4px solid var(--brand-primary);">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<div class="fw-semibold">/go/abc123</div>
						<div class="small text-muted">https://example.com/article</div>
					</div>
					<div class="text-end">
						<div class="fw-bold">1,240</div>
						<div class="small text-muted">clicks</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
				<div class="card p-3" style="border-left:4px solid var(--brand-accent);">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<div class="fw-semibold">/go/xyz987</div>
						<div class="small text-muted">https://store.com/offer</div>
					</div>
					<div class="text-end">
						<div class="fw-bold">534</div>
						<div class="small text-muted">clicks</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt-2">
			<h5>Your Ads</h5>
		</div>
		<div class="col-lg-4">
				<div class="card p-3 h-100" style="background:linear-gradient(135deg, #fff, #f3f0ff);">
				<h6 class="mb-1">Summer Sale</h6>
				<p class="small text-muted mb-2">Get 50% off on selected items.</p>
				<div class="d-flex justify-content-between small">
					<span>Impr: 12k</span>
					<span>Clicks: 1.1k</span>
					<span>Conv: 94</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
				<div class="card p-3 h-100" style="background:linear-gradient(135deg, #fff, #eefcfb);">
				<h6 class="mb-1">New App Launch</h6>
				<p class="small text-muted mb-2">Try our productivity app.</p>
				<div class="d-flex justify-content-between small">
					<span>Impr: 8.2k</span>
					<span>Clicks: 760</span>
					<span>Conv: 41</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
				<div class="card p-3 h-100" style="background:linear-gradient(135deg, #fff, #fff0f7);">
				<h6 class="mb-1">Webinar Signup</h6>
				<p class="small text-muted mb-2">Join our growth webinar.</p>
				<div class="d-flex justify-content-between small">
					<span>Impr: 5.6k</span>
					<span>Clicks: 392</span>
					<span>Conv: 23</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>