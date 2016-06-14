@extends('templates.profile')
@section('content')
<h2 class="title text-center">Manage Profile</h2>
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="../images/home/download.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="{{$user->firstname}}" src="{{$user->getAvatarURL()}}">
        </div>
        <div class="card-info"> <span class="card-title">{{$user->getFirstname()}}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" id="tab_buttons" role="group">
            <button type="button" id="personal" class="btn btn-info" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
                <div class="hidden-xs">Personal</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="location" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-map-marker" aria-hidden="true"></span>
                <div class="hidden-xs">Location</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="social" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-gamepad" aria-hidden="true"></span>
                <div class="hidden-xs">Social</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <!-- Personal information -->
         
			  <form role="form" class="form-horizontal">
			  	<div class="col-sm-12 set-boader">
			  	<div class="col-sm-6">
				  	<div class="form-group">
				      <div class="col-sm-12"><label>First name</label><input type="text" class="form-control" placeholder="First"></div>
				    </div>

				    <div class="form-group">
				    <div class="col-sm-12"><label>Last name</label><input type="text" class="form-control" placeholder="Last"></div>
				    </div>

				    <div class="form-group">
				      <div class="col-sm-6"><label>Email</label><input type="text" class="form-control" placeholder="First"></div>
				      <div class="col-sm-6"><label>Phone</label><input type="text" class="form-control" placeholder="Last"></div>
				    </div>

				<div class="form-group">
			      <div class="col-sm-12">
			      	<label>Date of Birth</label><input type="text" class="form-control" placeholder="First">
			      </div>
			    </div>

				    <div class="form-group">
				      <div class="col-sm-6">
				      	<label>Gender</label>
				      	<select>
				      		<option value="">Select Gender</option>
				      		<option value="Female">Female</option>
				      		<option value="Nale">Male</option>	
				      		<option value="Other">Other</option>	
				      	</select> 
				      	</div>
				      <div class="col-sm-6">
				      	<label>Nationality</label>
				      	<select>
				      		<option value="">Select Nationality</option>
				      		<option value="African">African</option>
				      		<option value="Colored">Colored</option>	
				      		<option value="Indian">Indian</option>	
				      		<option value="White">White</option>	
				      		<option value="Other">Other</option>	
				      	</select> 
				      </div>
				    </div>

			    
			  	</div>



			  	<div class="col-sm-6">
			  	<div class="text-center">
		          <img src="{{$user->getAvatarURL()}}" width="100" height="100" class="avatar img-circle" alt="avatar">
		          <h6>profile picture</h6>
		          
		          <button type="file" class="btn btn-primary "><i class="fa fa-upload"></i> Upload</button>
		        </div>

			  	<div>&nbsp;</div>

			    <div class="form-group">
			      <label class="col-sm-12" for="TextArea">Description <small>(About yourself)</small></label>
			      <div class="col-sm-12"><textarea rows="7" class="form-control" id="TextArea"></textarea></div>
			    </div>
			  	</div>
			 

			 
			   
			    <div class="form-group">
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary pull-right" style="margin-right: 18px;"><i class="fa fa-save"></i> Save</button>
			      </div>
			    </div>

			   </div>
			  </form>
			  <hr>

        </div> <!-- End of personal tab -->

        <!-- Location Tab  -->
        <div class="tab-pane fade in" id="tab2">
           <form role="form" class="form-horizontal">
			  	<div class="col-sm-12 set-boader">
			  	<div class="col-sm-6">
				  	

				    <div class="form-group">
				      <div class="col-sm-12"><label>Street Name <small>(3rd Avenue)</small></label><input type="text" class="form-control" placeholder="First"></div>
				    </div>

				    <div class="form-group">
				    <div class="col-sm-12"><label>City <small>(Johannesburg)</small></label><input type="text" class="form-control" placeholder="Last"></div>
				    </div>
			  	</div>



			  	<div class="col-sm-6">
			  		 <div class="form-group">
				      <div class="col-sm-12"><label>Location/Suburb <small>(Midrand)</small></label><input type="text" class="form-control" placeholder="First"></div>
				    </div>

				     <div class="form-group">
				    <div class="col-sm-12"><label>Province <small>(Gauteng)</small></label><input type="text" class="form-control" placeholder="Last"></div>
				    </div>

			  	</div>
			 

			 
			   
			    <div class="form-group">
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary pull-right" style="margin-right: 18px;"><i class="fa fa-save"></i> Save</button>
			      </div>
			    </div>

			   </div>
			  </form>
        </div> <!-- End of Location -->

        <!-- Social information -->
        <div class="tab-pane fade in" id="tab3">
          <form role="form" class="form-horizontal">
			  	<div class="col-sm-12 set-boader">
			  	<div class="col-sm-6">
				  	

				    <div class="form-group">
				      <div class="col-sm-12"><label>Sport <small>(chess)</small></label><input type="text" class="form-control" placeholder="First"></div>
				    </div>


				    <div class="form-group">
				      <label class="col-sm-12" for="TextArea">Interests <small>(movies)</small></label>
				      <div class="col-sm-12"><textarea rows="7" class="form-control" id="TextArea"></textarea></div>
			    	</div>
			  	</div>



			  	<div class="col-sm-6">
			  		<div class="form-group">
				    <div class="col-sm-12"><label>Music <small>(rock)</small></label><input type="text" class="form-control" placeholder="Last"></div>
				    </div>

				     <div class="form-group">
				      <label class="col-sm-12" for="TextArea">Hobbies <small>(skating)</small></label>
				      <div class="col-sm-12"><textarea rows="7" class="form-control" id="TextArea"></textarea></div>
			    	</div>

			  	</div>
			 

			 
			   
			    <div class="form-group">
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-primary pull-right" style="margin-right: 18px;"><i class="fa fa-save"></i> Save</button>
			      </div>
			    </div>

			   </div>
			  </form>
        </div>
      </div>
    </div>
    
    </div>
<script type="text/javascript">
    $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
  
@stop