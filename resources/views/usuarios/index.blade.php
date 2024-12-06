@extends('layouts.mainlayout')
@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Usuarios</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="/usuarios"> <i data-feather="users"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Usuarios</li>
                <li class="breadcrumb-item f-w-400 active">Listado de Usuarios</li>
            </ol>
        </nav>
    </div>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Listado de usuarios</h4>
                  </div>
                <div class="card-body">
                    <div class="users-header text-end">

                        <a class="btn btn-primary" href="{{route('usuarios.create')}}"><i class="fa fa-plus"></i>Agregar</a>

                    </div>
                    <div class="users-product mt-3">
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                            <div class="table-responsive">
                                <table class="table datatable-table" id="project-status">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                            <th>Perfil</th>
                                            <th>Status</th>
                                            <th>Opción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>{{ $usuario->name }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>{{ config('constantes.perfiles')[$usuario->perfil] }}</td>
                                                <td>
                                                    @if ($usuario->status == 1)
                                                        <span class="badge badge-light-secondary">ACTIVO</span>
                                                    @else
                                                        <span class="badge badge-light-primary">INACTIVO</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="me-3" href="{{ route('usuarios.edit', $usuario->id) }}">
                                                        <i class="fa-duotone fa-pencil text-info fa-lg"></i>
                                                    </a>
                                                    <a class="me-3 confirm-text"
                                                        href="javascript:borrado({{ $usuario->id }})" title='Eliminar'>
                                                        <i class="fa-duotone fa-trash-xmark text-danger fa-lg"></i>
                                                    </a>
                                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                        method="post" name="formBorrar{{ $usuario->id }}"
                                                        id="formBorrar{{ $usuario->id }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $usuarios->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- /user list -->
@section('scripts')
    <script>
        /*
         *
         * @brief
         * @author Jorge Ibarra
         * @param string
         * @return
         *
         */
        function borrado(id) {
            Swal.fire({
                title: '¿Eliminar el Usuario?',
                text: "Todo lo que haya realizado con este usuario sera eliminado y no se podrá recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cerrar', 
            }).then((result) => {
                if (result.isConfirmed) {
                    var formulario = "#formBorrar" + id;
                    $(formulario).submit();
                }
            })
        }
    </script>
@endsection
