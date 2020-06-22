@extends('dash.app')
@section('content')


        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Messages sent</div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="example" width="100%" id="printableTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>S/n</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created Date</th>
                        
                      </tr>
                </thead>
                <tfoot>
                <tbody>
                 @foreach ($messages as $message)
                 <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{$message->created_at}}</td>
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

  @endsection
