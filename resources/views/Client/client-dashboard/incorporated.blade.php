@extends('my_layouts.dash')
@section('content')

  
            <div class="container-fluid">
                <div class="card ">
                <div class="card-body">
                <div id="form-container">
                <form class="col s12" method="POST" action="{{route('send_incorporated')}}">
                 {{ csrf_field() }}
                  <div class="row">
                     <div class="input-field col s4">
                                <input id="en_name" type="text" class="validate" name="en_name">
                                <label for="en_name">Enterprise name</label>
                     </div>
                     <div class="input-field col s4">
                            <input id="rnumber" type="text" class="validate" name="rnumber">
                            <label for="rnumber">Registration number</label>
                       </div>
                      
                        <div class="input-field col s4">
                            <input id="date_registration" type="date" class="datepicker" name="date_registration">
                            <label for="date_registration">Date of registration</label>
                          </div>
                      
                  </div>
                  
                  <div class="row">
                        <div class="input-field col s6">
                                <input id="cooperative" type="text" class="validate" name="cooperative">
                                <label for="cooperative">Corporate address</label>
                           </div>
                  
                    <div class="input-field col s6">
                            <input id="location" type="text" class="validate" name="location">
                            <label for="location">Location*</label>
                      </div>
                  
                
                    </div>
                  
                  <div class="row">
                   
                      <div class="input-field col s4">
                          <select class="mdb-select md-form" name="enterprise">
                              <option value="" disabled selected>Choose your option</option>
                                         <option value="primary production">primary production</option>
                                         <option value="primary processing">primary processing</option>
                                         <option value="secondary processing">secondary processing</option>
                                         <option value="tertiary/support service">tertiary/support service</option>
                                         
                                     </select>
                                     <label for="enterprise">Nature of Enterprise*</label>
                             </div>
                             <div class="input-field col s4">
                                <input id="core_enterprise" type="text" class="validate" name="core_enterprise">
                                <label for="core_enterprise">Core enterprise activity*</label>
                            </div>
                           <div class="input-field col s4">
                          <select class="mdb-select md-form" name="operation">
                              <option value="" disabled selected>Choose your option</option>
                                         <option value="perenial">perenial</option>
                                         <option value="seasonal">seasonal</option>
                                         <option value="casual">casual</option>
                                         
                                         
                                     </select>
                                     <label for="Enterprise size category">Enterprise size category</label>
                            
                            
                  </div>
                  </div>
                  <div class="row">
                   
                          <div class="input-field col s4">
                          <select class="mdb-select md-form" name="category">
                              <option value="" disabled selected>Choose your option</option>
                                         <option value="micro">micro</option>
                                         <option value="small">small</option>
                                         <option value="medium">medium</option>
                                         <option value="medium">large</option>
                                         
                                         
                                     </select>
                                     <label for="operation">Nature of operation</label>
                             </div>
                          
                            <div class="input-field col 4">
                              <input id="num_workers" type="text" class="validate" name="num_workers">
                              <label for="num_workers">Number of workers/s*</label>
                          </div>
                        
                        <div class="input-field col s4">
                          <input id="main_product" type="text" class="validate" name="main_product">
                          <label for="main_product">Main Product/service*</label>
                      </div>
                     
            
                  </div>
                    
                  <div class="row">
                      <div class="input-field col s4">
                          <input id="anual_turnover" type="text" class="validate" name="anual_turnover">
                          <label for="anual_turnover">Estimated anual turnover*</label>
                   </div>
                       <div class="input-field col s4 ">
                            <input id="critical_cost" type="text" class="validate" name="critical_cost">
                            <label for="critical_cost">Critical cost center*</label>
                    </div>
                   
                  </div>
                  
                  <div class="row">
                      
                   
                 <div class="input-field col s4">
                 <select class="mdb-select md-form" name="challenge">
                <option value="" disabled selected>Choose your option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                
            </select>
            <label>Physical challenge</label>    
              </div>    
             </div>
             <button type="submit" class="btn btn-success">SUbmit</button>
              </form>
          </div>
         </div>
      </div>
     </div>

     


   
      

      

 
    
  @endsection
