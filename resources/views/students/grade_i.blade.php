@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>I-Grade Application:</h2>
    <div class="container mt-5"  style="width: 950px">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0">I-Grade Application Form</h4>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('grade_i.store')}}">
                    @csrf
                    <div class="mb-3" align="left">
                        <label for="studentName" class="form-label" >Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="student_name" required placeholder="full name">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="rollNumber" class="form-label" >Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="roll_number" required placeholder="roll no">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="courseType" class="form-label" >Course Title</label>
                        <select class="form-select" id="courseType" name="course_type" required>
                            <option value="">Select Type</option>
                            <option value="Sick Leave">Global Software Development</option>
                            <option value="Casual Leave">Cloud Computing</option>
                            <option value="Emergency Leave">Economics</option>
                        </select>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="reason" class="form-label">Valid Reason for Absence:</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>

                    <div>
                        <div style="margin-bottom: 40px;">
                            <label class="form-label" for="customFile">Add Attachment(Reports,etc):</label>
                            <input type="file" class="form-control" id="customFile" style="width: 300px;margin: auto"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
