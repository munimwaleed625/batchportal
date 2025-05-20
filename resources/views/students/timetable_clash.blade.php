@extends('layout_student')
@section('content')
    <div class="content mb-5">
    <h2>TimeTable Clash:</h2>

        <div class="container mt-5"  style="width: 950px">
            <div class="card shadow">
                <div class="card-header text-white" style="background-color:#002147">
                    <h4 class="mb-0" style="font-weight: bold">TimeTable Clash Issue</h4>
                </div>
                <div class="card-body">
                    <form  method="POST">
                        @csrf
                            <div class="mb-3" align="left">
                                <label for="studentName" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="studentName" placeholder="Full Name">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="rollNumber" class="form-label">Roll Number</label>
                                <input type="text" class="form-control" id="rollNumber" placeholder="roll no">
                            </div>

                            <div class="mb-3" align="left">
                                <label for="course1" class="form-label">First Course Title</label>
                                <input type="text" class="form-control" id="course1" placeholder="First course name">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="course2" class="form-label">Second Course Title</label>
                                <input type="text" class="form-control" id="course2" placeholder="Second course name">
                            </div>

                            <div class="mb-3" align="left">
                                <label for="clashDate" class="form-label">Clash Date</label>
                                <input type="date" class="form-control" id="clashDate">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="clashTime" class="form-label">Clash Time</label>
                                <input type="time" class="form-control" id="clashTime">
                            </div>

                        <div class="mb-3" align="left">
                            <label for="reason" class="form-label">Brief Description of Clash</label>
                            <textarea class="form-control" id="reason" rows="3" placeholder="Explain the issue..."></textarea>
                        </div>

{{--                        <div class="mb-3">--}}
{{--                            <label for="evidence" class="form-label">Attach Screenshot or Evidence (optional)</label>--}}
{{--                            <input type="file" class="form-control" id="evidence">--}}
{{--                        </div>--}}

                        <div>
                            <div style="margin-bottom: 40px;">
                                <label class="form-label" for="evidence">Attach Screenshot or Evidence (optional)</label>
                                <input type="file" class="form-control" id="evidence" style="width: 300px;margin: auto"/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>


  </div>
@endsection
