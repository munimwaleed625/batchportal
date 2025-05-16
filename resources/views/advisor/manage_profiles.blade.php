@extends('layout')
@section('content')
<div class="content">
    <h2>Manage Profile</h2>

    <div class="container mt-5 mb-5">
        <div class="card shadow-lg p-4">
            <h4 class="mb-4 fw-bold">Edit Profile</h4>

            <form>

                <!-- Profile Picture -->
                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block">
                        <img src="https://via.placeholder.com/120" class="profile-img" alt="Profile Picture">
                        <span class="edit-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1827/1827933.png" width="20">
          </span>
                    </div>
                </div>

                <!-- Profile Fields -->
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="Zhenya Rynzhuk">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="zhenyarynzhuk@gmail.com">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" value="587-556-998-02">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" value="Sanghai, Chaina.">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" value="Mallen">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Zip Code</label>
                        <input type="text" class="form-control" value="7789">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" value="Chaina">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary">Back To Home</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



@endsection
