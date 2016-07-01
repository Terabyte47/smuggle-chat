@extends('templates.default')
@section('content')

    <!-- Most rated block -->            
    <h2 class="title text-center">Most Rated</h2>
			@foreach($users as $user)
    			@include('home.most-rated')
			@endforeach

	<!-- New comers -->
		

	<!-- Recommended -->
 @stop