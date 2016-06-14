
@if(Session::has('success'))
    <div class="col-sm-9 alert alert-success" role="alert">
        <h5><i class="fa fa-check"></i> {{ Session::get('success') }}</h5>
        
    </div>
@endif

@if(Session::has('info'))
    <div class="col-sm-9 alert alert-info" role="alert">
        <h5><i class="fa fa-info-cicle"></i> {{ Session::get('info') }}</h5>
        
    </div>
@endif

@if(Session::has('warning'))
    <div class="col-sm-9 alert alert-warning" role="alert">
        <h5><i class="fa fa-warning"></i> {{ Session::get('warning') }}</h5>
        
    </div>
@endif

@if(Session::has('danger'))
    <div class="col-lg-9 alert alert-danger" role="alert">
        <h5><i class="fa fa-minus-cicle"></i> {{ Session::get('danger') }}</h5>
        
    </div>
@endif