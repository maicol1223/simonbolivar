@extends('layouts.app')

@section('title','Editar productos')

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
						<form method="POST" action="{{ route('supplier.update',$supplier) }}">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Nombre del proveedor <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder=" Nombre del proveedor " autocomplete="off" value="{{ $supplier->name }}">
                                           
                                            <label class="control-label">Telefono <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="cell_number" placeholder=" Telefono " autocomplete="off" value="{{ $supplier->cell_number }}">
											<label class="control-label">Direccion <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="street_address" placeholder=" Direccion " autocomplete="off" value="{{ $supplier->street_address }}">

                                            
									</div>
								</div>
								<input type="hidden" class="form-control" name="registradopor" value="{{ Auth::user()->id }}">
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('supplier.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
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