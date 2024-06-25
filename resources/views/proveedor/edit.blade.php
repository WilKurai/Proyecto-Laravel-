<x-app-layout>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Proveedor</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('proveedor.update', $proveedor) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required>
                            </div>
                            <div class="form-group">
                                <label for="dirección">Dirección</label>
                                <textarea class="form-control" id="dirección" name="dirección" rows="3" required>{{ $proveedor->direccion }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $proveedor->telefono }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>
