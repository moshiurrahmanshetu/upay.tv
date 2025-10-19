<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Ads</title>
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
		<h2 class="mb-2">Create Ad</h2>
		<p class="opacity-75 mb-0">Launch a new promotion in minutes.</p>
	</div>
</section>

<section class="container my-4">
    <div class="card p-4 shadow-soft">
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
            <button type="button" class="btn btn-gradient">Submit</button>
            <a href="/dashboard.php" class="btn btn-outline-secondary">Back to Dashboard</a>
		</form>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>