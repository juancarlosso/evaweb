@extends('layouts.mainlayout')

@section('breadcrumb')
<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
    <!--begin::Title-->
    <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Clientes
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
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Buscar Cuenta Especial" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filtro</button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Opciones</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->
                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Estado:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Seleccionar opcion" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                    <option></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Resetear</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Aplicar</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->

                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        <i class="ki-duotone ki-plus fs-2"></i>Agregar Cuenta Especial</button>
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
                                <h2 class="fw-bold">Agregar Cuenta Especial</h2>
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
                                <form id="kt_modal_add_user_form" class="form" action="{{route('cuentas_especiales.store')}}" method="post" enctype="multipart/form-data">
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
                                            <label class="required fw-semibold fs-6 mb-2">Cliente</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid fw-bold" name="cliente_id" data-kt-select2="true" data-placeholder="Seleccionar opcion" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="false" required>
                                                <option value=""></option>
                                                @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->razon_social}}</option>
                                                @endforeach

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
                                <h2 class="fw-bold">Editar Cuenta Especial</h2>
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
                                            <label class="required fw-semibold fs-6 mb-2">Cliente</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid fw-bold" name="cliente_id" id="cliente_id" data-kt-select2="true" data-placeholder="Seleccionar opcion" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="false" required>
                                                <option value=""></option>
                                                @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->razon_social}}</option>
                                                @endforeach

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
                        <th class="min-w-125px">Cliente</th>
                        <th class=" min-w-100px">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @foreach($cuentas_especiales as $cuenta_especial)
                    <tr>
                        <td>{{$cuenta_especial->nombre}}</td>
                        <td>{{$cuenta_especial->cliente->razon_social ?? ''}}</td>

                        <td>

                            <input type="hidden" value="{{route('cuentas_especiales.edit',$cuenta_especial->id)}}" id="url_editar{{$cuenta_especial->id}}">
                            <input type="hidden" value="{{route('cuentas_especiales.update',$cuenta_especial->id)}}" id="url_update{{$cuenta_especial->id}}">
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end" onclick="getInfo({{$cuenta_especial->id}})" title="Editar">
                                <i class="fa-duotone fa-solid fa-pen-to-square fs-2"></i>
                            </button>

                            <a href="javascript:borrado({{ $cuenta_especial->id }})" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                                <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-danger justify-content-end" title="Eliminar">
                                    <i class="fa-duotone fa-solid fa-trash fs-2"></i>
                                </button>
                            </a>

                            <form action="{{ route('cuentas_especiales.destroy', $cuenta_especial->id) }}"
                                method="post" name="formBorrar{{ $cuenta_especial->id }}"
                                id="formBorrar{{ $cuenta_especial->id }}">
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
<script src="{{asset('js/cuentas_especiales/listado.js')}}"></script>
<script src="{{asset('js/cuentas_especiales/acciones.js')}}"></script>
@endsection