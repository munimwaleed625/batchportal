<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITEC Batch Advisory Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    .custom-navbar {
      background-color: white;
      border-bottom: 5px solid #f1c40f; /* Yellow border */
      border-top: 5px solid #002147;   /* Dark blue border */
      padding: 10px 20px;
    }
    .portal-title {
      font-weight: bold;
      font-size: 1.2rem;
      color: #002147;
    }
    .profile-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
        body {
            font-family: Arial, sans-serif;
            overflow: hidden;
        }
    .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #f8f9fa;
            border-right: 2px solid #ddd;
            padding-top: 20px;
            position: fixed;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            border-bottom: 1px solid #ddd;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #e9ecef;
            color: #007bff;
            font-weight: bold;
        }
        .sidebar a::before {
            content: ">";
            margin-right: 8px;
            color: #333;
        }
        .topbar {
            background-color: #fff;
            padding: 15px;
            border-bottom: 3px solid #f0ad4e;
            text-align: right;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background: #002147;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <nav class="custom-navbar d-flex align-items-center justify-content-between">
        <!-- Left Logo -->
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/img/download.jpg') }}" alt="Logo" width="80" height="80">
        </div>

        <!-- Center/Right Text -->
        <div class="d-flex align-items-center">
          <span class="portal-title me-3">Welcome to Hitec Batch Advisory Portal</span>
            <img src="{{ asset('assets/img/055a91979264664a1ee12b9453610d82.jpg') }}" alt="Profile" class="profile-icon">
        </div>
      </nav>

          </a>
        </div>
      </nav>
      <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <div class="sidebar">
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('application') }}" class="{{ request()->is('application') ? 'active' : '' }}">Applications</a>
                <a href="{{ route('courses') }}" class="{{ request()->is('courses') ? 'active' : '' }}">Manage Courses</a>
                <a href="{{ route('igrade') }}" class="{{ request()->is('igrade') ? 'active' : '' }}">I-Grade</a>
                <a href="{{ route('progress') }}" class="{{ request()->is('progress') ? 'active' : '' }}">Academic Progress</a>
                <a href="{{ route('issue') }}" class="{{ request()->is('issue') ? 'active' : '' }}">Report an Issue</a>
                <a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Manage Profile</a>
            </div>

        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            @yield('content')
        </div>
      </div>

    <!-- Footer -->
    <div class="footer">
        © 2025 HITEC University Taxila.
    </div>

</body>
</html>
