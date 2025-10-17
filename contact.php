<?php include __DIR__.'/includes/header.php'; ?>

<section class="container my-4">
	<h2 class="mb-3">Contact Us</h2>
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
					<button class="btn btn-primary">Send Message</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card p-4 h-100">
				<h6>Support</h6>
				<p class="small text-muted mb-0">For any questions regarding ads or payouts, reach us via this form. We'll reply within 1-2 business days.</p>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

