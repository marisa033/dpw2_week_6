@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Detail Data User</h1>
				</div>
				<div class="col-md-12">
					<h3>{{$user->nama}}</h3>
					<hr>
					<p>
						{{"@".$user->username}} |
						Email : {{$user->email}} 
					</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection