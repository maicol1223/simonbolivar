@extends('layouts.app')

@section('title','Crear Usuarios')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partial.msg')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-secondary">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{ route('usuario.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder=" Nombre del usuario " autocomplete="off" value="{{ old('name') }}">  
                                            <label class="control-label">Email <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="email" placeholder=" Email " autocomplete="off" value="{{ old('email') }}">
											<label class="control-label">Contraseña <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="password" placeholder=" email " autocomplete="off" value="{{ old('password') }}">

                                          
											
									
									</div>
								</div>
                  </div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('usuario.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection