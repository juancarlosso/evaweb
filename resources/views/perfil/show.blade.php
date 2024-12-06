@extends('layouts.mainlayout')

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Mi perfil</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="/perfil"> <i data-feather="user"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Perfil</li>
                <li class="breadcrumb-item f-w-400 active">Editar perfil</li>
            </ol>
        </nav>
    </div>
@endsection


@section('contenido')
    @php $perfiles= config('constantes.perfiles'); @endphp
    <div class="card">
        <form id="frmDatos" method="post" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="row mb-2">
                    <div class="profile-title">
                        <div class="d-flex"> <img class="img-70 rounded-circle" alt=""
                                src="https://avatar.oxro.io/avatar.svg?name={{ auth()->user()->name }}&caps=3&bold=true">
                            <div class="flex-grow-1 mt-3 mx-2">
                                <h4 class="mb-1">{{ auth()->user()->name }}</h4>
                                <p>{{ config('constantes.perfiles')[auth()->user()->perfil] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12 mb-3 mt-2">
                        <div class="form-group">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', auth()->user()->name) }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ old('email', auth()->user()->email) }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-3 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Perfil</label>
                            <select class="select " name="perfil" id="perfil" disabled>
                                @foreach ($perfiles as $key => $perfil)
                                    <option value="{{ $key }}" {{auth()->user()->perfil == $perfil ? 'selected' :''}}> {{ $perfil }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="select" name="status" id="status" disabled>
                                <option value="0" {{ auth()->user()->status == 0 ? 'selected' : '' }}>Inactivo</option>
                                <option value="1" {{ auth()->user()->status == 1 ? 'selected' : '' }}>Activo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Cambiar Password (Debe contener al menos 6 caracteres)</label>

                            <input type="password" name="password" class="form-control" id="password">


                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Confirmar Password</label>

                            <input type="password" name="confirmar" class="form-control" id="confirmar">


                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between align-items-left ">
                        <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-success me-2"> Aceptar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
<!-- /add -->
