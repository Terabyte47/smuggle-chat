@extends('templates.default')

@section('content')
<section id="form"><!--form-->
	<div><h2 class="title text-center">Create Account</h2></div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>New User Signup!</h2>
						<form method="POST" action="{{route('createUser')}}">
						<div class="form-group">
							<input type="text" name="firstname" placeholder="Name" value="{{old('firstname')}}" />
							@if($errors->has('firstname'))
								<span class="help-block">{{$errors->first('firstname')}}</span>
							
							@endif
						</div>
							<!-- <input type="text" name="lastname" placeholder="Surname" value="{{old('lastname')}}" />
							@if($errors->has('lastname'))
								<span class="help-block">{{$errors->first('lastname')}}</span>
							
							@endif
							<select name="gender">
								<option value="{{old('gender')}}">Select Gender</option>
								<option value="Female">Female</option>
								<option  value="Male">Male</option>
							</select>
							@if($errors->has('gender'))
								<span class="help-block">{{$errors->first('gender')}}</span>
							
							@endif
							<div>&nbsp;</div>
							<input type="text" name="mobile" placeholder="Phone Number" value="{{old('mobile')}}"/>
							@if($errors->has('mobile'))
								<span class="help-block">{{$errors->first('mobile')}}</span>
							
							@endif -->
						<div class="form-group{{ $errors->has('email' ? ' has error'
						: '')}} ">
							<input type="email" name="email" placeholder="Email Address" value="{{old('email')}}" />
							@if($errors->has('email'))
								<span class="help-block">{{$errors->first('email')}}</span>
							
							@endif
						</div>
						<!-- <div class="form-group">
						<label style="color: #999;">Physical Address</label>
						<textarea placeholder= "Address" name="physical_address" value="{{old('physical_address')}}" cols="10" rows="5"> 
						</textarea>
						@if($errors->has('physical_address'))
								<span class="help-block">{{$errors->first('physical_address')}}</span>
							
							@endif
						</div> -->
							<input type="password" name="password" placeholder="Password"/>
							@if($errors->has('password'))
								<span class="help-block">{{$errors->first('password')}}</span>
							
							@endif
							<input type="password" name="confirm_password" placeholder="Cornfirm Password"/>
							@if($errors->has('confirm_password'))
								<span class="help-block">{{$errors->first('confirm_password')}}</span>
							
							@endif
							<button type="submit" class="btn btn-default">Signup</button>
							<input type="hidden" name=" _token" value="{{Session::token()}}"></input>
						</form>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section>
<style type="text/css">
	input[type="password"]{
  border: 1px #ccc solid;
}
</style>
@stop