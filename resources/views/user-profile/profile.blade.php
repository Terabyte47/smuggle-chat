@extends('templates.profile')
@section('content')
	
<div class="container">
<div class="row">
<!-- code start -->
<div class="twPc-div">
    <a class="twPc-bg twPc-block"></a>

	<div id="pp-holder">
		<div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
            <button type="submit" class="btn btn-primary" ><i class="fa fa-star"></i> Rate</button>
            <!-- Twitter Button -->   
		</div>

		<span title="Mert Salih Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
			<img alt="{{$user->firstname}}" src="{{$user->getAvatarURL()}}" class="twPc-avatarImg">
		</span>

		<div class="twPc-divUser">
			<div class="twPc-divName">
				<h3 class="twPc-StatValue">{{$user->getFirstname()}}</h3>
			</div>
			<span>
				<span>{{$user->physical_address}}</span>
			</span>
		</div>

		<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
						<span class="twPc-StatLabel twPc-block">Rating</span>
						<span class="twPc-StatValue">6320</span>
					
				</li>
				<li class="twPc-ArrangeSizeFit">
						<span class="twPc-StatLabel twPc-block">Views</span>
						<span class="twPc-StatValue">885</span>
					
				</li>
				<li class="twPc-ArrangeSizeFit">
						<span class="twPc-StatLabel twPc-block">Friends</span>
						<span class="twPc-StatValue">1.810</span>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- code end -->
</div>
</div>
@stop