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
                      <th>S/No</th>
                      <th>First Name</th>
                      <th>Last Names</th>
                      <th>Other Names</th>
                      <th>Gender</th>
                      <th>Email Address</th>
                      <th>Phone Number</th>
                      <th>Birth Date</th>
                      <th>Registered Name</th>
                      <th>Authorised Name</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>Reg. Date</th>
                  </thead>
                 
                  <tbody>
                   @foreach ($data as $data)
                   <tr>
                      <td>{{$loop->index + 1}}</td>
                      <td>{{$data->firstName}}</td>
                      <td>{{$data->lastName}}</td>
                      <td>{{$data->otherName}}</td>
                      <td>{{$data->gender}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->birth}}</td>
                      <td>{{$data->registerName}}</td>
                      <td>{{$data->ar}}</td>
                      <td>{{$data->address}}</td>
                      <td>{{$data->state}}</td>
                      <td>{{$data->country}}</td>
                      <td>{{date('F D Y', strtotime($data->created_at))}}</td>
                    
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
