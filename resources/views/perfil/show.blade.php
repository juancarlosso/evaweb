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
<!--begin::Post-->
<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Perfil-->
    <div class="card card-flush h-lg-100" id="kt_contacts_main">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_chat_contacts_header">
            <!--begin::Card title-->
            <div class="card-title">
                <i class="fa-regular fa-address-card fs-2 me-2"></i>
                <h2>Perfil</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            <form id="kt_ecommerce_settings_general_form frmDatos" class="form" method="post" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
                @csrf
                <!--begin::Row-->
                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                    <!--begin::Col-->
                    <div class="col" style="display: flex; justify-content: center;">
                        <!--begin::Image input wrapper-->
                        <div class="mt-10">
                            <!--begin::Image placeholder-->
                            <style>
                              
                            </style>
                            <!--end::Image placeholder-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                @if (auth()->user()->foto )
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-300px h-300px" style="background-image: url({{asset(auth()->user()->foto)}})"></div>
                                <!--end::Preview existing avatar-->
                                @else
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-300px h-300px" style="background-image: url('https://avatar.oxro.io/avatar.svg?name={{auth()->user()->name}}&caps=3&bold=true')"></div>
                                <!--end::Preview existing avatar-->
                                @endif
                                <!--begin::Edit-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Subir Foto">
                                    <i class="ki-outline ki-pencil fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name='foto' value=''
                                        accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancelar">
                                    <i class="ki-outline ki-cross fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Eliminar foto">
                                    <i class="ki-outline ki-cross fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Image input wrapper-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Nombre</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="name" value="{{ old('name', auth()->user()->name) }}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Email</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" class="form-control form-control-solid" name="email" value="{{ old('email', auth()->user()->email) }}" readonly>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Perfil</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select form-select-solid form-control" data-control="select2" name="perfil" id="perfil" disabled>
                                @php $perfiles= config('constantes.perfiles'); @endphp
                                @foreach ($perfiles as $key => $perfil)
                                <option value="{{ $key }}" {{auth()->user()->perfil == $perfil ? 'selected' :''}}> {{ $perfil }}
                                </option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Status</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select form-select-solid form-control" data-control="select2" name="status" id="status" disabled>
                                <option value="0" {{ auth()->user()->status == 0 ? 'selected' : '' }}>Inactivo</option>
                                <option value="1" {{ auth()->user()->status == 1 ? 'selected' : '' }}>Activo</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Cambiar Password</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Debe contener al menos 6 caracteres">
                                    <i class="ki-outline ki-information fs-7"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" class="form-control form-control-solid" name="password">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Confirmar Password</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Debe ser la misma que la anterior">
                                    <i class="ki-outline ki-information fs-7"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" class="form-control form-control-solid" name="confirmar">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Row-->
                </div>
                <!--end::Row-->
                <!--begin::Separator-->
                <div class="separator mb-6"></div>
                <!--end::Separator-->
                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href='{{route('home')}}' id="kt_ecommerce_add_product_cancel" class="btn btn-light me-3">Cancelar</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span>Aceptar</span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Action buttons-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Perfil-->
</div>
@endsection
<!-- /add -->