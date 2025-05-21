@extends('layout_student')
@section('content')
<div class="content mb-5">
    <h2>I-Grade Application:</h2>
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
                <h4 class="mb-0">I-Grade Application Form</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('grade_i.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" align="left">
                        <label for="full_name" class="form-label" >Student Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" required placeholder="full name">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="roll_no" class="form-label" >Roll Number</label>
                        <input type="text" class="form-control" id="roll_no" name="roll_no" value="{{ old('roll_no') }}" required placeholder="roll no">
                    </div>

                    <div class="mb-3" align="left">
                        <label for="course_type" class="form-label" >Course Title</label>
                        <select class="form-select" id="course_type" name="course_type" required>
                            <option value="">Select Type</option>
                            <option value="gsd" {{ old('course_type') == 'gsd' ? 'selected' : '' }}>Global Software Development</option>
                            <option value="cc" {{ old('course_type') == 'cc' ? 'selected' : '' }}>Cloud Computing</option>
                            <option value="economic" {{ old('course_type') == 'economic' ? 'selected' : '' }}>Economics</option>
                        </select>
                    </div>

                    <div class="mb-3" align="left">
                        <label for="valid_reason" class="form-label">Valid Reason for Absence:</label>
                        <textarea class="form-control" id="valid_reason" name="valid_reason" rows="4" required>{{ old('valid_reason') }}</textarea>
                    </div>

                    <div>
                        <div style="margin-bottom: 40px;">
                            <label class="form-label" for="attachment_i">Add Attachment(Reports,etc):</label>
                            <input type="file" class="form-control" id="attachment_i" name="attachment_i" style="width: 300px;margin: auto">
                            @if ($errors->has('attachment_i'))
                                <small class="text-danger">{{ $errors->first('attachment_i') }}</small>
                            @endif

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
