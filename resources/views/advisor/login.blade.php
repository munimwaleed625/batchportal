<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HITEC University Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f2f2f2;
    }
    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      border-radius: 20px;
      overflow: hidden;
    }
    .form-section {
      padding: 40px;
    }
    .form-control:focus {
      box-shadow: none;
    }
    .btn-google {
      background-color: #000;
      color: white;
    }
    .btn-google img {
      height: 16px;
      margin-right: 8px;
    }
    .form-check-input:checked {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }
  </style>
</head>
<body>

<div class="container login-container">
  <div class="card shadow w-100" style="max-width: 900px;">
    <div class="row g-0">

      <!-- LEFT IMAGE -->
      <div class="col-md-6 d-none d-md-block">
        <img src="assets/img/Capturejhigbyugvgyu.JPG" alt="Students" class="img-fluid h-100 w-100" style="object-fit: cover;">
      </div>

      <!-- RIGHT LOGIN FORM -->
      <div class="col-md-6 bg-white">
        <div class="form-section">
          <div class="text-center mb-4">
            <img src="assets/img/download.jpg" alt="Logo" width="50">
            <h6 class="mt-2 fw-bold">HITEC UNIVERSITY</h6>
            <p class="text-muted">Login to HITEC University</p>
          </div>

          <form>
            <div class="mb-3">
              <label class="form-label">Login</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" placeholder="Enter password">
                <span class="input-group-text bg-white">
                  <i class="bi bi-eye"></i>
                </span>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <a href="#" class="text-decoration-none">Forgot password?</a>
            </div>

            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>

            <div class="text-center text-muted mb-3">or</div>

            <div class="d-grid mb-3">
              <button type="button" class="btn btn-google">
                <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google icon">
                Sign in with Google
              </button>
            </div>

            <div class="text-center">
              <small class="text-muted">Don’t have an account? <a href="#">Sign up now</a></small>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap Icons (for eye icon) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
