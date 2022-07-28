@extends('admin.admin_master')
@section('admin')
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="page-content">
<div class="container-fluid">
    <h4 class="uppercase content-center text-center mb-5"> editar perfil</h4>
<center>
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">

          <div class="w-full  px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs
             font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
             border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
              focus:bg-white"
             id="name" type="text" name="name" value="{{$editData->name}}">
          </div>

          <div class="w-full  px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold
             mb-2" for="grid-first-name">
              Correo electronico
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
             border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
              focus:bg-white"
             id="email" type="email" name="email"  value="{{$editData->email}}">
          </div>
          <div class="w-full  px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Usuario
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
             border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
              focus:bg-white"
             id="username" type="text" name="username" value="{{$editData->username}}">
          </div>
          <div class="w-full md px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs
            font-bold mb-2" for="grid-first-name">
              Imagen de perfil
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
             border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
              focus:bg-white"
             id="profile_image" type="file" name="profile_image">
          </div>
<center>
          <div class="rounded w-full xl md:mb-0">
            <img class="ml-8 rounded-circle avatar-xl " id="showImage"
            src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">

          </div>
</center>
        </div>

        <button type="submit" value="Update Profile" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-3n">
            Actualizar
          </button>
    </form>
</center>




</div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
