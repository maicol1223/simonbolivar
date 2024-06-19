@extends('layouts.app')

@section('title', 'Roles y permisos - ' . $role->name)

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
						<div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <!-- Mostrar el nombre del rol -->
                                    <div class="form-group">
                                        <label class="control-label">Nombre del Rol:</label>
                                        <p>{{ $role->name }}</p>
                                    </div>
                                    <!-- Mostrar solo los permisos asignados -->
                                    <div class="form-group">
                                        <label class="control-label">Listas de permisos:</label>
                                        <ul>
                                           {!! Form::model($role, ['route' => ['role.update', $role],'method'=>'put']) !!}
                                           @foreach ($permisos as $permiso)
                                           <div>
                                            <label> 
                                                {!! Form::checkbox('permisos[]', $permiso ->id, $role->hasPermissionTo($permiso->id) ? :false, ['class'=>'mr-1']) !!}
                                                {{$permiso->name}}
                                            </label>
                                           </div>


                                           @endforeach

                                           {!! Form::submit('Asignar Permisos', ['class' =>'btn btn-primary mt-3']) !!}
                                           {!! Form::close() !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="card-footer">
							<div class="row">
								<div class="col-lg-2 col-xs-4">
									<a href="{{ route('role.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
