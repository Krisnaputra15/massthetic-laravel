@extends('template.loginregister')
@section('judul')
Login Massthetic
@endsection
@section('konten')
<div class="card">
            <div class="body">
            @if(Session::has('alert_pesan'))
            <div class="alert alert-danger">
            {{Session('alert_pesan')}}
            </div>
            @endif
<div class="card" style="width: 34%; margin-left: 34%; margin-top: 6%;">
	<div class="card-header" style="background-color: black; color: white; height: 70px;">
		Tutorial Bootstrap 4
	</div>
 
	<div class="card-body">
		
    <form method="POST" action="{{url('login-proses')}}">
		{{ csrf_field() }}
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-danger" style="margin-left: 20%;">
					</div>
				</form>
	</div>
 
	<div class="card-footer">
		www.malasngoding.com
	</div>
</div>
@stop