@extends('layout')
@section('content')
<div class="content">
    <h2>Manage Students </h2>

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
@endsection
