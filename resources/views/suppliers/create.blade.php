@extends('layouts.app')

@section('title', 'Crear Clientes')

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
                        <form method="POST" action="{{ route('supplier.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre del Proveedor <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Nombre del Proveedor" autocomplete="off" value="{{ old('name') }}" required minlength="3" maxlength="50" pattern="[A-Za-z\s]+">
                                            
                                            <label class="control-label">Teléfono <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="cell_number" placeholder="Teléfono" autocomplete="off" value="{{ old('cell_number') }}" required pattern="[0-9]{10}">
                                            
                                            <label class="control-label">Dirección <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="street_address" placeholder="Dirección" autocomplete="off" value="{{ old('street_address') }}" required minlength="5" maxlength="100">
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
                                        <a href="{{ route('supplier.index') }}" class="btn btn-danger btn-block btn-flat">Atrás</a>
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
