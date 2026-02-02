@extends('layout')
@section('content')
<div class="content">
    <h2>Applications</h2>

    <div class="container my-5 d-flex justify-content-center">
        <div class="w-75">

          <div class="card shadow-sm rounded">
            <div class="card-body">
              <h6 class="fw-bold mb-3">Search</h6>
              <form class="row g-2 align-items-center justify-content-center">
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Reg No">
                </div>
                <div class="col-md-3 text-md-end">
                  <button type="submit" class="btn px-4" style="background-color: #003366; color: white; border: none;">
                    Search
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <div class="container my-4 d-flex justify-content-center">
        <div class="w-100">
            <div class="card shadow-sm rounded">
                <div class="card-header text-white text-center fw-bold" style="background-color: #002147;">
                    Applications Table
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle text-center">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Reg No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Leave Type</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Attachment</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($applications as $index => $application)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ \Carbon\Carbon::parse($application['created_at'])->format('Y-m-d H:i') }}</td>
                                    <td>{{ $application['roll_no'] }}</td>
                                    <td>{{ $application['full_name'] }}</td>
                                    <td class="text-capitalize">{{ str_replace('_', ' ', $application['leave_type']) }}</td>
{{--                                    <td style="max-width: 250px; word-wrap: break-word; white-space: normal;">--}}
{{--                                        {{ $application['reason'] }}--}}
{{--                                    </td>--}}
                                    <td style="max-width: 250px; word-wrap: break-word;">
                                        <span id="reason-short-{{ $loop->index }}">
                                            {{ \Illuminate\Support\Str::limit($application['reason'], 50) }}
                                            @if(strlen($application['reason']) > 50)
                                                <a href="javascript:void(0);" class="text-primary" onclick="toggleReason({{ $loop->index }})">More</a>
                                            @endif
                                        </span>
                                                                            <span id="reason-full-{{ $loop->index }}" style="display: none;">
                                            {{ $application['reason'] }}
                                            <a href="javascript:void(0);" class="text-danger" onclick="toggleReason({{ $loop->index }})">Less</a>
                                        </span>
                                    </td>

                                    <td>
                                        @if($application['attachment'])
                                            <a href="{{ asset('storage/'.$application['attachment']) }}" target="_blank">View</a>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Add your action buttons here -->
                                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-muted">No applications found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleReason(index) {
            const shortText = document.getElementById('reason-short-' + index);
            const fullText = document.getElementById('reason-full-' + index);

            if (shortText.style.display === 'none') {
                shortText.style.display = 'inline';
                fullText.style.display = 'none';
            } else {
                shortText.style.display = 'none';
                fullText.style.display = 'inline';
            }
        }
    </script>


@endsection


