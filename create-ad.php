<?php include __DIR__.'/includes/header.php'; ?>

<section class="container my-4">
	<h2 class="mb-3">Create Ad</h2>
	<div class="card p-4">
		<form>
			<div class="mb-3">
				<label class="form-label">Title</label>
				<input type="text" class="form-control" placeholder="Attractive headline">
			</div>
			<div class="mb-3">
				<label class="form-label">Description</label>
				<textarea class="form-control" rows="3" placeholder="Describe your offer"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Destination URL</label>
				<input type="url" class="form-control" placeholder="https://example.com/landing">
			</div>
			<div class="mb-3">
				<label class="form-label">Image (optional)</label>
				<input type="file" class="form-control" accept="image/*">
			</div>
			<button type="button" class="btn btn-primary">Submit</button>
			<a href="/dashboard.php" class="btn btn-outline-secondary">Back to Dashboard</a>
		</form>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

