<div class="media">
	<a class="pull-left" href="{{route('dashboard', ['firstname' =>$user->firstname])}}">
		<img alt="{{$user->getFirstname()}}" src="{{$user->getAvatarURL()}}" class="media-object">
	</a>

	<div class="media-body">
		<h4 class="media-heading"><a href="{{route('dashboard', ['firstname' =>$user->firstname])}}">{{$user->getFirstname()}}</a></h4>
		@if($user->location)
			<p>$user->location</p>
		@endif
	</div>
</div>	
