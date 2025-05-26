@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Students Conflicts:</h2>

    <div class="container mt-5"  style="width: 950px">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show close" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('success'))
            <div class="">
                <div class="alert alert-success alert-dismissible fade show close" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0" style="font-weight: bold">Conflicts</h4>
            </div>
            <div class="card-body">
                <form  method="POST" enctype="multipart/form-data" action="{{route('student_conflicts.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label style="font-size: 20px;font-weight: 400" for="firststudent" class="form-label">Conflict of</label>
                        <div class="col-md-6" align="left">
                            <label for="first_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="full Name">
                        </div>
                        <div class="col-md-6" align="left">
                            <label for="first_roll_no" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" id="first_roll_no" name="first_roll_no" placeholder="Roll no">
                        </div>
                    </div>



                    <div class="row mb-3" >
                        <label style="font-size: 20px;font-weight: 400" for="secondstudent" class="form-label">Conflict with</label>
                        <div class="col-md-6" align="left">
                            <label for="second_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Enter Student Name">
                        </div>
                        <div class="col-md-6" align="left">
                            <label for="second_roll_no" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" id="second_roll_no" name="second_roll_no" placeholder="Enter Roll Number">
                        </div>
                    </div>


                    <div class="mb-3" align="left">
                        <label for="date_issue" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date_issue" name="date_issue" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="issue_explain" class="form-label">Issue/Explaination</label>
                        <textarea class="form-control" id="issue_explain" name="issue_explain" rows="4" required></textarea>
                    </div>



                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
