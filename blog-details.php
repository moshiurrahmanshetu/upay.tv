<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog Details</title>
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

   <section class="blog-hero">
    <div class="container">
      <h1>How We Revolutionized Bot Detection in Digital Advertising</h1>
      <p class="mt-3 blog-meta">By <strong>Admin</strong> | August 24, 2025 | <span>AdTech, Security</span></p>
    </div>
  </section>

  <!-- Blog Content -->
  <section class="py-5">
    <div class="container">
      <div class="blog-content" data-animate>
        <img src="../assets/blog-2.jpg" class="img-fluid" alt="Blog Image">
        <div class="blog-article">
          <p>Online advertising has evolved rapidly, but so have fraudulent activities. Our journey towards eliminating bot traffic began in 2016, and today, we’ve built one of the most advanced anti-fraud systems in the industry.</p>

          <p>With over 53 advanced filters and machine-learning-based behavior analysis, our system ensures that every impression and click is genuine. This not only saves advertisers’ money but also rewards real publishers fairly.</p>

          <p>We’ve integrated multiple layers of protection — from IP reputation analysis to proxy detection, browser fingerprinting, and time-based tracking. Each visitor interaction is analyzed in real time, ensuring no suspicious activity passes unnoticed.</p>

          <p>Our mission is clear: build trust, create transparency, and ensure fair play in the digital ad world.</p>
        </div>
      </div>

      <!-- Author Section -->
      <div class="author-box" data-animate>
        <img src="../assets/avater.jpg" alt="Author">
        <div>
          <h5 class="fw-bold mb-1">John Doe</h5>
          <p class="text-muted mb-0">Head of Security & Anti-Fraud, AdMedia</p>
          <small>“Our strength lies in detecting the unseen. Real users deserve real rewards.”</small>
        </div>
      </div>

      <!-- Related Posts -->
      <div class="related-posts mt-5" data-animate>
        <h4 class="fw-bold mb-4 text-gradient">Related Articles</h4>
        <div class="row g-4">
          <div class="col-md-4">
            <a href="#">
              <div class="card p-3">
              <img src="../assets/blog-3.jpg" class="rounded mb-3" alt="Post">
              <h6 class="fw-bold">Top 5 Ways We Detect Click Fraud in Real-Time</h6>
              <small class="text-muted">August 10, 2025</small>
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <div class="card p-3">
              <img src="../assets/blog-4.jpg" class="rounded mb-3" alt="Post">
              <h6 class="fw-bold">Why Transparency is the Future of AdTech</h6>
              <small class="text-muted">July 22, 2025</small>
            </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <div class="card p-3">
              <img src="../assets/blog-5.jpg" class="rounded mb-3" alt="Post">
              <h6 class="fw-bold">AI and ML in Bot Detection Systems</h6>
              <small class="text-muted">June 5, 2025</small>
            </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Comment Section -->
      <div class="comment-box" data-animate>
        <h4 class="fw-bold mb-4 text-gradient">Leave a Comment</h4>
        <form>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control rounded-pill" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control rounded-pill" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Comment</label>
            <textarea class="form-control" rows="4" required></textarea>
          </div>
          <button class="btn btn-gradient rounded-pill px-4">Submit Comment</button>
        </form>
      </div>
    </div>
  </section>


<?php include __DIR__.'/includes/footer.php'; ?>

<script>
    // Simple scroll animation trigger
    const elements = document.querySelectorAll('[data-animate]');
    const onScroll = () => {
      const trigger = window.innerHeight * 0.9;
      elements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < trigger) el.classList.add('visible');
      });
    };
    window.addEventListener('scroll', onScroll);
    onScroll();
  </script>

</body>
</html>

<style>
    :root {
      --brand-primary: #6a11cb;
      --brand-secondary: #2575fc;
      --text-dark: #222;
    }

 a{
  text-decoration: none;
 }
    .text-gradient {
      background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .blog-hero {
      background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
      color: white;
      padding: 100px 20px 70px;
      text-align: center;
    }

    .blog-hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .blog-content img {
      border-radius: 15px;
      margin-bottom: 30px;
      transition: transform 0.5s ease;
    }

    .blog-content img:hover {
      transform: scale(1.02);
    }

    .blog-meta {
      color: #d8d8d8ff;
      font-size: 0.9rem;
    }

    .blog-article p {
      line-height: 1.8;
      margin-bottom: 1.2rem;
    }

    .author-box {
      background: #fff;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      display: flex;
      align-items: center;
      margin-top: 50px;
    }

    .author-box img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .related-posts .card {
      border: 0;
      border-radius: 15px;
      transition: all 0.3s ease;
    }

    .related-posts .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .comment-box {
      background: #fff;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      margin-top: 50px;
    }

    .btn-gradient {
      background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
      border: none;
      color: white;
      transition: opacity 0.3s;
    }

    .btn-gradient:hover {
      opacity: 0.85;
      color: white;
    }

    /* Subtle fade-up animations without library */
    [data-animate] {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease-out;
    }

    [data-animate].visible {
      opacity: 1;
      transform: translateY(0);
    }
    @media screen and (max-width: 600px) {
    .blog-hero h1 {
      font-size: 1.8rem;
      }
    }
  </style>