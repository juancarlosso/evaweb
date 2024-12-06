@extends('layouts.app')

@section('titulo')
 Perfil
@endsection

@section('migajas')
  <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Cambiar Password</li>
  </ol>
@endsection

@section('contenido')
<div class="row">
   <div class="col-sm-12">
       <div class="card border card-border-light">
           <div class="card-header align-items-center d-flex bg-soft-info">
               <h4 class="card-title mb-0 flex-grow-1">Cambiar Password</h4>
               <div class="flex-shrink-0">
               </div>
           </div>
           <form id="frmDatos" method="post" action="{{ route('perfil.update.pwd') }}" enctype="multipart/form-data">
           @csrf
           <div class="card-body">
              <div class="row">
                 <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible bg-warning text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Tu nuevo password debe tener lassiguientes reglas: </strong><br>
                        * Por lo menos 6 caracteres de longitud<br>
                        * Al menos una letras minúscula (a,b,c,d,etc..)<br>
                        * Al menos una letra mayúscula ( A,B,C,D, etc..)<br>
                        * Al menos un número ( 0,1,2,3, etc.. )
                    </div>
                 </div>
              </div>
              <div class="row">
                   <div class="col-md-6">
                       <div class="mb-3">
                           <label for="firstNameinput" class="form-label">Nuevo Password</label>
                           <input type="password" class="form-control" placeholder="" id="password" name="password" value="">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="mb-3">
                           <label for="firstNameinput" class="form-label">Confirmar nuevo Password</label>
                           <input type="password" class="form-control" placeholder="" id="password_confirmation" name="password_confirmation" value="">
                       </div>
                   </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                   <button type="submit" class="btn btn-success waves-effect waves-light bx-pull-right">
                      <i class="fas fa-check"></i> Actualizar
                   </button>
                </div>
              </div>
           </div>
           </form>
       </div>
   </div>
</div>
@endsection