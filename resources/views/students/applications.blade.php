@extends('layout_student')
@section('content')
<div class="content">
    <h2>Applications</h2>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Leave Application Form</h4>
            </div>
            <div class="card-body">
              <form  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="student_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="rollNumber" class="form-label">Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="roll_number" required>
                    </div>

                    <div class="mb-3">
                        <label for="leaveType" class="form-label">Leave Type</label>
                        <select class="form-select" id="leaveType" name="leave_type" required>
                            <option value="">Select Type</option>
                            <option value="Sick Leave">Sick Leave</option>
                            <option value="Casual Leave">Casual Leave</option>
                            <option value="Emergency Leave">Emergency Leave</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fromDate" class="form-label">From Date</label>
                        <input type="date" class="form-control" id="fromDate" name="from_date" required>
                    </div>

                    <div class="mb-3">
                        <label for="toDate" class="form-label">To Date</label>
                        <input type="date" class="form-control" id="toDate" name="to_date" required>
                    </div>

                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason for Leave</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit Application</button>
                </form>
            </div>
        </div>
    </div>

@endsection


{{--    action="{{ route('leave.submit') --}}
