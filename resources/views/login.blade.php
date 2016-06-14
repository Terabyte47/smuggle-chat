@extends('templates.default')

@section('content')
<section id="form"><!--form-->

		<div><h2 class="title text-center">Sign in</h2></div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Log in to your account</h2>
						<form method="POST" action="{{route('loginUser')}}">
							<input type="email" name="email" placeholder="Email Address" value="{{old('email')}}" />
							@if($errors->has('email'))
								<span class="help-block">{{$errors->first('email')}}</span>
							
							@endif

							<input type="password" name="password" placeholder="Password" />
							@if($errors->has('password'))
								<span class="help-block">{{$errors->first('password')}}</span>
							
							@endif
							<span>
								<input type="checkbox" name="remeber" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
							<input type="hidden" name="_token" value="{{Session::token()}}"></input>
						</form>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section><!--/form-->

@stop