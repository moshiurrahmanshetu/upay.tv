<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Join</title>
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

<section class="container py-5">
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
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
								<input id="email" name="email" type="email" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="loginPassword" class="col-md-3 col-4 col-form-label">Password</label>
						<div class="col-md-9 col-8">
							<div class="input-group password-wrapper">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
								<input id="loginPassword" name="loginPassword" type="password" class="form-control" required>
							 <button type="button" class="toggle-password" onclick="togglePassword('loginPassword', this)">
            <i class="fa-regular fa-eye"></i>
          </button>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
						<label for="confirmPass" class="col-md-3 col-4 col-form-label">Retype Password</label>
						<div class="col-md-9 col-8">
							<div class="input-group password-wrapper">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
								<input id="confirmPass" name="confirmPass" type="password" class="form-control" required>
								<button type="button" class="toggle-password" onclick="togglePassword('confirmPass', this)">
            <i class="fa-regular fa-eye"></i>
          </button>
							</div>
						</div>
					</div>
					<div class="row mb-3 align-items-center">
  <label for="promo" class="col-md-3 col-12 col-form-label" id="promoLabel" style="cursor: pointer;">
    Promo Code
  </label>
  <div class="col-md-9 col-12 d-flex align-items-center">
    <div class="input-group flex-grow-1" id="promoField">
      <span class="input-group-text"><i class="fa fa-bullhorn"></i></span>
      <input id="promo" name="promo" type="text" class="form-control" placeholder="Optional">
    </div>
    <button type="button" id="togglePromoBtn" class="btn btn-outline-secondary ms-2">
      <i class="fa fa-eye-slash"></i>
    </button>
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

<script>
    function togglePassword(id, el) {
      const passwordField = document.getElementById(id);
      const icon = el.querySelector('i');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-regular', 'fa-eye');
        icon.classList.add('fa-solid', 'fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-solid', 'fa-eye-slash');
        icon.classList.add('fa-regular', 'fa-eye');
      }
    }

		document.addEventListener('DOMContentLoaded', function() {
  const promoField = document.getElementById('promoField');
  const promoLabel = document.getElementById('promoLabel');
  const toggleBtn = document.getElementById('togglePromoBtn');
  const toggleIcon = toggleBtn.querySelector('i');

  // Hide/Show when button clicked
  toggleBtn.addEventListener('click', function() {
    if (promoField.style.display === 'none') {
      promoField.style.display = 'flex';
      toggleIcon.classList.remove('fa-eye');
      toggleIcon.classList.add('fa-eye-slash');
    } else {
      promoField.style.display = 'none';
      toggleIcon.classList.remove('fa-eye-slash');
      toggleIcon.classList.add('fa-eye');
    }
  });

  // Show when label clicked
  promoLabel.addEventListener('click', function() {
    promoField.style.display = 'flex';
    toggleIcon.classList.remove('fa-eye');
    toggleIcon.classList.add('fa-eye-slash');
  });
});
</script>

</body>
</html>

<style>
	.toggle-password {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 16px;
    color: #292929ff;
    background: none;
    border: none;
}
</style>

