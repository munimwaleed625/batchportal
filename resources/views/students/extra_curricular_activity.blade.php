@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>Extra Curricular Activity</h2>

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
                <h4 class="mb-0">Form For Extra Curricular Activity</h4>
            </div>
            <div class="card-body">
{{--                action="{{route('extra_curricular_act.store')}}"--}}
                <form  method="POST" enctype="multipart/form-data" action="{{route('extra_curricular_act.store')}}">
                    @csrf
                    <div class="mb-3" align="left">
                        <label for="full_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="full name">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="roll_no" class="form-label">Roll Number</label>
                        <input type="text" class="form-control" id="roll_no" name="roll_no" required placeholder="roll no">
                    </div>


                    <div class="mb-3" align="left">
                        <label for="act_date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="act_date" name="act_date" required>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="act_time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="act_time" name="act_time">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="activity_type" class="form-label">Select Extra-Curricular Activity Type</label>
                        <select name="activity_type" class="form-select" id="activity_type" required>
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
                        <label for="activity_explained" class="form-label">Expalaination about Activity</label>
                        <textarea class="form-control" id="activity_explained" name="activity_explained" rows="4" required></textarea>
                    </div>


                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

      </div>

@endsection
