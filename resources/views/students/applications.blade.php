@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Application:</h2>

    <div class="container mt-5"  style="width: 950px">
        @if ($errors->any())<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            @if(session('success'))
                <div class="alert alert-success">
                    <ul class="close">
                        <li>
                            {{session('success')}}
                            <span aria-hidden="true" style="cursor:pointer; float:right;" title="click to close this iFrame">
                                <span >&times;</span>
                            </span>
                        </li>
                    </ul>
                </div>
            @endif
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0">Leave Application Form</h4>
            </div>
            <div class="card-body">
{{--                action="{{route('applications.store')}}"--}}
              <form method="post" action="{{route('application.store')}}">
                    @csrf
                    <div class="mb-3" align="left">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="full name">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="rollNumber" class="form-label">Roll Number</label>
                        <input type="text" class="form-control" id="roll_no" name="roll_no" required placeholder="roll no">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="leaveType" class="form-label">Leave Type</label>
                        <select class="form-select" id="leave_type" name="leave_type" required>
                            <option value="">Select Type</option>
                            <option value="sick_leave">Sick Leave</option>
                            <option value="casual_leave">Casual Leave</option>
                            <option value="emergency_leave">Emergency Leave</option>
                        </select>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="fromDate" class="form-label">From Date</label>
                        <input type="date" class="form-control" id="from_date" name="from_date" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="toDate" class="form-label">To Date</label>
                        <input type="date" class="form-control" id="toDate" name="to_date" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="reason" class="form-label">Reason for Leave</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>

                 <div>
                     <div style="margin-bottom: 40px;">
                         <label class="form-label" for="attachment">Add Attachment:</label>
                         <input type="file" class="form-control" id="attachment" name="attachment" style="width: 300px;margin: auto"/>
                     </div>
                 </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
