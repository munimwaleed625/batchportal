@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Manage Profile:</h2>


    <div class="container mt-5"  style="width: 950px">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0">Form For Extra Curricular Activity</h4>
            </div>
    <div class="container profile-form">
        <div class="card-body">
            <form method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6" align="left">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" id="firstName" class="form-control" value="{{ $user->first_name }}" disabled>
                </div>
{{--                <div class="col-md-6" align="left">--}}
{{--                    <label for="lastName" class="form-label">Last Name</label>--}}
{{--                    <input type="text" id="lastName" class="form-control" value="Adams" disabled>--}}
{{--                </div>--}}
            </div>

            <div class="row mb-3">
                <div class="col-md-6" align="left">
                    <label for="email" class="form-label">E-mail Address</label>
                    <input type="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                </div>
                <div class="col-md-6" align="left">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->ph_no }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6" align="left">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" id="newPassword" name="new_password" class="form-control" placeholder="Enter new password">
                </div>
                <div class="col-md-6" align="left">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirm_password" class="form-control" placeholder="Re-enter new password">
                </div>
            </div>





            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
        </div>
    </div>
        </div>
    </div>

      </div>

@endsection
