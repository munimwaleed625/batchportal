@extends('layout_student')
@section('content')
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
@endsection
