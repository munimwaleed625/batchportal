@extends('layout_student')
@section('content')
    <div class="content mb-5">
    <h2>TimeTable Clash:</h2>
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
                    <h4 class="mb-0" style="font-weight: bold">TimeTable Clash Issue</h4>
                </div>
                <div class="card-body">
{{--                    action="{{route('timetable_clashs.store')}}"--}}
                    <form  method="POST" enctype="multipart/form-data" action="{{route('timetable_clash.store')}}">
                        @csrf
                            <div class="mb-3" align="left">
                                <label for="full_name" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="roll_no" class="form-label">Roll Number</label>
                                <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="roll no">
                            </div>

                            <div class="mb-3" align="left">
                                <label for="first_course" class="form-label">First Course Title</label>
                                <input type="text" class="form-control" id="first_course" name="first_course" placeholder="First course name">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="second_course" class="form-label">Second Course Title</label>
                                <input type="text" class="form-control" id="second_course" name="second_course" placeholder="Second course name">
                            </div>

                            <div class="mb-3" align="left">
                                <label for="clash_date" class="form-label">Clash Date</label>
                                <input type="date" class="form-control" id="clash_date" name="clash_date">
                            </div>
                            <div class="mb-3" align="left">
                                <label for="clash_time" class="form-label">Clash Time</label>
                                <input type="time" class="form-control" id="clash_time" name="clash_time">
                            </div>

                        <div class="mb-3" align="left">
                            <label for="description_clash" class="form-label">Brief Description of Clash</label>
                            <textarea class="form-control" id="description_clash" name="description_clash" rows="3" placeholder="Explain the issue..."></textarea>
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
