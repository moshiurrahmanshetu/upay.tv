<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
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

<section class="container my-4">
	<h2 class="mb-4">Profile</h2>
	<div class="row g-4">
		<div class="col-lg-8">
			<div class="card p-4">
				<form class="row g-3">
					<div class="col-md-6">
						<label class="form-label">Full Name</label>
						<input type="text" class="form-control" value="John Doe">
					</div>
					<div class="col-md-6">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" value="john@example.com">
					</div>
					<div class="col-md-6">
						<label class="form-label">Country</label>
						<input type="text" class="form-control" value="Bangladesh">
					</div>
					<div class="col-md-6">
						<label class="form-label">Payout Method</label>
						<select class="form-select">
							<option selected>PayPal</option>
							<option>Bank</option>
							<option>Crypto</option>
						</select>
					</div>
					<div class="col-12 text-end">
						<button class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card p-4 h-100">
				<h6 class="mb-3">Tips to earn more</h6>
				<ul class="small text-muted mb-0">
					<li>Share in niche communities</li>
					<li>Use clear call-to-actions</li>
					<li>Track which links convert</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>