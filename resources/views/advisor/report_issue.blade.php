<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HITEC Batch Advisory Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
            margin-left: 260px;
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
  </style>
</head>
<body>

  <nav class="custom-navbar d-flex align-items-center justify-content-between">
    <!-- Left Logo -->
    <div class="d-flex align-items-center">
      <img src="download.jpg" alt="Logo" width="80" height="80">
    </div>

    <!-- Center/Right Text -->
    <div class="d-flex align-items-center">
      <span class="portal-title me-3">Welcome to Hitec Batch Advisory Portal</span>
      <img src="055a91979264664a1ee12b9453610d82.jpg" alt="Profile" class="profile-icon">
    </div>
  </nav>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#">Dashboard</a>
    <a href="#">Applications</a>
    <a href="#">Manage Courses</a>
    <a href="#">I-Grade</a>
    <a href="#" class="active">Students Conflicts</a>
    <a href="#">Student-Teacher Conflicts</a>
    <a href="#">TimeTable Clashes</a>
    <a href="#">ExtraCurricular Activity</a>
    <a href="#">Scholarship/Financial Aid</a>
</div>
<div class="content">
    <h2>Students Conflicts</h2>

    <div class="container my-5 d-flex justify-content-center">
        <div class="w-75">
          
          <div class="card shadow-sm rounded">
            <div class="card-body">
              <h6 class="fw-bold mb-3">Search</h6>
              <form class="row g-2 align-items-center justify-content-center">
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Reg No">
                </div>
                <div class="col-md-3 text-md-end">
                  <button type="submit" class="btn px-4" style="background-color: #003366; color: white; border: none;">
                    Search
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
       
      <div class="container my-4 d-flex justify-content-center">
        <div class="w-75">
          <div class="card shadow-sm rounded">
            <div class="card-body">
              <h6 class="fw-bold mb-3 text-center">Applications</h6>
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                  <thead class="table-light">
                    <tr>
                      <th>Reg No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone No</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Ali Khan</td>
                      <td>ali@example.com</td>
                      <td>03001234567</td>
                      <td>Islamabad</td>
                      <td>2025-04-13</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>Sara Ahmed</td>
                      <td>sara@example.com</td>
                      <td>03129876543</td>
                      <td>Lahore</td>
                      <td>2025-04-12</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>003</td>
                      <td>Usman Tariq</td>
                      <td>usman@example.com</td>
                      <td>03331234567</td>
                      <td>Karachi</td>
                      <td>2025-04-11</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>004</td>
                      <td>Hina Raza</td>
                      <td>hina@example.com</td>
                      <td>03451112222</td>
                      <td>Multan</td>
                      <td>2025-04-10</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>005</td>
                      <td>Omar Zaid</td>
                      <td>omar@example.com</td>
                      <td>03557778899</td>
                      <td>Faisalabad</td>
                      <td>2025-04-09</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>006</td>
                      <td>Zoya Noor</td>
                      <td>zoya@example.com</td>
                      <td>03669990000</td>
                      <td>Rawalpindi</td>
                      <td>2025-04-08</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>007</td>
                      <td>Bilal Arif</td>
                      <td>bilal@example.com</td>
                      <td>03774445566</td>
                      <td>Quetta</td>
                      <td>2025-04-07</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <td>008</td>
                      <td>Maria Khan</td>
                      <td>maria@example.com</td>
                      <td>03882223344</td>
                      <td>Peshawar</td>
                      <td>2025-04-06</td>
                      <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer text-center text-white py-2">
        © 2025 HITEC University Taxila.
      </footer>
      
      <style>
        .footer {
          background-color: #003366; /* Deep blue */
          font-size: 14px;
          position: fixed;
          bottom: 0;
          width: 100%;
          z-index: 1000;
        }
      </style>
      
</body>
</html>
