@extends('my_layouts.dash')
@section('content')
            <div class="container-fluid">
                <div class="card ">
                <div class="card-body">
                <div id="form-container">
                <form class="col s12" method="POST" action="{{route('users-loan')}}">
                    {{ csrf_field() }}
                  <div class="row">

                      <div class="input-field col s4">
                          <input id="project_name" type="text" class="validate" name="project_name">
                          <label for="project_namer">Project name</label>
                     </div>
                     <div class="input-field col s4">
                        <input id="pri_commodity" type="text" class="validate" name="pri_commodity">
                        <label for="pri_commodity">Primary commodity</label>
                     </div>
                     
                  </div>

                  <div class="row">
                        <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"  name="asso_commodities"></textarea>
                                <label for="textarea1" class='active'>Associated commoditeis</label>
                        </div>
                  </div>
                  <div> <h2 class="lead">Buyers</h2></div>
                  <div class="row">
                       
                 
                    <div class="input-field col s6">
                            <input id="b_prospective" type="text" class="validate" name="b_prospective">
                            <label for="b_prospective">Buyers Prospective*</label>
                      </div>
                  
                
                     <div class="input-field col s6">
                      <input id="b_existing" type="text" class="validate" name="b_existing">
                      <label for="b_existing">Buyers existing*</label>
                     </div>
                    </div>

                    <div> <h2 class="lead">Suppliers</h2></div>
                  <div class="row">

                        <div class="input-field col s6">
                                <input id="s_prospective" type="text" class="validate" name="s_prospective">
                                <label for="s_prospective">Suppliers Prospective*</label>
                          </div>
                      
                    
                         <div class="input-field col s6">
                          <input id="s_existing" type="text" class="validate" name="s_existing">
                          <label for="s_existing">Suppliers existing*</label>
                         </div>
                  </div>

                  <div class="row">
                        <div class="input-field col s12">
                                <textarea id="textarea2" class="materialize-textarea" name="pri_activities"></textarea>
                                <label for="textarea2" class='active'>Primary Activities</label>
                        </div>
                  </div>
                  
                
             <button type="submit" class="btn btn-success">Ask for credit</button>
              </form>
          </div>
         </div>
      </div>
     </div>
     


   
      

      

 
    
  @endsection
