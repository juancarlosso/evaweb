@extends('layouts.mainlayout')

@section('breadcrumb')
<div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
    <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Home
        <span class="h-20px border-gray-500 border-start mx-3"></span>
        <small class="text-gray-500 fs-7 fw-semibold my-1">Bienvenido</small>
    </h1>
</div>
@endsection
@section('contenido')

<div class="col-xl-12">

<!--begin::Engage widget 1-->
<div class="card h-md-100" dir="ltr">
    <!--begin::Body-->
    <div class="card-body d-flex flex-column flex-center">
        <!--begin::Heading-->
        <div class="mb-2">
            <!--begin::Title-->
            <!-- <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                Have your tried <br> new
                <span class="fw-bolder"> Invoice Manager?</span>
            </h1> -->
            <!--end::Title-->

            <!--begin::Illustration-->
            <div class="py-10 text-center">
                    <img src="{{ asset('assets/media/misc/asistencias.png') }}" class="theme-light-show w-400px" alt="">
                    <img src="{{ asset('assets/media/misc/asistencias.png') }}" class="theme-dark-show  w-400px"  alt="">
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Heading-->


    </div>
    <!--end::Body-->
</div>
<!--end::Engage widget 1-->

     </div>

@endsection
@section('scripts')
@endsection
