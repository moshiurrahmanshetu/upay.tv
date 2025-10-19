<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
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
		<h2 class="mb-2">Contact Us</h2>
		<p class="opacity-75 mb-0">We’d love to hear from you. Send us a message below.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-8">
				<div class="card p-4">
					<form action="#" method="post">
						<div class="mb-3">
							<label class="form-label">Your Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Message</label>
							<textarea class="form-control" rows="5" required></textarea>
						</div>
						<button class="btn btn-gradient">Send Message</button>
					</form>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card p-4 h-100">
					<h6>Support</h6>
					<p class="small text-muted mb-2">For ad, payout, or account questions.</p>
					<ul class="small text-muted mb-0">
						<li>Response time: 1–2 business days</li>
						<li>Hours: 9:00–18:00 (GMT+6)</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>