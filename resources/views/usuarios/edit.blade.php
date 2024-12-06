@extends('layouts.mainlayout')
@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Usuarios</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="/usuarios"> <i data-feather="users"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Usuarios</li>
                <li class="breadcrumb-item f-w-400 active">Editar Usuario</li>
            </ol>
        </nav>
    </div>
@endsection
@section('contenido')
    @php $perfiles= config('constantes.perfiles'); @endphp
    <div class="card">
        <div class="card-header">
            <h4>Editar usuario</h4>
        </div>
        <div class="card-body">
            <form id="frmDatos" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post"
                action="{{ route('usuarios.update', $usuario->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label">Nombre <span class="manitory">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $usuario->name) }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label">Email <span class="manitory">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $usuario->email) }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label">Perfil</label>

                            <select class="select2" name="perfil" id="perfil" onchange="mostrarCliente(this)">
                                @foreach ($perfiles as $key => $perfil)
                                    <option value="{{ $key }}" @selected(old('perfil', $usuario->perfil) == $key)> {{ $perfil }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 mb-3 mt-2" id="divClientes" style="display: {{$usuario->perfil != 1 ? 'block' : 'none'}};">
                        <div class="form-group">
                            <label class="form-label">Cliente</label>
                            <select  class="select2" name="cliente_id" id="cliente" >
                                <option value="">Selecciona un cliente</option>
                               @foreach($clientes as $cliente)
                                    <option value="{{$cliente->id}}"  @selected($usuario->cliente_id == $cliente->id)>{{$cliente->empresa}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="select2" name="status" id="status">
                                <option value="0" @selected(old('status', $usuario->status) == 0)>Inactivo</option>
                                <option value="1" @selected(old('status', $usuario->status) == 1)>Activo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between align-items-left">
                        <a href="{{ route('usuarios.index') }}" class="btn btn-danger">
                            <i class="fa-duotone fa-times m-1"></i>Cancelar
                        </a>
                        <button type="submit" class="btn  me-2 btn-success">
                            <i class="fa-duotone fa-check m-1"></i> Aceptar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
<!-- /add -->
@section('scripts')
        <script>
            function mostrarCliente(el){
                let perfil=el.value;
                $('#divClientes').hide();

                $('#cliente').attr('required',false);
                if(perfil != 1){
                    $('#divClientes').show();
                    $('#cliente').attr('required',true);
                }
            }   

        </script>
    @endsection
