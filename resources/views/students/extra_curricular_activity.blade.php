@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Extra Curricular Activity</h2>

    <div class="container mt-5"  style="width: 950px">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color:#002147">
                <h4 class="mb-0">Form For Extra Curricular Activity</h4>
            </div>
            <div class="card-body">
                <form  method="POST">
                    @csrf
                    <div class="mb-3" align="left">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="student_name" required placeholder="full name">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="rollNumber" class="form-label">Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="roll_number" required placeholder="roll no">
                    </div>


                    <div class="mb-3" align="left">
                        <label for="fromDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="fromDate" name="from_date" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="clashTime" class="form-label">Time</label>
                        <input type="time" class="form-control" id="clashTime">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="activity" class="form-label">Select Extra-Curricular Activity Type</label>
                        <select name="activity" class="form-select" id="activity" required>
                            <option value="">Select</option>
                            <option>Sports</option>
                            <option>Debate</option>
                            <option>Drama</option>
                            <option>Music</option>
                            <option>Art</option>
                            <option>Science Club</option>
                            <option>Robotics</option>
                            <option>Community Service</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="reason" class="form-label">Expalaination about Activity</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>


                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

      </div>

@endsection
