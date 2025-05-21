@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Students Conflicts:</h2>

    <div class="container mt-5"  style="width: 950px">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0" style="font-weight: bold">Conflicts</h4>
            </div>
            <div class="card-body">
{{--                action="{{route('student_conflicts.store')}}"--}}
                <form  method="POST" action="{{route('student_conflicts.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label style="font-size: 20px;font-weight: 400" for="firststudent" class="form-label">Conflict of</label>
                        <div class="col-md-6" align="left">
                            <label for="studentName" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="studentName" placeholder="full Name">
                        </div>
                        <div class="col-md-6" align="left">
                            <label for="rollNumber" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" id="rollNumber" placeholder="Roll no">
                        </div>
                    </div>



                    <div class="row mb-3" >
                        <label style="font-size: 20px;font-weight: 400" for="secondstudent" class="form-label">Conflict with</label>
                        <div class="col-md-6" align="left">
                            <label for="studentName" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="studentName" placeholder="Enter Student Name">
                        </div>
                        <div class="col-md-6" align="left">
                            <label for="rollNumber" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" id="rollNumber" placeholder="Enter Roll Number">
                        </div>
                    </div>

{{--                    <div class="mb-3">--}}
{{--                        <label for="courseType" class="form-label">Course Title</label>--}}
{{--                        <select class="form-select" id="courseType" name="course_type" required>--}}
{{--                            <option value="">Select Type</option>--}}
{{--                            <option value="Sick Leave">Global Software Development</option>--}}
{{--                            <option value="Casual Leave">Cloud Computing</option>--}}
{{--                            <option value="Emergency Leave">Economics</option>--}}
{{--                            <option value="Emergency Leave">Foreign language</option>--}}
{{--                            <option value="Emergency Leave">Web Engineering</option>--}}
{{--                            <option value="Emergency Leave">Formal Methods In SE</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

                    <div class="mb-3" align="left">
                        <label for="issueDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="issueDate" name="issue_date" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="reason" class="form-label">Issue/Explaination</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>

{{--                    <div>--}}
{{--                        <div style="margin-bottom: 40px;">--}}
{{--                            <label class="form-label" for="customFile">Add Attachment(Reports,etc):</label>--}}
{{--                            <input type="file" class="form-control" id="customFile" style="width: 300px;margin: auto"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
