@extends('layouts.mainlayout')

@section('breadcrumb')
<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
    <!--begin::Title-->
    <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Aseguradoras
        <!--begin::Separator-->
        <span class="h-20px border-gray-500 border-start mx-3"></span>
        <!--end::Separator-->
        <!--begin::Description-->
        <small class="text-gray-500 fs-7 fw-semibold my-1">Listado</small>
        <!--end::Description-->
    </h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection
@section('botones_superiores')
<!--begin::Actions-->
<div class="d-flex align-items-center">
    <!--begin::Button-->
    <a href="{{route('home')}}" class="btn btn-info me-3">
        <i class="fa fa-regular fa-arrow-left">
        </i>Regresar</a>
    <!--end::Button-->

</div>
<!--end::Actions-->
@endsection
@section('contenido')
<!--begin::Post-->
<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar aseguradora" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">



                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        <i class="ki-duotone ki-plus fs-2"></i>Agregar aseguradora</button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                </div>
                <!--end::Group actions-->

                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Agregar aseguradora</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body px-5 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_add_user_form" class="form" action="{{route('aseguradoras.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Nombre</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Estatus:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid fw-bold" name="activo" data-kt-select2="true" data-placeholder="Seleccionar opcion" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="false" required>
                                                <option value="1" selected>Activo</option>
                                                <option value="0">Inactivo</option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-10">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Guardar</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Add task-->

                <!--begin::Modal - Editar task-->
                <div class="modal fade" id="editarModal" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="editarModal_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Editar aseguradora</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body px-5 my-7">
                                <!--begin::Form-->
                                <form id="editarModal_form" class="form" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="editarModal_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#editarModal_header" data-kt-scroll-wrappers="#editarModal_scroll" data-kt-scroll-offset="300px">

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Nombre</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="nombre" id="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre" required />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Estatus:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid fw-bold" name="activo" id="activo" data-kt-select2="true" data-placeholder="Seleccionar opcion" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="false" required>
                                                <option value="1" selected>Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-10">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Guardar</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Editar task-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="tablaListado">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Nombre</th>
                        <th class="min-w-125px">Estado</th>
                        <th class=" min-w-100px">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @foreach($aseguradoras as $aseguradora)
                    <tr>
                        <td>{{$aseguradora->nombre}}</td>
                        <td> @if($aseguradora->activo==1)
                            <div class="badge badge-success fw-bold">Activo</div>
                            @else
                            <div class="badge badge-danger fw-bold">Inactivo</div>
                            @endif
                        </td>
                        <td>

                            <input type="hidden" value="{{route('aseguradoras.edit',$aseguradora->id)}}" id="url_editar{{$aseguradora->id}}">
                            <input type="hidden" value="{{route('aseguradoras.update',$aseguradora->id)}}" id="url_update{{$aseguradora->id}}">
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end" onclick="getInfo({{$aseguradora->id}})" title="Editar">
                                <i class="fa-duotone fa-solid fa-pen-to-square fs-2"></i>
                            </button>

                            <a href="javascript:borrado({{ $aseguradora->id }})" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                                <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-danger justify-content-end" title="Eliminar">
                                    <i class="fa-duotone fa-solid fa-trash fs-2"></i>
                                </button>
                            </a>
                            <form action="{{ route('aseguradoras.destroy', $aseguradora->id) }}"
                                method="post" name="formBorrar{{ $aseguradora->id }}"
                                id="formBorrar{{ $aseguradora->id }}">
                                @csrf
                                {{ method_field('DELETE') }}
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Post-->
@endsection
@section('scripts')
<script src="{{asset('js/aseguradoras/listado.js')}}"></script>
<script src="{{asset('js/aseguradoras/acciones.js')}}"></script>
@endsection