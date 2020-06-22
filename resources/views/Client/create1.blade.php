@extends('my_layouts.dash')
@section('content')
@if ($clients != null)
<h1 class="lead">Account has been updated</h1>
@else
<div class="container-fluid">
        <p class="lead"><span>ACTA</span> Agricultural Commodities  <br> Transafrican Alliance.</p>
         <div class="card ">
         <div class="card-body">
         <div id="form-container">
         <form class="col s12" action="{{route('create-clients')}}" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}
           <div class="row">
               <div class="file-field input-field">
                   <div class="btn">
                       <span>File</span>
                       <input type="file" name="image">
                     </div>
                     <div class="file-path-wrapper">
                       <input class="file-path validate" placeholder="Upload user picture" type="text">
                 </div>
           </div>
           </div>
           <div class="row">
             <div class="input-field col s12 col m4">
               <input id="nationality" type="text" class="datepicker" name="date_birth">
                 <label for="nationality">Date of birth*</label>
             </div>
             <div class="input-field s12 col m4">
                 <input id="lga" type="text" class="validate" name="lga">
                 <label for="lga">LGA*</label>
               </div>
               <div class="file-field input-field s12 col m4">
                   <div class="btn">
                       <span>File</span>
                       <input type="file" name="mi">
                     </div>
                     <div class="file-path-wrapper">
                       <input class="file-path validate" type="text" placeholder="Means of identification">
                 </div>
             </div>
           </div>
           <div class="row">
               <div class="input-field col s3">
                 <input id="IN" type="text" class="validate" name="in">
                 <label for="IN">Identification Number*</label>
                </div>
              <div class="input-field col s3">
               <input id="bvn" type="text" class="validate" name="bvn">
               <label for="bvn">Bank verification number*</label>
               </div>
                 <div class="input-field col s3">
                     <input id="house_size" type="text" class="validate" name="size">
                      <label for="house_size">Household Size*</label>
                 </div>
                 <div class="input-field col s3">
                     <select class="mdb-select md-form" name="challenge">
                         <option value="" disabled selected>Choose your option</option>
                         <option value="yes">Yes</option>
                         <option value="no">No</option>
                         
                     </select>
                     <label>Physical challenge</label>  
                </div>
           </div>
           <p class="lead">Next of kin information</p>
           <div class="row">
          <div class="input-field col s4">
                 <input id="full_name" type="text" class="validate" name="full_name">
               <label for="full_name">Full Name</label>
           </div>
             <div class="input-field col s4">
              <select class="mdb-select md-form" name="relationship">
                      <option value="" disabled selected>Choose your option</option>
                                 <option value="son">son</option>
                                 <option value="daughter">Daughter</option>
                                 <option value="mother">Mother</option>
                                 <option value="father">Father</option>
                                 <option value="wife">Wife</option>
                                 <option value="husband">Husband</option>
                                 <option value="sister">Sister</option>
                                 <option value="brother">Brother</option>
                                 <option value="collegue">Collegue</option>
                                 <option value="friend">Friend</option>
                                 
                </select>
                <label for="status">Relationship*</label>
             </div>
             <div class="input-field col s4">
                     <input id="address" type="text" class="validate" name="kin_address">
                     <label for="address">Adddress*</label>
               </div>
             </div>
           <div class="row">
              <div class="input-field col s6">
                  <input id="phone" type="text" class="validate" name="kin_phone">
                  <label for="phone">Phone Number*</label>
             </div>
             <div class="input-field col s6">
             <input id="kin_email" type="email" class="validate" name="kin_email">
             <label for="kin_email">Email Address</label>
              </div>
             </div>
             
           <p class="lead">Highest Qualification</p>
           <div class="row">
                 <div class="input-field col s4">
                         <input id="institution_name" type="text" class="validate" name="institution_name">
                         <label for="institution_name">Institution Name</label>
                 </div>
               <div class="input-field col s4">
                   <input id="year_obtained" type="date" class="datepicker" name="year_obtained">
                   <label for="year_obtained">Year Obtained</label>
                 </div>
                 <div class="input-field col s4">
                     <input id="institution_obtained" type="text" class="validate" name="institution_obtained">
                     <label for="institution_obtained">Country</label>
                  </div>
           </div>
           <p class="lead">Work Experience</p>
           <div class="row">
               <div class="input-field col s6">
                   <input id="pc" type="text" class="validate" name="po">
                   <label for="pc">Previous Occupation*</label>
              </div>
              <div class="input-field col s6">
                 <input id="co" type="text" class="validate" name="co">
                 <label for="phone">Current Occupation*</label>
            </div>
           </div>
           <p class="lead">Co-operative Society</p>
           <div class="row">
               <div class="input-field col s4">
                   <input id="cn" type="text" class="validate" name="cname">
                   <label for="cn">cooperative name*</label>
              </div>
              <div class="input-field col s4">
                 <input id="cn" type="text" class="validate" name="cnature">
                 <label for="cn">Cooperative nature*</label>
            </div>
            <div class="input-field col s4">
               <input id="ca" type="text" class="validate" name="caddress">
               <label for="ca">cooperative address*</label>
            </div>
           </div>
           <p class="lead">Principal Represnentative</p>
           <div class="row">
               <div class="input-field col s4">
                   <input id="rn" type="text" class="validate" name="rnumber">
                   <label for="rn">Represnentative name*</label>
              </div>
     
                
              <div class="input-field col s4">
                 <input id="remail" type="email" class="validate" name="remail">
                 <label for="remail">Representative email*</label>
            </div>
         
          
      </div>
      <button type="submit" class="btn btn-success">Save a User</button>
       </form>
    </div>
    </div>
    </div>
    </div>

@endif 

@stop