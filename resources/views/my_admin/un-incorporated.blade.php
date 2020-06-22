@extends('dash.app')
@section('content')


        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All incorporated enterprise</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <th>S/n</th>
                    <th>Full name</th>
                    <th>Email Address</th>
                    <th>Phone No</th>
                    <th>Enterprise name</th>
                    <th>Corporate address</th>
                    <th>Location</th>
                    <th>Enterprise nature</th>
                    <th>Enterprise activity</th>
                    <th>Enterprise category</th>
                    <th>Operation nature</th>
                    <th>Workers number</th>
                    <th>Main product</th>
                    <th>Anual turnover</th>
                    <th>Critical cost</th>
                    <th>Physical challenge</th>
                    <th>Created date</th>
                </thead>
               
                <tbody>
                 @foreach ($enterprises as $enterprise)
                 <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$enterprise->first_name}} {{$enterprise->last_name}}</td>
                    <td>{{$enterprise->email}} </td>
                    <td>{{$enterprise->phone}} </td>
                    <td>{{$enterprise->en_name}} </td>
                    <td>{{$enterprise->cor_address}}</td>
                    <td>{{$enterprise->location}}</td>
                    <td>{{$enterprise->enterprise}}</td>
                    <td>{{$enterprise->core_enterprise}}</td>
                    <td>{{$enterprise->operation}}</td>
                    <td>{{$enterprise->category}}</td>
                    <td>{{$enterprise->num_workers}}</td>
                    <td>{{$enterprise->main_product}}</td>
                    <td>{{$enterprise->anual_turnover}}</td>
                    <td>{{$enterprise->critical_cost}}</td>
                    <td>{{$enterprise->challenge}}</td>
                    <td>{{$enterprise->created_at}}</td>
                 </tr>
                 @endforeach
                  
                
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
  @endsection
