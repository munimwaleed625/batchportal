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
    <a href="#" class="active">I-Grade</a>
    <a href="#">Students Conflicts</a>
    <a href="#">Student-Teacher Conflicts</a>
    <a href="#">TimeTable Clashes</a>
    <a href="#">ExtraCurricular Activity</a>
    <a href="#">Apply for Scholarship/Financial Aid</a>
</div>
<div class="content">
    <h2>I-Grade</h2>

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
              <h6 class="fw-bold mb-3 text-center">I-Grade Students List</h6>
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                  <thead class="table-light">
                    <tr>
                      <th>Reg No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Course</th>
                      <th>Advisor</th>
                      <th>Remarks</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Abc</td>
                      <td>abc@gmail.com</td>
                      <td>03145246111</td>
                      <td>Islamabad</td>
                      <td>25/01/2024</td>
                      <td>CS</td>
                      <td>5th</td>
                      <td>DBMS</td>
                      <td>Incomplete</td>
                      <td>Mr. Ali</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>XYZ</td>
                      <td>xyz@mail.com</td>
                      <td>03140001122</td>
                      <td>Rawalpindi</td>
                      <td>27/01/2024</td>
                      <td>CS</td>
                      <td>6th</td>
                      <td>OOP</td>
                      <td>Ms. Sana</td>
                      <td>Eligible</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>003</td>
                      <td>Ali</td>
                      <td>ali@example.com</td>
                      <td>03214567890</td>
                      <td>Lahore</td>
                      <td>28/01/2024</td>
                      <td>SE</td>
                      <td>4th</td>
                      <td>SEPM</td>
                      <td>Submitted</td>
                      <td>Mr. Ahmed</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>004</td>
                      <td>Sara</td>
                      <td>sara@example.com</td>
                      <td>03001234567</td>
                      <td>Karachi</td>
                      <td>29/01/2024</td>
                      <td>IT</td>
                      <td>3rd</td>
                      <td>Web Dev</td>
                      <td>Dr. Kamal</td>
                      <td>Extension requested</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>005</td>
                      <td>Ahmed</td>
                      <td>ahmed@example.com</td>
                      <td>03007894561</td>
                      <td>Multan</td>
                      <td>30/01/2024</td>
                      <td>CS</td>
                      <td>7th</td>
                      <td>AI</td>
                      <td>Ms. Fatima</td>
                      <td>Docs missing</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>006</td>
                      <td>Hira</td>
                      <td>hira@example.com</td>
                      <td>03009876543</td>
                      <td>Faisalabad</td>
                      <td>31/01/2024</td>
                      <td>IT</td>
                      <td>2nd</td>
                      <td>Networking</td>
                      <td>Mr. Zain</td>
                      <td>Reviewed</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>007</td>
                      <td>Usman</td>
                      <td>usman@example.com</td>
                      <td>03130000000</td>
                      <td>Quetta</td>
                      <td>01/02/2024</td>
                      <td>SE</td>
                      <td>1st</td>
                      <td>Intro to CS</td>
                      <td>Mr. Hassan</td>
                      <td>New request</td>
                      <td><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                      <td>008</td>
                      <td>Mariam</td>
                      <td>mariam@example.com</td>
                      <td>03215487654</td>
                      <td>Hyderabad</td>
                      <td>02/02/2024</td>
                      <td>CS</td>
                      <td>8th</td>
                      <td>ML</td>
                      <td>Dr. Raza</td>
                      <td>Archived</td>
                      <td><a href="#">Edit</a></td>
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