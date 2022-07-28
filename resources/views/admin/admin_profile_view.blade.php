@extends('admin.admin_master')
@section('admin')
<script src="https://cdn.tailwindcss.com"></script>
<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-5">
        <center>

            <img src="{{ asset('backend/assets/images/small/img-5.jpg')}}"
             class=" mb-5 mt-5 rounded-circle avatar-xl" alt="Card image cap">

        </center>
        <div class="card-body">
            <h4 class="card-title text-blue-400 mb-3 shadow-sm text-lx uppercase">Usuario: {{$adminData ->username}}</h4>
            <h4 class="card-title text-blue-400 mb-3 shadow-sm text-lx uppercase">Nombre: {{$adminData ->name}}</h4>
            <h4 class="card-title text-blue-400 mb-3 shadow-sm text-lx uppercase">Correo: {{$adminData ->email}}</h4>
            <h4 class="card-title text-blue-400 mb-3 shadow-sm text-lx uppercase">Puesto: </h4>
<center>
    <a class="btn btn-rounded btn-info"href="{{ route('edit.profile')}}">Editar perfil</a>
</center>

        </div>

        </div>
    </div>
</div>




</div>
</div>
@endsection
