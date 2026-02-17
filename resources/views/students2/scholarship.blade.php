@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Scholarship/Financial Aid</h2>

    <div class="container mt-5 "  style="width: 950px">
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
        <div class="card shadow mb-3">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0">Form For Scholarship</h4>
            </div>
{{--            action="{{route('scholarship.store')}}"--}}
        <form method="POST" enctype="multipart/form-data" action="{{route('scholarship.store')}}">
            @csrf

                <div class="mb-3" align="left">
                    <label for="full_name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="full Name">
                </div>
                <div class="mb-3" align="left">
                    <label for="roll_no" class="form-label">Roll Number</label>
                    <input type="text" class="form-control" id="roll_no" name="roll_no" required placeholder="roll no">
                </div>


                <div class="mb-3" align="left">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control" id="semester" name="semester" required placeholder="semester">
                </div>

            <div class="mb-3" align="left">
                <label for="cgpa" class="form-label">Current CGPA / Marks Percentage</label>
                <input type="text" class="form-control" id="cgpa" name="cgpa" required placeholder="cgpa">
            </div>

            <div class="mb-3" align="left">
                <label for="monthly_income" class="form-label">Monthly Family Income (PKR)</label>
                <input type="number" class="form-control" id="monthly_income" name="monthly_income" required placeholder="pkr">
            </div>

            <div class="mb-3" align="left">
                <label for="reason_scholarship" class="form-label">Reason for Applying</label>
                <textarea class="form-control" id="reason_scholarship" name="reason_scholarship" rows="4" placeholder="Explain why you are applying for the scholarship" required></textarea>
            </div>



            <div>
                <div style="margin-bottom: 40px;">
                    <label class="form-label" for="attachment">Add Attachment(Reports,etc):</label>
                    <input type="file" class="form-control" id="attachment" name="attachment" style="width: 300px;margin: auto"/>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Submit Application</button>
        </form>
    </div>
      </div>
</div>


@endsection
