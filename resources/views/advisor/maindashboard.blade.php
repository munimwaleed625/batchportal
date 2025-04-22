@extends('layout')
@section('content') 
    <div class="content">
        <h2>Dashboard</h2>
        <div class="row mb-4">
          
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">Applications</div>
                <div class="card-body">
                  <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-primary">Leave: 0</span>
                    <span class="badge bg-info">Incomplete: 0</span>
                    <span class="badge bg-warning">Incomplete: 0</span>
                    <span class="badge bg-secondary">Incomplete: 0</span>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                  <div class="card-header">Manage Students</div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">abc <span class="badge bg-primary rounded-pill">0</span></li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">abc <span class="badge bg-primary rounded-pill">0</span></li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">abc <span class="badge bg-primary rounded-pill">0</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <h5>Conflicts</h5>
                    <table class="table table-bordered">
                        <tr><td>New Complaints</td><td>1</td></tr>
                        <tr><td>Complaints Pending</td><td>2</td></tr>
                        <tr><td>Complaints Reviewed</td><td>3</td></tr>
                        <tr><td>Conflicts Resolved</td><td>4</td></tr>
                        <tr><td>Complaints Forwarded</td><td>5</td></tr>
                        <tr><td>In-Process Complaints</td><td>6</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection