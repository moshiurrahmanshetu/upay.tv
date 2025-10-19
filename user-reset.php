<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset Password</title>
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
	<h2 class="text-center mb-4">Reset Password</h2>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card p-4">
				<form>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" placeholder="you@example.com">
					</div>
					<button class="btn btn-primary w-100">Send Reset Link</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>