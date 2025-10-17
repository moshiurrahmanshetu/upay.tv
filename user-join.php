<?php include __DIR__.'/includes/header.php'; ?>

<section class="container my-4">
	<h2 class="text-center mb-4">Join with uPay.tv</h2>
	<div class="row g-4">
		<div class="col-md-8">
			<div class="card p-4">
				<form action="#" method="POST">
					<div class="row mb-3 align-items-center">
						<label for="name" class="col-md-3 col-4 col-form-label">Name</label>
						<div class="col-md-9 col-8">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-align-left"></i></span>
								<input id="name" name="name" type="text" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="email" class="col-md-3 col-4 col-form-label">Email</label>
						<div class="col-md-9 col-8">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-at"></i></span>
								<input id="email" name="email" type="email" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="pass1" class="col-md-3 col-4 col-form-label">Password</label>
						<div class="col-md-9 col-8">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
								<input id="pass1" name="pass1" type="password" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="pass2" class="col-md-3 col-4 col-form-label">Retype Password</label>
						<div class="col-md-9 col-8">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
								<input id="pass2" name="pass2" type="password" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="promo" class="col-md-3 col-12 col-form-label">Promo Code</label>
						<div class="col-md-9 col-12">
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-bullhorn"></i></span>
								<input id="promo" name="promo" type="text" class="form-control" placeholder="Optional">
							</div>
						</div>
					</div>
					<div class="text-end">
						<button name="sub_reg" type="submit" class="btn btn-success">Join Now</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card p-4 h-100">
				<h5>Already have an account?</h5>
				<p class="text-muted">Login and manage your links & ads.</p>
				<a href="/user-login.php" class="btn btn-primary">Login Now</a>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>

