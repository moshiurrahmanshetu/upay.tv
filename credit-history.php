<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pricing</title>
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


  <!-- Header -->
  <section class="page-header section-primary">
    <h1 class="fw-bold">Credit History</h1>
    <p class="lead mb-0">Track all your transactions and balance history</p>
  </section>

  <div class="container mb-5">
    <!-- Summary Cards -->
    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="summary-box">
          <h6>Total Balance</h6>
          <h2>$120.00</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="summary-box">
          <h6>Total Credits</h6>
          <h2>$400.00</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="summary-box">
          <h6>Total Debits</h6>
          <h2>$280.00</h2>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card p-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0"><i class="fa-solid fa-clock-rotate-left me-2"></i>Transaction Records</h5>
        <button class="btn-download"><i class="fa fa-download me-2"></i>Download CSV</button>
      </div>

      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Transaction ID</th>
              <th>Type</th>
              <th>Amount</th>
              <th>Description</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>2025-10-18</td>
              <td>TXN784512</td>
              <td><span class="badge badge-credit">Credit</span></td>
              <td>+$50.00</td>
              <td>Purchased 500 Ad Credits</td>
              <td><i class="fa fa-check-circle text-success"></i> Success</td>
            </tr>
            <tr>
              <td>2</td>
              <td>2025-10-15</td>
              <td>TXN778901</td>
              <td><span class="badge badge-debit">Debit</span></td>
              <td>−$10.00</td>
              <td>Ad campaign #A102 usage</td>
              <td><i class="fa fa-check-circle text-success"></i> Success</td>
            </tr>
            <tr>
              <td>3</td>
              <td>2025-10-12</td>
              <td>TXN778100</td>
              <td><span class="badge badge-credit">Credit</span></td>
              <td>+$100.00</td>
              <td>Referral Bonus Added</td>
              <td><i class="fa fa-check-circle text-success"></i> Success</td>
            </tr>
            <tr>
              <td>4</td>
              <td>2025-10-09</td>
              <td>TXN774002</td>
              <td><span class="badge badge-debit">Debit</span></td>
              <td>−$20.00</td>
              <td>Ad click deductions</td>
              <td><i class="fa fa-times-circle text-danger"></i> Pending</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include __DIR__.'/includes/footer.php'; ?>

</body>
</html>

  <style>
    :root {
      --hover-primary: #74EBD5;
      --hover-secondary: #9FACE6;
      --gradient: linear-gradient(135deg, var(--hover-primary), var(--hover-secondary));
      --text-dark: #2b2b2b;
    }

    .page-header {
      color: white;
      padding: 60px 0;
      text-align: center;
      border-radius: 0 0 40px 40px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      margin-bottom: 60px;
      animation: fadeDown 0.8s ease;
    }

    @keyframes fadeDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .card {
      border: none;
      border-radius: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .summary-box {
      background: white;
      border-radius: 20px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: all 0.3s;
      border: 1px solid #b9b9b9;
    }

    .summary-box:hover {
      background: var(--gradient);
      color: white;
      transform: scale(1.03);
    }

    .summary-box h2 {
      font-weight: 700;
    }

    .table thead {
      background: var(--gradient);
      color: white;
    }

    .table-hover tbody tr:hover {
      background-color: rgba(116,235,213,0.1);
      transition: 0.3s;
    }

    .badge-credit {
      background: linear-gradient(90deg, #34d399, #059669);
    }

    .badge-debit {
      background: linear-gradient(90deg, #f87171, #dc2626);
    }

    .btn-download {
      background: var(--grad-primary);
      border: none;
      color: white;
      border-radius: 30px;
      padding: 10px 25px;
      transition: 0.3s;
    }

    .btn-download:hover {
      opacity: 0.9;
      transform: translateY(-3px);
    }
  </style>