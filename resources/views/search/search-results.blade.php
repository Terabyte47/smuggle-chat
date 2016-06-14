@extends('templates.default')
@section('content')
	<h3>Results for "{{Request::input('query')}}"</h3>
	
	@if(!$users->count())
		<p>No Results Found</p>

		@else
		<div class="row">
			<div class="col-sm-6">
			
			@foreach($users as $user)
				@include('templates.partials.user-block')
			@endforeach
			</div>
		</div>
	@endif

@stop