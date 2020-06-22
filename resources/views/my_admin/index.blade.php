  @extends('dash.app')
  @section('content')

  
          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered"  id="example" width="100%" cellspacing="0">
                  <thead>
                      <th>S/n</th>
                      <th>Name</th>
                      <th>Other Names</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>Email Address</th>
                      <th>Account pin</th>
                      <th>Date</th>
                  </thead>
                 
                  <tbody>
                   @foreach ($users as $user)
                   <tr>
                      <td>{{$loop->index + 1}}</td>
                   <td><a href="{{url('/admin/full-user-details', [$user->id])}}">{{$user->first_name}} {{$user->last_name}}</a></td>
                      <td>{{$user->other}}</td>
                      <td>{{$user->gender}}</td>
                      <td>{{$user->phone_number}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->depositors_name}}</td>
                      <td>{{date('F, d, Y', strtotime($user->created_at))}}</td>
                    
                    </tr>
                   @endforeach
                    
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        
      
    @endsection
