@extends('dash.app')
@section('content')


        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header" >
            <i class="fas fa-table"></i>
          Messages sent</div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" id="printableTable" cellspacing="0">
                <thead>
                    <tr>
                            <th>S/N</th>
                            <th>User name</th>
                            <th>User gender</th>
                            <th>User phone</th>
                            <th>Project name</th>
                            <th>Primary commodity</th>
                            <th>Associated commodities</th>
                            <th>Buyers prospective</th>
                            <th>Buyers exsistance</th>
                            <th>Suppliers prospective</th>
                            <th>Suppliers exsistance</th>
                            <th>Date</th>
                        
                      </tr>
                </thead>
                
                <tbody>
                 @foreach ($loans as $loan)
                 <tr>
                     <td>{{$loop->index + 1}}</td>
                    <td>{{$loan->first_name}} {{$loan->last_name}}</td>
                    <td>{{$loan->gender}}</td>
                    <td>{{$loan->phone}}</td>
                    <td>{{$loan->project_name}}</td>
                    <td>{{$loan->pri_commodity}}</td>
                    <td>{{$loan->asso_commodities}}</td>
                    <td>{{$loan->b_prospective}}</td>
                    <td>{{$loan->b_existing}}</td>
                     <td>{{$loan->s_prospective}}</td>
                     <td>{{$loan->s_existing}}</td>
                     <td>{{$loan->created_at}}</td>
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
