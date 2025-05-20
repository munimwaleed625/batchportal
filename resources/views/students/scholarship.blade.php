@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Scholarship/Financial Aid</h2>

    <div class="container mt-5 "  style="width: 950px">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-3">Form For Scholarship</h4>
            </div>
        <form method="POST" enctype="multipart/form-data">
            @csrf

                <div class="mb-3" align="left">
                    <label for="studentName" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="studentName" name="student_name" required placeholder="full Name">
                </div>
                <div class="mb-3" align="left">
                    <label for="rollNumber" class="form-label">Roll Number</label>
                    <input type="text" class="form-control" id="rollNumber" name="roll_number" required placeholder="roll no">
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
                <label for="income" class="form-label">Monthly Family Income (PKR)</label>
                <input type="number" class="form-control" id="income" name="family_income" required placeholder="pkr">
            </div>

            <div class="mb-3" align="left">
                <label for="reason" class="form-label">Reason for Applying</label>
                <textarea class="form-control" id="reason" name="reason" rows="4" placeholder="Explain why you are applying for the scholarship" required></textarea>
            </div>



            <div>
                <div style="margin-bottom: 40px;">
                    <label class="form-label" for="customFile">Add Attachment(Reports,etc):</label>
                    <input type="file" class="form-control" id="customFile" style="width: 300px;margin: auto"/>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Submit Application</button>
        </form>
    </div>
      </div>
</div>


@endsection
