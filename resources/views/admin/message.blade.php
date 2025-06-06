@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  </div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Fail!</strong> {{Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  </div>
@endif