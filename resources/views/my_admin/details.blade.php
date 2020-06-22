@extends('dash.app')
@section('content')
<style>
img{
  width: 200px;
  height: 200px;
}
</style>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Full Data of User</div>
          <div class="card-body">
              @if ($client)
            <h1 class="lead">Personal info</h1>
            <div class="row">
              <div class="col-md4">
                  <div class="rounder-img">
                      <p>User picture</p>
                      <img class="img-thumbnail img-responsive" src="{{$client->image}}" alt="">
                   </div>
              </div>
              <div class="col-md4">
                  <div class="rounder-img">
                      <p>Means of indentification</p>
                      <img class="img-thumbnail img-responsive" src="{{$client->mi}}" alt="Not a picture">
                   </div>
              </div>
            </div>
           <div class="table-responsive">
                <table class="table table-bordered"  id="example" width="100%" cellspacing="0">          
                    <tr>
                      <th>First name</th>
                      <th>Last  name</th>
                      <th>Other name</th>
                      <th>Phone number</th>
                      <th>Email address</th>
                      <th>marital status</th>
                      <th>Nationality</th>
                      <th>State</th>
                    </tr>
                   
                   
                     
                        <tr>
                          <td>{{$client->first_name}} </td>
                          <td>{{$client->last_name}}</td>
                          <td>{{$client->other_name}}</td>
                          <td>{{$client->phone_number}}</td>
                          <td>{{$client->email}}</td>
                          <td>{{$client->marital}}</td>
                          <td>{{$client->nation}}</td>
                          <td>{{$client->state}} </td>
                        </tr>
                        <tr>
                          <th>Date birth</th>
                          <th>Lga</th>
                          <th>Indentification No.</th>
                          <th>BVN</th>
                          <th>House  size</th>
                          <th>Physical challenge</th>
                          <th>Institution</th>
                          <th>Year</th>
                        </tr>
                  <tr>
                    <td>{{$client->date_birth}} </td>
                    <td>{{$client->lga}}</td>
                    <td>{{$client->in}}</td>
                    <td>{{$client->bvn}}</td>
                    <td>{{$client->size}}</td>
                    <td>{{$client->challenge}}</td>
                    <td>{{$client->institution}} </td>
                    <td>{{$client->year_ob}}</td>
             
                  </tr>
                
            <tr>
            
              <th>Previous</th>
              <th>Current </th>
              <th> name</th>
              <th> nature</th>
              <th> address</th>
              <th> number</th>
              <th> email</th>
              <th>Country obtained</th>
            </tr>
             
              <tr>
                <td>{{$client->po}}</td>
                <td>{{$client->co}}</td>
                <td>{{$client->cname}}</td>
                <td>{{$client->cnature}}</td>
                <td>{{$client->caddress}}</td>
                <td>{{$client->rnumber}}</td>
                <td>{{$client->remail}}</td>
                <td>{{$client->institution_ob }}</td>
              
              </tr>
            </table>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered"  id="example" width="100%" cellspacing="0">
             <h1 class="lead">next of kin</h1>
                <thead>
                    <th>Full name</th>
                    <th>Relationship</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone number</th>
                </thead>
               
                <tbody>
                 
                  <tr>
                  
                    <td>{{$client->full_name}} </td>
                    <td>{{$client->relationship}}</td>
                    <td>{{$client->kin_address }}</td>
                    <td>{{$client->kin_email}}</td>
                    <td>{{$client->kin_phone}}</td>
                    
                   </tr>  
                 
                  
                
                </tbody> 
              </table>
           
          
          </div>
          @else
            <h1 class="lead">Account was not  updated</h1>      
          @endif


          @if ($loan)
          <div class="table-responsive">
              <h1 class="lead">Credit info</h1>
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                    <th>Project name</th>
                    <th>Primary commodity</th>
                    <th>Asso commodities</th>
                    <th>Buyers pros</th>
                    <th>Buyers exsistance</th>
                    <th>Suppliers pros</th>
                    <th>Suppliers exsistance</th>
                </thead>
               
                <tbody>
                 
                  <tr>
                  
                    <td>{{$loan->project_name}} </td>
                    <td>{{$loan->pri_commodity}}</td>
                    <td>{{$loan->asso_commodities }}</td>
                    <td>{{$loan->b_prospective}}</td>
                    <td>{{$loan->b_existing}}</td>
                    <td>{{$loan->s_prospective}}</td>
                    <td>{{$loan->s_existing}}</td>
                    
                   </tr>  
                 
                  
                
                </tbody>
              </table>
           
          
          </div>
            @else
         <h1 class="lead">No credit details</h1>
          @endif

          @if($enterprise)
          <div class="table-responsive">
            <h1 class="lead">Incorporate Enterprise</h1>
            <table class="table table-bordered"  width="100%"  cellspacing="0">
              <thead>
                  <th>Enterprise name</th>
                  <th>Registration number</th>
                  <th>Registration date</th>
                  <th>Corporate address</th>
                  <th>Location</th>
                  <th>Nature of enterprise</th>
                  <th>Core enterprise activity</th>
              </thead>
             
              <tbody>
               
                <tr>
                  <td>{{$enterprise->en_name}} </td>
                  <td>{{$enterprise->rnumber}}</td>
                  <td>{{$enterprise->date_r}}</td>
                  <td>{{$enterprise->cor_address}}</td>
                  <td>{{$enterprise->location}}</td>
                  <td>{{$enterprise->enterprise}}</td>
                  <td>{{$enterprise->core_enterprise}}</td>
                 </tr>  

                 <thead>
                  <th>Enterprise category</th>
                  <th>Nature of operation</th>
                  <th>Number of workers</th>
                  <th>Main product</th>
                  <th>Estimated anual turnover</th>
                  <th>Critical cost center</th>
                  <th>Physical challenge</th>
              </thead>
              <tr>
                <td>{{$enterprise->operation}}</td>
                  <td>{{$enterprise->category}}</td>
                  <td>{{$enterprise->num_workers}}</td>
                  <td>{{$enterprise->main_product}}</td>
                  <td>{{$enterprise->anual_turnover}}</td>
                  <td>{{$enterprise->critical_cost}}</td>
                  <td>{{$enterprise->challenge}}</td>
              </tr>
               
                
              
              </tbody>
            </table>
         
          </div> 
            @else
            <h1 class="lead"> No incorporate enterprise details</h1>
                
           
          @endif
       

          @if($enterpriseu)
          <div class="table-responsive">
            <h1 class="lead">Unincorporate Enterprise</h1>
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                  <th>Propose enterprise name</th>
                  <th>Corporate address</th>
                  <th>Location</th>
                  <th>Nature of enterprise</th>
                  <th>Core enterprise activity</th>
                  <th>Enterprise category</th>
              </thead>
             
              <tbody>
               
                <tr>
                
                  <td>{{$enterpriseu->en_name}} </td>
                  <td>{{$enterpriseu->cor_address}}</td>
                  <td>{{$enterpriseu->location}}</td>
                  <td>{{$enterpriseu->enterprise}}</td>
                  <td>{{$enterpriseu->core_enterprise}}</td>
                  <td>{{$enterpriseu->category}}</td>
                  
                 </tr> 

                <thead>
                  <th>Nature of operation</th>
                  <th>Number of workers</th>
                  <th>Main product</th>
                  <th>Estimated anual turnover</th>
                  <th>Critical cost center</th>
                  <th>Physical challenge</th>
              </thead>
              <tr>
                <td>{{$enterpriseu->operation}}</td>
                <td>{{$enterpriseu->num_workers}}</td>
                <td>{{$enterpriseu->main_product}}</td>
                <td>{{$enterpriseu->anual_turnover}}</td>
                <td>{{$enterpriseu->critical_cost}}</td>
                <td>{{$enterpriseu->challenge}}</td>
              </tr>
               
            </tbody>
          </table>
       
        </div>  
          @else
          <h1 class="lead"> No Unincorporate enterprise details</h1>
        @endif
      </div>
    </div>
    


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @endsection
